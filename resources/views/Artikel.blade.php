@extends('Layout.layout1')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/artikel.css') }}" />
@endsection

@section('main')
<main class="artikel main">
    <section class="blogHeroSection" style="background-image: url('{{ asset('assets/16890750ad3e3ee45a6001040ec6a207.png') }}');">
        <div class="contentWrapper">
            <p class="mainHeading">Baca Informasi Terbaru Tentang Kopi Disini!</p>
            <p class="subHeading">Cari tahu tips n trik dan informasi menarik lainnya yang telah dikemas secara rapi sehingga mudah dipahami</p>
        </div>
    </section>

    <section class="blogCategorySection">
        <div class="containerWrapper">
            <div class="topContainer">
                <p class="categoryHeading">Kategori Artikel</p>
                <div class="categoryCardGrid">
                    <a href="{{ route('artikel', ['category' => 'News']) }}" class="newsCardItem {{ request('category') == 'News' ? 'active' : '' }}" style="background-image: url('{{ asset('assets/d044a548fdf8d18044a724305ff309ee.png') }}');">
                        <p class="cardHeading">NEWS</p>
                    </a>
                    <a href="{{ route('artikel', ['category' => 'Coffee Technology']) }}" class="techCardItem {{ request('category') == 'Coffee Technology' ? 'active' : '' }}" style="background-image: url('{{ asset('assets/a810d9a0eeeda60714ee7d27fc516537.png') }}');">
                        <p class="cardHeading1">COFFEE TECHNO<br>LOGY</p>
                    </a>
                    <a href="{{ route('artikel', ['category' => 'Tips and Trick']) }}" class="tipsCardItem {{ request('category') == 'Tips and Trick' ? 'active' : '' }}" style="background-image: url('{{ asset('assets/2a1813239c478ea2ca7b00c95264dd97.png') }}');">
                        <p class="cardHeading2">TIPS AND TRICK</p>
                    </a>
                </div>
            </div>

            <!-- Artikel akan dimuat oleh JavaScript -->
            <div id="article-container" class="featuredArticleWrapper">
                <p>Memuat artikel...</p>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('article-container');
        container.innerHTML = '';

        axios.get('/api/articles')
            .then(function (response) {
                const articles = response.data.data;

                if (articles.length === 0) {
                    container.innerHTML = '<p>Tidak ada artikel ditemukan.</p>';
                    return;
                }

                articles.forEach(article => {
                    const articleHTML = `
                        <div class="featuredArticle">
                            <article class="mainArticle" style="background-image: url('{{ asset('assets/ab721821ee586d886b82ec3cc2f48f30.png') }}');">
                                <p class="mainTitle">${article.Title}</p>
                            </article>
                            <article class="articlePreviewBox">
                                <div class="previewContent">
                                    <div class="articleMeta">
                                        <p class="contentTitle">${article.Title}</p>
                                        <p class="contentDesc">${article.Author ?? 'Unknown Author'}</p>
                                    </div>
                                    <p class="contentSummary">${article.Content.substring(0, 150)}...</p>
                                    <a class="readMoreBtn" href="/sub-artikel/${article.id}">Baca Selengkapnya</a>
                                </div>
                                <figure class="imageGrid">
                                    <img class="galleryImage" src="{{ asset('assets/76e99e04c253893a1f9f89aade6fd43a.png') }}" alt="alt text" />
                                    <img class="galleryImage" src="{{ asset('assets/715ffbe22a4a63bb5d28d740f8c76d89.png') }}" alt="alt text" />
                                    <img class="galleryImage" src="{{ asset('assets/4d22747286e98f2942899e02eb52b63a.png') }}" alt="alt text" />
                                </figure>
                            </article>
                        </div>
                    `;
                    container.innerHTML += articleHTML;
                });
            })
            .catch(function (error) {
                console.error(error);
                container.innerHTML = '<p>Gagal memuat artikel. Silakan coba lagi nanti.</p>';
            });
    });
</script>
@endsection
