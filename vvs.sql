-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 09:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `candidate_name` varchar(200) DEFAULT NULL,
  `candidate_position` varchar(200) DEFAULT NULL,
  `candidate_position_name` varchar(200) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL,
  `deleted_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_name`, `candidate_position`, `candidate_position_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yves Ntwali', '1', 'President', NULL, NULL, NULL),
(2, 'Christian Ngabo', '1', 'President', NULL, NULL, NULL),
(3, 'David Imena', '1', 'President', NULL, NULL, NULL),
(4, 'Alain Mugabo', '1', 'President', NULL, NULL, NULL),
(5, 'Frank Kanyandekwe', '2', 'Vise President', NULL, NULL, NULL),
(6, 'Isaac Mukunzi', '2', 'Vise President', NULL, NULL, NULL),
(7, 'Thierry MANZI', '11', 'Secretary', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `deleted_at` varchar(400) DEFAULT NULL,
  `updated_at` varchar(400) DEFAULT NULL,
  `created_at` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'President', NULL, NULL, NULL),
(2, 'Vise President', NULL, NULL, NULL),
(11, 'Secretary', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `dateofbirth` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phonenumber` varchar(500) DEFAULT NULL,
  `national_id` varchar(500) DEFAULT NULL,
  `role` varchar(500) DEFAULT NULL,
  `active` varchar(500) DEFAULT NULL,
  `created_at` varchar(500) DEFAULT NULL,
  `updated_at` varchar(500) DEFAULT NULL,
  `deleted_at` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `dateofbirth`, `address`, `phonenumber`, `national_id`, `role`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Thierry', 'MFITEYESU MANZI', 'manzithierry001@gmail.com', '123', NULL, 'KK 4 Ave', '+250785270139', NULL, 'client', NULL, NULL, NULL, NULL),
(3, 'Thierry', 'MFITEYESU MANZI', 'admin@vvs.com', 'admin', NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL),
(5, 'Alain', 'SHUMBUSHO', 'alain.shumbusho.as@gmail.com', '12345', NULL, NULL, NULL, NULL, 'client', NULL, NULL, NULL, NULL),
(6, 'Scott', 'MFITEYESU', 'thierrymanzi@gmail.com', '12345', NULL, NULL, NULL, NULL, 'client', NULL, NULL, NULL, NULL),
(7, 'Bertin', 'Ndayambaje', 'bertin@gmail.com', '12345', NULL, NULL, NULL, NULL, 'client', NULL, NULL, NULL, NULL),
(9, 'Turyatunga', 'Turyatunga', 'turya@gmail.com', '12345', '1997-01-01', 'Kimironko', '0788791782', '111978723684686234', 'client', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `position_id` varchar(500) DEFAULT NULL,
  `candidate_it` varchar(500) DEFAULT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  `vote` varchar(500) DEFAULT NULL,
  `cratead_at` varchar(500) DEFAULT NULL,
  `updated_at` varchar(500) DEFAULT NULL,
  `deleted_at` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `position_id`, `candidate_it`, `user_id`, `vote`, `cratead_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '2', '1', NULL, NULL, NULL),
(6, '1', '4', '5', '1', NULL, NULL, NULL),
(7, '2', '5', '5', '1', NULL, NULL, NULL),
(8, '2', '5', '2', '1', NULL, NULL, NULL),
(9, '11', '7', '2', '1', NULL, NULL, NULL),
(10, '1', '4', '6', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
