<div id="box">

<h1>Edit Produk</h1>

<?php

  include 'koneksi/koneksi.php';

$id = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$name_image = $_FILES['gambar']['name'];
$loc_image = $_FILES['gambar']['tmp_name'];
$type_image = $_FILES['gambar']['type'];
$size_image = $_FILES['gambar']['size'];

$create = date('Ymd');

$allowed_extensions = array('png','jpg','jpeg','gif');
$file_extension = strtolower(pathinfo($name_image, PATHINFO_EXTENSION));
$size_image  		= $_FILES['gambar']['size'];


// Cek apakah ada gambar yang diunggah
if (!empty($loc_image)) {
	// Cek ekstensi file
	if (in_array($file_extension, $allowed_extensions)) {
		// Cek ukuran file
		if ($size_image < 5044070) { // Ubah sesuai dengan kebutuhan Anda
			// Hapus gambar lama jika ada
			$query = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang = :id ");
			$query->bindParam(':id', $id);
			$query->execute();
			$row = $query->fetch(PDO::FETCH_OBJ);

			if ($row->nama_image) {
				unlink("img/produk/$row->nama_image");
			}

			// Pindahkan gambar baru ke direktori yang tepat
			move_uploaded_file($loc_image, "img/produk/$name_image");

			// Persiapkan dan jalankan query SQL untuk memperbarui data barang
			try {
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo = $conn->prepare('UPDATE tbl_barang SET
								 		  nama_barang = :nama_barang,
										  kategori = :kategori,
                                          deskripsi = :deskripsi,
                                          harga = :harga,
                                          stok = :stok,
                                          created = :created,
                                          nama_image = :nama_image,
                                          type_image = :type_image,
                                          size_image = :size_image
                                          WHERE id_barang = :id_barang');

                    $updatedata = array(
                        ':nama_barang' => $nama_barang,
						':kategori' => $kategori,
                        ':deskripsi' => $deskripsi,
                        ':harga' => $harga,
                        ':stok' => $stok,
                        ':created' => $created,
                        ':nama_image' => $name_image,
                        ':type_image' => $type_image,
                        ':size_image' => $size_image,
                        ':id_barang' => $id
                    );

      			$pdo->execute($updatedata);

				echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
      			echo "<center><b>data Produk berhasil diubah</b></center>";
            	echo "</br>";
				echo"<meta http-equiv='refresh' content='1;url=?page=produk'>";
      		} catch (PDOexception $e) {
      			print "Insert data gagal: " . $e->getMessage() . "<br/>";
      		    die();
      		}
			} else {
				echo "<center><img src='img/icons/cancel.png' width='60'></center>";
			  	echo "<center><b>ukuran file gambar terlalu besar</b></center>";
				echo "<center><a href='?page=produk'>kembali</a></center>";
        		echo "</br>";
      		}
			} else {
				echo "<center><img src='img/icons/cancel.png' width='60'></center>";
			 	echo"<center><b>ekstensi file tidak sesuai</b></center>";
				echo "<center><a href='?page=produk'>back</a></center>";
        		echo "</br>";
			}
			} else {
				echo "<center><img src='img/icons/cancel.png' width='60'></center>";
      			echo "<center><b>Gambar tidak diunggah</b></center>";
        		echo "<center><a href='?page=produk'>Kembali</a></center>";
        		echo "<br>";
   			}

			try {
				$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo = $conn->prepare('UPDATE tbl_barang SET
								  nama_barang = :nama_barang,
								  kategori = kategori
                                  deskripsi = :deskripsi,
                                  harga = :harga,
                                  stok = :stok,
                                  created = :created,
                                  nama_image = :nama_image,
                                  type_image = :type_image,
                                  size_image = :size_image,
                                  WHERE id_barang = :id_barang');

				$updatedata = array(
					':nama_barang' => $nama_barang, 
					':kategori' => $kategori,
					':deskripsi' => $deskripsi, 
					':harga' => $harga, 
					':stok' => $stok, 
					':created' => $date, 
					':nama_image' => $nama_image, 
					':type_image' => $type_image, 
					':size_image' => $size_image, 
					':id_barang' => $id);
				$pdo->execute($updatedata);

				echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
				echo "<center><b>Data Produk Berhasil Diubah</b></center>";
        echo "</br>";
				echo"<meta http-equiv='refresh' content='1;
		    url=?page=produk'>";


			} catch (PDOexception $e) {
				print "Gagal: " . $e->getMessage() . "<br/>";
				 die();
			}

		 ?>

</div>
