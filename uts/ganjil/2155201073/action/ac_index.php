<?php

$path = $_FILES['photo']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$namaPhoto = md5(time()) . $ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/' . $namaPhoto);

$vnorek = $_POST['norek'];
$vNama = $_POST['nama'];

$query = "INSERT INTO nasabah (norek,nama,photo) VALUES ($vnorek, '$vNama','$namaPhoto')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");
