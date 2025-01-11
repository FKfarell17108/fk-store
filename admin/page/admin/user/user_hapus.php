<?php
include ('lib/koneksi.php');

$id = $_GET['id'];
// code by farell kurniawan
try {
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$hapus = $conn->prepare("DELETE FROM tbl_users WHERE id_user = :id");
	$deleteuser = array(':id' => $id);
	$hapus->execute($deleteuser);
	// code by farell kurniawan
	echo "<script>alert('User berhasil dihapus');window.location='?page=user'</script>";
	// code by farell kurniawan
} catch (PDOexception $e) {
	echo "<script>alert('Hapus user gagal: " . $e->getMessage() . "');</script>";
	die();
}
?>