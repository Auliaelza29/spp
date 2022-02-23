<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "UPDATE siswa SET nis='$nis',nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telp='$no_telp' WHERE nisn=$nisn";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: tampil_siswa.php');
    }else{
        die("Gagal menyimpan perubahan");
    }
}
?>