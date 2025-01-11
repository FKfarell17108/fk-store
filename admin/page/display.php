<div id="box">

  <?php
  if (isset($_SESSION['username']) == "") { ?>
    <div class="pesan">
      <p>Masuk dengan <b>akun</b> terlebih dahulu sebelum mulai belanja, belum punya akun ?
        <a href="page/daftar.php" class="tombol-biru">Daftar</a>
      </p>
    </div>

  <?php } ?>

  <table>
    <tr>

      <?php

      include 'koneksi/koneksi.php';

      $no = 1;
      $query = $conn->prepare("SELECT * FROM tbl_barang");
      $query->execute();

      $data = $query->fetchAll();

      foreach ($data as $value) { ?>

        <td class="list">
          <img src="img/produk/<?php echo $value['nama_image']; ?>" width="150">
          <br><?php echo $value['nama_barang']; ?>
          <!-- <br><b><?php echo "Rp. " . $value['harga']; ?></b> Awal-->
          <br><b><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.'); ?></b>
          <br>
          <?php

          $id = $value['id_barang'];
          $query = $conn->prepare("SELECT SUM(qty)AS jumlah FROM tbl_pesanan WHERE id_barang=:id");
          $query->bindparam(':id', $id);
          $query->execute();
          $data = $query->fetch(PDO::FETCH_OBJ);
          $hasil = $data->jumlah;

          $stok = $value['stok'];
          $sisa = ($stok - $hasil);
          ?>

          <button type="button">Stok : <?php
          if ($sisa > 0)
            echo $sisa;
          else
            echo "Habis";
          ?></button>

          <?php
          if ($sisa > 0) {
            if (isset($_SESSION['username']) != "") { ?>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
              <a class="link" href="?page=belanja_detail&id=<?php echo $value['id_barang']; ?>&st=<?php echo $sisa; ?>"><i
                  class="fas fa-shopping-cart"></i></a>
            <?php }
          } ?>
        </td>
        <?php
        // Banyaknya Content Perbaris
        if ($no % 5 == 0)
          echo "</tr><tr>";
        $no++;
      } ?>
    </tr>
  </table>
</div>

<style>
  .responsive-table {
    overflow-x: auto;
  }

  @media (max-width: 720px) {
    .responsive-table {
      overflow-x: auto;
    }
  }

  /* Gaya dasar untuk konten produk */
  #box {
    margin: 15px;
    padding: 10px;
    text-align: center;
  }

  .list {
    padding: 50px;
    text-align: center;
    border: 1px solid #aaa;
  }

  .list img {
    width: 150px;
    height: auto;
    margin-bottom: 10px;
  }

  .list button {
    background-color: #2a2a2a;
    color: #fff;
    padding: 5px 10px;
    border: none;
    cursor: default;
    border-radius: 5px;
    margin-top: 10px;
    margin-right: 30px;
  }

  .list a.link {
    color: #2a2a2a;
    text-decoration: none;
    font-size: 19px;
  }

  .list a.link:hover {
    color: #aaa;
  }

  /* Animasi untuk tombol belanja */
  @keyframes pulse {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.1);
    }

    100% {
      transform: scale(1);
    }
  }

  .list a.link i {
    animation: pulse 1s infinite;
  }

  @media (max-width: 768px) {
    .responsive-table {
      width: 100%;
      overflow-x: auto;
    }

    table {
      width: 100%;
    }

    .list {
      display: block;
      width: 100%;
      margin-bottom: 20px;
    }

    .list img {
      width: 50%;
      /* Membuat gambar responsif */
    }

    nav.main-nav ul {
      flex-direction: column;
    }
  }
</style>