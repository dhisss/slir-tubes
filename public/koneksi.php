<?php 
$namaServer = "localhost";
$namaPengguna = "root";
$password = "";
$nama_db = "slir";

$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);

if($koneksi->connect_error) {
	die("koneksi gagal : " .$koneksi->connect_error."<br>");
}

 ?>
 <!-- disimpan di public -->