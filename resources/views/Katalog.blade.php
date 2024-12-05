@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/Katalog.css') }}" />
@endsection

@section('main')
<main class="katalog main">
  <div class="content">
    <section class="heroSection" style="--src:url(/assets/01d674d1ee2c48d57c7f3fe4f96d61c6.png)">
      <!-- Hero banner section with product introduction -->
      <div class="contentWrapper">
        <p class="productTitle">Spesial Produk Kopi Khas Pacitan</p>
        <p class="productSubtitle">Temukan Produk Pilihanmu Disini</p>
      </div>
    </section>
  </div>

  <div class="content">
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
                <div class="item">
                  <div class="cardContent">

                    <div class="overlay"></div>
                    <div class="productDetails">
                      <img class="productImg" src="{{ $robusta[0] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[0] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[0] -> Link_tokped }}'">Beli</div>
                      <p class="productName">{{ $robusta[0] -> Name }}</p>
                      <div class="ratingWrapper">
                        <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <p class="priceTag">Rp. {{number_format ($robusta[0] -> Price, 2, ',', '.') }}</p>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $robusta[1] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[1] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[1] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $robusta[1] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($robusta[1] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $robusta[2] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[2] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[2] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $robusta[2] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($robusta[2] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col2">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $robusta[3] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[3] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $robusta[3] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $robusta[3] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($robusta[3] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col2">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/1136581dfbcb6d65638b43946419b945.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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
            <div class="contents" id="contents11">
              <div class="productList">
                <div class="item">
                  <div class="cardContent">

                    <div class="overlay"></div>
                    <div class="productDetails">
                      <img class="productImg" src="{{ $roastedBean[0] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[0] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[0] -> Link_tokped }}'">Beli</div>
                      <p class="productName">{{ $roastedBean[0] -> Name }}</p>
                      <div class="ratingWrapper">
                        <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <p class="priceTag">Rp. {{number_format ($roastedBean[0] -> Price, 2, ',', '.') }}</p>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $roastedBean[1] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[1] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[1] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $roastedBean[1] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($roastedBean[1] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $roastedBean[2] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[2] -> Link_tokped }}'">Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[2] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $roastedBean[2] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($roastedBean[2] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col2">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="{{ $roastedBean[3] -> Image_path }}" alt="alt text" />
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[3] -> Link_tokped }}'" >Beli</div>
                      <div class="buyButton" onclick="window.location.href= '{{ $roastedBean[3] -> Link_tokped }}'">Beli</div>
                      <div class="info8">{{ $roastedBean[3] -> Name }}</div>
                      <div class="flex_row">
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="alt text" />
                        <img class="image7" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="alt text" />
                      </div>
                    </div>
                    <div class="info9">Rp. {{number_format ($roastedBean[3] -> Price, 2, ',', '.') }}</div>
                  </div>
                </div>
                <div class="item">
                  <div class="flex_col2">

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/1136581dfbcb6d65638b43946419b945.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/7d07220bb1ac52419817673fdf3b7221.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/d9d95a1b127f03cb95b97471080f2670.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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

                    <div class="overlay"></div>
                    <div class="flex_col1">
                      <img class="image6" src="/assets/401dc5e830e6919a4ff5cdd3e43742e4.png" alt="alt text" />
                      <div class="buyButton">Beli</div>
                      <div class="buyButton">Beli</div>
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
          </div>
        </div>
    </section>
  </div>
</main>
@endsection