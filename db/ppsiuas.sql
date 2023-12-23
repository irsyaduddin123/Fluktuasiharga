-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsiuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`) VALUES
(2, 'Ikan'),
(3, 'Daging'),
(4, 'Minyak Goreng'),
(15, 'Ikan Asin');

-- --------------------------------------------------------

--
-- Table structure for table `harga_barang`
--

CREATE TABLE `harga_barang` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pasar_id` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_barang`
--

INSERT INTO `harga_barang` (`id`, `barang_id`, `pasar_id`, `harga`, `tanggal_input`) VALUES
(1, 4, 1, 20000, '2022-05-11'),
(2, 2, 1, 10000, '2022-05-12'),
(4, 1, 3, 2000, '2022-05-14'),
(5, 3, 1, 120000, '2022-05-15'),
(12, 3, 2, 50000, '2022-08-22'),
(13, 2, 3, 50000, '2022-08-22'),
(15, 4, 20, 100000, '2022-08-22'),
(16, 2, 22, 25000, '2022-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id`, `nama`, `lokasi`) VALUES
(2, 'Pasar Atom', 'Surabaya, Jawa Timur'),
(3, 'Pasar Genteng', 'Jalan Genteng, Surabaya'),
(20, 'Pasar Lamongan', 'Jawa Timur'),
(22, 'Pasar Ikan', 'Gunung Sari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Kelompok', 'Satu', '', '', '', 1, '', '', '2018-05-01'),
(13, 'pasar@gmail.com', '$2y$10$DiO3J2QHa0NFgFdiB9rW5uFcJZuV0Wv5fU1Wi7eU0XvPnrClUtGzK', 0, 'Pegawai', 'Pasar', '', '', '', 1, '', '', '2022-07-08'),
(14, 'pasar1@gmail.com', '$2y$10$qZUN4JOgh4RgzunelAYhrefjHban4F06cmlty7w05X3fe4aN4KxeK', 0, 'Pasar', 'Admin 2', '', '', '', 1, '', '', '2022-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_barang`
--
ALTER TABLE `harga_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `harga_barang`
--
ALTER TABLE `harga_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
