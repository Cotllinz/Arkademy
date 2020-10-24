-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for arkademy
CREATE DATABASE IF NOT EXISTS `arkademy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `arkademy`;

-- Dumping structure for table arkademy.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL DEFAULT 0,
  `jumlah` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table arkademy.produk: ~3 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id`, `nama_product`, `keterangan`, `harga`, `jumlah`) VALUES
	(3, 'Nasi Goreng', 'Makanan Dengan Rasa Yang Wuenak Tenan Ditambah Telur Seng Akeh Rasane Mantul', 12000, 9),
	(6, 'Nasi Pecel', 'Nasi Pecel Makanan Wong Jowo Seng Akeh diminati arek&quot; surabaya sayure seger + Bumbu Kacang seng puedes', 15000, 15);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
