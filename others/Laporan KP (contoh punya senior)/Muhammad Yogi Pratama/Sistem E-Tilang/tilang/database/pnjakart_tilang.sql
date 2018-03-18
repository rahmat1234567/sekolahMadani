-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 04:29 PM
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
-- Table structure for table `daftarnama`
--

CREATE TABLE `daftarnama` (
  `notilang` int(11) NOT NULL,
  `namapelanggar` varchar(100) NOT NULL,
  `noba` varchar(100) NOT NULL,
  `noreg` varchar(100) NOT NULL,
  `pasal` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarnama`
--

INSERT INTO `daftarnama` (`notilang`, `namapelanggar`, `noba`, `noreg`, `pasal`, `tanggal`) VALUES
(3480470, 'SUNARYA', '14.432', '19.303', '281(1)UULAJ', '2017-02-17'),
(4452240, 'AHDANAMINUDIN', '16.706', '22.489', '291(1)UULAJ', '2017-02-24'),
(4453020, 'ADYTIA WAHYU', '16.698', '22.481', '287(1)UULAJ', '2017-02-24'),
(4454140, 'ADI SUSANTO', '16.701', '22.484', '287(1)UULAJ', '2017-02-24'),
(4454340, 'RUSDY HIDAYAT', '16.700', '22.483', '287(1)UULAJ', '2017-02-24'),
(4454530, 'KAREND', '16.707', '22.490', '287(1)UULAJ', '2017-02-24'),
(4454810, 'DARMAN', '16.705', '22.488', '281(1)UULAJ', '2017-02-24'),
(4477036, 'RICKO MUBARAK', '3.865', '18.740', '288', '2017-02-10'),
(4477037, 'JUMENA', '3.866', '18.741', '288', '2017-02-10'),
(4477493, 'MARAH RASHANDY', '3.862', '18.737', '288', '2017-01-10'),
(4477494, 'THEN MIAUW', '3.863', '18.738', '288', '2017-01-10'),
(4477495, 'FANNY', '3.864', '18.739', '293', '2017-01-10'),
(4505680, 'ARDIANSYAH', '16.704', '22.487', '287(1)UULAJ', '2017-02-24'),
(4505780, 'PUTERA ADE', '16.699', '22.482', '285(1)UULAJ', '2017-02-24'),
(4505800, 'TIYAR', '16.702', '22.485', '281(1)UULAJ', '2017-02-24'),
(4505820, 'ANDI SUPARTI', '16.703', '22.486', '291(1)UULAJ', '2017-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `putusan`
--

CREATE TABLE `putusan` (
  `id` int(11) NOT NULL,
  `notilang` int(11) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `biayaperkara` varchar(100) NOT NULL,
  `subsider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `putusan`
--

INSERT INTO `putusan` (`id`, `notilang`, `denda`, `biayaperkara`, `subsider`) VALUES
(1, 4477037, '150.000', '1.000', '3 hari'),
(2, 4477036, '120.000', '1.000', '3 hari'),
(3, 4477495, '50.000', '1.000', '3 hari'),
(4, 4477494, '100.000', '1.000', '3 hari'),
(5, 4477493, '100.000', '1.000', '3 hari'),
(6, 3480470, '150.000', '1.000', '3 hari'),
(7, 4453020, '100.000', '1.000', '3 hari'),
(8, 4505780, '70.000', '1.000', '3 hari'),
(9, 4454340, '120.000', '1.000', '3 hari'),
(10, 4454140, '120.000', '1.000', '3 hari'),
(11, 4505800, '150.000', '1.000', '3 hari'),
(12, 4505820, '170.000', '1.000', '3 hari'),
(13, 4505680, '120.000', '1.000', '3 hari'),
(14, 4454810, '150.000', '1.000', '3 hari'),
(15, 4452240, '50.000', '1.000', '3 hari'),
(16, 4454530, '100.000', '1.000', '3 hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarnama`
--
ALTER TABLE `daftarnama`
  ADD PRIMARY KEY (`notilang`);

--
-- Indexes for table `putusan`
--
ALTER TABLE `putusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notilang` (`notilang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `putusan`
--
ALTER TABLE `putusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
