-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 09:25 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciawigebang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'surawung', 'dc49f77aa6d2a4e58f16b85595dc3409');

-- --------------------------------------------------------

--
-- Table structure for table `datapenduduk`
--

CREATE TABLE `datapenduduk` (
  `NIK` bigint(12) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `JENISKELAMIN` char(1) DEFAULT NULL,
  `TEMPATLAHIR` varchar(12) DEFAULT NULL,
  `TANGGALLAHIR` varchar(14) DEFAULT NULL,
  `UMUR` int(3) DEFAULT NULL,
  `AGAMA` varchar(15) DEFAULT NULL,
  `STATUS` varchar(12) DEFAULT NULL,
  `PENDIDIKAN` varchar(5) DEFAULT NULL,
  `PEKERJAAN` varchar(21) DEFAULT NULL,
  `NAMAIBU` varchar(13) DEFAULT NULL,
  `NAMAAYAH` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `datapenduduk`
--

INSERT INTO `datapenduduk` (`NIK`, `NAMA`, `JENISKELAMIN`, `TEMPATLAHIR`, `TANGGALLAHIR`, `UMUR`, `AGAMA`, `STATUS`, `PENDIDIKAN`, `PEKERJAAN`, `NAMAIBU`, `NAMAAYAH`) VALUES
(3208074101710002, 'JULAEHA', 'P', 'KUNINGAN', '25934', 46, 'Islam', 'Cerai Hidup', 'Tamat', 'Mengurus Rumah Tangga', 'DASMI', 'JOHARI'),
(3208082112860004, 'UCHA SUKARYADI. MS', 'L', 'KUNINGAN', '31767', 30, 'Islam', 'Kawin', 'SLTA/', 'Pedagang', 'CASMITA', 'YADI MURYADI'),
(3208085704840008, 'RUMINI', 'P', 'KUNINGAN', '30789', 33, 'Islam', 'Kawin', 'Tamat', 'Mengurus Rumah Tangga', 'RUMATI', 'HARYONO'),
(3208100403740007, 'UDIN SANUDIN.', 'L', 'KUNINGAN', '27092', 43, 'Islam', 'Kawin', 'Tamat', 'Pedagang', 'SARWI', 'MUSKAM'),
(3208100506830011, 'ASEP KURNIA', 'L', 'KUNINGAN', '30472', 34, 'Islam', 'Kawin', 'Tamat', 'Wiraswasta', 'KURNIASIH', 'ROSID'),
(3208100507020013, 'DEDE MUSTARI', 'L', 'KUNINGAN', '37442', 15, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'SUMIYATI', 'KADIM'),
(3208100510080001, 'SYAHRUL GUFRON', 'L', 'KUNINGAN', '39726', 8, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'ENGKUS KUSNI', 'NANANG SUKMANA'),
(3208100706670005, 'KADIM', 'L', 'KUNINGAN', '24630', 50, 'Islam', 'Kawin', 'Tamat', 'Buruh Harian Lepas', 'JARI', 'KADI'),
(3208101103790012, 'NANANG SUKMANA', 'L', 'KUNINGAN', '28925', 38, 'Islam', 'Kawin', 'Tamat', 'Wiraswasta', 'SUHETI', 'KUSEN'),
(3208101401000006, 'KUSNADI', 'L', 'KUNINGAN', '36539', 17, 'Islam', 'Belum Kawin', 'Tamat', 'Belum/Tidak Bekerja', 'SUMIYATI', 'SALIM'),
(3208101405820007, 'NARTO', 'L', 'KUNINGAN', '30085', 35, 'Islam', 'Kawin', 'Tamat', 'Buruh Harian Lepas', 'ONIH', 'SUEB'),
(3208101805980006, 'RINAL ABIDIN', 'L', 'KUNINGAN', '35933', 19, 'Islam', 'Belum Kawin', 'Tamat', 'Belum/Tidak Bekerja', 'IMAS NURJANAH', 'KADIM'),
(3208102006060002, 'YUDISTIRA', 'L', 'KUNINGAN', '38888', 11, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'DARWI', 'KADIM'),
(3208102510110002, 'MUHAMAD BAYU FAZAR', 'L', 'KUNINGAN', '40841', 5, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'RUMINI', 'UCHA SUKARYADI. MS'),
(3208103006010004, 'DIDIN JAENAL ABIDIN', 'L', 'KUNINGAN', '37072', 16, 'Islam', 'Belum Kawin', 'Tidak', 'Pelajar/Mahasiswa', 'ENGKUS KUSNI', 'NANANG SUKMANA'),
(3208104107750523, 'SUMIYATI', 'P', 'KUNINGAN', '27576', 42, 'Islam', 'Kawin', 'Tamat', 'Belum/Tidak Bekerja', 'RIBUT', 'ARSIM'),
(3208104403750002, 'AAN MASRIAH', 'P', 'KUNINGAN', '27457', 42, 'Islam', 'Kawin', 'Tamat', 'Mengurus Rumah Tangga', 'MARIYAM', 'SARKAM'),
(3208104507800008, 'KUSWI', 'P', 'KUNINGAN', '29241', 37, 'Islam', 'Kawin', 'Tamat', 'Mengurus Rumah Tangga', 'RIBUT', 'ARSIM'),
(3208104809140001, 'NAIRA SYIFA KURNIA', 'P', 'KUNINGAN', '41890.83333333', 3, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'EHA JULAEHA', 'ASEP KURNIA'),
(3208105208960003, 'EHA JULAEHA', 'P', 'KUNINGAN', '35289', 21, 'Islam', 'Kawin', 'Tamat', 'Mengurus Rumah Tangga', 'TAYU', 'KASAM'),
(3208105304760004, 'ENGKUS KUSNI', 'P', 'KUNINGAN', '27863', 41, 'Islam', 'Kawin', 'Tamat', 'Mengurus Rumah Tangga', 'TASWI', 'KATMA'),
(3208105803930001, 'NIA MISRATI', 'P', 'KUNINGAN', '34046', 24, 'Islam', 'Kawin', 'SLTP/', 'Mengurus Rumah Tangga', 'SUATI', 'RADI'),
(3208106205070002, 'MEYLIANI', 'P', 'KUNINGAN', '39224', 10, 'Islam', 'Belum Kawin', 'Tidak', 'Pelajar/Mahasiswa', 'KUSWI', 'MOMON SALMON'),
(3208106205950006, 'LILIS LISNAWATI', 'P', 'KUNINGAN', '34841', 22, 'Islam', 'Belum Kawin', 'SLTP/', 'Belum/Tidak Bekerja', 'IMAS NURJANAH', 'KADIM'),
(3208106907130004, 'SELI ZULIANTI RAHMADHANI', 'P', 'KUNINGAN', '41484', 4, 'Islam', 'Belum Kawin', 'Tidak', 'Belum/Tidak Bekerja', 'NIA MISRATI', 'NARTO'),
(3208270107850249, 'KIRMAN', 'L', 'KUNINGAN', '31229', 32, 'Islam', 'Kawin', 'Tamat', 'Wiraswasta', 'ANIH', 'ASTAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
