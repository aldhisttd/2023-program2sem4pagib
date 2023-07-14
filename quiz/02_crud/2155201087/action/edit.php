<?php 
// ambil semua value dari form
$vNomorTagihan = $_POST['nomor tagihan'];
$Tanggal = $_POST['tanggal'];
$JenisTagihan = $_POST['jenis tagihan'];
$Nominal = $_POST['nominal'];

// koneksi
include "koneksi.php";
if($_FILES['bukti transfer']['name'] != ""){
    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT buktitransfer FROM pembayaran WHERE nomor tagihan='$vNomorTagihan'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['bukti transfer'];
    // hapus photo lama
    unlink('../bukti transfer/'.$buktitansfer);
    // upload photo baru
    $path = $_FILES['bukti transfer']['name'];
    $ext = ".".pathinfo($path, PATHINFO_EXTENSION);
    $namaPhoto = md5(time()).$ext;
    move_uploaded_file($_FILES['bukti transfer']['tmp_name'], '../photo/'.$namaPhoto);
    // update nama photo ke photo baru
    mysqli_query($koneksi,"UPDATE pembayaran SET photo='$namaPhoto' WHERE nim='$vNim'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE pembayaran SET tanggal='$vTanggal', nominal='$vNominal', jenis tagihan='$vJenisTagihan' WHERE nomor tagihan='$vNomorTagihan'");
// pindah kehalaman data.php
header("location:../data.php");