-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 05:59 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `room_id`, `time_id`) VALUES
(1, 9, 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `class_detail`
--

INSERT INTO `class_detail` (`detail_id`, `class_name`, `grade`, `class_id`, `room_id`, `time_id`) VALUES
(1, 'Pre A', 'Preschool', 1, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `capacity`) VALUES
(8, 'sample2', 23),
(9, 'sample4', 25);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_time`
--

INSERT INTO `tbl_time` (`time_id`, `code`, `day_time`, `start_time`, `end_time`) VALUES
(5, 'MON1012', 'Monday', '22:29:00', '00:29:00'),
(6, 'TUES1112', 'Tuesday', '00:20:00', '12:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'kideadmin', 'evergarden', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
