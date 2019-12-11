-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 08:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `red`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(7, 'Album Coverpage'),
(6, 'Album Designing'),
(4, 'Mobile Pouch'),
(3, 'Mugs'),
(2, 'Photo Frames'),
(1, 'Photo Print'),
(8, 'Regular Albums'),
(5, 'T Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1570431512),
('m130524_201442_init', 1570431518),
('m170710_095514_add_user_admin', 1570431540),
('m170805_055433_alter_table_user_add_app_password_field', 1570431579),
('m191204_094925_create_table_category', 1575453083),
('m191204_095959_create_table_product', 1575454277),
('m191209_065640_create_table_product_attribute', 1575889964),
('m191209_083158_alter_table_user_add_role_column', 1575880543);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Post Card', 1575455115, 1575455115),
(2, 2, 'Photo Frame', 1575870876, 1575870876),
(3, 3, 'Mug', 1575873106, 1575873466),
(4, 4, 'Silicon Mobile Pouch', 1575882305, 1575882439),
(5, 5, 'T Shirt + Printing', 1575882849, 1575882849),
(6, 6, 'Album Designing + Printing', 1575883907, 1575883907),
(7, 7, 'Cover Page', 1575884205, 1575884293);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `attribute_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purchase_cost` float DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `max_height` int(11) DEFAULT NULL,
  `max_width` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `product_id`, `attribute_name`, `attribute_value`, `purchase_cost`, `selling_price`, `max_height`, `max_width`) VALUES
(1, 1, 'Size', '4 x 6', 5, 8, 900, 1500),
(2, 1, 'Size', '5 x 7', 8.26, 14, 1200, 1800),
(3, 1, 'Size', '6 x 8', 10.62, 16, 1500, 2100),
(4, 3, 'Color', 'White', 180, 350, NULL, NULL),
(5, 3, 'Color', 'Black', 350, 550, NULL, NULL),
(6, 3, 'Color', 'Magic', 350, 550, NULL, NULL),
(7, 1, 'Size', '6 x 9', 11.8, 16, NULL, NULL),
(8, 1, 'Size', '8 x 10', 23.6, 50, 2400, 3000),
(9, 1, 'Size', '8 x 12', 23.6, 50, NULL, NULL),
(10, 1, 'Size', '12 x 15', 47.2, 70, NULL, NULL),
(11, 1, 'Size', '12 x 16', 47.2, 80, NULL, NULL),
(12, 1, 'Size', '12 x 18', 53.1, 100, NULL, NULL),
(13, 2, 'Size', '4 x 6', 60, 150, NULL, NULL),
(14, 2, 'Size', '6 x 8', 80, 300, NULL, NULL),
(15, 2, 'Size', '8 x 10', 130, 400, NULL, NULL),
(16, 2, 'Size', '8 x 12', 160, 500, NULL, NULL),
(17, 2, 'Size', '12 x 15', 250, 600, NULL, NULL),
(18, 2, 'Size', '12 x 16', 250, 700, NULL, NULL),
(19, 2, 'Size', '12 x 18', 300, 800, NULL, NULL),
(20, 5, 'Size', 'SMALL SIZE', 300, 600, NULL, NULL),
(21, 5, 'Size', 'MEDIUM SIZE', 300, 600, NULL, NULL),
(22, 5, 'Size', 'LARGE SIZE', 300, 600, NULL, NULL),
(23, 5, 'Size', 'XL', 350, 650, NULL, NULL),
(24, 5, 'Size', 'XXL', 350, 650, NULL, NULL),
(25, 5, 'Size', 'XXXL', 350, 650, NULL, NULL),
(26, 6, 'Size', 'SMALL SIZE', 140, 250, NULL, NULL),
(27, 6, 'Size', 'MEDIUM SIZE', 140, 250, NULL, NULL),
(28, 6, 'Size', 'LARGE SIZE', 140, 250, NULL, NULL),
(29, 4, 'Mobile Accessories', 'Mobile Pouch', 150, 300, NULL, NULL),
(30, 7, 'Material', 'Leather', 800, 1250, NULL, NULL),
(31, 7, 'Material', 'Photo Cover page', 600, 850, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` smallint(4) DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `role`, `auth_key`, `password_hash`, `app_password`, `password_reset_token`, `email`, `contact_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', 1, '', '$2y$13$f.4XCpKSVfOJ8BBtYLmzoefa4mQQDy5inb4Iy5khKsVDQ2eljzBYi', NULL, NULL, 'avi@gmail.com', '09967722745', 10, 1575884205, 1575893661),
(6, 'Test_operator_1', 'Operator', 2, 'TPesQJ5IR0nBZG6o9p5zvhNnV83mstC5', '$2y$13$lNArauDsf1PloNYpEtrhiOh76DIbk3K49b.PIhHoyCPE9DmelGip6', NULL, NULL, 'operator@test1.com', '09967722745', 10, 1575884205, 1575884205),
(7, 'pramod', 'pramod', 1, '8CqOxnDej0SKyzXM6Ncc2B7n6n0VyRvm', '$2y$13$JY1uoheC15pqEclN4t1bsuSmewruAp.CgtuehbKJ.d.GV.ulDev2i', NULL, NULL, 'pramod3122@gmail.com', '9004926207', 10, 1575959818, 1575959818),
(8, 'avinash_admin', 'Avinash', 1, '6O1ohqFGuxsE8hhQ6-r9aI7o0o4fvzRu', '$2y$13$8ImmE6FzqVltWLEBD70jsOts0rEDaH91kf/jjljrfc0wjvqx67suC', NULL, NULL, 'avinash@admin.com', '09967722745', 10, 1575969228, 1575969228),
(9, 'operator_12345', 'Operator 12345', 2, 'TnPjpdB9q2tHVochgEASI0D6BS7wLkq3', '$2y$13$CoCIDoaR3/C5LPWFspOdluNisBzm.UVysZG71TpD4ADYi.fFXiAf2', NULL, NULL, 'operator@testakp.com', '09967722745', 10, 1575969489, 1575969489),
(10, 'ravindra_admin', 'ravindra', 1, '9MA7-s-4Pbu4pWwgfKIZVo_6FNJvO9DK', '$2y$13$LUm/0u6rTJ/Pva0EIlC7j.3tCiPU8U9.5S7s.N2vPw995UwnSkET.', NULL, NULL, 'test1234@gmail.com', '9004926207', 10, 1575969911, 1575969911);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`category_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_attribute_product` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `fk_product_attribute_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
