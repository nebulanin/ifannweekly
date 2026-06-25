<?php
require "fungsi.php";

$id = $_GET["id"];  
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mahasiswa = tampilData($query)[0];

if(isset($_POST['submit'])) {
    if(ubahData($_POST, $id) > 0) {
        echo "<script>
                alert('Data Berhasil di Ubah!');
                window.location.href='mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal di Ubah!');
                window.location.href='mahasiswa.php';
              </script>";
    }   
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td> : </td>
                <td><input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td> : </td>
                <td><input type="number" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td> : </td>
                <td><input type="text" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td> : </td>
                <td><input type="email" id="email" name="email" value="<?= $mahasiswa['email'] ?>"></td>
            </tr>
            <tr>
                <td><label for="no_hp">No. Hp</label></td>
                <td> : </td>
                <td><input type="number" id="no_hp" name="no_hp" value="<?= $mahasiswa['no_hp'] ?>"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Ubah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>