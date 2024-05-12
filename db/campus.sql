-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 09:33 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Placement Officer', 'bgsbu@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(50) DEFAULT NULL,
  `job_id` bigint(50) DEFAULT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `job_id`, `applied_on`) VALUES
(13, 39, 13, '2023-08-29 16:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_login`
--

INSERT INTO `company_login` (`id`, `name`, `email`, `password`, `phone`, `about`, `status`) VALUES
(9, 'code today', 'codetoday@gmail.com', 'code@123', '9596061005', 'software developement', 'Confirm'),
(12, 'LeLafe IT Solution', 'info@lelafe.com', '123456', '0194-2300299', 'Lelafe has pioneered IT services in for 30 years, consistently delivering business value with the latest technology.', 'Confirm'),
(13, ' iQuasar Software So', 'info@iquasarsolutions.com', '123456', '194 230 3030', 'iQuasar Software Solutions is an Information Technology services company established in 2004.', 'Confirm');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `title`, `location`, `job_type`, `skills`, `salary`, `industry`, `role`, `qualification`, `grd_marks`, `experience`, `description`, `posts`, `dop`, `approved`) VALUES
(13, 12, 'Java Software Engineer', 'Gurugram, Haryana, India', 'Permanent Job, Full Time', 'Experience in full stack development ranging from front-end user interfaces to backend systems', '25000', 2, 'junior developer', 'MCA, BTECH CSC.', '85', 'Fresher', 'Work on Internet scale applications, where performance, reliability, scalability and security are critical design goals – not after-thoughts.', '15', '2023-08-29 04:42:00', 'Posted');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_details`
--

INSERT INTO `my_details` (`id`, `userid`, `grad`, `college`, `per_grad`, `pg`, `un`, `per_pg`, `other`) VALUES
(12, 39, 'BCA', 'SP COLLEGE', '69', 'MCA', 'KASHMIR UNIVERSITY', '85', '1 year diploma');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `review` varchar(500) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `user_id`) VALUES
(2, ' good', '5', 39),
(3, ' overall good', '5', 40);

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
  `resume` varchar(500) NOT NULL,
  `profile` varchar(500) NOT NULL,
  `notification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `industry`, `experience`, `address`, `about`, `password`, `doj`, `status`, `resume`, `profile`, `notification`) VALUES
(39, 'tawseef bashir', 'bhatkt71@gmail.com', '9596061005', 2, 'fresher', 'ganderbal', 'Hello There! I\'m tawseef', 24 Years old, Currently pursuing MCA from BGBSU , Rajouri, J&K.', '123456', '0000-00-00 00:00:00', 1, 'resumes/14545954841693281689tawseefcv.pdf.pdf', 'img/136452739516932816635971277531690870908pp.png', NULL),
(40, 'suryansh sharma', 'suryansh88.ss@gmail.com', '7889640191', 2, '1', 'rajouri', 'web developer', '123456', '2023-08-29 04:07:58', 1, '', 'img/6237575161693282168suryansh.jpeg', NULL),
(41, 'anees akbar', 'aneesakbar12@gmail.com', '919596061005', 2, '1', 'fashipora tullamulla', 'web developer', '123456', '2023-08-29 04:25:01', 1, '', '', 'You can now use your account');

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_login`
--
ALTER TABLE `company_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `my_details`
--
ALTER TABLE `my_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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

--
-- Constraints for table `my_details`
--
ALTER TABLE `my_details`
  ADD CONSTRAINT `my_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`industry`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
