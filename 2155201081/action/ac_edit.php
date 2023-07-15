<?php

// ambil semua value dari form
$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];
$bukti_transfer = $_POST['bukti_transfer'];

// koneksi
include "koneksi.php";
if ($_FILES['bukti_transfer']['name'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT bukti_transfer FROM uts_2 WHERE nomor_tagihan='$nomor_tagihan'");
    $dt = mysqli_fetch_array($q);
    $bukti = $dt['bukti_transfer'];

    // hapus photo lama
    unlink('../bukti_upload/'.$bukti);

    // upload photo baru
    $path = $_FILES['bukti_transfer']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $bukti_transfer = md5(time()) . $ext;
    move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], '../bukti_upload/' . $bukti_transfer);

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE uts_2 SET bukti_transfer='$bukti_transfer' WHERE nomor_tagihan='$nomor_tagihan'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE uts_2 SET tanggal='$tanggal', jenis_tagihan ='$jenis_tagihan', nominal = '$nominal' WHERE nomor_tagihan='$nomor_tagihan'");
// pindah kehalaman data.php
header("location:../data.php");
