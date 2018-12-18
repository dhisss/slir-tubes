<?php
include "koneksi.php";
if (isset($_POST['nama'])) {
$id = $_POST['id'];	
$foto = $_POST['foto'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$nama_inf = $_POST['nama_inf'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$tingkat_kerusakan = $_POST['tingkat_kerusakan'];
$validasi = $_POST['validasi'];

$sql = "UPDATE tulis_laporan SET nama = '$nama', nohp = '$nohp', email = '$email', nama_inf = '$nama_inf', deskripsi = '$deskripsi', alamat = '$alamat',kecamatan = '$kecamatan',kabupaten = '$kabupaten',provinsi = '$provinsi', tingkat_kerusakan = '$tingkat_kerusakan',validasi = '$validasi'";
$result = $koneksi->query($sql);
if ($result === TRUE) {
} else {
	echo "Update Gagal".$koneksi->error;
} 

}
$koneksi ->close();
if ($result== TRUE){
echo "<script>alert('Status Berhasil Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=/dashboard'>";
}else{
echo "<script>alert('Status Gagal Diubah')</script>";
echo "<meta http-equiv='refresh' content='1 url=/laporanadmin'>";
}

?>

<!-- disimpan di public -->