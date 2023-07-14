<?php
session_start();
if(isset($_SESSION['is_login'])){
    header('location:admin.php');
}

if(isset($_POST['btn-login'])){

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    // define user pass benar
    $userBenar = "admin";
    $passBenar = "admin";

    // bandingkan data login dari form dengan login yg benar
    if(($userBenar == $userForm) && ($passBenar == $passForm)){
        // jika benar buat sesi sudah login
        $_SESSION['is_login'] = true;
        // pindah ke halaman admin
        header('location:admin.php');
    }else{
        echo "login salah";
        //notif login sala
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