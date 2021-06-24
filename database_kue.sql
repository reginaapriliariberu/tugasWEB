-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 02:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_kue`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(50) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_belanja` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tanggal_pemesanan`, `total_belanja`) VALUES
(39, '2020-06-22', 25000),
(40, '2020-06-22', 22000),
(41, '2020-06-22', 56000),
(43, '2020-12-14', 12000),
(44, '2020-12-28', 15000),
(45, '2020-12-28', 30000),
(46, '2020-12-28', 41000),
(47, '2020-12-28', 15000),
(48, '2020-12-28', 37000),
(51, '2020-12-29', 15000),
(52, '2020-12-29', 28000),
(53, '2020-12-29', 28000),
(54, '2020-12-29', 100000),
(55, '2020-12-30', 188000),
(56, '2020-12-30', 110000),
(57, '2020-12-30', 230000),
(58, '2020-12-30', 115000),
(59, '2020-12-30', 280000),
(60, '2020-12-30', 290000),
(61, '2020-12-30', 290000),
(62, '2020-12-30', 200000),
(63, '2021-02-10', 288000),
(64, '2021-02-10', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(50) NOT NULL,
  `id_pemesanan` int(50) NOT NULL,
  `id_menu` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pemesanan`, `id_menu`, `jumlah`) VALUES
(7, 32, '9', 1),
(8, 32, '11', 1),
(9, 33, '16', 1),
(10, 33, '6', 1),
(11, 34, '13', 1),
(12, 34, '8', 1),
(13, 34, '9', 1),
(14, 34, '17', 1),
(15, 35, '9', 2),
(16, 35, '14', 1),
(17, 36, '8', 1),
(18, 37, '13', 1),
(19, 37, '16', 1),
(20, 38, '8', 1),
(21, 39, '9', 1),
(22, 39, '16', 1),
(23, 40, '10', 1),
(24, 40, '14', 1),
(25, 41, '17', 1),
(26, 41, '10', 1),
(27, 41, '9', 2),
(28, 42, '9', 1),
(29, 42, '14', 1),
(30, 42, '7', 1),
(31, 42, '17', 1),
(32, 43, '6', 1),
(33, 44, '6', 1),
(34, 45, '6', 2),
(35, 46, '6', 1),
(36, 46, '7', 2),
(37, 47, '6', 1),
(38, 48, '8', 1),
(39, 48, '9', 1),
(40, 49, '15', 1),
(41, 49, '14', 1),
(42, 50, '6', 1),
(43, 51, '6', 1),
(44, 52, '6', 1),
(45, 52, '7', 1),
(46, 53, '6', 1),
(47, 53, '7', 1),
(48, 54, '6', 1),
(49, 55, '8', 1),
(50, 55, '11', 1),
(51, 56, '14', 1),
(52, 56, '6', 1),
(53, 57, '6', 1),
(54, 57, '14', 1),
(55, 57, '15', 2),
(56, 57, '10', 1),
(57, 58, '7', 1),
(58, 58, '15', 2),
(59, 59, '6', 1),
(60, 59, '8', 2),
(61, 60, '6', 2),
(62, 60, '8', 1),
(63, 61, '6', 2),
(64, 61, '8', 1),
(65, 62, '6', 2),
(66, 63, '6', 1),
(67, 63, '8', 1),
(68, 63, '11', 1),
(69, 64, '7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_menu` int(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jenis_menu` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_menu`, `nama_menu`, `jenis_menu`, `stok`, `harga`, `gambar`) VALUES
(6, 'Pencake', 'Dessert', 50, 100000, 'pancake.jpg'),
(7, 'Gelato Milk Tea', 'Dessert', 50, 85000, 'volcanotoastcover.jpg'),
(8, 'Fat Bubble', 'Dessert', 50, 90000, 'c6c9a76f-abdb-4f23-8d79-5a621d584ce4.jpeg'),
(9, 'Banana Crepes', 'Dessert', 45, 60000, 'picture-1586719648.jpg'),
(10, 'Brownis Sin', 'Dessert', 50, 90000, 'chocolate-677762_960_720.jpg'),
(11, 'No Bake Tiramisu', 'Dessert', 20, 98000, 'resep-no-bake-tiramisu-dessert-italia-mudah-tanpa-oven.jpg'),
(14, 'Jus Alpukat', 'Minuman', 50, 10000, 'juspukat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` enum('admin','pelanggan','pelayan','kasir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`) VALUES
(25, 'erni', '123', 'Erni Yuliana', 'Laki-Laki', '2001-01-01', 'Tambolaka', '081337740284', 'pelanggan'),
(35, 'yaya', '123', 'Endah komaryah', 'Perempuan', '2000-10-10', 'Dompu', '1234567890', 'pelanggan'),
(38, 'Mahsuss', '123', 'Mahsus Afriandy', 'Laki-Laki', '1997-10-10', 'Mataram', '123456789', 'admin'),
(39, 'hana', 'hana', 'Hana Ramdhani', 'Perempuan', '2000-12-13', 'Mataram', '1234567890', 'pelanggan'),
(40, 'yaya', 'yaya', 'Endah KL', 'Perempuan', '2005-12-09', 'Dompu', '1234567890', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
