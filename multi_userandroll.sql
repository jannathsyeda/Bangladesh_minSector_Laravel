-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 09:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_userandroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2019_12_12_213050_create_roles_table', 1),
(5, '2020_11_12_164803_create_ministry_sectors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ministry_sectors`
--

CREATE TABLE `ministry_sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ministry_sectors`
--

INSERT INTO `ministry_sectors` (`id`, `sector`, `description`, `created_at`, `updated_at`) VALUES
(1, 'education', '<div>education is most imp sector for bng</div>', NULL, '2020-11-12 14:22:42');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'Kazi', 'admin@gmail.com', NULL, '$2y$10$1wuE29UUqV3jgM0rAxDv8.3Aii3u77mu/VPie5reDrdQUleocu02a', NULL, NULL, NULL),
(2, 2, 'fahima', 'admin1', 'jannathsyedae6@gmail.com', NULL, '$2y$10$S4985aL4fwYxTGU55.8qieQ8PankUEYoMWc.x53DD9kl0H291MKZe', NULL, '2020-11-11 14:57:44', '2020-11-11 14:57:44'),
(3, 2, '8Q7TTo0cbl', '4nvkqurgcp', 'w38jsg@ve3c.com', NULL, '$2y$10$2ZSA/xuUaVmS.zZxnJkwPu2DWubHuQLCnpP6bAxZQfWiytFtch4r.', NULL, '2020-11-11 15:35:17', '2020-11-11 15:35:17'),
(4, 1, 'mXUMw2EEeN', 'coal7xzl7h', 'w38jsgo@ve3c.com', NULL, '$2y$10$d9tn65Ph66gnzltBhan1duWI3uqejrRJ0cS1TXT/W/4zBbSVdg6pi', NULL, '2020-11-11 15:40:00', '2020-11-11 15:40:00'),
(5, 1, 'b6HmuZ6M7k', 'klaw2smfj1', 'w38777jsg@ve3c.com', NULL, '$2y$10$Sr4fsrPdBiARPBEY6an3megggdORahFUaAoHYHUB6xYDe0k02uSR2', NULL, '2020-11-11 15:41:52', '2020-11-11 15:41:52'),
(6, 1, '583ORf6ERU', 'qtnvuihxse', 'w388777jsg@ve3c.com', NULL, '$2y$10$HP8DXQiSOivmACjJ9ncn4.kva3pvGIp12G0WrYmd2L8yNIbjBR2OO', NULL, '2020-11-11 15:45:13', '2020-11-11 15:45:13'),
(7, 2, 'vyyV5H8ttttku0xt', 'vxen686mr8p', 'w388777778899jsog@ve3c.com', NULL, '$2y$10$2U15EX6nD.bOJXF0UWESluAhztlYy0LEukC.NPMiKHnPQSFA4s3ga', NULL, '2020-11-11 16:14:27', '2020-11-11 16:14:27'),
(8, 1, 'vyyV5H8ttttiku0xt', 'vxen686mr8op', 'w38877777u8899jsog@ve3c.com', NULL, '$2y$10$66YYdsZ44G4BIuz9GjuSL.k2Epd1RMHHdUo5n7.ldvidNRKDoFetG', NULL, '2020-11-11 16:17:29', '2020-11-11 16:17:29'),
(9, 1, 'vyyV5H8ttt0tku0xt', 'vxen9686mr8p', 'w38877u7778899jsog@ve3c.com', NULL, '$2y$10$MVn4juaaPQa2bADjiUETNe747DXq8h4gUN//y3njr2SRM9m2U2W0W', NULL, '2020-11-11 16:55:31', '2020-11-11 16:55:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry_sectors`
--
ALTER TABLE `ministry_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ministry_sectors`
--
ALTER TABLE `ministry_sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
