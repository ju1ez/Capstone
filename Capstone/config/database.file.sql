-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2019 at 08:43 PM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Capstone`
--
CREATE DATABASE IF NOT EXISTS `Capstone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Capstone`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryTitle` varchar(50) NOT NULL
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

CREATE TABLE `coreqs` (
  `CourseID` varchar(10) NOT NULL,
  `CoreqID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coreqs`
--

INSERT INTO `coreqs` (`CourseID`, `CoreqID`) VALUES
('CS-23001', 'CS-23022'),
('CS-23022', 'CS-23001'),
('CS-33211', 'CS-35101'),
('CS-35101', 'CS-33211'),
('FDM-10023', 'FDM-10024'),
('FDM-10033', 'FDM-10034'),
('FDM-10053', 'FDM-10054');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Key` int(11) DEFAULT NULL,
  `CourseID` varchar(10) NOT NULL,
  `CourseTitle` varchar(50) DEFAULT NULL,
  `CategoryTitle` varchar(50) DEFAULT NULL,
  `SubjectTitle` varchar(50) DEFAULT NULL,
  `Credits` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Key`, `CourseID`, `CourseTitle`, `CategoryTitle`, `SubjectTitle`, `Credits`) VALUES
(NULL, 'ANTH-18210', 'Global Cultural Diversity: Anthropological', 'Kent Core', 'Anthropology', 3),
(NULL, 'ANTH-18420', 'Archaeology: Ancient Lives and Cultures', 'Kent Core', 'Anthropology', 3),
(NULL, 'ARCH-10001', 'Understanding Architecture', 'Kent Core', 'Architecture', 3),
(NULL, 'ARCH-10011', 'Global Architectural History I', 'Kent Core', 'Architecture', 3),
(NULL, 'ARCH-10012', 'Global Architectural History II', 'Kent Core', 'Architecture', 3),
(NULL, 'ARTH-12001', 'Art as a World Phenomenon', 'Kent Core', 'Art History', 3),
(NULL, 'ARTH-22006', 'Art History: Ancient and Medieval Art', 'Kent Core', 'Art History', 3),
(NULL, 'ARTH-22007', 'Art History: Renaissance to Modern Art', 'Kent Core', 'Art History', 3),
(NULL, 'ARTH-22020', 'Art of Africa, Oceania and the Americas', 'Kent Core', 'Art History', 3),
(NULL, 'CACM-11001', 'Introduction to Conflict Management ', 'Kent Core', 'Applied Conflict Management', 3),
(NULL, 'CLAS-21404', 'The Greek Achievement', 'Kent Core', 'Classics', 3),
(NULL, 'CLAS-21405', 'The Roman Achievement', 'Kent Core', 'Classics', 3),
(NULL, 'CRIM-26704', 'Issues in Law and Society', 'Kent Core', 'Criminology', 3),
(NULL, 'CS-10051', 'Introduction to Computer Science', 'Kent Core', 'Computer Science', 4),
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
(NULL, 'DAN-27076', 'Dance as an Art Form', 'Kent Core', 'Dance', 3),
(5322060, 'ECON-22060', 'Principles of Microeconomics', 'Major Requirement', 'Economics', 3),
(NULL, 'ENG-11001', 'College Writing I', 'Kent Core', 'English', 3),
(NULL, 'ENG-21011', 'College Writing II', 'Kent Core', 'English', 3),
(NULL, 'ENG-21054', 'Introduction to Shakespeare', 'Kent Core', 'English', 3),
(NULL, 'ENG-22071', 'Great Books to 1700', 'Kent Core', 'English', 3),
(NULL, 'ENG-22072', 'Great Books Since 1700', 'Kent Core', 'English', 3),
(NULL, 'ENG-22073', 'Major Modern Writers: British and United States', 'Kent Core', 'English', 3),
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
(NULL, 'HIST-11050', 'World History: Ancient and Medieval', 'Kent Core', 'History', 3),
(NULL, 'HIST-11051', 'World History: Modern', 'Kent Core', 'History', 3),
(NULL, 'HIST-12070', 'Early America: From Pre-Colonization to Civil War', 'Kent Core', 'History', 3),
(NULL, 'HIST-12071', 'Modern America: From Indus. to Globalization', 'Kent Core', 'History', 3),
(20, 'KentCore', 'Kent Core Requirement', 'Kent Core', NULL, NULL),
(30, 'LANG', 'Foreign Language Requirement', 'University Requirement', NULL, NULL),
(11410041, 'MATH-10041', 'Introductory Statistics', 'Kent Core', 'Math', 4),
(NULL, 'MATH-10051', 'Quantitative Reasoning', 'Kent Core', 'Math', 4),
(NULL, 'MATH-11008', 'Explorations in Modern Mathematics', 'Kent Core', 'Math', 3),
(NULL, 'MATH-11009', 'Modeling Algebra', 'Kent Core', 'Math', 4),
(11411010, 'MATH-11010', 'Algebra For Calculus', 'Kent Core', 'Math', 3),
(NULL, 'MATH-11012', 'Intuitive Calculus', 'Kent Core', 'Math', 3),
(NULL, 'MATH-11022', 'Trigonometry', 'Kent Core', 'Math', 3),
(NULL, 'MATH-12001', 'Algebra and Trigonometry', 'Kent Core', 'Math', 5),
(11412002, 'MATH-12002', 'Analytic Geometry and Calculus 1', 'Major Requirement', 'Math', 5),
(11412003, 'MATH-12003', 'Analytic Geometry and Calculus 2', 'Major Requirement', 'Math', 5),
(NULL, 'MATH-12011', 'Calculus with Precalculus I', 'Kent Core', 'Math', 3),
(NULL, 'MATH-12012', 'Calculus with Precalculus II', 'Kent Core', 'Math', 3),
(NULL, 'MATH-14001', 'Basic Mathematical Concepts I', 'Kent Core', 'Math', 4),
(NULL, 'MATH-14002', 'Basic Mathematical Concepts II', 'Kent Core', 'Math', 4),
(11422005, 'MATH-22005', 'Calculus 3', 'Major Requirement', 'Math', NULL),
(11325010, 'MKTG-25010', 'Principles Of Marketing', 'Major Requirement', 'Marketing', 3),
(NULL, 'MUS-22111', 'The Understanding of Music', 'Kent Core', 'Music', 3),
(NULL, 'MUS-22121', 'Music as a World Phenomenon', 'Kent Core', 'Music', 3),
(NULL, 'PAS-23001', 'Black Experience I: Beginnings to 1865', 'Kent Core', 'Pan-African Studies', 3),
(NULL, 'PAS-23002', 'Black Experience II: 1865 to Present', 'Kent Core', 'Pan-African Studies', 3),
(NULL, 'PHIL-11001', 'Introduction to Philosophy', 'Kent Core', 'Philosophy', 3),
(NULL, 'PHIL-21001', 'Introduction to Ethics', 'Kent Core', 'Philosophy', 3),
(NULL, 'PHIL-21002', 'Introduction to Formal Logic', 'Kent Core', 'Philosophy', 3),
(NULL, 'REL-11020', 'Introduction to World Religions', 'Kent Core', 'Religion', 3),
(NULL, 'REL-21021', 'Moses, Jesus, and Mohammad', 'Kent Core', 'Religion', 3),
(NULL, 'THEA-11000', 'The Art of the Theatre', 'Kent Core', 'Theatre', 3),
(16810097, 'UC-10097', 'First Year Experience', 'University Requirement', 'University College', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kent_core`
--

CREATE TABLE `kent_core` (
  `Course_ID` varchar(10) NOT NULL,
  `Requirement` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kent_core`
--

INSERT INTO `kent_core` (`Course_ID`, `Requirement`) VALUES
('ARCH-10001', 'KFA'),
('ARCH-10011', 'KFA'),
('ARCH-10012', 'KFA'),
('ARTH-12001', 'KFA'),
('ARTH-22006', 'KFA'),
('ARTH-22007', 'KFA'),
('ARTH-22020', 'KFA'),
('CLAS-21404', 'KHUM'),
('CLAS-21405', 'KHUM'),
('CS-10051', 'KMCR'),
('DAN-27076', 'KFA'),
('ENG-11001', 'KCMP'),
('ENG-21011', 'KCMP'),
('ENG-21054', 'KHUM'),
('ENG-22071', 'KHUM'),
('ENG-22072', 'KHUM'),
('ENG-22073', 'KHUM'),
('HIST-11050', 'KHUM'),
('HIST-11051', 'KHUM'),
('HIST-12070', 'KHUM'),
('HIST-12071', 'KHUM'),
('MATH-10041', 'KMCR'),
('MATH-10051', 'KMCR'),
('MATH-11008', 'KMCR'),
('MATH-11009', 'KMCR'),
('MATH-11010', 'KMCR'),
('MATH-11012', 'KMCR'),
('MATH-11022', 'KMCR'),
('MATH-12001', 'KMCR'),
('MATH-12002', 'KMCR'),
('MATH-12011', 'KMCR'),
('MATH-12012', 'KMCR'),
('MATH-14001', 'KMCR'),
('MATH-14002', 'KMCR'),
('MUS-22111', 'KFA'),
('MUS-22121', 'KFA'),
('PAS-23001', 'KHUM'),
('PAS-23002', 'KHUM'),
('PHIL-11001', 'KHUM'),
('PHIL-21001', 'KHUM'),
('PHIL-21002', 'KMCR'),
('REL-11020', 'KHUM'),
('REL-21021', 'KHUM'),
('THEA-11000', 'KFA');

-- --------------------------------------------------------

--
-- Table structure for table `prereqs`
--

CREATE TABLE `prereqs` (
  `CourseID` varchar(10) NOT NULL,
  `PrereqID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` (`CourseID`, `PrereqID`) VALUES
('CS-13001', 'MATH-11010'),
('CS-13011', 'MATH-11010'),
('CS-23001', 'CS-13001'),
('CS-33007', 'CS-23001'),
('CS-33101', 'CS-23001'),
('CS-33211', 'CS-23001'),
('CS-33901', 'CS-23001'),
('CS-35201', 'CS-23001'),
('CS-44001', 'CS-23001'),
('CS-46101', 'CS-23001'),
('CS-46101', 'MATH-12003'),
('CS-49901', 'CS-33007'),
('CS-49901', 'CS-33901'),
('CS-49901', 'CS-35201'),
('FDM-20030', 'FDM-10033'),
('FDM-20030', 'FDM-10034'),
('FDM-20263', 'FDM-10010'),
('FDM-25011', 'FDM-10010'),
('FDM-30083', 'FDM-20030'),
('FDM-30260', 'FDM-20030'),
('FDM-30262', 'FDM-20263'),
('FDM-30262', 'MATH-11010'),
('FDM-35011', 'FDM-25011'),
('FDM-35270', 'FDM-20263'),
('FDM-35270', 'MATH-11010'),
('FDM-40270', 'FDM-35011'),
('FDM-40270', 'MATH-10041'),
('FDM-40270', 'MKTG-25010'),
('FDM-40291', 'FDM-30260'),
('FDM-40291', 'FDM-30262'),
('FDM-40291', 'FDM-35011'),
('FDM-40291', 'FDM-35270'),
('FDM-45012', 'FDM-30262'),
('FDM-45012', 'FDM-35270'),
('FDM-45192', 'FDM-30083'),
('FDM-45192', 'FDM-30262'),
('MATH-12003', 'MATH-12002'),
('MKTG-25010', 'ECON-22060');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Number` int(11) NOT NULL,
  `Subject` varchar(4) NOT NULL,
  `SubjectTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(33, 'CHEM', 'Chemistry'),
(35, 'CLAS', 'Classics'),
(40, 'COMM', 'Communication Studies'),
(42, 'CS', 'Computer Science'),
(46, 'CRIM', 'Criminology'),
(49, 'DAN', 'Dance'),
(53, 'ECON', 'Economics'),
(54, 'EDLE', 'Educational Leadership K-12'),
(61, 'ENG', 'English'),
(72, 'FDM', 'Fashion Design and Merchandising'),
(76, 'GEOG', 'Geography'),
(77, 'GEOL', 'Geology'),
(79, 'GERO', 'Gerontology'),
(88, 'HIST', 'History'),
(89, 'HONR', 'Honors'),
(103, 'JMC', 'Journalism ans Mass Communication '),
(113, 'MKTG', 'Marketing'),
(114, 'MATH', 'Math'),
(120, 'MUS', 'Music'),
(125, 'NUTR', 'Nutrition'),
(129, 'PAS', 'Pan-African Studies'),
(132, 'PHIL', 'Philosophy'),
(136, 'PHY', 'Physics'),
(140, 'POL', 'Political Science'),
(142, 'PSYC', 'Psychology'),
(151, 'REL', 'Religion'),
(157, 'SOC', 'Sociology'),
(166, 'THEA', 'Theatre'),
(168, 'UC', 'University College'),
(175, 'WMST', 'Women\'s Studies');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `plan1` text DEFAULT NULL,
  `plan2` text DEFAULT NULL,
  `plan3` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `plan1`, `plan2`, `plan3`, `email`) VALUES
(24, 'agast', '$2y$10$92SEZSdtn3basEYRud1XIOHWKyt2Nmlhm.ToIuqlOuSR364puX7Hq', '2019-04-03 15:34:01', NULL, NULL, NULL, NULL),
(13, 'csalyi', '$2y$10$CMiDxHlz4iU7w58L/RJRluHniL4efvsFm3Qz4JC4l3Q.WGKFJChW.', '2019-03-12 16:19:38', NULL, NULL, NULL, NULL),
(21, 'root', '$2y$10$xv6v9q/CaJHhP0.Wcxx8FOGoPLe1hqSc72EzvjkufXCL1jeI0SOSe', '2019-04-02 10:30:57', NULL, NULL, NULL, NULL),
(18, 'ztalley', '$2y$10$kFd/WRoa1upMYhSaUVatwuFdsAc.NF5ipxjz9fNBo3sUl4Id1j7Ee', '2019-04-01 23:51:28', NULL, NULL, NULL, NULL),
(39, 'apple', '$2y$10$w80gv9MxeQ6L8fXSFWgwkeqR8m1NbSOHhivxy1JZuByy1HonUrwuW', '2019-04-03 16:46:50', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryTitle`);

--
-- Indexes for table `coreqs`
--
ALTER TABLE `coreqs`
  ADD PRIMARY KEY (`CourseID`,`CoreqID`),
  ADD KEY `coreq_id` (`CoreqID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `category_title` (`CategoryTitle`),
  ADD KEY `subject_title` (`SubjectTitle`),
  ADD KEY `SubjectTitle_2` (`SubjectTitle`);
ALTER TABLE `courses` ADD FULLTEXT KEY `SubjectTitle` (`SubjectTitle`);

--
-- Indexes for table `kent_core`
--
ALTER TABLE `kent_core`
  ADD PRIMARY KEY (`Course_ID`,`Requirement`);

--
-- Indexes for table `prereqs`
--
ALTER TABLE `prereqs`
  ADD PRIMARY KEY (`CourseID`,`PrereqID`),
  ADD KEY `prereq_id` (`PrereqID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Number`),
  ADD UNIQUE KEY `SubjectTitle` (`SubjectTitle`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
-- Constraints for table `kent_core`
--
ALTER TABLE `kent_core`
  ADD CONSTRAINT `kent_core_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
