-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2017 at 12:09 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(8) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`) VALUES
(22, 20, 5),
(2, 20, 10),
(1, 20, 15);

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
(1, 'Category2'),
(2, 'Category3'),
(4, 'Category4'),
(6, 'Category5');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cname`, `description`, `price`, `image`, `scount`, `ocount`) VALUES
(3, 'Med 1', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 100, 'uploads/category2/595697d4c6e425.61192433.jp', 0, 3),
(4, 'Med 2', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 250, 'uploads/category2/595697e5f05724.55649263.jpg', 0, 0),
(5, 'Med 3', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 550, 'uploads/category2/595697fe49c4f8.42548106.jpg', 0, 2),
(6, 'Med 4', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 500, 'uploads/category2/59569815ab8960.85373779.jpg', 0, 0),
(7, 'Med 5', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 200, 'uploads/category2/595698288275a8.28106134.jpg', 0, 5),
(8, 'Med 6', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 100, 'uploads/category2/5956984313c8d0.88956187.jp', 0, 0),
(9, 'Med 7', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 522, 'uploads/category2/595698582a4f86.69690956.jpg', 0, 0),
(10, 'Med 8', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 250, 'uploads/category2/59569891e2d2f5.97910306.jpg', 0, 7),
(11, 'Med 9', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 560, 'uploads/category2/595698aa7b2f14.34837964.jpg', 0, 3),
(12, 'Med 10', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 250, 'uploads/category2/595698cfc523b8.78581778.jpg', 0, 0),
(13, 'Med 11', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 510, 'uploads/category2/595698f5e90894.36477063.jp', 0, 6),
(14, 'Med 12', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 260, 'uploads/category2/5956990a124e35.24243406.jpg', 0, 0),
(15, 'Med 13', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 460, 'uploads/category2/59569920546139.20392221.jpg', 0, 9),
(16, 'Med 14', 'category2', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 320, 'uploads/category2/595699337d7912.92455085.jpg', 0, 0),
(19, 'Med 16', 'category3', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 550, 'uploads/category3/5957b0d83d5237.48328481.jpg', 0, 0),
(26, 'Med 17', 'category3', 'This is a sample text for testing my site,this site is created and designed by inkers, This is a sample text for testing my site,this site is created and designed by inkers ,This is a sample text for testing my site,this site is created and designed by inkers.', 350, 'uploads/category3/5957cac0748dd5.79735880.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address1` varchar(40) NOT NULL,
  `address2` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `pincode` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address1`, `address2`, `city`, `state`, `pincode`, `mobile`, `email`, `password`) VALUES
(20, 'Anoop P', 'Panthalil House', 'Manisseri Post', 'Palakkad', 'kerala', '679521', '9746364612', 'anoop@gmail.com', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `category` (`cname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
