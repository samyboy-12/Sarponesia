@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pelatihan.css') }}" />
@endsection

@section('main')
<main class="pelatihan main">
      

<section class="trainingHeroSection" style="--src:url(/assets/b97cf4b8fac27e24fd81a4a8fd267e5b.png)">
        <!-- Hero section showcasing coffee training services --> 
        <div class="heroWrapper">
          <div class="contentGroup">
            <article class="mainHeading">Dukung perkembangan industri kopi Anda melalui berbagai layanan pelatihan yang telah dirancang khusus</article>
            <img class="trainingImg" src="/assets/6c6991fdb8951e7480dc65c0cb10eb60.png" alt="alt text" />
          </div>
          <article class="subHeading">Sarponesia Kopi telah merancang berbagai materi pelatihan untuk memperluas pengetahuan dan menunjang perkembangan industri kopi di Indonesia</article>
        </div>
      </section>

      <section class="specializedTrainingSection">
        <!-- Specialized training programs and services section --> 
        <div class="trainingContainer">
          <p class="sectionTitle">Training Khusus</p>
          <div class="trainingGrid">
            <!-- Grid layout for training program cards --> 
            <article class="trainingCard">
              <div class="cardContent">
                <img class="cardImg" src="/assets/0caba3eea612d0e3f37c28aab3dd6be5.png" alt="alt text" />
                <p class="cardTitle">Barista &amp; Roastery</p>
              </div>
            </article>
            <article class="trainingCard">
              <div class="cardContent1">
                <img class="cardImg" src="/assets/741e0fc82759598622b6252d3faf5aa3.png" alt="alt text" />
                <p class="cardTitle1">Perawatan Kebun</p>
              </div>
            </article>
            <article class="trainingCard">
              <div class="cardContent2">
                <img class="cardImg" src="/assets/c83944a4affc94166599786fe963fe4b.png" alt="alt text" />
                <p class="cardTitle2">Pengolahan Pasca Panen</p>
              </div>
            </article>
            <article class="trainingCard">
              <div class="cardContent3">
                <img class="cardImg" src="/assets/d7715798e1e81011f6a406efd51f2a53.png" alt="alt text" />
                <p class="cardTitle3">Logo dan Branding</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="benefitsSection">
        <!-- Benefits and unique selling points section --> 
        <div class="benefitsWrapper">
          <div class="accentBackground"></div>
          <article class="benefitsContent">
            <p class="mainHeading1">Mengapa Memilih Sarponesia Kopi?</p>
            <article class="featuresList_box">
              <!-- Key features and benefits description list --> 
              <span class="featuresList">
                <span class="featuresList_span0">
                  Instruktur Berpengalaman
                  <br />
                </span>
                <span class="featuresList_span1">
                  Dilatih langsung oleh para ahli barista dan roaster yang telah berpengalaman bertahun-tahun di industri kopi.
                  <br />
                </span>
                <span class="featuresList_span2">
                  Materi Lengkap &amp; Praktik Langsung
                  <br />
                </span>
                <span class="featuresList_span3">
                  Pelatihan kami mencakup teori mendalam dan praktik langsung.
                  <br />
                </span>
                <span class="featuresList_span4">
                  Sertifikasi Profesional
                  <br />
                </span>
                <span class="featuresList_span5">Mendapatkan sertifikat sebagai pengakuan atas keahlian Anda, siap untuk karier di dunia kopi.</span>
              </span>
            </article>
          </article>
        </div>
      </section>

      <section class="coffeeTrainingSection">
        <!-- Coffee Training Programs and Services Overview --> 
        <div class="mainContainer">
          <div class="serviceCategories">
            <!-- Main service categories display --> 
            <p class="brandingTitle">Logo dan Branding</p>
            <p class="mainHeading2">Barista &amp; Roastery</p>
            <p class="gardenCareTitle">Perawatan Kebun</p>
            <p class="harvestTitle">Pengolahan Pasca Panen</p>
          </div>
          <div class="cardContainer">
            <!-- Training course cards grid --> 
            <article class="brewingCard">
              <div class="brewingContent">
                <img class="brewingImg" src="/assets/b96bf57bc8a48515c61db977c6cdb19f.png" alt="alt text" />
                <div class="brewingDetails">
                  <p class="brewingTitle">Teknik Penyeduhan yang Presisi</p>
                  <p class="brewingDesc">Kuasai metode penyeduhan terbaik seperti pour-over, espresso, french press, dan lainnya</p>
                </div>
              </div>
            </article>
            <article class="espressoCard">
              <div class="espressoContent">
                <img class="espressoImg" src="/assets/1d9bf308618687e867a00670cd518ea0.png" alt="alt text" />
                <div class="espressoDetails">
                  <p class="espressoTitle">Latihan Mesin Espresso Profesional</p>
                  <p class="espressoDesc">Pelajari penggunaan mesin espresso dengan benar, teknik steaming untuk tekstur yang halus, serta seni latte art yang memukau.</p>
                </div>
              </div>
            </article>
            <article class="roastingCard">
              <div class="roastingContent">
                <img class="roastingImg" src="/assets/b424c22c97bdb022a348f09bcbc25217.png" alt="alt text" />
                <div class="roastingDetails">
                  <p class="roastingTitle">Proses Pemanggangan (Roasting) yang Mendetail</p>
                  <p class="roastingDesc">Pelajari pemanggangan biji kopi dari light hingga dark roast untuk membuat karakter unik setiap biji.</p>
                </div>
              </div>
            </article>
          </div>
          <button class="enrollBtn">
            <!-- TODO --> 
            Ikuti Pelatihan
          </button>
        </div>
      </section>

    
    </main>
    @endsection
