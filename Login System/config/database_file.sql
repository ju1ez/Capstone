-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2019 at 05:59 PM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `capstone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `capstone`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryTitle` varchar(50) NOT NULL,
  PRIMARY KEY (`CategoryTitle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryTitle`) VALUES
('General Elective'),
('Kent Core'),
('Major Elective'),
('Major Requirement'),
('University Requirement');

-- --------------------------------------------------------

--
-- Table structure for table `coreqs`
--

DROP TABLE IF EXISTS `coreqs`;
CREATE TABLE IF NOT EXISTS `coreqs` (
  `CourseID` varchar(10) NOT NULL,
  `CoreqID` varchar(10) NOT NULL,
  PRIMARY KEY (`CourseID`,`CoreqID`),
  KEY `coreq_id` (`CoreqID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coreqs`
--

INSERT INTO `coreqs` (`CourseID`, `CoreqID`) VALUES
('CS-23022', 'CS-23001'),
('CS-23001', 'CS-23022'),
('CS-35101', 'CS-33211'),
('CS-33211', 'CS-35101'),
('FDM-10023', 'FDM-10024'),
('FDM-10033', 'FDM-10034'),
('FDM-10053', 'FDM-10054');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `Key` int(11) DEFAULT NULL,
  `CourseID` varchar(10) NOT NULL,
  `CourseTitle` varchar(50) DEFAULT NULL,
  `CategoryTitle` varchar(50) DEFAULT NULL,
  `SubjectTitle` varchar(50) DEFAULT NULL,
  `Credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`CourseID`),
  KEY `category_title` (`CategoryTitle`),
  KEY `subject_title` (`SubjectTitle`),
  KEY `SubjectTitle_2` (`SubjectTitle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Key`, `CourseID`, `CourseTitle`, `CategoryTitle`, `SubjectTitle`, `Credits`) VALUES
(4213001, 'CS-13001', 'Programming And Problem Solving', 'Major Requirement', 'Computer Science', 4),
(4213011, 'CS-13011', 'CS1: Procedural Programming', 'Major Requirement', 'Computer Science', 2),
(4213012, 'CS-13012', 'CS1 Part B', 'Major Requirement', 'Computer Science', NULL),
(4223001, 'CS-23001', 'CS2: Data Structures and Abstraction', 'Major Requirement', 'Computer Science', 4),
(4223022, 'CS-23022', 'Discrete Structures For Computer Science', 'Major Requirement', 'Computer Science', 3),
(4233007, 'CS-33007', 'Intro. to Database System Design', 'Major Requirement', 'Computer Science', 3),
(4233101, 'CS-33101', 'Structure of Programming Languages', 'Major Requirement', 'Computer Science', 3),
(4233211, 'CS-33211', 'Operating Systems', 'Major Requirement', 'Computer Science', 3),
(4233901, 'CS-33901', 'Software Engineering', 'Major Requirement', 'Computer Science', 3),
(4235101, 'CS-35101', 'Computer Architecture', 'Major Requirement', 'Computer Science', 3),
(4235201, 'CS-35201', 'Computer Communication Networks', 'Major Requirement', 'Computer Science', 3),
(4244001, 'CS-44001', 'CS3: Programming Patterns', 'Major Requirement', 'Computer Science', 4),
(4246101, 'CS-46101', 'Design and Analysis of Algorithms', 'Major Requirement', 'Computer Science', 3),
(4249901, 'CS-49901', 'Capstone Project', 'Major Requirement', 'Computer Science', 4),
(4230000, 'CS_ELEC', 'CS Upper Division Elective', 'Major Elective', NULL, NULL),
(5322060, 'ECON-22060', 'Principles of Microeconomics', 'Major Requirement', 'Economics', 3),
(7210010, 'FDM-10010', ' Fashion Fundamentals', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7210023, 'FDM-10023', 'Fashion Visuals', 'Major Requirement', 'Fashion Design and Merchandising', 1),
(7210024, 'FDM-10024', 'Fashion Visuals Lab', 'Major Requirement', 'Fashion Design and Merchandising', 2),
(7210033, 'FDM-10033', 'Fashion Fabrics', 'Major Requirement', 'Fashion Design and Merchandising', 1),
(7210034, 'FDM-10034', 'Fashion Fabrics Lab', 'Major Requirement', 'Fashion Design and Merchandising', 2),
(7210053, 'FDM-10053', 'Intro. To Fashion Technology', 'Major Requirement', 'Fashion Design and Merchandising', 1),
(7210054, 'FDM-10054', 'Intro. To Fashion Technology Lab', 'Major Requirement', 'Fashion Design and Merchandising', 2),
(7220030, 'FDM-20030', 'Fashion Apparel Analysis', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7220263, 'FDM-20263', 'Fashion Retail Industry', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7225011, 'FDM-25011', 'Fashion Branding', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7230083, 'FDM-30083', 'Professional Seminar', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7230260, 'FDM-30260', 'Product Development In The Fashion Industry', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7230262, 'FDM-30262', 'Fashion Merchandise Planning and Buying', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7235011, 'FDM-35011', 'Fashion Forecasting', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7235270, 'FDM-35270', 'Computer Applications In Retailing', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7240270, 'FDM-40270', 'Fashion Marketing', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7240291, 'FDM-40291', 'Seminar In Fashion Merchandising', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7245012, 'FDM-45012', 'Textiles and Apparel In The Global Economy', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(7245192, 'FDM-45192', 'Internship In Fashion Merchandising', 'Major Requirement', 'Fashion Design and Merchandising', 3),
(10, 'GE', 'General Elective', 'General Elective', NULL, NULL),
(20, 'KentCore', 'Kent Core Requirement', 'Kent Core', NULL, NULL),
(30, 'LANG', 'Foreign Language Requirement', 'University Requirement', NULL, NULL),
(11410041, 'MATH-10041', 'Introductory Statistics', 'Kent Core', 'Math', 4),
(11411010, 'MATH-11010', 'Algebra For Calculus', 'Kent Core', 'Math', 3),
(11412002, 'MATH-12002', 'Analytic Geometry and Calculus 1', 'Major Requirement', 'Math', 5),
(11412003, 'MATH-12003', 'Analytic Geometry and Calculus 2', 'Major Requirement', 'Math', 5),
(11422005, 'MATH-22005', 'Calculus 3', 'Major Requirement', 'Math', NULL),
(11325010, 'MKTG-25010', 'Principles Of Marketing', 'Major Requirement', 'Marketing', 3),
(16810097, 'UC-10097', 'First Year Experience', 'University Requirement', 'University College', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kent core`
--

DROP TABLE IF EXISTS `kent core`;
CREATE TABLE IF NOT EXISTS `kent core` (
  `Course_ID` varchar(10) NOT NULL,
  `Requirement` varchar(10) NOT NULL,
  PRIMARY KEY (`Course_ID`,`Requirement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prereqs`
--

DROP TABLE IF EXISTS `prereqs`;
CREATE TABLE IF NOT EXISTS `prereqs` (
  `CourseID` varchar(10) NOT NULL,
  `PrereqID` varchar(10) NOT NULL,
  PRIMARY KEY (`CourseID`,`PrereqID`),
  KEY `prereq_id` (`PrereqID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` (`CourseID`, `PrereqID`) VALUES
('CS-23001', 'CS-13001'),
('CS-33007', 'CS-23001'),
('CS-33101', 'CS-23001'),
('CS-33211', 'CS-23001'),
('CS-33901', 'CS-23001'),
('CS-35201', 'CS-23001'),
('CS-44001', 'CS-23001'),
('CS-46101', 'CS-23001'),
('CS-49901', 'CS-33007'),
('CS-49901', 'CS-33901'),
('CS-49901', 'CS-35201'),
('MKTG-25010', 'ECON-22060'),
('FDM-20263', 'FDM-10010'),
('FDM-25011', 'FDM-10010'),
('FDM-20030', 'FDM-10033'),
('FDM-20030', 'FDM-10034'),
('FDM-30083', 'FDM-20030'),
('FDM-30260', 'FDM-20030'),
('FDM-30262', 'FDM-20263'),
('FDM-35270', 'FDM-20263'),
('FDM-35011', 'FDM-25011'),
('FDM-45192', 'FDM-30083'),
('FDM-40291', 'FDM-30260'),
('FDM-40291', 'FDM-30262'),
('FDM-45012', 'FDM-30262'),
('FDM-45192', 'FDM-30262'),
('FDM-40270', 'FDM-35011'),
('FDM-40291', 'FDM-35011'),
('FDM-40291', 'FDM-35270'),
('FDM-45012', 'FDM-35270'),
('FDM-40270', 'MATH-10041'),
('CS-13001', 'MATH-11010'),
('CS-13011', 'MATH-11010'),
('FDM-30262', 'MATH-11010'),
('FDM-35270', 'MATH-11010'),
('MATH-12003', 'MATH-12002'),
('CS-46101', 'MATH-12003'),
('FDM-40270', 'MKTG-25010');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `Number` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(4) NOT NULL,
  `SubjectTitle` varchar(50) NOT NULL,
  PRIMARY KEY (`Number`),
  UNIQUE KEY `SubjectTitle` (`SubjectTitle`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Number`, `Subject`, `SubjectTitle`) VALUES
(1, 'ACCT', 'Accounting'),
(2, 'ACTT', 'Accounting Technology'),
(3, 'ADED', 'Adolescent and Adult Education'),
(4, 'AERN', 'Aeronautics'),
(5, 'ASTU', 'Aerospace Studies'),
(6, 'AGRI', 'Agribusiness'),
(7, 'AHS', 'Allied Health Sciences'),
(8, 'ASL', 'American Sign Language'),
(9, 'ANTH', 'Anthropology'),
(10, 'CACM', 'Applied Conflict Management'),
(11, 'ARAB', 'Arabic'),
(12, 'ARCS', 'Architectural Studies'),
(13, 'AED', 'Architecture and Environmental Design'),
(14, 'ARCH', 'Architecture'),
(15, 'ART', 'Art'),
(16, 'ARTE', 'Art Education'),
(17, 'ARTH', 'Art History'),
(18, 'AS', 'Arts and Sciences'),
(19, 'ARTS', 'Art Studio Art'),
(20, 'ASEI', 'ASL English Interpreting'),
(21, 'ATTR', 'Athletic Training'),
(22, 'AMRT', 'Aviation Maintenance Technology'),
(23, 'BSCI', 'Biological Sciences'),
(24, 'BMS', 'Biomedical Sciences'),
(25, 'BST', 'Biostatistics'),
(26, 'BTEC', 'Biotechnology'),
(27, 'BAD', 'Business Administration'),
(28, 'BUS', 'Business Administration Interdisciplinary'),
(29, 'BMRT', 'Business Management and Related Technologies'),
(42, 'CS', 'Computer Science'),
(53, 'ECON', 'Economics'),
(72, 'FDM', 'Fashion Design and Merchandising'),
(113, 'MKTG', 'Marketing'),
(114, 'MATH', 'Math'),
(168, 'UC', 'University College'),
(175, 'WMST', 'Women\'s Studies');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
CREATE TABLE IF NOT EXISTS `templates` (
  `Degree` varchar(10) NOT NULL,
  `Major` varchar(10) NOT NULL,
  `Roadmap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`Degree`, `Major`, `Roadmap`) VALUES
('BS', 'CS', 'a:8:{i:0;a:6:{i:0;a:3:{s:4:\"name\";s:5:\"CS1-A\";s:8:\"courseID\";s:7:\"4213011\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:5:\"CS1-B\";s:8:\"courseID\";s:7:\"4213012\";s:8:\"critical\";s:1:\"n\";}i:2;a:3:{s:4:\"name\";s:5:\"Calc1\";s:8:\"courseID\";s:8:\"11412002\";s:8:\"critical\";s:1:\"n\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:4;a:3:{s:4:\"name\";s:16:\"General Elective\";s:8:\"courseID\";s:2:\"10\";s:8:\"critical\";s:1:\"n\";}i:5;a:3:{s:4:\"name\";s:3:\"FYE\";s:8:\"courseID\";s:8:\"16810097\";s:8:\"critical\";s:1:\"n\";}}i:1;a:4:{i:0;a:3:{s:4:\"name\";s:3:\"CS2\";s:8:\"courseID\";s:7:\"4223001\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:5:\"Calc2\";s:8:\"courseID\";s:8:\"11412003\";s:8:\"critical\";s:1:\"y\";}i:2;a:3:{s:4:\"name\";s:15:\"Data Structures\";s:8:\"courseID\";s:7:\"4223022\";s:8:\"critical\";s:1:\"y\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}}i:2;a:4:{i:0;a:3:{s:4:\"name\";s:17:\"Operating Systems\";s:8:\"courseID\";s:7:\"4233211\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:21:\"Computer Architecture\";s:8:\"courseID\";s:7:\"4235101\";s:8:\"critical\";s:1:\"y\";}i:2;a:3:{s:4:\"name\";s:5:\"Calc3\";s:8:\"courseID\";s:8:\"11422005\";s:8:\"critical\";s:1:\"y\";}i:3;a:3:{s:4:\"name\";s:16:\"Foreign Language\";s:8:\"courseID\";s:2:\"30\";s:8:\"critical\";s:1:\"n\";}}i:3;a:4:{i:0;a:3:{s:4:\"name\";s:15:\"Database Design\";s:8:\"courseID\";s:7:\"4233007\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:31:\"Computer Communication Networks\";s:8:\"courseID\";s:7:\"4235201\";s:8:\"critical\";s:1:\"y\";}i:2;a:3:{s:4:\"name\";s:16:\"Foreign Language\";s:8:\"courseID\";s:2:\"30\";s:8:\"critical\";s:1:\"n\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}}i:4;a:5:{i:0;a:3:{s:4:\"name\";s:20:\"Software Engineering\";s:8:\"courseID\";s:7:\"4233901\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:3:\"CS3\";s:8:\"courseID\";s:7:\"4244001\";s:8:\"critical\";s:1:\"y\";}i:2;a:3:{s:4:\"name\";s:10:\"Algortihms\";s:8:\"courseID\";s:7:\"4246101\";s:8:\"critical\";s:1:\"y\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:4;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}}i:5;a:4:{i:0;a:3:{s:4:\"name\";s:22:\"Structure of Prog Lang\";s:8:\"courseID\";s:7:\"4233101\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:8:\"critical\";s:1:\"n\";}i:2;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}}i:6;a:5:{i:0;a:3:{s:4:\"name\";s:8:\"Capstone\";s:8:\"courseID\";s:7:\"4249901\";s:8:\"critical\";s:1:\"y\";}i:1;a:3:{s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:8:\"critical\";s:1:\"n\";}i:2;a:3:{s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:8:\"critical\";s:1:\"n\";}i:3;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:4;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}}i:7;a:4:{i:0;a:3:{s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:8:\"critical\";s:1:\"n\";}i:1;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:2;a:3:{s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:8:\"critical\";s:1:\"n\";}i:3;a:3:{s:4:\"name\";s:16:\"General Elective\";s:8:\"courseID\";s:2:\"10\";s:8:\"critical\";s:1:\"n\";}}}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(16, 'testuser2', '$2y$10$DkccDxRFDuQLY7ARM.LoSulcOQ3NjsOv2Q96jPbTwXbbcsyLbmquG', '2019-03-13 18:12:01'),
(15, 'testuser1', '$2y$10$m2Oc1V.C91RMwSBZBuKe1u7QxzDLuLR3DXfCnXSJBuPyRYbdlZsLe', '2019-03-13 18:11:41'),
(14, 'testuser', '$2y$10$lCwlm5ieTaMpCdPxL3oo6.TE19G.cgjsJKjzk7zV/LQDdi7IzTV7O', '2019-03-13 18:09:23'),
(13, 'csalyi', '$2y$10$CMiDxHlz4iU7w58L/RJRluHniL4efvsFm3Qz4JC4l3Q.WGKFJChW.', '2019-03-12 16:19:38'),
(12, 'root', '$2y$10$oWWqMiXN9QILnvzTTv0b4eEgMpieW2hvmWHZwhnp502g61awXpBFm', '2019-03-11 14:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses` ADD FULLTEXT KEY `SubjectTitle` (`SubjectTitle`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coreqs`
--
ALTER TABLE `coreqs`
  ADD CONSTRAINT `coreqs_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE,
  ADD CONSTRAINT `coreqs_ibfk_2` FOREIGN KEY (`CoreqID`) REFERENCES `courses` (`CourseID`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`CategoryTitle`) REFERENCES `categories` (`CategoryTitle`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`SubjectTitle`) REFERENCES `subjects` (`SubjectTitle`);

--
-- Constraints for table `kent core`
--
ALTER TABLE `kent core`
  ADD CONSTRAINT `Kent Core_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prereqs`
--
ALTER TABLE `prereqs`
  ADD CONSTRAINT `prereqs_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE,
  ADD CONSTRAINT `prereqs_ibfk_2` FOREIGN KEY (`PrereqID`) REFERENCES `courses` (`CourseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
