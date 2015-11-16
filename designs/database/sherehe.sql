-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 09:54 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sherehe`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ci_sessions`
--

TRUNCATE TABLE `ci_sessions`;
-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(11) NOT NULL,
  `type_of_contact` varchar(45) NOT NULL,
  `value_of_contact` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `contacts`
--

TRUNCATE TABLE `contacts`;
-- --------------------------------------------------------

--
-- Table structure for table `event_calender`
--

DROP TABLE IF EXISTS `event_calender`;
CREATE TABLE IF NOT EXISTS `event_calender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(45) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` datetime NOT NULL,
  `user_iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `event_calender`
--

TRUNCATE TABLE `event_calender`;
-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `message_body` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(11) NOT NULL,
  `resume_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `resume`
--

TRUNCATE TABLE `resume`;
-- --------------------------------------------------------

--
-- Table structure for table `resume_gallery`
--

DROP TABLE IF EXISTS `resume_gallery`;
CREATE TABLE IF NOT EXISTS `resume_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `resume_id` int(11) NOT NULL,
  `type_of_gallery` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `resume_gallery`
--

TRUNCATE TABLE `resume_gallery`;
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(45) NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `dispaly_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_roles_id` int(11) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Truncate table before insert `user_roles`
--

TRUNCATE TABLE `user_roles`;
--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `work`
--

TRUNCATE TABLE `work`;
-- --------------------------------------------------------

--
-- Table structure for table `work_category_option`
--

DROP TABLE IF EXISTS `work_category_option`;
CREATE TABLE IF NOT EXISTS `work_category_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_type` varchar(45) NOT NULL,
  `otption_name` varchar(45) NOT NULL,
  `work_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `work_category_option`
--

TRUNCATE TABLE `work_category_option`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
