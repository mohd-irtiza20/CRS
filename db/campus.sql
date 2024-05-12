-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2024 at 07:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sahilpreet', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(50) DEFAULT NULL,
  `job_id` bigint(50) DEFAULT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`, `applied_on`) VALUES
(1, 4, 1, '2024-05-01 09:33:19'),
(2, 5, 2, '2024-05-03 07:23:58'),
(3, 6, 1, '2024-05-03 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Accounting / Finance'),
(2, 'Information Technology'),
(3, 'Healthcare / Pharma'),
(4, 'Manufacturing');

-- --------------------------------------------------------

--
-- Table structure for table `company_login`
--

CREATE TABLE `company_login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `about` varchar(3000) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company_login`
--

INSERT INTO `company_login` (`id`, `name`, `email`, `password`, `phone`, `about`, `status`) VALUES
(3, 'Google', 'google@gmail.com', '1234', '9000000000', 'Google is an American multinational and technology company focusing on  search engine technology, cloud computing, computer software, e-commerce, consumer electronics, and artificial intelligence. It has been referred to as the most powerful company in the world.    ', 'Confirm'),
(4, 'Microsoft', 'microsoft@gmail.com', '1234', '8000000000', 'Microsoft is an American multinational and technology company headquartered in Washington. Microsoft\'s best-known software products are the Windows line of operating systems, the Microsoft 365 suite of productivity applications.', 'Confirm'),
(5, 'Amazon', 'amazon.com', '1234', '7000000000', 'Amazon is an American multinational technology company, engaged in e-commerce, cloud computing, online advertising, digital streaming, and artificial intelligence. It is considered one of the Big Five American technology companies.', 'Confirm'),
(6, 'Accenture', 'accenture@gmail.com', '1234', '6000000000', 'Accenture is a US multinational professional services company headquartered in Dublin, specializing in information technology services and consulting. A Fortune Global 500 company, it reported revenues of $64.1 billion in 2023. Accenture\'s current clients include 91 of the Fortune Global 100 and more than three-quarters of the Fortune Global 500.', 'Confirm'),
(10, 'Future AI', 'futureai@gmail.com', '1234', '6000000000', 'We deal with AI ', 'Confirm'),
(11, 'Graphic Weave', 'mohdirtiza20@gmail.com', '1234', '07889329197', 'it', 'Pending'),
(12, 'Graphic Weave', 'mohdirtiza20@gmail.com', '1234', '07889329197', 'it', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL,
  `company_id` bigint(30) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `industry` bigint(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `grd_marks` varchar(20) NOT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `description` varchar(20000) DEFAULT NULL,
  `posts` varchar(20) DEFAULT NULL,
  `dop` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approved` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `title`, `location`, `job_type`, `skills`, `salary`, `industry`, `role`, `qualification`, `grd_marks`, `experience`, `description`, `posts`, `dop`, `approved`) VALUES
(1, 3, 'Frontend', 'Chandigarh', 'Full Time', 'HTML, CSS, JavaScript, React, Git, GitHub', '15000', 2, 'Junior Developer', 'B.Tech', '60', 'Fresher', 'Lead the front-end development, designing and implementing user interfaces that are intuitive, responsive, and seamlessly integrate with IoT functionalities.\r\nMentor junior developers, guiding them through technical challenges and fostering a culture of innovation and excellence.\r\n', '10', '2024-04-29 18:27:54', 'Posted'),
(2, 4, 'Backend', 'Srinagar', 'Full Time', 'NodeJs, GoLang,  Git, GitHub', '15000', 2, 'Junior Developer', 'B.Tech', '60', 'Fresher', 'Backend', '3', '2024-04-30 07:17:32', 'Posted'),
(3, 3, 'Data Science Engineer', 'Srinagar', '', 'Python | SQL | Data Structure | Algorithms ', '25000', 2, 'Junior Data Science Engineer', 'B.Tech', '70', '1 yrs', 'Data mining or extracting usable data from valuable data sources\r\nUsing machine learning tools to select features, create and optimize classifiers\r\nCarrying out preprocessing of structured and unstructured data\r\nEnhancing data collection procedures to include all relevant information for developing analytic systems\r\nProcessing, cleansing, and validating the integrity of data to be used for analysis\r\nAnalyzing large amounts of information to find patterns and solutions\r\nDeveloping prediction systems and machine learning algorithms\r\nPresenting results in a clear manner\r\nPropose solutions and strategies to tackle business challenges\r\nCollaborate with Business and IT teams', '3', '2024-05-01 07:05:32', 'Pending'),
(4, 4, 'jkjj', 'mmnmn', 'Full Time', 'mdnmn', '15000', 4, ' nnm', 'ee', '70', '1 yrs', 'ewd', '3', '2024-05-03 13:09:45', 'Pending'),
(5, 4, 'jjj', 'baghwanpora bar bar shah', 'Full Time', 'mdnmn', '25000', 1, 'Junior Data Science Engineer', 'B.Tech', '60', '1 yrs', 'hhh', '10', '2024-05-04 09:25:17', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `my_details`
--

CREATE TABLE `my_details` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) DEFAULT NULL,
  `grad` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `per_grad` varchar(100) DEFAULT NULL,
  `pg` varchar(100) DEFAULT NULL,
  `un` varchar(100) DEFAULT NULL,
  `per_pg` varchar(100) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `my_details`
--

INSERT INTO `my_details` (`id`, `userid`, `grad`, `college`, `per_grad`, `pg`, `un`, `per_pg`, `other`) VALUES
(12, 39, 'BCA', 'SP COLLEGE', '69', 'MCA', 'KASHMIR UNIVERSITY', '85', '1 year diploma'),
(13, 4, 'BSC-IT', 'ISLAMIA COLLEGE', '70', 'No', 'IGNOU', '77', 'not'),
(14, 6, 'B.Tech', 'RIMT University', '80', 'MCA', 'Chitkara University', '89', 'NA'),
(15, 5, 'BCA', 'Chandigarh University', '80', 'No', 'OTHER', '77', 'NA'),
(17, 4, 'B.Tech', 'RIMT University', '80', 'No', 'RIMT University', '77', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `review` varchar(500) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `user_id`) VALUES
(1, 'Not Good', NULL, NULL),
(3, ' Awesome', '3', 4),
(4, ' Best Placement', '5', 5),
(5, ' Good', '4', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `industry` bigint(20) DEFAULT NULL,
  `experience` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `doj` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `resume` varchar(500) DEFAULT NULL,
  `profile` varchar(500) DEFAULT NULL,
  `notification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `industry`, `experience`, `address`, `about`, `password`, `doj`, `status`, `resume`, `profile`, `notification`) VALUES
(4, 'Mohd Irtiza', 'mohdirtiza20@gmail.com', '7889329197', 1, 'Fresher', 'Jammu and Kashmir', 'I am a dedicated and passionate individual.', 'irtiza', '2024-04-14 18:30:00', 1, 'resumes/19770214301715350307Resume (3).pdf', 'img/7056364451715350226myphoto.jpg', 'You can now use your account'),
(5, 'Muntazir', 'muntazir@gmail.com', '7006769862', 2, 'Fresher', 'Chandigarh', NULL, 'muntazir', '2024-04-15 10:40:31', 1, 'resumes/13937243851713177966Mohd Irtiza CV (2).pdf', 'img/13989367251714720930mun.jpg', NULL),
(6, 'Zubair', 'zubair@gmail.com', '9541826756', 1, '1', 'Delhi', 'I am good ', 'zubair', '2024-05-02 19:44:30', 1, '', 'img/10502510161714721251zub-fotor.png', NULL),
(7, 'Musaib Amin', 'musaib@gmail.com', '8082196213', 2, '5', 'Mumbai', 'A dedicated aspirant.', 'musain', '2024-05-04 09:34:53', 1, '', '', 'You can now use your account'),
(9, 'Anees', 'anees@gmail.com', '9596568850', 2, '1', 'Safapora', 'Student', 'anees', '2024-05-12 05:10:16', 1, NULL, NULL, 'You can now use your account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_login`
--
ALTER TABLE `company_login`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `industry` (`industry`);

--
-- Indexes for table `my_details`
--
ALTER TABLE `my_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industry` (`industry`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_login`
--
ALTER TABLE `company_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my_details`
--
ALTER TABLE `my_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company_login` (`id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`industry`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
