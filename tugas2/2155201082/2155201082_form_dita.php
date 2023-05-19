<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
</head>
<body>
<form action="proses.php" method="POST">
<fieldset> 
<table>
<label>Nama:</label>
<input type="text" name="nama" placeholder="Nama lengkap..." />
  <p>
   <label for="gender">Gender:</label>
          <select id="gender" name="gender">
          <option value="Laki-Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
  </p>
 </table>
 <p><input type="submit" value="Simpan" name="simpan"></p>
</fieldset>
</form>
</body>
</html>