<?php
include "../Class/Database.php";
include "../Class/Admin.php";
header('Content-type: application/json');
$database = new Database();
$db = $database->getConnection();
$admin = new Admin($db);
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
        if ($action == "login") {
            $admin->username = $_POST['username'];
            $password = $_POST['password'];
            $stmt = $admin->login();
            $stmt->bind_result($id, $user, $pass, $role);
            $stmt->store_result();
            $stmt->fetch();
            if (password_verify($password, $pass)) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['role'] = $role;
                http_response_code(200);
                $json['status'] = "200";
                $json['message'] = "berhasil";
                echo json_encode($json);
            } else {
                http_response_code(404);
                $json['status'] = "404";
                $json['message'] = "gagal";
            }
        } else {
            $admin->username = $_POST['username'];
            $admin->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            if ($admin->add()) {
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
    case "PUT":
        $data = json_decode(file_get_contents("php://input"),true);
        $admin->id = $data['id'];
        $admin->username = $data['username'];
        $admin->password = password_hash($data['password'],PASSWORD_BCRYPT);
        if ($admin->edit()){
            http_response_code(200);
            $json['status'] = "200";
            $json['message'] = "berhasil";
            echo json_encode($json);
        }else {
            http_response_code(404);
            $json['status'] = "404";
            $json['message'] = "gagal";
            echo json_encode($json);
        }
        break;
    case "DELETE":
        if (isset($_GET['id'])){
            $admin->id = $_GET['id'];
            if ($admin->delete()){
                http_response_code(200);
                echo "success";
            }else{
                http_response_code(404);
                echo "error";
            }

        }
        break;
}