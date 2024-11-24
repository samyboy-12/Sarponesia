<?php

namespace App\Http\Controllers\Auth;

use Iluminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.Register');
    }
    // Proses registrasi
    public function register(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        // Register
        User::create($fields);
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function showLoginForm()
    {
        return view('auth.LoginPageUser');
    }
    // Proses login
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($fields)) {
            return redirect()->intended('LandingPage');
            //inteded agar kembali ke halaman sebelum klik login
        }
        return back()->withErrors(['error' => 'Login gagal. Silahkan Coba Lagi.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/LandingPage');

    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgotPassword');
    }
    // Proses permintaan reset password
    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => ['required', 'email']]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => 'Link reset password telah dikirim ke email anda'])
            : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset(string $token) {
        return view('auth.resetPassword', ['token' => $token]);
    }

    public function passwordUpdate(Request $request) {
        $credentials = $request->validate([
            'token' => 'required',
            'email' => ['required','email'],
            'password' => ['required','confirmed'],
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

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
