<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../../../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Keranjang </title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../../../assets/css/loader.css">
    <!-- CSS FILES END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../../../preloader.php'; ?> -->
    <!-- PRELOADER END -->
    

    <?php
    session_start(); // Memastikan sesi telah dimulai
    
    include '../../koneksi/koneksi.php';

    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
        $ambiluser->bindparam(':user', $user);
        $ambiluser->execute();
        $data = $ambiluser->fetch(PDO::FETCH_OBJ);
        if ($data) {
            $id = $data->id_user;

            $query = $conn->prepare("SELECT nama_image,id,nama_barang,harga,ukuran,qty,kurir,date_in,total
                                FROM tbl_keranjang
                                JOIN tbl_barang ON tbl_keranjang.id_barang=tbl_barang.id_barang
                                WHERE tbl_keranjang.id_user=:id
                                GROUP BY tbl_keranjang.id");
            $query->bindparam(':id', $id);
            $query->execute();
            $data = $query->fetchAll();
            $count = $query->rowCount();
        } else {
            echo "Pengguna tidak ditemukan.";
        }
    } else {
        echo "Sesi username tidak ditemukan.";
    }

    ?>

    <div class="container">
        <h2 style="text-align: center;" id="top">Keranjang Belanja</h2>
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
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php

            $no = 1;
            $jumlah = 0;
            foreach ($data as $value): ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $value['id'] ?></td>
                    <td><img width="50%" src="../../img/produk/<?php echo $value['nama_image'] ?>"></td>
                    <td><?php echo $value['nama_barang'] ?></td>
                    <!-- <td><?php echo "Rp. " . $value['harga']; ?></td> Awal-->
                    <td><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.'); ?></td>
                    <td><?php echo $value['ukuran'] ?></td>
                    <td><?php echo $value['qty'] ?></td>
                    <td><?php echo $value['kurir'] ?></td>
                    <td><?php echo date('d/m/Y', strtotime(isset($value['date_in']) ? $value['date_in'] : '')); ?></td>
                    <td><?php echo "Rp. " . number_format($value['total'], 0, ',', '.'); ?></td>
                    <td>
                        <!-- Tombol Hapus              -->
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                        <a class="tombol-trash" href="keranjang_hapus.php?id=<?php echo $value['id']; ?>">
                            <i class="fas fa-trash-alt"></i></a>
                        <a class="tombol-cash"
                            href="pesanan.php?id=<?php echo $value['id'] ?>&jum=<?php echo $value['total'] ?>&bayar=<?php echo $value['id'] ?>">
                            <i class="fas fa-credit-card"></i>
                        </a>
                    </td>
                    <style>
                        .tombol-trash {
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

                        .tombol-trash:hover {
                            background-color: #dc3545;
                            color: #fff;
                            transform: translateY(-2px);
                            box-shadow: 0 4px 4px #2a2a2a;
                        }

                        .tombol-cash {
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

                        .tombol-cash:hover {
                            background-color: #007bff;
                            color: #fff;
                            transform: translateY(-2px);
                            box-shadow: 0 4px 4px #2a2a2a;
                        }
                    </style>
                </tr>

                <?php
                $no++;
                $jumlah = $jumlah + $value['total'];
            endforeach;
            ?>

            <tr>
                <td colspan="7"><b>TOTAL PEMBAYARAN</b></td>
                <!-- <td colspan="2"><b><?php echo "Rp. " . $jumlah; ?></td></b> Awal-->
                <td colspan="2"><b><?php echo "Rp. " . number_format($jumlah, 0, ',', '.'); ?></td></b>
            </tr>

            <?php if ($count > 0) { ?>
                <tr>
                    <td colspan="7">
                        Anda dapat melanjutkan <b>Pemesanan</b> dengan memilih tombol <b>Bayar</b> untuk bayar semua.
                    </td>
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    <td colspan="2">
                        <a class="tombol-biru" href="pesanan.php?id=<?php echo $id ?>&jum=<?php echo $jumlah ?>">
                            <i class="fas fa-credit-card"></i> Bayar</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <a href="javascript:history.back()" class="checkout-btn">Kembali</a>
    </div>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .container {
            max-width: min-content;
            /* Perbarui lebar maksimal ini */
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 5px 10px #2a2a2a;
            overflow-y: auto;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            width: auto;
        }

        th {
            background-color: #f2f2f2;
            color: #2a2a2a;
            text-transform: uppercase;
        }

        .check-icon {
            color: green;
        }

        .cross-icon {
            color: red;
        }

        .checkout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #2a2a2a;
            text-align: center;
            text-decoration: none;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 2px #2a2a2a;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }

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
            background-color: #007bff;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }

        .tombol-biru i {
            margin-right: 5px;
        }

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

        .tombol-merah:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }


        @media screen and (max-width: 768px) {
            .container {
                /* Mengurangi margin atas yang terlalu besar */
                width: 100%;
                /* Tambahkan 'auto' untuk margin horizontal */
                padding: 10px;
                /* Tambahkan padding untuk tidak terlalu menempel ke tepi */
            }

            table {
                display: block;
                overflow-x: auto;
                /* Memastikan isi tabel dapat discroll jika melebihi layar */
                white-space: nowrap;
                /* Mencegah teks dari wrapping */
            }

            .tombol-merah,
            .tombol-biru {
                padding: 8px 16px;
                /* Meningkatkan padding untuk tombol agar lebih mudah diklik */
                font-size: 14px;
                /* Meningkatkan ukuran font untuk visibilitas yang lebih baik */
            }
        }
    </style>

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
</body>

</html>