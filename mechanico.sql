-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanico`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoshop`
--

CREATE TABLE `autoshop` (
  `id` int(11) NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `mobilenumber` bigint(12) NOT NULL,
  `location` varchar(255) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `ownerid` varchar(255) NOT NULL,
  `businesspermit` varchar(255) NOT NULL,
  `shopic` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `vehicletype` varchar(20) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `vehicletype`, `problem`, `date`, `time`, `status`) VALUES
(1, 'two', 'Flat Tire', '2022-10-29', '11:00:00', ''),
(2, 'two', 'Flat Tire', '2022-10-25', '13:30:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `mobilenumber` bigint(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `mobilenumber`, `username`, `password_hash`) VALUES
(30, 'Ministerio', 'Jemaica', 9123456789, 'jemai', '$2y$10$mBfmZ0aEZOoT4l2Vcc'),
(43, 'Ministerio', 'Problem', 9123456789, 'jk', 'efcea0e02912bc1d91eced3ed5444ac4'),
(44, 'Ubod', 'Problem', 9987654321, '20316246', 'efcea0e02912bc1d91eced3ed5444ac4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autoshop`
--
ALTER TABLE `autoshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autoshop`
--
ALTER TABLE `autoshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
