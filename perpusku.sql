-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2023 at 09:15 AM
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
(28, 'Slamet Shariful Zaidin', 'zaiimrq@gmail.com', NULL, NULL);

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
(1, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, 15),
(2, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 20),
(3, 'Gadis Pantai', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 1962, 10),
(4, 'Tenggelamnya Kapal van der Wijck', 'Hamka', 'Bentang Pustaka', 1939, 18),
(5, 'Cinta di Dalam Gelas', 'Andrea Hirata', 'Gagas Media', 2009, 12),
(6, 'Cerita Cinta Enrico', 'F. Hendri H.', 'Bentang Pustaka', 2009, 8),
(7, 'Ayat-ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 25),
(8, 'Pulang', 'Leila S. Chudori', 'Gagas Media', 2012, 22),
(9, 'Pergi', 'Tere Liye', 'Gagas Media', 2003, 17),
(10, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2002, 30),
(11, 'Kisah Lainnya', 'Andrea Hirata', 'Gagas Media', 2006, 15),
(12, 'Edensor', 'Andrea Hirata', 'Bentang Pustaka', 2007, 14),
(13, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 19),
(14, 'Hujan', 'Tere Liye', 'Bentang Pustaka', 2011, 21),
(15, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009, 20),
(16, 'Bidadari-bidadari Surga', 'Tere Liye', 'Gramedia Pustaka Utama', 2008, 16),
(17, 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'Dee Lestari', 'Bentang Pustaka', 2001, 24),
(18, 'Rindu', 'Tere Liye', 'Gagas Media', 2004, 13),
(19, 'Lelaki Harimau', 'Eka Kurniawan', 'Kepustakaan Populer Gramedia', 2004, 18),
(20, 'Negeri Para Bedebah', 'Tere Liye', 'Gagas Media', 2002, 11),
(21, 'Ketika Cinta Bertasbih', 'Habiburrahman El Shirazy', 'Republika', 2004, 25),
(22, 'The Rainbow Troops', 'Andrea Hirata', 'Bentang Pustaka', 2005, 20),
(23, 'Saman', 'Ayu Utami', 'Gagas Media', 1998, 17),
(24, 'Pramoedya: An Invincible Spirit', 'Pramoedya Ananta Toer', 'Gramedia Pustaka Utama', 2006, 10),
(25, 'Pulang', 'Leila S. Chudori', 'Penerbit Republika', 2012, 18),
(26, 'Jejak Langkah', 'Pramoedya Ananta Toer', 'Gramedia Pustaka Utama', 1985, 15),
(27, 'Padang Bulan', 'Andrea Hirata', 'Gramedia Pustaka Utama', 2005, 22),
(28, 'Negeri van Oranje', 'Hamka', 'Gagas Media', 1945, 20),
(30, 'Kambing dan Hujan', 'Setyawan Surya', 'Bentang Pustaka', 2010, 15);

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
(14, 'zaiimrq@gmail.com', '$2y$10$tOUxSpSxsK6DaCB25zqdrOTq.nS4V0Oqt9wBZ43oaVM2Z0.EJefb6', 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_peminjaman_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`email`) REFERENCES `anggota` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
