<?php

include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>

<h2>Tabel Nasabah</h2>
<a href="edit.php">Kembali Pada Input</a>
<table border="2">

  <tr>
    <th>No</th>
    <th>NoRek</th>
    <th>Nama</th>
    <th>Photo</th>
  </tr>

  <?php  
    $koneksi = mysqli_connect("localhost","root","","nasabah");
    $data = mysqli_query($koneksi, "SELECT * FROM nasabah");
    $no = 1;
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['norek'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><img src="foto/<?php echo $row['photo'] ?>" width="150px" height="150px"> </td>
    <td>
    <a href="delete.php?kode=<?php echo $row['norek'] ?>">Hapus</a> - 
      <a href="edit.php?kode=<?php echo $row['norek'] ?>">Edit</a>
    </td>
  </tr>
  <?php
      $no++;
    }

  ?>
</table>

</body>
</html>
