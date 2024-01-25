-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 09:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goods`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_id` int(11) NOT NULL,
  `Category_name` varchar(50) NOT NULL,
  `Category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_id`, `Category_name`, `Category_desc`) VALUES
(8, 'Fragile Goods', 'Glassware'),
(13, 'Very Heavy Objects', 'Stones'),
(14, 'Furniture', 'Sofas and tables');

-- --------------------------------------------------------

--
-- Table structure for table `customer_requests`
--

CREATE TABLE `customer_requests` (
  `request_id` int(11) NOT NULL,
  `request_date` date NOT NULL DEFAULT current_timestamp(),
  `request_ref` varchar(50) NOT NULL,
  `request_customer_full_name` varchar(50) NOT NULL,
  `request_mobile` varchar(50) NOT NULL,
  `request_email` varchar(50) NOT NULL,
  `request_id_card` int(11) NOT NULL,
  `request_category_id` int(11) NOT NULL,
  `request_parcel_description` text NOT NULL,
  `request_Sending_station_id` int(11) NOT NULL,
  `request_receiving_station_id` int(11) NOT NULL,
  `request_user_id` int(11) NOT NULL,
  `request_departure_date` date NOT NULL,
  `request_departure_time` time NOT NULL,
  `request_estimated_arrival_date` date NOT NULL,
  `request_estimated_arrival_time` time NOT NULL,
  `request_receiver_full_name` varchar(50) NOT NULL,
  `request_receiver_mobile` varchar(50) NOT NULL,
  `request_receiver_email` varchar(50) NOT NULL,
  `request_receiver_id_card` int(11) NOT NULL,
  `request_status` varchar(50) NOT NULL DEFAULT 'PENDING PAYMENT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_requests`
--

INSERT INTO `customer_requests` (`request_id`, `request_date`, `request_ref`, `request_customer_full_name`, `request_mobile`, `request_email`, `request_id_card`, `request_category_id`, `request_parcel_description`, `request_Sending_station_id`, `request_receiving_station_id`, `request_user_id`, `request_departure_date`, `request_departure_time`, `request_estimated_arrival_date`, `request_estimated_arrival_time`, `request_receiver_full_name`, `request_receiver_mobile`, `request_receiver_email`, `request_receiver_id_card`, `request_status`) VALUES
(3, '2022-03-28', '3565647f', 'Tom Mboya', '2345678098', 'tom@gmail.com', 76532134, 14, 'Sofas', 2, 2, 3, '2022-03-29', '03:53:00', '2022-03-30', '00:50:00', 'Margaret Njeri', '0787186662', 'njeri@yahoo.com', 2147483647, 'IN TRANSIT');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `Dispatch_id` int(11) NOT NULL,
  `Dispatch_date` date NOT NULL,
  `Dispatch_time` time NOT NULL,
  `Dispatch_Driver_id` int(11) NOT NULL,
  `Dispatch_Vehicle_id` int(11) NOT NULL,
  `Dispatch_request_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`Dispatch_id`, `Dispatch_date`, `Dispatch_time`, `Dispatch_Driver_id`, `Dispatch_Vehicle_id`, `Dispatch_request_id`) VALUES
(3, '2022-03-29', '12:55:00', 5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Driver_id` int(11) NOT NULL,
  `Driver_full_name` varchar(50) NOT NULL,
  `Driver_mobile` varchar(50) NOT NULL,
  `Driver_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Driver_id`, `Driver_full_name`, `Driver_mobile`, `Driver_email`) VALUES
(2, 'John Cena', '3456789', 'cena@gmail.com'),
(3, 'Randy Orton', '234567', 'orton@gmail.com'),
(4, 'Harry Kane', '876543', 'kane@gmail.com'),
(5, 'Joshua Kimmch', '6368468', 'joshua@gmail.com'),
(6, 'Sadio Mane', '772553', 'mane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_id` int(11) NOT NULL,
  `Login_username` varchar(50) NOT NULL,
  `Login_password` varchar(50) NOT NULL,
  `Login_rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `Login_username`, `Login_password`, `Login_rank`) VALUES
(2, 'jstones', '1a1dc91c907325c69271ddf0c944bc72', 1),
(4, 'susan', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Payment_mode` varchar(20) NOT NULL,
  `Payment_ref` varchar(50) NOT NULL,
  `Payment_amount` int(11) NOT NULL,
  `Payment_request_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Payment_mode`, `Payment_ref`, `Payment_amount`, `Payment_request_id`) VALUES
(4, 'MPESA', 'Y7764E3W5R', 3000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Station_id` int(11) NOT NULL,
  `Station_name` varchar(50) NOT NULL,
  `Station_desc` text NOT NULL,
  `Station_contact_person` varchar(50) NOT NULL,
  `Station_mobile` varchar(50) NOT NULL,
  `Station_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station_id`, `Station_name`, `Station_desc`, `Station_contact_person`, `Station_mobile`, `Station_email`) VALUES
(2, 'Thika Road', 'Along thika road', 'Timmy Tdat', '234567890', 'joshua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `User_full_name` varchar(50) NOT NULL,
  `User_mobile` varchar(50) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_Login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `User_full_name`, `User_mobile`, `User_email`, `User_Login_id`) VALUES
(1, 'John Stones', '2345678', 'jstones@gmail.com', 2),
(3, 'Susan Test', '123456789', 'susan@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_id` int(11) NOT NULL,
  `Vehicle_reg_no` varchar(20) NOT NULL,
  `Vehicle_color` varchar(20) NOT NULL,
  `Vehicle_Capacity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Vehicle_id`, `Vehicle_reg_no`, `Vehicle_color`, `Vehicle_Capacity`) VALUES
(2, 'KEG BLA7', 'black', '15 tonnes'),
(3, 'KDB 99U7', 'Blue', '15 tonnes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `customer_requests`
--
ALTER TABLE `customer_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `request_category_id` (`request_category_id`),
  ADD KEY `request_receiving_station_id` (`request_receiving_station_id`),
  ADD KEY `request_Sending_station_id` (`request_Sending_station_id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`Dispatch_id`),
  ADD KEY `Dispatch_Driver_id` (`Dispatch_Driver_id`),
  ADD KEY `Dispatch_Vehicle_id` (`Dispatch_Vehicle_id`),
  ADD KEY `Dispatch_request_id` (`Dispatch_request_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `Payment_request_id` (`Payment_request_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`Station_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `User_Login_id` (`User_Login_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_requests`
--
ALTER TABLE `customer_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `Dispatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `Station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `Vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_requests`
--
ALTER TABLE `customer_requests`
  ADD CONSTRAINT `customer_requests_ibfk_1` FOREIGN KEY (`request_category_id`) REFERENCES `categories` (`Category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_requests_ibfk_2` FOREIGN KEY (`request_receiving_station_id`) REFERENCES `station` (`Station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_requests_ibfk_3` FOREIGN KEY (`request_Sending_station_id`) REFERENCES `station` (`Station_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD CONSTRAINT `dispatch_ibfk_1` FOREIGN KEY (`Dispatch_Driver_id`) REFERENCES `driver` (`Driver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dispatch_ibfk_2` FOREIGN KEY (`Dispatch_Vehicle_id`) REFERENCES `vehicle` (`Vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dispatch_ibfk_3` FOREIGN KEY (`Dispatch_request_id`) REFERENCES `customer_requests` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Payment_request_id`) REFERENCES `customer_requests` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`User_Login_id`) REFERENCES `login` (`Login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
