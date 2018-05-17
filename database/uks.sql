-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2018 at 11:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kunjungan`
--

CREATE TABLE `data_kunjungan` (
  `id_kunjungan` int(50) NOT NULL,
  `id_pasien` int(50) NOT NULL,
  `tgl_kunjungan` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `status_pasien` varchar(50) NOT NULL,
  `jk_pasien` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `detail_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `satuan_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `detail_obat`, `nama_obat`, `jml_obat`, `satuan_obat`) VALUES
(1, '', 'Paracetamol', 20, 'strip');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tempat_lahir_pasien` varchar(50) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `agama_pasien` varchar(15) NOT NULL,
  `jk_pasien` varchar(10) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `status_pasien` varchar(20) NOT NULL,
  `foto_pasien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama_pasien`, `tempat_lahir_pasien`, `tgl_lahir_pasien`, `alamat_pasien`, `agama_pasien`, `jk_pasien`, `no_telp`, `status_pasien`, `foto_pasien`) VALUES
(10001, 'firna ', 'cilegon', '0000-00-00', 'cilegon', 'Islam', 'Wanita', 2147483647, 'Peserta Didik', ''),
(10002, 'noni', 'padang', '0000-00-00', 'padang', 'Islam', 'Wanita', 2147483647, 'Peserta Didik', ''),
(10003, 'nadia', 'depok', '0000-00-00', 'depok', 'Islam', 'Wanita', 86678965, 'Peserta Didik', 'mbuntu-5.jpg'),
(10004, 'heri', 'jakarta', '0000-00-00', 'mampang, Jakarta ', 'Islam', 'Pria', 867564321, 'Peserta Didik', 'mbuntu-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_penjaringan`
--

CREATE TABLE `data_penjaringan` (
  `id_pasien` int(11) NOT NULL,
  `id_penjaringan` int(11) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `td_sistole` int(3) NOT NULL,
  `td_diastole` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `hb_darah` varchar(2) NOT NULL,
  `visus` varchar(2) NOT NULL,
  `lila` varchar(4) NOT NULL,
  `haid_pertama` date NOT NULL,
  `kesehatan_gigi` varchar(20) NOT NULL,
  `status_gizi` varchar(20) NOT NULL,
  `kesehatan_umum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penjaringan`
--

INSERT INTO `data_penjaringan` (`id_pasien`, `id_penjaringan`, `berat_badan`, `tinggi_badan`, `td_sistole`, `td_diastole`, `gol_darah`, `hb_darah`, `visus`, `lila`, `haid_pertama`, `kesehatan_gigi`, `status_gizi`, `kesehatan_umum`) VALUES
(10002, 1, 40, 140, 120, 80, 'B', '40', 'ba', '90', '0000-00-00', 'normal', 'Normal', 'Normal'),
(10001, 2, 60, 168, 120, 80, 'B', 'ba', 'ba', '90', '0000-00-00', 'bagus', 'Normal', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `level`) VALUES
(1, '1', '', 0),
(2, '1', '', 0),
(3, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `data_penjaringan`
--
ALTER TABLE `data_penjaringan`
  ADD PRIMARY KEY (`id_penjaringan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kunjungan`
--
ALTER TABLE `data_kunjungan`
  MODIFY `id_kunjungan` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `data_penjaringan`
--
ALTER TABLE `data_penjaringan`
  MODIFY `id_penjaringan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
