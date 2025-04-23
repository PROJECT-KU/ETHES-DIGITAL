<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--================== FAVICON ==================-->
    <link href="{{ asset('global/assets/logo/favicon.png') }}" rel="icon">
    <link href="{{ asset('global/assets/logo/favicon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('global/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('global/assets/css/main.css') }}" rel="stylesheet">

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jika menu active -->
    <style>
        a.active {
            color: #0d6efd;
            font-weight: bold;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body class="index-page">

    <!--================== HEADER ==================-->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('global/assets/logo/logo_header.png') }}" alt="Hero Image" class="img-fluid">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                            Beranda
                        </a>
                    </li>
                    <li style="background-color: #fbc02d; border-radius: 6px;">
                        <a href="{{ url('/#pricing') }}"
                            style="font-weight: bold; color: #000; padding: 8px 12px; display: inline-block; text-align: center;">
                            Promo Hari Ini!
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('jasawebsite') }}" class="{{ Request::is('jasa-website') ? 'active' : '' }}">
                            Jasa Website
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/#contact') }}">
                            Kontak
                        </a>
                    </li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- <a class="btn-getstarted" href="index.html#about">Get Started</a> -->

        </div>
    </header>
    <!--================== END ==================-->

    @yield('konten')

    <!--================== FOOTER ==================-->
    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('global/assets/logo/logo_header.png') }}" alt="Hero Image" class="img-fluid">
                    </a>
                    <div class="footer-contact pt-3">
                        <p><i class="bi bi-geo-alt"></i> Bangunkerto, Turi, Sleman, Yogyakarta</p>
                        <p class="mt-3"> <i class="bi bi-telephone"></i> <span>+62 856 5082 5721</span></p>
                        <p><i class="bi bi-envelope"></i> <span>ethesdigital@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#">Jasa Pembuatan Webiste</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Akun Grammarly Premium</a></li>
                        <li><a href="#">Pembuatan Website</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-5 footer-links">
                    <h4>Kenapa Pilih Kami?</h4>
                    <ul>
                        <li><a href="#">✔️ Proses Cepat & Aman</a></li>
                        <li><a href="#">✔️ Harga Terjangkau</a></li>
                        <li><a href="#">✔️ Support 24/7</a></li>
                        <li><a href="#">✔️ Layanan Bergaransi</a></li>
                    </ul>
                </div>

                <!-- <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div> -->

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span> <span id="year"></span> <strong class="px-1 sitename">Ethes Digital</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Semua Menjadi Mudah</a>
            </div>
        </div>

        <script>
            // Tahun otomatis
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>
    </footer>
    <!--================== END ==================-->

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!--================== JS ==================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('global/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('global/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('global/assets/js/main.js') }}"></script>
    <!--================== END ==================-->

</body>