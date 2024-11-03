@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/benihpupuk.css') }}" />
@endsection

@section('main')
   <!-- Main content container for coffee production and products --> 
      <section class="heroSection" style="--src:url(/assets/d372a8e3d3b8243596615024afff0f2e.png)">
        <!-- Hero banner showcasing coffee production introduction --> 
        <div class="heroContent">
          <p class="heroTitle">Cari Kebutuhan Produksi Kopimu Disini !! </p>
          <p class="heroDesc">Dimulai dari benih kopi pilihan dan diperkaya dengan pupuk berkualitas terbaik, kami memastikan setiap biji kopi tumbuh sempurna.</p>
        </div>
      </section>

      <section class="showcaseSection">
        <!-- Product showcase with featured items and grid layout --> 
        <div class="showcaseContainer">
          <article class="featuredItem">
            <div class="featuredWrapper">
              <div class="productDetails">
                <p class="productTitle">Benih Kopi Bersertifikat</p>
                <p class="productDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i </p>
                <button class="purchaseBtn">
                  <!-- TODO --> 
                  Beli
                </button>
              </div>
              <img class="productImg" src="/assets/e6587984eb8d2dd975e4751ea3809c8d.png" alt="alt text" />
            </div>
          </article>
          <div class="itemGrid">
            <!-- Grid layout for product cards --> 
            <article class="itemCard">
              <img class="itemImg" src="/assets/abdb0b9959fb3988ee3a6b66dae3a0e2.png" alt="alt text" />
              <div class="cardContent">
                <p class="itemTitle">Nama Produk</p>
                <div class="priceContainer">
                  <p class="priceLabel">Price</p>
                  <button class="buyBtn">
                    <!-- TODO --> 
                    Beli
                  </button>
                </div>
              </div>
            </article>
            <div class="flex_col">
              <img class="image8" src="/assets/5c7d3c96190ce58916ff77ef5dc5fd9e.png" alt="alt text" />
              <div class="flex_col1">
                <h3 class="medium_title3">Nama Produk</h3>
                <div class="flex_row">
                  <h3 class="subtitle4">Price</h3>
                  <button class="btns">
                    <!-- TODO --> 
                    Beli
                  </button>
                </div>
              </div>
            </div>
            <div class="flex_col2">
              <img class="image9" src="/assets/4fe9891ac93f78fb7867c2dee3e91844.png" alt="alt text" />
              <div class="flex_col3">
                <h3 class="medium_title3">Nama Produk</h3>
                <div class="flex_row1">
                  <h3 class="subtitle5">Price</h3>
                  <button class="btn1">
                    <!-- TODO --> 
                    Beli
                  </button>
                </div>
              </div>
            </div>
            <div class="flex_col">
              <img class="image8" src="/assets/e8c87c7de21496113d1fbb54fe837f8f.png" alt="alt text" />
              <div class="flex_col1">
                <h3 class="medium_title3">Nama Produk</h3>
                <div class="flex_row">
                  <h3 class="subtitle41">Price</h3>
                  <button class="btns">
                    <!-- TODO --> 
                    Beli
                  </button>
                </div>
              </div>
            </div>
            <div class="flex_col">
              <img class="image10" src="/assets/b5ce8375c8f8a77e9e4888756da9684f.png" alt="alt text" />
              <div class="flex_col1">
                <h3 class="medium_title3">Nama Produk</h3>
                <div class="flex_row">
                  <h3 class="subtitle4">Price</h3>
                  <button class="btns">
                    <!-- TODO --> 
                    Beli
                  </button>
                </div>
              </div>
            </div>
          </div>
          <article class="promoCard">
            <!-- Promotional banner for fertilizer products --> 
            <img class="image" src="/assets/f8a30100e1b1864217877b298a76f5ed.png" alt="alt text" />
            <div class="flex_col4">
              <h2 class="hero_title1">Pupuk Kopi </h2>
              <h3 class="medium_title1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#x27;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i </h3>
              <button class="btn2">
                <!-- TODO --> 
                Beli
              </button>
            </div>
          </article>
        </div>
      </section>

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
                    <p class="productDesc1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <a class="detailsLink">Selengkapnya</a>
                </div>
                <img class="productImg1" src="/assets/d10aa136bc1a7d5770349d932e8e96bf.png" alt="alt text" />
              </div>
            </article>
            <article class="productCard">
              <div class="cardContent1">
                <div class="productInfo">
                  <div class="productDetails1">
                    <p class="priceText">Rp. Harga</p>
                    <p class="productName">Nama Produk</p>
                    <p class="productDesc1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <a class="detailsLink">Selengkapnya</a>
                </div>
                <img class="productImg1" src="/assets/bd7f005eebc8b145bdaf685a9102025e.png" alt="alt text" />
              </div>
            </article>
            <div class="item">
              <div class="flex_row2">
                <div class="flex_col5">
                  <div class="flex_col6">
                    <h2 class="title">Rp. Harga</h2>
                    <h2 class="big_title">Nama Produk</h2>
                    <h3 class="subtitle1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                  </div>
                  <h3 class="medium_title2">Selengkapnya</h3>
                </div>
                <img class="image1" src="/assets/922b26c88f215943b690a3e8548943b3.png" alt="alt text" />
              </div>
            </div>
            <div class="item">
              <div class="flex_row2">
                <div class="flex_col5">
                  <div class="flex_col6">
                    <h2 class="title">Rp. Harga</h2>
                    <h2 class="big_title">Nama Produk</h2>
                    <h3 class="subtitle1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                  </div>
                  <h3 class="medium_title2">Selengkapnya</h3>
                </div>
                <img class="image1" src="/assets/ce325319935e28bb65710d74354d2a19.png" alt="alt text" />
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection