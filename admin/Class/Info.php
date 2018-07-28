<?php

class Info
{
    private $conn;

    public $email;
    public $bbm;
    public $deskripsi;
    public $gmaps;
    public $facebook;
    public $twitter;
    public $instagram;
    public $pinterest;
    public $google_plus;
    public $youtube;

    public $id;
    public $nama;
    public $no_telp;

    public $gambar;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchInfo()
    {
        $query = "SELECT * FROM `info`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function edit()
    {
        $query = "UPDATE `info` SET `email` = ?, `bbm` = ?, `deskripsi_lokasi` = ?, `map` = ?, `facebook` = ?, `twitter` = ?, `instagram` = ?, `pinterest` = ?, `google_plus` = ?, `youtube` = ? WHERE `id` = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssss", $this->email, $this->bbm, $this->deskripsi, $this->gmaps, $this->facebook, $this->twitter, $this->instagram, $this->pinterest, $this->google_plus, $this->youtube);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function fetchTelp()
    {
        $query = "SELECT * FROM `contact`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function addTelp()
    {
        $query = "INSERT INTO `contact` (`id`, `nama`, `no_telp`) VALUES (NULL, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $this->nama, $this->no_telp);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editTelp()
    {
        $query = "UPDATE `contact` SET `nama` = ?, `no_telp` = ? WHERE `contact`.`id` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi", $this->nama, $this->no_telp,$this->id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTelp()
    {
        $query = "DELETE FROM `contact` WHERE `contact`.`id` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        if ($stmt->execute())
            return true;
        else
            return false;

    }

    public function fetchSlider(){
        $query = "SELECT * FROM `slider`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function editSlider()
    {
        $query = "UPDATE `slider` SET `gambar` = ? WHERE `slider`.`id` = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $this->gambar, $this->id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addGaleri(){
      $query = "INSERT INTO galeri(gambar) VALUES(?)";
      $stmt = $this->conn->prepare($query);
      $stmt->bind_param("s", $this->gambar);
      if ($stmt->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function deleteGaleri(){
      $query = "DELETE FROM galeri WHERE id = ?";
      $stmt = $this->conn->prepare($query);
      $stmt->bind_param("i", $this->id);
      if ($stmt->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function fetchGaleri(){
        $query = "SELECT * FROM `galeri`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
