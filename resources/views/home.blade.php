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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
           <center><td>Terima kasih sudah melakukan pendaftaran , <strong>{{ Auth::user()->name}}</strong>
            <p>Silahkan memilih jadwal ibadah di bawah ini</p></center>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">

              <h3>Ibadah Raya I</h3>
              <ul>
                <?php 
                echo '' . date('l, d-m-Y ', time() + (60 * 60 * 24 * 2)) . '<br/>';
                 ?>
                <li>PUKUL 09:00-10:00</li>
                <li>Sisa Kuota : {{ $hasil }} </li>
              </ul>
              <div class="btn-wrap">
               <button type="button" class="btn-buy" data-toggle="modal" data-target="#exampleModal256">
                        Daftar IR I
                    </button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
              <h3>Ibadah Raya II</h3>
              <ul>
                <?php 
               echo '' . date('l, d-m-Y ', time() + (60 * 60 * 24 * 2)) . '<br/>';
                 ?>
                <li>PUKUL 13:00-14:00</li>
                <li>Sisa Kuota : {{ $hasil2 }}</li>
              </ul>
              <div class="btn-wrap">
               <button type="button" class="btn-buy" data-toggle="modal" data-target="#exampleModal257">
                        Daftar IR II
                    </button>
            </div>
          </div>
        </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3>Ibadah Raya III</h3>
              <ul>
                <?php 
                echo '' . date('l, d-m-Y ', time() + (60 * 60 * 24 * 2)) . '<br/>';
                 ?>
                <li>PUKUL 16:00-17:00</li>
                <li>Sisa Kuota : {{ $hasil3 }}</li>
              </ul>
              <div class="btn-wrap">
               <button type="button" class="btn-buy" data-toggle="modal" data-target="#exampleModal258">
                        Daftar IR III
                    </button>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->


 <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        

        <div class="section-title">
          <h2>KUOTA PENUH! JANGAN KAWATIR KITA MASIH BISA BERIBADAH BERSAMA MELALUI YOUTUBE</h2>
          <div class="embed-responsive embed-responsive-16by9">
      <iframe width="644" height="365" src="https://youtube.com/embed/rhGKlekZAHk" frameborder="5" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        </div>

   

    

  </main><!-- End #main -->

  <!-- MODEL 1 -->

  <div class="modal fade" id="exampleModal256" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                </div>
                <div class="modal-body">
                  <form action="/ibadah1" method="post" >
                    {{ csrf_field() }}
    <div class="form-group">
    <label for="hohp">Kode</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nohp" value="{{ Auth::user()->nohp}}" readonly>
  </div>

  <a href="/ibadah1">
  <button type="submit" class="btn btn-primary">Daftar</button></a>
</form>

                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                              <a href="">
                                <button type="button" name="tidak" class="btn  " style="float: right;" data-dismiss="modal">Batal</button>
                              </a>
                            </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>


<!-- MODEL 2 -->

<div class="modal fade" id="exampleModal257" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                </div>
                <div class="modal-body">
                  <form action="/ibadah2" method="post" >
                    {{ csrf_field() }}
    <div class="form-group">
    <label for="hohp">Kode</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nohp" value="{{ Auth::user()->nohp}}" readonly>
  </div>

  <div class="col">
  <button type="submit" class="btn btn-primary">Daftar</button></a>
</form>
 <form action="" method="post">
                        <div class="row">
                            <div class="col">
                              <a href="">
                                <button type="button" name="tidak" class="btn  " style="float: right;" data-dismiss="modal">Batal</button>
                              </a>
                            </div>
                            </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>

<!-- MODEL 3 -->

<div class="modal fade" id="exampleModal258" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                </div>
                <div class="modal-body">
                  <form action="/ibadah3" method="post" >
                    {{ csrf_field() }}
    <div class="form-group">
    <label for="hohp">Kode</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nohp" value="{{ Auth::user()->nohp}}" readonly>
  </div>
 <div class="col">
  <button type="submit" class="btn btn-primary">Daftar</button></a>
</form>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                              <a href="">
                                <button type="button" name="tidak" class="btn  " style="float: right;" data-dismiss="modal">Batal</button>
                              </a>
                            </div>
                            </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>


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