<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswa = tampilData($query); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa | Anin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-card" style="max-width: 900px;"> <h1>DATA MAHASISWA</h1>
    
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>
        <a href="mahasiswa.php">Data Mahasiswa</a>
    </nav>
    
    <hr>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; if (!empty($mahasiswa)) : foreach($mahasiswa as $mhs) : ?>
                <tr>
                    <td align="center"><?= $i ?></td>
                    <td align="center"><img src="assets/image/<?= $mhs["foto"] ?>" alt="Foto" class="profile-img"></td>
                    <td><?= htmlspecialchars($mhs["nama"]) ?></td>
                    <td><?= htmlspecialchars($mhs["nim"]) ?></td>
                    <td><?= htmlspecialchars($mhs["jurusan"]) ?></td>
                    <td align="center">
                        <a href="ubahdata.php?id=<?= $mhs["id"] ?>" class="btn-edit">Edit</a>
                        <a href="hapusdata.php?id=<?= $mhs["id"] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php $i++; endforeach; else : ?>
                <tr><td colspan='6' align='center'>Data tidak ditemukan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div style="text-align: center; margin-top: 30px;">
    <a href="logout.php" style="color: #f86b8c; text-decoration: underline; font-size: 14px;">Logout</a>
</div>

</body>
</html>