<?php
//koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_a22100100');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
$row = mysqli_fetch_row($result);
var_dump($row);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nrp</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <td>1</td>
    <td><img src="img/Pranata.jpeg" width="60"></td>
    <td>A2.2100100</td>
    <td>Pranata Pramudya</td>
    <td>pranajaya52@gmail.com</td>
    <td>Teknik Informatika</td>
    <td>
      <a href="">ubah</a> | <a href="">hapus</a>
    </td>

  </table>
</body>

</html>