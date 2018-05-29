-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 06:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codev4jm_1assam`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorymap`
--

CREATE TABLE IF NOT EXISTS `categorymap` (
`s.no` int(11) NOT NULL,
  `category` varchar(40) NOT NULL,
  `subcategory` varchar(30) NOT NULL,
  `childcategory` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorymap`
--

INSERT INTO `categorymap` (`s.no`, `category`, `subcategory`, `childcategory`) VALUES
(2, 'sahilrara', '', '0'),
(3, 'sahilrara', 'fredwa', ''),
(5, 'sahilrara', 'dsa', 'dsx'),
(6, 'sahilrara', 'dcsc', ''),
(7, 'sahilrara', 'sdcds', ''),
(8, 'fcvgbhnj', 'fvdcsx', ''),
(10, 'fcvgbhnj', '', ''),
(11, '', '', ''),
(13, 'edws', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorymap`
--
ALTER TABLE `categorymap`
 ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorymap`
--
ALTER TABLE `categorymap`
MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
