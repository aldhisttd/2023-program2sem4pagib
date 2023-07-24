<?php
// Koneksi ke database (contoh menggunakan mysqli)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_buku";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$ebook = $_FILES['ebook'];


// Upload file ebook ke folder tertentu
$targetDir = "file_ebook/";
$targetFile = $targetDir . basename($_FILES["ebook"]);
move_uploaded_file($_FILES["ebook"], $targetFile);


// Query untuk menyimpan data buku ke database
$sql = "INSERT INTO buku (isbn, judul, kategori, stok, file_ebook) VALUES ('$isbn', '$judul', '$kategori', $stok, '$ebook')";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>