-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 04:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `emailid` text NOT NULL,
  `mobile` text NOT NULL,
  `members` int(10) NOT NULL,
  `addharno` text NOT NULL,
  `age` int(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `gender` text NOT NULL,
  `class` text NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`firstname`, `lastname`, `emailid`, `mobile`, `members`, `addharno`, `age`, `fromdate`, `todate`, `gender`, `class`, `destination`) VALUES
('Ram', 'Mehra', 'ram@gmail.com', '3333333333', 5, '876789876567', 19, '2023-08-02', '2023-08-08', 'Male', '2nd', 'Banglore'),
('Ram', 'Mehra', 'ram@gmail.com', '3333333333', 5, '876789876567', 19, '2023-08-02', '2023-08-08', 'Male', '2nd', 'Banglore'),
('Atharva', 'Mandgaonkar', 'atharvamandgaonkar@gmail.com', '9130123444', 2, '987654567543', 18, '2023-08-08', '2023-08-16', 'Male', '2nd', 'Banglore'),
('Rakesh', 'Naik', 'rakesh@gmail.com', '1234567890', 3, '464646464646', 45, '2023-08-18', '2023-09-06', 'Male', '2nd', 'Delhi'),
('Nitin', 'Nayar', 'nitin@gmail.com', '7578488484', 6, '746464545454', 45, '2023-08-08', '2023-08-17', 'Male', '1st', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `review`) VALUES
('Kartik', 'k@gmail.com', '7588189344', 'Good'),
('Raj', 'raj@123gmail.com', '9623452444', 'Great'),
('Atharva', 'atharvamandgaonkar@gmail.com', '9130123444', 'Great'),
('Parikshit', 'parikshit@gmail.com', '9876567865', 'Nice'),
('Yash', 'yash@gmail.com', '8453467489', 'Better'),
('Yathartha Rahangdale', 'yathartharahangdale@gmail.com', '9156240822', 'Yatharth bhai!!!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'ram', '123', 'ram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
