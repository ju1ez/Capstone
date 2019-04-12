-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 02:20 PM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.2.16

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
('CS-33301', 'CS-35101'),
('CS-35101', 'CS-33211'),
('FDM-10023', 'FDM-10024'),
('FDM-10033', 'FDM-10034'),
('FDM-10053', 'FDM-10054');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseKey` int(11) DEFAULT NULL,
  `CourseID` varchar(10) NOT NULL,
  `CourseTitle` varchar(50) DEFAULT NULL,
  `SubjectTitle` varchar(50) DEFAULT NULL,
  `Credits` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseKey`, `CourseID`, `CourseTitle`, `SubjectTitle`, `Credits`) VALUES
(NULL, 'ANTH-18210', 'Global Cultural Diversity: Anthropological', 'Anthropology', 3),
(NULL, 'ANTH-18420', 'Archaeology: Ancient Lives and Cultures', 'Anthropology', 3),
(NULL, 'ANTH-18630', 'Human Evolution', 'Anthropology', 3),
(NULL, 'ARAB-11101', 'Elementary Arabic I', 'Arabic', 4),
(NULL, 'ARAB-11102', 'Elementary Arabic II', 'Arabic', 4),
(NULL, 'ARCH-10001', 'Understanding Architecture', 'Architecture', 3),
(NULL, 'ARCH-10011', 'Global Architectural History I', 'Architecture', 3),
(NULL, 'ARCH-10012', 'Global Architectural History II', 'Architecture', 3),
(NULL, 'ARTH-12001', 'Art as a World Phenomenon', 'Art History', 3),
(NULL, 'ARTH-22006', 'Art History: Ancient and Medieval Art', 'Art History', 3),
(NULL, 'ARTH-22007', 'Art History: Renaissance to Modern Art', 'Art History', 3),
(NULL, 'ARTH-22020', 'Art of Africa, Oceania and the Americas', 'Art History', 3),
(NULL, 'ATTR-25057', 'Human Anatomy and Physiology I', 'Athletic Training', 4),
(NULL, 'ATTR-25058', 'Human Anatomy and Physiology II', 'Athletic Training', 4),
(NULL, 'BSCI-10001', 'Human Biology', 'Biological Sciences', 3),
(NULL, 'BSCI-10002', 'Life on Planet Earth', 'Biological Sciences', 3),
(NULL, 'BSCI-10110', 'Biological Diversity', 'Biological Sciences', 5),
(NULL, 'BSCI-10120', 'Biological Foundations', 'Biological Sciences', 5),
(NULL, 'BSCI-11010', 'Foundational Anatomy and Physiology I', 'Biological Sciences', 5),
(NULL, 'BSCI-11020', 'Foundational Anatomy and Physiology II', 'Biological Sciences', 5),
(NULL, 'BSCI-21010', 'Anatomy and Physiology I', 'Biological Sciences', 5),
(NULL, 'CACM-11001', 'Introduction to Conflict Management ', 'Applied Conflict Management', 3),
(NULL, 'CHEM-10030', 'Chemistry in Our World', 'Chemistry', 3),
(NULL, 'CHEM-10050', 'Fundamentals of Chemistry', 'Chemistry', 3),
(NULL, 'CHEM-10052', 'Introduction to Organic Chemistry', 'Chemistry', 3),
(NULL, 'CHEM-10055', 'Molecules of Life', 'Chemistry', 3),
(NULL, 'CHEM-10060', 'General Chemistry I', 'Chemistry', 5),
(NULL, 'CHEM-10061', 'General Chemistry II', 'Chemistry', 5),
(NULL, 'CHEM-10970', 'Honors General Chemistry I', 'Chemistry', 5),
(NULL, 'CHEM-10971', 'Honors General Chemistry II', 'Chemistry', 5),
(NULL, 'CHIN-15101', 'Elementary Chinese I', 'Chinese', 4),
(NULL, 'CHIN-15102', 'Elementary Chinese I', 'Chinese', 4),
(NULL, 'CLAS-21404', 'The Greek Achievement', 'Classics', 3),
(NULL, 'CLAS-21405', 'The Roman Achievement', 'Classics', 3),
(NULL, 'CRIM-26704', 'Issues in Law and Society', 'Criminology', 3),
(4210051, 'CS-10051', 'Introduction to Computer Science', 'Computer Science', 4),
(4213001, 'CS-13001', 'Programming And Problem Solving', 'Computer Science', 4),
(4213011, 'CS-13011', 'CS1: Procedural Programming', 'Computer Science', 2),
(4213012, 'CS-13012', 'CS1 Part B', 'Computer Science', 2),
(4223001, 'CS-23001', 'CS2: Data Structures and Abstraction', 'Computer Science', 4),
(4223022, 'CS-23022', 'Discrete Structures For Computer Science', 'Computer Science', 3),
(4233006, 'CS-33006', 'Social and Ethical Issues in Computing', 'Computer Science', 3),
(4233007, 'CS-33007', 'Intro. to Database System Design', 'Computer Science', 3),
(NULL, 'CS-33011', 'Speed Programming Techniques', 'Computer Science', 3),
(4233101, 'CS-33101', 'Structure of Programming Languages', 'Computer Science', 3),
(4233211, 'CS-33211', 'Operating Systems', 'Computer Science', 3),
(NULL, 'CS-33223', 'Unix Tools', 'Computer Science', 3),
(NULL, 'CS-33301', 'Embedded System Programming', 'Computer Science', 3),
(4233901, 'CS-33901', 'Software Engineering', 'Computer Science', 3),
(4235101, 'CS-35101', 'Computer Architecture', 'Computer Science', 3),
(4235201, 'CS-35201', 'Computer Communication Networks', 'Computer Science', 3),
(NULL, 'CS-38101', 'Intro. to Game Programming', 'Computer Science', 3),
(NULL, 'CS-41038', 'Intermediate Logic', 'Computer Science', 3),
(NULL, 'CS-43006', 'Theory of Object Oriented Programming', 'Computer Science', 3),
(NULL, 'CS-43016', 'Big Data Analytics', 'Computer Science', 3),
(NULL, 'CS-43105', 'Data Mining Techniques', 'Computer Science', 3),
(4244001, 'CS-44001', 'CS3: Programming Patterns', 'Computer Science', 4),
(4246101, 'CS-46101', 'Design and Analysis of Algorithms', 'Computer Science', 3),
(4249901, 'CS-49901', 'Capstone Project', 'Computer Science', 4),
(4230000, 'CS_ELEC', 'CS Upper Division Elective', NULL, NULL),
(NULL, 'DAN-27076', 'Dance as an Art Form', 'Dance', 3),
(5322060, 'ECON-22060', 'Principles of Microeconomics', 'Economics', 3),
(NULL, 'ECON-22061', 'Principles of Macroeconomics', 'Economics', 3),
(NULL, 'ENG-11001', 'College Writing I', 'English', 3),
(NULL, 'ENG-21011', 'College Writing II', 'English', 3),
(NULL, 'ENG-21054', 'Introduction to Shakespeare', 'English', 3),
(NULL, 'ENG-22071', 'Great Books to 1700', 'English', 3),
(NULL, 'ENG-22072', 'Great Books Since 1700', 'English', 3),
(NULL, 'ENG-22073', 'Major Modern Writers: British and United States', 'English', 3),
(7210010, 'FDM-10010', ' Fashion Fundamentals', 'Fashion Design and Merchandising', 3),
(7210023, 'FDM-10023', 'Fashion Visuals', 'Fashion Design and Merchandising', 1),
(7210024, 'FDM-10024', 'Fashion Visuals Lab', 'Fashion Design and Merchandising', 2),
(7210033, 'FDM-10033', 'Fashion Fabrics', 'Fashion Design and Merchandising', 1),
(7210034, 'FDM-10034', 'Fashion Fabrics Lab', 'Fashion Design and Merchandising', 2),
(7210053, 'FDM-10053', 'Intro. To Fashion Technology', 'Fashion Design and Merchandising', 1),
(7210054, 'FDM-10054', 'Intro. To Fashion Technology Lab', 'Fashion Design and Merchandising', 2),
(7220030, 'FDM-20030', 'Fashion Apparel Analysis', 'Fashion Design and Merchandising', 3),
(7220263, 'FDM-20263', 'Fashion Retail Industry', 'Fashion Design and Merchandising', 3),
(7225011, 'FDM-25011', 'Fashion Branding', 'Fashion Design and Merchandising', 3),
(7230083, 'FDM-30083', 'Professional Seminar', 'Fashion Design and Merchandising', 3),
(7230260, 'FDM-30260', 'Product Development In The Fashion Industry', 'Fashion Design and Merchandising', 3),
(7230262, 'FDM-30262', 'Fashion Merchandise Planning and Buying', 'Fashion Design and Merchandising', 3),
(7235011, 'FDM-35011', 'Fashion Forecasting', 'Fashion Design and Merchandising', 3),
(7235270, 'FDM-35270', 'Computer Applications In Retailing', 'Fashion Design and Merchandising', 3),
(7240270, 'FDM-40270', 'Fashion Marketing', 'Fashion Design and Merchandising', 3),
(7240291, 'FDM-40291', 'Seminar In Fashion Merchandising', 'Fashion Design and Merchandising', 3),
(7245012, 'FDM-45012', 'Textiles and Apparel In The Global Economy', 'Fashion Design and Merchandising', 3),
(7245192, 'FDM-45192', 'Internship In Fashion Merchandising', 'Fashion Design and Merchandising', 3),
(NULL, 'FR-13201', 'Elementary French I', 'French', 4),
(NULL, 'FR-13202', 'Elementary French II', 'French', 4),
(10, 'GE', 'General Elective', NULL, NULL),
(NULL, 'GEOG-10160', 'Introduction to Geography', 'Geography', 3),
(NULL, 'GEOG-17063', 'World Geography', 'Geography', 3),
(NULL, 'GEOG-17064', 'Geography of the United States and Canada', 'Geography', 3),
(NULL, 'GEOG-21062', 'Physical Geography', 'Geography', 3),
(NULL, 'GEOG-22061', 'Human Geography', 'Geography', 3),
(NULL, 'GEOL-11040', 'How the Earth Works', 'Geology', 3),
(NULL, 'GEOL-11042', 'Earth and Life Through Time', 'Geology', 3),
(NULL, 'GEOL-21062', 'Environmental Earth Science', 'Geology', 3),
(NULL, 'GEOL-21080', 'All About the Oceans', 'Geology', 3),
(NULL, 'GER-11201', 'Elementary German I', 'German', 4),
(NULL, 'GER-11202', 'Elementary German II', 'German', 4),
(NULL, 'GERO-14029', 'Introduction to Gerontology', 'Gerontology', 3),
(NULL, 'HIST-11050', 'World History: Ancient and Medieval', 'History', 3),
(NULL, 'HIST-11051', 'World History: Modern', 'History', 3),
(NULL, 'HIST-12070', 'Early America: From Pre-Colonization to Civil War', 'History', 3),
(NULL, 'HIST-12071', 'Modern America: From Indus. to Globalization', 'History', 3),
(NULL, 'ITAL-15201', 'Elementary Italian I', 'Italian', 4),
(NULL, 'ITAL-15202', 'Elementary Italian II', 'Italian', 4),
(NULL, 'JMC-20001', 'Media, Power and Culture', 'Journalism ans Mass Communication ', 3),
(20, 'KentCore', 'Kent Core Requirement', NULL, NULL),
(30, 'LANG', 'Foreign Language Requirement', NULL, NULL),
(11410041, 'MATH-10041', 'Introductory Statistics', 'Math', 4),
(NULL, 'MATH-10051', 'Quantitative Reasoning', 'Math', 4),
(NULL, 'MATH-11008', 'Explorations in Modern Mathematics', 'Math', 3),
(NULL, 'MATH-11009', 'Modeling Algebra', 'Math', 4),
(11411010, 'MATH-11010', 'Algebra For Calculus', 'Math', 3),
(NULL, 'MATH-11012', 'Intuitive Calculus', 'Math', 3),
(NULL, 'MATH-11022', 'Trigonometry', 'Math', 3),
(NULL, 'MATH-12001', 'Algebra and Trigonometry', 'Math', 5),
(11412002, 'MATH-12002', 'Analytic Geometry and Calculus 1', 'Math', 5),
(11412003, 'MATH-12003', 'Analytic Geometry and Calculus 2', 'Math', 5),
(NULL, 'MATH-12011', 'Calculus with Precalculus I', 'Math', 3),
(NULL, 'MATH-12012', 'Calculus with Precalculus II', 'Math', 3),
(NULL, 'MATH-14001', 'Basic Mathematical Concepts I', 'Math', 4),
(NULL, 'MATH-14002', 'Basic Mathematical Concepts II', 'Math', 4),
(11422005, 'MATH-22005', 'Calculus 3', 'Math', NULL),
(11325010, 'MKTG-25010', 'Principles Of Marketing', 'Marketing', 3),
(NULL, 'MUS-22111', 'The Understanding of Music', 'Music', 3),
(NULL, 'MUS-22121', 'Music as a World Phenomenon', 'Music', 3),
(NULL, 'NUTR-23511', 'Science of Human Nutrition', 'Nutrition', 3),
(NULL, 'PAS-23001', 'Black Experience I: Beginnings to 1865', 'Pan-African Studies', 3),
(NULL, 'PAS-23002', 'Black Experience II: 1865 to Present', 'Pan-African Studies', 3),
(NULL, 'PHIL-11001', 'Introduction to Philosophy', 'Philosophy', 3),
(NULL, 'PHIL-21001', 'Introduction to Ethics', 'Philosophy', 3),
(NULL, 'PHIL-21002', 'Introduction to Formal Logic', 'Philosophy', 3),
(NULL, 'PHY-11030', 'Seven Ideas that Shook the Universe', 'Physics', 3),
(NULL, 'PHY-12201', 'Technical Physics I', 'Physics', 5),
(NULL, 'PHY-12202', 'Technical Physics II', 'Physics', 5),
(NULL, 'PHY-13001', 'General College Physics I', 'Physics', 4),
(NULL, 'PHY-13002', 'General College Physics II', 'Physics', 4),
(NULL, 'PHY-13011', 'College Physics I', 'Physics', 3),
(NULL, 'PHY-13012', 'College Physics II', 'Physics', 3),
(NULL, 'PHY-21040', 'Physics in Entertainment and the Arts', 'Physics', 3),
(NULL, 'PHY-21430', 'Frontiers in Astronomy', 'Physics', 3),
(NULL, 'POL-10004', 'Comparative Politics', 'Political Science', 3),
(NULL, 'POL-10100', 'American Politics', 'Political Science', 3),
(NULL, 'POL-10500', 'World Politics', 'Political Science', 3),
(NULL, 'PSYC-11762', 'General Psychology', 'Psychology', 3),
(NULL, 'PSYC-20651', 'Child Psychology', 'Psychology', 3),
(NULL, 'PSYC-21211', 'Psychology of Everyday Life', 'Psychology', 3),
(NULL, 'PSYC-22221', 'Multicultural Psychology', 'Psychology', 3),
(NULL, 'REL-11020', 'Introduction to World Religions', 'Religion', 3),
(NULL, 'REL-21021', 'Moses, Jesus, and Mohammad', 'Religion', 3),
(NULL, 'RUSS-12201', 'Elementary Russian I', 'Russian', 4),
(NULL, 'RUSS-12202', 'Elementary Russian II', 'Russian', 4),
(NULL, 'SOC-12050', 'Introduction to Sociology', 'Sociology', 3),
(NULL, 'SOC-22778', 'Social Problems', 'Sociology', 3),
(NULL, 'SPAN-18201', 'Elementary Spanish I', 'Spanish', 4),
(NULL, 'SPAN-18202', 'Elementary Spanish II', 'Spanish', 4),
(NULL, 'THEA-11000', 'The Art of the Theatre', 'Theatre', 3),
(16810097, 'UC-10097', 'First Year Experience', 'University College', 1);

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
('CS-23001', 'CS-13012'),
('CS-33006', 'CS-13012'),
('CS-33007', 'CS-23001'),
('CS-33011', 'CS-23001'),
('CS-33101', 'CS-23001'),
('CS-33211', 'CS-23001'),
('CS-33223', 'CS-13001'),
('CS-33301', 'CS-23001'),
('CS-33901', 'CS-23001'),
('CS-35201', 'CS-23001'),
('CS-38101', 'CS-23001'),
('CS-43006', 'CS-23001'),
('CS-43016', 'CS-23001'),
('CS-43105', 'CS-33007'),
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
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `CourseID` varchar(10) NOT NULL,
  `Requirement` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`CourseID`, `Requirement`) VALUES
('ANTH-18210', 'KSS'),
('ANTH-18420', 'KSS'),
('ANTH-18630', 'KBS'),
('ARAB-11101', 'FL'),
('ARAB-11102', 'FL'),
('ARCH-10001', 'KFA'),
('ARCH-10011', 'KFA'),
('ARCH-10012', 'KFA'),
('ARTH-12001', 'KFA'),
('ARTH-22006', 'KFA'),
('ARTH-22007', 'KFA'),
('ARTH-22020', 'KFA'),
('ATTR-25057', 'KLAB'),
('ATTR-25058', 'KLAB'),
('BSCI-10001', 'KBS'),
('BSCI-10002', 'KBS'),
('BSCI-10110', 'KLAB'),
('BSCI-10120', 'KLAB'),
('BSCI-11010', 'KLAB'),
('BSCI-11020', 'KLAB'),
('BSCI-21010', 'KLAB'),
('CACM-11001', 'KSS'),
('CHEM-10030', 'KBS'),
('CHEM-10050', 'KBS'),
('CHEM-10052', 'KLAB'),
('CHEM-10055', 'KBS'),
('CHEM-10060', 'KLAB'),
('CHEM-10061', 'KLAB'),
('CHEM-10970', 'KLAB'),
('CHEM-10971', 'KLAB'),
('CLAS-21404', 'KHUM'),
('CLAS-21405', 'KHUM'),
('CRIM-26704', 'KSS'),
('CS-10051', 'KMCR'),
('CS-33006', 'UE3'),
('CS-33011', 'UE3'),
('CS-33223', 'UE3'),
('CS-33301', 'UE3'),
('CS-38101', 'UE3'),
('CS-41038', 'UE4'),
('CS-43006', 'UE4'),
('CS-43016', 'UE4'),
('CS-43105', 'UE4'),
('DAN-27076', 'KFA'),
('ECON-22060', 'KSS'),
('ECON-22061', 'KSS'),
('ENG-11001', 'KCMP'),
('ENG-21011', 'KCMP'),
('ENG-21054', 'KHUM'),
('ENG-22071', 'KHUM'),
('ENG-22072', 'KHUM'),
('ENG-22073', 'KHUM'),
('FR-13201', 'FL'),
('FR-13202', 'FL'),
('GEOG-10160', 'KSS'),
('GEOG-17063', 'KSS'),
('GEOG-17064', 'KSS'),
('GEOG-21062', 'KBS'),
('GEOG-22061', 'KSS'),
('GEOL-11040', 'KBS'),
('GEOL-11042', 'KBS'),
('GEOL-21062', 'KBS'),
('GEOL-21080', 'KBS'),
('GER-11201', 'FL'),
('GER-11202', 'FL'),
('GERO-14029', 'KSS'),
('HIST-11050', 'KHUM'),
('HIST-11051', 'KHUM'),
('HIST-12070', 'KHUM'),
('HIST-12071', 'KHUM'),
('ITAL-15201', 'FL'),
('ITAL-15202', 'FL'),
('JMC-20001', 'KSS'),
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
('NUTR-23511', 'KBS'),
('PAS-23001', 'KHUM'),
('PAS-23002', 'KHUM'),
('PHIL-11001', 'KHUM'),
('PHIL-21001', 'KHUM'),
('PHIL-21002', 'KMCR'),
('PHY-11030', 'KBS'),
('PHY-12201', 'KLAB'),
('PHY-12202', 'KLAB'),
('PHY-13001', 'KBS'),
('PHY-13002', 'KBS'),
('PHY-13011', 'KLAB'),
('PHY-13012', 'KLAB'),
('PHY-21040', 'KBS'),
('PHY-21430', 'KBS'),
('POL-10004', 'KSS'),
('POL-10100', 'KSS'),
('POL-10500', 'KSS'),
('PSYC-11762', 'KSS'),
('PSYC-20651', 'KSS'),
('PSYC-21211', 'KSS'),
('PSYC-22221', 'KSS'),
('REL-11020', 'KHUM'),
('REL-21021', 'KHUM'),
('RUSS-12201', 'FL'),
('RUSS-12202', 'FL'),
('SOC-12050', 'KSS'),
('SOC-22778', 'KSS'),
('SPAN-18201', 'FL'),
('SPAN-18202', 'FL'),
('THEA-11000', 'KFA');

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
(34, 'CHIN', 'Chinese'),
(35, 'CLAS', 'Classics'),
(40, 'COMM', 'Communication Studies'),
(42, 'CS', 'Computer Science'),
(46, 'CRIM', 'Criminology'),
(49, 'DAN', 'Dance'),
(53, 'ECON', 'Economics'),
(54, 'EDLE', 'Educational Leadership K-12'),
(61, 'ENG', 'English'),
(72, 'FDM', 'Fashion Design and Merchandising'),
(74, 'FR', 'French'),
(76, 'GEOG', 'Geography'),
(77, 'GEOL', 'Geology'),
(78, 'GER', 'German'),
(79, 'GERO', 'Gerontology'),
(85, 'HEBR', 'Hebrew'),
(88, 'HIST', 'History'),
(89, 'HONR', 'Honors'),
(100, 'ITAL', 'Italian'),
(101, 'JAPN', 'Japanese'),
(103, 'JMC', 'Journalism ans Mass Communication '),
(108, 'LAT', 'Latin'),
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
(154, 'RUSS', 'Russian'),
(157, 'SOC', 'Sociology'),
(158, 'SPAN', 'Spanish'),
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
('BS', 'CS', 'a:8:{i:0;a:6:{i:0;a:7:{s:6:\"course\";s:8:\"CS-13011\";s:4:\"name\";s:28:\"CSIA: PROCEDURAL PROGRAMMING\";s:8:\"courseID\";s:7:\"4213011\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:8:\"CS-13012\";s:4:\"name\";s:33:\"CSIB: OBJECT ORIENTED PROGRAMMING\";s:8:\"courseID\";s:7:\"4213012\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:1:{i:0;s:7:\"4213011\";}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:2;a:7:{s:6:\"course\";s:10:\"MATH-12002\";s:4:\"name\";s:32:\"ANALYTIC GEOMETRY AND CALCULUS I\";s:8:\"courseID\";s:8:\"11412002\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:3;a:7:{s:6:\"course\";s:4:\"KCMP\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:5:\"KCMP1\";}i:4;a:7:{s:6:\"course\";s:2:\"GE\";s:4:\"name\";s:16:\"General Elective\";s:8:\"courseID\";s:2:\"10\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"GE1\";}i:5;a:7:{s:6:\"course\";s:8:\"UC-10097\";s:4:\"name\";s:21:\"FIRST YEAR EXPERIENCE\";s:8:\"courseID\";s:8:\"16810097\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}}i:1;a:4:{i:0;a:7:{s:6:\"course\";s:8:\"CS-23001\";s:4:\"name\";s:38:\"CSII: DATA STRUCTURES AND ABSTRACTION \";s:8:\"courseID\";s:7:\"4223001\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4213012\";}s:6:\"coreqs\";a:1:{i:0;s:7:\"4223022\";}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:10:\"MATH-12003\";s:4:\"name\";s:33:\"ANALYTIC GEOMETRY AND CALCULUS II\";s:8:\"courseID\";s:8:\"11412003\";s:7:\"prereqs\";a:1:{i:0;s:8:\"11412002\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:2;a:7:{s:6:\"course\";s:8:\"CS-23022\";s:4:\"name\";s:26:\"DISCRETE STRUCTURES FOR CS\";s:8:\"courseID\";s:7:\"4223022\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:3;a:7:{s:6:\"course\";s:4:\"KCMP\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:5:\"KCMP2\";}}i:2;a:4:{i:0;a:7:{s:6:\"course\";s:8:\"CS-33211\";s:4:\"name\";s:17:\"OPERATING SYSTEMS\";s:8:\"courseID\";s:7:\"4233211\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:8:\"CS-35101\";s:4:\"name\";s:21:\"COMPUTER ARCHITECTURE\";s:8:\"courseID\";s:7:\"4235101\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4213012\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:2;a:7:{s:6:\"course\";s:10:\"MATH-22005\";s:4:\"name\";s:34:\"ANALYTIC GEOMETRY AND CALCULUS III\";s:8:\"courseID\";s:8:\"11422005\";s:7:\"prereqs\";a:1:{i:0;s:8:\"11412003\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:3;a:7:{s:6:\"course\";s:2:\"FL\";s:4:\"name\";s:16:\"Foreign Language\";s:8:\"courseID\";s:2:\"30\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"FL1\";}}i:3;a:4:{i:0;a:7:{s:6:\"course\";s:8:\"CS-33007\";s:4:\"name\";s:38:\"INTRODUCTION TO DATABASE SYSTEM DESIGN\";s:8:\"courseID\";s:7:\"4233007\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:8:\"CS-35201\";s:4:\"name\";s:31:\"COMPUTER COMMUNICATION NETWORKS\";s:8:\"courseID\";s:7:\"4235201\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:2;a:7:{s:6:\"course\";s:2:\"FL\";s:4:\"name\";s:16:\"Foreign Language\";s:8:\"courseID\";s:2:\"30\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"FL2\";}i:3;a:7:{s:6:\"course\";s:3:\"KFA\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"KFA\";}}i:4;a:5:{i:0;a:7:{s:6:\"course\";s:8:\"CS-33901\";s:4:\"name\";s:20:\"SOFTWARE ENGINEERING\";s:8:\"courseID\";s:7:\"4233901\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:8:\"CS-44001\";s:4:\"name\";s:28:\"CS III: PROGRAMMING PATTERNS\";s:8:\"courseID\";s:7:\"4244001\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:2;a:7:{s:6:\"course\";s:8:\"CS-46101\";s:4:\"name\";s:33:\"DESIGN AND ANALYSIS OF ALGORITHMS\";s:8:\"courseID\";s:7:\"4246101\";s:7:\"prereqs\";a:2:{i:0;s:7:\"4223001\";i:1;s:8:\"11412003\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:3;a:7:{s:6:\"course\";s:4:\"KHUM\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"KHUM\";}i:4;a:7:{s:6:\"course\";s:11:\"KFA or KHUM\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:7:\"KFAKHUM\";}}i:5;a:5:{i:0;a:7:{s:6:\"course\";s:8:\"CS-33101\";s:4:\"name\";s:34:\"STRUCTURE OF PROGRAMMING LANGUAGES\";s:8:\"courseID\";s:7:\"4233101\";s:7:\"prereqs\";a:1:{i:0;s:7:\"4223001\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:17:\"CS-30000/CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE31\";}i:2;a:7:{s:6:\"course\";s:17:\"CS-30000/CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE32\";}i:3;a:7:{s:6:\"course\";s:3:\"KSS\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"KSS1\";}i:4;a:7:{s:6:\"course\";s:3:\"KBS\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"KBS\";}}i:6;a:5:{i:0;a:7:{s:6:\"course\";s:8:\"CS-49901\";s:4:\"name\";s:8:\"Capstone\";s:8:\"courseID\";s:7:\"4249901\";s:7:\"prereqs\";a:3:{i:0;s:7:\"4233007\";i:1;s:7:\"4233901\";i:2;s:7:\"4235201\";}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"y\";s:11:\"requirement\";s:5:\"major\";}i:1;a:7:{s:6:\"course\";s:17:\"CS-30000/CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE33\";}i:2;a:7:{s:6:\"course\";s:8:\"CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE41\";}i:3;a:7:{s:6:\"course\";s:3:\"KSS\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"KSS2\";}i:4;a:7:{s:6:\"course\";s:4:\"KLAB\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"KLAB\";}}i:7;a:5:{i:0;a:7:{s:6:\"course\";s:8:\"CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE42\";}i:1;a:7:{s:6:\"course\";s:8:\"CS-40000\";s:4:\"name\";s:17:\"CS Upper Elective\";s:8:\"courseID\";s:7:\"4230000\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:4:\"UE43\";}i:2;a:7:{s:6:\"course\";s:3:\"ANY\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:5:\"KANY1\";}i:3;a:7:{s:6:\"course\";s:3:\"ANY\";s:4:\"name\";s:9:\"Kent Core\";s:8:\"courseID\";s:2:\"20\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:5:\"KANY2\";}i:4;a:7:{s:6:\"course\";s:2:\"GE\";s:4:\"name\";s:16:\"General Elective\";s:8:\"courseID\";s:2:\"10\";s:7:\"prereqs\";a:0:{}s:6:\"coreqs\";a:0:{}s:8:\"critical\";s:1:\"n\";s:11:\"requirement\";s:3:\"GE2\";}}}');

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
(39, 'apple', '$2y$10$w80gv9MxeQ6L8fXSFWgwkeqR8m1NbSOHhivxy1JZuByy1HonUrwuW', '2019-04-03 16:46:50', NULL, NULL, NULL, NULL),
(40, 'test2', '$2y$10$ovH9zqfsunO6Y0Sc406u.uhsc0Aq22ZYvVnQRtVswYpflY3H..8SO', '2019-04-08 12:37:05', NULL, NULL, NULL, NULL),
(41, 'test3', '$2y$10$3mvP6CCEWA.YnafVIhyUNO2mdiqdJ4wl/aYNrd8qwa3k./b8XPIFq', '2019-04-08 15:43:39', NULL, NULL, NULL, NULL),
(42, 'codysalyi', '$2y$10$GxCKVVisTS5Os2k.ABWls.JmxuLlRnnM2y..a.AuCXY7pl5B0iDVm', '2019-04-11 15:50:20', NULL, NULL, NULL, NULL),
(43, 'falcon', '$2y$10$i5SNGGe47hWOqQ.1wFSw4O6iIMwaBWcdUP6gzpKcXa2R08dy5vkSG', '2019-04-11 15:51:32', NULL, NULL, NULL, NULL),
(44, 'frank', '$2y$10$VQGy.ulXG5Q7MmIScb8wKebZ3sjTMRKHxH1g/IUNm97xaJKVPCIHi', '2019-04-11 15:58:58', NULL, NULL, NULL, NULL),
(45, 'ju1ez', '$2y$10$Bit0ijyoaitDdZtkPp2SJeSmvehhOKIO99O6buYCXQluCNZijsxm2', '2019-04-12 09:58:56', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
  ADD KEY `subject_title` (`SubjectTitle`);
ALTER TABLE `courses` ADD FULLTEXT KEY `SubjectTitle` (`SubjectTitle`);

--
-- Indexes for table `prereqs`
--
ALTER TABLE `prereqs`
  ADD PRIMARY KEY (`CourseID`,`PrereqID`),
  ADD KEY `prereq_id` (`PrereqID`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`CourseID`,`Requirement`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Number`),
  ADD UNIQUE KEY `SubjectTitle` (`SubjectTitle`) USING BTREE;

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD UNIQUE KEY `Degree` (`Degree`,`Major`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coreqs`
--
ALTER TABLE `coreqs`
  ADD CONSTRAINT `coreqs_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coreqs_ibfk_2` FOREIGN KEY (`CoreqID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`SubjectTitle`) REFERENCES `subjects` (`SubjectTitle`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `prereqs`
--
ALTER TABLE `prereqs`
  ADD CONSTRAINT `prereqs_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prereqs_ibfk_2` FOREIGN KEY (`PrereqID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
