-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             7.0.0.4316
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for license
CREATE DATABASE IF NOT EXISTS `license` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `license`;


-- Dumping structure for table license.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table license.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`userid`, `password`, `fullname`, `address`, `mobile`) VALUES
	('admin', '1234', 'admin', 'Gazipur', '00000000'),
	('newadmin', '1234', 'newadmin', 'ggg', '0000000');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table license.license
CREATE TABLE IF NOT EXISTS `license` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_unit` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `l_no` varchar(50) NOT NULL,
  `issue_date` date NOT NULL,
  `expire_date` date NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Dumping data for table license.license: ~31 rows (approximately)
/*!40000 ALTER TABLE `license` DISABLE KEYS */;
INSERT INTO `license` (`l_id`, `l_unit`, `l_name`, `l_no`, `issue_date`, `expire_date`) VALUES
	(1, 'Masco Cottons Ltd', 'Factory License', '13790/Gazipur', '2020-07-05', '2021-06-30'),
	(2, 'Masco Cottons Ltd', 'Trade License-', '1/1128', '2020-10-21', '2021-10-20'),
	(3, 'Masco Cottons Ltd', 'Fire License', 'D/ D/Dhaka/22966/2011', '2020-07-07', '2021-06-30'),
	(4, 'Masco Cottons Ltd', 'Export Promotion Bureau (EPB)', 'BD04020', '2020-07-01', '2021-06-30'),
	(5, 'Masco Cottons Ltd', 'Import Registration Certiftcate (IRC)', '184237', '2020-08-11', '2021-06-30'),
	(6, 'Masco Cottons Ltd', 'Export Registration  Certiftcate (ERC)', '86472', '2020-07-17', '2021-06-30'),
	(7, 'Masco Cottons Ltd', 'BKMEA Membership Certificate', 'BKMEA: 1308-C/2008', '2021-01-05', '2021-12-31'),
	(8, 'Masco Cottons Ltd', 'BGMEA Membership Certificate', '5238', '2021-01-22', '2021-12-31'),
	(9, 'Masco Cottons Ltd', 'Group Insurance Certificate(BGMEA)', 'BGA/insu/2016/ 15378', '2021-01-23', '2021-12-31'),
	(10, 'Masco Cottons Ltd', 'Group Insurance Certificate(BKMEA)', 'BkA/insu/2016/ 15378', '2021-01-04', '2021-12-31'),
	(11, 'Masco Cottons Ltd', 'Industrial All Risks Insurance(IAR)', 'Pioneer/HO/IAR/P-20/04/2018', '2020-04-24', '2021-04-24'),
	(12, 'Masco Cottons Ltd', 'Boiler License-1', '7813', '2021-02-22', '2021-08-21'),
	(13, 'Masco Cottons Ltd', 'Boiler License-2', '9147', '2021-02-28', '2021-08-27'),
	(14, 'Masco Cottons Ltd', 'Generator License', 'LWC-1003/1564/2074', '2020-01-23', '2022-10-05'),
	(15, 'Masco Cottons Ltd', 'Drinking Water Test Report', 'MAY1809964', '2020-09-28', '2021-09-27'),
	(16, 'Masco Cottons Ltd', 'Deep Tubewell Permission ', 'P.T.O-01', '2020-07-20', '2021-06-30'),
	(17, 'Masco Cottons Ltd', 'LPG Stock & Usage License', 'No 105-2()-004/5631', '2021-01-06', '2021-12-31'),
	(18, 'Masco Cottons Ltd', 'Premises License', '12', '2020-07-01', '2021-06-30'),
	(19, 'Masco Cottons Ltd', 'Water Iron & Arsenic Report', '2018105396', '2020-07-02', '2021-07-02'),
	(20, 'MascoTex Ltd', 'Trade License', '', '2019-08-06', '2020-06-30'),
	(21, 'MascoTex Ltd', 'Fire License', '', '2020-06-10', '2021-06-30'),
	(22, 'MascoTex Ltd', 'Factory License', '', '2020-07-05', '2021-06-30'),
	(23, 'MascoTex Ltd', 'ERC ', '', '2020-02-09', '2020-06-30'),
	(24, 'MascoTex Ltd', 'IRC', '', '2020-03-27', '2020-06-30'),
	(25, 'MascoTex Ltd', 'EPB', '', '2019-07-01', '2020-06-30'),
	(26, 'MascoTex Ltd', 'Bond License', '', '2018-03-21', '2020-03-23'),
	(27, 'MascoTex Ltd', 'Generator ( BERC)', '', '2020-07-13', '2023-07-03'),
	(28, 'MascoTex Ltd', 'BGMEA Membership Certificate', '4880', '2020-01-08', '2020-12-31'),
	(29, 'MascoTex Ltd', 'BKMEA Membership certificate', '1771-c/2011', '2020-01-02', '2020-12-31'),
	(30, 'MascoTex Ltd', 'Boiler License', '7676', '2020-02-19', '2020-08-19'),
	(31, 'MascoTex Ltd', 'Group Insurance-BKMEA', '', '2020-01-01', '2020-12-31'),
	(32, 'MascoTex Ltd', 'Group Insurance-BGMEA', '', '2020-01-07', '2020-12-31'),
	(33, 'MascoTex Ltd', 'Fire Insurance/ Industrial Risk Insurance', '', '2020-04-24', '2021-04-24'),
	(34, 'MascoTex Ltd', 'Water Test Report-Iron & Arsenic', '', '2019-06-27', '2020-06-26'),
	(35, 'MascoTex Ltd', 'Water Test Report Others', '', '2019-06-23', '2020-06-22'),
	(36, 'MascoTex Ltd', 'Deep Tubewell Permission ', 'PTO-01', '2019-09-05', '2020-06-30'),
	(37, 'Masco Cottons Ltd', 'Pest Control', '', '2021-02-04', '2021-08-03'),
	(38, 'MascoTex Ltd', 'Incorporation ', '13680-86', '2008-11-25', '2030-01-01'),
	(39, 'MascoTex Ltd', 'LPG Stock & Use license ', '105-2(à¦ž)002', '2020-02-09', '2020-12-31');
/*!40000 ALTER TABLE `license` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
