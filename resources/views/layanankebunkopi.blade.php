@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/layanankebunkopi.css') }}" />
@endsection

@section('main')

<body class="flex-column">

  <main class="layanankebunkopi main">
    <section class="coffeeProductionSection">
      <!-- Main section for displaying coffee production offerings -->
      <div class="contentWrapper">
        <figure class="imageBlock" style="--src:url(/assets/d25e88083fd5eee8137ba12c5c02ee40.png)">
          <div class="descriptionWrapper">
            <p class="headline">Cari Kebutuhan Produksi Kopimu Disini !! </p>
            <p class="detailedDescription">Dimulai dari benih kopi pilihan dan diperkaya dengan pupuk berkualitas terbaik bersama layanan jasa pemrosesan kopi terbaik, kami memastikan setiap biji kopi tersaji sempurna.</p>
          </div>
        </figure>
      </div>
      <div class="colorStrip"></div>
    </section>

    <section class="productOverviewSection">
      <div class="productContainer">
        
        <div class="productCategories">
          <button class="tabButton active" data-category="Benih">Benih</button>
          <p class="separator">|</p>
          <button class="tabButton" data-category="Pupuk">Pupuk</button>
          <p class="separator">|</p>
          <button class="tabButton" data-category="Alat">Alat</button>   
          <p class="separator">|</p>
          <button class="tabButton" data-category="Kopi">Kopi</button>
        </div>

        <div class="featuredProduct">
          <img class="productImage" src="/assets/e6587984eb8d2dd975e4751ea3809c8d.png" alt="alt text" />
          <div class="productDetails">
            <p class="seedDetails" id="productTitle">Benih</p>
            <p class="productDescription" id="productDescription">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <a class="catalogLink" href="#" id="catalogLink">Kunjungi Katalog</a>
          </div>
        </div>
      </div>
    </section>

    <section class="gardenCareSection">
      <!-- This section covers the garden care services. -->
      <div class="contentColumn">
        <div class="serviceDescriptionColumn">
          <p class="serviceTitle">Layanan Perawatan Kebun</p>
          <p class="serviceDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s,</p>
        </div>
        <div class="serviceDetailsColumn">
          <div class="serviceBlock">
            <div class="serviceItem">
              <div class="colorIndicator"></div>
              <p class="serviceName">Roastery</p>
            </div>
          </div>
          <div class="careBlock">
            <div class="careItem">
              <div class="colorIcon"></div>
              <p class="careServiceName">Perawatan Kopi</p>
            </div>
          </div>
          <div class="graftingBlock">
            <div class="graftingItem">
              <div class="colorTag"></div>
              <p class="graftingServiceName">Stek Kopi</p>
            </div>
          </div>
        </div>
        <p class="contactInfo">
          <!-- TODO -->
          Hubungi
        </p>
      </div>
    </section>

    <section class="trainingServicesSection">
      <!-- This section provides an overview of specialized training services. -->
      <div class="contentWrapper1">
        <p class="servicesTitle">Jasa Pelatihan Khusus</p>
        <div class="servicesGrid">
          <!-- Grid layout for displaying specialized training services. -->
          <div class="trainingCard">
            <!-- Card element showcasing a specific training service with image and description. -->
            <img class="trainingImage" src="/assets/b96bf57bc8a48515c61db977c6cdb19f.png" alt="alt text" />
            <div class="trainingDetails">
              <!-- Container holding the title and description of a training service. -->
              <p class="trainingTitle">Logo dan Branding</p>
              <article class="trainingDesc">Kuasai metode penyeduhan terbaik seperti pour-over, espresso, french press, dan lainnya</article>
            </div>
          </div>
          <div class="trainingCard">
            <img class="trainingImage" src="/assets/1d9bf308618687e867a00670cd518ea0.png" alt="alt text" />
            <div class="trainingDetails1">
              <p class="trainingTitle">Barista dan Roastery</p>
              <article class="trainingDesc1">Pelajari penggunaan mesin espresso dengan benar, teknik steaming untuk tekstur yang halus, serta seni latte art yang memukau.</article>
            </div>
          </div>
          <div class="trainingCard1">
            <img class="trainingImage1" src="/assets/b424c22c97bdb022a348f09bcbc25217.png" alt="alt text" />
            <div class="trainingDetails2">
              <p class="trainingTitle">Perawatan Kebun dan Pengolahan pasca panen</p>
              <article class="trainingDesc1">Pelajari pemanggangan biji kopi dari light hingga dark roast untuk membuat karakter unik setiap biji.</article>
            </div>
          </div>
        </div>
        <article class="callToAction">
          <!-- TODO -->
          Ikuti Pelatihan
        </article>
      </div>
    </section>

    <section class="offersSection">
      <!-- This section presents the best offers available at Sarponesia Coffee. -->
      <div class="offersContainer">
        <div class="offerDescriptionContainer">
          <h2 class="offerTitle">Dapatkan Penawaran Terbaik di Sarponesia Coffee</h2>
          <p class="offerDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i</p>
          <div class="messageBlock">
            <div class="messageRow">
              <label class="messagePrompt">Tulis Pesanmu</label>
              <p class="sendLabel">
                <!-- TODO -->
                Kirim
              </p>
            </div>
          </div>
        </div>
        <img class="coffeeImage" src="/assets/8cecb7bd6f31429c7e35850f30acb5ee.png" alt="alt text" />
      </div>
    </section>

  </main>

</body>

@section('scripts')
<script src="{{ asset('js/productTab.js') }}"></script>
@endsection

@endsection