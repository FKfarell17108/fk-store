<!-- code by farell kurniawan -->

<h1> Tambah Barang </h1>

<form action="" method="post">

    <table>
        <tr>
            <td width="200"> Nama Barang </td>
            <td> <input type="text" name="nama_barang" placeholder="Isi Nama Barang" required> </td>
        </tr>
        <tr>
            <td> Deskripsi </td>
            <td> <input type="text" name="deskripsi" placeholder="Isi Deskripsi Barang" required> </td>
        </tr>
        <tr>
        <tr>
            <td> Harga </td>
            <td> <input type="text" name="harga" placeholder="Isi Harga Barang" required> </td>
        </tr>
        <tr>
            <td> Stok </td>
            <td> <input type="text" name="stok" placeholder="Isi Stok Barang" required> </td>
        </tr>
        <!-- <tr>
            <td> Created </td>
            <td> <input type="text" name="created" placeholder="Isi Angka 0 (Nol)" required> </td>
        </tr>
        <tr> -->
        <td> Image </td>
        <td><input type="file" name="nama_image" required> </td>
        </tr>
        <tr>
            <td> Type Image </td>
            <td> <input type="text" name="type_image" placeholder="Isi Dengan 'image/png'" required> </td>
        </tr>
        <tr>
            <td> Size Image </td>
            <td> <input type="text" name="size_image" placeholder="Isi Angka 0 (Nol)" required> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tambah">
            </td>
        </tr>
    </table>
</form>

<link rel="stylesheet" href="design.css">

<?php

// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fkstore";

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    echo "<script>alert('Koneksi gagal: " . mysqli_connect_error() . "'); window.history.back();</script>";
}

if (isset($_POST['submit'])) {
    // Mendapatkan ID terakhir dari database
    $query_last_id = "SELECT id_barang FROM tbl_barang ORDER BY id_barang DESC LIMIT 1";
    $result_last_id = mysqli_query($koneksi, $query_last_id);

    if (mysqli_num_rows($result_last_id) > 0) {
        $row = mysqli_fetch_assoc($result_last_id);
        $last_id = $row['id_barang'];
        // Tambah 1 ke ID terakhir untuk mendapatkan ID berikutnya
        $id_barang = $last_id + 1;
    } else {
        // Jika tidak ada data, maka ID dimulai dari 100000
        $id_barang = 100000;
    }

    $nama_barang = $_POST['nama_barang'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $created = date("Y-m-d"); // Mengambil tanggal saat ini
    $nama_image = $_POST['nama_image'];
    $type_image = $_POST['type_image'];
    $size_image = $_POST['size_image'];

    // Query untuk menyimpan data barang baru
    $query = "INSERT INTO tbl_barang (id_barang, nama_barang, deskripsi, harga, stok, created, nama_image, type_image, size_image) 
              VALUES ('$id_barang', '$nama_barang', '$deskripsi', '$harga', '$stok', '$created', '$nama_image', '$type_image', '$size_image')";

    // Jalankan kueri
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data barang baru telah tersimpan');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($koneksi) . "');</script>";
    }
}