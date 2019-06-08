-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2019 pada 00.51
-- Versi server: 10.3.15-MariaDB
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
-- Database: `pedipedi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatukang`
--

CREATE TABLE `datatukang` (
  `ID` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenistukang` text NOT NULL,
  `id_kabupaten` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datatukang`
--

INSERT INTO `datatukang` (`ID`, `nama`, `jenistukang`, `id_kabupaten`) VALUES
(1, 'Lihun', 'Perbaikan Rumah', 1),
(2, 'Sulis', 'Bersih Rumah', 1),
(3, 'Doni', 'Bersih Rumah', 2),
(4, 'Parsiman', 'Perbaikan Rumah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `ID` bigint(20) NOT NULL,
  `namakabupaten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`ID`, `namakabupaten`) VALUES
(1, 'Banjarnegara'),
(2, 'Banyumas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datatukang`
--
ALTER TABLE `datatukang`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datatukang`
--
ALTER TABLE `datatukang`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
