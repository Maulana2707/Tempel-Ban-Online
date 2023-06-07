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

    <script src="j/jquery.1.8.3.min.js"></script>
    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }

        function getDistance($latitude1, $longitude1, $latitude2, $longitude2) {  
        $earth_radius = 6371;  
      
        $dLat = deg2rad($latitude2 - $latitude1);  
        $dLon = deg2rad($longitude2 - $longitude1);  
          
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
    $c = 2 * asin(sqrt($a));  
    $d = $earth_radius * $c;  
      
         return $d;  
        }  

    $lokasi1Lat = $_SESSION['lat']; //garis bujur lokasi 1
    $lokasi1Lon = $_SESSION['long']; //garis lintang lokasi 1

    include "koneksi.php";

    $query_mysql =  mysqli_query($connect,"SELECT * FROM tb_wisata")or die(mysql_error());
    
    $counttempelban = 0;
    $countalam = 0;
    $countbudaya = 0;
    $countkuliner = 0;
    $countreligi = 0;
    $countbelanja = 0;

    while($data = mysqli_fetch_array($query_mysql)){
    
    $lokasi2Lat = $data['latitude']; //garis bujur lokasi 2
    $lokasi2Lon = $data['longitude']; //garis lintang lokasi 2
    $hasil = getDistance($lokasi1Lat,$lokasi1Lon, $lokasi2Lat, $lokasi2Lon);
//save ke array
    if ($data['kategori']=="tempelban") {
    $tempelban[$counttempelban]=
    ["id" => $data['id_wisata'],
    "nama"=> $data['nama'],
    "alamat"=> $data['alamat'],
    "lat"=> $data['latitude'],
    "gambar"=> $data['gambar'],
    "long"=> $data['longitude'],
    "hasil"=> $hasil];
    $counttempelban = $counttempelban+1;
    }
}
//array sort
function sorts($a, $b) {
    if ($a["hasil"]==$b["hasil"]) return 0;
  return ($a["hasil"]<$b["hasil"])?-1:1;
}


usort($tempelban, "sorts");


    for($i=0;$i<4;$i++){
      if(!empty($tempelban[$i]["id"])||isset($tempelban[$i]["id"])){
        $tempelban1[$i][0]= $tempelban[$i]["id"];
        $tempelban1[$i][1]= $tempelban[$i]["nama"];
        $tempelban1[$i][2]= $tempelban[$i]["gambar"];
        $tempelban1[$i][3]= $tempelban[$i]["alamat"];
        $tempelban1[$i][4]= $tempelban[$i]["lat"];
        $tempelban1[$i][5]= $tempelban[$i]["long"];
        $tempelban1[$i][6]= number_format($tempelban[$i]["hasil"], 2);}
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
	          <li class="nav-item"><a href="profil-medan.php" class="nav-link">Profil</a></li>
	          <li class="nav-item"><a href="map.php" class="nav-link">Map</a></li>
            <li class="nav-item active"><a href="pendaftaran.php" class="nav-link">Register</a></li>
	          <li class="nav-item cta"><a href="login.php" class="nav-link">Login Admin</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/maimun.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<a href="#iribilangbos" class="icon-video d-flex align-items-center justify-content-center mb-4">
          		<span class="ion-ios-play"></span>
            </a>
            <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Selamat Datang Di On Tem, Aplikasi Tempel Ban Online</p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gunakan ON TEM Biar Kamu Makin ON TIME</h1>
          </div>
        </div>
      </div>
    </div>



  
      </div>
        </div>
        <div class="desc" id="tempelban">
        <div class="row">
          <?php
                    foreach($tempelban1 as $value){
                ?>
          <div class="col-md-3 ftco-animate" style="margin-bottom: 13px;">
            <div class="project-destination">
              <?php if($value[2]=='Tidak ada'){?>
                <a href="profil.php?id=<?php echo $value[0]; ?>" class="img" style="background-image: url('upload/no.jpg');">
              <?php }else{?>
              <a href="profil.php?id=<?php echo $value[0]; ?>" class="img" style="background-image: url('upload/<?php echo $value[1]; ?><?php echo $value[2]; ?>');">
                <?php }?>
                <div class="text">
                  <h3><?php echo $value[1];?></h3>
                  <span><?php echo $value[6];?> Km</span>
                </div>
              </a>
            </div>
          </div>
          <?php 
                    }
                ?>   
           
      

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made by Maulana Ikhsan supported with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
   
  <script>
    $(document).ready(function() {
    $("div.desc").hide();
    $("#tempelban").show();
    $("input[name$='tempelban']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
  
  });
  </script>
  
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>