<?php
// ambil nim dari url variable
$no_tagihan = $_REQUEST['no_tagihan'];

// koneksi
include "action/koneksi.php";

// ambil nama photo
$q = mysqli_query($koneksi, "SELECT bukti_transfer FROM ganjil WHERE no_tagihan='$no_tagihan'");
$dt = mysqli_fetch_array($q);
$bukti_transfer = $dt['bukti_transfer'];

// hapus file nya
unlink('bukti_pembayaran/' . $bukti_transfer);

mysqli_query($koneksi, "DELETE FROM ganjil WHERE no_tagihan='$no_tagihan'");
header('location:data.php');