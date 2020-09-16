-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 03:16 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoindonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(11) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `nama`, `harga`, `stok`, `supplier`) VALUES
('BR1002', 'Makanan', 'Keripik Singkong', '15000', '60', 'PD idola Snack'),
('BR1003', 'Makanan', 'Kripik Kentang', '40000', '25', 'PD idola Snack'),
('BR2001', 'Kosmetik', 'Sabun Herbal', '10000', '40', 'Herborist'),
('BR2002', 'Kosmetik', 'Masker Spirulina', '17000', '40', 'Herborist'),
('BR2003', 'Kosmetik', 'Lulur Bengkoang', '30000', '35', 'Herborist'),
('BR2004', 'Aksesoris', 'Topi Supreme', '80.000', '23', 'Onecraft'),
('BR2006', 'Makanan', 'Seblak', '10.000', '12', 'PD idola Snack'),
('BR3001', 'Aksesoris', 'Jam Tangan Kayu Pria', '320.000', '15', 'Indocraft'),
('BR3002', 'Aksesoris', 'Jam Tangan Kayu Wanita', '270.000', '20', 'Indocraft'),
('BR3003', 'Aksesoris', 'Kalung Etniks', '175.000', '12', 'Indocraft');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama`, `alamat`, `kota`, `tlp`) VALUES
('SP01', 'PD idola Snack', 'jl. Kud - Sukadami', 'Bekasi', '08555694725494'),
('SP02', 'Herborist', 'jl Daan Mogot km 11', 'Jakarta', '021-54368111'),
('SP03', 'Indocraft', 'jl. Raya Mas No.47', 'Bali', '0361-973091'),
('SP04', 'Onecraft', 'Jl. Soreang Indah l - 12', 'Bandung', '022-7298644');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
