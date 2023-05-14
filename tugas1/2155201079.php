<!DOCTYPE html>
<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <h2>Form Input Mahasiswa</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>

</html>