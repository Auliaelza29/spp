<!DOCTYPE html>
<html lang="en">
  
    <head>
        <title>SPP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
     </head>
     <body>
       
         <h3>Tampil Siswa  |  <a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a></h3>
         <table class="table table-hover table-striped">
           <thead>
             <tr>
               <th>Nisn</th>
               <th>Nis</th>
               <th>Nama</th>
               <th>Id Kelas</th>
               <th>Alamat</th>
               <th>No Telp</th>
               <th>Aksi</th>
             </tr>
            </thead>
            <tbody>
              <?php 
              include "koneksi.php";
              $qry_siswa=mysqli_query($conn,"select * from siswa");
              $no=0;
              while($data_siswa=mysqli_fetch_array($qry_siswa)){
                $no++;?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$data_siswa['nis']?></td>
                  <td><?=$data_siswa['nama']?></td>
                  <td><?=$data_siswa['id_kelas']?></td>
                  <td><?=$data_siswa['alamat']?></td>
                  <td><?=$data_siswa['no_telp']?></td>
                  <td><a href="edit_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">Ubah</a> | <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
              </table>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          </body>    
          </html>