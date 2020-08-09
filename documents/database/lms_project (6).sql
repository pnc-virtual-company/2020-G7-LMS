-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 07:22 PM
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
(17, 'Admin and finance team');

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
  `position_id` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `profile`, `start_date`, `department_id`, `position_id`, `manager`) VALUES
(94, 'helen', 'martinot', 'helen.martinot@gmail.com', '$2y$10$lZxq8PvrOcdhdyTLf2AKOeY.OQjZGR8meuim7mWC.ZyzWroQMlEg2', 'Admin', '1596881244_73cbfc14bf6cdda9a5e1', '1978-12-05', '18', '8', ''),
(96, 'sokly', 'phorn', 'sokly.phorn46@gmail.com', '$2y$10$iH.qBgJtDTW4v60e38VjNuwZR/48MGGg6ECIohFLfxY28ERSMLjl6', 'Manager', '1596906769_2a33285349924f9e2e10', '2020-08-10', '17', '10', 'senghor'),
(97, 'sochi', 'cheat', 'sochi.cheat@gmail.com', '$2y$10$3dhX9gGm64vKoOh9z3fseuU1JBACRq.qsGuQThaKAQhz7ZYuslOR.', 'Employee', '1596906839_ce4e573d20fce8945712', '2020-08-21', '14', '8', 'sokly'),
(98, 'nysar', 'yam', 'nysar.yam@gmail.com', '$2y$10$3C8Kvg.t074UNUh9IykYz.tpsSbF1xK4Sb0bI1/0DbaldUZ7rckD6', 'HR', '1596906890_522117665dc06d4f4f8d', '2020-08-10', '13', '11', 'senghor'),
(99, 'senghor', 'khen', 'senghor.khen@gmail.com', '$2y$10$KM4o9/22xgZEZ.iNZsdas.0yNq/HlZekk6cQ4zC/ZE0mvM/6J2Ghq', 'Manager', '1596906958_d198b8838574ddb417d6', '2020-08-12', '14', '10', 'senghor'),
(100, 'chanthoeurn', 'thon', 'chanthoeurn@gmail.com', '$2y$10$YokBdhZYuIH7y0nUGeqs2utTMlWARCcmChaWMJepOeG..ay7iu7KK', 'Employee', '1596906992_3e04f4aac9d44d0387ae', '2020-08-14', '14', '8', 'senghor');

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
(119, '1979-09-23', '2', '1995-03-21', '2', '5658.5 days', 'Maternity leave', 'Necessitatibus dolor', 91),
(121, '1985-12-06', '2', '1999-10-30', '2', '5076.5 days', 'Paid leave', 'Doloribus nostrud re', 92),
(122, '1979-10-11', '2', '2018-01-22', '2', '13983.5 days', 'Wedding leave', 'Enim corrupti id ma', 92),
(123, '1988-12-03', '2', '2000-05-12', '2', '4178.5 days', 'Wedding leave', 'Iure sit aspernatur', 95),
(124, '1977-03-09', '2', '2010-10-02', '2', '12260.5 days', 'Paid leave', 'Cupidatat veritatis ', 95),
(125, '1990-10-30', '2', '2001-09-23', '2', '3981.5 days', 'Paid leave', 'Doloribus reprehende', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `your_leave`
--
ALTER TABLE `your_leave`
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
usersusersusersusersyour_leave