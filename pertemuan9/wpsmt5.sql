-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 05:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Asep Hardiyanto', 'Tangerang, Pasar kemis 1', 'laki laki', 'islam', 'SMA 13 Tangerang', 'user1.png'),
(2, 'Muhamad Iqbal', 'Tangerang, Pasar kemis 2', 'laki laki', 'islam', 'SMA 109 Tangerang', 'user1.png'),
(3, 'Rena Aulia Ramadhana', 'Tangerang, Pasar kemis 3', 'perempuan', 'islam', 'SMAN 01 Tangerang', 'user2.png'),
(4, 'Aldrich Dafa', 'Tangerang, Pasar kemis 4', 'laki laki', 'islam', 'SMAN 04 Tangerang', 'user1.png'),
(5, 'Rena Zulkaeda', 'Tangerang, Pasar kemis 5', 'perempuan', 'islam', 'SMAN 12 Tagerang', 'user2.png'),
(6, 'Maria Ekagustina', 'Tangerang, Pasar kemis 1', 'perempuan', 'islam', 'SMAN 14 Tangerang', 'user2.png'),
(7, 'Mahardika Ramdhan', 'Tangerang, Pasar kemis 7', 'laki laki', 'islam', 'SMAN 09 Tangerang', 'user1.png'),
(8, 'Muhammad Faisal Setioardi', 'Tangerang, Pasar kemis 8', 'laki laki', 'islam', 'SMAN 17 Tangerang', 'user1.png');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(255) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nind` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pendidikan_1` varchar(50) NOT NULL,
  `pendidikan_2` varchar(50) NOT NULL,
  `pendidikan_3` varchar(50) NOT NULL,
  `foto_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama_dosen`, `nind`, `email`, `jenis_kelamin`, `alamat_rumah`, `agama`, `pendidikan_1`, `pendidikan_2`, `pendidikan_3`, `foto_dosen`) VALUES
(1, 'sukisno', '1904030001', 'sukisno@gmail.com', 'laki laki', 'tangerang', 'islam', 'UNIS', 'UI', 'UNDIP', 'user1.png'),
(2, 'asep sofyan', '1904030002', 'asepsofyan@gmail.com', 'laki laki', 'tangerang', 'islam', 'UNIS', 'UNDIP', 'UI', 'user2.png'),
(3, 'irina', '1904030003', 'irina@gmail.com', 'perempuan', 'tangerang', 'islam', 'UNIS', 'UI', 'UNDIP', 'user1.png'),
(4, 'muhtar', '1904030004', 'muhtar@gmail.com', 'laki laki', 'tangerang', 'islam', 'UNIS', 'UNDIP', 'UI', 'user2.png'),
(5, 'asep', '1904030005', 'asep@gmail.com', 'laki laki', 'tangerang', 'islam', 'UNIS', 'UI', 'UNDIP', 'user1.png'),
(6, 'nia', '1904030006', 'nia@gmail.com', 'perempuan', 'tangerang', 'islam', 'UNIS', 'UNDIP', 'UI', 'user2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
