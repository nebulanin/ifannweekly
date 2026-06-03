<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa | Informatika 2026</title>
</head>
<body>
    <h1>INFORMATICS STUDENT</h1>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data mahasiswa</a></td>
            </tr>
        </table>
        <br>
        <hr/>
        <h2>Data mahasiswa</h2>
        <a href="tambahdata.php">
            <button>Tambah Data</button>
        </a>
        <table border="1"cellpadding="10px">
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
        
            <tr>
                <td align="center">1</td>
                <td>Stella</td>
                <td><img src ="assets/image/stella.jpg" alt="Foto" width="60px"></td> 
                <td align= "center">13182420081</td>
                <td align= "center">Informatika</td>
                <td align= "center">anin@unimus.com</td>
                <td align= "center">08765432108</td>
                <td>
                    <a href="editdata.php"><button>edit</button></a>
                    <a href="deletedata.php"><button>Hapus</button></a>
                </td>
            </tr>

            
        </table>
        <br>
        <hr>
        <br>

        <table border="1"cellpadding="10">
            <tr>
            <th rowspan="2">1.1</th>
            <th rowspan="2">1.2</th>
            <th rowspan="2">1.3</th>
            <th colspan="3">1.4</th>
            </tr>
            <tr></tr>
            <tr>
                <td>2.1</td>
            </tr>

        </table>
        

</body>
</php>
 