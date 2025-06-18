 const kategoriMap = {
      1: 'Kopi',
      2: 'Benih',
      3: 'Pupuk',
      4: 'Alat'
    };

    let allProducts = [];
    let selectedProducts = new Set();
    let activeCategory = 'Pupuk';
    let currentProductId = null;

    function formatRupiah(number) {
      const num = parseFloat(number);
      return isNaN(num) ? '-' : `Rp ${num.toLocaleString('id-ID')}`;
    }

    async function loadProducts() {
      try {
        const response = await fetch('http://localhost:8000/api/products', {
          headers: {
            'Accept': 'application/json'
          }
        });
        const result = await response.json();
        if (result.status === 'success') {
          allProducts = result.data;
          filterProducts(activeCategory);
        } else {
          displayError(`Gagal mengambil data produk: ${result.message}`);
        }
      } catch (error) {
        console.error('Error fetching products:', error);
        displayError('Gagal mengambil data produk. Silakan coba lagi nanti.');
      }
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
          <div class="action-column">
            <input type="checkbox" class="checkbox" data-product-id="${product.Product_ID}">
            <span class="edit-icon" data-product-id="${product.Product_ID}">✏️</span>
          </div>
          <div class="product-name">${product.Name}</div>
          <div class="product-category">${kategoriMap[product.Category_ID] || 'Lainnya'}</div>
          <div class="product-description">${product.Description}</div>
          <div class="price">${formatRupiah(product.Price)}</div>
          <div class="stock">${product.Stock}</div>
          <div><img src="${product.Image_path}" alt="${product.Name}" class="product-image"></div>
          <div class="sold">${product.Sold || 0}</div>
        `;
        productRows.appendChild(row);
      });

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

      document.querySelectorAll('.edit-icon').forEach(icon => {
        icon.addEventListener('click', () => openEditModal(parseInt(icon.getAttribute('data-product-id'))));
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
        kategoriMap[product.Category_ID] === category &&
        (product.Name.toLowerCase().includes(searchTerm) ||
          product.Description.toLowerCase().includes(searchTerm))
      );
      displayProducts(filtered);
    }

    function openAddModal() {
      currentProductId = null;
      document.querySelector('.modal-title').textContent = 'Tambah Produk Baru';
      document.getElementById('submit-product-btn').textContent = 'Simpan';
      document.getElementById('error-image').textContent = 'Gambar wajib diunggah';
      resetForm();
      document.getElementById('product-modal').classList.add('active');
    }

    function openEditModal(productId) {
      const product = allProducts.find(p => p.Product_ID === productId);
      if (!product) {
        alert('Produk tidak ditemukan');
        return;
      }

      currentProductId = productId;
      document.querySelector('.modal-title').textContent = 'Edit Produk';
      document.getElementById('submit-product-btn').textContent = 'Perbarui';
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

      document.getElementById('product-modal').classList.add('active');
    }

    function closeModal() {
      document.getElementById('product-modal').classList.remove('active');
      resetForm();
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
      document.querySelectorAll('.error-message').forEach(error => error.style.display = 'none');
    }

    function validateForm(isEditMode) {
      let isValid = true;
      const fields = [{
          id: 'product-name',
          errorId: 'error-name',
          message: 'Nama produk wajib diisi',
          check: val => val.trim()
        },
        {
          id: 'product-category',
          errorId: 'error-category',
          message: 'Kategori wajib dipilih',
          check: val => val
        },
        {
          id: 'product-description',
          errorId: 'error-description',
          message: 'Deskripsi wajib diisi',
          check: val => val.trim()
        },
        {
          id: 'product-price',
          errorId: 'error-price',
          message: 'Harga wajib diisi dan harus angka positif',
          check: val => !isNaN(val) && parseFloat(val) >= 0
        },
        {
          id: 'product-stock',
          errorId: 'error-stock',
          message: 'Stok wajib diisi dan harus angka positif',
          check: val => !isNaN(val) && parseInt(val) >= 0
        },
        {
          id: 'product-image',
          errorId: 'error-image',
          message: 'Gambar wajib diunggah',
          check: val => isEditMode || val.files.length > 0,
          type: 'file'
        }
      ];

      fields.forEach(field => {
        const element = document.getElementById(field.id);
        const value = field.type === 'file' ? element : element.value;
        const errorElement = document.getElementById(field.errorId);
        if (!field.check(value)) {
          errorElement.style.display = 'block';
          isValid = false;
        } else {
          errorElement.style.display = 'none';
        }
      });

      return isValid;
    }

    async function submitProduct() {
      const isEditMode = currentProductId !== null;
      if (!validateForm(isEditMode)) return;

      const submitBtn = document.getElementById('submit-product-btn');
      submitBtn.disabled = true;
      submitBtn.textContent = isEditMode ? 'Memperbarui...' : 'Menyimpan...';

      const formData = new FormData();
      formData.append('Name', document.getElementById('product-name').value.trim());
      formData.append('Category_ID', document.getElementById('product-category').value);
      formData.append('Description', document.getElementById('product-description').value.trim());
      formData.append('Price', document.getElementById('product-price').value);
      formData.append('Stock', document.getElementById('product-stock').value);
      const image = document.getElementById('product-image').files[0];
      if (image) {
        formData.append('Image', image);
      }
      const tokpedLink = document.getElementById('product-tokped').value.trim();
      if (tokpedLink) {
        formData.append('Link_tokped', tokpedLink);
      }

      if (isEditMode) {
        formData.append('_method', 'PATCH');
      }

      try {
        const url = isEditMode ?
          `http://localhost:8000/api/products/${currentProductId}` :
          'http://localhost:8000/api/products';

        const response = await fetch(url, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        });

        const result = await response.json();
        if (result.status === 'success') {
          closeModal();
          await loadProducts();
          alert(isEditMode ? 'Produk berhasil diperbarui' : 'Produk berhasil ditambahkan');
        } else {
          alert(`Gagal ${isEditMode ? 'memperbarui' : 'menambahkan'} produk: ${result.message}`);
        }
      } catch (error) {
        console.error(`Error ${isEditMode ? 'updating' : 'adding'} product:`, error);
        alert(`Gagal ${isEditMode ? 'memperbarui' : 'menambahkan'} produk: ${error.message}`);
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = isEditMode ? 'Perbarui' : 'Simpan';
      }
    }

    async function deleteProducts() {
      if (selectedProducts.size === 0) {
        alert('Pilih produk yang ingin dihapus');
        return;
      }

      if (!confirm(`Hapus ${selectedProducts.size} produk yang dipilih?`)) return;

      const deleteBtn = document.getElementById('delete-product-btn');
      deleteBtn.disabled = true;
      deleteBtn.textContent = 'Menghapus...';

      let successCount = 0;
      let errorMessages = [];

      for (const productId of selectedProducts) {
        try {
          const response = await fetch(`http://localhost:8000/api/products/${productId}`, {
            method: 'DELETE',
            headers: {
              'Accept': 'application/json'
            }
          });
          const result = await response.json();
          if (result.status === 'success') {
            successCount++;
          } else {
            errorMessages.push(`Produk ID ${productId}: ${result.message}`);
          }
        } catch (error) {
          console.error(`Error deleting product ID ${productId}:`, error);
          errorMessages.push(`Produk ID ${productId}: Gagal menghapus`);
        }
      }

      selectedProducts.clear();
      await loadProducts();

      deleteBtn.disabled = false;
      deleteBtn.textContent = 'Hapus';

      if (successCount === 0) {
        alert('Gagal menghapus semua produk: ' + errorMessages.join('; '));
      } else if (errorMessages.length > 0) {
        alert(`${successCount} produk berhasil dihapus, tetapi ada kegagalan: ` + errorMessages.join('; '));
      } else {
        alert(`${successCount} produk berhasil dihapus`);
      }
    }

    document.getElementById('add-product-btn').addEventListener('click', openAddModal);
    document.getElementById('close-modal-btn').addEventListener('click', closeModal);
    document.getElementById('cancel-modal-btn').addEventListener('click', closeModal);
    document.getElementById('submit-product-btn').addEventListener('click', submitProduct);
    document.getElementById('delete-product-btn').addEventListener('click', deleteProducts);

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

    document.querySelectorAll('.tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        filterProducts(this.getAttribute('data-category'));
      });
    });

    document.querySelector('.search-input').addEventListener('input', () => filterProducts(activeCategory));

    ['product-name', 'product-category', 'product-description', 'product-price', 'product-stock'].forEach(id => {
      document.getElementById(id).addEventListener('input', () => validateForm(currentProductId !== null));
    });
    document.getElementById('product-image').addEventListener('change', () => validateForm(currentProductId !== null));

    window.onload = loadProducts;