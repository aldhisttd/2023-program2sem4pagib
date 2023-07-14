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
    <title>Halaman User</title>
</head>

<body>
    <h1>Selamat Datang Pengguna Website Ini !</h1>

    <a href="logout.php">Logout</a>

</body>

</html>