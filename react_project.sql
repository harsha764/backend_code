-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 03:21 PM
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
(3, 'anil@gmail.com', 'a152e841783914146e4bcd4f39100686', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImFuaWxAZ21haWwuY29tIiwicGFzc3dvcmQiOiJhMTUyZTg0MTc4MzkxNDE0NmU0YmNkNGYzOTEwMDY4NiJ9.z8eMBDiNaeE40m9E18xLW3Yko3mIo0TUNB25JyC-kIE'),
(4, 'vikas@gmail.com', 'c83b2d5bb1fb4d93d9d064593ed6eea2', ''),
(5, 'asd@gmail.com', '14a9f8c6f825091c7ca23da3bce1dfd8', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `react_project`
--
ALTER TABLE `react_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `react_project`
--
ALTER TABLE `react_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
