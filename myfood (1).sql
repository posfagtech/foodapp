-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 03:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_product`
--

CREATE TABLE `admin_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_image1` varchar(300) NOT NULL,
  `product_image2` varchar(300) NOT NULL,
  `product_price` varchar(250) NOT NULL,
  `date` datetime(6) NOT NULL,
  `admin_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_product`
--

INSERT INTO `admin_product` (`product_id`, `product_name`, `product_description`, `product_image1`, `product_image2`, `product_price`, `date`, `admin_id`) VALUES
(7, 'food', '  lorem lorem lorem', 'uploads/food3.jpg', '', '500', '0000-00-00 00:00:00.000000', '13'),
(8, 'food2', '  lorem lorem lorem', 'uploads/food.jpg', '', '900', '0000-00-00 00:00:00.000000', '13'),
(9, 'food2', '  lorem lorem lorem', 'uploads/food.jpg', '', '900', '0000-00-00 00:00:00.000000', '13'),
(10, 'kjgnbjev', '  vrjnr', 'uploads/food.jpg', '', 'vcrbivr', '0000-00-00 00:00:00.000000', '17'),
(11, 'test', '  just a text', 'uploads/fema1.jpg', '', '600', '0000-00-00 00:00:00.000000', '13'),
(13, 'new product', '  egg and breda', 'uploads/c1.png', '', '500', '0000-00-00 00:00:00.000000', '13'),
(15, 'Ghana Jollof', '  Sauce , peppe, meat and lots ', 'uploads/one-pot-ghanaian-jollof-rice.jpg', '', '300', '0000-00-00 00:00:00.000000', '12'),
(17, 'Nigeria Jollf', ' Very good and tastefull', 'uploads/nj.jpg', '', '200', '0000-00-00 00:00:00.000000', '12'),
(18, 'fried rice', '  Nice fried rice', 'uploads/fried.jpg', '', '500', '0000-00-00 00:00:00.000000', '12'),
(19, 'rice and chicken', ' fseidhudbyvhdsvygfeuywfgjbyzgfvseyf', 'uploads/rice.jpg', '', '400', '0000-00-00 00:00:00.000000', '12'),
(20, 'Ghana Jollof', '   Sauce , peppe, meat and lots yrhrhfbfhkjfiugiu', 'uploads/nj.jpg', '', '300', '0000-00-00 00:00:00.000000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` varchar(230) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_phone` int(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_location` varchar(255) DEFAULT NULL,
  `store_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `datetime`, `admin_location`, `store_name`) VALUES
(12, 'Johnson', 'Johnson@gmail.com', 'johnson8666', 908666542, '2022-02-15 03:23:16', 'Giner,cyprus', 'Johnson\'s Kitchen'),
(13, 'Natalie', 'natalie@gmail.com', 'natalie', 2147483647, '2022-02-15 03:23:50', 'Lesfkosia,cyprus', 'Natalie Kitchen'),
(15, 'ttes1', 'test1@gmail.com', 'natalie', 9985555, '2022-02-15 03:24:28', 'Haspolat,cyprus', 'Test\'s Kitchen'),
(17, 'johnson', 'johnson8666@gmail.com', 'johnson', 2147483647, '2022-02-15 03:24:44', 'Magusa,Cyprus', 'Johnson\'s Kitchen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_product`
--
ALTER TABLE `admin_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_product`
--
ALTER TABLE `admin_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
