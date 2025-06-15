<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">
    <section class="login-page-user welcomeSection">
        <div class="flexRow">
            <div class="flexColumn">
                <h1 class="heroTitle">Selamat Datang</h1>
                <h2 class="accountInfoInstruction">Buat akunmu untuk dapat mengakses lebih lengkap di Sarponesia</h2>

                <!-- Flash message container -->
                <div id="flashMessage" class="alert" style="display: none;"></div>

                <div>
                    <form id="registerForm">
                        @csrf
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <div class="error-message" id="emailError"></div>

                        <input type="text" id="name" name="name" placeholder="Username" required>
                        <div class="error-message" id="nameError"></div>

                        <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                        <div class="error-message" id="passwordError"></div>

                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                        <div class="error-message" id="passwordConfirmationError"></div>

                        <input type="submit" id="submit" name="submit" value="Sign Up">
                    </form>
                </div>
            </div>
            <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="Welcome image" />
        </div>
    </section>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(el => el.innerText = '');

            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                password_confirmation: document.getElementById('password_confirmation').value,
                _token: document.querySelector('input[name="_token"]').value
            };

            try {
                const response = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': formData._token
                    },
                    body: JSON.stringify({
                        name: formData.name,
                        email: formData.email,
                        password: formData.password,
                        password_confirmation: formData.password_confirmation
                    })
                });

                const data = await response.json();

                if (response.ok) {
                    // Store JWT token in localStorage
                    localStorage.setItem('token', data.token);
                    // Show success message
                    showFlash(data.message, 'alert-success');
                    // Redirect to dashboard or another page
                    setTimeout(() => {
                        window.location.href = '/home'; // Adjust redirect URL as needed
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
                        showFlash(data.message || 'Registration failed. Please try again.', 'alert-danger');
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
            // Optionally hide flash message after a few seconds
            setTimeout(() => {
                flash.style.display = 'none';
            }, 5000);
        }
    </script>
</body>