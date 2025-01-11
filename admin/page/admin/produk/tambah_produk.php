<div id="box">

  <h1>Tambah Produk</h1>
  <form name="add" method="post" action="?page=tambah_produkpro" enctype="multipart/form-data">

    <table class="article">

      <tr>
        <td>Gambar</td>
        <td>
          <input type="file" name="gambar" required>
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="nama_barang" size="50" placeholder="ex:  casuals" required>
        </td>
      </tr>

      <tr>
        <td>Deskripsi</td>
        <td>
          <input type="text" name="deskripsi" size="50" placeholder="ex:  casuals" required>
        </td>
      </tr>

      <tr>
        <td>Kategori</td>
        <td>
          <input type="text" name="kategori" size="50" placeholder="ex:  korean" required>
        </td>
      </tr>

      <tr>
        <td>Harga</td>
        <td>
          <input type="text" name="harga" size="50" placeholder="ex: 130000" required>
        </td>
      </tr>

      <tr>
        <td>Stok</td>
        <td>
          <input type="text" name="stok" size="50" placeholder="ex: 100" required>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>
          <input class="tombol-biru" type="submit" name="add" value="Tambah & Simpan">
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
  #box h1 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 10px;
  }

  .article {
    width: 100%;
  }

  .article td {
    padding: 10px 0;
  }

  .article input[type="text"],
  .article input[type="file"],
  .article input[type="submit"],
  .article a {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  .article input[type="submit"],
  .article a {
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

  .article input[type="submit"]:hover,
  .article a:hover {
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

  #box {
    animation: fadeIn 0.5s ease;
  }
</style>