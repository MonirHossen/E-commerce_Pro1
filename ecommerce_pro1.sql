-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_pro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic Accessories', 'this is Electronic Accessories category', 'active', '2019-11-18 01:45:42', '2019-11-18 01:45:42'),
(2, 'Men\'s Fashion', 'Men\'s Fashion', 'active', '2019-11-18 01:46:02', '2019-11-18 01:46:02'),
(3, 'Sports & Outdoor', 'Sports & Outdoor', 'active', '2019-11-18 01:46:14', '2019-11-18 01:46:14'),
(4, 'TV & Home Appliances', 'TV & Home Appliances', 'active', '2019-11-18 01:46:25', '2019-11-18 01:46:25'),
(5, 'Health & Beauty', 'Health & Beauty', 'active', '2019-11-18 01:46:40', '2019-11-18 01:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Monir Hossen', 'mdmonirhossen929@gmail.com', '01865512325', '245/1,Kathalbagan', '2019-11-20 01:14:59', '2019-11-20 01:14:59'),
(3, 'nazrul Islam', 'nazrul@gmail.com', '23480239842', 'dsfasdfasd', '2019-11-20 01:16:31', '2019-11-20 01:16:31'),
(4, 'Sakib', 'sakib@gmail.com', '3249032904', 'Tangail', '2019-11-20 03:26:13', '2019-11-20 03:26:13'),
(5, 'sheak', 'sheak@gmail.com', '23409234932', 'Dhaka', '2019-11-20 03:28:55', '2019-11-20 03:28:55'),
(6, 'মনির হোসেন', 'monirhossen@gmail.com', '0989756', 'tangail', '2019-11-20 03:35:29', '2019-11-20 03:35:29'),
(7, 'sdsd', 'monirhossen@gmail', 'dfsdaf', 'asdfasdf', '2019-11-20 04:22:28', '2019-11-20 04:22:28'),
(8, 'নজরুল ইসলাম', 'a', 'sdfsd', 'asfasd', '2019-11-20 04:34:20', '2019-11-20 04:34:20'),
(9, 'Sakib Khan', 'sakib@gmail.com', '01798765432', 'Tangail', '2019-11-23 06:32:59', '2019-11-23 06:32:59'),
(10, 'Sakib Khan', 'sakib@gmail.com', '01798765432', 'Tangail.', '2019-11-23 06:34:12', '2019-11-23 06:34:12'),
(11, 'sakib khan', 'sakib@gmail.com', '019324324324', 'Tangail', '2019-11-23 06:35:31', '2019-11-23 06:35:31'),
(12, 'Nahid', 'nahid@gmail.com', '23423432', 'Noakhali', '2019-11-23 09:30:39', '2019-11-23 09:30:39'),
(13, 'karim', 'karim@gmail.com', '243432', 'Dhaka', '2019-11-23 11:07:57', '2019-11-23 11:07:57'),
(14, 'মনির হোসেন', 'monirhossen@gmail.com', '23423', 'tangail', '2019-11-23 11:10:44', '2019-11-23 11:10:44'),
(15, 'মনির হোসেন', 'monirhossen@gmail.com', '23423', 'tangail', '2019-11-23 11:10:52', '2019-11-23 11:10:52'),
(16, 'মনির হোসেন', 'monirhossen@gmail.com', '0989756', 'Tangail', '2019-11-23 11:15:35', '2019-11-23 11:15:35'),
(17, 'নজরুল ইসলাম', 'nazrul@gmail.com', '0989756', 'ghghfg', '2019-11-23 11:17:53', '2019-11-23 11:17:53'),
(18, 'মনির হোসেন', 'monirhossen@gmail.com', '0989756', 'dsfsad', '2019-11-23 11:19:10', '2019-11-23 11:19:10'),
(19, 'মনির হোসেন', 'monirhossen@gmail.com', '0989756', 'Tangail', '2019-11-23 11:21:43', '2019-11-23 11:21:43'),
(20, 'Rebeka Sultana Sepat', 'sepat.rs@gmail.com', '0198765432', 'Feni', '2019-11-24 04:43:46', '2019-11-24 04:43:46'),
(21, 'Anowar', 'anowar@gmail.com', '19234234232', 'Tangail', '2019-11-26 00:18:02', '2019-11-26 00:18:02'),
(22, 'Ma', 'ma@gmail.com', '023423492', 'tangail', '2019-11-26 05:08:44', '2019-11-26 05:08:44'),
(23, 'Rayhan Uddin', 'admin@gmail.com', '0989756', 'werwe', '2019-11-29 22:29:17', '2019-11-29 22:29:17'),
(24, 'Rayhan Uddin', 'admin@gmail.com', '0989756', 'werwe', '2019-11-29 22:31:28', '2019-11-29 22:31:28');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_10_28_052217_create_vendors_table', 1),
(13, '2019_10_28_052506_create_categories_table', 1),
(14, '2019_10_28_052530_create_products_table', 1),
(15, '2019_10_28_054841_create_product_images_table', 1),
(16, '2019_11_03_145641_add_new_column_in_product_table', 1),
(17, '2019_11_17_110703_create_orders_table', 1),
(18, '2019_11_17_111254_create_order_details_table', 1),
(19, '2019_11_20_063609_create_clients_table', 2),
(20, '2019_11_26_093113_create_transactions_table', 3),
(21, '2019_11_29_155942_add_new_column_in_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(10,2) NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `invoice_id`, `total_amount`, `payment_type`, `payment_status`, `status`, `processed_by`, `created_at`, `updated_at`) VALUES
(21, NULL, 'INV-1574071970', 0.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-18 04:12:50', '2019-11-18 04:12:50'),
(22, NULL, 'INV-1574072086', 60000.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-18 04:14:46', '2019-11-18 04:14:46'),
(23, NULL, 'INV-1574072255', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-18 04:17:35', '2019-11-18 04:17:35'),
(24, NULL, 'INV-1574145823', 120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-19 00:43:43', '2019-11-19 00:43:43'),
(25, NULL, 'INV-1574230810', 120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 00:20:10', '2019-11-20 00:20:11'),
(26, NULL, 'INV-1574234099', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 01:14:59', '2019-11-20 01:15:00'),
(27, 3, 'INV-1574234191', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 01:16:31', '2019-11-20 01:16:31'),
(28, 4, 'INV-1574241974', 134674.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 03:26:14', '2019-11-20 03:26:14'),
(29, 5, 'INV-1574242135', 420.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 03:28:55', '2019-11-20 03:28:55'),
(30, 6, 'INV-1574242529', 134554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 03:35:29', '2019-11-20 03:35:30'),
(31, 7, 'INV-1574245349', 30000.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 04:22:29', '2019-11-20 04:22:29'),
(32, 8, 'INV-1574246060', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-20 04:34:20', '2019-11-20 04:34:20'),
(33, 9, 'INV-1574512380', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 06:33:00', '2019-11-23 06:33:00'),
(34, 10, 'INV-1574512452', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 06:34:12', '2019-11-23 06:34:12'),
(35, 11, 'INV-1574512531', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 06:35:31', '2019-11-23 06:35:31'),
(36, 12, 'INV-1574523040', 120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 09:30:40', '2019-11-23 09:30:40'),
(37, 13, 'INV-1574528877', 164554.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:07:57', '2019-11-23 11:07:58'),
(38, 14, 'INV-1574529044', 30120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:10:44', '2019-11-23 11:10:44'),
(39, 15, 'INV-1574529052', 30120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:10:52', '2019-11-23 11:10:52'),
(40, 16, 'INV-1574529335', 30120.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:15:35', '2019-11-23 11:15:36'),
(41, 17, 'INV-1574529473', 420.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:17:53', '2019-11-23 11:17:53'),
(42, 18, 'INV-1574529550', 30000.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:19:10', '2019-11-23 11:19:10'),
(43, 19, 'INV-1574529703', 30000.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-23 11:21:43', '2019-11-23 11:21:43'),
(44, 20, 'INV-1574592226', 30000.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-24 04:43:46', '2019-11-24 04:43:46'),
(45, 21, 'INV-1574749082', 134554.00, 'online', 'paid', 'processing', NULL, '2019-11-26 00:18:02', '2019-11-26 04:44:41'),
(46, 22, 'INV-1574766524', 30420.00, 'online', 'paid', 'processing', NULL, '2019-11-26 05:08:44', '2019-11-26 05:09:27'),
(47, 23, 'INV-1575088158', 21232.00, 'offline', 'unpaid', 'pending', NULL, '2019-11-29 22:29:18', '2019-11-29 22:29:19'),
(48, 24, 'INV-1575088288', 21232.00, 'online', 'paid', 'processing', NULL, '2019-11-29 22:31:28', '2019-11-29 22:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `category_id`, `category_name`, `product_id`, `product_name`, `quantity`, `unit_price`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 'Electronic Accessories', 1, 'hp probook 450', 2, 30000.00, 0.00, '2019-11-18 04:12:50', '2019-11-18 04:12:50'),
(2, 21, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 0.00, '2019-11-18 04:12:50', '2019-11-18 04:12:50'),
(3, 22, 1, 'Electronic Accessories', 1, 'hp probook 450', 2, 30000.00, 60000.00, '2019-11-18 04:14:46', '2019-11-18 04:14:46'),
(4, 23, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-18 04:17:35', '2019-11-18 04:17:35'),
(5, 23, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-18 04:17:35', '2019-11-18 04:17:35'),
(6, 24, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-19 00:43:43', '2019-11-19 00:43:43'),
(7, 25, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-20 00:20:11', '2019-11-20 00:20:11'),
(8, 26, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-20 01:14:59', '2019-11-20 01:14:59'),
(9, 26, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-20 01:15:00', '2019-11-20 01:15:00'),
(10, 27, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-20 01:16:31', '2019-11-20 01:16:31'),
(11, 27, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-20 01:16:31', '2019-11-20 01:16:31'),
(12, 28, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-20 03:26:14', '2019-11-20 03:26:14'),
(13, 28, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-20 03:26:14', '2019-11-20 03:26:14'),
(14, 29, 2, 'Men\'s Fashion', 3, 'Full sleeve T-shirt for men', 1, 420.00, 420.00, '2019-11-20 03:28:55', '2019-11-20 03:28:55'),
(15, 30, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-20 03:35:30', '2019-11-20 03:35:30'),
(16, 31, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-20 04:22:29', '2019-11-20 04:22:29'),
(17, 32, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-20 04:34:20', '2019-11-20 04:34:20'),
(18, 32, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-20 04:34:20', '2019-11-20 04:34:20'),
(19, 33, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 06:33:00', '2019-11-23 06:33:00'),
(20, 33, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-23 06:33:00', '2019-11-23 06:33:00'),
(21, 34, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 06:34:12', '2019-11-23 06:34:12'),
(22, 34, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-23 06:34:12', '2019-11-23 06:34:12'),
(23, 35, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 06:35:31', '2019-11-23 06:35:31'),
(24, 35, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-23 06:35:31', '2019-11-23 06:35:31'),
(25, 36, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-23 09:30:40', '2019-11-23 09:30:40'),
(26, 37, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:07:57', '2019-11-23 11:07:57'),
(27, 37, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-23 11:07:58', '2019-11-23 11:07:58'),
(28, 38, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:10:44', '2019-11-23 11:10:44'),
(29, 38, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-23 11:10:44', '2019-11-23 11:10:44'),
(30, 39, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:10:52', '2019-11-23 11:10:52'),
(31, 39, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-23 11:10:52', '2019-11-23 11:10:52'),
(32, 40, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:15:36', '2019-11-23 11:15:36'),
(33, 40, 2, 'Men\'s Fashion', 4, 'Crazy Full Sleeve T-shirt For Men', 1, 120.00, 120.00, '2019-11-23 11:15:36', '2019-11-23 11:15:36'),
(34, 41, 2, 'Men\'s Fashion', 3, 'Full sleeve T-shirt for men', 1, 420.00, 420.00, '2019-11-23 11:17:53', '2019-11-23 11:17:53'),
(35, 42, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:19:10', '2019-11-23 11:19:10'),
(36, 43, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-23 11:21:43', '2019-11-23 11:21:43'),
(37, 44, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-24 04:43:46', '2019-11-24 04:43:46'),
(38, 45, 1, 'Electronic Accessories', 2, 'Apple iPhone 11 Pro 256GB', 1, 134554.00, 134554.00, '2019-11-26 00:18:02', '2019-11-26 00:18:02'),
(39, 46, 1, 'Electronic Accessories', 1, 'hp probook 450', 1, 30000.00, 30000.00, '2019-11-26 05:08:44', '2019-11-26 05:08:44'),
(40, 46, 2, 'Men\'s Fashion', 3, 'Full sleeve T-shirt for men', 1, 420.00, 420.00, '2019-11-26 05:08:44', '2019-11-26 05:08:44'),
(41, 47, 1, 'Electronic Accessories', 6, 'HP TV', 1, 21232.00, 21232.00, '2019-11-29 22:29:19', '2019-11-29 22:29:19'),
(42, 48, 1, 'Electronic Accessories', 6, 'HP TV', 1, 21232.00, 21232.00, '2019-11-29 22:31:28', '2019-11-29 22:31:28');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured_products` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `vendor_id`, `name`, `brand`, `description`, `unit_price`, `stock`, `status`, `created_at`, `updated_at`, `featured_products`) VALUES
(1, 1, 1, 'hp probook 450', 'HP', '<h2>Product details of HP Probook 450 G6 8th Gen Intel Core i5 8265U (1.60GHz-3.90GHz, 4GB DDR4, 1TB) nVidia MX130 2GB GDDR5 Graphics, 15.6 Inch HD (1366x768) Display, FingerPrint Sensor, Free DOS, Silver Notebook #6YD51PA-2Y</h2>\r\n\r\n<ul>\r\n	<li>Brand - HP</li>\r\n	<li>Model - HP Probook 450 G6</li>\r\n	<li>Processor - Intel Core i5 8265U</li>\r\n	<li>Generation - 8th Gen</li>\r\n	<li>Processor Clock Speed - 1.60-3.90GHz</li>\r\n	<li>Display Size - 15.6&quot;</li>\r\n	<li>RAM - 4GB</li>\r\n	<li>RAM Type - DDR4</li>\r\n	<li>Storage - 1TB HDD</li>\r\n	<li>Display Type - HD LED</li>\r\n	<li>Display Resolution -1366x768 (WxH) HD</li>\r\n	<li>Graphics Chipset -Nvidia MX130 GDDR5 Graphics</li>\r\n	<li>Graphics Memory - 2GB</li>\r\n	<li>Networking -LAN, WiFi, Bluetooth, Card Reader, WebCam</li>\r\n	<li>Display Port - HDMI</li>\r\n	<li>Audio Port - Combo</li>\r\n	<li>USB Port -1 x USB3.1 Gen 1 Type-C, 2 x USB3.1 Gen 1, 1 x USB2.0</li>\r\n	<li>Battery -3 Cell Li-Ion</li>\r\n	<li>Weight - 2.0KG</li>\r\n	<li>Color - Silver</li>\r\n	<li>Operating System - Free DOS</li>\r\n	<li>Others -1 x M.2 Blank SSD Slot,Max RAM Support 32GB,RAM Expansion Slot 1.</li>\r\n	<li>Specialty -Finger Print Sensor</li>\r\n	<li>Part No -6YD51PA-2Y</li>\r\n</ul>', 30000.00, 0, 'active', '2019-11-18 01:49:21', '2019-11-26 05:08:44', 1),
(2, 1, 1, 'Apple iPhone 11 Pro 256GB', 'Apple', '<h2>Product details of Apple iPhone 11 Pro 256GB</h2>\r\n\r\n<ul>\r\n	<li>&quot;Delivery will be started from 31st October, 2019&quot;</li>\r\n	<li>NETWORK Technology: GSM / CDMA / HSPA / EVDO / LTE</li>\r\n	<li>BODY Dimensions: 144 x 71.4 x 8.1 mm (5.67 x 2.81 x 0.32 in)</li>\r\n	<li>Weight: 188 g (6.63 oz)</li>\r\n	<li>Build:Front/back glass, stainless steel frame</li>\r\n	<li>SIM: Nano-SIM and/or Electronic SIM card</li>\r\n	<li>IP68 dust/water resistant (up to 4m for 30 mins)</li>\r\n	<li>DISPLAYType:Super Retina XDR OLED capacitive touchscreen, 16M colors</li>\r\n	<li>Size:5.8 inches, 84.4 cm2(~82.1% screen-to-body ratio)</li>\r\n	<li>Resolution: 1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)</li>\r\n	<li>Protection:Scratch-resistant glass, oleophobic coating</li>\r\n	<li>800 nits</li>\r\n	<li>Dolby Vision</li>\r\n	<li>HDR10</li>\r\n	<li>Wide color gamut</li>\r\n	<li>True-tone</li>\r\n	<li>120 Hz touch-sensing</li>\r\n	<li>PLATFORM OS:iOS 13</li>\r\n	<li>ChipsetApple A13 Bionic (7 nm+)</li>\r\n	<li>MEMORY Card slot No</li>\r\n	<li>Internal 4 GB/64 GB, 4 GB/256 GB, 4 GB/512 GB</li>\r\n	<li>MAIN CAMERA Triple 12 MP, f/1.8, 26mm (wide), 1/2.55&quot;, 1.4&micro;m, PDAF, OIS</li>\r\n	<li>12 MP, f/2.0, 52mm (telephoto), 1/3.4&quot;, 1.0&micro;m, PDAF, OIS, 2x optical zoom</li>\r\n	<li>12 MP, f/2.4, 13mm (ultrawide)</li>\r\n	<li>Features Quad-LED dual-tone flash, HDR (photo/panorama)</li>\r\n	<li>Video 2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec.</li>\r\n	<li>SELFIE CAMERA Single 12 MP, f/2.2</li>\r\n	<li>TOF 3D camera</li>\r\n	<li>Features: HDR</li>\r\n	<li>Video:2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS</li>\r\n	<li>SOUND Loudspeaker Yes, with stereo speakers</li>\r\n	<li>3.5mm jack No</li>\r\n	<li>Active noise cancellation with dedicated mic</li>\r\n	<li>Dolby Atmos</li>\r\n	<li>Dolby Digital Plus</li>\r\n	<li>COMMS WLAN Wi-Fi 802.11 a/b/g/n/ac/ax, dual-band, hotspot</li>\r\n	<li>Bluetooth 5.0, A2DP, LE</li>\r\n	<li>GPS: Yes, with A-GPS, GLONASS, GALILEO, QZSS</li>\r\n	<li>NFC: Yes</li>\r\n	<li>Radio:No</li>\r\n	<li>USB 2.0, proprietary reversible connector</li>\r\n	<li>FEATURES Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</li>\r\n	<li>Siri natural language commands and dictation</li>\r\n	<li>BATTERY Type: Non-removable Li-Ion 3190 mAh battery</li>\r\n	<li>Charging: Fast battery charging 18W: 50% in 30 min</li>\r\n	<li>USB Power Delivery 2.0</li>\r\n	<li>Qi wireless charging</li>\r\n	<li>Talk time: Up to 18 h (multimedia)</li>\r\n	<li>Music play: Up to 65 h</li>\r\n</ul>', 134554.00, 0, 'active', '2019-11-18 01:51:59', '2019-11-26 00:18:02', 0),
(3, 2, 2, 'Full sleeve T-shirt for men', 'Redbel', '<h2>Product details of Full sleeve T-shirt for men</h2>\r\n\r\n<ul>\r\n	<li>রেডবেল একটি এরিস্কোক্রেটিক ব্রান্ড।কাপড় ও প্রিন্টের নজর কাড়া ডিজাইনের জন্য রেডবেল বেশ প্রশংসিত।আমরা প্রতিটি পন্যে ১০০ % ব্রান্ড কোয়ালিটি নিশ্চিত করেছি ।সম্পূর্ণ নিটিং ডাইং করা কাপড় যার ফলে গরমে পড়ে আরাম পাবেন এবং দীর্ঘদিনেও কাপড়ের কালার নষ্ট হবেনাপ্রিন্ট ও ফেব্রিকস ওয়াশ গ্যারান্টি।</li>\r\n	<li>$ GSM :180</li>\r\n	<li>$ ফ্যাশনেবল ও আরামদায়ক টি-শার্ট</li>\r\n	<li>$ এভেইলেবল সাইজঃ</li>\r\n	<li>$ M, L, XL</li>\r\n	<li>$ M = Chest 36&rdquo; &amp; Length 27&rdquo;</li>\r\n	<li>$ L = Chest 38&rdquo; &amp; Length 28&rdquo;</li>\r\n	<li>$ XL = Chest 40&rdquo; &amp; Length 29&rdquo;</li>\r\n</ul>\r\n\r\n<p>রেডবেল একটি এরিস্কোক্রেটিক ব্রান্ড।কাপড় ও প্রিন্টের নজর কাড়া ডিজাইনের জন্য রেডবেল বেশ প্রশংসিত।আমরা প্রতিটি পন্যে ১০০ % ব্রান্ড কোয়ালিটি নিশ্চিত করেছি ।</p>\r\n\r\n<p>সম্পূর্ণ নিটিং ডাইং করা কাপড় যার ফলে গরমে পড়ে আরাম পাবেন এবং দীর্ঘদিনেও কাপড়ের কালার নষ্ট হবেনা</p>\r\n\r\n<p>প্রিন্ট ও ফেব্রিকস ওয়াশ গ্যারান্টি।<br />\r\n$ GSM :180<br />\r\n$ ফ্যাশনেবল ও আরামদায়ক টি-শার্ট<br />\r\n$ এভেইলেবল সাইজঃ<br />\r\n$ M, L, XL<br />\r\n$ M = Chest 36&rdquo; &amp; Length 27&rdquo;<br />\r\n$ L = Chest 38&rdquo; &amp; Length 28&rdquo;<br />\r\n$ XL = Chest 40&rdquo; &amp; Length 29&rdquo;</p>\r\n\r\n<h2>Specifications of Full sleeve T-shirt for men</h2>\r\n\r\n<ul>\r\n	<li>Brand\r\n	<p>Redbel</p>\r\n	</li>\r\n	<li>SKU\r\n	<p>121946545_BD-1041802876</p>\r\n	</li>\r\n	<li>Main Material\r\n	<p>Cotton</p>\r\n	</li>\r\n</ul>', 420.00, 9, 'active', '2019-11-18 23:04:43', '2019-11-26 05:08:44', 0),
(4, 2, 2, 'Crazy Full Sleeve T-shirt For Men', 'Incentive Fashion', '<h2>Product details of Crazy Full Sleeve T-shirt For Men</h2>\r\n\r\n<ul>\r\n	<li>Type:Full Sleeve</li>\r\n	<li>Fabric GSM: 165-170.</li>\r\n	<li>100% Export Quality and 100% Quality control T-Shirt.</li>\r\n	<li>T-Shirt Measurement: Asian and Regular Fit.</li>\r\n	<li>Quality: Vector Brand original T-Shirt.</li>\r\n	<li>Status: Comfortable and Fashionable Exclusive T-shirt.</li>\r\n	<li>Size: S, M, L, XL</li>\r\n	<li>Size: S=Long-26, Chest-34</li>\r\n	<li>M=Long-27, Chest-36</li>\r\n	<li>L=Long-28, Chest-38</li>\r\n	<li>XL=Long-29, Chest-40.</li>\r\n</ul>\r\n\r\n<p>This T-shirt for men&#39;s comfortable and may be worn for regular use. it&#39;s far an excellent put on for guys like you. you&#39;ll like toput on this expensive and colourful t- shirt just for its flexible usability and diverse style experience. it is normally made froma light, brilliant quality Taiwan CVC fabrics and is simple to smooth. Longsleevedesign with a everyday suit for men. it is very versatile because it&#39;s miles beneficial on formal in addition tocasual event. it is designed to be relaxed and sturdy.</p>\r\n\r\n<h2>Specifications of Crazy Full Sleeve T-shirt For Men</h2>\r\n\r\n<ul>\r\n	<li>Brand\r\n	<p>Incentive Fashion</p>\r\n	</li>\r\n	<li>SKU\r\n	<p>121587143_BD-1041387119</p>\r\n	</li>\r\n	<li>Main Material\r\n	<p>Polyester</p>\r\n	</li>\r\n</ul>', 120.00, -4, 'active', '2019-11-18 23:07:32', '2019-11-23 11:15:36', 0),
(5, 1, 1, 'Mac Book', 'Apple', '<p>Apple - MacBook Pro - 13&quot; Display with Touch Bar - Intel Core i5 - 8GB Memory - 256GB SSD (Latest Model) - Space Gray</p>', 1299.99, 5, 'active', '2019-11-29 22:26:20', '2019-11-29 22:26:20', 0),
(6, 1, 2, 'HP TV', 'HP', '<p>This is tv</p>', 21232.00, 1, 'active', '2019-11-29 22:27:50', '2019-11-29 22:31:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/product/15740633611429.15724419135891.hp-450-g5-4-500x500.jpg', '2019-11-18 01:49:21', '2019-11-18 01:49:21'),
(2, 1, 'images/product/15740633618676.hp-na-laptop-original-imafb9v5kpht3ntf.jpeg', '2019-11-18 01:49:21', '2019-11-18 01:49:21'),
(3, 1, 'images/product/15740633616046.hp-na-laptop-original-imafb9v5n797yygp.jpeg', '2019-11-18 01:49:21', '2019-11-18 01:49:21'),
(4, 1, 'images/product/15740633617818.hp-na-laptop-original-imafb9v5zydmmbya.jpeg', '2019-11-18 01:49:21', '2019-11-18 01:49:21'),
(6, 2, 'images/product/15740635199303.apple-iphone-8-mq7f2hn-a-original-imaexsbza3tjzcxf.jpeg', '2019-11-18 01:51:59', '2019-11-18 01:51:59'),
(8, 3, 'images/product/15741398832778.9ad295f98c9e8d150c46cb2d0109af1c.jpg', '2019-11-18 23:04:43', '2019-11-18 23:04:43'),
(9, 4, 'images/product/15741400524594.391c9562f9a1b2fbb317e47b3c971db4.jpg', '2019-11-18 23:07:32', '2019-11-18 23:07:32'),
(10, 5, 'images/product/15750879805807.PID-0012.jpg', '2019-11-29 22:26:20', '2019-11-29 22:26:20'),
(11, 5, 'images/product/15750879808329.PID-0013.jpg', '2019-11-29 22:26:20', '2019-11-29 22:26:20'),
(12, 6, 'images/product/15750880707555.PID-0025.jpg', '2019-11-29 22:27:50', '2019-11-29 22:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(10,2) NOT NULL,
  `card_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `transaction_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `amount`, `card_type`, `transaction_date`, `transaction_data`, `status`, `created_at`, `updated_at`) VALUES
(1, 45, 134554.00, 'BKASH-BKash', '2019-11-26 16:30:51', '{\"tran_id\":\"5ddd01f26c51d\",\"val_id\":\"191126163123JQMbW8tOmjvbRAX\",\"amount\":\"134554\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"131190.15\",\"card_no\":null,\"bank_tran_id\":\"1911261631220M8PWqsyBmRAXcu\",\"status\":\"VALID\",\"tran_date\":\"2019-11-26 16:30:51\",\"error\":null,\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_sub_brand\":\"Classic\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"dream5dda5ed2ee70e\",\"verify_sign\":\"d356d174bb05f825eb2a3c70b857f9f5\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_sub_brand,card_type,currency,currency_amount,currency_rate,currency_type,error,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"bda650c72287d869cf46bbe0f44a241f22370d4fb4a321862aaeafff8700bd42\",\"currency_type\":\"BDT\",\"currency_amount\":\"134554.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":\"45\",\"value_b\":\"ref002\",\"value_c\":\"ref003\",\"value_d\":\"ref004\",\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 'success', '2019-11-26 04:44:41', '2019-11-26 04:44:41'),
(2, 46, 30420.00, 'DBBLMOBILEB-Dbbl Mobile Banking', '2019-11-26 16:55:45', '{\"tran_id\":\"5ddd07c840713\",\"val_id\":\"191126165615CyCvUujhVPRqHsM\",\"amount\":\"30420\",\"card_type\":\"DBBLMOBILEB-Dbbl Mobile Banking\",\"store_amount\":\"29659.5\",\"card_no\":null,\"bank_tran_id\":\"1911261656151zhvtxBl7bOv6hL\",\"status\":\"VALID\",\"tran_date\":\"2019-11-26 16:55:45\",\"error\":null,\"currency\":\"BDT\",\"card_issuer\":\"DBBL Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_sub_brand\":\"Classic\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"dream5dda5ed2ee70e\",\"verify_sign\":\"e8f463b912669d06d2f61ed6b8cbca68\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_sub_brand,card_type,currency,currency_amount,currency_rate,currency_type,error,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"9a00b22e7a559d135c76f3b2af9878b89caa642ca776d9ed7f81a2892f6f0c1f\",\"currency_type\":\"BDT\",\"currency_amount\":\"30420.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":\"46\",\"value_b\":\"ref002\",\"value_c\":\"ref003\",\"value_d\":\"ref004\",\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 'success', '2019-11-26 05:09:27', '2019-11-26 05:09:27'),
(3, 48, 21232.00, 'BKASH-BKash', '2019-11-30 10:18:26', '{\"tran_id\":\"5de1f0aaefcf5\",\"val_id\":\"1911301018511xyJVwDZ7KYKbgf\",\"amount\":\"21232.00\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"20701.20\",\"card_no\":null,\"bank_tran_id\":\"191130101851DlqIFcBXE9R7nsF\",\"status\":\"VALID\",\"tran_date\":\"2019-11-30 10:18:26\",\"error\":null,\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_sub_brand\":\"Classic\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"dream5dda5ed2ee70e\",\"verify_sign\":\"38655c4c825f3e52ea93ab19042ad644\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_sub_brand,card_type,currency,currency_amount,currency_rate,currency_type,error,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"8c8e5d5df228b1b2c5dd9c3e3763a49535498235d8ce0dc887cdb2fafad6448e\",\"currency_type\":\"BDT\",\"currency_amount\":\"21232.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":\"48\",\"value_b\":\"ref002\",\"value_c\":\"ref003\",\"value_d\":\"ref004\",\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 'success', '2019-11-29 22:32:05', '2019-11-29 22:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Monir Hossen', 'monirhossen@gmail.com', NULL, '$2y$10$awPRJ77rlyQR4wKQvjxUFOUZRjz4gzBd2/9Ox/8/tl/9nHMLPLiI.', 'images/user/15741395671508.20150904_172516.jpg', NULL, NULL, '2019-11-18 22:59:27', 'admin'),
(2, 'মনির হোসেন', 'admin@gmail.com', NULL, '$2y$10$lxbIYMc7icR3EIVemq4ENeY1n22Il8vi6nTwKpguhMQX2RACsYr.m', 'images/user/1574063023613.monir.jpg', NULL, '2019-11-18 01:43:43', '2019-11-18 01:43:43', 'admin'),
(3, 'Rebeka Sultana Sepat', 'sepat.rs@gmail.com', NULL, '$2y$10$ImnLA5gfhMAbHmaZ0yJQrOPcsAept1yEA833zUI0k12l7V7hoViWi', 'images/user/157504571970.20170620_115033-1-1.jpg', NULL, '2019-11-29 10:41:59', '2019-11-29 10:41:59', 'admin'),
(4, 'মনির হোসেন', 'monirhossen@df.com', NULL, '$2y$10$wPGmNuP4XXaiHHd3IqxxIe2avHcKlZWdyJ/XjBtzxPVYZOZYK6U6O', NULL, NULL, '2019-11-29 10:47:31', '2019-11-29 10:47:31', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'StartTech', 'startech@gmail.com', 'dskfsd', 'active', '2019-11-18 01:47:21', '2019-11-18 01:47:21'),
(2, 'Daraz.com', 'daraz@gmail.com', 'Dhaka Bangladesh', 'active', '2019-11-18 23:02:39', '2019-11-18 23:02:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_category_id_foreign` (`category_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
