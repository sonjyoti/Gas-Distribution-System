-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 05:54 PM
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
-- Database: `gas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pwd`) VALUES
(100001, 'jefa'),
(100002, 'hoof'),
(100003, 'hovding'),
(100004, 'honcho'),
(100005, 'capa');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(10) UNSIGNED NOT NULL,
  `dis_id` int(10) UNSIGNED DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `phn_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `dis_id`, `pwd`, `name`, `address`, `city`, `pin`, `phn_no`, `email`, `reg_date`, `status`) VALUES
(1001, 101, 'kuldeepx', 'Kuldeep Sarma', 'Akhra, Nalbari', 'Guwahati', 781245, '9854689870', 'xarman@hotmail.com', '2023-11-18', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(10) UNSIGNED NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `phn_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `pwd`, `name`, `address`, `city`, `pin`, `phn_no`, `email`, `status`) VALUES
(101, 'sonjyotix', 'Sonjyoti Rabha', 'Near Arunodoi Hospital\r\nJarapara, Boko', 'Guwahati', 781123, '6900830239', 'xonzyoti@hotmail.com', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `dis_id` int(10) UNSIGNED NOT NULL,
  `cus_id` int(10) UNSIGNED NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` time NOT NULL,
  `type` enum('Feedback','Complaint') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_title` varchar(225) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`dis_id`, `cus_id`, `date`, `time`, `type`, `subject`, `subject_title`, `description`) VALUES
(101, 1001, '2023-01-29', '18:01:14', 'Feedback', 'Delivery was too good. Thanks', '', 'The delivery guy was very well-mannered and delivered the product in a perfect  condition. I offered  him a tip and he declined. What a guy!'),
(101, 1001, '2024-01-05', '09:49:11', 'Feedback', 'Delivery related', 'Late Delivery', 'Last time the delivery was too late. It won\'t be entertained next time.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `dis_id` int(10) UNSIGNED NOT NULL,
  `cus_id` int(10) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `status` enum('Ordered','Delivered','Running') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `dis_id`, `cus_id`, `date`, `time`, `amount`, `status`) VALUES
(10046, 101, 1001, '2024-01-05', '08:52:19', 975.00, 'Ordered'),
(10047, 101, 1001, '2024-01-05', '08:52:27', 975.00, 'Ordered'),
(10048, 101, 1001, '2024-01-05', '08:53:01', 975.00, 'Ordered'),
(10049, 101, 1001, '2024-01-05', '08:55:17', 975.00, 'Ordered'),
(10050, 101, 1001, '2024-01-05', '08:55:32', 975.00, 'Ordered'),
(10051, 101, 1001, '2024-01-05', '09:11:47', 975.00, 'Ordered'),
(10052, 101, 1001, '2024-01-05', '09:12:43', 975.00, 'Ordered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consumer_dis_id_foreign` (`dis_id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `feedback_dis_id_foreign` (`dis_id`),
  ADD KEY `feedback_cus_id_foreign` (`cus_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_dis_id_foreign` (`dis_id`),
  ADD KEY `order_cus_id_foreign` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100006;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10053;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consumer`
--
ALTER TABLE `consumer`
  ADD CONSTRAINT `consumer_dis_id_foreign` FOREIGN KEY (`dis_id`) REFERENCES `distributor` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `consumer` (`id`),
  ADD CONSTRAINT `feedback_dis_id_foreign` FOREIGN KEY (`dis_id`) REFERENCES `distributor` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `consumer` (`id`),
  ADD CONSTRAINT `order_dis_id_foreign` FOREIGN KEY (`dis_id`) REFERENCES `distributor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
