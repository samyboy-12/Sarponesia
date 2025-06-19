<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sarponesia</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />
</head>
<body class="flex-column">
    <section class="login-page-user welcomeSection">
        <div class="flexRow">
            <div class="flexColumn">
                <h1 class="heroTitle">Selamat Datang Kembali!</h1>
                <h2 class="accountInfoInstruction">Isikan informasi akun anda dengan benar untuk dapat mengakses akun di Sarponesia</h2>
                <div>
                    <form id="loginForm">
                        @csrf
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                        <input type="submit" id="login" name="login" value="Login">
                    </form>
                    <div id="errorMessage" style="color: red; display: none;"></div>
                </div>
                <p class="forgotPasswordText">
                    <a href="{{ route('password.request') }}" style="text-decoration: none;">Lupa Kata Sandi?</a>
                </p>
                <h2 class="accountCreationPrompt_box">
                    <span class="accountCreationPrompt">
                        <span class="accountCreationPrompt_span0">Belum memiliki akun? </span>
                        <a href="{{ route('registrasi') }}" class="accountCreationPrompt_span1">Buat akun</a>
                    </span>
                </h2>
            </div>
            <img class="welcomeImage" src="{{ asset('assets/c1ae8a2aea691a6114fc609fb781c377.png') }}" alt="Welcome Image" />
        </div>
    </section>

    <script>
        document.getElementById('loginForm').addEventListener('submit', async function (event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessageDiv = document.getElementById('errorMessage');
            const csrfToken = document.querySelector('input[name="_token"]').value;

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({ email, password }),
                });

                const data = await response.json();

                if (response.ok) {
                    localStorage.setItem('token', data.data.token);
                    window.location.href = '/home';
                } else {
                    errorMessageDiv.textContent = data.message || 'An error occurred. Please try again.';
                    errorMessageDiv.style.display = 'block';
                }
            } catch (error) {
                errorMessageDiv.textContent = 'Network error. Please try again later.';
                errorMessageDiv.style.display = 'block';
            }
        });
    </script>
</body>
</html>