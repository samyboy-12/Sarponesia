<link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}" />

<body class="flex-column">
    <section class="forgot-password resetPasswordSection">
        <div class="content_box1">
            <div class="flex_col">
                <div class="flex_col1">
                    <h1 class="resetPasswordTitle">Atur Ulang Kata Sandi</h1>
                    <h2 class="resetPasswordInstruction">
                        Masukkan kredensial di bawah untuk mengatur ulang kata sandi Anda
                    </h2>
                </div>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email', request()->email) }}" required>
                    <input type="password" id="password" name="password" placeholder="Kata Sandi Baru" required>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                    <input type="submit" id="reset" name="reset" value="Reset Password" class="resetPasswordButton">
                </form>
            </div>
        </div>
    </section>
</body>
