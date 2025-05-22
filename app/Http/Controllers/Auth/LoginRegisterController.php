<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginRegisterController
{
    public function showRegisterForm()
    {
        return view('auth.Registrasi');
    }

    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $fields['password'] = Hash::make($fields['password']);

        User::create($fields);

        return response()->json([
            'message' => 'Account successfully created. Please login.',
            'route' => route('login')
        ], 201);
    }

    public function showLoginForm()
    {
        return view('auth.LoginPageUser');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($fields)) {
            return response()->json([
                'message' => 'Login successful',
                'redirect' => route('home')
            ], 200);
        }

        return response()->json([
            'error' => 'Login failed. Please try again.',
            'loginError' => true
        ], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.Reset');
    }

    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => ['required', 'email']]);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        return back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset(string $token)
    {
        return view('auth.ConfirmReset', ['token' => $token]);
    }

    public function passwordUpdate(Request $request)
    {
        $credentials = $request->validate([
            'token' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        }

        return back()->withErrors(['email' => [__($status)]]);
    }
}
