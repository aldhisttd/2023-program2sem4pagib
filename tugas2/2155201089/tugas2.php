<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="proses.php">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama"></input>
        <h3>gender</h3>
        <h4><select name="gender">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            <option value="lainnya">lainnya</option>
            </select>
        </h4>
        <button type="submit" name="simpan" value="1">simpan</button>
    </form>
</body>
</html>