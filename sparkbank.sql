-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2021 at 12:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--
CREATE DATABASE IF NOT EXISTS `sparkbank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sparkbank`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Name`, `E-mail`, `Balance`) VALUES
(1, 'Karan Umredkar', 'karanum@gmail.com', 9930),
(2, 'Balaji Yadav', 'bala28@gmail.com', 9299),
(3, 'Murli Singh', 'muralisi@gmail.com', 10005),
(4, 'Savita Rajput', 'savira@gmail.com', 10084),
(5, 'Rohit Sharma', 'Rohitshar@gmail.com', 8500),
(6, 'Ritik Thakur', 'ritikkur@gmai.com', 10646),
(7, 'Virat Sharma', 'viru@gmail.com', 9601),
(8, 'Ishwar Vodnala', 'ishuvod@gmail.com', 8000),
(9, 'Rohan Pandey', 'rohanpan@gmail.com', 10073),
(10, 'Rishikesh Dubey', 'rishi@gmail.com', 8562);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `Sr.no` int(10) NOT NULL AUTO_INCREMENT,
  `Sender` varchar(30) NOT NULL,
  `Receiver` varchar(30) NOT NULL,
  `Balance` int(30) NOT NULL,
  PRIMARY KEY (`Sr.no`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Sr.no`, `Sender`, `Receiver`, `Balance`) VALUES
(1, 'Karan Umredkar', 'Murli Singh', 102),
(2, 'Balaji Yadav', 'Karan Umredkar', 102),
(3, 'Murli Singh', 'Balaji Yadav', 1),
(4, 'Balaji Yadav', 'Karan Umredkar', 50),
(5, 'Balaji Yadav', 'Ritik Thakur', 1551),
(6, 'Rishikesh Dubey', 'Rohan Pandey', 23),
(7, 'Karan Umredkar', 'Virat Sharma', 51),
(8, 'Rishikesh Dubey', 'Karan Umredkar', 15),
(9, 'Murli Singh', 'Balaji Yadav', 1),
(10, 'Murli Singh', 'Ritik Thakur', 95),
(11, 'Karan Umredkar', 'Savita Rajput', 84);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
