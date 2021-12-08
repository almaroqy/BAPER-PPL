-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 11:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baper`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jumlah_copy` int(11) NOT NULL,
  `stok_tersedia` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `letak_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `gambar_buku` varchar(50) NOT NULL,
  `sinopsis` varchar(1052) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `penulis`, `judul`, `jumlah_copy`, `stok_tersedia`, `kategori`, `letak_buku`, `tahun_terbit`, `gambar_buku`, `sinopsis`) VALUES
(300020, 'Andrea', 'Holy Mother', 10, 9, 'Religi', 'K-10', 2001, 'Holy Mother.jpg', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?'),
(300021, 'Ahmad', 'KKN Seram', 7, 7, 'Horror', 'H-10', 2001, 'KKN.jpg', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?'),
(600230, 'Udin', 'Hati Ini', 2, 2, 'Romansa', 'R-12', 2008, 'creative-assortment-with-different-books 1.png', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600231;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
