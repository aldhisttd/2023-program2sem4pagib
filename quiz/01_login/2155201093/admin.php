<?php
session_start();

if (!isset($_SESSION['masuk'])) {
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
    <title>Halaman Admin</title>
</head>

<body>

    <p>Login sebagai : <?= $_SESSION['masuk']; ?></p>
    <h1>Halaman Admin</h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>