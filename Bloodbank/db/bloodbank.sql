-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 08:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `name` varchar(20) NOT NULL,
  `num` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `moblie` varchar(10) NOT NULL,
  `bgroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`name`, `num`, `address`, `gender`, `year`, `section`, `email`, `dob`, `moblie`, `bgroup`) VALUES
('deepthi lavanya', '315126510184', 'vizag', 'F', 'third year', 'C', 'nddeepthi@gamil.com', '1997-06-01', '9703462943', 'O+'),
('murthy', '315126510198', 'vizag', 'M', 'third year', 'C', 'murthy123@gamil.com', '1997-04-15', '7854123665', 'O+'),
('prasanna', '315126510188', 'vizag', 'F', 'third year', 'C', 'leelaprasanna1998@gm', '1997-02-21', '7584545366', 'AB+'),
('suma', '3151265185', 'vizag', 'F', 'third year', 'B', 'suma@gmail.com', '1997-05-04', '9745624825', 'AB+'),
('sumathi', '3151265185', 'vizag', 'F', 'third year', 'C', 'suma@gmail.com', '1997-10-17', '9874516221', 'B+'),
('Venkatesh', '315126510209', 'vizag', 'M', 'third year', 'C', 'venkatesh@gmail.com', '1996-01-05', '9705937488', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
