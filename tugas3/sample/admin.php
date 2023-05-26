<?php

session_start();

// $_SESSION['login'] = true;
// $_SESSION['login'] = false;

if(!isset($_SESSION['login']) || $_SESSION['login']==false){
    header('location:index.php');
}

?>

<h1>halaman admin</h1>