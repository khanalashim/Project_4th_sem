CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verify_request` varchar(12) NOT NULL,
  `user_verify` tinyint(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `verify_request` varchar(12) NOT NULL,
  `seller_verify` tinyint(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `veh_category` int(11) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `back_img` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `booked` varchar(100) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `vehiclename` varchar(100) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  `mileage` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `km` int(11) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating_counts` float NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `veh_name` varchar(255) DEFAULT NULL,
  `veh_price` int(11) DEFAULT NULL,
  `veh_model` varchar(255) DEFAULT NULL,
  `veh_img` varchar(255) DEFAULT NULL,
  `booked` varchar(100) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`),
  FOREIGN KEY (`veh_id`) REFERENCES `vehicles`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `vehicleid` int(11) NOT NULL,
  `vehicleimg` varchar(100) NOT NULL,
  `vehiclename` varchar(100) NOT NULL,
  `vehiclemodel` varchar(100) NOT NULL,
  `vehicleprice` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`),
  FOREIGN KEY (`vehicleid`) REFERENCES `vehicles`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`),
  FOREIGN KEY (`veh_id`) REFERENCES `vehicles`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `seller_verification` (
  `seller_v_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `front_img` varchar(255) DEFAULT NULL,
  `back_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`seller_v_id`),
  FOREIGN KEY (`seller_id`) REFERENCES `seller`(`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `verification` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `front_img` varchar(255) DEFAULT NULL,
  `back_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`v_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
