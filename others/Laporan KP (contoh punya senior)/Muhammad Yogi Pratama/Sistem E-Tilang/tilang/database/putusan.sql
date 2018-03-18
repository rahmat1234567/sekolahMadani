-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 03:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnjakart_tilang`
--

-- --------------------------------------------------------

--
-- Table structure for table `putusan`
--

CREATE TABLE `putusan` (
  `notilang` int(11) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `biayaperkara` varchar(100) NOT NULL,
  `subsider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `putusan`
--

INSERT INTO `putusan` (`notilang`, `denda`, `biayaperkara`, `subsider`) VALUES
(3480470, '150.000', '1.000', '3 hari'),
(4452240, '50.000', '1.000', '3 hari'),
(4453020, '100.000', '1.000', '3 hari'),
(4454140, '120.000', '1.000', '3 hari'),
(4454340, '120.000', '1.000', '3 hari'),
(4454530, '100.000', '1.000', '3 hari'),
(4454810, '150.000', '1.000', '3 hari'),
(4477036, '120.000', '1.000', '3 hari'),
(4477037, '150.000', '1.000', '3 hari'),
(4477493, '100.000', '1.000', '3 hari'),
(4477494, '100.000', '1.000', '3 hari'),
(4477495, '50.000', '1.000', '3 hari'),
(4505680, '120.000', '1.000', '3 hari'),
(4505780, '70.000', '1.000', '3 hari'),
(4505800, '150.000', '1.000', '3 hari'),
(4505820, '170.000', '1.000', '3 hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `putusan`
--
ALTER TABLE `putusan`
  ADD PRIMARY KEY (`notilang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
