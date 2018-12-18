<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['email'])){
header ("location:/loginz");
}
?>
Berhasil Login,<a href="/logout">Logout</a>

<!-- disimpan di view setelah login-->