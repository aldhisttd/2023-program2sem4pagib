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
    <?php include "componen/menubar.php" ?>
    <h2>Data Mahasiswa</h2>

    <table>
        <tr>
            <th>ISBN</th>
            <th>JUDUL BUKU</th>
            <th>JENIS BUKU</th>
            <th>STOCK TERSEDIA</th>
            <th>FILE BUKU</th>
            <th>ACTION</th>
        </tr>
        <?php
        include "act/koneksi.php";
        $data = mysqli_query($koneksi, "SELECT * FROM tb_buku");

        while ($row = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $row['isbn'] ?></td>
                <td><?php echo $row['judul'] ?></td>
                <td><?php echo $row['kategori'] ?></td>
                <td><?php echo $row['stok'] ?></td>
                <td><?php echo "<a href='file/" . $row["file"] . "'>Baca Disini</a>"; ?></td>
                </td>
                <td>
                    <a href="edit.php?isbn=<?php echo $row['isbn'] ?>">Edit</a> -
                    <a href="hapus.php?isbn=<?php echo $row['isbn'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>