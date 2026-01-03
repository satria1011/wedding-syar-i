<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Anindya Wedding Syar'i</title>

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

/* ================= NAVBAR ================= */
nav{
    background:#fff;
    padding:14px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 3px 12px rgba(0,0,0,.08);
    position:sticky;
    top:0;
    z-index:99;
}

.nav-left{
    display:flex;
    align-items:center;
    gap:10px;
}

.nav-left img{
    height:40px;
}

.nav-left span{
    font-size:18px;
    font-weight:600;
    color:#8c7b4a;
}

nav ul{
    list-style:none;
    display:flex;
    gap:22px;
}

nav ul li a{
    text-decoration:none;
    color:#333;
    font-size:14px;
    font-weight:500;
}

/* ================= HERO ================= */
.hero{
    background:
    linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
    url("gambar beground.jpeg");
    background-size:cover;
    background-position:center;
    color:#fff;
    text-align:center;
    padding:140px 20px;
}

.hero img{
    width:90px;
    margin-bottom:18px;
}

.hero h1{
    font-size:34px;
    margin-bottom:12px;
}

.hero p{
    font-size:15px;
    margin-bottom:35px;
    opacity:.95;
}

.hero a{
    display:inline-block;
    background:#8c7b4a;
    color:#fff;
    padding:15px 36px;
    border-radius:35px;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
}

/* ================= PROFIL ================= */
.profil{
    background:#fff;
    padding:100px 20px;
}

.profil-box{
    max-width:900px;
    margin:auto;
}

.profil-header{
    text-align:center;
    margin-bottom:60px;
}

.profil-header img{
    width:80px;
    margin-bottom:15px;
}

.profil-header h2{
    color:#8c7b4a;
    font-size:28px;
    margin-bottom:8px;
}

.profil-header span{
    font-size:14px;
    color:#777;
}

.profil-box p{
    font-size:15px;
    line-height:2.1;
    color:#444;
    margin-bottom:34px;
    text-align:justify;
}

/* ================= CTA ================= */
.cta{
    background:#8c7b4a;
    color:#fff;
    text-align:center;
    padding:70px 20px;
}

.cta h2{
    font-size:26px;
    margin-bottom:10px;
}

.cta p{
    font-size:14px;
    margin-bottom:22px;
}

.cta a{
    display:inline-block;
    background:#fff;
    color:#8c7b4a;
    padding:14px 34px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
}

/* ================= FOOTER ================= */
footer{
    background:#222;
    color:#ddd;
    text-align:center;
    padding:18px;
    font-size:13px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    nav ul{
        gap:14px;
    }
    .hero h1{
        font-size:28px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-left">
        <img src="llogo.png" alt="Logo Anindya">
        <span>Anindya Wedding Syar'i</span>
    </div>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="paket.php">Paket</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="admin/login.php">Admin</a></li>
    </ul>
</nav>

<!-- HERO -->
<section class="hero">
    <img src="llogo.png" alt="Logo">
    <h1>Wedding Organizer Syariah</h1>
    <p>Mewujudkan Pernikahan Berkah Sesuai Syariat Islam</p>
    <a href="order.php">Pesan Sekarang</a>
</section>

<!-- PROFIL -->
<section class="profil">
    <div class="profil-box">

        <div class="profil-header">
            <img src="llogo.png" alt="Logo">
            <h2>Anindya Wedding Syar’i</h2>
            <span>Spesialis Pernikahan Syar’i</span>
        </div>

        <p>
            Kami adalah <strong>Wedding Organizer</strong> yang secara khusus menangani
            <strong>pernikahan syar’i</strong>.
        </p>

        <p>
            Pernikahan syar’i adalah rangkaian acara pernikahan yang
            <strong>insyaaAllah sesuai sunnah Rasulullah ﷺ</strong>,
            di mana aturan Islam diterapkan dalam seluruh prosesi,
            baik akad maupun walimah.
        </p>

        <p>
            Dalam pernikahan syar’i tidak terdapat musik.
            Musik digantikan dengan nasyid atau backsound suara alam
            agar suasana lebih khidmat dan penuh keberkahan.
        </p>

        <p>
            Kami mengupayakan tidak terjadinya ikhtilat antara tamu
            laki-laki dan perempuan dengan penggunaan sekat infishol
            sebagai ikhtiar menjaga adab dan syariat.
        </p>

        <p>
            Kami juga menyediakan tempat duduk yang memadai,
            sesuai sunnah Rasulullah ﷺ, agar tamu dapat menikmati hidangan dengan duduk.
        </p>

        <p>
            Untuk rias pengantin, tersedia sesi hapus make up dan make up ulang
            agar pengantin wanita tetap dapat menunaikan sholat tepat waktu.
        </p>

        <p>
            Kami menyediakan layanan lengkap:
            WO, attire, MUA, dekorasi, tenda, sound system, hingga catering,
            baik satuan maupun paket all service.
        </p>

        <p>
            Semua ini kami hadirkan sebagai solusi terbaik
            bagi ikhwan dan akhwat agar tidak pusing
            dalam menyelenggarakan pernikahan sesuai syariat Islam.
        </p>

    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Siap Merencanakan Pernikahan Anda?</h2>
    <p>Konsultasikan bersama Anindya Wedding Syar’i</p>
    <a href="order.php">Mulai Konsultasi</a>
</section>

<!-- FOOTER -->
<footer>
© 2026 Anindya Wedding Syar’i • Sistem Informasi Pemesanan
</footer>

</body>
</html>
