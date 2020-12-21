-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 01:46 PM
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
-- Database: `ibadahyuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `idagama` int(11) NOT NULL,
  `nama_agama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`idagama`, `nama_agama`) VALUES
(5, 'Buddha'),
(4, 'Hindu'),
(1, 'Islam'),
(6, 'Kong Hu Cu'),
(3, 'Kristen Katolik'),
(2, 'Kristen Protestan');

-- --------------------------------------------------------

--
-- Table structure for table `jenispengingat`
--

CREATE TABLE `jenispengingat` (
  `nama_tipe` varchar(45) NOT NULL,
  `waktu` time NOT NULL,
  `jp_agama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenispengingat`
--

INSERT INTO `jenispengingat` (`nama_tipe`, `waktu`, `jp_agama`) VALUES
('Devosi', '08:00:00', 'Kristen Katolik'),
('Doa', '07:00:00', 'Kristen Katolik'),
('Ibadah', '07:00:00', 'Kristen Protestan'),
('Pemujaan', '07:00:00', 'Buddha'),
('Perayaan Sakramen', '06:00:00', 'Kristen Katolik'),
('Perayaan Sakramentali', '08:00:00', 'Kristen Katolik'),
('Peribadatan', '08:00:00', 'Kong Hu Cu'),
('Sembahyang Malam', '19:00:00', 'Hindu'),
('Sembahyang Pagi', '08:00:00', 'Hindu'),
('Sembahyang Siang', '13:00:00', 'Hindu'),
('Sholat Asar', '15:10:00', 'Islam'),
('Sholat Isya', '19:14:00', 'Islam'),
('Sholat Magrib', '17:58:00', 'Islam'),
('Sholat Subuh', '04:06:00', 'Islam'),
('Sholat Zuhur', '11:44:00', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `pengingat`
--

CREATE TABLE `pengingat` (
  `idpengingat` int(11) NOT NULL,
  `nama_pengingat` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(45) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `p_euser` varchar(45) NOT NULL,
  `p_njenispengingat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengingat`
--

INSERT INTO `pengingat` (`idpengingat`, `nama_pengingat`, `tanggal`, `waktu`, `deskripsi`, `p_euser`, `p_njenispengingat`) VALUES
(9, 'Pengingat Sore', '2019-11-26', '15:10', 'Percobaan', 'muhjaury@gmail.com', 'Sholat Asar'),
(10, 'Pengingat (21)', '2019-11-26', '04:30', 'Dimulainya Hari (21)', 'muhjaury@gmail.com', 'Sholat Subuh');

-- --------------------------------------------------------

--
-- Table structure for table `tempatibadah`
--

CREATE TABLE `tempatibadah` (
  `idtempatibadah` int(11) NOT NULL,
  `nama_tempat` varchar(45) NOT NULL,
  `provinsi` varchar(45) NOT NULL,
  `kotakabupaten` varchar(45) NOT NULL,
  `kecamatan` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `ti_agama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempatibadah`
--

INSERT INTO `tempatibadah` (`idtempatibadah`, `nama_tempat`, `provinsi`, `kotakabupaten`, `kecamatan`, `alamat`, `latitude`, `longitude`, `ti_agama`) VALUES
(1, 'Mesjid Babuttaqwa', 'Sulawesi Selatan', 'Kota Makassar', 'Biring Kanaya', 'Jl. Fetran', -5.1254649, 119.5292334, 'Islam'),
(2, 'Mesjid Quba Al-Ishlah', 'Sulawesi Selatan', 'Kota Makassar', 'Biring Kanaya', 'Jl. Poros Mangga Tiga', -5.125457, 119.525688, 'Islam'),
(3, 'Gereja Toraja Jemaat Lanraki Biringkanaya', 'Sulawesi Selatan', 'Kota Makassar', 'Biring Kanaya', 'Lorong VI', -5.1234456, 119.5146244, 'Kristen Protestan'),
(4, 'Maria of the Rosary Catholic Church Kare', 'Sulawesi Selatan', 'Kota Makassar', 'Makassar', 'Tamalanrea Indah', -5.1389989, 119.4892149, 'Kristen Katolik'),
(5, 'Pura Giri Natha', 'Sulawesi Selatan', 'Kota Makassar', 'Tamalanrea', 'Jl. Perintis Kemerdekaan No.162', -5.1271337, 119.5026874, 'Hindu'),
(6, 'Vihara Amrta Buddha', 'Sulawesi Selatan', 'Kota Makassar', 'Makassar', 'Jl. Pontiku 1 No.10, Gaddong', -5.132785, 119.416904, 'Buddha'),
(7, 'Kelenteng Xian MA', 'Sulawesi Selatan', 'Kota Makassar', 'Makassar', 'Jalan Sulawesi', -5.128853, 119.408271, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama_user` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `u_agama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_user`, `email`, `password`, `foto`, `u_agama`) VALUES
('Albert Wallington', 'albertw@yahoo.com', 'albert123', 'tes.png', 'Kristen Katolik'),
('Muhammad Jaury', 'muhjaury@gmail.com', '101211825', 'ary.jpg', 'Islam'),
('Ary', 'tes3@tes3.com', 'tes3', 'IMG-20180921-WA0001.jpg', 'Buddha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`nama_agama`);

--
-- Indexes for table `jenispengingat`
--
ALTER TABLE `jenispengingat`
  ADD PRIMARY KEY (`nama_tipe`),
  ADD KEY `jp_idagama` (`jp_agama`);

--
-- Indexes for table `pengingat`
--
ALTER TABLE `pengingat`
  ADD PRIMARY KEY (`idpengingat`),
  ADD KEY `p_iduser` (`p_euser`,`p_njenispengingat`),
  ADD KEY `p_njenispengingat` (`p_njenispengingat`);

--
-- Indexes for table `tempatibadah`
--
ALTER TABLE `tempatibadah`
  ADD PRIMARY KEY (`idtempatibadah`),
  ADD KEY `ti_idagama` (`ti_agama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `u_idagama` (`u_agama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengingat`
--
ALTER TABLE `pengingat`
  MODIFY `idpengingat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tempatibadah`
--
ALTER TABLE `tempatibadah`
  MODIFY `idtempatibadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenispengingat`
--
ALTER TABLE `jenispengingat`
  ADD CONSTRAINT `jenispengingat_ibfk_1` FOREIGN KEY (`jp_agama`) REFERENCES `agama` (`nama_agama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengingat`
--
ALTER TABLE `pengingat`
  ADD CONSTRAINT `pengingat_ibfk_3` FOREIGN KEY (`p_euser`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengingat_ibfk_4` FOREIGN KEY (`p_njenispengingat`) REFERENCES `jenispengingat` (`nama_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempatibadah`
--
ALTER TABLE `tempatibadah`
  ADD CONSTRAINT `tempatibadah_ibfk_1` FOREIGN KEY (`ti_agama`) REFERENCES `agama` (`nama_agama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`u_agama`) REFERENCES `agama` (`nama_agama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
