-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2022 at 11:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Children', 0),
(4, 'Pets', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_amount` double NOT NULL,
  `order_status` enum('pending','pending payment','paid','') NOT NULL,
  `created_at` datetime NOT NULL,
  `paymenttype_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `order_amount`, `order_status`, `created_at`, `paymenttype_id`, `updated_at`, `is_deleted`) VALUES
(1, 19, 800, 'paid', '2022-01-23 21:43:38', 1, '2022-01-23 21:43:38', 0),
(2, 19, 800, 'paid', '2022-01-23 21:47:52', 1, '2022-01-23 21:47:52', 0),
(3, 19, 800, 'paid', '2022-01-23 21:48:54', 1, '2022-01-23 21:48:54', 0),
(4, 19, 800, 'paid', '2022-01-23 21:59:00', 1, '2022-01-23 21:59:00', 0),
(5, 19, 800, 'paid', '2022-01-23 21:59:32', 1, '2022-01-23 21:59:32', 0),
(6, 19, 10000, 'paid', '2022-01-23 22:00:01', 1, '2022-01-23 22:00:01', 0),
(7, 19, 800, 'pending', '2022-01-29 22:21:43', 1, '0000-00-00 00:00:00', 0),
(8, 19, 800, 'pending', '2022-01-29 22:26:10', 1, '0000-00-00 00:00:00', 0),
(9, 19, 800, 'pending', '2022-01-29 22:32:24', 1, '0000-00-00 00:00:00', 0),
(10, 19, 800, 'pending', '2022-01-29 22:32:39', 1, '0000-00-00 00:00:00', 0),
(11, 19, 800, 'pending', '2022-01-29 22:33:41', 1, '0000-00-00 00:00:00', 0),
(12, 19, 800, 'pending', '2022-01-29 22:46:47', 1, '0000-00-00 00:00:00', 0),
(13, 19, 800, 'pending', '2022-01-29 22:47:44', 1, '0000-00-00 00:00:00', 0),
(14, 19, 800, 'paid', '2022-01-29 22:48:59', 1, '2022-01-29 22:48:59', 0),
(15, 19, 800, 'pending', '2022-01-29 22:49:34', 1, '0000-00-00 00:00:00', 0),
(16, 19, 800, 'pending', '2022-01-31 23:24:03', 1, '0000-00-00 00:00:00', 0),
(17, 31, 12000, 'pending', '2022-02-01 00:16:00', 1, '0000-00-00 00:00:00', 0),
(18, 31, 12000, 'paid', '2022-02-01 00:16:25', 1, '2022-02-01 00:16:25', 0),
(19, 31, 800, 'paid', '2022-02-01 22:45:29', 1, '2022-02-01 22:45:30', 0),
(20, 31, 800, 'paid', '2022-02-01 22:50:27', 1, '2022-02-01 22:50:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT 1,
  `orderdetails_total` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`orderdetails_id`, `product_id`, `product_price`, `order_quantity`, `orderdetails_total`, `created_at`, `updated_at`, `is_deleted`, `order_id`) VALUES
(1, 5, 800, 1, 800, '2022-01-23 21:43:38', '0000-00-00 00:00:00', 0, 1),
(2, 5, 800, 1, 800, '2022-01-23 21:47:52', '0000-00-00 00:00:00', 0, 2),
(3, 5, 800, 1, 800, '2022-01-23 21:48:54', '0000-00-00 00:00:00', 0, 3),
(4, 5, 800, 1, 800, '2022-01-23 21:59:00', '0000-00-00 00:00:00', 0, 4),
(5, 5, 800, 1, 800, '2022-01-23 21:59:32', '0000-00-00 00:00:00', 0, 5),
(6, 2, 10000, 1, 10000, '2022-01-23 22:00:01', '0000-00-00 00:00:00', 0, 6),
(7, 5, 800, 1, 800, '2022-01-29 22:21:43', '0000-00-00 00:00:00', 0, 7),
(8, 5, 800, 1, 800, '2022-01-29 22:26:10', '0000-00-00 00:00:00', 0, 8),
(9, 5, 800, 1, 800, '2022-01-29 22:32:24', '0000-00-00 00:00:00', 0, 9),
(10, 5, 800, 1, 800, '2022-01-29 22:32:39', '0000-00-00 00:00:00', 0, 10),
(11, 5, 800, 1, 800, '2022-01-29 22:33:41', '0000-00-00 00:00:00', 0, 11),
(12, 5, 800, 1, 800, '2022-01-29 22:46:48', '0000-00-00 00:00:00', 0, 12),
(13, 5, 800, 1, 800, '2022-01-29 22:47:45', '0000-00-00 00:00:00', 0, 13),
(14, 5, 800, 1, 800, '2022-01-29 22:48:59', '0000-00-00 00:00:00', 0, 14),
(15, 5, 800, 1, 800, '2022-01-29 22:49:34', '0000-00-00 00:00:00', 0, 15),
(16, 5, 800, 1, 800, '2022-01-31 23:24:03', '0000-00-00 00:00:00', 0, 16),
(17, 6, 12000, 1, 12000, '2022-02-01 00:16:01', '0000-00-00 00:00:00', 0, 17),
(18, 6, 12000, 1, 12000, '2022-02-01 00:16:25', '0000-00-00 00:00:00', 0, 18),
(19, 5, 800, 1, 800, '2022-02-01 22:45:30', '0000-00-00 00:00:00', 0, 19),
(20, 5, 800, 1, 800, '2022-02-01 22:50:27', '0000-00-00 00:00:00', 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymenttypes`
--

CREATE TABLE `tbl_paymenttypes` (
  `paymenttype_id` int(11) NOT NULL,
  `paymenttype_name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paymenttypes`
--

INSERT INTO `tbl_paymenttypes` (`paymenttype_id`, `paymenttype_name`, `description`, `is_deleted`) VALUES
(1, 'Wallet', 'Simulated customer wallet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_price` double NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`, `available_quantity`, `subcategory_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(2, 'Suit', 'Official suit for men', 'Suit for men', 10000, 30, 2, '2021-12-24', '0000-00-00', 21, 0),
(3, 'Dress', 'Official dress for women', 'Women Official dress', 5000, 30, 5, '2021-12-29', '0000-00-00', 17, 0),
(5, 'Khaki', 'Blue medium sized khaki', 'khaki.jpeg', 800, 25, 1, '2022-01-07', '0000-00-00', 17, 0),
(7, 'Evening Wear', 'Evening wear for any person', 'Evening wear', 10000, 20, 28, '2022-02-01', '0000-00-00', 17, 0),
(8, 'Evening Wear', 'Evening wear for any person', 'Evening wear', 10000, 20, 28, '2022-02-01', '0000-00-00', 17, 0),
(9, 'Evening Wear', 'Evening wear for any person', 'Evening wear', 10000, 20, 28, '2022-02-01', '0000-00-00', 17, 0),
(10, 'Evening Wear', 'Evening wear for any person', 'Evening wear', 10000, 20, 28, '2022-02-01', '0000-00-00', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` enum('Admin','Buyer','ApiUser') NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(20, 'Admin', 0),
(21, 'ApiUser', 0),
(22, 'Buyer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcategory_id`, `subcategory_name`, `category_id`, `is_deleted`) VALUES
(1, 'MenCasual', 1, 0),
(2, 'MenOfficial', 1, 0),
(3, 'MenSports', 1, 0),
(4, 'WomenCasual', 2, 0),
(5, 'WomenOfficial', 2, 0),
(6, 'WomenSports', 2, 0),
(7, 'ChildrenCasual', 3, 0),
(8, 'ChildrenOfficial', 3, 0),
(9, 'ChildrenSports', 3, 0),
(10, 'Dogs', 4, 0),
(11, 'Cats', 4, 0),
(12, 'Others', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role_id`, `is_deleted`) VALUES
(17, 'Sammy', 'Kiptoo', 'kiptoo@gmail.com', '1234', 'male', 20, 0),
(18, 'Shirleen', 'Cherotich', 'shirlene@gmail.com', '1234', 'female', 21, 0),
(19, 'Judy', 'Jelagat', 'judy@gmail.com', '1234', 'male', 22, 0),
(20, 'Irene', 'Chelang\'at', 'irene@gmail.com', '5678', 'male', 20, 0),
(21, 'Dorica', 'Jebet', 'dorica@gmail.com', '1234', 'male', 20, 0),
(27, 'Stephen', 'Too', 'stephen@gmail.com', '1234', 'male', 21, 0),
(28, 'Isaac', 'Too', 'isaac@gmail.com', '1234', 'male', 22, 0),
(29, 'Raph', 'Too', 'raph@gmail.com', '1234', 'male', 20, 0),
(30, 'Isaac', 'Too', 'iso@gmail.com', '1234', 'male', 20, 0),
(31, 'TestBuyer', 'Buyer', 'test@gmail.com', '1234', 'male', 22, 0),
(32, 'TestApi', 'Api', 'api@gmail.com', '1234', 'female', 21, 0),
(35, 'test', 'test', 'tester@gmail.com', '1234', 'male', 22, 0),
(37, 'test', 'test', 'test2@gmail.com', '1234', 'male', 22, 0),
(39, 'test', 'test', 'test3@gmail.com', '1234', 'male', 22, 0),
(41, 'test', 'test', 'test4@gmail.com', '1234', 'male', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `wallet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_available` double NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`wallet_id`, `user_id`, `amount_available`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 19, 200, '2022-01-10 15:25:15', '2022-01-29 22:48:59', 0),
(2, 31, 6400, '2022-02-01 00:12:37', '2022-02-01 22:50:27', 0),
(3, 41, 10000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `paymenttype_id` (`paymenttype_id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  ADD PRIMARY KEY (`paymenttype_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  MODIFY `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`paymenttype_id`) REFERENCES `tbl_paymenttypes` (`paymenttype_id`);

--
-- Constraints for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD CONSTRAINT `tbl_orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`),
  ADD CONSTRAINT `tbl_orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tbl_subcategories` (`subcategory_id`);

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`);

--
-- Constraints for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD CONSTRAINT `tbl_wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
