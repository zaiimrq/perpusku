-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2023 at 12:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusku`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `nomor_telepon` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `email`, `alamat`, `nomor_telepon`) VALUES
(27, 'Slamet Shariful Zaidin', 'zaiimrq@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` year DEFAULT NULL,
  `jumlah_copy` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_copy`) VALUES
(1, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, 5),
(2, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 8),
(3, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009, 10),
(4, 'Ayat-ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 7),
(5, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 6),
(6, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2004, 9),
(7, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 7),
(8, '5cm', 'Donny Dhirgantoro', 'Grasindo', 2008, 4),
(9, 'Madre', 'Dee Lestari', 'Bentang Pustaka', 2011, 3),
(10, 'Garis Waktu', 'Fiersa Besari', 'MediaKita', 2014, 6),
(11, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, 5),
(12, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 8),
(13, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009, 10),
(14, 'Ayat-ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 7),
(15, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 6),
(16, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2004, 9),
(17, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 7),
(18, '5cm', 'Donny Dhirgantoro', 'Grasindo', 2008, 4),
(19, 'Madre', 'Dee Lestari', 'Bentang Pustaka', 2011, 3),
(20, 'Garis Waktu', 'Fiersa Besari', 'MediaKita', 2014, 6),
(21, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, 5),
(22, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 8),
(23, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009, 10),
(24, 'Ayat-ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 7),
(25, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 6),
(26, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2004, 9),
(27, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 7),
(28, '5cm', 'Donny Dhirgantoro', 'Grasindo', 2008, 4),
(29, 'Madre', 'Dee Lestari', 'Bentang Pustaka', 2011, 3),
(30, 'Garis Waktu', 'Fiersa Besari', 'MediaKita', 2014, 6);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `id_buku` int DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_admin`) VALUES
(13, 'zaiimrq@gmail.com', 'zaii', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_peminjaman_anggota` (`id_anggota`),
  ADD KEY `FK_peminjaman_buku` (`id_buku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_peminjaman_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_peminjaman_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`email`) REFERENCES `anggota` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
