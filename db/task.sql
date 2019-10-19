-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 09:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','accountant') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `img`, `type`, `group_id`, `remember_token`, `active`, `device_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'o.kamel20@gmail.com', '$2y$10$V85J13DlvMjnFYS3TNtbP.m3jRVyFrVfC4bQFuzv.fZb.QVAJcVwK', 'admins/uFaE4AXceK5RXR3O22TKlbYGpyfWmyhhAeO4O3Uz.png', 'admin', 1, 'RVUytglDlh91LrU7aqFHJvy0qXcrnNMypLaef0d9ixN024AEHz6mNki5BjF2', 0, NULL, '2018-05-09 08:28:17', '2019-04-11 14:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name_ar` varchar(255) NOT NULL,
  `group_name_en` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name_ar`, `group_name_en`, `active`, `created_at`, `updated_at`) VALUES
(1, 'مديرين', 'managers', 1, '2019-04-11 14:00:40', '2019-04-11 15:00:40'),
(5, 'مشرفين', 'supervisors', 1, '2018-11-14 21:34:48', '2018-11-14 22:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `groups_helps`
--

CREATE TABLE `groups_helps` (
  `id` int(11) NOT NULL,
  `group_name_ar` varchar(255) NOT NULL,
  `group_name_en` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups_helps`
--

INSERT INTO `groups_helps` (`id`, `group_name_ar`, `group_name_en`, `active`, `created_at`, `updated_at`) VALUES
(1, 'مديرين', 'managers', 1, '2018-11-14 21:25:34', '2018-11-14 22:23:06'),
(5, 'مشرفين', 'supervisors', 1, '2018-11-14 21:34:48', '2018-11-14 22:34:48'),
(7, 'اعضاء فى التطبيق', 'user for app', 1, '2018-11-19 23:53:23', '2018-11-19 23:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `groups_routes`
--

CREATE TABLE `groups_routes` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups_routes`
--

INSERT INTO `groups_routes` (`id`, `group_id`, `route`, `created_at`, `updated_at`) VALUES
(54, 5, 'adminAll', 2018, '2018-11-14 22:34:48'),
(55, 5, 'profile', 2018, '2018-11-14 22:34:48'),
(56, 5, 'settingIndex', 2018, '2018-11-14 22:34:48'),
(57, 5, 'settingUpdate', 2018, '2018-11-14 22:34:48'),
(58, 5, 'sections', 2018, '2018-11-14 22:34:48'),
(59, 5, 'sectionsCreate', 2018, '2018-11-14 22:34:48'),
(60, 5, 'sectionsEdit', 2018, '2018-11-14 22:34:48'),
(61, 5, 'sectionsDestroyMultiple', 2018, '2018-11-14 22:34:48'),
(62, 5, 'sectionsactiveMultiple', 2018, '2018-11-14 22:34:48'),
(63, 5, 'services', 2018, '2018-11-14 22:34:48'),
(64, 5, 'servicesCreate', 2018, '2018-11-14 22:34:48'),
(65, 5, 'servicesEdit', 2018, '2018-11-14 22:34:48'),
(66, 5, 'servicesDestroyMultiple', 2018, '2018-11-14 22:34:48'),
(67, 5, 'servicesactiveMultiple', 2018, '2018-11-14 22:34:48'),
(68, 5, 'clients', 2018, '2018-11-14 22:34:48'),
(69, 5, 'newOffer', 2018, '2018-11-14 22:34:48'),
(100, 1, 'adminAll', 2019, '2019-04-11 15:00:40'),
(101, 1, 'profile', 2019, '2019-04-11 15:00:40'),
(102, 1, 'settingIndex', 2019, '2019-04-11 15:00:40'),
(103, 1, 'settingUpdate', 2019, '2019-04-11 15:00:40'),
(104, 1, 'admins', 2019, '2019-04-11 15:00:40'),
(105, 1, 'adminsCreate', 2019, '2019-04-11 15:00:40'),
(106, 1, 'adminsEdit', 2019, '2019-04-11 15:00:40'),
(107, 1, 'adminsDestroy', 2019, '2019-04-11 15:00:40'),
(108, 1, 'adminsDestroyMultiple', 2019, '2019-04-11 15:00:40'),
(109, 1, 'adminsactiveMultiple', 2019, '2019-04-11 15:00:40'),
(110, 1, 'groups', 2019, '2019-04-11 15:00:40'),
(111, 1, 'groupsCreate', 2019, '2019-04-11 15:00:40'),
(112, 1, 'groupsEdit', 2019, '2019-04-11 15:00:40'),
(113, 1, 'groupsDestroy', 2019, '2019-04-11 15:00:40'),
(114, 1, 'groupsDestroyMultiple', 2019, '2019-04-11 15:00:40'),
(115, 1, 'groupsactiveMultiple', 2019, '2019-04-11 15:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `groups_route_helps`
--

CREATE TABLE `groups_route_helps` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups_route_helps`
--

INSERT INTO `groups_route_helps` (`id`, `group_id`, `route`, `created_at`, `updated_at`) VALUES
(7, 1, 'adminAll', 2018, '2018-11-14 21:24:15'),
(8, 1, 'profile', 2018, '2018-11-14 21:24:18'),
(9, 1, 'settingIndex', 2018, '2018-11-14 21:24:20'),
(10, 1, 'settingUpdate', 2018, '2018-11-14 21:24:22'),
(11, 1, 'admins', 2018, '2018-11-14 21:24:25'),
(12, 1, 'adminsCreate', 2018, '2018-11-14 21:24:27'),
(13, 1, 'adminsEdit', 2018, '2018-11-14 21:24:33'),
(14, 1, 'adminsDestroy', 2018, '2018-11-14 21:24:35'),
(15, 1, 'adminsDestroyMultiple', 2018, '2018-11-14 21:24:38'),
(16, 1, 'adminsactiveMultiple', 2018, '2018-11-14 21:24:40'),
(17, 1, 'sections', 2018, '2018-11-14 21:24:42'),
(18, 1, 'sectionsCreate', 2018, '2018-11-14 21:24:46'),
(19, 1, 'sectionsEdit', 2018, '2018-11-14 21:24:50'),
(20, 1, 'sectionsDestroy', 2018, '2018-11-14 21:24:52'),
(21, 1, 'sectionsDestroyMultiple', 2018, '2018-11-14 21:25:25'),
(22, 1, 'sectionsactiveMultiple', 2018, '2018-11-14 21:25:25'),
(23, 1, 'services', 2018, '2018-11-14 21:25:25'),
(24, 1, 'servicesCreate', 2018, '2018-11-14 21:25:25'),
(25, 1, 'servicesEdit', 2018, '2018-11-14 21:25:26'),
(26, 1, 'servicesDestroy', 2018, '2018-11-14 21:25:26'),
(27, 1, 'servicesDestroyMultiple', 2018, '2018-11-14 21:25:26'),
(28, 1, 'servicesactiveMultiple', 2018, '2018-11-14 21:25:26'),
(29, 1, 'clients', 2018, '2018-11-14 21:25:26'),
(30, 1, 'clientsDestroy', 2018, '2018-11-14 21:25:26'),
(31, 1, 'newOffer', 2018, '2018-11-14 21:25:26'),
(32, 1, 'groups', 2018, '2018-11-14 21:35:06'),
(33, 1, 'groupsCreate', 2018, '2018-11-14 21:35:09'),
(34, 1, 'groupsEdit', 2018, '2018-11-14 21:35:11'),
(35, 1, 'groupsDestroy', 2018, '2018-11-14 21:35:14'),
(36, 1, 'groupsDestroyMultiple', 2018, '2018-11-14 21:35:16'),
(37, 1, 'groupsactiveMultiple', 2018, '2018-11-14 21:35:18'),
(54, 5, 'adminAll', 2018, '2018-11-14 22:34:48'),
(55, 5, 'profile', 2018, '2018-11-14 22:34:48'),
(56, 5, 'settingIndex', 2018, '2018-11-14 22:34:48'),
(57, 5, 'settingUpdate', 2018, '2018-11-14 22:34:48'),
(58, 5, 'sections', 2018, '2018-11-14 22:34:48'),
(59, 5, 'sectionsCreate', 2018, '2018-11-14 22:34:48'),
(60, 5, 'sectionsEdit', 2018, '2018-11-14 22:34:48'),
(61, 5, 'sectionsDestroyMultiple', 2018, '2018-11-14 22:34:48'),
(62, 5, 'sectionsactiveMultiple', 2018, '2018-11-14 22:34:48'),
(63, 5, 'services', 2018, '2018-11-14 22:34:48'),
(64, 5, 'servicesCreate', 2018, '2018-11-14 22:34:48'),
(65, 5, 'servicesEdit', 2018, '2018-11-14 22:34:48'),
(66, 5, 'servicesDestroyMultiple', 2018, '2018-11-14 22:34:48'),
(67, 5, 'servicesactiveMultiple', 2018, '2018-11-14 22:34:48'),
(68, 5, 'clients', 2018, '2018-11-14 22:34:48'),
(69, 5, 'newOffer', 2018, '2018-11-14 22:34:48');

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
(7, '2018_04_26_134913_create_categories_table', 1),
(8, '2018_04_26_135042_create_sub_categories_table', 1),
(10, '2014_10_12_000000_create_users_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(12, '2018_04_16_223610_create_admins_table', 2),
(13, '2018_04_23_065748_create_files_table', 2),
(14, '2018_04_23_075556_create_settings_table', 2),
(15, '2018_04_26_131252_create_contacts_table', 2),
(16, '2018_04_27_220748_create_notifications_table', 2),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(20, '2016_06_01_000004_create_oauth_clients_table', 3),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(22, '2016_03_05_060834_create_conversations_table', 4),
(23, '2016_03_05_060939_create_messages_table', 4),
(24, '2016_03_05_061137_create_conversation_user_table', 4),
(25, '2016_03_06_022240_create_message_notification_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name_en`, `app_name_ar`, `app_logo`, `email`, `snapchat_link`, `phone_one`, `lat`, `long`, `address_en`, `address_ar`, `created_at`, `updated_at`) VALUES
(1, 'task', 'task', 'setting/YUPDugta8ohXvchsCA1Yp7XULZKHD3bEgre9WZ9T.png', 'email4@gmail.com', 'https://www.snapchat.com/add/darsyApp', '0599775570', '24.7086658761889', '46.68333307503667', '2832, Al Olaya, Riyadh 12244 7330, Saudi Arabia', '2832، العليا، الرياض 12244 7330، السعودية', NULL, '2019-04-11 14:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  `rating` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sub_end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img`, `mobile`, `lat`, `longt`, `address`, `device_token`, `code`, `type`, `city_id`, `active`, `rating`, `sub_end`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'sasa', 'user@use1r.com', '$2y$10$wOQySkr3Q/s0K2JJ09mRR.Ot6LQf1APq4xzYbjjH21S8J0zwXhe7m', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', '2018-11-20 20:30:09', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_helps`
--
ALTER TABLE `groups_helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_routes`
--
ALTER TABLE `groups_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_route_helps`
--
ALTER TABLE `groups_route_helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups_helps`
--
ALTER TABLE `groups_helps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups_routes`
--
ALTER TABLE `groups_routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `groups_route_helps`
--
ALTER TABLE `groups_route_helps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
