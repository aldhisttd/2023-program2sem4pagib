<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['user_login'])) {
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
    <h1>Selamat Datang,user!</h1>
    <h3>Ini halaman user.</h3>
    <a href="logout.php">Logout</a>
    <br></br>
    <a href="admin.php">Ke halaman admin</a>


</body>

</html>