<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Wedding Organizer Syariah</title>

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
    padding:15px 20px;
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
    gap:15px;
}

nav ul li a{
    text-decoration:none;
    color:#333;
    font-size:14px;
    font-weight:500;
}

/* MENU KEMBALI */
.menu-kembali{
    max-width:500px;
    margin:15px auto 0;
    padding:0 20px;
}

.menu-kembali a{
    text-decoration:none;
    color:#8c7b4a;
    font-size:14px;
    font-weight:500;
}

/* HEADER */
.header{
    background:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
    url("gambar4.jpeg");
    background-size:cover;
    background-position:center;
    color:#fff;
    padding:70px 20px;
    text-align:center;
}

/* FORM */
.form-section{
    display:flex;
    justify-content:center;
    margin-top:-40px;
    padding:20px;
}

.form-box{
    background:#fff;
    width:100%;
    max-width:500px;
    padding:30px;
    border-radius:18px;
    box-shadow:0 12px 35px rgba(0,0,0,.15);
}

.form-box h2{
    text-align:center;
    margin-bottom:20px;
    color:#8c7b4a;
}

label{
    font-size:13px;
    display:block;
    margin-bottom:6px;
}

input, select, textarea{
    width:100%;
    padding:12px;
    border-radius:12px;
    border:1px solid #ddd;
    margin-bottom:16px;
    font-size:14px;
}

textarea{
    resize:none;
    height:90px;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:30px;
    background:#8c7b4a;
    color:#fff;
    font-size:15px;
    cursor:pointer;
}

/* FOOTER */
footer{
    margin-top:30px;
    background:#8c7b4a;
    color:#fff;
    text-align:center;
    padding:15px;
    font-size:13px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">Wedding Syariah</div>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="order.php">Order</a></li>
    </ul>
</nav>

<!-- MENU KEMBALI -->
<div class="menu-kembali">
    <a href="index.php">← Kembali ke Beranda</a>
</div>

<!-- HEADER -->
<section class="header">
    <h1>Form Pemesanan Wedding</h1>
    <p>Isi data untuk konsultasi & pemesanan</p>
</section>

<!-- FORM -->
<section class="form-section">
<div class="form-box">

<h2>Data Pemesanan</h2>

<form action="simpan_pesanan.php" method="POST">

    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Nama Anda" required>

    <label>Nomor WhatsApp</label>
    <input type="text" name="wa" placeholder="08xxxxxxxxxx" required>

    <label>Tanggal Akad</label>
    <input type="date" name="tanggal" required>

    <label>Pilih Paket</label>
    <select name="paket" required>
        <option value="">-- Pilih Paket --</option>

        <optgroup label="Paket Khadijah">
            <option value="Silver Khadijah">Silver Khadijah</option>
            <option value="Gold Khadijah">Gold Khadijah</option>
            <option value="Platinum Khadijah">Platinum Khadijah</option>
        </optgroup>

        <optgroup label="Paket Aisyah">
            <option value="Silver Aisyah">Silver Aisyah</option>
            <option value="Gold Aisyah">Gold Aisyah</option>
            <option value="Platinum Aisyah">Platinum Aisyah</option>
        </optgroup>

        <optgroup label="Paket Fatimah">
            <option value="Silver Fatimah">Silver Fatimah</option>
            <option value="Gold Fatimah">Gold Fatimah</option>
            <option value="Platinum Fatimah">Platinum Fatimah</option>
        </optgroup>

        <optgroup label="Paket Salamah">
            <option value="Silver Salamah">Silver Salamah</option>
            <option value="Gold Salamah">Gold Salamah</option>
            <option value="Platinum Salamah">Platinum Salamah</option>
        </optgroup>
         <optgroup label="Paket Salamah">
            <option value="Silver Salamah">Silver Salamah</option>
            <option value="Gold Salamah">Gold Hafshah</option>
            <option value="Platinum Salamah">Platinum Hafshah</option>
        </optgroup>

        <optgroup label="Paket shofiyah">
            <option value="Silver shofiyah">Silver shofiyah</option>
            <option value="Gold shofiyah">Gold shofiyah</option>
            <option value="Platinum shofiyah">Platinum shofiyah</option>
        </optgroup>

        <optgroup label="Paket Asma'">
            <option value="Silver Asma'">Silver Asma'</option>
            <option value="Gold Asma'">Gold Asma'</option>
            <option value="Platinum Asma'">Platinum Asma'</option>
        </optgroup>

        <optgroup label="Wedding Gedung">
            <option value="Silver Wedding Gedung">Silver Wedding Gedung</option>
            <option value="Gold Wedding Gedung">Gold Wedding Gedung</option>
            <option value="Platinum Wedding Gedung">Platinum Wedding Gedung</option>
        </optgroup>
    </select>

    <label>Catatan Tambahan</label>
    <textarea name="catatan" placeholder="Lokasi, tema, atau permintaan khusus"></textarea>

    <button type="submit">Kirim Pesanan via WhatsApp</button>

</form>

</div>
</section>

<footer>
© 2026 Wedding Organizer Syariah
</footer>

</body>
</html>
