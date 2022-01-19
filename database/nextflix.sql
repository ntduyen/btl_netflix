-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `pass`) VALUES
('dhq@gmail.com', 'quan', 'abcd'),
('mvd@gmail.com', 'duc', 'abcde'),
('ntd@gmail.com', 'duyen', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(5, 'danngao', 'nguyenduyen21102001@gmail.com', '$2y$10$w4G5b9uE9zKoFYvfjvnNbupe6AZ84YVMki6.gYHAvRskrIr5Txlfe', 0, '714791daa7cd21cb0c9704aae20290471830', NULL),
(6, 'duyen', 'duyenbeofcbb@gmail.com', '$2y$10$ojJtkTx1Cn0Lodptk33d0utbPegQr/4hazMhWXkiGJvu2x.hcBGTO', 0, 'c91621159b7dc14f3c6e41338a5c37da9988', NULL),
(7, 'quan', 'dinhhongquan2712@gmail.com', '$2y$10$pI29xUxTyVzPH4EBx6HcAOHLm5KalhWYjblswo7B8M4sBbeuBu8PO', 0, '97b4012020b8e57bef438a54f572ff3a1217', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`) VALUES
(1, 'video32.mp4', 'videos/video32.mp4'),
(2, 'video33.mp4', 'videos/video33.mp4'),
(3, 'video31.mp4', 'videos/video31.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
