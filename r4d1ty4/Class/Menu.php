<?php
class Menu{
    private $conn;

    public $id;
    public $jenis;
    public $nama;
    public $keterangan;
    public $gambar;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchJenis(){
        $query = "SELECT * FROM `jenis`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function fetchMakanan(){
        $query = "SELECT * FROM `kategori_makanan`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function fetchMinuman(){
        $query = "SELECT * FROM `kategori_minuman`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function fetchAllMenu(){
        $query = "SELECT * FROM `menu`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function fetchMenuById(){
        $query = "SELECT * FROM `menu` WHERE `id`=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i',$this->id);
        $stmt->execute();
        return $stmt;
    }

    public function addMenu(){
        $query = 'INSERT INTO `menu`(`jenis`, `nama`, `keterangan`, `gambar`) VALUES (?,?,?,?)';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss",$this->jenis,$this->nama,$this->keterangan,$this->gambar);
        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function editMenu(){
        $query = 'UPDATE `menu` SET `jenis` = ?, `nama` = ?, `keterangan` = ?, `gambar` = ? WHERE `menu`.`id` = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssi",$this->jenis,$this->nama,$this->keterangan,$this->gambar,$this->id);
        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteMenu(){
        $query = "DELETE FROM `menu` WHERE `id` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i",$this->id);
        if($stmt->execute())
            return true;
        else
            return false;
    }
}