-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 02:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_for` varchar(100) NOT NULL,
  `machines` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_name`, `created_by`, `created_for`, `machines`) VALUES
(2, 'Harsha', 'hreddy710@gmail.com', 'hreddy710@gmail.com', 'harsha,Vikas,karan,varun'),
(3, 'Varun', 'hreddy710@gmail.com', 'anil@gmail.com', ''),
(4, 'anand', 'hreddy710@gmail.com', 'anil@gmail.com', ''),
(5, 'Testing1', 'hreddy710@gmail.com', 'hreddy710@gmail.com', 'harsha'),
(6, 'Testing', 'hreddy710@gmail.com', 'test@asd.com', ''),
(9, 'testing 213', 'hreddy710@gmail.com', 'hreddy710@gmail.com', ''),
(10, 'testing 213', 'hreddy710@gmail.com', 'hreddy710@gmail.com', ''),
(11, 'Klick check', 'prabu@gmail.com', 'prabu@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_details`
--

CREATE TABLE `form_details` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_list`
--

CREATE TABLE `form_list` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procedure_details`
--

CREATE TABLE `procedure_details` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedure_details`
--

INSERT INTO `procedure_details` (`id`, `unique_id`, `field_type`, `field_name`, `field_value`) VALUES
(43, 'vTzj9P1rkW', 'text', 'Name', 'Prabhus'),
(44, 'vTzj9P1rkW', 'text', 'Age', '26'),
(45, 'vTzj9P1rkW', 'textarea', 'description', 'About to marry'),
(46, 'vTzj9P1rkW', 'text', 'Percentage', '100'),
(47, 'vTzj9P1rkW', 'text', 'last Name', 'Kumar'),
(55, 'AzLnP6UqSD', 'text', 'Name', 'harsha'),
(56, 'AzLnP6UqSD', 'textarea', 'age', '2'),
(57, 'AzLnP6UqSD', 'text', 'Description', 'simple description '),
(58, 'AzLnP6UqSD', 'text', 'testing field', 'Testing data'),
(59, 'AzLnP6UqSD', 'text', 'Percentage', '25'),
(60, 'AzLnP6UqSD', 'text', 'College', 'BML University'),
(61, 'AzLnP6UqSD', 'text', 'Test Label', 'hello testing'),
(62, 'AzLnP6UqSD', 'text', 'TTTT', 'Checking');

-- --------------------------------------------------------

--
-- Table structure for table `procedure_list`
--

CREATE TABLE `procedure_list` (
  `p_id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedure_list`
--

INSERT INTO `procedure_list` (`p_id`, `unique_id`, `name`) VALUES
(12, 'vTzj9P1rkW', 'Prabhu'),
(15, 'AzLnP6UqSD', 'Procedure 2');

-- --------------------------------------------------------

--
-- Table structure for table `react_project`
--

CREATE TABLE `react_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `react_project`
--

INSERT INTO `react_project` (`id`, `name`, `password`, `token`) VALUES
(1, 'hreddy710@gmail.com', 'a152e841783914146e4bcd4f39100686', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImhyZWRkeTcxMEBnbWFpbC5jb20iLCJwYXNzd29yZCI6ImExNTJlODQxNzgzOTE0MTQ2ZTRiY2Q0ZjM5MTAwNjg2In0.cok19vtxWz_vu1s5VtbVs9odo0ktojpGat-v5iLuE7w'),
(19, 'varun@gmail.com', 'a152e841783914146e4bcd4f39100686', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `form_details`
--
ALTER TABLE `form_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_list`
--
ALTER TABLE `form_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedure_details`
--
ALTER TABLE `procedure_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedure_list`
--
ALTER TABLE `procedure_list`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `react_project`
--
ALTER TABLE `react_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `form_details`
--
ALTER TABLE `form_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `form_list`
--
ALTER TABLE `form_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procedure_details`
--
ALTER TABLE `procedure_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `procedure_list`
--
ALTER TABLE `procedure_list`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `react_project`
--
ALTER TABLE `react_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
