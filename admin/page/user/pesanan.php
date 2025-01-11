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
    <title>FKStore | Halaman Pembayaran </title>
    <!-- TITLE END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../../../preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <div id="box">

        <h1>Pembayaran</h1>

        <?php

        include '../../koneksi/koneksi.php';


        $total = $_GET['jum'];
        $id = $_GET['id'];
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $insert = $conn->prepare("INSERT INTO tbl_pesanan (id_user,id_barang,ukuran,qty,kurir,date_in,total) SELECT id_user,id_barang,ukuran,qty,kurir,date_in,total FROM tbl_keranjang WHERE id_user=:id");
            $insert->bindparam(':id', $id);
            $insert->execute();

            $delete = $conn->prepare("DELETE FROM tbl_keranjang WHERE id_user=:id");
            $delete->bindparam(':id', $id);
            $delete->execute();
            ?>


            <?php
            if (isset($_GET['bayar'])) {
                $id_produk_bayar = $_GET['bayar'];

                // Proses pembayaran produk

                // Pindahkan produk yang dibayar ke tabel pesanan
                $insert_pesanan = $conn->prepare("INSERT INTO tbl_pesanan (id_user, id_barang, ukuran, qty, kurir, date_in, total) SELECT id_user, id_barang, ukuran, qty, kurir, date_in, total FROM tbl_keranjang WHERE id = :id");
                $insert_pesanan->bindparam(':id', $id_produk_bayar);
                $insert_pesanan->execute();

                // Hapus produk dari tabel keranjang setelah dipindahkan ke tabel pesanan
                $hapus_produk = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
                $hapus_produk->bindparam(':id', $id_produk_bayar);
                $hapus_produk->execute();
            }
            ?>

            <table class="article">
                <tr>
                    <td>Status</td>
                    <td><a class="tombol-biru">Pesanan Berhasil</a></td>
                </tr>

                <tr>
                    <td>Jumlah Pembayaran</td>
                    <!-- <td><b><?php echo "Rp. " . $total; ?></b></td> Awal-->
                    <td><b><?php echo "Rp. " . number_format($total, 0, ',', '.'); ?></b></td>
                </tr>

                <tr>
                    <td>Deskripsi</td>
                    <td>
                        BANK BCA | Rekening : 877-0295-250 | A.N : Farell Kurniawan
                    </td>
                </tr>

                <tr>
                    <td>Lanjutan</td>
                    <td>
                        <b>Konfirmasi Pembayaran</b> Ke <b>WA</b> : +62 878-5693-0401
                    </td>
                </tr>

            </table>
            <p style="text-align: center;">Terima Kasih Telah Membeli di Website Kami.<br>
                Anda Dapat. <a class="link" href="../products.php">Kembali</a></p>

            <?php

        } catch (PDOexception $e) {
            print "Added data failed: " . $e->getMessage() . "<br/>";
            die();
        }

        ?>
    </div>

    <style>
        #box {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 5px 5px #2a2a2a;
        }

        h1 {
            color: #2a2a2a;
            text-align: center;
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse solid;
        }

        .table td {
            padding: 20px 10px;
            /* Menambahkan padding atas dan bawah 20px, samping tetap 10px */
            border: 1px solid #ddd;
        }

        .tombol-biru {
            background-color: #fff;
            color: #2a2a2a bold;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            font-weight: bold;
            box-shadow: 0 2px 2px #2a2a2a;
        }

        .link {
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

        .link:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }

        /* Animasi untuk tombol */
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .tombol-biru {
            animation: pulse 2s infinite;
        }

        @media (max-width: 480px) {
            #box {
                margin-top: 100px;
                /* Menyatukan margin-top dengan margin lainnya */
                padding: 10px;
            }

            .table {
                font-size: 0.875rem;
                /* Menggunakan satuan rem untuk skalabilitas */
            }

            .table td {
                padding: 0.3125rem;
                /* Menggunakan satuan rem untuk padding */
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