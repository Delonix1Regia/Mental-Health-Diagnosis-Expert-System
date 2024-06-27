-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for diagnosa_mental
CREATE DATABASE IF NOT EXISTS `diagnosa_mental` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `diagnosa_mental`;

-- Dumping structure for table diagnosa_mental.diagnosa
CREATE TABLE IF NOT EXISTS `diagnosa` (
  `id_diagnosa` int NOT NULL AUTO_INCREMENT,
  `a1` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a2` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a3` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a4` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a5` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a6` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a7` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a8` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a9` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a10` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a11` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a12` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `a13` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `diagnosis` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id_diagnosa`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table diagnosa_mental.diagnosa: ~17 rows (approximately)
INSERT INTO `diagnosa` (`id_diagnosa`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `diagnosis`) VALUES
	(33, 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Depresi'),
	(34, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Skizofrenia'),
	(35, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Gangguan Kepribadian'),
	(36, 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Anoreksia'),
	(37, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gangguan Kecemasan'),
	(38, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak dapat membuat diagnosis.'),
	(39, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Skizofrenia'),
	(40, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(41, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(42, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(43, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(44, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(45, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gangguan Kecemasan'),
	(46, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Gangguan Kepribadian'),
	(47, 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Depresi'),
	(48, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.'),
	(49, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak dapat membuat diagnosis.');

-- Dumping structure for table diagnosa_mental.pernyataan
CREATE TABLE IF NOT EXISTS `pernyataan` (
  `id_pernyataan` int NOT NULL AUTO_INCREMENT,
  `pernyataan` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id_pernyataan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table diagnosa_mental.pernyataan: ~0 rows (approximately)
INSERT INTO `pernyataan` (`id_pernyataan`, `pernyataan`) VALUES
	(1, 'Ya'),
	(2, 'Tidak');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
