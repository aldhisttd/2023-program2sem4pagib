<?php

session_start();

// $_SESSION['login'] = true;
// $_SESSION['login'] = false;

if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/admin.css" rel="stylesheet">
    <title>Berhasil Login</title>
</head>

<body>
    <div class="container-logout">
        <form action="proses_logout.php" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang</h1>"; ?>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Logout</button>
        </form>
    </div>
</body>

</html>