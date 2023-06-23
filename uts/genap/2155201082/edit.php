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
    $Kd_surat = $_REQUEST['Kd_surat'];
    include "action/koneksi.php";
    $q = mysqli_query($koneksi, "SELECT * FROM surat WHERE Kd_surat='$Kd_surat'");
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Kd_surat</td>
                <td>:</td>
                <td>
                    <input readonly type="text" name="Kd_surat" value="<?php echo $ary['Kd_surat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Penerima</td>
                <td>:</td>
                <td>
                    <input type="text" name="Penerima" value="<?php echo $ary['Penerima'] ?>">
                </td>
            </tr>
            <tr>
                <td>Lamp_gambar</td>
                <td>:</td>
                <td>
                    <input type="file" name="Lamp_gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update Data</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>