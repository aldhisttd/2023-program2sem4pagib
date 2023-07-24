<?php
$path = $_FILES['bukti_transfer']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$bukti_transfer = md5(time()) . $ext;
move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], '../bukti_transfer/' . $bukti_transfer);

$no_tagihan = $_POST['no_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO ganjil (no_tagihan,tanggal,jenis_tagihan,nominal,bukti_transfer) VALUES ('$no_tagihan','$tanggal','$jenis_tagihan','$nominal','$bukti_transfer')";

include "koneksi.php";

mysqli_query ($koneksi, $query);

header("location:../data.php");