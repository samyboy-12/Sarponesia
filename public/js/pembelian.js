
document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');

    if (!productId) {
        alert('ID produk tidak ditemukan di URL.');
        return;
    }

    axios.get(`/api/products/${productId}`)
        .then(function (response) {
            const product = response.data.data;

            document.getElementById('productCategory').textContent = getCategoryName(product.Category_ID);
            document.getElementById('breadcrumbTitle').textContent = product.Name;
            document.getElementById('productName').textContent = product.Name;
            document.getElementById('productPrice').textContent = new Intl.NumberFormat('id-ID', {
                style: 'currency', currency: 'IDR'
            }).format(product.Price);
            document.getElementById('productDescription').textContent = product.Description;
            document.getElementById('productUsage').textContent = "Digunakan sesuai kategori: " + getCategoryName(product.Category_ID);

            // Gambar utama dan sekunder (fallback jika tidak tersedia)
            document.getElementById('secondaryImage').src = '/' + product.Image_path;
        })
        .catch(function (error) {
            console.error('Gagal memuat data produk:', error);
        });

    function getCategoryName(categoryId) {
        switch (parseInt(categoryId)) {
            case 1: return 'Kopi';
            case 2: return 'Benih';
            case 3: return 'Pupuk';
            case 4: return 'Alat';
            default: return 'Tidak Diketahui';
        }
    }
});

