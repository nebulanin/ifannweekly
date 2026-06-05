<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form>
        <table cellpadding="5px">
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td> : </td>
                <td><input type="text" id="nama" name="nama" require></td>
            </tr>

            <tr>
                <td>
                    <label for="nim">NIM</label>
                </td>
                <td> : </td>
                <td><input type="number" id="nim" name="nim" require></td>
            </tr>

            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td> : </td>
                <td><input type="text" id="jurusan" name="jurusan" require></td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td> : </td>
                <td><input type="email" id="email" name="email"></td>
            </tr>

            <tr>
                <td>
                    <label for="nohp">No. Hp</label>
                </td>
                <td> : </td>
                <td><input type="number" id="nohp" name="no_hp"></td>
            </tr>

            tr>
                <td>
                    <label for="foto">Foto</label>
                </td>
                <td> : </td>
                <td><input type="text" id="foto" name="foto"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <hr>

    <from> 
        <h2>Tambah Data Mahasiswa</h2>
        <table cellpadding="5px">
        <tr>
             <td>
                <label for="nama">Nama</label></td>
            <td> : </td>
            <td><input type="text" id="nama" name="nama"></td>
        </tr>

        <tr>
            <td>
                <label for="NIM">NIM</label>
            </td>
            <td> : </td>
            <td><input type="number" name="NIM" id="NIM"></td>
        </tr>

        <tr>
            <td>
                <label for="Password">Password</label>
            </td>
            <td> : </td>
            <td><input type="password" name="Password" id="Password"></td>
        </tr>

        <tr>
            <td>
                <label for="Email">Email</label>
            </td>
            <td> : </td>
            <td><input type="email" name="Email" id="Email"></td>
        </tr>

        <tr>
            <td>
                <label for="NoHp">No Hp</label>
            </td>
            <td> : </td>
            <td><input type="tel" name="NoHp" id="NoHp"></td>
        </tr>

        <tr>
            <td>
                <label for="Website">Website Pribadi</label>
            </td>
            <td> : </td>
            <td><input type="url" name="Website" id="Website"></td>
        </tr>

        <tr>
            <td>
                <label for="Tanggal Lahir">Tanggal Lahir</label>
            </td>
            <td> : </td>
            <td><input type="date" name="Tanggal Lahir" id="Tanggal Lahir"></td>
        </tr>

        <tr>
            <td>
                <label for="Warna Favorit">Warna Favorit</label>
            </td>
            <td> : </td>
            <td><input type="color" name="Warna Favorit" id="Warna Favorit"></td>
        </tr>

        <tr>
            <td>
                <label for="Tingkat Kepuasan">Tingkat Kepuasan</label>
            </td>
            <td> : </td>
            <td><input type="text" name="Tingkat Kepuasan" id="Tingkat Kepuasan"></td>
        </tr>

        <tr>
            <td>
                <label for="Jenis Kelamin">Jenis Kelamin</label>
            </td>
            <td> : </td>
            <td><input type="radio" name="Jenis Kelamin" id="Jenis Kelamin">Perempuan</td>
            <td><input type="radio" name="Jenis Kelamin" id="Jenis Kelamin">Laki Laki</td>
        </tr>

        <tr>
            <td>
                <label for="Hobi">Hobi</label>
            </td>
            <td> : </td>
            <td><input type="radio" name="Hobu" id="Hobi">Baking</td>
            <td><input type="radio" name="Hobi" id="Hobi">Reading</td>
            <td><input type="radio" name="Hobi" id="Hobi">Watching</td>
        </tr>

        <tr>
            <td>
                <label for="Upload Foto">Upload Foto</label>
            </td>
            <td> : </td>
            <td><input type="file" name="Upload Foto" id="Upload Foto"></td>
        </tr>

        <tr>
            <td>
                <label for="Alamat">Alamat</label>
            </td>
            <td> : </td>
            <td><input type="text area" name="Alamat" id="Alamat"></td>
        </tr>

        <tr>
            <td>
                <label for="Jurusan">Jurusan</label>
            </td>
            <td> : </td>
            <td><input type="Select Option" name="Jurusan" id="Jurusan"></td>
        </tr>

        <tr>
            <td colspan="3">
                <button type="submit" name="submit">Tambah</button>
            </td>
        </tr>

        </table>
    </from>
</body>
</php>