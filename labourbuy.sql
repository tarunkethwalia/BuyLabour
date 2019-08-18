-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 01:23 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labourbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `date_joined` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `username`, `password`, `fullname`, `phone_no`, `email`, `state`, `city`, `date_joined`) VALUES
(1, 'mdgamer', '1234', 'Mohd Saqulain', '7838938738', 'mohammadsaqulain18@gmail.com', 'Haryana', 'Gurgaon', '2019/08/17'),
(2, 'tarun', NULL, 'Tarun', '9999999999', 'tarun@gmail.com', 'Haryana', 'Gurgaon', '2019/08/17'),
(7, 'wwwww', NULL, 'tarun1', '999999977', 'sasas@gmail.com', 'zassaas', 'sasas', '2019/08/17'),
(8, 'sasas', NULL, 'tarun1', '9999999999', 'sasasa', 'sasa', 'asasa', '2019/08/17');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `labour_category_name` varchar(20) DEFAULT NULL,
  `labour_required` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date_inquired` varchar(20) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `urgent` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `company_name`, `username`, `phone_no`, `labour_category_name`, `labour_required`, `location`, `date_inquired`, `description`, `urgent`) VALUES
(1, 'Design Plus ', 'random_user_65242', '7838938738', 'Plumbing', '21', '1234mkfmiks', '2019/08/18', 'sasa', 'yes'),
(2, 'Design Plus ', 'random_user_65242', '7838938738', 'Plumbing', '14', 'sasasa', '2019/08/18', 'sasassaa', 'yes'),
(3, 'Design Plus ', 'random_user_65242', '7838938738', 'Plumbing', '23', 'sasa', '2019/08/18 16:27:21', 'xsaasasa', 'yes'),
(4, 'Design Plus ', 'random_user_65242', '7838938738', 'Plumbing', '13', '1234mkfmiks', '2019/08/18 16:29:38', 'ssaasasa', 'yes'),
(5, 'Design Plus ', 'random_user_65242', '7838938738', 'Plumbing', '21', 'sasa', '2019/08/18 16:31:30', 'sasaas', 'yes'),
(6, 'Design Plus ', 'random_user_27938', '7838938738', 'Plumbing', '31', '1234mkfmiks', '2019/08/18 16:34:09', 'saasasa', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `service_name` varchar(40) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `category_id`, `service_name`, `description`, `image`) VALUES
(1, 3, 'Sweeper', NULL, NULL),
(2, 1, 'Household', NULL, NULL),
(3, 1, 'Building', NULL, NULL),
(4, 2, 'Plumbing', NULL, NULL),
(6, 2, 'Beautician', NULL, NULL),
(7, 2, 'Electrician', NULL, NULL),
(8, 2, 'Wedding Photoshoot', NULL, NULL),
(9, 2, 'Wedding Planner', NULL, NULL),
(10, 2, 'Dietician', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `category_id` int(11) NOT NULL,
  `service_category_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`category_id`, `service_category_name`) VALUES
(1, 'Skilled Labour'),
(2, 'Other Services'),
(3, 'Unskilled Labour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
