-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 11:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prn_no` bigint(20) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `class` varchar(25) NOT NULL,
  `batch` varchar(25) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `email`, `password`, `name`, `prn_no`, `college`, `year`, `branch`, `class`, `batch`, `roll_no`, `aadhar`, `pan`, `user_created_at`, `last_login`) VALUES
(4, 'b@gmail.com', '$2y$10$9iXOoyu78xw/by2mJhktBegvfDww49Up3BbJPVU9PDs', 'b', 8542, 'test', 'BE', 'IT', 'B1', 'B12', 0, 741085209630, 'PKLJY7890T', '2023-06-21 10:45:25', NULL),
(5, 'c@gmail.com', '$2y$10$.i2ee9YG.pWVSFHlM0yoKe4dQvjIZ8fP68/aO7jZIC5', 'c', 41, 'test', 'BE', 'IT', 'B1', 'B12', 98, 741085209630, 'PKLJY7890T', '2023-06-21 11:01:08', NULL),
(6, 'd@gmail.com', '$2y$10$HQ96t7DdbIqQLTCkj2L5neYQeY7QEjwm11HBfPc3047', 'd', 9223372036854775807, 'test', 'BE', 'IT', 'B1', 'B12', 99, 741085209630, 'PKLJY7890T', '2023-06-21 11:31:00', NULL),
(7, 'ramesh@gmail.com', '$2y$10$1ob2Eg4dBTiyKM9y/fZ/uOUEL2le1eRbgfYRqwPGCh7e.1L7DOAhq', 'ramesh', 9223372036854775807, 'test', 'BE', 'IT', 'B1', 'B12', 99, 741085209630, 'PKLJY7890T', '2023-06-21 11:33:41', NULL),
(8, 'ckc@gmail.com', '$2y$10$LTJM.PzW0WncaSDOppZCuelp4wTpPb0ZrJaWbWJ94SX2wzs90OzNK', 'check', 9223372036854775806, 'test1', 'TE', 'CSE', 'C1', 'C12', 98, 641085209634, '9410852096', '2023-06-22 05:54:14', '2023-06-28 09:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
