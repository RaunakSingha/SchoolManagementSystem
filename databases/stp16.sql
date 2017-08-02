-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2017 at 06:49 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('PujaS', 'abcd'),
('ppppp', 'efgh'),
('qwerty', '1234'),
('abcde', '123456'),
('aaaaa', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `adminarticle`
--

CREATE TABLE IF NOT EXISTS `adminarticle` (
  `password` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `noticename` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminarticle`
--

INSERT INTO `adminarticle` (`password`, `path`, `noticename`) VALUES
('efgh', '/sms2/StuArticles/Uploaded Articles/1st 2nd Sem 13-14.pdf', 'sem 1'),
('efgh', '/sms2/StuArticles/Uploaded Articles/1st(evn)2014-15 All.pdf', 'Question Paper'),
('efgh', '/sms2/StuArticles/Uploaded Articles/Dan Brown - The Da Vinci Code.pdf', 'Book1');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `Name` varchar(100) NOT NULL,
  `Path` varchar(300) NOT NULL,
  `Articlename` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Name`, `Path`, `Articlename`) VALUES
('Raunak', '/sms2/StuArticles/Uploaded Articles/LetUsC-YashwantKanetkar.pdf', 'Let Us C'),
('Sayarik', '/sms2/StuArticles/Uploaded Articles/Digital Design -Morris Mano 5th Edition.pdf', 'Digital Design-Morris Mano'),
('Raunak', '/sms2/StuArticles/Uploaded Articles/Angels and Demons - Dan Brown.pdf', 'Angels And Demons'),
('Samadrita', '/sms2/StuArticles/Uploaded Articles/The Lost Symbol by Dan Brown.pdf', 'The Lost Symbols'),
('Samadrita', '/sms2/StuArticles/Uploaded Articles/IMG-20151120-WA0012.jpg', 'Inorganic'),
('Samadrita', '/sms2/StuArticles/Uploaded Articles/Book 3 - The Prisoner of Azkaban.pdf', 'Prisoner Of Azkaban');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `c-id` varchar(10) NOT NULL,
  `c-name` varchar(100) NOT NULL,
  PRIMARY KEY (`c-id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c-id`, `c-name`) VALUES
('101', 'India'),
('102', 'China'),
('103', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `roll` varchar(10) NOT NULL,
  `attn` varchar(10) NOT NULL,
  `marks` varchar(10) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`roll`, `attn`, `marks`) VALUES
('501', '95', '95'),
('502', '97', '97'),
('503', '92', '93'),
('602', '90', '67'),
('603', '94', '94'),
('677', '97', '89'),
('701', '90', '90'),
('702', '91', '95'),
('703', '97', '96.2'),
('801', '95', '97');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` varchar(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(10) NOT NULL,
  `pcategory` varchar(20) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `pdim` varchar(30) NOT NULL,
  `pweight` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pcategory`, `pimage`, `pdim`, `pweight`) VALUES
('1001', 'Men Quartz Watch Line Dial', '1200', 'Watches', '/images/watch1.jpg', '24 X 4 X 0.8 cm', '0.034kg'),
('2001', 'Acer Sky Blue 11.6" R11 R3-131T-C1YF touch screen 2-in-1 Convertible Laptop PC', '50000', 'Laptops', '/images/laptop1.jpg', '11.73 x 8.31 x 0.82 Inches ', '4.5kg'),
('1002', 'YAZOLE 315 leather strap analog quartz watch for men', '1400', 'Watches', '/images/watch2.jpg', '23 x 4 x 1.2 cm', '0.039kg'),
('1004', 'Titan 9943WL01 Women Watch', '4800', 'Watches', '/images/watch4.jpg', '24 X 4.3 X 0.9 cm', '0.045kg'),
('1003', 'Titan Raga NE9931WM01J Analog Women''s Watch', '7600', 'Watches', '/images/watch3.jpg', '22 x 4 x 1 cm', '0.049kg'),
('2002', 'ULTIMA 13.3" Touch Screen 2-in-1 Convertible laptop PC', '52000', 'Laptops', '/images/laptop2.jpg', '13.00 x 9.00 x 0.75 Inches ', '4.2kg'),
('2003', 'Dell Silver 17.3" Inspiron 5759 Laptop PC with Intel Core i7-6500U Processor', '54000', 'Laptops', '/images/laptop3.jpg', '16.41 x 1.15 x 11.15 Inches ', '4.6kg'),
('2004', 'Dell Inspiron 15 Gaming Edition Gray 15.6" 7559 Laptop PC', '72000', 'Laptops', '/images/laptop4.jpg', '10.43 x 15.08 x 1.00 Inches ', '4.4kg'),
('3001', 'Samsung Galaxy S6 Edge+ G928G ', '24500', 'Mobiles', '/images/mobile1.jpg', '3.00 x 6.00 x 9.00 Inches ', '0.132 kg'),
('3002', 'Samsung Galaxy S4 White Certified Pre-Owned (AT&T)', '17000', 'Mobiles', '/images/mobile2.jpg', '4.00 x 2.25 x 6.50 Inches ', '0.132 kg'),
('3003', 'Refurbished HTC D100LVWPP Desire 526 Verizon ', '16500', 'Mobiles', '/images/mobile3.jpg', '3.00 x 5.00 x 8.00 Inches', '0.122 kg'),
('3004', 'Refurbished HTC One M7 Silver 32GB 4G Sprint ', '26500', 'Mobiles', '/images/mobile4.jpg', '3.00 x 6.00 x 9.00 Inches', '0.145 kg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `s-id` varchar(10) NOT NULL,
  `c-id` varchar(10) NOT NULL,
  `s-name` varchar(20) NOT NULL,
  PRIMARY KEY (`s-id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
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
('Samadrita', 'Arun', 'Urmila', '18-12-1996', 'Female', '9867565533', 'V', '503', 'p503', 'crj'),
('Sayarik', 'Prasanta', 'Uma', '12-07-1996', 'Male', '9458238734', 'VI', '602', 'p602', 'arbndngr'),
('Cibin', 'Abraham', 'Anamma', '01-01-1990', 'Male', '9475463285', 'VI', '603', 'p603', 'crj'),
('Debjit', 'Debashish', 'Deepa', '09-09-1996', 'Male', '8116579391', 'VII', '701', 'p701', 'crj'),
('Anurag', 'Debashish', 'Mallika', '23-04-1996', 'Male', '9485987259', 'VII', '702', 'p702', 'crj'),
('Gulshan', 'Murthy', 'Urmila', '11-01-1997', 'Male', '9475463098', 'VII', '703', 'p703', 'crj'),
('Prasoon', 'ABC', 'XYZ', '01-01-1995', 'Male', '9358735289', 'VIII', '801', 'p801', 'crj');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `ctype` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `cllg` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`ctype`, `cname`, `city`, `batch`, `cllg`, `branch`, `name`, `fname`, `phn`, `email`, `pwd`, `dob`, `address`, `gender`) VALUES
('Summer Training', 'PHP with wordpress', 'Kolkata', 'May', 'NIT Patna', 'CSE', 'Raunak Singha', 'Bijan Singha', '9475333060', 'rksingha1212@gmail.com', 'kljfg', '12-12-1996', 'CRJ', 'male'),
('Summer Training', 'PHP with wordpress', 'Kolkata', 'May', 'NIT Durgapur', 'EE', 'Samadrita Sarkar', 'Kajol Kumar Sarkar', '8697576553', 'samadritasarkar@gmail.com', 'kjdfskjf', '14-08-1997', 'Barasat', 'female'),
('Winter Training', 'PHP with wordpress', 'Agra', 'July', 'NIT Durgapur', 'CSE', 'aiyush', 'prasad', '0982387348', 'aiyush@gmail.com', 'pongpong', '22-03-1996', 'CRJ', 'male'),
('Summer Training', 'PHP with wordpress', 'Kolkata', 'June', 'NIT Durgapur', 'CSE', 'Sayan Dutta', 'Chanchal Dutta', '9593632435', 'sayandutta@gmail.com', 'lkjdghkljdfh', '01-01-1990', 'asn', 'male'),
('Winter Training', 'ASP.Net with C#', 'Agra', 'June', 'NIT Rourkella', 'ECE', 'adi', 'shankar', '9857463832', 'adi@gmail.com', 'kljdsf', '13-12-1996', 'CRJ', 'male'),
('Winter Training', 'Android with core ja', 'Agra', 'June', 'NIT Rourkella', 'CSE', 'pukai', 'prosanto', '9876789754', 'rj@gmail.com', 'kljas', '12-06-1996', 'CRJ', 'male');
