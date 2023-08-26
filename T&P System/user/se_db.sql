-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 08:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback`) VALUES
('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('ftugifdysytf'),
('huudaewfwofjhgafhasdlfkdsmvznvjzbxcvgdsfvbadsokadsjfklawkjfuaewifgahiorjqw87rtawysiofjhzhufaesjdlASFJD'),
('huudaewfwofjhgafhasdlfkdsmvznvjzbxcvgdsfvbadsokadsjfklawkjfuaewifgahiorjqw87rtawysiofjhzhufaesjdlASFJD'),
('huudaewfwofjhgafhasdlfkdsmvznvjzbxcvgdsfvbadsokadsjfklawkjfuaewifgahiorjqw87rtawysiofjhzhufaesjdlASFJD');

-- --------------------------------------------------------

--
-- Table structure for table `pesonal`
--

CREATE TABLE `pesonal` (
  `LastName` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `FatherName` varchar(56) NOT NULL,
  `LocalAddress` varchar(255) NOT NULL,
  `PermanentAddress` varchar(255) NOT NULL,
  `BloodGroup` enum('A+','B+','O','AB+','O-') NOT NULL,
  `MobileNumber` bigint(11) NOT NULL,
  `Dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesonal`
--

INSERT INTO `pesonal` (`LastName`, `FirstName`, `FatherName`, `LocalAddress`, `PermanentAddress`, `BloodGroup`, `MobileNumber`, `Dateofbirth`) VALUES
('Kadu', 'Ajay', '', '', '', '', 8888091162, '0000-00-00'),
('Kadu', 'Ajay', '', '', '', '', 8888091163, '0000-00-00'),
('Kadu', 'Ajay', '', '', '', '', 8888091165, '0000-00-00'),
('Kadu', 'Ajay', '', '', '', '', 8888091166, '0000-00-00'),
('Kadu', 'Ajay', 'Bajarang', 'At.changalwadi Tq.Telhara Dist.Akola', 'At.changalwadi Tq.Telhara Dist.Akola', 'B+', 8888091167, '0000-00-00'),
('Kadu', 'Ajay', '', '', '', '', 9088765667, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`) VALUES
('', '', '', 0, ''),
('Ajay', 'Kadu', 'kaduajay1122@gmail.c', 8888091162, '12345678'),
('Ajay', 'Kadu', 'kaduajay@1122@gmail.', 8888091162, 'Ajay@123');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Ajay', 'Ajay@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesonal`
--
ALTER TABLE `pesonal`
  ADD PRIMARY KEY (`MobileNumber`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
