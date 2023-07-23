<?php

session_start();

if (isset($_SESSION['login'])) {
    header('location:admin.php');
}

if (isset($_POST['masuk'])) {

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    //cek ke table, apakah user pass ada di DB table user
    $conn = mysqli_connect('localhost', 'root', '', 'quiz_login');
    $sql = "SELECT * FROM data_login WHERE username='$userForm' AND password='$passForm'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);


    if ($row == 1) {
        // jika benar buat sesi sudah login
        // ambil nama photo lama
        $q = mysqli_query($conn, "SELECT role FROM data_login WHERE username='$userFrom'");
        $dt = mysqli_fetch_array($result);
        $role = $dt['role'];
        $_SESSION['role'] = $role;
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $userForm;

        header('location:' . $role . '.php');
    } else {
        //notif login salah
        echo "Data Anda Salah, Silahkan Coba Lagi!!";
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
                    <button type="submit" name="masuk">Login</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>


<?php

?>