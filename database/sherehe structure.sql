-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2016 at 07:04 AM
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
CREATE DATABASE IF NOT EXISTS `sherehe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sherehe`;

-- --------------------------------------------------------

--
-- Table structure for table `business_location`
--

DROP TABLE IF EXISTS `business_location`;
CREATE TABLE IF NOT EXISTS `business_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  PRIMARY KEY (`id`),
  KEY `fk_contacts_user1_idx` (`user_iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
  PRIMARY KEY (`id`),
  KEY `fk_event_calender_user1_idx` (`user_iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`),
  KEY `fk_messages_user1_idx` (`user_iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(45) NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_roles_id` int(11) NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_user_user_roles1_idx` (`user_roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(11) NOT NULL,
  `work_category_option_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `description` text,
  `business_location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_work_category_user1_idx` (`user_iduser`),
  KEY `fk_work_work_category_option1_idx` (`work_category_option_id`),
  KEY `fk_work_business_location1_idx` (`business_location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `work_category_option`
--

DROP TABLE IF EXISTS `work_category_option`;
CREATE TABLE IF NOT EXISTS `work_category_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_type` varchar(45) NOT NULL,
  `option_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `work_gallery`
--

DROP TABLE IF EXISTS `work_gallery`;
CREATE TABLE IF NOT EXISTS `work_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) DEFAULT NULL,
  `type_of_gallery` varchar(45) DEFAULT NULL,
  `description` text,
  `work_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_work_gallery_work1_idx` (`work_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
