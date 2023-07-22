<?php 
if(isset($_POST['btn-login'])){

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    // define user pass benar
    $userBenar = "admin";
    $passBenar = "admin";

    // bandingkan data login dari form dengan login yg benar
    if(($userBenar == $userForm) && ($passBenar == $passForm)){
        echo "login benar";
        // jika benar buat sesi sudah login
        // pindah ke halaman admin
    }else{
        echo "login salah";
        //notif login sala
    }

}

?>