<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body id="page-top" class="bg-dark">

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
        <a class="nav-link" href="/homepage">Beranda <span class="sr-only">(current)</span></a>
      </li>      
    </ul>

  </div>
  <a class="btn btn-warning float-right" href="/logins">Masuk</a>
</div>
</nav>


    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <div class="container" style="width: 50%">
          <div class="alert alert-warning role="alert" >
  <h4 class="alert-heading">Daftar</h4>
  <hr>

<!--pilih instansi-->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="BDPB-tab" data-toggle="tab" href="#BDPB" role="tab" aria-controls="BDPB" aria-selected="true" name="BDPB">BDPB</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Dinas-tab" data-toggle="tab" href="#Dinas" role="tab" aria-controls="Dinas" aria-selected="false" name="Dinas">Dinas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
    <form method="post" name="daftarBDPB" action="registrasi.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
  </div>
    <div class="form-group">
    <label for="nama_instansi">Nama Instansi</label>
    <input type="text" class="form-control" id="nama_instansi" placeholder="Instansi Anda" name="nama_instansi">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" name="alamat">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="region">Region</label>
    <input type="text" class="form-control" id="region" placeholder="Region Anda" name="region">
  </div>
  <div class="form-group col-md-6">
      <label for="kota">Kota</label>
      <input type="text" class="form-control" id="kota" name="kota">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="Kecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan">
    </div>
    <div class="form-group col-md-2">
      <label for="kode_pos">Kode Pos</label>
      <input type="text" class="form-control" id="kode_pos" name="kode_pos">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya menyetujui data yang saya kirimkan adalah benar!
      </label>
    </div>
  </div><a href="/loginz"><button type="submit" class="btn btn-warning">Daftar</button></a>
</form>

  </div>
  

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
    <form method="post" name="daftarDinas" action="registrasi2.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
  </div>
    <div class="form-group">
    <label for="nama_instansi">Nama Instansi</label>
    <input type="text" class="form-control" id="nama_instansi" placeholder="Instansi Anda" name="nama_instansi">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" name="alamat">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="region">Region</labl>
    <input type="text" class="form-control" id="region" placeholder="Region Anda" name="region" ">
  </div>
  <div class="form-group col-md-6">
      <label for="kota">Kota</label>
      <input type="text" class="form-control" id="kota" name="kota">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="Kecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="Kecamatan" name="kecamatan">
    </div>
    <div class="form-group col-md-2">
      <label for="kode_pos">Kode Pos</label>
      <input type="text" class="form-control" id="kode_pos" name="kode_pos">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya menyetujui data yang saya kirimkan adalah benar!
      </label>
    </div>
  </div><a href="/loginz"><button type="submit" class="btn btn-warning">Daftar</button></a>
</form>

  </div>
</div>


          </div>
          </div>
        </div>
      <div class="overlay"></div>
    </header>

    
    


    <!-- Scroll to Top Button-->
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
