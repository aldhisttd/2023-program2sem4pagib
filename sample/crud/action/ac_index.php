<?php

$namaPhoto = basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/'.$namaPhoto);

$vNim = $_POST['nim'];
$vNama = $_POST['nama'];
$vAlamat = $_POST['alamat'];
$vHp = $_POST['hp'];

$query = "INSERT INTO mahasiswa (nim,nama,alamat,hp,photo) VALUES ($vNim, '$vNama','$vAlamat','$vHp','$namaPhoto')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");




