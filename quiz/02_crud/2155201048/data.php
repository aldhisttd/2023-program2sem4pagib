
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
<?php include "componen/menu.php" ?>

<h2>Data Buku</h2>

<table>
  <tr>
    <th>isbn</th>
    <th>judul</th>
    <th>kategori</th>
    <th>stok</th>
    <th>file</th>
    <th>aksi</th>
  </tr>

  <?php 
    
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM buku");

    while($row = mysqli_fetch_array($data)){
    ?>
        <tr>
          <td><?php echo $row['isbn'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['kategori'] ?></td>
            <td><?php echo $row['stok'] ?></td>
            <td>
            <a href="file/<?php echo $row['file_ebook'] ?>">Download</a>
            </td>
            <td>
                <a href="hapus.php?kode=<?php echo $row['isbn'] ?>">Edit</a> - 
                <a href="edit.php?kode=<?php echo $row['isbn'] ?>">Hapus</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>