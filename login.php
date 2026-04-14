<?php
session_start();
include "config.php";

if(isset($_POST['login'])){
    // Menggunakan mysqli_real_escape_string untuk keamanan tambahan
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);
    $_SESSION['nama'] = $data['nama'];
    
    // TAMBAHKAN KODE INI DI SINI
    $_SESSION['role'] = $data['role']; 
    $_SESSION['foto'] = $data['foto']; 
    
    echo "<script>alert('Login berhasil');window.location='dashboard.php';</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width:350px">
            <h3 class="text-center">Login</h3>
            <form method="POST">
                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                <button name="login" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">
                Belum punya akun? <a href="register.php">Daftar</a>
            </p>
        </div>
    </div>
</body>
</html>