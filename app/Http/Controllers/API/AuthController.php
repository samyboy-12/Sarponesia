<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController 
{
    // --- Metode untuk Autentikasi Web ---

    public function showLoginForm()
    {
        return view('auth.LoginPageUser'); // Sesuaikan dengan nama view Blade Anda
    }

    public function showRegisterForm()
    {
        return view('auth.Registrasi'); // Sesuaikan dengan nama view registrasi
    }

    public function showForgotPasswordForm()
    {
        return view('auth.Reset'); // Sesuaikan dengan nama view reset password
    }

    public function passwordReset($token)
    {
        return view('auth.Reset', ['token' => $token]); // Kirim token ke view reset password
    }

    public function loginWeb(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    public function registerWeb(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'nullable|string|in:user,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user',
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function logoutWeb(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }

    // --- Metode untuk Autentikasi API (tetap sama) ---

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'role' => 'nullable|string|in:user,admin',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role ?? 'user',
            ]);

            $token = $user->createToken('api-token')->plainTextToken;

            return BaseResponse::send(201, 'success', 'User registered successfully', [
                'user' => $user,
                'token' => $token,
            ]);
        } catch (ValidationException $e) {
            return BaseResponse::send(422, 'error', 'Validation failed', $e->errors());
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (!Auth::attempt($request->only('email', 'password'))) {
                return BaseResponse::send(401, 'error', 'The provided credentials are incorrect.');
            }

            $user = Auth::user();
            $token = $user->createToken('api-token')->plainTextToken;

            return BaseResponse::send(200, 'success', 'Login successful', [
                'user' => $user,
                'token' => $token,
            ]);
        } catch (ValidationException $e) {
            return BaseResponse::send(422, 'error', 'Validation failed', $e->errors());
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return BaseResponse::send(200, 'success', 'Logged out successfully');
    }

    public function me(Request $request)
    {
        return BaseResponse::send(200, 'success', 'User retrieved', $request->user());
    }

    public function passwordEmail(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink($request->only('email'));

            return $status === Password::RESET_LINK_SENT
                ? BaseResponse::send(200, 'success', 'Password reset link sent')
                : BaseResponse::send(400, 'error', 'Unable to send reset link');
        } catch (ValidationException $e) {
            return BaseResponse::send(422, 'error', 'Validation failed', $e->errors());
        }
    }

    public function passwordUpdate(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill(['password' => Hash::make($password)])->save();
                }
            );

            return $status === Password::PASSWORD_RESET
                ? BaseResponse::send(200, 'success', 'Password reset successfully')
                : BaseResponse::send(400, 'error', 'Unable to reset password');
        } catch (ValidationException $e) {
            return BaseResponse::send(422, 'error', 'Validation failed', $e->errors());
        }
    }
}