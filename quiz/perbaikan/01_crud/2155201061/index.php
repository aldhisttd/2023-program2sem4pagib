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

    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>nomor_tagihan</td>
                <td>:</td>
                <td>
                    <input type="text" name="nomor_tagihan">
                </td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>jenis_tagihan</td>
                <td>:</td>
                <td>
                <select name="jenis_tagihan" value="<?php echo $jenis_tagihan ?>">
                        <option value="listrik">Listrik</option>
                        <option value="internet">Internet</option>
                        <option value="pajak">Pajak</option>
                    </select>   
                </td>
            </tr>
            <tr>
                <td>nominal</td>
                <td>:</td>
                <td>
                    <input type="text" name="nominal">
                </td>
            </tr>
            <tr>
                <td>bukti_transfer</td>
                <td>:</td>
                <td>
                    <input type="file" name="bukti_transfer">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Simpan Data Pembayaran
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>