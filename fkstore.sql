-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 01:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `secret_codes`
--

CREATE TABLE `secret_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secret_codes`
--

INSERT INTO `secret_codes` (`id`, `code`) VALUES
(1, '036593264'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bantuan`
--

CREATE TABLE `tbl_bantuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bantuan`
--

INSERT INTO `tbl_bantuan` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Farell', 'rabbitfk17@gmail.com', 'Tolong'),
(2, 'Farell', 'rabbitfk17@gmail.com', 'tolong'),
(3, 'Farell', 'rabbitfk17@gmail.com', 'tolong'),
(4, 'Farell', 'rabbitfk17@gmail.com', 'help\r\n'),
(5, 'Farell', 'rabbitfk17@gmail.com', 'tolong'),
(6, 'Farell', 'rabbitfk17@gmail.com', 'help\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_image` varchar(50) NOT NULL,
  `type_image` varchar(50) NOT NULL,
  `size_image` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `kategori`, `deskripsi`, `harga`, `stok`, `created`, `nama_image`, `type_image`, `size_image`) VALUES
(100056, 'Korean 01', 'Korean', 'Ini adalah pakaian/style korean casuals.', 12000000, 10, '2024-05-18 12:36:43', 'korean-01.jpeg', 'image/jpeg', 32565),
(100057, 'Korean 02', 'Korean', 'Ini adalah pakaian/style korean casuals.', 12000000, 10, '2024-05-11 17:00:00', 'korean-02.jpeg', 'image/jpeg', 67737),
(100058, 'Korean 03', 'Korean', 'Ini adalah pakaian/style korean casuals.', 12000000, 10, '2024-05-11 17:00:00', 'korean-03.jpeg', 'image/jpeg', 55069),
(100059, 'Korean 04', 'Korean', 'Ini adalah pakaian/style korean casuals.', 12000000, 10, '2024-05-11 17:00:00', 'korean-04.jpeg', 'image/jpeg', 56272),
(100060, 'Old Money 01', 'Old Money', 'Ini adalah pakaian/style Old Money casuals.', 12000000, 10, '2024-05-11 17:00:00', 'old-money-01.jpeg', 'image/jpeg', 69176),
(100061, 'Old Money 02', 'Old Money', 'Ini adalah pakaian/style Old Money casuals.', 12000000, 10, '2024-05-11 17:00:00', 'old-money-02.jpeg', 'image/jpeg', 69180),
(100062, 'Old Money 03', 'Old Money', 'Ini adalah pakaian/style Old Money casuals.', 12000000, 10, '2024-05-11 17:00:00', 'old-money-03.jpeg', 'image/jpeg', 33352),
(100063, 'Old Money 04', 'Old Money', 'Ini adalah pakaian/style Old Money casuals.', 12000000, 10, '2024-05-11 17:00:00', 'old-money-04.jpeg', 'image/jpeg', 16877),
(100064, 'Sepatu 01', 'Sepatu', 'Ini adalah Sepatu casuals.', 12000000, 5, '2024-05-11 17:00:00', 'sepatu-01.jpeg', 'image/jpeg', 22118),
(100065, 'Sepatu 02', 'Sepatu', 'Ini adalah Sepatu casuals.', 12000000, 5, '2024-05-11 17:00:00', 'sepatu-02.jpeg', 'image/jpeg', 21837),
(100066, 'Sepatu 03', 'Sepatu', 'Ini adalah Sepatu casuals.', 12000000, 5, '2024-05-11 17:00:00', 'sepatu-03.jpg', 'image/jpeg', 4560),
(100067, 'Sepatu 04', 'Sepatu', 'Ini adalah Sepatu casuals.', 12000000, 10, '2024-05-11 17:00:00', 'sepatu-04.jpg', 'image/jpeg', 4952),
(100068, 'Sepatu 05', 'Sepatu', 'Ini adalah Sepatu casuals.', 12000000, 5, '2024-05-11 17:00:00', 'sepatu-05.jpg', 'image/jpeg', 5627),
(100069, 'Stone Island 01', 'Stone Island', 'Ini adalah pakaian/style Stone Island casuals.', 12000000, 100, '2024-05-11 17:00:00', 'stone-island-01.jpeg', 'image/jpeg', 50632),
(100070, 'Stone Island 02', 'Stone Island', 'Ini adalah pakaian/style Stone Island casuals.', 12000000, 100, '2024-05-11 17:00:00', 'stone-island-02.jpeg', 'image/jpeg', 32151),
(100071, 'Stone Island 03', 'Stone Island', 'Ini adalah pakaian/style Stone Island casuals.', 12000000, 1, '2024-05-11 17:00:00', 'stone-island-03.jpeg', 'image/jpeg', 35274),
(100072, 'Stone Island 04', 'Stone Island', 'Ini adalah pakaian/style Stone Island casuals.', 12000000, 5, '2024-05-11 17:00:00', 'stone-island-04.jpeg', 'image/jpeg', 31254),
(100073, 'Old Money 05', 'Old Money', 'Ini adalah pakaian/style Old Money casuals.', 12000000, 10, '2024-05-17 17:00:00', 'old-money-01.jpeg', 'image/jpeg', 69176),
(100074, 'Korean 05', 'Korean', 'Ini adalah pakaian/style korean casuals.', 12000000, 5, '2024-05-17 17:00:00', 'korean-01.jpeg', 'image/jpeg', 32565),
(100075, 'Stone Island 05', 'Stone Island', 'Ini adalah pakaian/style Stone Island casuals.', 12000000, 5, '2024-05-17 17:00:00', 'stone-island-01.jpeg', 'image/jpeg', 50632),
(100076, 'Kacamata 01', 'Aksesoris', 'Ini adalah aksesoris kacamata', 12000000, 5, '2024-05-22 17:00:00', 'aksesoris-kacamata-01.jpeg', 'image/jpeg', 20705),
(100077, 'Kacamata 02', 'Aksesoris', 'Ini adalah aksesoris kacamata', 12000000, 100, '2024-05-22 17:00:00', 'aksesoris-kacamata-02.jpeg', 'image/jpeg', 15316),
(100078, 'Kacamata 03', 'Aksesoris', 'Ini adalah aksesoris kacamata', 12000000, 5, '2024-05-22 17:00:00', 'aksesoris-kacamata-03.jpeg', 'image/jpeg', 15231),
(100079, 'Kacamata 04', 'Aksesoris', 'Ini adalah aksesoris kacamata', 2147483647, 10, '2024-05-22 17:00:00', 'aksesoris-kacamata-04.jpeg', 'image/jpeg', 19745),
(100080, 'Kacamata 05', 'Aksesoris', 'Ini adalah aksesoris kacamata', 12000000, 5, '2024-05-22 17:00:00', 'aksesoris-kacamata-05.jpeg', 'image/jpeg', 20716),
(100081, 'Topi 01', 'Aksesoris', 'Ini adalah aksesoris topi', 2147483647, 5, '2024-05-22 17:00:00', 'aksesoris-topi-01.jpeg', 'image/jpeg', 24415),
(100082, 'Topi 02', 'Aksesoris', 'Ini adalah aksesoris topi', 2147483647, 100, '2024-05-22 17:00:00', 'aksesoris-topi-02.jpeg', 'image/jpeg', 67381),
(100083, 'Topi 03', 'Aksesoris', 'Ini adalah aksesoris topi', 12000000, 10, '2024-05-22 17:00:00', 'aksesoris-topi-03.jpeg', 'image/jpeg', 32054),
(100084, 'Topi 04', 'Aksesoris', 'Ini adalah aksesoris topi', 2147483647, 5, '2024-05-22 17:00:00', 'aksesoris-topi-04.jpeg', 'image/jpeg', 14962),
(100085, 'Topi 05', 'Aksesoris', 'Ini adalah aksesoris topi', 12000000, 5, '2024-05-22 17:00:00', 'aksesoris-topi-05.jpeg', 'image/jpeg', 32991);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_barang` int(100) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `qty` int(50) NOT NULL,
  `kurir` varchar(15) NOT NULL,
  `date_in` date NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`id`, `id_user`, `id_barang`, `ukuran`, `qty`, `kurir`, `date_in`, `total`) VALUES
(1, 1, 100085, 'M', 2, 'TIKI', '2024-05-26', 24000000),
(2, 1, 100069, 'M', 6, 'SICEPAT', '2024-05-29', 72000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_langganan`
--

CREATE TABLE `tbl_langganan` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_langganan`
--

INSERT INTO `tbl_langganan` (`id_user`, `nama`, `email`, `tanggal_daftar`) VALUES
(1, 'Farell Kurniawan', 'rabbitfk17@gmail.com', '2024-05-18 13:58:08'),
(2, 'Karell Kenzie', 'karell@gmail.com', '2024-05-18 13:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id_message` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id_message`, `id_user`, `name`, `email`, `message`, `created_at`) VALUES
(3, NULL, 'Farell', 'farellkurniawan17108@gmail.com', 'Test', '2024-05-26 08:58:04'),
(4, NULL, 'Farell', 'farellkurniawan17108@gmail.com', 'Halo', '2024-05-26 08:58:11'),
(5, NULL, 'Santo', 'farellkur@gmail.com', 'Halo, boleh minta tolong?', '2024-05-28 12:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengiriman`
--

CREATE TABLE `tbl_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengiriman`
--

INSERT INTO `tbl_pengiriman` (`id_pengiriman`, `nama_penerima`, `alamat`, `kode_pos`, `nomor_telepon`) VALUES
(1, 'Farell', '111', '111', '11'),
(2, 'Farell', '111', '111', '11'),
(3, 'Farell', '111', '111', '111'),
(4, 'Karell', '111', '111', '11'),
(5, 'Santo', '111', '111', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_barang` int(100) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `qty` int(50) NOT NULL,
  `kurir` varchar(15) NOT NULL,
  `date_in` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_user`, `id_barang`, `ukuran`, `qty`, `kurir`, `date_in`, `total`) VALUES
(33, 1, 100081, 'M', 2, 'KILAT', 20240526, 2147483647),
(34, 1, 100081, 'XL', 2, 'TIKI', 20240526, 2147483647),
(35, 1, 100078, 'M', 2, 'TIKI', 20240526, 24000000),
(36, 1, 100073, 'XL', 1, 'GOJEK', 20240603, 12000000),
(37, 1, 100076, 'XL', 2, 'TIKI', 20240603, 24000000),
(38, 7, 100074, 'L', 1, 'TIKI', 20240606, 12000000),
(39, 7, 100074, 'M', 2, 'KILAT', 20240606, 24000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `fullname`, `email`, `alamat`, `nomor_telepon`, `username`, `password`, `title`) VALUES
(1, 'Farell Kurniawan', 'rabbitfk17@gmail.com', 'Jl.Taruna Jaya 1', '6287856930401', 'Rabbit', 'f4r3ll', 'user'),
(2, 'Karell Kenzie', 'karell@gmail.com', 'Jl.Taruna Jaya 2', '6287856565656', 'Nana', 'n4n4', 'user'),
(3, 'Santo', 'santo@gmail.com', 'Jl.Taruna Jaya 3', '6287788473829', 'Ato', '4t0', 'user'),
(4, 'Admin FKStore', 'farellkurniawan17108@gmail.com', 'Kemayoran, Jakarta Pusat, Indonesia', '6287856930401', 'Admin', '035926', 'admin'),
(6, 'Mita', 'mita@gmail.com', 'Jl.Sunter Indah 1', '6287878426720', 'Mami', 'm4m1', 'user'),
(7, 'Santo', 'sangrafhuang27511@gmail.com', 'Jakarta', '087788473829', 'Santo', '0000', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `secret_codes`
--
ALTER TABLE `secret_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bantuan`
--
ALTER TABLE `tbl_bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_langganan`
--
ALTER TABLE `tbl_langganan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pengiriman`
--
ALTER TABLE `tbl_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `secret_codes`
--
ALTER TABLE `secret_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bantuan`
--
ALTER TABLE `tbl_bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100089;

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_langganan`
--
ALTER TABLE `tbl_langganan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengiriman`
--
ALTER TABLE `tbl_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD CONSTRAINT `tbl_message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
