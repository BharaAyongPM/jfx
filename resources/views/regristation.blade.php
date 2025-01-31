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
    <div class="container mt-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> {{ session()->get('success') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ session()->get('error') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container-nav mx-auto d-flex justify-content-center">
            <a class="logo me-4" href="#">
                <img src="{{ asset('assets/img/baru/logo-jfx.png') }}" alt="Logo"> <!-- Ganti dengan path logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <section class="form-registration">
        <div class="container">
            <div class="card-form">
                <div class="title">
                    <h1>REGISTRATION</h1>
                </div>
                <div class="konten">
                    <form action="{{ route('teams.store') }}" method="POST" class="registration-form">
                        <input type="hidden" name="tahun" value="2025">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Tim:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Kabupaten/Kota:</label>
                            <input type="text" name="city" id="city" required>
                        </div>
                        <div class="form-group">
                            <label for="province_id">Provinsi:</label>
                            <select name="province_id" id="province_id" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="contact_name">Nama Kontak:</label>
                            <input type="text" name="contact_name" id="contact_name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact_phone">Nomor Telepon WhatsApp:</label>
                            <input type="number" name="contact_phone" id="contact_phone" required>
                        </div>
                        <button type="submit" class="btn-submit">
                            <i class="fab fa-whatsapp"></i> SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <style>
        .form-registration {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .card-form {
            width: 100%;
            max-width: 450px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-submit {
            background-color: #25D366;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #1DA851;
        }
    </style>

    <!-- ===================================Footer====================================================== -->
    <footer>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(function() {
                    let alerts = document.querySelectorAll('.alert');
                    alerts.forEach(alert => {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                        setTimeout(() => alert.style.display = 'none', 500);
                    });
                }, 5000); // 5 detik sebelum hilang
            });
        </script>
    </footer>
</body>

</html>
