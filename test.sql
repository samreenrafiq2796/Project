-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 02:30 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Record Insertion Time` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Name`, `Country`, `Record Insertion Time`) VALUES
(1, '  saba', 'DE ', '2024-11-22 18:31:09'),
(2, '  saba', 'DE ', '2024-11-22 18:31:09'),
(3, '  saba', 'DE ', '2024-11-22 18:31:09'),
(4, '  Loreal', 'United States ', '2024-11-29 18:24:04'),
(5, '  Maybelline', 'United Kingdom ', '2024-11-29 18:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Record Insertion Time` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Record Insertion Time`) VALUES
(2, 'Mens Wear', '2024-11-29 18:20:45'),
(3, 'Womens Wear', '2024-11-29 18:20:53'),
(4, 'Kids Section', '2024-11-29 18:20:59'),
(5, 'Crockery', '2024-11-29 18:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `db_about`
--

CREATE TABLE `db_about` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `RecordInsertionTime` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_faq`
--

CREATE TABLE `db_faq` (
  `Id` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `Record Insertion Time` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `db_faq`
--

INSERT INTO `db_faq` (`Id`, `Question`, `Answer`, `Record Insertion Time`) VALUES
(1, 'abc', ' abc2', '2024-11-22 18:32:18'),
(2, 'abc', ' abc', '2024-11-22 18:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `db_privacypolicy`
--

CREATE TABLE `db_privacypolicy` (
  `Id` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Record Insertion Time` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `db_privacypolicy`
--

INSERT INTO `db_privacypolicy` (`Id`, `Description`, `Record Insertion Time`) VALUES
(1, 'hey', '2024-11-22 18:32:34'),
(3, 'hope you will getting my point...', '2024-11-22 18:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `db_websiteinfo`
--

CREATE TABLE `db_websiteinfo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Discription` varchar(800) NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL,
  `XLink` varchar(100) NOT NULL,
  `Record Insertion Time` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `db_websiteinfo`
--

INSERT INTO `db_websiteinfo` (`Id`, `Name`, `Email`, `Contact`, `Address`, `Discription`, `Facebook`, `Instagram`, `XLink`, `Record Insertion Time`) VALUES
(14, 'saba', 'saba@gmail.com', '  0134-8765-11', 'L-9867', 'a very brief indication of the field covered by the article\r\na short descriptive annotation', 'https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F', ' https://www.instagram.com/', ' https://twitter.com/i/flow/signup?lang=en', '2024-11-22 18:05:41'),
(15, 'eBooky', 'shafay@gmail.com', '  08-153431-5', 'L-65443', 'Use clear and specific language to describe the services you offer.', 'https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F', ' https://www.instagram.com/', ' https://twitter.com/i/flow/signup?lang=en', '2024-11-22 18:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Msg` varchar(500) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Record_time` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `Name`, `Email`, `Msg`, `Purpose`, `Record_time`) VALUES
(1, 'Demo', 'demo@gmail.com', 'lorem ipsum,', 'Complain', '2024-11-27 17:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `db_about`
--
ALTER TABLE `db_about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `db_faq`
--
ALTER TABLE `db_faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `db_privacypolicy`
--
ALTER TABLE `db_privacypolicy`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `db_websiteinfo`
--
ALTER TABLE `db_websiteinfo`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_about`
--
ALTER TABLE `db_about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `db_faq`
--
ALTER TABLE `db_faq`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_privacypolicy`
--
ALTER TABLE `db_privacypolicy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_websiteinfo`
--
ALTER TABLE `db_websiteinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
