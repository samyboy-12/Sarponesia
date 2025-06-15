@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/review.css') }}" />
@endsection

@section('main')
<body class="flex-column">
    <main class="review mainContent">
        <section class="productSection">
            <div class="productNavigationContainer">
                <div class="breadcrumbContainer">
                    <a class="catalogLink" href="{{ route('katalog') }}">Katalog</a>
                    <span class="breadcrumbSeparator">></span>
                    <a class="productLink" id="productCategory">Kategori</a>
                    <span class="breadcrumbSeparator">></span>
                    <a class="currentProductLink" id="productName">Nama Produk</a>
                    <span class="breadcrumbSeparator">></span>
                    <a class="customerReviewLink">Ulasan Pembeli</a>
                </div>
                <nav class="breadcrumbNav">
                    <section class="searchSection">
                        <summary class="findProductSummary">Temukan Produk</summary>
                        <div class="searchBlock">
                            <div class="searchContainer">
                                <span class="searchPlaceholder">cari produk</span>
                                <img class="searchIcon" src="/assets/10e024d110ae3a9dcd6a1befd5e1bd56.svg" alt="Search Icon" />
                            </div>
                        </div>
                        <img class="logoImage" src="/assets/62b988033f448bf06b044a5d869ceec8.svg" alt="Logo" />
                    </section>
                </nav>
                <div class="reviewContainer">
                    <div class="reviewContent" id="reviewContent">
                        <!-- Review items will be rendered here via JS -->
                    </div>
                    <section class="purchaseSection">
                        <div class="purchaseContainer">
                            <div class="variantContainer">
                                <summary class="variantSummary">Varian</summary>
                                <div class="variantSelection">
                                    <img class="variantImage" id="variantImage" src="/assets/6f0f26fab716947c4c217c5d48f7d00e.png" alt="Variant Image" />
                                    <span class="variantInfo" id="variantInfo">800 gr</span>
                                </div>
                            </div>
                            <summary class="quantitySummary">Jumlah</summary>
                            <div class="quantityContainer">
                                <div class="quantityBlock">
                                    <div class="quantityControl">
                                        <button class="decreaseBtn">-</button>
                                        <span class="currentQuantity">1</span>
                                        <button class="increaseBtn">+</button>
                                    </div>
                                </div>
                                <div class="stockInfoContainer_box">
                                    <span class="stockInfoContainer">
                                        <span class="stockInfoContainer_span0">Stok </span>
                                        <span class="stockInfoContainer_span1" id="stockInfo">8</span>
                                    </span>
                                </div>
                            </div>
                            <div class="wrapper">
                                <span class="stockInfoTitle">Subtotal</span>
                                <span class="subtotalPrice" id="subtotalPrice">Rp 130.000</span>
                            </div>
                            <div class="purchaseActions">
                                <p class="buyBtn">Beli</p>
                                <p class="addToCartBtn">+ Keranjang</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/review.js') }}"></script>
@endsection