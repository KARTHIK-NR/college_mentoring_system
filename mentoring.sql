-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `password`) VALUES
('ADch', 'chandra', 'mit@123'),
('ADka', 'karthik', 'mit@123');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `HOD_ID` bigint(100) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `PASSWORD` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`HOD_ID`, `NAME`, `PASSWORD`) VALUES
(2, 'manjunath', 'mit@123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `branch` varchar(300) NOT NULL,
  `semester` varchar(300) NOT NULL,
  `teacher_id` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `address`, `branch`, `semester`, `teacher_id`) VALUES
('4MH21MC021', 'KARTHIK N R', 'Bangalore', 'mca', '2', '11'),
('4MH21MC022', 'KARTHIK N R', 'Bangalore', 'mca', '2', '1'),
('4MH21MC023', 'KARTHIK N R', 'mysore', 'mca', '2', '1'),
('4MH21MC0237', 'sahana', 'fkem', 'MCA', '4', '1'),
('4MH21MC0239', 'chandra', 'MSKJKJWJDWJKDJDKWJKJKWJK', 'MCA', '2', '1'),
('4MH21MC0245', 'wfwfwr', 'awdvawd', 'MCA', '2', '121'),
('4MH21MC025', 'MANTHESH', 'MYSORE', 'MCA', '2', '1'),
('4MH21MC035', 'RENUKA PRASAD', 'TUMKUR', 'MCA', '2', '121'),
('4mh21mcjjwofo', 'IHJIJWD', 'NNKNIKNS', 'JIFJKS', '2', '1'),
('BC182048', 'karthik', 'njh', 'hio', '1', '11');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `usn` varchar(400) NOT NULL,
  `IA_marks1` bigint(20) NOT NULL,
  `IA_marks2` bigint(20) NOT NULL,
  `IA_marks3` bigint(20) NOT NULL,
  `semester_percentage` float NOT NULL,
  `cocurricular_activity` varchar(400) NOT NULL,
  `sugesstion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`usn`, `IA_marks1`, `IA_marks2`, `IA_marks3`, `semester_percentage`, `cocurricular_activity`, `sugesstion`) VALUES
('4MH21MC022', 34, 25, 22, 70, '1233535', '1213131'),
('4MH21MC021', 34, 25, 22, 70, 'sfas', 'ada'),
('4MH21MC025', 34, 20, 20, 20, 'cjhckhe', 'hdjhw');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(400) NOT NULL,
  `teacher_name` varchar(400) NOT NULL,
  `teacher_gender` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_gender`, `password`) VALUES
('1', 'prof Pavithra', 'male', '123'),
('11', 'prof Thejaswini', 'male', '123'),
('121', 'prof subramanya', 'male', '1234'),
('122', 'prof Ashwin', 'male', '123'),
('123', 'prof Mahalakshmi', 'male', 'sdcfjgsd'),
('1232334', 'prof Amos', 'male', 'sfsv'),
('12345', 'KARTHIK', 'male', 'kichcha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`HOD_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `HOD_ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
