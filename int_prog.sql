-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 05:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `int_prog`
--

-- --------------------------------------------------------

--
-- Table structure for table `l1_s1`
--

CREATE TABLE `l1_s1` (
  `id` int(11) DEFAULT NULL,
  `eee103` varchar(12) DEFAULT NULL,
  `eee104` varchar(12) DEFAULT NULL,
  `cse107` varchar(12) DEFAULT NULL,
  `cse108` varchar(12) DEFAULT NULL,
  `mat109` varchar(12) DEFAULT NULL,
  `che139` varchar(12) DEFAULT NULL,
  `che140` varchar(12) DEFAULT NULL,
  `ssl107` varchar(12) DEFAULT NULL,
  `soc105` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `l1_s1`
--

INSERT INTO `l1_s1` (`id`, `eee103`, `eee104`, `cse107`, `cse108`, `mat109`, `che139`, `che140`, `ssl107`, `soc105`) VALUES
(2002127, 'A+', 'A+', 'A-', 'A+', 'F', 'C', 'D', 'B+', 'B'),
(2002129, 'A+', 'F', 'F', 'A+', 'C', 'D', 'A', 'A-', 'C'),
(1802143, 'A+', 'F', 'F', 'A+', 'F', 'C', 'D', 'A-', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`ID`, `NAME`) VALUES
(202212, 'Meherab'),
(2002127, 'Muztuba Rafid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
