<?php
// Lakukan koneksi ke database di sini
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'fkstore';

// Buat koneksi PDO
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    exit('Failed to connect to database: ' . $exception->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['comment_id'])) {
        $commentId = $_POST['comment_id'];
        // Tambahkan like ke komentar dengan ID tertentu dalam database
        $stmt = $pdo->prepare('UPDATE comments SET likes = likes + 1 WHERE id = ?');
        $stmt->execute([$commentId]);
        echo "Comment liked successfully!";
        exit;
    }
}
echo "Failed to like comment!";
?>
