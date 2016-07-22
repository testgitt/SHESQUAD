-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 09:32 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `woman`
--

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE IF NOT EXISTS `learner` (
  `name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `learn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`name`, `address`, `phone`, `email`, `password`, `domain`, `learn`) VALUES
('sonu sr', 'jp nagar 1st phase', '9739566911', 'sonu.rsanji@gmail.com', '4fd7d5f5beedc99c1307f32604ead15b', 'Education', 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `teach` varchar(30) NOT NULL,
  `recommendation` varchar(50) NOT NULL,
  `thumbsup` int(1) NOT NULL,
  `domain` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `address`, `phone`, `email`, `password`, `linkedin`, `teach`, `recommendation`, `thumbsup`, `domain`) VALUES
('sonu sr', 'jp nagar 1st phase', '2147483647', 'sonu.rsanji@gmail.com', '4fd7d5f5beedc99', '', 'programming', '', 0, 'Education');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
