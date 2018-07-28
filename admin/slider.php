<?php
$page = "slider";
session_start();
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
    <title>Slider | Warung Pandansari</title>
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
    <link rel="stylesheet" href="plugins/jQueryUpload/uploadfile.css">
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
                Slider
                <small>Kelola Slider</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
                <li class="active">Slider</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Slider</h3>
                    <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                        <?
                        $stmt = $info->fetchSlider();
                        $stmt->bind_result($id, $gambar);
                        while ($stmt->fetch()) {
                            ?>
                            <tr>
                                <td><? echo $id ?></td>
                                <td><img src="../images/slider/<? echo $gambar ?>" class="image img-bordered-sm" width="60" height="50"></td>
                                <td>
                                    <input type="hidden" id="slider-id" value="<? echo $id?>">
                                    <input type="hidden" id="old-image" value="<? echo $gambar?>">
                                    <a href="#" class="btn btn-success edit" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-upload"></i> </a>
                                </td>
                            </tr>
                            <?
                        }
                        ?>
                        </tbody>
                    </table>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    The footer of the box
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
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload Gambar</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <input type="hidden" id="id-slider">
                            <input type="hidden" id="image-old">
                            <label for="upload">Gambar</label>
                            <a href="#" id="upload"></a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="javascript:void(0)" class="btn btn-primary" id="simpan"><i class="fa fa-save"></i>
                        Simpan</a>
                </div>

            </div>
        </div>
    </div>
</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/jQueryUpload/jquery.uploadfile.min.js"></script>
<script src="plugins/SweetAlert/sweetalert.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
    $(document).ready(function () {
        $('#logout').click(function () {
            $.ajax({
                type:'GET',
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
        var gambar;
        $('.edit').click(function () {
            var id_slider = $(this).closest('td').find('#slider-id').val();
            var old = $(this).closest('td').find('#old-image').val();
            $('#id-slider').val(id_slider);
            $('#image-old').val(old);
        });
        $("#upload").uploadFile({
            url: "upload-slider.php",
            multiple: false,
            dragDrop: false,
            maxFileCount: 1,
            maxFileSize: 2000 * 1024,
            showPreview: true,
            showDelete: true,
            previewHeight: "100%",
            previewWidth: "100%",
            fileName: "myfile",
            onSuccess: function (files, data, xhr, pd) {
                var json = $.parseJSON(data);
                if (json.gambar == null) {
                    //do nothing
                }else {
                    gambar = json.gambar;
                    console.log(gambar)
                }


                //xhr : jquer xhr object
            }
        });
        $('#simpan').click(function () {
            var inputan = '{ "gambar": "' + gambar + '", "id" : "'+$('#id-slider').val()+'", "old": "'+$('#image-old').val()+'" }';
            $.ajax({
                url: 'api/info.php?action=edit-slider',
                type: 'PUT',
                data: inputan,
                dataType: 'json',
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
    })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
