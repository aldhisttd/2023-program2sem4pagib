<?php
$norek = $_REQUEST['norek'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT photo FROM nasabah WHERE norek='$norek'");
$ary = mysqli_fetch_array($q);
$photo = $ary['photo'];

unlink("photo/" . $photo);


mysqli_query($koneksi, "DELETE FROM nasabah WHERE norek='$norek'");

header("location:data.php");
