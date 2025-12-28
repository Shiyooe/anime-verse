<?php
// Set headers
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Fungsi untuk response JSON
function sendResponse($success, $message, $redirect = null) {
    $response = ['success' => $success, 'message' => $message];
    if ($redirect) {
        $response['redirect'] = $redirect;
    }
    echo json_encode($response);
    exit;
}

// Cek metode request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Invalid request method');
}

try {
    require_once '../config/koneksi.php';
    session_start();

    // Ambil dan sanitasi input
    $identifier = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validasi input kosong
    if (empty($identifier)) {
        sendResponse(false, 'Email/username wajib diisi!');
    }
    if (empty($password)) {
        sendResponse(false, 'Password wajib diisi!');
    }

    // Check admin login bypass
    $adminGmail = 'admin@gmail.com';
    $adminPassword = 'lf.3!]hSu+^LS@u!Bj4!~^atcjDNIY';

    if ($identifier === $adminGmail && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['username'] = $adminGmail;
        $_SESSION['role'] = 'admin';
        sendResponse(true, 'Login admin berhasil', '../admin/login.php');
    }

    // Query user dari database (berdasarkan email)
    $stmt = $pdo->prepare("SELECT id, username, email, password, role FROM users WHERE email = ? LIMIT 1");
    $stmt->execute([$identifier]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Cek user existence
    if (!$user) {
        sendResponse(false, 'Akun tidak ditemukan!');
    }

    // Verifikasi password
    if (!password_verify($password, $user['password'])) {
        sendResponse(false, 'Password salah!');
    }

    // Login berhasil - set session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    // Redirect berdasarkan role
    if ($user['role'] === 'admin') {
        sendResponse(true, 'Login berhasil', '../admin/login.php');
    } else {
        sendResponse(true, 'Login berhasil', '../index.php');
    }

} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    sendResponse(false, 'Terjadi kesalahan database.');
} catch (Exception $e) {
    error_log("Login error: " . $e->getMessage());
    sendResponse(false, 'Terjadi kesalahan sistem.');
}
?>