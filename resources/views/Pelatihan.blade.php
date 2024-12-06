@extends('Layout.layout1')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pelatihan.css') }}" />
@endsection
@section('scripts')
<script src="{{ asset('js/pelatihan.js') }}"></script>
@endsection

@section('main')
<main class="pelatihan main">

    <div class="content">
        <section class="trainingHeroSection" style="--src:url(/assets/b97cf4b8fac27e24fd81a4a8fd267e5b.png)">
            <!-- Hero section showcasing coffee training services -->
            <div class="heroWrapper">
                <div class="contentGroup">
                    <article class="mainHeading">Dukung perkembangan industri kopi Anda melalui berbagai layanan pelatihan yang telah dirancang khusus</article>
                </div>
                <article class="subHeading">Sarponesia Kopi telah merancang berbagai materi pelatihan untuk memperluas pengetahuan dan menunjang perkembangan industri kopi di Indonesia</article>
            </div>
            <img class="trainingImg" src="/assets/6c6991fdb8951e7480dc65c0cb10eb60.png" alt="alt text" />
        </section>
    </div>

    <div class="content">
        <section class="specializedTrainingSection">
            <div class="trainingContainer">
                <p class="sectionTitle">Training Khusus</p>
                <div class="trainingGrid">
                    <article class="trainingCard">
                        <div class="cardContent">
                            <img class="cardImg" src="/assets/0caba3eea612d0e3f37c28aab3dd6be5.png" alt="alt text" />
                            <p class="cardTitle">Barista &amp; Roastery</p>
                        </div>
                    </article>
                    <article class="trainingCard">
                        <div class="cardContent1">
                            <img class="cardImg" src="/assets/741e0fc82759598622b6252d3faf5aa3.png" alt="alt text" />
                            <p class="cardTitle1">Perawatan Kebun</p>
                        </div>
                    </article>
                    <article class="trainingCard">
                        <div class="cardContent2">
                            <img class="cardImg" src="/assets/c83944a4affc94166599786fe963fe4b.png" alt="alt text" />
                            <p class="cardTitle2">Pengolahan Pasca Panen</p>
                        </div>
                    </article>
                    <article class="trainingCard">
                        <div class="cardContent3">
                            <img class="cardImg" src="/assets/d7715798e1e81011f6a406efd51f2a53.png" alt="alt text" />
                            <p class="cardTitle3">Logo dan Branding</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>

    <div class="content">
        <section class="benefitsSection">
            <div class="benefitsWrapper">

                <video class="activityVideo" controls>
                    <source src="https://drive.google.com/uc?id=1qC5zlXZCnJOyW0F0vGUVtRePZup1ATqO" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <article class="benefitsContent">
                    <p class="mainHeading1">Mengapa Memilih Sarponesia Kopi?</p>
                    <article class="featuresList_box">
                        <span class="featuresList">
                            <span class="featuresList_span0">Instruktur Berpengalaman<br /></span>
                            <span class="featuresList_span1">Dilatih langsung oleh para ahli barista dan roaster yang telah berpengalaman bertahun-tahun di industri kopi.<br /></span>
                            <span class="featuresList_span2">Materi Lengkap &amp; Praktik Langsung<br /></span>
                            <span class="featuresList_span3">Pelatihan kami mencakup teori mendalam dan praktik langsung.<br /></span>
                            <span class="featuresList_span4">Sertifikasi Profesional<br /></span>
                            <span class="featuresList_span5">Mendapatkan sertifikat sebagai pengakuan atas keahlian Anda, siap untuk karier di dunia kopi.</span>
                        </span>
                    </article>
                </article>
            </div>
        </section>
    </div>

    <div class="content">
        <section class="coffeeTrainingSection">
            <div class="mainContainer">
                <div class="serviceCategories">
                    <a href="{{ route('pelatihan', ['category' => 'Logo dan Branding']) }}" class="Title {{ $selectedCategory == 'Logo dan Branding' ? 'active' : '' }}">Logo dan Branding</a>
                    <a href="{{ route('pelatihan', ['category' => 'Barista dan Roastery']) }}" class="Title {{ $selectedCategory == 'Barista dan Roastery' ? 'active' : '' }}">Barista &amp; Roastery</a>
                    <a href="{{ route('pelatihan', ['category' => 'Pelatihan Perawatan Kebun']) }}" class="Title {{ $selectedCategory == 'Pelatihan Perawatan Kebun' ? 'active' : '' }}">Perawatan Kebun</a>
                    <a href="{{ route('pelatihan', ['category' => 'Pengolahan Pasca Panen']) }}" class="Title {{ $selectedCategory == 'Pengolahan Pasca Panen' ? 'active' : '' }}">Pengolahan Pasca Panen</a>
                </div>

                <div class="cardContainer">
                    @forelse ($services as $service)
                    <article class="brewingCard">
                        <div class="brewingContent">
                            <img class="brewingImg" src="{{ asset($service->Image_path) }}" alt="{{ $service->Name }}" />
                            <div class="brewingDetails">
                                <p class="brewingTitle">{{ $service->Name }}</p>
                                <p class="brewingDesc">{{ $service->Description }}</p>
                            </div>
                        </div>
                    </article>
                    @empty
                    <p style="color: black">Tidak ada produk yang tersedia dalam kategori ini.</p>
                    @endforelse
                </div>
                <button class="enrollBtn" onclick="window.location.href= 'https://wa.me/6283890958930'">Ikuti Pelatihan</button>
            </div>
        </section>
    </div>
</main>
@endsection