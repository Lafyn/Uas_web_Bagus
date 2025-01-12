-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2025 pada 13.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `id_makanan` int(2) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `daerah_makanan` varchar(100) NOT NULL,
  `foto_makanan` blob DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id_makanan`, `nama_makanan`, `daerah_makanan`, `foto_makanan`, `Keterangan`) VALUES
(5, 'Nasi Padang', 'Padang', NULL, NULL),
(7, 'Nasi Goreng', 'Jakarta', NULL, NULL),
(8, 'Rendang', 'Sumatera Barat', NULL, NULL),
(9, 'Sate', 'Madura', NULL, NULL),
(10, 'Bakso', 'Malang', NULL, NULL),
(11, 'Pempek', 'Palembang', NULL, NULL),
(12, 'Nasi Uduk', 'Jawa Barat', NULL, NULL),
(13, 'Soto Ayam', 'Jawa Timur', NULL, NULL),
(14, 'Mie Aceh', 'Aceh', NULL, NULL),
(15, 'Gudeg', 'Yogyakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_minuman`
--

CREATE TABLE `tbl_minuman` (
  `id_minuman` int(2) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `daerah_minuman` varchar(100) NOT NULL,
  `foto_minuman` blob DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_minuman`
--

INSERT INTO `tbl_minuman` (`id_minuman`, `nama_minuman`, `daerah_minuman`, `foto_minuman`, `Keterangan`) VALUES
(3, 'Es Doger', 'Bandung', NULL, NULL),
(5, 'Es Cendol', 'Jawa Barat', NULL, NULL),
(6, 'Teh Botol Sosro', 'Jakarta', NULL, NULL),
(7, 'Jus Jambu Air', 'Jakarta', NULL, NULL),
(8, 'Wedang Ronde', 'Jawa Tengah', NULL, NULL),
(9, 'Bandrek', 'Jawa Barat', NULL, NULL),
(10, 'Kopi Aceh', 'Aceh', NULL, NULL),
(11, 'Es Kopyor', 'Jakarta', NULL, NULL),
(12, 'Susu Jahe', 'Jawa Tengah', NULL, NULL),
(13, 'Es Buah', 'Jakarta', NULL, NULL),
(14, 'Tamarillo Juice', 'Bali', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `id_makanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  MODIFY `id_minuman` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
