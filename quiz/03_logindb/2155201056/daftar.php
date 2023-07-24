<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>

    <?php
        if(isset($_POST['username'])){
            $nama     = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "INSERT INTO user (nama,username,password) values('$nama','$username','$password')");
    
        if($query) {
            echo '<script>alert("Selamat, pendaftaran anda berhasil. Silakan login.")</script>';   
        }else{
            echo '<script>alert("pendaftaran gagal.");</script>';
        }
    }
    ?>
    <form method="post">
        <table>
            <tr>
                <td>
                    <h3>Daftar</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Daftar</button>
                        <a href="form_login.php">Login</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>

