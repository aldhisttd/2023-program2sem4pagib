<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
</head>
<body>
<form action="proses.php" method="POST">
<fieldset> 
<legend>Form Mahasiswa</legend>
<p>
<label>Nama:</label>
<input type="text" name="nama" placeholder="Nama lengkap..." />
</p>
    <p>
   <label for="gender">Gender:</label>
          <select id="gender" name="gender">
          <option value="Laki-Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
          </select>
  </p>
<p><input type="submit" value="Send" name="send"></p>
</fieldset>
</form>
</body>
</html>