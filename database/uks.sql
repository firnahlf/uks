-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 08:17 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE IF NOT EXISTS `data_obat` (
  `id_obat` int(11) NOT NULL,
  `detail_obat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `satuan_obat` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `detail_obat`, `nama_obat`, `jml_obat`, `satuan_obat`) VALUES
(1, '', 'Paracetamol', 20, 'strip');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE IF NOT EXISTS `data_pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tempat_lahir_pasien` varchar(50) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `agama_pasien` varchar(15) NOT NULL,
  `jk_pasien` varchar(10) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `status_pasien` varchar(20) NOT NULL,
  `foto_pasien` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama_pasien`, `tempat_lahir_pasien`, `tgl_lahir_pasien`, `alamat_pasien`, `agama_pasien`, `jk_pasien`, `no_telp`, `status_pasien`, `foto_pasien`) VALUES
(1, 'Hafiz Alifiarga', 'Jakarta', '1994-10-18', 'Depok', 'Islam', 'Pria', 2147483647, 'Guru', ''),
(2, 'Hafiz Marshall', 'Jakarta', '1994-10-18', 'Depok', 'Islam', 'Pria', 2147483647, 'Peserta Didik', ''),
(3, 'Hafiz Airlangga', 'jakarta', '1994-10-18', 'depok', 'Islam', 'Pria', 2147483647, 'Guru', ''),
(4, 'Hafiz Alinaga', 'jakarta', '1994-10-18', 'depok', 'Islam', 'Pria', 98798787, 'Peserta Didik', ''),
(5, 'Hafiz Aliando', 'jakarta', '1994-10-18', 'depok', 'Islam', 'Pria', 85787587, 'Karyawan', ''),
(6, 'Hafiz Bagus', 'jakarta', '1994-10-18', 'Depok', 'Islam', 'Pria', 654654654, 'Karyawan', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_penjaringan`
--

CREATE TABLE IF NOT EXISTS `data_penjaringan` (
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

-- --------------------------------------------------------

--
-- Table structure for table `data_rm`
--

CREATE TABLE IF NOT EXISTS `data_rm` (
  `id_rm` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `tindakan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_tindakan`
--

CREATE TABLE IF NOT EXISTS `data_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tindakan`
--

INSERT INTO `data_tindakan` (`id_tindakan`, `nama_tindakan`, `keterangan`) VALUES
(1, 'Obat', 'Hanya diberikan obat sesuai keluhan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
-- Indexes for table `data_rm`
--
ALTER TABLE `data_rm`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `data_tindakan`
--
ALTER TABLE `data_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_penjaringan`
--
ALTER TABLE `data_penjaringan`
  MODIFY `id_penjaringan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_rm`
--
ALTER TABLE `data_rm`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_tindakan`
--
ALTER TABLE `data_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
