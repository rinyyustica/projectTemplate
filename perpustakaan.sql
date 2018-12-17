-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 10:29 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `nomor_induk` varchar(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `departemen` text NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`nomor_induk`, `nama_lengkap`, `jenis_kelamin`, `departemen`, `tempat_lahir`, `alamat`) VALUES
('D31116309', 'Muhammad Naufal', 'L', 'Teknik Perkapalan', 'Gowa, 15 November 1998', 'Pertek J 33'),
('D41116309', 'Syarwan Syiraid', 'L', 'Teknik Elektro', 'Makassar, 3 Februari 1998', 'Jl. Poros Malino'),
('D42116003', 'Astuti Mayangsari', 'P', 'Teknik Informatika ', 'Makassar, 28 Januari 2000', 'Jl. Puri Palangga Mas 2'),
('D42116010', 'Riny Yustica Dewi', 'P', 'Teknik informatika', 'Ujung Pandang, 16 Juni 1998', 'Jl. Tamangapa Raya III No.45'),
('D42116503', 'Asri Oktianawati', 'P', 'Teknik Informatika', 'Selayar, 1 Oktober 1998', 'Jl. Wijaya Kusuma ');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` varchar(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `judul`, `pengarang`, `tahun_terbit`, `jumlah`) VALUES
('B78', 'Code Igniter', 'Michael J', 2014, 1),
('H127', 'Teori Bahasa dan Otomata', 'John Dham', 2013, 2),
('J81', 'Pemrograman Berbasis Objek', 'Adam Smith', 2000, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`nomor_induk`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
