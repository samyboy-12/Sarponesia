<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    @yield('styles')
    <title>Sarponesia</title>
</head>

<!-- Main content -->

<body class="w3-main" id="main">
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="{{ asset('assets/Logo.png') }}" alt="Sarponesia Coffee">
            </div>
            <div class="header-right">
                @guest
                <a class="login-btn" href="{{ url('/login') }}">Login</a>
                @endguest
                @auth
                @if (Auth::user()->role === 'admin')
                <a class="login-btn" href="{{ route('manajemen-produk') }}">Manage</a>
                @else
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="login-btn" type="submit">Logout</button>
                </form>
                @endif
                @endauth
            </div>
        </div>

        <nav>
            <ul class="nav-links">
                <li class="{{ Request::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li class="{{ Request::is(['benihpupuk', 'peralatan']) ? 'active' : '' }}">
                    <a href="{{ route('layanankebunkopi') }}">Layanan & Produk Kopi</a>
                </li>

                <li class="{{ Request::is('katalog') ? 'active' : '' }}">
                    <a href="{{ route('katalog') }}">Katalog</a>
                </li>

                <li class="{{ Request::is('artikel') ? 'active' : '' }}">
                    <a href="{{ route('artikel') }}">Artikel</a>
                </li>

                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Kontak Kerjasama</a>
                </li>

                <li class="{{ Request::is('komunitas') ? 'active' : '' }}">
                    <a href="{{ route('komunitas') }}">Komunitas</a>
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
</body>


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
                    <a href="https://www.facebook.com/sarponesiacoffee/" target="_blank" rel="noopener noreferrer">
                        <img class="socialIcon1" src="/assets/facebook.svg" alt="Facebook" />
                    </a>
                    <a href="https://www.instagram.com/sarponesia_coffee/" target="_blank" rel="noopener noreferrer">
                        <img class="socialIcon2" src="/assets/instagram.svg" alt="Instagram" />
                    </a>
                    <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
                        <img class="socialIcon3" src="/assets/youtube.svg" alt="YouTube" />
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/layout.js') }}"></script>
@yield('scripts')

</html>