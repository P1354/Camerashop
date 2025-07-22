-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2025 at 05:18 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camera`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `username` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int NOT NULL,
  `price` double NOT NULL,
  `subtotal` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `name`, `qty`, `price`, `subtotal`, `id`) VALUES
('ravi', 'test', 2, 70, 140, 22),
('pradip@123', 'Sony FE 200-600mm', 1, 70000, 70000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `submission_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `cardno` int NOT NULL,
  `atmpin` int NOT NULL,
  `cvv` int NOT NULL,
  `cardname` varchar(250) NOT NULL,
  UNIQUE KEY `cardno` (`cardno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardno`, `atmpin`, `cvv`, `cardname`) VALUES
(123456, 123, 1841, 'Ravi'),
(123, 1321, 151, 'Ravi'),
(0, 7777, 7777, '777'),
(2147483647, 145, 852, 'Ramesh'),
(4646, 66, 646, 'vdv'),
(6466464, 31515, 45545, 'Makwana');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

DROP TABLE IF EXISTS `camera`;
CREATE TABLE IF NOT EXISTS `camera` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `name`, `type`, `photo`, `price`) VALUES
(7, 'Camera Bag', 'Bag', '	\r\ncamera img/camara bag/bags1.jpg', '2200/-'),
(8, 'Camara Bag', 'Bag', 'camera img/camara bag/bag2.jpg', '3500/-'),
(9, 'Camara Bag', 'Bag', 'camera img/camara bag/bag3.webp', '4500/-'),
(11, 'Camara Bag', 'Bag', 'camera img/camara bag/bag4.jpg', '5000/-'),
(12, 'Sony FE 200-600mm', 'Lens', ' camera img/lens/lens1.jpg', '70000/-'),
(13, 'Canon EF 600mm', 'Lens', 'camera img/lens/lens2.jpg', '98000/-'),
(14, 'Cannon 600mm', 'Lens', 'camera img/lens/lens3.webp', '100000/-'),
(18, 'Cannon 85mm', 'Portrait lens', 'camera img/portrait lens/portraitlens1.webp', '27750/-'),
(19, 'Canon RF 50mm', 'P\\ortrait lens', 'camera img/portrait lens/portraitlens2.jpg', '250000/-'),
(22, 'Sony RF 18mm', 'Portrait lens', 'camera img/portrait lens/portraitlens4.webp', '143638/-'),
(23, 'Sony M2', 'Portrait lens', 'camera img/portrait lens/portraitlens3.avif', '3333/-'),
(27, 'E-image EI-7010A', 'Tripod', 'camera img/tripod/tripod1.jpg', '6152/-'),
(28, 'NEEWER 79\"/200CM TRIPOD', 'Tripod', 'camera img/tripod/tripod2.jpg', '9990/-'),
(29, 'heavy duty tripod', 'Tripod', 'camera img/tripod/tripod3.jpg', '17634/-'),
(31, 'sandisk 128gb ', 'SSD card', 'camera img/SSD card/SSD1.jpg', '1200/-'),
(33, 'sandisk 1tb', 'SSD card', '	\r\ncamera img/SSD card/SSD2.jpg', '3500/-'),
(34, 'Sandisk 16gb', 'SSD card', '	\r\ncamera img/SSD card/SSD3.png', '750/-'),
(35, 'sandisk 16gb', 'SSD card', '	\r\ncamera img/SSD card/SSD4.jpg', '500/-'),
(38, 'canon 2500mas', 'Battery', ' camera img/battery/battery1.jpg', '1500/-'),
(39, 'canon battery 3500mas', 'Battery', ' camera img/battery/battery2.jpg', '2000/-'),
(40, 'supper battery', 'Battery', ' camera img/battery/battery3.jpg', '5000/-'),
(41, 'soney 2000mas', 'Battery', ' camera img/battery/battery4.jpg', '2952/-');

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

DROP TABLE IF EXISTS `selling`;
CREATE TABLE IF NOT EXISTS `selling` (
  `date` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `subtotal` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`date`, `name`, `qty`, `price`, `subtotal`) VALUES
('2025-03-18', 'Canon EF 600mm', '1', '98000', '98000'),
('2025-03-18', 'Cannon 85mm', '2', '27750', '55500'),
('2025-03-18', 'sandisk 1tb', '2', '3500', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('ravi', 'ravi'),
('nimit', '111'),
('pradip@123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
