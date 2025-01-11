<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- SHORCUT ICON START -->
  <link rel="shortcut icon" href="../../../assets/images/icon.png" type="image/x-icon">
  <!-- SHORCUT ICON END -->

  <!-- TITLE START -->
  <title>FKStore | Halaman Keranjang</title>
  <!-- TITLE END -->
</head>

<body>
  <div id="box">

    <?php include ("keranjang.php") ?>


    <?php

    include '../../koneksi/koneksi.php';

    if (isset($_SESSION['username']))
      $user = $_SESSION['username'];
    $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
    $ambiluser->bindparam(':user', $user);
    $ambiluser->execute();
    $data = $ambiluser->fetch(PDO::FETCH_OBJ);
    if (isset($_SESSION['username']))
      $id = $data->id_user;

    $query = $conn->prepare("SELECT * FROM tbl_pesanan
                            JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
                            WHERE tbl_pesanan.id_user=:id
                            GROUP BY tbl_pesanan.id_pesanan");

    $query->bindparam(':id', $id);
    $query->execute();
    $data = $query->fetchAll();
    $count = $query->rowCount();

    ?>

    <div class="container">
      <h2 style="text-align: center;">Pesanan Selesai</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Quantity</th>
            <th>Kurir</th>
            <th>Tanggal Masuk</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>

        <?php

        $no = 1;
        foreach ($data as $value): ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $value['id_pesanan'] ?></td>
            <td><img width="50%" src="../../img/produk/<?php echo $value['nama_image'] ?>"></td>
            <td><?php echo $value['nama_barang'] ?></td>
            <!-- <td><?php echo "Rp. " . $value['harga'] ?></td> Awal -->
            <td><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $value['ukuran'] ?></td>
            <td><?php echo $value['qty'] ?></td>
            <td><?php echo $value['kurir'] ?></td>
            <td><?php echo date('d/m/Y', strtotime($value['date_in'])); ?></td>
            <td><?php echo "Rp. " . number_format($value['total'], 0, ',', '.'); ?></td>
            <td>
              <a class="tombol-check" href="#">
                <i class="fas fa-check-circle"></i></a>
              <a class="tombol-buy" href="belanja_detail.php?id=<?php echo $value['id_barang']; ?>">
                <i class="fas fa-shopping-cart"></i></a>
            </td>
            <style>
              .tombol-check {
                background-color: #fff;
                color: #2a2a2a;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s, transform 0.3s;
                display: inline-block;
                font-weight: bold;
                box-shadow: 0 2px 2px #2a2a2a;
              }

              .tombol-check:hover {
                background-color: #4CAF50;
                color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 4px 4px #2a2a2a;
              }

              .tombol-buy {
                margin-top: 10px;
                background-color: #fff;
                color: #2a2a2a;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s, transform 0.3s;
                display: inline-block;
                font-weight: bold;
                box-shadow: 0 2px 2px #2a2a2a;
              }

              .tombol-buy:hover {
                background-color: #007bff;
                color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 4px 4px #2a2a2a;
              }
            </style>
          </tr>

          <?php
          $no++;
        endforeach;
        ?>

      </table>
      <a href="#box" class="checkout-btn"><i class='bx bx-caret-up-circle'></i></a>
      <br>
      <?php
      if ($count == 0) {
        echo "<center>-- Belum Ada Pembelian Barang --</center>";
        echo "<br>";
      }
      ?>
    </div>

    <!-- SCROLL ANIMATION -->
    <script src="../../../assets/js/scroll.js"></script>

    <!-- jQuery -->
    <script src="../../../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../../assets/js/popper.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../../../assets/js/owl-carousel.js"></script>
    <script src="../../../assets/js/accordions.js"></script>
    <script src="../../../assets/js/datepicker.js"></script>
    <script src="../../../assets/js/scrollreveal.min.js"></script>
    <script src="../../../assets/js/waypoints.min.js"></script>
    <script src="../../../assets/js/jquery.counterup.min.js"></script>
    <script src="../../../assets/js/imgfix.min.js"></script>
    <script src="../../../assets/js/slick.js"></script>
    <script src="../../../assets/js/lightbox.js"></script>
    <script src="../../../assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="../../../assets/js/custom.js"></script>

    <!-- Data Rel -->
    <script src="../../../assets/js/data-rel.js"></script>