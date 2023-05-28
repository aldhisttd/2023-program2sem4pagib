<!DOCTYPE html>
<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <div style="max-width: 400px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center;">Form Input Mahasiswa</h2>
        <form method="POST" action="proses.php">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <select name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>

            <button type="submit" name="simpan" value="1">simpan</button>
        </form>
</body>

</html>