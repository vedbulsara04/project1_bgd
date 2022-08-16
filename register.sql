-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 02:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` bigint(15) NOT NULL,
  `password` varchar(16) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `pnumber`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Vatsh Chedda', 'vatshchedda3@gmail.com', 5745985205, 'vatsh@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(4, 'ved bulsara', 'vedbulsara@gmail.com', 4525326523, 'ved@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(6, 'Omkar kambre', 'okambre@gmail.com', 4789551304, 'okambre', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(8, 'Yash Jethwa', 'yashjetwa@gmail.com', 5469875000, 'yashjethwa@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(13, 'Alex Hales', 'alex@gmail.com', 5469775200, 'alex@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(14, 'Alex Haless', 'alexhales@gmail.com', 4569872018, 'alex@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(15, 'Tom Hardy', 'tomhardy@gmail.com', 5745985206, 'tom@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(17, 'chris evans', 'chrisevan@gmail.com', 7418529630, 'chris@123', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(18, 'chris hemsworth', 'chrishemsworth@gmail.com', 4152360789, 'hemsworth', '2022-08-05 12:16:32.897293', '2022-08-05 12:16:32.897293'),
(19, 'Bhavin Divecha ', 'bhavin@gmail.com', 2365487200, 'bhavin@123', '2022-08-15 09:12:44.403615', '2022-08-15 09:12:44.403615'),
(21, 'Dhruv Shah', 'dhruv@gmail.com', 8975641230, 'dhruv@123', '2022-08-15 09:15:50.122364', '2022-08-15 09:15:50.122364');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
