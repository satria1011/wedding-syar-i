<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paket Wedding Syariah</title>

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
    position:sticky;
    top:0;
    z-index:10;
}

.logo{
    font-size:18px;
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
    font-weight:500;
}

/* HEADER */
.header{
    background:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
    url("gambar beground.jpeg");
    background-size:cover;
    background-position:center;
    color:#fff;
    text-align:center;
    padding:90px 20px;
}

/* PAKET DETAIL */
.paket-detail{
    background:#000;
    color:#fff;
    padding:90px 20px;
    text-align:center;
}

.paket-detail h2{
    font-size:30px;
    margin-bottom:25px;
}

.subjudul{
    margin:40px 0 15px;
    font-size:16px;
    letter-spacing:1px;
    color:#d4af37;
}

.paket-list{
    list-style:none;
    max-width:600px;
    margin:0 auto 40px;
}

.paket-list li{
    font-size:15px;
    margin-bottom:10px;
}

.paket-list li::before{
    content:"✓ ";
    color:#d4af37;
}

/* HARGA */
.pilihan-harga{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:30px;
    max-width:1000px;
    margin:0 auto 40px;
}

.harga-box{
    background:#dcdcdc;
    color:#333;
    padding:30px 20px;
    border-radius:20px;
    cursor:pointer;
}

.harga-box input{display:none;}

.harga-box h3{
    color:#8c7b4a;
    margin-bottom:8px;
}

.harga-box p{
    font-size:18px;
    font-weight:600;
}

.harga-box.aktif{
    border:2px solid #8c7b4a;
    transform:scale(1.05);
}

/* BUTTON */
.btn-pesan{
    background:#8c7b4a;
    color:#fff;
    border:none;
    padding:15px 40px;
    border-radius:30px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
}

/* FOOTER */
footer{
    background:#333;
    color:#fff;
    text-align:center;
    padding:18px;
    font-size:13px;
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
        <li><a href="paket.php">Paket</a></li>
        <li><a href="order.php">Order</a></li>
    </ul>
</nav>

<!-- HEADER -->
<section class="header">
    <h1>Paket Wedding Syar’i</h1>
    <p>PAKET SILVER</p>
 <p>MUA by Dinan Amelia make up</p>
<p>Dekorasi memilih sesuai contoh yang ada</p>
<p>Pilihan FG sinesti media,edpic photo</p>

<p>
    PAKET GOLD
</P>
<p>MUA putri margareth</p>
<p>Pilihan dekorasi bisa sesuai request
Free request 1 new gown</p>
<p>Pilihan FG kharisma galery, mimoes.memories, ing photowork</p>
<p>
    PAKET PLATINUM
</P>
<p>MUA make up by alma</p>
<p>Dekorasi sesuai request dengan bunga mix flowers</p>
<p>Free request new gown</p>
<p>Pilihan FG vicolo fotography, ali aldo</p>
</section>

<!-- ================== PAKET KHADIJAH ================== -->
<section class="paket-detail">
<h2>Paket KHADIJAH</h2>

<ul class="paket-list">
    <li>Make up pengantin</li>
    <li>Hijab do syar’i</li>
    <li>Accessories kepala modern</li>
    <li>Sepasang baju pengantin syar’i</li>
    <li>Sepasang sepatu pengantin</li>
    <li>Ronce melati fresh</li>
</ul>

<div class="pilihan-harga">
    <label class="harga-box">
        <input type="radio" name="khadijah" value="Silver" data-harga="1500000" checked>
        <h3>Silver</h3><p>Rp 1.500.000</p>
    </label>

    <label class="harga-box aktif">
        <input type="radio" name="khadijah" value="Gold" data-harga="2500000">
        <h3>Gold</h3><p>Rp 2.500.000</p>
    </label>

    <label class="harga-box">
        <input type="radio" name="khadijah" value="Platinum" data-harga="3500000">
        <h3>Platinum</h3><p>Rp 3.500.000</p>
    </label>
</div>

<button class="btn-pesan" onclick="pesanWA('Paket KHADIJAH','khadijah')">
    Pesan via WhatsApp
</button>
</section>

<!-- ================== PAKET AISYAH ================== -->
<section class="paket-detail">
<h2>Paket AISYAH</h2>

<ul class="paket-list">
    <li>Make up pengantin</li>
    <li>Hijab do syar’i</li>
    <li>Accessories kepala elegan</li>
    <li>Sepasang baju pengantin syar’i</li>
    <li>Sepasang sepatu pengantin</li>
    <li>Sepasang ronce melati fresh</li>
</ul>

<h4 class="subjudul">DEKORASI</h4>
<ul class="paket-list">
    <li>Dekorasi max 3,5 meter</li>
    <li>Ditempatkan di dalam rumah / teras</li>
    <li>Meja akad dan alas duduk</li>
    <li>Buket bunga artificial premium</li>
</ul>

<h4 class="subjudul">DOKUMENTASI</h4>
<ul class="paket-list">
    <li>Unlimited foto selama 5 jam</li>
</ul>

<div class="pilihan-harga">
    <label class="harga-box">
        <input type="radio" name="aisyah" value="Silver" data-harga="3000000" checked>
        <h3>Silver</h3><p>Rp 3.000.000</p>
    </label>

    <label class="harga-box aktif">
        <input type="radio" name="aisyah" value="Gold" data-harga="4500000">
        <h3>Gold</h3><p>Rp 4.500.000</p>
    </label>

    <label class="harga-box">
        <input type="radio" name="aisyah" value="Platinum" data-harga="6000000">
        <h3>Platinum</h3><p>Rp 6.000.000</p>
    </label>
</div>

<button class="btn-pesan" onclick="pesanWA('Paket AISYAH','aisyah')">
    Pesan via WhatsApp
</button>
</section>
<section class="paket-detail">
    <h2>Paket FATIMAH</h2>

    <ul class="paket-list">
        <li>Make up pengantin 2x</li>
        <li>Sesi hapus make up & make up ulang</li>
        <li>Hijab do syar’i 2 look</li>
        <li>Accessories kepala modern</li>
        <li>Sepasang baju akad syar’i</li>
        <li>Sepasang baju resepsi syar’i</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Sepasang ronce melati fresh</li>
    </ul>

    <h4 class="subjudul">DEKORASI</h4>
    <ul class="paket-list">
        <li>Dekorasi max 3,5 meter</li>
        <li>Ditempatkan di dalam rumah / teras</li>
        <li>Meja akad dan alas duduk lesehan</li>
        <li>Buket bunga artificial premium</li>
    </ul>

    <h4 class="subjudul">DOKUMENTASI</h4>
    <ul class="paket-list">
        <li>Unlimited foto selama 8 jam</li>
        <li>File foto diterima dalam bentuk flashdisk</li>
    </ul>
    <!-- PILIHAN HARGA -->
<div class="pilihan-harga">

    <label class="harga-box">
        <input type="radio" name="fatimah" value="Silver" data-harga="4750000" checked>
        <h4>Paket Silver</h4>
        <p>Rp 4.750.000</p>
    </label>

    <label class="harga-box aktif">
        <input type="radio" name="fatimah" value="Gold" data-harga="6000000">
        <h4>Paket Gold</h4>
        <p>Rp 6.000.000</p>
    </label>

    <label class="harga-box">
        <input type="radio" name="fatimah" value="Platinum" data-harga="8500000">
        <h4>Paket Platinum</h4>
        <p>Rp 8.500.000</p>
    </label>

</div>

<!-- SATU TOMBOL PESAN -->
<div style="text-align:center;">
    <button class="btn-pesan"
        onclick="pesanWA('Paket FATIMAH','fatimah')">
        Pesan via WhatsApp
    </button>
</div>
</section>
<section class="paket-detail">
    <h2>Paket SALAMAH</h2>

    <ul class="paket-list">
        <li>Make up pengantin 2x</li>
        <li>Sesi hapus make up & make up ulang</li>
        <li>Hijab do syar’i 3 look</li>
        <li>Accessories kepala modern</li>
        <li>Sepasang baju akad syar’i</li>
        <li>2 pasang baju resepsi syar’i</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Sepasang ronce melati fresh</li>
    </ul>

    <h4 class="subjudul">DEKORASI</h4>
    <ul class="paket-list">
        <li>Dekorasi max 3,5 meter</li>
        <li>Ditempatkan di dalam rumah / teras</li>
        <li>Meja akad dan alas duduk lesehan</li>
        <li>Buket bunga artificial premium</li>
    </ul>

    <h4 class="subjudul">DOKUMENTASI</h4>
    <ul class="paket-list">
        <li>Unlimited foto selama 8 jam</li>
        <li>File diterima dalam bentuk flashdisk</li>
    </ul>

    <!-- PILIHAN HARGA -->
    <div class="pilihan-harga">

        <label class="harga-box">
            <input type="radio" name="salamah" value="Silver" data-harga="5500000" checked>
            <h4>Paket Silver</h4>
            <p>Rp 5.500.000</p>
        </label>

        <label class="harga-box aktif">
            <input type="radio" name="salamah" value="Gold" data-harga="7000000">
            <h4>Paket Gold</h4>
            <p>Rp 7.000.000</p>
        </label>

        <label class="harga-box">
            <input type="radio" name="salamah" value="Platinum" data-harga="9000000">
            <h4>Paket Platinum</h4>
            <p>Rp 9.000.000</p>
        </label>

    </div>

    <!-- SATU TOMBOL PESAN -->
    <div style="text-align:center;">
        <button class="btn-pesan"
            onclick="pesanWA('Paket SALAMAH','salamah')">
            Pesan via WhatsApp
        </button>
    </div>
</section>
<section class="paket-detail">
    <h2>Paket HAFSHAH</h2>

    <ul class="paket-list">
        <li>Make up pengantin 2x</li>
        <li>Sesi hapus make up & make up ulang</li>
        <li>Hijab do syar’i 2 look</li>
        <li>Accessories kepala modern</li>
        <li>Sepasang baju akad syar’i</li>
        <li>Sepasang baju resepsi syar’i</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Sepasang ronce melati fresh</li>
    </ul>

    <h4 class="subjudul">DEKORASI</h4>
    <ul class="paket-list">
        <li>Dekorasi max 4 meter</li>
        <li>Panggung 4 m x 2,5 m</li>
        <li>Ditempatkan di dalam rumah / teras</li>
        <li>Meja akad dan kursi akad tiffany</li>
        <li>Buket bunga artificial premium</li>
    </ul>

    <h4 class="subjudul">DOKUMENTASI</h4>
    <ul class="paket-list">
        <li>Unlimited foto selama acara (full day)</li>
        <li>File foto diterima dalam bentuk flashdisk</li>
    </ul>

    <!-- PILIHAN HARGA -->
    <div class="pilihan-harga">

        <label class="harga-box">
            <input type="radio" name="hafshah" value="Silver" data-harga="6000000" checked>
            <h4>Paket Silver</h4>
            <p>Rp 6.000.000</p>
        </label>

        <label class="harga-box aktif">
            <input type="radio" name="hafshah" value="Gold" data-harga="8000000">
            <h4>Paket Gold</h4>
            <p>Rp 8.000.000</p>
        </label>

        <label class="harga-box">
            <input type="radio" name="hafshah" value="Platinum" data-harga="10000000">
            <h4>Paket Platinum</h4>
            <p>Rp 10.000.000</p>
        </label>

    </div>

    <!-- TOMBOL PESAN -->
    <div style="text-align:center;">
        <button class="btn-pesan"
            onclick="pesanWA('Paket HAFSHAH','hafshah')">
            Pesan via WhatsApp
        </button>
    </div>
</section>
<section class="paket-detail">
    <h2>Paket SHOFIYAH</h2>

    <ul class="paket-list">
        <li>Make up pengantin 2x</li>
        <li>Sesi hapus make up & make up ulang</li>
        <li>Hijab do syar’i 3 look</li>
        <li>Accessories kepala modern</li>
        <li>Sepasang baju akad syar’i</li>
        <li>2 pasang baju resepsi syar’i</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Sepasang ronce melati fresh</li>
    </ul>

    <h4 class="subjudul">DEKORASI</h4>
    <ul class="paket-list">
        <li>Dekorasi max 4 meter</li>
        <li>Panggung 4 m x 2,5 m</li>
        <li>Ditempatkan di dalam rumah / teras</li>
        <li>Meja akad dan kursi akad tiffany</li>
        <li>Buket bunga artificial premium</li>
    </ul>

    <h4 class="subjudul">DOKUMENTASI</h4>
    <ul class="paket-list">
        <li>Unlimited foto selama acara (full day)</li>
        <li>File foto diterima dalam bentuk flashdisk</li>
    </ul>

    <!-- PILIHAN HARGA -->
    <div class="pilihan-harga">

        <label class="harga-box">
            <input type="radio" name="shofiyah" value="Silver" data-harga="6750000" checked>
            <h4>Paket Silver</h4>
            <p>Rp 6.750.000</p>
        </label>

        <label class="harga-box aktif">
            <input type="radio" name="shofiyah" value="Gold" data-harga="8750000">
            <h4>Paket Gold</h4>
            <p>Rp 8.750.000</p>
        </label>

        <label class="harga-box">
            <input type="radio" name="shofiyah" value="Platinum" data-harga="10750000">
            <h4>Paket Platinum</h4>
            <p>Rp 10.750.000</p>
        </label>

    </div>

    <!-- TOMBOL PESAN -->
    <div style="text-align:center;">
        <button class="btn-pesan"
            onclick="pesanWA('Paket SHOFIYAH','shofiyah')">
            Pesan via WhatsApp
        </button>
    </div>
</section>
<section class="paket-detail">
    <h2>Paket ASMA'</h2>

    <ul class="paket-list">
        <li>Make up pengantin 2x</li>
        <li>Sesi hapus make up & make up ulang</li>
        <li>Hijab do syar’i 3 look</li>
        <li>Accessories kepala modern</li>
        <li>Sepasang baju akad syar’i</li>
        <li>2 pasang baju resepsi syar’i</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Sepasang ronce melati fresh</li>
    </ul>

    <h4 class="subjudul">DEKORASI</h4>
    <ul class="paket-list">
        <li>Dekorasi max 6 meter</li>
        <li>Panggung 6m x 2,5m</li>
        <li>Ditempatkan di dalam rumah / teras</li>
        <li>Meja akad dan kursi akad tiffany</li>
        <li>Buket bunga artificial premium</li>
    </ul>

    <h4 class="subjudul">DOKUMENTASI</h4>
    <ul class="paket-list">
        <li>Unlimited foto selama acara (full day)</li>
        <li>Terima file saja dalam bentuk flashdisk</li>
    </ul>

    <!-- PILIHAN HARGA -->
    <div class="pilihan-harga">
        <label class="harga-box">
            <input type="radio" name="asma" value="Silver - Rp 7.500.000" checked>
            <h3>Paket Silver</h3>
            <p>Rp 7.500.000</p>
        </label>

        <label class="harga-box aktif">
            <input type="radio" name="asma" value="Gold - Rp 9.500.000">
            <h3>Paket Gold</h3>
            <p>Rp 9.500.000</p>
        </label>

        <label class="harga-box">
            <input type="radio" name="asma" value="Platinum - Rp 11.500.000">
            <h3>Paket Platinum</h3>
            <p>Rp 11.500.000</p>
        </label>
    </div>

    <!-- 1 TOMBOL PESAN -->
    <button class="btn-pesan"
        onclick="pesanWA('Paket ASMA','asma')">
        Pesan via WhatsApp
    </button>
</section>
<section class="paket-detail">
    <h2>Paket WEDDING GEDUNG</h2>

    <ul class="paket-list">
        <li>Make up pengantin syar’i</li>
        <li>Make up & baju orang tua</li>
        <li>Make up & baju 6 penerima</li>
        <li>Dekorasi 8–10 meter mix flower</li>
        <li>Sepasang baju pengantin</li>
        <li>Sepasang sepatu pengantin</li>
        <li>Dekorasi lorong jalan</li>
        <li>Meja akad dan kursi akad tiffany</li>
        <li>Foto unlimited + cetak</li>
        <li>Video cinematic</li>
        <li>MC acara</li>
        <li>WO hari H (8 crew)</li>
        <li>Free sekat infishol</li>
    </ul>

    <!-- PILIHAN HARGA -->
    <div class="pilihan-harga">
        <label class="harga-box">
            <input type="radio" name="gedung" value="Silver - Rp 22.000.000" checked>
            <h3>Paket Silver</h3>
            <p>Rp 22.000.000</p>
        </label>

        <label class="harga-box aktif">
            <input type="radio" name="gedung" value="Gold - Rp 25.000.000">
            <h3>Paket Gold</h3>
            <p>Rp 25.000.000</p>
        </label>

        <label class="harga-box">
            <input type="radio" name="gedung" value="Platinum - Rp 28.000.000">
            <h3>Paket Platinum</h3>
            <p>Rp 28.000.000</p>
        </label>
    </div>

    <!-- 1 TOMBOL PESAN -->
    <button class="btn-pesan"
        onclick="pesanWA('Paket WEDDING GEDUNG','gedung')">
        Pesan via WhatsApp
    </button>
</section>
<!-- PAKET AKAD ONLY -->
<section class="paket-detail">
    <h2>Wedding Organizer Akad Only</h2>

    <ul class="paket-list">
        <li>Konsultasi wedding syar’i</li>
        <li>Rundown acara akad</li>
        <li>Pendampingan loading H-1</li>
        <li>MC akad</li>
        <li>4 Crew standby hari H</li>
        <li>1x survey lokasi</li>
        <li>1x final meeting</li>
    </ul>

    <!-- HARGA -->
    <div class="pilihan-harga" style="max-width:400px;">
        <label class="harga-box">
            <input type="radio" name="akad" value=" Rp 3.000.000" checked>
          
            <p>Rp 3.000.000</p>
        </label>
    </div>

    <!-- 1 TOMBOL PESAN -->
    <button class="btn-pesan"
        onclick="pesanWA('Wedding Organizer Akad Only','akad')">
        Pesan via WhatsApp
    </button>
</section>
<!-- PAKET AKAD & RESEPSI -->
<section class="paket-detail">
    <h2>Wedding Organizer Akad & Resepsi</h2>
    <p style="margin-bottom:25px; font-size:14px; opacity:.9;">
        Maksimal 350 Undangan
    </p>

    <ul class="paket-list">
        <li>Konsultasi wedding syar’i</li>
        <li>Rundown acara</li>
        <li>Pendampingan loading H-1</li>
        <li>MC akad & resepsi</li>
        <li>Buku panduan acara</li>
        <li>6 pcs doorprize games</li>
        <li>6 Crew standby hari H</li>
        <li>1x survey lokasi</li>
        <li>1x meeting keluarga</li>
        <li>1x meeting seluruh vendor</li>
    </ul>

    <!-- CATATAN TAMBAHAN -->
    <p style="font-size:13px; margin:25px 0; opacity:.85;">
        <em>
            * Kelipatan setiap 100 undangan dikenakan tambahan 1 crew  
            dengan biaya Rp 300.000
        </em>
    </p>

    <!-- HARGA -->
    <div class="pilihan-harga" style="max-width:400px;">
        <label class="harga-box">
            <input type="radio" name="akad_resepsi" value="Rp 4.500.000" checked>
            <p>Rp 4.500.000</p>
        </label>
    </div>

    <!-- TOMBOL PESAN -->
    <button class="btn-pesan"
        onclick="pesanWA('Wedding Organizer Akad & Resepsi (Max 350 Undangan)','akad_resepsi')">
        Pesan via WhatsApp
    </button>
</section>




<!-- FOOTER -->
<footer>
© 2026 Wedding Organizer Syariah • Sistem Informasi Pemesanan
</footer>

<!-- JAVASCRIPT FINAL -->
<script>
function pesanWA(namaPaket, groupRadio){
    const pilihan = document.querySelector(
        'input[name="'+groupRadio+'"]:checked'
    );

    if(!pilihan){
        alert("Silakan pilih paket terlebih dahulu");
        return;
    }

    const level = pilihan.value;
    const harga = pilihan.dataset.harga;

    const pesan =
`Assalamu’alaikum,
Saya ingin memesan:

${namaPaket}
Level: ${level}
Harga: Rp ${parseInt(harga).toLocaleString("id-ID")}

Mohon info selanjutnya.`;

    const noWA = "6285745692140"; // GANTI NOMOR WA
    window.open(
        "https://wa.me/" + noWA + "?text=" + encodeURIComponent(pesan),
        "_blank"
    );
}
</script>

</body>
</html>
