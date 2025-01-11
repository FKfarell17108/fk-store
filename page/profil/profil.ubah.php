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
    <title>FKStore | Halaman Ubah Profil</title>
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

        <form name="ubah" action="ubah.php" method="post" enctype="multipart/form-data">

            <table class="article">
                <tr>
                    <td>Fullname</td>
                    <td>
                        <input type="text" name="fullname" value="<?php echo $data->fullname; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo $data->email; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" maxlength="6" value="<?php echo $data->username; ?>"
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" maxlength="6" value="<?php echo $data->password; ?>"
                            required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="input" type="submit" name="ubah" value="Ubah & Simpan">
                        <a href="javascript:history.back()" class="input">
                            <center>Kembali</center>
                        </a>
                        <style>
                            .input {
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

                            .input:hover {
                                background-color: #2a2a2a;
                                color: #fff;
                                transform: translateY(-2px);
                                box-shadow: 0 4px 4px #2a2a2a;
                            }
                        </style>
                    </td>
                </tr>

                <style>
                    .input {
                        margin: 10px;
                        background-color: #fff;
                        color: #2a2a2a;
                        padding: 10px 16px;
                        border-radius: 8px;
                        border: none;
                        cursor: pointer;
                        font-size: 15px;
                        font-weight: 600;
                        transition: all 0.3s ease;
                    }

                    .input:hover {
                        background-color: #2a2a2a;
                        color: #fff;
                    }
                </style>

            </table>
        </form>

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

                td .input {
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

                td .input:hover {
                    background-color: #2a2a2a;
                    color: #fff;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 4px #2a2a2a;
                }
            }

            /* Style responsif untuk perangkat dengan layar kecil */
            @media (max-width: 768px) {
                td .input {
                    padding: 8px 16px;
                    /* Sedikit lebih kecil */
                    font-size: 14px;
                    /* Ukuran font lebih kecil */
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