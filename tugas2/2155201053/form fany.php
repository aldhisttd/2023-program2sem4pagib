<!DOCTYPE html>
<html>

<head>
    <title>Registrasi</title>
</head>

<body>
    <form method="post" action="proses.php">
        <fieldset>
            <legend>Registrasi</legend>
            <p>
                <label>Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap..." />
            </p>
            <select name="jenis_kelamin">' .
                ' <option>default</option>' .
                ' <option>LAKI LAKI</option>' .
                ' <option>PEREMPUAN</option>' .
                ' </select><br>.
            <button name="simpan" type="submit" value="1">simpan</button>
        </fieldset>
    </form>
</body>

</html>