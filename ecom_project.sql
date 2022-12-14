-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 06:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `u_id`, `updated_at`, `created_at`) VALUES
(5, 'Tshirt', 300, 'Tshirt1661063311.istockphoto-465485445-612x612.jpg', 1, '2022-08-21 06:28:31', '2022-08-21 06:28:31'),
(6, 'Headphone', 3000, 'Headphone1661064109.headphone.jpg', 1, '2022-08-21 06:41:49', '2022-08-21 06:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `u_type` varchar(100) NOT NULL,
  `tkey` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `name`, `u_type`, `tkey`, `u_id`, `created_at`, `expired_at`) VALUES
(58, 'Md Ridwanuzzaman', 'vendor', 'KJeJWemZshbhjQ0tco57N790VgDC8wz4GcdB54VgJhOFh4bRIv80PzRXM8RvGeHNJ3c', 1, '2022-08-24 06:17:46', NULL),
(59, 'Md Ridwanuzzaman', 'vendor', 'AI8aQLkqbeW3zOph7gr8Nz5IFbBfVvi69JA8OJ6SBtqMzhtu9tgUqoM4y3LSB6Vp5N1', 1, '2022-08-24 06:17:46', NULL),
(60, 'Md Ridwanuzzaman', 'vendor', 'C49amQ442XXvY6DucMYCNzaV6etgaimp1KhzXnSXR8P1zaUfRuWUAAn3jSy7OZSJ5RW', 1, '2022-08-24 06:17:49', NULL),
(61, 'Md Ridwanuzzaman', 'vendor', 'XUQnhCLCUhShjLY88bb2PudGNKksHyyz1FEIGaNFO87wVBYXA3T10BoF4SFhIYu92ri', 1, '2022-08-24 12:41:55', NULL),
(62, 'Md Ridwanuzzaman', 'vendor', 'BzUgTvo9CCygcb2f5JjolYBeYhNs1vWpxZSSNwQH1ObxDDraXhRBqgm3o2BpEShcDS1', 1, '2022-08-24 12:41:55', NULL),
(63, 'Md Ridwanuzzaman', 'vendor', 'ais8pTg2DZ0IIZD2yNvxp9fb7Cd56czIDCa7P5H6q4Jx4GPSyzqp0BoUIPkmwydquRd', 1, '2022-08-24 12:41:56', '2022-08-24 13:19:11'),
(64, 'Md Ridwanuzzaman', 'vendor', 'AVj11ltLybZLlJvtSb834369z2iE9h1FxcLYwhM50UUmd6lzO6OUItbckQrtfgF6V9L', 1, '2022-08-24 13:19:49', NULL),
(65, 'Md Ridwanuzzaman', 'vendor', 'qUa9zCZaBYpb8TENUBnwdz5KrqK7cHamY4oh6DvytQiJpmdAgdcX1l2DER7qJULcxVT', 1, '2022-08-24 13:19:50', NULL),
(66, 'Rafid Hasan', 'vendor', 'Ae6cY5y2mW8qu9CTv7XsnmoQWQCMggZYOsPRsP0XxS4QvdhanQktH3aePTjL1pQAW3R', 6, '2022-08-24 15:18:27', NULL),
(67, 'Rafid Hasan', 'vendor', 'o43lIYpKfc81MtvNtEDaoyzEPA1GJXtpRAR01mUsZFFmTOZyI3MqielqLeGj1pLVirp', 6, '2022-08-24 15:18:28', '2022-08-24 15:37:46'),
(68, 'Rafid Hasan', 'vendor', 'CC4OASQb0kqyQBAQIMqQq0TK2avui4EIN4HJd9byrXpr6SaOE2kFm1klkKZCevXfPSt', 6, '2022-08-24 16:18:35', NULL),
(69, 'Rafid Hasan', 'vendor', 'xPl89J3yXlX3CaWdUmUlmJ8LFc2UN9HNVesszMrRsmAWdSRaBZ9r93VLgbWuzSHVMav', 6, '2022-08-24 16:18:42', NULL),
(70, 'Rafid Hasan', 'vendor', '1cWc26v5fjDPq9H9oocEFTLgYFDbc1mtMaG5a8AiqGLCEjszXH7rzMKYTWj6Fv9J5bt', 6, '2022-08-24 16:29:15', NULL),
(71, 'Rafid Hasan', 'vendor', 'zFk8mjRS5CTtJfQoBuA9JRUOQgrZiccH1VqIkr26WYLfn41aN3zKcViQNEmWTeP4U9w', 6, '2022-08-24 16:29:16', '2022-08-24 16:29:20'),
(72, 'Md Ridwanuzzaman', 'vendor', 'FGNnluFURH5b6r9VzQzLWGauWfcTNb6HTixXlu3VTyz95WT5BastBBUE7gsMWudUQzC', 1, '2022-08-24 16:29:26', NULL),
(73, 'Md Ridwanuzzaman', 'vendor', 'hdy62vYVn9HuBBSWSQmIC5gQoHLUuFXM6ap3lu8fG3OAE0uVZveCF2hXd1pn35mZwNN', 1, '2022-08-24 16:29:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `password`, `address`, `u_type`, `updated_at`, `created_at`) VALUES
(1, 'Md Ridwanuzzaman', 'amitumul@gmail.com', '2022-07-04 00:00:00', '12345678', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'vendor', '2022-07-04 09:14:46', '2022-07-04 09:14:46'),
(2, 'Nazmus Sakib leon', 'leon@gmail.com', '2022-07-14 00:00:00', '12345678', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'vendor', '2022-07-14 16:56:32', '2022-07-14 16:56:32'),
(3, 'Mizer Sultana', 'mizersultana@gmail.com', '2022-07-03 00:00:00', '12345678', 'House-14, Road, 5', 'User', '2022-08-05 14:53:12', '2022-08-05 14:53:12'),
(4, 'Israt Jahan Nishi', 'israt.nishi@gmail.com', '2022-08-05 00:00:00', '12345678', 'Rupnagar', 'vendor', '2022-08-05 16:04:32', '2022-08-05 16:04:32'),
(5, 'Sohanur Rahman', 'sohan1234@gmail.com', '2022-08-05 00:00:00', '12345678', 'Mirpur', 'vendor', '2022-08-05 17:27:38', '2022-08-05 17:27:38'),
(6, 'Rafid Hasan', 'rafid@gmail.com', '2022-08-24 00:00:00', '12345678', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'vendor', '2022-08-24 15:00:50', '2022-08-24 15:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USERS` (`u_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_USERS` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
