<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('location:form_login.php');   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body style ="text-align:center">
    <h1>Halaman Administrator</h1>
    <a href="logout.php">Logout</a>
    <hr>
    <h3>Selamat Datang, <?php echo $_SESSION['user']['nama']; ?> </h3>
    Kamu bisa kesini kalau sudah login
</body>
</html>