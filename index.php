<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Warung Pandansari</title>


		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link href='images/icon.ico' rel='icon' type='image/x-icon'/>
		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<!--<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">-->
		<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">
		<!--slick theme-->
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<!-- DataTables -->
	  <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <!--pleasewait-->
		<link href="css/please-wait.css" rel="stylesheet">
		<!--fotorama-->
		<link rel='stylesheet' href='css/fotorama.css'>
		<!--fontawesome-->
		<link rel='stylesheet' href='css/font-awesome.min.css'>

	</head>

	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><h1 id="logo"><span>W</span>arung <span>P</span>andansari</h1></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right" id="nav-menu">
						<li><a href="#" class="nav-active">PANDANSARI</a></li>
						<li><a href="service.php">LAYANAN</a></li>
						<li><a href="menu.php">MENU</a></li>
						<li><a href="facility.php">FASILITAS</a></li>
						<li><a href="contact.php">HUBUNGI</a></li>
						<li><a href="galeri.php">GALERI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->
		<div class="main-content">

			<!-- start home -->
			<section id="home" class="text-center" style="z-index:3">
				<div class="blabla" style="position:absolute;top:0;width:100%;height:100vh;background:rgba(0,0,0,0.5);z-index:5">b</div>
			  <div class="templatemo_headerimage">
	      	<div class="slider-caption">
				    <div class="templatemo_homewrapper">
							<div style="text-align:center;width:100%;">
								<div><i class="fa fa-cutlery fa-3x" style="color:#fff;"></i></div>
							</div>
				      <h2>
								Warung Pandansari
							</h2>
							<h4>Melayani dengan sepenuh hati</h4>
				    </div>
			  	</div>
			  </div>
			</section>
			<!-- end home -->

			<!-- home-menu -->
			<div id="home-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="row media">
								<div class="col-md-6 col-sm-6 menu-cover">
									<img src="images/makanan.jpg"/>
								</div>
								<div class="col-md-6 col-sm-6 desc-menu">
									<h3><span>M</span>enu <span>M</span>akanan</h3>
									<p>Menu makanan unik dan bervariasi. Menu goreng, menu bakar, aneka sambal, sayur dan lain-lain.</p>
									<div class="btn-style"><a href="menu.php">Lihat Menu</a></div>
                  <div class="menu-num"><h3>1</h3></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="row media">
								<div class="col-md-6 col-sm-6 menu-cover">
									<img src="images/soda.jpg"/>
								</div>
								<div class="col-md-6 col-sm-6 desc-menu">
									<h3><span>M</span>enu <span>M</span>inuman</h3>
									<p>Aneka minuman yang dingin dan segar atau hangat seperti jus buah, soda gembira dan lainya.</p>
									<div class="btn-style"><a href="menu2.php">Lihat Menu</a></div>
                  <div class="menu-num"><h3>2</h3></div>
								</div>
							</div>
						</div>
					</div>
          <div class="row bottom-side">
            <div class="col-md-6 col-sm-6">
              <div class="row media">
                <div class="col-md-6 col-sm-6 menu-cover">
                  <img src="images/makanan.jpg"/>
                </div>
                <div class="col-md-6 col-sm-6 desc-menu">
                  <h3><span>M</span>enu <span>P</span>aket</h3>
                  <p>Menu paket untuk dipesan. Paket prasmanan dan nasi kotak dengan banyak pilihan.</p>
                  <div class="btn-style"><a href="menu3.php">Lihat Menu</a></div>
                  <div class="menu-num"><h3>3</h3></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="row media">
                <div class="col-md-6 col-sm-6 menu-cover">
                  <img src="images/soda.jpg"/>
                </div>
                <div class="col-md-6 col-sm-6 desc-menu">
                  <h3><span>L</span>ayanan <span>A</span>cara</h3>
                  <p>Rayakan acara anda bersama kami. Kami menyediakan layanan untuk acara ulang tahun, meeting, dan sebagainya.</p>
                  <div class="btn-style"><a href="service.php">Menu Event</a></div>
                  <div class="menu-num"><h3>4</h3></div>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
			<!-- end service -->

			<!-- start divider -->
			<div id="divider">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-7 invitation">
							<h2 id="divider-heading">Kami memberikan layanan <strong>terbaik</strong></h2>
							<p>
								Kami menyedeiakan makanan dengan beragam variasi dan cita rasa
								yang tinggi. Lokasi yang berada di daerah pegunungan membuat
								suasanan untuk menikmati makanan menjadi lebih santai dan tenang.
								Kami juga menyediakan fasilitas bagi para pengunjung seperti Wifi,
								pemandian air panas serta pusat oleh-oleh.
							</p>
							<div class="btn-style"><a href="contact.php">Segera Kunjungi</a></div>
						</div>
						<div class="col-md-5 col-sm-5 mini-galeri">
							<div class="fotorama" data-nav="false" data-autoplay="2000" data-loop="true" data-autoplay="true" data-width="100%" data-height="250px" data-fit="cover" data-arrows="false" data-click="false">
								<?php
									$ssql = "SELECT * FROM galeri LIMIT 0, 3";
									$query = mysqli_query($con, $ssql);

									while($record = mysqli_fetch_array($query)){
								?>
								<a href="images/<?php echo $record['gambar']; ?>" style="width:100%"></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end divider -->
		</div>
		<!--end main-content-->

		<div style="text-align:center;margin-bottom:1em;">
			<p>
				<h3>Tetap terhubung</h3>
			</p>
		</div>

		<!-- start footer -->
		<?php
			$facebook = "";
			$twitter = "";
			$instagram = "";
			$pinterest = "";
			$google_plus = "";
			$youtube = "";

			$ssql = "SELECT * FROM info WHERE id = '1'";
			$query = mysqli_query($con, $ssql);

			while($record = mysqli_fetch_array($query)){
				$facebook = $record['facebook'];
				$twitter = $record['twitter'];
				$instagram = $record['instagram'];
				$pinterest = $record['pinterest'];
				$google_plus = $record['google_plus'];
				$youtube = $record['youtube'];
			}
		?>
		<footer>
			<div class="container">
				<div class="row social-icon">
					<div class="col-xs-2">
						<a href="<?php echo $facebook; ?>" class="fa fa-facebook fa-2x"></a>
					</div>
					<div class="col-xs-2">
						<a href="<?php echo $twitter; ?>" class="fa fa-twitter fa-2x"></a>
					</div>
					<div class="col-xs-2">
						<a href="<?php echo $instagram; ?>" class="fa fa-instagram fa-2x"></a>
					</div>
					<div class="col-xs-2">
						<a href="<?php echo $pinterest; ?>" class="fa fa-pinterest fa-2x"></a>
					</div>
					<div class="col-xs-2">
						<a href="<?php echo $google_plus; ?>" class="fa fa-google fa-2x"></a>
					</div>
					<div class="col-xs-2">
						<a href="<?php echo $youtube; ?>" class="fa fa-youtube fa-2x"></a>
					</div>
				</div>
				<div class="copyright">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright &copy; 2016 <span>Warung Pandansari</span></p>
						</div>
						<div class="col-md-12">
							<p>Website by weeffee studio</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!--pleasewait-->
		<script type="text/javascript" src="js/please-wait.min.js"></script>
	 	<script type="text/javascript">

		 	var loading_screen = pleaseWait({
		  logo: "images/logo.png",
		  backgroundColor: '#e74c3c',
		  loadingHtml: "<div class='sk-three-bounce'><div class='sk-child sk-bounce1'></div><div class='sk-child sk-bounce2'></div><div class='sk-child sk-bounce'></div></div><p class='loading-message'>Mohon tunggu...</p>"
			});
			loading_screen.finish();
	 </script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!--backstrech slideshow-->
		<script src="js/jquery.backstretch.min.js"></script>
		<?php
			$this_con = $con;

			function call_image($id, $this_con){
				$ssql = "SELECT * FROM slider WHERE id='$id'";
				$query = mysqli_query($this_con, $ssql);
				$data = "";

				while($record = mysqli_fetch_array($query)){
					$data = $record['gambar'];
				}

				return $data;
			}
			$gambar1 = call_image(1, $this_con);
			$gambar2 = call_image(2, $this_con);
			$gambar3 = call_image(3, $this_con);

		?>
		<script>
      $("#home").backstretch([
        "./images/slider/<?php echo $gambar1; ?>",
        "./images/slider/<?php echo $gambar2; ?>",
				"./images/slider/<?php echo $gambar3; ?>"
      ], {
          fade: 750,
          duration: 4000
      });
    </script>
		<!-- images loaded -->
   	<script src="js/imagesloaded.min.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
		<!-- fotorama -->
		<script src='js/fotorama.js'></script>
	</body>
</html>
