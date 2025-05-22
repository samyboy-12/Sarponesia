<?php
$layanan = [
  ['nama' => 'Penyuluhan Petani', 'kategori' => 'Pendidikan', 'harga' => 'Gratis', 'deskripsi' => 'Memberikan pelatihan dan penyuluhan kepada petani kopi.', 'gambar' => 'https://via.placeholder.com/50'],
  ['nama' => 'Pengiriman Barang', 'kategori' => 'Logistik', 'harga' => 'Rp20.000', 'deskripsi' => 'Layanan antar barang ke seluruh Indonesia.', 'gambar' => 'https://via.placeholder.com/50'],
  ['nama' => 'Perawatan Tanaman', 'kategori' => 'Teknis', 'harga' => 'Rp100.000', 'deskripsi' => 'Bantuan teknis untuk perawatan tanaman kopi.', 'gambar' => 'https://via.placeholder.com/50'],
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Layanan - Sarponesia</title>
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

    .content {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      margin-top: 2rem;
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
  <li><a href="{{ route('home') }}">Manajemen Kerjasama</a></li>
  <li><a href="{{ route('home') }}">Keluar</a></li>
</ul>

    </nav>
  </aside>

  <main>
    <div class="top-bar">
      <h1>Manajemen Layanan & Jasa</h1>
      <div class="user-info">
        <strong>Jacob</strong><br><small>Admin 2</small>
      </div>
    </div>

    <div class="content">
      <table>
        <thead>
          <tr>
            <th>Nama Layanan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($layanan as $item): ?>
            <tr>
              <td><?= $item['nama'] ?></td>
              <td><?= $item['kategori'] ?></td>
              <td><?= $item['harga'] ?></td>
              <td><?= $item['deskripsi'] ?></td>
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
