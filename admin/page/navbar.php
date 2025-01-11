<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    // Dapatkan nama pengguna dan status
    $user = $_SESSION['username'];
    $title = $_SESSION['status'];

    // Menampilkan navigasi berdasarkan status pengguna
    if ($_SESSION['status'] == 'user') {
        // Navigasi pengguna
        echo "<li><a href='?page=beranda'>Beranda</a></li>";
        echo "<li><a href='?page=profil'>Profil</a></li>";
        echo "<li><a href='?page=tentang'>Pengembang</a></li>";
        echo "<li class='logout'><a href='page/logout.php'><i class='fas fa-sign-out-alt'></i> Keluar</a></li>";
        echo "<li class='login'><a><b>Hey, </b> $user <i class='fas fa-user'></i></a></li>";

    } elseif ($_SESSION['status'] == 'admin') {
        // Navigasi admin
        echo "<li><a href='?page=display'>Display</a></li>";
        echo "<li><a href='?page=user'>Users</a></li>";
        echo "<li><a href='?page=produk'>Produk</a></li>";
        echo "<li><a href='?page=keranjang'>Keranjang</a></li>";
        echo "<li><a href='?page=pesanan'>Pesanan</a></li>";
        echo "<li><a href='?page=pengiriman'>Pengiriman</a></li>";
        echo "<li><a href='?page=langganan'>Langganan</a></li>";
        echo "<li><a href='?page=pesan'>Pesan</a></li>";
        echo "<li><a href='?page=bantuan'>Bantuan</a></li>";
        echo "<li class='login'><a><b>Hey, </b> $user</a></li>";
        echo "<li class='logout'><a href='page/logout.php'>Keluar</a></li>";
    }
} else {
    // Tampilkan link login jika pengguna belum login
    echo "<li><a href='?page=beranda'>Beranda</a></li>";
    echo "<li><a href='?page=tentang'>Pengembang</a></li>";
    echo "<li class='login'><a href='page/login.php'>Masuk <i class='fas fa-sign-in-alt'></i></a></li>";
}

?>

<style>
    /* Style Umum */
    body {
        font-family: 'Poppins', sans-serif;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: #fff;
        text-align: center;
        padding: 5px 10px;
        text-decoration: none;
    }

    .login a {
        float: right;
        color: #0ef;
    }

    .logout a {
        color: #dc3545;
    }

    /* Responsif untuk mobile */
    @media screen and (max-width: 600px) {
        li {
            float: none;
            width: 100%;
        }
    }
</style>