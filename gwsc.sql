-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 08:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `campsite`
--

CREATE TABLE `campsite` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campsite`
--

INSERT INTO `campsite` (`id`, `name`, `note`, `location`, `date`) VALUES
(1, 'Pinecones Caravan', 'Pinecones Caravan and Camping is a family orientated, picturesque getaway in Dersingham, Norfolk - the place recently named the ninth nicest village in the UK by The Sunday Times. And it\'s just a hop from the sea! No wonder the royals live nearby at Sandringham.', 'Sandringham, Dersingham', '2022-23-12');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `ip`, `date`) VALUES
(3, '::1', '2023-01-25 17:34:30.783749'),
(4, '127.0.0.1', '2023-01-25 18:34:27.239513');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `ip` varchar(40) NOT NULL,
  `timestap` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `ip`, `timestap`) VALUES
(41, '127.0.0.1', '2023-01-25 20:58:42.184876'),
(42, '127.0.0.1', '2023-01-25 20:58:46.105350'),
(43, '127.0.0.1', '2023-01-25 20:58:51.661332'),
(44, '127.0.0.1', '2023-01-25 20:58:58.009722'),
(45, '127.0.0.1', '2023-01-25 20:59:04.624041');

-- --------------------------------------------------------

--
-- Table structure for table `pitch_type`
--

CREATE TABLE `pitch_type` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `tent_pitch` varchar(255) NOT NULL,
  `touring_pitch` varchar(255) NOT NULL,
  `motorhome_pitch` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pitch_type`
--

INSERT INTO `pitch_type` (`id`, `name`, `location`, `availability`, `tent_pitch`, `touring_pitch`, `motorhome_pitch`, `note`, `date`) VALUES
(8, 'Saranac Lake', 'New York', 'Yes', 'Yes', 'Yes', 'No', 'Good for Camping', '2023-25-01'),
(9, 'Big Bend National Park', 'Texas', 'Yes', 'Yes', 'Yes', 'Yes', 'Good for Camping', '2023-25-01'),
(10, 'Denali National Park', 'Alaska', 'No', 'Yes', 'Yes', 'Yes', 'Good for Camping', '2023-25-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `date`) VALUES
(6, 'Leticia', 'Bubu', 'leticiabubu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2023-25-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campsite`
--
ALTER TABLE `campsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pitch_type`
--
ALTER TABLE `pitch_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campsite`
--
ALTER TABLE `campsite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pitch_type`
--
ALTER TABLE `pitch_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
