@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/benihpupuk.css') }}" />
@endsection
@section('scripts')
<script src="{{ asset('js/benihpupuk.js') }}"></script>
@endsection
@section('main')
<!-- Main content container for coffee production and products -->

<div class="content">
  <section class="heroSection" style="--src:url(/assets/d372a8e3d3b8243596615024afff0f2e.png)">
    <!-- Hero banner showcasing coffee production introduction -->
    <div class="heroContent">
      <p class="heroTitle">Cari Kebutuhan Produksi Kopimu Disini !! </p>
      <p class="heroDesc">Dimulai dari benih kopi pilihan dan diperkaya dengan pupuk berkualitas terbaik, kami memastikan setiap biji kopi tumbuh sempurna.</p>
    </div>
  </section>
</div>

<div class="content">
  <section class="showcaseSection">
    <!-- Product showcase with featured items and grid layout -->
    <div class="showcaseContainer">
      <article class="featuredItem">
        <div class="featuredWrapper">
          <div class="productDetails">
            <p class="productTitle">Benih Kopi Bersertifikat</p>
            <p class="productDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i </p>
            <button class="purchaseBtn">
              <!-- TODO -->
              Beli
            </button>
          </div>
          <img class="productImg" src="/assets/e6587984eb8d2dd975e4751ea3809c8d.png" alt="alt text" />
        </div>
      </article>
      <div class="itemGrid">
  @foreach($benihProducts as $product)
      <div class="flex_col">
          <img class="image8" src="{{ asset($product->Image_path) }}" alt="{{ $product->name }}" />
          <div class="flex_col1">
              <h3 class="medium_title3">{{ $product->Name }}</h3>
              <div class="flex_row1">
                  <h3 class="subtitle4">Rp {{ number_format($product->Price, 0, ',', '.') }}</h3>
                  <button class="btn1">Beli</button>
              </div>
          </div>
      </div>
  @endforeach
</div>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>

      <article class="promoCard">
        <!-- Promotional banner for fertilizer products -->
        <img class="image" src="/assets/f8a30100e1b1864217877b298a76f5ed.png" alt="alt text" />
        <div class="flex_col4">
          <h2 class="hero_title1">Pupuk Kopi </h2>
          <h3 class="medium_title1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i </h3>
          <button class="btn2">
            <!-- TODO -->
            Beli
          </button>
        </div>
      </article>
    </div>
  </section>
</div>

<div class="content">
  <section class="fertilizerSection">
    <!-- Fertilizer products showcase section -->
    <div class="sectionWrapper">
      <p class="sectionTitle">Pilihan Pupuk Kopi</p>
      <div class="productList">
        <!-- Grid layout for product cards -->
        <article class="productCard">
          <div class="cardContent1">
            <div class="productInfo">
              <div class="productDetails1">
                <p class="priceText">Rp. Harga</p>
                <p class="productName">Nama Produk</p>
                <p class="productDesc1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <a class="detailsLink" href="{{ url('/card') }}" >Selengkapnya</a>
            </div>
            <img class="productImg1" src="/assets/Pupuk 1.png" alt="alt text" />
          </div>
        </article>
        <article class="productCard">
          <div class="cardContent1">
            <div class="productInfo">
              <div class="productDetails1">
                <p class="priceText">Rp. Harga</p>
                <p class="productName">Nama Produk</p>
                <p class="productDesc1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <a class="detailsLink">Selengkapnya</a>
            </div>
            <img class="productImg1" src="/assets/Pupuk 2.png" alt="alt text" />
          </div>
        </article>
        <div class="item">
          <div class="flex_row2">
            <div class="flex_col5">
              <div class="flex_col6">
                <h2 class="title">Rp. Harga</h2>
                <h2 class="big_title">Nama Produk</h2>
                <h3 class="subtitle1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
              </div>
              <a class="detailsLink">Selengkapnya</a>
            </div>
            <img class="image1" src="/assets/Pupuk 3.png" alt="alt text" />
          </div>
        </div>
        <div class="item">
          <div class="flex_row2">
            <div class="flex_col5">
              <div class="flex_col6">
                <h2 class="title">Rp. Harga</h2>
                <h2 class="big_title">Nama Produk</h2>
                <h3 class="subtitle1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
              </div>
              <a class="detailsLink">Selengkapnya</a>
            </div>
            <img class="image1" src="/assets/Pupuk 4.png" alt="alt text" />
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
