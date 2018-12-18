<?php
include "koneksi.php";
$email = $_POST['email'];
$password = md5($_POST['password']);
$nama_instansi = $_POST['nama_instansi'];
$alamat = $_POST['alamat'];
$region = $_POST['region'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];

if (empty($email)){
echo "<script>alert('email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else
if (empty($password)){
echo "<script>alert('password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if(empty($nama_instansi)){
echo "<script>alert('nama instansi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if (empty($alamat)){
echo "<script>alert('alamat belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if (empty($region)){
echo "<script>alert('region belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if (empty($kota)){
echo "<script>alert('kota belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if (empty($kecamatan)){
echo "<script>alert('kecamatan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else 
if (empty($kode_pos)){
echo "<script>alert('kode pos belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}else
{

$daftar = "INSERT INTO registrasi (email,password,nama_instansi,alamat,region,kota,kecamatan,kode_pos) values ('$email','$password','$nama_instansi','$alamat','$region','$kota','$kecamatan','$kode_pos')";
$q = $koneksi->query($daftar);
if ($q == TRUE){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=/homepage'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=/daftar'>";
}
}
?>

<!-- disimpan di public -->