-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2021 at 08:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipsel_chamoli`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `number` int(20) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `name` text NOT NULL,
  `fathers_name` text NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `options` enum('agriculture','horticulture','fisheries','Industries','tourism','Nagar Nigam','Animal husbandry','pisciculture') NOT NULL,
  `status` enum('pending','accepted','rejected','') NOT NULL DEFAULT 'pending',
  `text` text DEFAULT NULL,
  `email_id` varchar(320) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pincode` int(11) NOT NULL,
  `activity_work` text NOT NULL,
  `activity_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`number`, `contact_no`, `name`, `fathers_name`, `address`, `date_of_birth`, `options`, `status`, `text`, `email_id`, `gender`, `pincode`, `activity_work`, `activity_desc`) VALUES
(1, 46, 'gdgd', 'dgd', 'dgfdg', '2021-03-17', 'horticulture', 'accepted', 'kjhjkhjkh', 'dfgdfgd', 'maled', 454, 'drtd', 'dfgdg'),
(2, 56, 'dsgdfg', 'fdgdfg', 'fdgfd', '2021-03-17', 'fisheries', 'accepted', '', 'fdgdf', 'maled', 454, 'dgfgdf', 'dfgdgd'),
(3, 34435335, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'rejected', '', 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(4, 34435335, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'rejected', '', 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(5, 34435335, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'rejected', '', 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(6, 34435335, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'rejected', '', 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(7, 111111, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'rejected', '', 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(8, 8878, 'anu', 'vhaa', 'xhxjgzjt', '1999-04-03', 'pisciculture', 'accepted', '', 'ffjfj', 'male', 68985, 'hxj', 'chc'),
(9, 9999, 'anu', 'vhaa', 'xhxjgzjt', '1999-09-09', 'pisciculture', 'accepted', '', 'ffjfj', 'male', 68985, 'hxj', 'chc'),
(10, 1234, 'fdkjfj', 'kjsdflksdj', 'sdkfjdlk', '1999-09-25', 'tourism', 'pending', NULL, 'anu@gmial.com', 'male', 909, 'dkfjsl', 'kldsjlkf'),
(11, 12345, 'ch', 'hzob', 'fhh', '2021-03-10', 'Nagar Nigam', 'pending', NULL, 'fgh', 'female', 888, 'fgh', 'fhhgrj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
