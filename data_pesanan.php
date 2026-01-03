<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Pesanan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins', sans-serif;
    background:#f6f6f6;
    margin:0;
}
header{
    background:#8c7b4a;
    color:#fff;
    padding:20px;
    text-align:center;
}
.container{
    max-width:1100px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}
a{
    text-decoration:none;
    color:#8c7b4a;
    font-weight:500;
}
.empty{
    text-align:center;
    padding:40px;
    color:#777;
}
</style>
</head>

<body>

<header>
    <h1>Data Pesanan</h1>
    <p>Wedding Organizer Syariah</p>
</header>

<div class="container">
    <a href="dashboard.php">← Kembali ke Dashboard</a>

    <div class="empty">
        <h3>Belum Ada Pesanan</h3>
        <p>Data pesanan akan muncul setelah ada yang melakukan order.</p>
    </div>
</div>

</body>
</html>
