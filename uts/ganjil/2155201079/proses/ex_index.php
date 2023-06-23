<?php

$norek = $_POST['norek'];
$nama = $_POST['nama'];

$namephoto = basename($_FILES["photo"]["name"]);
$target_file = "../photo/" . basename($_FILES["photo"]["name"]);

$upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO nasabah (norek, nama, photo) VALUES('$norek','$nama','$namephoto')";

mysqli_query($koneksi, $q);

header("location:../data.php");
