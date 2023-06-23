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
  <?php include "components/menu.php" ?>
  <h2>Data nasabah</h2>

  <table>
    <tr>
      <th>norek</th>
      <th>Nama</th>
      <th>Photo</th>
      <th>Action</th>
    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM nasabah");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['norek'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td>
          <img width="50" src="photo/<?php echo $row['photo'] ?>" alt="">
        </td>
        <td>
          <a href="edit.php?norek=<?php echo $row['norek'] ?>">Edit</a> -
          <a href="hapus.php?norek=<?php echo $row['norek'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>