-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 23, 2018 at 11:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotto`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `AccountId` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Surname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`AccountId`, `Username`, `Password`, `Name`, `Surname`) VALUES
(1, 'Rick', 'Password1', 'John', 'Borg'),
(2, 'Jeff', 'Password2', 'Tim', 'Camilleri'),
(3, 'Phill', 'Password3', 'Jack', 'Azzopardi'),
(4, 'asd', 'sad', NULL, NULL),
(5, 'asd', 'sad', NULL, NULL),
(6, 'asd', 'sad', NULL, NULL),
(7, 'asd', 'sad', NULL, NULL),
(8, 'ss', 'ss', NULL, NULL),
(9, 'ss', 'ss', NULL, NULL),
(10, 'xx', 'xx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lottonumbers`
--

CREATE TABLE `lottonumbers` (
  `AccountId` int(11) DEFAULT NULL,
  `LottoNum1` int(11) NOT NULL,
  `LottoNum2` varchar(11) NOT NULL,
  `LottoNum3` varchar(11) NOT NULL,
  `LottoNum4` varchar(11) NOT NULL,
  `LottoNum5` varchar(11) NOT NULL,
  `setId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottonumbers`
--

INSERT INTO `lottonumbers` (`AccountId`, `LottoNum1`, `LottoNum2`, `LottoNum3`, `LottoNum4`, `LottoNum5`, `setId`) VALUES
(1, 3, '4', '5', '6', '7', 1),
(2, 6, '5', '4', '3', '9', 2),
(NULL, 2, '7', '10', '22', '14', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AccountId`);

--
-- Indexes for table `lottonumbers`
--
ALTER TABLE `lottonumbers`
  ADD PRIMARY KEY (`setId`),
  ADD KEY `PID` (`AccountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lottonumbers`
--
ALTER TABLE `lottonumbers`
  MODIFY `setId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
