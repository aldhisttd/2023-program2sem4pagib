<?php 
session_start();

unset($_SESSION['admin']);
unset($_SESSION['user']);


header('location:login.php')
?>