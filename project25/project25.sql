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


-- Dumping database structure for project25
CREATE DATABASE IF NOT EXISTS `project25` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project25`;

-- Dumping structure for table project25.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project25.authors: ~10 rows (approximately)
INSERT INTO `authors` (`id`, `name`, `biography`) VALUES
	(1, 'John Smith', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod velit eu felis dapibus, ac eleifend mi rhoncus.'),
	(2, 'Jane Doe', 'Nullam auctor sem ut tellus euismod, non fermentum tortor commodo. Donec vel ultrices ligula.'),
	(3, 'David Johnson', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'),
	(4, 'Sarah Williams', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque gravida velit vel sem faucibus.'),
	(5, 'Michael Brown', 'Cras sit amet neque nec justo cursus bibendum. Maecenas eu mi in dolor placerat ultricies.'),
	(6, 'Lisa Miller', 'Suspendisse nec magna nec est efficitur placerat. Nam at ipsum ac leo laoreet consectetur.'),
	(7, 'James Wilson', 'Fusce eget nunc sed nisi tempus placerat. Nunc vehicula purus sed lectus ultricies, eget cursus metus rutrum.'),
	(8, 'Emily Anderson', 'Duis auctor libero vitae lorem ultrices, eget maximus magna varius. Vivamus non aliquam est.'),
	(9, 'Daniel Taylor', 'Nam in tortor sit amet nunc euismod dictum. Integer vitae quam vel nulla convallis cursus.'),
	(10, 'Jessica Martinez', 'Ut consectetur ex at elit placerat, nec dignissim ligula laoreet. Phasellus eu ex sed libero eleifend ultricies.');

-- Dumping structure for table project25.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `genre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project25.books: ~10 rows (approximately)
INSERT INTO `books` (`id`, `title`, `author`, `description`, `genre`) VALUES
	(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'A novel about the American Dream', 'Classic'),
	(2, 'To Kill a Mockingbird', 'Harper Lee', 'A story of racial injustice and moral growth', 'Fiction'),
	(3, '1984', 'George Orwell', 'A dystopian novel about totalitarianism', 'Science Fiction'),
	(4, 'Pride and Prejudice', 'Jane Austen', 'A novel of manners', 'Classic'),
	(5, 'The Catcher in the Rye', 'J.D. Salinger', 'A story of alienation and teenage angst', 'Fiction'),
	(6, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'The first book in the Harry Potter series', 'Fantasy'),
	(7, 'The Hobbit', 'J.R.R. Tolkien', 'A fantasy novel about a hobbit on an adventure', 'Fantasy'),
	(8, 'The Lord of the Rings', 'J.R.R. Tolkien', 'A fantasy epic about the struggle against evil', 'Fantasy'),
	(9, 'Moby Dick', 'Herman Melville', 'A novel about Captain Ahab\'s quest for a white whale', 'Classic'),
	(10, 'The Da Vinci Code', 'Dan Brown', 'A mystery thriller about the Holy Grail', 'Mystery');

-- Dumping structure for table project25.books_authors
CREATE TABLE IF NOT EXISTS `books_authors` (
  `book_id` int NOT NULL,
  `author_id` int NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `author_id` (`author_id`),
  CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project25.books_authors: ~10 rows (approximately)
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 3),
	(3, 4),
	(4, 5),
	(5, 6),
	(6, 7),
	(7, 8),
	(8, 9),
	(9, 10);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
