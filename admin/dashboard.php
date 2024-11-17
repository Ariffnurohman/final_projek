<?php
session_start();

// Cek apakah admin sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard Admin</h2>
        <ul>
            <li><a href="#">Dashboard Utama</a></li>
            <li><a href="#">Manajemen Pengguna</a></li>
            <li><a href="#">Manajemen Konten</a></li>
            <li><a href="#">Statistik</a></li>
            <li><a href="#">Pengaturan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Selamat datang, Admin!</h1>
        <p>Ini adalah dashboard admin.</p>
        <!-- Tambahkan konten dashboard lainnya di sini -->
    </div>
</body>
</html>