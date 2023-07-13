<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat</title>
</head>
<body>
    <?php include "components/menu.php" ?>
    <center><h2>Form Input Data Surat</h2></center>
    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Kd_surat</td>
                <td>:</td>
                <td>
                    <input type="string" name="Kd_surat">
                </td>
            </tr>
            <tr>
                <td>Penerima</td>
                <td>:</td>
                <td>
                    <input type="string" name="Penerima">
                </td>
            </tr>
            <tr>
                <td>Lamp_gammbar</td>
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
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>