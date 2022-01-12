-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `final04` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `final04`;

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `item_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `checkoutdetails`;
CREATE TABLE `checkoutdetails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_type_id_foreign` (`type_id`),
  CONSTRAINT `items_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`id`, `type_id`, `name`, `money`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3,	1,	'炙燒厚豬排',	330,	'pork.jpg',	0,	NULL,	NULL),
(4,	1,	'酥烤雞排',	310,	'chicken.jpg',	0,	NULL,	NULL),
(5,	1,	'沙郎牛排',	328,	'beef.jpg',	0,	NULL,	NULL),
(6,	1,	'菲力牛排',	370,	'beef2.jpg',	0,	NULL,	NULL),
(7,	1,	'極黑安格斯穀飼沙朗牛排套餐',	790,	'beef3.jpg',	0,	NULL,	NULL),
(8,	1,	'帶骨牛小排',	490,	'beef4.jpg',	0,	NULL,	NULL),
(9,	1,	'無骨牛小排',	560,	'beef5.jpg',	0,	NULL,	NULL),
(10,	1,	'炸沙朗牛排飯',	420,	'beef6.jpg',	0,	NULL,	NULL),
(11,	1,	'挪威鯖魚飯',	420,	'fish.jpg',	0,	NULL,	NULL),
(12,	1,	'起士菲力牛排',	460,	'beef7.jpg',	0,	NULL,	NULL),
(13,	2,	'韓式小黃瓜',	50,	'cucumber.jpg',	0,	NULL,	NULL),
(14,	2,	'韓式豆芽菜',	50,	'beansprouts.jpg',	0,	NULL,	NULL),
(15,	2,	'和風/芥末生菜沙拉',	50,	'sala.jpg',	0,	NULL,	NULL),
(16,	2,	'美式脆薯',	90,	'chips.jpg',	0,	NULL,	NULL),
(17,	2,	'玉米濃湯',	30,	'soup.jpg',	0,	NULL,	NULL),
(18,	2,	'可樂/雪碧',	30,	'cola.jpg',	0,	NULL,	NULL),
(19,	2,	'和風三分蛋',	30,	'egg.jpg',	0,	NULL,	NULL),
(20,	2,	'冰淇淋',	35,	'icecream.jpg',	0,	NULL,	NULL);

DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `managers_user_id_foreign` (`user_id`),
  CONSTRAINT `managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `members_user_id_foreign` (`user_id`),
  CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `members` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	2,	NULL,	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_12_30_082404_create_sessions_table',	1),
(7,	'2022_01_05_022341_create_members_table',	1),
(8,	'2022_01_05_022434_create_managers_table',	1),
(9,	'2022_01_05_022446_create_reserves_table',	1),
(10,	'2022_01_05_022456_create_tables_table',	1),
(11,	'2022_01_05_022505_create_orders_table',	1),
(12,	'2022_01_05_022516_create_items_table',	1),
(13,	'2022_01_05_022528_create_types_table',	1),
(14,	'2022_01_05_030038_add_foreign_type_id_to_items',	1),
(15,	'2022_01_05_030349_add_foreign_member_id_to_orders',	1),
(16,	'2022_01_05_031011_add_foreign_member_id_to_reserves',	1),
(17,	'2022_01_11_131554_add_name_and_date_to_reserves',	2),
(18,	'2022_01_11_154639_add_type_to_users',	3),
(19,	'2022_01_11_220008_create_carts_table',	4),
(20,	'2022_01_11_221736_create_checkoutdetails_table',	5);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) unsigned NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_member_id_foreign` (`member_id`),
  CONSTRAINT `orders_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `member_id`, `method`, `total`, `status`, `created_at`, `updated_at`) VALUES
(2,	1,	'現金',	310,	'已完成',	NULL,	NULL);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `reserves`;
CREATE TABLE `reserves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` int(11) NOT NULL,
  `table_id` bigint(20) unsigned DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reserves_member_id_foreign` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `reserves` (`id`, `member_id`, `name`, `person`, `table_id`, `date`, `created_at`, `updated_at`) VALUES
(2,	2,	'bbb',	2,	2,	'2022-01-12',	'2022-01-11 10:28:14',	'2022-01-11 10:28:14'),
(3,	2,	'bbb',	1,	1,	'2022-01-12',	'2022-01-11 10:29:30',	'2022-01-11 10:29:30'),
(4,	2,	'bbb',	1,	1,	'2022-01-12',	'2022-01-11 10:29:42',	'2022-01-11 10:29:42'),
(5,	2,	'bbb',	1,	1,	'2022-01-12',	'2022-01-11 10:30:03',	'2022-01-11 10:30:03'),
(6,	2,	'bbb',	1,	1,	'2022-01-12',	'2022-01-11 10:31:06',	'2022-01-11 10:31:06'),
(7,	2,	'bbb',	1,	1,	'2022-01-12',	'2022-01-11 10:31:16',	'2022-01-11 10:31:16'),
(8,	2,	'aaa',	1,	2,	'2022-01-13',	'2022-01-11 15:09:18',	'2022-01-11 15:09:18'),
(9,	2,	'USER1',	5,	2,	'2022-01-07',	'2022-01-11 16:18:26',	'2022-01-11 16:18:26');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PQdYLPfsUsLQMib2QzR3cdkUN7EEwMTl9W6ZJ2Bc',	3,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',	'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi90YWJsZXMvMS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IjBZM2hZZHV1WUl1ZFNmNVh2aXhhRWNXdzd2ODVSWFlUSGJ0N2pNcmMiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQvVlN5L3F3d3JiRkRnbmpaYTJoSjBlckI1Q291bHBXU0pVWVBXRmx4WnZPSVFzVjJXUlp0MiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkL1ZTeS9xd3dyYkZEZ25qWmEyaEowZXJCNUNvdWxwV1NKVVlQV0ZseFp2T0lRc1YyV1JadDIiO30=',	1641948045),
('q6JYnLANV38nBYGgJ6sTMug9SOE4cwsTRv88rOtZ',	2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTkJDTEZrUHRPNmFGUVp1ektYNmhPQUxhRmFkZmRNN0ltQlk3QlVVSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9vcmRlciI7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkRHRkLjRQc0xlUENaeHk3bEo4WlM4ZVpXQ1NYdVlPeDVqVmZPMTUzSm9Zb1FoeGJGV3g2eTYiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJER0ZC40UHNMZVBDWnh5N2xKOFpTOGVaV0NTWHVZT3g1alZmTzE1M0pvWW9RaHhiRld4Nnk2IjtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9',	1641943026);

DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tables` (`id`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	0,	'2022-01-12 00:13:27',	'2022-01-12 00:13:27'),
(2,	2,	0,	'2022-01-12 00:13:35',	'2022-01-12 00:13:35'),
(3,	3,	0,	'2022-01-12 00:13:41',	'2022-01-12 00:13:41'),
(4,	4,	0,	'2022-01-12 00:13:46',	'2022-01-12 00:13:46'),
(5,	5,	0,	'2022-01-12 00:13:54',	'2022-01-12 00:13:54');

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'主餐',	NULL,	NULL),
(2,	'附餐',	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2,	'bbb',	'bbb@gmail.com',	0,	NULL,	'$2y$10$Dtd.4PsLePCZxy7lJ8ZS8eZWCSXuYOx5jVfO153JoYoQhxbFWx6y6',	NULL,	NULL,	'HL8nqoOAtDUQYibgDF4Mg142IN8QPD61j0vdOihcDNomG7EoifS8HlSgs3S6',	NULL,	NULL,	'2022-01-05 03:13:12',	'2022-01-05 03:13:12'),
(3,	'admin',	'admin@gmail.com',	1,	NULL,	'$2y$10$/VSy/qwwrbFDgnjZa2hJ0erB5CoulpWSJUYPWFlxZvOIQsV2WRZt2',	NULL,	NULL,	'sjIdFIZSY2PF1LZWPhw6Plk37UBbTtaclYXDfqokjoiBI48WHvgAmpsKfkfP',	NULL,	NULL,	'2022-01-11 16:22:43',	'2022-01-11 16:22:43');

-- 2022-01-12 01:24:56
