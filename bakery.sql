-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2018 at 12:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `id` varchar(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `descri` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`id`, `gambar`, `nama`, `descri`, `harga`, `kategori`) VALUES
('10001', 'gambar/copa_banana.jpg', 'Copa Banana', 'Choco donut with banana flavour', 5000, 'Donut'),
('10002', 'gambar/avocado_dicaprio.jpg', 'Avocado Dicaprio', 'Creamy donut with sweet avocado taste', 6000, 'Donut'),
('10003', 'gambar/heaven_berry.jpg', 'Heaven Berry', 'Sweet donut with berry super lava', 6000, 'Donut'),
('10004', 'gambar/choconutzzy.jpg', 'Choconutzzy', 'Full of coconut slicer and sweet choco ', 5000, 'Donut'),
('10006', 'gambar/tiramisu.jpg', 'Tiramisu', 'Good coffee good day with sweet coffee', 6000, 'Donut'),
('10007', 'gambar/berry_spears.jpg', 'Berry Spears', 'Donut with  berry lava and almond', 7000, 'Donut'),
('20001', 'gambar/Blondie&BrownieFavorBox.jpg', 'Blondie Choco Brownies', 'Sweet White Choco Brownies Slices', 15000, 'Brownies'),
('20002', 'gambar/Chocolate-Fudge-Brownies.png', 'Chocolate Fudge Brownies', 'Mini Slices Sweety Brownies', 5000, 'Brownies'),
('20003', 'gambar/PeanutButterChocoBar.jpg', 'Peanut Butter Choco Brownies', 'Choco Brownies Mix with Peanut Butter', 7000, 'Brownies'),
('20004', 'gambar/peanutbutterjellybar.jpg', 'Peanut Butter Jelly Brownies', 'Peanut Butter Brownies with Extra Jelly', 7000, 'Brownies'),
('20005', 'gambar/oreocookiebar.jpg', 'Oreo Cookies Brownies', 'Chocolate Brownies with Extra Oreo Biscuit', 8000, 'Brownies'),
('20006', 'gambar/Pumpkin-Bars.jpg', 'Pumpkin Cookies Bar', 'Sweet Slices Pumpkin Brownies ', 6000, 'Brownies'),
('20007', 'gambar/redvelvetchocolate.jpg', 'Red Velvet Cream Brownies', 'Creamy Red Velvet Cup Brownies', 7000, 'Brownies'),
('30001', 'gambar/PineappleUpsideDownCake.jpg', 'Pineaplle Upside Down Cake', 'Pineapple cake with Lemon Cream', 80000, 'Birthday'),
('30002', 'gambar/lemoncake.jpg', 'Sponge Lemon Cake', 'Lemon Cake with White Chocolate Cream', 110000, 'Birthday'),
('30003', 'gambar/LemonRaspberryCake.jpg', 'Lemon Raspberry Cake', 'Cake with Raspberry and Vanilla Cream', 110000, 'Birthday'),
('30004', 'gambar/IceboxCake_Vanill.jpg', 'Vanilla Ice Box Cake', 'Vanilla Cake with Icy Cream and Oreo Biscuit', 140000, 'Birthday'),
('30005', 'gambar/EspressoCake.jpg', 'Espresso Choco Cake', 'Chocolate Cake With Espresso and Vanilla Cream', 120000, 'Birthday'),
('30006', 'gambar/CrowdPleaserCake.jpg', 'Crowd Pleaser Cake', 'Vanilla Cake with Chocolate and Espresso Cream', 125000, 'Birthday'),
('30007', 'gambar/CoconutCake.jpg', 'Coconut Cream Cake', 'Coconut Cake with Vanilla and Extra Coconut Cream', 100000, 'Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `pass`) VALUES
('faishal', '234'),
('indah', '123'),
('insky', '123');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `tgl_kirim` date NOT NULL,
  `id` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telpon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`tgl_kirim`, `id`, `username`, `jumlah`, `total`, `bank`, `alamat`, `nama`, `telpon`) VALUES
('2018-11-03', '10001', 'indah', 5, 25000, 'BNI', 'Babarsari Yogyakarta', 'Indah Reforsiana', '085876584582');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD KEY `fkid` (`id`),
  ADD KEY `fkusername` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fkid` FOREIGN KEY (`id`) REFERENCES `Menu` (`id`),
  ADD CONSTRAINT `fkusername` FOREIGN KEY (`username`) REFERENCES `pelanggan` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
