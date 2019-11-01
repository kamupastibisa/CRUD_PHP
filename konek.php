<?php 
require 'function.php';
$siswa = query("SELECT * FROM siswa");
   
?>

<html>
    <head>
        <title>koneksi database</title>
    </head>
    <body>
    <h1 align="center">Daftar siswa</h1>

    <a href="tambah.php">Tambah Data siswa<a>
    <br><br>
        <table border="1" cellpadding="5" cellspacing="0" align="center">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1;?>
             <?php foreach ($siswa as $row):?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td> <?php   echo $row ["nama"]; ?> </td>
                <td><?php   echo $row ["kelas"];?></td>
                <td><?php   echo $row ["jurusan"];?>k</td>
            </tr>
            <?php  $i++;?>
<?php endforeach;?>
        </table>
    </body>
</html>
