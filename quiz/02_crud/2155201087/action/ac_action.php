<?php

$path = $_FILES['bukti transfer']['name'];
$ext = ".".pathinfo($path, PATHINFO_EXTENSION);
$namaPhoto = md5(time()).$ext;
move_uploaded_file($_FILES['bukti transfer']['tmp_name'], '../bukti transfer/'.$BuktiTransfer);

$vNomorTagihan = $_POST['nomor tagihan'];
$vTanggal = $_POST['tanggal'];
$vJenisTagihan = $_POST['jenis tagihan'];
$vNominal = $_POST['nominal'];

$query = "INSERT INTO pembayaran (nomor tagihan,tanggal,jenis tagihan,nominal,buktitransfer ) VALUES ($vNomorTagihan, '$vTanggal','$JenisTagihan','$vNominal','$BuktiTransfer')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");