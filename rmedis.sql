-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 07:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_06_114812_create_pasien_models_table', 2),
(6, '2022_08_06_124623_column_after_npasien', 3),
(7, '2022_08_07_234633_create_table_dokter', 4),
(11, '2022_08_08_023236_create_table_kondisi_pasien', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `n_medis` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `n_pasien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` double(8,2) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `n_medis`, `nik`, `n_pasien`, `jk`, `umur`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 123, 12345678910, 'Riyan', '', 20.00, 'Jl. baru 123', '2022-08-06 05:02:41', '2022-08-06 05:02:41'),
(2, 1234, 12345678911, 'Handros', 'L', 23.00, 'Jalan-jalan', '2022-08-06 06:02:05', '2022-08-06 06:02:05'),
(3, 12345, 987654321123, 'Tri', 'L', 4.00, 'Jl. jalan jalan', '2022-08-07 22:27:04', '2022-08-07 22:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_dokter`
--

CREATE TABLE `table_dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` bigint(20) NOT NULL,
  `n_dokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_dokter`
--

INSERT INTO `table_dokter` (`id`, `id_karyawan`, `n_dokter`, `posisi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Riyan', 'Spesialis', '2022-08-07 17:03:32', '2022-08-07 17:03:32'),
(2, 123, 'Handris', 'Spesial', '2022-08-07 18:54:27', '2022-08-07 18:54:27'),
(3, 12345, 'Saputra', 'Sepesialis lagi', '2022-08-07 21:05:31', '2022-08-07 21:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `table_kondisi_pasien`
--

CREATE TABLE `table_kondisi_pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `t_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dk_utama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dk_tambahan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dk_komplikasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_akibat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fisik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsultasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jo_tindakan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasien_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prognosa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_kondisi_pasien`
--

INSERT INTO `table_kondisi_pasien` (`id`, `id_pasien`, `t_masuk`, `t_keluar`, `bagian`, `kmr`, `id_dokter`, `a_masuk`, `d_masuk`, `d_keluar`, `dk_utama`, `dk_tambahan`, `dk_komplikasi`, `p_akibat`, `k_penyakit`, `r_penyakit`, `p_fisik`, `konsultasi`, `jo_tindakan`, `terapi`, `pasien_keluar`, `c_keluar`, `prognosa`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-09', '2022-08-08', 'fgdg', 'dghdh', '1', 'dfgdg', 'dfgd', 'dfgdg', NULL, NULL, NULL, 'fgdgf', 'hdfgd', 'sdfsf', 'sdfsdf', 'dsfsf', 'hdfhd', 'sgsgs', 'Perbaikan', 'Pulang Paksa', 'Prognosa ragu-ragu condong kearah buruk', 'dgfdfg', '2022-08-07 20:47:26', '2022-08-07 20:47:26'),
(2, 1, '2022-08-08', '2022-08-08', 'Lab', '3', '2', 'Sakit perut', 'Sakit types', 'Sehat', NULL, NULL, NULL, 'Makan pedas', '1234 ABC', 'Lambung', 'Sehat', 'Dokter sehat', 'Opname', 'Alternatif', 'Sembuh', 'Atas Persetujuan', 'Progonsa baik', 'Sehat selalu', '2022-08-07 20:52:26', '2022-08-07 20:52:26'),
(3, 1, '2022-08-07', '2022-08-08', 'Laborat', '5', '1', 'Sakit lagi', 'Sakit sakitan', 'Sembuh', 'Hayoo', NULL, NULL, 'Makan tidak teratur', 'BHAI', 'Tidak ada', 'Bagus', 'Dokter sehat selalu', 'Tidak', 'Terapi kesini', 'Perbaikan', 'Atas Persetujuan', 'Prognosa buruk tidak memberikan harapan', 'Kesini lagi', '2022-08-07 20:57:25', '2022-08-07 20:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_karyawan`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, '123', 'Riyan Handris', 'riyanhandris', '$2y$10$lPnXxUHhZhYaF86Fls7IyOf0VMcxl/HY3Gp9t4GJTRbdj.ZCcQuxy', NULL, '2022-08-04 20:39:33', '2022-08-04 20:39:33'),
(11, '12', 'Riyan Handris', 'riyanhand', '$2y$10$jWi68YWfY74Bt53Fnz3EE.r6mwCf0TaQC0fyo0GPtMBbs7DLqk6eS', NULL, '2022-08-04 20:48:35', '2022-08-04 20:48:35'),
(12, '1234', 'Riyan Handris', 'riyanha', '$2y$10$g4QCRRnpWY6BAXrr6c/aEeeYhao0/msSDa/5Z5fUztRZeCYmcMlXu', NULL, '2022-08-04 20:49:32', '2022-08-04 20:49:32'),
(13, '123456', 'Mandala Tri Handrista', 'mandala', '$2y$10$WrsWsFz4lJDByFwuXbYVneIf2vpejC2Ny6XemRb8cq34HQylIKiIa', NULL, '2022-08-09 02:11:44', '2022-08-09 02:11:44');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `table_dokter`
--
ALTER TABLE `table_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kondisi_pasien`
--
ALTER TABLE `table_kondisi_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_dokter`
--
ALTER TABLE `table_dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_kondisi_pasien`
--
ALTER TABLE `table_kondisi_pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
