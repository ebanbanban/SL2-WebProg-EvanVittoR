-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 07:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelolakeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` char(16) DEFAULT NULL,
  `namaDepan` varchar(32) DEFAULT NULL,
  `namaTengah` varchar(32) DEFAULT NULL,
  `namaBelakang` varchar(32) DEFAULT NULL,
  `tempatLahir` varchar(32) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `wargaNegara` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `noHp` varchar(16) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kodePos` int(5) DEFAULT NULL,
  `fotoProfil` varchar(128) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `wargaNegara`, `email`, `noHp`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password`) VALUES
('1234123412341233', 'Deddy', 'Corbuzier', 'Suharyono', 'Semarang', '2022-03-03', 'Thailand', 'dedicahyadee@gmail.com', '081911111112', 'Jl Ayam Bakar', 52112, '1191641.jpg', 'DediCh', 'Dedi-123'),
('1234567812345678', 'Evan', 'Vitto', 'Renjiro', 'Semarang', '2022-04-03', 'Indonesia', 'evanvr10@gmail.com', '081911603103', 'Jl Salak                                                      ', 52112, 'anjay.png', 'eban', 'Eban-123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
