-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 02:57 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_abs` int(100) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_login` varchar(20) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp_adm` varchar(30) DEFAULT NULL,
  `alamat_adm` varchar(100) NOT NULL,
  `pass_login` varchar(100) NOT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_adm` varchar(100) NOT NULL
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

CREATE TABLE `ekskul` (
  `id_ekskul` int(20) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `jadwal_ekskul` text NOT NULL,
  `id_sklh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `nip`, `jadwal_ekskul`, `id_sklh`) VALUES
(99001, 'Pramuka SMPN 3 Pekanbaru', 198503302003122002, 'Sabtu (15.30-17.30)', 10003),
(99002, 'Futsal Spansa', 197702152008011008, 'Sabtu (15.30-17.30)', 10001),
(99003, 'Basket Putri SMPN 2 Pekanbaru', 197004252005012011, 'Senin (16.00-17.30)', 10002),
(99004, 'Drum Band SpanFour', 196910182007012014, 'Selasa (15.30-17.30)', 10004),
(99005, 'Pencak Silat SMPN 5 Pekanbaru', 196701172006041005, 'Rabu (16.00-17.30)', 10005),
(99006, 'Passus SMPN 6 Pekanbaru', 197004132008011009, 'Kamis & Jumat (16.00-17.30)', 10006),
(99007, 'Sanggar Tari SMPN 7 Pekanbaru', 197409162008012005, 'Minggu (10.00-12.00)', 10007),
(99008, 'Palang Merah Remaja SMPN 8 Pekanbaru', 196701171998022004, 'Senin (16.00-17.30)', 10008),
(99009, 'Drum Band SMPN 9 Pekanbaru', 197409052005012002, 'Selasa (16.00-17.30)', 10009),
(99010, 'Pramuka SMPN 10 Pekanbaru', 197007122001122001, 'Rabu & Kamis (16.00-17.30)', 10010),
(99011, 'Sepakbola SMPN 11 Pekanbaru', 197008221998021002, 'Jumat (16.00-17.30)', 10011),
(99012, 'Basket Spandubel', 197105101993031005, 'Sabtu (13.30-15.30)', 10012),
(99013, 'Drum Band Spantibel', 195703101980031017, 'Sabtu-Minggu (13.30-15.30)', 10013),
(99014, 'Pramuka SMPN 14 Pekanbaru', 196111081981122003, 'Sabtu-Minggu (13.00-15.30)', 10014),
(99015, 'Volley SMPN 15 Pekanbaru', 195906111980032006, 'Rabu (15.30-17.30)', 10015),
(99016, 'Basket Putra SMPN 16 Pekanbaru', 196103031987031011, 'Kamis & Sabtu (15.30-17.30)', 10016);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` bigint(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pass_guru` varchar(100) NOT NULL,
  `alamat_guru` varchar(100) DEFAULT NULL,
  `telp_guru` varchar(20) DEFAULT NULL,
  `id_sklh` int(20) DEFAULT NULL,
  `wk_status` int(2) NOT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `pass_guru`, `alamat_guru`, `telp_guru`, `id_sklh`, `wk_status`, `status_akun`, `jk`, `foto_guru`) VALUES
(195703101980031017, 'Sumadiyono', 'b066ac44e26c7e25fd453574ca51ac10', 'Jl. Kartika Indah BTN BRP Blok G 8', '081805314580', 10013, 1, 3, 'L', ''),
(195906111980032006, 'Indrawati Abdullah', '0d5cfdf5f9a6d8096303a2e10e77f5f4', 'Jl. Pemuda no.19', '0817470018', 10015, 1, 3, 'P', ''),
(196103031987031011, 'Gede Erawan', 'b57b4c9a6b03d41130274b23cb4615e0', 'Jl. Melur no.77', '085237616542', 10016, 0, 3, 'L', ''),
(196106161984031007, 'Safrudin', '6ab4520232a7e9862e0ae1befebcd2b1', 'Jl. Bantul no.7', '081222909178', 10007, 1, 3, 'L', ''),
(196111081981122003, 'Rita Nurmaya', '31d58ca605fa973b82807d1710b81dba', 'Jl. Pepaya no. 34', '081805539392', 10014, 1, 3, 'P', ''),
(196509112007011010, 'Daroni', 'af491529b1dd328d2ce21a0ad9700a5a', 'Jl. Jogjakarta no. 10', '081278455100', 10007, 0, 3, 'L', ''),
(196701171998022004, 'Heppy Anggaryani Sri Wilujeng', '08c792faafa5e1e079cbdff4389c2d3a', 'Jl. Rajawali Sakti Ujung no. 308', '081121909132', 10008, 1, 3, 'P', ''),
(196701172006041005, 'Hartono', '621a88d504c502176603a62ed2b17d48', 'Jl. Melur 3 no. 2', '085271777653', 10005, 0, 3, 'L', ''),
(196910182007012014, 'Tin Rahayu Wigianti', 'd42e1ee1c3524c704e52c8c5a4c3f603', 'Jl. Subayang Gg. Buntu II no. 73', '081311217073', 10004, 1, 3, 'P', ''),
(197004132008011009, 'Agus Suyadi', '2710e848c5df278047646b11f614c7db', 'Jl. Cipta Karya, gg. Belatuk, Tuah Karya', '085382831010', 10006, 1, 3, 'L', ''),
(197004252005012011, 'Endah Saraswati', '4b921e013acf7f2b7417329273274c98', 'Jl. Tanjung Gg. Abadi no. 120', '081900701923', 10002, 0, 3, 'P', ''),
(197007122001122001, 'Sunarningsih', 'b3c22dc81b88534c80b17d680ec64e02', 'Jl. Jambu Ujung no. 9A', '081220310021', 10010, 0, 3, 'P', ''),
(197008221998021002, 'Agust Winarno', '468ae8215164d6cc851fe0215d380cae', 'Jl. Giam Gg. Kapur II A no. 73', '087871778090', 10011, 1, 3, 'L', ''),
(197105101993031005, 'Arif Saifudin', 'fddca158a400eed5f430ad2cf57664f8', 'Jl. Utama no.50', '081390992810', 10012, 0, 3, 'L', ''),
(197409052005012002, 'Ni Made Cahyani', 'c9ccc376de5e025f1e226b293e0bc650', 'Jl. Siak no.38 B', '085320718865', 10009, 1, 3, 'P', ''),
(197409162008012005, 'Nining Widuri', '00fa5751a3c4c8812ce5d8a29a6284da', 'Jl. Selamat no. 74', '089877191077', 10007, 1, 3, 'P', ''),
(197702152008011008, 'Sapto Winarno', '6053bd0cf0d3bf4b65d41fe341903759', 'Jl. Sumatera no.20', '081253557178', 10001, 1, 3, 'L', ''),
(198503302003122002, 'Riva Eka Putri', '7f15e383b9621dc01eee9c0506c56f67', 'JL. Kartama No. 27', '081324067905', 10003, 0, 3, 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jam` time NOT NULL,
  `id_matpel` int(20) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `id_kls` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam`, `id_matpel`, `nip`, `id_kls`) VALUES
(1, '1', '07:00:00', 105, 197409162008012005, 10007001),
(2, '3', '10:00:00', 101, 196701171998022004, 10008002),
(3, '2', '13:00:00', 101, 196701171998022004, 10008001),
(4, '4', '07:00:00', 101, 196701171998022004, 10008003);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kls` int(10) NOT NULL,
  `nama_kls` varchar(30) NOT NULL,
  `id_wk` int(10) NOT NULL,
  `id_sklh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kls`, `nama_kls`, `id_wk`, `id_sklh`) VALUES
(10001001, 'VII', 0, 10001),
(10001002, 'VIII', 0, 10001),
(10001003, 'IX', 0, 10001),
(10002001, 'VII', 0, 10002),
(10002002, 'VIII', 0, 10002),
(10002003, 'IX', 0, 10002),
(10003001, 'VII', 0, 10003),
(10003002, 'VIII', 0, 10003),
(10003003, 'IX', 0, 10003),
(10004001, 'VII', 0, 10004),
(10004002, 'VIII', 0, 10004),
(10004003, 'IX', 0, 10004),
(10005001, 'VII', 0, 10005),
(10005002, 'VIII', 0, 10005),
(10005003, 'IX', 0, 10005),
(10006001, 'VII', 0, 10006),
(10006002, 'VIII', 0, 10006),
(10006003, 'IX', 0, 10006),
(10007001, 'VII', 0, 10007),
(10007002, 'VIII', 0, 10007),
(10007003, 'IX', 0, 10007),
(10008001, 'VII', 0, 10008),
(10008002, 'VIII', 0, 10008),
(10008003, 'IX', 0, 10008),
(10009001, 'VII', 0, 10009),
(10009002, 'VIII', 0, 10009),
(10009003, 'IX', 0, 10009),
(10010001, 'VII', 0, 10010),
(10010002, 'VIII', 0, 10010),
(10010003, 'IX', 0, 10010),
(10011001, 'VII', 0, 10011),
(10011002, 'VIII', 0, 10011),
(10011003, 'IX', 0, 10011),
(10012001, 'VII', 0, 10012),
(10012002, 'VIII', 0, 10012),
(10012003, 'IX', 0, 10012),
(10013001, 'VII', 0, 10013),
(10013002, 'VIII', 0, 10013),
(10013003, 'IX', 0, 10013),
(10014001, 'VII', 0, 10014),
(10014002, 'VIII', 0, 10014),
(10014003, 'IX', 0, 10014),
(10015001, 'VII', 0, 10015),
(10015002, 'VIII', 0, 10015),
(10015003, 'IX', 0, 10015),
(10016001, 'VII', 0, 10016),
(10016002, 'VIII', 0, 10016),
(10016003, 'IX', 0, 10016);

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `id_matpel` int(20) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `n_tugas` (
  `id_ntugas` int(20) NOT NULL,
  `id_jadwal` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_tugas` int(10) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `id_kls` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_tugas`
--

INSERT INTO `n_tugas` (`id_ntugas`, `id_jadwal`, `nisn`, `nilai_tugas`, `ket`, `nama_tugas`, `id_kls`) VALUES
(1, 1, '9990579707', 90, '-', 'PR Trigonometri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_ulanganharian`
--

CREATE TABLE `n_ulanganharian` (
  `id_nuh` int(20) NOT NULL,
  `id_jadwal` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `nilai_uh1` int(10) NOT NULL,
  `nilai_uh2` int(10) NOT NULL,
  `nilai_uh3` int(10) NOT NULL,
  `nilai_uh4` int(10) NOT NULL,
  `nilai_uh5` int(10) NOT NULL,
  `nilai_uh6` int(10) NOT NULL,
  `nilai_uh7` int(10) NOT NULL,
  `nilai_uh8` int(10) NOT NULL,
  `ket_uh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_ulanganharian`
--

INSERT INTO `n_ulanganharian` (`id_nuh`, `id_jadwal`, `nisn`, `id_kls`, `nilai_uh1`, `nilai_uh2`, `nilai_uh3`, `nilai_uh4`, `nilai_uh5`, `nilai_uh6`, `nilai_uh7`, `nilai_uh8`, `ket_uh`) VALUES
(1, 1, '9965589833', 0, 95, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sklh` int(20) NOT NULL,
  `nama_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) DEFAULT NULL,
  `telp_sklh` varchar(50) DEFAULT NULL,
  `jmlh_siswa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(10016, 'SMP Negeri 16 Pekanbaru', 'Jl. Cempaka Negeri 17', NULL, NULL),
(10018, 'smp ada ajah', 'siak', '0823516374858', 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
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
  `telp_ortu` varchar(50) NOT NULL
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

CREATE TABLE `staffit` (
  `id_staffit` int(30) NOT NULL,
  `nama_staffit` varchar(50) NOT NULL,
  `pass_staffit` varchar(100) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `telp_staffit` varchar(20) DEFAULT NULL,
  `alamat_staffit` varchar(100) DEFAULT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_staffit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffit`
--

INSERT INTO `staffit` (`id_staffit`, `nama_staffit`, `pass_staffit`, `id_sklh`, `telp_staffit`, `alamat_staffit`, `status_akun`, `jk`, `foto_staffit`) VALUES
(123001, 'Muhammad Iqbal Nasution', 'fe34bd483a283bfa1331f5e65625553c', 10001, '085271667019', 'Jl. Pemuda No.11', 2, 'L', ''),
(123002, 'Fira Dwi Putri', 'bbc23ed229f45f4a0bf869441f3578b9', 10002, '087811818729', 'Jl. Kenanga No. 21', 2, 'P', ''),
(123003, 'Sani Ismanta', 'f3e22d3287391e82d6f6b017887359fd', 10007, '081171779007', 'Jl. Selamat no. 68', 2, 'L', ''),
(123004, 'Aryasih Banowati', '3e8d19b1246637afc543e201b1059b77', 10007, '081126379007', 'Jl. Jogjakarta no. 9', 2, 'P', ''),
(123005, 'Abu Hurairah', '8616a99c38252281690dcdb90006e261', 10016, '081276807301', 'Jl. Cipta Karya Ujung no.1', 2, 'L', ''),
(123006, 'Bedjo', 'e1bb9607c4c629f2efeed7cb98418fa1', 10003, '081365789533', 'Jl. Suka Karya (Kualu) no. 68 D, Panam', 2, 'L', ''),
(123007, 'Djoko Riyanto', '971773ab3dc541ff47818a5dd92b0ffe', 10004, '081223537108', 'Jl. Nanas no. 102', 2, 'L', ''),
(123008, 'Eko Purwanto', 'b047304e65854754025c5803f5a797d4', 10005, '082321778980', 'Jl. Serayu gg. Serayu II no. 2', 2, 'L', ''),
(123009, 'Kandar Hariyadi', '0489c929161a22d12d5b6ef5f75b77de', 10006, '082271789099', 'Jl. HR. Soebrantas km 9, Panam', 2, 'L', ''),
(123010, 'Kusnandar', 'a24fcc366e495f2e746b0b6630add76e', 10008, '087876102634', 'Jl. Riau no. 149 F', 2, 'L', ''),
(123011, 'Natalia Mundayani', '7f86d88701034c600c10c7771dc86b56', 10009, '082128980019', 'Jl. Kakap II Gg. Filosofi no. 10', 2, 'P', ''),
(123012, 'Ralin Suhayati', 'bcd3b9ca986faaffb07dc3bbb1b78da6', 10010, '081278890123', 'Jl. Mawar no. 88', 2, 'P', ''),
(123013, 'Ratna Tri Setyo Dewi', 'a97366ce5082518a56bdb10d8f08e2fd', 10011, '081266168544', 'Jl. Bandeng no. 117', 2, 'P', ''),
(123014, 'Bambang Setiyono', '0ba44d8b332f02f1935175344a0d7955', 10012, '082322189017', 'Jl. Neraca no. 27', 2, 'L', ''),
(123015, 'Dumaria Pasaribu', '7541af23024cd2645b8cb8cd725b26da', 10013, '081388733710', 'Jl. Angkasa gg. Raya no. 77 B', 2, 'P', ''),
(123016, 'Edi Budi Kristanto', '99b6ec62c46c715e4dcb2861e1818339', 10014, '081621887650', 'Jl. Nelayan no. 101', 2, 'L', ''),
(123017, 'Siti Kylie Jenner', 'e7cc9826af044c5243dcc2daffcd0a28', 10015, '085355745800', 'Jl. Ronggo Warsito II no. 5', 2, 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id_wk` int(10) NOT NULL,
  `nip` bigint(10) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `id_sklh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id_wk`, `nip`, `id_kls`, `id_sklh`) VALUES
(55001, 196701171998022004, 10008001, 10008),
(55002, 197702152008011008, 10001003, 10001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_abs`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `fk_jadwal_kls` (`id_kls`),
  ADD KEY `fk_jadwal_matpel` (`id_matpel`),
  ADD KEY `fk_jadwal_guru` (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kls`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `n_tugas`
--
ALTER TABLE `n_tugas`
  ADD PRIMARY KEY (`id_ntugas`);

--
-- Indexes for table `n_ulanganharian`
--
ALTER TABLE `n_ulanganharian`
  ADD PRIMARY KEY (`id_nuh`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sklh`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `staffit`
--
ALTER TABLE `staffit`
  ADD PRIMARY KEY (`id_staffit`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_wk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99017;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
  MODIFY `id_matpel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `n_tugas`
--
ALTER TABLE `n_tugas`
  MODIFY `id_ntugas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `n_ulanganharian`
--
ALTER TABLE `n_ulanganharian`
  MODIFY `id_nuh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sklh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10019;
--
-- AUTO_INCREMENT for table `staffit`
--
ALTER TABLE `staffit`
  MODIFY `id_staffit` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123018;
--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_wk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
