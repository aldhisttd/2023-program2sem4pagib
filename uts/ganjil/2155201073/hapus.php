<?php
// ambil nim dari url variable
$norek = $_REQUEST['norek'];
// koneksi
include "action/koneksi.php";
// ambil nama photo
$q = mysqli_query($koneksi, "SELECT photo FROM nasabah WHERE norek='$norek'");
$dt = mysqli_fetch_array($q);
$photo = $dt['photo'];
// hapus file nyaz
unlink('photo/' . $photo);
// jalankan query delete dengan condition nim=nimnya
mysqli_query($koneksi, "DELETE FROM nasabah WHERE norek='$norek'");
// kembalikan ke halaman data.php
header('location:data.php');
