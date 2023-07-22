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

    //cek ke table, apakah user pass ada di DB table user
    $koneksi = mysqli_connect('localhost','root','','db_4pagib');
    $sql = "SELECT * FROM user WHERE username='$userForm' AND password='$passForm'";

    $q = mysqli_query($koneksi,$sql);

    $rowCount = mysqli_num_rows($q);


    if($rowCount == 1){
        // jika benar buat sesi sudah login

        $_SESSION['is_login'] = 1;
        $_SESSION['username'] = $userForm;
        // pindah ke halaman admin
        header('location:admin.php');
    }else{
        //notif login salah
        echo "login salah";
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