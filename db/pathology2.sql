-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2018 at 02:56 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `due` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `patient_name`, `test_name`, `lab_id`, `amount`, `due`, `date`) VALUES
(1, 'Hitesh', 'Lipid Profile', 1, 100, 20, '2018-01-17'),
(2, 'XYZ', 'Lipid Profile', 2, 500, 250, '2017-10-11'),
(3, 'abv', 't2', 1, 500, 200, '2018-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_add` text NOT NULL,
  `lab_phone` varchar(255) NOT NULL,
  `lab_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `lab_name`, `lab_add`, `lab_phone`, `lab_email`) VALUES
(1, 'Diagno Labs', 'Indrapuri', '7554247774', 'dac.bhpal@daignolabs.com'),
(2, 'Thyrocare', 'add1', '435', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lipid-profile`
--

INSERT INTO `lipid-profile` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'S.CHOLESTEROL', 'scholesterol', 'mg/dL', '<p>130-250 mg/dL</p>', 'Having a total cholesterol level over 240 mg/dL may double the risk of heart disease.'),
(2, 'S.TRIGIYCERIDES', 'strigiycerides', 'mg/dL', '<p>Normal &lt;150 mg/dL</p><p>Boderline 150 -199 mg/dL</p><p>High 200 - 499 mg/dL</p><p>Very High &gt;500</p>', 'Highly elevated triglyceride levels may also cause fatty liver disease and pancreatitis.'),
(3, 'HDL-CHOLESTEROL', 'hdl-cholesterol', 'mg/dL', '<p>40-60 mg/dL</p>', 'A high-density lipoprotein (HDL) test measures the level of good cholesterol in your blood. '),
(4, 'VLDL-CHOLESTEROL', 'vldl-cholesterol', 'mg/dL', '<p>2-30 mg/dL</p>', 'VLDL -Cholesterol is a type of blood fat. It\'s considered one of the "bad" forms of cholesterol, along with LDL cholesterol and triglycerides.'),
(5, 'LDL- CHOLESTEROL', 'ldl-cholesterol', 'mg/dL', '<p>Normal 100-129 mg/dL</p><p>Borderline&nbsp;&nbsp; 130-159 mg/dL</p><p>High 160-189 mg/dL</p><p>Very high&nbsp; &gt;190 mg/dL</p>', 'A higher value confers increasing risk for the development of coronary artery disease and needs to be remedied. '),
(6, 'RISK -FACTOR', 'risk-factor', 'mg/dL', '<p>Upto 6.0</p>', 'Risk Factor Upto 6.0 is desirable');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lipid-profile-conditions`
--

INSERT INTO `lipid-profile-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'scholesterol', 'LESSERTHAN', 130, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'scholesterol', 'GREATERTHAN', 250, NULL, NULL, NULL, 'High', 'Y'),
(3, 'strigiycerides', 'LESSERTHAN', 150, NULL, NULL, NULL, 'Normal', 'N'),
(4, 'strigiycerides', 'GREATERTHANEQUAL', 150, 'AND', 'LESSERTHAN', 200, 'Boderline', 'Y'),
(5, 'strigiycerides', 'GREATERTHANEQUAL', 200, 'AND', 'LESSERTHAN', 500, 'High', 'Y'),
(6, 'strigiycerides', 'GREATERTHANEQUAL', 500, NULL, NULL, NULL, 'Very High', 'Y'),
(7, 'hdl-cholesterol', 'LESSERTHAN', 40, NULL, NULL, NULL, 'Low', 'Y'),
(8, 'hdl-cholesterol', 'GREATERTHAN', 60, NULL, NULL, NULL, 'High', 'Y'),
(9, 'vldl-cholesterol', 'LESSERTHAN', 2, NULL, NULL, NULL, 'Low', 'Y'),
(10, 'vldl-cholesterol', 'GREATERTHAN', 30, NULL, NULL, NULL, 'High', 'Y'),
(11, 'ldl-cholesterol', 'GREATERTHANEQUAL', 130, 'AND', 'LESSERTHAN', 160, 'Boderline', 'Y'),
(12, 'ldl-cholesterol', 'GREATERTHANEQUAL', 160, 'AND', 'LESSERTHAN', 190, 'High', 'Y'),
(13, 'ldl-cholesterol', 'GREATERTHANEQUAL', 190, NULL, NULL, NULL, 'Very High', 'Y'),
(14, 'ldl-cholesterol', 'LESSERTHAN', 100, NULL, NULL, NULL, 'Low', 'Y'),
(15, 'risk-factor', 'GREATERTHAN', 6, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lipid-profile-details`
--

CREATE TABLE `lipid-profile-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `scholesterol` float DEFAULT NULL,
  `strigiycerides` float DEFAULT NULL,
  `hdl-cholesterol` float DEFAULT NULL,
  `vldl-cholesterol` float DEFAULT NULL,
  `ldl-cholesterol` float DEFAULT NULL,
  `risk-factor` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lipid-profile-details`
--

INSERT INTO `lipid-profile-details` (`id`, `patient-id`, `scholesterol`, `strigiycerides`, `hdl-cholesterol`, `vldl-cholesterol`, `ldl-cholesterol`, `risk-factor`, `created_at`) VALUES
(4, 1, 122, 122, 545, 333, 333, 33, '2018-01-30 09:15:22');

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
(4, 'New Patient', 20, 'O', '6549873210', 'self', 1000, '2018-01-17 09:09:57');

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
(13, 'LIPID PROFILE', 'lipid-profile');

-- --------------------------------------------------------

--
-- Table structure for table `text_based`
--

CREATE TABLE `text_based` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_based`
--

INSERT INTO `text_based` (`test_id`, `test_name`, `test_slug`) VALUES
(1, 'ANC Profile', 'anc-profile');

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
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `text_based`
--
ALTER TABLE `text_based`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lipid-profile`
--
ALTER TABLE `lipid-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lipid-profile-conditions`
--
ALTER TABLE `lipid-profile-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `text_based`
--
ALTER TABLE `text_based`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`lab_id`) REFERENCES `labs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  ADD CONSTRAINT `lipid-profile-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
