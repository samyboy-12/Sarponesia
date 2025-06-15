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