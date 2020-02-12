-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Okt 2019 pada 07.46
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'Ilham Musyafa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` varchar(11) NOT NULL,
  `judul_catatan` varchar(100) NOT NULL,
  `isi_catatan` text NOT NULL,
  `tanggalpembuatan` date NOT NULL,
  `foto_catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `judul_catatan`, `isi_catatan`, `tanggalpembuatan`, `foto_catatan`) VALUES
('31', 'A', 'BA', '2019-10-23', 'jaboga.png'),
('33', 'C', 'D', '2019-10-23', 'kaos.jpeg'),
('34', 'D', 'E', '2019-10-23', 'smoke_stock_1_by_grahamphisherdotcom.png'),
('35', 'E', 'F', '2019-10-23', '0018439_skeleton-motocross-helmet.png'),
('CTT001', 'awdadxx fb', 'vxvv xvd bb bn bn', '2019-10-27', '1572186221.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_tambahan`
--

CREATE TABLE `gambar_tambahan` (
  `id_gambar` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_catatan` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar_tambahan`
--

INSERT INTO `gambar_tambahan` (`id_gambar`, `id_catatan`, `gambar`, `deskripsi`) VALUES
('GMB001', 'CTT001', '1572282101.png', 'sgsegseg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `gambar_tambahan`
--
ALTER TABLE `gambar_tambahan`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
