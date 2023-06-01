<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
        <legend>Registrasi</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label for="gender">Jenis Kelamin :</label>
            <select id="gender" name="gender">
                <option value="laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </p>
        <p>
            <input type="submit" name="send" value="send">
        </p>
        </fieldset>
    </form>
</body>
</html>