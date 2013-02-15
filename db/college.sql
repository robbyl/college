-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2013 at 11:27 AM
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
  `course_posted_date` datetime NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `dwn_id` int(11) NOT NULL AUTO_INCREMENT,
  `dwn_title` varchar(255) NOT NULL,
  `dwn_date_uploaded` datetime NOT NULL,
  `dwn_file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`dwn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`dwn_id`, `dwn_title`, `dwn_date_uploaded`, `dwn_file_name`) VALUES
(4, 'fee structure', '2013-02-15 11:23:31', 'report (2).docx');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_posted_date`, `event_description`, `event_attachment`, `event_image`) VALUES
(1, 'Graduation Ceremonies', '2012-09-20 13:21:26', 'This is to inform all students', '', ''),
(2, 'ssss', '2012-09-12 15:12:33', 'ddgdgdgd', 'IT_support_engineer_CV_template.pdf', 'Tulips.jpg'),
(4, 'some events', '2013-02-04 16:14:23', 'event description', '', ''),
(5, 'some events', '2013-02-04 16:15:14', 'event description', '', ''),
(6, 'kllklk', '2013-02-09 16:06:46', 'jjjkjkjjkj', 'network_engineer_CV_template.pdf', ''),
(7, 'kasjflksfyes', '2013-02-12 14:29:48', 'asdfsfyes', 'report.docx', 'picture016.jpg'),
(8, 'asdgf', '2013-02-12 14:30:22', 'adfsdf', '', ''),
(9, 'jlkfjlk', '2013-02-15 11:33:46', 'lafklasf', 'report (2).docx', 'picture016.jpg'),
(10, 'addsf', '2013-02-15 11:34:06', 'adfsdf', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nws_id`, `nws_title`, `nws_posted_date`, `nws_description`, `nws_attachment`, `nws_image`) VALUES
(11, 'Admission', '2012-09-19 09:35:00', 'Selected Candidates to join ..', '', ''),
(15, 'Job Openings', '2013-02-05 17:51:45', 'Various jobs', '1st_line_support_CV_template_example.pdf', ''),
(20, 'Prospectus', '2013-02-06 17:08:32', 'Prospectus for all colleges', 'flash-forward-robert-j-sawyer.pdf', ''),
(21, 'Institute opening', '2013-02-11 00:00:00', 'This is to inform all students that that the institute will be opened on 03/Mar/2013', '', ''),
(22, 'Institute opening', '2013-02-11 16:00:00', 'This is to inform all students that that the institute will be opened on 03/Mar/2013', '', ''),
(23, 'msewe', '2013-02-12 14:21:24', 'home', 'Website proposal.pdf', 'picture016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `staff_image` varchar(255) NOT NULL,
  `posted_date` datetime NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_title`, `position`, `staff_image`, `posted_date`) VALUES
(6, 'fsaf', 'afasf', 'picture016.jpg', '2013-02-15 12:18:33');

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
