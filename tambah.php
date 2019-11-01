  <?php 
// koneksi kedatabase
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// pengecekan apakah tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {

    // ambil data dari tiap elemen dari dalam form
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    // pengambilan data

    $query = "INSERT INTO siswa
             VALUES
             ('', '$nama', '$kelas', '$jurusan')
    ";

    mysqli_query($conn , $query);
}
?>



<html>
<head>
  <title>Tambah Data siswa</title> 
</head>
  <body>
     <h1>Tambah Data Siswa</h1>
  
      <form action="" method="post">
       
         <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>

            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" required>
            </li>

            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" require> 
            </li>

            <li>
               <button type="submit" name="submit">Submit</button>
            </li>
         </ul>
  </body>
</html>