-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2026 pada 02.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aspirasisiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(15) NOT NULL,
  `id_siswa` int(15) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(36) NOT NULL,
  `tanggal` date NOT NULL,
  `feedback` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `id_siswa`, `id_kategori`, `nama_kategori`, `judul`, `isi`, `tanggal`, `feedback`, `status`) VALUES
(2, 12345, 1, 'perpus', 'kurang lengkap', 'isi diperpuskurang lengkap serta kur', '2026-01-19', '', 'selesai'),
(3, 1111, 1, 'perpus', 'kerusakan', 'ada bocor dibagian sudut perpus', '2026-01-19', '', 'Diproses'),
(4, 1223, 1, 'perpus', 'kurang lengkap', 'alat alat', '2026-01-19', 'telah selesai', 'selesai'),
(5, 322425, 4, 'Lab', 'kerusakan', 'pc berkendala 1', '2026-01-26', 'sudah dikerjaka', 'selesai'),
(6, 34125637, 3, 'lapangan', 'kerusakan', 'lapangan bolong', '2026-01-27', 'diperbaiki', 'Diproses'),
(7, 32145, 2, 'toilet', 'kotor', 'kurang terawat', '2026-01-27', 'sedang laksana', 'Diproses'),
(8, 321231, 2, 'toilet', 'ember', 'ember yang hilang', '2026-02-02', 'dikerjakan', 'Diproses'),
(9, 32214, 2, 'lab', 'komputer', 'kekurangan komputer', '2026-02-06', 'beres', 'selesai'),
(10, 322425, 2, 'toilet', 'kotor', 'kurang bersih', '2026-02-09', '', 'Menunggu'),
(11, 2132, 2, 'toilet', 'rusak', 'pintu yang rusak', '2026-02-10', '', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(30) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'perpustakaan'),
(2, 'toilet'),
(3, 'lapangan'),
(4, 'laboratorium'),
(5, 'kelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `kelas`, `nis`) VALUES
(1, '12 mplb', '12345'),
(2, '12PPLG', '32145523'),
(3, '11 PPLG', '32145'),
(4, '11PPLG', '2334');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
