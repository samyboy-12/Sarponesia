<link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}" />

<body class="flex-column">
    <section class="forgot-password resetPasswordSection">
        <div class="content_box1">
            <div class="flex_col">
                <div class="flex_col1">
                    <h1 class="resetPasswordTitle">Atur Ulang Kata Sandi</h1>
                    <h2 class="resetPasswordInstruction">
                        Masukkan email dan kata sandi baru Anda di bawah ini
                    </h2>
                </div>

                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    {{-- Token reset dari URL --}}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <input type="email" id="Email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                    <input type="password" id="Password" name="password" placeholder="Kata Sandi Baru">
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                    <input type="password" id="ConfirmPassword" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
                    @error('password_confirmation')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                    <input type="submit" id="reset" name="reset" value="Ubah Kata Sandi" class="resetPasswordButton">
                </form>

                {{-- Flash message success/error --}}
                @if (session('status'))
                    <div class="alert alert-success" id="flashMessage">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" id="flashMessage">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Optional popup alert --}}
    @if (session('status'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                alert("{{ session('status') }}");
            });
        </script>
    @endif
</body>
