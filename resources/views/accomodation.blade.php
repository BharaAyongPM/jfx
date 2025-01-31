<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tournament</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Squada+One&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container-nav mx-auto d-flex justify-content-center">
            <a class="logo me-4" href="#">
                <img src="assets/logo-jfx.png" alt="Logo"> <!-- Ganti dengan path logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
            </div>
        </div>
    </nav>

    <!-- =============================Regristation Form========================= -->
    <section class="accomodation">
        <div class="container">
            <div class="banner">
                <img src="assets/banner-accomodation.png" alt="">
            </div>
            <div class="konten">
                <div class="search-container">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Pencarian">
                </div>
                <div class="title">
                    <h1>Recomended Hotel</h1>
                </div>
                <div class="row mb-4">
                    <div class="col-12 col-md-5">
                         <div class="card">
                            <img src="assets/hotel-1.png" alt="">
                            <h4>Artotel Gelora Senayan</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Senayan City
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-7">
                        <div class="deskripsi">
                            <p>
                                <span>ARTOTEL Senayan</span> is a 4 star hotel in Jakarta near 
                                Gelora Bung Karno (8 minutes walk). Facilities available at ARTOTEL Gelora Senayan Hotel are a 24-hour front desk, outdoor swimming pool, restaurant, meeting rooms, tennis court, ballroom, parking andinclude 
                                free breakfast.
                            </p>
                            <br>
                            <p>
                                Jl. Pintu Satu Senayan No.1 1, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Jakarta, Daerah Khusus Ibukota Jakarta 10270
                            </p>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h1>Other Option</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-8.png" alt="">
                            <h4>Best Western Senayan</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Senayan City
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-2.png" alt="">
                            <h4>Favehotel Gatsu</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Gatot Subroto
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-3.png" alt="">
                            <h4>HARRIS Suites fX</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Senayan City
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-4.png" alt="">
                            <h4>Cove Casa Spatia</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Menteng
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-5.png" alt="">
                            <h4>Cove Alps</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Kebayoran Baru
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/hotel-6.png" alt="">
                            <h4>Sofyan Hotel</h4>
                            <i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i>
                            <div class="d-flex booking">
                                <p>
                                    <i class="fa fa-location-dot"></i>Menteng
                                </p>
                                <a href="">Booking</a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- ===================================Footer====================================================== -->
     <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            window.addEventListener("scroll", function () {
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
      </footer>
    </body>
</html>