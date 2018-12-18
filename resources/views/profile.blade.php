<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Profil</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom styles for this template -->

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #1c1e21">
      <div class="container">
        <a class="navbar-brand text-warning" href="/dashboard">
    <img src="https://lh3.googleusercontent.com/-aj8JHSQ4bmE/XAu0Zmu0EBI/AAAAAAAAXyA/Y1eE5evuCx0xff1nb2-RfylarszgnIHkgCJoC/w530-h508-n-rw/slir.png" width="30" height="30" alt="">  Slir!</a>
  <a class="navbar-brand text-warning" href="/dashboard"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar btn btn-warning float-right" href="profile">Selamat Datang, User<img src="user.img"></a>
</div>
</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item text-dark">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Dashboard</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                  <span data-feather="home"></span>
                  Beranda<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">
                  <span data-feather="users"></span>
                  Profile
                </a>
              </li>
              <!-- useless
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              -->
              <li class="nav-item">
                <a class="nav-link" href="/rekap">
                  <span data-feather="bar-chart-2"></span>
                  Rekap
                </a>
              </li>
              <!-- useless
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
              -->
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Laporan</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="/belumvld">
                  <span data-feather="file-text"></span>
                  Proses Validasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/sudahvld">
                  <span data-feather="file-text"></span>
                  Sudah divalidasi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tidakvld">
                  <span data-feather="file-text"></span>
                  Tidak valid
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/prosesvld">
                  <span data-feather="file-text"></span>
                  Proses Perbaikan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/selesaivld">
                  <span data-feather="file-text"></span>
                  Selesai diperbaiki
                </a>
              </li>
              <li>
                <hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/logout">
                  <span data-feather="warning"></span>
                  Keluar
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
            </div>
          </div>
<div class="row">
  <div class="col-md-6">
<div class="container" >
          <div class="alert alert-light role="alert" >
  <h4 class="alert-heading">Profil BDPB</h4>
  <hr>
  <form>
    <?php 
    include 'koneksi.php';               
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $id = mysqli_query($koneksi,"select * from registrasi where id='$id'");
      }else{
        $id = mysqli_query($koneksi,"select * from registrasi");
      } 
      while($data = mysqli_fetch_array($id)){
       
          
        
      ?>
    <div class="form-row">
    <div class="form-group col-md-6">
      <div class="card">
  <img class="card-img-top" src="" >
  <div class="card-body">
  </div>
</div>
    </div>
    <div class="form-group col-md-6">
      <label for="nama_instansi">Nama Instansi</label>
    <input type="text" class="form-control" id="nama_instansi" readonly="" value="<?php echo $data['nama_instansi'];?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" readonly="" value="<?php echo $data['email'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" readonly="" value="<?php echo $data['password'];?>" >
    </div>
  </div>
    <div class="form-group">
    <label for="region">Region</label>
      <input type="text" class="form-control" id="region" value="region" readonly="" value="<?php echo $data['region'];?>" >
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" readonly="" value="<?php echo $data['alamat'];?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kota">Kota</label>
      <input type="text" class="form-control" id="kota" name="kota" readonly="" value="<?php echo $data['kota'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="kecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan" readonly="" value="<?php echo $data['kecamatan'];?>">
    </div>
    <div class="form-group col-md-4">
      <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; }
      </style>
      <label for="kode_pos">Kode Pos</label>
      <input type="number" class="form-control" id="kode_pos" name="kode_pos" readonly="" value="<?php echo $data['kode_pos'];?>">
      
    </div>    

  </div>
  <?php  }?>
  </div>
</form>

          </div>
          </div>
<div class="col-md-6">
<div class="container">
          <div class="alert alert-light role="alert" >
  <h4 class="alert-heading">Edit Profile</h4>
  <hr>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
    <div class="form-group">
    <label for="inputAddress">Nama Instansi</label>
    <input type="text" class="form-control" id="inputNama" placeholder="Lembaga Anda">
  </div>
  <div class="form-group">
    <label for="inputAddress">Alamat</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Anda">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">Region</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Region Anda">
  </div>
  <div class="form-group col-md-6">
      <label for="inputFoto">Masukkan Foto</label>
      <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label text-left" for="inputGroupFile02">Pilih foto</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Kota</label>
      <select id="inputCity" class="form-control">
        <option selected>Pilih</option>
        <option>Sleman</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Kecamatan</label>
      <select id="inputState" class="form-control">
        <option selected>Pilih</option>
        <option>Sleman</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Kode Pos</label>
      <input type="number" class="form-control" id="inputZip">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya menyetujui data yang saya kirimkan adalah benar!
      </label>
    </div>
  </div>
  </div><button type="submit" class="btn btn-warning">Update</button>
</form>
          </div>
          </div>
</div>
</div>
          
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>