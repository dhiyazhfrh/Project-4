-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 01:41 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kideapp`
--
CREATE DATABASE IF NOT EXISTS `kideapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kideapp`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `room_id`, `time_id`) VALUES
(1, 9, 6),
(2, 8, 5),
(3, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `class_detail`
--

CREATE TABLE IF NOT EXISTS `class_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `class_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class_detail`
--

INSERT INTO `class_detail` (`detail_id`, `class_name`, `grade`, `class_id`, `room_id`, `time_id`) VALUES
(3, 'Pre A', 'Preschool', 3, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `capacity`) VALUES
(8, 'sample', 25);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `detail_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fullname`, `gender`, `dob`, `detail_id`) VALUES
(1, 'Surya R', 'male', '2021-07-07', 1),
(3, 'Violet', 'female', '2021-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time`
--

CREATE TABLE IF NOT EXISTS `tbl_time` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `day_time` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_time`
--

INSERT INTO `tbl_time` (`time_id`, `code`, `day_time`, `start_time`, `end_time`) VALUES
(6, 'TUES1112', 'Tuesday', '12:00:00', '14:20:00'),
(7, 'WED0912', 'Wednesday', '09:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `authority` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `email`, `phone`, `pass`, `authority`) VALUES
(1, 'kideadmin', 'Surya', 'surya@gmail.com', '0812083212031', 'evergarden', 'admin'),
(3, 'Violet', 'Violet Evergarden', 'surya@gmail.com', '08123109831', '1234', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
