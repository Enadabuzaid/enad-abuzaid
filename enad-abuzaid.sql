-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enad-abuzaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `experience_start` varchar(50) NOT NULL,
  `experience_end` varchar(50) NOT NULL,
  `experience_title` varchar(200) NOT NULL,
  `experience_company` varchar(100) NOT NULL,
  `experience_des` varchar(300) NOT NULL,
  `experience_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_start`, `experience_end`, `experience_title`, `experience_company`, `experience_des`, `experience_status`) VALUES
(1, '1-09-2020  ', '15-05-2021', 'full stack developer', 'smart station', 'it was with friends I learned a lot of skills like how to solve and research the problem, I made websites in WordPress , Learned backend with larval and improve myself more and more, and learned API.', 1),
(2, 'Jan,2020 ', 'March,2020', 'Teller And Data Entry', 'Al-fasel', 'it was short time because of corona but I learned some skills', 1),
(3, 'e', '3', 'teest', 're', 'ere', 1),
(4, 're', 're', 'e', 're', 're', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_status`) VALUES
(1, 'home', 1),
(2, 'about', 1),
(3, 'services', 1),
(4, 'portfolio', 1),
(5, 'testimonial', 0),
(6, 'contact', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` varchar(200) NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `service_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_desc`, `service_icon`, `service_status`) VALUES
(1, 'Responsive design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fas fa-mobile-alt', 1),
(2, 'web design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fas fa-laptop-code', 1),
(3, 'clean code', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fas fa-code', 1),
(4, 'seo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fas fa-search', 1),
(5, 'Great support', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fas fa-bullhorn', 1),
(6, 'WordPress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'fab fa-wordpress-simple', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `skill_progress` int(11) NOT NULL,
  `skill_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`, `skill_progress`, `skill_status`) VALUES
(1, 'html', 95, 1),
(2, 'css', 90, 1),
(3, 'javascript', 65, 1),
(4, 'php', 80, 1),
(5, 'laravel', 75, 1),
(6, 'wordpress', 80, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
