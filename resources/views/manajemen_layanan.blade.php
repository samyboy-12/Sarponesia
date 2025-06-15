<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manajemen Layanan - Sarponesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background-color: #f4f4f4;
    }

    aside {
      width: 230px;
      background-color: #1c1c1c;
      color: white;
      padding: 2rem 1rem;
    }

    aside h2 {
      font-size: 1.2rem;
      margin-bottom: 3rem;
      text-align: center;
    }

    aside nav ul {
      list-style: none;
    }

    aside nav ul li {
      margin: 1.2rem 0;
      font-size: 0.95rem;
    }

    aside nav ul li a {
      text-decoration: none;
      color: white;
      transition: all 0.2s ease;
    }

    aside nav ul li a:hover,
    aside nav ul li a.active {
      color: #b89568;
      font-weight: 600;
    }

    main {
      flex: 1;
      padding: 2rem;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-bar .user-info {
      background: #eee;
      padding: 0.5rem 1rem;
      border-radius: 8px;
    }

    .content {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      margin-top: 2rem;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    table th,
    table td {
      text-align: left;
      padding: 0.75rem;
      border-bottom: 1px solid #eee;
      vertical-align: middle;
    }

    table td img {
      width: 50px;
      height: auto;
      border-radius: 6px;
      object-fit: cover;
    }

    .actions {
      margin-top: 1rem;
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
    }

    .actions button {
      padding: 0.5rem 1.2rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      background: #b89568;
      color: white;
      transition: background-color 0.3s ease;
    }

    .actions button:hover {
      background: #a17f50;
    }

    .icon-cell span {
      cursor: pointer;
      margin-right: 10px;
      font-size: 1.1rem;
      user-select: none;
      transition: color 0.2s ease;
    }

    .icon-cell span:hover {
      color: #b89568;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .modal-content {
      background: white;
      border-radius: 12px;
      width: 100%;
      max-width: 480px;
      padding: 1.5rem 2rem 2rem;
      position: relative;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      max-height: 90vh;
      overflow-y: auto;
    }

    .modal-close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      font-size: 1.5rem;
      font-weight: 700;
      color: #666;
      cursor: pointer;
      user-select: none;
    }

    form label {
      display: block;
      margin-top: 1rem;
      font-weight: 600;
      color: #333;
    }

    form input[type="text"],
    form input[type="number"],
    form textarea {
      width: 100%;
      margin-top: 0.3rem;
      padding: 0.5rem;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 0.9rem;
      font-family: inherit;
      resize: vertical;
    }

    form textarea {
      min-height: 80px;
    }

    form button {
      margin-top: 1.5rem;
      padding: 0.6rem 1.4rem;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      background-color: #b89568;
      color: white;
      transition: background-color 0.3s ease;
    }

    form button:hover {
      background-color: #9e7e4e;
    }

    form button[type="button"] {
      background-color: #ccc;
      color: #333;
      margin-left: 1rem;
    }

    form button[type="button"]:hover {
      background-color: #999;
    }
  </style>
</head>

<body>
  <aside>
    <h2>SARPONESIA<br /><small style="font-weight: 400; font-size: 0.8rem;">INDONESIAN COFFEE</small></h2>
    <nav>
      <ul>
        <li><a href="{{ route('manajemen-produk') }}">Manajemen Produk</a></li>
        <li><a href="{{ route('manajemen-layanan') }}" class="active">Manajemen Layanan & Jasa</a></li>
        <li><a href="{{ route('order') }}">Order</a></li>
        <li><a href="{{ route('manajemen-artikel') }}">Manajemen Artikel</a></li>
        <li><a href="{{ route('home') }}">Manajemen Kerjasama</a></li>
        <li><a href="{{ route('home') }}">Keluar</a></li>
      </ul>
    </nav>
  </aside>
  <main>
    <div class="top-bar">
      <h1>Manajemen Layanan & Jasa</h1>
      <div class="user-info">
        <strong>Jacob</strong><br /><small>Admin 2</small>
      </div>
    </div>

    <div class="content">
      <table>
        <thead>
          <tr>
            <th>Nama Layanan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Description</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="serviceTableBody">
          <tr>
            <td colspan="6" style="text-align:center;">Memuat data...</td>
          </tr>
        </tbody>
      </table>
      <div class="actions">
        <button onclick="openModal('addServiceModal')">Tambah Layanan</button>
      </div>
    </div>
  </main>

  <!-- Modal Tambah -->
  <div class="modal" id="addServiceModal" tabindex="-1">
    <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="addServiceTitle">
      <span class="modal-close" onclick="closeModal('addServiceModal')" aria-label="Tutup">&times;</span>
      <h2 id="addServiceTitle">Tambah Layanan Baru</h2>
      <form id="addServiceForm" autocomplete="off">
        <label for="add_nama">Nama Layanan</label>
        <input type="text" id="add_nama" name="nama" required />

        <label for="add_kategori">Kategori</label>
        <input type="text" id="add_kategori" name="kategori" required />

        <label for="add_harga">Harga</label>
        <input type="number" id="add_harga" name="harga" required min="0" />

        <label for="add_Description">Description</label>
        <textarea id="add_Description" name="Description" required></textarea>

        <label for="add_gambar">URL Gambar</label>
        <input type="text" id="add_gambar" name="gambar" required />

        <button type="submit">Simpan</button>
        <button type="button" onclick="closeModal('addServiceModal')">Batal</button>
      </form>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal" id="editServiceModal" tabindex="-1">
    <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="editServiceTitle">
      <span class="modal-close" onclick="closeModal('editServiceModal')" aria-label="Tutup">&times;</span>
      <h2 id="editServiceTitle">Edit Layanan</h2>
      <form id="editServiceForm" autocomplete="off">
        <input type="hidden" id="edit_id" name="id" />

        <label for="edit_nama">Nama Layanan</label>
        <input type="text" id="edit_nama" name="nama" required />

        <label for="edit_kategori">Kategori</label>
        <input type="text" id="edit_kategori" name="kategori" required />

        <label for="edit_harga">Harga</label>
        <input type="number" id="edit_harga" name="harga" required min="0" />

        <label for="edit_Description">Description</label>
        <textarea id="edit_Description" name="Description" required></textarea>

        <label for="edit_gambar">URL Gambar</label>
        <input type="text" id="edit_gambar" name="gambar" required />

        <button type="submit">Update</button>
        <button type="button" onclick="closeModal('editServiceModal')">Batal</button>
      </form>
    </div>
  </div>

  <script>
    const apiBase = 'http://localhost:8000/api/services';

    // Utility function to format harga to Rupiah format
    function formatRupiah(number) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
      }).format(number);
    }

    // Open modal by ID
    function openModal(id) {
      document.getElementById(id).style.display = 'flex';
    }

    // Close modal by ID
    function closeModal(id) {
      document.getElementById(id).style.display = 'none';
    }

    // Load all services and render into table
    async function loadServices() {
      const tbody = document.getElementById('serviceTableBody');
      tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Memuat data...</td></tr>';
      try {
        const res = await fetch(apiBase);
        if (!res.ok) throw new Error('Gagal memuat data layanan');
        const data = await res.json();
        if (data.data.length === 0) {
          tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Tidak ada layanan.</td></tr>';
          return;
        }

        tbody.innerHTML = '';


        const categoryTypes = {
          1: 'kopi',
          2: 'benih',
          3: 'pupuk',
          4: 'peralatan',
          5: 'layanan',
          6: 'jasa',
          7: 'article'
        };
        data.data.forEach(service => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
        <td>${service.Name}</td>
        <td>${categoryTypes[service.Category_ID] || 'Tidak diketahui'}</td>
        <td>${formatRupiah(service.Price)}</td>
        <td>${service.Description}</td>
        <td><img src="${service.Image_path}" alt="${service.Name}" /></td>
        <td class="icon-cell">
          <span title="Edit" onclick="editService(${service.Service_ID})" style="color: #b89568;">&#9998;</span>
          <span title="Hapus" onclick="deleteService(${service.Service_ID})" style="color: #cc4a4a;">&#10060;</span>
        </td>
          `;
          tbody.appendChild(tr);
        });
      } catch (err) {
        tbody.innerHTML = `<tr><td colspan="6" style="text-align:center; color:red;">${err.message}</td></tr>`;
      }
    }

    // Handle tambah layanan
    document.getElementById('addServiceForm').addEventListener('submit', async e => {
      e.preventDefault();
      const form = e.target;
      const newService = {
        Name: form.nama.value.trim(),
        Kategori: form.kategori.value.trim(),
        Harga: Number(form.harga.value),
        Description: form.Description.value.trim(),
        Gambar: form.gambar.value.trim()
      };

      try {
        const res = await fetch(apiBase, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(newService)
        });
        if (!res.ok) throw new Error('Gagal menambahkan layanan');
        const result = await res.json();
        alert('Layanan berhasil ditambahkan!');
        form.reset();
        closeModal('addServiceModal');
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
        document.getElementById('edit_id').value = service.id;
        document.getElementById('edit_nama').value = service.Name;
        document.getElementById('edit_kategori').value = service.Kategori;
        document.getElementById('edit_harga').value = service.Harga;
        document.getElementById('edit_Description').value = service.Description;
        document.getElementById('edit_gambar').value = service.Gambar;
        openModal('editServiceModal');
      } catch (err) {
        alert(err.message);
      }
    }

    // Handle update layanan
    document.getElementById('editServiceForm').addEventListener('submit', async e => {
      e.preventDefault();
      const form = e.target;
      const id = document.getElementById('edit_id').value;
      const updatedService = {
        Name: form.nama.value.trim(),
        Kategori: form.kategori.value.trim(),
        Harga: Number(form.harga.value),
        Description: form.Description.value.trim(),
        Gambar: form.gambar.value.trim()
      };

      try {
        const res = await fetch(`${apiBase}/${id}`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(updatedService)
        });
        if (!res.ok) throw new Error('Gagal mengupdate layanan');
        alert('Layanan berhasil diperbarui!');
        closeModal('editServiceModal');
        loadServices();
      } catch (err) {
        alert(err.message);
      }
    });

    // Handle delete layanan
    async function deleteService(id) {
      if (!confirm('Apakah Anda yakin ingin menghapus layanan ini?')) return;
      try {
        const res = await fetch(`${apiBase}/${id}`, {
          method: 'DELETE'
        });
        if (!res.ok) throw new Error('Gagal menghapus layanan');
        alert('Layanan berhasil dihapus!');
        loadServices();
      } catch (err) {
        alert(err.message);
      }
    }

    // Load data saat halaman siap
    window.addEventListener('DOMContentLoaded', loadServices);

    // Close modal saat klik di luar konten modal
    window.addEventListener('click', (e) => {
      const modals = ['addServiceModal', 'editServiceModal'];
      modals.forEach(id => {
        const modal = document.getElementById(id);
        if (modal.style.display === 'flex' && e.target === modal) {
          closeModal(id);
        }
      });
    });
  </script>
</body>

</html>