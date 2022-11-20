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
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Donation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`ID`, `Name`, `Email`, `Phone`, `Address`, `Donation`) VALUES
(1, 'veekshith', 'rajveekshith@gmail.com', '2147483647', 'viruh', 'on'),
(2, 'snehith', 's@gmail.com', '1342352', 'viruh', 'on'),
(3, 'veekshith', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(4, 'veekshith', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(5, 'veekshith', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(6, 'veekshith', 'rajveekshith@gmail.com', '2147483647', 'viruh', 'money'),
(7, 'veekshith', 'rajveekshith@gmail.com', '1342352', 'viruh', 'on'),
(8, 'veekshith', 's@gmail.com', '1342352', 'viruh', 'on'),
(9, 'veekshith', 'rajveekshith@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(10, 'veekshith', 'rajveekshith@gmail.com', '1342352', 'gsvckc', 'on'),
(11, 'asd', 's@gmail.com', '2147483647', 'viruh', 'money'),
(12, 'snehith', 's@gmail.com', '2147483647', 'ghdsj', 'money'),
(13, 'veekshith', 'rajveekshith@gmail.com', '2147483647', 'viruh', 'on'),
(14, 'asd', 'rajveekshith@gmail.com', '2147483647', 'viruh', 'on'),
(15, 'veekshith', 'rajveekshith@gmail.com', '2147483647', 'viruh', 'money'),
(16, 'vee', 'jhd@gmail.com', '2147483647', 'bfisd', 'on'),
(17, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(18, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(19, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'money'),
(20, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(21, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'on'),
(22, 'veekshith', 'rajveekshith@gmail.com', '99999', 'viruh', 'Food'),
(23, 'veekshith', 'snehith1233@gmail.com', '2147483647', 'jnjbbzvxcg', 'Food'),
(24, 'veekshith', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'Food'),
(25, 'asd', 's@gmail.com', '1342352', 'jnjbbzvxcg', 'Food'),
(26, 'gerard', 'ge@email.com', '2147483647', 'GVCKZHC', 'money'),
(27, 'asd', 's@gmail.com', '1342352', 'jnjbbzvxcg', 'money'),
(28, 'asd', 's@gmail.com', '2147483647', 'gsvckc', 'clothes'),
(29, 'snehith', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'money'),
(30, 'asd', 's@gmail.com', '2147483647', 'jnjbbzvxcg', 'money'),
(31, 'asd', 'rajveekshith@gmail.com', '8310940383', 'gsvckc', 'clothes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
