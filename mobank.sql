-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 03:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobank`
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
  `id` int(11) NOT NULL,
  `UserName` varchar(100) COLLATE utf8_bin NOT NULL,
  `Name` varchar(100) COLLATE utf8_bin NOT NULL,
  `Password` varchar(100) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `ContactNo` varchar(100) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(100) COLLATE utf8_bin NOT NULL,
  `UserType` varchar(100) COLLATE utf8_bin NOT NULL,
  `Address` varchar(100) COLLATE utf8_bin NOT NULL,
  `Propic` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `Name`, `Password`, `Email`, `ContactNo`, `Gender`, `UserType`, `Address`, `Propic`) VALUES
(1, 'sadat123', 'sadat', '1234', 'sadat@mail.com', '123456789', 'male', 'manager', 'Dhaka', ''),
(2, 'sadat1234', 'sadat', '1234', 'sadat@mail.com', '123456789', 'male', 'manager', 'Dhaka', ''),
(3, 'mahin11', 'mahin', '123', 'ma@mail.com', '1122', 'Male', 'Customer', 'Pabna', '2.jpg'),
(5, 'sadik11', 'Sadaik', '1223', 'sas@maol', '123456789', 'Male', 'Employee', 'dhaka', '1.jpg'),
(7, 'sagar11', 'sagar', '1334', 'dad@adsd', '11223344', 'Male', 'Employee', 'dhaka', '2.jpg'),
(8, 'Pranto11', 'pranto', '112233', 'sas@maol', '11223345', 'Male', 'Employee', 'dhaka', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
