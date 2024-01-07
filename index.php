<?php
session_start();
if($_SESSION['status'] != "sukses") {
  header('location:logout.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
  </head>

  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
<a class="navbar-brand" href="#">
      <img src="img/ticket.png" alt="Logo" width="30" height="24" class="rounded-111">
      Ticketing
    </a>
    
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=penumpang/index">Penumpang</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=rute/index">Rute</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=petugas/index">Petugas</a>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=kereta/index">Kereta</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=pemesanan/index">Pemesanan</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=logout">Logout</a>
</li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
    <?php include "isi.php"?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>



