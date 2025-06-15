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
      <a href="#" onclick="filterProducts('Semua')">Semua</a>
      <a href="#" onclick="filterProducts('Kopi')">Kopi</a>
      <a href="#" onclick="filterProducts('Pupuk')">Pupuk</a>
      <a href="#" onclick="filterProducts('Alat')">Alat</a>
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
        <tbody id="produk-body">
          <!-- Data akan diisi via JavaScript -->
        </tbody>
      </table>
      <div class="actions">
        <button class="tambah">Tambah</button>
        <button class="hapus">Hapus</button>
      </div>
    </div>
  </main>

  <script>
    const kategoriMap = {
      1: 'Kopi',
      2: 'Benih',
      3: 'Pupuk',
      4: 'Alat'
    };

    let allProducts = [];

    function loadProducts() {
      fetch('http://localhost:8000/api/products')
        .then(response => response.json())
        .then(result => {
          allProducts = result.data;
          displayProducts(allProducts);
        })
        .catch(error => console.error('Gagal mengambil data produk:', error));
    }

    function displayProducts(products) {
      const tbody = document.getElementById('produk-body');
      tbody.innerHTML = '';

      products.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
        <td>${item.Name}</td>
        <td>${kategoriMap[item.Category_ID] || 'Lainnya'}</td>
        <td>${item.Description}</td>
        <td>${formatRupiah(item.Price)}</td>
        <td>${item.Stock}</td>
        <td><img src="${item.Image_path}" alt="${item.Name}" style="height:50px;"></td>
      `;
        tbody.appendChild(row);
      });
    }

    function formatRupiah(number) {
      const num = parseFloat(number);
      return isNaN(num) ? '-' : `Rp ${num.toLocaleString('id-ID')}`;
    }

    function filterProducts(category) {
      if (category === 'Semua') {
        displayProducts(allProducts);
      } else {
        const filtered = allProducts.filter(item => kategoriMap[item.Category_ID] === category);
        displayProducts(filtered);
      }
    }

    window.onload = loadProducts;
  </script>


</body>

</html>