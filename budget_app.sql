-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2019 at 11:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

DROP TABLE IF EXISTS `buyers`;
CREATE TABLE IF NOT EXISTS `buyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`) VALUES
(1, 'Nakupac'),
(2, 'Pavle'),
(3, 'Femka'),
(4, 'Zarubica'),
(5, 'Dusica'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `category_of_expenses`
--

DROP TABLE IF EXISTS `category_of_expenses`;
CREATE TABLE IF NOT EXISTS `category_of_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_of_expenses`
--

INSERT INTO `category_of_expenses` (`id`, `name`) VALUES
(2, 'Fertilizer'),
(1, 'Fuel'),
(5, 'Other'),
(4, 'Spray chemistry'),
(3, 'Wages');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Mix'),
(5, 'Cut'),
(6, 'Green'),
(7, 'Mixed colors');

-- --------------------------------------------------------

--
-- Table structure for table `culture`
--

DROP TABLE IF EXISTS `culture`;
CREATE TABLE IF NOT EXISTS `culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culture`
--

INSERT INTO `culture` (`id`, `name`) VALUES
(3, 'Beans'),
(4, 'Other'),
(1, 'Pepper'),
(2, 'Weath');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(11,2) NOT NULL,
  `metric` varchar(20) DEFAULT 'Kg/L',
  `category_id` int(11) NOT NULL,
  `culture_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  KEY `culture_id` (`culture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `description`, `cost`, `metric`, `category_id`, `culture_id`, `user_id`, `created_at`) VALUES
('5cedc61331188', '10l', '1500.00', 'Kg/L', 1, 1, 11, '2019-05-28 23:36:51'),
('5cedc62ac55a4', 'Nafta vlado 40l', '4400.00', 'Kg/L', 1, 1, 11, '2019-05-28 23:37:14'),
('5cedd1fc0f257', '10l', '1500.00', 'Kg/L', 1, 1, 1, '2019-05-29 00:27:40'),
('5cee5e16156c3', 'asasas', '1111.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:25:26'),
('5cee5e26e84f7', 'dsds', '1232.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:25:42'),
('5cee5e3d2d950', 'sss', '21.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:26:05'),
('5cee5e6943f2f', 'fsd', '213.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:26:49'),
('5cee5e6d0e52e', '213', '21.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:26:53'),
('5cee5e77e28c9', '32432', '123.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:27:03'),
('5cee5e89f3575', '231', '22.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:27:22'),
('5cee5ec43e138', '333333333333', '3333.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:28:20'),
('5cee5ed46fe6f', 'ja 9000', '1.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:28:36'),
('5cee5f5aef937', 'mama', '100.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:30:50'),
('5cee605b02e04', 'ffffffffffffff', '2.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:35:07'),
('5cee6064d651c', 'asdf', '324.00', 'Kg/L', 1, 1, 1, '2019-05-29 10:35:16'),
('5ceed0d676ecf', 'radnici', '50000.00', 'Kg/L', 3, 1, 1, '2019-05-29 18:35:02'),
('5ceed30f8c09e', 'fungi', '132423.00', 'Kg/L', 4, 1, 1, '2019-05-29 18:44:31'),
('5ceed32b2e6a0', 'pohari', '12.00', 'Kg/L', 5, 1, 1, '2019-05-29 18:44:59'),
('5cef793875068', 'Seme 100kg', '50000.00', 'Kg/L', 5, 2, 11, '2019-05-30 06:33:28'),
('5cef795100e82', 'funguran', '2300.00', 'Kg/L', 4, 1, 11, '2019-05-30 06:33:53'),
('5cef79614040e', 'Nordox 1kg', '4000.00', 'Kg/L', 4, 1, 11, '2019-05-30 06:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `gain`
--

DROP TABLE IF EXISTS `gain`;
CREATE TABLE IF NOT EXISTS `gain` (
  `id` varchar(225) NOT NULL,
  `culture_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `gain_ibfk_2` (`culture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gain`
--

INSERT INTO `gain` (`id`, `culture_id`, `user_id`) VALUES
('5cef219159784', 1, 1),
('5cef21942ba09', 1, 1),
('5cef219726bb7', 1, 1),
('5cf0e4bd5f5a6', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `img_path`
--

DROP TABLE IF EXISTS `img_path`;
CREATE TABLE IF NOT EXISTS `img_path` (
  `id` varchar(255) NOT NULL,
  `img_path` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_path`
--

INSERT INTO `img_path` (`id`, `img_path`) VALUES
('5cf8efd6e817f', '13235638_1407138092636211_2501281377407056707_o.jpg'),
('5cf8efe7e256c', 'Annotation 2019-05-26 204344.jpg'),
('5cf8f005a8869', 'PORTO WINS.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `journal` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `journal_ibfk_1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `user_id`, `journal`, `created_at`) VALUES
('5cf8efd6e817c', 1, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as oppos', '2019-06-06 10:49:58'),
('5cf8efe7e2568', 1, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as oppos', '2019-06-06 10:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `journal_has`
--

DROP TABLE IF EXISTS `journal_has`;
CREATE TABLE IF NOT EXISTS `journal_has` (
  `journal_id` varchar(255) NOT NULL,
  `img_path_id` varchar(255) NOT NULL,
  PRIMARY KEY (`journal_id`,`img_path_id`),
  KEY `journal_has_ibfk_2` (`img_path_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_has`
--

INSERT INTO `journal_has` (`journal_id`, `img_path_id`) VALUES
('5cf8efd6e817c', '5cf8efd6e817f'),
('5cf8efe7e2568', '5cf8efe7e256c'),
('5cf8efe7e2568', '5cf8f005a8869');

-- --------------------------------------------------------

--
-- Table structure for table `product_sale`
--

DROP TABLE IF EXISTS `product_sale`;
CREATE TABLE IF NOT EXISTS `product_sale` (
  `gain_id` varchar(225) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`gain_id`,`buyer_id`),
  KEY `buyer_id` (`buyer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sale`
--

INSERT INTO `product_sale` (`gain_id`, `buyer_id`, `class_id`, `weight`, `price`, `created_at`) VALUES
('5cef219159784', 1, 1, 111, 111, '2019-05-30 00:19:29'),
('5cef21942ba09', 1, 1, 11, 11, '2019-05-30 00:19:32'),
('5cef219726bb7', 1, 1, 333, 333, '2019-05-30 00:19:35'),
('5cf0e4bd5f5a6', 4, 1, 1500, 300, '2019-05-31 08:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `_password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `_password`, `email`, `created_at`) VALUES
(1, 'User first', 'User last', 'daco', 'sklj@gmail.com', '2019-05-28 15:41:12'),
(11, 'User first 2', 'User last 2', 'ttt', 'sklj2@gmial.com', '2019-05-28 17:27:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_of_expenses` (`id`),
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `expenses_ibfk_3` FOREIGN KEY (`culture_id`) REFERENCES `culture` (`id`);

--
-- Constraints for table `gain`
--
ALTER TABLE `gain`
  ADD CONSTRAINT `gain_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gain_ibfk_2` FOREIGN KEY (`culture_id`) REFERENCES `culture` (`id`);

--
-- Constraints for table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `journal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `journal_has`
--
ALTER TABLE `journal_has`
  ADD CONSTRAINT `journal_has_ibfk_2` FOREIGN KEY (`img_path_id`) REFERENCES `img_path` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `journal_has_ibfk_3` FOREIGN KEY (`journal_id`) REFERENCES `journal` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sale`
--
ALTER TABLE `product_sale`
  ADD CONSTRAINT `product_sale_ibfk_1` FOREIGN KEY (`gain_id`) REFERENCES `gain` (`id`),
  ADD CONSTRAINT `product_sale_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
