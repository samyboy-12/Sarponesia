@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/JasaKebunKopi.css') }}" />
@endsection

@section('main')
<main class="jasa-kebun mainSection">
  <div class="content">
    <section class="heroSection" style="--src:url(/assets/imgbuahbg.png)">
      <img class="decorativeImageFig" src="/assets/imgbuah.png" alt="alt text" />
      <div class="flexibleColumnDiv">
        <h1 class="heroTitle">Tingkatkan produktivitas kebun kopi Anda dengan perawatan profesional!!</h1>
        <h2 class="supportingTitle">Sarponesia Kopi siap mendukung perjalanan kopi Anda, dari tanah hingga seduhan yang sempurna!</h2>
      </div>
    </section>
  </div>

  <div class="content">
    <section class="roasterySection">
      <!-- This section introduces the roastery and its unique coffee bean processing. -->
      <div class="flexColContainer">
        <div class="contentBox">
          <div class="flexRowContainer">
            <img class="roasteryImage" src="{{ $perawatanKebun[1] -> Image_path }}" alt="alt text" />
            <div class="flexColText">
              <h1 class="roasteryTitle">{{ $perawatanKebun[1] -> Name }}</h1>
              <h2 class="roasteryDescription">{{ $perawatanKebun[1] -> Description}}</h2>
              <button class="contactButton" onclick="window.location.href= 'https://wa.me/6283890958930'">
                <!-- TODO -->
                Hubungi
              </button>
            </div>
          </div>
        </div>
        <div class="flexRowContent">
          <div class="contentBoxCare">
            <div class="flexColCare">
              <h1 class="coffeeCareTitle">{{ $perawatanKebun[0] -> Name }}</h1>
              <div class="flexRowImage">
                <img class="careImage" src="{{ $perawatanKebun[0] -> Image_path }}" alt="alt text" />
                <h2 class="careDescription">{{ $perawatanKebun[0] -> Description}}</h2>
              </div>
              <button class="contactButtonCare" onclick="window.location.href='https://wa.me/6283890958930'">
                <!-- TODO -->
                Hubungi
              </button>
            </div>
          </div>
          <div class="contentBoxStek">
            <div class="flexColStek">
              <h1 class="stekKopiTitle">{{ $perawatanKebun[0] -> Name }}</h1>
              <div class="flexRowStek">
                <h2 class="stekDescription">{{ $perawatanKebun[2] -> Description}}</h2>
                <img class="stekImage" src="{{ $perawatanKebun[2] -> Image_path }}" alt="alt text" />
              </div>
              <button class="contactButtonStek" onclick="window.location.href='https://wa.me/6283890958930'">
                <!-- TODO -->
                Hubungi
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <div class="content">
    <section class="contactUsSection">
      <!-- This section contains the contact form for user inquiries. -->
      <div class="contactFormSection">
        <div class="flexRowLayout">
          <!-- This div uses a flexbox layout for alignment of its child elements. -->
          <div class="flexColumnLayout">
            <h1 class="contactInquiryHeader">Memiliki pertanyaan mengenai perawatan kebun lainnya ?</h1>
            <img class="logocontact" src="/assets/66bfb7ebe28b6e0d2ddb5cfe2b325aa0.svg" alt="alt text" />
          </div>
          <form action="{{ route('kirim.pertanyaan') }}" method="POST">
            @csrf
            <div class="contentBoxSection">
                <!-- This section holds the different content boxes for the form fields. -->
                <div class="contentBox1">
                    <input type="text" id="Name" name="nama" placeholder="Nama" required>
                    <input type="text" id="email" name="email" placeholder="Alamat Email" required>
                    <input type="text" class="messageField" id="message" name="pesan" placeholder="Tulis pesan Anda..." required>
                    <button type="submit" class="submitButton">Kirim</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </section>
    </div>



</main>
@endsection