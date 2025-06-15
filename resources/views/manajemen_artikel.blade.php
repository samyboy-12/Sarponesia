<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Artikel - Sarponesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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

    .tabs {
      display: flex;
      margin: 2rem 0 1rem 0;
    }

    .tabs button {
      background: #a37a40;
      color: white;
      padding: 0.5rem 1.2rem;
      margin-right: 1rem;
      border: none;
      border-radius: 8px 8px 0 0;
      font-weight: 600;
      cursor: pointer;
    }

    .tabs button.active {
      background: #fff;
      color: #000;
      border-bottom: 2px solid #fff;
    }

    .content {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
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
    }

    .status-public {
      color: #007bff;
      background: #e7f1ff;
      padding: 0.2rem 0.5rem;
      border-radius: 4px;
    }

    .status-draft {
      color: #dc3545;
      background: #fcebea;
      padding: 0.2rem 0.5rem;
      border-radius: 4px;
    }

    .icon-cell {
      display: flex;
      gap: 0.5rem;
      justify-content: center;
    }

    .icon-cell span {
      cursor: pointer;
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      width: 500px;
      max-width: 90%;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 1rem;
    }

    .form-actions button {
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-actions .cancel {
      background: #eee;
    }

    .form-actions .submit {
      background: #a37a40;
      color: white;
    }

    .success-message {
      background-color: #d4edda;
      color: #155724;
      padding: 0.75rem 1.25rem;
      border-radius: 4px;
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>
  <aside>
    <h2>SARPONESIA<br><small style="font-weight: 400; font-size: 0.8rem;">INDONESIAN COFFEE</small></h2>
    <nav>
      <ul>
        <li><a href="{{ route('manajemen-produk') }}">Manajemen Produk</a></li>
        <li><a href="{{ route('manajemen-layanan') }}">Manajemen Layanan & Jasa</a></li>
        <li><a href="{{ route('order') }}">Order</a></li>
        <li><a href="{{ route('manajemen-artikel') }}">Manajemen Artikel</a></li>
        <li><a href="{{ route('manajemen-kerjasama') }}">Manajemen Kerjasama</a></li>
        <li><a href="{{ route('home') }}">Keluar</a></li>
      </ul>

    </nav>
  </aside>

  <main>
    <div class="top-bar">
      <h1>Manajemen Artikel</h1>
      <div class="user-info">
        <strong><?= htmlspecialchars($_SESSION['user']['name'] ?? 'Admin') ?></strong><br>
        <small><?= htmlspecialchars($_SESSION['user']['role'] ?? 'editor') ?></small>
      </div>
    </div>

    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
      <input type="text" id="searchInput" placeholder="Cari Judul..." style="padding: 0.5rem; width: 60%; border: 1px solid #ccc; border-radius: 8px;">
      <button onclick="openModal('addArticleModal')" style="padding: 0.5rem 1rem; background: #b89568; color: white; border: none; border-radius: 8px;">+ Tambah</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="articleTableBody">
        <tr>
          <td colspan="4" style="text-align: center;">Memuat data...</td>
        </tr>
      </tbody>
    </table>

    <!-- Modal Tambah -->
    <div id="addArticleModal" class="modal">
      <div class="modal-content">
        <h4>Tambah Artikel Baru</h4>
        <form id="addArticleForm">
          <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" id="title" name="title" required>
          </div>
          <div class="form-group">
            <label for="content">Isi Artikel</label>
            <textarea id="content" name="content" rows="5" required></textarea>
          </div>
          <div class="form-group">
            <label for="category_id">ID Kategori</label>
            <input type="number" id="category_id" name="category_id" required>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('addArticleModal')">Batal</button>
            <button type="submit" class="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal Edit -->
    <div id="editArticleModal" class="modal">
      <div class="modal-content">
        <h4>Edit Artikel</h4>
        <form id="editArticleForm">
          <input type="hidden" id="edit_article_id">
          <div class="form-group">
            <label for="edit_title">Judul Artikel</label>
            <input type="text" id="edit_title" name="edit_title" required>
          </div>
          <div class="form-group">
            <label for="edit_content">Isi Artikel</label>
            <textarea id="edit_content" name="edit_content" rows="5" required></textarea>
          </div>
          <div class="form-group">
            <label for="edit_category_id">ID Kategori</label>
            <input type="number" id="edit_category_id" name="edit_category_id" required>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('editArticleModal')">Batal</button>
            <button type="submit" class="submit">Update</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script>
    const apiBase = 'http://localhost:8000/api/api/articles';

    function openModal(id) {
      document.getElementById(id).style.display = 'flex';
    }

    function closeModal(id) {
      document.getElementById(id).style.display = 'none';
      document.getElementById('addArticleForm').reset();
      document.getElementById('editArticleForm').reset();
    }

    function formatDate(isoString) {
      const d = new Date(isoString);
      return d.toLocaleDateString('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });
    }

    async function loadArticles() {
      const tbody = document.getElementById('articleTableBody');
      tbody.innerHTML = '<tr><td colspan="4" style="text-align: center;">Memuat data...</td></tr>';

      try {
        const res = await fetch(apiBase);
        const json = await res.json();

        if (!json.data || json.data.length === 0) {
          tbody.innerHTML = '<tr><td colspan="4" style="text-align: center;">Tidak ada artikel ditemukan</td></tr>';
          return;
        }

        tbody.innerHTML = '';
        json.data.forEach((article, index) => {
          const row = `
          <tr>
            <td>${index + 1}</td>
            <td>${article.Title}</td>
            <td>${formatDate(article.created_at)}</td>
            <td class="icon-cell">
              <span onclick="editArticle(${article.Article_ID})">✎</span>
              <span onclick="deleteArticle(${article.Article_ID})">🗑</span>
            </td>
          </tr>
        `;
          tbody.insertAdjacentHTML('beforeend', row);
        });
      } catch (err) {
        tbody.innerHTML = '<tr><td colspan="4" style="text-align: center; color: red;">Gagal memuat data</td></tr>';
        console.error(err);
      }
    }

    async function deleteArticle(id) {
      if (!confirm('Yakin ingin menghapus artikel ini?')) return;
      try {
        const res = await fetch(`${apiBase}/${id}`, {
          method: 'DELETE'
        });
        if (res.ok) {
          alert('Artikel berhasil dihapus');
          loadArticles();
        } else {
          alert('Gagal menghapus artikel');
        }
      } catch (err) {
        console.error(err);
      }
    }

    document.getElementById('addArticleForm').addEventListener('submit', async function(e) {
      e.preventDefault();
      const data = {
        Title: document.getElementById('title').value,
        Content: document.getElementById('content').value,
        Category_ID: document.getElementById('category_id').value,
      };

      try {
        const res = await fetch(apiBase, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data),
        });

        if (res.ok) {
          alert('Artikel berhasil ditambahkan');
          closeModal('addArticleModal');
          loadArticles();
        } else {
          alert('Gagal menambahkan artikel');
        }
      } catch (err) {
        console.error(err);
      }
    });

    async function editArticle(id) {
      try {
        const res = await fetch(`${apiBase}/${id}`);
        const json = await res.json();
        const data = json.data;

        document.getElementById('edit_article_id').value = data.Article_ID;
        document.getElementById('edit_title').value = data.Title;
        document.getElementById('edit_content').value = data.Content;
        document.getElementById('edit_category_id').value = data.Category_ID;

        openModal('editArticleModal');
      } catch (err) {
        console.error('Gagal mengambil data artikel', err);
      }
    }

    document.getElementById('editArticleForm').addEventListener('submit', async function(e) {
      e.preventDefault();
      const id = document.getElementById('edit_article_id').value;
      const data = {
        Title: document.getElementById('edit_title').value,
        Content: document.getElementById('edit_content').value,
        Category_ID: document.getElementById('edit_category_id').value,
      };

      try {
        const res = await fetch(`${apiBase}/${id}`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data),
        });

        if (res.ok) {
          alert('Artikel berhasil diperbarui');
          closeModal('editArticleModal');
          loadArticles();
        } else {
          alert('Gagal memperbarui artikel');
        }
      } catch (err) {
        console.error(err);
      }
    });

    window.onload = loadArticles;
  </script>
</body>

</html>