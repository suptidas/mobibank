-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message` varchar(1000) NOT NULL,
  `SendFrom` varchar(20) NOT NULL,
  `SendTo` varchar(20) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message`, `SendFrom`, `SendTo`, `Date`) VALUES
('hi', 'Nafiz', 'Sadat Ebne', 'Mon Nov 23 2020 00:48:35 GMT+0600 (Bangladesh Standard Time)'),
('hi', 'Sadat Ebne', 'Nafiz', 'Mon Nov 23 2020 00:49:18 GMT+0600 (Bangladesh Standard Time)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNO` int(11) NOT NULL,
  `NID` int(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `UserType` varchar(20) NOT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserName`, `Name`, `Password`, `Email`, `ContactNO`, `NID`, `Gender`, `UserType`, `Address`) VALUES
(2, 'Nafiz', 'Nafiz Ahamed Nahid', '1234', 'Na@gmail.com', 123456, 2123435324, 'Male', 'admin', 'Jurai,Dhaka1204'),
(3, 'Nahid', 'nafizahmednahid', '12345', 'A@gmail.com', 23423, 123, 'male', 'admin', 'Dhaka'),
(4, 'sdgsfgfdg', 'asdsdfsrsdg', '12345', 'admin@yahoo.com', 23423, 123, 'male', 'admin', 'Dhaka'),
(5, 'Sadat Ebne', 'Sadat', '1234', 's@gmail.com', 24253, 5345635, 'Male', 'manager', 'Pabna'),
(7, 'Miraz Hossain', 'Miraz', '1234', 's@gmail.com', 24253, 5345635, 'Male', 'user', 'Dhaka'),
(8, 'admin1', 'N a', '1234', 'A@gmail.com', 456456, 123, 'male', 'admin', 'Dhaka'),
(9, 'admin', 'n', '1234', 'A@gmail.com', 88, 123, 'male', 'manager', 'Dhaka'),
(10, 'a', 'w', '1234', 'A@gmail.com', 234235, 27, 'male', 'user', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
