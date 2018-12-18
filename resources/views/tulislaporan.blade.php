<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tulis Laporan</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body id="page-top" style="background-color: #1c1c1c">

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
        <a class="nav-link" href="/homepage" style="color:red;"><span class="sr-only">(current)</span> Beranda</a>     
    </ul>

  </div>
</div>
</nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <div class="container" style="width: 70%">
          <div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Tulis Laporan</h4>
  <hr>
  <form method="post" enctype="multipart/form-data" action="cek_tulis_laporan.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFoto">Masukkan Foto</label>
      <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="foto" name="foto">
    <label class="custom-file-label text-left" for="foto">Pilih foto</label>
  </div>
  <div class="input-group-append">
  </div>
</div>
    </div>
    <div class="form-group col-md-6">
      <label for="nama">Nama Anda</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; }
      </style>
      <label for="nohp">No. Telepon</label>
<input type="number" name="nohp" id="nohp" class="form-control" placeholder="08xxxxxxxxxx">
    </div>
  <div class="form-group col-md-6">
      <label for="email">Email</label>
<input type="text" name="email" id="email" class="form-control" placeholder="Email">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama_inf">Nama Infrastruktur</label>
<input type="text" name="nama_inf" id="nama_inf" class="form-control" placeholder="Nama Infrastruktur">
    </div>
    <div class="form-group col-md-6">
      <label for="tanggal">Tanggal</label>
<input type="date" name="tanggal" id="tanggal" class="form-control">
    </div>
  </div>
      <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Tuliskan keterangan kerusakan infrastruktur" name="deskripsi"></textarea>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows="3" placeholder="Tuliskan Alamat infrastruktur" name="alamat"></textarea>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="kecamatan">Kecamatan</label>
      <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Kecamatan">
    </div>
  <div class="form-group col-md-6">
      <label for="kabupaten">Kota/Kabupaten</label>
      <input type="text" name="kabupaten" id="kabupaten" class="form-control" placeholder="Kota/Kabupaten">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="provinsi">Provinsi</label>
<input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Provinsi">
    </div>
    <div class="form-group col-md-6">
      <label for="tingkat_kerusakan">Tingkat Kerusakan</label>
      <select id="tingkat_kerusakan" class="form-control" name="tingkat_kerusakan">
        <option selected>Ringan</option>
        <option>Sedang</option>
        <option>Berat</option>
      </select>
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
    <!-- Button trigger modal -->
  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="/kode_laporan">
  Kirim
</button>
</form>
          </div>
          </div>
        </div>
      <div class="overlay"></div>
    </header>



<!-- Modal -->
<!-- <div class="modal fade" id="kodelaporann" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Anda Sudah terkirim</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Kode Laporan Anda</h6>
        <form>
  <div class="row">
    <div class="col">
      <output type="text" class="form-control" placeholder="First name">12345678</output>
    </div>
</form>
      </div>
      <div class="modal-footer">
        <a href="/homepage"><button type="button" class="btn btn-secondary">Ke Beranda</button></a>
        <button type="button" class="btn btn-primary">Copy</button>
      </div>
    </div>
  </div>
</div> -->

    
    


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
