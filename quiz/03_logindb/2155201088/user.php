<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: login.php');
    exit();
}

// Periksa peran pengguna
if ($_SESSION['username'] === 'user') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['username'] === 'admin') {
    // User adalah user, lanjutkan ke halaman user
    header('location: admin.php');
    exit();
} else {
    // User bukan admin atau user yang valid
    header('location: karyawan.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<body>
    <p>Anda masuk sebagai : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h2>Selamat Datang Di Halaman User</h2>
</body>
</html>