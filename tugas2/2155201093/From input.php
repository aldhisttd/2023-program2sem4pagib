<!DOCTYPE html>
<html>
<head>
    <title>From Mahasiswa</title>
</head>
<body>
    <form action="proses.php" method="POST">
        
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
          <label for="gender">Gender:</label>
          <select id="gender" name="gender">
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select><br><br>
       <input type="submit" name="simpan" value="Simpan">
       
    </form>
</body>
</html>