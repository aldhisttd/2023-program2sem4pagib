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
<h2>Pembayaran</h2>

<table>
  <tr>
    <th>Nomor_Tagihan</th>
    <th>Tanggal</th>
    <th>Jenis_tagihan</th>
    <th>Nominal</th>
    <th>Photo</th>
    <th>Bukti_transfer</th>
  </tr>
  <?php 
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM Pembayaran");

    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $row['Nomor_Tagihan'] ?></td>
        <td><?php echo $row['Tanggal'] ?></td>
        <td><?php echo $row['Jenis_Tagihan'] ?></td>
        <td><?php echo $row['Nominal'] ?></td>
        <td><?php echo $row['Bukti_Transfer'] ?></td>
        <td>
          <img width="50" src="photo/<?php echo $row['photo'] ?>" alt="">
        </td>
        <td>
            <a href="edit.php?Nomor_Tagihan=<?php echo $row['Nomor_Tagihan'] ?>">Edit</a> - 
            <a href="hapus.php?Nomor_Tagihan=<?php echo $row['Nomor_Tagihan'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    }
  ?>
  
</table>

</body>
</html>

