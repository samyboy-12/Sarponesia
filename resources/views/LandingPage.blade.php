@extends('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingPage.css') }}" />
@endsection

@section('main')
<div class="content">
    <section class="qualityCoffeeShowcaseSection">
        <!-- Section showcasing quality coffee choices for businesses. -->
        <img class="coffeeImageFigure" src="{{ asset('assets/88339e075066c2268f2625ae986c9e3c.png') }}" alt="alt text" />
        <div class="flexibleColumnContainer">
            <!-- Flexible column layout for header content. -->
            <h1 class="heroTitle">TEMUKAN KOPI PILIHAN DAN BERKUALITAS UNTUK BISNISMU !!</h1>
            <h2 class="mediumDescriptionTitle">&quot;Nikmati kopi dengan kualitas terbaik, yang diproses secara modern dan higienis, mulai dari pemetikan kopi pilihan hingga proses pemanggangan yang sempurna. Hasilkan cita rasa lezat yang cocok untuk semua kreasi minuman kopi favorit Anda.&quot;</h2>
        </div>
    </section>
</div>

<div class="content">
    <section class="journeyToCoffeeSection">
        <div class="journeyToCoffeeSectionContainer">
            <h1 class="journeyHeroTitle">Perjalanan Menuju Kopi</h1>
            <h2 class="journeyMediumTitle">Menanam, merawat, memanen, menggiling, menyeduh</h2>
            <img class="journeyImage" src="{{ asset('assets/567bafdcdd2feb966140404c6ba4deab.svg') }}" alt="alt text" />
        </div>
    </section>
</div>

<div class="content">
    <section class="learnAboutCoffeeSection" style="--src: url('{{ asset('assets/50c617c06a35de24617970a095d3f592.png') }}');">
        <div class="learnAboutCoffeeSectionColumn">
            <h1 class="heroTitle1">Belajar Tentang Kopi</h1>
            <h2 class="mediumDescription">
                <!-- Main description text related to coffee -->
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                <br />
            </h2>
            <button class="learnMoreBtn">Selengkapnya</button>
        </div>
    </section>
</div>

<div class="content">
    <section class="productsAndServicesSection">
        <div class="flexColumn1">
            <h1 class="productsAndServicesTitle">Produk dan Jasa Kami</h1>
            <div class="flexRow1">
                <div class="kontenpelatihan" style="background-image: url('{{ asset('assets/e81e366d55b6d5f48503740daa95fb7d.png') }}');">
                    <button class="contentBtn">Pelatihan</button>
                </div>
                <div class="kontenpelatihan" style="background-image: url('{{ asset('assets/dc7f587651a62c2a30887ed5c9e415c0.png') }}');">
                    <button class="contentBtn">Alat</button>
                </div>
                <div class="kontenpelatihan" style="background-image: url('{{ asset('assets/f9daa66aa4b566f2cc75b48441757764.png') }}');">
                    <button class="contentBtn">Benih</button>
                </div>
                <div class="kontenpelatihan" style="background-image: url('{{ asset('assets/3303e2669bc99b8f32ca4f39b5597142.png') }}');">
                    <button class="contentBtn">Kopi Siap Seduh</button>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="content">
    <section class="bestProductsSection">
        <div class="flexRow2">
            <div class="flexColumn2">
                <h1 class="heroTitle2">Produk Terbaik</h1>
                <div class="produk" style="background-image: url('{{ asset('assets/91bb54a3c92e27aa69f455935af52957.png') }}');">
                    <div class="flexRowContent">
                        <img class="productImage" src="{{ asset('assets/29ccc7730092c0cec5a0a6f30edb59a0.png') }}" alt="Gambar produk 1" />
                        <img class="productImage" src="{{ asset('assets/fae27253020f1ffebb372f466fda02e8.png') }}" alt="Gambar produk 2" />
                    </div>
                </div>
            </div>
            <div class="flexColumnDetails">
                <h1 class="bigTitle">Fine Robusta Pacitan</h1>
                <h2 class="mediumTitle">Kopi bubuk robusta 500gr dari Kebun Kopi Tejo, Pacitan, Jawa Timur, dipanggang dengan roast level medium city roasted. Berasal dari ketinggian 600-750 mdpl, menggunakan proses natural dan honey. Grind size very fine, cocok untuk espresso atau manual brew. Rasakan keseimbangan rasa robusta yang kaya dan aroma yang mendalam.</h2>
                <button class="buyNowButton">Beli Sekarang</button>
            </div>
        </div>
    </section>
</div>

<div class="content">
    <section class="customerTestimonialsSection">
        <div class="flexColumnContainer1">
            <h1 class="customerStoryTitle">Cerita Pelanggan</h1>
            <div class="testimonialBox">
                <div class="testimonialContentBox">
                    <h3 class="customerReviewSubtitle">Puas borong kopi di Sarponesia Coffee, rasa dan kenikmatan kopi Robusta Pacitan memang tiada duanya...terima kasih</h3>
                    <div class="flexColumnItem">
                        <img class="customerImage" src="{{ asset('assets/4c1ccfd18632f299d182f41144a8be79.png') }}" alt="alt text" />
                        <figcaption class="customerName">Farid</figcaption>
                    </div>
                </div>
                <div class="secondTestimonialBox">
                    <h3 class="secondCustomerReviewSubtitle">Saat kemasan dibuka, aroma khas robusta yang kuat langsung tercium, dengan sentuhan cokelat hitam dan aroma rempah yang menarik.</h3>
                    <div class="flexColumnItemSecond">
                        <img class="secondCustomerImage" src="{{ asset('assets/bfde494a72e6809235efb4707021e7de.png') }}" alt="alt text" />
                        <figcaption class="secondCustomerName">Ferdi</figcaption>
                    </div>
                </div>
                <h2 class="additionalCustomerReview">Puas bener sama kopi pacitan, udah 3x order disini dan gapernah kecewa sama kopi + service penjualnya. Sukses terus sarponesia</h2>
                <div class="flexColumnItemThird">
                    <img class="thirdCustomerImage" src="{{ asset('assets/c8d3a6c2ae1adbe3166a7068ed8e4808.png') }}" alt="alt text" />
                    <figcaption class="thirdCustomerName">Candra</figcaption>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="content">
    <section class="kegiatanPelatihanSection">
        <div class="flexColumn3">
            <div class="flexRow3">
                <div class="flexCol1">
                    <h1 class="heroTitle3">Kegiatan dan Pelatihan Bersama Sarponesia</h1>
                    <video class="activityVideo" controls>
                        <source src="https://drive.google.com/uc?id=1qC5zlXZCnJOyW0F0vGUVtRePZup1ATqO" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="flexCol2">
                    <div class="flexCol3">
                        <h3 class="trainingTitle1">Pelatihan Perawatan Kebun</h3>
                        <p class="trainingDescription1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                    </div>
                    <div class="flexCol4">
                        <h3 class="trainingTitle2">Pelatihan Barista dan Roastery</h3>
                        <p class="trainingDescription2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                    </div>
                </div>
                <div class="flexCol5">
                    <div class="flexCol6">
                        <h3 class="trainingTitle3">Pelatihan Kopi Siap Seduh</h3>
                        <p class="trainingDescription3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
