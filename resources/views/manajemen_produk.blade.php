<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarponesia - Manajemen Produk</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background-color: #3a2317;
            color: white;
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .logo {
            margin-bottom: 3rem;
        }

        .logo h1 {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .logo p {
            font-size: 0.75rem;
            opacity: 0.8;
            margin-top: 0.25rem;
            letter-spacing: 1px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            padding-left: 0.5rem;
            border-radius: 6px;
        }

        .nav-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            padding-left: 0.5rem;
            border-radius: 6px;
        }

        .nav-icon {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        .logout-btn {
            margin-top: auto;
            padding: 0.75rem 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #2d3748;
        }

        .user-info {
            display: flex;
            align-items: center;
            background: white;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background-color: #e2e8f0;
            border-radius: 6px;
            margin-right: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #4a5568;
        }

        .user-details h3 {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2d3748;
        }

        .user-details p {
            font-size: 0.75rem;
            color: #718096;
        }

        /* Product Management */
        .product-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .product-tabs {
            display: flex;
            background-color: #f8f9fa;
            padding: 0.5rem;
            gap: 0.25rem;
        }

        .tab {
            padding: 0.75rem 1.5rem;
            border: none;
            background: transparent;
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab:hover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        .tab.active {
            background-color: #8b5a3c;
            color: white;
        }

        .product-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #e9ecef;
        }

        .search-container {
            position: relative;
            flex: 1;
            max-width: 400px;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem;
            padding-right: 3rem;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #8b5a3c;
        }

        .search-btn {
            position: absolute;
            right: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            color: #6c757d;
            font-size: 1.1rem;
        }

        .action-buttons {
            display: flex;
            gap: 0.75rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-add {
            background-color: #8b5a3c;
            color: white;
        }

        .btn-add:hover {
            background-color: #7a4d33;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Product Table */
        .product-table {
            width: 100%;
        }

        .table-header {
            background-color: #f8f9fa;
            padding: 1rem 1.5rem;
            display: grid;
            grid-template-columns: 50px 200px 150px 250px 120px 100px 100px 100px;
            gap: 1rem;
            align-items: center;
            font-weight: 600;
            color: #495057;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table-row {
            padding: 1.25rem 1.5rem;
            display: grid;
            grid-template-columns: 50px 200px 150px 250px 120px 100px 100px 100px;
            gap: 1rem;
            align-items: center;
            border-bottom: 1px solid #e9ecef;
            transition: background-color 0.2s ease;
        }

        .table-row:hover {
            background-color: #f8f9fa;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
        }

        .product-name {
            font-weight: 500;
            color: #2d3748;
        }

        .product-category {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .product-description {
            color: #6c757d;
            font-size: 0.85rem;
            line-height: 1.4;
        }

        .price {
            font-weight: 600;
            color: #2d3748;
        }

        .stock {
            color: #6c757d;
        }

        .product-image {
            height: 50px;
            border-radius: 4px;
        }

        .edit-icon {
            color: #6c757d;
            cursor: pointer;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .edit-icon:hover {
            color: #8b5a3c;
        }

        .empty-state {
            padding: 2rem;
            text-align: center;
            color: #6c757d;
            font-size: 1rem;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2d3748;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #6c757d;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #2d3748;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #8b5a3c;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.8rem;
            margin-top: 0.25rem;
            display: none;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
        }

        .btn-submit {
            background-color: #8b5a3c;
            color: white;
        }

        .btn-submit:hover {
            background-color: #7a4d33;
        }

        .image-preview {
            margin-top: 0.5rem;
            max-width: 100%;
            max-height: 100px;
            border-radius: 4px;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sidebar {
                width: 250px;
            }
            
            .table-header,
            .table-row {
                grid-template-columns: 40px 180px 130px 200px 100px 80px 80px 80px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                z-index: 1000;
                transition: left 0.3s ease;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
            
            .product-controls {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
            
            .table-header,
            .table-row {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }

            .modal-content {
                margin: 1rem;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <h1>SARPONESIA</h1>
            <p>INDONESIA COFFEE</p>
        </div>
        
        <nav>
            <a href="#" class="nav-item active">
                <span class="nav-icon">📦</span>
                Manajemen Produk
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">🛠️</span>
                Manajemen layanan & Jasa
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">📋</span>
                Order
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">📄</span>
                Manajemen Artikel
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">🤝</span>
                Manajemen Kerjasama
            </a>
        </nav>
        
        <button class="logout-btn">Keluar</button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1 class="page-title">Manajemen Produk</h1>
            <div class="user-info">
                <div class="user-avatar">J</div>
                <div class="user-details">
                    <h3>Jacob</h3>
                    <p>Admin 2</p>
                </div>
            </div>
        </div>

        <div class="product-section">
            <div class="product-tabs">
                <button class="tab" data-category="Benih">Benih</button>
                <button class="tab active" data-category="Pupuk">Pupuk</button>
                <button class="tab" data-category="Alat">Alat</button>
                <button class="tab" data-category="Kopi">Kopi</button>
            </div>

            <div class="product-controls">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Cari Produk">
                    <button class="search-btn">🔍</button>
                </div>
                <div class="action-buttons">
                    <button class="btn btn-add" id="add-product-btn">Tambah</button>
                    <button class="btn btn-delete" id="delete-product-btn">Hapus</button>
                </div>
            </div>

            <div class="product-table" id="product-table">
                <div class="table-header">
                    <div></div>
                    <div>Nama</div>
                    <div>Kategori</div>
                    <div>Deskripsi</div>
                    <div>Harga</div>
                    <div>Stok</div>
                    <div>Gambar</div>
                    <div>Aksi</div>
                </div>
                <div id="product-rows"></div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding/Editing Product -->
    <div class="modal" id="product-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Tambah Produk Baru</h2>
                <button class="close-btn" id="close-modal-btn">×</button>
            </div>
            <div class="form-group">
                <label for="product-name">Nama Produk *</label>
                <input type="text" id="product-name" placeholder="Masukkan nama produk">
                <div class="error-message" id="error-name">Nama produk wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="product-category">Kategori *</label>
                <select id="product-category">
                    <option value="">Pilih kategori</option>
                    <option value="1">Kopi</option>
                    <option value="2">Benih</option>
                    <option value="3">Pupuk</option>
                    <option value="4">Alat</option>
                </select>
                <div class="error-message" id="error-category">Kategori wajib dipilih</div>
            </div>
            <div class="form-group">
                <label for="product-description">Deskripsi *</label>
                <textarea id="product-description" placeholder="Masukkan deskripsi produk"></textarea>
                <div class="error-message" id="error-description">Deskripsi wajib diisi</div>
            </div>
            <div class="form-group">
                <label for="product-price">Harga *</label>
                <input type="number" id="product-price" placeholder="Masukkan harga" min="0">
                <div class="error-message" id="error-price">Harga wajib diisi dan harus angka positif</div>
            </div>
            <div class="form-group">
                <label for="product-stock">Stok *</label>
                <input type="number" id="product-stock" placeholder="Masukkan stok" min="0">
                <div class="error-message" id="error-stock">Stok wajib diisi dan harus angka positif</div>
            </div>
            <div class="form-group">
                <label for="product-image">Gambar Produk</label>
                <input type="file" id="product-image" accept="image/*">
                <img id="image-preview" class="image-preview" alt="Pratinjau Gambar">
                <div class="error-message" id="error-image">Gambar wajib diunggah</div>
            </div>
            <div class="form-group">
                <label for="product-tokped">Link Tokopedia</label>
                <input type="url" id="product-tokped" placeholder="Masukkan link Tokopedia (opsional)">
            </div>
            <div class="modal-footer">
                <button class="btn btn-cancel" id="cancel-modal-btn">Batal</button>
                <button class="btn btn-submit" id="submit-product-btn">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        const kategoriMap = {
            1: 'Kopi',
            2: 'Benih',
            3: 'Pupuk',
            4: 'Alat'
        };

        let allProducts = [];
        let selectedProducts = new Set();
        let activeCategory = 'Pupuk';
        let currentProductId = null; // Track product being edited

        function formatRupiah(number) {
            const num = parseFloat(number);
            return isNaN(num) ? '-' : `Rp ${num.toLocaleString('id-ID')}`;
        }

        function loadProducts() {
            fetch('http://localhost:8000/api/products')
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        allProducts = result.data;
                        filterProducts(activeCategory);
                    } else {
                        displayError('Gagal mengambil data produk: ' + result.message);
                    }
                })
                .catch(error => {
                    console.error('Gagal mengambil data produk:', error);
                    displayError('Gagal mengambil data produk');
                });
        }

        function displayProducts(products) {
            const productRows = document.getElementById('product-rows');
            productRows.innerHTML = '';

            if (products.length === 0) {
                productRows.innerHTML = '<div class="empty-state">Tidak ada produk yang ditemukan</div>';
                return;
            }

            products.forEach(product => {
                const row = document.createElement('div');
                row.className = 'table-row';
                row.setAttribute('data-product-id', product.Product_ID);
                row.innerHTML = `
                    <input type="checkbox" class="checkbox" data-product-id="${product.Product_ID}">
                    <div class="product-name">${product.Name}</div>
                    <div class="product-category">${kategoriMap[product.Category_ID] || 'Lainnya'}</div>
                    <div class="product-description">${product.Description}</div>
                    <div class="price">${formatRupiah(product.Price)}</div>
                    <div class="stock">${product.Stock}</div>
                    <div><img src="${product.Image_path}" alt="${product.Name}" class="product-image"></div>
                    <div><span class="edit-icon" data-product-id="${product.Product_ID}">✏️</span></div>
                `;
                productRows.appendChild(row);
            });

            // Re-attach checkbox event listeners
            document.querySelectorAll('.checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const productId = parseInt(this.getAttribute('data-product-id'));
                    if (this.checked) {
                        selectedProducts.add(productId);
                        this.style.backgroundColor = '#8b5a3c';
                        this.style.borderColor = '#8b5a3c';
                    } else {
                        selectedProducts.delete(productId);
                        this.style.backgroundColor = 'transparent';
                        this.style.borderColor = '#dee2e6';
                    }
                });
            });

            // Re-attach edit icon event listeners
            document.querySelectorAll('.edit-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-product-id'));
                    openEditModal(productId);
                });
            });
        }

        function displayError(message) {
            const productRows = document.getElementById('product-rows');
            productRows.innerHTML = `<div class="empty-state">${message}</div>`;
        }

        function filterProducts(category) {
            activeCategory = category;
            const searchTerm = document.querySelector('.search-input').value.toLowerCase();
            const filtered = allProducts.filter(product => 
                (kategoriMap[product.Category_ID] === category) &&
                (product.Name.toLowerCase().includes(searchTerm) ||
                 product.Description.toLowerCase().includes(searchTerm))
            );
            displayProducts(filtered);
        }

        // Modal functionality
        const addProductBtn = document.getElementById('add-product-btn');
        const productModal = document.getElementById('product-modal');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const cancelModalBtn = document.getElementById('cancel-modal-btn');
        const submitProductBtn = document.getElementById('submit-product-btn');
        const modalTitle = document.querySelector('.modal-title');

        function openAddModal() {
            currentProductId = null;
            modalTitle.textContent = 'Tambah Produk Baru';
            submitProductBtn.textContent = 'Simpan';
            resetForm();
            document.getElementById('error-image').textContent = 'Gambar wajib diunggah';
            productModal.classList.add('active');
        }

        function openEditModal(productId) {
            const product = allProducts.find(p => p.Product_ID === productId);
            if (!product) {
                alert('Produk tidak ditemukan');
                return;
            }

            currentProductId = productId;
            modalTitle.textContent = 'Edit Produk';
            submitProductBtn.textContent = 'Perbarui';
            document.getElementById('error-image').textContent = 'Gambar wajib diunggah jika ingin mengganti';

            document.getElementById('product-name').value = product.Name;
            document.getElementById('product-category').value = product.Category_ID;
            document.getElementById('product-description').value = product.Description;
            document.getElementById('product-price').value = product.Price;
            document.getElementById('product-stock').value = product.Stock;
            document.getElementById('product-tokped').value = product.Link_tokped || '';
            
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = product.Image_path;
            imagePreview.style.display = 'block';

            productModal.classList.add('active');
        }

        function closeModal() {
            productModal.classList.remove('active');
        }

        function resetForm() {
            document.getElementById('product-name').value = '';
            document.getElementById('product-category').value = '';
            document.getElementById('product-description').value = '';
            document.getElementById('product-price').value = '';
            document.getElementById('product-stock').value = '';
            document.getElementById('product-image').value = '';
            document.getElementById('product-tokped').value = '';
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = '';
            imagePreview.style.display = 'none';
            document.querySelectorAll('.error-message').forEach(error => {
                error.style.display = 'none';
            });
        }

        function validateForm(isEditMode) {
            let isValid = true;
            const name = document.getElementById('product-name').value.trim();
            const category = document.getElementById('product-category').value;
            const description = document.getElementById('product-description').value.trim();
            const price = parseFloat(document.getElementById('product-price').value);
            const stock = parseInt(document.getElementById('product-stock').value);
            const image = document.getElementById('product-image').files[0];

            if (!name) {
                document.getElementById('error-name').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-name').style.display = 'none';
            }

            if (!category) {
                document.getElementById('error-category').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-category').style.display = 'none';
            }

            if (!description) {
                document.getElementById('error-description').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-description').style.display = 'none';
            }

            if (isNaN(price) || price < 0) {
                document.getElementById('error-price').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-price').style.display = 'none';
            }

            if (isNaN(stock) || stock < 0) {
                document.getElementById('error-stock').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-stock').style.display = 'none';
            }

            if (!isEditMode && !image) {
                document.getElementById('error-image').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('error-image').style.display = 'none';
            }

            return isValid;
        }

        async function submitProduct() {
            const isEditMode = currentProductId !== null;
            if (!validateForm(isEditMode)) return;

            const formData = new FormData();
            formData.append('Name', document.getElementById('product-name').value.trim());
            formData.append('Category_ID', document.getElementById('product-category').value);
            formData.append('Description', document.getElementById('product-description').value.trim());
            formData.append('Price', document.getElementById('product-price').value);
            formData.append('Stock', document.getElementById('product-stock').value);
            const image = document.getElementById('product-image').files[0];
            if (image) formData.append('Image', image);
            const tokpedLink = document.getElementById('product-tokped').value.trim();
            if (tokpedLink) formData.append('Link_tokped', tokpedLink);

            try {
                const url = isEditMode 
                    ? `http://localhost:8000/api/products/${currentProductId}`
                    : 'http://localhost:8000/api/products';
                const method = isEditMode ? 'PATCH' : 'POST';

                const response = await fetch(url, {
                    method: method,
                    body: formData
                });
                const result = await response.json();
                if (result.status === 'success') {
                    closeModal();
                    loadProducts();
                    alert(isEditMode ? 'Produk berhasil diperbarui' : 'Produk berhasil ditambahkan');
                } else {
                    alert(`Gagal ${isEditMode ? 'memperbarui' : 'menambahkan'} produk: ${result.message}`);
                }
            } catch (error) {
                console.error(`Gagal ${isEditMode ? 'memperbarui' : 'menambahkan'} produk:`, error);
                alert(`Gagal ${isEditMode ? 'memperbarui' : 'menambahkan'} produk`);
            }
        }

        async function deleteProducts() {
            if (selectedProducts.size === 0) {
                alert('Pilih produk yang ingin dihapus');
                return;
            }

            if (!confirm(`Hapus ${selectedProducts.size} produk yang dipilih?`)) {
                return;
            }

            let successCount = 0;
            let errorMessages = [];

            for (const productId of selectedProducts) {
                try {
                    const response = await fetch(`http://localhost:8000/api/products/${productId}`, {
                        method: 'DELETE'
                    });
                    const result = await response.json();
                    if (result.status === 'success') {
                        successCount++;
                    } else {
                        errorMessages.push(`Produk ID ${productId}: ${result.message}`);
                    }
                } catch (error) {
                    console.error(`Gagal menghapus produk ID ${productId}:`, error);
                    errorMessages.push(`Produk ID ${productId}: Gagal menghapus`);
                }
            }

            selectedProducts.clear();
            loadProducts();

            if (successCount === 0) {
                alert('Gagal menghapus semua produk: ' + errorMessages.join('; '));
            } else if (errorMessages.length > 0) {
                alert(`${successCount} produk berhasil dihapus, tetapi ada kegagalan: ` + errorMessages.join('; '));
            } else {
                alert(`${successCount} produk berhasil dihapus`);
            }
        }

        addProductBtn.addEventListener('click', openAddModal);
        closeModalBtn.addEventListener('click', closeModal);
        cancelModalBtn.addEventListener('click', closeModal);
        submitProductBtn.addEventListener('click', submitProduct);
        document.getElementById('delete-product-btn').addEventListener('click', deleteProducts);

        // Image preview
        document.getElementById('product-image').addEventListener('change', function() {
            const imagePreview = document.getElementById('image-preview');
            const file = this.files[0];
            if (file) {
                imagePreview.src = URL.createObjectURL(file);
                imagePreview.style.display = 'block';
            } else {
                imagePreview.src = '';
                imagePreview.style.display = 'none';
            }
        });

        // Tab switching functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                const category = this.getAttribute('data-category');
                filterProducts(category);
            });
        });

        // Search functionality
        document.querySelector('.search-input').addEventListener('input', function(e) {
            filterProducts(activeCategory);
        });

        // Initialize
        window.onload = loadProducts;
    </script>
</body>
</html>