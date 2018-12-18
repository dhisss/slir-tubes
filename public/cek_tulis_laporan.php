<?php
include "koneksi.php";
$target = "img/".basename($_FILES['foto']['name']);
$foto = $_FILES['foto']['name'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$nama_inf = $_POST['nama_inf'];
/*$tanggal = $_POST['tanggal'];*/
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$tingkat_kerusakan = $_POST['tingkat_kerusakan'];
$validasi = $_POST['validasi'];

if (empty($nama)){
echo "<script>alert('nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
if (empty($nohp)){
echo "<script>alert('no telepon belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
if (empty($email)){
echo "<script>alert('email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
if (empty($nama_inf)){
echo "<script>alert('nama infrastruktur belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
/*if (empty($tanggal)){
echo "<script>alert('tanggal belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else*/
if (empty($alamat)){
echo "<script>alert('alamat  belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
if (empty($deskripsi)){
echo "<script>alert('deskripsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($kecamatan)){
echo "<script>alert('kecamatan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($kabupaten)){
echo "<script>alert('kota/kabupaten belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if(empty($provinsi)){
echo "<script>alert('provinsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($tingkat_kerusakan)){
echo "<script>alert('tingkat kerusakan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
{

$daftar = "INSERT INTO tulis_laporan (foto,nama,nohp,email,nama_inf,tanggal,deskripsi,alamat,kecamatan,kabupaten,provinsi,tingkat_kerusakan,validasi) values ('$foto','$nama','$nohp','$email','$nama_inf','$tanggal','$deskripsi','$alamat','$kecamatan','$kabupaten','$provinsi','$tingkat_kerusakan','$validasi')";
$q = $koneksi->query($daftar);
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target)){
}else{echo "Gagal mengupload foto";}
if ($q == TRUE){
echo "<script>alert('Laporan Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=/kode_laporan'>";
}else{
echo "<script>alert('Laporan Gagal Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}
}
?>

<!-- disimpan di public -->