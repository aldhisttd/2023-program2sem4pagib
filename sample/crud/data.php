<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<?php include "components/menu.php" ?>
<h2>Data Mahasiswa</h2>

<table>
  <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>HP</th>
    <th>Photo</th>
    <th>Action</th>
  </tr>
  <?php 
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['hp'] ?></td>
        <td>
          <img width="50" src="photo/<?php echo $row['photo'] ?>" alt="">
        </td>
        <td>
            <a href="edit.php?nim=<?php echo $row['nim'] ?>">Edit</a> - 
            <a href="hapus.php?nim=<?php echo $row['nim'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    }
  ?>
  
</table>

</body>
</html>

