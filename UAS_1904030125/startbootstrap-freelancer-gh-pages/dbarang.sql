-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 04:33 PM
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
-- Database: `databarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbarang`
--

CREATE TABLE `dbarang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stock` varchar(10) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbarang`
--

INSERT INTO `dbarang` (`id`, `nama`, `stock`, `harga`, `foto`) VALUES
(1, 'Virtual Glass Black - 01', '99', '3.500.000', 'vr.jpg'),
(2, 'CPU Gaming Luxury - 01', '99', '15.000.000', 'cpu.jpg'),
(3, 'Keyboard Cyber', '99', '1.000.000', 'keyboard.jpg'),
(4, 'Mouse Cyber', '99', '500.000', 'mouse.jpg'),
(5, 'Headset Cyber', '99', '750.000', 'headset.jpg'),
(6, 'Gaming Chair Cyber', '99', '500.000', 'gchair.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbarang`
--
ALTER TABLE `dbarang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbarang`
--
ALTER TABLE `dbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
