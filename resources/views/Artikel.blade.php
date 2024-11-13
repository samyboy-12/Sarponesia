@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/artikel.css') }}" />
@endsection

@section('main')
<main class="artikel main">
    <section class="blogHeroSection" style="background-image: url('{{ asset('assets/16890750ad3e3ee45a6001040ec6a207.png') }}');">
        <!-- Hero section for coffee blog information -->
        <div class="contentWrapper">
            <p class="mainHeading">Baca Informasi Terbaru Tentang Kopi Disini!</p>
            <p class="subHeading">Cari tahu tips n trik dan informasi menarik lainnya yang telah dikemas secara rapi sehingga mudah dipahami</p>
        </div>
    </section>

    <section class="blogCategorySection">
        <!-- Blog category showcase with featured articles and highlights -->
        <div class="containerWrapper">
            <div class="topContainer">
                <p class="categoryHeading">Kategori Artikel</p>
                <div class="categoryCardGrid">
                    <!-- Grid layout for category cards -->
                    <article class="newsCardItem" style="background-image: url('{{ asset('assets/d044a548fdf8d18044a724305ff309ee.png') }}');"><p class="cardHeading">NEWS</p></article>
                    <article class="techCardItem" style="background-image: url('{{ asset('assets/a810d9a0eeeda60714ee7d27fc516537.png') }}');"><p class="cardHeading1">COFFEE TECHNOLOGY</p></article>
                    <article class="tipsCardItem" style="background-image: url('{{ asset('assets/2a1813239c478ea2ca7b00c95264dd97.png') }}');"><p class="cardHeading2">TIPS AND TRICK</p></article>
                </div>
            </div>
            <div class="featuredArticle">
                <!-- Featured article showcase -->
                <article class="mainArticle" style="background-image: url('{{ asset('assets/ab721821ee586d886b82ec3cc2f48f30.png') }}');"><p class="mainTitle">Dibalik Layar Nikmatnya Secangkir Kopi</p></article>
                <article class="articlePreviewBox">
                    <div class="previewContent">
                        <div class="articleMeta">
                            <p class="contentTitle">Judul Artikel</p>
                            <p class="contentDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <p class="contentSummary">Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="readMoreBtn">Baca Selengkapnya</a>
                    </div>
                    <figure class="imageGrid">
                        <!-- Image gallery grid -->
                        <img class="galleryImage" src="{{ asset('assets/76e99e04c253893a1f9f89aade6fd43a.png') }}" alt="alt text" />
                        <img class="galleryImage" src="{{ asset('assets/715ffbe22a4a63bb5d28d740f8c76d89.png') }}" alt="alt text" />
                        <img class="galleryImage" src="{{ asset('assets/4d22747286e98f2942899e02eb52b63a.png') }}" alt="alt text" />
                    </figure>
                </article>
            </div>
            <div class="additionalContent">
                <aside class="sidebarWidget">
                    <div class="widgetContent">
                        <p class="widgetTitle">Judul Artikel</p>
                        <p class="widgetDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="widgetFooter">
                        <a class="readMoreBtn1">Baca Selengkapnya</a>
                        <img class="arrowIcon" src="{{ asset('assets/6fc39590f1d8a43789b7269fced4abe8.svg') }}" alt="alt text" />
                    </div>
                </aside>
                <article class="spotlightCard" style="background-image: url('{{ asset('assets/d904c5f74586102e7f9232763e9be77b.png') }}');"><p class="spotlightTitle">Menemukan Rasa Pekat Dalam Kopi</p></article>
                <div class="topicList">
                    <p class="topicHeading">Sub Judul</p>
                    <p class="topicContent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="topicHeading1">Sub Judul</p>
                    <p class="topicContent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
