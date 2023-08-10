<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">
  <link href="favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    /* Custom CSS to make Login link green */
    #navbar ul li a[href="/login"] {
      color: #088873; /* Green color code (#00FF00) */
    }
    #navbar ul li a:hover[href="/login"] {
      color: #012922; /* Green color code (#00FF00) */
    }
  </style>

  <!-- =======================================================
  * Template Name: Medicio - v4.9.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="assets/img/logo.png" alt=""> MOJOSARI</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li><a class="nav-link" href="/transparansi">Transparansi Data Desa</a></li> --}}
              <li><a class="nav-link" href="/visimisi">Visi dan Misi</a></li>
              <li><a class="nav-link" href="/sotk">Struktur Organisasi dan Tata Kerja</a></li>
              <li><a class="nav-link" href="/potensi">Potensi Desa</a></li>
              <li><a class="nav-link" href="/asetdesa">Aset Desa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/datadesa">Data Desa</a></li>
          <li><a href="/informasi">INFORMASI LAYANAN</a>
          </li>
          <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
          <li><a class="nav-link scrollto" href="/login" target="_blank">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Mojosari</h3>
                <p>
                  Kec. Karanggede <br>
                  Kab. Boyolali<br><br>
                  {{-- <strong>Phone:</strong> +1 5589 55488 55<br> --}}
                  <strong>Email:</strong> pemdesmojosari19@gmail.com<br>
                  <strong>Tutorial:</strong> <a href="https://youtu.be/6S17KDyq7jQ" target="blank_">Here</a><br>
                </p>
                {{-- <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div> --}}
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/beranda">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/profil">Profil</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/informasi">Informasi Layanan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/dokumen">Dokumen</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/login" target="_blank">Login</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Profil</h4>
              <ul>
                {{-- <li><i class="bx bx-chevron-right"></i> <a href="/tranpsaransi">Transparansi</a></li> --}}
                <li><i class="bx bx-chevron-right"></i> <a href="/visimisi">Visi Misi</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/sotk">Struktur Organisasi</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/potensi">Potensi Desa</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/aset">Aset Desa</a></li>
              </ul>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; <strong>Copyright {{ date('Y') }} Tim KKN II Undip 2023</a>.</strong> All rights reserved.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>