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
    <link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Produk Kami</title>
    <!-- TITLE END -->

    <!-- CSS FILES AREA START -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/whole.css">
    <link rel="stylesheet" href="../../assets/css/products.css">
    <link rel="stylesheet" href="../../assets/css/loader.css">
    <link rel="stylesheet" href="../../assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../../assets/css/lightbox.css">
    <!-- CSS FILES AREA END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../../preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <!-- HEADER AREA START -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- LOGO START -->
                        <a href="#" class="logo">
                            <img src="../../assets/images/logo.png">
                        </a>
                        <!-- LOGO END -->

                        <!-- MENU AREA START -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#box">Produk</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Halaman</a>
                                <ul>
                                    <li><a href="../../home.php">Utama</a></li>
                                    <li><a href="../../about.php">Tentang Kami</a></li>
                                    <li><a href="user/keranjang.php">Keranjang</a></li>
                                    <li><a href="user/belanja.php">Pesanan</a></li>
                                    <li><a href="../../page/message/contact.php">Hubungi Kami</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Kategori</a>
                                <ul>
                                    <li><a href="kategori/old_money.php">Old Money</a></li>
                                    <li><a href="kategori/korean.php">Korean</a></li>
                                    <li><a href="kategori/stone_island.php">Stone Island</a></li>
                                    <li><a href="kategori/aksesoris.php">Aksesoris</a></li>
                                    <li><a href="kategori/sepatu.php">Sepatu</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Lainnya</a>
                                <ul>
                                    <li><a href="../../page/profil/profil.user.php">Profil Pengguna</a></li>
                                    <li><a href="../../page/subscribe/subscribe.php">Langganan</a></li>
                                    <li><a href="../../page/signout.php">Sign Out</a></li>
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
                        <h2>Periksa Produk Kami</h2>
                        <span>Online Casuals Store Terbaik Di Eropa &amp; Asia Cabang Indonesia</span>
                        <form method="GET" action="" class="search">
                            <input type="text" name="search" class="form-control" id="dev-table-filter"
                                placeholder="Cari Produk..."
                                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                            <button type="submit" class="btn-search"><i class="fas fa-search"></i> </button>
                        </form>
                        <style>
                            .search {
                                position: relative;
                                max-width: 400px;
                                margin: 20px auto;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                transition: box-shadow 0.3s ease-in-out;
                            }

                            .search:hover {
                                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
                            }

                            .search input[type="text"] {
                                width: 100%;
                                display: inline-block;
                                background-color: #fff;
                                color: #2a2a2a;
                                padding: 10px 15px;
                                font-size: 16px;
                                box-shadow: 0 2px 2px #2a2a2a;
                                border: none;
                                text-decoration: none;
                                border-bottom: 2px solid #ccc;
                                border-radius: 5px 5px 5px 5px;
                                outline: none;
                                transition: background-color 0.3s, transform 0.3s;
                            }

                            .search input[type="text"]:focus {
                                border-bottom-color: #2a2a2a;
                            }

                            .search input[type="text"]:hover {
                                background-color: #fff;
                                color: #2a2a2a;
                                transform: translateY(-2px);
                                box-shadow: 0 4px 4px #2a2a2a;
                            }

                            .search .btn-search {
                                display: inline-block;
                                font-weight: bold;
                                position: absolute;
                                right: 0;
                                top: 0;
                                bottom: 0;
                                background-color: #fff;
                                color: #2a2a2a;
                                border: none;
                                text-decoration: none;
                                border-radius: 0 5px 5px 0;
                                box-shadow: 0 2px 2px #2a2a2a;
                                padding: 10px 20px;
                                font-size: 16px;
                                cursor: pointer;
                                transition: background-color 0.3s, transform 0.3s;
                            }

                            .search .btn-search:hover {
                                background-color: #2a2a2a;
                                color: #fff;
                                transform: translateY(-2px);
                                box-shadow: 0 4px 4px #2a2a2a;
                            }

                            .search .btn-search i {
                                transition: transform 0.3s ease;
                            }

                            .search .btn-search:active i {
                                transform: scale(1.1);
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN BANNER AREA END -->

    <div id="box">

        <?php

        include '../koneksi/koneksi.php';

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

        <div class="responsive-table"></div>
        <table>
            <tr>

                <?php

                $no = 1;
                $search = isset($_GET['search']) ? $_GET['search'] : ''; //tambahan Fitur Search
                // Perbaikan: mengganti 'deskripsi' dengan 'kategori' dalam query
                $query = $conn->prepare("SELECT * FROM tbl_barang WHERE nama_barang LIKE :search OR kategori LIKE :search OR deskripsi LIKE :search OR harga LIKE :search");
                $searchParam = "%{$search}%"; //tambahan Fitur Search
                $query->bindParam(':search', $searchParam); //tambahan Fitur Search
                $query->execute();

                $data = $query->fetchAll();

                foreach ($data as $value) { ?>

                    <td class="list">
                        <img src="../img/produk/<?php echo $value['nama_image']; ?>" width="150">
                        <br><?php echo $value['nama_barang']; ?>
                        <!-- <br><b><?php echo "Rp. " . $value['harga']; ?></b> Awal-->
                        <br><b><?php echo "Rp. " . number_format($value['harga'], 0, ',', '.'); ?></b>
                        <br>

                        <style>
                            .list {
                                vertical-align: bottom;
                            }
                            
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
                                    href="user/belanja_detail.php?id=<?php echo $value['id_barang']; ?>&st=<?php echo $sisa; ?>"><i
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

    <!-- FOOTER AREA START -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="../../assets/images/white-logo.png">
                        </div>
                        <ul>
                            <li><a href="https://maps.app.goo.gl/UUjAwhcd3knNjf3K8">
                                    Kemayoran, Jakarta, Indonesia</a></li>
                            <li><a class="#" href="mailto:rabbitfk17@gmail.com">farellkurniawan17108@gmail.com</a></li>
                            <li><a class="#" href="https://wa.me/6287856930401">+62 878-5693-0401</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Belanja &amp; Kategori</h4>
                    <ul>
                        <li><a href="kategori/korean.php">Korean Casuals</a></li>
                        <li><a href="kategori/old_money.php">Old Money Casual</a></li>
                        <li><a href="kategori/stone_island.php">Stone Island</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="../../home.php">Utama</a></li>
                        <li><a href="#top">Beranda</a></li>
                        <li><a href="../../about.php">Tentang Kami</a></li>
                        <li><a href="../../page/message/contact.php">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Membantu &amp; Informasi</h4>
                    <ul>
                        <li><a href="../../footer/bantuan.php">Bantuan</a></li>
                        <li><a href="../../footer/faqs.php">FAQ's</a></li>
                        <li><a href="../../footer/pengiriman.php">Pengiriman</a></li>
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

    <!-- SCROLL ANIMATION -->
    <script src="../../assets/js/scroll.js"></script>

    <!-- jQuery -->
    <script src="../../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../assets/js/popper.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../../assets/js/owl-carousel.js"></script>
    <script src="../../assets/js/accordions.js"></script>
    <script src="../../assets/js/datepicker.js"></script>
    <script src="../../assets/js/scrollreveal.min.js"></script>
    <script src="../../assets/js/waypoints.min.js"></script>
    <script src="../../assets/js/jquery.counterup.min.js"></script>
    <script src="../../assets/js/imgfix.min.js"></script>
    <script src="../../assets/js/slick.js"></script>
    <script src="../../assets/js/lightbox.js"></script>
    <script src="../../assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="../../assets/js/custom.js"></script>

    <!-- Data Rel -->
    <script src="../../assets/js/data-rel.js"></script>
</body>

</html>
