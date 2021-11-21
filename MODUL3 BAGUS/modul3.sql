-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 16.04
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
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(2093256445, 'Business Process Management Cases Vol. 2 Digital Transformation – Strategy, Processes and Execution', 'Bagus_1202190025', 2021, 'This book is a sequel and extension to the book “Business Process Management Cases\", published in its first edition by Springer in 2018.', '1200-1200-123828910_Mlp5OB.png', 'MVC', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_table`
--
ALTER TABLE `buku_table`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
