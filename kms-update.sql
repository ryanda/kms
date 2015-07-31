-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for kms
CREATE DATABASE IF NOT EXISTS `kms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kms`;


-- Dumping structure for table kms.forum
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `user` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table kms.forum: ~3 rows (approximately)
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` (`id`, `judul`, `isi`, `user`, `tgl`, `jam`) VALUES
	(1, 'tes1', 'ini testing pertama saya', 'admin', '2015-07-31', '14:09:47'),
	(2, 'tes2', 'ini tes kedua, semangat!!!', 'mimin', '2015-07-31', '14:10:21'),
	(3, 'again', 'tes tes tes', 'admin', '2015-07-31', '14:10:40'),
	(6, 'tfgv', 'jk', '123456', '2015-07-31', '16:33:29'),
	(7, '123456', 'hello', '', '2015-07-31', '16:37:10'),
	(8, '234567', 'dfghjkl', 'heyho', '2015-07-31', '16:38:02'),
	(9, 'efghj', 'ssfsdf', '23ertghj', '2015-07-31', '16:41:53');
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;


-- Dumping structure for table kms.forum2
CREATE TABLE IF NOT EXISTS `forum2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `komentar` text,
  `user` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table kms.forum2: ~4 rows (approximately)
/*!40000 ALTER TABLE `forum2` DISABLE KEYS */;
INSERT INTO `forum2` (`id`, `forum_id`, `komentar`, `user`, `tgl`, `jam`) VALUES
	(1, 1, 'oi ', 'ryan', '2015-07-31', '14:11:03'),
	(2, 1, 'hello world', 'admin', '2015-07-31', '14:11:26'),
	(3, 1, 'coba123123', '123456', '2015-07-31', '14:11:39'),
	(4, 2, 'mencoba meramaikan', 'qwerty', '2015-07-31', '14:11:59'),
	(5, 1, 'coba', '123456', '2015-07-31', '15:10:11'),
	(6, 1, '23456789', 'sadsadasdasdasd', '2015-07-31', '16:03:17'),
	(7, 1, 'wjhdkjsfjsdbfk', 'sadsadasdasdasd', '2015-07-31', '16:03:22'),
	(8, 1, 'tes bro', 'sadsadasdasdasd', '2015-07-31', '16:03:59'),
	(9, 3, 'wer', 'bnm', '2015-07-31', '16:42:47');
/*!40000 ALTER TABLE `forum2` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
