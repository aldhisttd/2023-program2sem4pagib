<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['admin_login'])) {
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
    <h1>Selamat Datang,admin!</h1>
    <h3>Ini halaman admin.</h3>
    <a href="logout.php">Logout</a>
    <br></br>
    <a href="user.php">Kehalaman user</a>
</body>

</html>