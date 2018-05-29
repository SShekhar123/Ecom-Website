-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 06:47 PM
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
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
`ID` int(200) NOT NULL,
  `Business_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Business_Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mail_ID` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile_No` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PIN` int(10) NOT NULL,
  `Status` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `No_of_listings` int(200) DEFAULT NULL,
  `IP` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HomePage` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=356 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`ID`, `Business_Name`, `Type`, `Business_Type`, `URL`, `Logo`, `Name`, `Mail_ID`, `Address`, `Mobile_No`, `Image`, `Location`, `PIN`, `Status`, `No_of_listings`, `IP`, `HomePage`) VALUES
(329, 'Nameq', '1', 'recggruiter2212@gmail.com', '65465645', 'panasonic-eluga-ray-700-eb-90s55er7n-original-imaexzz6ntvzzczy-79687-338.jpg', 'gfdgfd', 'recggruiter2212@gmail.com', '', '09916416118', '', 'Bengaluru', 0, '2', NULL, '125.99.230.186', ''),
(330, 'Nameq', '3', 'rfed', '0955516118', 'conduent-120x45-56524-340.gif', 'gfdgfd', 'ksha330@gmail.com', '', '123', '', 'Bengaluru', 0, '0', NULL, '125.99.230.186', '1'),
(331, 'Bags Bags Bags', '1', 'Business Name', 'Business TYpe', 'conduent-120x45-69869-341.gif', 'www.businessname.com', 'Leather Bags', '', 'vendor@gmail.com', '', 'Delhi', 0, '3', NULL, '125.99.244.123', ''),
(332, 'Shop', '1', 'www.abdddc.com', 'My Vendor', 'conduent-120x45-30977-343.gif', 'myvendor@gmail.com', '9090909090', '', 'Kolkata', '', 'Kolkata', 0, '1', NULL, '125.99.244.43', ''),
(333, 'erasw', '1', 'dasf', 'aSF', '', 'afs', 'asef', '', 'adf@gdsf.com', '', 'Thane', 0, '0', NULL, '111.91.110.115', ''),
(334, 'fdsfdsfsd', '1', 'fsdfsdf', 'www.anc.com', 'mintlimej-90847-351.png', 'fdsf', 'vendormail@gmail.com', '', '989898989', '', 'Mumbai', 0, '0', NULL, '27.7.99.145', ''),
(336, 'sxdcfvgb', '', 'dcfvgbh', 'sxdcfvgb', 'a1.png', 'xdcfvgbh', 'sxdcfvgb', 'dcfgh\r\n', '23456', '', NULL, 0, NULL, NULL, NULL, ''),
(337, 'xsdcfvgb', '', 'xdcfgbhn', 'fvgbhjn', 'h4.jpg', 'cfvgbhnj', 'sahu', 'cfvgbhnjmk', '34567', '', NULL, 0, NULL, NULL, NULL, ''),
(338, 'rfgyh', '', 'fvgbhn', 'cfvgbh', 'images3.jpg', 'dcfgbhn', '', 'fvgbhn', '', '', NULL, 0, '1', NULL, NULL, ''),
(339, 'dcfvgb', '', 'bhnj', 'dcfvg', 'images3.jpg', 'fvgbhnj', 'sahu', 'fvgb', 'e4567', '', NULL, 0, NULL, NULL, NULL, ''),
(340, 'edrftg', '', 'edrfgty', 'wedrftg', 'images3.jpg', 'dcfvgbh', 'sahu', 'werftgy\r\n', '23456', '', NULL, 0, NULL, NULL, NULL, ''),
(341, 'edrfgty', '', 'wsedrftgyhu', 'qwsedrfgty', 'images3.jpg', 'dcfvgbh', 'sahu', 'awsedrfgtyh', '1235', '', NULL, 0, NULL, NULL, NULL, ''),
(342, 'edrftg', '', 'cfvgbh', 'swderf', 'images1.jpg', 'sxdcfvg', 'sahu', 'xdcfvgb\r\n', '234', '', NULL, 0, NULL, NULL, NULL, ''),
(343, 'dcfrvgb', '', 'gbhynjm', 'cfvgbh', 'images1.jpg', 'decrfvgb', 'sahu', 'cfvgbh', '345678', '', NULL, 0, NULL, NULL, NULL, ''),
(344, 'dcfvgbh', '', 'cfvgbh', 'fcvgbhn', 'images3.jpg', 'dcfvgbh', 'sahu', 'vgbhnj', '34567', '', NULL, 0, NULL, NULL, NULL, ''),
(348, 'dfvgbh', '', '', 'xdcfvgb', 'h4.jpg', 'rfgtbh', 'sahu', 'fvgbhn', '34567', '', NULL, 0, '1', NULL, NULL, ''),
(349, 'dcfvgbh', '', 'dcfvgb', 'sxdcfv', 'images1.jpg', 'dcfv gbhn', 'sag', 'dcfgvb', '34567', '', NULL, 0, '1', NULL, NULL, '1'),
(352, 'rfgyh', '', 'edrfgtyh', 'dfgh', 'couple-3.jpg', 'werty', 'wertywqd', 'dcfvgbh', '2345678', 'couple.jpg', NULL, 0, '1', NULL, NULL, '1'),
(353, '', '', '', '', '', NULL, 'sredtfgy', '', '3456', '', NULL, 0, NULL, NULL, NULL, ''),
(354, '', '', '', '', '', NULL, 'sredtfy', '', '3456', '', NULL, 0, NULL, NULL, NULL, ''),
(355, '', '', '', '', '', NULL, 'derftgyh', '', '3456', '', NULL, 0, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=356;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
