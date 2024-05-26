-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 04:32 PM
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
-- Database: `petraeats`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `namaadmin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statusaktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `namaadmin`, `email`, `password`, `statusaktif`) VALUES
(1, 'rian', 'rian123@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar`
--

CREATE TABLE `bukti_bayar` (
  `tanggalbayar` date NOT NULL,
  `nominalbayar` varchar(255) NOT NULL,
  `statusbayar` int(11) NOT NULL,
  `transaksi_id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `kuantitas` int(11) NOT NULL,
  `subtotalharga` varchar(255) NOT NULL,
  `transaksi_id_transaksi` int(11) NOT NULL,
  `menu_id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_kantin`
--

CREATE TABLE `list_kantin` (
  `id_kantin` int(11) NOT NULL,
  `namakantin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_kantin`
--

INSERT INTO `list_kantin` (`id_kantin`, `namakantin`) VALUES
(1, 'Kantin Q'),
(2, 'Kantin P'),
(3, 'Kantin W'),
(4, 'Kantin T');

-- --------------------------------------------------------

--
-- Table structure for table `list_toko`
--

CREATE TABLE `list_toko` (
  `id_toko` int(11) NOT NULL,
  `namatoko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `list_kantin_id_kantin` int(11) NOT NULL,
  `admin_id_admin` int(11) NOT NULL,
  `statustokoaktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_toko`
--

INSERT INTO `list_toko` (`id_toko`, `namatoko`, `email`, `password`, `list_kantin_id_kantin`, `admin_id_admin`, `statustokoaktif`) VALUES
(1, 'Excelso', 'excelso@gmail.com', '123', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama`, `email`, `password`) VALUES
('c14220331', 'Yesto', 'c14220331@john.petra.ac.id', 'c14220331');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `namamenu` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `statustersedia` int(11) NOT NULL,
  `list_toko_id_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `namamenu`, `harga`, `statustersedia`, `list_toko_id_toko`) VALUES
(1, 'Cookies and Cream', '25000', 1, 1),
(2, 'Choco Chip', '27000', 1, 1),
(3, 'Caramel Jelly Latte', '50000', 1, 1),
(4, 'Iced Coffee', '28000', 1, 1),
(5, 'Lychee Tea', '25000', 1, 1),
(6, 'Matcha Pearl', '32000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `ID_StatusPesanan` int(11) NOT NULL,
  `statusPesanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_pesanan`
--

INSERT INTO `status_pesanan` (`ID_StatusPesanan`, `statusPesanan`) VALUES
(1, 'Konfirmasi'),
(2, 'Menunggu Dibayar'),
(3, 'Ditolak'),
(4, 'Proses'),
(5, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `totalharga` varchar(255) NOT NULL,
  `ID_StatusPesanan` int(11) NOT NULL,
  `mahasiswa_nrp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `totalharga`, `ID_StatusPesanan`, `mahasiswa_nrp`) VALUES
(1, '50000', 1, 'c14220331'),
(2, '75000', 2, 'c14220331'),
(3, '20000', 3, 'c14220331'),
(4, '40000', 4, 'c14220331'),
(5, '30000', 5, 'c14220331');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
  ADD PRIMARY KEY (`transaksi_id_transaksi`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `detail_transaksi_menu_fk` (`menu_id_menu`),
  ADD KEY `detail_transaksi_transaksi_fk` (`transaksi_id_transaksi`);

--
-- Indexes for table `list_kantin`
--
ALTER TABLE `list_kantin`
  ADD PRIMARY KEY (`id_kantin`);

--
-- Indexes for table `list_toko`
--
ALTER TABLE `list_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `list_toko_admin_fk` (`admin_id_admin`),
  ADD KEY `list_toko_list_kantin_fk` (`list_kantin_id_kantin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `menu_list_toko_fk` (`list_toko_id_toko`);

--
-- Indexes for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`ID_StatusPesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_mahasiswa_fk` (`mahasiswa_nrp`),
  ADD KEY `status_pesanan_fk` (`ID_StatusPesanan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
  ADD CONSTRAINT `bukti_bayar_transaksi_fk` FOREIGN KEY (`transaksi_id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_menu_fk` FOREIGN KEY (`menu_id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `detail_transaksi_transaksi_fk` FOREIGN KEY (`transaksi_id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `list_toko`
--
ALTER TABLE `list_toko`
  ADD CONSTRAINT `list_toko_admin_fk` FOREIGN KEY (`admin_id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `list_toko_list_kantin_fk` FOREIGN KEY (`list_kantin_id_kantin`) REFERENCES `list_kantin` (`id_kantin`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_list_toko_fk` FOREIGN KEY (`list_toko_id_toko`) REFERENCES `list_toko` (`id_toko`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `status_pesanan_fk` FOREIGN KEY (`ID_StatusPesanan`) REFERENCES `status_pesanan` (`ID_StatusPesanan`),
  ADD CONSTRAINT `transaksi_mahasiswa_fk` FOREIGN KEY (`mahasiswa_nrp`) REFERENCES `mahasiswa` (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
