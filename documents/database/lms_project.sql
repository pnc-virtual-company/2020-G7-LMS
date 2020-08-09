-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 08:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `de_id` int(11) NOT NULL,
  `de_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`de_id`, `de_name`) VALUES
(13, 'Training and education team'),
(14, 'External relation team'),
(17, 'Admin and finance team'),
(18, 'Selection team');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `po_id` int(11) NOT NULL,
  `po_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`po_id`, `po_name`) VALUES
(8, 'WEP Trainer                    '),
(10, 'IT Admis                        '),
(11, 'WEP Coordinator                   ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `department_id` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `profile`, `start_date`, `department_id`, `position_id`) VALUES
(84, 'jack', 'Thomas', 'jackthomas@gmail.com', '1234567890', 'EMPLOYEE', 'lee-jong-suk.jpg', '2020-07-30', '13', '11'),
(85, 'Ronan', 'Ogor', 'ronanogor@gmail.com', '1234567890', 'HR OFFICER', 'XbzDnf.jpg', '2020-07-31', '8', '14'),
(86, 'JongSuk', 'Jee', 'jongsukjee@gmail.com', '4567895678', 'ADMIN', 'Cover-YNK-entertainment-LJS.jpg', '2020-07-30', '7', '15'),
(87, 'Mallory', 'Obrien', 'rywujykov@mailinator.com', 'Pa$$w0rd!', 'HR', '1596003362_de4d5f173433390a86c0', '1979-09-29', '13', '10');

-- --------------------------------------------------------

--
-- Table structure for table `your_leave`
--

CREATE TABLE `your_leave` (
  `le_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `exactime_start` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `end_date` date NOT NULL,
  `exactime_end` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `your_leave`
--

INSERT INTO `your_leave` (`le_id`, `start_date`, `exactime_start`, `end_date`, `exactime_end`, `duration`, `leave_type`, `comment`, `user_id`) VALUES
(70, '0000-00-00', 'select exactime', '0000-00-00', 'select exactime', '', 'Paid leave', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `your_leave`
--
ALTER TABLE `your_leave`
  ADD PRIMARY KEY (`le_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `de_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `your_leave`
--
ALTER TABLE `your_leave`
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
