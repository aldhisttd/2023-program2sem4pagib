<?php 
// ambil semua value dari form
$vnomor_tagihan = $_POST['nomor_tagihan'];
$vtanggal = $_POST['tanggal'];
$vjenis_tagihan = $_POST['jenis_tagihan'];
$vnominal = $_POST['nominal'];
$vbukti_transfer = $_POST['bukti_transfer'];
// koneksi
include "koneksi.php";
if($_FILES['photo']['name'] != ""){
    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT photo FROM Pembayaran WHERE nomor_tagihan='$vnomor_tagihan'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['photo'];
    // hapus photo lama
    unlink('../photo/'.$photo);
    // upload photo baru
    $path = $_FILES['photo']['name'];
    $ext = ".".pathinfo($path, PATHINFO_EXTENSION);
    $namaPhoto = md5(time()).$ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/'.$namaPhoto);
    // update nama photo ke photo baru
    mysqli_query($koneksi,"UPDATE Pembayaran SET photo='$namaPhoto' WHERE nomor_tagihan='$vnomor_tagihan'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE Pembayaran SET nomor_tagihan='$vnomor_tagihan', tanggal='$vtanggal', jenis_tagihan='$vjenis_tagihan'$vbukti_transfer WHERE nomor_tagihan='$vnomor_tagihan'");
// pindah kehalaman data.php
header("location:../data.php");
