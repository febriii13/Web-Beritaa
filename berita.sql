-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2026 pada 19.24
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
(1, 'Film ', '121', '13', 'Film merupakan salah satu bentuk hiburan yang sangat populer di seluruh dunia. Melalui perpaduan gambar bergerak, suara, musik, dan cerita, film mampu menghadirkan berbagai emosi kepada penonton, mulai dari keseruan, ketegangan, hingga haru.\r\n\r\nSeiring perkembangan teknologi, industri film terus berkembang dengan menghadirkan efek visual yang semakin canggih serta cerita yang lebih beragam. Berbagai genre film seperti aksi, komedi, horor, drama, hingga animasi hadir untuk memenuhi selera penonton yang berbeda-beda.\r\n\r\nSaat ini film tidak hanya dapat ditonton di bioskop, tetapi juga melalui berbagai platform digital. Hal ini membuat masyarakat semakin mudah menikmati film kapan saja dan di mana saja sebagai sarana hiburan sekaligus media penyampaian pesan dan cerita.', 'shoot2.jpg', '2026-03-04 00:13:29', 'febri', 'film', 0),
(2, 'Zootopia 2', 'film ', '2', 'Film animasi Zootopia 2 kembali melanjutkan kisah petualangan seru di kota modern yang dihuni berbagai jenis hewan. Film ini merupakan sekuel dari film populer Zootopia 2 yang sebelumnya sukses menarik perhatian penonton di seluruh dunia dengan cerita yang menarik dan penuh pesan moral.\r\n\r\nCerita dalam Zootopia 2 masih mengikuti petualangan polisi kelinci pemberani, Judy Hopps, bersama rekannya si rubah cerdas Nick Wilde. Kali ini mereka kembali bekerja sama untuk memecahkan misteri baru yang mengancam kedamaian kota Zootopia.\r\n\r\nFilm produksi Walt Disney Animation Studios ini diperkirakan akan menghadirkan cerita yang lebih seru, karakter baru yang menarik, serta visual animasi yang semakin modern. Selain hiburan, film ini juga tetap membawa pesan tentang persahabatan, keberagaman, dan kerja sama dalam menghadapi berbagai masalah.\r\n\r\nDengan cerita yang segar dan humor khasnya, Zootopia 2 diharapkan dapat kembali memikat penonton dari berbagai kalangan, terutama para penggemar film animasi di seluruh dunia.\r\n\r\n', 'zoo2.jpeg', '2026-03-08 00:01:47', 'febri', 'film', 0),
(3, 'wicked', 'film', '3', 'Film musikal fantasi Wicked menghadirkan kisah menarik tentang asal-usul dua penyihir terkenal dari dunia Oz sebelum peristiwa dalam cerita The Wizard of Oz. Film ini mengangkat cerita persahabatan antara dua tokoh utama yang memiliki kepribadian sangat berbeda.\r\n\r\nCerita berfokus pada Elphaba, seorang gadis berkulit hijau yang sering disalahpahami oleh orang-orang di sekitarnya, dan Glinda, gadis populer yang ceria dan ambisius. Pertemuan mereka di universitas sihir di negeri Oz membuat keduanya menjalin persahabatan yang kuat, meskipun pada akhirnya takdir membawa mereka ke jalan yang berbeda.\r\n\r\nFilm ini dibintangi oleh Ariana Grande sebagai Glinda dan Cynthia Erivo sebagai Elphaba. Dengan lagu-lagu musikal yang terkenal serta visual dunia fantasi yang memukau, Wicked menjadi salah satu film musikal yang paling dinantikan oleh para penggemar film dan teater musikal.', 'wc2.webp', '2026-03-08 00:25:31', 'febri', 'film', 0),
(4, 'Godzilla x Kong The New Empire', 'film', '4', 'Film musikal fantasi Wicked menghadirkan kisah menarik tentang asal-usul dua penyihir terkenal dari dunia Oz sebelum peristiwa dalam cerita The Wizard of Oz. Film ini mengangkat cerita persahabatan antara dua tokoh utama yang memiliki kepribadian sangat berbeda.\r\n\r\nCerita berfokus pada Elphaba, seorang gadis berkulit hijau yang sering disalahpahami oleh orang-orang di sekitarnya, dan Glinda, gadis populer yang ceria dan ambisius. Pertemuan mereka di universitas sihir di negeri Oz membuat keduanya menjalin persahabatan yang kuat, meskipun pada akhirnya takdir membawa mereka ke jalan yang berbeda.\r\n\r\nFilm ini dibintangi oleh Ariana Grande sebagai Glinda dan Cynthia Erivo sebagai Elphaba. Dengan lagu-lagu musikal yang terkenal serta visual dunia fantasi yang memukau, Wicked menjadi salah satu film musikal yang paling dinantikan oleh para penggemar film dan teater musikal.', 'gz2.jpg', '2026-03-08 00:27:48', 'Febri', 'film', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
