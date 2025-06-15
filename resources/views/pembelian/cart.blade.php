@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}" />
@endsection

@section('main')

<body class="flex-column">

    <main class="cart mainContent">
      <!-- Main content area --> 
      <section class="productOverviewSection">
        <div class="breadcrumbContainer">
          <div class="breadcrumbList">
            <!-- Breadcrumb navigation list --> 
            <span class="catalogText">Katalog</span>
            <span class="breadcrumbSeparator">&gt;</span>
            <span class="categoryText">Kopi</span>
            <span class="breadcrumbSeparator">&gt;</span>
            <span class="cartText">Keranjang</span>
          </div>
          <div class="productSection">
            <!-- Product detail and interaction --> 
            <div class="productDetailCard">
              <div class="selectionOption">
                <div class="selectionHeader">
                  <div class="selectProductBox_box">
                    <span class="selectProductBox">
                      <span class="selectProductBox_span0">Pilih </span>
                      <span class="selectProductBox_span1">(1)</span>
                    </span>
                  </div>
                  <p class="removeOptionText">Hapus</p>
                </div>
              </div>
              <div class="productCard">
                <div class="productImageContainer">
                  <img class="productImage" src="/assets/Cart/9c2b5872b1b1a3c63762729712967267.svg" alt="alt text" />
                  <img class="additionalImage" src="/assets/Cart/coffee_packaging.png" alt="alt text" />
                  <div class="productInfoContainer">
                    <div class="productName">Roastedbean robusta 800gr</div>
                    <div class="productWeight">800 gr</div>
                  </div>
                  <div class="availabilityPriceContainer">
                    <div class="stockPriceSection">
                      <div class="stockInfoBox_box">
                        <span class="stockInfoBox">
                          <span class="stockInfoBox_span0">Stok  </span>
                          <span class="stockInfoBox_span1">8</span>
                        </span>
                      </div>
                      <div class="productPrice">Rp 130.000</div>
                    </div>
                    <div class="quantitySelector">
                      <img class="quantityControlImage" src="/assets/Cart/40ab868db8256e8bd499c62c37a68661.svg" alt="alt text" />
                      <div class="quantityControl">
                        <div class="quantityControlContainer">
                          <button class="decrementButton">-</button>
                          <div class="quantityDisplay">1</div>
                          <button class="incrementButton">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="summarySection">
              <!-- Shopping summary details --> 
              <div class="summaryContainer">
                <div class="summaryDetail">
                  <p class="summaryHeader">Ringkasan Belanja</p>
                  <div class="totalItemsLabel">Jumlah</div>
                  <div class="totalItemsContainer">
                    <div class="totalItemsCount">1</div>
                    <div class="itemUnit">Pcs</div>
                  </div>
                  <div class="subtotalContainer">
                    <div class="subtotalLabel">Subtotal</div>
                    <div class="subtotalAmount">Rp 130.000</div>
                  </div>
                </div>
                <p class="purchaseButton">
                  <!-- TODO --> 
                  Beli
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

  </body>

  @endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/cart.js') }}"></script>
@endsection