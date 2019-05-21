-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayar_project_industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_p2017`
--

CREATE TABLE `data_p2017` (
  `id` int(5) NOT NULL,
  `nama_agen` varchar(50) DEFAULT NULL,
  `januari` int(20) DEFAULT NULL,
  `februari` int(20) DEFAULT NULL,
  `maret` int(20) DEFAULT NULL,
  `april` int(20) DEFAULT NULL,
  `mei` int(20) DEFAULT NULL,
  `juni` int(20) DEFAULT NULL,
  `juli` int(20) DEFAULT NULL,
  `agustus` int(20) DEFAULT NULL,
  `september` int(20) DEFAULT NULL,
  `oktober` int(20) DEFAULT NULL,
  `november` int(20) DEFAULT NULL,
  `desember` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_p2017`
--

INSERT INTO `data_p2017` (`id`, `nama_agen`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `total`) VALUES
(4, 'testing2', 1, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `id` int(5) NOT NULL,
  `id_agen` int(5) DEFAULT NULL,
  `alamat` text,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tipe_barang` varchar(20) DEFAULT NULL,
  `jumlah_barang` int(20) DEFAULT NULL,
  `harga_zak` int(20) DEFAULT NULL,
  `harga_total` int(20) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pesanan`
--

INSERT INTO `data_pesanan` (`id`, `id_agen`, `alamat`, `tanggal_pemesanan`, `tipe_barang`, `jumlah_barang`, `harga_zak`, `harga_total`, `nomor_telepon`, `status`) VALUES
(5, 4, 'as', '2019-05-27', '1', 2, 2, 2, '2', 'approve'),
(6, 4, 'asd', '2019-05-05', '2', 1, 1, 3, '1', 'approve'),
(7, 3, '1', '2019-05-06', '2', 3, 5, 15, '2', 'pending'),
(8, 3, 'a', '2019-05-06', '2', 2, 3, 6, '1', 'pending'),
(9, 3, 'asd', '2019-05-20', '1', 2, 2, 4, '3', 'pending'),
(10, 3, 'asd', '2019-05-20', '1', 2, 6, 12, '3', 'pending'),
(11, 3, '1', '2019-05-15', '1', 3, 3, 9, '4', 'pending'),
(19, 4, '3', '2019-05-21', '3', 3, 3, 9, '3', 'pending'),
(20, 6, '1', '2019-05-14', '1', 1, 2, 2, '3', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `data_user_admin`
--

CREATE TABLE `data_user_admin` (
  `id` int(5) NOT NULL,
  `id_admin` int(5) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user_admin`
--

INSERT INTO `data_user_admin` (`id`, `id_admin`, `first_name`, `last_name`, `alamat`) VALUES
(1, 4, 'testing3', 'testing3', NULL),
(2, 5, 'testing4', 'testing4', NULL),
(3, 6, 'testing5', 'testing5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_user_agen`
--

CREATE TABLE `data_user_agen` (
  `id` int(5) NOT NULL,
  `id_agen` int(5) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `npwp` varchar(25) DEFAULT NULL,
  `alamat` text,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `pemilik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user_agen`
--

INSERT INTO `data_user_agen` (`id`, `id_agen`, `first_name`, `last_name`, `npwp`, `alamat`, `nomor_telepon`, `pemilik`) VALUES
(2, 3, 'testing1', 'testing1', '1', '', '', ''),
(3, 4, 'testing2', 'testing2', '1', '', '', ''),
(4, 5, 'testing3', 'testing3', '1', '', '2', '23'),
(5, 6, 'asd', 'asd', '1', NULL, NULL, NULL),
(6, 7, 'testing4', 'testing4', '2', 'testing4', '32', 'testing4');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi_status_penjualan`
--

CREATE TABLE `notifikasi_status_penjualan` (
  `id` int(5) NOT NULL,
  `id_pesanan` int(5) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi_status_penjualan`
--

INSERT INTO `notifikasi_status_penjualan` (`id`, `id_pesanan`, `status`) VALUES
(2, 5, 1),
(3, 6, 2),
(4, 7, 0),
(5, 8, 0),
(6, 9, 0),
(7, 10, 0),
(8, 11, 0),
(9, 12, 0),
(10, 13, 0),
(11, 14, 0),
(12, 15, 0),
(13, 16, 0),
(14, 17, 0),
(15, 18, 0),
(16, 19, 0),
(17, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `last_login` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `email`, `password`, `last_login`, `create_date`) VALUES
(1, 'testing0', 'testing0@gmail.com', '25d55ad283aa400', NULL, '0000-00-00 00:00:00'),
(2, 'testing1', 'testing1@gmail.com', '25d55ad283aa400', NULL, '2019-04-26 00:00:00'),
(3, 'testing2', 'testing2@gmail.com', '25d55ad283aa400', NULL, '2019-04-26 00:00:00'),
(4, 'testing3', 'testing3@gmail.com', '25d55ad283aa400', NULL, '2019-04-26 11:54:02'),
(5, 'testing4', 'testing4@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-05-14 14:19:13', '2019-04-26 18:02:24'),
(6, 'testing5', 'testing5@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, '2019-05-03 01:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_agen`
--

CREATE TABLE `user_agen` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `last_login` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_agen`
--

INSERT INTO `user_agen` (`id`, `username`, `email`, `password`, `last_login`, `create_date`) VALUES
(3, 'testing1', 'testing1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-05-21 20:45:50', '2019-05-01 00:24:06'),
(4, 'testing2', 'testing2@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-05-21 20:49:49', '2019-05-01 14:56:13'),
(5, 'testing3', 'testing3@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-05-21 20:37:18', '2019-05-01 14:59:29'),
(6, 'asdasd1', NULL, '5f4dcc3b5aa765d61d8327deb882cf99', NULL, '2019-05-06 00:43:07'),
(7, 'testing4', 'testing4@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, '2019-05-11 22:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_keuangan`
--

CREATE TABLE `user_keuangan` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `last_login` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_keuangan`
--

INSERT INTO `user_keuangan` (`id`, `username`, `email`, `password`, `last_login`, `create_date`) VALUES
(3, 'testing0', 'testing0@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-05-06 07:10:57', '2019-05-02 13:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_penjualan`
--

CREATE TABLE `user_penjualan` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `last_login` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_penjualan`
--

INSERT INTO `user_penjualan` (`id`, `username`, `email`, `password`, `last_login`, `create_date`) VALUES
(2, 'testing0', 'testing0@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-05-19 19:03:14', '2019-05-02 17:33:21'),
(3, 'testing1', 'testing1@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, '2019-05-03 02:39:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_p2017`
--
ALTER TABLE `data_p2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user_admin`
--
ALTER TABLE `data_user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user_agen`
--
ALTER TABLE `data_user_agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi_status_penjualan`
--
ALTER TABLE `notifikasi_status_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_agen`
--
ALTER TABLE `user_agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_keuangan`
--
ALTER TABLE `user_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_penjualan`
--
ALTER TABLE `user_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_p2017`
--
ALTER TABLE `data_p2017`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `data_user_admin`
--
ALTER TABLE `data_user_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_user_agen`
--
ALTER TABLE `data_user_agen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notifikasi_status_penjualan`
--
ALTER TABLE `notifikasi_status_penjualan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_agen`
--
ALTER TABLE `user_agen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_keuangan`
--
ALTER TABLE `user_keuangan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_penjualan`
--
ALTER TABLE `user_penjualan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
