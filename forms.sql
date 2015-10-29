-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2015 at 08:00 AM
-- Server version: 5.5.46-0+deb8u1
-- PHP Version: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
`fid` int(11) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `f4` varchar(255) NOT NULL,
  `f5` varchar(255) NOT NULL,
  `f6` varchar(255) NOT NULL,
  `f7` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`fid`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`) VALUES
(1, '< 50', '3', '4', '0', '0', '0', '0'),
(2, '< 50', '2', '3', '', '', '', ''),
(3, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other'),
(4, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other'),
(5, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE IF NOT EXISTS `form2` (
`fid` int(11) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `f4` varchar(255) NOT NULL,
  `f5` varchar(255) NOT NULL,
  `f6` varchar(255) NOT NULL,
  `f7` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`fid`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`) VALUES
(1, '< 50', '3', '4', '0', '0', '0', '0'),
(2, '< 50', '2', '3', '', '', '', ''),
(3, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other'),
(4, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other'),
(5, 'Life in IT right now is', 'Our service desk is', 'Our IT change process is', 'Our disaster recovery process is', 'We know which groups use which apps?', 'We have application dependency mapping', 'We have lots of ITIL training'),
(6, 'Life in IT right now is', 'Our service desk is', 'Our IT change process is', 'Our disaster recovery process is', 'We know which groups use which apps?', 'We have application dependency mapping', 'We have lots of ITIL training'),
(7, 'Life in IT right now is', 'Our service desk is', 'Our IT change process is', 'Our disaster recovery process is', 'We know which groups use which apps?', 'We have application dependency mapping', 'We have lots of ITIL training'),
(8, 'Life in IT right now is', 'Our service desk is', 'Our IT change process is', 'Our disaster recovery process is', 'We know which groups use which apps?', 'We have application dependency mapping', 'We have lots of ITIL training');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE IF NOT EXISTS `form3` (
`fid` int(11) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `f4` varchar(255) NOT NULL,
  `f5` varchar(255) NOT NULL,
  `f6` varchar(255) NOT NULL,
  `f7` varchar(255) NOT NULL,
  `f8` varchar(255) NOT NULL,
  `f9` varchar(255) NOT NULL,
  `f10` varchar(255) NOT NULL,
  `f11` varchar(255) NOT NULL,
  `f12` varchar(255) NOT NULL,
  `f13` varchar(255) NOT NULL,
  `f14` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`fid`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`) VALUES
(1, '< 50', '3', '4', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(2, '< 50', '2', '3', '', '', '', '', '', '', '', '', '', '', ''),
(3, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other', '', '', '', '', '', '', ''),
(4, '< 50', '2', '3', '4', 'Yes', 'BMC Footprints', 'Other', '', '', '', '', '', '', ''),
(5, 'Life in IT right now is', 'Our service desk is', 'Our IT change process is', 'Our disaster recovery process is', 'We know which groups use which apps?', 'We have application dependency mapping', 'We have lots of ITIL training', '', '', '', '', '', '', ''),
(6, 'on', 'on', 'on', 'on', 'on', '', 'on', '', '', '', '', '', '', ''),
(7, 'on', 'on', 'on', 'on', 'on', '', 'on', '', '', '', '', '', '', ''),
(8, 'on', 'on', 'on', 'on', 'on', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(9, 'on', 'on', 'on', 'on', 'on', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(10, 'on', 'on', 'on', 'on', 'on', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(11, 'on', 'on', 'on', 'on', 'on', '', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(12, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
 ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
