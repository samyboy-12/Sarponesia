@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/program.css') }}" />
@endsection

@section('main')
<main class="program-kerjasama mainContent">
      <!-- Main content wrapper --> 
      <section class="welcomeSection" style="--src:url(/assets/b28aefc97ef19b69c8044ed295656460.png)">
        <!-- Hero banner section --> 
        <p class="headingPrimary">Memulai Kerjasama Bersama Sarponesia</p>
      </section>

      <section class="featuresSection">
        <!-- Services and team members showcase section --> 
        <div class="contentWrapper">
          <div class="programContainer">
            <!-- Programs showcase area --> 
            <div class="programIntro">
              <p class="programHeading">Program Kami</p>
              <p class="programDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since</p>
            </div>
            <div class="imageGallery">
              <!-- Program images gallery grid --> 
              <div class="galleryTop">
                <img class="galleryImg" src="/assets/cfec27e6e305e6b4da9a4e6fdd02027a.png" alt="alt text" />
                <img class="galleryImg" src="/assets/43d8792f8b1b2067f41d8be825b8555f.png" alt="alt text" />
              </div>
              <div class="galleryBottom">
                <img class="galleryImg" src="/assets/23633ca459583209e3c3b692320dbe29.png" alt="alt text" />
                <img class="galleryImg" src="/assets/24c5e65620c00e66f609bbf17f3cb0b5.png" alt="alt text" />
              </div>
            </div>
          </div>
          <div class="teamContainer">
            <!-- Team members showcase --> 
            <p class="teamHeading">Tim Kami</p>
            <div class="teamGrid">
              <!-- Grid of team members --> 
              <article class="memberCard">
                <div class="memberInfo">
                  <div class="memberImgWrapper">
                    <img class="memberImg" src="/assets/a8e2e0ae3d3fa3de68af1092b5aef7ef.png" alt="alt text" />
                    <div class="memberDetails1">
                      <img class="memberIcon1" src="/assets/2e7561e196126cdc6b8fb23f2227393d.png" alt="alt text" />
                      <div class="memberNameRole1">
                        <h3 class="memberName1">Parno</h3>
                        <p class="memberRole1">Latte artist</p>
                      </div>
                    </div>
                  </div>
                  <div class="memberNameRole2">
                    <h3 class="memberName2">Ruddy</h3>
                    <p class="memberRole2">Quality Control</p>
                  </div>
                </div>
                <div class="memberInfo2">
                  <article class="teamMember2">
                    <img class="memberImage2" src="/assets/dfca554b07198c19b7519ddab876d874.png" alt="alt text" />
                    <div class="memberDetails2">
                      <img class="memberIcon2" src="/assets/48062dfe0a680c3205ea08be6134dc8b.png" alt="alt text" />
                      <div class="memberNameRole3">
                        <h3 class="memberName3">Jacob</h3>
                        <p class="memberRole3">Spesialis</p>
                      </div>
                    </div>
                  </article>
                  <div class="memberNameRole4">
                    <h3 class="memberName4">Rara</h3>
                    <p class="memberRole4">Barista</p>
                  </div>
                </div>
                <img class="memberImage3" src="/assets/14af3d87fc833ecf0348ea60373c6e98.png" alt="alt text" />
              </article>
              <div class="memberNameRole5">
                <h3 class="memberName5">Damis</h3>
                <p class="memberRole5">Perawat Kebun</p>
              </div>
            </div>
          </div>
          <div class="contactContainer">
            <!-- Contact form section --> 
            <div class="inquiryIntro">
              <h2 class="contactTitle">Tertarik Dengan Program Kerjasama Kami?</h2>
              <p class="contactSubtitle">Hubungi kami lebih lanjut untuk mengetahui lebih detail</p>
              <img class="contactprogram" src="/assets/028c074d585ecf43ce83114d5c0d8590.svg" alt="alt text" />
            </div>
            <form class="contactForm">
              <div class="formGroup">
                <div class="inputGroup"><label class="inputLabel">Nama</label></div>
                <div class="emailField"><label class="emailLabel">Alamat Email</label></div>
                <div class="messageField"><label class="messageLabel">Pesan</label></div>
                <button class="submitBtn">
                  <!-- TODO --> 
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>

    </main>
@endsection