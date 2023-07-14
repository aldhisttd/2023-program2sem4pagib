<?php
session_start();
if (isset($_SESSION['admin_login'])) {
    header('location:admin.php');
}
if (isset($_SESSION['user_login'])) {
    header('location:user.php');
}
if (isset($_POST['btn-login'])) {

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    // define user pass benar
    $adminBenar = "admin";
    $passadminBenar = "admin";
    $userBenar = "user";
    $passuserBenar = "user";
    // bandingkan data login dari form dengan login yg benar
    if (($adminBenar == $userForm) && ($passadminBenar == $passForm)) {
        // jika benar buat sesi sudah login
        $_SESSION['admin_login'] = $userForm;
        // pindah ke halaman admin
        header('location:admin.php');
    } elseif (($userBenar == $userForm) && ($passuserBenar == $passForm)) {
        // jika benar buat sesi sudah login
        $_SESSION['user_login'] = $userForm;
        // pindah ke halaman admin
        header('location:user.php');
        //notif login sala
    } else {
        echo "login gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>

    <form action="" method="POST">

        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="userForm"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="passForm"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="btn-login">Login</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>


<?php

?>