<?php
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['customer_username'])) {
    header("Location: costumer_login.php"); // Arahkan ke halaman login jika belum login
    exit();
}

// Jika sudah login, tampilkan halaman dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Customer</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['customer_username']; ?>!</h1>
    <p>Anda sekarang dapat menyewa barang.</p>
    <p><a href="custumer_logout.php">Logout</a></p>
</body>
</html>