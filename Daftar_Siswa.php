<?php include './koneksi.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    *{
        font-family: 'Poppins';
        padding-left: 10px;
        padding-right: 10px;
        
    }
    h1{
        font-family: 'Poppins';
        text-align: center;
        margin-top: 10px;
        margin-bottom: 0px;
    }
    .action a{
        color: black;
        text-decoration: none;
    }
    
</style>
</head>

<body>
    
<h1 class="fw-bold p-3 mb-2 bg-primary text-white" >DAFTAR SISWA</h1>
<p style="margin-top: 20px;"> Berikut data lengkap siswa : </p>    
<hr>

    <?php
        $sql = 'SELECT * FROM `siswa` inner join kelas on kelas.id_kelas = siswa.id_kelas ;';
        $result = mysqli_query($conn, $sql);
    ?>
    <table class="table" border="1" cellpadding="10" cellspacing="">
        <thead>
            <tr>
                <th>NISN</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>AKSI</th>

            </tr>
        </thead> 
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result) ){ ?>

            <tr>
                <td><?php echo $data ['nisn'];?></td>
                <td><?php echo $data['nis'];?></td>
                <td><?php echo $data ['nama'];?>
                <td>
                    <?php echo $data ['nama_kelas']?>
                </td>
                <td><?php echo $data ['alamat'];?>
                <td><?php echo $data ['no_telp'];?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-grid gap-2">
    <button type="button" class="btn btn-outline-primary">
        <a href="tambah-siswa.php" class="text-decoration-none text-black">Tambah Data</a>
    </button>
    </div>


</body>
</html>