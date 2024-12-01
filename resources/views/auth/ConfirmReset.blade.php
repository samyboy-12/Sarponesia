
<link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}" />
<body class="flex-column">

    <section class="forgot-password resetPasswordSection">
      <div class="content_box1">
        <div class="flex_col">
          <div class="flex_col1">
            <h1 class="resetPasswordTitle">Atur Ulang Kata Sandi</h1>
            <h2 class="resetPasswordInstruction">Masukkan kredensial di bawah untuk mengatur ulang kata sandi Anda</h2>
          </div>
          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ request()->email }}">
            <input type="text" id="Kata Sandi Baru" name="password" placeholder="Kata Sandi Baru">
            <input type="text" id="Konfirmasi Kata Sandi" name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
            <input type="submit" id="reset" name="reset" value="Reset Password" class="resetPasswordButton">
        </form>
        </div>
      </div>
    </section>


  </body>