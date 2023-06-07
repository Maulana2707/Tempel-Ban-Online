<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aplikasi On Tem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">On Tem<span>Aplikasi Tempel Ban Online</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="profil-medan.php" class="nav-link">Profil</a></li>
            <li class="nav-item active"><a href="map.php" class="nav-link">Map</a></li>
            <li class="nav-item active"><a href="pendaftaran.php" class="nav-link">Register</a></li>
            <li class="nav-item cta"><a href="login.php" class="nav-link">Login Admin</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="ftco-section" id="iribilangbos">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate" >
            <h2 class="mb-4">Profil Kota Medan</h2>
          </div>
        </div>
        <div align="center"><img style="width: 100%;" src="images/horas.jpg"></div><br>
        <p><b>SEKILAS TENTANG KOTA Medan</b></p>
Sebelum berkunjung ke Medan, beberapa informasi tentang Kota Medan<br><br>

<p><b>Di mana Medan berada?</b></p>

Kota Medan berlokasi di Indonesia tepatnya di Provinsi Sumatera Utara, Kota ini merupakan kota terbesar keempat di Indonesia setelah DKI Jakarta, Surabaya, dan Bandung, serta kota terbesar di luar Pulau Jawa, sekaligus terbesar di Pulau Sumatra
<br><br>
<p><b>Konektivitas</b></p>

Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengan keberadaan Pelabuhan Belawan dan Bandar Udara Internasional Kualanamu yang merupakan bandara terbesar kedua di Indonesia. Akses dari pusat kota menuju pelabuhan dan bandara dilengkapi oleh jalan tol dan kereta api. Medan adalah kota pertama di Indonesia yang mengintegrasikan bandara dengan kereta api. Berbatasan dengan Selat Malaka, Medan menjadi kota perdagangan, industri, dan bisnis yang sangat penting di Indonesia
<br><br>
<p><b>Penduduk</b></p>

Populasi penduduk Kota Medan memiliki penduduk sebanyak 2.494.512 jiwa, dengan kepadatan penduduk 9.413 jiwa/km2
<br><br>
<p><b>Budaya</b></p>

Medan adalah kota multietnis yang penduduknya terdiri dari orang-orang dengan latar belakang budaya dan agama yang berbeda-beda. Selain Melayu dan Karo sebagai penghuni awal, Medan didominasi oleh etnis Jawa, Batak, Tionghoa, Minangkabau, Mandailing, dan India. Mayoritas penduduk Medan bekerja di sektor perdagangan, sehingga banyak ditemukan ruko di berbagai sudut kota.
<br><br>
<p><b>Geografi</b></p>

Kota Medan memiliki luas 26.510 hektare (265,10 km²) atau 3,6% dari keseluruhan wilayah Sumatra Utara. Dengan demikian, dibandingkan dengan kota/kabupaten lainya, Medan memiliki luas wilayah yang relatif kecil dengan jumlah penduduk yang relatif besar. Secara geografis kota Medan terletak pada 3° 30' – 3° 43' Lintang Utara dan 98° 35'–98° 44' Bujur Timur. Untuk itu topografi kota Medan cenderung miring ke utara dan berada pada ketinggian 2,5–37,5 meter di atas permukaan laut.
<br><br>      </div>
    </section>
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made by Maulana Ikhsan supported with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>