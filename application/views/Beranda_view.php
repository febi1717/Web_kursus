<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <!-- Mycss -->
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <!-- My font -->
    <link href="assets/frontend/Font/Viga-Regular.ttf" rel="stylesheet">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/frontend/vendor/icofont/icofont.min.css" >
    <!-- owl-carousel -->
    <link rel="stylesheet" href="assets/frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    
    <title>NORGEN</title>
  </head>

  <body>
  <!-- Navbar -->
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-light" id="nav">
        <div class="container">
          <a class="navbar-brand page-scroll" href="#home">NORGEN</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link page-scroll" href="#tentang">Tentang</a>
              <a class="nav-item nav-link page-scroll" href="#service">Service</a>
              <a class="nav-item nav-link page-scroll" href="#testimoni">Kata</a>
              <a class="nav-item tombol btn btn-primary" href="<?php echo site_url('Register') ?>">PENDAFTARAN</a>
          </div>
        </div>
      </nav>
    </header>

    <div class="jumbotron jumbotron-fluid" >
    <video style="width:100%; height:100%; pointer-events:none; object-fit:cover; position:absolute; top:50%; left: 50%; transform:translate(-50%,-50%);" autoplay muted loop>
        <source class="embed-responsive" src="assets/video/3.mp4" type="video/mp4">
        </video>
      <div class="container">
        <h2 style="font-size:45px; color:#325d67;" class="display-4"><span> Masa depanmu </span> <br> adalah apa yang kamu lakukan <span>Hari ini </span></h2>
        <a class="btn btn-primary tombol" href="<?php echo site_url('Login') ?>">Login</a>
      </div>
  </div>

      <!-- container 1  -->
  <section class="pilih" id="tentang">
    <div class="container">
        <div class="row pilih0">
          <div class="col text-center huruf">
            <h2 style="padding-top:4rem;">TENTANG</h2>
          </div>
        </div>
        <div class="row pilih1 slideanim">
          <div class="col-lg-6 ">
            <img class="img-fluid w-75" src="assets/img/2.png">
          </div>
          <div class="col-lg-6  huruf">
            <h5 class="font-weight-bold pt-4">kursus online</h5>
            <p>Norgen merupakan kursus online sebagai penyeedia platform dan konten dengan tujuan untuk memperluas wawasan pendidikan dari berbagai kalangan</p>
          </div>
        </div>
      </div>
    <!-- akhir container pilih --> 
  </section>

  <section class="service" id="service">
    <div class="container text-center">
        <div class="row mb-4 pt-5 prestasi">
          <div class="col text-center  huruf">
            <h2 style="padding-top:2rem;">Raih Tujuan Bersama Norgen</h2>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="row slideanim">
            <div class="col-sm-6">
              <i class="icofont-certificate-alt-1 icofont-4x" style="color: black;"></i>
              <h4>Asah Keterampilan</h4>
              <p>seperti analisis, bisnis, desain grafis, python, dan lainnya</p>
            </div>
            <div class="col-sm-6">
              <i class="icofont-medal icofont-4x " style="color: black;"></i>
              <h4>Siap Dengan Karir</h4>
              <p>di bidang peminatan tinggi sperti IT, AI, Teknik, dan lainnya</p>
            </div>
          </div>
          <div class="row pres slideanim ">
            <div class="col-sm-6">
              <i class="icofont-electron icofont-4x" style="color: black;"></i>
              <h4>Terorganisasi</h4>
              <p>dengan peminatan dan pelatihan yang terjadwal</p>
            </div>
            <div class="col-sm-6">
              <i class="icofont-university icofont-4x" style="color: black;"></i>
              <h4>Opsi Fleksibel dan Terjangkau</h4>
              <p>Pilih berbagai opsi termasuk kursus gratis. Belajar dengan kecepatan Anda sendiri.</p>
            </div>  
          </div>
         <!-- akhir kontainer prestasi -->
    </div>
  </section>

  <section class="testimoni" id="testimoni">
    <div class="container">
      <div class="row mb-4 slideanim">
        <div class="col text-center huruf pt-4">
          <h2 style="padding-top:1rem;">Apa Kata Mereka</h2>
          <P>setelah mengikuti kursus online di norgen</P>
        </div>
      </div>
      <div class="wrapper">
          <div class="testimonial-carousel section-padding owl-carousel">
            <div class="single-testi">
              <div class="img-area">
                <img src="assets/img/testimonials-6.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>Ni Komang I T</h2>
                <h5>Institut Teknologi Nasional</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="assets/img/testimonials-4.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>Febi Syarif P</h2>
                <h5>Universitas Padjajaran</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="assets/img/testimonials-1.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>Andrie Anugrah</h2>
                <h5>UPI</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="assets/img/testimonials-5.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>Rizaldi Fadillah</h2>
                <h5>Insitut Teknologi Bandung</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-5.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>NiKo</h2>
                <h5>UNISBA</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
          </div> 
          <!-- container testimoni -->
          </div>
      </div>
  </section>


    <footer class="page-footer font-small pt-4 mt-5">
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
        <!-- Content -->
        <h5 class="text-uppercase huruf">Norgen</h5>
        <address>jl.phh mustopa<br>Bandung</address>
       <!--  <i class="icofont-location-pin"></i><p class="huruf" style="display: inline;"><b>jl.Ketingan, Ketingan, Tirtoadi, Kec.Mlati <br>Kabupaten Sleman, Yogyakarta 55287</b></p> -->
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase huruf">Navigasi</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#program" class="huruf page-scroll">Tentang</a>
          </li>
          <li>
            <a href="#!" class="huruf">Service</a>
          </li>
          <li>
            <a href="#!" class="huruf">Tstimoni</a>
          </li>
        </ul>
      </div>
     
      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase huruf">Bantuan</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!" class="huruf">Cara Daftar</a>
          </li>
          <li>
            <a href="#!" class="huruf">Cara Bayar</a>
          </li>
          <li>
            <a href="#!" class="huruf">Cara Login</a>
          </li>
        </ul>
      </div>

       <!-- Grid column -->
       <div class="col-md-2 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase huruf">Hubungi</h5>
        <ul class="list-unstyled">
          <li>
            <i class="icofont-instagram"></i>
            <a href="#!" class="huruf">Instagram</a>
          </li>
          <li>
            <i class="icofont-whatsapp"></i>
            <a href="#!" class="huruf">Whatsapp</a>
          </li>
          <li>
            <i class="icofont-email"></i>
            <a href="#!" class="huruf">Email</a>
          </li>
        </ul>
      </div>

      <!-- Grid row -->
    </div>
    <!-- Grid row container-->
  </div>
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-2">
   <p class="footer p">© 2021 Copyright: Norgen, kursus online</p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<a href="" class="back-to-top"><i class="icofont-arrow-up"></i></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/frontend/js/jquery-3.3.1.min.js" ></script>
    <script src="assets/frontend/js/jquery.easing.1.3.js"></script>
    <script src="assets/frontend/js/popper.min.js" ></script>
    <script src="assets/frontend/js/bootstrap.min.js" ></script>
    <script src="assets/frontend/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="assets/frontend/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="assets/frontend/js/myjs.js"></script>
  <!--   <script type="text/javascript" src="assets/frontend/js/myjs.js"></script> -->
  </body>
</html>