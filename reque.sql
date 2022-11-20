-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `request`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestor`
--

CREATE TABLE `requestor` (
  `ID` int(11) NOT NULL PRIMARY KEY,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,  
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Requirements` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `requestor` (`ID`, `Name`, `Email`,  `Address`,`Phone`, `Requirements`) VALUES
(1,'Jennifer', 'jennifer@gmail.com', 'Lincoln street','9834567701', 'money'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `requestor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestor`
--
ALTER TABLE `requestor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
