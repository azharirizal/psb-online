-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 12:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `psb_admin`
--

CREATE TABLE `psb_admin` (
  `admin_id` int(3) NOT NULL,
  `username` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `profil` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `psb_admin`
--

INSERT INTO `psb_admin` (`admin_id`, `username`, `password`, `profil`) VALUES
(3, 'azhari', '81dc9bdb52d04dc20036dbd8313ed055', 'rizal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `psb_bayar`
--

CREATE TABLE `psb_bayar` (
  `kode_bayar` int(3) NOT NULL,
  `nisn` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `bank` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `atas_nama` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `gambar` text CHARACTER SET latin1,
  `bank_tujuan` varchar(7) CHARACTER SET latin1 NOT NULL,
  `sts_bayar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `psb_bayar`
--

INSERT INTO `psb_bayar` (`kode_bayar`, `nisn`, `bank`, `atas_nama`, `jumlah`, `gambar`, `bank_tujuan`, `sts_bayar`) VALUES
(3, '9991253857', 'MANDIRI', 'RIZAL', 250000, 'bca.jpg', 'BCA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `psb_biodata`
--

CREATE TABLE `psb_biodata` (
  `bio_id` int(3) NOT NULL,
  `nisn` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nm_siswa` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` text COLLATE latin1_general_ci,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `ank_ke` int(2) DEFAULT NULL,
  `jml_saudara` int(2) DEFAULT NULL,
  `sts_siswa` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `hp_siswa` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `almt_siswa` text COLLATE latin1_general_ci,
  `tmpt_siswa` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kendaraan` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `brt_badan` int(3) DEFAULT NULL,
  `tgi_badan` int(3) DEFAULT NULL,
  `gol_darah` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_ayah` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_ibu` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `almt_ortu` text COLLATE latin1_general_ci,
  `hp_ortu` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `kerja_ayah` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kerja_ibu` varchar(17) COLLATE latin1_general_ci DEFAULT NULL,
  `hasil_ortu` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tgung_biaya` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `ijazah` text COLLATE latin1_general_ci NOT NULL,
  `foto` text COLLATE latin1_general_ci NOT NULL,
  `nilai` text COLLATE latin1_general_ci NOT NULL,
  `skhun` text COLLATE latin1_general_ci NOT NULL,
  `sts_bio` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `psb_biodata`
--

INSERT INTO `psb_biodata` (`bio_id`, `nisn`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `ank_ke`, `jml_saudara`, `sts_siswa`, `hp_siswa`, `almt_siswa`, `tmpt_siswa`, `kendaraan`, `brt_badan`, `tgi_badan`, `gol_darah`, `nm_ayah`, `nm_ibu`, `almt_ortu`, `hp_ortu`, `kerja_ayah`, `kerja_ibu`, `hasil_ortu`, `tgung_biaya`, `ijazah`, `foto`, `nilai`, `skhun`, `sts_bio`) VALUES
(2, '0036346325', 'ABDUL AZIS', 'BOGOR', '2003-02-17', 'Laki-laki', 'ISLAM', 1, 2, 'KANDUNG', '089687462912', 'Kp. Kelapa', 'Orangtua', 'MOBIL', 50, 160, 'A', 'Juneit Nasution', 'Rohmasanni', 'Kp. Kelapa', '085768539064', 'Buruh', 'Ibu rumah tangga', '1000000', 'Orangtua', 'ijazah-lk.jpg', 'lk-1.jpg', 'nilai-smt.jpg', 'skhun.jpg', 1),
(3, '0019058725', 'LIA AMALIA', 'BOGOR', '1999-04-07', 'Perempuan', 'ISLAM', 3, 5, 'KANDUNG', '081397468274', 'Kp. Bojong Gede', 'Orangtua', 'KENDARAAN ', 65, 155, 'B', 'Solehudin', 'Siti Hawah', 'Kp. Bojong Gede', '081345829450', 'Karyawan Swasta', 'Guru', '3000000', 'Orangtua', 'ijazah-lk.jpg', '1.JPG', 'nilai-smt.jpg', 'SHUN-2016.png', 1),
(4, '0009405429', 'MUHAMMAD HILAL BADRI', 'JAKARTA', '2000-08-15', 'Laki-laki', 'ISLAM', 5, 8, 'KANDUNG', '089681938235', 'Kp. Sudi Mampir', 'Paman', 'MOTOR', 60, 170, 'O', 'ZULKIFLI', 'YENI OKTARIA', 'Kp. Pejaten', '081392634865', 'Karyawan Swasta', 'Bidan', '4000000', 'Orangtua', 'ijazah-lk.jpg', 'lk-2.JPG', 'nilai-smt.jpg', 'skhun.jpg', 1),
(6, '9991253857', 'MUHAMAD RIZAL AZHARI', 'BOGOR', '1996-08-28', 'Laki-laki', 'ISLAM', 3, 5, 'KANDUNG', '081392637184', 'Kp. Cibandawa', 'Orangtua', 'MOTOR', 60, 170, 'O', 'Amir', 'Aminah', 'Kp. Cibandawa', '081392637184', 'Karyawan', 'Ibu Rumah Tangga', '3000000', 'Orangtua', 'ijazah-lk.jpg', 'Foto Formal.jpg', 'nilai-smt.jpg', 'skhun.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `psb_calon_siswa`
--

CREATE TABLE `psb_calon_siswa` (
  `id_calon_siswa` int(3) NOT NULL,
  `no_peserta` bigint(10) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `asal_skl` text COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(80) COLLATE latin1_general_ci DEFAULT NULL,
  `pass_view` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `status` int(2) NOT NULL,
  `sts_verifikasi` int(2) NOT NULL DEFAULT '0',
  `sts_seleksi` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `psb_calon_siswa`
--

INSERT INTO `psb_calon_siswa` (`id_calon_siswa`, `no_peserta`, `nama`, `nisn`, `asal_skl`, `email`, `password`, `pass_view`, `tgl_daftar`, `status`, `sts_verifikasi`, `sts_seleksi`) VALUES
(41, 180110092643, 'MUHAMMAD HILAL BADRI', '0009405429', '', 'hilal@gmail.com', 'dadb37200bcf7ed4a41b970bcb8176e0', '', '2018-01-10', 0, 1, 0),
(40, 180109012720, 'LIA AMALIA', '0019058725', '', 'lia@gmail.com', 'eae61f0edaeab4bc53da35d3458acd67', '', '2018-01-09', 0, 1, 1),
(39, 180109011044, 'ABDUL AZIS', '0036346325', '', 'abdulazis@gmail.com', '428a78b4fee47253898d7918c0a09160', '', '2018-01-09', 0, 1, 0),
(43, 180125071826, 'MUHAMAD RIZAL AZHARI', '9991253857', '', 'rizal@gmail.com', 'ed6b202e937c3e83cfc9f9ea1aedbe0e', '', '2018-01-25', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psb_log`
--

CREATE TABLE `psb_log` (
  `log_id` int(11) NOT NULL,
  `nisn` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pendaftaran` varchar(11) CHARACTER SET latin1 NOT NULL,
  `biodata` varchar(11) CHARACTER SET latin1 NOT NULL,
  `verifikasi` varchar(11) CHARACTER SET latin1 NOT NULL,
  `pembayaran` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `psb_log`
--

INSERT INTO `psb_log` (`log_id`, `nisn`, `pendaftaran`, `biodata`, `verifikasi`, `pembayaran`) VALUES
(9, '0897645342', '2.png', '1.png', '1.png', '2.png'),
(10, '09876543', '2.png', '1.png', '1.png', '1.png'),
(11, '0019058725', '2.png', '2.png', '2.png', '2.png'),
(12, '0009405429', '2.png', '2.png', '2.png', '1.png'),
(14, '9991253857', '2.png', '2.png', '2.png', '2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psb_admin`
--
ALTER TABLE `psb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `psb_bayar`
--
ALTER TABLE `psb_bayar`
  ADD PRIMARY KEY (`kode_bayar`);

--
-- Indexes for table `psb_biodata`
--
ALTER TABLE `psb_biodata`
  ADD PRIMARY KEY (`bio_id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `psb_calon_siswa`
--
ALTER TABLE `psb_calon_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `adm_id` (`id_calon_siswa`);

--
-- Indexes for table `psb_log`
--
ALTER TABLE `psb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psb_admin`
--
ALTER TABLE `psb_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `psb_bayar`
--
ALTER TABLE `psb_bayar`
  MODIFY `kode_bayar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `psb_biodata`
--
ALTER TABLE `psb_biodata`
  MODIFY `bio_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `psb_calon_siswa`
--
ALTER TABLE `psb_calon_siswa`
  MODIFY `id_calon_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `psb_log`
--
ALTER TABLE `psb_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
