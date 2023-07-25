<?php

session_start();
if (isset($_SESSION['userlogin'])) {
    header('location:admin.php');
}

if (isset($_POST['masuk'])) {

    $userlogin = $_POST['userlogin'];
    $passlogin = $_POST['passlogin'];

    $conn = mysqli_connect('localhost', 'root', '', 'quiz_03db');
    $sql = "SELECT * FROM user WHERE username='$userlogin' AND password='$passlogin'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);


    if ($row == 1) {

        $q = mysqli_query($conn, "SELECT role FROM user WHERE username='$userlogin'");
        $dt = mysqli_fetch_array($result);
        $role = $dt['role'];
        $_SESSION['role'] = $role;
        $_SESSION['userlogin'] = 1;
        $_SESSION['username'] = $userlogin;

        header('location:' . $role . '.php');
    } else {
    
        echo "username atau password salah, silahkan coba lagi!!";
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
<h1>Form Login</h1>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="userlogin"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="passlogin"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="masuk"><font color="green">Login</font></button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>


<?php

?>