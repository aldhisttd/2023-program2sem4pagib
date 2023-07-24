<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: login.php');
    exit();
}

// Periksa peran pengguna
if ($_SESSION['username'] === 'karyawan') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['username'] === 'user') {
    // User adalah user, lanjutkan ke halaman user
    header('location: user.php');
    exit();
} else {
    // User bukan admin atau user yang valid
    header('location: admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Karyawan</title>
</head>
<body>
    <b>Anda Telah Login Sebagai : <?php echo $_SESSION['username'] ?></b>
    <h3>Selamat Datang di Halaman Karyawan</h3>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>