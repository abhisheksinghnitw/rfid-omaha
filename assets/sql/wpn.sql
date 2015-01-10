-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2015 at 10:28 PM
-- Server version: 5.5.40
-- PHP Version: 5.5.19-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(16) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'breakfast,lunch,dinner',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `card_data`
--

CREATE TABLE IF NOT EXISTS `card_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_data` varchar(200) NOT NULL,
  `regno` varchar(16) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `card_data`
--

INSERT INTO `card_data` (`id`, `card_data`, `regno`, `last_access`) VALUES
(1, '12114220', '', '0000-00-00 00:00:00'),
(2, '11708300', '', '0000-00-00 00:00:00'),
(3, '11510396', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mess_timings`
--

CREATE TABLE IF NOT EXISTS `mess_timings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mess_timings`
--

INSERT INTO `mess_timings` (`id`, `name`, `in_time`, `out_time`) VALUES
(1, 'Breakfast', '06:00:00', '10:00:00'),
(2, 'Lunch', '11:00:00', '15:00:00'),
(3, 'Dinner', '18:00:00', '22:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`type`) REFERENCES `mess_timings` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
