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
    <title>Contact | Anin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-card">
    <h1>CONTACT ME</h1>
    
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="mahasiswa.php">Data Mahasiswa</a>
    </nav>
    
    <hr>

    <div class="contact-content">
        <h2>Get in Touch</h2>
        <p>Ada yang ingin ditanyakan atau sekadar ingin menyapa? Kamu bisa menghubungiku melalui:</p>
        
        <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 10px;">📧 <strong>Email:</strong> anindhiya@email.com</li>
            <li style="margin-bottom: 10px;">💬 <strong>Instagram:</strong> @anindhiyafr</li>
            <li>📱 <strong>LinkedIn:</strong> Anindhiya Fathia Rizqi</li>
        </ul>
    </div>
</div>

<div style="text-align: center; margin-top: 30px;">
    <a href="logout.php" style="color: #f86b8c; text-decoration: underline; font-size: 14px;">Logout</a>
</div>

</body>
</html>