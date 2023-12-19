<?php 
if(!isset($_SESSION)){
  session_start();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Healthness calculator</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/calc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-black border-bottom border-light">
        <div class="container-fluid text-light">
          <a class="navbar-brand text-light" href="./index.php"><h4>Tristan <span style="color: #93DEFF;">Calculator</span></h4></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-top">
              <a class="nav-link text-light" href="./calc.php">Kalkulator</a>
              <?php if(!isset($_SESSION['userLogin'])){ ?>
              <a class="nav-link text-light" href="./login.php">Login</a>
              <?php } else{ ?>
              <a class="nav-link text-light" href="./logout.php">Logout</a>
              <?php } ?>
              <a class="nav-link text-light" href="./konsult.php">Konsultasi</a>
            </div>
          </div>
        </div>
      </nav>
