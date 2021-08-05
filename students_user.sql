-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 05:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_ID` int(8) NOT NULL,
  `Firstname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_ID`, `Firstname`, `Lastname`, `Username`, `Password`, `Status`) VALUES
(58010021, 'McKenzie', 'Davis', '58010021', 'ChangeMe', 'Student'),
(58010113, 'Bailey', 'Carter', '58010113', 'ChangeMe', 'Student'),
(58010339, 'Brady', 'Brady', '58010339', 'ChangeMe', 'Student'),
(58010459, 'Cooper', 'Parker', '58010459', 'ChangeMe', 'Student'),
(58010518, 'Ellis', 'Carter', '58010518', 'ChangeMe', 'Student'),
(58010585, 'Finley', 'Fallon', '58010585', 'ChangeMe', 'Student'),
(58010766, 'Lincoln', 'Smith', '58010766', 'ChangeMe', 'Student'),
(58010796, 'Lennon', 'Carter', '58010796', 'ChangeMe', 'Student'),
(58010820, 'Lennox', 'Anderson', '58010820', 'ChangeMe', 'Student'),
(58010938, 'Jagger', 'Campbell', '58010938', 'ChangeMe', 'Student'),
(58100057, 'Quinn', 'Addison', '58100057', 'ChangeMe', 'Student'),
(58100284, 'Reagan', 'Sullivan', '58100284', 'ChangeMe', 'Student'),
(58100290, 'Taylor', 'Lane', '58100290', 'ChangeMe', 'Student'),
(58110050, 'Tyler', 'Jackson', '58110050', 'ChangeMe', 'Student'),
(58110063, 'Sawyer', 'Nash', '58110063', 'ChangeMe', 'Student'),
(58110611, 'Anderson', 'Jagger', '58110611', 'ChangeMe', 'Student'),
(58110791, 'Beckett', 'Miller', '58110791', 'ChangeMe', 'Student'),
(58110869, 'Campbell', 'Taylor', '58110869', 'ChangeMe', 'Student'),
(58110953, 'Cash', 'Davis', '58110953', 'ChangeMe', 'Student'),
(58200447, 'Carson', 'Greyson', '58200447', 'ChangeMe', 'Student'),
(58300002, 'Sullivan', 'West', '58300002', 'ChangeMe', 'Student'),
(58300003, 'West', 'West', '58300003', 'ChangeMe', 'Student'),
(58300004, 'Vaugh', 'Hudson', '58300004', 'ChangeMe', 'Student'),
(58300005, 'Addison', 'McKenzie', '58300005', 'ChangeMe', 'Student'),
(58300011, 'Cassidy', 'Brady', '58300011', 'ChangeMe', 'Student'),
(58300012, 'Delaney', 'Greyson', '58300012', 'ChangeMe', 'Student'),
(58300013, 'Fallon', 'Addison', '58300013', 'ChangeMe', 'Student'),
(58300015, 'Harlow', 'Lennox', '58300015', 'ChangeMe', 'Student'),
(58300016, 'Lane', 'Nixon', '58300016', 'ChangeMe', 'Student'),
(58300021, 'Kennedy', 'Addison', '58300021', 'ChangeMe', 'Student'),
(58300022, 'Monroe', 'Anderson', '58300022', 'ChangeMe', 'Student'),
(58400075, 'Cohen', 'Cohen', '58400075', 'ChangeMe', 'Student'),
(58400272, 'Carter', 'Harrison', '58400272', 'ChangeMe', 'Student'),
(58400278, 'Davis', 'Addison', '58400278', 'ChangeMe', 'Student'),
(58400417, 'Dawson', 'Taylor', '58400417', 'ChangeMe', 'Student'),
(58400623, 'Easton', 'Sullivan', '58400623', 'ChangeMe', 'Student'),
(58400666, 'Greyson', 'Lennon', '58400666', 'ChangeMe', 'Student'),
(58400696, 'Griffin', 'Lennox', '58400696', 'ChangeMe', 'Student'),
(58410180, 'Harrison', 'Quinn', '58410180', 'ChangeMe', 'Student'),
(58410197, 'Hendrix', 'Griffin', '58410197', 'ChangeMe', 'Student'),
(58430538, 'Hudson', 'Harlow', '58430538', 'ChangeMe', 'Student'),
(58430847, 'Jackson', 'Dawson', '58430847', 'ChangeMe', 'Student'),
(58430997, 'Kingsley', 'Griffin', '58430997', 'ChangeMe', 'Student'),
(58431136, 'Lewis', 'Campbell', '58431136', 'ChangeMe', 'Student'),
(58700002, 'Miller', 'Davis', '58700002', 'ChangeMe', 'Student'),
(58700026, 'Nash', 'Anderson', '58700026', 'ChangeMe', 'Student'),
(58700029, 'Nixon', 'Taylor', '58700029', 'ChangeMe', 'Student'),
(58700031, 'Parker', 'Parker', '58700031', 'ChangeMe', 'Student'),
(58700190, 'Reed', 'Reagan', '58700190', 'ChangeMe', 'Student'),
(58710013, 'Smith', 'West', '58710013', 'ChangeMe', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
