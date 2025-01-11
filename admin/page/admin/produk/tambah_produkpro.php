<div id="box">

	<h1>Tambah Produk</h1>
	<?php

	include 'koneksi/koneksi.php';

	$nama_barang = $_POST['nama_barang'];
	$desk = $_POST['deskripsi'];
	$kategori = $_POST['kategori']; // Menambahkan variabel kategori
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	$name_image = $_FILES['gambar']['name'];
	$loc_image = $_FILES['gambar']['tmp_name'];
	$type_image = $_FILES['gambar']['type'];

	$date = date('Ymd');

	$cek = array('png', 'jpg', 'jpeg', 'gif');
	$x = explode('.', $name_image);
	$extension = strtolower(end($x));
	$size_image = $_FILES['gambar']['size'];


	if (in_array($extension, $cek) === TRUE) {
		if ($size_image < 5044070) {

			move_uploaded_file($loc_image, "img/produk/$name_image");

			try {
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo = $conn->prepare('INSERT INTO tbl_barang (nama_barang, deskripsi, kategori, harga, stok, created, nama_image, type_image, size_image)
									values (:nama_barang, :deskripsi, :kategori, :harga, :stok, :created, :nama_image, :type_image, :size_image)');

				$insertdata = array(
					':nama_barang' => $nama_barang,
					':deskripsi' => $desk,
					':kategori' => $kategori, // Menambahkan kategori ke dalam array data
					':harga' => $harga,
					':stok' => $stok,
					'created' => $date,
					':nama_image' => $name_image,
					':type_image' => $type_image,
					':size_image' => $size_image
				);

				$pdo->execute($insertdata);

				echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
				echo "<center><b>Produk Berhasil Ditambahkan</b></center>";
				echo "</br>";
				echo "<meta http-equiv='refresh' content='1;
			url=?page=produk'>";

			} catch (PDOexception $e) {
				print "Gagal: " . $e->getMessage() . "<br/>";
				die();
			}



		} else {
			echo "<center><img src='img/icons/cancel.png' width='60'></center>";
			echo "<center><b>ukuran file gambar terlalu besar</b></center>";
			echo "<center><a href='?page=tambah_produk'>back</a></center>";
			echo "</br>";
		}
	} else {
		echo "<center><img src='img/icons/cancel.png' width='60'></center>";
		echo "<center><b>ekstensi file tidak sesuai</b></center>";
		echo "<center><a href='?page=tambah_produk'>back</a></center>";
		echo "</br>";
	}

	?>
	<!-- code by farell kurniawan -->
</div>