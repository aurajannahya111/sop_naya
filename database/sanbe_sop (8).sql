-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 10:09 AM
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
  `username` varchar(45) CHARACTER SET latin1 NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Sanbe_sop', '123'),
('Sanbe_sop', '123');

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
  `Remarks` text NOT NULL,
  `created_by` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`company`, `unit`, `status`, `departement`, `formulir_no`, `formulir_date`, `formulir_title`, `eff_date`, `exp_date`, `Remarks`, `created_by`, `created_date`) VALUES
('SBF', 'U1', 'Review', 'rpl', 0, '2023-02-18', 'yyyyyyyyyy', '2023-02-25', '2023-02-22', 'bujb', '', '2023-02-09 01:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `sop_detail`
--

CREATE TABLE `sop_detail` (
  `sop_no` int(11) NOT NULL,
  `form_no` int(11) NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sop_header`
--

CREATE TABLE `sop_header` (
  `company` varchar(45) CHARACTER SET latin1 NOT NULL,
  `unit` varchar(50) NOT NULL,
  `sop_no` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL,
  `departement` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sop_date` date NOT NULL,
  `sop_title` varchar(50) NOT NULL,
  `eff_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `Remarks` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop_header`
--

INSERT INTO `sop_header` (`company`, `unit`, `sop_no`, `status`, `departement`, `sop_date`, `sop_title`, `eff_date`, `exp_date`, `Remarks`) VALUES
('SBF', 'U4', 0, 'Obsolete', 'k ', '2023-02-16', 'ivuj', '2023-02-22', '2023-02-28', 'cihn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`formulir_no`);

--
-- Indexes for table `sop_detail`
--
ALTER TABLE `sop_detail`
  ADD PRIMARY KEY (`sop_no`),
  ADD KEY `form_no` (`form_no`),
  ADD KEY `form_title` (`form_title`);

--
-- Indexes for table `sop_header`
--
ALTER TABLE `sop_header`
  ADD PRIMARY KEY (`sop_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sop_detail`
--
ALTER TABLE `sop_detail`
  ADD CONSTRAINT `sop_detail_ibfk_1` FOREIGN KEY (`form_no`) REFERENCES `register_form` (`formulir_no`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
