-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sarana Kesehatan', 'Polindes Berjumlah 1 dan Klinik KB berjumlah 1', 'asset-1.png', '2023-07-25 08:15:26', '2023-07-25 08:17:35'),
(2, 'Sarana Pendidikan', 'TK berjumlah 1, SD Berjumlah 1, RA berjumlah 1, dan MI berjumlah 1', 'asset-2.png', '2023-07-25 08:16:17', '2023-07-25 08:17:08'),
(3, 'Sarana Peribadatan', 'Masjid dan Mushola', 'asset-3.png', '2023-07-25 08:18:00', '2023-07-25 08:18:00'),
(4, 'Sarana Perekonomian', 'Koperasi Simpan Pinjam berjumlah 1 Unit dan Lumbung Pangan Desa berjumlah 1 Unit', 'asset-4.png', '2023-07-25 08:18:23', '2023-07-25 08:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '212,80 ha', 'Luas Wilayah Desa Mojosari', 'data-1.png', '2023-07-24 21:52:46', '2023-07-24 21:52:46'),
(2, '1343', 'Jumlah Penduduk Desa Mojosari', 'data-2.png', '2023-07-24 21:57:07', '2023-07-24 21:59:30'),
(3, '477', 'Jumlah KK Desa Mojosari', 'data-3.png', '2023-07-24 21:57:26', '2023-07-24 21:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `image`, `document`, `created_at`, `updated_at`) VALUES
(6, 'Pengajuan Akta Lahir', 'Form Untuk Mengajukan Akta Kelahiran', 'document-5.png', 'document-5.docx', '2023-07-25 07:50:15', '2023-07-25 07:50:15'),
(7, 'Formulir Biodata Kependudukan', 'Form Untuk Membuat Biodata Kependudukan', 'document-7.png', 'document-7.xlsx', '2023-07-25 07:52:18', '2023-07-26 21:43:44'),
(8, 'Formulir Pelaporan Pencatatan Sipil', 'Form Untuk Melakukan Sebuah Pencatatan Sipil', 'document-8.png', 'document-8.xlsx', '2023-07-25 07:58:21', '2023-07-26 21:48:13'),
(9, 'Formulir Pendaftaran Perpindahan Penduduk (Keluar)', 'Form Jika Penduduk Ingin Pindah Keluar Dari Desa', 'document-9.png', 'document-9.xlsx', '2023-07-25 08:03:57', '2023-07-26 21:48:41'),
(10, 'Formulir Pendaftaran Perpindahan Penduduk Masuk', 'Form Jika Penduduk Ingin Masuk dan Tinggal ke Desa Mojosari', 'document-10.png', 'document-10.xlsx', '2023-07-25 08:04:41', '2023-07-26 21:49:15'),
(11, 'SPTJM Perkawinan Atau Perceraian', 'Surat Untuk Masalah Perkawinan(Pernikahan) atau Perceraian', 'document-11.png', 'document-11.xlsx', '2023-07-25 08:05:35', '2023-07-26 21:47:51'),
(12, 'Surat Pernyataan Perubahan Elemen Data Kependudukan', 'Form Untuk Mengubah Data Kependudukan', 'document-12.png', 'document-12.xlsx', '2023-07-25 08:06:41', '2023-07-26 21:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Galeri-1.jpg', '2023-07-23 08:30:29', '2023-07-23 08:30:29'),
(2, 'Galeri-2.jpg', '2023-07-23 08:31:07', '2023-07-23 08:31:07'),
(3, 'Galeri-3.jpg', '2023-07-23 08:31:13', '2023-07-23 08:31:13'),
(4, 'Galeri-4.png', '2023-07-23 08:31:21', '2023-07-23 08:31:22'),
(5, 'Galeri-5.jpg', '2023-07-23 08:31:42', '2023-07-23 08:31:43'),
(6, 'Galeri-6.jpg', '2023-07-23 08:31:52', '2023-07-23 08:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_11_26_103730_create_sliders', 1),
(6, '2022_11_30_101732_create_services', 1),
(7, '2022_12_13_140930_create_perangkats', 1),
(8, '2022_12_13_141110_create_sambutans', 1),
(9, '2022_12_13_141241_create_galeris', 1),
(10, '2022_12_13_154943_create_data', 1),
(11, '2023_07_23_123421_create_documents', 1),
(12, '2023_07_24_033421_create_assets', 2),
(13, '2023_07_24_033936_create_potensi', 2),
(14, '2023_07_24_033936_create_potensis', 3),
(15, '2023_07_24_042707_create_transparansis', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkats`
--

CREATE TABLE `perangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perangkats`
--

INSERT INTO `perangkats` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Witoto', 'Kepala Desa', 'perangkat-1.png', '2023-07-23 08:56:35', '2023-07-23 08:56:35'),
(2, 'Muhammad Hafik Amin', 'Sekretaris Desa', 'perangkat-2.png', '2023-07-23 08:57:05', '2023-07-23 08:57:05'),
(3, 'Fitri Sarinastiti', 'Kadus 1', 'perangkat-3.png', '2023-07-23 08:57:27', '2023-07-23 08:57:27'),
(4, 'Jabun', 'Kadus 2', 'perangkat-4.png', '2023-07-23 08:57:44', '2023-07-26 21:40:47'),
(5, 'Sudarno', 'Kadus 3', 'perangkat-8.png', '2023-07-23 09:00:04', '2023-07-23 09:00:04'),
(6, 'Edi Sulistyo', 'Kepala Urusan Keuangan', 'perangkat-5.png', '2023-07-23 08:58:08', '2023-07-23 08:58:08'),
(7, 'Mukidi', 'Kepala Urusan dan Perencanaan', 'perangkat-6.png', '2023-07-23 08:58:29', '2023-07-23 08:58:29'),
(9, 'Sunarto', 'Kepala Seksi Pemerintahan', 'perangkat-9.png', '2023-07-23 09:01:07', '2023-07-23 09:01:08'),
(10, 'Zaenal Arifin', 'Kepala Seksi Kesejahteraan dan Pelayanan', 'perangkat-10.png', '2023-07-23 09:01:32', '2023-07-23 09:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `potensis`
--

CREATE TABLE `potensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `potensis`
--

INSERT INTO `potensis` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Peternakan', 'Usaha Peternakan Sapi, Kambing, dan Ayam Desa Mojosari', 'potensi-1.png', '2023-07-24 22:24:12', '2023-07-24 22:24:13'),
(2, 'Pertanian dan Perkebunan', 'Usaha Pertanian Padi dan Perkebunan Porang', 'potensi-2.png', '2023-07-24 22:24:49', '2023-07-24 22:24:50'),
(3, 'UMKM Seni Ukir', 'Pembuatan Ukiran dari Kayu dari Permintaan Client', 'potensi-3.png', '2023-07-24 22:25:33', '2023-07-24 22:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `sambutans`
--

CREATE TABLE `sambutans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sambutans`
--

INSERT INTO `sambutans` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sambutan Kepala Desa Mojosari', 'Selamat pagi/siang/sore/malam, Salam sejahtera untuk semua warga Desa Mojosari! Kita berkumpul hari ini untuk bersatu, bekerja sama, dan mewujudkan Desa Mojosari yang maju dan sejahtera. Mari aktif berpartisipasi dalam program pemerintah desa dan rawat kebersamaan di antara kita. Jaga lingkungan dan keharmonisan, serta dukunglah satu sama lain. Bergandengan tangan, kita bisa mencapai prestasi gemilang untuk Desa Mojosari kita. Terima kasih atas perhatian dan partisipasi aktif kalian semua. Wassalamualaikum Warahmatullahi Wabarakatuh.', 'Sambutan-1.png', '2023-07-23 09:01:58', '2023-07-24 22:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan KTP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:20:22', '2022-12-20 21:20:22'),
(2, 'Pembuatan Kartu Keluarga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:25:49', '2022-12-20 21:25:49'),
(3, 'Pembuatan Akte Kelahiran', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:26:21', '2022-12-20 21:26:21'),
(4, 'Pembuatan AKte Kematian', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:33:50', '2022-12-20 21:33:50'),
(5, 'Prosedur Pindah Domisili', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:34:28', '2022-12-20 21:34:28'),
(6, 'Pembuatan Surat Izin Keramaian', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies gravida erat, ac molestie diam varius ut. Aliquam sed arcu justo. Donec massa dolor, fringilla at purus eu, ullamcorper interdum nibh. Sed mollis augue vel eleifend pretium.', 'service.png', '2022-12-20 21:36:44', '2022-12-20 21:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'KEBUN BUAH DAN SAYUR KAMPUNG GERMAS DESA MOJOSARI', 'Gerakan Masyarakat Sehat Indonesia bertujuan untuk menciptakan masyarakat yang sehat secara fisik, mental, dan sosial, yang mampu berkontribusi secara optimal dalam pembangunan negara. Pada konteks ini, mencakup salah satu pilar yaitu perlindungan lingkungan yang mana gerakan ini juga harus mencakup upaya perlindungan lingkungan dari pencemaran udara, air, dan tanah, serta menggalakkan praktik-praktik ramah lingkungan dalam kehidupan sehari-hari.', 'Slider-3.jpg', '2023-07-23 08:32:23', '2023-07-23 08:32:23'),
(4, 'KEGIATAN SENAM BUGAR BERSAMA DESA MOJOSARI', 'Senam bugar adalah salah satu bentuk kegiatan fisik yang bertujuan untuk meningkatkan kesehatan dan kesejahteraan secara holistik. Senam bugar menggabungkan gerakan tubuh dengan musik dan dilakukan secara teratur untuk memperkuat otot, meningkatkan keseimbangan, meningkatkan kardiovaskular, dan meredakan stres. Kegiatan ini telah menjadi bagian penting dalam upaya masyarakat untuk menjaga dan meningkatkan kualitas hidup mereka.', 'Slider-4.jpg', '2023-07-23 08:32:52', '2023-07-23 08:33:28'),
(5, 'KELAS IBU HAMIL DESA MOJOSARI', 'Kelas ibu hamil adalah program pendidikan yang dirancang khusus untuk memberikan pengetahuan, dukungan, dan keterampilan bagi calon ibu dalam menghadapi perjalanan kehamilan dan persalinan dengan percaya diri dan tenang. Kelas ibu hamil bertujuan untuk memberikan informasi yang komprehensif dan akurat tentang kehamilan, proses persalinan, dan perawatan pascapersalinan.', 'Slider-5.png', '2023-07-23 08:33:15', '2023-07-23 08:33:15'),
(6, 'KOMUNITAS PETANI TANAMAN PORANG', 'Komunitas petani menjadi garda terdepan dalam mempertahankan keberlanjutan lingkungan dan ketahanan pangan. Salah satu contoh komunitas petani yang mengemban peran penting ini adalah \"Komunitas Petani Torang.\" Berbasis di daerah pedesaan di Indonesia, komunitas ini telah menunjukkan komitmen dan inovasi dalam mengembangkan pertanian berkelanjutan yang berfokus pada kelestarian lingkungan dan kemandirian pangan.', 'Slider-6.png', '2023-07-23 08:33:56', '2023-07-23 08:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `transparansis`
--

CREATE TABLE `transparansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bila', 'admin@mail.com', 'superadmin', NULL, '$2y$10$Ze79YeCXP2CJ/7Nz4kr9Ie95oflRR5IDMa0x5D7y/EDyQXnd1P0qu', NULL, '2023-07-23 05:52:33', '2023-07-23 05:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perangkats`
--
ALTER TABLE `perangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `potensis`
--
ALTER TABLE `potensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sambutans`
--
ALTER TABLE `sambutans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transparansis`
--
ALTER TABLE `transparansis`
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
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `perangkats`
--
ALTER TABLE `perangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potensis`
--
ALTER TABLE `potensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sambutans`
--
ALTER TABLE `sambutans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transparansis`
--
ALTER TABLE `transparansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
