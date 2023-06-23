<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php include "components/menu.php" ?>
    <?php
    // ambil norek nya dari url varible
    $norek = $_REQUEST['norek'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM nasabah WHERE norek='$norek'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>norek</td>
                <td>:</td>
                <td>
                    <input readonly type="text" name="norek" value="<?php echo $ary['norek'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $ary['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>:</td>
                <td>
                    <input type="file" name="photo">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update Data Mahasiswa</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>