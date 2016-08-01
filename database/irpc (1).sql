-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 07:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `irpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_name` bigint(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_admin_details`
--

CREATE TABLE IF NOT EXISTS `post_admin_details` (
  `post_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_description` varchar(1000) NOT NULL,
  `post_time` timestamp NOT NULL,
  `post_genre` varchar(1000) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_admin_details`
--

INSERT INTO `post_admin_details` (`post_id`, `user_id`, `user_name`, `post_title`, `post_description`, `post_time`, `post_genre`) VALUES
(1, 2, 'Shashank Bhoge', 'Dear admin please approve this 1', 'Some desc', '2016-01-25 02:01:30', 'Aerospace,Automotive'),
(2, 5, 'Shashank Bhoge', 'Title', 'kajshdk kahd kahd', '2016-01-25 15:52:07', 'Chemical,Computational,Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `post_mentor`
--

CREATE TABLE IF NOT EXISTS `post_mentor` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_mentor`
--

INSERT INTO `post_mentor` (`id`, `post_id`, `user_id`) VALUES
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `post_not_interested`
--

CREATE TABLE IF NOT EXISTS `post_not_interested` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_participate`
--

CREATE TABLE IF NOT EXISTS `post_participate` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `user_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `post_participate`
--

INSERT INTO `post_participate` (`id`, `post_id`, `user_id`, `user_name`) VALUES
(3, 1, 654, 'Shashank Bhoge'),
(4, 1, 654, 'Shashank Bhoge');

-- --------------------------------------------------------

--
-- Table structure for table `post_user_details`
--

CREATE TABLE IF NOT EXISTS `post_user_details` (
  `post_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_description` varchar(1000) NOT NULL,
  `post_time` timestamp NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_w_assist`
--

CREATE TABLE IF NOT EXISTS `post_w_assist` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_w_participate`
--

CREATE TABLE IF NOT EXISTS `post_w_participate` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `user_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_w_participate`
--

INSERT INTO `post_w_participate` (`id`, `post_id`, `user_id`, `user_name`) VALUES
(1, 1, 987, 'Shashank BHige');

-- --------------------------------------------------------

--
-- Table structure for table `temp_user_info`
--

CREATE TABLE IF NOT EXISTS `temp_user_info` (
  `temp_user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `confirm_code` varchar(100) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  PRIMARY KEY (`temp_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_interests` varchar(1000) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `user_password`, `user_email`, `category`, `user_interests`) VALUES
(2, 'Malhar', 'Tidke', '$2y$12$6Qt8OIixocCb/7aawXyGQO4U.CX.TCrq81qnlF3UiJX08YHLSfSFm', 'malhar04@gmail.com', 'faculty', 'interest_one, interest_two'),
(3, 'Shashank', 'Bhoge', '$2y$12$WF5aT/aLzjVFygflwtNaouQlg5IeJQLYZjdwz1Q7Ixwkfw.NrlOpq', 'bhoge.shashank@iitgn.ac.in', 'student', 'Artificial, Automotive, Biomechanics, Cognitive, Computational, Electrical'),
(4, 'Yash Pratap', 'Singh', '$2y$12$G3FFUDqikvOxXjUKsWgRM.iNhMf4TZ/tFo9VfFtbei6ChyjVKK8Nu', 'yash_singh@iitgn.ac.in', 'student', 'interest_one, interest_three'),
(5, 'Sai Rohit', 'Rohit', '$2y$12$my3GMW74gxrt7D686vZkMe8ZQJzzIBs5uHbL4ZyUnI4TZDB.RoAfu', 'singampalli.sai@iitgn.ac.in', 'student', 'Automotive, Cognitive'),
(14, 'Akhil', 'Patnaik', '$2y$12$K0/KxmP0GmbT9J2Rn0QwH.NKNx8gdj0BcM5.gOVq716x9cS0bOHCy', 'akhil.patnaik@iitgn.ac.in', 'student', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
