<?php
include "../Class/Database.php";
include "../Class/Menu.php";
header('Content-type: application/json');
$database = new Database();
$db = $database->getConnection();
$menu = new Menu($db);
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
if (isset($_GET['action'])){
    $action = $_GET['action'];
}

$server_method = $_SERVER['REQUEST_METHOD'];
switch ($server_method){
    case "GET":
        if ($action=="get-keterangan"){
            if ($_GET['jenis']=="Makanan"){
                $stmt = $menu->fetchMakanan();
                $stmt->bind_result($id,$makanan);
                $result = [];
                $json = [];
                while ($stmt->fetch()){
                    $result = $makanan;
                    array_push($json,$result);
                }
                http_response_code(200);
                echo json_encode($json);
            }else{
                $stmt = $menu->fetchMinuman();
                $stmt->bind_result($id,$makanan);
                $result = [];
                $json = [];
                while ($stmt->fetch()){
                    $result = $makanan;
                    array_push($json,$result);
                }
                http_response_code(200);
                echo json_encode($json);
            }
        }
        break;
    case "POST":
            $menu->jenis = $_POST['jenis'];
            $menu->nama = $_POST['nama_menu'];
            $menu->keterangan = $_POST['keterangan'];
            if (empty($_POST['gambar'])){
              $gambar = "default.jpg";
            }
            $menu->gambar = $gambar;
            $stmt = $menu->addMenu();
            http_response_code(200);
            $json['status']="200";
            $json['messages']="berhasil";
            echo json_encode($json);
        break;
    case "DELETE":
        if (isset($_GET['id'])){
            $menu->id = $_GET['id'];
            if ($menu->deleteMenu()){
                http_response_code(200);
                echo "success";
            }else{
                http_response_code(404);
                echo "error";
            }

        }
        break;
    case "PUT":
        $data = json_decode(file_get_contents("php://input"),true);
        $menu->id = $_GET['id'];
        $menu->jenis = $data['jenis'];
        $menu->nama = $data['nama_menu'];
        $menu->keterangan = $data['keterangan'];
        $menu->gambar = $data['gambar'];
        $stmt = $menu->editMenu();
        if ($stmt){
            http_response_code(200);
            $json['status']="200";
            $json['messages']="berhasil";
            echo json_encode($json);
        }else{
            http_response_code(404);
            $json['status']="404";
            $json['messages']="gagal";
            echo json_encode($json);
        }
        break;

}
