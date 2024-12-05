<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">

    <section class="login-page-user welcomeSection">
      <div class="flexRow">
        <div class="flexColumn">
          <h1 class="heroTitle">Selamat Datang </h1>
          <h2 class="accountInfoInstruction">Buat akunmu untuk dapat mengakses lebih lengkap di Sarponesia</h2>

          <!-- Flash Messages -->
          @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
          @endif

          <div>
            <form action="{{ route('registrasi') }}" method="POST">
              @csrf
              <input type="text" id="Email" name="email" placeholder="Email">
              @error('email')
                <div class="error-message">{{ $message }}</div>
              @enderror

              <input type="text" id="Username" name="name" placeholder="Username">
              @error('name')
                <div class="error-message">{{ $message }}</div>
              @enderror

              <input type="text" id="Password" name="password" placeholder="Kata Sandi">
              @error('password')
                <div class="error-message">{{ $message }}</div>
              @enderror

              <input type="text" id="Confirm" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
              @error('password_confirmation')
                <div class="error-message">{{ $message }}</div>
              @enderror

              <input type="submit" id="login" name="login" value="Sign Up">
            </form>
          </div>
        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
      </div>
    </section>

        <!-- JavaScript untuk menampilkan flash message sebagai popup -->
      <script>
        @if(session('success'))
          window.onload = function() {
              alert("{{ session('success') }}");
          }
        @endif
      </script>

</body>
