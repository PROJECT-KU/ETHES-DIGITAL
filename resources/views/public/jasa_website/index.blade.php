@extends('public.layout.header')

@section('title')
Jasa Website | Ethes Digital
@stop

@section('konten')
<main class="main">

    <!--================== HEADER ==================-->
    <section class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="mb-4">
                            Website Profesional, Cepat & Siap Pakai<br>
                            <span class="accent-text">Tanpa Ribet, Tanpa Mahal!</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            Ingin website yang terlihat keren, cepat diakses, dan bisa langsung dipakai untuk jualan atau promosi?
                            Kami bantu dari nol — desain menarik, mobile friendly, SEO-ready, dan terhubung langsung ke WhatsApp Anda.
                            <br><br>
                            Cocok untuk UMKM, bisnis online, portofolio, hingga personal branding.
                            Sudah banyak klien puas, sekarang giliran Anda punya website impian dengan harga yang masuk akal!
                        </p>

                        <div class="hero-buttons">
                            <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website-nya." target="_blank" class="btn btn-primary me-0 me-sm-2 mx-1">Konsultasi Gratis Sekarang!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('publict/assets/img/ilustrasi/jasaweb.png') }}" alt="Ilustrasi Jasa Pembuatan Website" class="img-fluid">

                        <!-- Testimoni Pelanggan -->
                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <img src="{{ asset('publict/assets/img/avatar-1.webp') }}" alt="Pelanggan 1" class="avatar">
                                <img src="{{ asset('publict/assets/img/avatar-2.webp') }}" alt="Pelanggan 2" class="avatar">
                                <img src="{{ asset('publict/assets/img/avatar-3.webp') }}" alt="Pelanggan 3" class="avatar">
                                <img src="{{ asset('publict/assets/img/avatar-4.webp') }}" alt="Pelanggan 4" class="avatar">
                                <img src="{{ asset('publict/assets/img/avatar-5.webp') }}" alt="Pelanggan 5" class="avatar">
                                <span class="avatar more">500+</span>
                            </div>
                            <p class="mb-0 mt-2">
                                Telah dipercaya oleh <strong>500+ bisnis & UMKM</strong> untuk membangun website profesional, cepat, dan SEO-friendly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-content">
                            <h4>500+ Klien Puas</h4>
                            <p class="mb-0">Dari UMKM, startup, hingga perusahaan — semua percaya kualitas kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Keamanan & Kepercayaan</h4>
                            <p class="mb-0">Proses aman, transparan, dan garansi kepuasan untuk setiap project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Support Aktif 24/7</h4>
                            <p class="mb-0">Tim kami siap bantu kapan pun kamu butuh — cepat dan solutif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Harga Jujur & Terjangkau</h4>
                            <p class="mb-0">Tanpa biaya tersembunyi. Investasi terbaik untuk website profesional.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--================== END ==================-->

    <!--================== HARGA ==================-->
    <section class="pricing section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Promo Jasa Website Profesional – Mulai dari 1 jutaan!</h2>
            <p>Bangun kepercayaan & penjualan lewat website profesional, cepat online, dan mobile-friendly.
                Harga terjangkau, desain menawan, SEO ready, dan support penuh dari tim ahli kami. Cocok untuk UMKM, personal branding, hingga toko online.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">

                <!-- Paket 1 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3 style="text-align: center; font-weight: bold;">Paket Cuan</h3>
                        <p style="text-align: center;">Untuk kamu yang baru mulai jualan atau ingin punya website profesional dengan budget hemat</p>

                        <!-- Harga Awal -->
                        <div class="original-price mb-3 mt-3" style="font-size: 20px; color: #dc3545; font-weight: bold; text-align:center;">
                            <del>Rp2.500.000</del>
                            <span style="background-color: #ffc107; color: #000; font-size: 14px; font-weight: 600; margin-left: 10px; padding: 3px 8px; border-radius: 5px;">
                                Diskon 50%
                            </span>
                        </div>

                        <!-- Harga Promo -->
                        <div class="price" style="text-align: center;">
                            <span class="currency">Rp</span>
                            <span class="amount">1.250.000</span>
                        </div>

                        <hr>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>Desain website modern & responsif</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis domain & hosting selama 1 tahun</li>
                            <li><i class="bi bi-check-circle-fill"></i>5 halaman utama</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis SSL (website aman dengan HTTPS)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Integrasi media sosial (WhatsApp, Instagram, dll)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis 1 email bisnis (nama@domainanda.com)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Desain tampilan standar, rapi dan profesional</li>
                            <li><i class="bi bi-check-circle-fill"></i>Optimasi SEO dasar agar mudah ditemukan di Google</li>
                            <li><i class="bi bi-check-circle-fill"></i>Garansi teknis selama 1 tahun</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis maintenance/update ringan selama 1 bulan</li>
                        </ul>

                        <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20ingin%20pesan%20Grammarly%20Premium%201%20bulan" class="btn btn-primary" target="_blank">
                            Pesan Sekarang
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Paket 2 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Best Seller</div>
                        <h3 style="text-align: center; font-weight: bold;">Paket Ngebut</h3>
                        <p style="text-align: center;"> Cocok untuk kamu yang butuh website cepat jadi tanpa ribet, langsung siap pakai dan tampil profesional</p>

                        <!-- Harga Awal -->
                        <div class="original-price mb-3 mt-3" style="font-size: 20px; color: #dc3545; font-weight: bold; text-align:center;">
                            <del>Rp8.000.000</del>
                            <span style="background-color: #ffc107; color: #000; font-size: 14px; font-weight: 600; margin-left: 10px; padding: 3px 8px; border-radius: 5px;">
                                Diskon 37.5%
                            </span>
                        </div>

                        <!-- Harga Promo -->
                        <div class="price" style="text-align: center;">
                            <span class="currency">Rp</span>
                            <span class="amount">4.999.000</span>
                        </div>

                        <hr>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>Desain eksklusif, responsif & UI/UX profesional</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis domain & hosting 1 tahun</li>
                            <li><i class="bi bi-check-circle-fill"></i>10 halaman utama</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis SSL (HTTPS) & keamanan dasar</li>
                            <li><i class="bi bi-check-circle-fill"></i>Integrasi WhatsApp, Instagram, Google Maps, dll</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis 3 email bisnis (nama@bisnisanda.com)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Desain tampilan modern & profesional</li>
                            <li><i class="bi bi-check-circle-fill"></i>Optimasi SEO lanjutan (on-page & speed)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Formulir kontak & call to action interaktif</li>
                            <li><i class="bi bi-check-circle-fill"></i>Terdapat fitur dashboard admin</li>
                            <li><i class="bi bi-check-circle-fill"></i>Garansi teknis 1 tahun penuh</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis maintenance/update ringan 3 bulan</li>
                        </ul>

                        <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20ingin%20pesan%20Grammarly%20Premium%206%20bulan" class="btn btn-light" target="_blank">
                            Pesan Sekarang
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Paket 3 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3 style="text-align: center; font-weight: bold;">Paket Customize</h3>
                        <p style="text-align: center;">Cocok untuk bisnis yang butuh website dengan fitur custom sesuai kebutuhan, desain premium, dan skalabilitas jangka panjang</p>

                        <!-- Harga Mulai -->
                        <div class="original-price mb-1" style="font-size: 20px; color: #dc3545; font-weight: bold; text-align:center;">
                            Mulai dari
                        </div>

                        <!-- Harga Promo -->
                        <div class="price" style="text-align: center;">
                            <span class="currency">Rp</span>
                            <span class="amount">5.000.000</span>
                        </div>

                        <p class="description" style="text-align: center;">Harga menyesuaikan kebutuhan fitur & kompleksitas desain</p>

                        <hr>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>Desain 100% custom sesuai brand identity</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis domain & hosting premium 1 tahun</li>
                            <li><i class="bi bi-check-circle-fill"></i>Halaman tak terbatas sesuai kebutuhan</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis SSL (HTTPS) & keamanan ekstra</li>
                            <li><i class="bi bi-check-circle-fill"></i>Integrasi WhatsApp, Instagram, Google Maps, dll</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis 5 email bisnis (nama@bisnisanda.com)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Desain tampilan eksklusif & profesional</li>
                            <li><i class="bi bi-check-circle-fill"></i>Optimasi SEO lanjutan (on-page, kecepatan, mobile-first)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Formulir interaktif & CTA (call-to-action) kustom</li>
                            <li><i class="bi bi-check-circle-fill"></i>Dashboard admin kustom (multi-role, statistik, dll)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Garansi teknis & support selama 1 bulan</li>
                            <li><i class="bi bi-check-circle-fill"></i>Gratis maintenance/update ringan selama 6 bulan</li>
                            <li><i class="bi bi-check-circle-fill"></i>Fitur tambahan sesuai request (payment gateway, API, booking, dll)</li>
                        </ul>

                        <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20ingin%20pesan%20Grammarly%20Premium%201%20tahun" class="btn btn-primary" target="_blank">
                            Pesan Sekarang
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== MENGAPA MEMILIH KAMI ==================-->
    <section class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">KENAPA HARUS KAMI?</span>
                    <h2 class="about-title">Partner Digital Terpercaya, Hemat, & Siap 24 Jam</h2>
                    <p class="about-description">
                        Bingung cari jasa pembuatan website yang <strong>profesional tapi tetap terjangkau?</strong><br>
                        Atau pernah kecewa karena hasil website tidak sesuai ekspektasi, lambat, atau susah dihubungi setelah deal?
                    </p>
                    <p class="about-description">
                        Kami hadir sebagai solusi digital modern yang <strong>aman, cepat, hemat, dan tanpa ribet</strong>. Dengan pengalaman menangani lebih dari 600+ proyek digital, kami tahu betul bagaimana menghadirkan website yang tidak hanya keren secara tampilan — tapi juga optimal untuk bisnismu.
                    </p>

                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Harga Terjangkau & Transparan</li>
                                <li><i class="bi bi-check-circle-fill"></i> Support Cepat 24/7 via WhatsApp</li>
                                <li><i class="bi bi-check-circle-fill"></i> Legal, Aman, dan Terpercaya</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Proses Cepat & Anti Ribet</li>
                                <li><i class="bi bi-check-circle-fill"></i> Dipercaya 600+ Proyek Digital</li>
                                <li><i class="bi bi-check-circle-fill"></i> Bonus & Diskon Berkala</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper mt-4">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="https://wa.me/6285650825721"
                                    target="_blank"
                                    class="btn btn-lg px-4 py-3 text-white fw-semibold"
                                    style="background: linear-gradient(135deg, #1FCF84, #0B8F7A); 
                      border: none; 
                      border-radius: 12px; 
                      box-shadow: 0 6px 18px rgba(31, 207, 132, 0.35); 
                      transition: all 0.3s ease; 
                      display: inline-block;"
                                    onmouseover="this.style.filter='brightness(1.1)'; this.style.transform='scale(1.03)'"
                                    onmouseout="this.style.filter='none'; this.style.transform='scale(1)'">
                                    <i class="bi bi-whatsapp me-2"></i> Konsultasi Gratis Sekarang!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <img src="{{ asset('publict/assets/img/ilustrasi/mengapamemilihkami.png') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                            <img src="{{ asset('publict/assets/img/ilustrasi/mengapamemilihkami2.png') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
                        </div>
                        <div class="experience-badge floating">
                            <h3>15+ <span>Tahun</span></h3>
                            <p>Pengalaman bantu solusi digital</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== FITUR UNGGULAN ==================-->
    <section class="features section">

        <!-- Judul Section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Mengapa Ribuan Pengusaha Memilih Jasa Website Kami?</h2>
            <p>Layanan pembuatan website profesional dengan harga terjangkau, desain responsif, dan dukungan yang selalu siap membantu!</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <h4>Desain Profesional & Modern</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <h4>Dukungan Pelanggan 24/7</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <h4>Keamanan & Garansi</h4>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <!-- Tab 1: Desain Profesional & Modern -->
                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Website yang Menarik & User-friendly</h3>
                            <p class="fst-italic">
                                Kami menciptakan desain website yang tidak hanya menarik tetapi juga mudah digunakan, cocok untuk berbagai jenis bisnis.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Desain responsif untuk tampilan optimal di semua perangkat.</li>
                                <li><i class="bi bi-check2-all"></i> Pengalaman pengguna (UX) yang diperhatikan dengan seksama.</li>
                                <li><i class="bi bi-check2-all"></i> Website yang cepat dan ringan untuk pengunjung.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('publict/assets/img/features-illustration-1.webp') }}" alt="Desain Profesional" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Tab 2: Dukungan Pelanggan 24/7 -->
                <div class="tab-pane fade" id="features-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Dukungan Pelanggan Cepat & Responsif</h3>
                            <p class="fst-italic">
                                Kami siap membantu kapan saja, dengan dukungan pelanggan yang cepat dan efektif untuk memastikan kepuasan Anda.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Respon cepat via WhatsApp dalam waktu <strong>kurang dari 5 menit</strong>.</li>
                                <li><i class="bi bi-check2-all"></i> Tim kami siap membantu <strong>24/7 tanpa henti</strong>.</li>
                                <li><i class="bi bi-check2-all"></i> Proses pengerjaan cepat dan sesuai deadline.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('publict/assets/img/features-illustration-2.webp') }}" alt="Dukungan Pelanggan" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Keamanan & Garansi -->
                <div class="tab-pane fade" id="features-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Keamanan & Garansi Terbaik</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Penggunaan SSL dan protokol keamanan terbaik.</li>
                                <li><i class="bi bi-check2-all"></i> Garansi penuh pada setiap website yang kami buat.</li>
                                <li><i class="bi bi-check2-all"></i> Jaminan pemeliharaan dan update website selama masa kontrak.</li>
                            </ul>
                            <p class="fst-italic">
                                Anda dapat merasa aman dengan website yang aman dan terjamin, serta pemeliharaan yang berkelanjutan.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('publict/assets/img/features-illustration-3.webp') }}" alt="Keamanan & Garansi" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== FITUR CARD ==================-->
    <section class="features-cards section">
        <div class="container">
            <div class="row gy-4">

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-box orange">
                        <i class="bi bi-tags"></i>
                        <h4>Harga Terjangkau</h4>
                        <p>Dapatkan layanan premium dengan harga yang sangat bersahabat. Kami menjamin kualitas terbaik tanpa membebani anggaran Anda</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-box blue">
                        <i class="bi bi-clock"></i>
                        <h4>Layanan Cepat & Responsif</h4>
                        <p>Kami berkomitmen untuk memberikan respon cepat. Dukungan pelanggan kami tersedia 24/7 untuk memastikan kenyamanan Anda</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-box green">
                        <i class="bi bi-brush"></i>
                        <h4>Desain Website Profesional</h4>
                        <p>Website Anda akan dirancang dengan tampilan yang menarik, responsif, dan modern, sesuai dengan tren terkini</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-box red">
                        <i class="bi bi-shield-check"></i>
                        <h4>Keamanan Terjamin</h4>
                        <p>Setiap transaksi dan data pelanggan dijaga dengan enkripsi terbaik, menjamin keamanan dan kenyamanan Anda setiap saat</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== FITUR 2 MOBILE ==================-->
    <section class="features-2 section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">

                <!-- Bagian Kiri -->
                <div class="col-lg-4">

                    <!-- Fitur 1 -->
                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Dukungan di Semua Perangkat</h3>
                                <p>Layanan kami dapat diakses dengan sempurna di desktop, tablet, maupun smartphone. Akses fleksibel kapan saja dan di mana saja.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0" style="width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center; gap: 4px; overflow: hidden;">
                                <i class="bi bi-display" style="font-size: 20px; color: #0d6efd;"></i>
                                <i class="bi bi-phone" style="font-size: 20px; color: #0d6efd;"></i>
                                <i class="bi bi-tablet" style="font-size: 20px; color: #0d6efd;"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Desain Ringan & Cepat</h3>
                                <p>Dengan desain ringan menggunakan Feather Icons, website Anda akan terlihat modern, minimalis, dan cepat diakses.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-feather" style="font-size: 32px;"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Tampilan Tajam & Jernih</h3>
                                <p>Website Anda akan tampil maksimal di layar resolusi tinggi berkat dukungan retina display yang tajam dan berkualitas.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-eye" style="font-size: 32px;"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Mockup Tengah -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="phone-mockup text-center">
                        <img src="{{ asset('publict/assets/img/phone-app-screen.webp') }}" alt="Mockup Aplikasi" class="img-fluid">
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="col-lg-4">

                    <!-- Fitur 4 -->
                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-code-square" style="font-size: 32px;"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Kode Valid & Bersih</h3>
                                <p>Website Anda dibangun dengan kode standar W3C yang valid dan rapi untuk performa dan keamanan terbaik.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 5 -->
                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-phone" style="font-size: 32px;"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Responsif di Semua Ukuran Layar</h3>
                                <p>Desain kami otomatis menyesuaikan dengan ukuran layar sehingga tetap nyaman dilihat di perangkat apapun.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fitur 6 -->
                    <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-browser-chrome" style="font-size: 32px;"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Kompatibel di Semua Browser</h3>
                                <p>Website diuji dan berjalan lancar di berbagai browser populer seperti Chrome, Firefox, Edge, dan Safari.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== CTA ==================-->
    <section class="call-to-action section py-5" style="position: relative; overflow: hidden;">
        <div class="container" data-aos="fade-up" data-aos-delay="100" style="background: #e0f7fa;">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">

                    <h2 class="display-5 fw-bold text-black mb-3">
                        Ingin Website Profesional untuk Bisnismu?
                    </h2>

                    <p class="fs-5 text-black mb-4">
                        Kami bantu buatkan <b>website modern, cepat, dan responsif</b> sesuai kebutuhanmu. <br>
                        Cocok untuk <strong>toko online, portfolio, landing page, hingga company profile</strong>.
                    </p>

                    <a href="https://wa.me/6285650825721?text=Halo%20admin%2C%20saya%20ingin%20konsultasi%20tentang%20jasa%20pembuatan%20website"
                        class="btn btn-lg px-5 py-3 rounded-pill text-white fw-semibold shadow"
                        style="background: linear-gradient(135deg, #00BFA6, #1FCF84);
                        transition: all 0.3s ease;
                        box-shadow: 0 8px 24px rgba(31, 207, 132, 0.4);"
                        onmouseover="this.style.filter='brightness(1.1)'; this.style.transform='scale(1.05)'"
                        onmouseout="this.style.filter='none'; this.style.transform='scale(1)'">
                        <i class="bi bi-whatsapp me-2"></i> Konsultasi Gratis Sekarang!
                    </a>
                </div>
            </div>

            <!-- Elemen Dekoratif -->
            <div class="shape shape-1" style="position: absolute; top: -40px; left: -60px; width: 120px; height: 120px; background: #1FCF84; opacity: 0.15; border-radius: 50%;"></div>
            <div class="shape shape-2" style="position: absolute; bottom: -50px; right: -40px; width: 100px; height: 100px; background: #00BFA6; opacity: 0.2; border-radius: 50%;"></div>

            <!-- Shapes for top-right and bottom-left -->
            <div class="shape shape-3" style="position: absolute; top: -40px; right: -60px; width: 120px; height: 120px; background: #1FCF84; opacity: 0.15; border-radius: 50%; animation: moveShape1 5s infinite alternate;"></div>

            <!-- Perbaikan untuk shape kanan bawah -->
            <div class="shape shape-4" style="position: absolute; bottom: -50px; right: -40px; width: 100px; height: 100px; background: #00BFA6; opacity: 0.2; border-radius: 50%; animation: moveShape2 5s infinite alternate;"></div>

            <!-- Dots for top-right and bottom-left -->
            <div class="dots dots-1" style="position: absolute; top: 20%; left: 5%; width: 40px; height: 40px; background-image: radial-gradient(#ccc 1px, transparent 1px); background-size: 10px 10px;"></div>
            <div class="dots dots-2" style="position: absolute; bottom: 15%; right: 10%; width: 40px; height: 40px; background-image: radial-gradient(#ccc 1px, transparent 1px); background-size: 10px 10px;"></div>

            <!-- Dots for top-right and bottom-left -->
            <div class="dots dots-3" style="position: absolute; top: 15%; right: 10%; width: 40px; height: 40px; background-image: radial-gradient(#ccc 1px, transparent 1px); background-size: 10px 10px;"></div>
            <div class="dots dots-4" style="position: absolute; bottom: 5%; left: 10%; width: 40px; height: 40px; background-image: radial-gradient(#ccc 1px, transparent 1px); background-size: 10px 10px;"></div>

            <!-- CSS Animations -->
            <style>
                @keyframes moveShape1 {
                    0% {
                        top: -40px;
                        right: -60px;
                    }

                    50% {
                        top: -60px;
                        right: -80px;
                    }

                    100% {
                        top: -40px;
                        right: -60px;
                    }
                }

                @keyframes moveShape2 {
                    0% {
                        bottom: -50px;
                        right: -40px;
                    }

                    50% {
                        bottom: -70px;
                        right: -60px;
                    }

                    100% {
                        bottom: -50px;
                        right: -40px;
                    }
                }
            </style>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== CLIENT ==================-->
    <section id="clients" class="clients section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/rsc.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('publict/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!--================== END ==================-->

    <!--================== SERVICE ==================-->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Jasa Kami</h2>
            <p>Menyediakan layanan pembuatan, pengelolaan, dan pemeliharaan website yang profesional dan terpercaya.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div>
                            <h3>Pembuatan Website Custom</h3>
                            <p>Kami menawarkan pembuatan website yang disesuaikan dengan kebutuhan bisnis Anda. Desain modern, responsif, dan fungsional untuk meningkatkan kredibilitas online Anda.</p>
                            <!-- <a href="service-details.html" class="read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-tools"></i>
                        </div>
                        <div>
                            <h3>Maintenance & Update Website</h3>
                            <p>Jaga website Anda tetap optimal dan terbaru dengan layanan pemeliharaan dan pembaruan rutin. Kami memastikan website Anda tetap berjalan dengan lancar dan aman.</p>
                            <!-- <a href="service-details.html" class="read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div>
                            <h3>Keamanan Website</h3>
                            <p>Lindungi website Anda dari potensi ancaman dengan layanan keamanan yang lengkap, termasuk proteksi terhadap serangan dan pemulihan data.</p>
                            <!-- <a href="service-details.html" class="read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div>
                            <h3>SEO & Optimasi Website</h3>
                            <p>Tingkatkan visibilitas website Anda di mesin pencari dengan layanan SEO profesional kami. Kami bantu website Anda muncul di halaman pertama Google.</p>
                            <!-- <a href="service-details.html" class="read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== TESTIMONI ==================-->
    <!-- <section id="testimonials" class="testimonials section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-item">
                        <img src="{{ asset('publict/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-item">
                        <img src="{{ asset('publict/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-item">
                        <img src="{{ asset('publict/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-item">
                        <img src="{{ asset('publict/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== STATISTIK PEMBELI ==================-->
    <section class="stats section bg-light">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center text-center">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="1531" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-success"></span>
                        <p class="mt-2 fs-5">Proyek Website Sukses</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="780" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-primary"></span>
                        <p class="mt-2 fs-5">Klien Puas & Setia</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-danger"></span>
                        <p class="mt-2 fs-5">Jam Support 24/7</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-warning"></span>
                        <p class="mt-2 fs-5">Tingkat Kepuasan Klien %</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== FAQ ==================-->
    <section class="faq-9 faq section light-background">
        <div class="container">
            <div class="row">

                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="faq-title">Pertanyaan Umum (FAQ)</h2>
                    <p class="faq-description">Masih ragu? Berikut adalah beberapa pertanyaan yang sering ditanyakan oleh calon klien sebelum memesan jasa website kami.</p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>Apakah website yang dibuat bisa disesuaikan dengan kebutuhan bisnis saya?</h3>
                            <div class="faq-content">
                                <p>Ya! Website yang kami buat sepenuhnya <strong>disesuaikan</strong> dengan kebutuhan dan preferensi bisnis Anda. Kami bekerja sama dengan Anda untuk memahami tujuan dan menciptakan desain yang unik dan fungsional.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Berapa lama waktu pembuatan website?</h3>
                            <div class="faq-content">
                                <p>Waktu pembuatan website tergantung pada kompleksitas proyek. Umumnya, untuk website sederhana kami membutuhkan waktu <strong>2-4 minggu</strong>, dan untuk website yang lebih kompleks bisa memakan waktu lebih lama. Kami akan memberikan estimasi waktu yang lebih tepat setelah konsultasi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Apakah website yang dibuat sudah responsif dan mobile-friendly?</h3>
                            <div class="faq-content">
                                <p>Tentu saja! Semua website yang kami buat <strong>responsif</strong> dan <strong>mobile-friendly</strong>, yang berarti website Anda akan terlihat dan berfungsi dengan baik di semua perangkat, baik desktop, tablet, maupun ponsel.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Apakah Anda memberikan layanan pemeliharaan website setelah pembuatan?</h3>
                            <div class="faq-content">
                                <p>Ya, kami menyediakan layanan <strong>maintenance</strong> untuk memastikan website Anda tetap berjalan lancar dan aman. Layanan ini mencakup pembaruan, perbaikan bug, dan peningkatan fungsionalitas website.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Apakah website yang dibuat sudah dioptimalkan untuk SEO?</h3>
                            <div class="faq-content">
                                <p>Website yang kami buat sudah dilengkapi dengan <strong>dasar-dasar SEO</strong> untuk membantu website Anda muncul di mesin pencari seperti Google. Kami juga menawarkan layanan optimasi SEO lebih lanjut untuk meningkatkan visibilitas dan peringkat pencarian website Anda.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Bisakah saya mengelola website setelah dibuat?</h3>
                            <div class="faq-content">
                                <p>Ya, kami memastikan bahwa Anda dapat dengan mudah mengelola konten website Anda setelah selesai. Kami juga memberikan pelatihan dan dukungan untuk memastikan Anda merasa nyaman menggunakan platform yang kami buat.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Bagaimana cara saya memulai proyek pembuatan website?</h3>
                            <div class="faq-content">
                                <p>Untuk memulai, cukup <strong>hubungi kami via WhatsApp</strong> atau isi formulir kontak di halaman utama. Kami akan mengatur jadwal konsultasi untuk mendiskusikan kebutuhan dan tujuan Anda dalam membuat website.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== KONTAK ==================-->
    <section class="contact section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <p>Kami siap bantu kebutuhan akun premium Anda — cepat, terpercaya, dan harga bersahabat!</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Info Kontak</h3>
                        <p>Tim kami siap melayani Anda 24/7 dengan ramah dan respons cepat. Jangan ragu untuk menghubungi kami kapan saja!</p>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Alamat Kami</h4>
                                <p>Bangunkerto, Turi, Sleman, Yogyakarta</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h4>Nomor WhatsApp</h4>
                                <p>+62 856 5082 5721</p>
                                <p>Siap fast response kapan pun!</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>Email</h4>
                                <p>ethesdigital@gmail.com</p>
                                <p>Kami akan balas secepatnya!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Kirim Pesan Langsung</h3>
                        <p>Punya pertanyaan seputar produk? Ingin tanya harga atau promo terbaru? Kirimkan pesan Anda dan kami akan bantu secepatnya!</p>

                        <form action="https://formspree.io/f/mkgjkdle" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200" id="contactForm">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email Aktif" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Judul Pesan" required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Tulis pertanyaan atau kebutuhan Anda..." required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="error-message" style="color: red;"></div>
                                    <button type="submit" class="btn">Kirim Sekarang</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== SWEET ALERT SEND KONTAK ==================-->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const data = new FormData(form);
            const errorBox = form.querySelector('.error-message');
            errorBox.textContent = '';

            try {
                const response = await fetch('https://formspree.io/f/mkgjkdle', {
                    method: 'POST',
                    body: data,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Pesan Berhasil Dikirim!',
                        text: 'Kami akan segera menghubungi Anda.',
                        confirmButtonColor: '#198754'
                    });
                    form.reset();
                } else {
                    const errorData = await response.json();
                    throw new Error(errorData?.errors?.[0]?.message || 'Terjadi kesalahan saat mengirim.');
                }
            } catch (error) {
                errorBox.textContent = error.message;
            }
        });
    </script>
    <!--================== END ==================-->
</main>

@stop