@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}" />
@endsection

@section('main')
<main class="contacts main">
      <section class="introductionSection" style="--src:url(/assets/Contact/07bd30683d0a863e3020e4c26a844523.png)"><p class="desc">Memulai Kerjasama Bersama Sarponesia</p></section>

      <section class="programContactSection">
        <!-- Main section for the program description and contact information --> 
        <div class="contentContainer">
          <div class="programTeamContainer">
            <div class="programDetails">
              <h2 class="programTitle">Program Kami</h2>
              <p class="programDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since</p>
            </div>
            <div class="programGallery">
              <!-- Grid of program images --> 
              <img class="programImage" src="/assets/Contact/9f905bfaf603048fcff49565e62b7d09.png" alt="alt text" />
              <img class="programImage" src="/assets/Contact/5fb4ea91d6468658e4db5de323cbecd7.png" alt="alt text" />
              <img class="programImage" src="/assets/Contact/056042f28c32d47cb2faa83d8da80478.png" alt="alt text" />
              <img class="programImage" src="/assets/Contact/dfe5d5df4299b3efb4ebf164056e293a.png" alt="alt text" />
            </div>
          </div>
          <h3 class="teamTitle">Tim Kami</h3>
          <div class="teamContainer">
            <div class="teamMemberContainer">
              <div class="teamProfile">
                <div class="teamProfileCard">
                  <div class="teamMemberDetails">
                    <img class="teamImage" src="/assets/Contact/9cce594cbdeb2f0b5dbb4eccfde18b5d.png" alt="alt text" />
                    <div class="memberInfo">
                      <h4 class="memberName">Parno</h4>
                      <p class="memberPosition">Latte artist</p>
                    </div>
                  </div>
                  <img class="teamImage1" src="/assets/Contact/d74fa1ef02c441ef4aade8f116359b71.png" alt="alt text" />
                </div>
                <div class="memberInfo1">
                  <h4 class="memberName1">Ruddy</h4>
                  <p class="memberPosition">Quality Control</p>
                </div>
              </div>
              <div class="teamContainer1">
                <div class="teamProfileCard">
                  <div class="teamMemberDetails1">
                    <img class="teamImage2" src="/assets/Contact/478f79ae55ccc9d29f5a3353b8af129a.png" alt="alt text" />
                    <div class="memberInfo2">
                      <h4 class="memberName2">Jacob</h4>
                      <p class="memberPosition1">Spesialis</p>
                    </div>
                  </div>
                  <img class="teamImage3" src="/assets/Contact/b6e8fe64461a13dfe6e007c5d9f7b6fc.png" alt="alt text" />
                </div>
                <div class="memberInfo3">
                  <h4 class="memberName3">Rara</h4>
                  <p class="memberPosition2">Barista</p>
                </div>
              </div>
              <img class="teamImage4" src="/assets/Contact/73d8a8b5e7e7a6796a3220c61ec3b8a5.png" alt="alt text" />
            </div>
            <div class="memberInfo4">
              <h4 class="memberName4">Damis</h4>
              <p class="memberPosition">Perawat Kebun</p>
            </div>
          </div>
          <div class="contactInfoContainer">
            <h3 class="contactTitle">Kontak Kami</h3>
            <p class="contactDescription">Hubungi kami dan beri tahu kami apa yang bisa dibantu</p>
          </div>
          <div class="contactDetailsGrid">
            <!-- Grid for contact details like location, phone, and hours --> 
            <div class="contactDetailBlock">
              <div class="contactDetailContent">
                <img class="contactDetailIcon" src="/assets/Contact/3f25ba6090b6e6ca0e63f0e34da17d8d.svg" alt="alt text" />
                <h4 class="contactDetailTitle">Lokasi Kami</h4>
                <p class="contactDetailText">
                  jln mt haryono no 15 pacitan
                  <br />
                </p>
              </div>
            </div>
            <div class="contactDetailBlock">
              <div class="contactDetailContent1">
                <img class="contactDetailIcon1" src="/assets/Contact/361bf60e8f4552e93d41473e66f0cb96.svg" alt="alt text" />
                <h4 class="contactDetailTitle1">Telephone</h4>
                <p class="contactDetailText1">083890958930</p>
              </div>
            </div>
            <div class="contactDetailBlock">
              <div class="contactDetailContent2">
                <img class="contactDetailIcon1" src="/assets/Contact/2b92e99fc456917286f79a58c4bb5a66.svg" alt="alt text" />
                <h4 class="contactDetailTitle2">Jam Buka</h4>
                <p class="businessHoursDescription">
                  Senin - sabtu
                  <br />
                  08.00-23.00
                </p>
              </div>
            </div>
          </div>
          <div class="callToActionSection">
            <div class="callToActionContent">
              <p class="ctaLeadText">Tertarik Dengan Program Kerjasama Kami?</p>
              <p class="ctaFurtherInfoText">Hubungi kami lebih lanjut untuk mengetahui lebih detail</p>
              <img class="ctaImage" src="/assets/Contact/028c074d585ecf43ce83114d5c0d8590.svg" alt="alt text" />
            </div>
            <div class="formContainer">
              <!-- Form for user contact information --> 
              <div class="formFieldContainer">
                <div class="formField"><label class="formFieldLabel">Nama</label></div>
                <div class="formField1"><label class="formFieldLabel1">Alamat Email</label></div>
                <div class="formField1"><label class="formFieldLabel2">Pesan</label></div>
                <button class="formSubmitText">
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
