-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 02:00 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riktam`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdet`
--

DROP TABLE IF EXISTS `regdet`;
CREATE TABLE IF NOT EXISTS `regdet` (
  `name` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `clg` varchar(300) NOT NULL,
  `regdno` bigint(20) NOT NULL,
  `mail` varchar(200) NOT NULL,
  PRIMARY KEY (`regdno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdet`
--

INSERT INTO `regdet` (`name`, `age`, `clg`, `regdno`, `mail`) VALUES
('dfaaaaa', 23, 'sadsvf', 54541, 'k@y.c'),
('sdffgh', 12, 'sdfg', 243, 'asasas@dsf.com'),
('sdffgh', 12, 'sdfg', 21223, 'asasas@dsf.com'),
('sadf', 22, 'dwf', 42, 'az@g.c'),
('adsfs', 50, 'fsgb', 123, 'a@kmm.c'),
('dasfd', 12, 'asadfg', 314546, 'fdfghj@v.c'),
('dsfzddgf', 15, 'xsc v', 31244, 'zx@m.c'),
('dfd', 12, 'dfxgcn', 3546, 'aa@c.g'),
('aaaaaaa', 21, 'aaaaa', 12345, 'ab@g.c'),
('adsfgxh', 21, 'xcdfg', 54564654, 'aaaa@a.c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
