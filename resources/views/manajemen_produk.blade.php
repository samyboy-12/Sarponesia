<?php
$produk = [
  ['nama' => 'Gayo Aceh', 'jenis' => 'Kopi', 'kategori' => 'Arabica', 'harga' => 'Rp120.000', 'stok' => 50, 'gambar' => 'https://via.placeholder.com/50'],
  ['nama' => 'Temanggung', 'jenis' => 'Kopi', 'kategori' => 'Robusta', 'harga' => 'Rp85.000', 'stok' => 30, 'gambar' => 'https://via.placeholder.com/50'],
  ['nama' => 'Pupuk Kompos', 'jenis' => 'Pupuk', 'kategori' => '-', 'harga' => 'Rp50.000', 'stok' => 100, 'gambar' => 'https://via.placeholder.com/50'],
  ['nama' => 'Cangkul', 'jenis' => 'Alat', 'kategori' => '-', 'harga' => 'Rp75.000', 'stok' => 20, 'gambar' => 'https://via.placeholder.com/50'],
];

$filter = isset($_GET['filter']) ? $_GET['filter'] : 'Semua';

$filteredProduk = array_filter($produk, function ($item) use ($filter) {
  return $filter === 'Semua' || strtolower($item['jenis']) === strtolower($filter);
});
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Produk - Sarponesia</title>
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

    .tabs {
      display: flex;
      margin: 2rem 0 1rem 0;
    }

    .tabs a {
      text-decoration: none;
      background: #a37a40;
      color: white;
      padding: 0.5rem 1.2rem;
      margin-right: 1rem;
      border-radius: 8px 8px 0 0;
      font-weight: 600;
    }

    .tabs a.active {
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

    table td img {
      width: 50px;
      height: auto;
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
    }

    .actions .tambah {
      background: #b89568;
      color: white;
    }

    .actions .hapus {
      background: red;
      color: white;
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
      <h1>Manajemen Produk</h1>
      <div class="user-info">
        <strong>Jacob</strong><br><small>Admin 2</small>
      </div>
    </div>

    <div class="tabs">
      <a href="?filter=Semua" class="<?= $filter == 'Semua' ? 'active' : '' ?>">Semua</a>
      <a href="?filter=Kopi" class="<?= $filter == 'Kopi' ? 'active' : '' ?>">Kopi</a>
      <a href="?filter=Pupuk" class="<?= $filter == 'Pupuk' ? 'active' : '' ?>">Pupuk</a>
      <a href="?filter=Alat" class="<?= $filter == 'Alat' ? 'active' : '' ?>">Alat</a>
    </div>

    <div class="content">
      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($filteredProduk as $item): ?>
            <tr>
              <td><?= $item['nama'] ?></td>
              <td><?= $item['jenis'] ?></td>
              <td><?= $item['kategori'] ?></td>
              <td><?= $item['harga'] ?></td>
              <td><?= $item['stok'] ?></td>
              <td><img src="<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>"></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="actions">
        <button class="tambah">Tambah</button>
        <button class="hapus">Hapus</button>
      </div>
    </div>
  </main>
</body>

</html>
