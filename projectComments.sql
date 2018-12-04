-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 09:17 AM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrr3147`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectComments`
--

CREATE TABLE `projectComments` (
  `id` int(100) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projectComments`
--

INSERT INTO `projectComments` (`id`, `name`, `comment`, `date`) VALUES
(7, 'Paul', 'This is my other comment for testing', '2018-11-25 07:46:33'),
(8, 'asd', 'sadf', '2018-12-02 14:23:08'),
(16, 'ewdfe', ';lkn', '2018-12-03 21:12:38'),
(17, 'John', 'I love this site!', '2018-12-03 21:13:30'),
(18, 'jacob', 'Love learnlnx', '2018-12-04 12:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projectComments`
--
ALTER TABLE `projectComments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectComments`
--
ALTER TABLE `projectComments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
