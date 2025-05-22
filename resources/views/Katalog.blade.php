@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/Katalog.css') }}" />
@endsection

@section('main')
<main class="katalog main">
  <div class="content">
    <section class="uniqueProductsSection" style="background-image: url(/assets/coffee_beans_dark.png);">
      <div class="columnContainer">
        <div class="productDetailsColumn">
          <p class="productHighlight">Spesial Produk Kopi Khas Pacitan</p>
          <p class="productDescription">Jelajahi pilihan kopi khas Pacitan dan temukan favoritmu sekarang!</p>
        </div>
        <div class="reviewsContainer">
          <div class="customerReviewColumn">
            <span class="totalReviewsCount">1 K +</span>
            <span class="totalReviewsLabel">reviews</span>
          </div>
          <div class="newestReviewColumn">
            <span class="recentReviewCount">500+</span>
            <span class="recentReviewLabel">reviews</span>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="content">
    <section class="productDisplaySection">
      <div class="productContainer">
        <div class="productGrid" style="--src:url(/assets/c7be08698386abf7c057d4c061ec14b5.svg)">
          <div class="tabs tab-round">
            <div class="tab">
              <a href="#contents10">Benih</a><p class="separator">|</p>
              <a href="#contents11">Pupuk</a><p class="separator">|</p>
              <a href="#contents12">Alat</a><p class="separator">|</p>
              <a href="#contents13">Kopi</a>
            </div>

            <div class="contents" id="contents10"><div class="productList" id="benih-products"></div></div>
            <div class="contents" id="contents11"><div class="productList" id="pupuk-products"></div></div>
            <div class="contents" id="contents12"><div class="productList" id="alat-products"></div></div>
            <div class="contents" id="contents13"><div class="productList" id="kopi-products"></div></div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<section class="affiliateMarketingSection">
  <div class="flex_row">
    <div class="flex_col">
      <p class="desc4">Gabung sebagai afiliasi, reseller, atau rebrand dengan mudah.</p>
      <p class="desc3">
        Bagikan link afiliasi kami, promosikan, dan dapatkan komisi dari setiap pembelian
        <br />
        Jadilah Reseller Kami! Dapatkan keuntungan 5% per produk dan jual secara offline dengan mudah.
        <br />
        Bergabunglah dalam program partnership kami dan rebrand produk dengan merek eksklusif milikmu
      </p>
      <div class="content_box1">
        <div class="flex_row1">
          <div class="info12">Tulis Pesanmu</div>
          <button class="btn1">Kirim</button>
        </div>
      </div>
    </div>
    <img class="image1" src="/assets/sarponesia_packaging.png" alt="alt text" />
  </div>
</section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/katalog.js') }}"></script>
@endsection
