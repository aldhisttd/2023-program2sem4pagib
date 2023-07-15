<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['adminlogin'])) {
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
    <h1 style="color:#862B0D">Selamat Bergabung sebagai <h1 style="color:#1B6B93">Admin</h1>
    <h3>Disini </h3>

    <a href="log_out.php">Logout</a>

</body>

</html>