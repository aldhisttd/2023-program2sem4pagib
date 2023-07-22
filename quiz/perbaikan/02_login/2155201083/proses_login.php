<?php 
if(isset($_POST['btn-login'])){

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    // define admin pass benar
    $useradminBenar = "admin";
    $passadminBenar = "admin";
    // user
    $useruserBenar = "user";
    $passuserBenar = "user";
    // karyawan
    $karyawanBenar = "karyawan";
    $passkaryawanBenar = "karyawan";

    // bandingkan data login dari form dengan login yg benar
    if(($useradminBenar == $userForm) && ($passadminBenar == $passForm)){
        echo "login benar";
        // jika benar buat sesi sudah login
        // pindah ke halaman admin
    } else if(($useruserBenar == $userForm) && ($passuserBenar == $passForm)){
        echo "login benar";
        // jika benar buat sesi sudah login
        // pindah ke halaman user
    } else if(($karyawanBenar  == $userForm) && ($passkaryawanBenar == $passForm)){
        echo "login benar";
        // jika benar buat sesi sudah login
        // pindah ke halaman karyawan
    }else{
        echo "login salah";
        //notif login sala
    }

}

?>