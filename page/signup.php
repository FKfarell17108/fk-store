<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Sign Up</title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../assets/css/loginstyle.css">
    <!-- CSS FILES END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include '../preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <!-- SOCIAL LOGIN AREA START -->
    <div class="container">
        <h1>Sign Up</h1>
        <div class="social-login">
            <button class="google">
                <i class='bx bxl-google'></i>
                Google
            </button>
            <button class="google">
                <i class='bx bxl-twitter'></i>
                Twitter
            </button>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var googleButton = document.querySelector('.google');
                var twitterButton = document.querySelectorAll('.google')[1]; // karena kedua tombol memiliki kelas yang sama

                googleButton.addEventListener('click', function () {
                    alert('Sedang Dalam Pengembangan.');
                });

                twitterButton.addEventListener('click', function () {
                    alert('Sedang Dalam Pengembangan.');
                });
            });
        </script>
        <div class="divider">
            <div class="line"></div>
            <p>Or</p>
            <div class="line"></div>
        </div>
        <!-- SOCIAL LOGIN AREA END -->

        <form action="signup.php" method="post">

            <?php

            include "../lib/koneksi.php";
            session_start();

            // Setelah mendapatkan data dari formulir pendaftaran
            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $alamat = $_POST['alamat'];
                $nomor_telepon = $_POST['nomor_telepon'];
                $status = 'user';

                // Cek apakah ini adalah akun khusus (misalnya, dengan username tertentu)
                if ($username == "Admin" && $email == "farellkurniawan17108@gmail.com") {
                    $status = 'admin';
                } else {
                    $status = 'user';
                }

                try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Lakukan pengecekan apakah email atau username sudah terdaftar
                    $query = "SELECT * FROM tbl_users WHERE email = :email OR username = :username";
                    $stmt = $conn->prepare($query);
                    $stmt->execute(array(':email' => $email, ':username' => $username));

                    // Jika sudah ada entri yang cocok
                    if ($stmt->rowCount() > 0) {
                        echo "<script>alert('Akun Sudah Terdaftar. Silakan Coba Akun Lain.');</script>";
                    } else {
                        // Jika tidak ada entri yang cocok, lakukan pendaftaran
                        $pdo = $conn->prepare('INSERT INTO tbl_users (fullname, email, username, password, alamat, nomor_telepon, title) values (:fullname, :email, :username, :password, :alamat, :nomor_telepon, :title)');
                        $insertdata = array(':fullname' => $fullname, ':email' => $email, ':username' => $username, ':password' => $password, ':alamat' => $alamat, ':nomor_telepon' => $nomor_telepon, ':title' => $status);
                        $pdo->execute($insertdata);

                        echo "Berhasil";
                        echo "<meta http-equiv='refresh' content='1; url=signin.php'>";
                    }
                } catch (PDOException $e) {
                    echo "<script>alert('Gagal. Silakan Coba Lagi.: " . $e->getMessage() . "');</script>";
                    die();
                }
            }
            ?>

            <label for="fullname">Fullname:</label>
            <div class="custome-input">
                <input type="text" name="fullname" placeholder="Your Fullname" autocomplete="off">
                <i class='bx bx-user'></i>
            </div>
            <label for="email">Email:</label>
            <div class="custome-input">
                <input type="email" name="email" placeholder="Your Email">
                <i class='bx bx-at'></i>
            </div>
            <label for="alamat">Address:</label>
            <div class="custome-input">
                <input type="text" name="alamat" placeholder="ex: jl, taruna, jakarta">
                <i class='bx bx-home'></i>
            </div>
            <label for="nomor_telepon">Phone Number:</label>
            <div class="custome-input">
                <input type="text" name="nomor_telepon" placeholder="ex: 6287856930401">
                <i class='bx bx-phone'></i>
            </div>
            <label for="username">Username:</label>
            <div class="custome-input">
                <input type="text" name="username" placeholder="Your username">
                <i class='bx bx-user-circle'></i>
            </div>
            <label for="password">Password:</label>
            <div class="custome-input">
                <input type="password" name="password" id="password" placeholder="Your Password">
                <!-- Tambahkan ikon mata di sini -->
                <i class='bx bx-hide' id="togglePassword" onclick="togglePasswordVisibility()"></i>
            </div>
            <style>
                .bx-show {
                    cursor: pointer;
                    position: absolute;
                    right: 10px;
                    top: 10px;
                }
            </style>
            <script>
                function togglePasswordVisibility() {
                    var passwordInput = document.getElementById('password');
                    var toggleIcon = document.getElementById('togglePassword');
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        toggleIcon.classList.replace('bx-hide', 'bx-show');
                    } else {
                        passwordInput.type = 'password';
                        toggleIcon.classList.replace('bx-show', 'bx-hide');
                    }
                }
            </script>
            <button class="login" type="submit" name="submit">Sign Up</button>
            <style>
                .login {
                    background-color: #fff;
                    color: #2a2a2a;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: background-color 0.3s, transform 0.3s;
                    display: inline-block;
                    font-weight: bold;
                    box-shadow: 0 2px 2px #2a2a2a;
                }

                .login:hover {
                    background-color: #2a2a2a;
                    color: #fff;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 4px #2a2a2a;
                }
            </style>
            <div class="links">
                <a href="signin.php">Already have an account?</a>
            </div>

        </form>

        <style>
            @media only screen and (max-width: 768px) {
                .container {
                    margin-bottom: 250px;
                }

                .container form .custome-input i {
                    font-size: 24px;
                    top: 10px;
                }

                .container form .login {
                    line-height: 40px;
                    font-size: 16px;
                    margin-top: 20px;
                }
            }
        </style>

        <style>
            .container {
                margin-top: 200px;
            }
        </style>

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