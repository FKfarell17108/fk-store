<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Bantuan</title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../assets/css/loader.css">
    <!-- CSS FILES END -->
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        header {
            background: #fff;
            /* Gradient background dari ungu ke biru */
            color: #2a2a2a;
            /* Warna teks putih */
            padding: 10px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Bayangan lebih gelap */
            border-bottom: 3px solid #fff;
            /* Border putih di bawah header */
        }

        section {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        article {
            margin-bottom: 20px;
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #e2e2e2;
            padding-bottom: 10px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            line-height: 1.8;
            color: #555;
        }

        li:hover {
            color: #000;
            text-decoration: underline;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <header>
        <h1>Bantuan</h1>
        <!-- Tombol Kembali -->
        <a href="javascript:history.back()" class="kembali">Kembali</a>
        <style>
            .kembali {
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

            .kembali:hover {
                background-color: #2a2a2a;
                color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 4px 4px #2a2a2a;
            }
        </style>
    </header>
    <section>
        <article>
            <h2>Bagaimana cara menggunakan website ini?</h2>
            <p>Untuk menggunakan website ini, Anda bisa mengikuti langkah-langkah berikut:</p>
            <ul>
                <li>Navigasi melalui menu utama untuk menemukan fitur yang Anda butuhkan.</li>
                <li>Baca petunjuk pada setiap halaman untuk memahami lebih lanjut cara kerja fitur tersebut.</li>
                <li>Jika Anda mengalami kesulitan, gunakan fitur pencarian di pojok kanan atas.</li>
            </ul>
        </article>
        <article>
            <h2>Bagaimana cara menghubungi dukungan?</h2>
            <p>Jika Anda membutuhkan bantuan lebih lanjut, Anda bisa menghubungi kami melalui:</p>
            <ul>
                <li>Email: fkstoreindonesia@gmail.com</li>
                <li>Telepon: 001-002-0034</li>
                <li>Formulir kontak yang tersedia di halaman <a href="../page/message/contact.php">Kontak Kami</a>.</li>
            </ul>
        </article>
        <article>
            <h2>Kirim Pesan Bantuan</h2>
            <form action="proses_bantuan.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" required style="width: 90%;"></textarea>
                <button type="submit">Kirim</button>
            </form>
        </article>
        <style>
            @media (max-width: 768px) {
                form {
                    width: 100%;
                    /* Mengatur lebar form menjadi 100% */
                }

                input[type="text"],
                input[type="email"],
                textarea {
                    width: 90%;
                    /* Mengatur lebar input dan textarea menjadi 100% */
                }

                button {
                    width: 100%;
                    /* Mengatur lebar tombol menjadi 100% */
                }
            }
        </style>
    </section>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
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

        button:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }
    </style>

    <!-- SCROLL ANIMATION -->
    <script src="../assets/js/scroll.js"></script>

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

    <!-- Data Rel -->
    <script src="../assets/js/data-rel.js"></script>
</body>

</html>