-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 03:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cozastore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_image` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `status`) VALUES
(10, 'man', 'banner-02.jpg', 'Y'),
(11, 'women', 'banner-01.jpg', 'Y'),
(12, 'assesory', 'banner-09.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(20) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `imgs` text NOT NULL,
  `date` datetime NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `imgs`, `date`, `product_quantity`, `price`, `status`) VALUES
(283, 756, '39', '\n											\n											<img src=\"admin/img/apple_b1_1.jpeg\" alt=\"IMG-PRODUCT\">\n											', '2019-10-11 12:36:37', 5, 210, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_email` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `order_subtotal` varchar(30) NOT NULL,
  `order_tax` varchar(30) NOT NULL,
  `order_total` varchar(30) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `payment_status` varchar(15) NOT NULL,
  `order_shipping` varchar(30) NOT NULL,
  `order_discount` varchar(30) NOT NULL,
  `data_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(20) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_image`, `product_name`, `product_price`, `status`) VALUES
(172, 10, 'product-11.jpg', 'shert', 50, 'Y'),
(173, 10, 'apple_b1_1.jpeg', 'apple', 200, 'Y'),
(174, 10, 'item-cart-02.jpg', 'shoes', 20, 'Y'),
(175, 11, 'item-cart-01.jpg', 'shert', 20, 'Y'),
(176, 12, 'product-12.jpg', 'balt', 50, 'Y'),
(177, 11, 'product-15.jpg', 'apple', 50, 'Y'),
(178, 11, 'product-01.jpg', 't-shert', 50, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_other_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_other_image`) VALUES
(182, 172, 'product-03.jpg'),
(183, 172, 'product-min-02.jpg'),
(184, 173, 'apple_w1_2.jpeg'),
(185, 173, 'apple_w1_22.jpeg'),
(186, 174, 'product-09.jpg'),
(187, 174, 'product-detail-01.jpg'),
(188, 175, 'product-05.jpg'),
(189, 176, 'banner-09.jpg'),
(190, 177, 'item-cart-03.jpg'),
(191, 177, 'product-06.jpg'),
(192, 178, 'product-08.jpg'),
(193, 178, 'product-10.jpg'),
(194, 178, 'product-13.jpg'),
(195, 178, 'product-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `promo_code` varchar(20) NOT NULL,
  `discount_type` varchar(20) NOT NULL,
  `discount_amount` float NOT NULL,
  `creat_data` datetime NOT NULL,
  `expir_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `promo_code`, `discount_type`, `discount_amount`, `creat_data`, `expir_data`) VALUES
(1, 'NEW', 'P', 10, '2019-09-30 00:00:00', '2020-01-01 00:00:00'),
(2, 'FIX20', 'F', 20, '2019-09-30 00:00:00', '2020-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_signup`
--

CREATE TABLE `users_signup` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_mobileno` varchar(10) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_signup`
--

INSERT INTO `users_signup` (`id`, `user_name`, `user_address`, `user_email`, `user_mobileno`, `user_password`) VALUES
(3, 'keyur', 'a/123 ad surat', '', '1234567891', '123456'),
(4, 'sagar', 'parmukchaya', '', '123456789', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_signup`
--
ALTER TABLE `users_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=757;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `users_signup`
--
ALTER TABLE `users_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
