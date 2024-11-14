

<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">

    <section class="login-page-user welcomeSection">
      <div class="flexRow">
        <div class="flexColumn">
          <h1 class="heroTitle">Selamat Datang </h1>
          <h2 class="accountInfoInstruction">Buat akunmu untuk dapat mengakses lebih lengkap di Sarponesia</h2>
          <div>
            <form action="/action_page.php">
              <input type="text" id="Email" name="email" placeholder="Email">
              <input type="text" id="Username" name="username" placeholder="Username">
              <input type="text" id="Password" name="password" placeholder="Kata Sandi">
              <input type="text" id="Confirm" name="confirm" placeholder="Konfirmasi Kata Sandi">
            </form>
          </div>

          <input type="submit" id="login" name="login" value="Sign In">

        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
      </div>
    </section>


</body>