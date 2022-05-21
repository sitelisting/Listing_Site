-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 07:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listingsite`
--
CREATE DATABASE listingsite;
-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--
USE listingsite;

CREATE TABLE `adminaccount` (
  `User_Email` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `adminaccount` (`User_Email`, `User_Password`) VALUES
('admin@listingsite', 'DSWgroup1');

-- --------------------------------------------------------

--
-- Table structure for table `createjobs`
--

CREATE TABLE `createjobs` (
  `Company_Name` varchar(255) NOT NULL,
  `Company_Email` varchar(255) NOT NULL,
  `Company_Number` varchar(255) NOT NULL,
  `Job_ID` int(11) NOT NULL,
  `Job_Category` varchar(255) NOT NULL,
  `Job_Position` varchar(255) NOT NULL,
  `Job_Link` varchar(255) DEFAULT NULL,
  `Job_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registerusers`
--

CREATE TABLE `registerusers` (
  `User_FullName` varchar(255) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_Contact` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--

--
-- Indexes for dumped tables
--
--
-- Indexes for table `createjobs`
--
ALTER TABLE `createjobs`
  ADD PRIMARY KEY (`Job_ID`),
  ADD UNIQUE KEY `Company_Email` (`Company_Email`),
  ADD UNIQUE KEY `Company_Number` (`Company_Number`),
  ADD UNIQUE KEY `Job_ID` (`Job_ID`);

--
-- Indexes for table `registerusers`
--
ALTER TABLE `registerusers`
  ADD UNIQUE KEY `User_Email` (`User_Email`),
  ADD UNIQUE KEY `User_Contact` (`User_Contact`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `createjobs`
--
ALTER TABLE `createjobs`
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
