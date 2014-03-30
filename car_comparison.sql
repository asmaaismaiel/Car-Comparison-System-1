-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2014 at 10:48 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_comparison`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `manufacturer`, `model`) VALUES
(12, 'Toyota', 'Car1'),
(13, 'Daihatsu', 'Ayla');

-- --------------------------------------------------------

--
-- Table structure for table `car_parts`
--

CREATE TABLE `car_parts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `car_id` bigint(20) NOT NULL,
  `parts_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `car_parts`
--

INSERT INTO `car_parts` (`id`, `car_id`, `parts_id`) VALUES
(26, 1, 1),
(27, 1, 2),
(28, 3, 1),
(29, 3, 3),
(30, 2, 1),
(31, 2, 2),
(32, 3, 2),
(33, 1, 5),
(34, 12, 6),
(35, 13, 7),
(36, 12, 8),
(37, 12, 10),
(38, 13, 9),
(39, 13, 11),
(40, 12, 7),
(41, 13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parts_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parts_price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `manufacturer`, `parts_name`, `parts_price`) VALUES
(6, '', 'Rr Spoiler', 0.5),
(7, '', 'Fr or Rr Aero Bumper', 0.7),
(8, '', 'Side Stone Guard', 1),
(9, '', 'Over Fender', 1.5),
(10, '', 'Fr or Rr skid plate', 0.55),
(11, '', 'Colored bumper', 0.4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
