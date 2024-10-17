<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Ketidakhadiran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="font-family: 'poppins';" class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-2">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Anonim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <H1 class="d-flex justify-content-center align-items-center mt-3">Selamat datang </H1>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="d-flex justify-content-center gap-4">
            <div class="card" style="width: 18rem">
                <img src="img/admin.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Admin</h5>
                    <a href="./admin.php" class="btn btn-primary mt-2">Lihat data</a>
                </div>
            </div>
            <div class="card" style="width: 18rem">
                <img src="./img/pegawai.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Pegawai</h5>
                    <p class="card-text"></p>
                    <div style="position: relative;">
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lihat data
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./ada.php">Ada surat</a></li>
                        <li><a class="dropdown-item" href="./tdk_ada.php"> Tidak ada surat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>