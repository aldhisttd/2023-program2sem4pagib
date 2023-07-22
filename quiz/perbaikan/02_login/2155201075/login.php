<?php
session_start();

if (isset($_SESSION['masuk']))  {header('location: admin.php');}

if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin';          
    $passAdmin = 'admin321';

    $userUser = 'deni';             
    $passUser = 'deni123';

    $userKaryawan = 'karyawan';             
    $passKaryawan = 'karyawan';
    
        if ($user == $userAdmin && $pass == $passAdmin) {
            $_SESSION['masuk'] = $user;
            $_SESSION['role'] = 'admin';    header('location: admin.php');
    }

    
        if ($user == $userUser && $pass == $passUser) {
             $_SESSION['masuk'] = $user;
             $_SESSION['role'] = 'user';    header('location: user.php');
    }

   
        if ($user == $userKaryawan && $pass == $passKaryawan) {
             $_SESSION['masuk'] = $user;
             $_SESSION['role'] = 'karyawan';    header('location: karyawan.php');
            
    }else {

        echo "Login gagal! username dan password tidak cocok!";
    }  
} 

?>

<!DOCTYPE html> 
<html lang="en"> 
 <head> 
 <title>Login Page</title> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
</head> 
<body>
			<div class="col-md-4 offset-md-4 mt-5">
			<div class="card ">
			<div class="card-title text-center">
						<br><h1>Login disini</h1></br>
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
                            <button class="btn btn-danger btn-block" type="submit" name="masuk"> Masuk</button>
                        </tr>

                    </table>
                </form>

</body>
</html>