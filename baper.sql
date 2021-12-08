-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: baper
-- ------------------------------------------------------
-- Server version	5.5.62

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `absenanggota`
--

DROP TABLE IF EXISTS `absenanggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `absenanggota` (
  `id_absen_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_absen_anggota`),
  KEY `fk anggota` (`id_anggota`),
  CONSTRAINT `fk anggota` FOREIGN KEY (`id_anggota`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absenanggota`
--

LOCK TABLES `absenanggota` WRITE;
/*!40000 ALTER TABLE `absenanggota` DISABLE KEYS */;
/*!40000 ALTER TABLE `absenanggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `absennonanggota`
--

DROP TABLE IF EXISTS `absennonanggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `absennonanggota` (
  `id_absen_non_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_absen_non_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absennonanggota`
--

LOCK TABLES `absennonanggota` WRITE;
/*!40000 ALTER TABLE `absennonanggota` DISABLE KEYS */;
INSERT INTO `absennonanggota` VALUES (1,'0000-00-00','muhan','085862312136','jl. tembalang');
/*!40000 ALTER TABLE `absennonanggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jumlah_copy` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `letak_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `gambar_buku` varchar(50) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,'fahmi','kopi janji jiwa',50,'harem','RAK-25',2000,'');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pinjam_buku`
--

DROP TABLE IF EXISTS `pinjam_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pinjam_buku` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `batas_pinjam` date NOT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `fk buku` (`id_buku`),
  KEY `fk peminjam` (`id_peminjam`),
  CONSTRAINT `fk buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk peminjam` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinjam_buku`
--

LOCK TABLES `pinjam_buku` WRITE;
/*!40000 ALTER TABLE `pinjam_buku` DISABLE KEYS */;
/*!40000 ALTER TABLE `pinjam_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tipe` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'bahrialmaroqy10@gmail.com','roqy','0000-00-00','','0858564562315','jlk.raya baskoro',1,'202cb962ac59075b964b07152d234b70'),(2,'bahri@gmail.com','alma','2021-12-08','','085632142365','jl. raya',2,'202cb962ac59075b964b07152d234b70'),(3,'bahrihussein65@gmail.com','M. Bahri','2021-12-11','195-1952034_imgenes-png-de-nico-yazawa-niko-niko-nii-removebg-preview.png','085836262134','jl. berlubang',2,'123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'baper'
--

--
-- Dumping routines for database 'baper'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-08 22:39:16
