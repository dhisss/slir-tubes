<?php

include "koneksi.php";
session_start();
if (isset($_SESSION['email'])){
header ("location:/berhasil_login");
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Masuk</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #1c1e21">
      <div class="container">
        <a class="navbar-brand" href="/homepage">
    <img src="https://lh3.googleusercontent.com/-aj8JHSQ4bmE/XAu0Zmu0EBI/AAAAAAAAXyA/Y1eE5evuCx0xff1nb2-RfylarszgnIHkgCJoC/w530-h508-n-rw/slir.png" width="30" height="30" alt=""></a>
  <a class="navbar-brand text-warning" href="/homepage">Slir!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/homepage">Beranda <span class="sr-only">(current)</span>
      </li>
    </ul>

  </div>
</div>
</nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <div class="container" style="width: 40%">
          <div class="alert alert-warning role="alert">
  <h4 class="alert-heading">Masuk</h4>
  
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="BDPB-tab" data-toggle="tab" href="#BDPB" role="tab" aria-controls="BDPB" aria-selected="true">BDPB</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Dinas-tab" data-toggle="tab" href="#Dinas" role="tab" aria-controls="Dinas" aria-selected="false">Dinas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="BDPB" role="tabpanel" aria-labelledby="home-tab">
    
    <form method="POST" name="logins" action="cek_login2.php">

  <div class="form-group">
    <label for="email" class="float-left">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">

  </div>
  <div class="form-group">
    <label for="password" class="float-left">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">

  </div>
 <small id="emailHelp" class="form-text text-muted">Belum punya akun? <a href="/daftar">Daftar<a></small>
  <button type="submit" class="btn btn-warning" name="submit">Masuk</button>
</form>
          </div>
          </div>
        </div>
      <div class="overlay"></div>
    </header>

  </div>
  <div class="tab-pane fade" id="Dinas" role="tabpanel" aria-labelledby="profile-tab">
    
    <form method="POST" name="logins" action="cek_login2.php">

  <div class="form-group">
    <label for="email" class="float-left">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">

  </div>
  <div class="form-group">
    <label for="password" class="float-left">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">

  </div>
 <small id="emailHelp" class="form-text text-muted">Belum punya akun? <a href="/daftar">Daftar<a></small>
  <button type="submit" class="btn btn-warning" name="submit">Masuk</button>
</form>
          </div>
          </div>
        </div>
      <div class="overlay"></div>
    </header>

  </div>

</div>

  
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
