-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 09.19
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_forms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beltpress`
--

CREATE TABLE `beltpress` (
  `id` int(11) NOT NULL,
  `jenis_BP` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beltpress`
--

INSERT INTO `beltpress` (`id`, `jenis_BP`) VALUES
(1, 'LINE HIJAU BELT PRESS I'),
(2, 'LINE HIJAU BELT PRESS II');

-- --------------------------------------------------------

--
-- Struktur dari tabel `details1`
--

CREATE TABLE `details1` (
  `id` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `beltpress_id` int(11) NOT NULL,
  `jam` time NOT NULL,
  `GPH1` tinyint(1) NOT NULL,
  `GPH2` tinyint(1) NOT NULL,
  `GPH3` tinyint(1) NOT NULL,
  `GPH4` tinyint(1) NOT NULL,
  `GPH5` tinyint(1) NOT NULL,
  `regulator1` int(11) NOT NULL,
  `regulator2` int(11) NOT NULL,
  `regulator3` int(11) NOT NULL,
  `regulator4` int(11) NOT NULL,
  `regulator5` int(11) NOT NULL,
  `mainMotor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `details1`
--

INSERT INTO `details1` (`id`, `header_id`, `beltpress_id`, `jam`, `GPH1`, `GPH2`, `GPH3`, `GPH4`, `GPH5`, `regulator1`, `regulator2`, `regulator3`, `regulator4`, `regulator5`, `mainMotor`) VALUES
(1, 3, 1, '06:00:00', 1, 1, 1, 1, 1, 2, 4, 1, 3, 4, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `details2`
--

CREATE TABLE `details2` (
  `id` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `beltpress_id` int(11) NOT NULL,
  `jam` time NOT NULL,
  `sprayWater` tinyint(1) NOT NULL,
  `GPH6` tinyint(1) NOT NULL,
  `GPH7` tinyint(1) NOT NULL,
  `GPH8` tinyint(1) NOT NULL,
  `GPH9` tinyint(1) NOT NULL,
  `regulator1` int(11) NOT NULL,
  `regulator2` int(11) NOT NULL,
  `regulator3` int(11) NOT NULL,
  `regulator4` int(11) NOT NULL,
  `regulator5` int(11) NOT NULL,
  `mainMotor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `details2`
--

INSERT INTO `details2` (`id`, `header_id`, `beltpress_id`, `jam`, `sprayWater`, `GPH6`, `GPH7`, `GPH8`, `GPH9`, `regulator1`, `regulator2`, `regulator3`, `regulator4`, `regulator5`, `mainMotor`) VALUES
(1, 3, 2, '06:00:00', 1, 1, 1, 1, 1, 3, 4, 2, 3, 1, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `doc` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `doc`, `date`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`) VALUES
(3, 'MOM/DRP/20/20', '2020-07-17', 1, '2020-07-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role_id`, `is_active`) VALUES
(1, 'Haris Diyaul Fata', 'haris.diyaul.fata@gmail.com', 'qwerty12345', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beltpress`
--
ALTER TABLE `beltpress`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `details1`
--
ALTER TABLE `details1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `details2`
--
ALTER TABLE `details2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beltpress`
--
ALTER TABLE `beltpress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `details1`
--
ALTER TABLE `details1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `details2`
--
ALTER TABLE `details2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
