<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="images/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">

  <!-- =======================================================
  * Template Name: Bikin - v2.1.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <a href="index.html" class="logo mr-auto"><img src="images/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/register">Register</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  

  <main id="main">
    <section id="features" class="features" data-aos="fade-left">
      <div class="container">
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-1.png" class="img-fluid" alt="">
              <img src="assets/img/features-2.png" class="img-fluid" alt="">
              <img src="assets/img/features-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">

           <center> <h3>REGISTER IBADAH</h3></center>
    
        <form action="{{ route('register') }}" method="post">
            @csrf
    <div class="card-body">
            @if(session('errors'))
    <div class="alert alert-dangser alert-dismissible fade show" role="alert">
            Something it's wrong:
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button><ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
            @endif

<div class="wrapper" style="">
      <div class="inner">
        <form action="">
          <div class="form-group">
            <div class="form-wrapper">
              <label for="">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" maxlength="40" required="">
            </div>
            <div class="form-wrapper">
              <label for="">Jenis Kelamin</label>
              <input type="text" name="jeniskelamin" class="form-control" required="">
            </div>
          </div>
          <div class="form-wrapper">
              <label for="">Alamat Lengkap</label>
              <input type="text" name="alamat" class="form-control" required="">
            </div>
          </div>
          <div class="form-wrapper">
              <label for="">Nomor HandPhone</label>
              <input type="text" name="nohp" class="form-control" maxlength="13" required="">
            </div>
          </div>
          <div class="form-wrapper">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" required="">
          </div>
          <div class="form-wrapper">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required="">
          </div>
          <div class="form-wrapper">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required="">
          </div>

          <div class="form-group form-button">
           <center> <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
            </div></div></center>
     
        </form>
      </div>
    </div>

            
    </section><!-- End About Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>GBI TIBERIAS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a>Novita</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>