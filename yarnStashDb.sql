-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 07, 2023 at 10:46 AM
-- Server version: 5.7.41
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yarnStashDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `yarn`
--

CREATE TABLE `yarn` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_bin NOT NULL,
  `shade` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `dominantColour` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `composition` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `yarnType` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `lengthInMeters` float DEFAULT NULL,
  `skeinNumber` float DEFAULT NULL,
  `project` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `image` varchar(255) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `yarn`
--

INSERT INTO `yarn` (`id`, `name`, `shade`, `dominantColour`, `composition`, `yarnType`, `lengthInMeters`, `skeinNumber`, `project`, `image`) VALUES
(1, 'Sirdar Jewelspun', 'Midnight fjords', 'pink', 'Acrylic', 'Aran', 500, 2, 'Shawl ', NULL),
(2, 'Sirdar Jewelspun', 'Golden Green', 'green', 'Acrylic', 'Aran', 500, 0.1, NULL, NULL),
(3, 'Deramores Studio', 'Fuschia ', 'pink', 'Acrylic', 'Chunky', 80, 3, 'Diagonal weave blanket ', NULL),
(4, 'Deramores Studio', 'Aubergine', 'purple', 'Acrylic', 'Chunky', 80, 1, 'Diagonal weave blanket', NULL),
(5, 'Scheepjes Chunky Monkey', 'Deep Turquoise', 'blue', 'Acrylic', 'Chunky', 116, 2, 'Slipper Socks', NULL),
(6, 'King Cole Luxury Merino', 'Mustard', 'yellow', 'Merino wool', 'DK', 140, 20, 'Emerald valley jumper', NULL),
(7, 'James C. Brett Party Time', 'PT2', 'blue', 'Acrylic', 'Chunky', 154, 1, 'Ear warmer', NULL),
(8, 'Cotton cord 5mm', 'Metallic green', 'green', 'Cotton', 'Macrame cord 5mm', 100, 2, 'Basket', NULL),
(9, 'Paintbox Yarns Wool Mix Super Chunky', 'Royal blue', 'blue', 'Wool and Acrylic', 'Super Chunky', 55, 1.5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yarn`
--
ALTER TABLE `yarn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yarn`
--
ALTER TABLE `yarn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
