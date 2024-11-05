<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" />
    @yield('styles')
    <title>Sarponesia</title>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="{{ asset('assets/Logo.png') }}" alt="Sarponesia Coffee">
            </div>
            <div class="header-right">
                <a class="login-btn" href="{{ url('/login') }}">Login</a>
                <a class="register-btn" href="{{ url('/register') }}">Register</a>
            </div>
        </div>
                <nav>
                <ul class="nav-links">
                    <img src="{{ asset('assets/Logonav.png') }}" alt="Sarponesia Coffee Nav" class="LogoNav" onclick="scrollToTop()">
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="{{ Request::is([ 'benihpupuk', 'peralatan']) ? 'active' : '' }}">
                        <a href="#">Perlengkapan Produksi</a>
                        <ul class="dropdown">
                            <li >
                                <a href="{{ url('/benihpupuk') }}">Benih & Pupuk</a>
                            </li>
                            <li >
                                <a href="{{ url('/peralatan') }}">Peralatan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Request::is(['perawatan*','pelatihan*']) ? 'active' : '' }}">
                        <a href="#">Jasa Kebun & Kopi</a>
                        <ul class="dropdown">
                            <li >
                                <a href="{{ url('/perawatan') }}">Perawatan Kebun</a>
                            </li>
                            <li >
                                <a href="{{ url('/pelatihan') }}">Pelatihan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('katalog') ? 'active' : '' }}">
                        <a href="{{ url('/katalog') }}">Katalog</a>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}">Hubungi</a>
                    </li>
                    <li class="{{ Request::is('program') ? 'active' : '' }}">
                        <a href="{{ url('/program') }}">Program Kerjasama</a>
                    </li>
                    <li class="{{ Request::is('artikel') ? 'active' : '' }}">
                        <a href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                    <li class="{{ Request::is('komunitas') ? 'active' : '' }}">
                        <a href="{{ url('/komunitas') }}">Komunitas</a>
                    </li>
                </ul>
                        <div class="search">
                            <input type="text" class="input" placeholder="Search...">
                            <button class="btn">
                                <img src="{{ asset('assets/Search-vector.svg') }}">
                            </button>
                        </div>
                </nav>

    </header>

    <div class="main">
        @yield('main')
    </div>

<!-- Footer Section -->
<footer>
    <div class="container footer-container">
        <img class="businessImage" src="{{ asset('assets/Logo_footer.png') }}" alt="Logo footer" />
        
        <div class="footer-section">
            <h3>Jam Buka</h3>
            <p>Senin - Sabtu</p>
            <p>08:00 - 23:00</p>
            <div class="contact">
                <div class="alamat">
                    <img class="location" src="{{ asset('assets/loc.svg') }}" alt="Location" />
                    <h4 class="Subtitle">Jl. Mt Haryono No <br>15 Pacitan</h4>
                </div>
            </div>
        </div>
        
        <div class="footer-section">
            <h3>Informasi</h3>
            <p>Menu</p>
            <p>Produk</p>
            <div class="contact">
                <div class="nomorContact">
                    <img class="contactImage" src="{{ asset('assets/Telp.svg') }}" alt="Contact" />
                    <h4 class="Subtitle">0838-9095-8930</h4>
                </div>
            </div>
        </div>
        
        <div class="footer-section">
            <h3>Best Produk</h3>
            <p>Pelatihan Barista</p>
            <p>Pelatihan Logo &<br> Branding</p>
            <div class="contact">
                <div class="Socialmedia">
                    <img class="socialIcon1" src="/assets/facebook.svg" alt="alt text" />
                    <img class="socialIcon2" src="/assets/instagram.svg" alt="alt text" />
                    <img class="socialIcon3" src="/assets/youtube.svg" alt="alt text" />
                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>
