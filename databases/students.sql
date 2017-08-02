-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 10:52 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stp16`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `fname`, `mname`, `dob`, `gender`, `cno`, `class`, `roll`, `pwd`, `address`) VALUES
('Raunak', 'BS', 'AS', '12-12-96', 'Male', '9475333060', 'V', '501', 'p501', 'crj'),
('Puja', 'KS', 'BS', '14-08-1997', 'Female', '8977676566', 'V', '502', 'p502', 'barasat'),
('Aditya', 'Arun', 'Urmila', '18-12-1996', 'Male', '9867565533', 'V', '503', 'p503', 'crj'),
('Sourik Adhikari', 'Shyamal Adhikari', 'B. Adhikari', '24-12-1996', 'Male', '8116458103', 'VI', '601', 'p601', 'rnp'),
('Sayarik', 'Prasanta', 'Uma', '12-07-1996', 'Male', '9458238734', 'VI', '602', 'p602', 'arbndngr'),
('Cibin', 'Abraham', 'Anamma', '01-01-1990', 'Male', '9475463285', 'VI', '603', 'p603', 'crj'),
('Debjit', 'Debashish', 'Deepa', '09-09-1996', 'Male', '8116579391', 'VII', '701', 'p701', 'crj'),
('Anurag', 'Debashish', 'Mallika', '23-04-1996', 'Male', '9485987259', 'VII', '702', 'p702', 'crj'),
('Gulshan', 'Murthy', 'Urmila', '11-01-1997', 'Male', '9475463098', 'VII', '703', 'p703', 'crj'),
('Prasoon', 'ABC', 'XYZ', '01-01-1995', 'Male', '9358735289', 'VIII', '801', 'p801', 'crj');
