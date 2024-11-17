<?php
session_start(); // Memulai sesi
session_destroy(); // Hancurkan sesi
header("Location: costumer_login.php"); // Arahkan ke halaman login
exit();
?>