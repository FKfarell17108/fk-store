<?php
session_start();

include '../../lib/koneksi.php';

$username = $_SESSION['username'];
$ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username = :user");
$ambiluser->bindParam(':user', $username);
$ambiluser->execute();
$data = $ambiluser->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Profil Pengguna</title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../../assets/css/loader.css">
    <link rel="stylesheet" href="../../assets/css/profilestyle.css">
    <!-- CSS FILES END -->
</head>

<body>
    <!-- PRELOADER START -->
    <!-- <?php include 'preloader.php'; ?> -->
    <!-- PRELOADER END -->

    <!-- LOGO AREA START -->
    <div class="logo">
        <img src="../../assets/images/icon-white.png">
        <a href="#">FKStore</a>
    </div>

    <style>
        .logo {
            position: absolute;
            top: 22px;
            left: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 48px;
        }

        .logo a {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #2a2a2a;
        }
    </style>

    <!-- LOGO AREA END -->

    <div class="container">
        <header>
            <div class="info">
                <div class="count">
                    <i class='bx bx-user'></i>
                    <p><?php echo $data->title; ?></p>
                </div>
                <p>Status</p>
            </div>
            <div class="profile">
                <img src="../../assets/images/icon-user.jpeg">
            </div>
            <div class="info">
                <div class="count">
                    <p>FKStore</p>
                </div>
                <p>Members</p>
            </div>
        </header>

        <div class="about">
            <h2>
                <?php echo $data->fullname; ?> <i class='bx bxs-badge-check' style='color:#2a2a2a'></i>
            </h2>
            <p>
                <?php echo $data->email; ?>
            </p>
        </div>

        <table class="article">
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" value="<?php echo $data->username; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="" value="<?php echo $data->password; ?>" disabled>
                </td>
            </tr>
        </table>

            <a class="tombol" href="profil.ubah.php"><center>Ubah Profil</center></a>
            <a class="tombol" href="javascript:history.back()"><center>Kembali</center></a>
            <style>
                .tombol {
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

                .tombol:hover {
                    background-color: #2a2a2a;
                    color: #fff;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 4px #2a2a2a;
                }
            </style>

    </div>

    <style>
        /* Responsivitas */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 10px;
            }

            .header .info,
            .header .profile {
                flex-direction: column;
                align-items: center;
            }

            .header .info .count,
            .header .info p {
                text-align: center;
            }

            .article td {
                display: block;
                width: 100%;
            }

            .article input {
                width: 100%;
                margin-top: 10px;
            }

            center a {
                display: block;
                margin-bottom: 10px;
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

            center a:hover {
                background-color: #2a2a2a;
                color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 4px 4px #2a2a2a;
            }
        }
    </style>
    
    <!-- PROFILE -->
    <script src="../../assets/js/profile.js"></script>

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