-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 06:38 PM
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
-- Database: `transportation_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@123\r\n', 'admin', 'admin123'),

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fare` int(255) NOT NULL,
  `other` int(255) NOT NULL,
  `fuel` int(255) NOT NULL,
  `tcost` int(255) NOT NULL,
  `total_km` decimal(10,2) NOT NULL,
  `fuel_cost` decimal(10,2) NOT NULL,
  `extra_cost` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `id`, `username`, `fare`, `other`, `fuel`, `tcost`, `total_km`, `fuel_cost`, `extra_cost`, `total_cost`) VALUES
(1, '15', 'ronak', 1000, 0, 1500, 2500, 0.00, 0.00, 0.00, 2500.00),
(5, '', '', 0, 0, 0, 0, 0.00, 0.00, 0.00, 0.00),
(9, '', 'user1', 0, 0, 0, 0, 0.00, 0.00, 0.00, 0.00),
(10, '', 'user1', 0, 0, 0, 0, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pic_date` varchar(100) NOT NULL,
  `pic_time` varchar(100) NOT NULL,
  `dil_date` varchar(100) NOT NULL,
  `dil_time` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `veh_reg` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `pic_date`, `pic_time`, `dil_date`, `dil_time`, `destination`, `pickup_point`, `description`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`, `paid`) VALUES
(10, 'user1', 'user1', '2024-06-26', '01:56', '2024-06-28', '15:00', 'Surat', 'DELHI', 'safe delivery please', 'user1@gmail.com', 985463127, 1, 'GJ-36-Z-0001', 24, 1, 1),

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `seats_selected` varchar(255) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `departure_city` varchar(255) NOT NULL,
  `arrival_city` varchar(255) NOT NULL,
  `departing_date` date NOT NULL,
  `returning_date` date DEFAULT NULL,
  `bus_type` varchar(50) NOT NULL,
  `total_passengers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `bus_id`, `seats_selected`, `booking_date`, `departure_city`, `arrival_city`, `departing_date`, `returning_date`, `bus_type`, `total_passengers`) VALUES
(53, 34, 'A1,A2,B1,B2', '2024-06-24 16:05:56', '', '', '0000-00-00', NULL, '', 0),
(54, 34, 'A1,B1,C1', '2024-06-24 18:38:53', '', '', '0000-00-00', NULL, '', 0),
(55, 34, 'B2,D3', '2024-06-26 04:55:55', '', '', '0000-00-00', NULL, '', 0),
(56, 34, 'B2,D1', '2024-06-26 06:55:24', '', '', '0000-00-00', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus_id` int(11) NOT NULL,
  `bus_name` text NOT NULL,
  `departure_city` varchar(100) NOT NULL,
  `arrival_city` varchar(100) NOT NULL,
  `departing_date` varchar(255) NOT NULL,
  `returning_date` varchar(255) DEFAULT NULL,
  `schedule_type` enum('daily','custom') NOT NULL,
  `bus_type` varchar(50) NOT NULL,
  `seats_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_id`, `bus_name`, `departure_city`, `arrival_city`, `departing_date`, `returning_date`, `schedule_type`, `bus_type`, `seats_available`) VALUES
(1, '', 'New York', 'Boston', '2024-07-01', '2024-07-05', 'daily', 'Standard', 50),
(2, '', 'Los Angeles', 'San Francisco', '2024-07-02', NULL, 'daily', 'Deluxe', 40),
(3, '', 'Chicago', 'Detroit', '2024-07-03', NULL, 'daily', 'Luxury', 30),
(4, '', 'Houston', 'Dallas', '2024-07-04', '2024-07-06', 'daily', 'Standard', 60),
(5, '', 'Ahmedabad', 'Surat', '2024-07-01', '2024-07-05', 'daily', 'Standard', 50),
(6, '', 'Vadodara', 'Rajkot', '2024-07-02', NULL, 'daily', 'Deluxe', 40),
(7, '', 'Surat', 'Bhavnagar', '2024-07-03', NULL, 'daily', 'Luxury', 30),
(8, '', 'Rajkot', 'Jamnagar', '2024-07-04', '2024-07-06', 'daily', 'Standard', 60),
(9, '', 'Gandhinagar', 'Junagadh', '2024-07-05', '2024-07-09', 'daily', 'Standard', 45),
(10, '', 'Surat', 'Vadodara', '2024-07-06', NULL, 'daily', 'Deluxe', 50),
(11, '', 'Bhavnagar', 'Ahmedabad', '2024-07-07', NULL, 'daily', 'Luxury', 35),
(12, '', 'Jamnagar', 'Rajkot', '2024-07-08', '2024-07-12', 'daily', 'Standard', 55),
(13, '', 'Junagadh', 'Gandhinagar', '2024-07-09', NULL, 'daily', 'Deluxe', 50),
(14, '', 'Ahmedabad', 'Bhavnagar', '2024-07-10', '2024-07-14', 'daily', 'Luxury', 40),
(15, '', 'Surat', 'Jamnagar', '2024-07-11', NULL, 'daily', 'Standard', 45),
(16, '', 'Vadodara', 'Junagadh', '2024-07-12', '2024-07-16', 'daily', 'Deluxe', 50),
(17, '', 'Rajkot', 'Gandhinagar', '2024-07-13', NULL, 'daily', 'Luxury', 30),
(18, '', 'Bhavnagar', 'Surat', '2024-07-14', '2024-07-18', 'daily', 'Standard', 55),
(19, '', 'Jamnagar', 'Ahmedabad', '2024-07-15', NULL, 'daily', 'Deluxe', 50),
(20, '', 'Junagadh', 'Vadodara', '2024-07-16', '2024-07-20', 'daily', 'Luxury', 35),
(21, '', 'Gandhinagar', 'Rajkot', '2024-07-17', NULL, 'daily', 'Standard', 60),
(22, '', 'Ahmedabad', 'Junagadh', '2024-07-18', '2024-07-22', 'daily', 'Deluxe', 50),
(23, '', 'Surat', 'Gandhinagar', '2024-07-19', NULL, 'daily', 'Luxury', 40),
(24, '', 'Vadodara', 'Surat', '2024-07-20', '2024-07-24', 'daily', 'Standard', 55),
(34, 'yogi', 'surat', 'Bhavnagar', '2024-06-30', '', 'daily', 'Standard', 31);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(11) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `drjoin` varchar(255) NOT NULL,
  `drmobile` varchar(20) NOT NULL,
  `drid` varchar(30) NOT NULL,
  `drlicense` varchar(30) NOT NULL,
  `drlicensevalid` varchar(100) NOT NULL,
  `draddress` varchar(255) NOT NULL,
  `drphoto` varchar(30) NOT NULL,
  `dr_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drname`, `drjoin`, `drmobile`, `drid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`, `dr_available`) VALUES
(22, 'Jay', '03/02/2022', '9515001613', '', 'Gj785k48845', '03/03/2030', ' Rajkot,Gujarat-363641', 'Driver1.jpg', 0),
(23, 'Manish', '03/01/2022', '949549466', '', 'Gj785k48859', '03/01/2032', ' Jasdan,Rajkot,Gujarat', 'Driver2.jpg', 1),
(24, 'Yash', '03/03/2022', '4116169999', '', 'Gj785k48899', '03/03/2035', 'Rajkot-Gujarat ', 'Driver3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logibookings`
--

CREATE TABLE `logibookings` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `pickup_add` text NOT NULL,
  `receiver_add` text NOT NULL,
  `goods_description` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `transport_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logibookings`
--

INSERT INTO `logibookings` (`id`, `sender_name`, `receiver_name`, `pickup_add`, `receiver_add`, `goods_description`, `status`, `transport_date`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiry` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `train_number` varchar(50) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `departure_station` varchar(100) NOT NULL,
  `arrival_station` varchar(100) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `duration` time NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `departure_date` date NOT NULL,
  `travel_class` enum('Economy class','Business class','First class') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `train_number`, `train_name`, `departure_station`, `arrival_station`, `departure_time`, `arrival_time`, `duration`, `price`, `departure_date`, `travel_class`) VALUES
(1, '101', 'Express A', 'Station A', 'Station B', '08:00:00', '10:00:00', '02:00:00', 50.00, '2024-07-01', 'Economy class'),
(2, '102', 'Express B', 'Station A', 'Station B', '09:00:00', '11:30:00', '02:30:00', 55.00, '2024-07-01', 'Business class'),
(3, '103', 'Express C', 'Station A', 'Station C', '07:30:00', '09:30:00', '02:00:00', 60.00, '2024-07-01', 'First class'),
(4, '104', 'Express D', 'Station B', 'Station C', '10:00:00', '12:00:00', '02:00:00', 50.00, '2024-07-01', 'Economy class'),
(5, '105', 'Express E', 'Station B', 'Station D', '11:00:00', '13:00:00', '02:00:00', 70.00, '2024-07-01', 'Business class');

-- --------------------------------------------------------

--
-- Table structure for table `tripcost`
--

CREATE TABLE `tripcost` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `total_km` varchar(11) NOT NULL,
  `fuel_cost` varchar(11) NOT NULL,
  `extra_cost` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tripcost`
--

INSERT INTO `tripcost` (`id`, `booking_id`, `username`, `total_km`, `fuel_cost`, `extra_cost`, `total_cost`, `paid`) VALUES
(1, '1', 'ronak', '1000', '1000', '1000', '10000', 1),
(0, '5', '', '200', '1000', '300', '1500', 1),
(0, '9', 'user1', '200', '1000', '300', '1500', 1),
(0, '10', 'user1', '200', '1000', '300', '1500', 1),
(0, '11', 'user1', '345', '4000', '2000', '6000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(28, 'test', 'test@gmail.com', '$2y$10$aX0cOqBq2XINrtKlY1uuaOWD.E.Snm/UW60kWELSmQTfjSlQsv46O', 'user'),
(29, 'user', 'user@gmail.com', '$2y$10$k8l92.Yq4Wtp8Q3vPsmuXOoQcIm3vg7zIRDG4dj05xlI3nCsFT8ty', 'user'),
(30, 'user1', 'user1@gmail.com', '$2y$10$FcEee7duy.93o8dXi5JJFepE3lBWgunXv8s0GF/l8gjYfR7DOn6rW', 'user'),
(33, 'viral', 'viral@gmail.com', '$2y$10$iEs1ySB4uh4XrJr4/zM7DOnmKappq/ZeCtuKOHMFa5ADR.QzOpd/q', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_reg` varchar(100) NOT NULL,
  `veh_type` varchar(20) NOT NULL,
  `chesisno` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `veh_color` varchar(100) NOT NULL,
  `veh_regdate` varchar(100) NOT NULL,
  `veh_description` varchar(255) NOT NULL,
  `veh_photo` varchar(255) NOT NULL,
  `veh_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`, `veh_available`) VALUES
(36, 'GJ-36-Z-0001', '', '94198979799', 'TATA', 'White', '03/01/2022', ' Container', '1.jpg', 0),
(37, 'GJ-36-Z-0002', '', '94198979710', 'TATA', 'Green', '03/14/2022', '10 ton Capacity', '2.jpg', 1),
(38, 'GJ-36-Z-0003', '', '94198979488', 'Asok Layland', 'Grey', '03/07/2022', ' 20 ton Capacity', '3.jpg', 0),
(62, 'GJ 05 XY 9999', '', '78777777878', 'ashok', 'red', '2024-06-06', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_bookings`
--

CREATE TABLE `vehicle_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `dropoff_point` varchar(100) NOT NULL,
  `estimated_days` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_bookings`
--

INSERT INTO `vehicle_bookings` (`id`, `user_id`, `vehicle_id`, `pickup_point`, `dropoff_point`, `estimated_days`, `booking_date`) VALUES
(1, 30, 1, 'surat', 'amdavad', 1, '2024-06-23 07:52:33'),
(2, 30, 1, 'surat', 'amdavad', 1, '2024-06-23 08:00:56'),
(3, 30, 1, 'surat', 'amdavad', 1, '2024-06-23 08:14:21'),
(4, 30, 1, 'surat', 'amdavad', 1, '2024-06-23 08:16:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `logibookings`
--
ALTER TABLE `logibookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`);

--
-- Indexes for table `vehicle_bookings`
--
ALTER TABLE `vehicle_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `logibookings`
--
ALTER TABLE `logibookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `vehicle_bookings`
--
ALTER TABLE `vehicle_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`bus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
