@extends('Layout.layout2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mag-service.css') }}" />
<style>
    .product-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }
    .table-header, .table-row {
        display: grid;
        grid-template-columns: 100px 1fr 100px 2fr 100px;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    .table-header {
        font-weight: bold;
        background-color: #f4f4f4;
    }
    .table-row {
        background-color: #fff;
    }
    .table-row:hover {
        background-color: #f9f9f9;
    }
    .service-image {
        text-align: center;
        overflow: hidden;
    }
    .service-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
        display: block;
        margin: auto;
    }
    .action-column {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .modal-content {
        max-width: 600px;
        margin: auto;
        padding: 20px;
    }
    .image-preview {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-top: 10px;
        display: none;
        border-radius: 4px;
    }
</style>
@endsection

@section('main')
<div class="main-content">
    <div class="product-section">
        <div class="product-tabs">
            <button class="tab" data-tab="layanan">Layanan</button>
            <button class="tab active" data-tab="jasa">Jasa</button>
        </div>

        <div class="product-controls">
            <div class="search-container">
                <input type="text" class="search-input" id="search-input" placeholder="Cari Layanan/Jasa">
                <button class="search-btn">🔍</button>
            </div>
            <div class="action-buttons">
                <button class="btn btn-add" id="add-service-btn">Tambah</button>
                <button class="btn btn-delete" id="delete-service-btn">Hapus</button>
            </div>
        </div>

        <div class="product-table" id="service-table">
            <div class="table-header">
                <div>Aksi</div>
                <div>Nama</div>
                <div>Kategori</div>
                <div>Deskripsi</div>
                <div>Gambar</div>
            </div>
            <div id="service-rows"></div>
        </div>
    </div>

    <!-- Modal for Adding Service -->
    <div class="modal" id="add-service-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Tambah Layanan/Jasa Baru</h2>
                <button class="close-btn" id="add-close-modal-btn">×</button>
            </div>
            <form id="add-service-form">
                <div class="form-group">
                    <label for="add-service-name">Nama *</label>
                    <input type="text" id="add-service-name" name="nama" placeholder="Masukkan nama layanan/jasa" required>
                    <div class="error-message" id="add-error-name">Nama wajib diisi</div>
                </div>
                <div class="form-group">
                    <label for="add-service-category">Kategori *</label>
                    <select id="add-service-category" name="kategori" required>
                        <option value="">Pilih kategori</option>
                        <option value="5">Layanan</option>
                        <option value="6">Jasa</option>
                    </select>
                    <div class="error-message" id="add-error-category">Kategori wajib dipilih</div>
                </div>
                <div class="form-group">
                    <label for="add-service-price">Harga *</label>
                    <input type="number" id="add-service-price" name="harga" placeholder="Masukkan harga" min="0" required>
                    <div class="error-message" id="add-error-price">Harga wajib diisi dan harus angka positif</div>
                </div>
                <div class="form-group">
                    <label for="add-service-description">Deskripsi *</label>
                    <textarea id="add-service-description" name="Description" placeholder="Masukkan deskripsi layanan/jasa" required></textarea>
                    <div class="error-message" id="add-error-description">Deskripsi wajib diisi</div>
                </div>
                <div class="form-group">
                    <label for="add-service-image">Gambar *</label>
                    <input type="file" id="add-service-image" name="gambar" accept="image/*" required>
                    <img id="add-image-preview" class="image-preview" alt="Pratinjau Gambar">
                    <div class="error-message" id="add-error-image">Gambar wajib diunggah</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" id="add-cancel-modal-btn">Batal</button>
                    <button type="submit" class="btn btn-submit" id="add-submit-service-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal for Editing Service -->
    <div class="modal" id="edit-service-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Edit Layanan/Jasa</h2>
                <button class="close-btn" id="edit-close-modal-btn">×</button>
            </div>
            <form id="edit-service-form">
                <input type="hidden" id="edit-service-id" name="id">
                <div class="form-group">
                    <label for="edit-service-name">Nama *</label>
                    <input type="text" id="edit-service-name" name="nama" placeholder="Masukkan nama layanan/jasa" required>
                    <div class="error-message" id="edit-error-name">Nama wajib diisi</div>
                </div>
                <div class="form-group">
                    <label for="edit-service-category">Kategori *</label>
                    <select id="edit-service-category" name="kategori" required>
                        <option value="">Pilih kategori</option>
                        <option value="5">Layanan</option>
                        <option value="6">Jasa</option>
                    </select>
                    <div class="error-message" id="edit-error-category">Kategori wajib dipilih</div>
                </div>
                <div class="form-group">
                    <label for="edit-service-price">Harga *</label>
                    <input type="number" id="edit-service-price" name="harga" placeholder="Masukkan harga" min="0" required>
                    <div class="error-message" id="edit-error-price">Harga wajib diisi dan harus angka positif</div>
                </div>
                <div class="form-group">
                    <label for="edit-service-description">Deskripsi *</label>
                    <textarea id="edit-service-description" name="Description" placeholder="Masukkan deskripsi layanan/jasa" required></textarea>
                    <div class="error-message" id="edit-error-description">Deskripsi wajib diisi</div>
                </div>
                <div class="form-group">
                    <label for="edit-service-image">Gambar *</label>
                    <input type="file" id="edit-service-image" name="gambar" accept="image/*">
                    <img id="edit-image-preview" class="image-preview" alt="Pratinjau Gambar">
                    <div class="error-message" id="edit-error-image">Gambar wajib diunggah</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" id="edit-cancel-modal-btn">Batal</button>
                    <button type="submit" class="btn btn-submit" id="edit-submit-service-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
const apiBase = 'http://localhost:8000/api/services';
let currentTab = 'jasa'; // Default tab

// Category mapping
const kategoriMap = {
    5: 'Layanan',
    6: 'Jasa'
};

// Utility function to format harga to Rupiah format
function formatRupiah(number) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
    }).format(number);
}

// Open modal by ID
function openModal(id) {
    document.getElementById(id).classList.add('active');
}

// Close modal by ID
function closeModal(id) {
    document.getElementById(id).classList.remove('active');
}

// Load services based on current tab
async function loadServices() {
    const tbody = document.getElementById('service-rows');
    tbody.innerHTML = '<div class="empty-state">Memuat data...</div>';
    try {
        const categoryId = currentTab === 'layanan' ? 5 : 6;
        const res = await fetch(`${apiBase}?category=${categoryId}`);
        if (!res.ok) throw new Error('Gagal memuat data layanan');
        const data = await res.json();
        displayServices(data.data);
    } catch (err) {
        tbody.innerHTML = `<div class="empty-state" style="color:red;">${err.message}</div>`;
    }
}

// Display services in the table
function displayServices(services) {
    const serviceRows = document.getElementById('service-rows');
    serviceRows.innerHTML = '';

    if (services.length === 0) {
        serviceRows.innerHTML = '<div class="empty-state">Tidak ada layanan yang ditemukan</div>';
        return;
    }

    services.forEach(service => {
        const row = document.createElement('div');
        row.className = 'table-row';
        row.setAttribute('data-service-id', service.Service_ID);
        row.innerHTML = `
            <div class="action-column">
                <input type="checkbox" class="checkbox" data-id="${service.Service_ID}">
                <span class="edit-icon" title="Edit" onclick="editService(${service.Service_ID})">✎</span>
            </div>
            <div class="service-name">${service.Name}</div>
            <div class="service-category">${kategoriMap[service.Category_ID] || 'Tidak diketahui'}</div>
            <div class="service-description">${service.Description}</div>
            <div class="service-image">
                ${service.Image_path ? `<img src="${service.Image_path}" alt="${service.Name}">` : 'Tidak ada gambar'}
            </div>
        `;
        serviceRows.appendChild(row);
    });
}

// Switch tabs and load corresponding services
function switchTab(tab) {
    if (currentTab === tab) return; // Prevent reloading same tab
    currentTab = tab;
    document.querySelectorAll('.tab').forEach(tabBtn => {
        tabBtn.classList.remove('active');
    });
    document.querySelector(`.tab[data-tab="${tab}"]`).classList.add('active');
    loadServices();
}

// Handle image upload
async function uploadImage(file) {
    const formData = new FormData();
    formData.append('image', file);
    try {
        const res = await fetch('http://localhost:8000/api/upload', {
            method: 'POST',
            body: formData
        });
        if (!res.ok) throw new Error('Gagal mengunggah gambar');
        const result = await res.json();
        return result.image_path; // Assume API returns image path
    } catch (err) {
        throw new Error(err.message);
    }
}

// Handle tambah layanan
document.getElementById('add-service-form').addEventListener('submit', async e => {
    e.preventDefault();
    const form = e.target;
    const file = form.gambar.files[0];
    let imagePath = '';

    try {
        if (file) {
            imagePath = await uploadImage(file);
        } else {
            throw new Error('Gambar wajib diunggah');
        }

        const newService = {
            Name: form.nama.value.trim(),
            Category_ID: Number(form.kategori.value),
            Price: Number(form.harga.value),
            Description: form.Description.value.trim(),
            Image_path: imagePath
        };

        const res = await fetch(apiBase, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newService)
        });
        if (!res.ok) throw new Error('Gagal menambahkan layanan');
        alert('Layanan berhasil ditambahkan!');
        form.reset();
        document.getElementById('add-image-preview').style.display = 'none';
        closeModal('add-service-modal');
        loadServices();
    } catch (err) {
        alert(err.message);
    }
});

// Fill edit form and open modal
async function editService(id) {
    try {
        const res = await fetch(`${apiBase}/${id}`);
        if (!res.ok) throw new Error('Gagal memuat data layanan');
        const data = await res.json();
        const service = data.data;
        document.getElementById('edit-service-id').value = service.Service_ID;
        document.getElementById('edit-service-name').value = service.Name;
        document.getElementById('edit-service-category').value = service.Category_ID;
        document.getElementById('edit-service-price').value = service.Price;
        document.getElementById('edit-service-description').value = service.Description;
        document.getElementById('edit-image-preview').src = service.Image_path || '';
        document.getElementById('edit-image-preview').style.display = service.Image_path ? 'block' : 'none';
        openModal('edit-service-modal');
    } catch (err) {
        alert(err.message);
    }
}

// Handle update layanan
document.getElementById('edit-service-form').addEventListener('submit', async e => {
    e.preventDefault();
    const form = e.target;
    const id = document.getElementById('edit-service-id').value;
    let imagePath = document.getElementById('edit-image-preview').src;
    const file = form.gambar.files[0];

    try {
        if (file) {
            imagePath = await uploadImage(file);
        }

        const updatedService = {
            Name: form.nama.value.trim(),
            Category_ID: Number(form.kategori.value),
            Price: Number(form.harga.value),
            Description: form.Description.value.trim(),
            Image_path: imagePath
        };

        const res = await fetch(`${apiBase}/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(updatedService)
        });
        if (!res.ok) throw new Error('Gagal mengupdate layanan');
        alert('Layanan berhasil diperbarui!');
        closeModal('edit-service-modal');
        loadServices();
    } catch (err) {
        alert(err.message);
    }
});

// Handle delete selected services
async function deleteSelected() {
    const checkboxes = document.querySelectorAll('.checkbox:checked');
    if (checkboxes.length === 0) {
        alert('Pilih item yang ingin dihapus');
        return;
    }

    if (!confirm('Apakah Anda yakin ingin menghapus layanan yang dipilih?')) return;

    try {
        const ids = Array.from(checkboxes).map(cb => cb.dataset.id);
        for (const id of ids) {
            const res = await fetch(`${apiBase}/${id}`, {
                method: 'DELETE'
            });
            if (!res.ok) throw new Error('Gagal menghapus layanan');
        }
        alert('Layanan berhasil dihapus!');
        loadServices();
    } catch (err) {
        alert(err.message);
    }
}

// Search functionality
document.getElementById('search-input').addEventListener('input', async function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const tbody = document.getElementById('service-rows');
    tbody.innerHTML = '<div class="empty-state">Memuat data...</div>';
    try {
        const categoryId = currentTab === 'layanan' ? 5 : 6;
        const res = await fetch(`${apiBase}?category=${categoryId}`);
        if (!res.ok) throw new Error('Gagal memuat data layanan');
        const data = await res.json();
        const filteredData = data.data.filter(service =>
            service.Name.toLowerCase().includes(searchTerm) ||
            service.Description.toLowerCase().includes(searchTerm)
        );
        displayServices(filteredData);
    } catch (err) {
        tbody.innerHTML = `<div class="empty-state" style="color:red;">${err.message}</div>`;
    }
});

// Image preview for add modal
document.getElementById('add-service-image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const preview = document.getElementById('add-image-preview');
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
});

// Image preview for edit modal
document.getElementById('edit-service-image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const preview = document.getElementById('edit-image-preview');
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
});

// Event listeners
document.getElementById('add-service-btn').addEventListener('click', () => {
    document.getElementById('add-service-form').reset();
    document.getElementById('add-image-preview').style.display = 'none';
    openModal('add-service-modal');
});
document.getElementById('delete-service-btn').addEventListener('click', deleteSelected);
document.getElementById('add-close-modal-btn').addEventListener('click', () => closeModal('add-service-modal'));
document.getElementById('add-cancel-modal-btn').addEventListener('click', () => closeModal('add-service-modal'));
document.getElementById('edit-close-modal-btn').addEventListener('click', () => closeModal('edit-service-modal'));
document.getElementById('edit-cancel-modal-btn').addEventListener('click', () => closeModal('edit-service-modal'));
document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', () => switchTab(tab.dataset.tab));
});

// Close modal when clicking outside
window.addEventListener('click', function(event) {
    const modals = ['add-service-modal', 'edit-service-modal'];
    modals.forEach(id => {
        const modal = document.getElementById(id);
        if (modal.classList.contains('active') && event.target === modal) {
            closeModal(id);
        }
    });
});

// Initialize
window.addEventListener('DOMContentLoaded', loadServices);
</script>
<script src="{{ asset('js/mag-service.js') }}"></script>
@endsection