-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 31, 2021 at 07:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jait_web`
--
CREATE DATABASE IF NOT EXISTS `jait_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jait_web`;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `files` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `fname`, `email`, `password`, `cpassword`) VALUES
(1, '0000-00-00', 'Anjeljayswal@gmail.com', '60284ce206bf1e6b0955c450c6fddac766b0f3d7', ''),
(2, 'jagriti', 'jagriti@mail.com', 'a75e859be1796820e83a43b35339f14da01809ca', ''),
(3, 'Anjali Jayswal', 'Anjeljayswal@gmail.com', '60284ce206bf1e6b0955c450c6fddac766b0f3d7', ''),
(4, 'Vivek ', 'V@GMAIL.COM', '0c36e12ca3aeed44274ea401dbde7d7538837b3f', ''),
(5, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', ''),
(6, 'Anjali Jayswal', 'anjali@gmail.com', '60284ce206bf1e6b0955c450c6fddac766b0f3d7', ''),
(7, 'Anjali Jayswal', 'anjali@gmail.com', '76af7efae0d034d1e3335ed1b90f24b6cadf2bf1', ''),
(8, 'ashutosh Yadav', 'ashutosh@gmail.com', 'b4dc535cecad5fbb7fe454407a386ed6cc6945cc', ''),
(9, 'sandy', 'sandy@gmail.com', '$2y$10$GrrFl/0IC9y3CfoM8eOAnOC15lm5.HmhDYNVEgmoVit1Xpxnb.v4a', 'cpass'),
(10, 'sandy', 'sandy@gmail.com', '$2y$10$LQlsgFpmgvK6Rj7n2D9omO7Lsn..FfcSd18VKcsM0pp5ac05VnJga', 'cpass'),
(11, 'sandy', 'sandy@gmail.com', '$2y$10$/m0NSsghGX1XsoytZQaNK.Rr7TXhEpwSAFNGkyMWOZ7RHSFUGopOS', 'cpass'),
(12, 'any', 'any@gmail.com', '$2y$10$C7UmkNTNtE9y3nFnGyl7H.MnsY6omLc55RbDGOULigzZoTcSlCN2.', 'cpass');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `id` int(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`id`, `username`, `email`, `mobile`, `comment`) VALUES
(1, 'Anjel Jayswal', 'Anjeljayswal@gmail.com', '708217801', 'hgfghfh'),
(2, 'Anjali', 'Jayswalanjali2016@email.com', '7082170801', 'LIKE and Share Plz'),
(3, 'Anjel Jayswal', 'Anjeljayswal@gmail.com', '708217801', 'lIKE nad Share'),
(4, 'Anjali', 'Jayswalanjali2016@email.com', '7082170801', 'Plz like and share .'),
(5, 'Anjali', 'Jayswalanjali2016@email.com', '7082170801', 'Hii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
