-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2013 at 06:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `CONTACTS`
--

CREATE TABLE IF NOT EXISTS `CONTACTS` (
  `contactsID` int(11) NOT NULL AUTO_INCREMENT,
  `con_fname` varchar(15) NOT NULL,
  `con_sname` varchar(15) NOT NULL,
  `con_phone` varchar(10) NOT NULL,
  `con_address` varchar(30) NOT NULL,
  PRIMARY KEY (`contactsID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CONTACTS table stores the data of the contacts' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PRIVILAGES`
--

CREATE TABLE IF NOT EXISTS `PRIVILAGES` (
  `privilagesID` int(11) NOT NULL AUTO_INCREMENT,
  `privilage_assossiation` int(11) NOT NULL,
  PRIMARY KEY (`privilagesID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PRIVILAGES_GROUPS`
--

CREATE TABLE IF NOT EXISTS `PRIVILAGES_GROUPS` (
  `privilages_groupID` int(11) NOT NULL DEFAULT '0',
  `privilage` varchar(15) NOT NULL,
  PRIMARY KEY (`privilages_groupID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='PRIVILAGES table stores the privilage groups';

--
-- Dumping data for table `PRIVILAGES_GROUPS`
--

INSERT INTO `PRIVILAGES_GROUPS` (`privilages_groupID`, `privilage`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='USERS table stores the users information' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`userID`, `username`, `password`, `fname`, `sname`, `email`) VALUES
(1, 'malakas', 'malakas1', 'ilithios', 'xazos', 'vlakas@malakia.com'),
(2, 'dio123', '123e', 'dio', 'kal', 'asd@asd'),
(3, 'kal123', '123..', 'kal', 'dio', 'asd@asd'),
(4, 'qweasd', 'qwd', 'qwe', 'asd', 'qwd@qwd.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
