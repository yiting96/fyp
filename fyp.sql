-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 01:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `examinationresult`
--

CREATE TABLE `examinationresult` (
  `id` int(11) NOT NULL,
  `coursecode` varchar(8) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `section` int(2) NOT NULL,
  `credit` int(1) NOT NULL,
  `courseworkmark` varchar(5) NOT NULL,
  `grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `matricnumber` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icnumber` varchar(14) NOT NULL,
  `registrationstatus` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(296) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `dateofenroll` date NOT NULL,
  `gpa` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `matricnumber`, `name`, `icnumber`, `registrationstatus`, `dob`, `gender`, `religion`, `nationality`, `phonenumber`, `email`, `address`, `faculty`, `programme`, `dateofenroll`, `gpa`, `created`, `modified`) VALUES
(12, 'Ai160210', 'Chng Shu wen', '961119085332', 'active', '2019-03-07', 'Male', 'buddha', 'malaysian', '0165345250', 'shuwenchng@gmail.com', '52, persiaran tasik timur 1, taman ria bercham, 31400 Ipoh, Perak', 'FSKTM', 'BIP', '2019-03-29', 4, '2019-03-19 16:26:06', '2019-03-19 16:26:06'),
(13, 'Ai160202', 'Lee Hoong Yaen', '961119085332', 'active', '2019-03-19', 'Male', 'buddha', 'malaysian', '0165345250', 'hoongyaen@icloud.com', '52, persiaran tasik timur 1, taman ria bercham, 31400 Ipoh, Perak', 'FSKTM', 'BIW', '2019-03-26', 3, '2019-03-19 16:28:15', '2019-03-19 16:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rfidtag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rfidtag`) VALUES
(1, 'admin', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff', '0012174276');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examinationresult`
--
ALTER TABLE `examinationresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examinationresult`
--
ALTER TABLE `examinationresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
