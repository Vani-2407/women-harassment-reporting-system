-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2025 at 02:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `women`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(10) NOT NULL,
  `EMAIL` varchar(120) NOT NULL,
  `APASS` varchar(130) NOT NULL,
  `AKEY` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `EMAIL`, `APASS`, `AKEY`) VALUES
(1, '12345@gmail.com', 'vani', 12345),
(2, '12345@gmail.com', 'vani', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `CID` int(10) NOT NULL,
  `NAME` varchar(120) NOT NULL,
  `AGE` int(3) NOT NULL,
  `DIS` varchar(120) NOT NULL,
  `AREA` varchar(120) NOT NULL,
  `CDIS` varchar(120) NOT NULL,
  `CAREA` varchar(120) NOT NULL,
  `PRO` varchar(120) NOT NULL,
  `FILE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`CID`, `NAME`, `AGE`, `DIS`, `AREA`, `CDIS`, `CAREA`, `PRO`, `FILE`) VALUES
(1, 'vani', 19, 'Karur', '', 'Perambalur', '\r\nbad', 'Physical Harassment', 'proof/help.JPG'),
(2, 'moni', 18, 'Kanchipuram', '', 'Chennai', 'unsafe', 'Stalking', 'proof/adminlogin.JPG'),
(3, 'gops', 19, 'Chennai', '', 'Krishnagiri', 'unsafe', 'Verbal Harassment', 'proof/help.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(10) NOT NULL,
  `FNAME` varchar(120) NOT NULL,
  `FEED` varchar(120) NOT NULL,
  `LOG` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `FNAME`, `FEED`, `LOG`) VALUES
(1, '', 'good', '2025-03-12'),
(2, '', 'good', '2025-03-12'),
(3, '', 'good', '2025-03-12'),
(4, '', 'good', '2025-03-13'),
(5, '', 'good', '2025-03-13'),
(6, '', 'no bad', '2025-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RID` int(10) NOT NULL,
  `RPHO` varchar(120) NOT NULL,
  `RPASS` varchar(120) NOT NULL,
  `CPASS` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RID`, `RPHO`, `RPASS`, `CPASS`) VALUES
(2, '6369733236', 'vani', 'vani'),
(3, '4343434343', 'hari', 'jai'),
(4, '9688214224', 'moni', 'moni'),
(5, '9500671970', 'gopika', 'gops');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `SID` int(10) NOT NULL,
  `SPHO` varchar(120) NOT NULL,
  `SPASS` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `SID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
