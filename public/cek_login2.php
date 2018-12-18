<?php
include "koneksi.php";
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/login'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/loginz'>";
}else{


$query    = "SELECT * FROM registrasi2 WHERE email = '$email' AND password = '$password'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['email'] = $email;
 header("Location: /berhasil_login");
} else {
 echo "<script>alert('Email atau Password salah')</script>";
 echo "<meta http-equiv='refresh' content='1 url=/loginz'>";

}

}

?>

<!-- disimpan di public -->