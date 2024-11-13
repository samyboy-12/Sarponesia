@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/JasaKebunKopi.css') }}" />
@endsection

@section('main')
<main class="jasa-kebun mainSection">
      <section class="heroSection" style="--src:url(/assets/imgbuahbg.png)">
        <img class="decorativeImageFig" src="/assets/imgbuah.png" alt="alt text" />
        <div class="flexibleColumnDiv">
          <h1 class="heroTitle">Tingkatkan produktivitas kebun kopi Anda dengan perawatan profesional!!</h1>
          <h2 class="supportingTitle">Sarponesia Kopi siap mendukung perjalanan kopi Anda, dari tanah hingga seduhan yang sempurna!</h2>
        </div>
      </section>

      <section class="roasterySection">
        <!-- This section introduces the roastery and its unique coffee bean processing. --> 
        <div class="flexColContainer">
          <div class="contentBox">
            <div class="flexRowContainer">
              <img class="roasteryImage" src="/assets/09b2bef861683b9c2198377db39bd262.png" alt="alt text" />
              <div class="flexColText">
                <h1 class="roasteryTitle">Roastery</h1>
                <h2 class="roasteryDescription">Roastery adalah tempat di mana biji kopi mentah diolah dengan presisi untuk menghasilkan aroma dan cita rasa terbaik. Setiap proses emanggangan menciptakan karakter unik, dari pahit yang dalam hingga manis yang lembut, menjadikannya rahasia di balik setiap tegukan kopi yang luar biasa.</h2>
                <button class="contactButton">
                  <!-- TODO --> 
                  Hubungi
                </button>
              </div>
            </div>
          </div>
          <div class="flexRowContent">
            <div class="contentBoxCare">
              <div class="flexColCare">
                <h1 class="coffeeCareTitle">perawatan kopi</h1>
                <div class="flexRowImage">
                  <img class="careImage" src="/assets/f6937434f9b516c767e3854bfadec180.png" alt="alt text" />
                  <h2 class="careDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since</h2>
                </div>
                <button class="contactButtonCare">
                  <!-- TODO --> 
                  Hubungi
                </button>
              </div>
            </div>
            <div class="contentBoxStek">
              <div class="flexColStek">
                <h1 class="stekKopiTitle">Stek Kopi</h1>
                <div class="flexRowStek">
                  <h2 class="stekDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since</h2>
                  <img class="stekImage" src="/assets/d535663416bb4b7d92d82d75d282d949.png" alt="alt text" />
                </div>
                <button class="contactButtonStek">
                  <!-- TODO --> 
                  Hubungi
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contactUsSection">
        <!-- This section contains the contact form for user inquiries. --> 
        <div class="contactFormSection">
          <div class="flexRowLayout">
            <!-- This div uses a flexbox layout for alignment of its child elements. --> 
            <div class="flexColumnLayout">
              <h1 class="contactInquiryHeader">Memiliki pertanyaan mengenai perawatan kebun lainnya ?</h1>
              <img class="logocontact" src="/assets/66bfb7ebe28b6e0d2ddb5cfe2b325aa0.svg" alt="alt text" />
            </div>
            <div class="contentBoxSection">
              <!-- This section holds the different content boxes for the form fields. --> 
              <div class="nameFieldBox">
                <div class="contentBox1"><h2 class="nameFieldLabel">Nama</h2></div>
                <div class="emailFieldBox"><h2 class="emailFieldLabel">Alamat Email</h2></div>
                <div class="messageFieldBox"><h2 class="messageFieldLabel">Pesan</h2></div>
                <button class="submitButton">
                  <!-- TODO --> 
                  Kirim
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

     

    </main>
    @endsection