<?php
    // Membuat koneksi database ke tabel 'secret_codes'
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fkstore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Memeriksa apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $secret_code = $_POST['secret_code'];

        // Query database untuk memeriksa apakah kode rahasia benar
        $sql = "SELECT * FROM secret_codes WHERE code = '$secret_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0 && $secret_code === '036593264') {
            // Kode benar, redirect ke halaman admin
            header("Location: ../admin/index.php");
            exit();
        } else {
            echo "<script>alert('Kode rahasia salah. Silakan coba lagi.')</script>";
            echo "<script>window.history.back();</script>";
        }
    }
    ?>