-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `veh_name` varchar(255) DEFAULT NULL,
  `veh_price` int(11) DEFAULT NULL,
  `veh_model` varchar(255) DEFAULT NULL,
  `veh_img` varchar(255) DEFAULT NULL,
  `booked` varchar(100) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`book_id`, `user_id`, `seller_id`, `veh_id`, `veh_name`, `veh_price`, `veh_model`, `veh_img`, `booked`, `fromdate`, `todate`) VALUES
(13, 3, 0, 19, '', 0, '', '', 'true', '2024-04-04', '2024-04-05'),
(14, 3, 1, 27, 'Cycle', 120, 'Kasmic 360', '', 'true', '2024-04-04', '2024-04-05'),
(15, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(16, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(17, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(18, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(19, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(20, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(21, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(22, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(23, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(24, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(25, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(26, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(27, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(28, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(29, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(30, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(31, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(32, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(33, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(34, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(35, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(36, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(37, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(38, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(39, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(40, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(41, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(42, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(43, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(44, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(45, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(46, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(47, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(48, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(49, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(50, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(51, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(52, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(53, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(54, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(55, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(56, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(57, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(58, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(59, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(60, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(61, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(62, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(63, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(64, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(65, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(66, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(67, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(68, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(69, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(70, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(71, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(72, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(73, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(74, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(75, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(76, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(77, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(78, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(79, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(80, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(81, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(82, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(83, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(84, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(85, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(86, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(87, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(88, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(89, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(90, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(91, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(92, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(93, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(94, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(95, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(96, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(97, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(98, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(99, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(100, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(101, 14, 0, 16, 'Bike', 5600, 'Kawasaki Ninja', 'vehicleimg/65c39c636a6c44.93881751.jpg', '', NULL, NULL),
(102, 17, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(103, 19, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL),
(104, 20, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(105, 21, 0, 0, 'Cycle', 1200, 'kasmic', 'vehicleimg/65c39c45b473b5.54052379.jpg', '', NULL, NULL),
(106, 22, 0, 0, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL),
(107, 23, 0, 0, 'bhui bhui', 34, 'bajaj', 'vehicleimg/65c98d833efc20.78920452.jpg', '', NULL, NULL),
(108, 24, 0, 0, 'Cycle', 120, 'Kasmic 360', 'vehicleimg/65f6c70a990301.20599673.jpg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `seller_id` int(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `vehicleid` int(100) NOT NULL,
  `vehicleimg` varchar(100) NOT NULL,
  `vehiclename` varchar(100) NOT NULL,
  `vehiclemodel` varchar(100) NOT NULL,
  `vehicleprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `seller_id`, `status`, `fromdate`, `todate`, `name`, `email`, `phone`, `vehicleid`, `vehicleimg`, `vehiclename`, `vehiclemodel`, `vehicleprice`) VALUES
(7, 0, 0, '', '2024-03-20', '2024-03-21', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 15, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', 1200),
(12, 2, 0, 'c', '2024-02-17', '2024-02-24', 'hero', 'khanalashim11@gmail.com', '+9779821115194', 18, 'vehicleimg/65c3a1446dba10.94365470.jpg', 'Car', 'Nano', 5600),
(14, 3, 0, 'c', '2024-03-06', '2024-03-09', 'salin Khanal', 'khanalayush030@gmail.com', '974572804', 16, 'vehicleimg/65c39c636a6c44.93881751.jpg', 'Bike', 'Kawasaki Ninja', 5600),
(17, 3, 0, 'c', '2024-03-17', '2024-03-29', 'Salin Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120),
(19, 3, 1, 'c', '2024-03-18', '2024-03-27', 'Salin Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120),
(20, 3, 0, 'c', '2024-03-29', '2024-04-01', 'blog op', 'helloworld@gmail.com', '4123456799', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', 1200),
(21, 3, 0, 'c', '2024-03-30', '2024-04-03', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', 1200),
(22, 3, 0, 'c', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c3a1446dba10.94365470.jpg', 'Car', 'Nano', 5600),
(23, 3, 0, 'c', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c98d833efc20.78920452.jpg', 'bhui bhui', 'bajaj', 34),
(24, 3, 1, 'c', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `seller_id`, `veh_id`, `comment`, `rating`) VALUES
(12, 3, 0, 28, 'good car', 4.00),
(13, 2, 0, 28, 'good car', 5.00),
(14, 3, 0, 15, '', 4.00),
(15, 3, 0, 16, 'ok\n', 5.00);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`) VALUES
(64, 'hi'),
(65, 'then'),
(66, 'then'),
(67, 'ehre'),
(68, 'okay'),
(69, 'then'),
(70, 'why');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `verify_request` varchar(12) NOT NULL,
  `seller_verify` tinyint(12) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `veh_category` int(100) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `verify_request`, `seller_verify`, `firstname`, `lastname`, `email`, `password`, `veh_category`, `front_img`, `back_img`) VALUES
(1, '', 0, 'Ashim', 'Khanal', 'khanalashim11@gmail.com', '12345678', 3, '', ''),
(3, 'true', 1, 'radhe', 'krishna', 'Radhakrishna@gmail.com', '12345678', 0, 'verifyimg/6605020a88eee1.20199521.jpg', 'verifyimg/6605020a88efd8.73090738.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller_verification`
--

CREATE TABLE `seller_verification` (
  `seller_v_id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `front_img` varchar(255) DEFAULT NULL,
  `back_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `verify_request` varchar(12) NOT NULL,
  `user_verify` tinyint(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `verify_request`, `user_verify`, `firstname`, `lastname`, `email`, `password`, `front_img`, `back_img`, `uid`, `destination`) VALUES
(3, 'true', 1, 'Salin', 'Khanal', 'khanalayush03@gmail.com', '12345678', 'verifyimg/65e756dfa21ec8.00613029.jpg', 'verifyimg/65e756dfa26c88.47637894.jpg', '65c6033fe360c5.86203783.jpg', 'image/65c6033fe360c5.86203783.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `booked` varchar(100) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `seller_id` int(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `vehiclename` varchar(100) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  `mileage` int(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `km` int(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating_counts` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `booked`, `fromdate`, `todate`, `seller_id`, `img`, `vehiclename`, `model`, `color`, `mileage`, `price`, `km`, `registration`, `description`, `rating_counts`) VALUES
(15, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', '', 0, 12000, 0, '', '', 1),
(16, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c39c636a6c44.93881751.jpg', 'Bike', 'Kawasaki Ninja', '', 0, 5600, 0, '', '', 1),
(17, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c3a1299f8df6.72747065.jpg', 'Bike', 'Duke-250', '', 0, 4500, 0, '', '', 0),
(18, 3, 'true', '2024-04-04', '2024-04-05', 0, 'vehicleimg/65c3a1446dba10.94365470.jpg', 'Car', 'Nano', '', 0, 5600, 0, '', '', 0),
(19, 3, 'true', '2024-04-04', '2024-04-05', 0, 'vehicleimg/65c98d833efc20.78920452.jpg', 'bhui bhui', 'bajaj', '', 0, 34, 0, '', '', 0),
(23, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65e456d45e1ca7.52186725.jpg', 'bike', 'nexon', '', 0, 1200, 0, '', '', 0),
(27, 3, 'true', '2024-04-04', '2024-04-05', 1, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycleeeee', 'Kasmic 360', 'Black', 24, 120, 12000, '', 'Cycle is in good condition and i have been using it for over a year and i weekly do maintenance.', 0),
(28, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/660512f1c38e85.82081217.jpg', 'Gadi', 'Bugatti', 'Black', 12, 45000, 34000, '8234873273', 'Experience unparalleled luxury and power with our Bugatti rental. This masterpiece of engineering combines exquisite design, advanced technology, and breathtaking performance. From its sleek lines to its meticulously crafted interior, every detail exudes ', 2),
(29, 0, '', NULL, NULL, 0, 'vehicleimg/663719cfb4c671.34828739.png', 'A', 'gt', 'Black', 12, 45000, 34000, '8234873273', 'uuuu', 0),
(30, 3, '', NULL, NULL, 1, 'vehicleimg/66372911ec1d69.22142429.jpg', 'Gadi', 'gudi', 'Black', 12, 120, 12222, '5392484', 'GOOOOd', 0),
(31, 0, '', NULL, NULL, 1, 'vehicleimg/66375a585ebbf6.09131196.png', 'Gadi3', 'gudi', 'Black', 12, 120, 12222, '5392484', 'hhhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `v_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `front_img` varchar(255) DEFAULT NULL,
  `back_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`);

ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `seller_verification`
  ADD PRIMARY KEY (`seller_v_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `verification`
  ADD PRIMARY KEY (`v_id`);

-- 
-- AUTO_INCREMENT for dumped tables
-- 

ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `seller_verification`
  MODIFY `seller_v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

ALTER TABLE `verification`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- 
-- Foreign key constraints
-- 

ALTER TABLE `bookings`
ADD CONSTRAINT `fk_bookings_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
ADD CONSTRAINT `fk_bookings_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles`(`id`);

ALTER TABLE `comment`
ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
ADD CONSTRAINT `fk_comment_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles`(`id`);

ALTER TABLE `seller_verification`
ADD CONSTRAINT `fk_seller_verification_seller` FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`);

ALTER TABLE `verification`
ADD CONSTRAINT `fk_verification_user` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
