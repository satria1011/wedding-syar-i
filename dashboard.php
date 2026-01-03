<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// CEK LOGIN
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}
body{
    background:#f6f6f6;
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
    padding:20px;
}
.card{
    background:#fff;
    padding:30px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}
.card h2{
    margin-bottom:15px;
    color:#8c7b4a;
}
.menu{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-top:25px;
}
.menu a{
    background:#8c7b4a;
    color:#fff;
    text-decoration:none;
    padding:18px;
    border-radius:16px;
    text-align:center;
    font-weight:500;
}
.menu a:hover{
    background:#75663e;
}
.logout{
    display:inline-block;
    margin-top:25px;
    text-decoration:none;
    color:#8c7b4a;
    font-weight:500;
}
</style>
</head>

<body>

<header>
    <h1>Dashboard Admin</h1>
    <p>Wedding Organizer Syariah</p>
</header>

<div class="container">
    <div class="card">
        <h2>Selamat Datang, Admin 👋</h2>
        <p>Silakan kelola data pemesanan wedding melalui menu di bawah ini.</p>

        <div class="menu">
            <a href="data_pesanan.php">📋 Data Pesanan</a>
            <a href="../order.php">➕ Tambah Pesanan</a>
            <a href="../paket.php">📦 Data Paket</a>
            <a href="../index.php">🏠 Kembali ke Website</a>
        </div>

        <a class="logout" href="logout.php">🚪 Logout</a>
    </div>
</div>

</body>
</html>
