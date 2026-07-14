<?php
$conn = mysqli_connect("localhost", "root", "", "ifannweekly");

function tampilData($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahData($data, $files) {
    global $conn;
    $nama    = htmlspecialchars($data["nama"]);
    $nim     = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email   = htmlspecialchars($data["email"]);
    $no_hp   = htmlspecialchars($data["no_hp"]);

    $namafoto = $files["name"];
    $tmpfoto  = $files["tmp_name"];
    $date     = date('dmY_His');
    $newnamafoto = $date . $namafoto;
    $path     = "../assets/image/" . $newnamafoto;

    if (move_uploaded_file($tmpfoto, $path)) {
        $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto) VALUES 
                  ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$newnamafoto')";
        mysqli_query($conn, $query);
    }
    return mysqli_affected_rows($conn);
}

function ubahData($data, $id) {
    global $conn;
    $nama    = htmlspecialchars($data["nama"]);
    $nim     = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email   = htmlspecialchars($data["email"]);
    $no_hp   = htmlspecialchars($data["no_hp"]);
    $foto    = $data["foto"]; 

    $query = "UPDATE mahasiswa SET 
                nama = '$nama', 
                nim = '$nim', 
                jurusan = '$jurusan', 
                email = '$email', 
                no_hp = '$no_hp', 
                foto = '$foto' 
              WHERE id = $id";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusData($id) {
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function register($data) {
    global $conn;
    $username   = stripslashes($data["username"]);
    $password   = mysqli_real_escape_string($conn, $data["password"]);
    $password1  = mysqli_real_escape_string($conn, $data["password1"]);

    if ($password !== $password1) {
        echo "<script>
                alert('Error: Password tidak sesuai!');
              </script>";
        return false;
    }

    //enkripsi password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);


    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp) VALUES 
              ('$username', '$password', '$jurusan', '$email', '$no_hp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>