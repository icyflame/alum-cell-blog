-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2014 at 01:05 PM
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
-- Creation: Aug 20, 2014 at 07:54 AM
--

CREATE TABLE IF NOT EXISTS `posts_temp` (
  `postid` int(10) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(10) DEFAULT NULL,
  `tempid` varchar(70) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts_temp`
--

INSERT INTO `posts_temp` (`postid`, `time`, `userid`, `tempid`, `status`) VALUES
(1, '2014-08-20 10:26:19', 9, '9de8207bf615f13706e9985811e92b93a482ef18', 3),
(2, '2014-08-20 10:26:47', 9, 'fcc6a41913267e197c0a25f0e28be4ec813ae56a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_blog`
--
-- Creation: Aug 20, 2014 at 11:05 AM
--

CREATE TABLE IF NOT EXISTS `users_blog` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privilege` int(11) NOT NULL DEFAULT '1000' COMMENT 'can have 4 values',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users_blog`
--

INSERT INTO `users_blog` (`userid`, `name`, `username`, `password`, `email`, `privilege`) VALUES
(1, 'Admin', 'admin', '33ee7e1eb504b6619c1b445ca1442c21', 'mishra.rahul1712@gmail.com', 1),
(2, 'Arpit', 'arpit', '33ee7e1eb504b6619c1b445ca1442c21', 'arpit366@gmail.com', 1),
(3, 'Rahul', 'root', '33ee7e1eb504b6619c1b445ca1442c21', 'namannishesh@gmail.com', 1),
(4, 'testuser', 'test', '33ee7e1eb504b6619c1b445ca1442c21', 'user@user.com', 2),
(5, 'GSEC 1', 'gsec', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 1),
(6, 'MEMBER', 'mem6', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 2),
(7, 'MEMBER 7', 'mem7', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 2),
(8, 'MEMBER 8', 'mem8', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 2),
(9, 'MEMBER 9', 'mem9', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 2),
(10, 'MEMBER 10', 'mem10', '33ee7e1eb504b6619c1b445ca1442c21', 'kannan.siddharth12@gmail.com', 2),
(11, 'Vinod', 'vinod1', '33ee7e1eb504b6619c1b445ca1442c21', 'vinod.k@g.mail.com', 6),
(12, 'Vinod Phase 2', 'vinod2', '33ee7e1eb504b6619c1b445ca1442c21', 'vinod.k2@g.mail.com', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
