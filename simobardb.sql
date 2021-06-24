-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 03:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simobardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `tahunPeroleh` int(4) NOT NULL,
  `kondisi` varchar(2) NOT NULL,
  `nomorSerial` varchar(30) NOT NULL,
  `nib` varchar(30) NOT NULL,
  `lokasiBarang` varchar(50) NOT NULL,
  `nipPegawai` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barangkomputer`
--

CREATE TABLE `barangkomputer` (
  `idBarang` int(11) NOT NULL,
  `os` varchar(30) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barangmotor`
--

CREATE TABLE `barangmotor` (
  `idBarang` int(11) NOT NULL,
  `platNomor` varchar(10) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `besarCC` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `namaLengkap` varchar(50) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `katasandi` binary(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perawatanbarang`
--

CREATE TABLE `perawatanbarang` (
  `idPerawatan` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `tanggalPerawatan` datetime NOT NULL,
  `kondisiSebelum` varchar(3) NOT NULL,
  `kondisiSesudah` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `perawatanbarang`
--
ALTER TABLE `perawatanbarang`
  ADD PRIMARY KEY (`idPerawatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perawatanbarang`
--
ALTER TABLE `perawatanbarang`
  MODIFY `idPerawatan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
