<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="dashboard/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="dashboard/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="dashboard/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/template/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="dashboard/template/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dashboard/template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="dashboard/template/vendors/google-sign-in/google-sign-in.css">
    <link rel="stylesheet" href="dashboard/template/css/vertical-layout-light/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo bb1.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo d-flex justify-content-center">
                                <img src="assets/img/logo bb1.png" alt="logo">
                            </div>
                            <h5 class="d-flex justify-content-center">PT Anugerah Bisabola Indonesia</h5><br>
                            <p class="fw-light">Sign in to continue.</p>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="d-grid gap-2">
                                    <!-- Tombol Login -->
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="dashboard/template/vendors/js/vendor.bundle.base.js"></script>
</body>



</html>
