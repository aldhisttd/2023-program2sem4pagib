<?php
session_start();

if(!isset($_SESSION['userlogin'])) {header('location:db_login.php');}
if($_SESSION['role'] == 'user') {header('location:user.php');}
if($_SESSION['role'] == 'admin') {header('location:admin.php');}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <p>Anda telah login sebagai : <b><?php echo  $_SESSION['role'] ?></b></p>

    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h1>Selamat Datang, <?= $_SESSION['username'] ?> !</h1>
    <b>Halaman ini hanya dapat diakses oleh karyawan</b>
    <p><button><a href="logout.php"><font color="red">Logout</font></a></button></p>
    
</body>
</html>