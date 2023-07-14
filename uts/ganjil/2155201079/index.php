<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <?php include "component/menu.php" ?>

    <form action="proses/ex_index.php" method="POST" enctype="multipart/form-data">

        <label for="">NOMOR REKENING</label>
        <input type="string" name="norek">
        <br>

        <label for="">Nama</label>
        <input type="string" name="nama">
        <br>

        <label for="">Photo</label>
        <input type="file" name="photo">
        <br><br>

        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>

</html>