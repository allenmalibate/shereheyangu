-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: 127.10.207.130:3306
-- Generation Time: Jan 09, 2016 at 06:10 AM
-- Server version: 5.5.45
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sherehe`
--

--
-- Truncate table before insert `business_location`
--

TRUNCATE TABLE `business_location`;
--
-- Dumping data for table `business_location`
--

INSERT INTO `business_location` (`id`, `name`) VALUES
(1, 'Dar-es-salaam'),
(2, 'Mbeya');

--
-- Truncate table before insert `ci_sessions`
--

TRUNCATE TABLE `ci_sessions`;
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
(8, 11, 'mobile', '12345'),
(9, 11, 'mobile', '123456'),
(10, 12, 'mobile', '1234'),
(11, 13, 'mobile', '123');

--
-- Truncate table before insert `event_calender`
--

TRUNCATE TABLE `event_calender`;
--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `full_name`, `profile_picture`, `display_name`, `password`, `email`, `user_roles_id`) VALUES
(3, 'Joseph Chingalo', 'user.jpg', 'chingalo', 'e04f453275c9b614cb58ea295fcf0ed72867bb6c', 'chingalo', 3),
(4, 'Joseph Chingalo', 'user.jpg', 'Chingalo', 'e04f453275c9b614cb58ea295fcf0ed72867bb6c', 'profschingalo@gmail.com', 4),
(5, 'Allen Malibate', 'user.jpg', 'B Cakes', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'allentelesphory@yahoo.com', 4),
(6, 'Dennis David', 'user.jpg', '', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'dennis@yahoo.com', 4),
(7, 'Allen Malibate', 'user.jpg', 'Allen', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'allen@yahoo.com', 4),
(8, 'John Calvin', 'user.jpg', 'John studio', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'john@yahoo.com', 4),
(9, 'Joel Joseph', '', 'Joel The master', '7204b5f2edbca79b851f41729ff104367d52f7b3', 'joseph@gmail.com', 4),
(10, 'Admin Admin', 'user.jpg', 'Admin', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'admin', 3),
(11, 'Nick Ruge', 'user.jpg', 'Ruge Photography', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'ruge@yahoo.com', 4),
(12, 'Emma John', 'user.jpg', 'Emma Cakes', '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'emma@gmail.com', 4),
(13, 'andrew paul', 'user.jpg', NULL, '1562c1f9807b1b3954dea8c4ea02ac193bf4116b', 'andrew@yahoo.com', 4);

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

--
-- Truncate table before insert `work`
--

TRUNCATE TABLE `work`;
--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `user_iduser`, `work_category_option_id`, `name`, `logo`, `email`, `website`, `address`, `description`, `business_location_id`) VALUES
(1, 9, 4, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(2, 4, 1, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(4, 7, 1, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(5, 8, 1, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(6, 4, 5, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(8, 7, 3, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(9, 8, 3, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(10, 11, 2, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(11, 12, 3, NULL, 'businessLogo.png', NULL, NULL, NULL, NULL, 1),
(12, 3, 2, 'Chingalo Photo studio', 'businessLogo.png', 'chingalo.photostudio@gmail.com', 'chingalo.photostudio.com', 'Kimara Mwisho, Michungwani', 'Photo studio with advanced technology. Come you all', 1),
(13, 5, 1, 'Mc Allen', 'businessLogo.png', 'allen@yahoo.com', 'www.a.com', '', 'best MC', 1),
(14, 13, 2, 'Andew Studio', 'businessLogo.png', 'andrew@yahoo.com', 'andew.com', '', 'Perfect Studio in town', 1),
(15, 13, 2, 'Kings Studio', 'businessLogo.png', 'andrew@yahoo.com', 'andew.com', '', 'another one studio', 2);

--
-- Truncate table before insert `work_category_option`
--

TRUNCATE TABLE `work_category_option`;
--
-- Dumping data for table `work_category_option`
--

INSERT INTO `work_category_option` (`id`, `option_type`, `option_name`) VALUES
(1, 'Mc', 'Mc'),
(2, 'photography', 'Photography'),
(3, 'cake', 'Cake'),
(4, 'car hire', 'Car Hire'),
(5, 'music hire', 'Music Hire'),
(6, 'salon', 'Salon');

--
-- Truncate table before insert `work_gallery`
--

TRUNCATE TABLE `work_gallery`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
