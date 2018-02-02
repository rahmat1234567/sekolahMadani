-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2018 at 10:37 AM
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
  `id_abs` int(100) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(3) NOT NULL,
  PRIMARY KEY (`id_abs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_login` varchar(20) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp_adm` varchar(30) DEFAULT NULL,
  `alamat_adm` varchar(100) NOT NULL,
  `pass_login` varchar(100) NOT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_login`, `nama_adm`, `email`, `telp_adm`, `alamat_adm`, `pass_login`, `status_akun`, `jk`, `foto_adm`) VALUES
('1507112346', 'Rahmat Wibowo', 'rahmatwibowo66@gmail.com', '082381169597', 'Jl. Garuda Sakti Km 2', '16a30a734c46d35a6565fe576c8a5f9f', 1, 'L', ''),
('1507115285', 'Nidya Nur Syafiqoh', 'nidya.nursyafiqoh5285@student.unri.ac.id', '081311442407', 'Jl. Enau no. 389', '99138fcf1f8adf450c68e09c118d4f9d', 1, 'P', ''),
('1507115719', 'Lukmannil Hakim', 'lukmannil.hakim5719@student.unri.ac.id', '081371339605', 'Jl. Adi Sucipto Komplek Bangau no.17', '5a1f19006889410c9d7a2ca0e2cf6d76', 1, 'L', ''),
('1507123530', 'M. Muflih Fikri', 'muhammad.muflihfikrialazdi@student.unri.ac.id', '083167841065', 'Jl. Pendawalima Blok B no.37', 'bd596c423d62002e9734d49c5aeeb181', 1, 'L', '');

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
(99002, 'Cheerleader', 198503302003122002, 'Sabtu (15.30-17.30)', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` bigint(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pass_guru` varchar(100) NOT NULL,
  `alamat_guru` varchar(100) DEFAULT NULL,
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
(196106161984031007, 'Safrudin', '6ab4520232a7e9862e0ae1befebcd2b1', 'Jl. Bantul no.7', '081222909178', 10007, 1, 3, 'L', ''),
(196509112007011010, 'Daroni', 'af491529b1dd328d2ce21a0ad9700a5a', 'Jl. Jogjakarta no. 10', '081278455100', 10007, 0, 3, 'L', ''),
(197409162008012005, 'Nining Widuri', '00fa5751a3c4c8812ce5d8a29a6284da', 'Jl. Selamat no. 74', '089877191077', 10007, 1, 3, 'P', ''),
(198503302003122002, 'Riva Eka Putri', '7f15e383b9621dc01eee9c0506c56f67', 'JL. Kartama No. 27', '081324067905', 10003, 0, 3, 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(20) NOT NULL AUTO_INCREMENT,
  `hari` varchar(30) NOT NULL,
  `jam` time NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `id_kls` int(10) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `fk_jadwal_kls` (`id_kls`),
  KEY `fk_jadwal_matpel` (`id_matpel`),
  KEY `fk_jadwal_guru` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam`, `id_matpel`, `nip`, `id_kls`) VALUES
(1, '1', '07:00:00', 105, 197409162008012005, 10007001);

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
(10005001, 'VII-1', 0, 10005),
(10006001, 'VII-1', 0, 10006),
(10007001, 'VII-1', 0, 10007),
(10008001, 'VII-1', 0, 10008),
(10009001, 'VII-1', 0, 10009),
(10010001, 'VII-1', 0, 10010),
(10011001, 'VII-1', 0, 10011),
(10012001, 'VII-1', 0, 10012),
(10013001, 'VII-1', 0, 10013),
(10014001, 'VII-1', 0, 10014),
(10015001, 'VII-1', 0, 10015),
(10016001, 'VII-1', 0, 10016);

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(20) NOT NULL AUTO_INCREMENT,
  `nama_matpel` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`) VALUES
(101, 'Matematika'),
(102, 'Bahasa Indonesia'),
(103, 'Bahasa Inggris'),
(104, 'Fisika'),
(105, 'Kimia'),
(106, 'Seni Budaya'),
(107, 'Pendidikan Jasmani');

-- --------------------------------------------------------

--
-- Table structure for table `n_tugas`
--

CREATE TABLE IF NOT EXISTS `n_tugas` (
  `id_ntugas` int(20) NOT NULL AUTO_INCREMENT,
  `id_kls` int(10) NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_tugas` int(10) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ntugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ulanganharian`
--

CREATE TABLE IF NOT EXISTS `n_ulanganharian` (
  `id_nuh` int(20) NOT NULL AUTO_INCREMENT,
  `id_kls` int(10) NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_uh` int(10) NOT NULL,
  `ket_uh` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nuh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10017 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sklh`, `nama_sklh`, `alamat_sklh`, `telp_sklh`, `jmlh_siswa`) VALUES
(10001, 'SMP Negeri 1 Pekanbaru', 'Jl. Sultan Syarif Qasim 157', NULL, NULL),
(10002, 'SMP Negeri 2 Pekanbaru', 'Jl.Prof.M.Yamin SH No.65', NULL, NULL),
(10003, 'SMP Negeri 3 Pekanbaru', 'Jl. Dahlia No. 102', NULL, NULL),
(10004, 'SMP Negeri 4 Pekanbaru', 'Jl. Dr. Sutomo 110', NULL, NULL),
(10005, 'SMP Negeri 5 Pekanbaru', 'Jl. Sultan Syarif Qasim 155', NULL, NULL),
(10006, 'SMP Negeri 6 Pekanbaru', 'Jl. Camp Rumbai Km 2.5 Tipe VI Rumbai', NULL, NULL),
(10007, 'SMP Negeri 7 Pekanbaru', 'Jl. Lokomotif No.28', '(0761) 23979', NULL),
(10008, 'SMP Negeri 8 Pekanbaru', 'Jl.Adi Sucipto No.115', '(0761) 63745', NULL),
(10009, 'SMP Negeri 9 Pekanbaru', 'Jl. Imam Munandar No.398', '0819-9304-2010', NULL),
(10010, 'SMP Negeri 10 Pekanbaru', 'Jl. Dr. Sutomo No.108', '(0761) 35440', NULL),
(10011, 'SMP Negeri 11 Pekanbaru', 'Jl.Bambu Kuning No.28', '(0627) 6126458', NULL),
(10012, 'SMP Negeri 12 Pekanbaru', 'Jl. Guru Haji Sulaiman No.37', NULL, NULL),
(10013, 'SMP Negeri 13 Pekanbaru', 'Jl. Ronggowarsito I No. 15', '(0761) 21194', NULL),
(10014, 'SMP Negeri 14 Pekanbaru', 'Jl. Hang Tuah No.43', NULL, NULL),
(10015, 'SMP Negeri 15 Pekanbaru', 'Jl. Lembah Sari Rumbai Pesisir', NULL, NULL),
(10016, 'SMP Negeri 16 Pekanbaru', 'Jl. Cempaka Negeri 17', NULL, NULL);

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
('0023693536', 'Najwa Nurhumaidah', 'cb2147dca12f89ef8c4f9e5783456c64', 'Jl. Enau No. 389', 10013, 0, 'Drs. Multachdi M.Si', 'Dra. Agustina', 4, 'P', NULL, '', '081178965281'),
('9965589833', 'Ratna Puspa Nur Athariq', '1d2449c5a0164a01d3c01af5827316fd', 'Jl. Adi Sucipto Komplek Rajawali V no.13', 10008, 0, 'Yudi Apaya', NULL, 4, 'P', NULL, '', '085277781680'),
('9971848276', 'Ahmad Syukri', '1a067be8e9641193d9f8d4712a1d48c2', '', 0, 0, 'Bukhairi', 'Asni', 4, 'L', NULL, '', '081277828011'),
('9982583332', 'Rifdha Tambusai', 'f32369e992295b97337560732a2ab07d', '', 10035, 0, NULL, NULL, 4, 'P', NULL, '', '081910001866'),
('9990579707', 'Nurul Aini Supriyadi', '666ebf7600d770d789b01547700dd786', 'Jl. Adi Sucipto Komplek Bangau no.17', 10008, 0, 'Supriyadi Sukarna', 'Isbadria', 4, 'P', NULL, '', '081377081982');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123005 ;

--
-- Dumping data for table `staffit`
--

INSERT INTO `staffit` (`id_staffit`, `nama_staffit`, `pass_staffit`, `id_sklh`, `telp_staffit`, `alamat_staffit`, `status_akun`, `jk`, `foto_staffit`) VALUES
(123001, 'Muhammad Iqbal Nasution', 'fe34bd483a283bfa1331f5e65625553c', 10001, '085271667019', 'Jl. Pemuda No.11', 2, 'L', ''),
(123002, 'Fira Dwi Putri', 'bbc23ed229f45f4a0bf869441f3578b9', 10002, '087811818729', 'Jl. Kenanga No. 21', 2, 'P', ''),
(123003, 'Sani Ismanta', 'f3e22d3287391e82d6f6b017887359fd', 10007, '081171779007', 'Jl. Selamat no. 68', 2, 'L', ''),
(123004, 'Aryasih Banowati', '3e8d19b1246637afc543e201b1059b77', 10007, '081126379007', 'Jl. Jogjakarta no. 9', 2, 'P', '');

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
