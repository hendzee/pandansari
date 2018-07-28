<?php
class Admin
{
    private $conn;

    public $id;
    public $username;
    public $password;
    public $gambar;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login(){
        $query = "SELECT * FROM `admin` WHERE `username` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s",$this->username);
        $stmt->execute();
        return $stmt;

    }
    public function fetchAll(){
        $query = "SELECT * FROM `admin` WHERE `role`='co-admin'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function add(){
        $query = "INSERT INTO `admin`(`username`,`password`) VALUES (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss",$this->username,$this->password);
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function delete(){
        $query = "DELETE FROM `admin` WHERE `id` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i",$this->id);
        if($stmt->execute())
            return true;
        else
            return false;
    }
    public function edit(){
        $query = 'UPDATE `admin` SET `username` = ?, `password` = ? WHERE `admin`.`id` = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi",$this->username,$this->password,$this->id);
        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}