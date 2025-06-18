
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarponesia - @yield('title', 'Manajemen Produk')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <h1>SARPONESIA</h1>
            <p>INDONESIA COFFEE</p>
        </div>

        <nav>
            <a href="{{ route('manajemen-produk') }}" class="nav-item {{ Route::currentRouteName() == 'manajemen-produk' ? 'active' : '' }}">
                <span class="nav-icon">📦</span>
                Manajemen Produk
            </a>
            <a href="{{ route('manajemen-layanan') }}" class="nav-item {{ Route::currentRouteName() == 'manajemen-layanan' ? 'active' : '' }}">
                <span class="nav-icon">🛠️</span>
                Manajemen Layanan & Jasa
            </a>
            <a href="{{ route('order') }}" class="nav-item {{ Route::currentRouteName() == 'order' ? 'active' : '' }}">
                <span class="nav-icon">📋</span>
                Order
            </a>
            <a href="{{ route('manajemen-artikel') }}" class="nav-item {{ Route::currentRouteName() == 'manajemen-artikel' ? 'active' : '' }}">
                <span class="nav-icon">📄</span>
                Manajemen Artikel
            </a>
            <a href="{{ route('manajemen-kerjasama') }}" class="nav-item {{ Route::currentRouteName() == 'manajemen-kerjasama' ? 'active' : '' }}">
                <span class="nav-icon">🤝</span>
                Manajemen Kerjasama
            </a>
        </nav>

        <button class="logout-btn">Keluar</button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1 class="page-title">@yield('title', 'Manajemen Produk')</h1>
            <div class="user-info">
                <div class="user-avatar">J</div>
                <div class="user-details">
                    <h3>Jacob</h3>
                    <p>Admin 2</p>
                </div>
            </div>
        </div>

        <div class="main">
            @yield('main')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
</body>
</html>
