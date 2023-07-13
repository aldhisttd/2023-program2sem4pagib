<?php

$path = $_FILES['photo']['name'];
$ext = ".".pathinfo($path, PATHINFO_EXTENSION);
$namaLamp_gambar = md5(time()).$ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/'.$namaLamp_gambar);

$vKd_surat = $_POST['Kd_surat'];
$vPenerima = $_POST['Penerima'];

$query = "INSERT INTO surat (Kd_surat,Penerima,Lamp_gambar) VALUES ($vKd_surat, '$vPenerima','$namaLamp_gambar')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");




