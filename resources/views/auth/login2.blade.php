<!DOCTYPE html>
<!--
	Template Name: SportsZone: Sports Club, New & Game Magazine Mobile Responsive Bootstrap Html Template
	Version: 1.0
	Author: DexignZone
	Website: http://www.dexignzone.com/
	Contact: dexignexpert@gmail.com
	Follow: www.twitter.com/dexignzones
	Like: www.facebook.com/dexignzone

-->
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="SportsZone is an HTML5/CSS3 eCommerce template that is best for Sports Items/Tools, any kind of stores Like Sports Store, Bike and Cycle Parts, Hardware, Toos, Construction Item."/>
	<meta property="og:title" content="SportsZone - Sports Template"/>
	<meta property="og:description" content="SportsZone is an HTML5/CSS3 eCommerce template that is best for Sports Items/Tools, any kind of stores Like Sports Store, Bike and Cycle Parts, Hardware, Toos, Construction Item." />
	<meta property="og:image" content="http://sportszone.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- Favicons Icon -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- Page Title Here -->
	<title>Masuk Pemain - Bisabola.id</title>

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css2/plugins.css">
	<link rel="stylesheet" type="text/css" href="css2/style.min.css">
	<link rel="stylesheet" type="text/css" class="skin" href="css2/skin/skin-8.css">
	<link rel="stylesheet" type="text/css" href="css2/templete.min.css">

</head>
<div class="page-wrapers">
    <!-- Content -->
    <div class="page-content dez-login p-t50 p-lr15 overlay-black-dark bg-img-fix nav" style="background-image:url(images/background/bg3.jpg);">
        <div class="login-form relative z-index3 ">
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a25 dez-form p-b0 m-t100" method="POST" action="{{ route('login') }}">
                        <h3 class="form-title m-t0">Masuk Pemain</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Masukan No Whatsapp dan Password Anda ! </p>
                        @csrf
                        <div class="form-group">
                          <div class="row">
                            <div class="col-2 pr-0 text-center">
                              <input class="form-control text-center" value="email" readonly>
                            </div>
                            <div class="col-10 pl-1">
                              <input class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                              placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <input id="password" placeholder="Masukan Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button m-r5 login-switch">{{ __('Login') }}</button>
                            {{--  <!-- Tombol Signin Google -->
                                    <button class="gsi-material-button btn border border-black" onclick="window.location.href = '{{ '/auth/redirect' }}';">
                                      <div class="gsi-material-button-state"></div>
                                      <div class="gsi-material-button-content-wrapper">
                                        <div class="gsi-material-button-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                            <path fill="none" d="M0 0h48v48H0z"></path>
                                          </svg>
                                        </div>
                                        <span class="gsi-material-button-contents">Sign in with Google</span>
                                        <span style="display: none;">Sign in with Google</span>
                                      </div>
                                    </button>

                                    <!-- Tombol Signin Microsoft -->
                                    <button type="button" class="btn btn-secondary">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft me-2" viewBox="0 0 16 16">
                                        <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/>
                                      </svg> Sign in with Microsoft
                                    </button>
                                </div> --}}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            <label>
                            <input id="check1" type="checkbox">
							                <label for="check1">Ingat saya</label>
                            </label>
                            <a data-toggle="tab" href="#forgot-password" class="m-l15"><i class="fa fa-unlock-alt"></i> Lupa Kata sandi</a> </div>
                    </form>
                    <div class="bg-primary p-a15 "> <a href="https://bisabola.id" class="text-white">Bisabola.id</a> </div>
                </div>
                <div id="forgot-password" class="tab-pane fade ">
                    <form class="p-a25 dez-form m-t100 text-center">
                        <h3 class="form-title m-t0">Lupa Kata Sandi ?</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Masukan No Whatsapp anda sebelum mengganti kata sandi. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="No Whatsapp" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Kembali</a>
                            <button class="site-button pull-right">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
</body>
</html>
