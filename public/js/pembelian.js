
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

document.addEventListener('DOMContentLoaded', function () {
    // Get product ID from URL or data attribute
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('product_id') || document.querySelector('.addToCartBtn').dataset.productId || 1;

    // Handle click on cart logo (infoIcon) to redirect to cart page
    const cartIcon = document.querySelector('.infoIcon');
    if (cartIcon) {
        cartIcon.addEventListener('click', function () {
            window.location.href = '/cart';
        });
    }

    // Handle click on "Tambah ke Keranjang" button
    const addToCartButton = document.querySelector('.addToCartBtn');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function () {
            const token = localStorage.getItem('token');
            if (!token) {
                alert('Please login to add items to cart.');
                window.location.href = '/login';
                return;
            }

            const quantity = 1;

            // Fetch CSRF cookie for Sanctum
            axios.get('/sanctum/csrf-cookie').then(() => {
                axios.post('/api/cart', {
                    product_id: productId,
                    quantity: quantity
                }, {
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.data.status === 'success') {
                        alert('Item successfully added to cart!');
                    } else {
                        alert('Failed to add item to cart: ' + response.data.message);
                    }
                })
                .catch(error => {
                    console.error('Error adding to cart:', error.response);
                    if (error.response && error.response.status === 401) {
                        alert('Session expired. Please login again.');
                        localStorage.removeItem('token');
                        window.location.href = '/login';
                    } else {
                        alert('Error adding item to cart: ' + (error.response?.data?.message || 'Please try again.'));
                    }
                });
            }).catch(error => {
                console.error('Error fetching CSRF cookie:', error);
                alert('Error initializing request. Please try again.');
            });
        });
    }
});

