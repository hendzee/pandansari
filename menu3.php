<?php include_once "config.php" ?>
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
						<li><a href="#" class="nav-active">MENU</a></li>
						<li><a href="facility.php">FASILITAS</a></li>
						<li><a href="contact.php">HUBUNGI</a></li>
						<li><a href="galeri.php">GALERI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->

		<!--top content-->
			<div class="parallax-window">
						<div class="title-page"><h3>Sajian Kami</h3></div>
			</div>
		<!--end top content-->

		<div class="main-content">

      <!-- start service -->
      <div id="menu-list">
      	<div class="container menu-book">
      		<div class="slid slider" id="category-list">
            <div style="margin:1em;text-align:center;"><h3><span>M</span>enu <span>P</span>aket</h3></div>
            <div style="margin:1em;text-align:center;"><h3><span>M</span>akanan</h3></div>
            <div style="margin:1em;text-align:center;"><h3><span>M</span>inuman</h3></div>
      		</div>
      		<div class="data-menu">
      			<div id="table-menu-1">
      				<table>
      					<thead>
      						<th colspan="2" style="background:transparent;"><img src="images/menu.jpg" style="width:100%;"></th>
      					</thead>
      				</table>
      				<table class="table table-menu">
      					<thead>
      						<th><h3>Menu Makanan</h3></th>
      						<th><h3>Keterangan</h3></th>
      					</thead>
      					<tbody>
									<?php
										$ssql = "SELECT * FROM menu WHERE jenis='Paket'";
										$query = mysqli_query($con, $ssql);
										$row = mysqli_num_rows($query);

										if($row <= 0){
											echo "<tr><td colspan='2'>Stok Kosong</td></tr>";
										}else{
											while($record = mysqli_fetch_array($query)){
												echo "<tr><td>".$record['nama']."</td><td>".$record['keterangan']."</td></tr>";
											}
										}
									?>
      					</tbody>
      					<tfoot>
      						<tr>
      							<td colspan="2"></td>
      						</tr>
      					</tfoot>
      				</table>
      			</div>
      			<div id="table-menu-2">
							<table>
      					<thead>
      						<th colspan="2" style="background:transparent;"><img src="images/menu_2.jpg" style="width:100%;"></th>
      					</thead>
      				</table>
      				<table class="table table-menu">
      					<thead>
      						<th><h3>Menu Minuman</h3></th>
      						<th><h3>Keterangan</h3></th>
      					</thead>
      					<tbody>
									<?php
										$ssql = "SELECT * FROM menu WHERE jenis='Makanan'";
										$query = mysqli_query($con, $ssql);
										$row = mysqli_num_rows($query);

										if($row <= 0){
											echo "<tr><td colspan='2'>Stok Kosong</td></tr>";
										}else{
											while($record = mysqli_fetch_array($query)){
												echo "<tr><td>".$record['nama']."</td><td>".$record['keterangan']."</td></tr>";
											}
										}
									?>
      					</tbody>
      					<tfoot>
      						<tr>
      							<td colspan="2"></td>
      						</tr>
      					</tfoot>
      				</table>
						</div>
      			<div id="table-menu-3">
							<table>
      					<thead>
      						<th colspan="2" style="background:transparent;"><img src="images/menu_3.jpg" style="width:100%;"></th>
      					</thead>
      				</table>
      				<table class="table table-menu">
      					<thead>
      						<th><h3>Paket Prasmanan</h3></th>
      						<th><h3>Keterangan</h3></th>
      					</thead>
      					<tbody>
									<?php
										$ssql = "SELECT * FROM menu WHERE jenis='Minuman'";
										$query = mysqli_query($con, $ssql);
										$row = mysqli_num_rows($query);

										if($row <= 0){
											echo "<tr><td colspan='2'>Stok Kosong</td></tr>";
										}else{
											while($record = mysqli_fetch_array($query)){
												echo "<tr><td>".$record['nama']."</td><td>".$record['keterangan']."</td></tr>";
											}
										}
									?>
      					</tbody>
      					<tfoot>
      						<tr>
      							<td colspan="2"></td>
      						</tr>
      					</tfoot>
      				</table>
						</div>
      		</div>
      	</div>
      </div>
      <!-- end service -->
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
    <script src="js/slick.min.js"></script>
    <!-- DataTables -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <!--function-->
    <script>
      $(document).ready(function(){

      $('.data-menu').slick({
      	slidesToShow: 1,
      	slidesToScroll: 1,
      	arrows: false,
      	fade: true,
      	asNavFor: '.slid'
      });

      $('.slid').slick({
      	centerMode: true,
      	centerPadding: '60px',
      	slidesToShow: 1,
      	asNavFor: '.data-menu',
      	responsive: [
      		{
      			breakpoint: 468,
      			settings: {
      				arrows: false,
      				centerMode: true,
      				centerPadding: '40px',
      				slidesToShow: 1
      			}
      		},
      		{
      			breakpoint: 480,
      			settings: {
      				arrows: false,
      				centerMode: true,
      				centerPadding: '40px',
      				slidesToShow: 1
      			}
      		}
      	]
      });
      });
    </script>
		<!--parallax-->
		<script src="js/parallax.min.js"></script>
 	 	<script>
 		 function callparallax(){
 			 $('.parallax-window').parallax({
 					imageSrc: './images/bebek-goreng.jpg',
 					naturalWidth: 900,
 					naturalHeight: 600
 				});
 			}

 			callparallax();
 	 	</script>
	</body>
</html>
