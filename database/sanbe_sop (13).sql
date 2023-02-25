-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 08:52 AM
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
('SBF', 'U2', 'Obsolete', 'chepa', 1, '2023-02-25', 'coba1', '2023-02-26', '2023-03-01', 'abc', '', '2023-02-18 10:21:41'),
('SBF', 'U2', 'Active', 'Packing', 2, '2023-02-28', 'coba2', '2023-03-02', '2023-03-04', 'abcd', '', '2023-02-25 07:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `sop_detail`
--

CREATE TABLE `sop_detail` (
  `sop_no` int(11) NOT NULL,
  `form_no` int(11) NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop_detail`
--

INSERT INTO `sop_detail` (`sop_no`, `form_no`, `form_title`) VALUES
(2, 1, 'DSDSG'),
(1, 1, 'coba1'),
(1, 2, 'coba2');

-- --------------------------------------------------------

--
-- Table structure for table `sop_detail_keranjang`
--

CREATE TABLE `sop_detail_keranjang` (
  `id` int(11) NOT NULL,
  `sop_no` int(11) NOT NULL,
  `form_no` int(11) NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop_detail_keranjang`
--

INSERT INTO `sop_detail_keranjang` (`id`, `sop_no`, `form_no`, `form_title`) VALUES
(15, 0, 1, 'coba1'),
(16, 0, 2, 'coba2');

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
  `Remarks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop_header`
--

INSERT INTO `sop_header` (`company`, `unit`, `sop_no`, `status`, `departement`, `sop_date`, `sop_title`, `eff_date`, `exp_date`, `Remarks`, `created_at`) VALUES
('SBF', 'U4', 1, 'Pending', 'chepa', '2023-02-28', 'ini coba', '2023-02-28', '2023-03-01', 'yyyyy', '2023-02-25 07:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_detail`
--

CREATE TABLE `trxsop_detail` (
  `sop_no` int(11) NOT NULL,
  `trx_no` int(11) NOT NULL,
  `form_no` int(11) NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_detail_keranjang`
--

CREATE TABLE `trxsop_detail_keranjang` (
  `id` int(11) NOT NULL,
  `trxsop` int(11) NOT NULL,
  `form_no` int(11) NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_header`
--

CREATE TABLE `trxsop_header` (
  `trx_no` int(11) NOT NULL,
  `trx_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `trx_type` varchar(50) NOT NULL,
  `sop_no` int(11) NOT NULL,
  `sop_title` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `dept_code` int(11) NOT NULL,
  `sop_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `review_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `form_no` (`form_no`),
  ADD KEY `form_title` (`form_title`);

--
-- Indexes for table `sop_detail_keranjang`
--
ALTER TABLE `sop_detail_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop_header`
--
ALTER TABLE `sop_header`
  ADD PRIMARY KEY (`sop_no`);

--
-- Indexes for table `trxsop_detail`
--
ALTER TABLE `trxsop_detail`
  ADD PRIMARY KEY (`sop_no`);

--
-- Indexes for table `trxsop_detail_keranjang`
--
ALTER TABLE `trxsop_detail_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trxsop_header`
--
ALTER TABLE `trxsop_header`
  ADD PRIMARY KEY (`trx_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sop_detail_keranjang`
--
ALTER TABLE `sop_detail_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trxsop_detail_keranjang`
--
ALTER TABLE `trxsop_detail_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
