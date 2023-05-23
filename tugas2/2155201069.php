<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
        <legend>Form Registrasi</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label for="gender">Jenis Kelamin :</label>
            <select id="gender" name="gender">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </p>
        <p>
            <input type="submit" name="kirim" value="kirim">
        </p>
        </fieldset>
    </form>
</body>
</html>