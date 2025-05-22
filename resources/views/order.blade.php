<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Manajemen Pesanan - Sarponesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .sidebar {
      height: 100vh;
      background-color: #111;
      color: white;
      padding-top: 30px;
      position: fixed;
      width: 220px;
    }
    .sidebar h5 {
      font-weight: bold;
      padding-left: 20px;
    }
    .sidebar ul {
      list-style: none;
      padding-left: 0;
    }
    .sidebar ul li {
      padding: 10px 20px;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
    }
    .sidebar ul li:hover {
      background-color: #333;
    }
    .content {
      margin-left: 220px;
      padding: 30px;
    }
    .nav-tabs .nav-link {
      border: none;
      border-radius: 0;
      font-weight: 500;
      padding: 10px 20px;
      color: #555;
    }
    .nav-tabs .nav-link.active {
      background-color: #a8874b;
      color: #fff !important;
      font-weight: bold;
    }
    .badge-status {
      padding: 6px 10px;
      font-size: 0.875rem;
      border-radius: 10px;
    }
    .btn-coklat {
      background-color: #c7aa7c;
      color: white;
    }
    .btn-merah {
      background-color: red;
      color: white;
    }
    .top-user {
      position: absolute;
      top: 20px;
      right: 30px;
      background: #f0f0f0;
      padding: 10px 15px;
      border-radius: 10px;
      text-align: right;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h5 class="mb-4">SARPONESIA<br><small class="text-muted">INDONESIAN COFFEE</small></h5>
  <ul>
<ul>
  <li><a href="{{ route('manajemen-produk') }}">Manajemen Produk</a></li>
  <li><a href="{{ route('manajemen-layanan') }}">Manajemen Layanan & Jasa</a></li>
  <li><a href="{{ route('order') }}">Order</a></li>
  <li><a href="{{ route('manajemen-artikel') }}">Manajemen Artikel</a></li>
  <li><a href="{{ route('manajemen-kerjasama') }}">Manajemen Kerjasama</a></li>
  <li><a href="?logout=1">Keluar</a></li>
</ul>

  </ul>
</div>

<!-- Top User Info -->
<div class="top-user">
  <strong>Jacob</strong><br>
  <small>Admin 2</small>
</div>

<!-- Content -->
<div class="content">
  <h3 class="fw-bold mb-4">Manajemen Pesanan</h3>

  <?php
  $status_filter = $_GET['status'] ?? 'Semua';

  $all_orders = [
    ["id" => "#000123", "customer" => "Fahreza Zaidna Isha", "alamat" => "Jl. Melati No. 10, Desa Su...", "produk" => "Roastedbean Robusta", "kategori" => "Kopi", "tanggal" => "07-12-2023", "status" => "Dalam Pengiriman"],
    ["id" => "#000124", "customer" => "Fahreza Zaidna Isha", "alamat" => "Jl. Melati No. 10, Desa Su...", "produk" => "Roastedbean Robusta", "kategori" => "Alat", "tanggal" => "07-12-2023", "status" => "Dalam Proses"],
    ["id" => "#000125", "customer" => "Fahreza Zaidna Isha", "alamat" => "Jl. Melati No. 10, Desa Su...", "produk" => "Roastedbean Robusta", "kategori" => "Pupuk", "tanggal" => "07-12-2023", "status" => "Selesai"],
    ["id" => "#000126", "customer" => "Fahreza Zaidna Isha", "alamat" => "Jl. Melati No. 10, Desa Su...", "produk" => "Roastedbean Robusta", "kategori" => "Benih", "tanggal" => "07-12-2023", "status" => "Dalam Proses"],
  ];

  $orders = ($status_filter === 'Semua') ? $all_orders : array_filter($all_orders, fn($o) => $o['status'] === $status_filter);
  ?>

  <!-- Filter Tabs -->
  <ul class="nav nav-tabs mb-4">
    <?php
    $status_list = ['Semua', 'Dalam Proses', 'Dalam Pengiriman', 'Selesai'];
    foreach ($status_list as $status) {
      $active = ($status_filter === $status) ? 'active' : '';
      $count = ($status === 'Semua') ? count($all_orders) : count(array_filter($all_orders, fn($o) => $o['status'] === $status));
      echo "<li class='nav-item'>
              <a class='nav-link $active' href='?status=" . urlencode($status) . "'>$status <span class='badge bg-light text-dark ms-1'>$count</span></a>
            </li>";
    }
    ?>
  </ul>

  <!-- Tabel -->
  <div class="table-responsive">
    <table class="table table-bordered bg-white shadow-sm">
      <thead class="table-light text-center">
        <tr>
          <th>ID</th>
          <th>Customer</th>
          <th>Alamat</th>
          <th>Produk</th>
          <th>Kategori</th>
          <th>Tanggal</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($orders)): ?>
          <tr><td colspan="7" class="text-center py-4">Tidak ada order dengan status ini.</td></tr>
        <?php else: ?>
          <?php foreach ($orders as $order): ?>
            <tr>
              <td class="text-center"><?= $order['id'] ?></td>
              <td><?= $order['customer'] ?></td>
              <td><?= $order['alamat'] ?></td>
              <td><?= $order['produk'] ?></td>
              <td><?= $order['kategori'] ?></td>
              <td class="text-center"><?= $order['tanggal'] ?></td>
              <td class="text-center">
                <?php
                $badgeClass = match ($order['status']) {
                  'Dalam Proses' => 'bg-warning text-dark',
                  'Dalam Pengiriman' => 'bg-info text-dark',
                  'Selesai' => 'bg-success text-white',
                  default => 'bg-secondary'
                };
                ?>
                <span class="badge badge-status <?= $badgeClass ?>"><?= $order['status'] ?></span>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Tombol -->
  <div class="d-flex justify-content-end gap-2 mt-3">
    <button class="btn btn-coklat">Tambah</button>
    <button class="btn btn-merah">Hapus</button>
  </div>
</div>

</body>
</html>
