<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">
    <section class="login-page-user welcomeSection">
        <div class="flexRow">
            <div class="flexColumn">
                <h1 class="heroTitle">Selamat Datang</h1>
                <h2 class="accountInfoInstruction">Buat akunmu untuk dapat mengakses lebih lengkap di Sarponesia</h2>

                <!-- Tempat flash message -->
                <div id="flashMessage" class="alert" style="display: none;"></div>

                <div>
                    <form id="registerForm">
                        @csrf
                        <input type="text" id="Email" name="email" placeholder="Email">
                        <div class="error-message" id="emailError"></div>

                        <input type="text" id="Username" name="name" placeholder="Username">
                        <div class="error-message" id="nameError"></div>

                        <input type="password" id="Password" name="password" placeholder="Kata Sandi">
                        <div class="error-message" id="passwordError"></div>

                        <input type="password" id="Confirm" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
                        <div class="error-message" id="passwordConfirmationError"></div>

                        <input type="submit" id="login" name="login" value="Sign Up">
                    </form>
                </div>
            </div>
            <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
        </div>
    </section>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Bersihkan error sebelumnya
            document.querySelectorAll('.error-message').forEach(el => el.innerText = '');

            const formData = {
                name: document.getElementById('Username').value,
                email: document.getElementById('Email').value,
                password: document.getElementById('Password').value,
                password_confirmation: document.getElementById('Confirm').value,
                _token: '{{ csrf_token() }}'
            };

            try {
                const response = await fetch("{{ route('registrasi') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": formData._token
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (response.ok) {
                    alert(data.message);
                    window.location.href = data.route;
                } else {
                    if (data.errors) {
                        for (const key in data.errors) {
                            const errorDiv = document.getElementById(`${key}Error`);
                            if (errorDiv) errorDiv.innerText = data.errors[key][0];
                        }
                    } else if (data.message) {
                        showFlash(data.message, 'alert-danger');
                    }
                }
            } catch (error) {
                showFlash("Terjadi kesalahan. Silakan coba lagi.", 'alert-danger');
            }
        });

        function showFlash(message, type = 'alert-success') {
            const flash = document.getElementById('flashMessage');
            flash.innerText = message;
            flash.className = `alert ${type}`;
            flash.style.display = 'block';
        }
    </script>
</body>
