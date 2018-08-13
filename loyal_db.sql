-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 06:54 AM
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
-- Table structure for table `loyal_client_db`
--

CREATE TABLE `loyal_client_db` (
  `ID` int(30) NOT NULL,
  `ClientName` varchar(100) DEFAULT NULL,
  `noTreayRecieved` int(30) DEFAULT NULL,
  `TreaySentDate` varchar(100) NOT NULL,
  `CompanyID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyal_client_db`
--

INSERT INTO `loyal_client_db` (`ID`, `ClientName`, `noTreayRecieved`, `TreaySentDate`, `CompanyID`) VALUES
(65, 'Dominos', 5000, '2018-08-06 11:11:01 AM', 1),
(66, 'Dominos', 1000, '2018-08-06 11:13:06 AM', 1),
(67, 'Pizza hut', 44, '2018-08-06 10:16:17 AM', 1),
(68, 'swiggy', 3000, '2018-08-06 10:17:16 AM', 2),
(78, 'Pizza hut', 3553, '2018-08-06 10:40:37 AM', 1),
(79, 'zomatoo', 553, '2018-08-06 10:42:03 AM', 10),
(80, 'Dominos', 40, '2018-08-07 10:08:30 AM', 1),
(81, 'swiggy', 200, '2018-08-07 10:11:03 AM', 2),
(82, 'Dominos', 500, '2018-08-07 11:10:52 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loyal_user`
--

CREATE TABLE `loyal_user` (
  `UserID` int(30) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `IsUserLoggedIn` tinyint(5) DEFAULT NULL,
  `LastActivityDate` varchar(100) DEFAULT NULL,
  `CompanyID` int(30) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `noOfTreay` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyal_user`
--

INSERT INTO `loyal_user` (`UserID`, `UserName`, `Email_Id`, `Password`, `IsUserLoggedIn`, `LastActivityDate`, `CompanyID`, `role`, `noOfTreay`) VALUES
(1, 'admin', 'benakeshnagaraj@gmail.com', '123123', 0, '0', 1, 'adminuser', 19460),
(2, 'Dominos', 'benakeshnagaraj@gmail.com', 'd123', 0, '0', 1, 'normaluser', 27453),
(10, 'Pizza hut', 'benakeshnagaraj@gmail.com', 'p123', 0, '0', 1, 'normaluser', 3000),
(11, 'swiggy', 'benakeshnagaraj@gmail.com', 's123', 0, '0', 2, 'normaluser', 200),
(12, 'zomatoo', 'benakeshnagaraj@gmail.com', 'z123', 0, '0', 10, 'normaluser', 553);

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
-- Indexes for table `loyal_client_db`
--
ALTER TABLE `loyal_client_db`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loyal_user`
--
ALTER TABLE `loyal_user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

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
-- AUTO_INCREMENT for table `loyal_client_db`
--
ALTER TABLE `loyal_client_db`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `loyal_user`
--
ALTER TABLE `loyal_user`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loyal_user_client`
--
ALTER TABLE `loyal_user_client`
  MODIFY `client_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
