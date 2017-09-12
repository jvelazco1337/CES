-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2017 at 02:10 AM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CES`
--

-- --------------------------------------------------------

--
-- Table structure for table `Testing`
--

CREATE TABLE IF NOT EXISTS `Testing` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `favcolor` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Testing`
--

INSERT INTO `Testing` (`id`, `first_name`, `last_name`, `email`, `dob`, `favcolor`) VALUES
(11, 'NoDOB', 'Entered', 'NoDOB@gmail.com', '0000-00-00', '#ffff80'),
(12, 'NoColor', 'Entered', 'NoColor@gmail.com', '1920-01-01', '#000000'),
(15, 'Clark', 'Kent', 'superman@yahoo.com', '1950-06-18', '#ff0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Testing`
--
ALTER TABLE `Testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Testing`
--
ALTER TABLE `Testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
