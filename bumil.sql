-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 28, 2024 at 10:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumil`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) DEFAULT NULL,
  `kode_penyakit` varchar(5) DEFAULT NULL,
  `nilai_fuzzy` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `kode_gejala`, `kode_penyakit`, `nilai_fuzzy`) VALUES
(1, 'G01', 'P02', 0.8),
(2, 'G02', 'P02', 0.7),
(3, 'G03', 'P01', 0.9),
(4, 'G04', 'P01', 1),
(5, 'G05', 'P05', 0.6),
(6, 'G06', 'P05', 0.7),
(7, 'G07', 'P05', 0.5),
(8, 'G08', 'P03', 0.8),
(9, 'G09', 'P04', 0.9),
(10, 'G010', 'P02', 0.7),
(11, 'G011', 'P03', 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `aturan2`
--

CREATE TABLE `aturan2` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) DEFAULT NULL,
  `kode_penyakit` varchar(5) DEFAULT NULL,
  `nilai_fuzzy` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aturan2`
--

INSERT INTO `aturan2` (`id`, `kode_gejala`, `kode_penyakit`, `nilai_fuzzy`) VALUES
(1, 'G12', 'P06', 0.8),
(2, 'G13', 'P06', 0.8),
(3, 'G14', 'P07', 0.9),
(4, 'G15', 'P07', 0.9);

-- --------------------------------------------------------

--
-- Table structure for table `aturan3`
--

CREATE TABLE `aturan3` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) DEFAULT NULL,
  `kode_penyakit` varchar(5) DEFAULT NULL,
  `nilai_fuzzy` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aturan3`
--

INSERT INTO `aturan3` (`id`, `kode_gejala`, `kode_penyakit`, `nilai_fuzzy`) VALUES
(13, 'G16', 'P08', 0.7),
(14, 'G17', 'P08', 0.7),
(15, 'G18', 'P08', 0.7),
(16, 'G19', 'P09', 0.9),
(17, 'G20', 'P09', 0.8),
(18, 'G21', 'P09', 0.7),
(19, 'G22', 'P12', 1),
(20, 'G23', 'P09', 0.8),
(21, 'G24', 'P10', 0.9),
(22, 'G25', 'P10', 0.9),
(23, 'G26', 'P10', 0.9),
(24, 'G27', 'P11', 1),
(25, 'G28', 'P11', 1),
(26, 'G29', 'P11', 1),
(27, 'G30', 'P08', 0.7),
(28, 'G31', 'P12', 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Pendarahan'),
('G010', 'Nyeri Perut'),
('G011', 'Nyeri Goyang Porsio'),
('G02', 'Nyeri Perut'),
('G03', 'Mual'),
('G04', 'Muntah Pagi Hari'),
('G05', 'Pusing'),
('G06', 'Mengganggu Aktivitas'),
('G07', 'Kurang Nutrisi'),
('G08', 'Flek'),
('G09', 'Jaringan Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `gejala2`
--

CREATE TABLE `gejala2` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala2`
--

INSERT INTO `gejala2` (`kode_gejala`, `nama_gejala`) VALUES
('G12', 'Pendarahan'),
('G13', 'Tidak ada nyeri'),
('G14', 'Darah kehitaman'),
('G15', 'Tidak merasakan janin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala3`
--

CREATE TABLE `gejala3` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala3`
--

INSERT INTO `gejala3` (`kode_gejala`, `nama_gejala`) VALUES
('G16', 'Anemia'),
('G17', 'Mata pucat'),
('G18', 'HB dibawah 11'),
('G19', 'Sering lapar'),
('G20', 'Pemeriksaan keton urin'),
('G21', 'Sering kencing'),
('G22', 'Bayinya lebih besar'),
('G23', 'Tekanan darah naik'),
('G24', 'Kaki tidak bengkak'),
('G25', 'Tidak ada naik tensi'),
('G26', 'Urin positif'),
('G27', 'Kaki bengkak'),
('G28', 'Kejang'),
('G29', 'Nyeri ulu hati'),
('G30', 'Pandangan kabur'),
('G31', 'Tinggi perut lebih besar dari kehamilan');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`) VALUES
('P01', 'Morning Sickness'),
('P02', 'Abertus'),
('P03', 'Hamil Ektopik'),
('P04', 'Maholidosa'),
('P05', 'Hiperemensis');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit2`
--

CREATE TABLE `penyakit2` (
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit2`
--

INSERT INTO `penyakit2` (`kode_penyakit`, `nama_penyakit`) VALUES
('P06', 'Plasenta previa'),
('P07', 'Plasenta ablasio');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit3`
--

CREATE TABLE `penyakit3` (
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit3`
--

INSERT INTO `penyakit3` (`kode_penyakit`, `nama_penyakit`) VALUES
('P08', 'Anemia'),
('P09', 'Diabetes'),
('P10', 'Hipertensi preklamsia ringan'),
('P11', 'Hipertensi preklamsia berat'),
('P12', 'Gemeli (Hamil Kembar)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`kode_gejala`),
  ADD KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `aturan2`
--
ALTER TABLE `aturan2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`kode_gejala`),
  ADD KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `aturan3`
--
ALTER TABLE `aturan3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`kode_gejala`),
  ADD KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `gejala2`
--
ALTER TABLE `gejala2`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `gejala3`
--
ALTER TABLE `gejala3`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `penyakit2`
--
ALTER TABLE `penyakit2`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `penyakit3`
--
ALTER TABLE `penyakit3`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `aturan2`
--
ALTER TABLE `aturan2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `aturan3`
--
ALTER TABLE `aturan3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode_gejala`),
  ADD CONSTRAINT `aturan_ibfk_2` FOREIGN KEY (`kode_penyakit`) REFERENCES `penyakit` (`kode_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
