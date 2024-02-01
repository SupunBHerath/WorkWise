-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 05:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id`, `userid`, `jobid`) VALUES
(1, 7, 0),
(2, 7, 1),
(3, 7, 3),
(4, 8, 1),
(5, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `bmjob`
--

CREATE TABLE `bmjob` (
  `id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `jobId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmjob`
--

INSERT INTO `bmjob` (`id`, `userId`, `jobId`) VALUES
(8, 0, 0),
(19, 5, 1),
(26, 1, 1),
(27, 1, 2),
(30, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jobtable`
--

CREATE TABLE `jobtable` (
  `jobId` int(10) NOT NULL,
  `userId` int(11) NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(20) NOT NULL,
  `jobType` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  `location` varchar(32) NOT NULL,
  `price` int(10) NOT NULL,
  `exitDay` date NOT NULL,
  `responsibilities` varchar(120) NOT NULL,
  `requirements` varchar(200) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobtable`
--

INSERT INTO `jobtable` (`jobId`, `userId`, `category`, `title`, `jobType`, `company`, `location`, `price`, `exitDay`, `responsibilities`, `requirements`, `payment`) VALUES
(1, 0, 'Programming', 'Software Developer', 'Full Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(3, 0, 'Programming', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(4, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(5, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(6, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(7, 0, 'Programming', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(8, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 0),
(9, 0, 'Graphics', 'Software Developer', 'Full Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving ', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills\r\nBachelor\'s degree in Computer Science or related field Proven experience', 0),
(10, 0, 'Graphics', 'abc', 'Part-time', 'abc', 'cc', 56, '0000-00-00', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving ', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(11, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving ', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(12, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(13, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(14, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(15, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(16, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(17, 0, 'Graphics', 'Software Developer', 'Full Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(18, 0, 'Graphics', 'abc', 'Part-time', 'abc', 'cc', 56, '0000-00-00', 'cc', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(19, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(20, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 0, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(21, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(22, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(23, 0, 'Graphics', 'Software Developer', 'Part Time', 'XYZ Designs', 'Another City, Country', 600, '2024-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Bachelor\'s degree in Computer Science or related field Proven experience in software development Strong problem-solving skills', 0),
(26, 0, 'Graphics', 'w', '', 'w', 'w', 7, '0000-00-00', 'w', '', 0),
(27, 0, 'Graphics', 'w', '', 'w', 'w', 7, '0000-00-00', 'w', '', 0),
(28, 0, 'Graphics', 'w', 'Full Time', 'w', 'w', 7, '2024-01-27', 'w', '', 0),
(29, 0, 'Graphics', 'w', 'Full Time', 'w', 'w', 7, '2024-01-27', 'w', 'w', 0),
(30, 0, 'Graphics', 'w', 'Full Time', 'w', 'w', 7, '2024-01-27', 'w', 'w', 0),
(31, 0, 'Graphics', 'q', 'Full Time', 'q', 'q', 4, '2024-01-19', 'q', 'q', 0),
(32, 0, 'Graphics', 'q', 'Full Time', 'q', 'q', 4, '2024-01-19', 'q', 'q', 0),
(33, 0, 'Graphics', 'q', 'Full Time', 'q', 'q', 4, '2024-01-19', 'q', 'q', 0),
(37, 1, 'Graphics', '5', 'Full Time', '2', '1', 1, '2024-01-19', '2', '2', 0),
(39, 0, 'Graphics', 'a', 'Full Time', 'a', 'a', 4, '2024-01-20', '4', '5', 0),
(40, 0, 'Graphics', 'v', 'Full Time', '4', 'w', 6, '2024-01-12', '3', '3', 0),
(41, 8, 'Business', 'v', 'Full Time', 's', 's', 45, '2024-01-26', 's', 's', 0),
(42, 9, 'Programming', 'software engineer', 'Full Time', 'virtusa', 'colombo 10', 10000, '2024-02-29', 'develop the backend', 'Bsc degree', 0);

-- --------------------------------------------------------

--
-- Table structure for table `unapproved_job`
--

CREATE TABLE `unapproved_job` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(64) NOT NULL,
  `job_type` varchar(10) NOT NULL,
  `company` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `price` int(5) NOT NULL,
  `exit_day` date NOT NULL,
  `responsibilities` text NOT NULL,
  `requirement` text NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fName` varchar(11) NOT NULL,
  `lName` varchar(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `question` varchar(32) NOT NULL,
  `answer` varchar(64) NOT NULL,
  `favourite_field` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `image` varchar(50) NOT NULL DEFAULT 'user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fName`, `lName`, `email`, `password`, `question`, `answer`, `favourite_field`, `role`, `image`) VALUES
(1, 'Supun', 'Bandara', 'supunbherath@gmail.com', '$2y$10$LzzjwmmyZMhv0TizTPN8me4ClZrnqMX01qRFFrBurYJbac9eUkY4G', 'What is your favourite color', '$2y$10$BaxzMdUNaGS.XO9e1nZAsOTTh6c1Kyghu9cjlUKbgHwl/QJUSEHUW', '', 'admin', 'user.jpg'),
(6, 'Iresha', 'Udayangani', 'i@gmail.com', '$2y$10$TTUkSH1P./E87TdHBJw98eRrvtAPUY3wi94bqEyYudRrMpdH84sVK', 'What is your favourite color', '$2y$10$BaxzMdUNaGS.XO9e1nZAsOTTh6c1Kyghu9cjlUKbgHwl/QJUSEHUW', '', 'user', 'user.jpg'),
(9, 'sithila', 'krishan', 'sithilakrishan99@gmail.com', '$2y$10$msCYkqQy6tyNWOIF4wpO6.oqG5xRsh/I9ugGNIIB29IlLJl0aUAe.', 'What is your favourite color', 'green', '', 'user', '4.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmjob`
--
ALTER TABLE `bmjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtable`
--
ALTER TABLE `jobtable`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `unapproved_job`
--
ALTER TABLE `unapproved_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bmjob`
--
ALTER TABLE `bmjob`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jobtable`
--
ALTER TABLE `jobtable`
  MODIFY `jobId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `unapproved_job`
--
ALTER TABLE `unapproved_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
