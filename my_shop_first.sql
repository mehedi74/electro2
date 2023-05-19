-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 08:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_shop_first`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'mehedi', 'mehedi@gmail.com', '098745678', '25d55ad283aa400af464c76d713c07ad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dell', 'test', 1, '2023-05-03 07:08:26', '2023-05-07 07:56:32'),
(2, 'HP', 'rert', 1, '2023-05-03 07:08:31', '2023-05-07 07:56:34'),
(3, 'Sony', 'test', 1, '2023-05-06 03:30:04', '2023-05-06 03:30:04'),
(4, 'samsung', 'test', 1, '2023-05-06 03:30:21', '2023-05-06 03:30:21'),
(5, 'nokia', 'est', 1, '2023-05-06 03:30:29', '2023-05-06 03:30:29'),
(6, 'Bexcimco', 'we', 1, '2023-05-06 03:51:40', '2023-05-06 03:51:40'),
(7, 'Square', 'rest', 1, '2023-05-06 03:51:48', '2023-05-06 03:51:48'),
(8, 'Lenovo', 'sdfgs', 1, '2023-05-07 07:53:06', '2023-05-07 07:53:06'),
(9, 'Lg', 'srtas', 1, '2023-05-07 07:53:15', '2023-05-07 07:53:15'),
(12, 'Zaraman', 'trst', 1, '2023-05-07 07:57:25', '2023-05-15 08:02:40'),
(13, 'gg', 'trey', 1, '2023-05-14 22:54:59', '2023-05-14 22:54:59'),
(14, 'reyh', 'tyreur', 1, '2023-05-15 02:44:05', '2023-05-15 02:44:05'),
(15, 'Square', 'test', 1, '2023-05-15 08:02:54', '2023-05-15 08:02:54'),
(16, 'Dorjibari', 'test', 1, '2023-05-15 08:03:14', '2023-05-15 08:03:14'),
(17, 'Matador', 'test', 1, '2023-05-15 08:03:29', '2023-05-15 08:03:29'),
(18, 'Hi-school', 'tsest', 1, '2023-05-15 08:04:00', '2023-05-15 08:04:00'),
(19, 'Jarman Magagine', 'test', 1, '2023-05-15 08:04:21', '2023-05-15 08:04:21'),
(20, 'Bata', 'tesr', 1, '2023-05-16 19:55:37', '2023-05-16 19:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics & Gadgets', 'This is simple test', 'assets/admin/img/category/a.jpg', 1, '2023-05-03 07:03:49', '2023-05-15 07:42:04'),
(6, 'Medicine', 'Tis is simple test', 'assets/admin/img/category/b.jpg', 1, '2023-05-05 10:07:02', '2023-05-15 07:43:23'),
(7, 'Housewear', 'This is simple test', 'assets/admin/img/category/f.jpg', 1, '2023-05-05 10:07:21', '2023-05-15 07:45:02'),
(9, 'Clothing & Apparel', 'This is simple test. Review is going on.', 'assets/admin/img/category/r.jpg', 1, '2023-05-06 03:18:15', '2023-05-15 07:47:46'),
(10, 'Footwear & Shoes', 'This is simple test. Review is going on.', 'assets/admin/img/category/rtysr.jpg', 1, '2023-05-06 03:19:09', '2023-05-15 07:49:45'),
(11, 'Stationery', 'This is simple test. Review is going on.', 'assets/admin/img/category/sdyfgh.jpg', 1, '2023-05-06 03:20:10', '2023-05-15 07:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '[\"black\"]', 1, '2023-05-03 07:09:49', '2023-05-03 07:09:49'),
(2, '[\"green\",\"red\"]', 1, '2023-05-03 07:10:00', '2023-05-03 07:10:00'),
(3, '[\"yellow\"]', 1, '2023-05-03 07:10:08', '2023-05-03 07:10:08'),
(4, '[\"green\"]', 1, '2023-05-03 07:10:10', '2023-05-15 08:05:35'),
(6, '[\"black\",\"gray\"]', 1, '2023-05-15 08:05:58', '2023-05-15 08:05:58'),
(7, '[\"yellow\",\"blue\"]', 1, '2023-05-15 08:06:07', '2023-05-15 08:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `email`, `password`, `image`, `address`, `created_at`, `updated_at`) VALUES
(4, 'mehedi hasan', '01755771232', 'mehedi@gmail.com', '12345678', NULL, NULL, '2023-05-10 08:15:25', '2023-05-10 08:15:25'),
(5, 'sharif', '0009999999', 'sharif@gmail.com', '12345678', NULL, NULL, '2023-05-10 22:39:19', '2023-05-10 22:39:19');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2023_04_14_050004_create_admins_table', 1),
(30, '2023_04_16_034525_create_categories_table', 1),
(31, '2023_04_18_033933_create_sub_categories_table', 1),
(32, '2023_04_19_024607_create_brands_table', 1),
(33, '2023_04_19_080731_create_units_table', 1),
(34, '2023_04_20_030025_create_sizes_table', 1),
(35, '2023_05_01_022714_create_colors_table', 1),
(36, '2023_05_01_041729_create_products_table', 1),
(37, '2023_05_10_134610_create_customers_table', 2),
(38, '2023_05_11_035530_create_shippings_table', 3),
(39, '2023_05_11_094547_create_payments_table', 4),
(40, '2023_05_11_101203_create_orders_table', 5),
(41, '2023_05_11_101231_create_order_details_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `payment_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, '7929', 1, '2023-05-16 20:06:44', '2023-05-16 20:06:44'),
(2, 4, 2, 2, '2343', 1, '2023-05-17 00:05:09', '2023-05-17 00:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_sales_quantity` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_color`, `product_size`, `product_sales_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 45, 'Bexovid', '6:0', '2:1', '3', 1, '2023-05-16 20:06:44', '2023-05-16 20:06:44'),
(2, 1, 37, 'black shirt', '1:0', '4:3', '2', 1, '2023-05-16 20:06:44', '2023-05-16 20:06:44'),
(3, 2, 45, 'Bexovid', '6:0', '2:0', '1', 1, '2023-05-17 00:05:09', '2023-05-17 00:05:09');

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
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bikash', 'pending', NULL, NULL),
(2, 'cash', 'pending', NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `br_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `br_id`, `unit_id`, `size_id`, `color_id`, `name`, `code`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(32, 1, 8, 1, 1, 2, 1, 'Dell 9090', '123', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">This is simple test. Review is going on.</span></font>', 456733.00, 'assets/admin/img/product/dg.jpg', 1, '2023-05-06 04:22:08', '2023-05-15 08:08:50'),
(33, 1, 8, 2, 1, 3, 6, 'Hp Zbook', '344', 'test', 347567.00, 'assets/admin/img/product/c06242212.png|assets/admin/img/product/dg.jpg|assets/admin/img/product/HP-255-G8.jpg', 1, '2023-05-06 04:23:06', '2023-05-15 08:14:17'),
(34, 9, 4, 6, 1, 3, 2, 'shirt', '6', 'qwe', 2324.00, 'assets/admin/img/product/b31.jpg|assets/admin/img/product/download (1).jpg|assets/admin/img/product/download (2).jpg|assets/admin/img/product/product-1.jpg|assets/admin/img/product/r.jpg', 1, '2023-05-06 04:25:12', '2023-05-06 04:25:12'),
(35, 1, 1, 3, 1, 2, 3, 'hiko', '3245', 'dfA', 345.00, 'assets/admin/img/product/b3.jpg|assets/admin/img/product/download (2).jpg', 1, '2023-05-06 04:27:40', '2023-05-06 04:27:40'),
(36, 9, 4, 6, 1, 3, 2, 'pant', '4', 'wer', 3435.00, 'assets/admin/img/product/istockphoto-1279108197-170667a.jpg|assets/admin/img/product/r.jpg', 1, '2023-05-06 04:37:03', '2023-05-06 04:37:03'),
(37, 9, 4, 7, 1, 4, 1, 'black shirt', '3245', 'test', 450.00, 'assets/admin/img/product/images (1).jpg|assets/admin/img/product/images.jpg|assets/admin/img/product/Mens_Corporate_Shirt_Long_Sleeve_Float_Navy-875x1000.jpg', 1, '2023-05-06 06:28:32', '2023-05-06 06:30:23'),
(38, 1, 8, 3, 1, 2, 1, 'Lenovo89', '45', 'test', 45657.00, 'assets/admin/img/product/b1.jpg', 1, '2023-05-07 07:58:41', '2023-05-07 07:58:41'),
(39, 1, 8, 1, 1, 3, 1, 'dell 45', '34', 'awert<hr id=\"null\">', 5243.00, 'assets/admin/img/product/b7.jpg', 1, '2023-05-07 07:59:51', '2023-05-07 07:59:51'),
(42, 1, 8, 1, 1, 3, 2, 'Del XPS13', '2345', 'test', 236545.00, 'assets/admin/img/product/download (4).jpg|assets/admin/img/product/fdgh.jpg|assets/admin/img/product/wert.jpg', 1, '2023-05-15 08:15:22', '2023-05-15 08:15:22'),
(43, 6, 2, 6, 4, 3, 6, 'Ashwagandha', '3645', 'test', 345.00, 'assets/admin/img/product/shutterstock_647337493-1.jpg', 1, '2023-05-15 08:17:57', '2023-05-15 08:17:57'),
(44, 6, 12, 7, 1, 3, 2, 'Flexi', '3412', 'test', 25346.00, 'assets/admin/img/product/Flexi.jpg', 1, '2023-05-15 08:19:19', '2023-05-15 08:19:19'),
(45, 6, 19, 6, 4, 2, 6, 'Bexovid', '768', 'TEST', 2343.00, 'assets/admin/img/product/bexovid-1.jpg', 1, '2023-05-15 08:20:48', '2023-05-15 08:20:48'),
(46, 10, 5, 20, 1, 3, 6, 'Bata mans casual', '789', 'test', 890.00, 'assets/admin/img/product/gg.jpg|assets/admin/img/product/rtysr.jpg', 1, '2023-05-16 19:57:48', '2023-05-16 19:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `address`, `city`, `country`, `zip_code`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'mehedi', 'mehedi@gmail.com', 'CHANDIA', 'BHABANIGANJ', 'Bangladesh', '5760', '01755771232', '2023-05-16 20:06:44', '2023-05-16 20:06:44'),
(2, 'sharif', 'mehedi@gmail.com', 'CHANDIA', 'BHABANIGANJ', 'EFWE', '5760', '12345568888', '2023-05-17 00:05:09', '2023-05-17 00:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '[\"s\"]', 1, '2023-05-03 07:09:20', '2023-05-03 07:09:20'),
(2, '[\"s\",\"m\"]', 1, '2023-05-03 07:09:25', '2023-05-03 07:09:25'),
(3, '[\"s \",\"m\",\"l\"]', 1, '2023-05-03 07:09:34', '2023-05-14 23:59:00'),
(4, '[\"s\",\"m\",\"l\",\"xl\"]', 1, '2023-05-03 07:09:42', '2023-05-03 07:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `cat_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 1, 'test', 1, '2023-05-03 07:05:12', '2023-05-06 03:24:33'),
(2, 'Aurbedik', 6, 'test', 1, '2023-05-03 07:08:05', '2023-05-15 08:00:30'),
(3, 'KitchWall', 7, 'test', 1, '2023-05-06 03:26:46', '2023-05-15 07:58:20'),
(4, 'Shirt', 9, 'test', 1, '2023-05-06 03:27:20', '2023-05-06 03:27:20'),
(5, 'Shoes', 10, 'test', 1, '2023-05-06 03:27:41', '2023-05-06 03:27:41'),
(6, 'Books', 11, 'test', 1, '2023-05-06 03:27:55', '2023-05-06 03:27:55'),
(8, 'Laptop', 1, 'test', 1, '2023-05-07 07:52:37', '2023-05-07 07:52:37'),
(9, 'Tv', 1, 'test', 1, '2023-05-07 07:52:49', '2023-05-07 07:52:49'),
(12, 'Antibiotic', 6, 'test', 1, '2023-05-07 07:54:41', '2023-05-15 07:56:45'),
(15, 'Home Need', 7, 'test', 1, '2023-05-14 22:55:15', '2023-05-15 07:59:07'),
(16, 'Pant', 9, 'test', 1, '2023-05-15 07:54:21', '2023-05-15 07:54:21'),
(17, 'Tshirt', 9, 'tst', 1, '2023-05-15 07:54:40', '2023-05-15 07:54:40'),
(18, 'Renata', 6, 'test', 1, '2023-05-15 07:59:39', '2023-05-15 07:59:39'),
(19, 'Antiobiotik', 6, 'test', 1, '2023-05-15 08:00:57', '2023-05-15 08:00:57'),
(20, 'Books', 11, 'test', 1, '2023-05-15 08:01:10', '2023-05-15 08:01:10'),
(21, 'Pencil', 11, 'test', 1, '2023-05-15 08:01:36', '2023-05-15 08:01:36'),
(22, 'Magagine', 11, 'test', 1, '2023-05-15 08:02:02', '2023-05-15 08:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'piece', 'er', 1, '2023-05-03 07:08:42', '2023-05-03 07:08:42'),
(2, 'Liter', 'e', 1, '2023-05-03 07:09:06', '2023-05-03 07:09:06'),
(4, 'Box', 'test', 1, '2023-05-14 22:54:17', '2023-05-15 08:04:50'),
(6, 'Kg', 'test', 1, '2023-05-15 08:05:15', '2023-05-15 08:05:15');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
