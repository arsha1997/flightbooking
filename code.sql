-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 05:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_code`
--

CREATE TABLE `tbl_code` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_code`
--

INSERT INTO `tbl_code` (`id`, `name`, `address`, `gender`, `date`, `emailid`, `password`, `status`) VALUES
(2, 'kathu', 'ambikalyam', 'female', '1990-04-12', 'kathu@gmail.com', 'kathu123', '0'),
(3, 'amitha', 'amitha vila', 'female', '1990-02-12', 'kathu@gmail.com', 'ambu', '0'),
(4, 'ambu', 'ambikalayam', 'female', '1990-03-12', 'kathu@gmail.com', '$2y$10$xMj23EeBG68b12W5qFpwX.xgK', '2'),
(6, 'ammu', 'sdasdadad', 'female', '0000-00-00', '123@gmail.ocm', 'amm123', '1'),
(7, 'hari', 'hari bhavan', 'male', '1990-04-12', 'hari123@gmail.com', '$2y$10$oJDM5/vYYeM5jk0zJMzS3u6sT9S36kiMISOsdlRVUTFF9727lhK1W', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_code`
--
ALTER TABLE `tbl_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_code`
--
ALTER TABLE `tbl_code`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
