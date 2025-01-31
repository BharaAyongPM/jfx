<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="logo" href="#">
                <img src="{{ asset('assets/img/baru/logo-jfx.png') }}" alt="Logo">
                <!-- Ganti dengan path logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tournament">Tournament</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accommodations">Accommodations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#results">Results</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    <!-- ==================Login/Register============================================ -->
                    <li class="nav-item">
                        <a class="btn btn-white login" href="#login"><i class="fa fa-user"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-2 register" href="/daftar">Register Teams</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container pt-5 hero-join">
            <h2>CLICK TO JOIN</h2>
            <h1>TOURNAMENT</h1>
            <a href="{{ url('/daftar') }}" class="btn">CLICK HERE</a>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="banner">
        <div class="container">
            <img src="assets/img/baru/banner-1.png" alt="">
        </div>
    </div>


    <!-- =======================Info Selection============================= -->
    <section class="info-section">
        <div class="container">
            <div class="row">
                <!-- Bagian Kiri: Video YouTube -->
                <div class="col-md-6 col-lg-6 video-section">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Bagian Kanan: Heading, Logo, dan Deskripsi -->
                <div class="col-md-6 col-lg-6 text-section">
                    <h1>WHAT IS
                        <img src="assets/img/baru/logo-jfx-2.png" alt="Jakarta Football Expo Logo" class="logo">
                    </h1>
                    <p class="description">
                        Jakarta Football Expo is the largest tournament and exhibition in Indonesia,
                        held at the International Jakarta Stadium (JIS).
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================Category Turnament============================== -->
    <section class="category-section">
        <div class="container">
            <div class="title">
                <img src="assets/img/baru/judul-category.png" alt="" class="logo">
            </div>
            <div class="row kategori">
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-1.png" alt="">
                </div>
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-2.png" alt="">
                </div>
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-3.png" alt="">
                </div>
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-4.png" alt="">
                </div>
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-5.png" alt="">
                </div>
                <div class="col-2 col-md-4">
                    <img src="assets/img/baru/kategori-6.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- =========================Regristation Section======================= -->
    <section class="regristation-section">
        <div class="container">
            <div class="title">
                <h1>HOW TO REGRISTATION</h1>
            </div>
            <img src="assets/img/baru/regristation-1.png" alt="">
            <img src="assets/img/baru/information.png" alt="">
        </div>
    </section>

    <!-- ============================Supported=================================== -->
    <section class="supported-section">
        <div class="container">
            <div class="title">
                <h1>SUPPORTED BY</h1>
            </div>
            <div class="konten">
                <div class="row">
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-bb.png" alt="PSSI Logo" class="logo">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-jkt.png" alt="PSSI Logo" class="logo2">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-jakpro.png" alt="PSSI Logo" class="logo">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-pssi.png" alt="PSSI Logo" class="logo2">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-bank-dki.png" alt="PSSI Logo" class="logo">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="logo-section">
                                <img src="assets/img/baru/logo-gbk.png" alt="PSSI Logo" class="logo">
                            </div>
                            <div class="text-section">
                                <a href="" class="text">Kunjungi Halaman Website >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            const logo = document.getElementById("navbarLogo");

            // Tambahkan kelas shrink jika halaman di-scroll lebih dari 50px
            if (window.scrollY > 50) {
                navbar.classList.add("shrink");
            } else {
                navbar.classList.remove("shrink");
            }
        });
    </script>
</body>

</html>
