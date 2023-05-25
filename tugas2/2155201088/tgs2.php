<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM MAHASISWA</title>
</head>
<body>
    <form method ="POST" action ="proses.php">
        <fieldset>
    <h1 class="text-center">FORM MAHASISWA</h1>
    <p>
            <label> Name :</label>
            <input type="text" name="name" class= "from-control" placeholder="Masukkan Nama Lengkap">
    </p>
    <p>
            <label for="gender"> Gender : </label>
            <select id="gender" name="gender">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
    </p>
    <button type="submit" name="simpan" value="1">simpan</button>
    </form>  
</body>
</html>

