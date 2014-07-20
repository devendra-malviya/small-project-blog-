-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2014 at 04:58 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minordatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `minor`
--

CREATE TABLE IF NOT EXISTS `minor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subject` varchar(22) NOT NULL,
  `article` varchar(2000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `minor`
--

INSERT INTO `minor` (`id`, `subject`, `article`, `category`, `status`) VALUES
(1, 'How to write poems', 'I will teach u to write poems', 'Art', 1),
(14, 'How to make games', 'I will teach u to make games', 'Technology', 1),
(16, 'cricket', 'how to play cricket', 'Sports', -1),
(17, 'surya namaskar', 'it is very good for health.', 'Health', 1),
(18, 'drawing', 'i love drawing', 'Art', 1),
(19, 'green house effect', 'is a good technique to keep environment warm.', 'Environment', -1),
(21, 'tipu sultan', 'hero tha wo', 'History', -1),
(22, 'gym', 'aldfadlfa', 'Agriculture', 1),
(23, 'pp', 'aldsfljaldjf', 'Medicine', 1),
(24, 'ram', 'alsdfjlasdjf', 'Agriculture', 1),
(25, '', '', '', 0),
(26, '', '', '', 1),
(27, 'a', 'a', 'Art', 1),
(28, 'h', 'h', 'Agriculture', 1),
(29, 'comp', 'aldfjal;sdjf;lasjd;lfjas;ldjf;', 'Technology', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
