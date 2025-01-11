<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap">

  <!-- SHORCUT ICON START -->
  <link rel="shortcut icon" href="../../../assets/images/icon.png" type="image/x-icon">
  <!-- SHORCUT ICON END -->

  <!-- TITLE START -->
  <title>FKStore | Halaman Detail Produk</title>
  <!-- TITLE END -->
</head>

<body>

  <div id="box">

    <?php
    include "../../koneksi/koneksi.php";

    $user = $_SESSION['username'];
    $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
    $ambiluser->bindparam(':user', $user);
    $ambiluser->execute();
    $data = $ambiluser->fetch(PDO::FETCH_OBJ);

    $id = $_GET['id'];
    $result = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang =:id");
    $result->bindparam(':id', $id);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_OBJ);

    ?>

    <h1>Detail Produk</h1>

    <form name="belanja" method="post" action="belanja_detailpro.php" enctype="multipart/form-data">

      <table class="article">
        <tr>
          <td></td>
          <td>
            <input type="hidden" name="id_user" value="<?php echo $data->id_user ?>">
            <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
            <img src="../../img/produk/<?php echo $row->nama_image ?>" width="100"><br><br>
          </td>
        </tr>

        <tr>
          <td>Produk</td>
          <td>
            <?php echo $row->nama_barang ?>
          </td>
        </tr>

        <tr>
          <td>Deskripsi</td>
          <td>
            <?php echo $row->deskripsi ?>
          </td>
        </tr>

        <tr>
          <td>Harga</td>
          <td>
            <input type="hidden" name="harga" value="<?php echo $row->harga; ?>">
            <?php echo "Rp. " . number_format($row->harga, 0, ',', '.') ?>
          </td>
        </tr>

        <tr>
          <td>Stok</td>
          <td>
            <input type="hidden" name="sisa" value="<?php echo $row->stok ?>">
            <?php echo " " . $row->stok ?>
          </td>
        </tr>

        <tr>
          <td>Ukuran</td>
          <td>
            <select name="ukuran">
              <option>None</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Quantity</td>
          <td>
            <input type="number" name="qty" min="1">
          </td>
        </tr>

        <tr>
          <td>Pengiriman</td>
          <td>
            <select name="kurir">
              <option>Pilih Kurir</option>
              <option value="POS">POS Indonesia</option>
              <option value="JNE">JNE</option>
              <option value="TIKI">TIKI</option>
              <option value="KILAT">KILAT</option>
              <option value="SICEPAT">SI-CEPAT</option>
              <option value="GOJEK">GO-JEK</option>
            </select>
          </td>
        </tr>

        <tr>
          <td></td>
          <td>

            <!-- WhatsApp Chat button -->
            <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <a class="tombol-hijau"
              href="https://wa.me/+6287856930401/?text=Hallo%20Admin FKStore!%20Saya%20Sangat%20Tertarik%20Dengan%20Produk%20Dari FKStore.">
              <i class="fab fa-whatsapp"></i></a>

            <button type="submit" name="belanja" class="tombol-biru">
              <i class="fas fa-shopping-cart"></i> Keranjang</button>

            <a class="tombol-merah" href="javascript:history.back()">Kembali</a>
          </td>
        </tr>
      </table>
    </form>
  </div>

  <style>
    /* Style Umum */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fff;
      color: #2a2a2a;
    }

    #box {
      background: #fff;
      width: 50%;
      margin: 20px auto;
      padding: 20px;
      box-shadow: 0 2px 5px #2a2a2a;
    }

    table.article {
      width: 100%;
      border-collapse: collapse;
    }

    table.article td,
    table.article th {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    /* Tombol */
    .tombol-hijau,
    .tombol-biru,
    .tombol-merah {
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

    .tombol-hijau {
      margin-right: 50px;
      background-color: #fff;
      color: #4CAF50;
    }

    .tombol-biru {
      margin-right: 50px;
      background-color: #fff;
      color: #2a2a2a;
    }

    .tombol-merah {
      background-color: #fff;
      color: #2a2a2a;
    }

    .tombol-hijau:hover {
      background-color: #4CAF50;
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 4px 4px #4CAF50;
    }

    .tombol-biru:hover,
    .tombol-merah:hover {
      background-color: #2a2a2a;
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 4px 4px #2a2a2a;
    }

    .tombol-hijau:active,
    .tombol-biru:active,
    .tombol-merah:active {
      transform: scale(0.95);
    }

    /* Animasi */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    #box {
      animation: fadeIn 1s;
    }

    select,
    input[type="number"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    input[type="number"]:focus,
    select:focus {
      border-color: #2a2a2a;
    }

    /* Responsif untuk mobile */
    @media (max-width: 480px) {
      #box {
        margin-top: 70px;
        width: 80%;
        /* Lebih lebar untuk mobile */
      }

      .logo {
        top: 10px;
        left: 10px;
        gap: 5px;

      }

      .logo img {
        width: 36px;
        /* Ukuran logo lebih kecil */
      }

      .logo a {
        font-size: 18px;
        /* Ukuran font lebih kecil */
      }

      table.article td,
      table.article th {
        padding: 4px;
        /* Padding lebih kecil */
      }
    }

    /* Responsif untuk mobile */
    @media (max-width: 480px) {

      .tombol-hijau,
      .tombol-biru,
      .tombol-merah {
        padding: 4px 4px;
        font-size: 10px;
        display: inline-block;
        margin-right: 10px;
      }
    }
  </style>

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

  <script>

    IDR(function () {
      var selectedClass = "";
      IDR("p").click(function () {
        selectedClass = IDR(this).attr("data-rel");
        IDR("#portfolio").fadeTo(50, 0.1);
        IDR("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function () {
          IDR("." + selectedClass).fadeIn();
          IDR("#portfolio").fadeTo(50, 1);
        }, 500);

      });
    });

  </script>
</body>

</html>