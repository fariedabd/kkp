-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 04:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekreasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `departmen`
--

CREATE TABLE `departmen` (
  `id_departmen` varchar(10) NOT NULL,
  `nm_departmen` varchar(30) NOT NULL,
  `id_manager` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmen`
--

INSERT INTO `departmen` (`id_departmen`, `nm_departmen`, `id_manager`) VALUES
('SA_REP', 'System Analys', '0002'),
('NOOB', 'Goblok', '0'),
('0003', 'Pelayan', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `detil_project`
--

CREATE TABLE `detil_project` (
  `id_project` varchar(10) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_cuti`
--

CREATE TABLE `form_cuti` (
  `id_fcuti` varchar(10) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_cuti` int(2) NOT NULL,
  `status_pengajuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_cuti`
--

INSERT INTO `form_cuti` (`id_fcuti`, `id_karyawan`, `tgl_pengajuan`, `tgl_mulai`, `tgl_kembali`, `lama_cuti`, `status_pengajuan`) VALUES
('1000', '0002', '2018-01-20', '2018-01-22', '2018-01-24', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nm_jabatan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`) VALUES
('01', 'Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nm_karyawan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_jabatan` varchar(50) NOT NULL,
  `id_manager` varchar(10) NOT NULL,
  `id_departmen` varchar(10) NOT NULL,
  `sisa_cuti` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nm_karyawan`, `alamat`, `email`, `no_telp`, `password`, `id_jabatan`, `id_manager`, `id_departmen`, `sisa_cuti`) VALUES
('0001', 'Farid', 'Jakarta', '0', '0123455', '1234', '01', '0002', 'SA_REP', '2'),
('', '', '', '0', '', '', '', '', '', ''),
('0002', 'Bagas', 'Jakarta', '0', '012323', '12345', '02', '', 'MA_N', '3'),
('0003', 'Bagong', 'Ciledug', '0', '012338', '12345', '03', '0', '0', '4');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` varchar(10) NOT NULL,
  `nm_project` varchar(10) NOT NULL,
  `tgl_project` date NOT NULL,
  `lama_project` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spl`
--

CREATE TABLE `spl` (
  `id_spl` varchar(10) NOT NULL,
  `tgl_spl` date NOT NULL,
  `tugas_lembur` text NOT NULL,
  `jam_lembur` datetime(2) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `id_departmen` varchar(10) NOT NULL,
  `id_project` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departmen`
--
ALTER TABLE `departmen`
  ADD PRIMARY KEY (`id_departmen`);

--
-- Indexes for table `form_cuti`
--
ALTER TABLE `form_cuti`
  ADD PRIMARY KEY (`id_fcuti`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
