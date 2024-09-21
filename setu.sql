-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 10:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setu`
--

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `BenificiaryUID` int(11) NOT NULL,
  `ApplicantUID` int(11) NOT NULL,
  `IncomeCeritificate` int(11) NOT NULL,
  `Salutation` varchar(255) NOT NULL,
  `FullNameEnglish` varchar(255) NOT NULL,
  `FullNameMarathi` varchar(255) NOT NULL,
  `SalutationFather` varchar(255) NOT NULL,
  `FatherNameEnglish` varchar(255) NOT NULL,
  `FatherNameMarathi` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `MRAddress` text NOT NULL,
  `District` varchar(255) NOT NULL,
  `Taluka` varchar(255) NOT NULL,
  `Village` varchar(255) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Relation` varchar(255) NOT NULL,
  `BeneficiarySalutaion` varchar(255) NOT NULL,
  `BeneficiaryNameEnglish` varchar(255) NOT NULL,
  `BeneficiaryNameMarathi` varchar(255) NOT NULL,
  `Income_2022_2023` decimal(15,2) NOT NULL,
  `Income_2023_2024` decimal(15,2) NOT NULL,
  `Income_2024_2025` decimal(15,2) NOT NULL,
  `BeneficiarySalutation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `id` int(11) NOT NULL,
  `BenificiaryUID` int(11) NOT NULL,
  `ApplicantUID` int(11) NOT NULL,
  `IncomeCeritificate` int(11) NOT NULL,
  `Salutation` varchar(255) NOT NULL,
  `FullNameEnglish` varchar(255) NOT NULL,
  `FullNameMarathi` varchar(255) NOT NULL,
  `SalutationFather` varchar(255) NOT NULL,
  `FatherNameEnglish` varchar(255) NOT NULL,
  `FatherNameMarathi` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `MRAddress` text NOT NULL,
  `District` varchar(255) NOT NULL,
  `Taluka` varchar(255) NOT NULL,
  `Village` varchar(255) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Relation` varchar(255) NOT NULL,
  `BeneficiarySalutaion` varchar(255) NOT NULL,
  `BeneficiaryNameEnglish` varchar(255) NOT NULL,
  `BeneficiaryNameMarathi` varchar(255) NOT NULL,
  `Income_2022_2023` decimal(15,2) NOT NULL,
  `Income_2023_2024` decimal(15,2) NOT NULL,
  `Income_2024_2025` decimal(15,2) NOT NULL,
  `BeneficiarySalutation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `registration_date`) VALUES
(1, 'shubham sunil kohad', 'sk@gmail.com', '1234', '2024-04-29 07:36:33'),
(2, 'sallu', 'salman@gmail.com', 'salman', '2024-04-29 07:39:10'),
(3, 'ravi', 'ravi@gmail.com', 'ravi', '2024-04-29 07:39:32'),
(4, 'shubham sunil kohad', 'sk@gmail.com', '12345', '2024-04-29 07:41:29'),
(5, 'shubham sunil kohad', 'salman@gmail.com', 'salman123', '2024-04-29 07:42:07'),
(6, 'shubham sunil kohad', 'salman@gmail.com', 'salman123', '2024-04-29 07:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `income`
--
ALTER TABLE `income`
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
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
