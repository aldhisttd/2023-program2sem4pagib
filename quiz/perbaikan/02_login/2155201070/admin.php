<?php
session_start();

if (!isset($_SESSION['is_login'])) {
    header('location:index.php');
}
if (($_SESSION['role'] == 'user')) {
    header('location:user.php');
}
if (($_SESSION['role'] == 'karyawan')) {
    header('location:karyawan.php');
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

    <p>Hallo : <?= $_SESSION['name']; ?>!</p>
    <h1>Halaman <?= $_SESSION['role']; ?></h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>