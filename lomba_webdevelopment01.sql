-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Nov 2024 pada 12.55
-- Versi server: 8.0.40
-- Versi PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba_webdevelopment01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `judul_laporan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('REJECTED','RECEIVED') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id`, `user_id`, `judul_laporan`, `gambar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'saran', '', 'mbuhaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'RECEIVED', '2024-10-25 11:05:01', '2024-10-25 20:42:35'),
(4, 4, 'sampah berserakan', NULL, 'Boruto Uzumaki adalah karakter utama serial Boruto: Naruto Next Generations. Dia adalah anak pertama Naruto dan Hinata. Berstatus putra Naruto, Boruto juga punya sifat keras kepala dan tak kenal takut seperti bapaknya. Bedanya, dia mungkin tampak lebih pintar dibandingkan ayahnya yang kurang berbakat saat kecil. Selain itu, dia juga suka fast food seperti burger, berbeda dengan Naruto hanya menyukai ramen. Pascamengalahkan Momoshiki Otsutsuki, Boruto punya segel karma di tangannya. Segel tersebut menandai dirinya sebagai wadah Momoshiki berikutnya di kemudian hari. Selain itu, dia juga punya mata kuat bernama Jougan. Meski belum banyak diketahui tentang potensi kekuatan maksimalnya, Dojutsu ini memberikan kekuatan lebih kepada Boruto saat bertarung.  Artikel ini telah diterbitkan di halaman SINDOnews.com pada Minggu, 18 Juni 2023 - 18:05 WIB oleh Lutfan Faizi dengan judul \"Profil Singkat 13+ Karakter Boruto: Naruto Next Generations\". Untuk selengkapnya kunjungi: https://gensindo.sindonews.com/read/1130407/700/profil-singkat-13-karakter-boruto-naruto-next-generations-1687086391  Untuk membaca berita lebih mudah, nyaman, dan tanpa banyak iklan, silahkan download aplikasi SINDOnews. - Android: https://sin.do/u/android - iOS: https://sin.do/u/ios', 'RECEIVED', '2024-10-29 05:44:51', '2024-11-02 01:00:20'),
(5, 4, 'Bau', '', 'Banget', 'RECEIVED', '2024-10-29 06:08:32', '2024-10-29 06:08:32'),
(6, 5, 'sampah kotor', '', 'sampah berserakan', 'REJECTED', '2024-10-29 09:22:23', '2024-10-29 09:22:23'),
(7, 4, 'Sampah Organik', '', 'Bau Bangeeeet', 'REJECTED', '2024-10-29 11:56:14', '2024-10-29 11:56:14'),
(8, 4, 'sampah Masyarakat', '1730262851.png', 'banyak cuy', 'REJECTED', '2024-10-29 20:24:55', '2024-10-29 21:34:11'),
(9, 4, 'sampah plastik', '1730264822.jpg', 'sampahnya banyak', 'REJECTED', '2024-10-29 22:07:02', '2024-10-29 22:07:02'),
(10, 4, 'sampah sungai', '1730265119.png', 'Membuat tersumbat', 'REJECTED', '2024-10-29 22:11:59', '2024-10-29 22:11:59'),
(11, 4, 'sampah ban', '1730265211.png', 'tidak boleh dibakar', 'REJECTED', '2024-10-29 22:13:32', '2024-10-29 22:15:47'),
(12, 4, 'sampah aq', '1730267168.png', 'bla bla', NULL, '2024-10-29 22:46:08', '2024-10-29 22:46:08'),
(13, 4, 'sampah baru', NULL, 'banyak sekaci', NULL, '2024-10-29 22:52:02', '2024-10-29 22:52:02'),
(14, 3, 'sampah', NULL, 'mbuh', NULL, '2024-11-02 02:47:27', '2024-11-02 02:47:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_depan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_belakang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('ADMIN','USER') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafi', 'ardiansyah', 'raafkieducation@gmail.com', NULL, '$2y$10$TmYDtIHcxh2A1O2Memos8eU1.v.BlArAWPUk8ht2XZnOlz6.f7vjq', 'ADMIN', NULL, '2024-10-25 09:15:07', '2024-10-25 09:15:07'),
(2, 'rrrrrr', '1111111111', 'fatoni@test.test', NULL, '$2y$10$Csww/XPfG6S7PQblrDReoOpPZjtxKVS8Hizx23CKj31ZyEWHpFoDC', 'ADMIN', NULL, '2024-10-25 09:21:23', '2024-10-25 09:21:23'),
(3, 'asu', 'jaran', 'rafkikaramganyar45@gmail.com', NULL, '$2y$10$n1HOl0GzEfAtjDslaoCXMebRMxLsJkQw4r9blPBKGO4Mz/oaos7Gy', 'USER', NULL, '2024-10-25 10:10:25', '2024-10-25 10:10:25'),
(4, 'Dammar', 'putra', 'damar@test.test', NULL, '$2y$10$Ar4Wj/Wi4NPlq2Mt7uE49OmKO4LuI4GRetCjxJHyB/KE918ldZTHa', 'USER', NULL, '2024-10-25 18:19:54', '2024-10-25 18:19:54'),
(5, 'Davin', 'Sangar', 'davin@test.test', NULL, '$2y$10$yUu6AHwbC98gs.EnltGoa.kwlKCk8mTJfHwBFjfqWxVxu76R6jNJ.', 'USER', NULL, '2024-10-29 05:46:42', '2024-10-29 05:46:42'),
(6, 'Umar', 'Albu', 'umaralbu20@gmail.com', NULL, '$2y$10$C9wubCMkScCedgF2e6XiHugR3XpugEvMH33RvBda21y11DMHEvbrK', 'USER', NULL, '2024-11-02 01:32:15', '2024-11-02 01:32:15'),
(7, 'Seno', 'Dwi', 'senodwi32@gmail.com', NULL, '$2y$10$ddCufdvnS.toOwbA8P2Ut.v4ah8sE/Nzv1zen3azEaUCPmPZfSC66', 'USER', NULL, '2024-11-02 02:06:09', '2024-11-02 02:06:09'),
(8, 'Egi', 'Ilham', 'egiilham34@gmail.com', NULL, '$2y$10$EHk3TWMoGwtJE9lOye.B0.NF5ovAiKgSkeSMIqCJJzsd7lsUjJhlG', 'USER', NULL, '2024-11-02 02:10:58', '2024-11-02 02:10:58'),
(9, 'Muhammad', 'Rafi', 'muhammadrafi35@gmail.com', NULL, '$2y$10$IKXlHSzknSoWzea6o29uGu2gqjEK829.ekUmO5Y/hwIsSUMT7xyLS', 'ADMIN', NULL, '2024-11-02 02:13:21', '2024-11-02 02:13:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
