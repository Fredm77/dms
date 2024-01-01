-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 05:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marks`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `scid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `mathematics` varchar(10) DEFAULT NULL,
  `sport` varchar(10) DEFAULT NULL,
  `discipline` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`scid`, `sid`, `mathematics`, `sport`, `discipline`) VALUES
(2, 10, '98', '97', '97'),
(5, 36, '97', '77', '78'),
(6, 37, '97', '87', '90'),
(7, 38, '76', '50', '70');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `fname`, `lname`, `email`, `department`) VALUES
(36, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', 'science'),
(37, 'BAJENEZA', 'Valentin', 'bajenezavalentin@gmail.com', 'science'),
(38, 'kamana', 'paul', 'kamana@gmail.com', 'humanities');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pasword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `fname`, `lname`, `email`, `pasword`) VALUES
(4, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', ''),
(5, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1234'),
(6, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1234'),
(7, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1234'),
(8, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1234'),
(9, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1234'),
(10, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '1122'),
(12, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '11111'),
(13, 'MUKIZA', 'Fred', 'mukizafred7@gmail.com', '11111'),
(15, 'BAJENEZA', 'Valentin', 'bajenezavalentin@gmail.com', '1111'),
(30, 'HAKUZIMANA', 'Cedrick', 'cedrickhakuzimana@gmail.com', '1234'),
(31, 'HAKUZIMANA', 'Cedrick', 'cedrickhakuzimana@gmail.com', '1234'),
(32, 'HAKUZIMANA', 'Cedrick', 'cedrickhakuzimana@gmail.com', '1234'),
(33, 'Mukamana', 'Diane', 'diane@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`scid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
