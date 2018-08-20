-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 07:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `loyal_user_client`
--

CREATE TABLE `loyal_user_client` (
  `client_id` int(30) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `client_email_id` varchar(100) NOT NULL,
  `client_password` varchar(100) DEFAULT NULL,
  `client_confirm_password` varchar(100) DEFAULT NULL,
  `client_type` varchar(50) DEFAULT NULL,
  `client_admin_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyal_user_client`
--

INSERT INTO `loyal_user_client` (`client_id`, `client_name`, `client_email_id`, `client_password`, `client_confirm_password`, `client_type`, `client_admin_id`) VALUES
(1, 'Dominos', 'benakeshnagaraj@gmail.com', 'd123', 'd123', 'normaluser', 1),
(25, 'Pizza hut', 'benakeshnagaraj@gmail.com', 'p123', 'p123', 'normaluser', 1),
(28, 'swiggy', 'benakeshnagaraj@gmail.com', 's123', 's123', 'normaluser', 2),
(30, 'zomatoo', 'benakeshnagaraj@gmail.com', 'z123', 'z123', 'normaluser', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loyal_user_client`
--
ALTER TABLE `loyal_user_client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_name` (`client_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loyal_user_client`
--
ALTER TABLE `loyal_user_client`
  MODIFY `client_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
