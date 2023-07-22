<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php include "componen/menubar.php" ?>
    <?php
    // ambil id karyawan nya dari url varible
    $isbn = $_REQUEST['isbn'];
    // koneksi
    include "act/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE isbn='$isbn'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>

    <form action="act/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $ary['isbn'] ?>" readonly name="isbn">
                </td>
            </tr>
            <tr>
                <td>JUDUL BUKU</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul" value="<?php echo $ary['judul'] ?>">
                </td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td>:</td>
                <td>
                    <select input type="text" name="kategori" value="<?php echo $kategori ?>">
                        <option>Pilih Kategori</option>
                        <option>KOMIK</option>
                        <option>NOVEL</option>
                        <option>KAMUS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>STOK TERSEDIA</td>
                <td>:</td>
                <td>
                    <input type="text" name="stok" value="<?php echo $ary['stok'] ?>">
                </td>
            </tr>
            <tr>
                <td>MASUKKAN FILE</td>
                <td>:</td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">UPDATE</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>