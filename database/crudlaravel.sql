-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for crud_laravel
CREATE DATABASE IF NOT EXISTS `crud_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud_laravel`;

-- Dumping structure for table crud_laravel.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NamaPegawai` varchar(200) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `RolePekerjaan` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table crud_laravel.employees: ~5 rows (approximately)
DELETE FROM `employees`;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `NamaPegawai`, `Alamat`, `RolePekerjaan`, `created_at`, `updated_at`) VALUES
	(3, 'bintang', 'bintang bandung', 'QA', '2022-08-28 15:57:30', '2022-08-28 15:57:30'),
	(4, 'sda', 'dsad', 'sda', '2022-09-09 11:50:05', '2022-09-09 11:50:05'),
	(5, 'sda', 'dsad', 'sdas', '2022-09-09 11:51:57', '2022-09-09 11:51:57'),
	(6, 'sda', 'dsad', 'sdas', '2022-09-09 11:54:37', '2022-09-09 11:54:37'),
	(7, 'asdfs', 'dfdsf', 'dsfs', '2022-09-09 11:54:54', '2022-09-09 11:54:54');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table crud_laravel.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.migrations: ~2 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_08_28_154537_create_pengalamen_table', 1),
	(7, '2022_09_10_140809_create_profiles_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.pengalamen
CREATE TABLE IF NOT EXISTS `pengalamen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NamaTempatKerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LamaKerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Profesi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.pengalamen: ~2 rows (approximately)
DELETE FROM `pengalamen`;
/*!40000 ALTER TABLE `pengalamen` DISABLE KEYS */;
INSERT INTO `pengalamen` (`id`, `NamaTempatKerja`, `LamaKerja`, `Profesi`, `Deskripsi`, `created_at`, `updated_at`) VALUES
	(3, 'sada', 'dsad', 'adasd', 'dsda', '2022-09-10 16:40:56', '2022-09-10 16:40:56'),
	(4, 'PGD', '2 Tahun', 'QA', 'QA', '2022-09-11 02:49:48', '2022-09-11 02:49:48');
/*!40000 ALTER TABLE `pengalamen` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NamaLengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Karir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Linkid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `About` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.profiles: ~2 rows (approximately)
DELETE FROM `profiles`;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `NamaLengkap`, `Karir`, `Location`, `Degree`, `Email`, `Linkid`, `About`, `Image`, `created_at`, `updated_at`) VALUES
	(3, 'sada', 'dada', 'dasd', 'adasd', 'ada', 'dadad', 'adad', 'ada', '2022-09-11 02:34:33', '2022-09-11 02:34:33'),
	(4, 'lhjhk', 'hkhj', 'khkh', 'hkhjkh', 'khjkh', 'hjkhkh', 'jkjhkhj', 'kjhkh', '2022-09-11 03:06:34', '2022-09-11 03:06:34'),
	(5, 'dasd', 'ada', 'dasd', 'adasd', 'asdas', 'dasdas', 'dasda', '20220911165538.jpeg', '2022-09-11 16:55:38', '2022-09-11 16:55:38');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping structure for table crud_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud_laravel.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$ioJbe5FIvZMEMm.SEh8Aq.bnWavl4NhIHNM/UiXuXpF5hhm3D.zm2', NULL, '2022-08-28 15:52:44', '2022-08-28 15:52:44'),
	(4, 'bintang', 'bintang@gmail.com', NULL, '$2y$10$RsrTGrM91YGd.ynCz0mGseSIp7DMXmPC23XG/rVneVNBvo2yw.IZi', NULL, '2022-08-28 15:53:04', '2022-08-28 15:53:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
