-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2018 at 10:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolahsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_login` varchar(30) NOT NULL,
  `pass_login` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_login`, `pass_login`, `level`) VALUES
('1507112346', '16a30a734c46d35a6565fe576c8a5f9f', 1),
('1507115285', '99138fcf1f8adf450c68e09c118d4f9d', 1),
('1507115719', '5a1f19006889410c9d7a2ca0e2cf6d76', 1),
('1507123530', 'bd596c423d62002e9734d49c5aeeb181', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pass_guru` varchar(50) NOT NULL,
  `alamat_guru` varchar(50) DEFAULT NULL,
  `telp_guru` varchar(20) DEFAULT NULL,
  `id_sklh` int(50) DEFAULT NULL,
  `wk_status` int(2) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--


-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(50) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL,
  `id_kls` int(10) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel`
--


-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sklh` int(20) NOT NULL,
  `nama_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) DEFAULT NULL,
  `telp_sklh` varchar(20) DEFAULT NULL,
  `jml_siswa` int(10) NOT NULL,
  PRIMARY KEY (`id_sklh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--


-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(30) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `pass_siswa` varchar(50) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--


-- --------------------------------------------------------

--
-- Table structure for table `staffit`
--

CREATE TABLE IF NOT EXISTS `staffit` (
  `id_staffit` int(30) NOT NULL,
  `nama_staffit` varchar(50) NOT NULL,
  `pass_staffit` varchar(50) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `telp_staffit` varchar(20) DEFAULT NULL,
  `alamat_staffit` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_staffit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffit`
--

