<?php 
$vKd_surat = $_POST['Kd_surat'];
$vPenerima = $_POST['Penerima'];
include "koneksi.php";
if($_FILES['Lamp_gambar']['name'] != "")
{
    $q = mysqli_query($koneksi, "SELECT Lamp_gambar FROM surat WHERE Kd_surat='$vKd_surat'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['Lamp_gambar'];
    unlink('./Lamp_gambar/');
    $path = $_FILES['Lamp_gambar']['name'];
    $ext = ".".pathinfo($path, PATHINFO_EXTENSION);
    $namaPhoto = md5(time()).$ext;
    move_uploaded_file($_FILES['Lamp_gambar']['tmp_name'], '../Lamp_gambar/'.$namaPhoto);
    mysqli_query($koneksi,"UPDATE surat SET Lamp_gambar='$namaPhoto' WHERE Kd_surat='$vKd_surat'");
}
mysqli_query($koneksi, "UPDATE surat SET Kd_surat='$vKd_surat', Penerima='$vPenerima' WHERE Kd_surat='$vKd_surat'");
header("location:../data.php");
