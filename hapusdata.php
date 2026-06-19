<?php

require "fungsi.php";

$id = $_GET["id"];

// Periksa apakah fungsi mengembalikan nilai lebih dari 0 (berhasil)
if (hapusdata($id) > 0) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            window.location.href = 'mahasiswa.php';
          </script>";
} else {
    // Jika tidak ada baris yang terhapus
    echo "<script>
            alert('Data Gagal Dihapus!');
            window.location.href = 'mahasiswa.php';
          </script>";
}

?>