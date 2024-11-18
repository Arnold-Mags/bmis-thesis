-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 07:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_db6`
--

-- --------------------------------------------------------

--
-- Table structure for table `brgy_detail`
--

CREATE TABLE `brgy_detail` (
  `id` int(11) NOT NULL,
  `brgy_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `brgy_captain` varchar(255) NOT NULL,
  `pic_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_detail`
--

INSERT INTO `brgy_detail` (`id`, `brgy_name`, `address`, `mobile_number`, `brgy_captain`, `pic_logo`) VALUES
(1, 'Barangay Lucero', 'Bolinao, Pangasinan', '09123456789', 'DOMINGO P. DEL FIERRO JR.', 'brgy-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_official`
--

CREATE TABLE `brgy_official` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `committee` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgy_official`
--

INSERT INTO `brgy_official` (`id`, `fullname`, `committee`, `position`, `contact_number`) VALUES
(1, 'Domingo Del Fierrro Jr.', '', 'Barangay Captain', '09464260007'),
(2, 'Shiella Cabuburac', 'Committee on Education and Healthcare', 'Barangay Member 1', '09123345656'),
(3, 'Reymundo Calizar Sr.', 'Committee on Sport and Recreation', 'Barangay Member 2', '09464260001'),
(4, 'Morano Neil', 'Committee on Environment', 'Barangay Member 3', ''),
(5, 'John Wick Castro', 'Committee on Agriculture and Fishery', 'Barangay Member 4', '09464260007'),
(6, 'fullname', 'Committee on Environment', 'Barangay Member 5', ''),
(7, 'fullname', 'Committee on Agriculture and Fishery', 'Barangay Member 6', ''),
(8, 'fullname', 'Committee on Women and Children Protection', 'Barangay Member 7', ''),
(9, '', '', 'SK Chairperson', ''),
(10, '', '', 'Barangay Secretary', ''),
(11, '', '', 'Barangay Treasurer', '');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `permit_to` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clearance_id`
--

CREATE TABLE `clearance_id` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `id_pic` varchar(255) NOT NULL,
  `permit_to` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `photo`) VALUES
(1, 'content0001.png');

-- --------------------------------------------------------

--
-- Table structure for table `indigency`
--

CREATE TABLE `indigency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indigency`
--

INSERT INTO `indigency` (`id`, `user_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `contact_number`, `purpose`, `control`) VALUES
(17, 0, 'Gomez', 'Grace', 'Reyes', '', '09464260001', 'BUSINESS3', '2'),
(19, 0, 'Duraman', 'Christian', 'Valdez', '', '09123345656', 'BUSINESS', '3'),
(27, 0, 'Gomez', 'Jane', 'Calizar', '', '09464260002', 'SCHOLARSHIP', '1');

-- --------------------------------------------------------

--
-- Table structure for table `permit`
--

CREATE TABLE `permit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `oper_lastname` varchar(255) NOT NULL,
  `oper_firstname` varchar(255) NOT NULL,
  `oper_middlename` varchar(255) NOT NULL,
  `oper_suffix` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_type` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residency`
--

CREATE TABLE `residency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `father_lastname` varchar(255) NOT NULL,
  `father_firstname` varchar(255) NOT NULL,
  `father_middlename` varchar(255) NOT NULL,
  `father_suffix` varchar(255) NOT NULL,
  `mother_maidenname` varchar(255) NOT NULL,
  `mother_firstname` varchar(255) NOT NULL,
  `mother_middlename` varchar(255) NOT NULL,
  `mother_suffix` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `pwd_id` varchar(255) NOT NULL,
  `family_monthly_income` int(11) NOT NULL,
  `indigent` varchar(255) NOT NULL,
  `solo_parent` varchar(255) NOT NULL,
  `solo_parent_id` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `pantawid_pamilya` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `to_contact_fullname` varchar(255) NOT NULL,
  `to_contact_relationship` varchar(255) NOT NULL,
  `to_contact_number` varchar(255) NOT NULL,
  `to_contact_address` varchar(255) NOT NULL,
  `national_id_no` varchar(255) NOT NULL,
  `philhealth_no` varchar(255) NOT NULL,
  `sss_no` varchar(255) NOT NULL,
  `pagibig_no` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `voter_id_no` varchar(255) NOT NULL,
  `covid_status` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL,
  `date_death` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `account_type` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sup_document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `suffix`, `password`, `date_created`, `account_type`, `profile_pic`, `status`, `sup_document`) VALUES
(0, 'admin', '', '', '', '', '$2y$10$omvn7f1y3EHTTs0.1Z4VPe.eM8DwMQUQo.sr3IiJMm603/pRaClD6', '0000-00-00', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `walk_in`
--

CREATE TABLE `walk_in` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_type` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brgy_detail`
--
ALTER TABLE `brgy_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_official`
--
ALTER TABLE `brgy_official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `clearance_id`
--
ALTER TABLE `clearance_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indigency`
--
ALTER TABLE `indigency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indigency_ibfk_1` (`user_id`);

--
-- Indexes for table `permit`
--
ALTER TABLE `permit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `residency`
--
ALTER TABLE `residency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walk_in`
--
ALTER TABLE `walk_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brgy_detail`
--
ALTER TABLE `brgy_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brgy_official`
--
ALTER TABLE `brgy_official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clearance_id`
--
ALTER TABLE `clearance_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indigency`
--
ALTER TABLE `indigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permit`
--
ALTER TABLE `permit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `residency`
--
ALTER TABLE `residency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `walk_in`
--
ALTER TABLE `walk_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `clearance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clearance_id`
--
ALTER TABLE `clearance_id`
  ADD CONSTRAINT `clearance_id_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `indigency`
--
ALTER TABLE `indigency`
  ADD CONSTRAINT `indigency_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permit`
--
ALTER TABLE `permit`
  ADD CONSTRAINT `permit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residency`
--
ALTER TABLE `residency`
  ADD CONSTRAINT `residency_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `walk_in`
--
ALTER TABLE `walk_in`
  ADD CONSTRAINT `walk_in_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
