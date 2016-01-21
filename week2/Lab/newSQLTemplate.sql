
-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2016 at 01:27 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpclasswinter2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(200) COLLATE utf8_bin NOT NULL,
  `dob` varchar(200) COLLATE utf8_bin NOT NULL,
  `height` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `lastname`, `dob`, `height`) VALUES
(1, 'Michael', 'Jordan', '1963-02-17', '6''6'),
(2, 'Leonardo', 'DiCaprio', '1974-11-11', '6''0'),
(3, 'Will', 'Smith', '1968-09-25', '6''2'),
(4, 'Bob', 'Marley', '1945-02-06', '5''7'),
(5, 'Kevin', 'Hart', '1979-07-06', '5''4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
