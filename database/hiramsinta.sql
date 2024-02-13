-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 06:17 AM
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
-- Database: `hiramsinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `itemID` int(10) NOT NULL,
  `borrowerID` varchar(15) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`itemID`, `borrowerID`, `date`, `time`) VALUES
(6, '2021-05819-MN-0', '2024-02-13', '00:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

CREATE TABLE `lend` (
  `itemID` int(10) NOT NULL,
  `lenderID` varchar(15) NOT NULL,
  `item` varchar(50) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(10) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `availability` enum('YES','NO') NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lend`
--

INSERT INTO `lend` (`itemID`, `lenderID`, `item`, `description`, `place`, `date`, `time`, `price`, `image`, `availability`) VALUES
(1, '2021-05819-MN-0', 'laptop', 'a computer that is portable and suitable for use while traveling.', 'cea', '2024-01-25', '12:15:00', 50, '../uploads/item/65b1e044a6eb50.63278856.jpg', 'YES'),
(2, '2021-05432-MN-0', 'Calculator', 'CASIO', 'MAIN', '2024-01-25', '15:16:43', 20, '../uploads/item/65b1e0ab4d12e2.03573537.jpg', 'YES'),
(3, '2021-05432-MN-0', 'Ruler', 'triangle', 'cea', '2024-01-25', '09:18:44', 10, '../uploads/item/65b1e1244d9bc5.30327829.jpg', 'YES'),
(4, '2021-05441-MN-0', 'laptop', 'ACER', 'MAIN', '2024-01-25', '12:20:57', 0, '../uploads/item/65b1e1a97b9bb9.45543856.jpg', 'YES'),
(5, '2021-05819-MN-0', 'Website', 'shopping', 'main', '2024-02-11', '04:24:31', 120, '../uploads/item/65c7db7f85e7c7.44940008.jpg', 'YES'),
(6, '2021-05819-MN-0', 'AKO', 'CUTE', 'CEA', '2024-02-13', '05:32:17', 1000, '../uploads/item/65ca8e614a3ab4.23522893.png', 'NO'),
(7, '2021-05819-MN-0', 'AKO', 'CUTE', 'CEA', '2024-02-13', '05:32:17', 1000, '../uploads/item/65ca8e614de429.63056152.png', 'YES'),
(8, '2021-05819-MN-0', 'ROMARK', 'SIRA', 'CEA', '2024-02-13', '05:32:45', 1, '../uploads/item/65ca8e7d2bb017.85832482.png', 'YES'),
(9, '09', 'masarap', 'ako', 'ugh.', '2024-02-13', '11:25:55', 1, '../uploads/item/65cae1438ad340.70739580.jpg', 'YES'),
(10, '09', 'cutie patotie', 'yum yum yummy', 'uwu', '2024-02-13', '11:26:37', 69, '../uploads/item/65cae16db2de19.04814381.jpg', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `itemID` int(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `ownerID` varchar(15) NOT NULL,
  `borrowerID` varchar(15) NOT NULL,
  `borrowdate` date NOT NULL,
  `borrowtime` time NOT NULL,
  `returndate` date NOT NULL,
  `returntime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` varchar(15) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `webmail` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `college` enum('CE','CADBE') NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` int(5) NOT NULL,
  `age` int(5) NOT NULL,
  `sex` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `studentname`, `webmail`, `password`, `username`, `college`, `course`, `year`, `age`, `sex`) VALUES
('09', 'jomari', 'fjiodsfjslkijdf', 'jpmari', 'jm', 'CE', 'bscpe', 1, 32134, 'Male'),
('2021-05432-MN-0', 'Charlotte Quezada', 'charlottequezada@iskolarngbayan.pup.edu.ph', 'charlqt', 'charlot', 'CADBE', 'Bachelor of Science in Architecture', 1, 21, 'Female'),
('2021-05441-MN-0', 'Christian Yadao', 'christianyadao@iskolarngbayan.pup.edu.ph', 'yadao', 'christian', 'CE', 'Bachelor of Science in Civil Engineering', 4, 22, 'Male'),
('2021-05819-MN-0', 'Jherimy Bernas', 'jherimys.bernas@iskolarngbayan.pup.edu.ph', 'sison0524J', 'sisondgaf', 'CE', 'Bachelor of Science in Computer Engineering', 3, 20, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `lend`
--
ALTER TABLE `lend`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lend`
--
ALTER TABLE `lend`
  MODIFY `itemID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
