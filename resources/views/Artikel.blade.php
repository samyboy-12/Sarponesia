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
                    <a href="{{ route('artikel', ['category_id' => 7]) }}" class="newsCardItem {{ request('category_id') == 7 ? 'active' : '' }}" style="background-image: url('{{ asset('assets/d044a548fdf8d18044a724305ff309ee.png') }}');">
                        <p class="cardHeading">NEWS</p>
                    </a>
                    <a href="{{ route('artikel', ['category_id' => 8]) }}" class="techCardItem {{ request('category_id') == 8 ? 'active' : '' }}" style="background-image: url('{{ asset('assets/a810d9a0eeeda60714ee7d27fc516537.png') }}');">
                        <p class="cardHeading1">COFFEE TECHNO<br>LOGY</p>
                    </a>
                    <a href="{{ route('artikel', ['category_id' => 9]) }}" class="tipsCardItem {{ request('category_id') == 9 ? 'active' : '' }}" style="background-image: url('{{ asset('assets/2a1813239c478ea2ca7b00c95264dd97.png') }}');">
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
    container.innerHTML = '<p>Memuat artikel...</p>';

    // Get the category_id from the URL query parameter
    const urlParams = new URLSearchParams(window.location.search);
    const categoryId = urlParams.get('category_id') || '';

    // Function to escape HTML to prevent XSS
    function escapeHTML(str) {
        return str.replace(/[&<>"']/g, function (match) {
            return {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#39;'
            }[match];
        });
    }

    // Fetch articles from API
    axios.get('/api/articles', { params: { category_id: categoryId } })
        .then(function (response) {
            const articles = response.data.data;

            if (!Array.isArray(articles) || articles.length === 0) {
                container.innerHTML = '<p>Tidak ada artikel ditemukan.</p>';
                return;
            }

            container.innerHTML = ''; // Clear loading message

            articles.forEach(article => {
                // Use Image_path from API or fallback to a default image
                const imagePath = article.Image_path ? `/storage/${article.Image_path}` : '/assets/ab721821ee586d886b82ec3cc2f48f30.png';
                const articleHTML = `
                    <div class="featuredArticle">
                        <article class="mainArticle" style="background-image: url('${imagePath}');">
                            <p class="mainTitle">${escapeHTML(article.Title)}</p>
                        </article>
                        <article class="articlePreviewBox">
                            <div class="previewContent">
                                <div class="articleMeta">
                                    <p class="contentTitle">${escapeHTML(article.Title)}</p>
                                </div>
                                <p class="contentSummary">${escapeHTML(article.Content.substring(0, 150))}...</p>
                                <a class="readMoreBtn" href="/sub-artikel/${article.Article_ID}">Baca Selengkapnya</a>
                            </div>
                        </article>
                    </div>
                `;
                container.innerHTML += articleHTML;
            });
        })
        .catch(function (error) {
            console.error('Error fetching articles:', error);
            let errorMessage = 'Gagal memuat artikel. Silakan coba lagi nanti.';
            if (error.response) {
                errorMessage = error.response.status === 404
                    ? 'Artikel tidak ditemukan.'
                    : `Kesalahan server: ${error.response.status}`;
            } else if (error.request) {
                errorMessage = 'Tidak dapat terhubung ke server. Periksa koneksi internet Anda.';
            }
            container.innerHTML = `<p>${errorMessage}</p>`;
        });
});
</script>
@endsection