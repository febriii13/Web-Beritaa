-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2026 pada 19.22
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
-- Database: `tugas_web1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp(),
  `penulis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `deskripsi`, `isi`, `gambar`, `tanggal`, `penulis`, `kategori`, `views`) VALUES
(1, 'Film Transformer terbaru', '121', '13', 'Film Transformers: The Last Knight kembali menghadirkan aksi spektakuler antara Autobots dan Decepticons yang penuh ledakan dan efek visual memukau. Disutradarai oleh Michael Bay, film ini melanjutkan konflik besar antara manusia dan robot raksasa yang kini semakin kompleks dan menegangkan.\r\n\r\nDalam seri kelima ini, kisah berfokus pada Cade Yeager yang kembali terlibat dalam peperangan besar saat Optimus Prime menghilang dan kemudian ditemukan berada di sisi yang berlawanan. Rahasia masa lalu Transformers yang ternyata telah lama terhubung dengan sejarah manusia, termasuk legenda Raja Arthur, menjadi inti cerita yang mengejutkan.\r\n\r\nDibintangi oleh Mark Wahlberg sebagai Cade Yeager, serta kehadiran kembali Optimus Prime dan Bumblebee, film ini menyuguhkan pertarungan epik dengan teknologi CGI canggih dan adegan aksi berskala besar.\r\n\r\nTransformers: The Last Knight tidak hanya menampilkan pertempuran antar robot, tetapi juga mengangkat tema pengkhianatan, persahabatan, dan pengorbanan demi menyelamatkan Bumi dari kehancuran.', 'assets/1.jpg', '2026-03-04 00:13:29', 'febri', 'film', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
