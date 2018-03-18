-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 03:38 PM
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
  `id` int(100) NOT NULL,
  `namapelanggar` varchar(100) DEFAULT NULL,
  `noba` varchar(100) DEFAULT NULL,
  `noreg` varchar(100) DEFAULT NULL,
  `notilang` varchar(100) DEFAULT NULL,
  `pasal` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarnama`
--

INSERT INTO `daftarnama` (`id`, `namapelanggar`, `noba`, `noreg`, `notilang`, `pasal`, `tanggal`) VALUES
(1, 'JUMENA', '3.866', '18.741', '4477037', '288', '2017-02-10'),
(2, 'RICKO MUBARAK', '3.865', '18.740', '4477036', '288', '2017-02-10'),
(3, 'FANNY', '3.864', '18.739', '4477495', '293', '2017-01-10'),
(4, 'THEN MIAUW', '3.863', '18.738', '4477494', '288', '2017-01-10'),
(5, 'MARAH RASHANDY', '3.862', '18.737', '4477493', '288', '2017-01-10'),
(6, 'SUNARYA', '14.432', '19.303', '3480470', '281(1)UULAJ', '2017-02-17'),
(7, 'ADYTIA WAHYU', '16.698', '22.481', '4453020', '287(1)UULAJ', '2017-02-24'),
(8, 'PUTERA ADE', '16.699', '22.482', '4505780', '285(1)UULAJ', '2017-02-24'),
(9, 'RUSDY HIDAYAT', '16.700', '22.483', '4454340', '287(1)UULAJ', '2017-02-24'),
(10, 'ADI SUSANTO', '16.701', '22.484', '4454140', '287(1)UULAJ', '2017-02-24'),
(11, 'TIYAR', '16.702', '22.485', '4505800', '281(1)UULAJ', '2017-02-24'),
(12, 'ANDI SUPARTI', '16.703', '22.486', '4505820', '291(1)UULAJ', '2017-02-24'),
(13, 'ARDIANSYAH', '16.704', '22.487', '4505680', '287(1)UULAJ', '2017-02-24'),
(14, 'DARMAN', '16.705', '22.488', '4454810', '281(1)UULAJ', '2017-02-24'),
(15, 'AHDANAMINUDIN', '16.706', '22.489', '4452240', '291(1)UULAJ', '2017-02-24'),
(16, 'KAREND', '16.707', '22.490', '4454530', '287(1)UULAJ', '2017-02-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarnama`
--
ALTER TABLE `daftarnama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notilang` (`notilang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarnama`
--
ALTER TABLE `daftarnama`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
