<?php
$page="menu";
session_start();

include "session-check.php";
include "Class/Database.php";
include "Class/Menu.php";

$database = new Database();
$db = $database->getConnection();

$menu = new Menu($db);
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
    <title>Kelola Menu | Warung Pandansari</title>
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
    <link rel="stylesheet" href="dist/css/custom.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap.css">
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
                Menu
                <small>Kelola daftar menu</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
                <li class="active">Menu</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Menu</h3>
                    <div class="box-tools pull-right">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#tambah-menu"><i
                                    class="fa fa-plus"></i> Tambah Menu</a>
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-menu" style="padding:1em;">
                        <thead>
                          <tr>
                              <th>ID</th>
                              <th>Jenis</th>
                              <th>Nama Menu</th>
                              <th>Keterangan</th>
                              <th id="no_icon">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?
                        $stmt = $menu->fetchAllMenu();
                        $stmt->bind_result($id, $jenis, $nama, $keterangan, $gambar);
                        while ($stmt->fetch()) {
                            ?>
                            <tr>
                                <td><? echo $id ?></td>
                                <td><? echo $jenis ?></td>
                                <td><? echo $nama ?></td>
                                <td><? echo $keterangan ?></td>
                                <td>
                                    <input id="id-menu" type="hidden" value="<? echo $id ?>">
                                    <input id="jenis1" type="hidden" value="<? echo $jenis ?>">
                                    <input id="nama" type="hidden" value="<? echo $nama ?>">
                                    <input id="ket" type="hidden" value="<? echo $keterangan ?>">
                                    <input id="gbr" type="hidden" value="<? echo $gambar ?>">
                                    <a href="edit-menu.php?id=<? echo $id ?>" class="btn btn-success"><i class="fa fa-pencil"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-danger hapus"><i class="fa fa-trash"></i> </a>
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
    <div class="modal fade" id="tambah-menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
                </div>
                <form role="form" id="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select id="jenis" name="jenis" class="form-control">
                                <option selected disabled>Pilih</option>
                                <?
                                $stmt = $menu->fetchJenis();
                                $stmt->bind_result($id, $jenis);
                                while ($stmt->fetch()) {
                                    echo "<option value='$jenis'>$jenis</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="form-tambah">
                            <label for="nama-menu">Nama menu</label>
                            <input id="nama-menu" name="menu" type="text" class="form-control"
                                   placeholder="Masukkan nama menu">
                        </div>

                        <div class="form-group" id="select-keterangan">
                            <label for="keterangan1">Keterangan</label>
                            <select id="keterangan1" class="form-control">
                                <option selected disabled>Pilih</option>
                            </select>
                        </div>
                        <div class="form-group" id="text-keterangan">
                            <label>Keterangan</label>
                            <textarea class="form-control" id="keterangan2" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="javascript:void(0)" id="btn-tambah" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Tambah</a>
                    </div>
                </form>
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
<!-- DataTables -->
<script src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script src="plugins/dataTables/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
      $(".table-menu").DataTable({
      	language: {
        paginate: {
            previous: '‹',
            next:     '›'
        },
        aria: {
            paginate: {
                previous: 'Previous',
                next:     'Next'
            }
        }
      },
      	"pageLength": 10,
      	"paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
      });

      function delete_sorting(){
        $("#no_icon").removeAttr("class");
      }

      delete_sorting();

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
        $("#fileuploader").uploadFile({
            url: "upload.php",
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
                //files: list of files
                //data: response from server

                gambar = json.gambar;

                //xhr : jquer xhr object
            }
        });
        $('#btn-tambah').click(function () {
            $.ajax({
                url: 'api/menu.php',
                type: 'POST',
                data: {
                    jenis: $('#jenis').val(),
                    nama_menu: $('#nama-menu').val(),
                    keterangan: $('[name="keterangan"]').val(),
                    gambar: gambar
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
        $('#text-keterangan').hide();
        $('#jenis').on('change', function (e) {
            var valueSelected = this.value;
            if (valueSelected == "Makanan" || valueSelected == "Minuman") {
                $.ajax({
                    type: "GET",
                    data: {jenis: valueSelected},
                    url: 'api/menu.php?action=get-keterangan',
                    dataType: 'json',
                    success: function (json) {
                        var sel = $("#keterangan1");
                        sel.empty();
                        sel.append($("<option></option>")
                            .attr({
                                disabled: true,
                                selected: true
                            }).text('Pilih'));
                        $.each(json, function (key, value) {
                            sel.append($("<option></option>")
                                .attr("value", value).text(value));
                        });

                    }

                });
                $('#select-keterangan').show();
                $('#keterangan1').attr('name', 'keterangan');
                var attr1 = $('#keterangan2').attr('name');
                if (typeof attr1 !== typeof undefined && attr1 !== false) {
                    $('#keterangan2').removeAttr('name');

                }
                $('#text-keterangan').hide();
            }
            else {
                $('#select-keterangan').hide();
                $('#text-keterangan').show();
                $('#keterangan2').attr('name', 'keterangan');
                var attr2 = $('#keterangan1').attr('name');
                if (typeof attr2 !== typeof undefined && attr2 !== false) {
                    $('#keterangan1').removeAttr('name');

                }
            }

        });
        $(".hapus").click(function(){
            var id_menu = $(this).closest('td').find('#id-menu').val();
            var nama_menu = $(this).closest('td').find('#nama').val();
            sweetAlert({
                    title: "Warning!",
                    text: "Apakah anda yakin akan menghapus '"+nama_menu+"' ?",
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
                        url: "api/menu.php?id="+id_menu+"",
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
