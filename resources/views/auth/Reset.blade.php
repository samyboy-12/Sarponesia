
<link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}" />
<body class="flex-column">

    <section class="forgot-password resetPasswordSection">
      <div class="content_box1">
        <div class="flex_col">
          <div class="flex_col1">
            <h1 class="resetPasswordTitle">Atur Ulang Kata Sandi</h1>
            <h2 class="resetPasswordInstruction">Masukkan kredensial di bawah untuk mengatur ulang kata sandi Anda</h2>
          </div>
          <form action="{{ route('password.request') }}" method="POST">
            @csrf
            <input type="text" id="Email" name="email" placeholder="Email">
            <input type="submit" id="reset" name="reset" value="Reset Password" class="resetPasswordButton">
          </form>
          @if (session('status'))
            <div class="alert alert-success" id="flashMessage">
              {{ session('status') }}
            </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger" id="flashMessage">
              {{ $errors->first('email') }}
            </div>
          @endif
        </div>
      </div>
    </section>
    @if (session('status'))
      <script>
          document.addEventListener("DOMContentLoaded", function () {
          alert("{{ session('status') }}");
          });
      </script>
    @endif
  </body>