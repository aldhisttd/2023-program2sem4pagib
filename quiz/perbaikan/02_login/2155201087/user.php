<?php
session_start();

if (!isset($_SESSION['masuk'])) {header('location: login.php');}

if ($_SESSION['role'] == 'admin') {header('location: admin.php');}
if ($_SESSION['role'] == 'karyawan') {header('location: karyawan.php');}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <p>Anda telah login sebagai <b><?= $_SESSION['masuk']; ?></b></p>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Selamat Datang Di Halaman User</h1>
    <b>Halaman ini hanya dapat diakses oleh user</b>

    <p><button><a href="logout.php">Logout</a></button></p>
    
</body>
</html>