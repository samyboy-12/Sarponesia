@extends('Layout.layout2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mag-produk.css') }}" />
@endsection

@section('main')
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
          <div>Aksi</div>
          <div>Nama</div>
          <div>Kategori</div>
          <div>Deskripsi</div>
          <div>Harga</div>
          <div>Stok</div>
          <div>Gambar</div>
          <div>Terjual</div>
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


   <script src="{{ asset('js/mag-produk.js') }}"></script>
   
@endsection

@section('scripts')
   <script src="{{ asset('js/mag-produk.js') }}"></script>
  @endsection

