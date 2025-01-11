<!-- SHORCUT ICON START -->
<link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
<!-- SHORCUT ICON END -->

<!-- TITLE START -->
<title>FKStore Admin | Barang</title>
<!-- TITLE END -->

<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

<div id="box">
  <?php
  $status = "user";

  include 'koneksi/koneksi.php';

  $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
  $batas = 10;
  $posisi = ($hal - 1) * $batas;

  $query = $conn->prepare("SELECT * FROM tbl_users LIMIT $posisi, $batas");
  $query->execute();
  $data = $query->fetchAll();
  $count = $query->rowCount();
  ?>

  <h2>Daftar Users</h2>

  <div style="overflow-x: auto;">
    <table class="table-news">
      <tr>
        <th>No</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Username</th>
        <th>Aksi</th>
      </tr>
      <?php
      $no = $posisi + 1; // Mengatur nilai $no berdasarkan posisi halaman
      $jumlah = 0;
      foreach ($data as $value): ?>
        <tr>
          <td style="white-space: nowrap;"><?php echo $no; ?></td>
          <td style="white-space: nowrap;"><?php echo "(" . $value['id_user'] . ") " . $value['fullname'] ?></td>
          <td style="white-space: nowrap;"><?php echo $value['email'] ?></td>
          <td><?php echo $value['alamat'] ?></td>
          <td style="white-space: nowrap;"><?php echo $value['nomor_telepon'] ?></td>
          <td style="white-space: nowrap;"><?php echo $value['username'] ?></td>
          <td style="white-space: nowrap;">
            <a class="tombol-biru" href="?page=user_edit&id=<?php echo $value['id_user']; ?>"><i
                class='bx bx-edit-alt'></i>
            </a>
            <a class="tombol-merah" href="?page=user_hapus&id=<?php echo $value['id_user']; ?>"><i
                class='bx bx-trash'></i>
            </a>
            <a class="tombol-hijau" href="https://wa.me/<?php echo $value['nomor_telepon']; ?>?text=Hallo%20Kami%20Dari%20FkStore.%20Kami%20Sangat%20Terhormat%20Memiliki%20Customer%20Seperti%20Anda."><i
                class='bx bxl-whatsapp'></i>
            </a>
          </td>
        </tr>

        <?php
        $no++; // Increment nilai $no setiap kali data ditampilkan
      endforeach;
      ?>
    </table>
  </div>
  <br>
  <?php

  if ($count == 0) {
    echo "<center>-- Belum Ada Data Users --</center>";
  }

  $semua = $conn->prepare("SELECT * FROM tbl_users");
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
      echo "<span><a href='?page=user&hal=$i'>$i</a></span>";
    }
  }
  if ($hal < $jmlhal) {
  }
  echo "</div>";

  ?>
</div>

<style>
  /* Style untuk tabel */
  .table-news {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
  }

  .table-news th,
  .table-news td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  .table-news th {
    color: #2a2a2a;
  }

  .table-news tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  /* Animasi untuk hover */
  @keyframes highlightRow {
    from {
      background-color: #f2f2f2;
    }

    to {
      background-color: #ddd;
    }
  }

  /* Button styles */
  .tombol-biru,
  .tombol-merah,
  .tombol-hijau {
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
    background-color: #007bff;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .tombol-merah:hover {
    background-color: #dc3545;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .tombol-hijau:hover {
    background-color: #4CAF50;
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

  @media screen and (max-width: 900px) {
    .table-news {
      width: 100%;
      display: block;
      overflow-y: auto;
    }

    .table-news td {

      padding-left: 50%;

    }
  }
</style>