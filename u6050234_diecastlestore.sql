-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Feb 2021 pada 15.42
-- Versi server: 10.3.27-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6050234_diecastlestore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemlist`
--

CREATE TABLE `itemlist` (
  `iditemlist` int(15) UNSIGNED NOT NULL,
  `namabarang` varchar(200) DEFAULT NULL,
  `hargabeli` int(50) NOT NULL,
  `hargarencana` int(50) NOT NULL,
  `jumlahstock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `itemlist`
--

INSERT INTO `itemlist` (`iditemlist`, `namabarang`, `hargabeli`, `hargarencana`, `jumlahstock`) VALUES
(9, 'HW Premium Fast Imports Nissan Skyline GT-R [BNR34]', 300000, 350000, 0),
(10, 'HW Premium Fast Imports Nissan Skyline GT-R [BNR32]', 270000, 300000, 1),
(11, 'HW Premium Fast Imports Nissan Silvia [S15]', 350000, 425000, 0),
(12, 'HW Premium Fast Rewind Nissan Skyline HT 2000GT-X', 120000, 145000, 1),
(13, 'HW Premium Fast Rewind Nissan Silvia [CSP311]', 120000, 135000, 1),
(14, 'HW Premium DC Volkswagen T1 Panel', 200000, 215000, 1),
(15, 'HW Pro Racing Valvoline Mark Martin', 50000, 90000, 0),
(16, 'HW Pro Racing Kellogg Terry Labonte', 50000, 90000, 1),
(17, 'HW Ferrari Racer F40', 40000, 550000, 0),
(18, 'HW Garage \'56 Ford', 150000, 165000, 1),
(19, 'HW Larry\'s Garage Bone Shaker', 150000, 315000, 1),
(20, 'HW Phil\'s Garage \'65 Volkswagen Fastback', 150000, 165000, 1),
(21, 'HW Boulevard 1955 Corvette', 120000, 135000, 1),
(22, 'HW Fast & Furious Nissan Skyline', 70000, 90000, 0),
(23, 'HW Fast & Furious Nissan 370Z', 80000, 90000, 2),
(24, 'HW Satin \'71 Datsun 510 Wagon', 70000, 80000, 2),
(25, 'HW Car Culture Euro Style Volkswagen Golef MK7', 100000, 110000, 1),
(26, 'HW Basic Target Exclusive Custom Datsun 240Z', 80000, 90000, 0),
(27, 'HW Honda Series \'90 Honda Civic EF', 80000, 90000, 1),
(28, 'HW Basic Dan Wheldon DW-1', 90000, 100000, 2),
(29, 'HW Basic Jiffy Lube', 250000, 345000, 1),
(30, 'HW Basic Zamac Volkswagen Kafer Racer', 130000, 155000, 1),
(31, 'HW Basic Honda Civic SI', 80000, 100000, 1),
(32, 'HW Basic Datsun 620 (Army camo)', 50000, 75000, 0),
(33, 'HW Basic Nightburnerz Nissan Skyline RS [KDR30]', 100000, 125000, 0),
(34, 'HW Basic Nissan Skyline 2000 GT-R', 50000, 60000, 1),
(35, 'HW Basic Bubble Matic (regular TH)', 30000, 40000, 1),
(36, 'HW Basic Volkswagen Kool Kombi Orange', 30000, 100000, 1),
(37, 'HW Basic Volkswagen Kool Kombi Orange (akta)', 30000, 100000, 1),
(38, 'HW Basic Volkswagen Kool Kombi Green (akta)', 30000, 100000, 1),
(39, 'HW Basic Treasure Hunts Qombee', 50000, 60000, 1),
(40, 'HW Basic Ferrari F355 Spider', 80000, 125000, 0),
(41, 'HW Basic Ferrari 550 Maranello', 80000, 125000, 1),
(42, 'HW Basic Ferrari 365 GTB/4', 80000, 125000, 0),
(43, 'HW Basic Ferrari Testarossa (corgi casting)', 100000, 200000, 1),
(44, 'HW Basic Ferrari 355', 70000, 115000, 1),
(45, 'HW Basic Ferrari F355 Challenge', 70000, 115000, 1),
(46, 'HW Basic Ferrari 456M', 80000, 125000, 1),
(47, 'HW Basic Ferrari FF', 70000, 115000, 1),
(48, 'HW Basic Ferrari F40', 80000, 200000, 1),
(49, 'HW loose Flying Customs Datsun 510 Bluebird', 100000, 135000, 0),
(50, 'HW loose Flying Customs Nissan Skyline R30', 100000, 125000, 1),
(51, 'HW loose The Gov\'ner', 0, 50000, 1),
(52, 'Matchbox Hummer H2 Concept (camo)', 70000, 80000, 1),
(53, 'Matchbox Mercedes-Benz G63 AMG 6x6', 50000, 130000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksikeluar`
--

CREATE TABLE `transaksikeluar` (
  `idtranskeluar` int(15) UNSIGNED NOT NULL,
  `iditemlist` int(15) UNSIGNED NOT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `hargapenjualan` int(15) UNSIGNED DEFAULT NULL,
  `jumlah` int(15) UNSIGNED DEFAULT NULL,
  `netincome` int(15) UNSIGNED DEFAULT NULL,
  `jenispembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksikeluar`
--

INSERT INTO `transaksikeluar` (`idtranskeluar`, `iditemlist`, `tanggal`, `hargapenjualan`, `jumlah`, `netincome`, `jenispembayaran`) VALUES
(2, 17, '2020-03-26 04:16:33', 550000, 1, 510000, 'Tokopedia'),
(3, 49, '2020-04-05 08:30:11', 130000, 2, 60000, 'Tokopedia'),
(4, 42, '2020-04-05 08:30:36', 120000, 1, 40000, 'Tokopedia'),
(5, 40, '2020-04-05 08:31:02', 120000, 1, 40000, 'Tokopedia'),
(6, 33, '2020-04-21 15:13:49', 130000, 1, 30000, 'Tokopedia'),
(7, 9, '2020-05-06 16:15:43', 450000, 1, 150000, 'Tokopedia'),
(8, 11, '2020-05-06 16:16:30', 425000, 1, 75000, 'Tokopedia'),
(9, 32, '2020-05-13 02:27:10', 70000, 1, 20000, 'Direct'),
(10, 15, '2020-05-13 02:28:06', 90000, 1, 40000, 'Direct'),
(11, 22, '2020-05-13 02:28:59', 90000, 1, 20000, 'Direct'),
(12, 26, '2020-05-13 02:29:28', 90000, 1, 10000, 'Direct');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksimasuk`
--

CREATE TABLE `transaksimasuk` (
  `idtransmasuk` int(15) UNSIGNED NOT NULL,
  `iditemlist` int(15) UNSIGNED NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hargabeli` int(50) UNSIGNED DEFAULT NULL,
  `hargarencana` int(50) UNSIGNED DEFAULT NULL,
  `jumlah` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksimasuk`
--

INSERT INTO `transaksimasuk` (`idtransmasuk`, `iditemlist`, `tanggal`, `hargabeli`, `hargarencana`, `jumlah`) VALUES
(11, 9, '2020-03-12 05:09:35', 300000, 350000, 1),
(12, 10, '2020-03-12 05:12:43', 270000, 300000, 1),
(13, 11, '2020-03-12 05:14:33', 350000, 425000, 1),
(14, 12, '2020-03-12 05:15:51', 120000, 145000, 1),
(15, 13, '2020-03-12 05:17:01', 120000, 135000, 1),
(16, 14, '2020-03-12 05:18:30', 200000, 215000, 1),
(17, 15, '2020-03-12 05:20:29', 50000, 90000, 1),
(18, 16, '2020-03-12 05:21:11', 50000, 90000, 1),
(19, 17, '2020-03-12 05:22:05', 40000, 550000, 1),
(20, 18, '2020-03-12 05:25:26', 150000, 165000, 1),
(21, 19, '2020-03-12 05:26:04', 150000, 315000, 1),
(22, 20, '2020-03-12 05:26:57', 150000, 165000, 1),
(23, 21, '2020-03-12 05:28:29', 120000, 135000, 1),
(24, 22, '2020-03-12 05:30:23', 70000, 90000, 1),
(25, 23, '2020-03-12 05:31:10', 80000, 90000, 2),
(26, 24, '2020-03-12 05:32:14', 70000, 80000, 2),
(27, 25, '2020-03-12 05:33:20', 100000, 110000, 1),
(28, 26, '2020-03-12 05:34:40', 80000, 90000, 1),
(29, 27, '2020-03-12 05:35:31', 80000, 90000, 1),
(30, 28, '2020-03-12 05:36:39', 90000, 100000, 2),
(31, 29, '2020-03-12 05:37:42', 250000, 345000, 1),
(32, 30, '2020-03-12 05:39:06', 130000, 155000, 1),
(33, 31, '2020-03-12 05:40:20', 80000, 100000, 1),
(34, 32, '2020-03-12 05:41:40', 50000, 75000, 1),
(35, 33, '2020-03-12 05:42:40', 100000, 125000, 1),
(36, 34, '2020-03-12 05:43:26', 50000, 60000, 1),
(37, 35, '2020-03-12 05:44:19', 30000, 40000, 1),
(38, 36, '2020-03-12 05:45:15', 30000, 100000, 1),
(39, 37, '2020-03-12 05:45:52', 30000, 100000, 1),
(40, 38, '2020-03-12 05:46:27', 30000, 100000, 1),
(41, 39, '2020-03-12 05:47:41', 50000, 60000, 1),
(42, 40, '2020-03-12 05:48:45', 80000, 125000, 1),
(43, 41, '2020-03-12 05:49:23', 80000, 125000, 1),
(44, 42, '2020-03-12 05:50:02', 80000, 125000, 1),
(45, 43, '2020-03-12 05:50:47', 100000, 200000, 1),
(46, 44, '2020-03-12 05:52:47', 70000, 115000, 1),
(47, 45, '2020-03-12 05:54:04', 70000, 115000, 1),
(48, 46, '2020-03-12 05:54:36', 80000, 125000, 1),
(49, 47, '2020-03-12 05:55:12', 70000, 115000, 1),
(50, 48, '2020-03-12 05:55:47', 80000, 200000, 1),
(51, 49, '2020-03-12 05:58:04', 100000, 135000, 2),
(52, 50, '2020-03-12 05:58:41', 100000, 125000, 1),
(53, 51, '2020-03-12 05:59:23', 0, 50000, 1),
(54, 52, '2020-03-12 06:00:46', 70000, 80000, 1),
(55, 53, '2020-03-12 06:01:44', 50000, 130000, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `itemlist`
--
ALTER TABLE `itemlist`
  ADD PRIMARY KEY (`iditemlist`);

--
-- Indeks untuk tabel `transaksikeluar`
--
ALTER TABLE `transaksikeluar`
  ADD PRIMARY KEY (`idtranskeluar`),
  ADD KEY `transaksikeluar_FKIndex1` (`iditemlist`);

--
-- Indeks untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  ADD PRIMARY KEY (`idtransmasuk`),
  ADD KEY `transaction_FKIndex1` (`iditemlist`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `itemlist`
--
ALTER TABLE `itemlist`
  MODIFY `iditemlist` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `transaksikeluar`
--
ALTER TABLE `transaksikeluar`
  MODIFY `idtranskeluar` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  MODIFY `idtransmasuk` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksikeluar`
--
ALTER TABLE `transaksikeluar`
  ADD CONSTRAINT `transaksikeluar_ibfk_1` FOREIGN KEY (`iditemlist`) REFERENCES `itemlist` (`iditemlist`);

--
-- Ketidakleluasaan untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  ADD CONSTRAINT `transaksimasuk_ibfk_1` FOREIGN KEY (`iditemlist`) REFERENCES `itemlist` (`iditemlist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
