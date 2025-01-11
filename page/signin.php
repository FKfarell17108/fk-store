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
    <title>FKStore | Halaman Sign In</title>
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
        <h1>Sign In</h1>
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

        <form action="signin.php" method="post">

            <?php

            include "../lib/koneksi.php";
            session_start();

            if (isset($_POST['submit'])) {
                $user = $_POST['username'];
                $password = $_POST['password'];

                $pdo = $conn->prepare("SELECT * FROM tbl_users WHERE username=:a AND password=:b");
                $pdo->execute(array(':a' => $user, ':b' => $password));
                $count = $pdo->rowcount();
                $row = $pdo->fetch(PDO::FETCH_OBJ);

                if ($count == 0) {
                    echo "<script>alert('Gagal. Silakan Coba Lagi.');</script>";
                } else {
                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = $password;
                    $_SESSION['status'] = $row->title;

                    // Cek apakah pengguna adalah admin
                    if ($row->title == 'admin') {
                        // Jika pengguna adalah admin, arahkan ke halaman admin
                        echo "<script>alert('Berhasil. Selamat Datang Admin FKStore');</script>";
                        echo "<meta http-equiv='refresh' content='1; url=secret_code.php'>";
                    } else {
                        // Jika pengguna bukan admin, arahkan ke halaman user biasa
                        echo "Berhasil.";
                        echo "<meta http-equiv='refresh' content='1; url=../home.php'>";
                    }
                }
            }

            ?>

            <label for="username">Username:</label>
            <div class="custome-input">
                <input type="username" name="username" placeholder="Your username" autocomplete="off">
                <i class='bx bx-at'></i>
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
            <button class="login" type="submit" name="submit">Login</button>
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
                <a href="signup.php">Don't have an account?</a>
            </div>
        </form>

        <style>
            @media only screen and (max-width: 768px) {
                .container {
                    margin-bottom: 200px;
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

        <script>
            
        </script>

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