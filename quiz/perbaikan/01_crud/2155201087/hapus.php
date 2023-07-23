<?php

$nomor_tagihan = $_REQUEST['nomor_tagihan'];

include "action/koneksi.php";

$q = mysqli_query($koneksi, "SELECT bukti_transfer FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
$dt = mysqli_fetch_array($q);
$bukti_transfer = $dt['bukti_transfer'];

unlink('buktipembayaran/' . $bukti_transfer);

mysqli_query($koneksi, "DELETE FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
header('location:data.php');