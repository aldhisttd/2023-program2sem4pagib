<?php

$path = $_FILES['photo']['name'];
$ext = ".".pathinfo($path, PATHINFO_EXTENSION);
$namaPhoto = md5(time()).$ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/'.$namaPhoto);

$vnomor_tagihan = $_POST['nomor_tagihan'];
$vtanggal = $_POST['tanggal'];
$vjenis_tagihan = $_POST['jenis_tagihan'];
$vnominal = $_POST['nominal'];
$vbukti_transfer = $_POST['bukti_transfer'];

$query = "INSERT INTO Pembayaran(nomor_tagihan, tanggal, jenis_tagihan, nominal, bukti_transfer) VALUES ($vnomor_tagihan, '$vtanggal','$vjenis_tagihan','$vnominal','$bukti_transfer')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");




