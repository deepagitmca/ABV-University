-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `region2`
--

-- --------------------------------------------------------

--
-- Table structure for table `college3academicdata`
--

CREATE TABLE `college3academicdata` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college3academicdata`
--

INSERT INTO `college3academicdata` (`usn`, `name`, `result`) VALUES
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI', 8),
('GIT19MCA430-T', 'HARSHA SHAH', 8),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL', 7),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH', 9),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA ', 7),
('GIT19MCA448-T', 'I RITESH', 9),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI', 8),
('GIT19MCA486-T', 'KALYANI JITURI', 9),
('GIT19MCA465-T', 'KETAN PRABHU', 10),
('GIT19MCA446-T', 'KIRAN KUMAR', 9),
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI', 8),
('GIT19MCA430-T', 'HARSHA SHAH', 8),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL', 7),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH', 9),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA ', 7),
('GIT19MCA448-T', 'I RITESH', 9),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI', 8),
('GIT19MCA486-T', 'KALYANI JITURI', 9),
('GIT19MCA465-T', 'KETAN PRABHU', 10),
('GIT19MCA446-T', 'KIRAN KUMAR', 9);

-- --------------------------------------------------------

--
-- Table structure for table `college3admin`
--

CREATE TABLE `college3admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college3admin`
--

INSERT INTO `college3admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college3data`
--

CREATE TABLE `college3data` (
  `collegecode` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `studentdata` varchar(20) NOT NULL,
  `academicsdata` varchar(30) NOT NULL,
  `eventsdata` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college3data`
--

INSERT INTO `college3data` (`collegecode`, `collegename`, `date`, `studentdata`, `academicsdata`, `eventsdata`) VALUES
('RV', 'RVC', '2019-10-24', 's.csv', 's1.csv', 'Resume(Deepa).pdf'),
('RV', 'RVC', '2019-11-25', 's.csv', 's1.csv', 'Resume(Deepa).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college3student`
--

CREATE TABLE `college3student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college3student`
--

INSERT INTO `college3student` (`usn`, `name`) VALUES
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI'),
('GIT19MCA430-T', 'HARSHA SHAH'),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL'),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH'),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA '),
('GIT19MCA448-T', 'I RITESH'),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI'),
('GIT19MCA486-T', 'KALYANI JITURI'),
('GIT19MCA465-T', 'KETAN PRABHU'),
('GIT19MCA446-T', 'KIRAN KUMAR'),
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI'),
('GIT19MCA430-T', 'HARSHA SHAH'),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL'),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH'),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA '),
('GIT19MCA448-T', 'I RITESH'),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI'),
('GIT19MCA486-T', 'KALYANI JITURI'),
('GIT19MCA465-T', 'KETAN PRABHU'),
('GIT19MCA446-T', 'KIRAN KUMAR');

-- --------------------------------------------------------

--
-- Table structure for table `college4academicdata`
--

CREATE TABLE `college4academicdata` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college4academicdata`
--

INSERT INTO `college4academicdata` (`usn`, `name`, `result`) VALUES
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI', 8),
('GIT19MCA430-T', 'HARSHA SHAH', 8),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL', 7),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH', 9),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA ', 7),
('GIT19MCA448-T', 'I RITESH', 9),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI', 8),
('GIT19MCA486-T', 'KALYANI JITURI', 9),
('GIT19MCA465-T', 'KETAN PRABHU', 10),
('GIT19MCA446-T', 'KIRAN KUMAR', 9);

-- --------------------------------------------------------

--
-- Table structure for table `college4admin`
--

CREATE TABLE `college4admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college4admin`
--

INSERT INTO `college4admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college4data`
--

CREATE TABLE `college4data` (
  `collegecode` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `studentdata` varchar(30) NOT NULL,
  `academicsdata` varchar(30) NOT NULL,
  `eventsdata` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college4data`
--

INSERT INTO `college4data` (`collegecode`, `collegename`, `date`, `studentdata`, `academicsdata`, `eventsdata`) VALUES
('JB', 'SJBIT', '2019-10-24', 's.csv', 's1.csv', 'Resume(Deepa).pdf'),
('JB', 'SJBIT', '2019-11-25', 's.csv', 's1.csv', 'Resume(Deepa).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college4student`
--

CREATE TABLE `college4student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college4student`
--

INSERT INTO `college4student` (`usn`, `name`) VALUES
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI'),
('GIT19MCA430-T', 'HARSHA SHAH'),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL'),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH'),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA '),
('GIT19MCA448-T', 'I RITESH'),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI'),
('GIT19MCA486-T', 'KALYANI JITURI'),
('GIT19MCA465-T', 'KETAN PRABHU'),
('GIT19MCA446-T', 'KIRAN KUMAR');

-- --------------------------------------------------------

--
-- Table structure for table `region2admin`
--

CREATE TABLE `region2admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region2admin`
--

INSERT INTO `region2admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
