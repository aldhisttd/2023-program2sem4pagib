<?php

// ambil semua value dari form
$no_tagihan = $_POST['no_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$number = $_POST['nominal'];
$bukti_transfer = $_POST['bukti_transfer'];

// koneksi
include "koneksi.php";
if ($_FILES['bukti_transfer']['name'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT bukti_transfer FROM ganjil WHERE no_tagihan='$no_tagihan'");
    $dt = mysqli_fetch_array($q);
    $bukti_transfer = $dt['bukti_transfer'];

    // hapus photo lama
    unlink('../bukti_transfer/'. $bukti_transfer);

    // upload photo baru
    $path = $_FILES['bukti_transfer']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $bukti = md5(time()) . $ext;
    move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], '../bukti_transfer/' . $bukti);

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE ganjil SET bukti_transfer='$bukti' WHERE no_tagihan='$no_tagihan'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE ganjil SET tanggal='$tanggal', jenis_tagihan ='$jenis_tagihan', nominal = '$number',bukti_transfer = '$bukti' WHERE no_tagihan='$no_tagihan'");

// pindah kehalaman data.php
header("location:../data.php");