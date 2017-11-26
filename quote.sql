-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2017 at 06:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `bindings`
--

CREATE TABLE `bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bindings`
--

INSERT INTO `bindings` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Spiral', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(2, 'Normal', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(3, 'HardCover', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42'),
(4, 'PaperBack', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Single Color', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(2, 'Multi Color', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'DTP', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42'),
(2, 'Designing', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42'),
(3, 'Binding', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42'),
(4, 'Slicing', NULL, '2017-11-08 11:12:42', '2017-11-08 11:12:42');

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
(3, '2017_11_07_024458_create_works_table', 1),
(4, '2017_11_07_111003_create_jobs_table', 1),
(5, '2017_11_07_111214_create_colors_table', 1),
(6, '2017_11_07_111421_create_papers_table', 1),
(7, '2017_11_07_111450_create_qualities_table', 1),
(8, '2017_11_07_111509_create_bindings_table', 1),
(9, '2017_11_07_025441_create_quotations_table', 2),
(10, '2017_11_22_170244_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `quotation_ref` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_id` int(10) UNSIGNED NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance_amt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance_amt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quotation_ref`, `orderID`, `customerID`, `work_id`, `delivery_date`, `delivery_charge`, `total_amt`, `advance_amt`, `balance_amt`, `created_at`, `updated_at`) VALUES
(1, '1511372559', 'ODx0Cyue', '44', 1, '2017-11-24', '488', '5000', '44', '4956', '2017-11-22 12:12:39', '2017-11-22 12:12:39'),
(2, '1511372667', 'ODhw3VzM', 'hphyh', 1, '2017-11-11', '450', '8000', '400', '7600', '2017-11-22 12:14:27', '2017-11-22 12:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, '70 GSM', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(2, '80 GSM', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41');

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
-- Table structure for table `qualities`
--

CREATE TABLE `qualities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualities`
--

INSERT INTO `qualities` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Matte', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(2, 'Glossy', NULL, '2017-11-08 11:12:41', '2017-11-08 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `innerDetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `outerDetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `binding_id` int(10) UNSIGNED NOT NULL,
  `included_jobs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `reference_no`, `date`, `name`, `customerID`, `work_id`, `quantity`, `size`, `innerDetails`, `outerDetails`, `binding_id`, `included_jobs`, `speed`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(4, '1510165983', '2017-11-18', 'vsaxx', NULL, 1, 10, 'normal', '{\"color\":\"2\",\"paper\":\"1\",\"quality\":\"1\"}', '{\"color\":\"2\",\"paper\":\"1\",\"quality\":\"1\"}', 1, '[\"1\",\"3\",\"4\"]', 'ddll', '450', '2017-11-08 13:03:03', '2017-11-09 11:53:13'),
(6, '15101659999', '2017-11-18', 'vsaxx', NULL, 1, 10, 'normal', '{\"color\":\"2\",\"paper\":\"1\",\"quality\":\"1\"}', '{\"color\":\"2\",\"paper\":\"1\",\"quality\":\"1\"}', 1, '[\"1\",\"3\",\"4\"]', 'ddll', '450', '2017-11-08 13:03:03', '2017-11-09 11:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Demo', 'admin@demo.com', '$2y$10$VQsiNz59zgnyHc8ardV/jO8iVOGi6y8JzG/tq.hdT9TPNqFWs1dZq', 'admin', 'Gx9zjFjyGV0DxPUATq1L5vItxxUtlLOPckviR8C97SBmYOAUrrYh6aX6alRR', '2017-11-08 11:12:41', '2017-11-08 11:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Book', '45', '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(2, 'Poster', '25', '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(3, 'Notice', '15', '2017-11-08 11:12:41', '2017-11-08 11:12:41'),
(4, 'BillBook', '89', '2017-11-08 11:12:41', '2017-11-08 11:12:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bindings`
--
ALTER TABLE `bindings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_quotation_ref_unique` (`quotation_ref`),
  ADD UNIQUE KEY `orders_orderid_unique` (`orderID`),
  ADD KEY `orders_work_id_foreign` (`work_id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `qualities`
--
ALTER TABLE `qualities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quotations_reference_no_unique` (`reference_no`),
  ADD KEY `quotations_work_id_foreign` (`work_id`),
  ADD KEY `quotations_binding_id_foreign` (`binding_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bindings`
--
ALTER TABLE `bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualities`
--
ALTER TABLE `qualities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quotations`
--
ALTER TABLE `quotations`
  ADD CONSTRAINT `quotations_binding_id_foreign` FOREIGN KEY (`binding_id`) REFERENCES `bindings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quotations_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
