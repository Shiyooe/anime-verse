<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>

<div class="auth-box">
    <h2>Login</h2>

    <div id="error-message" class="error" style="display:none;"></div>

    <form id="loginForm">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="link">
        Belum punya akun? <a href="register.php">Register</a>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('backendLogin.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const errorDiv = document.getElementById('error-message');
        if (data.success) {
            window.location.href = data.redirect;
        } else {
            errorDiv.textContent = data.message;
            errorDiv.style.display = 'block';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('error-message').textContent = 'Terjadi kesalahan jaringan.';
        document.getElementById('error-message').style.display = 'block';
    });
});
</script>

</body>
</html>