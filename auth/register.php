<?php
session_start();
require "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email=? OR username=?");
    $stmt->execute([$email, $username]);

    if ($stmt->rowCount() > 0) {
        $error = "Email atau username sudah dipakai!";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare(
            "INSERT INTO users (username,email,password) VALUES (?,?,?)"
        );
        $stmt->execute([$username, $email, $hash]);

        $success = "Registrasi berhasil, silakan login. pencet tombol login di bawah :)";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>

<div class="auth-box">
    <h2>Register</h2>

    <?php 
    if(isset($error)) echo "<div class='error'>$error</div>";
    if(isset($success)) echo "<div class='success'>$success</div>";
    ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <div class="link">
        Sudah punya akun? <a href="login_from.php">Login</a>
    </div>
</div>

</body>
</html>
