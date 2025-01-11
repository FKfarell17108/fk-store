<?php
session_start(); // Memastikan sesi dimulai
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
    <title>FKStore | Halaman Sepatu</title>
    <!-- TITLE END -->

    <!-- CSS FILES AREA START -->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../css/kategori.css">
    <link rel="stylesheet" href="../../../assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../../../assets/css/lightbox.css">
    <!-- CSS FILES AREA END -->
</head>

<body>
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- HEADER AREA START -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- LOGO START -->
                        <a href="#" class="logo">
                            <img src="../../../assets/images/logo.png">
                        </a>
                        <!-- LOGO END -->

                        <!-- MENU AREA START -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#box">Produk</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Halaman</a>
                                <ul>
                                    <li><a href="../../../home.php">Utama</a></li>
                                    <li><a href="../../../about.php">Tentang Kami</a></li>
                                    <li><a href="../products.php">Produk Kami</a></li>
                                    <li><a href="../user/keranjang.php">Keranjang</a></li>
                                    <li><a href="../user/belanja.php">Pesanan</a></li>
                                    <li><a href="../../../page/message/contact.php">Hubungi Kami</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Kategori</a>
                                <ul>
                                    <li><a href="korean.php">Korean Casuals</a></li>
                                    <li><a href="old_money.php">Old Money</a></li>
                                    <li><a href="stone_island.php">Stone Island</a></li>
                                    <li><a href="aksesoris.php">Aksesoris</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Lainnya</a>
                                <ul>
                                    <li><a href="../../../page/profil/profil.user.php">Profil Pengguna</a></li>
                                    <!-- <li><a href="page/transaksi/riwayat_transaksi.html">Riwayat Transaksi</a></li> -->
                                    <li><a href="../../../page/subscribe/subscribe.php">Langganan</a></li>
                                    <li><a href="../../../page/signout.php">Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- MENU AREA END -->

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER AREA END -->

    <!-- MAIN BANNER AREA START -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Produk Sepatu</h2>
                        <span>Online Casuals Store Terbaik Di Eropa &amp; Asia Cabang Indonesia</span>
                        <!-- php include search_form.php -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN BANNER AREA END -->

    <div id="box">

        <?php
        if (!isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $queryUser = $conn->prepare("SELECT * FROM tbl_user WHERE username = :username");
            $queryUser->bindParam(':username', $username);
            $queryUser->execute();
            $userData = $queryUser->fetch(PDO::FETCH_ASSOC);

            if (!$userData) { ?>
                <div class="pesan">
                    <p>Masuk dengan <b>akun</b> terlebih dahulu sebelum mulai belanja, belum punya akun ?
                        <a href="page/daftar.php" class="tombol-biru">Daftar</a>
                    </p>
                </div>

            <?php }
        } ?>
        <div class="responsive-table">
            <table>
                <tr>
                    <?php
                    $host = 'localhost'; // atau alamat server lain
                    $dbname = 'fkstore'; // ganti dengan nama database Anda
                    $username = 'root'; // ganti dengan username database Anda
                    $password = ''; // ganti dengan password database Anda
                    
                    try {
                        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        die("Tidak bisa terhubung ke database: " . $e->getMessage());
                    }

                    $kategori = 'Sepatu'; // Ganti dengan kategori yang diinginkan
                    
                    $query = $conn->prepare("SELECT * FROM tbl_barang WHERE kategori = :kategori");
                    $query->bindParam(':kategori', $kategori);
                    $query->execute();

                    $data = $query->fetchAll();

                    $no = 1; // Inisialisasi variabel $no
                    foreach ($data as $value) {
                        ?>
                        <td class="list">
                            <img src="../../img/produk/<?php echo $value['nama_image']; ?>" width="150">
                            <br><?php echo $value['nama_barang']; ?>
                            <br><b><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.'); ?></b>
                            <br>

                            <style>
                                .list img {
                                    transition: transform 0.3s ease-in-out;
                                    /* Menambahkan transisi untuk efek animasi */
                                }

                                .list img:hover {
                                    transform: scale(1.1);
                                    /* Membuat gambar membesar saat di-hover */
                                }
                            </style>

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

                            <button type="button" class="stock-button">Stok : <?php
                            if ($sisa > 0)
                                echo $sisa;
                            else
                                echo "Habis";
                            ?></button>

                            <style>
                                .stock-button {
                                    transition: transform 0.3s ease-in-out;
                                }

                                .stock-button:hover {
                                    transform: scale(1.1);
                                }
                            </style>

                            <?php
                            if ($sisa > 0) {
                                if (isset($_SESSION['username']) && $_SESSION['username'] != "") { ?>
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                                    <a class="link"
                                        href="../user/belanja_detail.php?id=<?php echo $value['id_barang']; ?>&st=<?php echo $sisa; ?>"><i
                                            class="fas fa-shopping-cart"></i></a>

                                <?php }
                            } ?>


                        </td>
                        <?php
                        // Banyaknya Content Perbaris
                        if ($no % 5 == 0)
                            echo "</tr><tr>";
                        $no++;
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>

    <!-- FOOTER AREA START -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="../../../assets/images/white-logo.png">
                        </div>
                        <ul>
                            <li><a
                                    href="https://www.google.com/maps/place/Senayan+City/@-6.22719,106.7944314,17z/data=!3m2!4b1!5s0x2e69f148621d78eb:0xaa9043c3527d6597!4m6!3m5!1s0x2e69f1485e476a65:0x300c043104acc004!8m2!3d-6.2271953!4d106.7970117!16zL20vMDlfMjlu?entry=ttu">Senayan
                                    City, Jakarta, Indonesia</a></li>
                            <li><a class="underdev" href="#">fkstoreindonesia@gmail.com</a></li>
                            <li><a class="underdev" href="#">001-002-0034</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Belanja &amp; Kategori</h4>
                    <ul>
                        <li><a href="korean.php">Korean Casuals</a></li>
                        <li><a href="old_money.php">Old Money Casual</a></li>
                        <li><a href="stone_island.php">Stone Island</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="../../../home.php">Utama</a></li>
                        <li><a href="#top">Beranda</a></li>
                        <li><a href="../../../about.php">Tentang Kami</a></li>
                        <li><a href="../../../page/message/contact.php">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Membantu &amp; Informasi</h4>
                    <ul>
                        <li><a href="../../../footer/bantuan.php">Bantuan</a></li>
                        <li><a href="../../../footer/faqs.php">FAQ's</a></li>
                        <li><a href="../../../footer/pengiriman.php">Pengiriman</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 FKStore Co., Ltd. All Rights Reserved.

                            <br>Didesain Oleh: <a href="https://www.instagram.com/fk_farell17108/">Farell Kurniawan</a>

                            <br>Disponsori Oleh: <a href="https://www.stoneisland.com/">Stone Island</a> &amp;
                            <a
                                href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi2utnEpLGFAxXzq2YCHbh3B94YABAAGgJzbQ&gclid=Cj0KCQjwiMmwBhDmARIsABeQ7xRoMG6QU0qgtasvBHCxWshacEepk8EPzo3YMOZeexv5cg7Wmf_gJjUaAiDeEALw_wcB&ohost=www.google.com&cid=CAESVuD2cL_oTGRG1dfqpKchmVlMvzvKwn9Y7KMv8K5gqbYvYJDjo_RvJjCQE_ZHT_NwJctfiRy4hut0mB6AGx08JtWLv0I48Gy29n5fwHUIuIRw9sO6ev9k&sig=AOD64_1DlAW7qwzAGY9cA0dFcQP82kESbA&q&adurl&ved=2ahUKEwi-4tDEpLGFAxWHxjgGHZpnBJsQ0Qx6BAgLEAE">Adidas</a>

                            <br>Didistribusikan Oleh: <a href="https://kemenparekraf.go.id/">Kementerian Pariwisata dan
                                Ekonomi Kreatif Republik Indonesia</a>
                        </p>
                        <ul>
                            <li><a href="https://www.instagram.com/fk_farell17108/"><i class='bx bxl-instagram'></i></a>
                            </li>
                            <li><a href="https://www.behance.net/farellkurniawan"><i class='bx bxl-behance'></i></a>
                            </li>
                            <li><a href="https://x.com/RabbitFK0?t=GWc3d5MHShOUOjoBuOnkYQ&s=09"><i
                                        class='bx bxl-twitter'></i></a></li>
                            <li><a
                                    href="https://www.linkedin.com/in/farell-kurniawan-0898572b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                        class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var googleButton = document.querySelector('.underdev');
            var twitterButton = document.querySelectorAll('.underdev')[1]; // karena kedua tombol memiliki kelas yang sama

            googleButton.addEventListener('click', function () {
                alert('Sedang Dalam Pengembangan.');
            });

            twitterButton.addEventListener('click', function () {
                alert('Sedang Dalam Pengembangan.');
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            // Menambahkan smooth scrolling ke semua link
            $("a").on('click', function (event) {

                // Pastikan this.hash memiliki nilai sebelum meng-override perilaku default
                if (this.hash !== "") {
                    // Mencegah perilaku click anchor default
                    event.preventDefault();

                    // Simpan hash
                    var hash = this.hash;

                    // Menggunakan metode animate() jQuery untuk menambahkan smooth page scroll
                    // Angka 800 menunjukkan jumlah milidetik yang diperlukan untuk scroll ke area yang spesifik
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Tambahkan hash (#) ke URL ketika selesai scroll (perilaku click default)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

    <style>
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