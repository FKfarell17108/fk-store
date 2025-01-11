<?php
session_start(); // Memulai sesi

// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fkstore";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("!!!: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $conn->real_escape_string($_POST['nama']);
$email = $conn->real_escape_string($_POST['email']);
$pesan = $conn->real_escape_string($_POST['pesan']);

// Query untuk memasukkan data
$sql = "INSERT INTO tbl_bantuan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pesan Bantuan Anda Berhasil Dikirim.'); window.location='bantuan.php';</script>";
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>