<?php
require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswa = tampilData($query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No.HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $i = 1; 
        if (!empty($mahasiswa)) {
            foreach($mahasiswa as $mhs) { 
        ?>
            <tr>
                <td align="center"><?= $i ?></td>
                <td><?= htmlspecialchars($mhs["nama"]) ?></td>
                <td><?= htmlspecialchars($mhs["nim"]) ?></td>
                <td><?= htmlspecialchars($mhs["jurusan"]) ?></td>
                <td><?= htmlspecialchars($mhs["email"]) ?></td>
                <td><?= htmlspecialchars($mhs["no_hp"]) ?></td>
                <td align="center">
                    <img src="assets/image/<?= $mhs["foto"] ?>" alt="Foto" width="60px">
                </td> 
                <td align="center">
                    <a href="ubahdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a> | 
                    <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yaqueeeennn???');"><button>Hapus</button></a>
                </td>
            </tr>
        <?php 
            $i++; 
            } 
        } else {
            echo "<tr><td colspan='8'>Data tidak ditemukan.</td></tr>";
        }
        ?>
    </table>
</body>
</html>