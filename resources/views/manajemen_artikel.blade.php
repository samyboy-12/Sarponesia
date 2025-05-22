<?php
session_start();

// Initialize user session
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'name' => 'Jacob',
        'role' => 'Admin 2'
    ];
}

// Initialize articles data if it doesn't exist
if (!isset($_SESSION['articles'])) {
    $_SESSION['articles'] = [
        'berita' => [
            [
                'id' => 1,
                'title' => 'Dibalik Layar Nikmatnya Secangkir Kopi',
                'date' => '07-12-2023',
                'status' => 'public',
                'category' => 'berita'
            ],
            [
                'id' => 2,
                'title' => 'Sejarah Kopi Indonesia',
                'date' => '05-12-2023',
                'status' => 'draft',
                'category' => 'berita'
            ]
        ],
        'teknologi' => [
            [
                'id' => 3,
                'title' => 'Teknik Roasting Terbaru 2023',
                'date' => '01-12-2023',
                'status' => 'public',
                'category' => 'teknologi'
            ]
        ],
        'tips' => [
            [
                'id' => 4,
                'title' => 'Cara Menyimpan Kopi Agar Tetap Segar',
                'date' => '30-11-2023',
                'status' => 'public',
                'category' => 'tips'
            ],
            [
                'id' => 5,
                'title' => '5 Alat Kopi Wajib untuk Pemula',
                'date' => '28-11-2023',
                'status' => 'draft',
                'category' => 'tips'
            ]
        ]
    ];
}

// Get current category from URL or default to 'berita'
$current_category = $_GET['category'] ?? 'berita';
$categories = ['berita' => 'Berita', 'teknologi' => 'Teknologi Kopi', 'tips' => 'Tips and Trik'];

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_article'])) {
        // Add new article
        $new_article = [
            'id' => count($_SESSION['articles'][$current_category]) + 1,
            'title' => $_POST['title'] ?? 'Artikel Baru',
            'date' => date('d-m-Y'),
            'status' => $_POST['status'] ?? 'draft',
            'category' => $current_category
        ];
        $_SESSION['articles'][$current_category][] = $new_article;
        $success_message = "Artikel berhasil ditambahkan!";
    }
    
    if (isset($_POST['delete_article'])) {
        // Delete article
        $article_id = $_POST['article_id'];
        foreach ($_SESSION['articles'][$current_category] as $key => $article) {
            if ($article['id'] == $article_id) {
                unset($_SESSION['articles'][$current_category][$key]);
                $success_message = "Artikel berhasil dihapus!";
                break;
            }
        }
    }
    
    if (isset($_POST['search'])) {
        // Search functionality
        $search_term = strtolower($_POST['search_term'] ?? '');
        $filtered_articles = [];
        foreach ($_SESSION['articles'][$current_category] as $article) {
            if (strpos(strtolower($article['title']), $search_term) !== false) {
                $filtered_articles[] = $article;
            }
        }
        $display_articles = $filtered_articles;
    }
}

// Get articles for current category
$display_articles = $_SESSION['articles'][$current_category] ?? [];
?>
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

    table th, table td {
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

    .form-group input, .form-group select, .form-group textarea {
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
        <strong><?php echo htmlspecialchars($_SESSION['user']['name']); ?></strong><br>
        <small><?php echo htmlspecialchars($_SESSION['user']['role']); ?></small>
      </div>
    </div>

    <div class="tabs">
      <?php foreach ($categories as $key => $label): ?>
        <a href="?category=<?php echo $key; ?>">
          <button class="<?php echo $current_category === $key ? 'active' : ''; ?>">
            <?php echo $label; ?>
          </button>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="content">
      <?php if (!empty($success_message)): ?>
        <div class="success-message">
          <?php echo htmlspecialchars($success_message); ?>
        </div>
      <?php endif; ?>

      <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
        <form method="POST" style="width: 60%;">
          <input type="text" name="search_term" placeholder="Cari Judul" style="padding: 0.5rem; width: 100%; border: 1px solid #ccc; border-radius: 8px;">
          <input type="hidden" name="search" value="1">
        </form>
        <button onclick="openModal('addArticleModal')" style="padding: 0.5rem 1rem; background: #b89568; color: white; border: none; border-radius: 8px; cursor: pointer;">
          + Tambah
        </button>
      </div>

      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($display_articles as $index => $article): ?>
            <tr>
              <td><?php echo $index + 1; ?></td>
              <td><?php echo htmlspecialchars($article['title']); ?></td>
              <td><?php echo htmlspecialchars($article['date']); ?></td>
              <td>
                <span class="status-<?php echo $article['status']; ?>">
                  <?php echo $article['status'] === 'public' ? 'Publik' : 'Draft'; ?>
                </span>
              </td>
              <td class="icon-cell">
                <span onclick="editArticle(<?php echo $article['id']; ?>)">✎</span>
                <form method="POST" style="display: inline;">
                  <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
                  <span onclick="if(confirm('Apakah Anda yakin ingin menghapus artikel ini?')) this.parentNode.submit();">🗑</span>
                  <input type="hidden" name="delete_article" value="1">
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          <?php if (empty($display_articles)): ?>
            <tr>
              <td colspan="5" style="text-align: center;">Tidak ada artikel ditemukan</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Add Article Modal -->
    <div id="addArticleModal" class="modal">
      <div class="modal-content">
        <h4>Tambah Artikel Baru</h4>
        <form method="POST" action="">
          <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" id="title" name="title" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" required>
              <option value="draft">Draft</option>
              <option value="public">Publik</option>
            </select>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('addArticleModal')">Batal</button>
            <button type="submit" class="submit" name="add_article">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
      }

      function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
      }

      function editArticle(id) {
        alert('Edit artikel dengan ID: ' + id + '\n\n(Fitur edit akan diimplementasikan)');
      }

      // Close modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target.className === 'modal') {
          event.target.style.display = 'none';
        }
      }

      // Submit search form when typing
      document.querySelector('input[name="search_term"]').addEventListener('input', function(e) {
        if (this.value.length > 0) {
          this.form.submit();
        } else if (this.value.length === 0 && <?php echo isset($_POST['search']) ? 'true' : 'false'; ?>) {
          // Reload page without search if clearing search field
          window.location.href = '?category=<?php echo $current_category; ?>';
        }
      });
    </script>
  </main>
</body>

</html>