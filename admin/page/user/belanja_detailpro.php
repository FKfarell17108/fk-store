<div id="box">

  <?php

  include '../../koneksi/koneksi.php';

  $iduser = $_POST['id_user'];
  $idbarang = $_POST['id_barang'];
  $harga = $_POST['harga'];
  $date = date('Ymd');
  $ukuran = $_POST['ukuran'];
  $qty = $_POST['qty'];
  $kurir = $_POST['kurir'];
  $total = $harga * $qty;
  $sisa = $_POST['sisa'];

  if ($qty > $sisa) {
    echo "<script>alert('Kuantitas Pesanan Melebihi Sisa Stok Barang');history.back();</script>";
  } elseif ($qty <= 0) {
    echo "<script>alert('Keliru Dalam Menginputkan Kuantitas');history.go(-1);</script>";
  } else {

    try {
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo = $conn->prepare('INSERT INTO tbl_keranjang (id_user, id_barang, ukuran, qty, kurir, date_in, total)
              values (:id_user, :id_barang, :ukuran, :qty, :kurir, :date_in, :total)');
      $insertdata = array(':id_user' => $iduser, ':id_barang' => $idbarang, ':ukuran' => $ukuran, 'qty' => $qty, 'kurir' => $kurir, ':date_in' => $date, ':total' => $total);

      $pdo->execute($insertdata);

      echo "<script>alert('Barang Berhasil Ditambahkan ke Keranjang');window.location='../products.php';</script>";

    } catch (PDOexception $e) {
      print "Gagal: " . $e->getMessage() . "<br/>";
      die();
    }
  }
  ?>
</div>