<?php
include "../Class/Database.php";
include "../Class/Info.php";
header('Content-type: application/json');
$database = new Database();
$db = $database->getConnection();
$info = new Info($db);
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "add";
}
$server_method = $_SERVER['REQUEST_METHOD'];
switch ($server_method) {
    case "GET":

        break;
    case "POST":
        $info->nama = $_POST['nama'];
        $info->no_telp = $_POST['telp'];
        if ($info->addTelp()) {
            http_response_code(201);
            $json['status'] = "201";
            $json['message'] = "berhasil";
            echo json_encode($json);
        } else {
            http_response_code(404);
            $json['status'] = "404";
            $json['message'] = "gagal";
            echo json_encode($json);
        }
        break;
    case "PUT":
        if ($action == "edit-info") {
            $data = json_decode(file_get_contents("php://input"), true);
            $info->email = $data['email'];
            $info->bbm = $data['bbm'];
            $info->deskripsi = $data['deskripsi'];
            $info->gmaps = $data['gmap'];
            $info->facebook = $data['facebook'];
            $info->twitter = $data['twitter'];
            $info->instagram = $data['instagram'];
            $info->pinterest = $data['pinterest'];
            $info->google_plus = $data['google_plus'];
            $info->youtube = $data['youtube'];

            if ($info->edit()) {
                http_response_code(200);
                $json['status'] = "200";
                $json['message'] = "berhasil";
                echo json_encode($json);
            } else {
                http_response_code(404);
                $json['status'] = "404";
                $json['message'] = "gagal";
                echo json_encode($json);
            }
        } elseif ($action == 'edit-slider') {
            $data = json_decode(file_get_contents("php://input"), true);
            $info->id = $data['id'];
            $info->gambar = $data['gambar'];
            $path = "../../images/slider/";
            if (file_exists($path.$data['old'])){
                //chown($path.$data['old'], 666);
                unlink($path.$data['old']);
            }
            if ($info->editSlider()) {
                http_response_code(200);
                $json['status'] = "200";
                $json['message'] = "berhasil";
                echo json_encode($json);
            } else {
                http_response_code(404);
                $json['status'] = "404";
                $json['message'] = "gagal";
                echo json_encode($json);
            }

        } else if($action == 'add-galeri'){
          $data = json_decode(file_get_contents("php://input"), true);
          $info->gambar = $data['gambar'];
          $path = "../../images/galeri/";

          if ($info->addGaleri()) {
              http_response_code(200);
              $json['status'] = "200";
              $json['message'] = "berhasil";
              echo json_encode($json);
          } else {
              http_response_code(404);
              $json['status'] = "404";
              $json['message'] = "gagal";
              echo json_encode($json);
          }
        } else if("delete-galeri"){
          $data = json_decode(file_get_contents("php://input"), true);
          $info->id = $data['id'];
          $path = "../../images/galeri/";
          if (file_exists($path.$data['old'])){
              //chown($path.$data['old'], 666);
              unlink($path.$data['old']);
          }
          if ($info->deleteGaleri()) {
              http_response_code(200);
              $json['status'] = "200";
              $json['message'] = "berhasil";
              echo json_encode($json);
          } else {
              http_response_code(404);
              $json['status'] = "404";
              $json['message'] = "gagal";
              echo json_encode($json);
          }
        } else {
            $data = json_decode(file_get_contents("php://input"), true);
            $info->id = $data['id'];
            $info->nama = $data['nama'];
            $info->no_telp = $data['telp'];

            if ($info->editTelp()) {
                http_response_code(200);
                $json['status'] = "200";
                $json['message'] = "berhasil";
                echo json_encode($json);
            } else {
                http_response_code(404);
                $json['status'] = "404";
                $json['message'] = "gagal";
                echo json_encode($json);
            }
        }
        break;
    case "DELETE":
        $info->id = $_GET['id'];
        if ($info->deleteTelp()) {
            http_response_code(200);
            $json['status'] = "200";
            $json['message'] = "berhasil";
            echo json_encode($json);
        } else {
            http_response_code(404);
            $json['status'] = "404";
            $json['message'] = "gagal";
            echo json_encode($json);
        }
        break;
}
