<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
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
    <title>Admin</title>
</head>
<body>
    <h1>HALAMAN ADMIN</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>