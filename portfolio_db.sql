-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2025 pada 11.09
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image_url`, `created_at`) VALUES
(1, 'ECOSORTER', 'Ecosorter adalah platform inovatif yang memfasilitasi penjual dan pembeli sampah. Dengan melibatkan driver, platform ini memungkinkan pengepul untuk menjual sampah kepada pengrajin, sementara driver mengantarkan sampah yang dibeli langsung ke lokasi pengrajin. Konsep ini menciptakan sistem efisien dalam distribusi sampah, mempromosikan kolaborasi antara pengepul dan pengrajin untuk mendukung keberlanjutan dan pengelolaan limbah yang lebih baik.', 'img/ecosorter.png', '2025-01-08 02:50:43'),
(2, 'Smart Waste Nusantara', 'Smart Waste Nusantara adalah sistem pengelolaan sampah pintar berbasis web yang dirancang khusus untuk mendukung visi Ibu Kota Nusantara (IKN) sebagai kota hijau dan berkelanjutan. Sistem ini menawarkan berbagai fitur canggih, termasuk data real-time yang memungkinkan pemantauan volume, jenis, dan status pengolahan sampah secara langsung. Visualisasi data interaktif, seperti grafik dan diagram, memberikan informasi yang jelas dan mudah dipahami, mendukung pengambilan keputusan yang cepat dan akurat. Selain itu, platform ini juga menyediakan fitur pelaporan bagi masyarakat, di mana pengguna dapat melaporkan lokasi sampah liar atau masalah terkait kebersihan lingkungan secara langsung, sehingga dapat ditangani dengan lebih cepat oleh otoritas yang berwenang.', 'img/smartwastenusantara.png', '2025-01-16 09:53:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(7, 'AKHTAR GHIFARI', 'ghifariakhtar@gmail.com', 'Sangat profesional dan hasilnya luar biasa! Proyek selesai tepat waktu dengan kualitas yang melebihi ekspektasi. Tidak ragu untuk bekerja sama lagi di masa depan!', '2025-01-08 02:19:22'),
(9, 'Fandi Ahmad', 'fandi95@gmail.com', 'Aplikasi ini sangat user-friendly dan telah membantu saya menghemat banyak waktu! Fiturnya lengkap, stabil, dan terus diperbarui dengan hal-hal baru yang bermanfaat.', '2025-01-08 03:46:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
