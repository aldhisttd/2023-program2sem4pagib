<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

     <?php include "component/menu.php" ?>

    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td><label for="">isbn</label></td>
        <td>:<td>
        <input type="text" name="isbn">
    </tr>
<tr>
        <td><label for="">judul</label></td>
        <td>:</td>
       <td> <input type="text" name="judul"></td>
</tr>

<tr>
        <td><label for="">kategori</label></td>
        <td>:</td>
        <td><select name="kategori" id="">
           <option value="Novel">Novel</option>
           <option value="Komik">Komik</option>
           <option value="Kamus">Kamus</option>
        </select></td>
</tr>

<tr>
        <td><label for="">stok</label></td>
        <td>:</td>
        <td><input type="number" name="stok"></td>
</tr>

<tr>
        <td><label for="">file_ebook</label></td>
        <td>:</td>
        <td><input type="file" name="pdf"></td>
</tr>
<tr>
<td></td>        
<td></td>
       <td><br> <button type="submit" name="btn-simpan">Simpan</button></br></td>
</tr>
</table>
    </form>

</body>
</html>