-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2014 at 06:38 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_db`
--
CREATE DATABASE IF NOT EXISTS `blog_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_db`;

-- --------------------------------------------------------

--
-- Table structure for table `posts_temp`
--

CREATE TABLE IF NOT EXISTS `posts_temp` (
  `postid` int(10) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(10) DEFAULT NULL,
  `tempid` varchar(70) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts_temp`
--

INSERT INTO `posts_temp` (`postid`, `time`, `userid`, `tempid`, `status`) VALUES
(1, '2014-08-12 16:26:39', 9, 'c5db0eb3d8f7f4ffd433aff4642bb029303586da', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_blog`
--

CREATE TABLE IF NOT EXISTS `users_blog` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(11) NOT NULL COMMENT 'can have 4 values',
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users_blog`
--

INSERT INTO `users_blog` (`userid`, `name`, `username`, `password`, `privilege`, `email`) VALUES
(1, 'Admin', 'admin', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'mishra.rahul1712@gmail.com'),
(2, 'Arpit', 'arpit', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'arpit366@gmail.com'),
(3, 'Rahul', 'root', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'namannishesh@gmail.com'),
(4, 'testuser', 'test', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'user@user.com'),
(5, 'GSEC 1', 'gsec', '33ee7e1eb504b6619c1b445ca1442c21', 1, 'kannan.siddharth12@gmail.com'),
(6, 'MEMBER', 'mem6', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(7, 'MEMBER 7', 'mem7', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(8, 'MEMBER 8', 'mem8', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(9, 'MEMBER 9', 'mem9', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(10, 'MEMBER 10', 'mem10', '33ee7e1eb504b6619c1b445ca1442c21', 2, 'kannan.siddharth12@gmail.com'),
(11, 'Vinod', 'vinod1', '33ee7e1eb504b6619c1b445ca1442c21', 6, 'vinod.k@g.mail.com'),
(12, 'Vinod Phase 2', 'vinod2', '33ee7e1eb504b6619c1b445ca1442c21', 6, 'vinod.k2@g.mail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
