<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li><a href="/about">About</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  

  <main id="main">

     <section id="features" class="features" data-aos="fade-up">
      <div class="container">
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="images/banner_img.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
             <center><table class="table">
               <center><h2>Selamat datang, <strong>{{ Auth::user()->name}}</strong></h2></center>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Hp</th>
            <th>Email</th>
            </tr>
    </thead>
    <tbody>
        <tr>
      <td><strong>{{ Auth::user()->name}}</strong></td>
      <td><strong>{{ Auth::user()->jeniskelamin}}</strong></td>
      <td><strong>{{ Auth::user()->nohp}}</strong></td>
      <td><strong>{{ Auth::user()->email}}</strong></td>
        </tr>       
    </tbody>
</table></center>
            
          </div>
        </div>  
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TATA CARA AMAN UNTUK BERIBADAH DI GEREJA</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <img src="https://img.icons8.com/doodle/48/000000/social-distancing.png"/>
              <h4 class="title"><a href="">Social Distancing</a></h4>
              <p class="description">Tetap jaga jarak baik pada saat datang ke gereja maupun selesai ibadah agar kita tetap terjaga dari penularan Covid-19</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <img src="https://img.icons8.com/doodle/48/000000/protection-mask.png"/>
              <h4 class="title"><a href="">Gunakan Masker</a></h4>
              <p class="description">Jangan lupa untuk selalu menggunakan masker dimana pun anda berada termasuk saat  beribadah di gereja agar penularan Covid-19 tidak semakin meluas</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <img src="https://img.icons8.com/cotton/64/000000/welder-shield-1.png"/>
              <h4 class="title"><a href="">Gunakan Face Shield</a></h4>
              <p class="description">Sama halnya dengan menggunakan masker kami juga menyarankan untuk menggunakan face shield agar lebih aman dan resiko terjadi penularan Covid-19 semakin sedikit</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <img src="https://img.icons8.com/plasticine/64/000000/hand-wash.png"/>
              <h4 class="title"><a href="">Mencuci Tangan</a></h4>
              <p class="description">Jangan lupa untuk mencuci tangan agar tetap menjaga kebersihan pada saat beribadah digereja</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">


        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <img src="https://img.icons8.com/dotty/80/000000/leaving-queue.png"/>
              <h4 class="title"><a href="">Tetap teratur pada saat keluar atau masuk ke dalam gedung gereja</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
             <img src="https://img.icons8.com/color/48/000000/helping-hand.png"/>
              <h4 class="title"><a href="">Hindari bersalaman baik kepada pelayanan maupun sesama jemaat</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
            <img src="https://img.icons8.com/plasticine/100/000000/conference-call.png"/>
              <h4 class="title"><a href="">Jangan berkumpul pada sebelum dan sesudah ibadah</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <img src="https://img.icons8.com/cotton/64/000000/money-transfer.png"/>
              <h4 class="title"><a href="">Masukkan Persembahan kedalam amplop yang telah disediakan</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>QRCODE ANDA</h2>
          <p>Silahkan Screenshoot QRCode ini.</p>
        </div>
        <body>
        <div class="visible-print text-center">
           
              {!! QrCode::size(200)->generate($kode); !!}
           

      </div></body>
        </div>

      </div>
    </section><!-- End Pricing Section -->


    

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GBI TIBERIAS</h3>
            <p>
              Rantepao, Jalan Mangadil<br>
              Toraja Utara<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> gbitiberiastrj@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

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