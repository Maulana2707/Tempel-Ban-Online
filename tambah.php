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
	         <li class="nav-item cta"><a href="index.php" class="nav-link">Log Out</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Tambah </h2>
          </div>
        </div>
        <form role="form" action="tambah-aksi.php" method="post" enctype="multipart/form-data">
                  <div class="form-inline">
                    <div class="form-group">
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Nama Tempel Ban">
                  </div>
                  </div><br>
                  <div class="form-inline">
                    <div class="form-group">
                    <input type="text" name="latitude" class="form-control" id="exampleInputEmail2" placeholder="Latitude">
                  </div>
                  <div class="form-group" style="margin-left: 7px;margin-right: 10px;">
                    <input type="text" name="longitude" class="form-control" id="exampleInputPassword2" placeholder="Longitude">
                  </div>
                  <div class="input-group-icon mt-10" >
                                <div class="form-select" id="default-select" style="background-color: white">
                                <select style="height: 50px;overflow: scroll;" name="kategori">
                                    <option value="tempelban">Tempat Tempel Ban</option>
                                    <option value="bengkel">Bengkel (Coming Soon)</option>
                                  
                                    </select>
                                </div>
                            </div>
                  </div><br>
                  <div class="form-group">
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat Tempel Ban">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="desc" id="exampleInputEmail1" placeholder="Deskripsi Tempel Ban">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Nomor HP">
                  </div><div class="form-group">
                    <input type="text" class="form-control" name="google" id="exampleInputEmail1" placeholder="Link Google Maps">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto </label>
                    <input type="file" name="file" id="file">
                  </div>
                  
                  <input type="submit" name="upload" value="Upload" class="btn btn-primary">
                  </form>
      </div>
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