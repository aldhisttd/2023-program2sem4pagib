<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS IRA AHDANI SIREGAR</title>
</head>
<body>
<h2></h2>
<table>
<ul>
    <li>
        <a href="edit.php">Form Input</a>
    </li>
    <li>
        <a href="datanasabah.php">Data</a>
    </li>
</ul>
<form action="" method="post" enctype="multipart/form-data">
        <tr>
        <td>NoRek</td>    
        <td>:</td>
        <td><label for="kode"></label><input type="text" name="kode" required></td>
        <tr>
        <tr>
        <td>Nama</td>    
        <td>:</td>
        <td><label for="nama"></label><input type="text" name="nama" required></td>
        <tr>
        <td>Photo</td>    
        <td>:</td>
        <td><label for="photo"></label><input type="file" name="photo" required></td>
        <tr>
        </table>  
        <td>
          <br>
        <br><input type="submit" value="Input" name="input"><br>
        </td>
  </form>
  <?php

  include "koneksi.php";
  if(isset($_POST['input'])){
        $norek        = $_POST['kode'];
        $nama         = $_POST['nama'];
    // 
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $folder = './foto/';

    // 

    move_uploaded_file($photo_tmp, $folder.$photo_name);
    // 
    $insert = mysqli_query($koneksi, "INSERT INTO nasabah VALUES('$norek', '$nama' , '$photo_name')");
    //
    if($insert){
      echo 'Berhasil Input';
    }else{
      echo 'Gagal Input';
    }
  }
    ?>

</body>
</html>
