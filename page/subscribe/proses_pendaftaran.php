<?php

include '../../lib/koneksi.php';

if(isset($_POST['name']) && isset($_POST['email'])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($nama)) {
        $query = $conn->prepare("INSERT INTO tbl_langganan (nama, email) VALUES (:nama, :email)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);

        if ($query->execute()) {
            echo "<script>alert('Terima Kasih Telah Berlangganan Dengan Kami!'); window.location.href = '../../home.php';</script>";
        } else {
            echo "<script>alert('Gagal. Silakan Coba Lagi.'); window.location.href = 'subscribe.php';</script>";
        }   
    } else {
        echo "<script>showPopup('Nama Tidak Boleh Kosong!')</script>";
    }
} else {
    echo "<script>showPopup('Data Yang Diperlukan Tidak Tersedia!')</script>";
}
?>
