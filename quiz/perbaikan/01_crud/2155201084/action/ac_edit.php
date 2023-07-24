<?php

// ambil semua value dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$file_ebook= $_POST['file_ebook'];
// koneksi
include "koneksi.php";
if ($_FILES['file_ebook']['file'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT file_ebook FROM buku WHERE isbn='$isbn'");
    $dt = mysqli_fetch_array($q);
    $file_ebook = $dt['file_ebook'];

    // hapus photo lama
    unlink('../file/'.$file_ebook);

    // upload photo baru
    $path = $_FILES['file_ebook']['file'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $nama_file = md5(time()) . $ext;
    move_uploaded_file($_FILES['file_ebook']['tmp_name'], '../file/' . $nama_file);


    // update nama file ke photo baru
    mysqli_query($koneksi, "UPDATE buku SET file_book='$nama_file' WHERE isbn='$isbn'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE buku SET judul='$judul', kategori='$kategori', stok='$stok', file_ebook='$nama_file' WHERE isbn='$isbn'");
// pindah kehalaman data.php
header("location:../data.php");