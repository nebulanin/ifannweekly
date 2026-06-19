<?php
// 1. Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "ifannweekly");

// 2. Fungsi untuk menampilkan data
function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    
    // Inisialisasi array kosong agar tidak error jika data kosong
    $rows = []; 
    
    // Menampung hasil query ke dalam array
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// 3. Fungsi untuk menambah data
function tambahdata($data)
{
    // WAJIB: Global agar variabel $koneksi terbaca di dalam fungsi
    global $koneksi; 

    // Mengamankan input dari user
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    // Query SQL
    $query = "INSERT INTO mahasiswa 
              (nama, nim, jurusan, email, no_hp, foto) 
              VALUES 
              ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";

    // Eksekusi query
    mysqli_query($koneksi, $query);
    
    // Mengembalikan jumlah baris yang berhasil ditambah (untuk cek di file php utama)
    return mysqli_affected_rows($koneksi);
}

// 4. Fungsi untuk menghapus data
function hapusdata($id)
{
    global $koneksi;
    $query = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($koneksi, $query);
    
    // Mengembalikan jumlah baris yang berhasil dihapus
    return mysqli_affected_rows($koneksi);
}
?>