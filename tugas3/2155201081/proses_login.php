<?php




// $username = $_POST['username'];

// $password = $_POST['password'];

// echo $username;

// echo "<br>";

// echo $password;

if (isset($_POST['login'])) {

    // ambil nilai username dan passwword

    $username = $_POST['username'];

    $password = $_POST['password'];

    // cek username pass benar atau tidak

    $user_benar = 'admin';

    $pass_benar = '1234';

    session_start();
    if ($username == $user_benar && $password == $pass_benar) {

        // klw benar buat session, redirect hal admin

        $_SESSION['login'] = true;

        header('location:admin.php');

    } elseif ($username != $user_benar && $password == $pass_benar) {

        ////klo username salah

        $_SESSION['username_error'] = "ERROR: Invalid username.";

        header('location:index.php');

    } else {

        // klo salah redirect hal login, pesan error

        $_SESSION['error'] = "ERROR: Invalid password.";

        header('location:index.php');

    }

} else {

    header('location:index.php');

}