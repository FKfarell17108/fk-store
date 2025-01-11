<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap">

    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Utama</title>
    <!-- TITLE END -->

    <!-- CSS FILES AREA START -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/whole.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!-- CSS FILES AREA END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include 'preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <!-- HEADER AREA START -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- LOGO START -->
                        <a href="#" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- LOGO END -->

                        <!-- MENU AREA START -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#korean">Korean</a></li>
                            <li class="scroll-to-section"><a href="#old-money">Old Money</a></li>
                            <li class="scroll-to-section"><a href="#stone-island">Stone Island</a></li>
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

    <!-- SLIDER AREA START -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <section class="section-slide" id="slider">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1" style="background-image: url(assets/images/slider-01.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="text">
                                    Old Money Collection
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="text-span">
                                    NEW RELEASE
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="notice" class="tombol-slider">
                                    Look Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url(assets/images/slider-02.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="text">
                                    Korean Collection
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn"
                                data-delay="800">
                                <h2 class="text-span">
                                    NEW RELEASE
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="notice" class="tombol-slider">
                                    Look Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url(assets/images/slider-03.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft"
                                data-delay="0">
                                <span class="text">
                                    Stone Island Collection
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight"
                                data-delay="800">
                                <h2 class="text-span">
                                    NEW RELEASE
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="notice" class="tombol-slider">
                                    Look Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <script src="animsition.min.js"></script>

    <style>
        .section-slide {
            margin-top: -20px;
            margin-bottom: -90px;
        }

        .item-slick1 {
            border-bottom: 3px dotted #eee;
            padding-top: 160px;
            padding-bottom: 30px;
        }

        .text {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: #fff;
        }

        .text-span {
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 50px;
            color: #fff;
        }

        .tombol-slider {
            font-size: 13px;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 25px;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s;
        }

        .tombol-slider:hover {
            background-color: #fff;
            color: #2a2a2a;
        }
    </style>
    <!-- SLIDER AREA END -->

    <!-- MAIN BANNER AREA START -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Halo, Selamat Datang di FKStore</h4>
                                <span>Online Casuals Store Terbaik Di Eropa &amp; Asia Cabang Indonesia</span>
                                <div class="main-border-button">
                                    <a href="page/signin.php">Sign In</a>
                                    <a href="page/signup.php">Sign Up</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Old Money</h4>
                                            <span>Old Money Casuals Terbaik</span>
                                        </div>
                                        <a href="notice">
                                            <img src="assets/images/baner-right-image-01.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Korean</h4>
                                            <span>Korean Casuals Terbaik</span>
                                        </div>
                                        <a href="notice">
                                            <img src="assets/images/baner-right-image-02.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Stone Island</h4>
                                            <span>Stone Islands Terbaik</span>
                                        </div>
                                        <a href="notice">
                                            <img src="assets/images/baner-right-image-03.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Aksesoris</h4>
                                            <span>Aksesoris Terbaik</span>
                                        </div>
                                        <a href="notice">
                                            <img src="assets/images/baner-right-image-04.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <style>
                                /* Style untuk hover pada gambar */
                                .right-first-image .thumb img {
                                    transition: transform 0.3s ease-in-out;
                                }

                                .right-first-image:hover .thumb img {
                                    transform: scale(1.05);
                                    /* Membuat gambar sedikit lebih besar saat di-hover */
                                }

                                /* Style untuk hover pada teks */
                                .right-first-image .inner-content {
                                    transition: color 0.3s ease-in-out;
                                    position: relative;
                                    /* Pastikan teks berada di atas gambar */
                                    z-index: 10;
                                }

                                .right-first-image:hover .inner-content h4,
                                .right-first-image:hover .inner-content span {
                                    color: #fff;
                                    /* Mengubah warna teks saat di-hover */
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN BANNER AREA END -->

    <!-- KOREAN AREA START -->
    <section class="section" id="korean">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Korean Terbaru</h2>
                        <span>Kualitas premium inilah yang membedakan FKStore dengan Store lainnya.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/korean-01.jpeg">
                                </div>
                                <div class="down-content">
                                    <h4>Korean Casual 01</h4>
                                    <span>IDR 12.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/korean-02.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Korean Casual 02</h4>
                                    <span>IDR 9.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/korean-03.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Korean Casual 03</h4>
                                    <span>IDR 15.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/korean-04.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Korean Casual 04</h4>
                                    <span>IDR 12.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- KOREAN AREA END -->

    <!-- OLD MONEY AREA START -->
    <section class="section" id="old-money">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Old Money Terbaru</h2>
                        <span>Kualitas premium inilah yang membedakan FKStore dengan Store lainnya.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/old-money-01.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Old Money Casual 01</h4>
                                    <span>IDR 75.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/old-money-02.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Old Money Casual 02</h4>
                                    <span>IDR 45.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/old-money-03.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Old Money Casual 03</h4>
                                    <span>IDR 130.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/old-money-04.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Old Money Casual 04</h4>
                                    <span>IDR 120.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OLD MONEY AREA END -->

    <!-- STONE ISLAND AREA START -->
    <section class="section" id="stone-island">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Stone Island Terbaru</h2>
                        <span>Kualitas premium inilah yang membedakan FKStore dengan Store lainnya.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/stone-island-01.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Stone Island 01</h4>
                                    <span>IDR 80.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/stone-island-02.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Stone Island 02</h4>
                                    <span>IDR 12.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/stone-island-03.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Stone Island 03</h4>
                                    <span>IDR 30.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/stone-island-04.jpeg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Stone Island 04</h4>
                                    <span>IDR 120.000.000</span>
                                    <ul class="stars">
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></i></li>
                                        <li><i class='bx bxs-star' style='color:#ffb006'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- STONE ISLAND AREA END -->

    <!-- FOOTER AREA START -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png">
                        </div>
                        <ul>
                            <li><a href="https://maps.app.goo.gl/UUjAwhcd3knNjf3K8">
                                    Kemayoran, Jakarta, Indonesia</a></li>
                            <li><a class="#" href="notice">farellkurniawan17108@gmail.com</a></li>
                            <li><a class="#" href="notice">+62 878-5693-0401</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Belanja &amp; Kategori</h4>
                    <ul>
                        <li><a href="notice">Korean Casuals</a></li>
                        <li><a href="notice">Old Money Casual</a></li>
                        <li><a href="notice">Stone Island</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="#top">Beranda</a></li>
                        <li><a href="notice">Tentang Kami</a></li>
                        <li><a href="notice">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Membantu &amp; Informasi</h4>
                    <ul>
                        <li><a href="notice">Bantuan</a></li>
                        <li><a href="notice">FAQ's</a></li>
                        <li><a href="notice">Pengiriman</a></li>
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

    <div id="signInSignUpModal" style="display:none;">
        <link rel="stylesheet" href="notice.css">
        <div style="background: white; padding: 20px; border-radius: 5px;">
            <h2>Sign In or Sign Up</h2>
            <p>Anda harus sign in atau sign up untuk melanjutkan.</p>
            <a href="page/signin.php">Sign In</a><a href="page/signup.php">Sign Up</a>
            <button onclick="document.getElementById('signInSignUpModal').style.display='none'">Close</button>
        </div>
    </div>
    <!-- FOOTER AREA END -->

    <script>
        document.querySelectorAll('a[href="notice"]').forEach(function (element) {
            element.addEventListener('click', function (event) {
                event.preventDefault(); // Menghentikan navigasi default
                document.getElementById('signInSignUpModal').style.display = 'flex'; // Menampilkan modal
            });
        });

        function closeModal() {
            document.getElementById('signInSignUpModal').style.display = 'none'; // Menyembunyikan modal
        }
    </script>

    <!-- SCROLL ANIMATION -->
    <script src="assets/js/scroll.js"></script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <!-- Data Rel -->
    <script src="assets/js/data-rel.js"></script>
</body>

</html>