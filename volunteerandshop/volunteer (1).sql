-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 06:46 PM
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
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` int(50) NOT NULL,
  `tellabout` varchar(500) NOT NULL,
  `occup` varchar(50) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
`ID` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `email`, `mob`, `tellabout`, `occup`, `interest`, `profile`, `ID`) VALUES
('asdcf', 'sahil9518038314@gmail.com', 987654, '', 'Professional', 'Community Services', 'couple.jpg', 1),
('tgrfedw', 'sahil9518038314@gmail.com', 98765, '', 'Professional', 'Events', 'couple-4.jpg', 2),
('asdfg', 'sahilcorpofficial@gmail.com', 123456, '', 'Professional', 'Events', 'couple.jpg', 3),
('sxdcfvg', 'sahil9518038314@gmail.com', 2147483647, '', 'Student', 'Education', 'couple.jpg', 4),
('sedrtfy', 'sahil9518038314@gmail.com', 2147483647, '', 'Student', 'Education', 'couple.jpg', 5),
('dxcfgv', 'sahil9518038314@gmail.com', 2147483647, '', 'Student', 'Education', 'couple-4.jpg', 6),
('sxdcfvg', 'sahilcorpofficial@gmail.com', 2147483647, '', 'Student', 'Education', 'couple-4.jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
