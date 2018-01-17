-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2018 at 10:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathology2`
--

-- --------------------------------------------------------

--
-- Table structure for table `lipid-profile`
--

CREATE TABLE `lipid-profile` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid-profile`
--

INSERT INTO `lipid-profile` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'Cholesterol Total', 'cholesterol-total', 'mg/dL', '<200.0 DESIRABLE<br>\r\n200.0 - 239.0 BORDERLINE<br>\r\n>/=240.0 HIGH<br>', 'The body uses cholesterol to help build cells and produce hormones. Too much cholesterol in the blood can build up inside arteries, forming what is known as plaque.'),
(2, 'Triglycerides', 'triglycerides', 'mg/dL', '<150 NORMAL<br>\r\n150 - 199 BORDERLINE<br>\r\n200 - 499 HIGH<br>\r\n>/=500 VERY HIGH<br>', 'Having a high triglyceride level along with a high LDL cholesterol may increase your chances of having heart disease more than having only a high LDL cholesterol level.'),
(3, 'Cholesterol HDL', 'cholesterol-hdl', 'mg/dL', '<40.0 LOW<br>\r\n40.0 - 60.0 NORMAL<br>\r\n>/=60.0 HIGH<br>', 'A high level of HDL cholesterol may lower your chances of developing heart disease or stroke.'),
(4, 'Cholesterol LDL', 'cholesterol-ldl', 'mg/dL', '<100 OPTIMAL<br>\r\n100 - 129 NEAR OPTIMAL<br>\r\n130 - 159 BORDERLINE HIGH<br>\r\n160 - 189 HIGH<br>\r\n>/=190 VERY HIGH<br>', 'A high LDL cholesterol level may increase your chances of developing heart disease.'),
(5, 'Cholesterol VLDL', 'cholesterol-vldl', 'mg/dL', '<=30.0 NORMAL<br>\r\n>30.0 HIGH<br>', 'A high VLDL cholesterol level can cause the buildup of cholesterol in your arteries and increases your risk of heart disease and stroke.'),
(6, 'CHOL HDL Ratio', 'chol-hdl-ratio', 'Ratio', '3.3 - 4.4 LOW RISK<br>\r\n4.5 - 7.0 AVERAGE RISK<br>\r\n7.1 - 11.0 MODERATE RISK<br>\r\n>11.0 HIGH RISK<br>', 'An optimal ratio is less than 3.5-to-1. A higher ratio means a higher risk of heart disease.');

-- --------------------------------------------------------

--
-- Table structure for table `lipid-profile-conditions`
--

CREATE TABLE `lipid-profile-conditions` (
  `id` int(11) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `con1` varchar(255) NOT NULL,
  `val1` float NOT NULL,
  `and_or` varchar(255) DEFAULT NULL,
  `con2` varchar(255) DEFAULT NULL,
  `val2` float DEFAULT NULL,
  `result` varchar(255) NOT NULL,
  `show_y_n` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid-profile-conditions`
--

INSERT INTO `lipid-profile-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'cholesterol-total', 'GREATERTHANEQUAL', 200, 'AND', 'LESSERTHANEQUAL', 239, 'BORDERLINE', 'Y'),
(2, 'cholesterol-total', 'GREATERTHANEQUAL', 240, NULL, NULL, NULL, 'HIGH', 'Y'),
(3, 'cholesterol-total', 'LESSERTHAN', 200, NULL, NULL, NULL, 'LOW', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `lipid-profile-details`
--

CREATE TABLE `lipid-profile-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `cholesterol-total` float DEFAULT NULL,
  `triglycerides` float DEFAULT NULL,
  `cholesterol-hdl` float DEFAULT NULL,
  `cholesterol-ldl` float DEFAULT NULL,
  `cholesterol-vldl` float DEFAULT NULL,
  `chol-hdl-ratio` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid-profile-details`
--

INSERT INTO `lipid-profile-details` (`id`, `patient-id`, `cholesterol-total`, `triglycerides`, `cholesterol-hdl`, `cholesterol-ldl`, `cholesterol-vldl`, `chol-hdl-ratio`, `created_at`) VALUES
(1, 1, 167, 170, 40.3, 92.7, 34, 4.1, '2017-12-30 07:59:06'),
(2, 1, 250, 140, 60.3, NULL, NULL, NULL, '2017-12-30 08:30:27'),
(4, 1, 20, 20, 20, 20, 20, 20, '2017-12-31 12:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `liver-function-test`
--

CREATE TABLE `liver-function-test` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liver-function-test`
--

INSERT INTO `liver-function-test` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'BILIRUBIN TOTAL', 'bilirubin-total', 'mg/dL', '0.30 - 1.20', NULL),
(2, 'BILIRUBIN DIRECT', 'bilirubin-direct', 'mg/dL', '0.00-0.30', NULL),
(3, 'BILIRUBIN INDIRECT', 'bilirubin-indirect', 'mg/dL', '0.20 - 1.00', NULL),
(4, 'ASPARTATE AMINOTRANSFERASE (SGOT)', 'aspartate-aminotransferase-sgot', 'U/L', '<34.0', NULL),
(5, 'ALANINE AMINOTRANSFERASE (SGPT)', 'alanine-aminotransferase-sgpt', 'U/L', '10 - 49', NULL),
(6, 'ALKALINE PHOSPHATASE', 'alkaline-phosphatase', 'U/L', '46 - 116', NULL),
(7, 'PROTEIN TOTAL', 'protein-total', 'g/dL', '5.7 - 8.2', NULL),
(8, 'ALBUMIN', 'albumin', 'g/dL', '3.2 - 4.8', NULL),
(9, 'GLOBULIN', 'globulin', 'g/dL', '2.0 - 4.1', NULL),
(10, 'A:G RATIO', 'ag-ratio', 'Ratio', '1.0 - 2.1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liver-function-test-conditions`
--

CREATE TABLE `liver-function-test-conditions` (
  `id` int(11) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `con1` varchar(255) NOT NULL,
  `val1` float NOT NULL,
  `and_or` varchar(255) DEFAULT NULL,
  `con2` varchar(255) DEFAULT NULL,
  `val2` float DEFAULT NULL,
  `result` varchar(255) NOT NULL,
  `show_y_n` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liver-function-test-conditions`
--

INSERT INTO `liver-function-test-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'bilirubin-total', 'LESSERTHAN', 0.3, NULL, NULL, NULL, 'LOW', 'Y'),
(2, 'bilirubin-total', 'GREATERTHAN', 1.2, NULL, NULL, NULL, 'HIGH', 'Y'),
(3, 'bilirubin-direct', 'LESSERTHAN', 0, NULL, NULL, NULL, 'LOW', 'Y'),
(4, 'bilirubin-direct', 'GREATERTHAN', 0.3, NULL, NULL, NULL, 'HIGH', 'Y'),
(5, 'bilirubin-indirect', 'LESSERTHAN', 0.2, NULL, NULL, NULL, 'LOW', 'Y'),
(6, 'bilirubin-indirect', 'GREATERTHAN', 1, NULL, NULL, NULL, 'HIGH', 'Y'),
(7, 'aspartate-aminotransferase-sgot', 'GREATERTHAN', 34, NULL, NULL, NULL, 'HIGH', 'Y'),
(8, 'alanine-aminotransferase-sgpt', 'LESSERTHAN', 10, NULL, NULL, NULL, 'LOW', 'Y'),
(9, 'alanine-aminotransferase-sgpt', 'GREATERTHAN', 49, NULL, NULL, NULL, 'HIGH', 'Y'),
(10, 'alkaline-phosphatase', 'LESSERTHAN', 46, NULL, NULL, NULL, 'LOW', 'Y'),
(11, 'alkaline-phosphatase', 'GREATERTHAN', 116, NULL, NULL, NULL, 'HIGH', 'Y'),
(12, 'protein-total', 'LESSERTHAN', 5.7, NULL, NULL, NULL, 'LOW', 'Y'),
(13, 'protein-total', 'GREATERTHAN', 8.2, NULL, NULL, NULL, 'HIGH', 'Y'),
(14, 'albumin', 'LESSERTHAN', 3.2, NULL, NULL, NULL, 'LOW', 'Y'),
(15, 'albumin', 'GREATERTHAN', 4.8, NULL, NULL, NULL, 'HIGH', 'Y'),
(16, 'globulin', 'LESSERTHAN', 2, NULL, NULL, NULL, 'LOW', 'Y'),
(17, 'globulin', 'GREATERTHAN', 4.1, NULL, NULL, NULL, 'HIGH', 'Y'),
(18, 'ag-ratio', 'LESSERTHAN', 1, NULL, NULL, NULL, 'LOW', 'Y'),
(19, 'ag-ratio', 'GREATERTHAN', 2.1, NULL, NULL, NULL, 'HIGH', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `liver-function-test-details`
--

CREATE TABLE `liver-function-test-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `bilirubin-total` float DEFAULT NULL,
  `bilirubin-direct` float DEFAULT NULL,
  `bilirubin-indirect` float DEFAULT NULL,
  `aspartate-aminotransferase-sgot` float DEFAULT NULL,
  `alanine-aminotransferase-sgpt` float DEFAULT NULL,
  `alkaline-phosphatase` float DEFAULT NULL,
  `protein-total` float DEFAULT NULL,
  `albumin` float DEFAULT NULL,
  `globulin` float DEFAULT NULL,
  `ag-ratio` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liver-function-test-details`
--

INSERT INTO `liver-function-test-details` (`id`, `patient-id`, `bilirubin-total`, `bilirubin-direct`, `bilirubin-indirect`, `aspartate-aminotransferase-sgot`, `alanine-aminotransferase-sgpt`, `alkaline-phosphatase`, `protein-total`, `albumin`, `globulin`, `ag-ratio`, `created_at`) VALUES
(1, 1, 0.2, 0.17, 0.53, 35, 9, 61, 7.4, 4.3, 3.1, 1.39, '2018-01-05 13:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `ref_by` varchar(255) NOT NULL,
  `due_amount` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `gender`, `mobile`, `ref_by`, `due_amount`, `created_at`) VALUES
(1, 'Mrs Meenu Singh', 47, 'F', '7894561233', 'Dr. Ruma Bhattacharya', 0, '2017-12-30 06:34:02'),
(3, 'Hitesh Lalwani', 20, 'M', '7894561230', 'self', 1000, '2018-01-17 08:31:08'),
(4, 'New Patient', 20, 'O', '6549873210', 'self', 500, '2018-01-17 09:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `test_name`, `test_slug`) VALUES
(1, 'Lipid Profile', 'lipid-profile'),
(8, 'LIVER FUNCTION TEST', 'liver-function-test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-30 06:32:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lipid-profile`
--
ALTER TABLE `lipid-profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lipid-profile-conditions`
--
ALTER TABLE `lipid-profile-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

--
-- Indexes for table `liver-function-test`
--
ALTER TABLE `liver-function-test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liver-function-test-conditions`
--
ALTER TABLE `liver-function-test-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liver-function-test-details`
--
ALTER TABLE `liver-function-test-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lipid-profile`
--
ALTER TABLE `lipid-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lipid-profile-conditions`
--
ALTER TABLE `lipid-profile-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `liver-function-test`
--
ALTER TABLE `liver-function-test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `liver-function-test-conditions`
--
ALTER TABLE `liver-function-test-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `liver-function-test-details`
--
ALTER TABLE `liver-function-test-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  ADD CONSTRAINT `lipid-profile-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liver-function-test-details`
--
ALTER TABLE `liver-function-test-details`
  ADD CONSTRAINT `liver-function-test-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
