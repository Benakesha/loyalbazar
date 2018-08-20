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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loyal_user`
--
ALTER TABLE `loyal_user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loyal_user`
--
ALTER TABLE `loyal_user`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
