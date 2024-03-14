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

-- Dumping structure for table telephonebook.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `departmentID` int NOT NULL AUTO_INCREMENT,
  `departmentName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` char(30) NOT NULL,
  `phone` char(10) NOT NULL,
  `logo` char(50) DEFAULT NULL,
  `website` char(100) DEFAULT NULL,
  `parentDepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`departmentID`),
  KEY `parentDepartmentID` (`parentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`parentDepartmentID`) REFERENCES `departments` (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table telephonebook.departments: ~10 rows (approximately)
INSERT INTO `departments` (`departmentID`, `departmentName`, `address`, `email`, `phone`, `logo`, `website`, `parentDepartmentID`) VALUES
	(1, 'Hệ thống thông tin và quản lý', '109 Rusk Hill', 'fpearcy0@merriam-webster.com', '5068115247', 'public/assets/img/logodv1.jpeg', 'nibh', 2),
	(2, 'Công nghệ thông tin\r\n', '2 Sunbrook Hill', 'rbourdice1@amazon.co.uk', '3475382362', '/public/assets/img/logodv2.jpeg', 'vel', NULL),
	(3, 'Kĩ thuật phần mềm', '1 Parkside Street', 'lsymson2@clickbank.net', '7353718402', '/public/assets/img/logodv3.jpeg', 'vestibulum', 2),
	(4, 'Kinh tế', '8 Lawn Court', 'nfucher3@themeforest.net', '4271594295', '/public/assets/img/logodv4.jpeg', 'sit', NULL),
	(5, 'Logistic và quản lý chuỗi cung ứng', '85171 Mitchell Point', 'kbamlett4@spiegel.de', '4565445109', '/public/assets/img/logodv5.jpeg', 'aliquam', 4),
	(6, 'Kế toán', 'C2 175 Tay son', 'rsalvidge5@ehow.com', '4942748281', '/public/assets/img/logodv6.jpeg', 'nisi', 4),
	(7, 'Y tế ', '06705 Sunfield Terrace', 'msowten6@cloudflare.com', '7727962002', '/public/assets/img/logodv7.jpeg', 'leo', NULL),
	(8, 'Răng Hàm Mặt', '515 Karstens Circle', 'roleahy7@wikipedia.org', '1075209136', '/public/assets/img/logodv8.jpeg', 'volutpat', 7),
	(9, 'Điều dưỡng', '2 Michigan Trail', 'wdurnian8@nih.gov', '9186573095', '/public/assets/img/logodv9.jpeg', 'nunc', 7),
	(10, 'Tim mạch', '6045 Heath Pass', 'pdoveston9@examiner.com', '9652090977', '/public/assets/img/logodv1.jpeg', 'facilisi', 7);

-- Dumping structure for table telephonebook.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `mobilePhone` char(10) DEFAULT NULL,
  `positionn` varchar(50) DEFAULT NULL,
  `avatar` char(30) DEFAULT NULL,
  `departmentID` int DEFAULT NULL,
  PRIMARY KEY (`employeeID`),
  KEY `departmentID` (`departmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `departments` (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table telephonebook.employees: ~20 rows (approximately)
INSERT INTO `employees` (`employeeID`, `fullname`, `address`, `email`, `mobilePhone`, `positionn`, `avatar`, `departmentID`) VALUES
	(1, 'Lesly Dicty', '1 Melvin Alley', 'ldicty0@ezinearticles.com', '8876098713', 'nunc', 'laoreet', 1),
	(2, 'Sharity Thoday', '3889 Vernon Way', 'sthoday1@ft.com', '3609175057', 'sapien', 'quis', 1),
	(3, 'Andrey Catterick', '3759 Almo Center', 'acatterick2@ezinearticles.com', '1554003001', 'sed', 'condimentum', 3),
	(4, 'Jessi Motto', '7 East Plaza', 'jmotto3@lycos.com', '8459780249', 'in', 'sed', 3),
	(5, 'Calhoun Owens', '65342 Luster Trail', 'cowens4@smh.com.au', '4593872662', 'eget', 'lacus', 3),
	(6, 'Baily Rooper', '98 Melrose Alley', 'brooper5@blinklist.com', '3406657337', 'tellus', 'lacus', 5),
	(7, 'Catha Fewkes', '671 Buena Vista Road', 'cfewkes6@spotify.com', '5494391413', 'odio', 'ut', 5),
	(8, 'Elli Cloy', '49 Morrow Pass', 'ecloy7@homestead.com', '1411788596', 'enim', 'aliquet', 5),
	(9, 'Gabby Bendall', '33696 Sachs Avenue', 'gbendall8@studiopress.com', '8178207145', 'donec', 'tristique', 6),
	(10, 'Nyssa Stuckow', '21531 Mendota Alley', 'nstuckow9@youtube.com', '3845804346', 'tincidunt', 'sapien', 6),
	(11, 'Edithe Leon', '9 Westridge Road', 'eleona@over-blog.com', '6162215417', 'sed', 'pellentesque', 6),
	(12, 'Audry Wardington', '15789 Ruskin Court', 'awardingtonb@mysql.com', '2624399565', 'erat', 'adipiscing', 8),
	(13, 'Selina Capron', '39 Homewood Pass', 'scapronc@shinystat.com', '6419981503', 'adipiscing', 'volutpat', 8),
	(14, 'Broddie Maypole', '8118 Ryan Center', 'bmaypoled@newyorker.com', '5438431622', 'suspendisse', 'nulla', 8),
	(15, 'Izabel Gagie', '6144 Hauk Drive', 'igagiee@vimeo.com', '5738371025', 'pellentesque', 'in', 9),
	(16, 'Putnam Meddemmen', '6244 Esker Park', 'pmeddemmenf@tiny.cc', '4256712742', 'elementum', 'vulputate', 9),
	(17, 'Ricard Cousens', '24 Pleasure Avenue', 'rcousensg@constantcontact.com', '4893390942', 'blandit', 'platea', 10),
	(18, 'Caitrin Stairmand', '5969 Hollow Ridge Park', 'cstairmandh@walmart.com', '5213889546', 'sollicitudin', 'sodales', 10),
	(19, 'Nicky Willson', '61070 Sunfield Alley', 'nwillsoni@soundcloud.com', '5903339743', 'penatibus', 'turpis', 10),
	(20, 'Warner Rhodes', '4 Shasta Court', 'wrhodesj@fda.gov', '7754799417', 'ipsum', 'vivamus', 10);

-- Dumping structure for table telephonebook.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `passwordd` char(50) NOT NULL,
  `rolee` char(10) NOT NULL,
  `employeeID` int DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `employeeID` (`employeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table telephonebook.users: ~20 rows (approximately)
INSERT INTO `users` (`username`, `passwordd`, `rolee`, `employeeID`) VALUES
	('Brandice Busst', 'tM2<GDSp73vGC045(', 'admin', 2),
	('Cammy Placstone', 'bD2#/GnmGX=)9wBlTt`&', 'regular', 3),
	('Correy Depke', 'vE7*0j}QHvIPCA(fycZZh!(Yq>', 'regular', 4),
	('Cynthea McGarva', 'xC3*Wat(F|gI`HN>a', 'regular', 5),
	('Eal Bellison', 'cG6&Q__/zeh&)yFlb")+z(MA\'sIKQkt', 'regular', 6),
	('Hatti Stalman', 'fU4#$,K@,f69d$T|AlFzR}d8%AV}s|', 'regular', 7),
	('Humphrey McGilvary', 'oB1\'H~5ZKeYorwi!1_zg', 'regular', 8),
	('huy', '1', 'admin', 1),
	('Jenifer Sherwood', 'oS4\'pCtdmgazV@N@hfHt*36T*hJ$IW', 'regular', 9),
	('Jonell Risso', 'aL0#.3tTqe@@*d"MH?<2/\'7Gn"$A', 'regular', 10),
	('Lacy Buzine', 'vJ2)M4M)R.7!ygTpB?I', 'regular', 11),
	('Lorenzo Georgeot', 'yI1?6+F!fI1KF`*e3', 'regular', 12),
	('Lyndsay Assender', 'wU0~#g9#*tmsuGqf3v,tZl', 'regular', 13),
	('Marianne Piscopello', 'uB9+SM*?=pR+Y!w}@4Zf@&LKmM*%E#', 'regular', 14),
	('Maxim Hegges', 'dU9<+70eg7JenNJwn{r1FcK>', 'regular', 15),
	('Melisandra Jeenes', 'mR1?Z#l\'`=MT!=x\'5Nfo?lN2?j}(0', 'regular', 16),
	('Minny Cohani', 'fY8\'UUMl_\'H6QG_v|%JckWFsB&53}n', 'regular', 17),
	('Reggi Allabarton', 'tH2=n"q%oB"$Jgr|dZnt>gjSoi~%', 'regular', 18),
	('Rogers Craighall', 'eQ1,jz5?6j0vah\'.Ci19aw0', 'regular', 19),
	('Wells Orhtmann', 'tV2/@,P3J,PNNM*q<}}D', 'regular', 20);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
