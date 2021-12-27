-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 04:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('asif', '123');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_jewellery`
--

CREATE TABLE `borrow_jewellery` (
  `borrow_id` int(11) NOT NULL,
  `borrow_day` int(11) NOT NULL,
  `borrow_total` int(11) NOT NULL,
  `emi_type` varchar(100) NOT NULL,
  `jewellery_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow_jewellery`
--

INSERT INTO `borrow_jewellery` (`borrow_id`, `borrow_day`, `borrow_total`, `emi_type`, `jewellery_id`, `customer_id`) VALUES
(1, 2, 40000, 'no', 1, 1),
(2, 2, 40000, 'yes', 1, 1),
(3, 2, 40000, 'yes', 1, 1),
(4, 2, 40000, 'no', 12, 7),
(5, 2, 40000, 'no', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `buy_jewellery`
--

CREATE TABLE `buy_jewellery` (
  `buy_id` int(11) NOT NULL,
  `jewellery_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy_jewellery`
--

INSERT INTO `buy_jewellery` (`buy_id`, `jewellery_id`, `customer_id`) VALUES
(1, 4, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 12, 1),
(7, 4, 1),
(8, 4, 1),
(9, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`phone_number`, `email`, `address`) VALUES
('01796100025', 'asifasrafulislam@gmail.com', 'Boshundhora,Dhaka,Bandladesh');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `first_name`, `last_name`, `customer_address`, `phone_number`, `customer_email`, `user_name`, `user_password`) VALUES
(1, 'Md.Asraful Islam', 'Asif', 'DB road,Gaibandha', '01796100025', 'asifasrafulislam@gmail.com', 'AsrafulAsif', '123'),
(2, 'Piyash', 'Alom', '120/c road,Chittagong ', '017369852478', 'piyashalom@gmail.com', 'piyash', '147'),
(3, 'Ashim ', 'Hemi', 'Mirpur,Dhaka', '01923569875', 'hemi@gmail.com', 'Hemi', '369\r\n'),
(4, 'Arif', 'Alom', '120/c road,Chittagong ', '01432569821', 'arif@gmail.com', 'arif', '789'),
(5, 'Abir', 'Islam', 'bd,2300', '01796100026', 'abir@gmail.com', 'abir', '153'),
(6, 'Ashik', 'Islam', 'bd,2300', '01796100026', 'abir@gmail.com', 'ashik', '147'),
(7, 'Nahin', 'Islam', 'Barishal,Bangladesh ', '01796100027', 'nahin@gmail.com', 'nahinpaku', '123'),
(8, 'Md.Saidhur ', 'Rhaman', 'Dhaka,Bangladesh', '01796100024', 'saidur@gmail.com', 'saidur', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

CREATE TABLE `jewellery` (
  `jewellery_id` int(11) NOT NULL,
  `jewellery_name` varchar(100) NOT NULL,
  `jewellery_image` varchar(255) NOT NULL,
  `jewellery_type` varchar(100) NOT NULL,
  `jewellery_info` varchar(100) NOT NULL,
  `buy_price` varchar(100) NOT NULL,
  `borrow_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`jewellery_id`, `jewellery_name`, `jewellery_image`, `jewellery_type`, `jewellery_info`, `buy_price`, `borrow_price`) VALUES
(1, 'bangle', 'image/d1.jpg', 'diamond', '22k', '200000', '20000'),
(2, 'bangle', 'image/d2.jpg', 'diamond', '22k', '2000000', '20000'),
(3, 'bangle', 'image/d3.jpg', 'diamond', '22k', '2000000', '20000'),
(4, 'bangle', 'image/d4.jpg', 'diamond', '22k', '2000000', '20000'),
(5, 'bangle', 'image/d5.jpg', 'diamond', '22k', '2000000', '20000'),
(6, 'bangle', 'image/g1.jpg', 'gold', '22k', '2000000', '20000'),
(7, 'bangle', 'image/g2.jpg', 'gold', '22k', '2000000', '20000'),
(8, 'bangle', 'image/g3.jpg', 'gold', '22k', '2000000', '20000'),
(9, 'bangle', 'image/g4.jpg', 'gold', '22k', '2000000', '20000'),
(10, 'bangle', 'image/g5.jpg', 'gold', '22k', '2000000', '20000'),
(11, 'ring', 'image/ring01.jpg', 'silver', '2k', '2000', '1000'),
(12, 'ring', 'image/6qGpAtO.jpg', 'silver', '21k', '2000000', '20000'),
(13, 'ring', 'image/1302-6.jpg', 'diamond', '23k', '1000000', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_jewellery`
--
ALTER TABLE `borrow_jewellery`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `jewellery_id` (`jewellery_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `buy_jewellery`
--
ALTER TABLE `buy_jewellery`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD PRIMARY KEY (`jewellery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_jewellery`
--
ALTER TABLE `borrow_jewellery`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buy_jewellery`
--
ALTER TABLE `buy_jewellery`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jewellery`
--
ALTER TABLE `jewellery`
  MODIFY `jewellery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_jewellery`
--
ALTER TABLE `borrow_jewellery`
  ADD CONSTRAINT `borrow_jewellery_ibfk_1` FOREIGN KEY (`jewellery_id`) REFERENCES `jewellery` (`jewellery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_jewellery_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy_jewellery`
--
ALTER TABLE `buy_jewellery`
  ADD CONSTRAINT `buy_jewellery_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
