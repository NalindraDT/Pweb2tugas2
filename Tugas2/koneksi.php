<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "izin_ketidakhadiran_pegawai";
    protected $koneksi;

 
    public function __construct() {

        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        } else {

        }
    }
    public function Aksi()
    {
        return("");
    }
}

$database = new Database();
?>
