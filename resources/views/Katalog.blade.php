@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Katalog.css') }}" />
@endsection

@section('main')
<section class="coffeeProductSection" style="--src:url(/assets/01d674d1ee2c48d57c7f3fe4f96d61c6.png)">
        <!-- Featured coffee products showcase area --> 
        <div class="titleWrapper">
          <p class="specialtyHeading">Spesial Produk Kopi Khas Pacitan</p>
          <p class="discoverHeading">Temukan Produk Pilihanmu Disini</p>
        </div>
      </section>

      <section class="productDisplaySection">
        <!-- Product showcase section displaying coffee items --> 
        <div class="mainContainer">
          <div class="heroWrapper">
            <img class="bannerImg" src="/assets/1d0d1ee45431e4d8249af0ff53be1a1d.png" alt="alt text" />
            <p class="mainHeading">Check Out Kopi Siap Seduh Terbaik Kami</p>
          </div>
          <div class="categoryContainer" style="--src:url(/assets/a7889b4de73157a4dea972cc9969139b.svg)">
            <div class="titleBar">
              <p class="categoryTitle">robusta</p>
              <button class="filterBtn">
                <!-- TODO --> 
                roastedbean
              </button>
            </div>
            <div class="productGrid">
              <!-- Grid container for product cards --> 
              <article class="productCard">
                <div class="group">
                  <div class="flex_col">
                    <div class="flex_col1">
                      <div class="content_box1" style="--src:url(/assets/1136581dfbcb6d65638b43946419b945.png)">
                        <button class="purchaseBtn">
                          <!-- TODO --> 
                          Beli
                        </button>
                      </div>
                      <p class="productTitle">Nama Produk</p>
                      <div class="ratingContainer">
                        <img class="ratingIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <p class="priceTag">Rp 20,0</p>
                  </div>
                  <div class="decorativeLine"></div>
                </div>
              </article>
              <div class="item">
                <div class="flex_col1">
                  <img class="image" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                  <h3 class="medium_title">Nama Produk</h3>
                  <div class="flex_row">
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                  </div>
                </div>
                <h3 class="medium_title1">Rp 20,0</h3>
              </div>
              <div class="item">
                <div class="flex_col1">
                  <img class="image" src="/assets/7c4e2166b684797457dcdac3e2cc567f.png" alt="alt text" />
                  <h3 class="medium_title">Nama Produk</h3>
                  <div class="flex_row">
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                  </div>
                </div>
                <h3 class="medium_title1">Rp 20,0</h3>
              </div>
              <div class="item">
                <div class="flex_col1">
                  <img class="image" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                  <h3 class="medium_title">Nama Produk</h3>
                  <div class="flex_row">
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                    <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                  </div>
                </div>
                <h3 class="medium_title1">Rp 20,0</h3>
              </div>
              <div class="item1">
                <div class="flex_col2">
                  <div class="flex_col1">
                    <img class="image" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                    <h3 class="medium_title">Nama Produk</h3>
                    <div class="flex_row">
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                    </div>
                  </div>
                  <h3 class="medium_title1">Rp 20,0</h3>
                </div>
              </div>
              <div class="item1">
                <div class="flex_col2">
                  <div class="flex_col1">
                    <img class="image" src="/assets/1136581dfbcb6d65638b43946419b945.png" alt="alt text" />
                    <h3 class="medium_title">Nama Produk</h3>
                    <div class="flex_row">
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                    </div>
                  </div>
                  <h3 class="medium_title1">Rp 20,0</h3>
                </div>
              </div>
              <div class="item1">
                <div class="flex_col2">
                  <div class="flex_col1">
                    <img class="image" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                    <h3 class="medium_title">Nama Produk</h3>
                    <div class="flex_row">
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                    </div>
                  </div>
                  <h3 class="medium_title1">Rp 20,0</h3>
                </div>
              </div>
              <div class="item1">
                <div class="flex_col2">
                  <div class="flex_col1">
                    <img class="image" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                    <h3 class="medium_title">Nama Produk</h3>
                    <div class="flex_row">
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                    </div>
                  </div>
                  <h3 class="medium_title1">Rp 20,0</h3>
                </div>
              </div>
              <div class="item1">
                <div class="flex_col2">
                  <div class="flex_col1">
                    <img class="image" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                    <h3 class="medium_title">Nama Produk</h3>
                    <div class="flex_row">
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                      <img class="image1" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                    </div>
                  </div>
                  <h3 class="medium_title1">Rp 20,0</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</section>

@endsection