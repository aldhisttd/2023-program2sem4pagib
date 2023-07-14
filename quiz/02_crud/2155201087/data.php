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
<h2>Data Pembayaran</h2>

<table>
  <tr>
    <th>Nomor Tagihan</th>
    <th>Tanggal</th>
    <th>Jenis Tagihan</th>
    <th>Nominal</th>
    <th>Bukti Transfer</th>
  </tr>

  <?php 
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pembayaran");

    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $row['nomor tagihan'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['jenis tagihan'] ?></td>
        <td><?php echo $row['nominal'] ?></td>
          <img width="50" src="bukti transfer/<?php echo $row['bukti transfer'] ?>" alt="">
        </td>
        <td>
            <a href="edit.php?nomor tagihan=<?php echo $row['nomor tagihan'] ?>">Edit</a> - 
            <a href="hapus.php?nomor tagihan=<?php echo $row['nomor tagihan'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    }
  ?>
  
</table>

</body>
</html>