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
        <div id="gardenServicesContainer" class="serviceDetailsColumn">
          <!-- Akan diisi oleh JS -->
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
        <div id="trainingServicesContainer" class="servicesGrid">
          <!-- Akan diisi oleh JS -->
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