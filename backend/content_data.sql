-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Novemember 9, 2018 at 06:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `content_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;


--
--Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS 'themes' (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `css_file_path` varchar(30) NOT NULL,
  PRIMARY KEY (`id `)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

--
--Table structure for table `mainpages`
--

CREATE TABLE IF NOT EXISTS 'mainpages' (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT = 11;


--
--Table structure for table `subpages`
--

CREATE TABLE IF NOT EXISTS 'subpages' (
   `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT = 11;

--
-- Dumping data for table `mainpages`
--

INSERT INTO `mainpages` (`id`, `title`, `content`) VALUES
(1, 'Home', 'This is a nice home page.'),
(2, 'About', 'Information to find out about us.'),
(3, 'Contact', 'Information to contact us.');

--
-- Dumping data for table `subpages`
--

INSERT INTO `subpages` (`id`, `title`, `content`) VALUES
(1, 'History', 'The long history of things.'),
(2, 'Mission', 'The mission statement that sounds awesome.'),
(3, 'Locations', 'Information to find us.'),
(4, 'Email', 'Information to email us.');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;