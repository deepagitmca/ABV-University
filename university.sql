-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:31 PM
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
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `college1academicdata`
--

CREATE TABLE `college1academicdata` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college1academicdata`
--

INSERT INTO `college1academicdata` (`usn`, `name`, `result`) VALUES
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
-- Table structure for table `college1admin`
--

CREATE TABLE `college1admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college1admin`
--

INSERT INTO `college1admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college1data`
--

CREATE TABLE `college1data` (
  `collegecode` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `studentdata` varchar(30) NOT NULL,
  `academicsdata` varchar(30) NOT NULL,
  `eventsdata` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college1data`
--

INSERT INTO `college1data` (`collegecode`, `collegename`, `date`, `studentdata`, `academicsdata`, `eventsdata`) VALUES
('GI', 'GIT', '2019-10-24', 's.csv', 's1.csv', 'Resume(Deepa).pdf'),
('GI', 'GIT', '2019-11-25', 's.csv', 's1.csv', 'Resume(Deepa).pdf'),
('GI', 'GIT', '2019-11-25', 's.csv', 's1.csv', 'Resume(Deepa).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college1student`
--

CREATE TABLE `college1student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college1student`
--

INSERT INTO `college1student` (`usn`, `name`) VALUES
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
-- Table structure for table `college2academicdata`
--

CREATE TABLE `college2academicdata` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college2academicdata`
--

INSERT INTO `college2academicdata` (`usn`, `name`, `result`) VALUES
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
-- Table structure for table `college2admin`
--

CREATE TABLE `college2admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college2admin`
--

INSERT INTO `college2admin` (`username`, `password`, `email`) VALUES
('deepa', '1245678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college2data`
--

CREATE TABLE `college2data` (
  `collegecode` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `studentdata` varchar(30) NOT NULL,
  `academicsdata` varchar(30) NOT NULL,
  `eventsdata` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college2data`
--

INSERT INTO `college2data` (`collegecode`, `collegename`, `date`, `studentdata`, `academicsdata`, `eventsdata`) VALUES
('JI', 'Jain college', '2019-10-24', 's.csv', 's1.csv', 'Resume(Deepa).pdf'),
('JI', 'Jain college', '2019-11-25', 's.csv', 's1.csv', 'Resume(Deepa).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college2student`
--

CREATE TABLE `college2student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college2student`
--

INSERT INTO `college2student` (`usn`, `name`) VALUES
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
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
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
  `studentdata` varchar(30) NOT NULL,
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
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
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
-- Table structure for table `newcollege`
--

CREATE TABLE `newcollege` (
  `collegename` varchar(30) NOT NULL,
  `foundername` varchar(30) NOT NULL,
  `establishdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `accreditation` varchar(30) NOT NULL,
  `studentdata` varchar(500) NOT NULL,
  `academics` varchar(500) NOT NULL,
  `events` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newcollege`
--

INSERT INTO `newcollege` (`collegename`, `foundername`, `establishdate`, `email`, `contact`, `address`, `accreditation`, `studentdata`, `academics`, `events`, `status`) VALUES
('RCU', 'abc', '2010-11-25', 'deepagitmca@gmail.com', '8550857978', 'belgaum', 'nacc,', 's.csv', 's1.csv', 'Resume(Deepa).pdf', 'reject'),
('RV', 'ghh', '2009-11-17', 'deepagitmca@gmail.com', '9808789878', 'belgaum', 'nacc,', 's.csv', 's1.csv', 'Resume(Deepa).pdf', 'not approved'),
('AD', 'fghghh', '2010-11-25', 'deepagitmca@gmail.com', '8550857978', 'ffjgjg', 'nacc,', 's.csv', 's1.csv', 'Resume(Deepa).pdf', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `region1admin`
--

CREATE TABLE `region1admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region1admin`
--

INSERT INTO `region1admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `region2admin`
--

CREATE TABLE `region2admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region2admin`
--

INSERT INTO `region2admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `universityadmin`
--

CREATE TABLE `universityadmin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universityadmin`
--

INSERT INTO `universityadmin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
