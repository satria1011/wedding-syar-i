<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// akun admin
if($username == "admin" && $password == "admin123"){
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
} else {
    echo "<script>
        alert('Username atau Password salah!');
        window.location='login.php';
    </script>";
}
