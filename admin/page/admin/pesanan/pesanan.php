<!-- SHORCUT ICON START -->
<link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
<!-- SHORCUT ICON END -->

<!-- TITLE START -->
<title>FKStore Admin | Barang</title>
<!-- TITLE END -->

<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div id="box">
  <?php
  include 'koneksi/koneksi.php';

  $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
  $batas = 10;
  $posisi = ($hal - 1) * $batas;

  $query = $conn->prepare("SELECT * FROM tbl_pesanan
                          JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
                          JOIN tbl_users ON tbl_pesanan.id_user=tbl_users.id_user
                          ORDER BY date_in DESC");
  $query->execute();
  $data = $query->fetchAll();
  $count = $query->rowCount();
  ?>

  <h2>Daftar Pesanan</h2>

  <table class="news">
    <tr>
      <th style="text-align: center;">No</th>
      <th style="text-align: center;">Id Pesanan</th>
      <th style="text-align: center;">Id User</th>
      <!-- <th style="text-align: center;">Produk</th> -->
      <th style="text-align: center;">Nama Barang</th>
      <th style="text-align: center;">Id Barang</th>
      <th style="text-align: center;">Kategori</th>
      <th style="text-align: center;">Ukuran</th>
      <th style="text-align: center;">Qty</th>
      <th style="text-align: center;">Kurir</th>
      <th style="text-align: center;">Tanggal Masuk</th>
      <th style="text-align: center;">Total</th>
      <th style="text-align: center;">Aksi</th>
    </tr>
    <?php
    $no = $posisi + 1; // Mengatur nilai $no berdasarkan posisi halaman
    $jumlah = 0;
    foreach ($data as $value): ?>
      <tr>
        <td style="white-space: nowrap;"><?php echo $no; ?></td>
        <td style="white-space: nowrap;"><?php echo $value['id_pesanan'] ?></td>
        <td style="white-space: nowrap;"><?php echo "(" . $value['id_user'] . ") " . $value['fullname'] ?></td>
        <!-- <td style="white-space: nowrap;">
          <img src="img/produk/<?= $value['nama_image']; ?>" width="20%">
        </td> -->
        <td style="white-space: nowrap;"><?php echo $value['nama_barang'] ?></td>
        <td style="white-space: nowrap;"><?php echo $value['id_barang'] ?></td>
        <td style="white-space: nowrap;"><?php echo $value['kategori'] ?></td>
        <td style="white-space: nowrap;"><?php echo $value['ukuran'] ?></td>
        <td style="white-space: nowrap;"><?php echo $value['qty'] ?></td>
        <td style="white-space: nowrap;"><?php echo $value['kurir'] ?></td>
        <td style="white-space: nowrap;"><?php echo date('d/m/Y', strtotime($value['date_in'])); ?></td>
        <td style="white-space: nowrap;"><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.') ?></td>
        <td style="white-space: nowrap;">
          <a class="tombol-biru" href="?page=edit_produk&id=<?php echo $value['id_barang']; ?>"><i class="fas fa-check-circle"></i></a>
          <a class="tombol-merah" href="?page=pesanan_detail&id=<?php echo $value['id_pesanan']; ?>"><i class="fas fa-info-circle"></i></a>
        </td>
      </tr>

      <?php
      $no++; // Increment nilai $no setiap kali data ditampilkan
    endforeach;
    ?>
  </table>
  <br>
  <?php

  if ($count == 0) {
    echo "<center>-- Belum ada data barang --</center>";
  }

  $semua = $conn->prepare("SELECT * FROM tbl_pesanan");
  $semua->execute();
  $jmldata = $semua->rowCount();
  $jmlhal = ceil($jmldata / $batas);
  $sebelum = $hal - 1;
  $berikut = $hal + 1;

  echo "<div class='paging'>";
  if ($hal > 1) {
  }
  // Menampilkan nomor halaman
  for ($i = 1; $i <= $jmlhal; $i++) {
    if ($i == $hal) {
      echo "<span class='current'>$i</span>";
    } else {
      echo "<span><a href='?page=barang&hal=$i'>$i</a></span>";
    }
  }
  if ($hal < $jmlhal) {
  }
  echo "</div>";

  ?>
</div>

<style>
  /* Title styles */
  .box-title p {
    font-size: 24px;
    font-weight: bold;
    color: #2a2a2a;
    text-align: center;
  }

  /* Table styles */
  .news {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  .news th,
  .news td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
  }

  .news tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  /* Button styles */
  .tombol-biru,
  .tombol-merah {
    background-color: #fff;
    font-size: 15px;
    color: #2a2a2a;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    display: inline-block;
    font-weight: bold;
    box-shadow: 0 2px 2px #2a2a2a;
  }

  .tombol-biru:hover {
    background-color: #4CAF50;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .tombol-merah:hover {
    background-color: #007bff;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .tombol-tambah {
    margin-top: 15px;
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

  .tombol-tambah:hover {
    background-color: #2a2a2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  /* Paging styles */
  .paging {
    margin-top: 20px;
    text-align: center;
  }

  .paging span,
  .paging a {
    display: inline-block;
    padding: 6px 12px;
    margin: 2px;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    color: #333;
  }

  .paging a {
    width: 44px;
    height: 44px;
    background-color: #fff;
    color: #2a2a2a;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    line-height: 34px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.3s;
    box-shadow: 0 2px 2px #2a2a2a;
    position: relative;
    /* Added */
    overflow: hidden;
    /* Added */
  }

  .paging a:hover {
    background-color: #2a2a2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .paging a::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 150%;
    height: 150%;
    background-color: #2a2a2a;
    z-index: -1;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.5s;
  }

  .paging a:hover::before {
    transform: translate(-50%, -50%) scale(1);
  }

  /* Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  #box {
    animation: fadeIn 0.5s ease;
  }
</style>