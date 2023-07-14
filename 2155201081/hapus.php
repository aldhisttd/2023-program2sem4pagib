<?php
// ambil nim dari url variable
$nim = $_REQUEST['Nomor_Tagihan'];
// koneksi
include "action/koneksi.php";
// ambil nama photo
$q = mysqli_query($koneksi, "SELECT photo FROM Pembayaran WHERE Nomor_Tagihan='$Nomor_Tagihan'");
$dt = mysqli_fetch_array($q);
$photo = $dt['Bukti_Transfer'];
// hapus file nya
unlink('Bukti_Transfer/'.$bukti_transfer);
// jalankan query delete dengan condition nim=nimnya
mysqli_query($koneksi, "DELETE FROM Pembayaran WHERE Nomor_Tagihan='$Nomor_Tagihan'");
// kembalikan ke halaman data.php
header('location:data.php');
