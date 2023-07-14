<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['adminlogin'])) {
    header('location:admin.php');
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
    <h1>Selamat Datang,admin!
    </h1>

    <a href="logout.php">Logout</a>
    <h3>DISINI KHUSUS ADMIN SAJA </h3>

</body>

</html>