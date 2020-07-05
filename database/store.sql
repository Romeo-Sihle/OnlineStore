-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 01:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Surname`, `Email`, `Message`) VALUES
(1, 'Romeo', 'Mnxulwa', 'romeosihle.mnxulwa@gmail.com', 'Good Day, \r\n\r\nI would like to make a request of acquiring a Mercedes Benz GLC63s AMG 4-Matic + as I do not find it here in South African dealerships. I would like it imported to my residential address.\r\n\r\nKind Regards\r\n\r\nRomeo'),
(2, 'Romeo', 'Gibbs', 'gibs@gmail.com', 'hello'),
(3, 'Sihle', 'Mnxulwa', 'romeosihle.mnxulwa@gmail.com', 'Good day, \r\n\r\nI am Interested in the new GLA AMG Mercedes Benz. Please contact me.\r\n\r\nThank you.\r\n\r\nRomeo Mnxulwa\r\n'),
(6, 'tommy', 'lee', 'lee@gmail.com', 'thank you'),
(10, 'Romeo', 'Roberts', 'jr@gmail.com', 'kytr');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Mercedes Benz CLA45 AMG', 860600),
(2, 'Mercedes Benz GT63 AMG ', 1660900),
(3, 'Mercedes Benz C63s AMG ', 1200350),
(4, 'Mercedes Benz C63s AMG Coupe\'', 1800300),
(5, 'Mercedes Benz X-Class', 513200),
(6, 'Mercedes Benz GLC Pick-Up AMG', 580300),
(7, 'Mercedes Benz GLC63s Coupe\' AMG 4-Matic +', 4800990),
(8, 'Mercedes Benz G63 AMG', 5280300),
(9, 'Mercedes Benz E63s AMG', 3200402),
(10, 'Mercedes Benz E63s Coupe\' AMG', 3320900),
(11, 'Mercedes Benz SLS Coupe\' AMG', 4900090),
(12, 'Mercedes Benz SLSs Coupe\' AMG 4-Matic+', 5987995);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(4, 'yugesh verma', 'yugeshverma32@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '6263056779', 'bhilai', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
(5, 'yugesh', 'yugeshverma@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '9165063741', 'bhilai', 'bhilai'),
(6, 'Romeo Mnxulwa', 'romeosihle.mnxulwa@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0822843112', 'Cape Town', '12 Hunt Church Street'),
(7, 'devon', 'devonnaidoo@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0822842233', 'Cape Town', '12 Hunt Church Street');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(14, 4, 2, 'Confirmed'),
(18, 5, 11, 'Added to cart'),
(20, 5, 5, 'Added to cart'),
(22, 6, 2, 'Added to cart'),
(23, 6, 4, 'Added to cart'),
(25, 6, 5, 'Added to cart'),
(29, 6, 12, 'Added to cart'),
(30, 7, 2, 'Confirmed'),
(31, 7, 12, 'Confirmed'),
(32, 7, 11, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
