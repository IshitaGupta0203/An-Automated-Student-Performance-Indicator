-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:30 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladddept`
--

CREATE TABLE IF NOT EXISTS `tbladddept` (
`did` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `eyear` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbladddept`
--

INSERT INTO `tbladddept` (`did`, `dname`, `hname`, `eyear`) VALUES
(25, 'Computer Engineering', 'Prof.G.R.Jagtap', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbladdproj`
--

CREATE TABLE IF NOT EXISTS `tbladdproj` (
`pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdesc` text NOT NULL,
  `stid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbladdproj`
--

INSERT INTO `tbladdproj` (`pid`, `pname`, `pdesc`, `stid`) VALUES
(1, 'wdw', 'fedf', 0),
(2, 'sdf', 'jnvc', 4),
(3, 'Sunita Lalchand Satale', 'MNMNM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbladdstaff`
--

CREATE TABLE IF NOT EXISTS `tbladdstaff` (
`sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `spass` varchar(30) NOT NULL,
  `smno` bigint(10) NOT NULL,
  `qname` varchar(30) NOT NULL,
  `jdate` date NOT NULL,
  `wexp` int(11) NOT NULL,
  `desg` varchar(50) NOT NULL,
  `aos` varchar(50) NOT NULL,
  `ctaught` varchar(50) NOT NULL,
  `rintrast` varchar(60) NOT NULL,
  `achive` varchar(60) NOT NULL,
  `mopb` varchar(40) NOT NULL,
  `saddr` text NOT NULL,
  `sdob` date NOT NULL,
  `sbg` varchar(20) NOT NULL,
  `sphoto` text NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbladdstaff`
--

INSERT INTO `tbladdstaff` (`sid`, `sname`, `semail`, `spass`, `smno`, `qname`, `jdate`, `wexp`, `desg`, `aos`, `ctaught`, `rintrast`, `achive`, `mopb`, `saddr`, `sdob`, `sbg`, `sphoto`, `did`) VALUES
(18, 'Mrs. Vishakha N Pawar', 'vishakha.pawar@ggsf.edu.in', 'VNP@123', 8668473562, 'M.E Computer', '2012-06-12', 13, 'Sr.Lecturer', 'Data Mining', 'Software Engineering,Software Testing', 'Keyword Extraction and Recommendation', 'â€œOutstanding Teacherâ€ Award by GGSP in 2015', 'Yes(Computer Society of India)', '10,Lakshmi Niwas Bungalow Near Guru Dev Ashram,Nashik', '1994-12-28', 'A+ve', '1535185597866.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbladdstud`
--

CREATE TABLE IF NOT EXISTS `tbladdstud` (
`stid` int(11) NOT NULL,
  `stname` varchar(30) NOT NULL,
  `stemail` varchar(30) NOT NULL,
  `stpass` varchar(30) NOT NULL,
  `stmno` bigint(10) NOT NULL,
  `staddr` text NOT NULL,
  `studphoto` text NOT NULL,
  `yid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbladdstud`
--

INSERT INTO `tbladdstud` (`stid`, `stname`, `stemail`, `stpass`, `stmno`, `staddr`, `studphoto`, `yid`) VALUES
(1, '', 'bb@gmail.com', '', 0, '', '', 3),
(2, 'Nisha', 'a@gmail.com', '1', 97653322, 'lkjhgfd', '1548013219756.jpg', 3),
(3, 'Ishita Gupta', 'ishita@gmail.com', '123', 8485896386, '11Gurukrupa society', '5.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbladdsub`
--

CREATE TABLE IF NOT EXISTS `tbladdsub` (
`subid` int(11) NOT NULL,
  `subname` varchar(30) NOT NULL,
  `yid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbladdsub`
--

INSERT INTO `tbladdsub` (`subid`, `subname`, `yid`) VALUES
(1, 'C Programming', 3),
(2, 'math', 3),
(3, 'Basic Physics', 6),
(4, 'Basic Physics', 5),
(5, 'Basic Physics', 3),
(6, 'PIC', 9),
(7, 'PIC', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbladdyear`
--

CREATE TABLE IF NOT EXISTS `tbladdyear` (
`yid` int(11) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbladdyear`
--

INSERT INTO `tbladdyear` (`yid`, `year`) VALUES
(3, 'Fy Bsc'),
(4, 'Sy Bsc'),
(5, 'Ty Bsc'),
(6, 'FY'),
(7, 'FY'),
(8, 'FY'),
(9, 'SY'),
(10, 'SY');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
`aid` int(11) NOT NULL,
  `aemail` varchar(30) NOT NULL,
  `apass` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`aid`, `aemail`, `apass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblmarks`
--

CREATE TABLE IF NOT EXISTS `tblmarks` (
`mid` int(11) NOT NULL,
  `yid` int(11) NOT NULL,
  `stid` int(11) NOT NULL,
  `ctfirst` int(11) NOT NULL,
  `ctsecond` int(11) NOT NULL,
  `Practicals` int(11) NOT NULL,
  `Microproject` int(11) NOT NULL,
  `IndustrialTraning` int(11) NOT NULL,
  `Internals` int(11) NOT NULL,
  `EndSemisterscore` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tblmarks`
--

INSERT INTO `tblmarks` (`mid`, `yid`, `stid`, `ctfirst`, `ctsecond`, `Practicals`, `Microproject`, `IndustrialTraning`, `Internals`, `EndSemisterscore`, `subid`) VALUES
(15, 5, 4, 32, 23, 32, 23, 23, 23, 12, 0),
(16, 4, 5, 0, 0, 432, 34, 34, 4, 34, 0),
(17, 6, 6, 20, 20, 23, 8, 0, 43, 91, 0),
(18, 3, 7, 32, 20, 33, 23, 34, 4, 33, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladddept`
--
ALTER TABLE `tbladddept`
 ADD PRIMARY KEY (`did`), ADD UNIQUE KEY `dname` (`dname`);

--
-- Indexes for table `tbladdproj`
--
ALTER TABLE `tbladdproj`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbladdstaff`
--
ALTER TABLE `tbladdstaff`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbladdstud`
--
ALTER TABLE `tbladdstud`
 ADD PRIMARY KEY (`stid`), ADD KEY `yid` (`yid`);

--
-- Indexes for table `tbladdsub`
--
ALTER TABLE `tbladdsub`
 ADD PRIMARY KEY (`subid`), ADD KEY `yid` (`yid`);

--
-- Indexes for table `tbladdyear`
--
ALTER TABLE `tbladdyear`
 ADD PRIMARY KEY (`yid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tblmarks`
--
ALTER TABLE `tblmarks`
 ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladddept`
--
ALTER TABLE `tbladddept`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbladdproj`
--
ALTER TABLE `tbladdproj`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbladdstaff`
--
ALTER TABLE `tbladdstaff`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbladdstud`
--
ALTER TABLE `tbladdstud`
MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbladdsub`
--
ALTER TABLE `tbladdsub`
MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbladdyear`
--
ALTER TABLE `tbladdyear`
MODIFY `yid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblmarks`
--
ALTER TABLE `tblmarks`
MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbladdstud`
--
ALTER TABLE `tbladdstud`
ADD CONSTRAINT `tbladdstud_ibfk_1` FOREIGN KEY (`yid`) REFERENCES `tbladdyear` (`yid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbladdsub`
--
ALTER TABLE `tbladdsub`
ADD CONSTRAINT `tbladdsub_ibfk_1` FOREIGN KEY (`yid`) REFERENCES `tbladdyear` (`yid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
