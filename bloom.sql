-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 11:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `userID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`userID`, `name`, `email`, `msg`) VALUES
(1, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `giftID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL,
  `imagePath` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`giftID`, `title`, `des`, `imagePath`, `status`) VALUES
(3, 'picture 01', 'summer night ', '../images/uploads/1920X1080-HD-Sunset-Wallpapers-Top-Free-1920X1080-HD-.jpg', 1),
(4, 'Cactus 2', 'colourful cactus ', '../images/uploads/21.small-prickly-pear-cactus-with-eyes-brown-pot-white-background-copy-space_91130-529.jpg', 0),
(5, 'classic cac', 'its not cactus', '../images/uploads/fantasy_tree_art_magic_96511_1280x720.jpg', 1),
(6, 'wow wow', 'aaa', '../images/uploads/28daf0b8d2c5bb9f9ab5eae6176a0dba.jpg', 1),
(7, 'baby cactus', 'nor clear hey bye good morning', '../images/uploads/2318048.jpg', 1),
(9, 'qqq', 'qwqq', '../images/uploads/81f3ff974d82520780078ba1cfbd453a1583259680.jfif', 1),
(10, 'g', 'f', '../images/uploads/1920X1080-HD-Sunset-Wallpapers-Top-Free-1920X1080-HD-.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userName`, `password`) VALUES
('Udari123', 'udari123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`giftID`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `giftID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
