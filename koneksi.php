<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "wo_syariah";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal");
}
?>
