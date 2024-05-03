-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 06:57 AM
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
(25, 12, 0, 18, 'Car', 5600, 'Nano', 'vehicleimg/65c3a1446dba10.94365470.jpg', '', NULL, NULL);

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
(14, 3, 0, 'p', '2024-03-06', '2024-03-09', 'salin Khanal', 'khanalayush030@gmail.com', '9745728040', 16, 'vehicleimg/65c39c636a6c44.93881751.jpg', 'Bike', 'Kawasaki Ninja', 5600),
(17, 3, 0, 'f', '2024-03-17', '2024-03-29', 'Salin Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120),
(19, 3, 1, 'p', '2024-03-18', '2024-03-27', 'Salin Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120),
(20, 3, 0, 'f', '2024-03-29', '2024-04-01', 'blog op', 'helloworld@gmail.com', '4123456799', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', 1200),
(21, 3, 0, 'f', '2024-03-30', '2024-04-03', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', 1200),
(22, 3, 0, 'f', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c3a1446dba10.94365470.jpg', 'Car', 'Nano', 5600),
(23, 3, 0, 'f', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65c98d833efc20.78920452.jpg', 'bhui bhui', 'bajaj', 34),
(24, 3, 1, 'p', '2024-04-04', '2024-04-05', 'Aayush D. Khanal', 'khanalashim11@gmail.com', '+9779821115194', 0, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 120);

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
(1, 'hi'),
(2, 'k xa mitra'),
(3, 'mero ta thikxai xa kere'),
(4, 'sala k xa'),
(5, 'thikxa yll'),
(6, 'hora'),
(7, 'eh'),
(8, 'ani bro'),
(9, 'hjr'),
(10, '3'),
(11, '3 2 ja'),
(12, '6'),
(13, 'thikxa'),
(14, 'ok xa'),
(15, 'k xa');

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
(2, 'true', 0, 'Blog', 'Poss', 'helloworld@gmail.com', '12345678', '', '', '65b4b83112dda8.52048774.jpg', 'image/65b4b83112dda8.52048774.jpg'),
(3, 'true', 1, 'Salin', 'Khanal', 'khanalayush030@gmail.com', '12345678', 'verifyimg/65e756dfa21ec8.00613029.jpg', 'verifyimg/65e756dfa26c88.47637894.jpg', '65c6033fe360c5.86203783.jpg', 'image/65c6033fe360c5.86203783.jpg'),
(5, '', 0, 'amit', 'neupane', 'amit@gmail.com', '12345678', '', '', '', ''),
(7, '', 0, 'Ashim', 'khanal', 'ashim@gmail.com', '12345678', '', '', '', '');

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
(15, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c39c45b473b5.54052379.jpg', 'Cycle', 'kasmic', '', 0, 1200, 0, '', '', 0),
(16, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c39c636a6c44.93881751.jpg', 'Bike', 'Kawasaki Ninja', '', 0, 5600, 0, '', '', 0),
(17, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65c3a1299f8df6.72747065.jpg', 'Bike', 'Duke-250', '', 0, 4500, 0, '', '', 0),
(18, 3, 'true', '2024-04-04', '2024-04-05', 0, 'vehicleimg/65c3a1446dba10.94365470.jpg', 'Car', 'Nano', '', 0, 5600, 0, '', '', 0),
(19, 3, 'true', '2024-04-04', '2024-04-05', 0, 'vehicleimg/65c98d833efc20.78920452.jpg', 'bhui bhui', 'bajaj', '', 0, 34, 0, '', '', 0),
(23, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/65e456d45e1ca7.52186725.jpg', 'bike', 'nexon', '', 0, 1200, 0, '', '', 0),
(27, 3, 'true', '2024-04-04', '2024-04-05', 1, 'vehicleimg/65f6c70a990301.20599673.jpg', 'Cycle', 'Kasmic 360', 'Black', 24, 120, 12000, '', 'Cycle is in good condition and i have been using it for over a year and i weekly do maintenance.', 0),
(28, 0, '', '0000-00-00', '0000-00-00', 0, 'vehicleimg/660512f1c38e85.82081217.jpg', 'Gadi', 'Bugatti', 'Black', 12, 45000, 34000, '8234873273', 'Experience unparalleled luxury and power with our Bugatti rental. This masterpiece of engineering combines exquisite design, advanced technology, and breathtaking performance. From its sleek lines to its meticulously crafted interior, every detail exudes ', 0);

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
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`v_id`, `user_id`, `front_img`, `back_img`) VALUES
(4, 2, 'verifyimg/65e716f15ec1c5.29577755.jpg', 'verifyimg/65e716f15ec2b4.87010807.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `seller_verification`
--
ALTER TABLE `seller_verification`
  ADD PRIMARY KEY (`seller_v_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_verification`
--
ALTER TABLE `seller_verification`
  MODIFY `seller_v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
