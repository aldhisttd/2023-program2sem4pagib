<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

if ($_SESSION['role'] == 'admin') {
    header('location:admin.php');
}
if ($_SESSION['role'] == 'karyawan') {
    header('location:karyawan.php');
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
<p>Login sebagai : <?php echo $_SESSION['role'] ?></p>
    <h1>Selamat Datang, <?= $_SESSION['username'] ?> !</h1>

    <a href="logout.php">Logout</a>

    <h3>Ini halaman <?= $_SESSION['role'] ?>.</h3>
</body>

</html>
