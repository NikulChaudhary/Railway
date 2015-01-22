-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2013 at 10:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `uname` varchar(20) NOT NULL,
  `Tnumber` int(6) NOT NULL,
  `class` varchar(5) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Age` int(5) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`uname`, `Tnumber`, `class`, `Name`, `Age`, `sex`) VALUES
('Nikul', 12009, '2A', 'Nikul', 12, 'male'),
('Nikul', 12009, '3A', 'Nikul', 15, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `interlist`
--

CREATE TABLE IF NOT EXISTS `interlist` (
  `Number` int(6) DEFAULT NULL,
  `st1` varchar(10) DEFAULT NULL,
  `st1arri` varchar(10) DEFAULT NULL,
  `st2` varchar(10) DEFAULT NULL,
  `st2arri` varchar(10) DEFAULT NULL,
  `st3` varchar(10) DEFAULT NULL,
  `st3arri` varchar(10) DEFAULT NULL,
  `st4` varchar(10) DEFAULT NULL,
  `st4arri` varchar(10) DEFAULT NULL,
  `st5` varchar(10) DEFAULT NULL,
  `st5arri` varchar(10) DEFAULT NULL,
  `Ori` varchar(20) NOT NULL,
  `Oriarri` varchar(10) NOT NULL,
  `Dest` varchar(20) NOT NULL,
  `Desarri` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wen` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interlist`
--

INSERT INTO `interlist` (`Number`, `st1`, `st1arri`, `st2`, `st2arri`, `st3`, `st3arri`, `st4`, `st4arri`, `st5`, `st5arri`, `Ori`, `Oriarri`, `Dest`, `Desarri`, `Name`, `Mon`, `Tue`, `Wen`, `Thu`, `Fri`, `Sat`, `Sun`) VALUES
(12009, 'VAPI', '00:15', 'VALSAD', '01:45', 'SURAT', '02:30', 'BARODA', '04:00', 'ANAND', '05:05', 'BCT', '22:15', 'ADI', '06:25', 'SHATABDI EXP', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'X'),
(12931, 'VAPI', '07:15', 'VALSAD', '08:45', 'SURAT', '09:30', 'BARODA', '11:30', 'ANAND', '12:45', 'BCT', '06:00', 'ADI', '14:20', 'ADI DOUBLE DECK', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(12932, 'VAPI', '19:15', 'VALSAD', '18:45', 'SURAT', '07:30', 'BARODA', '15:30', 'ANAND', '14:05', 'ADI', '13:00', 'BCT', '22:10', 'BCT DOUBLEDECKE', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(19011, 'VAPI', '06:26', 'VALSAD', '01:50', 'SURAT', '23:45', 'BARODA', '20:20', 'ANAND', '18:10', 'ADI', '16:25', 'BCT', '10:25', 'GUJARAT EXPRESS', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(22210, 'VAPI', '00:10', 'VALSAD', '23:50', 'SURAT', '22:25', 'BARODA', '20:05', 'ANAND', '18:20', 'NDLS', '16:15', 'BCT', '01:35', 'BCT DURONTO', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

CREATE TABLE IF NOT EXISTS `train_list` (
  `Number` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Origin` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Arrival` varchar(10) NOT NULL,
  `Departure` varchar(10) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wen` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL,
  PRIMARY KEY (`Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_list`
--

INSERT INTO `train_list` (`Number`, `Name`, `Origin`, `Destination`, `Arrival`, `Departure`, `Mon`, `Tue`, `Wen`, `Thu`, `Fri`, `Sat`, `Sun`) VALUES
(12009, 'SHATABDI EXP', 'BCT', 'ADI', '22:15', '06:25', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(12931, 'ADI DOUBLE DECK', 'BCT', 'ADI', 'First st', '14:20', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(12932, 'BCT DOUBLEDECKE', 'ADI', 'BCT', '13:00', 'Last st', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(12952, 'MUMBAI RAJDHANI', 'NDLS', 'BCT', '08:25', 'last st', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(19011, 'GUJARAT EXPRESS', 'ADI', 'BCT', '16:25', '10:35', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(22210, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y'),
(22220, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y'),
(22222, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y'),
(25222, 'BCT DURONTO', 'NDLS', 'BCT', '16:15', 'Last st', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y'),
(29333, 'KARNAVATI EXP', 'AHMD', 'BCT', '08:05', '21:10', 'Y', 'Y', 'Y', 'N', 'Y', 'N', 'Y'),
(59442, 'AHMEDABAD PASS', 'ADI', 'BCT', '04:35', '1:35', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`f_name`, `l_name`, `email`, `password`, `gender`, `marital`, `dob`, `mobile`, `ques`, `ans`) VALUES
('shail', 'chokshi12', 'shailch@yahoo.com', '987456321', 'female', 'married', '1992-01-28', 8866525065, '1', 'sahil'),
('Hitesh', 'prajapati', 'hitesh@gmail.com', '369852147', 'male', 'married', '2013-05-06', 9033548417, 'What was the name of your first school?', 'bvm'),
('Bhumik', 'sapara', 'sap@gmail.com', '258963147', 'male', 'married', '2013-05-13', 9033456523, 'What is your pets name ?', 'asd'),
('sahil', 'chokshi', 'sap@gmail.com', '123123123', 'male', 'married', '1992-01-12', 8866525062, 'What is your favorite hero?', 'bp'),
('Nikul', 'Chaudhary', 'nikulchaudhary123@gmail.com', '123456789', 'male', 'unmarried', '1993-01-03', 9624031021, 'What is your pets name ?', 'nik$');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
