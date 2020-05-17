-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `kode_dokter` varchar(10) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `email`, `akses`, `kode_dokter`, `spesialis`, `no_tlp`, `password`, `bulan`, `tahun`) VALUES
(15, 'asasa', 'jeryanasd@sadad.com', 'dokter', '48749', 'Penyakit Dalam', '13212311231', 'haahaha', 'Januari', '2020'),
(16, 'sjdhaskdd', 'jeryaasda@hasdad.com', 'dokter', '34922', 'Kesehatan Gigi Dan M', '234313212323', 'd4541e8ae5dc644090d609b6a63ffb11', 'Febuari', '2020'),
(19, 'jeryan', 'jeryaadas@gmail.com', 'dokter', '94974', 'THT', '0881024718205', 'jeryan', 'Januari', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `derita` varchar(100) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `konfirmasi` varchar(10) NOT NULL,
  `tensi_darah` varchar(30) NOT NULL,
  `berat_badan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `email`, `akses`, `kode`, `derita`, `kelamin`, `alamat`, `no_tlp`, `bulan`, `tahun`, `konfirmasi`, `tensi_darah`, `berat_badan`) VALUES
(14, 'sabinaaa', 'sasd@gmail.com', 'pasien', '28943', 'Hamil', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Belum', '', ''),
(15, 'Savio Savio', 'mikckeymouse@gmail.com', 'pasien', '23382', 'DBD', 'perempuan', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Sudah', '20', '20'),
(16, 'Savio Savio', 'jeryanharyogi@gmail.com', 'pasien', '26332', 'DBD', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Sudah', '0', '0'),
(17, 'Savio Savio', 'dasdasd@gmail.com', 'pasien', '68394', 'DBD', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(18, 'Sabina', 'sabina@gmail.com', 'pasien', '93294', 'Corona', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Sudah', '0', '0'),
(19, 'rangga', 'rgg@gmail.com', 'pasien', '96274', 'hati', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(21, 'dada', 'asdas@gmai.om', 'pasien', '32827', 'asdasd', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Sudah', '0', '0'),
(22, 'asdkaskd', 'adasda@gmail.com', 'pasien', '23342', 'adasa', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(23, 'Savio Savio', 'asdasda@gmail.com', 'pasien', '73623', 'Hamil', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(24, 'asdasda', 'aas@gmail.com', 'pasien', '98423', 'Hamil', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(26, 'asklda', 'kllsdkals@gmail.com', 'pasien', '84789', 'adasd', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '088213497185', 'Januari', '2020', 'Sudah', '0', '0'),
(28, 'sasdasd', 'asdaaas@gmail.com', 'pasien', '63222', 'Korona', 'Laki-laki', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Sudah', '0', '0'),
(31, 'jeryan', 'sdasd@gmail.com', 'pasien', '34723', 'Hamil', 'perempuan', 'jalan swadarma raya Gg bacang rt 12 rw 03', '0881024718205', 'Januari', '2020', 'Belum', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` varchar(40) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `akses` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `email`, `tgl_lahir`, `no_tlp`, `akses`, `agama`, `password`, `bulan`, `tahun`) VALUES
(19, 'jeryan1!', 'asda@gmail.com', '2020-05-11', '34223234233', 'petugas', 'Islam', 'admin', 'Januari', '2020'),
(20, 'user2', 'user@gmail.com', '2020-05-14', '0881024718205', 'petugas', 'Kristen', 'user', 'Januari', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_add` varchar(100) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `hak_akses` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `created_add`, `bulan`, `tahun`, `hak_akses`) VALUES
(30, 'admin', 'jeryan@gmail.com', 'admin', '2020-May-09', 'Januari', '2020', 'admin'),
(34, 'alii', 'ali@gmail.com', '12345', '2020-May-11', 'Januari', '2020', 'admin'),
(36, 'asdadasd', 'adaada@gmail.com', 'asdadasd', '2020-May-10', 'Januari', '2020', 'admin'),
(37, 'sabina', 'asdadasd@gmail.com', 'asdadasadsad', '2020-May-11', 'Januari', '2020', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
