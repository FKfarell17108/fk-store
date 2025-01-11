<div id="box">
<h1>Hapus Produk</h1>


<?php
include('koneksi/koneksi.php');

		$id = $_GET['id'];

    $query = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang =:id");
    $query->bindparam(':id', $id);
    $query->execute();
    $row=$query->fetch(PDO::FETCH_OBJ);

      unlink("img/produk/$row->nama_image");

		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_barang WHERE id_barang = :id");
			$deletedata = array(':id' => $id);

			$pdo->execute($deletedata);

      echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
			echo "<center><b>Data Produk Berhasil Dihapus</b></center>";
      echo "</br>";
      echo"<meta http-equiv='refresh' content='1;
      url=?page=produk'>";

		} catch (PDOexception $e) {
			print "Gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>

</div>
