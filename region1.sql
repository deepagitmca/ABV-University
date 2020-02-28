-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:27 PM
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
-- Database: `region1`
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
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
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
  `collegecode` varchar(20) NOT NULL,
  `collegename` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `studentdata` varchar(20) NOT NULL,
  `academicsdata` varchar(20) NOT NULL,
  `eventsdata` varchar(20) NOT NULL
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
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college2admin`
--

INSERT INTO `college2admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

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
-- Table structure for table `region1admin`
--

CREATE TABLE `region1admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region1admin`
--

INSERT INTO `region1admin` (`username`, `password`, `email`) VALUES
('deepa', '12345678', 'deepagitmca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `firstName`, `lastName`) VALUES
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('GIT19MCA477-T', 'GIRISH PRAKASH RUDGI', '', '', ''),
('GIT19MCA430-T', 'HARSHA SHAH', '', '', ''),
('GIT19MCA472-T', 'HIRAGOUD BHEEMANAGOUD PATIL', '', '', ''),
('GIT19MCA414-T', 'HIREMATH POOJA NILAKANTH', '', '', ''),
('GIT19MCA412-T', 'HIREMATH SHIVAYA SHARNAYYA ', '', '', ''),
('GIT19MCA448-T', 'I RITESH', '', '', ''),
('GIT19MCA456-T', 'JYOTI VIRUPAKSHI GUGGARI', '', '', ''),
('GIT19MCA486-T', 'KALYANI JITURI', '', '', ''),
('GIT19MCA465-T', 'KETAN PRABHU', '', '', ''),
('GIT19MCA446-T', 'KIRAN KUMAR', '', '', ''),
('GIT19MCA416-T', 'KIRTI TAVANAPPA HADALAGI', '', '', ''),
('GIT19MCA418-T', 'KOMAL A PAWAR', '', '', ''),
('GIT19MCA405-T', 'KOMAL NAMADEV KUMBHAR', '', '', ''),
('GIT19MCA480-T', 'MAHALAXMI HAVALAD', '', '', ''),
('GIT19MCA443-T', 'MAHANTESH R BALAKUNDI', '', '', ''),
('GIT19MCA440-T', 'MAHESH S DHOTRE', '', '', ''),
('GIT19MCA415-T', 'MANJUNATH V RAMPURE', '', '', ''),
('GIT19MCA409-T', 'MAYUR MILIND KANAGO', '', '', ''),
('GIT19MCA459-T', 'MOHAMMED TAYYAB JAMADAR', '', '', ''),
('GIT19MCA444-T', 'MURAGESH BASAVARAJ YADWAD', '', '', ''),
('GIT19MCA481-T', 'NEHA B PATIL', '', '', ''),
('GIT19MCA470-T', 'NIJANAND BASAVARAJ HIREMATH', '', '', ''),
('GIT19MCA462-T', 'NIKHIL V BOLAKE', '', '', ''),
('GIT19MCA445-T', 'NIRANJAN JOSHI', '', '', ''),
('GIT19MCA434-T', 'OMKAR ASHOK NAGARAL', '', '', ''),
('GIT19MCA429-T', 'PALAK LUNAWAT', '', '', ''),
('GIT19MCA403-T', 'PANDIT SHWETA SHRIPAD', '', '', ''),
('GIT19MCA453-T', 'PANKAJ PRAKASH SAVANTRE', '', '', ''),
('GIT19MCA467-T', 'PRAJWAL KUNDAP', '', '', ''),
('GIT19MCA479-T', 'PRATIK DURADE', '', '', ''),
('GIT19MCA421-T', 'PRATIKSHA PATIL', '', '', ''),
('GIT19MCA442-T', 'PRIYANKA GURURAJ HARIBAL', '', '', ''),
('GIT19MCA431-T', 'PRIYANKA S GANACHARI', '', '', ''),
('GIT19MCA452-T', 'RAHUL RAMESH NANDYALKAR', '', '', ''),
('GIT19MCA435-T', 'RAVI', '', '', ''),
('GIT19MCA469-T', 'SABEEL MULTANI', '', '', ''),
('GIT19MCA483-T', 'SAGAR S KUGUNNAVAR', '', '', ''),
('GIT19MCA427-T', 'SANDESH PATIL', '', '', ''),
('GIT19MCA455-T', 'SEEMA NAGARALE', '', '', ''),
('GIT19MCA468-T', 'SHATRUGHNA S KHILARI', '', '', ''),
('GIT19MCA411-T', 'SHENAVI KUNCOLIENKAR AMOGH RUS', '', '', ''),
('GIT19MCA447-T', 'SHIVATEJ JIJOBA GAYAKAWAD', '', '', ''),
('GIT19MCA406-T', 'SHREEDHAR MARUTI KUMBHAR', '', '', ''),
('GIT19MCA423-T', 'SHREYA MUNAVALLI', '', '', ''),
('GIT19MCA457-T', 'SHRUTI YALAGONDE', '', '', ''),
('GIT19MCA426-T', 'SHUBHAM', '', '', ''),
('GIT19MCA476-T', 'SHUBHAM NAWALE', '', '', ''),
('GIT19MCA432-T', 'SHWETARANI JORAPUR', '', '', ''),
('GIT19MCA451-T', 'SNEHA SANJAY BHISTANNAVAR', '', '', ''),
('GIT19MCA422-T', 'SNEHA SHIVASHANKAR JANAWADE', '', '', ''),
('GIT19MCA438-T', 'SUSHMA RATHOD', '', '', ''),
('GIT19MCA401-T', 'SUSHMITA VENKATESH JOSHI', '', '', ''),
('GIT19MCA449-T', 'SUYOG PATIL', '', '', ''),
('GIT19MCA461-T', 'SWATI YADAV', '', '', ''),
('GIT19MCA441-T', 'TEJASHWINI G GAVANDALKAR', '', '', ''),
('GIT19MCA407-T', 'VAIBHAV PATIL', '', '', ''),
('GIT19MCA484-T', 'VAISHNAVI KANBARKAR', '', '', ''),
('GIT19MCA417-T', 'VAISHNAVI R KARI', '', '', ''),
('GIT19MCA402-T', 'VAISHNAVI TADAS', '', '', ''),
('GIT19MCA404-T', 'VIDYA  ANIL NALAWADE', '', '', ''),
('GIT19MCA433-T', 'VIJAYALAKSHMI KOPPAD', '', '', ''),
('GIT19MCA437-T', 'VINAYAK BALAGOUD PAIRASHI ', '', '', ''),
('GIT19MCA460-T', 'ZUBER BETGERI', '', '', ''),
('GIT19MCA487-T', 'SURAJ SOMANACHE', '', '', ''),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('2', 'anuja', '12345678', 'Anuja', 'Kalmani'),
('3', 'amruta', '12345678', 'Amruta', 'Chadichal'),
('4', 'rakshita', '12345678', 'Rakshita', 'Padaki'),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('2', 'anuja', '12345678', 'Anuja', 'Kalmani'),
('3', 'amruta', '12345678', 'Amruta', 'Chadichal'),
('4', 'rakshita', '12345678', 'Rakshita', 'Padaki'),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('2', 'anuja', '12345678', 'Anuja', 'Kalmani'),
('3', 'amruta', '12345678', 'Amruta', 'Chadichal'),
('4', 'rakshita', '12345678', 'Rakshita', 'Padaki'),
('1', 'deepa', '12345678', 'Deepa', 'Kulkarni'),
('2', 'anuja', '12345678', 'Anuja', 'Kalmani'),
('3', 'amruta', '12345678', 'Amruta', 'Chadichal'),
('4', 'rakshita', '12345678', 'Rakshita', 'Padaki');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
