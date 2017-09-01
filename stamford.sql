-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 07:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stamford`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `course_code` varchar(33) NOT NULL,
  `course_title` varchar(33) NOT NULL,
  `course_teacher` varchar(33) NOT NULL,
  `ques1` int(11) NOT NULL,
  `ques2` int(11) NOT NULL,
  `ques3` int(11) NOT NULL,
  `ques4` int(11) NOT NULL,
  `ques5` int(11) NOT NULL,
  `ques6` int(11) NOT NULL,
  `ques7` int(11) NOT NULL,
  `ques8` int(11) NOT NULL,
  `ques9` int(11) NOT NULL,
  `ques10` int(11) NOT NULL,
  `ques11` varchar(444) NOT NULL,
  `ques12` varchar(444) NOT NULL,
  `final_score` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `course_code`, `course_title`, `course_teacher`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `final_score`) VALUES
(11, '555', 'Bangladesh studies', 'Mahfida Amjad Dipa', 3, 4, 4, 5, 3, 5, 0, 3, 2, 5, 'only four', 'one of the foul teacher ever', 'Fair 20 29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `student_id`, `password`) VALUES
(2, 5406754, 'rokon'),
(3, 54, 'rokon'),
(4, 55, 'anup');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(22) NOT NULL,
  `middlename` varchar(11) NOT NULL,
  `lastname` varchar(22) NOT NULL,
  `password` varchar(33) NOT NULL,
  `confirmpassword` varchar(33) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(44) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `middlename`, `lastname`, `password`, `confirmpassword`, `id`, `email`, `phone`, `gender`) VALUES
('dsfsd', 'sf', 'sdfs', '12', '12', 22, 'fdfdsfd', 4345345, 'female'),
('rtew', 'ert', 'ert', '12', '12', 33, 'fdsaf', 345345, 'male'),
('rokon', 'khan', 'joe', '1234', '1234', 54, 'rocko2494@gmail.com', 1762775200, 'point'),
('anup', 'roy', 'padura', '12', '12', 55, 'anup54', 114355456, 'female'),
('daniel', 'rokon', 'khan', '123', '123', 5406754, 'rocko2494@gmail.com', 15646543, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
