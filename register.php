<?php
require 'fungsi.php';

if(isset($_POST["register"])) {
    $username = strtolower(stripslashes($_POST["username"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // Perbaikan: Menambahkan pengecekan apakah username sudah ada
    $cek_user = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_num_rows($cek_user) > 0) {
        echo "<script>alert('Username sudah terdaftar!');</script>";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $query);
        echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Anin</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9; }
        .box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); width: 300px; text-align: center; }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 95%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
<div class="box">
    <h2>Register</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
</div>
</body>
</html>