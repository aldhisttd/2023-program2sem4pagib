<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}
if ($_SESSION['rules'] != 'user') {
    header('location:' . $_SESSION['rules'] . '.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
</head>

<body>
    <h1>Selamat Datang, <?= $_SESSION['rules'] ?> !</h1>

    <h3>Ini halaman <?= $_SESSION['rules'] ?>.</h3>

    <a href="logout.php">Logout</a>
</body>

</html>