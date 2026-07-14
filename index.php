<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php"); // Wajib login dulu
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Anin's Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-card">
    <h1>⋆. 𓂃۶ৎ˚࿔ COME GET TO KNOW ANIN 𝜗𝜚˚⋆</h1>
    
    <table>
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h3>Halo, aku Anin!! senang bisa berbagi tentang diriku di sini.</h3>
    <p>Nama saya Anindhiya Fathia Rizqi, mahasiswa Informatika UNIMUS 2024...</p>
    
    <h2>My Journey & Achievements</h2>
    <ul>
        <li>Baking Skills</li>
        <li>Pendamping Proses Produk Halal (PPH)</li>
        <li>Sekretaris Divisi di Himpunan Mahasiswa Informatika</li>
        <li>Professional Overthinker</li>
    </ul>
</div>

<div style="text-align: center; margin-top: 30px;">
    <a href="logout.php" style="color: #f86b8c; text-decoration: underline; font-size: 14px;">Logout dari sesi ini</a>
</div>

</body>
</html>