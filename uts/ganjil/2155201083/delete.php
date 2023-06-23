<?php 

include "koneksi.php";

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect("localhost","root","","nasabah");

// jalankan query
$norek = $_REQUEST['kode'];
mysqli_query($koneksi, "DELETE FROM nasabah WHERE norek='$norek'");     

// redirect ke table
header("location:edit.php");

?>