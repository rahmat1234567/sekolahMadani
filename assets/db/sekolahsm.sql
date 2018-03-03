-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 11:03 AM
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
  `email_adm` varchar(50) DEFAULT NULL,
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

INSERT INTO `admin` (`id_login`, `nama_adm`, `email_adm`, `telp_adm`, `alamat_adm`, `pass_login`, `status_akun`, `jk`, `foto_adm`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99017 ;

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
-- Table structure for table `enc`
--

CREATE TABLE IF NOT EXISTS `enc` (
  `encr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enc`
--

INSERT INTO `enc` (`encr`) VALUES
('e98c0e57789c713abe6fadf2c6136737');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lok` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lok` text,
  `lng` varchar(100) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_lok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `id_jadwal` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nilai_tugas` int(10) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `id_kls` int(10) NOT NULL,
  PRIMARY KEY (`id_ntugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_tugas`
--

INSERT INTO `n_tugas` (`id_ntugas`, `id_jadwal`, `nisn`, `nilai_tugas`, `ket`, `nama_tugas`, `id_kls`) VALUES
(1, 1, '9990579707', 90, '-', 'PR Trigonometri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_ulanganharian`
--

CREATE TABLE IF NOT EXISTS `n_ulanganharian` (
  `id_nuh` int(20) NOT NULL AUTO_INCREMENT,
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
  `ket_uh` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nuh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_ulanganharian`
--

INSERT INTO `n_ulanganharian` (`id_nuh`, `id_jadwal`, `nisn`, `id_kls`, `nilai_uh1`, `nilai_uh2`, `nilai_uh3`, `nilai_uh4`, `nilai_uh5`, `nilai_uh6`, `nilai_uh7`, `nilai_uh8`, `ket_uh`) VALUES
(1, 1, '9965589833', 0, 95, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nik` int(30) NOT NULL AUTO_INCREMENT,
  `nama_pgw` varchar(50) NOT NULL,
  `pass_pgw` varchar(100) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  `telp_pgw` varchar(20) DEFAULT NULL,
  `alamat_pgw` varchar(100) DEFAULT NULL,
  `status_akun` int(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `foto_pgw` varchar(100) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123018 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama_pgw`, `pass_pgw`, `id_sklh`, `telp_pgw`, `alamat_pgw`, `status_akun`, `jk`, `foto_pgw`) VALUES
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
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sklh` int(20) NOT NULL AUTO_INCREMENT,
  `nama_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) DEFAULT NULL,
  `telp_sklh` varchar(50) DEFAULT NULL,
  `email_sklh` varchar(100) NOT NULL,
  `jmlh_siswa` int(10) DEFAULT NULL,
  `id_lok` int(10) NOT NULL,
  `luas_sklh` int(20) NOT NULL,
  `jmlh_ruang_kls` int(10) NOT NULL,
  `laboratorium` varchar(2) NOT NULL,
  `musholla` varchar(2) NOT NULL,
  `aula` varchar(2) NOT NULL,
  `perpustakaan` varchar(2) NOT NULL,
  `lap_basket` varchar(2) NOT NULL,
  `lap_sepakbola` varchar(2) NOT NULL,
  PRIMARY KEY (`id_sklh`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10045 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sklh`, `nama_sklh`, `alamat_sklh`, `telp_sklh`, `email_sklh`, `jmlh_siswa`, `id_lok`, `luas_sklh`, `jmlh_ruang_kls`, `laboratorium`, `musholla`, `aula`, `perpustakaan`, `lap_basket`, `lap_sepakbola`) VALUES
(10001, 'SMP Negeri 1 Pekanbaru', 'Jl. Sultan Syarif Qasim 157', '(0761) 23098', 'smpnsatoepekanbaroe@yahoo.com', 756, 0, 4200, 19, '1', '1', '', '1', '', ''),
(10002, 'SMP Negeri 2 Pekanbaru', 'Jl.Prof.M.Yamin SH No.65', '(0761) 21461', 'smpn2pekanbaru@yahoo.com', 569, 0, 2230, 12, '1', '', '', '1', '', ''),
(10003, 'SMP Negeri 3 Pekanbaru', 'Jl. Dahlia No. 102', '(0761) 22485', 'smpn3pku@gmail.com', 592, 0, 2307, 15, '1', '', '', '1', '', ''),
(10004, 'SMP Negeri 4 Pekanbaru', 'Jl. Dr. Sutomo 110', '(0761) 21085', 'smpn4pku@yahoo.co.id', 1009, 0, 10930, 29, '1', '', '', '1', '', ''),
(10005, 'SMP Negeri 5 Pekanbaru', 'Jl. Sultan Syarif Qasim 155', '(0761) 23395', 'smpnegeri5pekanbaru@gmail.com', 852, 0, 6830, 23, '1', '', '', '1', '', ''),
(10006, 'SMP Negeri 6 Pekanbaru', 'Jl. Camp Rumbai Km 2.5 Tipe VI Rumbai', '(0761) 53335', 'smpnegeri6pekanbaru@gmail.com', 1019, 0, 39000, 34, '1', '', '', '1', '', ''),
(10007, 'SMP Negeri 7 Pekanbaru', 'Jl. Lokomotif No.28', '(0761) 23979', 'smp_7pku@yahoo.com', 644, 0, 6435, 15, '1', '', '', '1', '', ''),
(10008, 'SMP Negeri 8 Pekanbaru', 'Jl.Adi Sucipto No.115', '(0761) 63745', 'smpn8pekanbaru@gmail.com', 1136, 0, 14650, 30, '1', '', '', '1', '', ''),
(10009, 'SMP Negeri 9 Pekanbaru', 'Jl. Imam Munandar No.398', '(0761) 27332', 'smpnegeri9.pku@gmail.com', 1256, 0, 16345, 27, '1', '', '', '1', '', ''),
(10010, 'SMP Negeri 10 Pekanbaru', 'Jl. Dr. Sutomo No.108', '(0761) 35440', 'smpn10pku@gmail.com', 1024, 0, 6515, 27, '1', '', '', '1', '', ''),
(10011, 'SMP Negeri 11 Pekanbaru', 'Jl.Bambu Kuning No.28', '(0761) 26458', 'smpn11pku@yahoo.com', 768, 0, 9207, 24, '1', '', '', '0', '', ''),
(10012, 'SMP Negeri 12 Pekanbaru', 'Jl. Guru Haji Sulaiman No.37', '(0761) 26346', 'smpn12pekanbaru@gmail.com', 891, 0, 60000, 24, '1', '', '', '1', '', ''),
(10013, 'SMP Negeri 13 Pekanbaru', 'Jl. Ronggowarsito I No. 15', '(0761) 21194', 'smpn13pku@yahoo.com', 1194, 0, 20000, 30, '1', '', '', '1', '', ''),
(10014, 'SMP Negeri 14 Pekanbaru', 'Jl. Hang Tuah No.43', '(0761) 21224', 'risti.yenti@yahoo.co.id', 828, 0, 9360, 12, '1', '', '', '1', '', ''),
(10015, 'SMP Negeri 15 Pekanbaru', 'Jl. Lembah Sari Rumbai Pesisir', '(0761) 52304', 'smpn15pekanbaru@gmail.com', 728, 0, 10000, 21, '1', '', '', '1', '', ''),
(10016, 'SMP Negeri 16 Pekanbaru', 'Jl. Cempaka Negeri 17', '(0761) 26329', 'smpenambelaspku@gmail.com', 712, 0, 3102, 19, '0', '', '', '1', '', ''),
(10017, 'SMP Negeri 17 Pekanbaru', 'Jl. Balam Ujung No. 21', '(0761) 33880', 'smpn17pekanbaru@gmail.com', 630, 0, 6940, 14, '1', '', '', '1', '', ''),
(10018, 'SMP Negeri 18 Pekanbaru', 'Jl. Lili I No. 95', '(0761) 26442', 'smpn.18.pku@gmail.com', 670, 0, 5720, 18, '1', '', '', '1', '', ''),
(10019, 'SMP Negeri 19 Pekanbaru', 'Jl. Yos Sudarso Km 18', '', 'SMP19-Pku@yahoo.co.id', 399, 0, 10000, 12, '1', '', '', '1', '', ''),
(10020, 'SMP Negeri 20 Pekanbaru', 'Jl. Abadi No. 9', '(0761) 61063', 'SMPN20PEKANBARU@GMAIL.COM', 1082, 0, 9395, 27, '1', '', '', '1', '', ''),
(10021, 'SMP Negeri 21 Pekanbaru', 'Jl. Soekarno Hatta No, 639', '(0761) 63521', 'smpn21pekanbaru@yahoo.co.id', 1087, 0, 17792, 28, '1', '', '', '1', '', ''),
(10022, 'SMP Negeri 22 Pekanbaru', 'Jl. Sidodadi No. 32', '(0761) 28475', 'smpn22_pbr@telkom.net', 859, 0, 2500, 25, '1', '', '', '1', '', ''),
(10023, 'SMP Negeri 23 Pekanbaru', 'Jl. Garuda Sakti Km. 3', '(0761) 7875384', 'smpnegeri23pekanbaru@yahoo.com', 1051, 0, 11495, 27, '1', '', '', '1', '', ''),
(10024, 'SMP Negeri 24 Pekanbaru', 'Jl. Sri Amanah, Rumbai Bukit', NULL, 'smpn24_pekanbaru@yahoo.co.id', 579, 0, 20350, 15, '1', '', '', '1', '', ''),
(10025, 'SMP Negeri 25 Pekanbaru', 'Jl. Kartama, Maharatu', '(0761) 562804', 'smpnegeri25.pku@gmail.com', 1100, 0, 10000, 29, '1', '', '', '1', '', ''),
(10026, 'SMP Negeri 26 Pekanbaru', 'Jl. Kenanga, Sail', '(0761) 7872388', 'smp26pekanbaru@yahoo.co.id', 734, 0, 1000, 22, '1', '', '', '1', '', ''),
(10027, 'SMP Negeri 27 Pekanbaru', 'Jl. Nelayan No. 221', NULL, 'smpn27.pku@gmail.com', 502, 0, 2200, 10, '1', '', '', '1', '', ''),
(10028, 'SMP Negeri 28 Pekanbaru', 'Jl. Raja Panjang Okura', '(0761) 7000348', 'dualapans@yahoo.co.id', 136, 0, 9570, 6, '1', '', '', '0', '', ''),
(10029, 'SMP Negeri 29 Pekanbaru', 'Jl. Tegal Sari, Umban Sari', '(0761) 53657', 'smpn29pekanbaru@gmail.com', 642, 0, 2652, 10, '1', '', '', '1', '', ''),
(10030, 'SMP Negeri 30 Pekanbaru', 'Jl. Kelly Raya, Limbungan Baru', '(0761) 51478', 'smpn30_pku@yahoo.co.id', 685, 0, 2665, 15, '1', '', '', '1', '', ''),
(10031, 'SMP Negeri 31 Pekanbaru', 'Jl. Bencah Basung, Sail', '(0761) 7770925', 'smpn31pku@gmail.com', 298, 0, 4320, 9, '1', '', '', '0', '', ''),
(10032, 'SMP Negeri 32 Pekanbaru', 'Jl. Balam No. 18', '(0761) 572743', 'smpnegeri32pekanbaru@yahoo.co.id', 632, 0, 10020, 13, '1', '', '', '1', '', ''),
(10033, 'SMP Negeri 33 Pekanbaru', 'Jl. Sidorukun Ujung', NULL, 'smpn33pekanbaru@yahoo.com', 454, 0, 9907, 9, '0', '', '', '1', '', ''),
(10034, 'SMP Negeri 34 Pekanbaru', 'Jl. Kartama No. 68', '(0761) 56243', 'www.spantipat34@yahoo.com', 644, 0, 15000, 11, '0', '', '', '1', '', ''),
(10035, 'SMP Negeri 35 Pekanbaru', 'Jl. T. Bey / Reformasi II', '(0761) 787600', 'spantimapekanbaru@yahoo.co.id', 771, 0, 7500, 20, '1', '', '', '1', '', ''),
(10036, 'SMP Negeri 36 Pekanbaru', 'Jl. Repelita I, Tampan', '(0761) 880629', 'SMPN36PEKANBARU.RIAU@GMAIL.COM', 485, 0, 2000, 11, '0', '', '', '0', '', ''),
(10037, 'SMP Negeri 37 Pekanbaru', 'Jl. Garuda, Tangkerang Tengah', NULL, 'smpn37pku@gmail.com', 628, 0, 9900, 11, '0', '', '', '0', '', ''),
(10038, 'SMP Negeri 38 Pekanbaru', 'Jl. Tuah Sekata, Rejosari', '(0761) 26458', 'smp38pku@yahoo.com', 386, 0, 10000, 7, '0', '', '', '1', '', ''),
(10039, 'SMP Negeri 39 Pekanbaru', 'Jl. Seroja, Sialang Rampai', NULL, 'smp39pekanbaru@yahoo.co.id', 550, 0, 10500, 15, '0', '', '', '0', '', ''),
(10040, 'SMP Negeri 40 Pekanbaru', 'Jl. Garuda Sakti, Simpang Baru', '(0761) 8417947', 'smpn40.pekanbaru@gmail.com', 544, 0, 750, 13, '1', '', '', '0', '', ''),
(10041, 'SMP Negeri Madani Pekanbaru', 'Jl. Kasah, Maharatu', '(0761) 21085', 'sugengbw@yahoo.com', 81, 0, 2000, 4, '1', '', '', '1', '', ''),
(10042, 'SMP Negeri 42 Pekanbaru', 'Jl. Dt. Tunggul, Sidomulyo Barat', NULL, 'smpn42pku@gmail.com', 148, 0, 8568, 4, '', '', '', '', '', ''),
(10043, 'SMP Negeri 43 Pekanbaru', 'Jl. Pemudi, Payung Sekaki', NULL, '', 56, 0, 1000, 2, '0', '', '', '0', '', ''),
(10044, 'SMP Negeri 44 Pekanbaru', 'Jl. Damai, Rumbai', NULL, '', 62, 0, 20, 2, '0', '0', '0', '0', '', '');

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
-- Table structure for table `s_pegawai`
--

CREATE TABLE IF NOT EXISTS `s_pegawai` (
  `status_akun` int(10) NOT NULL DEFAULT '0',
  `nama_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`status_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE IF NOT EXISTS `walikelas` (
  `id_wk` int(10) NOT NULL AUTO_INCREMENT,
  `nip` bigint(10) NOT NULL,
  `id_kls` int(10) NOT NULL,
  `id_sklh` int(20) NOT NULL,
  PRIMARY KEY (`id_wk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55003 ;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id_wk`, `nip`, `id_kls`, `id_sklh`) VALUES
(55001, 196701171998022004, 10008001, 10008),
(55002, 197702152008011008, 10001003, 10001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
