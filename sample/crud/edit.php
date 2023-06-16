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
    // ambil nim nya dari url varible
    $nim = $_REQUEST['nim'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input readonly type="text" name="nim" value="<?php echo $ary['nim'] ?>">
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
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" cols="30" rows="5"><?php echo $ary['alamat'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>HP</td>
                <td>:</td>
                <td>
                    <input type="text" name="hp" value="<?php echo $ary['hp'] ?>">
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
                    <button type="submit">Simpan Data Mahasiswa</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>