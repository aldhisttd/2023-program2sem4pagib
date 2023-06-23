<?php
// ambil semua value dari form
$vnorek = $_POST['norek'];
$vNama = $_POST['nama'];
// koneksi
include "koneksi.php";
if ($_FILES['photo']['name'] != "") {
    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT photo FROM nasabah WHERE norek='$vnorek'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['photo'];
    // hapus photo lama
    unlink('../photo/' . $photo);
    // upload photo baru
    $path = $_FILES['photo']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $namaPhoto = md5(time()) . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/' . $namaPhoto);
    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE nasabah SET photo='$namaPhoto' WHERE norek='$vnorek'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE nasabah SET nama='$vNama' WHERE norek='$vnorek'");
// pindah kehalaman data.php
header("location:../data.php");
