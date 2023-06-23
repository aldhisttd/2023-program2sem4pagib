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

<center><h2>Data Surat</h2></center>

<table>
  <tr>
    <th>Kd_surat</th>
    <th>Penerima</th>
    <th>Lamp_gambar</th>
    <th>Action</th>
  </tr>
  <?php 
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM surat");

    while($row = mysqli_fetch_array($data))
    {
    ?>
    <tr>
        <td><?php echo $row['Kd_surat'] ?></td>
        <td><?php echo $row['Penerima'] ?></td>
        <td>
          <img width="50" src="Lamp_gambar/<?php echo $row['Lamp_gambar'] ?>" alt="">
        </td>
        <td>
            <a href="edit.php?Kd_surat=<?php echo $row['Kd_surat'] ?>">Edit</a> - 
            <a href="hapus.php?Kd_surat=<?php echo $row['Kd_surat'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    }
  ?>
  
</table>
</body>
</html>

