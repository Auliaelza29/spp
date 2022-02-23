<?php
if($_POST){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    if(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
 
    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($id_kelas)){
        echo "<script>alert('id_kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nis,nama, id_kelas, alamat,no_telp) value ('".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_telp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>
