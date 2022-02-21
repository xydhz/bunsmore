-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 08:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinapay`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mnum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fname`, `lname`, `mail`, `pass`, `mnum`) VALUES
(4, 'g', 'eu', 'wa@mmm.wa', 'c4ca4238a0b923820dcc509a6f75849b', '09478272727'),
(5, 'test', 'man', 'test@man.test', 'c4ca4238a0b923820dcc509a6f75849b', '98328382381'),
(6, 'Jeffrey', 'Aceron', 'jeffrey@a.shit', 'c4ca4238a0b923820dcc509a6f75849b', '09837373663'),
(7, 'asd', 'asad', 'asd@mmsa.com', 'c4ca4238a0b923820dcc509a6f75849b', '34242434343'),
(8, 'dfdf', 'dfdf', 'ffd@dfdd.com', 'c4ca4238a0b923820dcc509a6f75849b', '11131323424'),
(9, 'fdfdfd', 'fdfdf', 'fdfdfdfd@gfgnjfg.com', 'c4ca4238a0b923820dcc509a6f75849b', '11131323424'),
(10, 'fdfdfd', 'fdfdf', 'turhjrui@ji.vcom', 'c4ca4238a0b923820dcc509a6f75849b', '24324332435'),
(11, 'fgfgfg', 'fgfgfg', 'fdhf@a.com', 'c4ca4238a0b923820dcc509a6f75849b', '48348347834'),
(12, '343434', '434232', 'weww@gamma.icom', 'c4ca4238a0b923820dcc509a6f75849b', '34343434324'),
(13, '343434', '434232', 'weww@gamma.com', 'c4ca4238a0b923820dcc509a6f75849b', '34343434324'),
(14, '34343', '43434', 'smdsn@gmaic.cl', 'c4ca4238a0b923820dcc509a6f75849b', '45545452223'),
(15, '454545454', '4545454', 'jfnd@mgh.com', 'c4ca4238a0b923820dcc509a6f75849b', '34343434343');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `dir`) VALUES
(1, 'Choco-Mocha Cake\r\n', 'A luscious blend of chocolate and mocha frosting smeared onto a soft, spongy chocolate cake. Decorated with cherry and cream on top.', 350, '../assets/img/products/item 4.jpg'),
(2, 'Bunsmore Pastry Parcel', 'Pastry parcel made of roasted chicken, mozzarella cheese and vegetables - all prepared and cooked using a secret Bunsmore family recipe.', 240, '../assets/img/products/item 3.jpg'),
(3, 'Blueberry Pie', 'Made with freshly imported blueberries, this treat is sure to provide satisfaction either for yourself or with a group of people.', 500, '../assets/img/products/item 8.jpg'),
(4, 'Pan de Frita', 'A mix of layered bread toasted in butter, cheese and chopped bits of meat. Perfect for a morning breakfast or a quick snack.', 150, '../assets/img/products/item 1.jpg'),
(5, 'Bunsmore Pastry Wreath', 'Bread made of choux pastry filled with orange-and-rum pastry cream arranged in a circle for your viewing pleasure.', 180, '../assets/img/products/item 5.jpg'),
(6, 'Chocolate Bread', 'Loaf of bread made up of wheat, flour and pounds of chocolate. Also includes pieces of chocolate chips inside the loaf.', 140, '../assets/img/products/item 2.jpg'),
(7, 'Pumpkin Streusel Muffins', 'Muffins made from freshly prepared pumpkins that is sure to give someone a healthy eyesight. Also topped in streusels.', 175, '../assets/img/products/item 9.jpg'),
(8, 'Apple Pie', 'A classic amongst pastry lovers, the apple pie\'s strongest asset is its sweet and irresistible flavor and aroma.', 480, '../assets/img/products/item 7.jpg'),
(9, 'Bunsmore Choux Pastry', 'An odd combination of cabbage and sweets, this crispy yet sugary delight is popular for both kids and adults alike.', 200, '../assets/img/products/item 6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `itemid` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `itemid`, `price`, `count`) VALUES
(5, '4', '2', '240', '2'),
(6, '4', '4', '150', '3');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `msg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `fname`, `lname`, `mail`, `msg`) VALUES
(7, 'hays', 'mode', 'haysmode@hays.mode', 'HAYSSSSS'),
(8, 'Jeffrey', 'My Beloved', 'jeffersonaceron@putangina.mo.shit', 'good morning sirs may class activity po tayo 1 minute(s) deadline god bless'),
(9, 'yes', 'no', 'maybe@may.be', 'hmmmm'),
(10, 'nhggfh', 'fghfghf', 'fgq@c.aom', 'fdfdf'),
(11, 'fggfg', 'fgfgfg', 'dfdf@fggfg.fgf', 'gdggdgdg'),
(12, 'fgfgfgf', 'gf', 'fgfg@fdf.dfd', 'dfff'),
(13, 'test', 'man', 'testman@test.man', 'dfffshdbhsbd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
