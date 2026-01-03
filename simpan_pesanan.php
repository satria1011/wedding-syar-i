<?php
// ===============================
// SIMPAN PESANAN + KIRIM WHATSAPP
// ===============================

// panggil koneksi database
include "koneksi.php";

// ambil data dari form
$nama     = $_POST['nama'] ?? '';
$wa       = $_POST['wa'] ?? '';
$tanggal  = $_POST['tanggal'] ?? '';
$paket    = $_POST['paket'] ?? '';
$catatan  = $_POST['catatan'] ?? '';

// validasi wajib
if ($nama == '' || $wa == '' || $tanggal == '' || $paket == '') {
    echo "<script>
        alert('Data wajib belum lengkap!');
        window.history.back();
    </script>";
    exit;
}

// simpan ke database
$query = mysqli_query($koneksi, "
    INSERT INTO pesanan 
    (nama, whatsapp, tanggal_akad, paket, catatan, status)
    VALUES
    ('$nama', '$wa', '$tanggal', '$paket', '$catatan', 'Menunggu')
");

// cek apakah berhasil
if ($query) {

    // format pesan WhatsApp
    $pesan = urlencode(
        "Assalamu'alaikum,\n"
        ."Saya ingin memesan Wedding Organizer Syariah:\n\n"
        ."Nama: $nama\n"
        ."WhatsApp: $wa\n"
        ."Tanggal Akad: $tanggal\n"
        ."Paket: $paket\n"
        ."Catatan: $catatan\n\n"
        ."Terima kasih."
    );

    // nomor WA tujuan (admin)
    $nomor_admin = "6285745692140";

    // redirect ke WhatsApp
    header("Location: https://wa.me/$nomor_admin?text=$pesan");
    exit;

} else {
    echo "<script>
        alert('Gagal menyimpan data!');
        window.history.back();
    </script>";
}
?>

