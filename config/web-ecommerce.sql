-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 06:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(1, 'Mobiles', 'mobiles', 'Mobiles', 0, 1, '1725104519.jpg', 'Mobiles', 'All kinds of mobiles', 'All kinds of mobiles', '2024-08-29 09:11:55'),
(2, 'Computer', 'computers', 'Computer', 0, 0, '1725563823.jpg', 'This is catetory for computer', 'This is catetory for computer', 'This is catetory for computer', '2024-09-05 19:17:03'),
(3, 'Motor', 'motor', 'This is motor', 0, 1, '1725566854.jpg', 'This is motor', 'This is motor', 'This is motor', '2024-09-05 20:07:34'),
(4, 'Car', 'car', 'This is car', 0, 1, '1725566892.jpg', 'This is car', 'This is car', 'This is car', '2024-09-05 20:08:12'),
(5, 'Fashion', 'fashion', 'This is fashion', 0, 1, '1725566929.jpg', 'This is fashion', 'This is fashion', 'This is fashion', '2024-09-05 20:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(200) NOT NULL,
  `total_price` int(200) NOT NULL,
  `payment_mode` varchar(200) NOT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(1, 'pongseyha9737654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 3333, 2111, '', '', 1, NULL, '2024-09-17 20:20:03'),
(2, 'pongseyha2789654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 12343, 2111, 'COD', '', 1, NULL, '2024-09-17 20:21:20'),
(3, 'pongseyha1304654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 457575, 2111, 'COD', '', 1, NULL, '2024-09-17 20:27:14'),
(4, 'pongseyha9109654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 574354, 5555, 'COD', '', 1, NULL, '2024-09-18 19:02:12'),
(5, 'pongseyha7870654646', 2, 'Seyha Pong', 'user@gmail.com', '65654646', '12534', 34444, 1111, 'COD', '', 1, NULL, '2024-09-18 20:08:52'),
(6, 'pongseyha6417654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 473823, 0, 'COD', '', 1, NULL, '2024-09-18 20:15:14'),
(7, 'pongseyha55195654646', 2, 'Pong Seyha', 'admin@gmail.com', '065654646', '125346', 38725, 1000, 'COD', '', 1, NULL, '2024-09-18 20:16:05'),
(8, 'pongseyha9390654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', '12534', 275245, 195, '', '', 0, NULL, '2024-09-18 20:23:14'),
(9, 'pongseyha9140654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', 'Kompog Speu\r\nPumreal', 12534, 390, '', '', 0, NULL, '2024-09-18 20:38:04'),
(10, 'pongseyha6000654646', 2, 'Pong Seyha', 'pongseyha53@gmail.com', '65654646', 'Kompog Speu\r\nPumreal', 123456, 1990, '', '', 0, NULL, '2024-09-18 20:38:44'),
(11, 'pongseyha3716654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', 'Kompog Speu\r\nPumreal', 12534, 1990, '', '', 0, NULL, '2024-10-13 04:46:25'),
(12, 'pongseyha3605654646', 2, 'Pong Seyha', 'user@gmail.com', '65654646', 'Kompog Speu\r\nPumreal', 12534, 1990, '', '', 2, NULL, '2024-10-16 03:47:10'),
(13, 'pongseyha951055434354', 2, 'Pong Seyha', 'user@gmail.com', '5455434354', 'Kompog Speu\r\nPumreal', 12534, 3980, '', '', 1, NULL, '2024-10-16 04:26:42'),
(14, 'pongseyha444455434354', 2, 'Pong Seyha', 'user@gmail.com', '5455434354', 'Kompog Speu\nPumreal', 12534, 1111, 'Paid by Paypal', '7W788921894716947', 1, NULL, '2024-10-16 16:54:57'),
(15, 'pongseyha999655434354', 2, 'Pong Seyha', 'user@gmail.com', '5455434354', 'Kompog Speu\nPumreal', 12534, 1111, 'Paid by Paypal', '4W113315PB4406712', 1, NULL, '2024-10-16 17:13:42'),
(16, 'pongseyha782355434354', 2, 'Pong Seyha', 'pongseyha53@gmail.com', '5455434354', 'Kompog Speu\nPumreal', 12534, 2000, 'Paid by Paypal', '2CT22546LS1590432', 0, NULL, '2024-10-17 03:35:38'),
(17, 'pongseyha11413456789', 1, 'Seyha', 'user@gmail.com', '123456789', 'Kompong Speu', 123, 1111, 'Paid by Paypal', '0LB03848PL378624K', 1, NULL, '2024-10-17 05:42:25'),
(18, 'pongseyha789663498391', 1, 'Pong Seyha', 'pongseyha844@gmail.com', '0963498391', 'Kompog Speu\nPumreal', 12534, 1000, 'Paid by Paypal', '3GX25876V5991134K', 1, NULL, '2025-01-17 15:58:54'),
(19, 'pongseyha84713456789', 4, 'Brayden', 'brayden.edu.kh@gmail.com', '123456789', '168, phnom penh', 120425, 1000, 'Paid by Paypal', '9ME86723L4205093X', 1, NULL, '2025-04-22 03:59:42'),
(20, 'ID5319724388', 4, 'Brayden', 'brayden.edu.kh@gmail.com', '64724388', '18 Dempsey Rd', 249677, 1000, 'Paid by Paypal', '1UR45234J48273747', 1, NULL, '2025-04-22 04:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(200) NOT NULL,
  `prod_id` int(200) NOT NULL,
  `qty` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 1, 1, 1, 1111, '2024-09-17 20:20:03'),
(2, 1, 2, 1, 1000, '2024-09-17 20:20:03'),
(3, 2, 1, 1, 1111, '2024-09-17 20:21:20'),
(4, 2, 2, 1, 1000, '2024-09-17 20:21:20'),
(5, 3, 1, 1, 1111, '2024-09-17 20:27:14'),
(6, 3, 2, 1, 1000, '2024-09-17 20:27:14'),
(7, 4, 1, 5, 1111, '2024-09-18 19:02:12'),
(8, 5, 1, 1, 1111, '2024-09-18 20:08:52'),
(9, 7, 2, 1, 1000, '2024-09-18 20:16:05'),
(10, 8, 3, 1, 195, '2024-09-18 20:23:14'),
(11, 9, 3, 2, 195, '2024-09-18 20:38:04'),
(12, 10, 7, 1, 1990, '2024-09-18 20:38:44'),
(13, 11, 7, 1, 1990, '2024-10-13 04:46:25'),
(14, 12, 7, 1, 1990, '2024-10-16 03:47:10'),
(15, 13, 7, 2, 1990, '2024-10-16 04:26:42'),
(16, 14, 1, 1, 1111, '2024-10-16 16:54:57'),
(17, 15, 1, 1, 1111, '2024-10-16 17:13:42'),
(18, 16, 2, 2, 1000, '2024-10-17 03:35:38'),
(19, 17, 1, 1, 1111, '2024-10-17 05:42:25'),
(20, 18, 2, 1, 1000, '2025-01-17 15:58:54'),
(21, 19, 2, 1, 1000, '2025-04-22 03:59:42'),
(22, 20, 2, 1, 1000, '2025-04-22 04:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 1, 'Oppo A55', 'Oppo A55', 'is a mobile phone', 'is a mobile phone', 1111, 1111, '1725361284.jpg', 11, 0, 1, 'is a mobile phone', 'is a mobile phone', 'is a mobile phone', '2024-09-03 11:01:24'),
(2, 2, 'ASUS Zenbook S 16', 'ASUS Zenbook S 16', 'enbook S 16 is the first ultrathin 16-inch new-era ASUS AI PC, combining performance with sophistication. It has been completely redesigned from the inside out. The chassis incorporates our exquisite new Ceraluminum™, a high-tech ceramic in a range of nature-inspired colors. It provides the characteristics of hardness while completing the ultra-slim design and withstand the test of time.​', 'This new-era ASUS AI PC harnesses the latest AMD Ryzen™ AI processor, enhanced by quiet ambient cooling. It’s designed to enrich your on-the-go lifestyle, with an astonishingly thin 1.1 cm1 chassis housing an advanced 16-inch 3K ASUS Lumina OLED2 display and immersive six-speaker audio.', 1111, 1000, '1725363404.jpg', 15, 0, 1, 'This is computer', 'This is computer', 'This is computer', '2024-09-03 11:36:44'),
(3, 1, 'Iphone16', 'Iphone16', 'thsi is a mobile phone', 'thsi is a mobile phone', 200, 195, '1725479688.jpg', 27, 0, 1, 'thsi is a mobile phone', 'thsi is a mobile phone', 'thsi is a mobile phone', '2024-09-03 11:05:46'),
(4, 2, 'Redmi 7', 'Redmi 7', 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', 1111, 1000, '1725361655.jpg', 10, 0, 1, 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', '2024-09-03 11:07:35'),
(5, 2, 'Redmi 7', 'redmi 7', 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', 1111, 1000, '1725362495.jpg', 23, 0, 1, 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', 'is a mobile phone by xiaomi', '2024-09-03 11:21:35'),
(7, 3, 'Honda', 'Honda', 'This is motor from asean.', 'This is motor from asean.', 2000, 1990, '1725730083.jpg', 5, 0, 1, 'This is motor from asean.', 'This is motor from asean.', 'This is motor from asean.', '2024-09-07 17:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `created_at`) VALUES
(1, 'user', 'user@gmail.com', 1111, '123', 0, '2024-08-26 09:52:17'),
(2, 'Admin', 'admin@gmail.com', 232323, '123', 1, '2024-08-27 20:53:44'),
(3, 'Pong Seyha', 'pongseyha844@gmail.com', 963498391, '123', 0, '2024-11-06 01:08:33'),
(4, 'Brayden', 'brayden.edu.kh@gmail.com', 123456789, 'brayden1948h', 0, '2025-04-22 03:39:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
