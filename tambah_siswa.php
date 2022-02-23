
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/mengukl/Styles/table.css">
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
    <!-- Panggil header -->

    <div class="all-table">  
    <!-- Konten -->
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="POST">
        <table class="table table-striped table-dark" cellpadding="5">
            <tr>
                <td>NIS :</td>
                <td><input class="form-control" type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas :</td>
                <td>
          <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
              echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
          </select>
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input class="form-control" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No. Telp :</td>
                <td><input class="form-control" type="tel" name="no"></td>
            </tr>
            <tr>
                <td colspan="2"><button class="btn btn-outline-secondary" type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
</div>

            <!-- Panggil footer -->
   
</body>
</html>
