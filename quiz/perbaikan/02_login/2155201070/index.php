<?php
session_start();
if (isset($_SESSION['is_login'])) {
    header('location:' . $_SESSION['role'] . '.php');
}

if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // definde role admin
    $usernameadmin = 'annisa';
    $passadmin = 'annisa123';
    // define role user
    $usernameuser = 'fany';
    $passuser = 'fany123';
    // define role karyawan
    $usernamekaryawan = 'iraa';
    $passkaryawan = 'iraa123';



    if ($username == $usernameadmin && $password == $passadmin) {
        $_SESSION['is_login'] = 1;
        $_SESSION['name'] = $username;
        $_SESSION['role'] = 'admin';
        header('location:admin.php');
    }

    if ($username == $usernamekaryawan && $password == $passkaryawan) {
        $_SESSION['is_login'] = 1;
        $_SESSION['name'] = $username;
        $_SESSION['role'] = 'karyawan';
        header('location:karyawan.php');
    }

    if ($username == $usernameuser && $password == $passuser) {
        $_SESSION['is_login'] = 1;
        $_SESSION['name'] = $username;
        $_SESSION['role'] = 'user';
        header('location:user.php');
    } else {
        echo 'user dan sandi salah! silahkan coba lagii';
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

    <h1>Form Login</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="btn_login">Login</button></td>
            </tr>
        </table>
    </form>

</body>

</html>