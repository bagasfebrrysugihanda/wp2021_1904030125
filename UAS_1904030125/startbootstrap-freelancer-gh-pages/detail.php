<?php

require 'functions.php';
$id = $_GET['id'];
$dbarang = query("SELECT * FROM dbarang WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>UAS||1904030125</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top">Bagas||SHOP</a>
      <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">HOME</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
    <div class=" col-md-10 pd-5 pt-4">
      <!-- konten -->
      <h3><i class="page-section-heading text-center text-uppercase text-white"></i>DETAIL BARANG</h3>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- List -->
      <hr>
      <ul class="list-group">
        <li class="list-group-item"><?= $dbarang['nama'];  ?></li>
        <li class="list-group-item">Harga Barang : <?= $dbarang['harga'];  ?></li>
        <li class="list-group-item">Stock : <?= $dbarang['stock'];  ?></li>
        <li class="list-group-item"><img src="image/<?= $dbarang['foto'];  ?> " alt=""width="500px"></li>
        <li class="list-group-item">
          <a href="edit.php?id=<?= $dbarang['id']; ?>" class="btn btn-warning role=" button">Edit</a>
          <a href="hapus.php?id=<?= $dbarang['id']; ?>" class="btn btn-danger role=" button">Hapus</a>
          <a href="index.php" class="btn btn-primary" role="button">Kembali</a>
        </li>
      </ul>
    </div>
  </div>
    </div>
  </header>