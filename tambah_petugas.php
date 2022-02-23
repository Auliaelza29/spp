
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
    <!-- Konten -->
    <h3>Tambah Petugas</h3>
    <form action="proses_tambah_petugas.php" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" value="" class="form-control"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" value="" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama_petugas" value="" class="form-control"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level" class="form-control">
                    <option></option>
                    <option value="petugas">petugas</option>
                    <option value="admin">admin</option>
                    <option value="siswa">siswa</option>
                </select>
</td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
<hr />
            <!-- Panggil footer -->
    <?php require("footer.php"); ?>
</body>
</html>

