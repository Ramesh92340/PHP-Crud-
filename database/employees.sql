-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krify`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(555) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `mobile_no`, `address`, `email`, `password`) VALUES
(9, 'therissa', '   75656565656', 'kkd', 'rameshpilli1428@gmail.com', '  2626262'),
(13, 'asd', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshrathod92340@gmail.com', '  '),
(15, 'asd', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' ddhygynjdytj '),
(16, 'asd', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' ddhygynjdytj '),
(17, 'hh', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' ugytfun '),
(18, 'nagesh', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' .,mn,k '),
(19, 'nagesh', '75656565656', '', 'rameshpilli1428@gmail.com', '  '),
(20, 'nagesh', '75656565656', '', 'rameshpilli1428@gmail.com', '  '),
(24, '', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' 123123 '),
(25, '', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' 123123 '),
(26, '', '75656565656', '1-313/3, rajeev-nager-4, Rayadupalem,(Kakinada) 533005', 'rameshpilli1428@gmail.com', ' 456456 '),
(27, '', '434', 'etwagg tb terhstrhsr srthbtrb', 'wefew@gmail.com', ' 3434 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
