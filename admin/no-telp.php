<?php
$page = "no-telp";
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
    <title>Kelola Nomor Telp | Warung Pandansari</title>
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
                No Telepon
                <small>Kelola daftar nomor telepon</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-phone-square"></i> Home</a></li>
                <li class="active">Telephone</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Nomor Telepon</h3>
                    <div class="box-tools pull-right">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#tambah-kontak"><i
                                    class="fa fa-plus"></i> Tambah Kontak</a>
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Action</th>
                        </tr>
                        <?
                        $stmt = $info->fetchTelp();
                        $stmt->bind_result($id, $nama, $no_telp);
                        while ($stmt->fetch()) {
                            ?>
                            <tr>
                                <td><? echo $id ?></td>
                                <td><? echo $nama ?></td>
                                <td><? echo $no_telp ?></td>
                                <td>
                                    <input id="id-telp" type="hidden" value="<? echo $id ?>">
                                    <input id="nama" type="hidden" value="<? echo $nama ?>">
                                    <input id="no-telp" type="hidden" value="<? echo $no_telp ?>">
                                    <a href="#" class="edit btn btn-success" data-toggle="modal" data-target="#edit-kontak"><i
                                                class="fa fa-pencil"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-danger hapus"><i
                                                class="fa fa-trash"></i> </a>
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
    <div class="modal fade" id="tambah-kontak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kontak</h4>
                </div>

                <div class="modal-body">
                    <form role="form" id="form">
                        <div class="form-group" id="form-tambah">
                            <label for="add-nama">Nama</label>
                            <input id="add-nama" name="menu" type="text" class="form-control"
                                   placeholder="Masukkan nama kontak">
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="add-no-telp">Nomor Telepon</label>
                            <input id="add-no-telp" name="menu" type="text" class="form-control"
                                   placeholder="Masukkan nomor telepon">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="javascript:void(0)" id="btn-tambah" class="btn btn-primary"><i class="fa fa-plus"></i>
                        Tambah</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-kontak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Kontak</h4>
                </div>

                <div class="modal-body">
                    <form role="form" id="form">
                        <div class="form-group" id="form-tambah">
                            <label for="edit-nama">Nama</label>
                            <input id="edit-nama" name="menu" type="text" class="form-control"

                        </div>
                        <input id="edit-id-telp" name="menu" type="hidden" class="form-control">
                        <div class="form-group" id="form-tambah">
                            <label for="edit-no-telp">Nomor Telepon</label>
                            <input id="edit-no-telp" name="menu" type="text" class="form-control"
                                   placeholder="Masukkan nomor telepon">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="javascript:void(0)" id="btn-edit" class="btn btn-primary"><i class="fa fa-plus"></i>
                        Edit</a>
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
        $('.edit').click(function () {
           var nama =  $(this).closest('td').find('#nama').val();
           var notelp = $(this).closest('td').find('#no-telp').val();
           var edit_id = $(this).closest('td').find('#id-telp').val();

           $('#edit-nama').val(nama);
           $('#edit-no-telp').val(notelp);
           $('#edit-id-telp').val(edit_id);
        });
        $('#btn-edit').click(function () {
            var inputan = '{"id" : "'+$('#edit-id-telp').val()+'","nama": "'+$('#edit-nama').val()+'", "telp": "'+$('#edit-no-telp').val()+'"}';
            $.ajax({
                url: 'api/info.php?action=edit-telp',
                type: 'PUT',
                data: inputan,
                dataType: 'json',
                success: function (result) {
                    swal({
                            title: "Sukses!",
                            text: "Menu telah di tambah!",
                            type: "success"
                        },
                        function () {
                            location.reload();
                        });

                }
            })
        });
        $('#btn-tambah').click(function () {
            $.ajax({
                url: 'api/info.php',
                type: 'POST',
                data: {
                    nama: $('#add-nama').val(),
                    telp: $('#add-no-telp').val()
                },
                dataType: 'json text',
                success: function (result) {
                    swal({
                            title: "Sukses!",
                            text: "Menu telah di tambah!",
                            type: "success"
                        },
                        function () {
                            location.reload();
                        });

                }
            })
        });
        $(".hapus").click(function(){
            var id_telp = $(this).closest('td').find('#id-telp').val();
            var nama_a = $(this).closest('td').find('#nama').val();
            sweetAlert({
                    title: "Warning!",
                    text: "Apakah anda yakin akan menghapus '"+nama_a+"' ?",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Tidak",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya",
                    closeOnConfirm: false
                },
                function () {
                    $.ajax({
                        type:'DELETE',
                        url: "api/info.php?id="+id_telp+"",
                        dataType: "text",
                        success: function (data) {
                            if (data=='error'){
                                swal("Warning", "Data produk tidak bisa di hapus!", "error");
                            }else {
                                swal("Deleted!", "Data Produk telah di hapus", "success");
                            }
                        }
                    });
                });
        });

    })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
