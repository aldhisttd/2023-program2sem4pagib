<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php include "component/menu.php" ?>
    <?php
    // ambil nomor tagihan nya dari url variable
    $nomor_tagihan = $_REQUEST['nomor_tagihan'];

    // koneksi
    include "action/koneksi.php";
    $q = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
    $ary = mysqli_fetch_array($q);

    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Nomor Tagihan</td>
                <td>:</td>
                <td>
                    <input readonly type="text" name="nomor_tagihan" value="<?php echo $ary['nomor_tagihan'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal" value="<?php echo $ary['tanggal'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Tagihan</td>
                <td>:</td>
                <td>
                <select type="select" name="jenis_tagihan" value="<?php echo $ary['jenis_tagihan'] ?>">
               <option value=>- Pilih jenis tagihan -</option>
                <option value="listrik">Listrik</option>
                <option value="Internet">Internet</option>
                <option value="Pajak">Pajak</option>
            </select> 

                </td>
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td>
                    <input type="number" name="nominal" value="<?php echo $ary['nominal'] ?>">
                </td>
            </tr>
            <tr>
                <td>Bukti Transfer</td>
                <td>:</td>
                <td>
                    <input type="file" name="bukti_transfer" value="<?php echo $ary['bukti_transfer'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit"><font color=" green">Update Data</font></button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>