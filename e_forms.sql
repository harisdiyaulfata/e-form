-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 11:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `doc` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` varchar(128) NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `doc`, `date`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`) VALUES
(7, 'MOM/DRP/20/20', '2020-07-20', 1, '2020-07-20', NULL, NULL),
(8, 'MOM/DRP/20/20', '2020-07-21', 1, '2020-07-21', NULL, NULL),
(9, 'MOM/DRP/20/20', '2020-07-22', 1, '2020-07-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `momitoringmom`
--

CREATE TABLE `momitoringmom` (
  `id_mom` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `jam` time NOT NULL,
  `gph1` float(3,2) NOT NULL,
  `gph2` float(3,2) NOT NULL,
  `gph3` float(3,2) NOT NULL,
  `gph4` float(3,2) NOT NULL,
  `gph5` float(3,2) NOT NULL,
  `regulator1_bp1` int(11) NOT NULL,
  `regulator2_bp1` int(11) NOT NULL,
  `regulator3_bp1` int(11) NOT NULL,
  `regulator4_bp1` int(11) NOT NULL,
  `regulator5_bp1` int(11) NOT NULL,
  `mainMotor_bp1` int(11) NOT NULL,
  `sprayWater` tinyint(1) NOT NULL,
  `gph6` float(3,2) NOT NULL,
  `gph7` float(3,2) NOT NULL,
  `gph8` float(3,2) NOT NULL,
  `gph9` float(3,2) NOT NULL,
  `regulator1_bp2` int(11) NOT NULL,
  `regulator2_bp2` int(11) NOT NULL,
  `regulator3_bp2` int(11) NOT NULL,
  `regulator4_bp2` int(11) NOT NULL,
  `regulator5_bp2` int(11) NOT NULL,
  `mainMotor_bp2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `momitoringmom`
--

INSERT INTO `momitoringmom` (`id_mom`, `header_id`, `jam`, `gph1`, `gph2`, `gph3`, `gph4`, `gph5`, `regulator1_bp1`, `regulator2_bp1`, `regulator3_bp1`, `regulator4_bp1`, `regulator5_bp1`, `mainMotor_bp1`, `sprayWater`, `gph6`, `gph7`, `gph8`, `gph9`, `regulator1_bp2`, `regulator2_bp2`, `regulator3_bp2`, `regulator4_bp2`, `regulator5_bp2`, `mainMotor_bp2`) VALUES
(6, 7, '07:00:00', 1.00, 1.00, 1.00, 1.00, 1.00, 5, 2, 2, 2, 2, 23, 1, 1.00, 1.00, 1.00, 1.00, 2, 2, 2, 2, 2, 34),
(7, 7, '08:00:00', 1.00, 0.00, 1.00, 1.00, 0.00, 5, 2, 2, 2, 2, 44, 1, 0.00, 1.00, 1.00, 1.00, 2, 2, 2, 2, 2, 43),
(8, 7, '09:00:00', 2.00, 2.00, 2.00, 2.00, 2.00, 3, 3, 3, 3, 4, 10, 1, 2.00, 2.00, 2.00, 2.00, 4, 2, 3, 2, 3, 40),
(9, 8, '06:00:00', 2.00, 2.00, 2.00, 2.00, 2.00, 2, 3, 1, 3, 4, 33, 1, 2.00, 2.00, 2.00, 2.00, 2, 2, 3, 2, 3, 23),
(10, 8, '08:00:00', 2.00, 2.30, 2.00, 2.00, 3.00, 2, 3, 3, 3, 3, 24, 1, 2.00, 2.00, 2.00, 2.00, 2, 2, 2, 2, 2, 35),
(11, 8, '09:00:00', 3.00, 3.00, 3.00, 3.00, 4.00, 2, 3, 3, 4, 4, 43, 1, 3.00, 3.00, 2.00, 3.00, 2, 3, 1, 4, 3, 33),
(12, 9, '06:00:00', 2.00, 2.30, 2.00, 2.00, 2.00, 2, 3, 1, 3, 3, 33, 1, 3.00, 2.00, 2.00, 3.00, 4, 2, 3, 4, 2, 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Haris Diyaul Fata', 'haris.diyaul.fata@gmail.com', 'default.jpg', '$2y$10$Bb58o9XruNypFViv//s3lO8Mb8JIRTF9f2CldTejKBr5YbukBfUDa', 2, 1, '1595046266');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `momitoringmom`
--
ALTER TABLE `momitoringmom`
  ADD PRIMARY KEY (`id_mom`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `momitoringmom`
--
ALTER TABLE `momitoringmom`
  MODIFY `id_mom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
