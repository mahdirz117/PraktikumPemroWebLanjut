-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 03:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prak_pwl_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_022107_create_bukus_table', 1),
(6, '2023_05_24_024030_create_book_table', 1),
(7, '2023_05_24_041941_create_book_table', 2),
(8, '2023_05_24_062650_create_tb_pegawai_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_buku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_buku` int(11) NOT NULL,
  `jumlah_buku` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `nama_buku`, `kategori_buku`, `penerbit_buku`, `tahun_buku`, `jumlah_buku`, `created_at`, `updated_at`) VALUES
(1, 'Si Kancil - edited', 'Anak - anak', 'Bukunesia', 2017, 13, '2023-05-24 04:24:59', '2023-05-24 04:24:59'),
(2, 'Geografi Indonesia - edited', 'Ilmu Pengeteahuan Alam', 'Graha Ilmu', 2020, 5, '2023-05-24 04:26:09', '2023-05-24 04:26:09'),
(3, 'Kewarganegaraan dan Sosial', 'Politik', 'Bukunesia', 2019, 8, '2023-05-24 04:32:30', '2023-05-24 04:32:30'),
(4, 'Kekuatan Tuhan di Hati', 'Religi', 'Al Hayat', 2015, 11, '2023-05-24 04:28:51', '2023-05-24 04:28:51'),
(5, 'Big Bang Theory', 'Ilmu Pengetahuan Alam', 'Deep Publish', 2016, 3, '2023-05-24 04:28:51', '2023-05-24 04:28:51'),
(6, 'Jalan Besar di Langit', 'Novel', 'Faloon Publishing', 2022, 5, '2023-05-24 04:30:50', '2023-05-24 04:30:50'),
(7, 'Kutipan Ibu', 'Novel', 'Kata Depan', 2021, 10, '2023-05-24 04:30:50', '2023-05-24 04:30:50'),
(8, 'tes 7', 'Anak - anak', 'Bukunesia', 2021, 88, '2023-06-21 02:56:04', '2023-06-21 02:56:04'),
(10, 'tes Fix', 'Anak - anak', 'Bukunesia', 2023, 99, '2023-06-21 02:59:06', '2023-06-21 02:59:06'),
(11, 'tes lagi lagi', 'Anak - anak', 'Bukunesia', 1999, 1, '2023-06-21 04:25:36', '2023-06-21 04:25:36'),
(12, 'Demokrasi Liberasi', 'Politik', 'Deep Publish', 2015, 15, '2023-06-21 11:31:34', '2023-06-21 11:31:34'),
(13, 'Pengantar Genetik', 'Ilmu Pengetahuan Alam', 'Bukunesia', 2018, 12, '2023-06-21 04:28:22', '2023-06-21 04:28:22'),
(14, 'Spektrum atau Kromosom?', 'Ilmu Pengetahuan Alam', 'Falcon Publishing', 2022, 10, '2023-06-21 04:28:57', '2023-06-21 04:28:57'),
(21, 'tes edit', 'Religi', 'Graha Ilmu', 2011, 15, '2023-07-04 18:49:02', '2023-07-04 18:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` char(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telfon_pegawai` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pegawai` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_pegawai` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nama_pegawai`, `telfon_pegawai`, `alamat_pegawai`, `posisi_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Putri Dian', '085627114432', 'Jl. Letkol Hardjono', 'Front Office', '2023-05-24 06:48:11', '2023-05-24 06:48:11'),
(2, 'Amelia Suci Ananda', '081723421177', 'Jl. Mawar', 'Pustakawan', '2023-05-24 06:48:11', '2023-05-24 06:48:11'),
(3, 'Adrian Drake', '089756688899', 'Jl. Danau Toba', 'Pustakawan', '2023-05-24 06:51:20', '2023-05-24 06:51:20'),
(4, 'Melinda Kusuma', '08572122344', 'Jl. Melati', 'Pustakawan', '2023-05-24 06:51:20', '2023-05-24 06:51:20'),
(5, 'Handy Davy', '085678776696', 'Jl. Kenanga', 'Office Boy', '2023-05-24 06:53:36', '2023-05-24 06:53:36'),
(6, 'Randy Pratama', '081823942217', 'Jl. Araya', 'Office Boy', '2023-05-24 06:53:36', '2023-05-24 06:53:36'),
(7, 'Sherli Eka Hikmawati', '089264346477', 'Jl. Permata Indah', 'Pustakawan', '2023-05-24 06:55:13', '2023-05-24 06:55:13'),
(8, 'Muklis Alex', '085982378214', 'Jl. Keramat Asri', 'Penjaga Kamar Mandi', '2023-05-24 06:55:13', '2023-05-24 06:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahdi Romzuz Zaki', '211131016@mhs.stiki.ac.id', NULL, '$2y$10$0A0p9c6ga0UhdYWELrJUH.G8jYEr/qT80uJP3mh9P1yP8au2klWxq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
