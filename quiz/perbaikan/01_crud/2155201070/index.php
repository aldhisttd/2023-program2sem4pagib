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

    <form action="act/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td>
                    <input type="text" name="isbn">
                </td>
            </tr>
            <tr>
                <td>JUDUL BUKU</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul">
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
                    <input type="text" name="stok">
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
                    <button type="submit">SAVE</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>