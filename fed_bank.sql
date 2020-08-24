-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 08:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fed bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` varchar(11) NOT NULL,
  `account no` varchar(11) NOT NULL,
  `account type` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `account no`, `account type`, `name`) VALUES
('4678901', '5321098764', 'savings', 'Sindhujaa V'),
('5443390', '5432189097', 'current', 'Sushanth S');

-- --------------------------------------------------------

--
-- Table structure for table `accountstatment`
--

CREATE TABLE `accountstatment` (
  `No` int(100) NOT NULL,
  `Transaction ID` varchar(11) NOT NULL,
  `Description` varchar(11) NOT NULL,
  `Date(DD-MM-YYYY)` date NOT NULL,
  `Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountstatment`
--

INSERT INTO `accountstatment` (`No`, `Transaction ID`, `Description`, `Date(DD-MM-YYYY)`, `Amount`) VALUES
(1, '45756876799', 'withdraw', '2020-02-12', '50000'),
(2, '6776954648', 'deposit', '2020-02-20', '10000'),
(1, '45756876799', 'withdraw', '2020-02-12', '50000'),
(2, '6776954648', 'deposit', '2020-02-20', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `last updated` datetime NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `name`, `status`, `message`, `last updated`, `state`, `city`) VALUES
('4567890', 'Archana R', 'Active', 'Customer Update Complete', '2020-04-01 10:35:42', 'TamilNadu', 'Theni'),
('4678901', 'Sindhujaa V', 'Active', 'Customer Created Successfully', '2020-04-03 15:35:42', 'TamilNadu', 'Kumbakonam'),
('5443390', 'Sushanth S', 'Active', 'Customer Updated Complete', '2020-04-04 19:39:38', 'TamilNadu', 'Chennai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
