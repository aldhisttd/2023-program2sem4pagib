<?php
    if (isset($_POST["simpan"])){
        $nama = $_POST["nama"]; 
        $gender = $_POST["gender"];
        echo$nama . "," . $gender; 
    }
?>