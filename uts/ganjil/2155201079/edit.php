<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include "component/menu.php" ?>

    <?php
    include "proses/koneksi.php";
    $norek = $_REQUEST['norek'];
    $q = mysqli_query($koneksi, "SELECT * FROM nasabah WHERE norek='$norek'");
    $ary = mysqli_fetch_array($q);
    ?>

    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Nomor Rekening</label>
        <input type="string" value="<?php echo $ary['norek'] ?>" readonly name="norek">
        <br>

        <label for="">Nama</label>
        <input type="string" name="nama" value="<?php echo $ary['nama'] ?>">
        <br>

        <br>

        <label for="">photo</label>
        <input type="file" name="photo">
        <br><br>

        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>

</html>