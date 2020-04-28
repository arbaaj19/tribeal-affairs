-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2018 at 12:11 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tribe`
--
CREATE DATABASE IF NOT EXISTS `tribe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tribe`;

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `image` varchar(10000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `desc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image`, `name`, `desc`) VALUES
('C:wamp	mpphp6386.tmp', 'xbhhhhbhjdbjd', 'iuxhusxis'),
('C:wamp	mpphpA0B5.tmp', 'vgxasgvxu', 'ubhhbhsxbhj');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `pass`, `gender`, `mobno`) VALUES
('Gaurang Karve', 'gaurangpkarve@gmail.com', '123456789', 'Male', '8484075609'),
('sonali', 'sonali1998deshmukh@gmail.com', '789456123', 'Female', '8496258625'),
('shraddha', 'shraddhargavali@gmail.com', '987654321', 'Female', '8806357800'),
('Sonali', 'sonali1998deshmukh@gmail.com', '321456987', 'Female', '8646351213');

-- --------------------------------------------------------

--
-- Table structure for table `text_table`
--

CREATE TABLE IF NOT EXISTS `text_table` (
  `text` varchar(10000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_table`
--

INSERT INTO `text_table` (`text`, `name`, `desc`) VALUES
('C:wamp	mpphp71D2.tmp', 'ftfhwf', 'agcvahscv'),
('C:wamp	mpphp6017.tmp', 'nasnbcjacha', 'agsvjah'),
('C:wamp	mpphpEEEF.tmp', 'JVHXSVJHSX', 'HSXHXS'),
('C:wamp	mpphp2F59.tmp', 'gggc', 'kbcdbjkc');

-- --------------------------------------------------------

--
-- Table structure for table `video_table`
--

CREATE TABLE IF NOT EXISTS `video_table` (
  `video` varchar(10000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_table`
--

INSERT INTO `video_table` (`video`, `name`, `desc`) VALUES
('', 'dasfdfgnhm', 'efwsgde'),
('', 'zsrxcfgbnjmk', 'awsedtrfy'),
('', 'sxwdefrgt', 'sdcf'),
('', 'axsdcefrvgbt', 'dxecfrvg'),
('C:wamp	mpphp9B2D.tmp', 'asxdcgbhnj', 'sxdrctfvyg'),
('', 'fsacxhasgxcahs', 'fdg'),
('', 'gfxgfx', 'fggfx'),
('C:wamp	mpphp8D4C.tmp', 'hdsbkcjdsbc', 'scaac');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
