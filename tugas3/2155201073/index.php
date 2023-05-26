<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="assets/signin.css" rel="stylesheet">
</head>

<body>
    <main class="form-signin w-100 m-auto">
        <form data-bitwarden-watching="1" method="POST" action="proses_login.php">
            <div class="text-center">

                <img class="mb-4" src="assets/tinf.png" alt="" width="72" height="57">
            </div>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            </div>


            <?php
            session_start();
            if (isset($_SESSION['username_error'])) {
            ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['username_error'] ?>
                </div>

            <?php
            }

            if (isset($_SESSION['error'])) {
            ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error'] ?>
                </div>

            <?php
            }
            ?>



            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
        </form>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>