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
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ID` int(200) NOT NULL,
  `quantity` int(30) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` int(200) NOT NULL,
  `Product_Title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Product_Description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bname` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `blogo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `scolor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sub_category` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `psub2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Stock` int(200) DEFAULT NULL,
  `Display_Price` int(100) DEFAULT NULL,
  `Product_Images` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delivery` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Tags` varchar(355) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `home` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Rating` int(10) NOT NULL,
  `Discount` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `enddate` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `quantity`, `name`, `email`, `contact`, `vendor_id`, `Product_Title`, `Product_Description`, `bname`, `blogo`, `color`, `scolor`, `size`, `Category`, `Sub_category`, `psub2`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`, `Tags`, `Status`, `label`, `home`, `Rating`, `Discount`, `startDate`, `enddate`) VALUES
(28, 0, 'sahil', 'ssss', '1234', 335, 'mnmbnmb', 'Corporate Gifts', '0', '0', 'evdfdsc', 'eww', '23', 'T-Shirts', 'm', '', 11, 1234, 'logo-wide-74759-28.png', 'nbnb', '09916416118', '1', '0', '', 0, '', '', ''),
(335, 0, '', '', '', 328, 'product neqw', 'dsfdsf', '0', '0', '', '', '', 'Corporate Giftingvcvxc', 'Pen Drive', '', 44324, 3423, 'panasonic-eluga-ray-700-eb-90s55er7n-original-imaexzz6ntvzzczy-82735-335.jpg', 'All India', 'fdsfds', '', '2', '', 3, '', '', ''),
(341, 0, '', '', '', 331, 'Leather Bag', 'Description about Bag here', '0', '0', '', '', '', 'Corporate Gifting', 'Bags', '', 100, 2999, 'bag-26697-341.jpg', '', 'All India', '', '3', '', 3, '', '', ''),
(343, 0, '', '', '', 332, 'Product', 'fdfdsf', '0', '0', '', '', '', 'Corporate Gifting', '', '', 56645, 0, 'skp-20171006-001804-422835268978-40270-343.jpg', 'fgdfg', 'gffdgdfg', '', '3', '', 4, '', '', ''),
(344, 0, '', '', '', 333, 'hanmandla', 'ajsga', '0', '0', '', '', '', 'Decoration', 'Home Decoration', '', 4, 4, '', '', 'All India', '', '3', '', 2, '', '', ''),
(350, 0, '', '', '', 328, 'dadasdrwerwer', 'rwrwe', '0', '0', '', '', '', 'Corporate Gifting', 'Bags', '', 34324, 43432, 'mintlimej-1038-350.png', 'All India', 'fdsfsdf', '', '1', '', 0, '', '', ''),
(351, 0, '', '', '', 334, 'dssd', 'dsdas', '0', '0', '', '', '', 'Corporate Gifting', 'Mugs/Cups', '', 3434, 4324, 'bag-1066-351.jpg', 'within 5 Km', 'dfds', '', '3', '', 1, '', '', ''),
(353, 0, 'edrgyhu', 'sedrtfy', '345678', 0, 'sedrgyhu', 'sethyu', 'sedtgyhu', '', '#000000', 'size', '3', 'pro-1', 'sub-A', '', 0, 234567, '', '87', '', '', '0', '', 0, '', '', ''),
(355, 0, 'qwert', 'werty', '23456', 0, 'werty', 'wert', 'wert', '', '#000000', 'size', '4', 'pro-1', 'sub-A', '', 23, 12345, '', '147', '', '', '0', '', 0, '', '', ''),
(358, 0, 'asdsa', 'asssas', '234', 0, 'cfgvbhjn', 'sdfg', 'sdfdsdf', '', '#000000', 'size', '4', 'pro-1', 'sub-A', '', 12, 12345, 'couple.jpg', '171', '', '1', '1', '1', 0, '34', '23', '12'),
(359, 0, 'srdtfyh', 'sedrftgyhu', '2345678', 0, 'sfdghgsd', 'stdtyfgvdtrfbyg\r\nhhgvjhbjnm\r\nghhkj', 'wertyu', 'couple-2.jp', '#000000', 'size', '6', 'pro-1', 'sub-B', '', 12, 2343, 'couple-4.jpg', '125', '', '1', '0', '1', 0, '', '', ''),
(360, 0, 'wertfy', 'zsxdcfgbhn', '2345687677', 0, 'cfghjg', 'rdtftgy', 'fgjh', 'location-pi', '#000000', 'size', '6', 'pro-1', 'sub-B', '', 0, 4355, 'couple-profile.jpg', '35', '', '1', 'Select', '1', 0, '', '', ''),
(361, 0, 'awedtfgyu', 'ghv', '3456', 0, 'gfcgvhgv', 'drtfygy', 'esxdrcthfvg', 'couple.jpg', '#000000', 'color', '', 'pro-1', 'sub-B', '', 3456, 34567, 'couple.jpg', '125', '', '2', '2', '1', 0, '', '', ''),
(362, 0, 'sahil', 'wertyu', '345678', 0, 'cfvghuj', 'fgbhjnmk', 'fghbjnk', 'couple-4.jp', '#000000', 'size', '4', 'pro-1', 'sub-B', '', 345678, 45678, 'couple-3.jpg', '128', '', '1', '0', '', 0, '', '', ''),
(363, 0, 'sedrfgyhuj', 'sgdsfdfdgft5rtfgfhdgddf', '23456', 0, 'wsedrgyh', 'sdxfcgvbh', 'wesdrgyh', 'couple.jpg', '#000000', 'size', '3', 'pro-1', 'sub-B', '', 23456, 23456, 'couple-2.jpg', '148', '', '', '0', '', 0, '', '', ''),
(364, 0, 'sedrtgy', 'werfgy', '4567', 0, 'awsedrgy', 'wedrtgyhu', 'qwerfg', 'couple-3.jp', '#000000', 'color', '', 'pro-1', 'sub-B', '', 678, 2344566, 'couple-4.jpg', '109', '', '', '0', '', 0, '', '', ''),
(365, 0, 'wertyu', 'asef', '34567', 0, 'wert', 'rtyu', 'werty', 'couple-3.jp', '#000000', 'color', '', 'pro-1', 'sub-A', '', 567, 34567, 'button-app-store.png', '35', '', 'Select', '0', '', 0, '', '', ''),
(366, 0, 'qwerty', 'asef', '3245', 333, 'wert', 'werty', 'wert', 'couple.jpg', '#000000', 'color', '5', 'pro-1', 'sub-A', '', 567, 234567, 'couple-2.jpg', '35', '', '1', '2', '', 0, '', '', ''),
(367, 0, 'werrt', 'sredtfy', '3456', 354, 'wesrdr', 'sxdcrf', 'sedrf', '', '#000000', 'Select Color and Siz', '', 'none', '', '', 54, 544, '', '35', '', '1', '1', '', 0, '', '', ''),
(368, 34567865, 'vgbhn', 'derftgyh', '3456', 355, 'cfvgbhnj', 'cfvgbh', 'uygtfr', 'app-screen.', '#000000', 'color', '', 'fcvgbhnj', 'sdcds', 'dsx', 6789, 678, 'alpha.png', '35', '', '1', '2', '1', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID_2` (`ID`), ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=369;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
