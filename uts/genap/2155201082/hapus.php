<?php
$Kd_surat = $_REQUEST['Kd_surat'];
include "action/koneksi.php";
$q = mysqli_query($koneksi, "SELECT Lamp_gambar FROM surat WHERE Kd_surat='$Kd_surat'");
$dt = mysqli_fetch_array($q);
$photo = $dt['photo'];
unlink('photo/'.$photo);
mysqli_query($koneksi, "DELETE FROM surat WHERE Kd_surat='$Kd_surat'");
header('location:data.php');
