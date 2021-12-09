-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `absenanggota`
--

CREATE TABLE `absenanggota` (
  `id_absen_anggota` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absenanggota`
--

INSERT INTO `absenanggota` (`id_absen_anggota`, `id_anggota`, `tanggal`) VALUES
(2, 163133, '2021-12-09'),
(3, 163133, '2021-12-09'),
(4, 163135, '2021-12-09'),
(5, 163133, '2021-12-09'),
(6, 163133, '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `absennonanggota`
--

CREATE TABLE `absennonanggota` (
  `id_absen_non_anggota` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absennonanggota`
--

INSERT INTO `absennonanggota` (`id_absen_non_anggota`, `tanggal`, `nama`, `hp`, `alamat`) VALUES
(1, '0000-00-00', 'muhan', '085862312136', 'jl. tembalang'),
(2, '2021-12-09', 'fahmo', '018128', 'fibfjwnwj');

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
(300020, 'Andrea', 'Holy Mother', 10, 3, 'Religi', 'K-10', 2001, 'Holy Mother.jpg', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?'),
(300021, 'Ahmad', 'KKN Di Desa Penari', 7, 7, 'Horror', 'H-10', 2001, 'KKN.jpg', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?'),
(600230, 'J. Harris', 'Cantik Itu Luka', 2, 2, 'Romansa', 'R-12', 2008, '220px-Cantikituluka2.jpg', 'Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.\r\nSetelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul keajaiban kenalan tersebut menjadi pacar pertamanya?'),
(600232, 'Eka Kurniawan', 'Perempuan yang Menangis Kepada Bulan Hitam', 12, 11, 'Happy', 'R-10', 2019, 'Perempuan.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `batas_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id_pinjam`, `id_buku`, `id_peminjam`, `status`, `tanggal_pinjam`, `tanggal_kembali`, `batas_pinjam`) VALUES
(16, 300020, 163133, 'meminjam', '2021-12-09', '0000-00-00', '2021-12-16'),
(17, 300020, 163135, 'meminjam', '2021-12-09', '2021-12-09', '2021-12-16'),
(18, 300020, 163133, 'meminjam', '2021-12-09', '0000-00-00', '2021-12-16'),
(19, 600232, 163136, 'meminjam', '2021-12-09', '2021-12-09', '2021-12-16'),
(20, 300020, 163136, 'meminjam', '2021-12-09', '0000-00-00', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tipe` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama_user`, `tanggal_lahir`, `gambar`, `hp`, `alamat`, `tipe`, `password`) VALUES
(163133, 'muhan@mail.com', 'muhan', '2021-12-20', 'collectie_tropenmuseum_portret_van_raden_ajeng_kartini_tmnr_10018776.jpg', '0858212192', 'Jl. Jurang Belimbing no 11, Kota Semarang, Jawa Tengah ', 2, '81dc9bdb52d04dc20036dbd8313ed055'),
(163134, 'admin@mail.com', 'admin', '2021-12-01', 'kg lutfii.jpg', '0812312412424', 'Jl. Jurang Belimbing no 10, Kota Semarang, Jawa Tengah', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(163135, 'anggota@gmail.com', 'Fahmi', '2001-06-23', 'gaya-rambut-pria-2021-front-puff.jpg', '087719661272', 'Jl.Wologito', 2, '77c4e7a963a57f6c689cce3439812943'),
(163136, 'pakaris@gmail.com', 'pakaris', '2011-12-14', 'WhatsApp Image 2021-05-15 at 13.48.17 (2).jpeg', '08655523712', 'Semarang Jawa Tengah', 2, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absenanggota`
--
ALTER TABLE `absenanggota`
  ADD PRIMARY KEY (`id_absen_anggota`),
  ADD KEY `fk anggota` (`id_anggota`);

--
-- Indexes for table `absennonanggota`
--
ALTER TABLE `absennonanggota`
  ADD PRIMARY KEY (`id_absen_non_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `fk buku` (`id_buku`),
  ADD KEY `fk peminjam` (`id_peminjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absenanggota`
--
ALTER TABLE `absenanggota`
  MODIFY `id_absen_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `absennonanggota`
--
ALTER TABLE `absennonanggota`
  MODIFY `id_absen_non_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600233;

--
-- AUTO_INCREMENT for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absenanggota`
--
ALTER TABLE `absenanggota`
  ADD CONSTRAINT `fk anggota` FOREIGN KEY (`id_anggota`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD CONSTRAINT `fk buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk peminjam` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
