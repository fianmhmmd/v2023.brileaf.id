-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 05:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brileaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

CREATE TABLE `master_category` (
  `mscatId` smallint(5) NOT NULL,
  `mscatName` varchar(255) NOT NULL,
  `mscatSaved` timestamp NOT NULL DEFAULT current_timestamp(),
  `mscatStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_category`
--

INSERT INTO `master_category` (`mscatId`, `mscatName`, `mscatSaved`, `mscatStatus`) VALUES
(1, 'Sertifikasi', '2023-07-01 06:45:24', 1),
(2, 'Pelatihan Berbasis Komoditas', '2023-07-01 06:45:51', 1),
(3, 'Pelatihan Berbasis Kompetensi', '2023-07-01 06:46:01', 1),
(4, 'BRIEF', '2023-07-01 06:46:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_pelatihan`
--

CREATE TABLE `master_pelatihan` (
  `mpId` int(10) NOT NULL,
  `mpMscatId` int(10) NOT NULL,
  `mpName` varchar(255) NOT NULL,
  `mpSaved` timestamp NOT NULL DEFAULT current_timestamp(),
  `mpStatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pelatihan`
--

INSERT INTO `master_pelatihan` (`mpId`, `mpMscatId`, `mpName`, `mpSaved`, `mpStatus`) VALUES
(1, 1, 'UMI', '2023-07-01 06:56:54', 1),
(2, 1, 'Training Of Trainer', '2023-07-01 06:57:11', 1),
(3, 2, 'BSDP Mantri', '2023-07-01 06:57:30', 1),
(4, 3, 'Pelatihan Bank Pengkreditan Syariah (BPRS)', '2023-07-01 07:00:13', 1),
(5, 3, 'Pelatihan Perbankan KB Bukopin', '2023-07-01 07:00:50', 1),
(6, 3, 'Pelatihan Divisi MBD', '2023-07-01 07:01:08', 1),
(7, 3, 'Pelatihan APU PPT untuk DPLK', '2023-07-01 07:01:27', 1),
(8, 3, 'Pelatihan Relationship Manager Briguna', '2023-07-01 07:01:42', 1),
(9, 3, 'Pelatihan Isda Master Agreement and GMRA', '2023-07-01 07:03:46', 1),
(10, 3, 'BSDP Institutional Business CRM Division', '2023-07-01 07:04:45', 1),
(11, 3, 'In House Training', '2023-07-01 07:06:31', 1),
(12, 4, 'National Banking Institute Nepal', '2023-07-01 07:07:21', 1),
(13, 4, 'The Association of Ethiopian Microfinance Institutions (AEMFI)', '2023-07-01 07:09:54', 1),
(14, 4, 'USC Marshall School Of Business', '2023-07-01 07:10:07', 1),
(15, 4, 'Goverment Saving Bank Thailand', '2023-07-01 07:10:17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`mscatId`);

--
-- Indexes for table `master_pelatihan`
--
ALTER TABLE `master_pelatihan`
  ADD PRIMARY KEY (`mpId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `mscatId` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_pelatihan`
--
ALTER TABLE `master_pelatihan`
  MODIFY `mpId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
