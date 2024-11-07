@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Katalog.css') }}" />
@endsection

@section('main')
<main class="katalog main">
      <section class="heroSection" style="--src:url(/assets/01d674d1ee2c48d57c7f3fe4f96d61c6.png)">
        <!-- Hero banner section with product introduction --> 
        <div class="contentWrapper">
          <p class="productTitle">Spesial Produk Kopi Khas Pacitan</p>
          <p class="productSubtitle">Temukan Produk Pilihanmu Disini</p>
        </div>
      </section>

      <section class="productDisplaySection">
        <!-- Product showcase section with featured items and pricing --> 
        <div class="productContainer">
          <div class="bannerWrapper">
            <img class="bannerImg" src="/assets/1d0d1ee45431e4d8249af0ff53be1a1d.png" alt="alt text" />
            <p class="bannerTitle">Check Out Kopi Siap Seduh Terbaik Kami</p>
          </div>

          
          <div class="productGrid" style="--src:url(/assets/c7be08698386abf7c057d4c061ec14b5.svg)">
            <!-- Grid layout for product cards display --> 
            <div class="tabs tab-round">
            <div class="tab">
              <a href="#contents10">robusta</a>
              <a href="#contents11">roastedbean</a>

            </div>
            <div class="contents" id="contents10">

              <div class="productList">
                  <article class="productCard">
                    <div class="cardContent">
                      <div class="productDetails">
                        <img class="productImg" src="/assets/1136581dfbcb6d65638b43946419b945.png" alt="alt text" />
                        <p class="productName">Nama Produk</p>
                        <div class="ratingWrapper">
                          <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <p class="priceTag">Rp 20,0</p>
                    </div>
                  </article>
                  <div class="item">
                    <div class="flex_col">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/7c4e2166b684797457dcdac3e2cc567f.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col2">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col2">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col2">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/1136581dfbcb6d65638b43946419b945.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col3">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col3">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="flex_col3">
                      <div class="flex_col1">
                        <img class="image6" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                        <div class="info8">Nama Produk</div>
                        <div class="flex_row">
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                          <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                        </div>
                      </div>
                      <div class="info9">Rp 20,0</div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="contents" id="contents11">contoh Contents roastedbean</div>
          </div>
        </div>
      </section>

    </main>
@endsection