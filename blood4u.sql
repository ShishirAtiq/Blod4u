-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 05:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepte_d`
--

CREATE TABLE `accepte_d` (
  `Ac_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `Ac_u_id` int(11) DEFAULT NULL,
  `do_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accepte_d`
--

INSERT INTO `accepte_d` (`Ac_id`, `req_id`, `Ac_u_id`, `do_date`) VALUES
(4, 5, 1, '2022-09-19'),
(5, 6, 1, '2022-09-19'),
(6, 3, 11, '2022-09-19'),
(7, 9, 2, '2022-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `blood_g` varchar(5) NOT NULL,
  `area` varchar(100) NOT NULL,
  `number_bag` int(11) NOT NULL,
  `need_date` date NOT NULL,
  `collected_bag` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `blood_g`, `area`, `number_bag`, `need_date`, `collected_bag`, `user_id`) VALUES
(1, 'A+', 'Dhanmondi', 2, '2022-08-30', 0, 1),
(2, 'B-', 'Mirpur', 1, '2022-08-30', 0, 6),
(3, 'A+', 'Mirpur', 1, '2022-09-22', 1, 1),
(4, 'a+', 'Mirpur', 2, '2022-09-20', 0, 14),
(5, 'A+', 'Mirpur', 2, '2022-09-21', 1, 14),
(6, 'A+', 'Mirpur', 2, '2022-09-23', 1, 14),
(7, 'a+', 'Mirpur', 2, '2022-09-23', 0, 1),
(8, 'a+', 'mirpur', 1, '2022-09-19', 0, 14),
(9, 'B+', 'Dhanmondi', 2, '2022-09-21', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `User_name`, `Email`, `Password`) VALUES
(1, 'a1', 'a@gmail.com', '1234'),
(2, 'b2', 'b@gmail.com', '1123'),
(3, 'c3', 'c@gmail.com', '1223'),
(4, 'd4', 'd@gmail.com', '1233'),
(5, 'e5', 'e@gmail.com', '1433'),
(6, 'f6', 'f@gmail.com', '1534'),
(7, 'g7', 'g@gmail.com', '4356'),
(8, 'h8', 'h@gmail.com', '6354'),
(9, 'i9', 'i@gmail.com', '6546'),
(10, 'j10', 'j@gmail.com', '5364'),
(11, 'as', 'sad@gmail.c', '00000'),
(12, 'ttisha', 't@gmail.com', '112233'),
(13, 'sadik', 'sadik@gmail.com', '12345'),
(14, 'ta', 'ta@gmail.com', '1111'),
(15, 'masud', 'ma@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `blood_g` varchar(5) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `last_donation` date DEFAULT NULL,
  `donation_area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `user_id`, `address`, `blood_g`, `contact_no`, `last_donation`, `donation_area`) VALUES
(1, 'a', '1', 1, 'Mirpur', 'A+', '01245353525', '2022-06-19', 'Mirpur'),
(2, 'b', '2', 2, 'Dhanmondi', 'B+', '0174444444', '2022-09-19', 'Dhanmondi'),
(3, 'c', '3', 3, 'Dhanmondi', 'A-', '01735333333', '2022-08-05', 'Notunbazar'),
(4, 'd', '4', 4, 'Notunbazar', 'B+', '01322333333', '2022-08-03', 'Notunbazar'),
(5, 'e', '5', 5, 'Jigatola', 'B+', '01927999999', '2022-08-02', 'Jigatola'),
(6, 'f', '6', 6, 'Hazaribag', 'A+', '0160000000', '2022-09-01', 'Hazaribag'),
(7, 'g', '7', 7, 'Basabo', 'O+', '01976767888', '2022-08-10', 'Basabo'),
(8, 'h', '8', 8, 'Azimpur', 'A-', '0169834593', '2022-05-07', 'Dhanmondi'),
(9, 'i', '9', 9, 'Malibag', 'A+', '01946738107', '2022-10-06', 'Basabo'),
(10, 'j', '10', 10, 'Uttara', 'B-', '01638293793', '2022-10-12', 'Uttara'),
(11, 'sad', 'aa', 11, 'Mirpur', 'A+', '00000000000', '2022-09-19', 'Mirpur'),
(12, 'tisha', 'tasnia', 12, 'Jigatola', 'B+', '11111111111', '2022-05-11', 'Jigatola'),
(13, 'sadik', 'topu', 13, 'Mirpur', 'a+', '00000000000', '2022-07-05', 'Mirpur'),
(14, 'TT', 'aa', 14, 'Bogura', 'A+', '00000000001', '2022-08-22', 'Bogura'),
(15, 'masud', 'bhuiyan', 15, 'adnjkdf', 'B+', '123456', '2022-09-13', 'mirpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepte_d`
--
ALTER TABLE `accepte_d`
  ADD PRIMARY KEY (`Ac_id`),
  ADD KEY `req_id` (`req_id`),
  ADD KEY `Ac_u_id` (`Ac_u_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_name` (`User_name`,`Email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepte_d`
--
ALTER TABLE `accepte_d`
  MODIFY `Ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accepte_d`
--
ALTER TABLE `accepte_d`
  ADD CONSTRAINT `accepte_d_ibfk_1` FOREIGN KEY (`req_id`) REFERENCES `request` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accepte_d_ibfk_2` FOREIGN KEY (`Ac_u_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
