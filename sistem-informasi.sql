-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 10:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-informasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(11) NOT NULL,
  `nama_dokter` text NOT NULL,
  `jk_dokter` text NOT NULL,
  `tanggal_lahir` int(255) NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `no_hp_dokter` varchar(255) NOT NULL,
  `id_rs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `jk_dokter`, `tanggal_lahir`, `alamat_dokter`, `no_hp_dokter`, `id_rs`) VALUES
('D008', 'Killua', 'male', 40, 'Hyogo Jepang', '081234567896', 'H003'),
('D001', 'Zenith', 'male', 43, 'Indraprasta Bogor', '089506274834', 'H001'),
('D002', 'Atha', 'male', 34, 'Dago Bandung', '081234567890', 'H001'),
('D003', 'Avior', 'female', 53, 'Seminyak Bali', '081234567891', 'H001'),
('D004', 'Ghrian', 'female', 42, 'Beji Depok', '081234567892', 'H002'),
('D005', 'Axel', 'male', 36, 'Gubeng Surabaya', '081234567893', 'H002'),
('D006', 'Aldric', 'female', 46, 'Malioboro Yogyakarta', '0812345678904', 'H003'),
('D007', 'Emery', 'female', 32, 'Puncak Bogor', '081234567895', 'H003');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(11) NOT NULL,
  `nama_pasien` text NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `jk_pasien` text NOT NULL,
  `tanggal_lahir` int(255) NOT NULL,
  `no_hp_pasien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `kelurahan`, `kota`, `jk_pasien`, `tanggal_lahir`, `no_hp_pasien`) VALUES
('P001', 'Eren', 'Jl Boulevard Artha Gading Rukan Artha Gading Niaga Bl B/32', 'Ciawi', 'Bogor', 'Male', 36, '089421231654'),
('P002', 'Mikasa', 'No. 61D, Pondok Karya, Pondok Aren', 'Ciangsana', 'Bogor', 'Female', 35, '08785465465'),
('P003', 'Historia', 'Jl Metro Kencana VII Bl Q/16', 'Ciawi', 'Bogor', 'Female', 25, '0812654554'),
('P004', 'Reiner', 'Jl.Kampus Selatan 169', 'Jatiasih', 'Bekasi', 'Male', 38, '085656565'),
('P005', 'Fritz', 'JL Tanjung 4 No. 7', 'Tebet', 'Jakarta Selatan', 'Male', 56, '0877754654'),
('P006', 'Connie', 'JL Tanjung 4 No. 8', 'Dramaga', 'Bogor', 'Male', 31, '089898897');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(255) NOT NULL,
  `id_pasien` varchar(255) NOT NULL,
  `id_dokter` varchar(255) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_rs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `id_dokter`, `tanggal_pemeriksaan`, `hasil`, `status`, `id_rs`) VALUES
(1, 'P001', 'D003', '2021-01-04', 'Positive', 'Mandiri', 'H003'),
(2, 'P002', 'D006', '2021-01-03', 'Negative', '-', 'H003'),
(3, 'P003', 'D002', '2021-01-15', 'Positive', 'Rawat Karantina', 'H001'),
(4, 'P004', 'D006', '2021-01-06', 'Positive', 'Mandiri', 'H002'),
(5, 'P005', 'D006', '2021-01-01', 'Positive', 'Rawat Karantina', 'H001'),
(6, 'P006', 'D005', '2020-07-22', 'Positive', 'Self Isolation', 'H001');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id_rs` varchar(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat_rs` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id_rs`, `nama_rs`, `alamat_rs`, `kelurahan`, `kota`, `telepon`) VALUES
('H004', 'Bumi Sentosa', 'Jl KH Mas Mansyur Kav 126 Menara Jakarta', 'Ciomas', 'Bogor', '0212165165'),
('H001', 'Mitra Medika', 'Jl Mangga Dua Raya Ruko Agung Sedayu Bl G/1 RT 009/11', 'Mangga Dua', 'Jakarta', '021165658'),
('H002', 'Citra Raharja', 'Jl KH Mas Mansyur Kav 126 Menara Batavia', 'Tebet', 'Jakarta Selatan', '021898998'),
('H003', 'Indah Semesta', 'Grogol Petamburan', 'Petamburan', 'Jakarta Barat', '0218895654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `fk_id_pasien` (`id_pasien`(250)),
  ADD KEY `fk_id_dokter` (`id_dokter`(250)),
  ADD KEY `fk_id_rs` (`id_rs`(250)) USING BTREE;

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
