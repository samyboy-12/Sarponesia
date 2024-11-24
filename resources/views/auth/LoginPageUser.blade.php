<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">

    <section class="login-page-user welcomeSection">
      <div class="flexRow">
        <div class="flexColumn">
          <h1 class="heroTitle">Selamat Datang Kembali !</h1>
          <h2 class="accountInfoInstruction">Isikan informasi akun anda dengan benar untuk dapat mengakses akun di Sarponesia</h2>
          <div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <input type="text" id="Email" name="email" placeholder="Email">
                <input type="password" id="Password" name="password" placeholder="Kata Sandi">
                <input type="submit" id="login" name="login" value="Login">
            </form>
          </div>
            
          <p class="forgotPasswordText">
            <a href="{{ route('password.request') }}" style="text-decoration: none;">Lupa Kata Sandi?</a>
          </p>

          
          <h2 class="accountCreationPrompt_box">
            <span class="accountCreationPrompt">
              <span class="accountCreationPrompt_span0">Belum memiliki akun? </span>
              <a href="{{ route('register') }}" class="accountCreationPrompt_span1">Buat akun</a>
            </span>
          </h2>
        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
      </div>
    </section>
</body>
