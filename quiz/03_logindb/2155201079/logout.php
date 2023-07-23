<?php 
session_start();
session_destroy();

header('location:db_login.php');
