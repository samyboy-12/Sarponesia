@extends('layout')

@section('styles')
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
    <div class="journeyToCoffeeSectionContainer">
        <h1 class="journeyHeroTitle">Perjalanan Menuju Kopi</h1>
        <h2 class="journeyMediumTitle">Menanam, merawat, memanen, menggiling, menyeduh</h2>
        <img class="journeyImage" src="{{ asset('assets/567bafdcdd2feb966140404c6ba4deab.svg') }}" alt="alt text" />
    </div>
</section>

<section class="learnAboutCoffeeSection" style="--src: url('{{ asset('assets/50c617c06a35de24617970a095d3f592.png') }}');">
    <div class="learnAboutCoffeeSectionColumn">
        <h1 class="heroTitle1">Belajar Tentang Kopi</h1>
          <h2 class="mediumDescription">
            <!-- Main description text related to coffee --> 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            <br />
          </h2>
            <button class="learnMoreBtn">
                <!-- TODO --> 
                Selengkapnya
            </button>
        </div>
</section>

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
                    <p class="trainingDescription1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                </div>
                <div class="flexCol4">
                    <h3 class="trainingTitle2">Pelatihan Barista dan Roastery</h3>
                    <p class="trainingDescription2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                </div>
            </div>
            <div class="flexCol5">
                <div class="flexCol6">
                    <h3 class="trainingTitle3">Pengolahan Pasca Panen</h3>
                    <p class="trainingDescription3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                </div>
                <div class="flexCol7">
                    <h3 class="trainingTitle4">Perawatan dan stek Kopi</h3>
                    <p class="trainingDescription4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                </div>
            </div>
        </div>
        <h3 class="seeMoreTitle">Selengkapnya   -&gt;</h3>
    </div>
</section>



<section class="teamSection">
        <!-- This section showcases the team members associated with the coffee community. --> 
        <div class="flexColumn4">
          <h1 class="teamTitle">Tim Kami</h1>
          <h1 class="teamSubtitle">Andalan petani, roaster, pelaku bisnis, dan pecinta kopi di berbagai belahan dunia</h1>
          <div class="groupContainer">
            <div class="teamMemberCard">
              <!-- Card for displaying individual team member&#x27;s information. --> 
              <img class="memberImageRara" src="/assets/dfca554b07198c19b7519ddab876d874.png" alt="alt text" />
              <div class="memberInfoRara">
                <h2 class="memberNameRara">Rara</h2>
                <p class="memberRoleRara">Barista</p>
              </div>
              <div class="teamMemberCardJacob">
                <img class="memberImageJacob" src="/assets/48062dfe0a680c3205ea08be6134dc8b.png" alt="alt text" />
                <div class="memberInfoJacob">
                  <h2 class="memberNameJacob">Jacob</h2>
                  <p class="memberRoleJacob">Spesialis</p>
                </div>
              </div>
            </div>
            <div class="teamMemberCardRuddy">
              <img class="memberImageRuddy" src="/assets/a8e2e0ae3d3fa3de68af1092b5aef7ef.png" alt="alt text" />
              <div class="memberInfoRuddy">
                <h2 class="memberNameRuddy">Ruddy</h2>
                <p class="memberRoleRuddy">Quality Control</p>
              </div>
              <div class="teamMemberCardParno">
                <img class="memberImageParno" src="/assets/2e7561e196126cdc6b8fb23f2227393d.png" alt="alt text" />
                <div class="memberInfoParno">
                  <h2 class="memberNameParno">Parno</h2>
                  <p class="memberRoleParno">Latte artist</p>
                </div>
              </div>
            </div>
            <img class="communityImage" src="/assets/14af3d87fc833ecf0348ea60373c6e98.png" alt="alt text" />
            <div class="memberInfoDamis">
              <h2 class="memberNameDamis">Damis</h2>
              <p class="memberRoleDamis">Perawat Kebun</p>
            </div>
          </div>
          <h2 class="platformDescription">Platform ini dibangun oleh para pecinta kopi, untuk para pecinta kopi, sebagai ruang untuk berbagi passion dan cinta mereka terhadap kopi dengan dunia.</h2>
          <button class="viewOurCommunityButton">
            <!-- TODO --> 
            Lihat Komunitas Kami
          </button>
        </div>
</section>

@endsection
