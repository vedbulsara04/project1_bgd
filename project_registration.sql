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
-- Table structure for table `project_registration`
--

CREATE TABLE `project_registration` (
  `id` int(25) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `timeline_days` varchar(15) NOT NULL,
  `status` text NOT NULL,
  `dept_id` varchar(25) NOT NULL,
  `emp_id` varchar(25) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_registration`
--

INSERT INTO `project_registration` (`id`, `project_name`, `description`, `start_date`, `timeline_days`, `status`, `dept_id`, `emp_id`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'Web Dev', 'Wb', '2022-08-05', '30 Days ', 'Work in Progress', 'IT123', 'Alex21', 'Chris Hales ', '2022-08-05 12:15:35.648778', '2022-08-05 17:45:35.648778'),
(5, 'Backend Web', 'Creating a Backend Page ', '2022-08-15', '18 Days', 'Pending ', 'IT123', 'Dhruv@123', 'Dhruv Shah', '2022-08-15 09:17:54.216560', '2022-08-15 14:47:54.216560');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_registration`
--
ALTER TABLE `project_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_registration`
--
ALTER TABLE `project_registration`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
