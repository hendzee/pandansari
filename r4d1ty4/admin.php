<?php
session_start();
$_SESSION['user'] = 'logged';
include "session-check.php";
include "Class/Database.php";
include "Class/Admin.php";

$database = new Database();
$db = $database->getConnection();

$admin = new Admin($db);
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
    <title>AdminLTE 2 | Starter</title>
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
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
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
                Admin
                <small>Kelola pengguna</small>
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
                    <h3 class="box-title">Daftar User</h3>
                    <div class="box-tools pull-right">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#tambah-menu"><i
                                    class="fa fa-plus"></i> Tambah User</a>
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                        <?
                        $stmt = $admin->fetchAll();
                        $stmt->bind_result($id, $user, $pass, $role);
                        while ($stmt->fetch()) {
                            ?>
                            <tr>
                                <td><? echo $user ?></td>
                                <td>
                                    <input type="hidden" id="user-id" value="<? echo $id?>">
                                    <input type="hidden" id="user-name" value="<? echo $user?>">
                                    <a href="#" class="btn btn-success edit" data-toggle="modal" data-target="#edit-modal"><i class="fa fa-pencil"></i> </a>
                                    <a href="#" class="btn btn-danger hapus" ><i class="fa fa-trash"></i> </a>
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
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="tambah-menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control"
                                   placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Username</label>
                            <input id="password" name="password" type="password" class="form-control"
                                   placeholder="Masukkan password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="javascript:void(0)" class="btn btn-primary" id="add-user"><i class="fa fa-plus"></i>
                        Tambah</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Pengguna</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="username-edit">Username</label>
                            <input id="username-edit" name="username" type="text" class="form-control"
                                   placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="password-edit">Username</label>
                            <input id="password-edit" name="password" type="password" class="form-control"
                                   placeholder="Masukkan password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="javascript:void(0)" class="btn btn-primary" id="edit-user"><i class="fa fa-pencil"></i>
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
        $("#add-user").click(function () {
            $.ajax({
                url: 'api/admin.php',
                type: 'POST',
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
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
            var user_id = $(this).closest('td').find('#user-id').val();
            var user_name = $(this).closest('td').find('#user-name').val();
            sweetAlert({
                    title: "Warning!",
                    text: "Apakah anda yakin akan menghapus '"+user_name+"' ?",
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
                        url: "api/admin.php?id="+user_id+"",
                        dataType: "text",
                        success: function (data) {
                            if (data=='error'){
                                swal("Warning", "Data pengguna tidak bisa di hapus!", "error");
                            }else {
                                swal("Deleted!", "Data pengguna telah di hapus", "success");
                            }
                            location.reload();
                        }
                    });
                });
        });
        var user_id;
        var user_name;
        $(".edit").click(function () {
            user_id = $(this).closest('td').find('#user-id').val();
            user_name = $(this).closest('td').find('#user-name').val();
            $("#username-edit").val(user_name);


        });
        $("#edit-user").click(function () {
            var data_input = '{"id" : "'+user_id+'", "username": "'+$('#username-edit').val()+'", "password" : "'+$('#password-edit').val()+'" }';
            $.ajax({
                url: 'api/admin.php',
                type: 'PUT',
                data: data_input,
                dataType: 'json',
                success: function (result) {
                    swal({
                            title: "Sukses!",
                            text: "Pengguna telah di ubah!",
                            type: "success"
                        },
                        function () {
                            location.reload();
                        });

                }
            })
        })
    })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
