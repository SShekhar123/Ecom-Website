-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 04:28 PM
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
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
`Img_Id` int(20) NOT NULL,
  `ADimage` varchar(3000) NOT NULL,
  `startDate` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`Img_Id`, `ADimage`, `startDate`) VALUES
(8, 'https://res.cloudinary.com/sc1997/image/upload/v1517591496/gvotzguskt502rx4cbiw.jpg', ''),
(9, 'https://res.cloudinary.com/sc1997/image/upload/v1521283466/p3khlvivs1srbty8ohns.jpg', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `cartid` varchar(255) NOT NULL,
  `productid` int(100) NOT NULL,
  `productinfo` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cartid`, `productid`, `productinfo`, `quantity`, `price`) VALUES
(26, 'wzqrih6at', 344, ' ajsga', 4, 16),
(27, '2ared4j36', 335, ' dsfdsf', 1, 3423),
(28, 'dc6ik9qtj', 28, ' Corporate Gifts', 1, 1234),
(29, '4qrgzwl6s', 28, ' Corporate Gifts', 0, 0),
(30, 'kfr9j0scq', 7, ' cfvgb', 0, 0);

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
  `enddate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `product_spec` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `share` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=383 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `quantity`, `name`, `email`, `contact`, `vendor_id`, `Product_Title`, `Product_Description`, `bname`, `blogo`, `color`, `scolor`, `size`, `Category`, `Sub_category`, `psub2`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`, `Tags`, `Status`, `label`, `home`, `Rating`, `Discount`, `startDate`, `enddate`, `product_spec`, `share`) VALUES
(28, 0, 'sahil', 'ssss', '1234', 335, 'mnmbnmb', 'Corporate Gifts', '0', '0', 'evdfdsc', 'eww', '23', 'T-Shirts', 'm', '', 11, 1234, 'logo-wide-74759-28.png', 'nbnb', '09916416118', '1', '0', '', 0, '', '', '', '', '0'),
(335, 0, '', '', '', 328, 'product neqw', 'dsfdsf', '0', '0', '', '', '', 'Corporate Giftingvcvxc', 'Pen Drive', '', 44324, 3423, 'panasonic-eluga-ray-700-eb-90s55er7n-original-imaexzz6ntvzzczy-82735-335.jpg', 'All India', 'fdsfds', '', '2', '', 3, '', '', '', '', '0'),
(341, 0, '', '', '', 331, 'Leather Bag', 'Description about Bag here', '0', '0', '', '', '', 'Corporate Gifting', 'Bags', '', 100, 2999, 'bag-26697-341.jpg', '', 'All India', '', '3', '', 3, '', '', '', '', '0'),
(343, 0, '', '', '', 332, 'Product', 'fdfdsf', '0', '0', '', '', '', 'Corporate Gifting', '', '', 56645, 0, 'skp-20171006-001804-422835268978-40270-343.jpg', 'fgdfg', 'gffdgdfg', '', '3', '', 4, '', '', '', '', '0'),
(344, 0, '', '', '', 333, 'hanmandla', 'ajsga', '0', '0', '', '', '', 'Decoration', 'Home Decoration', '', 4, 4, '', '', 'All India', '', '3', '', 2, '', '', '', '', '0'),
(350, 0, '', '', '', 328, 'dadasdrwerwer', 'rwrwe', '0', '0', '', '', '', 'Corporate Gifting', 'Bags', '', 34324, 43432, 'mintlimej-1038-350.png', 'All India', 'fdsfsdf', '', '1', '', 0, '', '', '', '', '0'),
(351, 0, '', '', '', 334, 'dssd', 'dsdas', '0', '0', '', '', '', 'Corporate Gifting', 'Mugs/Cups', '', 3434, 4324, 'bag-1066-351.jpg', 'within 5 Km', 'dfds', '', '3', '', 1, '', '', '', '', '0'),
(353, 0, 'edrgyhu', 'sedrtfy', '345678', 0, 'sedrgyhu', 'sethyu', 'sedtgyhu', '', '#000000', 'size', '3', 'pro-1', 'sub-A', '', 0, 234567, '', '87', '', '', '0', '', 0, '', '', '', '', '0'),
(355, 0, 'qwert', 'werty', '23456', 0, 'werty', 'wert', 'wert', '', '#000000', 'size', '4', 'pro-1', 'sub-A', '', 23, 12345, '', '147', '', '', '0', '', 0, '', '', '', '', '0'),
(358, 0, 'asdsa', 'asssas', '234', 0, 'cfgvbhjn', 'sdfg', 'sdfdsdf', '', '#000000', 'size', '4', 'pro-1', 'sub-A', '', 12, 12345, 'couple.jpg', '171', '', '1', '1', '1', 0, '34', '23', '12', '', '0'),
(359, 0, 'srdtfyh', 'sedrftgyhu', '2345678', 0, 'sfdghgsd', 'stdtyfgvdtrfbyg\r\nhhgvjhbjnm\r\nghhkj', 'wertyu', 'couple-2.jp', '#000000', 'size', '6', 'pro-1', 'sub-B', '', 12, 2343, 'couple-4.jpg', '125', '', '1', '0', '1', 0, '', '', '', '', '0'),
(360, 0, 'wertfy', 'zsxdcfgbhn', '2345687677', 0, 'cfghjg', 'rdtftgy', 'fgjh', 'location-pi', '#000000', 'size', '6', 'pro-1', 'sub-B', '', 0, 4355, 'couple-profile.jpg', '35', '', 'Select', 'Select', 'Select', 0, '', '', '', '', '0'),
(361, 0, 'awedtfgyu', 'ghv', '3456', 0, 'gfcgvhgv', 'drtfygy', 'esxdrcthfvg', 'couple.jpg', '#000000', 'color', '', 'pro-1', 'sub-B', '', 3456, 34567, 'couple.jpg', '125', '', '2', '2', '1', 0, '', '', '', '', '0'),
(362, 0, 'sahil', 'wertyu', '345678', 0, 'cfvghuj', 'fgbhjnmk', 'fghbjnk', 'couple-4.jp', '#000000', 'size', '4', 'pro-1', 'sub-B', '', 345678, 45678, 'couple-3.jpg', '128', '', '1', '0', '', 0, '', '', '', '', '0'),
(363, 0, 'sedrfgyhuj', 'sgdsfdfdgft5rtfgfhdgddf', '23456', 0, 'wsedrgyh', 'sdxfcgvbh', 'wesdrgyh', 'couple.jpg', '#000000', 'size', '3', 'pro-1', 'sub-B', '', 23456, 23456, 'couple-2.jpg', '148', '', '', '0', '', 0, '', '', '', '', '0'),
(364, 0, 'sedrtgy', 'werfgy', '4567', 0, 'awsedrgy', 'wedrtgyhu', 'qwerfg', 'couple-3.jp', '#000000', 'color', '', 'pro-1', 'sub-B', '', 678, 2344566, 'couple-4.jpg', '109', '', '', '0', '', 0, '', '', '', '', '0'),
(365, 0, 'wertyu', 'asef', '34567', 0, 'wert', 'rtyu', 'werty', 'couple-3.jp', '#000000', 'color', '', 'pro-1', 'sub-A', '', 567, 34567, 'button-app-store.png', '35', '', 'Select', '0', '', 0, '', '', '', '', '0'),
(366, 0, 'qwerty', 'asef', '3245', 333, 'wert', 'werty', 'wert', 'couple.jpg', '#000000', 'color', '5', 'pro-1', 'sub-A', '', 567, 234567, 'couple-2.jpg', '35', '', '1', '2', '', 0, '', '', '', '', '0'),
(367, 0, 'werrt', 'sredtfy', '3456', 354, 'wesrdr', 'sxdcrf', 'sedrf', '', '#000000', 'Select Color and Siz', '', 'none', '', '', 54, 544, '', '35', '', '1', '1', '', 0, '', '', '', '', '0'),
(368, 876, 'rtfy', 'ftgy', '567', 356, 'rftg', 'frtgy', 'gtf', 'surf.jpg', '#000000', 'color', '', 'fcvgbhnj', 'fredwa', 'dsx', 98, 786, '1', '35', '', '1', '0', '', 0, '', '', '', '', '0'),
(369, 12, 'rty', 'tyu', '67', 357, 'ty', 'ytu', 'sd', 'tiger.jpg', '#000000', 'color', '', 'fcvgbhnj', 'dsa', 'dsx', 12, 211, '1', '35', 'ds', '1', '0', '', 0, '', '', '', '', '0'),
(370, 223, 'rtyu', 'erty', '456', 358, 'edrft', 'drft', 'bhgvf', 'sunset.jpg', '#000000', 'color', '', 'sahilrara', 'dsa', 'dsx', 675, 5643, '1', '35', 'fre', '1', '0', '', 0, '', '', '', 'rftg', '3'),
(371, 876, 'dcfvg', 'frtyguh', '567', 359, 'rftgyh', 'frtgyh', 'gvgbhjn', 'surf.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 8765, 876, '1', '35', 'hnjmk', '1', '0', '', 0, '', '', '', 'rftgyh', '0'),
(372, 786, 'fvgbh', 'frgtyh', '456', 360, 'rftg', 'frvgt', 'vgbhn', 'flower.jpg', '#000000', 'color', '', 'fcvgbhnj', 'fredwa', 'dsx', 7, 56, '1', '35', 'frvgtb', '1', '0', '', 0, '', '', '', 'frvgtb', '1'),
(373, 78, 'rftygh', 'rtfgyh', '567', 361, 'tgyhu', 'tgyhu', 'tfgyhu', 'flower.jpg', '#000000', 'size', '5', 'sahilrara', 'fredwa', 'dsx', 4, 65, '1', '35', 'tgyhu', '1', '0', '', 0, '', '', '', 'tgyhu', '1'),
(374, 786, 'rty', 'erty', '567', 358, 'rty', 'frg', 'ghj', 'surf.jpg', '#000000', 'color', '', 'fcvgbhnj', 'dcsc', 'dsx', 65, 76, '1', '35', 'jhg', '1', '0', '', 0, '', '', '', 'rtfg', '2'),
(375, 6567, 'serdtf', 'rftgy', '456', 362, 'rftgy', 'drftg', 'fvgbh', 'flower.jpg', '#000000', 'color', '', 'fcvgbhnj', 'fredwa', 'dsx', 78, 677, '1', '35', 'hbgv', '1', '0', '', 0, '', '', '', 'rftgy', '1,2,3'),
(376, 853, 'edrtfsda', 'drft', '546', 363, 'erftdasasaa', 'rft', 'gbh', 'sunset.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 89, 765, 'surf.jpg', '35', 'dsac,sda', '1', '0', '', 0, '', '', '', 'ftvtg', '1,2,3'),
(377, 853, 'edrtfsda', 'drft', '546', 363, 'erftdasasaaaasasa', 'rft', 'gbh', 'sunset.jpg', '#000000', 'size', '6', 'sahilrara', 'fredwa', 'dsx', 89, 765, '', '35', 'dsac,sda,as', '1', '0', '', 0, '', '', '', 'ftvtg', '1,2,3'),
(378, 853, 'edrtfsda', 'drft', '546', 363, 'erftdasasaaaasasa', 'rft', 'gbh', 'sunset.jpg', '#000000', 'size', '6', 'sahilrara', 'fredwa', 'dsx', 89, 765, '', '35', 'dsac,sda,as', '1', '0', '', 0, '', '', '', 'ftvtg', '1,2,3'),
(379, 32, 'edrtfy', 'rftgyh', '567', 364, 'rftgy', 'frtgyh', 'njhb', 'tiger.jpg', '#000000', 'size', '5', 'sahilrara', 'fredwa', 'dsx', 8, 876, 'flower.jpg,surf.jpg,tiger.jpg', '35', 'desa,dsa,sdcx', 'Select', '0', 'Select', 0, '', '', '', 'rfgt', '1,2'),
(380, 788, 'qwer', 'wer', '456', 365, 'ert', 'erft', 'frtg', 'flowers.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 78, 765, 'tiger.jpg', '35', 'hyjk', '1', '0', '', 0, '', '', '', 'edrft', '1'),
(381, 45, 'rftgbyh', 'ftrhy', '456', 366, 'derftg', 'drftg', 'fvgtbhyn', 'flower.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 768, 67890, '1', '35', 'frtgyh', '1', '0', '', 0, '', '', '', 'rfgtyh', '1'),
(382, 23, 'edrftgy', 'rftgyh', '4567', 364, 'rftgyh', 'frgthy', 'cfvgbhn', 'tiger.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 5, 567, '1', '35', 'derft', '1', '0', '', 0, '', '', '', 'frgtyh', '2');

-- --------------------------------------------------------

--
-- Table structure for table `product_xml`
--

CREATE TABLE IF NOT EXISTS `product_xml` (
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
  `enddate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `product_spec` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `share` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_xml`
--

INSERT INTO `product_xml` (`ID`, `quantity`, `name`, `email`, `contact`, `vendor_id`, `Product_Title`, `Product_Description`, `bname`, `blogo`, `color`, `scolor`, `size`, `Category`, `Sub_category`, `psub2`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`, `Tags`, `Status`, `label`, `home`, `Rating`, `Discount`, `startDate`, `enddate`, `product_spec`, `share`) VALUES
(1, 23, 'edrftgyh', 'rftgyhgh', '4567788', 367, 'rftgyhnbv cbhnjmkmnbgvc', 'frgthytgbhjn', 'cfvgbhn', 'tiger.jpg', '#000000', 'size', '6', 'sahilrara', 'fredwa', 'dsx', 589, 0, '1', '35', 'derft,uhygtfr', '0', '0', '', 0, '', '', '', 'frgtyhiuyt', '2,3'),
(2, 5662, 'dfgh', 'rfvtgbyh', '5467', 368, 'edrftg', 'rftgy', 'cfvgbhn', 'surf.jpg', '#000000', 'color', '', 'sahilrara', 'fredwa', 'dsx', 898, 0, '1', '35', 'fvgbhyn,fvgtyhu', '0', '0', '', 0, '', '', '', 'drftg', '1,2');

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
) ENGINE=InnoDB AUTO_INCREMENT=370 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(355, '', '', '', '', '', NULL, 'derftgyh', '', '3456', '', NULL, 0, NULL, NULL, NULL, ''),
(356, '', '', '', '', '', NULL, 'ftgy', '', '567', '', NULL, 0, NULL, NULL, NULL, ''),
(357, '', '', '', '', '', NULL, 'tyu', '', '67', '', NULL, 0, NULL, NULL, NULL, ''),
(358, '', '', '', '', '', NULL, 'erty', '', '456', '', NULL, 0, NULL, NULL, NULL, ''),
(359, '', '', '', '', '', NULL, 'frtyguh', '', '567', '', NULL, 0, NULL, NULL, NULL, ''),
(360, '', '', '', '', '', NULL, 'frgtyh', '', '456', '', NULL, 0, NULL, NULL, NULL, ''),
(361, '', '', '', '', '', NULL, 'rtfgyh', '', '567', '', NULL, 0, NULL, NULL, NULL, ''),
(362, '', '', '', '', '', NULL, 'rftgy', '', '456', '', NULL, 0, NULL, NULL, NULL, ''),
(363, '', '', '', '', '', NULL, 'drft', '', '546', '', NULL, 0, NULL, NULL, NULL, ''),
(364, '', '', '', '', '', NULL, 'rftgyh', '', '567', '', NULL, 0, NULL, NULL, NULL, ''),
(365, '', '', '', '', '', NULL, 'wer', '', '456', '', NULL, 0, NULL, NULL, NULL, ''),
(367, '', '', '', '', '', NULL, 'rftgyhgh', '', '4567788', '', NULL, 0, NULL, NULL, NULL, ''),
(368, '', '', '', '', '', NULL, 'rfvtgbyh', '', '5467', '', NULL, 0, '1', NULL, NULL, ''),
(369, 'fdc', '', 'gfvds', 'asa', 'sunset.jpg', 'hgbfv', 'sadf', 'fergtr', '322', 'tiger.jpg', NULL, 0, NULL, NULL, NULL, '');

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
-- Indexes for table `ads`
--
ALTER TABLE `ads`
 ADD PRIMARY KEY (`Img_Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorymap`
--
ALTER TABLE `categorymap`
 ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID_2` (`ID`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `product_xml`
--
ALTER TABLE `product_xml`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID_2` (`ID`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
MODIFY `Img_Id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `categorymap`
--
ALTER TABLE `categorymap`
MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=383;
--
-- AUTO_INCREMENT for table `product_xml`
--
ALTER TABLE `product_xml`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=370;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
