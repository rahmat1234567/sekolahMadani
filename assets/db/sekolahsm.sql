-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2018 at 03:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolahsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_abs` int(100) NOT NULL AUTO_INCREMENT,
  `id_kls` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(3) NOT NULL,
  PRIMARY KEY (`id_abs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_login` varchar(20) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp_adm` varchar(30) DEFAULT NULL,
  `pass_login` varchar(100) NOT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_login`, `nama_adm`, `email`, `telp_adm`, `pass_login`, `status_akun`, `jk`, `foto_adm`) VALUES
('1507112346', 'Rahmat Wibowo', 'rahmatwibowo66@gmail.com', '082381169597', '16a30a734c46d35a6565fe576c8a5f9f', 1, 'L', ''),
('1507115285', 'Nidya Nur Syafiqoh', 'nidya.nursyafiqoh5285@student.unri.ac.id', '081311442407', '99138fcf1f8adf450c68e09c118d4f9d', 1, 'P', ''),
('1507115719', 'Lukmannil Hakim', 'lukmannil.hakim5719@student.unri.ac.id', '081371339605', '5a1f19006889410c9d7a2ca0e2cf6d76', 1, 'L', ''),
('1507123530', 'M. Muflih Fikri', 'muhammad.muflihfikrialazdi@student.unri.ac.id', '083167841065', 'bd596c423d62002e9734d49c5aeeb181', 1, 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE IF NOT EXISTS `ekskul` (
  `id_ekskul` int(20) NOT NULL AUTO_INCREMENT,
  `nama_ekskul` varchar(100) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `jadwal_ekskul` text NOT NULL,
  `id_sklh` int(20) NOT NULL,
  PRIMARY KEY (`id_ekskul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99003 ;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `nip`, `jadwal_ekskul`, `id_sklh`) VALUES
(99001, 'Basket', 198503302003122002, 'Sabtu(15.30-17.30)', 10003),
(99002, 'Cheerleader', 198503302003122002, 'Sabtu (15.30-17.30)', 10003);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` bigint(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pass_guru` varchar(100) NOT NULL,
  `alamat_guru` varchar(50) DEFAULT NULL,
  `telp_guru` varchar(20) DEFAULT NULL,
  `id_sklh` int(20) DEFAULT NULL,
  `wk_status` int(2) NOT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_guru` varchar(100) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `pass_guru`, `alamat_guru`, `telp_guru`, `id_sklh`, `wk_status`, `status_akun`, `jk`, `foto_guru`) VALUES
(198503302003122002, 'Riva Eka Putri', '7f15e383b9621dc01eee9c0506c56f67', 'JL. Kartama No. 27', '081324067905', 10003, 0, 3, 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `id_kls` int(10) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `fk_jadwal_kls` (`id_kls`),
  KEY `fk_jadwal_matpel` (`id_matpel`),
  KEY `fk_jadwal_guru` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kls` int(10) NOT NULL,
  `nama_kls` varchar(30) NOT NULL,
  `id_wk` int(10) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  PRIMARY KEY (`id_kls`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kls`, `nama_kls`, `id_wk`, `id_sklh`) VALUES
(10001001, 'VII-1', 0, 10001),
(10002001, 'VII-1', 0, 10002),
(10003001, 'VII-1', 0, 10003),
(10004001, 'VII-1', 0, 10004),
(10005001, 'VII-1', 0, 10005);

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(20) NOT NULL AUTO_INCREMENT,
  `nama_matpel` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Fisika'),
(5, 'Kimia'),
(6, 'Seni Budaya'),
(7, 'Pendidikan Jasmani');

-- --------------------------------------------------------

--
-- Table structure for table `n_tugas`
--

CREATE TABLE IF NOT EXISTS `n_tugas` (
  `id_ntugas` int(20) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_tugas` int(10) NOT NULL,
  `ket` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ntugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `n_ulanganharian`
--

CREATE TABLE IF NOT EXISTS `n_ulanganharian` (
  `id_nuh` int(20) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_uh` int(10) NOT NULL,
  PRIMARY KEY (`id_nuh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sklh` int(20) NOT NULL AUTO_INCREMENT,
  `nama_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) DEFAULT NULL,
  `telp_sklh` varchar(50) DEFAULT NULL,
  `jmlh_siswa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_sklh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10006 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sklh`, `nama_sklh`, `alamat_sklh`, `telp_sklh`, `jmlh_siswa`) VALUES
(10001, 'SMP Negeri 1 Pekanbaru', 'Jl. Sultan Syarif Qasim 157', NULL, NULL),
(10002, 'SMP Negeri 2 Pekanbaru', 'Jl.Prof.M.Yamin SH No.65', NULL, NULL),
(10003, 'SMP Negeri 3 Pekanbaru', 'Jl. Dahlia No. 102', NULL, NULL),
(10004, 'SMP Negeri 4 Pekanbaru', 'Jl. Dr. Sutomo 110', NULL, NULL),
(10005, 'SMP Negeri 5 Pekanbaru', 'Jl. Sultan Syarif Qasim 155', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(30) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `pass_siswa` varchar(100) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `id_ekskul` int(20) DEFAULT NULL,
  `foto_siswa` varchar(100) NOT NULL,
  `telp_ortu` varchar(50) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `pass_siswa`, `alamat_siswa`, `id_sklh`, `id_kls`, `nama_ayah`, `nama_ibu`, `status_akun`, `jk`, `id_ekskul`, `foto_siswa`, `telp_ortu`) VALUES
('0023693536', 'Najwa Nurhumaidah', 'cb2147dca12f89ef8c4f9e5783456c64', 'Jl. Enau No. 389', 0, 0, 'Drs. Multachdi M.Si', 'Dra. Agustina', 4, 'P', NULL, '', '081178965281');

-- --------------------------------------------------------

--
-- Table structure for table `staffit`
--

CREATE TABLE IF NOT EXISTS `staffit` (
  `id_staffit` int(30) NOT NULL AUTO_INCREMENT,
  `nama_staffit` varchar(50) NOT NULL,
  `pass_staffit` varchar(100) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `telp_staffit` varchar(20) DEFAULT NULL,
  `alamat_staffit` varchar(100) DEFAULT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_staffit` varchar(100) NOT NULL,
  PRIMARY KEY (`id_staffit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123003 ;

--
-- Dumping data for table `staffit`
--

INSERT INTO `staffit` (`id_staffit`, `nama_staffit`, `pass_staffit`, `id_sklh`, `telp_staffit`, `alamat_staffit`, `status_akun`, `jk`, `foto_staffit`) VALUES
(123001, 'Muhammad Iqbal Nasution', 'fe34bd483a283bfa1331f5e65625553c', 10001, '085271667019', 'Jl. Pemuda No.11', 2, 'L', ''),
(123002, 'Fira Dwi Putri', 'bbc23ed229f45f4a0bf869441f3578b9', 10002, '087811818729', 'Jl. Kenanga No. 21', 2, 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE IF NOT EXISTS `walikelas` (
  `id_wk` int(10) NOT NULL,
  `nip` bigint(10) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  PRIMARY KEY (`id_wk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
