<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Pengiriman</title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../assets/css/loader.css">
    <!-- CSS FILES END -->
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            margin: 40px;
            color: #333;
            transition: background-color 0.3s ease;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 50%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
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

        input[type="submit"]:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }

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
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../preloader.php'; ?> -->
    <!-- PRELOADER END -->
    
    <h1>Formulir Pengiriman</h1>
    <form action="proses_pengiriman.php" method="post">
        <label for="nama">Nama Penerima:</label><br>
        <input type="text" id="nama" name="nama_penerima" required><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br>
        <label for="kodepos">Kode Pos:</label><br>
        <input type="text" id="kodepos" name="kode_pos" required><br>
        <label for="telepon">Nomor Telepon:</label><br>
        <input type="text" id="telepon" name="nomor_telepon" required><br>
        <button type="button" onclick="history.back();" class="kembali">Kembali</button>
        <input type="submit" value="Kirim">
    </form>

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