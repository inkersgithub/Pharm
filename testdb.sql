-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2017 at 08:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(12) NOT NULL,
  `userid` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address1` varchar(40) NOT NULL,
  `address2` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `userid`, `name`, `address1`, `address2`, `city`, `state`, `pincode`, `mobile`) VALUES
(8, 30, 'Anoop P', 'Mubarak House', 'Adakaputhur', 'Palakkad', 'kerala', '679521', '9746364612'),
(9, 31, 'Aiswarya', 'Panthalil House', 'Manisseri Post', 'Palakkad', 'kerala', '679521', '9746364612'),
(10, 31, 'Aiswarya Anoop', 'Panthalil House', 'Manisseri Post', 'Palakkad', 'kerala', '679521', '9746364612');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(8) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(2) NOT NULL DEFAULT '1',
  `mtotal` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`, `quantity`, `mtotal`) VALUES
(8, 31, 1, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(1, 'Category1'),
(13, 'Category2');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(12) NOT NULL,
  `userid` int(8) NOT NULL,
  `items` text NOT NULL,
  `adressid` int(12) NOT NULL,
  `total` int(6) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `scount` int(11) NOT NULL DEFAULT '0',
  `ocount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cname`, `description`, `price`, `image`, `scount`, `ocount`) VALUES
(1, 'Med 1', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 100, 'uploads/Category1/59628a8cc04a37.23226975.jpg', 0, 0),
(2, 'Med 2', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category1/59628aa05c8614.65609891.jp', 0, 0),
(3, 'Med 3', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category1/59628aba081943.66317496.jpg', 0, 0),
(4, 'Med 4', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 400, 'uploads/Category1/59628ad076b467.23989870.jpg', 0, 0),
(5, 'Med 5', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 500, 'uploads/Category1/59628aee114f62.74718230.jpg', 0, 0),
(6, 'Med 6', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 100, 'uploads/Category1/59628afc7caab2.02893779.jpg', 0, 0),
(7, 'Med 7', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category1/59628b17ad5b09.54611184.jpg', 0, 0),
(8, 'Med 8', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category1/59628b36e1c095.75840941.jpg', 0, 0),
(9, 'Med 9', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category1/59628b48a0dfe5.97079706.jpg', 0, 0),
(10, 'Med 10', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category1/59628b6ae54f83.80321098.jpg', 0, 0),
(11, 'Med 11', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category1/59628b831a2b67.05737334.jpg', 0, 0),
(12, 'Med 12', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 800, 'uploads/Category1/59628b9fdb5ab3.70192761.jpg', 0, 0),
(13, 'Med 13', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 600, 'uploads/Category1/59628bb1bda595.33546451.jpg', 0, 0),
(14, 'Med 14', 'Category1', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 800, 'uploads/Category1/59628bc7b16f28.50210713.jp', 0, 0),
(15, 'Med 15', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628bec467fb9.14652317.jpg', 0, 0),
(16, 'Med 16', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 500, 'uploads/Category2/59628bfa082825.75591196.jpg', 0, 0),
(17, 'Med 17', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628c119b6523.71407466.jpg', 0, 0),
(18, 'Med 18', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 400, 'uploads/Category2/59628c35ca1584.16506727.jp', 0, 0),
(19, 'Med 19', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 700, 'uploads/Category2/59628c4a307ef7.97713460.jpg', 0, 0),
(20, 'Med 20', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 600, 'uploads/Category2/59628c60313f83.91803422.jpg', 0, 0),
(21, 'Med 21', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 600, 'uploads/Category2/59628c7086a814.02343278.jpg', 0, 0),
(22, 'Med 22', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 500, 'uploads/Category2/59628c86b946c4.07621259.jpg', 0, 0),
(23, 'Med 23', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 900, 'uploads/Category2/59628c9522a992.62176354.jpg', 0, 0),
(24, 'Med 24', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628ca4b78736.51126033.jpg', 0, 0),
(25, 'Med 25', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628cb5a5dc90.76310735.jpg', 0, 0),
(26, 'Med 26', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 600, 'uploads/Category2/59628cce7b3980.26615939.jp', 0, 0),
(27, 'Med 27', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category2/59628e5bbd70b6.61047456.jpg', 0, 0),
(29, 'Med 28', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category2/59628e9b5ad761.05683629.jp', 0, 0),
(30, 'Med 29', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 200, 'uploads/Category2/59628eac13b914.61404939.jpg', 0, 0),
(31, 'Med 30', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628eb870baf6.51361249.jpg', 0, 0),
(32, 'Med 31', 'Category2', 'This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,This is a text for testing my site,', 300, 'uploads/Category2/59628ed76cd9d6.00136816.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(29, 'Anoop P', 'anoop@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(30, 'Anoop P', 'mubarak@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(31, 'Aiswarya', 'ashi@gmail.com', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userproduct` (`userid`,`productid`),
  ADD KEY `userid` (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`adressid`),
  ADD KEY `adressid` (`adressid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cname` (`cname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`),
  ADD KEY `email_4` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`adressid`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `category` (`cname`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
