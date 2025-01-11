<!-- SHORCUT ICON START -->
<link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
<!-- SHORCUT ICON END -->

<!-- TITLE START -->
<title>FKStore Admin | Edit Barang</title>
<!-- TITLE END -->

<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

<div id="box">


  <?php
  include "koneksi/koneksi.php";

  $id = $_GET['id'];
  $result = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang =:id");
  $result->bindparam(':id', $id);
  $result->execute();
  $row = $result->fetch(PDO::FETCH_OBJ);
  ?>

  <h2>Edit Produk</h2>

  <form name="edit" method="post" action="?page=edit_produkpro" enctype="multipart/form-data">

    <table class="table table-bordered table-striped">
      <tr>
        <td></td>
        <td>
          <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
          <img src="img/produk/<?php echo $row->nama_image ?>" width="100"><br><br>
          <input type="file" name="gambar">
        </td>
      </tr>

      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="nama_barang" size="50" value="<?php echo $row->nama_barang ?>" required>
        </td>
      </tr>

      <tr>
        <td>Kategori</td>
        <td>
          <input type="text" name="kategori" size="50" value="<?php echo $row->kategori ?>" required>
        </td>
      </tr>

      <tr>
        <td>Deskripsi</td>
        <td>
          <input type="text" name="deskripsi" size="50" value="<?php echo $row->deskripsi ?>" required>
        </td>
      </tr>

      <tr>
        <td>Harga</td>
        <td>
          <input type="text" name="harga" size="50" value="<?php echo $row->harga ?>" required>
        </td>
      </tr>

      <tr>
        <td>Stok</td>
        <td>
          <input type="text" name="stok" size="50" value="<?php echo $row->stok ?>" required>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>
          <input class="tombol-biru" type="submit" name="edit" value="Ubah & Simpan">
        </td>
        <td>
          <a class="tombol-merah" href="?page=produk">Tutup</a>
        </td>
      </tr>
    </table>

  </form>

</div>

<style>
  /* Form styles */
  #box h2 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
  }

  .table {
    width: 100%;
  }

  .table td {
    padding: 10px 0;
  }

  .table input[type="text"],
  .table input[type="file"],
  .table input[type="submit"],
  .table a {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  .table input[type="submit"],
  .table a {
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

  .table input[type="submit"]:hover,
  .table a:hover {
    background-color: #2a2a2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
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
</style>