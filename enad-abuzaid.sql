-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2022 at 04:51 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

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
-- Table structure for table `about_section_paragraphs`
--

CREATE TABLE `about_section_paragraphs` (
  `paragraph_id` int NOT NULL,
  `paragraph_body` text NOT NULL,
  `paragraph_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_section_paragraphs`
--

INSERT INTO `about_section_paragraphs` (`paragraph_id`, `paragraph_body`, `paragraph_status`) VALUES
(11, 'Hi! My name is Enad. I am a web developer 23 from Amman I have bachelor degree in Business Information Technology from the University of Jordan\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int NOT NULL,
  `experience_start` varchar(50) NOT NULL,
  `experience_end` varchar(50) NOT NULL,
  `experience_title` varchar(200) NOT NULL,
  `experience_company` varchar(100) NOT NULL,
  `experience_des` varchar(300) NOT NULL,
  `experience_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_start`, `experience_end`, `experience_title`, `experience_company`, `experience_des`, `experience_status`) VALUES
(1, '1-09-2020  ', '15-05-2021', 'full stack developer', 'smart station', 'it was with friends I learned a lot of skills like how to solve and research the problem, I made websites in WordPress , Learned backend with larval and improve myself more and more, and learned API.', 1),
(2, 'Jan,2020 ', 'March,2020', 'Teller And Data Entry', 'Al-fasel', 'it was short time because of corona but I learned some skills', 1),
(3, 'e', '3', 'teest', 're', 'ere', 1),
(4, 're', 're', 'e', 're', 're', 1),
(5, '', '', 'ee', 'qqqqqqqqq', 'wwwwwwwwwwwww', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `project_cover` varchar(200) NOT NULL,
  `project_type` int NOT NULL,
  `project_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_cover`, `project_type`, `project_status`) VALUES
(1, 'test', 'wordpress/1/1.png', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_details_id` int NOT NULL,
  `project_id` int NOT NULL,
  `project_brief` text NOT NULL,
  `date` date NOT NULL,
  `client` varchar(100) NOT NULL,
  `tools` varchar(300) NOT NULL,
  `demo` text NOT NULL,
  `code` text,
  `screenshot_link` text,
  `project_details_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_details_id`, `project_id`, `project_brief`, `date`, `client`, `tools`, `demo`, `code`, `screenshot_link`, `project_details_status`) VALUES
(1, 1, 'ffsdd', '2021-12-08', 'test client', 'test', 'test', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_photos`
--

CREATE TABLE `project_photos` (
  `projoct_photo_id` int NOT NULL,
  `project_id` int NOT NULL,
  `photo` text NOT NULL,
  `photo_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_photos`
--

INSERT INTO `project_photos` (`projoct_photo_id`, `project_id`, `photo`, `photo_status`) VALUES
(1, 1, 'wordpress/1/2.png', 1),
(2, 1, 'wordpress/1/3.png', 1),
(3, 1, 'wordpress/1/4.png\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `project_type_id` int NOT NULL,
  `project_type_name` varchar(200) NOT NULL,
  `project_target` varchar(200) NOT NULL,
  `project_type_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`project_type_id`, `project_type_name`, `project_target`, `project_type_status`) VALUES
(1, 'web application', 'web-application', 1),
(2, 'web design', 'web-design', 1),
(3, 'WordPress', 'wordpress', 1),
(4, 'UI/UX', 'design', 1),
(5, 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` varchar(200) NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `service_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `skill_id` int NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `skill_progress` int NOT NULL,
  `skill_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` int NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_phone`, `user_status`) VALUES
(25, 'e', 'e', 'e', 1, '000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section_paragraphs`
--
ALTER TABLE `about_section_paragraphs`
  ADD PRIMARY KEY (`paragraph_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_details_id`);

--
-- Indexes for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD PRIMARY KEY (`projoct_photo_id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`project_type_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section_paragraphs`
--
ALTER TABLE `about_section_paragraphs`
  MODIFY `paragraph_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_details_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_photos`
--
ALTER TABLE `project_photos`
  MODIFY `projoct_photo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `project_type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
