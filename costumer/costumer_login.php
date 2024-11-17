<?php
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (isset($_SESSION['customer_username'])) {
    header("Location: ../aplication/home.php"); // Arahkan ke halaman dashboard jika sudah login
    exit();
}

// Inisialisasi variabel untuk menyimpan pesan kesalahan
$error = '';

// Proses form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi sederhana (ganti dengan validasi yang sesuai)
    // Di sini kita hanya menggunakan username dan password statis untuk contoh
    if ($username == 'customer' && $password == 'password') {
        $_SESSION['customer_username'] = $username; // Simpan username di sesi
        header("Location: ../aplication/home.php"); // Arahkan ke halaman dashboard
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Customer</title>
    <link rel="stylesheet" href="style.css"> <!-- Gaya CSS (opsional) -->
</head>
<body>
    <div class="login-container">
        <h2>Login Customer</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>