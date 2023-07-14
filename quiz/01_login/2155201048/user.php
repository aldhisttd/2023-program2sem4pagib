<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>

<body>
    <h1>welcoming putri eka oktaviaa</h1>

    <a href="logout.php">Logout</a>

</body>

</html>