<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
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
  <?php include "component/menu.php" ?>

  <h2>Nasabah</h2>

  <table>
    <tr>
      <th>Nomor Rekening</th>
      <th>Nama</th>
      <th>photo</th>
      <th>Action</th>
    </tr>

    <?php

    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM nasabah");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['norek'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td>
          <img src="photo/<?php echo $row['photo'] ?>" width="100">
        </td>
        <td>
          <a href="hapus.php?norek=<?php echo $row['norek'] ?>">Hapus</a> -
          <a href="edit.php?norek=<?php echo $row['norek'] ?>">Edit</a>
        </td>
      </tr>

    <?php
    }
    ?>
  </table>

</body>

</html>