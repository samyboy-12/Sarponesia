@extends('layout')

@section('styles')
    <!-- CSS khusus untuk halaman ini -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingPage.css') }}" />
@endsection

@section('content')

<section class="qualityCoffeeShowcaseSection">
    <!-- Section showcasing quality coffee choices for businesses. -->
    <img class="coffeeImageFigure" src="{{ asset('assets/88339e075066c2268f2625ae986c9e3c.png') }}" alt="alt text" />
    <div class="flexibleColumnContainer">
        <!-- Flexible column layout for header content. -->
        <h1 class="heroTitle">TEMUKAN KOPI PILIHAN DAN BERKUALITAS UNTUK BISNISMU !!</h1>
        <h2 class="mediumDescriptionTitle">&quot;Nikmati kopi dengan kualitas terbaik, yang diproses secara modern dan higienis, mulai dari pemetikan kopi pilihan hingga proses pemanggangan yang sempurna. Hasilkan cita rasa lezat yang cocok untuk semua kreasi minuman kopi favorit Anda.&quot;</h2>
    </div>
</section>

<section class="journeyToCoffeeSection">
    <div class="flexColumnContainer">
        <h1 class="journeyHeroTitle">Perjalanan Menuju Kopi</h1>
        <h2 class="journeyMediumTitle">Menanam, merawat, memanen, menggiling, menyeduh</h2>
        <img class="journeyImage" src="{{ asset('assets/567bafdcdd2feb966140404c6ba4deab.svg') }}" alt="alt text" />
    </div>
</section>

<section class="learnAboutCoffeeSection" style="--src: url('{{ asset('assets/50c617c06a35de24617970a095d3f592.png') }}');">
</section>

<section class="productsAndServicesSection">
    <div class="flexColumn1">
        <h1 class="productsAndServicesTitle">Produk dan Jasa kami</h1>
        <div class="flexRow1">
            <div class="trainingContentBox" style="--src:url('{{ asset('assets/e81e366d55b6d5f48503740daa95fb7d.png') }}');">
                <!-- Content box for training services -->
                <button class="trainingBtn">Pelatihan</button>
            </div>
            <div class="toolsContentBox" style="--src:url('{{ asset('assets/dc7f587651a62c2a30887ed5c9e415c0.png') }}');">
                <button class="toolsBtn">Alat</button>
            </div>
            <div class="seedsContentBox" style="--src:url('{{ asset('assets/f9daa66aa4b566f2cc75b48441757764.png') }}');">
                <button class="seedsBtn">Benih</button>
            </div>
            <div class="readyToBrewContentBox" style="--src:url('{{ asset('assets/3303e2669bc99b8f32ca4f39b5597142.png') }}');">
                <button class="readyToBrewBtn">Kopi Siap Seduh</button>
            </div>
        </div>
    </div>
</section>

<section class="bestProductsSection">
    <div class="flexRow2">
        <div class="flexColumn2">
            <h1 class="heroTitle2">Produk Terbaik</h1>
            <div class="contentBox1" style="--src:url('{{ asset('assets/91bb54a3c92e27aa69f455935af52957.png') }}');">
                <div class="flexRowContent">
                    <img class="productImage1" src="{{ asset('assets/29ccc7730092c0cec5a0a6f30edb59a0.png') }}" alt="alt text" />
                    <img class="productImage2" src="{{ asset('assets/fae27253020f1ffebb372f466fda02e8.png') }}" alt="alt text" />
                </div>
            </div>
        </div>
        <div class="flexColumnDetails">
            <h1 class="bigTitle">Fine Robusta Pacitan</h1>
            <h2 class="mediumTitle">Kopi bubuk robusta 500gr dari Kebun Kopi Tejo, Pacitan, Jawa Timur...</h2>
            <button class="buyNowButton">Beli Sekarang</button>
        </div>
    </div>
</section>

<section class="customerTestimonialsSection">
    <div class="flexColumnContainer1">
        <h1 class="customerStoryTitle">Cerita Pelanggan</h1>
        <div class="testimonialBox">
            <div class="testimonialContentBox">
                <h3 class="customerReviewSubtitle">Puas borong kopi di Sarponesia Coffee...</h3>
                <div class="flexColumnItem">
                    <img class="customerImage" src="{{ asset('assets/4c1ccfd18632f299d182f41144a8be79.png') }}" alt="alt text" />
                    <figcaption class="customerName">Farid</figcaption>
                </div>
            </div>
            <div class="secondTestimonialBox">
                <h3 class="secondCustomerReviewSubtitle">Saat kemasan dibuka, aroma khas robusta...</h3>
                <div class="flexColumnItemSecond">
                    <img class="secondCustomerImage" src="{{ asset('assets/bfde494a72e6809235efb4707021e7de.png') }}" alt="alt text" />
                    <figcaption class="secondCustomerName">Ferdi</figcaption>
                </div>
            </div>
            <h2 class="additionalCustomerReview">Puas bener sama kopi pacitan...</h2>
            <div class="flexColumnItemThird">
                <img class="thirdCustomerImage" src="{{ asset('assets/c8d3a6c2ae1adbe3166a7068ed8e4808.png') }}" alt="alt text" />
                <figcaption class="thirdCustomerName">Candra</figcaption>
            </div>
        </div>
    </div>
</section>

<section class="kegiatanPelatihanSection">
    <div class="flexColumn3">
        <div class="flexRow3">
            <div class="flexCol1">
                <h1 class="heroTitle3">Kegiatan dan Pelatihan Bersama Sarponesia</h1>
                <img class="activityImage" src="{{ asset('assets/a512fee77b4354fe3cc2aac7cfe4c925.svg') }}" alt="alt text" />
            </div>
            <div class="flexCol2">
                <div class="flexCol3">
                    <h3 class="trainingTitle1">Pelatihan Perawatan Kebun</h3>
                    <p class="trainingDescription1">Lorem Ipsum...</p>
                </div>
                <div class="flexCol4">
                    <h3 class="trainingTitle2">Pelatihan Barista dan Roastery</h3>
                    <p class="trainingDescription2">Lorem Ipsum...</p>
                </div>
            </div>
            <div class="flexCol5">
                <div class="flexCol6">
                    <h3 class="trainingTitle3">Pengolahan Pasca Panen</h3>
                    <p class="trainingDescription3">Lorem Ipsum...</p>
                </div>
                <div class="flexCol7">
                    <h3 class="trainingTitle4">Perawatan dan stek Kopi</h3>
                    <p class="trainingDescription4">Lorem Ipsum...</p>
                </div>
            </div>
        </div>
        <h3 class="seeMoreTitle">Selengkapnya   -&gt;</h3>
    </div>
</section>

<section class="teamSection">
    <div class="flexColumn4">
        <h1 class="teamTitle">Tim Kami</h1>
        <h1 class="teamSubtitle">Andalan petani, roaster...</h1>
        <div class="groupContainer">
            <div class="teamMemberCard">
                <img class="teamMemberImage" src="{{ asset('assets/59de6769d30ae041f9395d1999ed2a67.png') }}" alt="alt text" />
            </div>
            <div class="secondTeamMemberCard">
                <img class="secondTeamMemberImage" src="{{ asset('assets/59de6769d30ae041f9395d1999ed2a67.png') }}" alt="alt text" />
            </div>
            <div class="thirdTeamMemberCard">
                <img class="thirdTeamMemberImage" src="{{ asset('assets/59de6769d30ae041f9395d1999ed2a67.png') }}" alt="alt text" />
            </div>
        </div>
    </div>
</section>

@endsection
