<?php
session_start();

if (!isset($_SESSION['masuk'])) {
    header('location:login.php');
}
if ($_SESSION['role'] == 'user') {
    header('location:user.php');
}
if ($_SESSION['role'] == 'admin') {
    header('location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Karyawan</title>
</head>

<body>

    <b>Anda Login sebagai : <?= $_SESSION['masuk']; ?></b>
    <h1>Halaman Karyawan</h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>