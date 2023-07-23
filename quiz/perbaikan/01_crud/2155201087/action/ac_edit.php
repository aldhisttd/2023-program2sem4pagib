<?php

$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$number = $_POST['nominal'];
$bukti_transfer = $_POST['bukti_transfer'];

include "koneksi.php";
if ($_FILES['bukti_transfer']['name'] != "") {

    $q = mysqli_query($koneksi, "SELECT bukti_transfer FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
    $dt = mysqli_fetch_array($q);
    $bukti_transfer = $dt['bukti_transfer'];

    unlink('../bukti_transfer/'.$bukti_transfer);

    $path = $_FILES['bukti_transfer']['bukti_transfer'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $nomor_tagihan = md5(time()) . $ext;
    move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], '../bukti_transfer/' . $bukti_transfer);

    mysqli_query($koneksi, "UPDATE pembayaran SET bukti_transfer='$bukti_transfer' WHERE nomor_tagihan='$nomor_tagihan'");
}

mysqli_query($koneksi, "UPDATE pembayaran SET tanggal='$tanggal', jenis_tagihan ='$jenis_tagihan', nominal = '$number',bukti_transfer = '$bukti_transfer' WHERE nomor_tagihan='$nomor_tagihan'");

header("location:../data.php");