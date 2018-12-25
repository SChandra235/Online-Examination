-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 06:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puee`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate`
--

CREATE TABLE `allocate` (
  `ac` varchar(250) NOT NULL,
  `center` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocate`
--

INSERT INTO `allocate` (`ac`, `center`, `time`) VALUES
('123456789009', 'Patna', '9:00 A.M. - 12:00 A.M.'),
('123456789012', '', ''),
('123456789021', 'Chennai', '9:00 A.M. - 12:00 A.M.');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'C6H6', 1),
(2, 'C6H3', 1),
(3, 'C6H12', 1),
(4, 'E=M*C', 2),
(5, 'E=M*(C^2)', 2),
(6, 'E=(M*C)^2', 2),
(7, 'Potential Energy', 3),
(8, 'Angular Momentum', 3),
(9, 'Acceleration', 3);

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `name` varchar(250) NOT NULL,
  `t1` int(255) NOT NULL,
  `t2` int(255) NOT NULL,
  `t3` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`name`, `t1`, `t2`, `t3`) VALUES
('Bangalore', 0, 0, 0),
('Chennai', 1, 0, 0),
('Hyderabad', 0, 0, 0),
('Kolkata', 0, 0, 0),
('Lucknow', 0, 0, 0),
('Mumbai', 0, 0, 0),
('New Delhi', 0, 0, 0),
('Patna', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `ac` varchar(250) NOT NULL,
  `prn` int(250) NOT NULL,
  `paid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`ac`, `prn`, `paid`) VALUES
('123456789009', 87654321, 0),
('123456789012', 12345678, 0),
('123456789021', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ac` varchar(12) NOT NULL,
  `pas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ac`, `pas`) VALUES
('123456789009', '25d55ad283aa400af464c76d713c07ad'),
('123456789012', '25d55ad283aa400af464c76d713c07ad'),
('123456789021', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `pd`
--

CREATE TABLE `pd` (
  `userid` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ac` varchar(12) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `mn` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cy` varchar(50) NOT NULL,
  `pc` varchar(50) NOT NULL,
  `st` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd`
--

INSERT INTO `pd` (`userid`, `sex`, `dob`, `email`, `ac`, `fn`, `mn`, `country`, `address`, `cy`, `pc`, `st`, `mob`) VALUES
('HARSH', 'Male', '2018-05-02', 'HARSH@GMAIL.COM', '123456789009', 'SHRI BHAGWAN SAHU', 'MADHURI KUMARI', 'INDIAN', 'BAKER', 'PATNA', '800004', 'BIHAR', '9431460446'),
('Shubham Chandra', 'Male', '1996-02-05', 'shubhamchandra235@gmail.com', '123456789012', 'Shri bhagwan sahu', 'madhuri sahu', 'India', 'Bakarganj bari path, patna', 'patna', '800004', 'Bihar', '9472048172'),
('SHIVAM', 'Male', '2018-05-12', 'SHIVAM@GMAIL.COM', '123456789021', 'BHAGWAN SAHU', 'MADHURI SAHU', 'INDIAN', 'BAKER', 'PATNA', '800004', 'BIHAR', '9876543221');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'What is the formula for Benzene?', 1),
(2, 'What is the formula for Energy?', 5),
(3, 'What is the meaning of dv/dt?', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ac` varchar(250) NOT NULL,
  `totalque` int(250) NOT NULL,
  `ans_cor` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ac`, `totalque`, `ans_cor`) VALUES
('123456789012', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ten`
--

CREATE TABLE `ten` (
  `ac` varchar(250) NOT NULL,
  `sb` varchar(250) NOT NULL,
  `yp` varchar(250) NOT NULL,
  `op` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ten`
--

INSERT INTO `ten` (`ac`, `sb`, `yp`, `op`) VALUES
('123456789009', 'I.C.S.E.', '2018', 86),
('123456789012', 'C.B.S.E.', '2014', 83),
('123456789021', 'State Board', '2017', 67);

-- --------------------------------------------------------

--
-- Table structure for table `twelve`
--

CREATE TABLE `twelve` (
  `ac` varchar(50) NOT NULL,
  `il` varchar(50) NOT NULL,
  `sb` varchar(250) NOT NULL,
  `yp` varchar(10) NOT NULL,
  `es` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twelve`
--

INSERT INTO `twelve` (`ac`, `il`, `sb`, `yp`, `es`) VALUES
('123456789009', 'ALLEN', 'C.B.S.E.', '2018', 'PAINTING'),
('123456789012', 'bansal classes', 'C.B.S.E.', '2016', 'painting'),
('123456789021', 'VIBRANT', 'State Board', '2017', 'PT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate`
--
ALTER TABLE `allocate`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `pd`
--
ALTER TABLE `pd`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `ten`
--
ALTER TABLE `ten`
  ADD PRIMARY KEY (`ac`);

--
-- Indexes for table `twelve`
--
ALTER TABLE `twelve`
  ADD PRIMARY KEY (`ac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
