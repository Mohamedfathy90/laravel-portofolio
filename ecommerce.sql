-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 12:12 AM
-- Server version: 8.0.29
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailed_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `excerpt`, `description`, `detailed_description`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '20+ Years Experience In this game, Means\nProduct Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designe', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\nUser experience design - (Product Design)\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.\r\n\r\nWeb and user interface design - Development\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.\r\n\r\nInteraction design - Animation\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.', NULL, '2023-04-25 16:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `about_images`
--

CREATE TABLE `about_images` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_images`
--

INSERT INTO `about_images` (`id`, `url`, `created_at`, `updated_at`) VALUES
(11, 'about_images/1764876199080909.png', '2023-05-03 10:31:42', '2023-05-03 10:31:42'),
(12, 'about_images/1764876199238119.png', '2023-05-03 10:31:42', '2023-05-03 10:31:42'),
(23, 'about_images/1764878288415413.png', '2023-05-03 11:04:55', '2023-05-03 11:04:55'),
(24, 'about_images/1764878288451158.png', '2023-05-03 11:04:55', '2023-05-03 11:04:55'),
(25, 'about_images/1764878288459395.png', '2023-05-03 11:04:55', '2023-05-03 11:04:55'),
(26, 'about_images/1764878288466305.png', '2023-05-03 11:04:55', '2023-05-03 11:04:55'),
(27, 'about_images/1764878288476162.png', '2023-05-03 11:04:55', '2023-05-03 11:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Fathy', 'Electrical Engineer', 'slider_images/1682433781.png', 'https://www.youtube.com/watch?v=ZO0UAs9TPAw&list=RDZO0UAs9TPAw&start_radio=1', NULL, '2023-04-25 13:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_24_224513_create_home_sliders_table', 2),
(6, '2023_04_25_154616_create_abouts_table', 3),
(7, '2023_04_25_185020_create_about_images_table', 4);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'mohamedamin45@yahoo.com', 'profile_images/hxN08fCuZXdUIy7s1zlpm0MWqbJVZ303X0mZNmoP.jpg', '2023-04-19 09:51:45', '$2y$10$XjYjv2w23yT7.c20PayoXucE6i04XD3/.yGYmIE98e2DYxJdNDvfi', '6epW25tAfJGri494OM88Xszv2TiYpuEITj1ORVXJ5Zpq3FMHhidSUSq5AoaQ', '2023-04-19 09:21:33', '2023-04-23 22:27:26'),
(2, 'ahmed', 'ahmed@gmail.com', NULL, NULL, '$2y$10$4Jtxr1ghU14mavnMyeXvyuDIbgV8utcZuklrO2bAAJSsPzMrUXWG2', NULL, '2023-04-19 09:41:00', '2023-04-19 09:41:00'),
(3, 'mahmoud', 'ahmedamin98@yahoo.com', NULL, NULL, '$2y$10$Sj0IZ/uM3WpJw4Ow2QU8We.M6eAG./wla05MiAvkV1R5EzFgRS64K', NULL, '2023-04-21 16:02:49', '2023-04-21 16:02:49'),
(4, 'ismail', 'ismail@yahoo.com', NULL, NULL, '$2y$10$zEf7Qg1ik9S7WsMZYp9RC.UWn0Od1hewe/QK5ulOYew4fVSBwa7NW', NULL, '2023-04-21 16:19:09', '2023-04-21 16:19:09'),
(5, 'borai', 'borai@yahoo.com', 'profile_images/XEyzeZ1ZBmVHpICJdITteduJkqpjImSijtzTnWt6.jpg', NULL, '$2y$10$WlK4pIDI1X7a9PLsmWA2oOC4KL4ophv.Muw77nn8Jq.8uwZLhI5ZG', NULL, '2023-04-22 06:06:51', '2023-04-22 06:06:51'),
(6, 'samir', 'samir@yahoo.com', 'profile_images/nophoto.jpg', '2023-04-22 06:11:34', '$2y$10$ik4eoV/RezADBpCHwuPn/.FOMjbcK5JuAoiAoYfE2mYhTDqzHXzXW', NULL, '2023-04-22 06:11:20', '2023-04-22 06:44:08'),
(7, 'shendy', 'shendy@yahoo.com', 'profile_images/nophoto.jpg', '2023-04-22 06:47:41', '$2y$10$l35ZWkDxUGqrIMQKn6kNFOWH2lWol5ueocAbWsSMMQYD8pky7XtWq', NULL, '2023-04-22 06:47:19', '2023-04-22 06:47:41'),
(8, 'zakaria', 'zakaria@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$gWBylL0.DdfVIkiEiQ4buOrpSdf0NVjZoglRU75fgrzYpQdRtof22', NULL, '2023-04-22 06:57:35', '2023-04-22 06:57:35'),
(9, 'ammar', 'ammar@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$yefASGMNUf2FaqGgczkfHeHyUNW15LgbcRKIdX6x6ZyRCjQ0Nq4R6', NULL, '2023-04-22 06:59:13', '2023-04-22 06:59:13'),
(10, 'medhat', 'medhat@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$AbwxMVZwALGY7jh.vUQn9eegyIqZos9e6U2sVyZFoJTtgIgbRPLTS', NULL, '2023-04-22 07:00:08', '2023-04-22 07:00:08'),
(11, 'khodary', 'khodary@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$8XyKo38moQnifYby/ax.AuRVvSCNPdmgdjvRzOkluvwcfpig6vVYm', NULL, '2023-04-22 07:01:26', '2023-04-22 07:01:26'),
(12, 'fathy', 'fathy@yahoo.cm', 'profile_images/nophoto.jpg', NULL, '$2y$10$otE8bgcGXkY/JM5cqjURlONv.Zy5e/0EkP/xkS4m.Gup0j0p9zV8u', NULL, '2023-04-22 07:04:27', '2023-04-22 07:04:27'),
(13, 'samia', 'samia@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$y9oftOql7Q2CcV1mHk5dMecivtZogM9p9Ha6bCTBijseNk3qr2n0i', NULL, '2023-04-22 07:05:45', '2023-04-22 07:05:45'),
(14, 'tasnim', 'tasnim@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$v20jHpdjuyumyJVjqlLLl.iDGNHum98nFYpwGSwe.DzaY1HTJ4F1u', NULL, '2023-04-22 07:10:07', '2023-04-22 07:10:07'),
(15, 'yasser', 'yasser@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$1kjfK5zpSeqhwLehXJkH5ud26dOghfBKRVHrLF5fsn1BzvosiAGWa', NULL, '2023-04-22 07:13:00', '2023-04-22 07:13:00'),
(16, 'kolibaly', 'kolibaly@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$fd3ePAseSVGi2abQqjnkEeJQbaTOv.y7e2OH0s8k7hb2711jMf7u6', NULL, '2023-04-27 07:47:57', '2023-04-27 07:47:57'),
(17, 'refaaat', 'refaaat@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$DQ/jtj25Mg.DcLGXbCQ9au6TVC/SFCN2jBkRgQ1VLHNDHd0.7k87C', NULL, '2023-04-27 07:52:51', '2023-04-27 07:52:51'),
(18, 'tareeek', 'tareeek@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$I.SdQmC485jAACHumrzf3u5yP53PlYJyBAz7ER3T2vPCRvCBYrWyy', NULL, '2023-04-27 07:59:35', '2023-04-27 07:59:35'),
(19, 'sobhy', 'sobhy@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$yUiV19WbXi5P0.aihwS/Hud/KNGhtyVvbcmfEJadYwpMqj4EF8uYy', NULL, '2023-04-27 08:05:17', '2023-04-27 08:05:17'),
(20, 'hassan', 'hassan@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$WlLy174fQDxzgN1EZUOIvOJDvsnys2F.dKQjL7B5tnTqhhnrO6Rmu', NULL, '2023-04-27 08:09:18', '2023-04-27 08:09:18'),
(21, 'shikabala', 'shikabala@yaho.cm', 'profile_images/nophoto.jpg', NULL, '$2y$10$Qb0bP3ttQFPcE4jVp21/e.e/jELeBHzgoEGdNsO2KY3SwTzz8J5b.', NULL, '2023-04-27 08:14:53', '2023-04-27 08:14:53'),
(22, 'neymar', 'neymar@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$J0ZaAFNbJxm8bPM9Lk5vUugVH1T.j89KIUXcT79xFZAqTY5xgdyJm', NULL, '2023-04-27 08:19:20', '2023-04-27 08:19:20'),
(23, 'messi', 'messi@yahoo.com', 'profile_images/nophoto.jpg', '2023-04-27 08:22:24', '$2y$10$QhLkU9t8iZHaiZOfQ1a4UOQVndnFxjvv1xLgu82d5m29UqSocFwP2', NULL, '2023-04-27 08:21:15', '2023-04-27 08:22:24'),
(24, 'sayoooda', 'sayed@yahoo.com', 'profile_images/1764328498356593.png', NULL, '$2y$10$oeY0Nkl9/0OEJ.vzRxjIlux3CeqRO4KGzON300Yw1KQTk89/lIMC2', NULL, '2023-04-27 09:26:14', '2023-04-27 09:26:14'),
(25, 'hhhhhhhhhh', 'hhhhhhh@yahoo.mail', NULL, NULL, '$2y$10$qIkdSW.5zwedo6VXAqHCm.UE668YTzqqoDa6Y5UNMbtHJAglxcNF2', NULL, '2023-04-27 10:09:18', '2023-04-27 10:09:18'),
(26, 'ttttttttttttttttt', 'ttttttttt@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$qQPEe3L4cgmg9IfucUDUUORqdtj9490uMNyv9nI.pil2ixAQOBlIq', NULL, '2023-04-27 19:55:42', '2023-04-27 19:55:42'),
(27, 'rrrrrrrr', 'rrrrrrrrrr@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$vyzXbbByYCrK.7N/ntPLBeqYzyGCM0FnnMZTzqAwByImJ7IFht5jy', NULL, '2023-04-27 19:57:25', '2023-04-27 19:57:25'),
(28, 'fffffffff', 'ffffffffff@dddddddd.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$pzdoko7jjeToqFqlUHJSOu11dGt7PdYnq.lyeURCzRHjCd3u18RXq', NULL, '2023-04-27 19:58:35', '2023-04-27 19:58:35'),
(29, 'ggggggggggg', 'ggggg@ggggg.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$TVzLcyBHKH4uERVB4s8BuusbTXdmESb3qztW5tegIXWisilKq7zeu', NULL, '2023-04-27 20:01:08', '2023-04-27 20:01:08'),
(30, 'hadeer', 'hadeer@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$FxoDdnBBUapV8.bHoakL8.UOdfgTqn5FrfFz4.raoKwEYHYbmCEYC', NULL, '2023-04-29 08:33:26', '2023-04-29 08:33:26'),
(31, 'khaled', 'khaled@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$HKFAeusZYsh8xZ2HkS/l2uYKx8hmhWD07CH417U7jsKXvWGR41mGq', NULL, '2023-04-29 08:37:24', '2023-04-29 08:37:24'),
(32, 'youssef', 'youssef@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$.nLpybIiF/sb.FDWNC3PqevfN.VZYoLjtMjb3BM/hqCfPAAU0sbaG', NULL, '2023-04-29 08:38:39', '2023-04-29 08:38:39'),
(33, 'youssef111', 'youssef111@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$43uZ816xjWAzHUlmBFeFZurHJuxDk8bN1xrUw0wIzcJPiklf7C38u', NULL, '2023-04-29 08:40:08', '2023-04-29 08:40:08'),
(34, 'marawan', 'marawan@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$IVRG8fjMlOZQ06iY74hkFOLpJsLz1kOsV54aYrYvuDmFOWuUCmXDm', NULL, '2023-04-29 08:42:29', '2023-04-29 08:42:29'),
(35, 'hany', 'hany@yahoo.com', 'profile_images/nophoto.jpg', NULL, '$2y$10$a6GnHbpLdLCmkAqyt.AaVO9s0o25SMf8.bKFFMOSnRsz1oILi5UUm', NULL, '2023-04-29 08:43:57', '2023-04-29 08:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_images`
--
ALTER TABLE `about_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_images`
--
ALTER TABLE `about_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
