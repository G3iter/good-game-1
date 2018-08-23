-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Rgp 23 d. 19:08
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedas`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'asd@asd.com', 'asd'),
(2, 'asdasdsad@sefdfsdf', '1fcaf179ba907fd1c2a75460f6596a81d682643ceed44b0626'),
(3, 'ggg@rrr.com', 'aeae379a6e857728e44164267fdb7a0e27b205d757cc198995'),
(4, 'hhh@sdfsdf.com', 'd9c5829460a48462fa20921c4937cbe710b0fd18182bf28112'),
(5, 'sdfsdf@sdffgh', '0a7b7d877c5973af137249fbee08200fea8a155a5e99d4ffa6'),
(6, 'asdasdsad@sefdfsdf', 'aeae379a6e857728e44164267fdb7a0e27b205d757cc198995'),
(7, 'hhh@sdfsdf.com', 'ebd4fc6b75ab2b2a4fcf261785351d3e71eef7b71a51667096');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
