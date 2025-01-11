<!-- code by farell kurniawan -->

<h1> Data Barang </h1>

<table border="1">
    <tr>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <!-- <th>Deskripsi</th> -->
        <th>Harga</th>
        <th>Stok</th>
        <th>Created</th>
        <th>Name Image</th>
        <th>Type Image</th>
        <th>Size Image</th>
        <th colspan="2">Aksi</th>
    </tr>

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
        exit();
    }

    $no = 1;
    $ambildata = mysqli_query($koneksi, "select * from tbl_barang");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$tampil[id_barang]</td>
            <td>$tampil[nama_barang]</td>
            
            <td>$tampil[harga]</td>
            <td>$tampil[stok]</td>
            <td>$tampil[created]</td>
            <td>$tampil[nama_image]</td>
            <td>$tampil[type_image]</td>
            <td>$tampil[size_image]</td>
            <td><a href='?id=$tampil[id_barang]'> Hapus </a></td>
            <td><a href='data_barang.php?kode=$tampil[id_barang]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
</table>

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

if (isset($_GET['id'])) {
    mysqli_query($koneksi, "delete  from tbl_barang where id_barang='$_GET[id]'");

    echo "<script>alert('Data berhasil dihapus');</script>";
    echo "<meta http-equiv=refresh content=2;URL='data_barang.php'>";
}
