-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2018 at 03:23 PM
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
-- Table structure for table `bio-t-plus`
--

CREATE TABLE `bio-t-plus` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bio-t-plus`
--

INSERT INTO `bio-t-plus` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'HEMOGLOBIN', 'hemoglobin', 'g/dL', '<p>12.0 - 15.0</p>', NULL),
(2, 'HEMATOCRIT', 'hematocrit', '%', '<p>36.0 - 46.0</p>', NULL),
(3, 'RBC : COUNT', 'rbc-count', '10^6/uL', '<p>3.80 - 4.80</p>', NULL),
(4, 'MCV', 'mcv', 'fL', '<p>83.0 - 101.0</p>', NULL),
(5, 'MCH', 'mch', 'pg', '<p>27.0 - 32.0</p>', NULL),
(6, 'MCHC', 'mchc', 'g/dL', '<p>31.5 - 34.5</p>', NULL),
(7, 'RDW-CV', 'rdw-cv', '%', '<p>11.6 - 14.0</p>', NULL),
(8, 'PLATELET COUNT', 'platelet-count', '10^3 /uL', '<p>150 - 410</p>', NULL),
(9, 'TOTAL LEUCOCYTE COUNT', 'total-leucocyte-count', '10^3 /uL', '<p>4.0&nbsp;- 11.0</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bio-t-plus-conditions`
--

CREATE TABLE `bio-t-plus-conditions` (
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
-- Dumping data for table `bio-t-plus-conditions`
--

INSERT INTO `bio-t-plus-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'hemoglobin', 'LESSERTHAN', 12, NULL, NULL, NULL, 'LOW', 'Y'),
(2, 'hemoglobin', 'GREATERTHAN', 15, NULL, NULL, NULL, 'HIGH', 'Y'),
(3, 'hematocrit', 'LESSERTHAN', 36, NULL, NULL, NULL, 'LOW', 'Y'),
(4, 'hematocrit', 'GREATERTHAN', 46, NULL, NULL, NULL, 'HIGH', 'Y'),
(5, 'rbc-count', 'LESSERTHAN', 3.8, NULL, NULL, NULL, 'LOW', 'Y'),
(6, 'rbc-count', 'GREATERTHAN', 4.8, NULL, NULL, NULL, 'HIGH', 'Y'),
(7, 'mcv', 'LESSERTHAN', 83, NULL, NULL, NULL, 'LOW', 'Y'),
(8, 'mcv', 'GREATERTHAN', 101, NULL, NULL, NULL, 'HIGH', 'Y'),
(9, 'mch', 'LESSERTHAN', 27, NULL, NULL, NULL, 'LOW', 'Y'),
(10, 'mch', 'GREATERTHAN', 32, NULL, NULL, NULL, 'HIGH', 'Y'),
(11, 'mchc', 'LESSERTHAN', 31.5, NULL, NULL, NULL, 'LOW', 'Y'),
(12, 'mchc', 'GREATERTHAN', 34.5, NULL, NULL, NULL, 'HIGH', 'Y'),
(13, 'rdw-cv', 'LESSERTHAN', 11.6, NULL, NULL, NULL, 'LOW', 'Y'),
(14, 'rdw-cv', 'GREATERTHAN', 14, NULL, NULL, NULL, 'HIGH', 'Y'),
(15, 'platelet-count', 'LESSERTHAN', 150, NULL, NULL, NULL, 'LOW', 'Y'),
(16, 'platelet-count', 'GREATERTHAN', 410, NULL, NULL, NULL, 'HIGH', 'Y'),
(17, 'total-leucocyte-count', 'LESSERTHAN', 4, NULL, NULL, NULL, 'LOW', 'Y'),
(18, 'total-leucocyte-count', 'GREATERTHAN', 11, NULL, NULL, NULL, 'HIGH', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `bio-t-plus-details`
--

CREATE TABLE `bio-t-plus-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `hemoglobin` float DEFAULT NULL,
  `hematocrit` float DEFAULT NULL,
  `rbc-count` float DEFAULT NULL,
  `mcv` float DEFAULT NULL,
  `mch` float DEFAULT NULL,
  `mchc` float DEFAULT NULL,
  `rdw-cv` float DEFAULT NULL,
  `platelet-count` float DEFAULT NULL,
  `total-leucocyte-count` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bio-t-plus-details`
--

INSERT INTO `bio-t-plus-details` (`id`, `patient-id`, `hemoglobin`, `hematocrit`, `rbc-count`, `mcv`, `mch`, `mchc`, `rdw-cv`, `platelet-count`, `total-leucocyte-count`, `created_at`) VALUES
(1, 1, 11.5, 37.4, 3.66, 102.4, 31.4, 30.6, 14.8, 152, 7.1, '2018-01-18 20:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `differential-leukocyte-count-whole-blood`
--

CREATE TABLE `differential-leukocyte-count-whole-blood` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `differential-leukocyte-count-whole-blood`
--

INSERT INTO `differential-leukocyte-count-whole-blood` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'NEUTROPHILS', 'neutrophils', '%', '<p>40.0 - 80.0</p>', NULL),
(2, 'LYMPHOCYTES', 'lymphocytes', '%', '<p>20.0 - 40.0</p>', NULL),
(3, 'MONOCYTES', 'monocytes', '%', '<p>2.0 - 10.0</p>', NULL),
(4, 'EOSINOPHILS', 'eosinophils', '%', '<p>1.0 - 6.0</p>', NULL),
(5, 'BASOPHILS', 'basophils', '%', '<p>&lt; 2.0</p>', NULL),
(6, 'ABSOLUTE NEUTROPHIL COUNT', 'absolute-neutrophil-count', '10^3 /uL', '<p>2.00 - 7.00</p>', NULL),
(7, 'ABSOLUTE LYMPHOCYTE COUNT', 'absolute-lymphocyte-count', '10^3 /uL', '<p>1.00 - 3.00</p>', NULL),
(8, 'ABSOLUTE MONOCYTE COUNT', 'absolute-monocyte-count', '10^3 /uL', '<p>0.20 - 1.00</p>', NULL),
(9, 'ABSOLUTE EOSINOPHIL COUNT', 'absolute-eosinophil-count', '10^3 /uL', '<p>0.02 - 0.50</p>', NULL),
(10, 'ABSOLUTE BASOPHIL COUNT', 'absolute-basophil-count', '10^3 /uL', '<p>0.02 - 0.10</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `differential-leukocyte-count-whole-blood-conditions`
--

CREATE TABLE `differential-leukocyte-count-whole-blood-conditions` (
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
-- Dumping data for table `differential-leukocyte-count-whole-blood-conditions`
--

INSERT INTO `differential-leukocyte-count-whole-blood-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'neutrophils', 'LESSERTHAN', 40, NULL, NULL, NULL, 'LOW', 'Y'),
(2, 'neutrophils', 'GREATERTHAN', 80, NULL, NULL, NULL, 'HIGH', 'Y'),
(3, 'lymphocytes', 'LESSERTHAN', 20, NULL, NULL, NULL, 'LOW', 'Y'),
(4, 'lymphocytes', 'GREATERTHAN', 40, NULL, NULL, NULL, 'HIGH', 'Y'),
(5, 'monocytes', 'LESSERTHAN', 2, NULL, NULL, NULL, 'LOW', 'Y'),
(6, 'monocytes', 'GREATERTHAN', 10, NULL, NULL, NULL, 'HIGH', 'Y'),
(7, 'eosinophils', 'LESSERTHAN', 1, NULL, NULL, NULL, 'LOW', 'Y'),
(8, 'eosinophils', 'GREATERTHAN', 6, NULL, NULL, NULL, 'HIGH', 'Y'),
(9, 'basophils', 'GREATERTHANEQUAL', 2, NULL, NULL, NULL, 'HIGH', 'Y'),
(10, 'absolute-neutrophil-count', 'LESSERTHAN', 2, NULL, NULL, NULL, 'LOW', 'Y'),
(11, 'absolute-neutrophil-count', 'GREATERTHAN', 7, NULL, NULL, NULL, 'HIGH', 'Y'),
(12, 'absolute-lymphocyte-count', 'LESSERTHAN', 1, NULL, NULL, NULL, 'LOW', 'Y'),
(13, 'absolute-lymphocyte-count', 'GREATERTHAN', 3, NULL, NULL, NULL, 'HIGH', 'Y'),
(14, 'absolute-monocyte-count', 'LESSERTHAN', 0.2, NULL, NULL, NULL, 'LOW', 'Y'),
(15, 'absolute-monocyte-count', 'GREATERTHAN', 1, NULL, NULL, NULL, 'HIGH', 'Y'),
(16, 'absolute-eosinophil-count', 'LESSERTHAN', 0.02, NULL, NULL, NULL, 'LOW', 'Y'),
(17, 'absolute-eosinophil-count', 'GREATERTHAN', 0.5, NULL, NULL, NULL, 'HIGH', 'Y'),
(18, 'absolute-basophil-count', 'LESSERTHAN', 0.02, NULL, NULL, NULL, 'LOW', 'Y'),
(19, 'absolute-basophil-count', 'GREATERTHAN', 0.1, NULL, NULL, NULL, 'HIGH', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `differential-leukocyte-count-whole-blood-details`
--

CREATE TABLE `differential-leukocyte-count-whole-blood-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `neutrophils` float DEFAULT NULL,
  `lymphocytes` float DEFAULT NULL,
  `monocytes` float DEFAULT NULL,
  `eosinophils` float DEFAULT NULL,
  `basophils` float DEFAULT NULL,
  `absolute-neutrophil-count` float DEFAULT NULL,
  `absolute-lymphocyte-count` float DEFAULT NULL,
  `absolute-monocyte-count` float DEFAULT NULL,
  `absolute-eosinophil-count` float DEFAULT NULL,
  `absolute-basophil-count` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `differential-leukocyte-count-whole-blood-details`
--

INSERT INTO `differential-leukocyte-count-whole-blood-details` (`id`, `patient-id`, `neutrophils`, `lymphocytes`, `monocytes`, `eosinophils`, `basophils`, `absolute-neutrophil-count`, `absolute-lymphocyte-count`, `absolute-monocyte-count`, `absolute-eosinophil-count`, `absolute-basophil-count`, `created_at`) VALUES
(1, 1, 63.2, 29.8, 4.2, 2.6, 0.2, 4.47, 2.11, 0.3, 0.19, 0.02, '2018-01-18 20:42:53');

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
(1, 'CHOLESTEROL TOTAL', 'cholesterol-total', 'mg/dL', '<p>&lt; 200.0 DESIRABLE</p><p>200.0 - 239.0 BORDERLINE</p><p>&gt;/= 240.0 HIGH</p>', NULL),
(2, 'TRIGLYCERIDES', 'triglycerides', 'mg/dL', '<p>&lt; 150 NORMAL</p><p>150 - 199 BORDERLINE</p><p>200 - 499 HIGH</p><p>&gt;/= 500 VERY HIGH</p>', NULL),
(3, 'CHOLESTEROL HDL, DIRECT', 'cholesterol-hdl-direct', 'mg/dL', '<p>&lt; 40.0 LOW</p><p>40.0 - 60.0 NORMAL</p><p>&gt;/= 60.0 HIGH</p>', NULL),
(4, 'CHOLESTEROL LDL, CALCULATED', 'cholesterol-ldl-calculated', 'mg/dL', '<p>&lt; 100 OPTIMAL</p><p>100 - 129 NEAR&nbsp;OPTIMAL</p><p>130 - 159 BORDERLINE</p><p>160 - 189 HIGH</p><p>&gt;/= 190 VERY HIGH</p>', NULL),
(5, 'CHOLESTEROL VLDL, CALCULATED', 'cholesterol-vldl-calculated', 'mg/dL', '<p>&lt;/= 30.0</p>', NULL),
(6, 'CHOL / HDL RATIO', 'chol-hdl-ratio', 'Ratio', '<p>3.3 - 4.4 LOW RISK</p><p>4.5 - 7.0 AVERAGE RISK</p><p>7.1 - 11.0 MODERATE RISK</p><p>&gt; 11.0 HIGH RISK</p>', NULL);

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
(1, 'cholesterol-total', 'GREATERTHANEQUAL', 200, 'AND', 'LESSERTHAN', 240, 'BORDERLINE', 'Y'),
(2, 'cholesterol-total', 'GREATERTHANEQUAL', 240, NULL, NULL, NULL, 'HIGH', 'Y'),
(3, 'triglycerides', 'GREATERTHANEQUAL', 150, 'AND', 'LESSERTHAN', 200, 'BORDERLINE', 'Y'),
(4, 'triglycerides', 'GREATERTHANEQUAL', 200, 'AND', 'LESSERTHAN', 500, 'HIGH', 'Y'),
(5, 'triglycerides', 'GREATERTHAN', 500, NULL, NULL, NULL, 'VERY HIGH', 'Y'),
(6, 'cholesterol-hdl-direct', 'LESSERTHAN', 40, NULL, NULL, NULL, 'LOW', 'Y'),
(7, 'cholesterol-hdl-direct', 'GREATERTHANEQUAL', 40, 'AND', 'LESSERTHAN', 60, 'NORMAL', 'N'),
(8, 'cholesterol-hdl-direct', 'GREATERTHANEQUAL', 60, NULL, NULL, NULL, 'HIGH', 'Y'),
(9, 'cholesterol-ldl-calculated', 'GREATERTHANEQUAL', 100, 'AND', 'LESSERTHAN', 130, 'NEAR OPTIMAL', 'Y'),
(10, 'cholesterol-ldl-calculated', 'GREATERTHANEQUAL', 130, 'AND', 'LESSERTHAN', 160, 'BORDERLINE', 'Y'),
(11, 'cholesterol-ldl-calculated', 'GREATERTHANEQUAL', 160, 'AND', 'LESSERTHAN', 190, 'HIGH', 'Y'),
(12, 'cholesterol-ldl-calculated', 'GREATERTHANEQUAL', 190, NULL, NULL, NULL, 'VERY HIGH', 'Y'),
(13, 'cholesterol-vldl-calculated', 'GREATERTHAN', 30, NULL, NULL, NULL, 'HIGH', 'Y'),
(14, 'chol-hdl-ratio', 'GREATERTHANEQUAL', 3.3, 'AND', 'LESSERTHANEQUAL', 4.4, 'LOW', 'Y'),
(15, 'chol-hdl-ratio', 'GREATERTHANEQUAL', 4.5, 'AND', 'LESSERTHANEQUAL', 7, 'AVERAGE', 'Y'),
(16, 'chol-hdl-ratio', 'GREATERTHANEQUAL', 7.1, 'AND', 'LESSERTHANEQUAL', 11, 'MODERATE', 'Y'),
(17, 'chol-hdl-ratio', 'GREATERTHAN', 11, NULL, NULL, NULL, 'HIGH', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lipid-profile-details`
--

CREATE TABLE `lipid-profile-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `cholesterol-total` float DEFAULT NULL,
  `triglycerides` float DEFAULT NULL,
  `cholesterol-hdl-direct` float DEFAULT NULL,
  `cholesterol-ldl-calculated` float DEFAULT NULL,
  `cholesterol-vldl-calculated` float DEFAULT NULL,
  `chol-hdl-ratio` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lipid-profile-details`
--

INSERT INTO `lipid-profile-details` (`id`, `patient-id`, `cholesterol-total`, `triglycerides`, `cholesterol-hdl-direct`, `cholesterol-ldl-calculated`, `cholesterol-vldl-calculated`, `chol-hdl-ratio`, `created_at`) VALUES
(1, 1, 167, 170, 40.3, 92.7, 34, 4.1, '2018-01-19 13:44:26');

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
(8, 'LIVER FUNCTION TEST', 'liver-function-test'),
(9, 'BIO-T PLUS', 'bio-t-plus'),
(10, 'DIFFERENTIAL LEUKOCYTE COUNT, WHOLE BLOOD', 'differential-leukocyte-count-whole-blood'),
(12, 'LIPID PROFILE', 'lipid-profile');

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
-- Indexes for table `bio-t-plus`
--
ALTER TABLE `bio-t-plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio-t-plus-conditions`
--
ALTER TABLE `bio-t-plus-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio-t-plus-details`
--
ALTER TABLE `bio-t-plus-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

--
-- Indexes for table `differential-leukocyte-count-whole-blood`
--
ALTER TABLE `differential-leukocyte-count-whole-blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `differential-leukocyte-count-whole-blood-conditions`
--
ALTER TABLE `differential-leukocyte-count-whole-blood-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `differential-leukocyte-count-whole-blood-details`
--
ALTER TABLE `differential-leukocyte-count-whole-blood-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

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
-- AUTO_INCREMENT for table `bio-t-plus`
--
ALTER TABLE `bio-t-plus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bio-t-plus-conditions`
--
ALTER TABLE `bio-t-plus-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `bio-t-plus-details`
--
ALTER TABLE `bio-t-plus-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `differential-leukocyte-count-whole-blood`
--
ALTER TABLE `differential-leukocyte-count-whole-blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `differential-leukocyte-count-whole-blood-conditions`
--
ALTER TABLE `differential-leukocyte-count-whole-blood-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `differential-leukocyte-count-whole-blood-details`
--
ALTER TABLE `differential-leukocyte-count-whole-blood-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lipid-profile`
--
ALTER TABLE `lipid-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lipid-profile-conditions`
--
ALTER TABLE `lipid-profile-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bio-t-plus-details`
--
ALTER TABLE `bio-t-plus-details`
  ADD CONSTRAINT `bio-t-plus-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `differential-leukocyte-count-whole-blood-details`
--
ALTER TABLE `differential-leukocyte-count-whole-blood-details`
  ADD CONSTRAINT `differential-leukocyte-count-whole-blood-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
