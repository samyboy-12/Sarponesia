@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/overview.css') }}" />
@endsection

@section('main')
<main class="detail mainContent">
    <section class="productDetailSection">
        <div class="contentWrapper">
            <div class="contentBlock">
                <div class="breadcrumbNavContainer">
                    <nav class="breadcrumbNav">
                        <p class="breadcrumbItem">Katalog</p>
                        <p class="breadcrumbSeparator">&gt;</p>
                        <p class="breadcrumbItem1" id="productCategory">Kategori</p>
                        <p class="breadcrumbSeparator">&gt;</p>
                        <p class="breadcrumbCurrentPage" id="breadcrumbTitle">Nama Produk</p>
                    </nav>
                    <p class="searchProductPrompt">Temukan Produk</p>
                    <figure class="productFigure">
                        <img class="additionalProductImage" id="secondaryImage" src="" alt="Gambar Tambahan" />
                    </figure>
                </div>

                <div class="productInfoContainer">
                    <div class="searchContainer">
                        <div class="searchBlock">
                            <div class="searchFieldWrapper">
                                <p class="searchPrompt">cari produk</p>
                                <img class="searchIcon" src="/assets/10e024d110ae3a9dcd6a1befd5e1bd56.svg" />
                            </div>
                        </div>
                        <img class="infoIcon" src="/assets/62b988033f448bf06b044a5d869ceec8.svg" />
                    </div>

                    <p class="productName" id="productName">Nama Produk</p>

                    <div class="pricingSectionContainer">
                        <p class="productPrice" id="productPrice">IDR 0</p>
                        <div class="certificationsContainer" id="certificationsContainer">
                            <!-- Sertifikat ditambahkan dinamis jika ada -->
                        </div>
                    </div>

                    <p class="productDescription" id="productDescription">Deskripsi produk...</p>

                    <div class="featureContainer">
                        <div class="featureLabelContainer">
                            <p class="featureLabelDescription">Deskripsi</p>
                            <p class="featureLabelCompatibility">Kompatibel</p>
                        </div>
                        <div class="featureToggleContainer">
                            <p class="expandFeatureToggle">+</p>
                            <p class="collapseFeatureToggle">-</p>
                        </div>
                    </div>
                    <p class="productUsage" id="productUsage">Kompatibilitas penggunaan</p>

                    <p class="addToCartBtn">Tambah ke Keranjang</p>
                </div>
            </div>

          <article class="reviewSection">
                <div class="reviewHeader">
                    <hr class="dividerLine" size="1" />
                    <p class="reviewTitle">Ulasan Pembeli</p>
                    <hr class="dividerLine" size="1" />
                </div>
                <a class="moreReviews" href="{{ route('pembelian/review') }}" >lainnya</a>
                <div class="reviewList" id="reviewList">
                    <!-- Ulasan akan dimuat dari API -->
                </div>
            </article>
        </div>
    </section>
</main>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/pembelian.js') }}"></script>
<script src="{{ asset('js/review.js') }}"></script>

@endsection