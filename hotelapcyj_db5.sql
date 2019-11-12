-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: sql24.cpt1.host-h.net
-- Generation Time: Nov 12, 2019 at 05:53 AM
-- Server version: 10.1.41-MariaDB-1~jessie
-- PHP Version: 5.6.40-0+deb8u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelapcyj_db5`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `date`) VALUES
(26, 'John', 'Peter', 'p@yahoo.cpm', '2147483647', '2019-11-10 10:01:47'),
(27, 'Machai', 'Bulawayo', 'machaibulawayo@gmail.com', '0647331047', '2019-11-10 11:49:07'),
(29, 'Harry', 'Toms', 'harytoms@gmail.com', '0747067087', '2019-11-11 05:59:08'),
(30, 'Dominique', 'Kabwe', 'dominiquekabwe@gmail.com', '09484759932', '2019-11-11 05:59:51'),
(31, 'Brendan', 'Meyer', 'BrendanMeyer@b.com', '048475759560', '2019-11-11 11:15:34'),
(32, 'Rosario', 'Joao', 'RosarioJoao', 'rosariojoao@gmail.com', '2019-11-11 12:21:48'),
(33, 'Majory', 'Jane', 'majoryjane@gmail.com', '0983277633', '2019-11-11 14:35:07'),
(34, 'John', 'Button', 'johnbutton@gmail.com', '0774443566', '2019-11-11 14:36:41'),
(35, 'OT', 'GENESIS', 'OTGENESIS@GMAIL.COM', 'otgenesis@gmail.com', '2019-11-11 14:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
