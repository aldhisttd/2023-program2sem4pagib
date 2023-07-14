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
    <h1>Selamat Datang,admin disini!
    </h1>

    <a href="log_out.php">Logout</a>

</body>

</html>