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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loyal_client_db`
--
ALTER TABLE `loyal_client_db`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loyal_client_db`
--
ALTER TABLE `loyal_client_db`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
