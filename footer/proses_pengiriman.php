<?php
include '../lib/koneksi.php'; // Memasukkan file koneksi database

// Mengecek apakah form telah disubmit melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $nama_penerima = isset($_POST['nama_penerima']) ? $_POST['nama_penerima'] : null;
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : null;
    $kode_pos = isset($_POST['kode_pos']) ? $_POST['kode_pos'] : null;
    $nomor_telepon = isset($_POST['nomor_telepon']) ? $_POST['nomor_telepon'] : null;

    // Mengecek apakah nama_penerima sudah ada di database
    $queryCek = "SELECT COUNT(*) FROM tbl_pengiriman WHERE nama_penerima = :nama_penerima";
    $stmtCek = $conn->prepare($queryCek);
    $stmtCek->bindParam(':nama_penerima', $nama_penerima);
    $stmtCek->execute();
    $jumlah = $stmtCek->fetchColumn();

    if ($jumlah > 0) {
        // Jika nama_penerima sudah ada, tampilkan popup
        echo "<script>alert('Nama penerima sudah dipakai. Silakan gunakan nama lain.'); window.location='pengiriman.php';</script>";
        exit();
    } else {
        // Jika nama_penerima belum ada, lanjutkan dengan penyimpanan data
        $sql = "INSERT INTO tbl_pengiriman (nama_penerima, alamat, kode_pos, nomor_telepon) VALUES (:nama_penerima, :alamat, :kode_pos, :nomor_telepon)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nama_penerima', $nama_penerima);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':kode_pos', $kode_pos);
        $stmt->bindParam(':nomor_telepon', $nomor_telepon);

        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil disimpan.'); window.location='pengiriman.php';</script>";
            exit();
        } else {
            echo "Terjadi kesalahan: " . $stmt->errorInfo()[2];
        }
    }

    // Menutup koneksi database
    $conn = null;
} else {
    // Jika form tidak disubmit melalui POST, arahkan kembali ke halaman formulir
    header("Location: pengiriman.php");
    exit();
}
?>