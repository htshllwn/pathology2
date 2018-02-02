-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2018 at 03:02 PM
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
-- Table structure for table `complete-haemograms`
--

CREATE TABLE `complete-haemograms` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complete-haemograms`
--

INSERT INTO `complete-haemograms` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'Hemoglobin Male', 'hemoglobin-male', 'gms%', '<p>13.5-18 gms%</p>', 'High hemoglobin levels mean that measured hemoglobin levels are above the upper limits of normal for the age and sex of the person.'),
(2, 'Hemoglobin Female', 'hemoglobin-female', 'gms%', '<p>11-16 gms%</p>', 'High hemoglobin levels mean that measured hemoglobin levels are above the upper limits of normal for the age and sex of the person.'),
(3, 'RBC Count Male', 'rbc-count-male', 'ml/cu', '<p>&nbsp;4.5-6.5ml/cu</p>', 'If your RBC count is too high or too low, you could experience symptoms and complications.'),
(4, 'RBC Count Female', 'rbc-count-female', 'ml/cu', '<p>4.0-5.6 ml/cu</p>', 'If your RBC count is too high or too low, you could experience symptoms and complications.'),
(5, 'W.B.C. Count', 'wbc-count', 'mm/cu.mm', '<p>4000-11000 mm/cu.mm</p>', 'A WBC count is a blood test to measure the number of white blood cells (WBCs) in the blood.  WBCs are also called leukocytes. They help fight infections. '),
(6, 'Differential count: Neutrophil\'s', 'differential-count-neutrophils', '%', '<p>40-70%</p>', 'Differential blood count gives relative percentage of each type of white blood cell and also helps reveal abnormal white blood cell populations '),
(7, 'Lymphocyte', 'lymphocyte', '%', '<p>20-50%</p>', 'Lymphocytes are an important part of the immune system. They help fight off diseases, so it\'s normal to see a temporary rise in the number of lymphocytes after an infection.'),
(8, 'Monocyte', 'monocyte', '%', '<p>1-8%</p>', 'Monocytes are a type of white blood cell that fight certain infections and help other white blood cells remove dead or damaged tissues, destroy cancer cells, and regulate immunity against foreign substances.'),
(9, 'Eosinophil\'s', 'eosinophils', '%', '<p>1-5%</p>', 'An eosinophil count is a blood test that measures the quantity of eosinophils in your body. '),
(10, 'Basophiles', 'basophiles', '%', '<p>0-1%</p>', 'Basophils are a type of white blood cell. Although they’re produced in the bone marrow, they’re found in many tissues throughout your body.'),
(11, 'Platelet Count ', 'platelet-count', 'Lac/Cumm', '<p>1.5-4.5 Lac/Cumm</p>', 'Platelets are the cells that circulate within our blood and bind together when they recognize damaged blood vessels.'),
(12, 'PCV Male', 'pcv-male', '%', '<p>40-54%</p>', 'PCV is the percentage of red blood cells in circulating blood. A decreased PCV generally means red blood cell loss from any variety of reasons like cell destruction, blood loss, and failure of bone marrow production.'),
(13, 'PCV Female', 'pcv-female', '%', '<p>36-47%</p>', 'PCV is the percentage of red blood cells in circulating blood. A decreased PCV generally means red blood cell loss from any variety of reasons like cell destruction, blood loss, and failure of bone marrow production.'),
(14, 'MCV', 'mcv', 'fl', '<p>82-97fl</p>', 'Mean corpuscular volume (MCV) is the average volume of red cells. '),
(15, 'MCH', 'mch', 'pg', '<p>27-32pg</p>', 'Both mean corpuscular hemoglobin (MCH) and mean corpuscular hemoglobin concentration (MCHC) reflect the average hemoglobin content of red blood cells in slightly different ways.'),
(16, 'MCHC', 'mchc', '%', '<p>32-36%</p>', 'The Mean corpuscular hemoglobin concentration, a measure of the concentration of haemoglobin in a given volume of packed red blood cells.'),
(17, 'RDW', 'rdw', '%', '<p>11.6-14.0%</p>', 'Red cell distribution width (RDW) is a red blood cell parameter that measures variability of red cell volume/size (anisocytosis). '),
(18, 'PCT', 'pct', '%', '<p>0.10-1.00%</p>', 'Procalcitonin  (PCT)  is  a  prohormone  expressed  by  neuroendocrine  cells  (C cells of thyroid,pulmonary and pancreatic tissues) present in very low levels in healthy individuals. '),
(19, 'MPV', 'mpv', 'fl', '<p>5.0-10.0 fl</p>', 'Mean platelet volume (MPV) is a machine-calculated measurement of the average size of platelets found in blood and is typically included in blood tests as part of the CBC.'),
(20, 'PDW', 'pdw', '%', '<p>12-18%</p>', 'PDW is the variability in the size of platelets. Normally PDW increases with MPV.'),
(21, 'ESR(Wintrobe`s) Male', 'esrwintrobes-male', 'MM/FHR', '<p>0-10 MM/FHR</p>', 'The erythrocyte sedimentation rate (ESR) is a common hematological test for nonspecific detection of inflammation that may be caused by infection, some cancers and certain autoimmune diseases.'),
(22, 'ESR(Wintrobe`s) Female', 'esrwintrobes-female', 'MM/FHR', '<p>0-20 MM/FHR</p>', 'The erythrocyte sedimentation rate (ESR) is a common hematological test for nonspecific detection of inflammation that may be caused by infection, some cancers and certain autoimmune diseases.');

-- --------------------------------------------------------

--
-- Table structure for table `complete-haemograms-conditions`
--

CREATE TABLE `complete-haemograms-conditions` (
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
-- Dumping data for table `complete-haemograms-conditions`
--

INSERT INTO `complete-haemograms-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'hemoglobin-male', 'LESSERTHAN', 13, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'hemoglobin-male', 'GREATERTHAN', 18, NULL, NULL, NULL, 'High', 'Y'),
(3, 'hemoglobin-female', 'LESSERTHAN', 11, NULL, NULL, NULL, 'Low', 'Y'),
(4, 'hemoglobin-female', 'GREATERTHAN', 16, NULL, NULL, NULL, 'High', 'Y'),
(5, 'rbc-count-male', 'LESSERTHAN', 4.5, NULL, NULL, NULL, 'Low', 'Y'),
(6, 'rbc-count-male', 'GREATERTHAN', 6.5, NULL, NULL, NULL, 'High', 'Y'),
(7, 'rbc-count-female', 'LESSERTHAN', 4, NULL, NULL, NULL, 'Low', 'Y'),
(8, 'rbc-count-female', 'GREATERTHAN', 5.6, NULL, NULL, NULL, 'High', 'Y'),
(9, 'wbc-count', 'LESSERTHAN', 4000, NULL, NULL, NULL, 'Low', 'Y'),
(10, 'wbc-count', 'GREATERTHAN', 11000, NULL, NULL, NULL, 'High', 'Y'),
(11, 'differential-count-neutrophils', 'LESSERTHAN', 40, NULL, NULL, NULL, 'Low', 'Y'),
(12, 'differential-count-neutrophils', 'GREATERTHAN', 70, NULL, NULL, NULL, 'High', 'Y'),
(13, 'lymphocyte', 'LESSERTHAN', 20, NULL, NULL, NULL, 'Low', 'Y'),
(14, 'lymphocyte', 'GREATERTHAN', 50, NULL, NULL, NULL, 'High', 'Y'),
(15, 'monocyte', 'LESSERTHAN', 1, NULL, NULL, NULL, 'Low', 'Y'),
(16, 'monocyte', 'GREATERTHAN', 8, NULL, NULL, NULL, 'High', 'Y'),
(17, 'eosinophils', 'LESSERTHAN', 1, NULL, NULL, NULL, 'Low', 'Y'),
(18, 'eosinophils', 'GREATERTHAN', 5, NULL, NULL, NULL, 'High', 'Y'),
(19, 'basophiles', 'LESSERTHAN', 0, NULL, NULL, NULL, 'Low', 'Y'),
(20, 'basophiles', 'GREATERTHAN', 1, NULL, NULL, NULL, 'High', 'Y'),
(21, 'platelet-count', 'LESSERTHAN', 1.5, NULL, NULL, NULL, 'Low', 'Y'),
(22, 'platelet-count', 'GREATERTHAN', 4.5, NULL, NULL, NULL, 'High', 'Y'),
(23, 'pcv-male', 'LESSERTHAN', 40, NULL, NULL, NULL, 'Low', 'Y'),
(24, 'pcv-male', 'GREATERTHAN', 54, NULL, NULL, NULL, 'High', 'Y'),
(25, 'pcv-female', 'LESSERTHAN', 36, NULL, NULL, NULL, 'Low', 'Y'),
(26, 'pcv-female', 'GREATERTHAN', 47, NULL, NULL, NULL, 'High', 'Y'),
(27, 'mcv', 'LESSERTHAN', 82, NULL, NULL, NULL, 'Low', 'Y'),
(28, 'mcv', 'GREATERTHAN', 97, NULL, NULL, NULL, 'High', 'Y'),
(29, 'mch', 'LESSERTHAN', 27, NULL, NULL, NULL, 'Low', 'Y'),
(30, 'mch', 'GREATERTHAN', 32, NULL, NULL, NULL, 'High', 'Y'),
(31, 'mchc', 'LESSERTHAN', 32, NULL, NULL, NULL, 'Low', 'Y'),
(32, 'mchc', 'GREATERTHAN', 36, NULL, NULL, NULL, 'High', 'Y'),
(33, 'rdw', 'LESSERTHAN', 11.6, NULL, NULL, NULL, 'Low', 'Y'),
(34, 'rdw', 'GREATERTHAN', 14, NULL, NULL, NULL, 'High', 'Y'),
(35, 'pct', 'LESSERTHAN', 0.1, NULL, NULL, NULL, 'Low', 'Y'),
(36, 'pct', 'GREATERTHAN', 1, NULL, NULL, NULL, 'High', 'Y'),
(37, 'mpv', 'LESSERTHAN', 5, NULL, NULL, NULL, 'Low', 'Y'),
(38, 'mpv', 'GREATERTHAN', 10, NULL, NULL, NULL, 'High', 'Y'),
(39, 'pdw', 'LESSERTHAN', 12, NULL, NULL, NULL, 'Low', 'Y'),
(40, 'pdw', 'GREATERTHAN', 18, NULL, NULL, NULL, 'High', 'Y'),
(41, 'esrwintrobes-male', 'LESSERTHAN', 0, NULL, NULL, NULL, 'Low', 'Y'),
(42, 'esrwintrobes-male', 'GREATERTHAN', 10, NULL, NULL, NULL, 'High', 'Y'),
(43, 'esrwintrobes-female', 'LESSERTHAN', 0, NULL, NULL, NULL, 'Low', 'Y'),
(44, 'esrwintrobes-female', 'GREATERTHAN', 20, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `complete-haemograms-details`
--

CREATE TABLE `complete-haemograms-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `hemoglobin-male` float DEFAULT NULL,
  `hemoglobin-female` float DEFAULT NULL,
  `rbc-count-male` float DEFAULT NULL,
  `rbc-count-female` float DEFAULT NULL,
  `wbc-count` float DEFAULT NULL,
  `differential-count-neutrophils` float DEFAULT NULL,
  `lymphocyte` float DEFAULT NULL,
  `monocyte` float DEFAULT NULL,
  `eosinophils` float DEFAULT NULL,
  `basophiles` float DEFAULT NULL,
  `platelet-count` float DEFAULT NULL,
  `pcv-male` float DEFAULT NULL,
  `pcv-female` float DEFAULT NULL,
  `mcv` float DEFAULT NULL,
  `mch` float DEFAULT NULL,
  `mchc` float DEFAULT NULL,
  `rdw` float DEFAULT NULL,
  `pct` float DEFAULT NULL,
  `mpv` float DEFAULT NULL,
  `pdw` float DEFAULT NULL,
  `esrwintrobes-male` float DEFAULT NULL,
  `esrwintrobes-female` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complete-haemograms-details`
--

INSERT INTO `complete-haemograms-details` (`id`, `patient-id`, `hemoglobin-male`, `hemoglobin-female`, `rbc-count-male`, `rbc-count-female`, `wbc-count`, `differential-count-neutrophils`, `lymphocyte`, `monocyte`, `eosinophils`, `basophiles`, `platelet-count`, `pcv-male`, `pcv-female`, `mcv`, `mch`, `mchc`, `rdw`, `pct`, `mpv`, `pdw`, `esrwintrobes-male`, `esrwintrobes-female`, `created_at`) VALUES
(1, 3, 122, 112, 23, 34, 1, 2, 4, 84, 6, 6, 5, 4, 23, 2, 2, 22, 22, 22, 22, 22, 55, 34, '2018-02-01 06:15:38'),
(2, 4, 1222, 2121, 21212100, 121212, 1212120, 21212, 212121, 12121, 21212, 21212, 12121, 12121, 12121, 21212, 121212, 21212, 1211210, 1212, 121212, 1212, 12121, 21121, '2018-02-01 08:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `electrolytes`
--

CREATE TABLE `electrolytes` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `electrolytes`
--

INSERT INTO `electrolytes` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'Sodium ', 'sodium', 'mEq/L', '<p>135-149mEq/L</p>', 'Sodium accounts for approximately 95% of the osmotically active substances in the extracellular compartment, provided the patient is not in renal failure or has severe hyperglycemia.'),
(2, 'Potassium', 'potassium', 'mEq/L', '<p>3.5-5.5mEq/L</p>', 'Potassium is normally excreted by the kidneys, so disorders that decrease the function of the kidneys can result in hyperkalemia. '),
(3, 'Chlorides', 'chlorides', 'mEq/L', '<p>98-107mEq/L</p>', 'Elevations in chloride may be seen in diarrhea, certain kidney diseases, and sometimes in overactivity of the parathyroid glands.'),
(4, 'Bicarbonate', 'bicarbonate', 'mEq/L', '<p>23-34mEq/L</p>', 'The bicarbonate ion acts as a buffer to maintain the normal levels of acidity (pH) in blood and other fluids in the body.');

-- --------------------------------------------------------

--
-- Table structure for table `electrolytes-conditions`
--

CREATE TABLE `electrolytes-conditions` (
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
-- Dumping data for table `electrolytes-conditions`
--

INSERT INTO `electrolytes-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'sodium', 'LESSERTHAN', 135, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'sodium', 'GREATERTHAN', 149, NULL, NULL, NULL, 'High', 'Y'),
(3, 'potassium', 'LESSERTHAN', 3.5, NULL, NULL, NULL, 'Low', 'Y'),
(4, 'potassium', 'GREATERTHAN', 5.5, NULL, NULL, NULL, 'High', 'Y'),
(5, 'chlorides', 'LESSERTHAN', 98, NULL, NULL, NULL, 'Low', 'Y'),
(6, 'chlorides', 'GREATERTHAN', 107, NULL, NULL, NULL, 'High', 'Y'),
(7, 'bicarbonate', 'LESSERTHAN', 23, NULL, NULL, NULL, 'Low', 'Y'),
(8, 'bicarbonate', 'GREATERTHAN', 34, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `electrolytes-details`
--

CREATE TABLE `electrolytes-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `sodium` float DEFAULT NULL,
  `potassium` float DEFAULT NULL,
  `chlorides` float DEFAULT NULL,
  `bicarbonate` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `electrolytes-details`
--

INSERT INTO `electrolytes-details` (`id`, `patient-id`, `sodium`, `potassium`, `chlorides`, `bicarbonate`, `created_at`) VALUES
(1, 3, 1222, 2121, 2121, 2121, '2018-02-01 06:25:56'),
(2, 3, 1, 1, 1, 1, '2018-02-01 06:26:08');

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
-- Table structure for table `liver-profile`
--

CREATE TABLE `liver-profile` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liver-profile`
--

INSERT INTO `liver-profile` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'S.BILIRUBIN (T)', 'sbilirubin-t', 'mg/dL', '<p>0.1-1.2 mg/dL</p>', ' A small amount of bilirubin in your blood is normal, but a high level may be a sign of liver disease. '),
(2, 'S.BILIRUBIN (D)', 'sbilirubin-d', 'mg/dL', '<p>0.1-0.4 mg/dL</p>', 'This is the water-soluble fraction. This  is  measured  by  the  reaction  with  diazotized sulfanilic acid in 1 minute and this gives estimation of conjugated bilirubin.'),
(3, 'S.BILIRUBIN (I)', 'sbilirubin-i', 'mg/dL', '<p>0.1-0.7 mg/dL</p>', 'This fraction is calculated by the difference of the total and direct bilirubin and is a measure of unconjugated fraction of bilirubin.'),
(4, 'SGOT', 'sgot', 'U/L', '<p>Upto 46U/L</p>', 'SGOT is normally present in a number of tissues such as heart, liver, muscle, brain and kidney. It is released into the blood stream whenever any of these tissues gets damaged. '),
(5, 'SGPT', 'sgpt', 'U/L', '<p>Upto 49U/L</p>', 'Your body uses ALT to break down food into energy. Normally, ALT levels in the blood are low.'),
(6, 'ALK.PHOSPHATESE', 'alkphosphatese', 'U/L', '<p>30-125U/L</p>', 'Alkaline phosphatase (ALP) is present in a number of tissues including liver, bone, intestine, and placenta.');

-- --------------------------------------------------------

--
-- Table structure for table `liver-profile-conditions`
--

CREATE TABLE `liver-profile-conditions` (
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
-- Dumping data for table `liver-profile-conditions`
--

INSERT INTO `liver-profile-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'sbilirubin-t', 'LESSERTHAN', 0.1, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'sbilirubin-t', 'GREATERTHAN', 1.2, NULL, NULL, NULL, 'High', 'Y'),
(3, 'sbilirubin-d', 'LESSERTHAN', 0.1, NULL, NULL, NULL, 'Low', 'Y'),
(4, 'sbilirubin-d', 'GREATERTHAN', 0.4, NULL, NULL, NULL, 'High', 'Y'),
(5, 'sbilirubin-i', 'LESSERTHAN', 0.1, NULL, NULL, NULL, 'Low', 'Y'),
(6, 'sbilirubin-i', 'GREATERTHAN', 0.7, NULL, NULL, NULL, 'High', 'Y'),
(7, 'sgot', 'GREATERTHAN', 46, NULL, NULL, NULL, 'High', 'Y'),
(8, 'sgpt', 'GREATERTHAN', 49, NULL, NULL, NULL, 'High', 'Y'),
(9, 'alkphosphatese', 'LESSERTHAN', 30, NULL, NULL, NULL, 'Low', 'Y'),
(10, 'alkphosphatese', 'GREATERTHAN', 125, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `liver-profile-details`
--

CREATE TABLE `liver-profile-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `sbilirubin-t` float DEFAULT NULL,
  `sbilirubin-d` float DEFAULT NULL,
  `sbilirubin-i` float DEFAULT NULL,
  `sgot` float DEFAULT NULL,
  `sgpt` float DEFAULT NULL,
  `alkphosphatese` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liver-profile-details`
--

INSERT INTO `liver-profile-details` (`id`, `patient-id`, `sbilirubin-t`, `sbilirubin-d`, `sbilirubin-i`, `sgot`, `sgpt`, `alkphosphatese`, `created_at`) VALUES
(1, 3, 212, 2121, 1212, 1212, 121, 211, '2018-02-01 08:05:27');

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
-- Table structure for table `renal-profile`
--

CREATE TABLE `renal-profile` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renal-profile`
--

INSERT INTO `renal-profile` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'Blood Urea', 'blood-urea', 'mg/dL', '<p>10 - 50 mg/dl</p>', 'Urea is the principal nitrogenous waste product of metabolism and is generated from protein breakdown.'),
(2, 'Blood Urea Nitrogen', 'blood-urea-nitrogen', 'mg/dL', '<p>4 - 20mg/dL</p>', 'BUN level varies inversely with the glomerular filtration rate (GFR).'),
(3, 'S. Creatinine  Male', 's-creatinine-male', 'mg/dL', '<p>0.7 - 1.4 mg/dl</p>', 'Serum creatinine increases with decreases in GFR (acute kidney injury or chronic kidney disease). '),
(4, 'S. Creatinine Female', 's-creatinine-female', 'mg/dL', '<p>0.6 - 1.2 mg/dl</p>', 'Serum creatinine increases with decreases in GFR (acute kidney injury or chronic kidney disease). '),
(5, 'S. Uric Acid Male', 's-uric-acid-male', 'mg/dl', '<p>3.4 - 7.0 mg/dl<br />&nbsp;</p>', 'Elevated uric acid levels can be seen in the Chronic kidney disease.'),
(6, 'S. Uric Acid Female', 's-uric-acid-female', 'mg/dl', '<p>2.4 - 5.7 mg/dl</p>', 'Elevated uric acid levels can be seen in the Chronic kidney disease.'),
(7, 'S. Phosphorus Adults ', 's-phosphorus-adults', 'mg/dL', '<p>2.5 - 5.0 mg/dl</p>', 'May be considered a moderate decrease and typically does not give rise to clinical signs and symptoms '),
(8, 'S. Phosphorus Children', 's-phosphorus-children', 'mg/dl', '<p>4.0 - 7.0 mg/dl</p>', 'May be considered a moderate decrease and typically does not give rise to clinical signs and symptoms '),
(9, 'S. Calcium', 's-calcium', 'mg/dL', '<p>8.5 - 10.5mg/dL</p>', 'Measurement of the ionized calcium component is generally obtained in specialized laboratories and through a special procedure. ');

-- --------------------------------------------------------

--
-- Table structure for table `renal-profile-conditions`
--

CREATE TABLE `renal-profile-conditions` (
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
-- Dumping data for table `renal-profile-conditions`
--

INSERT INTO `renal-profile-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'blood-urea', 'LESSERTHAN', 10, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'blood-urea', 'GREATERTHAN', 50, NULL, NULL, NULL, 'High', 'Y'),
(3, 'blood-urea-nitrogen', 'LESSERTHAN', 4, NULL, NULL, NULL, 'Low', 'Y'),
(4, 'blood-urea-nitrogen', 'GREATERTHAN', 20, NULL, NULL, NULL, 'High', 'Y'),
(5, 's-creatinine-male', 'LESSERTHAN', 0.7, NULL, NULL, NULL, 'Low', 'Y'),
(6, 's-creatinine-male', 'GREATERTHAN', 1.4, NULL, NULL, NULL, 'High', 'Y'),
(7, 's-creatinine-female', 'LESSERTHAN', 0.6, NULL, NULL, NULL, 'Low', 'Y'),
(8, 's-creatinine-female', 'GREATERTHAN', 1.2, NULL, NULL, NULL, 'High', 'Y'),
(9, 's-uric-acid-male', 'LESSERTHAN', 3.4, NULL, NULL, NULL, 'Low', 'Y'),
(10, 's-uric-acid-male', 'GREATERTHAN', 7, NULL, NULL, NULL, 'High', 'Y'),
(11, 's-uric-acid-female', 'LESSERTHAN', 2.4, NULL, NULL, NULL, 'Low', 'Y'),
(12, 's-uric-acid-female', 'GREATERTHAN', 5.7, NULL, NULL, NULL, 'High', 'Y'),
(13, 's-phosphorus-adults', 'LESSERTHAN', 2.5, NULL, NULL, NULL, 'Low', 'Y'),
(14, 's-phosphorus-adults', 'GREATERTHAN', 5, NULL, NULL, NULL, 'High', 'Y'),
(15, 's-phosphorus-children', 'LESSERTHAN', 4, NULL, NULL, NULL, 'Low', 'Y'),
(16, 's-phosphorus-children', 'GREATERTHAN', 7, NULL, NULL, NULL, 'High', 'Y'),
(17, 's-calcium', 'LESSERTHAN', 8.5, NULL, NULL, NULL, 'Low', 'Y'),
(18, 's-calcium', 'GREATERTHAN', 10.5, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `renal-profile-details`
--

CREATE TABLE `renal-profile-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `blood-urea` float DEFAULT NULL,
  `blood-urea-nitrogen` float DEFAULT NULL,
  `s-creatinine-male` float DEFAULT NULL,
  `s-creatinine-female` float DEFAULT NULL,
  `s-uric-acid-male` float DEFAULT NULL,
  `s-uric-acid-female` float DEFAULT NULL,
  `s-phosphorus-adults` float DEFAULT NULL,
  `s-phosphorus-children` float DEFAULT NULL,
  `s-calcium` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renal-profile-details`
--

INSERT INTO `renal-profile-details` (`id`, `patient-id`, `blood-urea`, `blood-urea-nitrogen`, `s-creatinine-male`, `s-creatinine-female`, `s-uric-acid-male`, `s-uric-acid-female`, `s-phosphorus-adults`, `s-phosphorus-children`, `s-calcium`, `created_at`) VALUES
(1, 3, 221, 21211, 21212, 212, 121, 121, 121, 121, 121, '2018-02-01 08:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `sugar`
--

CREATE TABLE `sugar` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `reference` text NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sugar`
--

INSERT INTO `sugar` (`id`, `col_name`, `col_slug`, `units`, `reference`, `interpretations`) VALUES
(1, 'FBS', 'fbs', 'mg/dL', '<p>70-110 mg/dL</p>', 'Fasting blood sugar is a test for glucose content in a person’s blood that, as the name suggests, is conducted after fasting. The test is generally carried out in the morning, after an overnight fasting. As a part of the test, a sample of the patient’s blood is collected and then sent to the lab for testing.'),
(2, 'PPBS', 'ppbs', 'mg/dL', '<p>Upto 160mg/dL</p>', 'A postprandial glucose test is a blood glucose test that determines the amount of a type of sugar, called glucose, in the blood after a meal.');

-- --------------------------------------------------------

--
-- Table structure for table `sugar-conditions`
--

CREATE TABLE `sugar-conditions` (
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
-- Dumping data for table `sugar-conditions`
--

INSERT INTO `sugar-conditions` (`id`, `col_slug`, `con1`, `val1`, `and_or`, `con2`, `val2`, `result`, `show_y_n`) VALUES
(1, 'fbs', 'LESSERTHAN', 70, NULL, NULL, NULL, 'Low', 'Y'),
(2, 'fbs', 'GREATERTHAN', 110, NULL, NULL, NULL, 'High', 'Y'),
(3, 'ppbs', 'GREATERTHAN', 160, NULL, NULL, NULL, 'High', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sugar-details`
--

CREATE TABLE `sugar-details` (
  `id` int(11) NOT NULL,
  `patient-id` int(11) NOT NULL,
  `fbs` float DEFAULT NULL,
  `ppbs` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sugar-details`
--

INSERT INTO `sugar-details` (`id`, `patient-id`, `fbs`, `ppbs`, `created_at`) VALUES
(2, 3, 233, 323, '2018-02-01 09:22:30');

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
(13, 'LIPID PROFILE', 'lipid-profile'),
(15, 'COMPLETE HAEMOGRAMS', 'complete-haemograms'),
(18, 'ELECTROLYTES', 'electrolytes'),
(23, 'LIVER PROFILE', 'liver-profile'),
(24, 'RENAL PROFILE', 'renal-profile'),
(25, 'SUGAR', 'sugar');

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
(10, 'URINE ANALYSIS', 'urine-analysis');

-- --------------------------------------------------------

--
-- Table structure for table `urine-analysis`
--

CREATE TABLE `urine-analysis` (
  `id` int(11) NOT NULL,
  `col_name` varchar(255) NOT NULL,
  `col_slug` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `interpretations` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urine-analysis`
--

INSERT INTO `urine-analysis` (`id`, `col_name`, `col_slug`, `cat`, `interpretations`) VALUES
(1, 'PHYSICAL EXAMINATION', 'physical-examination', 'TITLE', 'Normal urine color is due to the presence of a pigment called urochrome.'),
(2, 'Quantity', 'quantity', 'TEST', NULL),
(3, 'Color', 'color', 'TEST', NULL),
(4, 'Transparency', 'transparency', 'TEST', NULL),
(5, 'Reaction', 'reaction', 'TEST', NULL),
(6, 'Specific Gravity', 'specific-gravity', 'TEST', NULL),
(7, 'Deposits', 'deposits', 'TEST', NULL),
(8, 'MICROSCOPIC EXAMINATION', 'microscopic-examination', 'TITLE', 'Urinary pH levels are particularly useful in the evaluation of stones, infection, and renal tubular acidosis (RTA)'),
(9, 'Pus Cells', 'pus-cells', 'TEST', NULL),
(10, 'Red Blood Cells', 'red-blood-cells', 'TEST', NULL),
(11, 'Epithelial Cell', 'epithelial-cell', 'TEST', NULL),
(12, 'Casts', 'casts', 'TEST', NULL),
(13, 'Crystals', 'crystals', 'TEST', NULL),
(14, 'Bacteria', 'bacteria', 'TEST', NULL),
(15, 'Amorphous Deposits', 'amorphous-deposits', 'TEST', NULL),
(16, 'CHEMICAL EXAMINATION', 'chemical-examination', 'TITLE', ' Specific gravity is a measurement of urine concentration and is representative of the kidney’s ability to concentrate urine'),
(17, 'Albumin', 'albumin', 'TEST', NULL),
(18, 'Sugar', 'sugar', 'TEST', NULL);

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
-- Indexes for table `complete-haemograms`
--
ALTER TABLE `complete-haemograms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete-haemograms-conditions`
--
ALTER TABLE `complete-haemograms-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete-haemograms-details`
--
ALTER TABLE `complete-haemograms-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

--
-- Indexes for table `electrolytes`
--
ALTER TABLE `electrolytes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrolytes-conditions`
--
ALTER TABLE `electrolytes-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrolytes-details`
--
ALTER TABLE `electrolytes-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

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
-- Indexes for table `liver-profile`
--
ALTER TABLE `liver-profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liver-profile-conditions`
--
ALTER TABLE `liver-profile-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liver-profile-details`
--
ALTER TABLE `liver-profile-details`
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
-- Indexes for table `renal-profile`
--
ALTER TABLE `renal-profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renal-profile-conditions`
--
ALTER TABLE `renal-profile-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renal-profile-details`
--
ALTER TABLE `renal-profile-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

--
-- Indexes for table `sugar`
--
ALTER TABLE `sugar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugar-conditions`
--
ALTER TABLE `sugar-conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugar-details`
--
ALTER TABLE `sugar-details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient-id` (`patient-id`);

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
-- Indexes for table `urine-analysis`
--
ALTER TABLE `urine-analysis`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `complete-haemograms`
--
ALTER TABLE `complete-haemograms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `complete-haemograms-conditions`
--
ALTER TABLE `complete-haemograms-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `complete-haemograms-details`
--
ALTER TABLE `complete-haemograms-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `electrolytes`
--
ALTER TABLE `electrolytes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `electrolytes-conditions`
--
ALTER TABLE `electrolytes-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `electrolytes-details`
--
ALTER TABLE `electrolytes-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `liver-profile`
--
ALTER TABLE `liver-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `liver-profile-conditions`
--
ALTER TABLE `liver-profile-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `liver-profile-details`
--
ALTER TABLE `liver-profile-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `renal-profile`
--
ALTER TABLE `renal-profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `renal-profile-conditions`
--
ALTER TABLE `renal-profile-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `renal-profile-details`
--
ALTER TABLE `renal-profile-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sugar`
--
ALTER TABLE `sugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sugar-conditions`
--
ALTER TABLE `sugar-conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sugar-details`
--
ALTER TABLE `sugar-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `text_based`
--
ALTER TABLE `text_based`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `urine-analysis`
--
ALTER TABLE `urine-analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
-- Constraints for table `complete-haemograms-details`
--
ALTER TABLE `complete-haemograms-details`
  ADD CONSTRAINT `complete-haemograms-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `electrolytes-details`
--
ALTER TABLE `electrolytes-details`
  ADD CONSTRAINT `electrolytes-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lipid-profile-details`
--
ALTER TABLE `lipid-profile-details`
  ADD CONSTRAINT `lipid-profile-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liver-profile-details`
--
ALTER TABLE `liver-profile-details`
  ADD CONSTRAINT `liver-profile-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renal-profile-details`
--
ALTER TABLE `renal-profile-details`
  ADD CONSTRAINT `renal-profile-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sugar-details`
--
ALTER TABLE `sugar-details`
  ADD CONSTRAINT `sugar-details_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
