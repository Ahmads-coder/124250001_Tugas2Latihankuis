<?php
    session_start();
    if (!isset($_SESSION['registered']) || $_SESSION['registered'] !== true) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Komunitas Kucing</title>
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
        <a class="nav-link" href="login.php">login</a>
        <a class="nav-link active" href="design.php">design</a>
      </div>
    </div>
  </div>
</nav>

    <div class="design-page">
        <div class="design-container text-center">
            <h1 class="design-title fw-bold fst-italic">Design Laboratory</h1>
            <p class="image-effects fw-bold">Image Effects</p>
            
            <div class="text-center">
                <img src="jenis-jenis-kucing-peliharaan-4_43.jpeg" 
                     alt="Kucing Design Laboratory" 
                     class="cat-image">
            </div>
        </div>
    </div>
</body>
</html>
</html>