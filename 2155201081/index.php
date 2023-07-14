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
                <td>Nomor_Tagihan</td>
                <td>:</td>
                <td>
                    <input type="text" name="Nomor_Tagihan">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            </tr>
            <tr>
            <td>Jenis_Tagihan</td>
                <td>:</td>
                <td>
                        <select input type="text" name="Jenis Tagihan" value="<?php echo $kategori ?>">
                            <option value="">Pilih Tagihan</option>
                            <option value="novel">Listrik</option>
                            <option value="komik">Internet</option>
                            <option value="kamus">Pajak</option>
                        </select>  
                </td>
                </td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td>
                    <input type="text" name="Nominal">
                </td>
            </tr>
            <tr>
                <td>Bukti_Transfer</td>
                <td>:</td>
                <td>
                    <input type="file" name="Bukti_Transfer">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Simpan Pembayaran</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>