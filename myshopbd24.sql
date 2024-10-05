-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 01:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshopbd24`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `street`, `city`, `state`, `zip_code`, `country`, `created_at`, `updated_at`) VALUES
(3, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(4, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(5, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(7, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(8, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(9, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(10, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(11, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(12, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(13, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(14, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(15, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(16, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(17, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(18, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(19, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(20, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(21, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(22, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(23, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(24, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(25, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(26, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(27, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(28, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(29, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(30, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(31, 1, 'Dolor autem aut eu s', 'Dolor corporis cupid', 'Aut amet duis anim', '88908', 'Iure cupiditate comm', '2024-10-01 05:18:21', '2024-10-01 05:18:21'),
(32, 1, 'Rerum culpa laborum', 'Assumenda officia op', 'Enim veniam dolor e', '85551', 'Nisi recusandae Sit', '2024-10-01 05:18:41', '2024-10-01 05:18:41'),
(33, 1, 'Nesciunt in iste al', 'Voluptatem id ipsum', 'Ut necessitatibus do', '91081', 'Assumenda unde paria', '2024-10-01 05:18:45', '2024-10-01 05:18:45'),
(34, 1, 'Voluptatibus digniss', 'Fugiat dolorum aute', 'Fugiat et non dolore', '52435', 'Autem adipisci omnis', '2024-10-01 05:18:50', '2024-10-01 05:18:50'),
(35, 1, 'Tenetur ad dolor ips', 'Cupidatat ex beatae', 'Obcaecati nihil qui', '54808', 'Suscipit id reprehen', '2024-10-01 05:28:28', '2024-10-01 05:28:28'),
(36, 1, 'Harum natus anim exp', 'Consectetur aut non', 'Natus eu et dolore i', '15815', 'Ut aliquip aut corru', '2024-10-01 05:46:56', '2024-10-01 05:46:56'),
(37, 1, 'Tempore impedit do', 'Quod voluptate ea qu', 'Consectetur amet d', '56423', 'At asperiores conseq', '2024-10-01 06:05:50', '2024-10-01 06:05:50'),
(38, 1, 'Omnis dignissimos ve', 'Molestias non non no', 'Minima accusamus lab', '79813', 'bd', '2024-10-02 05:20:34', '2024-10-02 05:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-10-01 03:54:11', '2024-10-01 03:54:11'),
(2, 2, '2024-10-01 03:54:11', '2024-10-01 03:54:11'),
(3, 3, '2024-10-01 03:54:11', '2024-10-01 03:54:11'),
(4, 4, '2024-10-01 03:54:11', '2024-10-01 03:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `live_chats`
--

CREATE TABLE `live_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `src`, `path`, `type`, `created_at`, `updated_at`) VALUES
(1, 'path/to/media1.jpg', 'media1.jpg', 'image/jpeg', '2024-10-01 03:54:10', '2024-10-01 03:54:10');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_17_145047_create_permission_tables', 1),
(5, '2024_07_30_000000_create_medias_table', 1),
(6, '2024_08_07_000003_create_customers_table', 1),
(7, '2024_08_23_091044_add_additional_fields_to_users_table', 1),
(8, '2024_09_26_105450_create_customer_supports_table', 1),
(9, '2024_09_28_045327_create_live_chats_table', 1),
(10, '2024_09_28_093738_create_addresses_table', 1),
(11, '2024_09_29_043404_create_rates_table', 1),
(12, '2024_09_29_110344_create_shipment_trackings_table', 1),
(13, '2024_09_30_055424_create_payments_table', 1),
(14, '2024_09_30_120746_create_shipments_table', 1),
(15, '2024_10_01_070000_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` enum('completed','panding') NOT NULL DEFAULT 'panding',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `destance` decimal(8,2) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-10-01 03:54:06', '2024-10-01 03:54:06'),
(2, 'super-admin', 'web', '2024-10-01 03:54:06', '2024-10-01 03:54:06'),
(3, 'agent', 'web', '2024-10-01 03:54:06', '2024-10-01 03:54:06'),
(4, 'user', 'web', '2024-10-01 03:54:06', '2024-10-01 03:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('m8sb1SgIIfFMkXDES3WlDCrabapBFEC8WCIkMhYo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2hrTUNnSFV2NVlFeVJHRlN4WW9uNlQzeGF6UDlDSXh0cUhiWFo2TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727869047);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `origin_address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `destination_address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `scheduled_pickup_date` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` enum('pending','processing','ready for shipping','shipping','out for delivery','shipped') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `user_id`, `origin_address_id`, `destination_address_id`, `tracking_number`, `scheduled_pickup_date`, `delivery_date`, `price`, `status`, `created_at`, `updated_at`) VALUES
(10, 1, 29, 19, '68SZ7YJI', '1980-12-14 00:00:00', '2023-02-20 00:00:00', 268.00, 'inactive', '2024-10-01 06:27:20', '2024-10-02 03:13:48'),
(11, 1, 3, 28, 'G453LGYL', '2008-09-10 00:00:00', '2001-10-06 00:00:00', 251.00, 'inactive', '2024-10-01 06:49:59', '2024-10-02 03:13:59'),
(12, 1, 31, 32, '2MILTFQ0', '2015-02-08 00:00:00', '2003-09-11 00:00:00', 802.00, 'active', '2024-10-01 23:54:22', '2024-10-01 23:54:22'),
(13, 1, 31, 32, 'E5E85B5L', '2015-02-08 00:00:00', '2003-09-11 00:00:00', 802.00, 'active', '2024-10-01 23:54:39', '2024-10-01 23:54:39'),
(14, 1, 34, 33, 'VICE6Y2X', '1985-02-24 00:00:00', '2009-07-07 00:00:00', 42.00, 'active', '2024-10-01 23:56:09', '2024-10-01 23:56:09'),
(15, 1, 31, 16, 'ETHRX3PN', '1994-07-12 00:00:00', '1999-04-15 00:00:00', 849.00, 'active', '2024-10-01 23:56:19', '2024-10-01 23:56:19'),
(16, 1, 24, 18, '95UIJT3Z', '2008-07-05 00:00:00', '1979-11-30 00:00:00', 111.00, 'active', '2024-10-01 23:57:57', '2024-10-01 23:57:57'),
(17, 1, 10, 33, 'A4375O8R', '1974-11-23 00:00:00', '2000-12-08 00:00:00', 982.00, 'active', '2024-10-01 23:59:16', '2024-10-01 23:59:16'),
(18, 1, 5, 15, '68SZ7YJI', '2024-10-19 00:00:00', '2024-10-30 00:00:00', 50.00, 'active', '2024-10-01 06:27:20', '2024-10-01 06:27:20'),
(19, 1, 11, 15, 'G453LGYL', '2024-10-10 00:00:00', '2024-10-24 00:00:00', 500.00, 'active', '2024-10-01 06:49:59', '2024-10-01 06:49:59'),
(20, 1, 31, 32, '2MILTFQ0', '2015-02-08 00:00:00', '2003-09-11 00:00:00', 802.00, 'active', '2024-10-01 23:54:22', '2024-10-01 23:54:22'),
(21, 1, 31, 32, 'E5E85B5L', '2015-02-08 00:00:00', '2003-09-11 00:00:00', 802.00, 'active', '2024-10-01 23:54:39', '2024-10-01 23:54:39'),
(22, 1, 34, 33, 'VICE6Y2X', '1985-02-24 00:00:00', '2009-07-07 00:00:00', 42.00, 'active', '2024-10-01 23:56:09', '2024-10-01 23:56:09'),
(23, 1, 31, 16, 'ETHRX3PN', '1994-07-12 00:00:00', '1999-04-15 00:00:00', 849.00, 'active', '2024-10-01 23:56:19', '2024-10-01 23:56:19'),
(24, 1, 24, 18, '95UIJT3Z', '2008-07-05 00:00:00', '1979-11-30 00:00:00', 111.00, 'active', '2024-10-01 23:57:57', '2024-10-01 23:57:57'),
(25, 1, 10, 33, 'A4375O8R', '1974-11-23 00:00:00', '2000-12-08 00:00:00', 982.00, 'active', '2024-10-01 23:59:16', '2024-10-01 23:59:16'),
(26, 2, 18, 32, 'ghljkhklsd', '2023-01-11 00:00:00', '2000-02-11 00:00:00', 958.00, 'inactive', '2024-10-22 12:25:36', '2024-10-02 00:22:36'),
(27, 1, 34, 33, 'VICE6Y2X', '1985-02-24 00:00:00', '2009-07-07 00:00:00', 42.00, 'active', '2024-10-01 23:56:09', '2024-10-01 23:56:09'),
(28, 1, 31, 16, 'ETHRX3PN', '1994-07-12 00:00:00', '1999-04-15 00:00:00', 849.00, 'active', '2024-10-01 23:56:19', '2024-10-01 23:56:19'),
(29, 1, 24, 18, '95UIJT3Z', '2008-07-05 00:00:00', '1979-11-30 00:00:00', 111.00, 'active', '2024-10-01 23:57:57', '2024-10-01 23:57:57'),
(30, 1, 10, 33, 'A4375O8R', '1974-11-23 00:00:00', '2000-12-08 00:00:00', 982.00, 'active', '2024-10-01 23:59:16', '2024-10-01 23:59:16'),
(31, 2, 18, 32, 'ghljkhklsd', '2023-01-11 00:00:00', '2000-02-11 00:00:00', 958.00, 'inactive', '2024-10-22 12:25:36', '2024-10-02 00:22:36'),
(32, 2, 18, 32, 'ghljkhklsd', '2023-01-11 00:00:00', '2000-02-11 00:00:00', 958.00, 'inactive', '2024-10-22 12:25:36', '2024-10-02 00:22:36'),
(33, 1, 33, 16, NULL, '1995-05-02 00:00:00', '1974-01-09 00:00:00', 231.00, 'active', '2024-10-02 00:28:24', '2024-10-02 00:28:24'),
(34, 1, 15, 26, NULL, '1992-02-02 00:00:00', '1996-03-07 00:00:00', 514.00, 'active', '2024-10-02 03:04:27', '2024-10-02 03:04:27'),
(35, 1, 30, 32, NULL, '2024-10-01 00:00:00', '2024-10-02 00:00:00', 64.00, 'active', '2024-10-02 03:42:39', '2024-10-02 03:42:39'),
(36, 1, 38, 9, NULL, '1991-05-20 00:00:00', '2008-06-06 00:00:00', 707.00, 'inactive', '2024-10-02 05:20:50', '2024-10-02 05:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_trackings`
--

CREATE TABLE `shipment_trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `nominee_name` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `father_name`, `mother_name`, `nominee_name`, `religion`, `blood_group`, `national_id`, `date_of_birth`, `profession`, `address`, `profile_picture`) VALUES
(1, 'Super Admin', 'super@example.com', NULL, '$2y$12$hVR5GRkfmtuuoh8ZrHB40eYTBWs4qTI7CDUCzfR9VhwART4/zZV86', NULL, '2024-10-01 03:54:07', '2024-10-01 03:54:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Admin', 'admin@example.com', NULL, '$2y$12$fZGalW3/7rByBXc2nQMK/eBRe.SNphAb4OQz3YxJaodQ1DvZBhQeu', NULL, '2024-10-01 03:54:09', '2024-10-01 03:54:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Agent', 'agent@example.com', NULL, '$2y$12$KnmPY2T.Ry4vSkaycxpi.Ox0O3bYDiiLZ5L3DAwSY3nYWoZtgrT8O', NULL, '2024-10-01 03:54:10', '2024-10-01 03:54:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Test User', 'user@example.com', NULL, '$2y$12$jaaeNmBtTP2cBopf26FS8.XfHATDHpF.FDoVC9Xzy/rB0ihUdsr4m', NULL, '2024-10-01 03:54:10', '2024-10-01 03:54:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_supports_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_shipment_id_foreign` (`shipment_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_chats`
--
ALTER TABLE `live_chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `live_chats_user_id_foreign` (`user_id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_user_id_foreign` (`user_id`),
  ADD KEY `shipments_origin_address_id_foreign` (`origin_address_id`),
  ADD KEY `shipments_destination_address_id_foreign` (`destination_address_id`);

--
-- Indexes for table `shipment_trackings`
--
ALTER TABLE `shipment_trackings`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_chats`
--
ALTER TABLE `live_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `shipment_trackings`
--
ALTER TABLE `shipment_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD CONSTRAINT `customer_supports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_shipment_id_foreign` FOREIGN KEY (`shipment_id`) REFERENCES `shipments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `live_chats`
--
ALTER TABLE `live_chats`
  ADD CONSTRAINT `live_chats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_destination_address_id_foreign` FOREIGN KEY (`destination_address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_origin_address_id_foreign` FOREIGN KEY (`origin_address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
