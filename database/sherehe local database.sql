-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 03:22 PM
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

--
-- Truncate table before insert `business_location`
--

TRUNCATE TABLE `business_location`;
--
-- Dumping data for table `business_location`
--

INSERT INTO `business_location` (`id`, `name`) VALUES
(1, 'Arusha'),
(2, 'Mbeya');

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
  PRIMARY KEY (`id`),
  KEY `fk_contacts_user1_idx` (`user_iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Truncate table before insert `contacts`
--

TRUNCATE TABLE `contacts`;
--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_iduser`, `type_of_contact`, `value_of_contact`) VALUES
(1, 9, 'mobile', '+255687168637'),
(2, 4, 'mobile', '+255687168637'),
(3, 5, 'mobile', '0713366303'),
(4, 7, 'mobile', '123'),
(5, 7, 'mobile', '1234'),
(6, 8, 'mobile', '123'),
(7, 8, 'mobile', '123'),
(8, 11, 'mobile', '+255715062220');

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
  PRIMARY KEY (`id`),
  KEY `fk_messages_user1_idx` (`user_iduser`)
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
  `work_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resume_user1_idx` (`user_iduser`),
  KEY `fk_resume_work1_idx` (`work_id`)
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
  PRIMARY KEY (`id`),
  KEY `fk_resume_gallery_resume1_idx` (`resume_id`)
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
  `display_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `user_roles_id` int(11) NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_user_user_roles1_idx` (`user_roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `full_name`, `profile_picture`, `display_name`, `password`, `email`, `user_roles_id`) VALUES
(3, 'Joseph Chingalo', NULL, 'chingalo', 'e04f453275c9b614cb58ea295fcf0ed72867bb6c', 'chingalo', 3),
(4, 'Joseph Chingalo', '', 'Chingalo', 'e04f453275c9b614cb58ea295fcf0ed72867bb6c', 'profschingalo@gmail.com', 4),
(5, 'Allen Malibate', '', 'B Cakes', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'allentelesphory@yahoo.com', 4),
(6, 'Dennis David', '', '', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'dennis@yahoo.com', 4),
(7, 'Allen Malibate', '', 'Allen', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'allen@yahoo.com', 4),
(8, 'John Calvin', '', 'John studio', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'john@yahoo.com', 4),
(9, 'Joel Joseph', '', 'Joel The master', '7204b5f2edbca79b851f41729ff104367d52f7b3', 'joseph@gmail.com', 4),
(10, 'alex', '', 'sasasas', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'admin', 3),
(11, 'Leah Robert', '', 'Leah', 'e04f453275c9b614cb58ea295fcf0ed72867bb6c', 'leah.robert@gmail.com', 4);

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

--
-- Truncate table before insert `user_roles`
--

TRUNCATE TABLE `user_roles`;
--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`) VALUES
(3, 'admin'),
(4, 'member');

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

--
-- Truncate table before insert `work`
--

TRUNCATE TABLE `work`;
--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `user_iduser`, `work_category_option_id`, `name`, `logo`, `email`, `website`, `address`, `description`, `business_location_id`) VALUES
(2, 11, 2, 'Photograph studio', '', 'leahm@yahoo.com', 'laeah.photostudio.co.tz', 'P.O.BOX 121 Arusha', 'In the above example, if we assume that the title field is our primary key, then if a row containing ‘My title’ as the title value, that row will be deleted with our new row data replacing it.In the above example, if we assume that the title field is our primary key, then if a row containing ‘My title’ as the title value, that row will be deleted with our new row data replacing it.In the above example, if we assume that the title field is our primary key, then if a row containing ‘My title’ as the title value, that row will be deleted with our new row data replacing it.In the above example, if we assume that the title field is our primary key, then if a row containing ‘My title’ as the title value, that row will be deleted with our new row data replacing it.In the above example, if we assume that the title field is our primary key, then if a row containing ‘My title’ as the title value, that row will be deleted with our new row data replacing it.', 1),
(4, 11, 3, 'Cake', '', 'leahm@yahoo.com', 'laeah.cake.co.tz', 'P.O.BOX 121 Mbeya', 'Generates an update string and runs the query based on the data you supply. You can pass an array or an object to the function. Here is an example using an array:Generates an update string and runs the query based on the data you supply. You can pass an array or an object to the function. Here is an example using an array:', 2);

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

--
-- Truncate table before insert `work_category_option`
--

TRUNCATE TABLE `work_category_option`;
--
-- Dumping data for table `work_category_option`
--

INSERT INTO `work_category_option` (`id`, `option_type`, `option_name`) VALUES
(1, 'Mc', 'Mc Pro'),
(2, 'photography', 'Photography'),
(3, 'cake', 'Cake Pro'),
(4, 'car hire', 'Car Hire'),
(5, 'music hire', 'Music Hire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
