<?php
session_start();

if (isset($_SESSION['masuk']))  {header('location: admin.php');}

if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin';          
    $passAdmin = 'admin12ok';
        if ($user == $userAdmin && $pass == $passAdmin) {
            $_SESSION['masuk'] = $user;
            $_SESSION['role'] = 'admin';    header('location: admin.php');
    }

    $userUser = 'user';             
    $passUser = 'user12ok';
        if ($user == $userUser && $pass == $passUser) {
             $_SESSION['masuk'] = $user;
             $_SESSION['role'] = 'user';    header('location: user.php');
    }

    $userKaryawan = 'karyawan';             
    $passKaryawan = 'karyawan12ok';
        if ($user == $userKaryawan && $pass == $passKaryawan) {
             $_SESSION['masuk'] = $user;
             $_SESSION['role'] = 'karyawan';    header('location: karyawan.php');
            
    }else {

        echo "Login gagal! password tidak cocok silahkan coba lagi!";
    }  
} 

?>

<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<title>Silahkan Login</title>
</head>

<body>
			<div class="col-md-4 offset-md-4 mt-5">
			<div class="card ">
			<div class="card-title text-center">
						<br><h1>Silahkan Login</h1></br>
			</div>

			<div class="card-body">
                <form action="" method="post">
                    <table>
                        <tr>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="username">
                        </tr>
                            
                        <tr>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="password">      
                        </tr>

                        <tr>
                            <button class="<button class= btn-block" type="submit" name="masuk"> Masuk</button>
                        </tr>

                    </table>
                </form>

</body>
</html>