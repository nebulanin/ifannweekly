<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Anin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-card">
    <h1>STUDENT PROFILE</h1>
    
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="mahasiswa.php">Data Mahasiswa</a>
    </nav>
    
    <hr>

    <div class="profile-content">
        <h2>About Me</h2>
        <p>Hai! Ini adalah halaman profil resmi saya sebagai mahasiswa Informatika di Universitas Muhammadiyah Semarang.</p>
        </div>
</div>

<div style="text-align: center; margin-top: 30px;">
    <a href="logout.php" style="color: #f86b8c; text-decoration: underline; font-size: 14px;">Logout</a>
</div>

</body>
</html>