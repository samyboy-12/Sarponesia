<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">
    <section class="login-page-user welcomeSection">
        <div class="flexRow">
            <div class="flexColumn">
                <h1 class="heroTitle">Selamat Datang Kembali !</h1>
                <h2 class="accountInfoInstruction">Isikan informasi akun anda dengan benar untuk dapat mengakses akun di Sarponesia</h2>
                <div>
                    <form id="loginForm">
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
            <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
        </div>
    </section>

    <script>
        document.getElementById('loginForm').addEventListener('submit', async function (event) {
            event.preventDefault(); // Prevent default form submission

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessageDiv = document.getElementById('errorMessage');

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ email, password }),
                });

                const data = await response.json();

                if (response.ok) {
                    // Store the JWT token (e.g., in localStorage or sessionStorage)
                    localStorage.setItem('token', data.token);
                    // Redirect to a dashboard or home page
                    window.location.href = '/home'; // Adjust the redirect URL as needed
                } else {
                    // Display error message
                    errorMessageDiv.textContent = data.error || 'An error occurred. Please try again.';
                    errorMessageDiv.style.display = 'block';
                }
            } catch (error) {
                // Handle network or other errors
                errorMessageDiv.textContent = 'An error occurred. Please try again.';
                errorMessageDiv.style.display = 'block';
            }
        });
    </script>
</body>