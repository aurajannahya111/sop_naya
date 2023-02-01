-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 07:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanbe_sop`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `company` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `formulir_no` int(11) NOT NULL,
  `formulir_date` date NOT NULL,
  `formulir_title` varchar(100) NOT NULL,
  `eff_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`company`, `unit`, `status`, `departement`, `formulir_no`, `formulir_date`, `formulir_title`, `eff_date`, `exp_date`, `Remarks`) VALUES
('SBF', 'U3', 'Review', 'chepa', 1, '2023-01-31', 'menerima', '2023-02-01', '2023-02-09', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `sop_header`
--

CREATE TABLE `sop_header` (
  `company` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sop_no` int(11) NOT NULL,
  `sop_title` int(11) NOT NULL,
  `departement` int(11) NOT NULL,
  `form_date` int(11) NOT NULL,
  `formulir_title` int(11) NOT NULL,
  `eff_date` int(11) NOT NULL,
  `exp_date` int(11) NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`formulir_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
