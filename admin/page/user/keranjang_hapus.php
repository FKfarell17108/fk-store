<!-- code by farell kurniawan -->

<?php

include('../../koneksi/koneksi.php');

		$id = $_GET['id'];

		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
			$deletedata = array(':id' => $id);
			$pdo->execute($deletedata);

      echo "<script>alert('Barang Dalam Keranjang Berhasil Dihapus');window.location='keranjang.php'</script>";

		} catch (PDOexception $e) {
			print "Gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
