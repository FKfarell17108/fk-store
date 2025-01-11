<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    include '../../lib/koneksi.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = $conn->prepare("INSERT INTO tbl_message (name, email, message) VALUES (:name, :email, :message)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':message', $message);

    if ($query->execute()) {
        // Penggunaan echo untuk menampilkan pesan terima kasih
        echo "<script>alert('Terima Kasih Telah Mengirim Pesan Pada Kami!');</script>";
        // Redirect ke halaman contact.php setelah menampilkan pesan
        echo "<script>window.location.href = 'contact.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal. Silakan coba lagi.');</script>";
    }
}
?>
