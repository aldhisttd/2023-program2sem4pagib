<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><\
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
        <h1>Form Mahasiswa</h1> 
         <form method="POST" action="proses.php"> 
             <label for="nama">Nama :</label> 
             <input type="text" name="nama" id="nama" required><br><br>

             <label for="gender">gender :</label> 
             <select name="gender">
                    <option value="pilih gender">pilih gender</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                    <option value="lainnya">lainnya</option>
            </select><br><br>

            <button type="submit" name="simpan" value="1">simpan</button> 
        </form>

</body>
</html>