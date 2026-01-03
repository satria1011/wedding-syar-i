<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Wedding Organizer Syariah</title>

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
    color:#333;
}

/* NAVBAR */
nav{
    background:#fff;
    padding:15px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.logo{
    font-weight:600;
    color:#8c7b4a;
}

nav ul{
    list-style:none;
    display:flex;
    gap:20px;
}

nav ul li a{
    text-decoration:none;
    color:#333;
    font-size:14px;
}

/* HEADER */
.header{
    background:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
    url("gambar4.jpeg");
    background-size:cover;
    background-position:center;
    padding:70px 20px;
    text-align:center;
    color:#fff;
}

/* GALERI */
.galeri{
    padding:50px 20px;
    max-width:1100px;
    margin:auto;
}

.galeri h2{
    text-align:center;
    margin-bottom:30px;
    color:#8c7b4a;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.item{
    background:#fff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.item:hover{
    transform:translateY(-5px);
}

.item img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.item p{
    padding:12px;
    font-size:13px;
    text-align:center;
}

/* FOOTER */
footer{
    background:#333;
    color:#fff;
    text-align:center;
    padding:15px;
    font-size:13px;
    margin-top:30px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">Wedding Organizer Syariah</div>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="admin/login.php">Admin</a></li>
    </ul>
</nav>

<!-- HEADER -->
<section class="header">
    <h1>Galeri Pernikahan</h1>
    <p>Dokumentasi acara Wedding Organizer Syariah</p>
</section>

<!-- GALERI -->
<section class="galeri">
    <h2>Dokumentasi Wedding</h2>

    <div class="grid">

  <div class="item">
    <img src="gambar/gambar1.jpg" onclick="bukaGambar(this.src)">
    <p>Akad Nikah Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar2.jpg" onclick="bukaGambar(this.src)">
    <p>Pelaminan Wedding Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar3.jpg" onclick="bukaGambar(this.src)">
    <p>Dekorasi Walimah</p>
  </div>
    <div class="item">
    <img src="gambar/gambar4.jpg" onclick="bukaGambar(this.src)">
    <p>Akad Nikah Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar5.jpg" onclick="bukaGambar(this.src)">
    <p>Pelaminan Wedding Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar6.jpg" onclick="bukaGambar(this.src)">
    <p>Dekorasi Walimah</p>
  </div>
  <div class="item">
    <img src="gambar/gambar7.jpg" onclick="bukaGambar(this.src)">
    <p>Akad Nikah Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar8.jpg" onclick="bukaGambar(this.src)">
    <p>Pelaminan Wedding Syariah</p>
  </div>

  <div class="item">
    <img src="gambar/gambar9.jpg" onclick="bukaGambar(this.src)">
    <p>Dekorasi Walimah</p>
  </div>

</div>



</section>

<!-- FOOTER -->
<footer>
© 2026 Wedding Organizer Syariah • Galeri
</footer>

</body>
</html>
