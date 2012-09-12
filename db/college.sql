-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2012 at 02:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) NOT NULL,
  `event_posted_date` datetime NOT NULL,
  `event_description` text NOT NULL,
  `event_attachment` varchar(255) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_posted_date`, `event_description`, `event_attachment`, `event_image`) VALUES
(1, 'Graduation Ceremonies', '2012-09-20 13:21:26', 'This is to inform all students', '', ''),
(2, 'ssss', '2012-09-12 15:12:33', 'ddgdgdgd', 'DS_Lecture_01_Introduction.pdf', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nws_id` int(11) NOT NULL AUTO_INCREMENT,
  `nws_title` varchar(255) NOT NULL,
  `nws_posted_date` datetime NOT NULL,
  `nws_description` text NOT NULL,
  `nws_attachment` varchar(255) NOT NULL,
  `nws_image` varchar(255) NOT NULL,
  PRIMARY KEY (`nws_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nws_id`, `nws_title`, `nws_posted_date`, `nws_description`, `nws_attachment`, `nws_image`) VALUES
(1, 'Kaka jose', '2003-09-24 08:25:21', 'Selected Candidates to join ..', '', ''),
(2, 'Admission', '1998-09-21 10:31:20', 'Selected Candidates to join ..', '', ''),
(3, 'Admission', '2005-09-20 00:00:00', 'Selected Candidates to join ..', '', ''),
(4, 'Admission', '2004-09-16 12:18:28', 'Selected Candidates to join ..', '', ''),
(5, 'Admission', '2012-09-24 00:00:00', 'Selected Candidates to join ..', '', ''),
(6, 'Admission', '2002-09-18 11:32:18', 'Selected Candidates to join ..', '', ''),
(7, 'Admission', '2019-04-24 12:26:38', 'Selected Candidates to join ..', '', ''),
(8, 'Admission', '2012-09-24 00:00:00', 'Selected Candidates to join ..', '', ''),
(9, 'Admission', '2004-09-23 00:00:00', 'Selected Candidates to join ..', '', ''),
(10, 'Admission', '2012-09-24 00:00:00', 'Selected Candidates to join ..', '', ''),
(11, 'Admission', '2012-09-19 09:35:00', 'Selected Candidates to join ..', '', ''),
(12, 'Admission', '2012-09-24 00:00:00', 'Selected Candidates to join ..', '', ''),
(13, 'some news', '2012-09-12 15:18:04', 'some descripton', 'IS 381-Exam 2006-2007.doc', 'Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
