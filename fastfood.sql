-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 03:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type_product` int(11) NOT NULL COMMENT '1 for kwlera , 2 for pizza , 3 for liquid,4 for sandwich',
  `name` varchar(255) NOT NULL,
  `price1` varchar(255) NOT NULL,
  `price_as_text1` varchar(255) NOT NULL,
  `price2` varchar(255) NOT NULL,
  `price_as_text2` varchar(255) NOT NULL,
  `price3` varchar(255) NOT NULL,
  `price_as_text3` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type_product`, `name`, `price1`, `price_as_text1`, `price2`, `price_as_text2`, `price3`, `price_as_text3`, `img`) VALUES
(1, 1, 'ماسی', '1.500', 'بچوک', '2.500', 'دەبڵ', '', '', 'assets/img/fish.svg'),
(2, 1, 'هێلکە', '1.500', 'بچووک', '2.000', 'گەورە', '', '', 'assets/img/egg.svg'),
(3, 1, 'مریشک', '1.500', 'بچووک', '2.500', 'دەبڵ', '', '', 'assets/img/chicken.svg'),
(4, 1, 'قیمە', '1.500', 'بچووک', '2.500', 'دەبڵ', '', '', 'assets/img/meat.svg'),
(5, 2, 'ماسی', '2.500', 'بچووک', '3.500', 'وەسەت', '4.500', 'گەورە', 'assets/img/pfish.svg'),
(6, 2, 'مریشک', '2.500', 'بچووک', '3.500', 'وەسەت', '4.500', 'گەورە', 'assets/img/pchicken.svg'),
(7, 2, 'گۆشت', '2.500', 'بچووک', '3.500', 'وەسەت', '4.500', 'گەورە', 'assets/img/pmeat.svg'),
(8, 3, 'ئاو', '0.250', 'یەک دانە', '', '', '', '', 'assets/img/water.svg'),
(9, 3, 'خواردنەوە گازییەکان', '0.500', 'یەک دانە', '', '', '', '', 'assets/img/soda.svg'),
(10, 3, 'ماستاو', '0.500', 'یەک دانە', '', '', '', '', 'assets/img/yogurt.svg'),
(11, 4, 'گەصی مرشیک', '1.000', 'بچووک', '2.000', 'دەبڵ', '', '', 'assets/img/sandwich.svg'),
(12, 4, 'گەصی گۆشت', '1.500', 'بچووک', '2.500', 'دەبڵ', '', '', 'assets/img/sandwich2.svg');

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE `sell_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date_of_add` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_now` int(11) NOT NULL,
  `is_selected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sell_product`
--

INSERT INTO `sell_product` (`id`, `product_id`, `price`, `date_of_add`, `is_now`, `is_selected`) VALUES
(623, 1, '2.500', '2020-01-26 21:44:12', 0, 0),
(624, 1, '2.500', '2020-01-26 21:44:12', 0, 0),
(636, 2, '2.000', '2020-01-27 16:42:37', 0, 0),
(659, 1, '2.500', '2020-01-29 18:14:41', 0, 0),
(660, 2, '1.500', '2020-01-29 18:14:41', 0, 0),
(661, 3, '1.500', '2020-01-29 18:14:41', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_product`
--
ALTER TABLE `sell_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sell_product`
--
ALTER TABLE `sell_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=662;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
