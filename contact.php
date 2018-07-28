<?php include_once "config.php"; ?>
<?php
	$email = "";
	$bbm = "";
	$desc_loc = "";
	$goog_map = "";

	$ssql = "SELECT * FROM info WHERE id = '1'";
	$query = mysqli_query($con, $ssql);

	while($record = mysqli_fetch_array($query)){
		$email = $record['email'];
		$bbm = $record['bbm'];
		$desc_loc = $record['deskripsi_lokasi'];
		$goog_map = $record['map'];
	}

	$ssql_con = "SELECT * FROM contact";
	$query_con = mysqli_query($con, $ssql_con);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Warung Pandansari</title>
<!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
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
		<link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">
		<!--slick theme-->
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<!-- DataTables -->
	  <link rel="stylesheet" href="css/dataTables.bootstrap.css">
		<!--pleasewait-->
		<link href="css/please-wait.css" rel="stylesheet">

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
						<li><a href="index.php">PANDANSARI</a></li>
						<li><a href="service.php">LAYANAN</a></li>
						<li><a href="menu.php">MENU</a></li>
						<li><a href="facility.php">FASILITAS</a></li>
						<li><a href="#" class="nav-active">HUBUNGI</a></li>
						<li><a href="galeri.php">GALERI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->

		<!--top content-->
			<div class="parallax-window">
					<div class="title-page"><h3>Tanyakan Sesuatu</h3></div>
			</div>
		<!--end top content-->

		<div class="main-content">

      <!-- start service -->
      <div id="menu-contact">
      	<div class="container">
      		<div class="row">
      			 <div class="col-md-6 col-sm-6">
      				 <h3><span>K</span>ontak</h3>
      				 <p class="sub-tit">Nomor telpon:</p>
							 <?php while($record = mysqli_fetch_array($query_con)){ ?>
								 <p><i class="fa fa-phone"></i> <?php $nama_con = $record['nama']; echo $record['no_telp']." "."($nama_con)";?></p>
							 <?php }?>
      				 <p class="sub-tit">Alamat Email:</p>
      				 <p><i class="fa fa-envelope"></i> <?php echo $email; ?></p>
      				 <p class="sub-tit">BBM:</p>
      				 <p><i class="fa fa-comment"></i> <?php echo $bbm; ?></p>
      				 <p class="sub-tit">Lokasi:</p>
      				 <p><i class="fa fa-map-marker"></i> <?php echo $desc_loc; ?></p>
      			 </div>
      			 <div class="col-md-6 col-sm-6">
      				 <h3><span>M</span>ap</h3>
      				 <?php echo $goog_map; ?>
      			 </div>
      		 </div>
      	</div>
      </div>

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
		<!-- images loaded -->
   	<script src="js/imagesloaded.min.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
    <!--slick-->
		<!--parallax-->
		<script src="js/parallax.min.js"></script>
 	 	<script>
 		 function callparallax(){
 			 $('.parallax-window').parallax({
 					imageSrc: './images/staff.jpg',
 					naturalWidth: 900,
 					naturalHeight: 600
 				});
 			}

 			callparallax();
 	 	</script>
  	</body>
</html>
