-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 07:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--
CREATE DATABASE IF NOT EXISTS `placement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `placement`;

-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL DEFAULT '0',
  `PVenue` varchar(255) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `ODetails` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpdrive`
--

INSERT INTO `addpdrive` (`CompanyName`, `Date`, `C/P`, `PVenue`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`) VALUES
('Apple', '2015-07-23', 0, 'RVCE', 98, 98, 90, 0, 0, 0, 'Welcome to Apple'),
('Haritha Tech', '2015-06-26', 1, 'SIT', 60, 65, 65, 0, 0, 0, '0'),
('HP', '2013-08-19', 1, 'SSIT', 70, 75, 75, 0, 0, 0, '0'),
('IBM', '2015-05-12', 0, 'CIT College', 60, 65, 65, 0, 0, 0, '0'),
('Infosis', '2015-01-10', 0, 'CIT College', 60, 60, 60, 0, 0, 0, '0'),
('Intel', '2013-09-08', 0, 'CIT', 60, 65, 65, 0, 0, 0, '0'),
('Microsoft company', '2014-12-09', 0, 'CIT', 60, 65, 65, 0, 0, 0, '0'),
('Musigma', '2019-10-10', 0, 'veltech', 70, 70, 70, 0, 0, 0, 'nothing'),
('Skype', '2014-06-10', 1, 'SIT College', 75, 75, 75, 0, 0, 0, '0'),
('Tata Consultency Services', '2015-11-24', 1, 'AIE', 65, 70, 75, 0, 0, 0, '0'),
('VTECK', '2013-03-24', 0, 'CIT College', 60, 60, 65, 0, 0, 0, '0'),
('WDS', '2014-09-30', 1, 'KIT', 65, 65, 65, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '2017-01-24 16:21:18', '07-05-2019 05:26:53 PM');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(15) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT '0',
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`Id`, `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(31, 'veda', 'kumar', 'VTU6439', 11111, 'v@gmil.comk', '2009-06-15', 1, 'ISE', 70, 70, 70, 0, 0, 0, 1, '0000-00-00'),
(32, 'vastala', 'hs', 'VTU6440', 22222, 'vhs@gmil.com', '0000-00-00', 2, 'CSE', 75, 75, 70, 0, 0, 0, 1, '0000-00-00'),
(33, 'ragini', 'mn', 'VTU6441', 33333, 'r@gmail.com', '0000-00-00', 6, 'ISE', 55, 55, 55, 0, 0, 0, 1, '0000-00-00'),
(34, 'Punith', 'raj kumar', 'VTU6442', 66666, 'p@gmail.com', '0000-00-00', 8, 'CSE', 85, 85, 85, 0, 0, 0, 1, '0000-00-00'),
(35, 'Manvith', 'kumar', 'VTU6443', 7777, 'mk@gmail.com', '0000-00-00', 7, 'CVE', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(36, 'Harsha', 'M S', 'VTU6444', 88888, 'h@gmail.com', '0000-00-00', 8, 'EEE', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(37, 'Tejaswini', 'T L', 'VTU6445', 99999, 't@gmil.com', '0000-00-00', 4, 'CVE', 65, 65, 65, 0, 0, 0, 0, '0000-00-00'),
(38, 'Ashraf', 'Unissa', 'VTU6446', 10000, 'au@gmail.com', '0000-00-00', 4, 'EEE', 55, 55, 55, 0, 0, 0, 0, '0000-00-00'),
(39, 'Roja', 'Bai', 'VTU6447', 20000, 'rb@gmail.com', '0000-00-00', 4, 'ISE', 66, 63, 62, 0, 0, 0, 1, '2023-07-15'),
(40, 'Yogesh', 'B L', 'VTU6448', 40000, 'y@gmail.com', '2013-06-00', 5, 'CSE', 41, 45, 45, 0, 0, 0, 1, '2013-06-00'),
(41, 'rahul', 'khanna', 'VTU6449', 2147483647, 'rr@gmail.com', '2002-07-15', 4, 'ise', 77, 66, 77, 0, 0, 0, 1, '0000-00-00'),
(42, 'Vishruth', 'Harithsa', 'VTU6450', 9880796862, 'harithsa@aol.com', '0000-00-00', 6, 'ISE', 91, 70, 50, 5, 0, 1, 1, '2018-08-15'),
(43, 'Neil', 'Armstrong', 'VTU6451', 2147483647, 'armstrong@neil.com', '2023-07-15', 7, 'ISE', 100, 100, 100, 0, 0, 0, 1, '2023-07-15'),
(44, 'Vishruth', 'Harithsa', 'VTU6452', 9880796862, 'harithsa@aol.com', '2021-08-15', 6, 'ISE', 40, 70, 50, 5, 0, 1, 0, '0000-00-00'),
(46, 'Somnath', 'Mohabir', 'VTU6454', 8263080787, 'fi@gmail.com', '0000-00-00', 5, 'CSE', 70, 70, 70, 0, 0, 0, 1, '0000-00-00'),
(47, 'Seema', 'Grover', 'VTU6455', 8089755745, 'dj@gmail.com', '2012-01-01', 4, 'CSE', 85, 85, 85, 1, 1, 1, 0, '2012-01-01'),
(48, 'Pranab', 'Mehan', 'VTU6456', 7139048447, 's@gmail.com', '2007-02-03', 8, 'ECE', 74, 74, 74, 2, 2, 2, 1, '2013-09-02'),
(49, 'Zaad', 'Kumer', 'VTU6457', 8703481449, 'bh@gmail.com', '2007-02-03', 7, 'ECE', 60, 60, 60, 0, 0, 0, 0, '2007-02-03'),
(50, 'Alka', 'Pillay', 'VTU6458', 8605046846, 'alka@gmail.com', '2005-03-07', 5, 'AERO', 76, 76, 76, 4, 4, 4, 1, '2021-07-06'),
(51, 'Binoya', 'Dalal', 'VTU6459', 7916591550, 'bin@gmail.com', '2005-03-07', 6, 'AUTO', 84, 84, 84, 0, 0, 0, 1, '2005-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(255) DEFAULT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `courseUnit` varchar(255) DEFAULT NULL,
  `noofSeats` int(11) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseCode`, `courseName`, `courseUnit`, `noofSeats`, `creationDate`, `updationDate`) VALUES
(1, 'PHP01', 'Core PHP', '1-5', 10, '2017-02-11 17:39:10', '21-05-2018 03:33:37 PM'),
(2, 'WP01', 'Wordpress', '1-6', 1, '2017-02-11 17:52:25', '12-02-2017 12:23:35 AM'),
(4, 'MYSQL23', 'MYSQL', '1-8', 20, '2017-02-11 18:47:25', '25-08-2018 11:20:22 AM'),
(5, '1151cs701', 'major project', '14', 60, '2019-05-07 11:58:06', '07-05-2019 05:28:21 PM'),
(6, '12345', 's', '14', 60, '2019-05-07 16:20:20', NULL),
(7, '12', 'dr', '2', 60, '2019-05-07 16:27:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseenrolls`
--

CREATE TABLE `courseenrolls` (
  `id` int(11) NOT NULL,
  `studentRegno` varchar(255) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `enrollDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseenrolls`
--

INSERT INTO `courseenrolls` (`id`, `studentRegno`, `course`, `enrollDate`) VALUES
(4, '10806121', 2, '2018-05-21 10:19:41'),
(5, '12345', 1, '2018-08-25 05:52:34'),
(6, 'r', 1, '2019-05-07 12:24:54'),
(7, 's', 5, '2019-05-07 12:39:48'),
(8, 'r', 2, '2019-05-07 12:41:52'),
(9, 'r', 2, '2019-05-07 12:43:44'),
(10, 'r', 1, '2019-05-07 13:26:54'),
(11, 's', 1, '2019-05-07 13:35:10'),
(12, 's', 1, '2019-05-07 13:40:17'),
(13, 'r', 2, '2019-05-07 13:45:22'),
(14, 'r', 6, '2019-05-07 14:02:18'),
(15, 'r', 6, '2019-05-07 16:20:50'),
(16, 'r', 7, '2019-05-07 16:28:03'),
(17, 's', 2, '2019-05-07 16:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE `hlogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`, `Branch`) VALUES
(1, 'Mattu', 'Mattu', '123456', 'fastnag@gmail.com', 'What is your fav spot?', 'Bangalore', 'CSE'),
(2, 'avinash', '', '123', 's@gmail.com', 'What is your nickname?', 'lol', 'CIVIL'),
(3, 'avinash', 'TTS 211', '123', 'a@gmail.com', 'What is your pet name?', 'se', 'AUTO'),
(4, 'avinash', 'TTS 2112', '111', 'a@gmail.com', 'What is your nickname?', 'ab', 'CIVIL'),
(5, 'srijit', 'TTS10', '123', 's@gmail.com', 'What is your nickname?', 'ab', 'CSE'),
(6, 'srijit', 'TTS101', '123', 's@gmail.com', 'What is your nickname?', 'ba', 'AUTO');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Rohini', 'rohini', '12', 'rh@gmail.com', 'What is your fav spot?', 'mangalore'),
(2, 'avinash', 'avinash', '11', 'a@gmail.com', 'What is your enemy name?', 'q'),
(3, 'srijit', 'VTU5984', '11', 's@gmail.com', 'What is your nickname?', 'ba');

-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE `prilogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prilogin`
--

INSERT INTO `prilogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Suresh', 'suresh', '123', 'suresh@gmail.com', 'What is your fav spot?', 'madikeri');

-- --------------------------------------------------------

--
-- Table structure for table `prim`
--

CREATE TABLE `prim` (
  `id` int(11) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(13, 'avinash', 'VTU 5952', '1234', 'a@gmail.com', 'What is your one truth which ohers donot know?', 'adsfasd'),
(14, 'Srijit', 'VTU5984', '123', 's@gmail.com', 'What is your nickname?', 'ba'),
(15, 'Srijit', 'VTU5983', '12', 's@gmail.com', 'What is your nickname?', 'ba');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentRegno` varchar(255) NOT NULL,
  `studentPhoto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `cgpa` decimal(10,2) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentRegno`, `studentPhoto`, `password`, `studentName`, `pincode`, `session`, `department`, `semester`, `cgpa`, `creationdate`, `updationDate`) VALUES
('10806121', 'logo.jpg', 'f925916e2754e5e03f75dd58a5733251', 'Anuj Kumar', '715948', '', '', '', '7.25', '2017-02-11 19:38:32', '21-05-2018 03:20:40 PM'),
('12345', NULL, 'f925916e2754e5e03f75dd58a5733251', 'John', '131863', '', '', '', '0.00', '2018-08-25 05:50:51', ''),
('125966', '', 'f925916e2754e5e03f75dd58a5733251', 'Test user', '385864', '', '', '', '0.00', '2017-02-11 19:48:03', ''),
('r', NULL, '4b43b0aee35624cd95b910189b3dc231', 'r', '555883', NULL, NULL, NULL, NULL, '2019-05-07 12:22:21', NULL),
('s', NULL, '03c7c0ace395d80182db07ae2c30f034', 's', '296712', NULL, NULL, NULL, NULL, '2019-05-07 12:14:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE `updatedrive` (
  `id` int(11) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` tinyint(1) NOT NULL DEFAULT '0',
  `WT` tinyint(1) NOT NULL DEFAULT '0',
  `GD` tinyint(1) NOT NULL DEFAULT '0',
  `Techical` tinyint(1) NOT NULL DEFAULT '0',
  `Placed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatedrive`
--

INSERT INTO `updatedrive` (`id`, `USN`, `Name`, `CompanyName`, `Date`, `Attendence`, `WT`, `GD`, `Techical`, `Placed`) VALUES
(1, 'VTU6439', 'Veda', 'Haritha Tech', '2015-06-26', 1, 1, 1, 1, 1),
(2, 'VTU6440', 'Vastala', 'HP', '2013-08-19', 1, 1, 1, 1, 1),
(3, 'VTU6442', 'Punith', 'IBM', '2015-05-12', 1, 1, 1, 1, 1),
(4, 'VTU6443', 'Manvith', 'Infosis', '2015-01-10', 1, 1, 1, 1, 1),
(5, 'VTU6444', 'Harsha', 'Intel', '2013-09-08', 1, 1, 1, 1, 1),
(6, 'VTU6446', 'Ashraf', 'Microsoft company', '2014-12-09', 1, 1, 1, 1, 1),
(7, 'VTU6447', 'Roja', 'Skype', '2014-06-10', 1, 1, 1, 1, 1),
(8, 'VTU6448', 'Yogesh', 'Tata Consultency Services', '2015-11-24', 1, 1, 1, 1, 1),
(9, 'VTU6441', 'Ragini', 'VTECK', '2013-03-24', 1, 1, 1, 1, 1),
(10, 'VTU6445', 'Tesjaswini', 'WDS', '2014-09-30', 1, 1, 1, 1, 1),
(12, 'VTU6450', 'Vishruth Harithsa', 'Apple', '2015-07-23', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `studentRegno` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `studentRegno`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:05:58', '', 1),
(2, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:07:18', '', 1),
(3, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:08:46', '', 1),
(4, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:26:15', '', 1),
(5, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:27:11', '', 1),
(6, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:28:19', '', 1),
(7, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:29:30', '', 1),
(8, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:30:39', '12-02-2017 02:00:40 AM', 1),
(9, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:32:12', '12-02-2017 02:21:40 AM', 1),
(10, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-11 20:51:50', '12-02-2017 05:14:45 AM', 1),
(11, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-12 05:41:24', '12-02-2017 11:49:58 AM', 1),
(12, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-12 06:20:05', '', 1),
(13, '10806121', 0x3a3a3100000000000000000000000000, '2017-02-12 06:20:23', '12-02-2017 12:09:59 PM', 1),
(14, '10806121', 0x3a3a3100000000000000000000000000, '2018-05-21 09:49:06', '21-05-2018 03:30:53 PM', 1),
(15, '10806121', 0x3a3a3100000000000000000000000000, '2018-05-21 10:19:15', '', 1),
(16, '12345', 0x3a3a3100000000000000000000000000, '2018-08-25 05:51:42', '25-08-2018 11:23:02 AM', 1),
(17, '10806121', 0x3a3a3100000000000000000000000000, '2019-05-07 12:16:13', '07-05-2019 05:48:05 PM', 1),
(18, 's', 0x3a3a3100000000000000000000000000, '2019-05-07 12:18:42', '07-05-2019 05:51:21 PM', 1),
(19, 'r', 0x3a3a3100000000000000000000000000, '2019-05-07 12:23:03', '07-05-2019 05:56:49 PM', 1),
(20, 's', 0x3a3a3100000000000000000000000000, '2019-05-07 12:27:06', NULL, 1),
(21, 's', 0x3a3a3100000000000000000000000000, '2019-05-07 12:30:19', '07-05-2019 06:34:00 PM', 1),
(22, 's', 0x3a3a3100000000000000000000000000, '2019-05-07 13:04:05', '07-05-2019 06:57:40 PM', 1),
(23, 's', 0x3a3a3100000000000000000000000000, '2019-05-07 13:28:55', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpdrive`
--
ALTER TABLE `addpdrive`
  ADD PRIMARY KEY (`CompanyName`,`Date`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`Id`,`USN`),
  ADD UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseenrolls`
--
ALTER TABLE `courseenrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlogin`
--
ALTER TABLE `hlogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prilogin`
--
ALTER TABLE `prilogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prim`
--
ALTER TABLE `prim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentRegno`);

--
-- Indexes for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`),
  ADD KEY `CompanyName` (`CompanyName`,`Date`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courseenrolls`
--
ALTER TABLE `courseenrolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hlogin`
--
ALTER TABLE `hlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prilogin`
--
ALTER TABLE `prilogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prim`
--
ALTER TABLE `prim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `updatedrive`
--
ALTER TABLE `updatedrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD CONSTRAINT `updatedrive_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `basicdetails` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `updatedrive_ibfk_2` FOREIGN KEY (`CompanyName`,`Date`) REFERENCES `addpdrive` (`CompanyName`, `Date`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
