<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>COME GET TO KNOW ANIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>⋆. 𓂃۶ৎ˚࿔COME GET TO KNOW ANIN 𝜗𝜚˚⋆</h1>

    <!-- Navigasi Dinamis -->
    <table cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data mahasiswa</a></td>
            
            <?php if(isset($_SESSION["login"])) : ?>
                <td><a href="logout.php">Logout</a></td>
            <?php else : ?>
                <td><a href="login.php">Login</a></td>
                <td><a href="register.php">Register</a></td>
            <?php endif; ?>
        </tr>
    </table>
    <br>

    <h3>Halo, aku Anin!! senang bisa berbagi sedikit tentang diri saya di sini.</h3>

    <p>
        Nama saya Anindhiya Fathia Rizqi, seorang mahasiswa Informatika di Universitas Muhammadiyah Semarang angkatan 2024. 
        Saat ini, saya aktif berorganisasi di Himpunan Mahasiswa Informatika sebagai sekretaris Divisi Riset dan Teknologi (Ristek), yang berfokus pada program keilmuan di bidang teknologi.
        <br><br>
        Di luar aktivitas akademik dan organisasi, saya memiliki ketertarikan pada hal-hal sederhana yang menyenangkan. 
        Saya menikmati minuman seperti matcha, susu, dan kopi. 
        Saya juga sangat menyukai dunia langit dan astronomi; menghabiskan waktu untuk memandang langit menjadi salah satu hobi yang paling saya nikmati.
        <br><br>
        Selain itu, saya suka mendengarkan musik, dan salah satu musisi favorit saya adalah One Direction. Sekilas tentang saya untuk saat ini.
        If you’d like to know more, let’s be friends 😊
    </p>

    <h2>My Journey & Achievements</h2>
    <ul>
        <li>Baking Skills</li>
        <li>Pendamping Proses Produk Halal (PPH)</li>
        <li>Sekretaris Divisi di Himpunan Mahasiswa Informatika</li>
        <li>Kemampuan Manajemen Waktu & Administrasi</li>
        <li>Teamwork & Communication Skills</li>
        <li>Basic UI/UX Design</li>
        <li>Professional Overthinker</li>
        <li>Expert in Staring at the Sky & Daydreaming</li>
    </ul>

</body>
</html>