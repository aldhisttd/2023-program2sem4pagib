<?php 
// ambil semua value dari form
$vNim = $_POST['nim'];
$vNama = $_POST['nama'];
$vAlamat = $_POST['alamat'];
$vHp = $_POST['hp'];
// koneksi
include "koneksi.php";
if($_FILES['photo']['name'] != ""){
    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT photo FROM mahasiswa WHERE nim='$vNim'");
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
    mysqli_query($koneksi,"UPDATE mahasiswa SET photo='$namaPhoto' WHERE nim='$vNim'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$vNama', alamat='$vAlamat', hp='$vHp' WHERE nim='$vNim'");
// pindah kehalaman data.php
header("location:../data.php");
