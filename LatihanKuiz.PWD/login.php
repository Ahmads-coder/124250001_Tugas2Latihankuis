<?php
session_start();
include('koneksi.php');

if (isset($_POST['kirim'])) {
    
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $tgl_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $kelompok_umur = mysqli_real_escape_string($conn, $_POST['umur']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    
    $hobi = isset($_POST['hobi']) ? implode(',', $_POST['hobi']) : '';
    $hobi = mysqli_real_escape_string($conn, $hobi);
    
    $asal_daerah = mysqli_real_escape_string($conn, $_POST['asal_daerah']);
    $alasan = mysqli_real_escape_string($conn, $_POST['alasan']);

    // Query sesuai tabel login_kucing
    $query = "INSERT INTO login_kucing 
              (nama, tanggal_Lahir, kelompok_umur, jenis_kelamin, hobi, asal_daerah, alasan_gabung) 
              VALUES 
              ('$nama', '$tgl_lahir', '$kelompok_umur', '$jenis_kelamin', '$hobi', '$asal_daerah', '$alasan')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['registered'] = true;
        header('location: design.php');
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Komunitas Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="komunitas.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="home.php">Komunitas Kucing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link active" href="login.php">login</a>
        <a class="nav-link" href="design.php">design</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4">Pendaftaran Komunitas Kucing</h2>

    <div class="form-container">
        <form method="POST">

            <div class="form-row">
                <label>Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <label>Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <label>Kelompok Umur</label>
                <div class="col-sm-8">
                    <select name="umur" class="form-select" required>
                        <option value="">Pilih kelompok umur</option>
                        <option value="Anak-anak">Anak-anak</option>
                        <option value="Remaja">Remaja</option>
                        <option value="Dewasa">Dewasa</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <label>Jenis Kelamin</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div>
                </div>
            </div>

            <div class="form-row">
                <label>Hobi</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="hobi[]" value="Main Game"> Main Game
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="hobi[]" value="Bermain dengan kucing"> Bermain dengan kucing
                    </div>
                </div>
            </div>

            <div class="form-row">
                <label>Asal Daerah</label>
                <div class="col-sm-8">
                    <input type="text" name="asal_daerah" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <label>Alasan Ingin Bergabung</label>
                <div class="col-sm-8">
                    <textarea name="alasan" class="form-control" rows="4" required></textarea>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" name="kirim" class="btn-kirim">
                    KIRIM PENDAFTARAN
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
</html>