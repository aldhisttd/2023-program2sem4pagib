<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:form_login.php');
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
    <title>User</title>
</head>
<body>
    <h1>HALAMAN USER</h1>
    <p><a href="logout.php">Logout</a></p>

</body>
</html>