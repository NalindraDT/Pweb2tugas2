<?php
require_once ('koneksi.php');

class Admin extends Database{

    public function __construct(){
        parent::__construct();
}

public function Aksi(){
    $masuk = "SELECT * from ketidakhadiran ";
    return $this->koneksi->query($masuk);
    }

}

$nale = new Admin();

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
  <body style="font-family: 'poppins';" class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-2">
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
          </ul>
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
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Admin</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
    <H3 class="d-flex justify-content-center align-items-center mt-3 mb-5">Selamat datang tabel ini merupakan tampilan dari Admin </H3>
      <table class="table" border="4">
        <thead>
          <tr>
            <th scope="col">Id Izin</th>
            <th scope="col">Nama</th>
            <th scope="col">Keperluan</th>
            <th scope="col">ID Finger print</th>
            <th scope="col">Tanggal izin</th>
            <th scope="col">Durasi Hari Izin</th>
            <th scope="col">Nama Pengusul</th>
            <th scope="col">Tanggal usul</th>
            <th scope="col">TTD pengusul</th>
            <th scope="col">Putusan</th>
            <th scope="col">Tanggal Disetujui</th>
            <th scope="col">TTD Atasan</th>
            <th scope="col">Catatan</th>
            <th scope="col">Surat Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
              $no = 1;
              foreach ($nale1 as $row) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['nama_dosen']; ?></td>
              <td><?php echo $row['keperluan']; ?></td>
              <td><?php echo $row['finger_print_id']; ?></td>
              <td><?php echo $row['tgl_mulai_izin']; ?></td>
              <td><?php echo $row['durasi_izin_hari']; ?></td>
              <td><?php echo $row['nama_pengusul']; ?></td>
              <td><?php echo $row['tgl_usul']; ?></td>
              <td><?php echo $row['ttd_pengusul']; ?></td>
              <td><?php echo $row['putusan']; ?></td>
              <td><?php echo $row['tgl_disetujui']; ?></td>
              <td><?php echo $row['ttd_atasan']; ?></td>
              <td><?php echo $row['catatan']; ?></td>
              <td><?php echo $row['surat_keterangan']; ?></td>
            </tr>
            <?php
              }
            ?>
          </tr>
        </tbody>
      </table>
      <div class="btn-container mt-3 floatleft">
        <a href="./index.php" class="btn btn-danger">Kembali ke menu</a>
      </div>
    </div>
  </body>
</html>
