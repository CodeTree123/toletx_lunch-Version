-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toletx_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilboards`
--

CREATE TABLE `bilboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `hieght` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 22,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `building_size` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `floor` bigint(20) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `t_build` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 3,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community__centers`
--

CREATE TABLE `community__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `seat` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 10,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exibution__centers`
--

CREATE TABLE `exibution__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 20,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 11,
  `deleted_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `flat_size` varchar(255) NOT NULL,
  `floor_level` bigint(20) NOT NULL,
  `bedrooms` bigint(20) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `kitchen` varchar(255) DEFAULT NULL,
  `drawing` varchar(255) DEFAULT NULL,
  `varanda` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `cable_tv` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 2,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghats`
--

CREATE TABLE `ghats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 15,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `pool` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `spa` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 6,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 5,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `land_area` varchar(255) NOT NULL,
  `land_height` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 13,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `s_date` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_12_28_100841_create_rooms_table', 1),
(11, '2021_12_28_100923_create_parking__spots_table', 1),
(12, '2021_12_28_100955_create_hotels_table', 1),
(13, '2021_12_28_101015_create_offices_table', 1),
(14, '2021_12_28_101028_create_lands_table', 1),
(15, '2021_12_28_101053_create_community__centers_table', 1),
(16, '2021_12_28_101116_create_shooting__spots_table', 1),
(17, '2021_12_28_101132_create_shops_table', 1),
(18, '2021_12_28_101146_create_factories_table', 1),
(19, '2021_12_28_101205_create_warehouses_table', 1),
(20, '2021_12_28_101217_create_ponds_table', 1),
(21, '2021_12_28_101242_create_swimming__pools_table', 1),
(22, '2021_12_28_101257_create_bilboards_table', 1),
(23, '2021_12_28_101312_create_rooftops_table', 1),
(24, '2021_12_28_101333_create_restaurants_table', 1),
(25, '2021_12_28_101555_create_hostels_table', 1),
(26, '2022_01_09_104502_create_flats_table', 1),
(27, '2022_01_18_101557_create_exibution__centers_table', 1),
(28, '2022_01_18_101623_create_play_grounds_table', 1),
(29, '2022_02_28_171755_create_phoneotps_table', 1),
(30, '2022_04_03_063920_create_ghats_table', 1),
(31, '2022_04_03_064006_create_picnic__spots_table', 1),
(32, '2022_08_08_092856_create_buildings_table', 1),
(33, '2022_11_21_070618_create_marketings_table', 1),
(34, '2022_12_11_072305_create_forms_table', 1),
(35, '2022_12_13_111134_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `s_charge` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 8,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parking__spots`
--

CREATE TABLE `parking__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 4,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phoneotps`
--

CREATE TABLE `phoneotps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `otp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picnic__spots`
--

CREATE TABLE `picnic__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `land_area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 19,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 17,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ponds`
--

CREATE TABLE `ponds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `water_level` varchar(255) NOT NULL,
  `pond_area` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 14,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `resort_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `spa` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `swimmingpool` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 7,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooftops`
--

CREATE TABLE `rooftops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `p_protection` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 21,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `guest_count` bigint(20) UNSIGNED DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `varanda` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `cable_tv` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shooting__spots`
--

CREATE TABLE `shooting__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 18,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 9,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `swimming__pools`
--

CREATE TABLE `swimming__pools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 16,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `admin_verify` varchar(255) NOT NULL DEFAULT '0',
  `n_photo1` varchar(255) DEFAULT NULL,
  `n_photo2` varchar(255) DEFAULT NULL,
  `fav_qt1` varchar(255) DEFAULT NULL,
  `fav_ans1` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `otp` int(11) DEFAULT NULL,
  `terms` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `phone`, `photo`, `email`, `nationality`, `father_name`, `mother_name`, `address`, `google_id`, `facebook_id`, `date_of_birth`, `gender`, `admin_verify`, `n_photo1`, `n_photo2`, `fav_qt1`, `fav_ans1`, `email_verified_at`, `password`, `role_id`, `otp`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '017', NULL, 'toletx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '10/04/1986', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$Dz6WHWUdMUaT69ff.gLMBu01bualY3HHpSWpePv6wC..jNa5hwYQy', 1, NULL, NULL, NULL, '2022-12-26 05:51:39', '2022-12-26 05:51:39'),
(2, 'codetree-1234', 'Rafsan', '01', NULL, 'rafsan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '10/04/1986', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$veQyRpCctGk7kZoDxsIj1.6aLwqqeGDApCoQ5/jrYWcLS/ubB2Ebm', 2, NULL, NULL, NULL, '2022-12-26 05:51:39', '2022-12-26 05:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `building_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 12,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilboards`
--
ALTER TABLE `bilboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community__centers`
--
ALTER TABLE `community__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghats`
--
ALTER TABLE `ghats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking__spots`
--
ALTER TABLE `parking__spots`
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
-- Indexes for table `phoneotps`
--
ALTER TABLE `phoneotps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_grounds`
--
ALTER TABLE `play_grounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponds`
--
ALTER TABLE `ponds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooftops`
--
ALTER TABLE `rooftops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilboards`
--
ALTER TABLE `bilboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community__centers`
--
ALTER TABLE `community__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghats`
--
ALTER TABLE `ghats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking__spots`
--
ALTER TABLE `parking__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phoneotps`
--
ALTER TABLE `phoneotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ponds`
--
ALTER TABLE `ponds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooftops`
--
ALTER TABLE `rooftops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
