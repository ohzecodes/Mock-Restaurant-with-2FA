-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erkenci`
--
CREATE DATABASE IF NOT EXISTS `erkenci` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `erkenci`;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--
-- Creation: Feb 20, 2020 at 03:33 AM
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Itemid` int(11) NOT NULL AUTO_INCREMENT,
  `Foodname` varchar(40) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `menu`:
--

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Itemid`, `Foodname`, `Price`, `Category`) VALUES
(1, 'Norwegian salmon', 4000, 'Grilled on a volcano rock'),
(2, 'Bluefin', 10000, 'Grilled on a volcano rock'),
(3, 'Pacific Halibut', 3000, 'Grilled on a volcano rock'),
(4, 'Gold arowana', 8000, 'Grilled on a volcano rock'),
(5, 'Bluefin', 9000, 'sushi'),
(6, 'Lion roll', 3000, 'sushi'),
(7, 'Tuna Queen', 10000, 'sushi'),
(8, 'Norwegian salmon sushi', 4000, 'sushi'),
(9, 'Beluga Sturgeon', 10000, 'Caviars'),
(10, 'Kaluga Caviar', 10000, 'Caviars'),
(11, 'Sevruga Caviar', 9000, 'Caviars'),
(12, 'Imperial Wild Caviar', 8000, 'Caviars'),
(13, 'King Oyster', 5000, 'Oysters'),
(14, 'Mediterrian Osyter', 5000, 'Oysters'),
(15, 'Pacific reef Oysters', 5000, 'Oysters'),
(16, 'Handpicked Atlantic oyster', 5000, 'Oysters'),
(17, 'Seis Skat', 10000, 'Platers/Towers'),
(18, 'Awesome Tower', 8000, 'Platers/Towers'),
(19, 'Ultimate Lobster Plater', 6000, 'Platers/Towers'),
(20, 'Ercenci Special', 8000, 'Platers/Towers'),
(21, 'Shark Fin Soup', 10000, 'Chefs choice'),
(22, 'Bluefin Sushi', 10000, 'Chefs choice'),
(23, 'Handpicked Atlantic Oyster', 10000, 'Chefs choice'),
(24, 'Beluga Sturgeon Caviar', 10000, 'Chefs choice');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--
-- Creation: Feb 20, 2020 at 04:23 AM
--

CREATE TABLE IF NOT EXISTS `msg` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  `recievedat` date DEFAULT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `msg`:
--

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msgid`, `name`, `email`, `msg`, `recievedat`) VALUES
(1, 'aefwgrehtmjy,ku', 'QEWRTEYRUK@grr.la', 'vabdfgverfvbwqfguebwv', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--
-- Creation: Feb 20, 2020 at 03:33 AM
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `reservationid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `attendees` varchar(3) DEFAULT NULL,
  `preference` varchar(7) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`reservationid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `reserve`:
--

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reservationid`, `name`, `phone`, `email`, `date`, `attendees`, `preference`, `comments`) VALUES
(4, 'evrgbthnjm', 124567890, 'f@aa.com', '2020-02-02', '2', 'Email', 'edfgb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
