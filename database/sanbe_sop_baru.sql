-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2023 at 02:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` bigint NOT NULL,
  `username` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Sanbe_sop', '123'),
(2, 'Sanbe_sop', '123');

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `company` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `formulir_no` int NOT NULL,
  `formulir_date` date NOT NULL,
  `formulir_title` varchar(100) NOT NULL,
  `eff_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `Remarks` text NOT NULL,
  `created_by` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`company`, `unit`, `status`, `departement`, `formulir_no`, `formulir_date`, `formulir_title`, `eff_date`, `exp_date`, `Remarks`, `created_by`, `created_date`) VALUES
('SBF', 'U1', 'Draft', 'Sanbe', 1, '2023-01-24', 'Title Formulir', '2023-01-24', '2023-02-24', 'ON GOING', '', '2023-02-25 01:42:57'),
('CPR', 'U5', 'Pending', 'Sanbe', 2, '2023-02-26', 'Tambahan Title', '2023-02-26', '2023-03-26', 'Remarks', '', '2023-02-25 01:43:43'),
('SBF', 'U1', 'Draft', 'Draft', 3, '2023-02-25', 'Draft', '2023-02-25', '2023-03-25', 'Draft Remarks', '', '2023-02-26 05:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `sop_detail`
--

CREATE TABLE `sop_detail` (
  `sop_no` int NOT NULL,
  `form_no` int NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sop_detail`
--

INSERT INTO `sop_detail` (`sop_no`, `form_no`, `form_title`) VALUES
(1, 1, 'Title Formulir'),
(1, 1, 'Title Formulir'),
(1, 2, 'Tambahan Title'),
(2, 3, 'Draft'),
(2, 1, 'Title Formulir'),
(1, 1, 'Title Formulir'),
(1, 1, 'Title Formulir'),
(1, 2, 'Tambahan Title'),
(2, 3, 'Draft'),
(2, 1, 'Title Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `sop_detail_keranjang`
--

CREATE TABLE `sop_detail_keranjang` (
  `id` int NOT NULL,
  `sop_no` int NOT NULL,
  `form_no` int NOT NULL,
  `form_title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sop_detail_keranjang`
--

INSERT INTO `sop_detail_keranjang` (`id`, `sop_no`, `form_no`, `form_title`) VALUES
(227, 0, 3, 'Draft'),
(228, 0, 1, 'Title Formulir');

-- --------------------------------------------------------

--
-- Table structure for table `sop_header`
--

CREATE TABLE `sop_header` (
  `company` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unit` varchar(50) NOT NULL,
  `sop_no` int NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `departement` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sop_date` date NOT NULL,
  `sop_title` varchar(50) NOT NULL,
  `eff_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `Remarks` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sop_header`
--

INSERT INTO `sop_header` (`company`, `unit`, `sop_no`, `status`, `departement`, `sop_date`, `sop_title`, `eff_date`, `exp_date`, `Remarks`, `created_at`) VALUES
('CPR', 'U1', 1, 'Active', 'Sanbe Ubah', '2022-01-24', 'Title Sop Di Ubah', '2022-01-24', '2022-01-25', 'Remarks Sop Di Ubah', '2022-12-22 15:12:22'),
('SBF', 'U1', 2, 'Draft', 'Draft Sop', '2023-02-26', 'Draft Sop', '2023-02-26', '2023-03-27', 'Draft Sop', '2022-12-22 15:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_detail`
--

CREATE TABLE `trxsop_detail` (
  `sop_no` int NOT NULL,
  `trx_no` int NOT NULL,
  `form_no` int NOT NULL,
  `form_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_detail_keranjang`
--

CREATE TABLE `trxsop_detail_keranjang` (
  `id` int NOT NULL,
  `sop_no` int NOT NULL,
  `trx_no` int NOT NULL,
  `form_no` int NOT NULL,
  `form_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trxsop_detail_keranjang`
--

INSERT INTO `trxsop_detail_keranjang` (`id`, `sop_no`, `trx_no`, `form_no`, `form_title`) VALUES
(1, 0, 0, 1, 'Title Formulir'),
(2, 0, 0, 3, 'Draft');

-- --------------------------------------------------------

--
-- Table structure for table `trxsop_header`
--

CREATE TABLE `trxsop_header` (
  `trx_no` int NOT NULL,
  `trx_date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trx_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sop_no` int NOT NULL,
  `sop_title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(50) NOT NULL,
  `unit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `departement` varchar(50) NOT NULL,
  `sop_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remarks` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eff_date` varchar(50) NOT NULL,
  `exp_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `review_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trxsop_header`
--

INSERT INTO `trxsop_header` (`trx_no`, `trx_date`, `trx_type`, `sop_no`, `sop_title`, `company`, `unit`, `departement`, `sop_date`, `remarks`, `eff_date`, `exp_date`, `status`, `review_date`, `created_by`, `created_date`) VALUES
(1, '2023-02-23', 'Draft', 2, '2023-02-26', 'SBF', 'U2', 'Update Sop', '2023-02-26', 'Draft Sop', '2023-02-26', '2023-02-26', 'Review', 'Draft Sop', '', '2023-02-26 07:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sop_detail_keranjang`
--
ALTER TABLE `sop_detail_keranjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `trxsop_detail_keranjang`
--
ALTER TABLE `trxsop_detail_keranjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sop_detail`
--
ALTER TABLE `sop_detail`
  ADD CONSTRAINT `sop_detail_ibfk_1` FOREIGN KEY (`form_no`) REFERENCES `register_form` (`formulir_no`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
