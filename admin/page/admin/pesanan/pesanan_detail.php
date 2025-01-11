<div id="box">
   <h1>Detail Pesanan</h1>

   <?php

   include 'koneksi/koneksi.php';
   $id = $_GET['id'];
   $query = $conn->prepare("SELECT * FROM tbl_pesanan
   JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
   JOIN tbl_users ON tbl_pesanan.id_user=tbl_users.id_user
   WHERE tbl_pesanan.id_pesanan = :id
   ORDER BY date_in DESC");
   $query->bindParam(':id', $id);
   $query->execute();
   $data = $query->fetch(PDO::FETCH_OBJ);

   ?>
   <table class="article">
      <tr>
         <td>Id Pesanan</td>
         <td><?php echo $data->id_pesanan; ?></td>
      </tr>
      <tr>
         <td>Id User</td>
         <td><?php echo "[" . $data->id_user . "] " . $data->fullname; ?></td>
      </tr>
      <tr>
         <td>Produk</td>
         <td><img src="img/produk/<?= $data->nama_image; ?>" width="20%"></td>
      </tr>
      <tr>
         <td>Nama Barang</td>
         <td><?php echo $data->nama_barang; ?></td>
      </tr>
      <tr>
         <td>Id Barang</td>
         <td><?php echo $data->id_barang; ?></td>
      </tr>
      <tr>
         <td>Kategori</td>
         <td><?php echo $data->kategori; ?></td>
      </tr>
      <tr>
         <td>Harga</td>
         <td><?php echo "Rp. " . number_format($data->harga, 0, ',', '.'); ?></td>
      </tr>
      <tr>
         <td>Ukuran</td>
         <td><?php echo $data->ukuran; ?></td>
      </tr>
      <tr>
         <td>Qty</td>
         <td><?php echo $data->qty; ?></td>
      </tr>
      <tr>
         <td>Kurir</td>
         <td><?php echo $data->kurir; ?></td>
      </tr>
      <tr>
         <td>Tanggal Masuk</td>
         <td><?php echo $data->date_in; ?></td>
      </tr>
      <tr>
         <td>Total Pembayaran</td>
         <td><?php echo "Rp. " . number_format($data->total, 0, ',', '.'); ?></td>
      </tr>
      <tr>
         <td>Pemesan</td>
         <td><?php echo "[" . $data->id_user . "] " . $data->fullname; ?></td>
      </tr>
      <tr>
         <td>Email</td>
         <td><?php echo $data->email; ?></td>
      </tr>
      <tr>
         <td>Alamat</td>
         <td><?php echo $data->alamat; ?></td>
      </tr>
      <tr>
         <td>No Telepon</td>
         <td><?php echo $data->nomor_telepon; ?></td>
      </tr>
      <td></td>
      <td>
         <a class="tombol-biru" href="javascript:history.back()">Kembali</a>
      </td>
      </tr>
   </table>
   <br>
</div>

<style>
   /* Style umum */
   body {
      font-family: 'Arial', sans-serif;
      background-color: #fff;
      color: #2a2a2a;
      line-height: 1.6;
   }

   /* Style untuk tabel */
   .article {
      width: fit-content;
      margin: 20px auto;
      border-collapse: collapse;
   }

   .article td,
   .article th {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
   }

   .article th {
      color: #2a2a2a;
   }

   .article tr:nth-child(even) {
      background-color: #f2f2f2;
   }

   .article tr:hover {
      background-color: #ddd;
   }

   /* Style untuk tombol */
   .tombol-biru {
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

   .tombol-biru:hover {
      background-color: #2a2a2a;
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 4px 4px #2a2a2a;
   }

   /* Animasi fade-in untuk box */
   #box {
      animation: fadeIn 1s;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
   }

   @keyframes fadeIn {
      from {
         opacity: 0;
      }

      to {
         opacity: 1;
      }
   }
</style>