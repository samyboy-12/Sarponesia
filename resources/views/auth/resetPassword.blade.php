<link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}" />

<body class="flex-column">
<section class="forgot-password resetPasswordSection">
    <div class="content_box1">
        <div class="flex_col">
            <div class="flex_col1">
                <h1 class="title">Reset your password</h1>
            </div>
                <form action="{{ route('password.update') }}" method="post">
                    @csrf

                    <!-- Token Reset Password -->
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}" >

                    <!-- Input Field for Password -->
                    <div class="mb-4">
                        <input type="password" name="password" placeholder="Password"
                               class="input @error('password') ring-red-500 @enderror">

                        <!-- Error Message for Password -->
                        @error('password')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Field for Confirm Password -->
                    <div class="mb-8">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                               class="input @error('password') ring-red-500 @enderror">
                    </div>

                    <input type="submit" id="reset" name="reset" value="Reset Password" class="resetPasswordButton">
                </form>
            </div>
        </div>
</section>
</body>
