<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JFX - Bisabola</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo bb1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- SweetAlert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    {{-- <script>
        $(document).ready(function() {
          @if(session('success'))
            $('#successModal').modal('show');
          @endif
        });
      </script> --}}
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo bb1.png" alt="">
        <!-- <h1>UpConstruction<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          {{-- <li><a href="index.html">Tentang</a></li> --}}
          <!-- <li><a href="services.html">Services</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          {{-- <li><a href="index.html">Kontak</a></li> --}}
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">JFX - Jakarta Football <span>EXPO</span></h2>
            <p data-aos="fade-up">
              Jakarta Football Expo adalah acara turnamen dan pameran expo terbesar di Indonesia yang diselenggarakan di International Jakarta Stadium (JIS) Tanggal Diselenggarakan 19-23 Juni 2024
            </p>
            <a data-aos="fade-up" data-aos-delay="200" href="https://www.bisabola.id/lihatturnamen/9" class="btn-get-started">Lihat Detail Turnamen</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/banner_jfx.png)"></div>
      <!-- <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div> -->

      <!-- <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Apa itu JFX?</h3>
              <p>Tujuan acara ini untuk memperluas wawasan dan minat masyarakat terhadap olahraga sepak bola, serta memberikan platform bagi pemain, penggemar,
                 dan industri sepak bola untuk berinteraksi dan terlibat dalam kegiatan terkait. <br> <br>
                 acara tersebut menampilkan berbagai kegiatan terkait sepak bola, seperti pertandingan eksibisi, turnamen kecil, pertunjukan keterampilan, sesi tanya jawab dengan pemain atau pelatih sepak bola terkenal,
                 serta pameran produk-produk sepak bola dan peralatan terkait.
              </p>
              <a data-aos="fade-up" data-aos-delay="200" href="detail.html" class="btn-get-started">Pendaftaran Sudah Ditutup</a>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="{{ route('teams.store') }}" method="POST" class="registration-form">
                @csrf
                <h3>Terimakasih</h3>
                <p>Pendaftaran Sudah Ditutup</p>
                <div class="row gy-3">

                    <div class="col-md-12">
                        <label for="name">Nama Tim:</label>
                        <input type="text" name="name" id="name" required>
                    </div>


                    <div class="col-md-6">
                        <label for="city">Kabupaten/kota:</label>
                        <input type="text" name="city" id="city" required>
                    </div>

                    <div class="col-md-6">
                        <label for="province_id">Provinsi:</label>
                        <select name="province_id" id="province_id" required>
                            <option value="">Pilih Provinsi</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="tournament">Tournament:</label>
                        <select name="tournament" id="tournament" required>
                            <option value="">Pilih Tournament</option>
                            <optgroup label="Grup Klub/Akademi">
                                <option value="U9 - Grup Klub/Akademi">U9 - Grup Klub/Akademi</option>
                                <option value="U11 - Grup Klub/Akademi">U11 - Grup Klub/Akademi</option>
                                <option value="U13 - Grup Klub/Akademi">U13 - Grup Klub/Akademi</option>
                                <option value="U15 - Grup Klub/Akademi">U15 - Grup Klub/Akademi</option>
                                <option value="U17 - Grup Klub/Akademi">U17 - Grup Klub/Akademi</option>
                            </optgroup>
                            <optgroup label="Grup Sekolah">
                                <option value="U9 - Grup Sekolah">U9 - Grup Sekolah</option>
                                <option value="U11 - Grup Sekolah">U11 - Grup Sekolah</option>
                                <option value="U13 - Grup Sekolah">U13 - Grup Sekolah</option>
                                <option value="U15 - Grup Sekolah">U15 - Grup Sekolah</option>
                                <option value="U17 - Grup Sekolah">U17 - Grup Sekolah</option>
                            </optgroup>
                            <optgroup label="Umum Putri">
                                <option value="U13 - Umum Putri">U13 - Umum Putri</option>
                                <option value="U15 - Umum Putri">U15 - Umum Putri</option>
                                <option value="U17 - Umum Putri">U17 - Umum Putri</option>
                            </optgroup>
                              <optgroup label="Umum">
                                <option value="U23 - Mahasiswa dan Umum"> U23 - Mahasiswa dan Umum</option>
                                <option value="+40 - Masters"> U+40 - Masters </option>
                                <option value="U45 - Komunitas"> U45 - Komunitas</option>
                                
                            </optgroup>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="contact_name">Nama Kontak:</label>
                        <input type="text" name="contact_name" id="contact_name" required>
                    </div>

                    <div class="col-md-12">
                        <label for="contact_phone">Nomor Telepon Whatsapp:</label>
                        <input type="number" name="contact_phone" id="contact_phone" required><br>
                    </div>

                    <div class="col-md-12 text-center">


                        <button>Pendaftaran Sudah Ditutup</button>
                    </div>

                </div>
            </form>
        </div><!-- End Quote Form -->
        </div>

<!-- Modal -->
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(session('success'))
                    {{ session('success') }}
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Pendaftaran Gagal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(session('error'))
                    {{ session('error') }}
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        @if(session('success'))
            $('#successModal').modal('show');
        @elseif(session('error'))
            $('#errorModal').modal('show');
        @endif
    });
</script>


      </div>
    </section><!-- End Get Started Section -->


    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Turnamen</h2>
          <p>Dalam event ini JFX akan mengadakan beberapa turnamen yang akan di ikuti oleh beberapa Group, yaitu:</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/Klubi.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Klub/Akademi</h4>
                    <p>
                      1. Usia - 9 <br>
                      2. Usia -  11 <br>
                      3. Usia -  13 <br>
                      4. Usia -  15 <br>
                      5. Usia -  17 <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/Kluba.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Sekolah</h4>
                    <p>
                      1. Usia - 9 <br>
                      2. Usia -  11 <br>
                      3. Usia -  13 <br>
                      4. Usia -  15 <br>
                      5. Usia -  17 <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/Klubp.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Putri</h4>
                    <p>
                      1. Usia -  13 <br>
                      2. Usia -  17 <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/Klubo.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Lain-lain</h4>
                    <p>
                      1. Masters <br>
                      2. Difabel <br>
                      3. Kedutaan asing<br>
                      4. Perusahaan <br>
                      5. Yayasan <br>
                      6. Mahasiswa<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          
          
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/kluiob.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Umum Wanita</h4>
                    <p>
                      1. U-15 - Umum Putri <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          
          
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-7">
                  <div class="card-bg" style="background-image: url(assets/img/kluib.png);"></div>
                </div>
                <div class="col-xl-5 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Group Umum</h4>
                    <p>
                      1. U-23 - Mahasiswa dan Umum <br>
                      2. U-45 - Komunitas <br>
                      3. +45 - Masters<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <hr style="width: 80%; height: 3px; background-color: #C50816; border: none; margin: 0 auto;">


    <section class="hubungi">
      <div class="container section-header" data-aos="fade-up">
        <h3>
          Info Lebih lanjut Hubungi : <br>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">0851-8669-8154</a>
        </h3>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-6">
            <div class="footer-info">
              <img src="assets/img/logo bb1.png" alt="">
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-4 col-md-6 text-end">
            <div class="footer-info">
              <h3>PT ANUGERAH BISABOLA INDONESIA
                </h3>
              <p>
                Jl. Panglima Polim No.116i, RT.01/RW06 <br>
                Kel. Melawai, Kec. Kebayoran Baru<br>
                Jakarta Selatan, Indonesia, 12130<br>
              </p>
            </div>
          </div><!-- End footer info column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Bisabola.id</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <style>
    .registration-form .row {
        margin-bottom: 15px;
    }

    .registration-form label {
        display: block;
        margin-bottom: 5px;
    }

    .registration-form input[type="text"],
    .registration-form textarea,
    .registration-form select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .registration-form button[type="submit"] {
        background-color: #af1313;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    .registration-form button[type="submit"]:hover {
        background-color: #af1313;
    }
</style>
</body>

</html>
