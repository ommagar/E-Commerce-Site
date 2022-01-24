-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 09:28 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `mem_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `item_qty` int(11) NOT NULL DEFAULT '1',
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_time` varchar(10) NOT NULL,
  `delivery_date` varchar(20) NOT NULL,
  `delivery_type` int(11) NOT NULL,
  `receive_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(14) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(8) NOT NULL,
  `mobile` text NOT NULL,
  `company` varchar(10) NOT NULL,
  `com_id` int(11) NOT NULL,
  `add1` varchar(10) NOT NULL,
  `add2` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `postcode` int(7) NOT NULL,
  `time` varchar(14) NOT NULL,
  `region` varchar(11) NOT NULL,
  `confirm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `username`, `password`, `firstname`, `lastname`, `email`, `telephone`, `mobile`, `company`, `com_id`, `add1`, `add2`, `city`, `postcode`, `time`, `region`, `confirm`) VALUES
(108, '', '', 'Om', 'Magar', 'magar@magar.com', 0, '9840000000', '', 0, 'Besigau', '', 'Kathmandu', 44066, '2018 06 04 12:', 'province1', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `size` varchar(5) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'latest',
  `inserted_at` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `descript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `user_id`, `brand`, `size`, `gender`, `item_name`, `quantity`, `rate`, `code`, `type`, `inserted_at`, `image_path`, `descript`) VALUES
(2, 1, 'levis', 's', 'male', 'Levis success', 5, 3000, 'levis', 'latest', '', 'http://localhost/Project/uploads/2915355_fpx.jpg', 'It is comfortable.'),
(3, 1, 'addidas', 's', 'female', 'T-shirt', 20, 1500, 'wind122', 'feature', '29 May 2018 06:40:40', 'http://localhost/Project/uploads/download.jpg', 'Light weitht,\r\ncool suitable for summer.'),
(4, 1, 'puma', 'm', 'male', 'puma2', 1, 4000, 'pumablack', 'feature', '29 May 2018 10:28:11', 'http://localhost/Project/uploads/download_(1).jpg', 'cool,\r\nlight weight, comfortable etc.'),
(5, 1, 'puma', 's', 'female', 'whitelight', 20, 4500, 'wind122', 'latest', '29 May 2018 10:31:04', 'http://localhost/Project/uploads/White.jpg', 'light weight,\r\ncool,\r\nsuitable for summer,etc.'),
(6, 1, 'puma', 'm', 'female', 'blackpuma', 10, 3500, 'blcpma', 'feature', '29 May 2018 10:32:38', 'http://localhost/Project/uploads/images.jpg', 'comfy design, suitable for summer.'),
(7, 1, 'addidas', 's', 'male', 'adidas swift', 1, 6000, 'adiswift', 'latest', '29 May 2018 13:08:59', 'http://localhost/Project/uploads/download_(2).jpg', 'This is the most brand new adidas shoe.'),
(8, 1, 'addidas', 's', 'female', 'adidas top', 3, 2000, 'top', 'feature', '29 May 2018 14:05:52', 'http://localhost/Project/uploads/download1.jpg', 'This is original adidas t-shirts.'),
(9, 1, 'puma', 's', 'female', 'puma1', 23, 4450, 'puma1', 'latest', '29 May 2018 14:20:38', 'http://localhost/Project/uploads/White1.jpg', 'This is puma suitable for young girls.'),
(10, 1, 'gucci', 's', 'male', 'Gucci black leather', 32, 8000, 'leather jacket', 'feature', '30 May 2018 14:51:13', 'http://localhost/Project/uploads/download2.jpg', 'This is the most comfortable pure leather jacket.'),
(12, 1, 'puma', 's', 'male', 'puma', 4, 4500, 'red puma', 'latest', '30 May 2018 19:44:15', 'http://localhost/Project/uploads/download_(1)3.jpg', 'red puma'),
(13, 1, 'levis', 's', 'female', 'small jeans', 54, 2000, 'jeans jacket', 'latest', '30 May 2018 19:46:11', 'http://localhost/Project/uploads/download_(2)1.jpg', 'suitable for teenager.'),
(14, 1, 'levis', 'm', 'male', 'woolen jeans', 45, 3000, 'WJLEVIS', 'feature', '30 May 2018 19:48:01', 'http://localhost/Project/uploads/download_(3).jpg', 'suitable for cold environment'),
(15, 1, 'levis', 's', 'female', 'asd', 23, 1500, 'asd', 'latest', '30 May 2018 19:49:00', 'http://localhost/Project/uploads/download_(4).jpg', 'This is test for test.'),
(16, 1, 'gucci', 's', 'female', 'Leather Small', 31, 5000, 'GUCCILEARHER', 'feature', '30 May 2018 19:49:58', 'http://localhost/Project/uploads/download_(5).jpg', 'This is test for test.'),
(17, 1, 'gucci', 'm', 'female', 'SMALL CAT', 50, 4000, 'FIERCE', 'feature', '30 May 2018 19:51:02', 'http://localhost/Project/uploads/download_(6).jpg', 'This is test for test.'),
(18, 1, 'addidas', 's', 'male', 'GREY', 23, 2500, 'GREY', 'latest', '30 May 2018 19:52:00', 'http://localhost/Project/uploads/download3.jpg', 'This is test for test.'),
(19, 1, 'addidas', 'l', 'male', 'YELLOW', 12, 2500, 'YELLOWADIDAS', 'latest', '30 May 2018 19:53:49', 'http://localhost/Project/uploads/images_(1).jpg', 'This is test for test.'),
(20, 1, 'addidas', 's', 'male', 'ADI COLOR', 61, 3000, 'ADI', 'latest', '30 May 2018 19:54:18', 'http://localhost/Project/uploads/images_(2).jpg', 'This is test for test.'),
(21, 1, 'addidas', 'm', 'male', 'asdf', 23, 4500, 'asd', 'feature', '30 May 2018 19:55:02', 'http://localhost/Project/uploads/images_(3).jpg', 'This is test for test.'),
(22, 1, 'addidas', 'l', 'male', 'ADI COLORFUL', 45, 5000, 'COLORFUL', 'feature', '30 May 2018 19:55:55', 'http://localhost/Project/uploads/images_(4).jpg', 'This is test for test.'),
(23, 1, 'puma', 'xl', 'male', 'WINDCHEATER', 34, 1500, 'asfads', 'latest', '30 May 2018 19:56:47', 'http://localhost/Project/uploads/images_(5).jpg', ''),
(24, 1, 'puma', 'l', 'male', 'FITNESS', 234, 2000, 'FIT', 'feature', '30 May 2018 19:57:42', 'http://localhost/Project/uploads/images_(6).jpg', 'This is test for test.'),
(25, 1, 'puma', 'm', 'female', 'PINK PUMA', 15, 1500, 'PUMA', 'latest', '30 May 2018 19:58:32', 'http://localhost/Project/uploads/images_(7).jpg', 'This is test for test.'),
(26, 1, 'puma', 'm', 'unisex', 'SLIMNESS', 45, 780, 'SLIM', 'latest', '30 May 2018 19:59:26', 'http://localhost/Project/uploads/images_(8).jpg', 'This is test for test.'),
(27, 1, 'levis', 's', 'female', 'wollen', 45, 2500, 'wolen', 'latest', '30 May 2018 20:00:06', 'http://localhost/Project/uploads/images_(9).jpg', 'This is test for test.'),
(28, 1, 'levis', 'm', 'unisex', 'COMFY', 45, 4500, 'COMFY', 'feature', '30 May 2018 20:00:44', 'http://localhost/Project/uploads/images_(11).jpg', 'This is test for test.'),
(29, 1, 'levis', 'm', 'unisex', 'light blue', 34, 3400, 'blue', 'latest', '30 May 2018 20:01:35', 'http://localhost/Project/uploads/images_(12).jpg', 'This is test for test.'),
(30, 1, 'gucci', 'm', 'female', 'WOLF', 65, 3500, 'WOLFF', 'feature', '30 May 2018 20:02:13', 'http://localhost/Project/uploads/images_(13).jpg', 'This is test for test.'),
(32, 1, 'gucci', 'm', 'female', 'GUCCI COMMY', 87, 4000, 'GUCCY', 'latest', '30 May 2018 20:03:45', 'http://localhost/Project/uploads/images_(15).jpg', 'This is test for test.'),
(33, 1, 'addidas', 'l', 'male', 'LIGHT', 76, 1000, 'LIGHH', 'latest', '30 May 2018 20:04:46', 'http://localhost/Project/uploads/images1.jpg', 'This is test for test.'),
(34, 1, 'puma', 'm', 'female', 'body', 24, 5000, 'bodybody', 'top', '31 May 2018 17:52:02', 'http://localhost/Project/uploads/9299412_fpx.jpg', 'This is test of top display.'),
(35, 1, 'puma', 'm', 'male', 'whitepuma', 65, 4566, 'pumainwhite', 'top', '31 May 2018 17:52:55', 'http://localhost/Project/uploads/download4.jpg', 'This is top test.'),
(36, 1, 'addidas', 'm', 'male', 'WHiteadidas', 45, 5500, 'adidasass', 'top', '31 May 2018 17:55:18', 'http://localhost/Project/uploads/Discount_Best_selling_Fashion_clothes_for_women_adidas_performance_zne_-_tracksuit_top_-_white_Shop_488_4.jpg', 'THis is test for puma.'),
(37, 1, 'addidas', 'm', 'male', 'Adidasblack', 67, 5500, 'blackadidas', 'top', '31 May 2018 17:56:15', 'http://localhost/Project/uploads/images2.jpg', 'this is test.'),
(38, 1, 'addidas', 'm', 'male', 'adiwhite', 12, 5000, 'adiwhite', 'top', '31 May 2018 19:47:31', 'http://localhost/Project/uploads/ADIDAS-Original-New-Arrival-Mens-2017-ZNE-Jacket-Breathable-Quick-Dry-High-Quality-Outdoor-For-Men_jpg_640x640.jpg', 'This is test for adidas.'),
(39, 1, 'adidas', 'm', 'male', 'adi black', 34, 23145, 'asdf', 'latest', '31 May 2018 19:50:32', 'http://localhost/Project/uploads/Original-New-Arrival-2017-Adidas-Originals-CAMO-REV-WB-Men-s-jacket-Hooded-Sportswear_jpg_640x640.jpg', 'this is test'),
(40, 1, 'adidas', 'm', 'male', 'fadaf', 432, 4235, 'daf', 'latest', '31 May 2018 19:51:02', 'http://localhost/Project/uploads/Original-New-Arrival-2017-Adidas-Performance-TANIS-TRK-JKT-Men-s-jacket-Sportswear_jpg_640x640.jpg', 'This is test'),
(41, 1, 'adidas', 'm', 'male', 'original', 23, 234235, 'asdf', 'latest', '31 May 2018 19:51:31', 'http://localhost/Project/uploads/Original-New-Arrival-2017-Adidas-Performance-TANIS-TRK-JKT-Men-s-jacket-Sportswear_jpg_640x6401.jpg', 'this is test'),
(42, 1, 'gucci', 's', 'male', 'Fucci', 45, 123, 'Fucci', 'feature', '2018 06 05 06:42:42', 'http://localhost/Project/uploads/New_New_Gucci_Blue_Embroidered_Denim_Jacket_for_Women_Online_Outlet_1002.jpg', 'adfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `email`) VALUES
(1, 'member', 'member123', 'user@user.com'),
(2, 'testuser1', '12345678', 'user@user.com'),
(3, 'testuser2', '12345678', 'user@user.com'),
(4, 'asdfa', '123456789', 'asd@asdf.com'),
(5, 'asdfa', '123456788', 'fgsd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `item_name` varchar(14) NOT NULL,
  `rate` int(11) NOT NULL,
  `image_path` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
