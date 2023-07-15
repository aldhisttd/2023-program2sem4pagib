<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['userlogin'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h2 style="color:#862B0D">Halo Selamat Datang, Disini anda login sebagai user</h2>
    <h2 style="color:#F86F03">감사합니다</h2>


    <a href="log_out.php">Logout</a>

</body>

</html>