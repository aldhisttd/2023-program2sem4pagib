<?php

$norek = $_POST['norek'];
$nama = $_POST['nama'];
include "koneksi.php";
if ($_FILES['photo']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi, "SELECT photo FROM nasabah WHERE norek='$norek'");
    $ary = mysqli_fetch_array($q);
    $photo = $ary['photo'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namaphoto = basename($_FILES["photo"]["name"]);
    $target_file = "../photo/" . basename($_FILES["photo"]["name"]);
    $upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaphotoBaru = $_FILES["photo"]["name"];
    mysqli_query($koneksi, "UPDATE nasabah SET photo='$namaphotoBaru' WHERE norek='$norek'");
}



mysqli_query($koneksi, "UPDATE nasabah SET nama='$nama' WHERE norek='$norek'");

header('location:../data.php');
