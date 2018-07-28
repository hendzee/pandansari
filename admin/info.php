<?php
session_start();
$page = "info";
include "session-check.php";
include "Class/Database.php";
include "Class/Info.php";

$database = new Database();
$db = $database->getConnection();

$info = new Info($db);

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Info | Warung Pandansari</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/SweetAlert/sweetalert.css">
    <!-- AdminLTE Skins. We have chosen the skin-red for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-red.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='../images/icon.ico' rel='icon' type='image/x-icon'/>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-red                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>W</b>PS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Pandan</b>sari</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <? include "include/user-tools.php" ?>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <? include "include/navigation.php" ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Info
                <small>Ubah Info umum</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-info-circle"></i> Home</a></li>
                <li class="active">Info</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Menu</h3>
                    <?
                    $stmt = $info->fetchInfo();
                    $stmt->bind_result($id, $email, $bbm, $deskripsi, $gmaps, $facebook, $twitter, $instagram, $pinterest, $google_plus, $youtube);
                    $stmt->fetch();
                    $stmt->close();
                    ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <div class="form-group" id="form-tambah">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control"
                                   placeholder="Masukkan email" value="<? echo $email ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="bbm">PIN BBM</label>
                            <input id="bbm" name="bbm" type="text" class="form-control"
                                   placeholder="Masukkan PIN BBM" value="<? echo $bbm ?>">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi Lokasi</label>
                            <textarea class="form-control" id="desc-lokasi" rows="3"
                                      placeholder="Masukkan Deskripsi Lokasi"><? echo $deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Google Map Embed Code <a href="https://maps.google.com/" target="_blank">(Buka Google Map <i class="fa fa-external-link-square"></i>)</a></label>
                            <textarea class="form-control" id="gmaps" rows="3"
                                      placeholder="Masukkan Google Map Embed Code"><? echo $gmaps ?></textarea>
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="facebook">Facebook</label>
                            <input id="facebook" name="facebook" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Facebook" value="<? echo $facebook ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="twitter">Twitter</label>
                            <input id="twitter" name="twitter" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Twitter" value="<? echo $twitter ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="instagram">Instagram</label>
                            <input id="instagram" name="instagram" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Instagram" value="<? echo $instagram ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="pinterest">Pinterest</label>
                            <input id="pinterest" name="pinterest" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Pinterest" value="<? echo $pinterest ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="google_plus">Google+</label>
                            <input id="google_plus" name="google_plus" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Google+" value="<? echo $google_plus ?>">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="youtube">Youtube</label>
                            <input id="youtube" name="youtube" type="text" class="form-control"
                                   placeholder="Masukkan Alamat Youtube" value="<? echo $youtube ?>">
                        </div>
                    </form>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="box-tools pull-right">
                        <a href="javascript:void(0)" class="btn btn-primary simpan">Simpan</a>
                        <a href="" class="btn btn-danger">Batal</a>
                    </div><!-- /.box-tools -->
                </div><!-- box-footer -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Pandansari</a>.</strong> All rights reserved.
    </footer>
    <!-- Modal -->


</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/SweetAlert/sweetalert.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
    $(document).ready(function () {
        $('#logout').click(function () {
            $.ajax({
                type: 'GET',
                url: "api/admin.php?action=logout",
                dataType: "json",
                success: function (data) {
                    location.reload();
                }
            });
        });
        $('#logout-right').click(function () {
            $.ajax({
                type:'GET',
                url: "api/admin.php?action=logout",
                dataType: "json",
                success: function (data) {
                    location.reload();
                }
            });
        });
        $('.simpan').click(function () {
            var email = $("#email").val();
            var bbm = $("#bbm").val();
            var deskripsi = $("#desc-lokasi").val();
            var gmap = $("#gmaps").val();
            var facebook = $("#facebook").val();
            var twitter = $("#twitter").val();
            var instagram = $("#instagram").val();
            var pinterest = $("#pinterest").val();
            var google_plus = $("#google_plus").val();
            var youtube = $("#youtube").val();

            $.ajax({
                url: 'api/info.php?action=edit-info',
                type: 'PUT',
                data: '{"email" : "' +email+ '", "bbm" : "'+bbm+'", "deskripsi" : "'+deskripsi+'", "gmap" : "'+gmap+'", "facebook" : "'+facebook+'", "twitter" : "'+twitter+'", "instagram" : "'+instagram+'", "pinterest" : "'+pinterest+'", "google_plus" : "'+google_plus+'", "youtube" : "'+youtube+'"}',
                  success: function (result) {
                    swal({
                            title: "Sukses!",
                            text: "Info telah di ubah!",
                            type: "success"
                        },
                        function () {
                            location.reload();
                        });

                }
            })
        });
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
