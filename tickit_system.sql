-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 05:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickit_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem_ticket`
--

CREATE TABLE `problem_ticket` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `problem_detail` varchar(400) NOT NULL,
  `problem_priority` varchar(100) NOT NULL,
  `problem_file` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_ticket`
--

INSERT INTO `problem_ticket` (`id`, `employee_id`, `problem_detail`, `problem_priority`, `problem_file`, `created_at`) VALUES
(1, '258963', 'nmnnmn', 'Very Urgent', 'problem_file./Application.pdf', '2022-05-29 22:04:19'),
(2, '12312121', 'bnbnbnb', 'Uesgent', 'problem_file./01 Application.pdf', '2022-05-29 22:09:01'),
(3, '12312121', '1212121', 'Not Urgent', 'problem_file./Application.pdf', '2022-05-29 22:15:22'),
(4, '12312121', 'New Problem', 'Very Urgent', 'problem_file./Afif_Hossain.jpg', '2022-05-30 17:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `employee_id`, `password`, `image`, `created_at`, `update_at`) VALUES
(80, 1, 'MD.ABDUR NUR', 'abdurnurmondol152@gmail.com', '12312121', '123456789', 'applicant_image.jpg', '2022-05-29 18:53:00', '2022-05-30 15:19:27'),
(84, 2, 'Sabbir', 'sabbir@gmail.com', '12312121', '123456789', 'sabbir (2).jpg', '2022-05-30 17:34:30', NULL),
(90, 4, 'zobbar', 'z@gmail.com', '12312121', '123456789', 'download.jpg', '2022-07-01 16:05:01', NULL),
(91, 3, 'Fabliha Apu', 'f@gmail.com', '122121', '123456789', 'download.jpg', '2022-07-01 16:42:25', NULL),
(93, 3, 'hhhhh', 'hhh', '12312121', '123456789', 'SUPPORT.png', '2022-07-01 16:56:18', NULL),
(94, 2, 'Employee', 'emp_1@supportticket.com', '12312121', '123456789', 'employee.jpg', '2022-07-01 16:58:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem_ticket`
--
ALTER TABLE `problem_ticket`
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
-- AUTO_INCREMENT for table `problem_ticket`
--
ALTER TABLE `problem_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
