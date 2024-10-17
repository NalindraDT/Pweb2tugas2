<?php
require_once ('koneksi.php');

class Pegawai extends Database{

    public function __construct(){
        parent::__construct();
}

public function Aksi(){
    $masuk = "SELECT izin_id, nama_dosen, keperluan, tgl_mulai_izin, durasi_izin_hari, putusan, surat_keterangan from ketidakhadiran where surat_keterangan= 'Ada'";
    return $this->koneksi->query($masuk);
    }
}
$nale = new Pegawai();
$nale1 = $nale->Aksi();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Ketidakhadiran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      table {
        max-width: 80%;
        margin: 0 auto;
      }
      .btn-container {
        max-width: 80%;
        margin: 0 auto;
        text-align: center;
      }
    </style>
  </head>
  <body style="font-family: 'poppins';" class = "p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./admin.php">Admin</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pegawai
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="./ada.php">Ada surat</a></li>
                  <li><a class="dropdown-item" href="./tdk_ada.php">Tidak ada surat</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </ul>
      <ul class="navbar-nav ms-auto">
              <li class="nav-item">
          <a class="nav-link" href="#">Pegawai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class = "container mt-3">
<H3 class="d-flex justify-content-center align-items-center mt-3 mb-5">Selamat datang tabel ini merupakan pegawai yang memiliki surat keterangan </H3>
<table class="table" border="4">
  <thead>
    <tr>
        <th scope="col" class="px-6 py-3">Id Izin</th>
        <th scope="col" class="px-6 py-3">Nama</th>
        <th scope="col" class="px-6 py-3">Keperluan</th>
        <th scope="col" class="px-6 py-3">Tanggal izin</th>
        <th scope="col" class="px-6 py-3">Durasi Izin</th>
        <th scope="col" class="px-6 py-3">Putusan</th>
        <th scope="col" class="px-6 py-3">Surat Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      $no = 1;
      foreach ($nale1 as $row) {
      ?>
      <tr>
      <td class="px-6 py-4"><?php echo $no++; ?></td>
          <td class="px-6 py-4"><?php echo $row['nama_dosen']; ?></td>
          <td class="px-6 py-4"><?php echo $row['keperluan']; ?></td>
          <td class="px-6 py-4"><?php echo $row['tgl_mulai_izin']; ?></td>
          <td class="px-6 py-4"><?php echo $row['durasi_izin_hari']; ?></td>
          <td class="px-6 py-4"><?php echo $row['putusan']; ?></td>
          <td class="px-6 py-4"><?php echo $row['surat_keterangan']; ?></td>
        </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
  <div class="btn-container mt-3 floatleft">
<a href="./index.php" class="btn btn-danger mt-3 ms-5">Kembali ke menu</a>
</div>
</div>
</body>
</html>
