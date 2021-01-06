-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 07:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'suptidas1', 'some detail', '2021-01-05 06:35:50', '2021-01-05 17:20:22'),
(5, 'Max', 'A person', '2021-01-05 17:20:04', '2021-01-05 17:20:04'),
(6, 'Supti Rani Das', 'Deposit', '2021-01-05 21:27:21', '2021-01-05 21:27:21'),
(7, 'Shovra Das', 'Savings', '2021-01-05 21:28:35', '2021-01-05 21:28:35'),
(8, 'Ava Rani Das', 'Deposit', '2021-01-05 21:29:31', '2021-01-05 21:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_images`
--

CREATE TABLE `ajax_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ajax_images`
--

INSERT INTO `ajax_images` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Supti', '1609837732.jpg', '2021-01-05 03:08:52', '2021-01-05 03:08:52'),
(2, 'Supti', '1609837733.jpg', '2021-01-05 03:08:53', '2021-01-05 03:08:53'),
(3, 'Supti', '1609837733.jpg', '2021-01-05 03:08:53', '2021-01-05 03:08:53'),
(4, 'Supti', '1609837742.jpg', '2021-01-05 03:09:02', '2021-01-05 03:09:02'),
(5, 'Supti', '1609837759.jpg', '2021-01-05 03:09:19', '2021-01-05 03:09:19'),
(6, 'Supti', '1609837833.jpg', '2021-01-05 03:10:33', '2021-01-05 03:10:33'),
(7, 'Supti', '1609838105.jpg', '2021-01-05 03:15:05', '2021-01-05 03:15:05'),
(8, 'Supti', '1609888963.jpg', '2021-01-05 17:22:43', '2021-01-05 17:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(2, 'partho shaon', 'partho shaon', NULL, '2021-01-03 23:32:21'),
(14, 'Bob', 'Work in some department', '2021-01-04 04:06:23', '2021-01-05 17:17:32'),
(17, 'Max', 'Some employee', '2021-01-05 17:26:17', '2021-01-05 17:26:17');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double(8,2) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `salary`, `detail`, `created_at`, `updated_at`) VALUES
(5, 'Clerk', 10000.00, 'a clerk needed in amonth', '2021-01-04 04:01:12', '2021-01-04 04:01:12'),
(8, 'manager', 20000.00, 'vacancy', '2021-01-04 11:28:21', '2021-01-04 11:28:45'),
(9, 'Clerk', 20000.00, 'Clerks perform a variety of clerical and administrative duties such as answering the telephone, typing documents, filing, and liaising with clients. They are also known as general office clerks, administrative assistants, receptionists and office assistants', '2021-01-05 21:19:16', '2021-01-05 21:19:16'),
(10, 'Accountant', 25000.00, 'An accountant makes sure a company or organization is efficiently operating by accessing their financial records.', '2021-01-05 21:24:06', '2021-01-05 21:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message` varchar(1000) NOT NULL,
  `SendFrom` varchar(20) NOT NULL,
  `SendTo` varchar(20) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message`, `SendFrom`, `SendTo`, `Date`) VALUES
('hi', 'Nafiz', 'Sadat Ebne', 'Mon Nov 23 2020 00:48:35 GMT+0600 (Bangladesh Standard Time)'),
('hi', 'Sadat Ebne', 'Nafiz', 'Mon Nov 23 2020 00:49:18 GMT+0600 (Bangladesh Standard Time)');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_04_044110_create_employees_table', 1),
(5, '2021_01_04_090730_create_jobs_table', 2),
(6, '2021_01_05_004319_create_notifications_table', 3),
(7, '2021_01_05_055330_create_posts_table', 4),
(8, '2021_01_05_090341_create_ajax_image_tabel', 5),
(10, '2021_01_05_121715_create_accounts_table', 6),
(11, '2021_01_05_203307_add_google_id_column', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `CustomerID`) VALUES
('111', 'dwfdweff', 'fwqf', 'dfwqd', 'wdfqef', 1),
('1233', 'Narsingdi', 'Narsingdi', '111', 'Bangladesh', 1),
('Shanto', 'dhaka', 'dhaka', 'dhaka', 'banglade4sh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cell` varchar(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `cell`, `type`, `google_id`) VALUES
('aiub', 'aiub', 'aiub', '01717763107', 'employee', NULL),
('supti', '1234', 'supti', '01717763107', 'employee', NULL),
('supti', '1234', 'supti', '01717763107', 'employee', NULL),
('s', 's', 's', '01717763107', 'employee', NULL),
('admin', 'adim', 'supti', '01717763107', 'employee', NULL),
('admin', 'admin', 'admin', '01717763107', 'employee_a', NULL),
('admin1', 'admin1', 'admin1', '01717763107', 'employee_a', NULL),
('admin1', 'admin1', 'admin1', '01717763107', 'employee_a', NULL),
('doctor', '1', 'supti', '01717763107', 'employee', NULL),
('sharna', 'sharna', 'supti', '01717763107', 'employee', NULL),
('hi', 'hi', 'supti', '01717763107', 'employee', NULL),
('hi', 'a', 'supti', '01717763107', 'employee', NULL),
('hi', 'a', 'supti', '01717763107', 'employee', NULL),
('hi', 'a', 'supti', '01717763107', 'employee', NULL),
('hi', 'a', 'supti', '01717763107', 'employee', NULL),
('bd', 'bd', 'bd', '01717763107', 'employee', NULL),
('hey', 'HEY', 'hey', '01717763107', 'employee', NULL),
('admin', '4', 'supti', '01717763107', 'employee', NULL),
('admin', '4', 'supti', '01717763107', 'employee', NULL),
('u', 'u', 'hello', '01717763107', 'employee', NULL),
('w', 'd', 'dw2r', '01717763107', 'employee', NULL),
('laravel', 'laravel', 'laravel', '01717763107', 'employee', NULL),
('', '', 'Supti Rani Das', '', '', '110522369683034689524'),
('', '', 'Supti Rani Das', '', '', '109786040665637101591'),
('bob', '1234', 'bob', '01700000000', 'employee', NULL),
('bkb', 'bkb', 'Ava Rani Das', '01743066575', 'employee', NULL),
('qqq', 'qqq', 'qqq', '01717763107', 'employee', NULL),
('ash', 'ash', 'ashkona', '01717763107', 'employee', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajax_images`
--
ALTER TABLE `ajax_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ajax_images`
--
ALTER TABLE `ajax_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
