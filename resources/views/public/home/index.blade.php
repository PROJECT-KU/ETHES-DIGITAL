@extends('public.layout.header')

@section('title')
Beranda | Ethes Digital
@stop

@section('konten')
<main class="main">

    <!--================== HEADER ==================-->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="mb-4">
                            Tulis Tanpa Takut Salah dengan<br>
                            <span class="accent-text">Grammarly Premium Asli</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            Bingung grammar? Takut typo di skripsi, email kerja, atau postingan penting?
                            <strong>Grammarly Premium</strong> bantu Anda menulis lebih profesional, lebih percaya diri, dan bebas kesalahan.
                            <br><br>
                            Dapatkan akses legal dengan harga ramah kantong, langsung aktif dalam hitungan menit. Ribuan pelanggan sudah bukti — sekarang giliran Anda!
                        </p>

                        <div class="hero-buttons">
                            <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20tertarik%20dengan%20akun%20Grammarly%20Premium-nya." target="_blank" class="btn btn-primary me-0 me-sm-2 mx-1">Pesan Sekarang!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('global/assets/img/ilustrasi/ilustrasigrammarly2.png') }}" alt="Grammarly Premium Illustration" class="img-fluid">

                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <img src="{{ asset('global/assets/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                                <img src="{{ asset('global/assets/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                                <img src="{{ asset('global/assets/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                                <img src="{{ asset('global/assets/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                                <img src="{{ asset('global/assets/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                                <span class="avatar more">1.000+</span>
                            </div>
                            <p class="mb-0 mt-2">Lebih dari <strong>1.000+ pelanggan puas</strong> sudah upgrade kemampuan menulis mereka bersama kami.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="stat-content">
                            <h4>500+ Pelanggan Percaya</h4>
                            <p class="mb-0">Kami dipercaya oleh berbagai bisnis dan brand</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="stat-content">
                            <h4>100% Aman & Terpercaya</h4>
                            <p class="mb-0">Transaksi cepat, data Anda kami jaga dengan baik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Dukungan 24/7</h4>
                            <p class="mb-0">Respons cepat & ramah, tim support kami selalu standby</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-tag"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Harga Sangat Terjangkau</h4>
                            <p class="mb-0">Kualitas terbaik dengan biaya yang bersahabat</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--================== END ==================-->

    <!--================== HARGA GRAMMARLY ==================-->
    <section id="pricing" class="pricing section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>🔥 Promo Grammarly Premium Hari Ini – Diskon Gila!</h2>
            <p>Dapatkan akses Grammarly Premium legal dan full fitur mulai dari Rp15.000! Cocok untuk pelajar, pekerja, hingga profesional. Promo terbatas – buruan sebelum kehabisan!</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">

                <!-- Paket 1 Bulan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3 style="text-align: center;">Paket 1 Bulan</h3>

                        <!-- Harga Awal -->
                        <div class="original-price mb-1" style="font-size: 20px; color: #dc3545; font-weight: bold;">
                            <del>Rp40.000</del>
                        </div>

                        <!-- Harga Promo -->
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">15.000</span>
                            <span class="period">/bulan</span>
                        </div>

                        <p class="description">Langganan cepat & aman. Mulai dari harga pelajar!</p>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> Akses Grammarly Premium</li>
                            <li><i class="bi bi-check-circle-fill"></i> Akun resmi dan legal</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dukungan pelanggan 24/7</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hemat 62.5%</li>
                        </ul>

                        <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20ingin%20pesan%20Grammarly%20Premium%201%20bulan" class="btn btn-primary" target="_blank">
                            Pesan Sekarang
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Paket 6 Bulan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Best Seller</div>
                        <h3 style="text-align: center;">Paket 6 Bulan</h3>

                        <!-- Harga Awal -->
                        <div class="original-price mb-1" style="font-size: 20px; color: #dc3545; font-weight: bold;">
                            <del>Rp120.000</del>
                        </div>

                        <!-- Harga Promo -->
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">60.000</span>
                            <span class="period">/6 bulan</span>
                        </div>

                        <p class="description">Cocok untuk mahasiswa, freelancer, dan tenaga pendidik.</p>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> Akses Grammarly Premium</li>
                            <li><i class="bi bi-check-circle-fill"></i> Garansi penuh selama masa aktif</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customer support responsif</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hemat 50%</li>
                        </ul>

                        <a href="https://wa.me/6285650825721?text=Halo%2C%20saya%20ingin%20pesan%20Grammarly%20Premium%206%20bulan" class="btn btn-light" target="_blank">
                            Pesan Sekarang
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Paket 1 Tahun -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3 style="text-align: center;">Paket 1 Tahun</h3>

                        <!-- Harga Awal -->
                        <div class="original-price mb-1" style="font-size: 20px; color: #dc3545; font-weight: bold;">
                            <del>Rp180.000</del>
                        </div>

                        <!-- Harga Promo -->
                        <div class="price">
                            <span class="currency">Rp</span>
                            <span class="amount">100.000</span>
                            <span class="period">/tahun</span>
                        </div>

                        <p class="description">Langganan panjang, bebas ribet. Harga paling hemat!</p>

                        <h4>Fitur Termasuk:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i> Grammarly Premium selama 12 bulan</li>
                            <li><i class="bi bi-check-circle-fill"></i> Bantuan setup gratis</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customer care aktif 24 jam</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hemat 44.4%</li>
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
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">KENAPA HARUS KAMI?</span>
                    <h2 class="about-title">Partner Digital Terpercaya, Hemat, & Siap 24 Jam</h2>
                    <p class="about-description">
                        Kami hadir sebagai solusi digital modern untuk pelajar, profesional, dan bisnis. Menawarkan layanan berkualitas tinggi dengan harga yang jauh lebih hemat — tanpa mengorbankan keamanan, kecepatan, dan kepercayaan.
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
                                    <i class="bi bi-whatsapp me-2"></i> Pesan Sekarang!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <img src="{{ asset('global/assets/img/about-5.webp') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                            <img src="{{ asset('global/assets/img/about-2.webp') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
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
    <section id="features" class="features section">

        <!-- Judul Section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Mengapa Ribuan Orang Memilih Kami?</h2>
            <p>Layanan digital terpercaya dengan harga bersahabat, kualitas premium, dan support cepat tanggap!</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <h4>Harga Terjangkau</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <h4>Pelayanan Cepat</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <h4>Garansi & Keamanan</h4>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <!-- Tab 1 -->
                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Harga Hemat, Kualitas Hebat</h3>
                            <p class="fst-italic">
                                Kami menawarkan layanan premium dengan harga yang bersahabat untuk semua kalangan — pelajar, profesional, dan UMKM.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Mulai dari Rp15.000 per bulan untuk akun premium resmi.</li>
                                <li><i class="bi bi-check2-all"></i> Tanpa biaya tersembunyi atau tambahan.</li>
                                <li><i class="bi bi-check2-all"></i> Diskon hingga 50% dibanding harga pasaran.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('global/assets/img/features-illustration-1.webp') }}" alt="Harga Terjangkau" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Tab 2 -->
                <div class="tab-pane fade" id="features-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Layanan Super Cepat & Responsif</h3>
                            <p class="fst-italic">
                                Kepuasan Anda adalah prioritas kami. Tim kami siap melayani dan membantu kapan pun dibutuhkan.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Respon WhatsApp <strong>di bawah 5 menit</strong>.</li>
                                <li><i class="bi bi-check2-all"></i> Proses aktivasi akun dalam <strong>hitungan menit</strong>.</li>
                                <li><i class="bi bi-check2-all"></i> Dukungan <strong>24/7 tanpa henti</strong>.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('global/assets/img/features-illustration-2.webp') }}" alt="Pelayanan Cepat" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="features-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Transaksi Aman & Bergaransi</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Transaksi via marketplace (opsional) untuk keamanan ekstra.</li>
                                <li><i class="bi bi-check2-all"></i> Garansi layanan selama masa aktif langganan.</li>
                                <li><i class="bi bi-check2-all"></i> Refund jika akun tidak sesuai deskripsi.</li>
                            </ul>
                            <p class="fst-italic">
                                Kami menjamin kenyamanan dan ketenangan dalam setiap transaksi Anda bersama kami.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('global/assets/img/features-illustration-3.webp') }}" alt="Garansi Aman" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== FITUR CARD ==================-->
    <!-- <section id="features-cards" class="features-cards section">
        <div class="container">
            <div class="row gy-4">

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-box orange">
                        <i class="bi bi-award"></i>
                        <h4>Corporis voluptates</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-box blue">
                        <i class="bi bi-patch-check"></i>
                        <h4>Explicabo consectetur</h4>
                        <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-box green">
                        <i class="bi bi-sunrise"></i>
                        <h4>Ullamco laboris</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-box red">
                        <i class="bi bi-shield-check"></i>
                        <h4>Labore consequatur</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== FITUR 2 MOBILE ==================-->
    <!-- <section id="features-2" class="features-2 section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-4">

                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Use On Any Device</h3>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-display"></i>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Feather Icons</h3>
                                <p>Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum volutpat sapien arcu sed augue aliquam erat volutpat.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-feather"></i>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Retina Ready</h3>
                                <p>Aenean tellus metus bibendum sed posuere ac mattis non nunc vestibulum fringilla purus sit amet fermentum aenean commodo.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-eye"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="phone-mockup text-center">
                        <img src="{{ asset('global/assets/img/phone-app-screen.webp') }}" alt="Phone Mockup" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-code-square"></i>
                            </div>
                            <div class="feature-content">
                                <h3>W3c Valid Code</h3>
                                <p>Donec vitae sapien ut libero venenatis faucibus nullam quis ante etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Fully Responsive</h3>
                                <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-browser-chrome"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Browser Compatibility</h3>
                                <p>Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus vivamus elementum semper nisi aenean vulputate.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== CTA ==================-->
    <section id="call-to-action" class="call-to-action section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row content justify-content-center align-items-center position-relative">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 mb-4 fw-bold">Bingung Pilih Produk? Konsultasi Sekarang Juga!</h2>
                    <p class="mb-4 fs-5">Dapatkan solusi akun premium sesuai kebutuhanmu, langsung dari admin terpercaya kami. Fast response, harga bersahabat!</p>
                    <a href="https://wa.me/6285650825721?text=Halo%20admin%2C%20saya%20tertarik%20dengan%20produk%20akun%20premium%20yang%20ditawarkan"
                        class="btn btn-lg px-4 py-3 rounded-pill shadow text-white fw-semibold"
                        style="background: linear-gradient(135deg, #00BFA6, #1FCF84); 
                            border: none; 
                            transition: all 0.3s ease; 
                            box-shadow: 0 6px 18px rgba(31, 207, 132, 0.35);"
                        onmouseover="this.style.filter='brightness(1.1)'; this.style.transform='scale(1.03)'"
                        onmouseout="this.style.filter='none'; this.style.transform='scale(1)'">
                        <i class="bi bi-whatsapp me-2"></i> Chat Sekarang via WhatsApp
                    </a>
                </div>

                <!-- Dekoratif Shape & Dots tetap -->
                <div class="shape shape-1"> ... </div>
                <div class="shape shape-2"> ... </div>
                <div class="shape shape-3"> ... </div>
                <div class="dots dots-1"> ... </div>
                <div class="dots dots-2"> ... </div>
            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== CLIENT ==================-->
    <!-- <section id="clients" class="clients section">
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
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('global/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> -->
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
                        <img src="{{ asset('global/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('global/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('global/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('global/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
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
    <section id="stats" class="stats section bg-light">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center text-center">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-success"></span>
                        <p class="mt-2 fs-5">Pelanggan Puas</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="780" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-primary"></span>
                        <p class="mt-2 fs-5">Transaksi Berhasil</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-danger"></span>
                        <p class="mt-2 fs-5">Jam Support Aktif</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item shadow rounded p-4 bg-white">
                        <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter display-5 fw-bold text-warning"></span>
                        <p class="mt-2 fs-5">Tingkat Kepuasan (%)</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================== END ==================-->

    <!--================== SERVICE ==================-->
    <!-- <section id="services" class="services section light-background">

        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-easel"></i>
                        </div>
                        <div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--================== END ==================-->

    <!--================== FAQ ==================-->
    <section class="faq-9 faq section light-background" id="faq">
        <div class="container">
            <div class="row">

                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="faq-title">Pertanyaan Umum (FAQ)</h2>
                    <p class="faq-description">Masih ragu? Di bawah ini adalah beberapa pertanyaan yang sering ditanyakan oleh pembeli sebelum order.</p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>Apa benar akun yang dijual ini resmi dan aman?</h3>
                            <div class="faq-content">
                                <p>Ya, semua akun yang kami jual <strong>asli, aktif</strong>, dan <strong>aman digunakan</strong>. Kami tidak pernah menawarkan akun bajakan atau ilegal.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Apakah saya bisa langsung pakai setelah beli?</h3>
                            <div class="faq-content">
                                <p>Betul! Setelah pembayaran dikonfirmasi, akun langsung kami kirim. Kamu bisa langsung login dan pakai tanpa ribet.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Kalau akun bermasalah, ada garansi?</h3>
                            <div class="faq-content">
                                <p>Tentu! Kami memberikan <strong>garansi sesuai produk</strong> (mulai dari 7 hari sampai 1 tahun). Kalau ada kendala, tinggal hubungi kami via WhatsApp.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Apakah tersedia dukungan 24/7?</h3>
                            <div class="faq-content">
                                <p>Ya! Kami siap bantu kamu <strong>24 jam sehari, 7 hari seminggu</strong> melalui WhatsApp. Fast respon, ramah, dan siap support kapan aja! ✅</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3>Bisa order via WhatsApp langsung?</h3>
                            <div class="faq-content">
                                <p>Sangat bisa! Klik tombol <strong>"Chat Sekarang"</strong> di halaman utama, dan kamu akan langsung terhubung ke admin kami 🚀.</p>
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
    <section id="contact" class="contact section light-background">

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