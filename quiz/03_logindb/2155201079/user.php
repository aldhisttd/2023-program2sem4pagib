<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['login'])) {
    header('location:db_login.php');
}

if ($_SESSION['role'] == 'user') {
    header('location:user.php');
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
    <h1>Selamat Datang, <?= $_SESSION['username'] ?> !</h1>
    <h2>Login sebagai : <?php echo $_SESSION['role'] ?></h2>
    <h3>Ini halaman <?= $_SESSION['role'] ?>.</h3>
    <a href="logout.php">Logout</a>

</body>

</html>