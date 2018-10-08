-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2018 pada 05.57
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(25) NOT NULL,
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(1, 'tri agust', 2147483647, 'd3mi4101', 'Perempuan', 'Array', 'Fakultas Ilmu Terapan', 'bandung'),
(2, 'tri agust', 2147483647, 'd3mi4101', 'Perempuan', 'Array', 'Fakultas Ilmu Terapan', 'bandung'),
(3, 'tri agust', 2147483647, 'd3mi4101', 'Perempuan', 'Renang', 'Faklutas Industri Kreatif', 'lampung'),
(4, 'uti', 2147483647, 'd3mi4101', 'Perempuan', 'Softball', 'Fakultas Ekonomi Bisnis', 'bandar lampung'),
(5, 'nuya', 342563, 'd3mi4101', 'Perempuan', 'Badminton', 'Faklutas Industri Kreatif', 'bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
