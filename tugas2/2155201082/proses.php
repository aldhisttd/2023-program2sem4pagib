<?php
if (isset ($_POST["simpan"])){
    echo'<table>';
    echo'<tr><td>'.'Nama :'.'</td><td>'.$_POST['nama'].'</td></tr>';
    echo'<tr><td>'.'Gender :'.'</td><td>'.$_POST['gender'].'</td></tr>';
    echo'</table>';
}
?>