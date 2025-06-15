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
                <!-- Flash message container -->
                <div id="flashMessage" class="alert" style="display: none;"></div>
                <form id="resetPasswordForm">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email', request()->email) }}" required>
                    <div class="error-message" id="emailError"></div>
                    <input type="password" id="password" name="password" placeholder="Kata Sandi Baru" required>
                    <div class="error-message" id="passwordError"></div>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                    <div class="error-message" id="passwordConfirmationError"></div>
                    <input type="submit" id="reset" name="reset" value="Reset Password" class="resetPasswordButton">
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(el => el.innerText = '');

            const formData = {
                token: document.querySelector('input[name="token"]').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                password_confirmation: document.getElementById('password_confirmation').value,
                _token: document.querySelector('input[name="_token"]').value
            };

            try {
                const response = await fetch('/api/password/update', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    body: JSON.stringify({
                        token: formData.token,
                        email: formData.email,
                        password: formData.password,
                        password_confirmation: formData.password_confirmation
                    })
                });

                const data = await response.json();

                if (response.ok) {
                    // Show success message
                    showFlash(data.message, 'alert-success');
                    // Redirect to login page
                    setTimeout(() => {
                        window.location.href = data.redirect || '/login';
                    }, 1000);
                } else {
                    if (data.errors) {
                        // Display validation errors
                        for (const key in data.errors) {
                            const errorDiv = document.getElementById(`${key}Error`);
                            if (errorDiv) {
                                errorDiv.innerText = data.errors[key][0];
                            }
                        }
                    } else {
                        showFlash(data.error || 'Failed to reset password. Please try again.', 'alert-danger');
                    }
                }
            } catch (error) {
                showFlash('Terjadi kesalahan. Silakan coba lagi.', 'alert-danger');
            }
        });

        function showFlash(message, type = 'alert-success') {
            const flash = document.getElementById('flashMessage');
            flash.innerText = message;
            flash.className = `alert ${type}`;
            flash.style.display = 'block';
            // Hide flash message after 5 seconds
            setTimeout(() => {
                flash.style.display = 'none';
            }, 5000);
        }
    </script>
</body>