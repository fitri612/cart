-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2022 pada 06.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_order`
--

INSERT INTO `db_order` (`id`, `nama`, `harga`, `jumlah`, `keterangan`, `foto`) VALUES
(1, 'Aglonema Suksom', 35000, 10, '-', 'aglonemaSuksom.jpg'),
(2, 'Aglonema Rotundum Aceh', 30000, 10, '-', 'aglonemaRotundumAceh.jpg'),
(3, 'Aglonema Rodud Anjamani', 65000, 10, '-', 'aglonemaRoDudAnjamani.jpg'),
(4, 'Aglonema Snow White Remaja', 90000, 10, '-', 'aglonemaSnowWhiteRemaja.jpg'),
(5, 'Aglonema Super White', 90000, 10, '-', 'aglonemaSuperWhite.jpg'),
(6, 'Aglonema Venus', 65000, 10, '-', 'aglonemaVenus.jpg'),
(7, 'Aglonema Red Anjamani Dewasa', 80000, 10, '-', 'aglonemaRedAnjamaniDewasa.jpg'),
(8, 'Aglonema Ayunindi', 35000, 10, '-', 'aglonemaAyunindi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
