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

    // define admin pass benar
    $useradminBenar = "admin";
    $passadminBenar = "admin";
    // user
    $userBenar = "user";
    $passuserBenar = "user";
    // karyawan
    $karyawanBenar = "karyawan";
    $passkaryawanBenar = "karyawan";

    // bandingkan data login dari form dengan login yg benar
    if(($useradminBenar == $userForm) && ($passadminBenar == $passForm)){
        // jika benar buat sesi sudah login
        $_SESSION['is_login'] = true;
        // pindah ke halaman admin
        header('location:admin.php');
    } elseif (($userBenar == $userForm) && ($passuserBenar == $passForm)){
            // jika benar buat sesi sudah login
            $_SESSION['is_login'] = true;
            // pindah ke halaman admin
            header('location:user.php');
    } elseif (($karyawanBenar == $userForm) && ($passkaryawanBenar == $passForm)){
            // jika benar buat sesi sudah login
            $_SESSION['is_login'] = true;
            // pindah ke halaman admin
            header('location:karyawan.php');
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