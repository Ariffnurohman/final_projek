<?php
session_start();

// Cek apakah admin sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("location: dashboard.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek username dan password (hardcoded untuk contoh)
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123") {
        $_SESSION['loggedin'] = true;
        header("location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>