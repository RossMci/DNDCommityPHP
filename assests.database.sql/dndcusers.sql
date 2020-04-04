-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 04:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dndcusers`
--
CREATE DATABASE IF NOT EXISTS `dndcusers` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dndcusers`;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `campaignID` int(11) NOT NULL,
  `CTitle` varchar(45) DEFAULT NULL,
  `CDescription` varchar(45) DEFAULT NULL,
  `CVenue` varchar(45) DEFAULT NULL,
  `CDate` date DEFAULT NULL,
  `CTime` time DEFAULT NULL,
  `CLocation` varchar(45) DEFAULT NULL,
  `Players` int(11) DEFAULT NULL,
  `CampaignsNo` int(11) DEFAULT NULL,
  `CimageLink` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventID` int(11) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Venue` varchar(45) DEFAULT NULL,
  `Date` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `imageLink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `Title`, `Description`, `Venue`, `Date`, `Time`, `Location`, `imageLink`) VALUES
(1, 'ccc', ' cccc', 'ccc', 'ccc', 'ccc', 'cccc', 'C:\\Users\\ross1\\Pictures\\christmaspic.jpg'),
(5, 'Picka', ' yellow animal ', 'pokamon', '22-04-2013', '12:00', 'trianing ', 'C:\\Users\\ross1\\Pictures\\pikachu.jfif'),
(6, 'fff', ' ffff', 'ffff', 'ffff', 'fffff', 'fffff', 'C:\\Users\\ross1\\Pictures\\christmaspic.jpg'),
(7, 'dddd', ' ddd', 'dddd', 'ddd', 'ddd', 'ddd', 'C:\\Users\\ross1\\Pictures\\download.jfif'),
(8, 'dddd', ' d', 'ross house', '22-04-2013', '13:00', 'dddd', 'C:\\Users\\ross1\\Pictures\\christmaspic.jpg'),
(9, 'mark', ' it works', 'my man', 'ddd', 'dd', 'ddd', 'C:\\Users\\ross1\\Pictures\\p1.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `Fname` varchar(45) DEFAULT NULL,
  `Lname` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `memberEmail` varchar(45) DEFAULT NULL,
  `memberPassword` varchar(45) DEFAULT NULL,
  `hostAccess` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `Fname`, `Lname`, `userName`, `PhoneNumber`, `memberEmail`, `memberPassword`, `hostAccess`) VALUES
(7, 'gggggg', 'ggggg', 'gggggg', 2147483647, 'gggg', 'ggggggg', NULL),
(8, 'dddd', 'bbbb', 'dddddd', 55555, 'ggggg@gmail', 'ddddd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`campaignID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `campaignID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
