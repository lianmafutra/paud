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

-- Dumping structure for table db_paud.admin_settings
CREATE TABLE IF NOT EXISTS `admin_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_wa` varchar(16) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.admin_settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin_settings` DISABLE KEYS */;
INSERT INTO `admin_settings` (`id`, `no_wa`, `created_at`, `updated_at`) VALUES
	(1, '+6289624379593', '0000-00-00 00:00:00', '2021-10-13 11:58:38');
/*!40000 ALTER TABLE `admin_settings` ENABLE KEYS */;

-- Dumping structure for table db_paud.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` longtext,
  `poster` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.berita: ~6 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `isi`, `poster`, `created_at`, `updated_at`) VALUES
	(1, 'Contoh berita 2', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '6166c91e30a1f-1634126110.jpg', '2021-10-10 22:03:07', '2021-10-13 11:56:06'),
	(8, 'Contoh berita 3', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', '6166c94ed9163-1634126158.jpg', '2021-10-10 16:24:59', '2021-10-13 11:55:58'),
	(11, 'Contoh berita 1', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '6166ed28e9b92-1634135336.jpg', '2021-10-12 14:32:34', '2021-10-13 14:28:56'),
	(13, 'Contoh berita 4', '<p>ini contoh berita 4</p>', '6166ed4b935bc-1634135371.jpg', '2021-10-13 14:29:31', '2021-10-13 14:29:31'),
	(14, 'contoh berita 5', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '6166ed88a28c0-1634135432.jpg', '2021-10-13 14:30:32', '2021-10-17 01:39:26'),
	(15, 'contoh berita 6', '<p>dwqdwqd</p>', '6166ed9a6c7fc-1634135450.jpg', '2021-10-13 14:30:50', '2021-10-13 14:30:50');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table db_paud.data_paud
CREATE TABLE IF NOT EXISTS `data_paud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_wa` varchar(50) NOT NULL DEFAULT '0',
  `no_kontak` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `facebook` text,
  `instagram` text,
  `visi_misi` text,
  `latar_belakang` text,
  `youtube` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.data_paud: ~1 rows (approximately)
/*!40000 ALTER TABLE `data_paud` DISABLE KEYS */;
INSERT INTO `data_paud` (`id`, `no_wa`, `no_kontak`, `email`, `alamat`, `facebook`, `instagram`, `visi_misi`, `latar_belakang`, `youtube`, `created_at`, `updated_at`) VALUES
	(1, '2123456789', '1234567890', 'paudjunior@gmail.com', 'P.O. Box 320, Ross, California 9495, USA', 'facebook.com/paudjunior', 'instagram.com/paudjunior', '<h2><strong>Visi</strong></h2>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Membentuk Insan Bangsa Sehat, Cerdas Berakhlak Mulia</p>\r\n\r\n<h2><strong>Misi</strong></h2>\r\n\r\n<ol>\r\n	<li>Membangun akhlak siswa yang bertaqwa kepada Allah&nbsp;</li>\r\n	<li>Membantu peran serta orang tua dalam mendidik anak</li>\r\n	<li>Membangun peserta didik yang berakhlak baik</li>\r\n	<li>Mempersiapkan anak didik untuk masuk kejenjang pendidikan lebih lanjut</li>\r\n</ol>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, NULL, '2021-10-16 07:54:31');
/*!40000 ALTER TABLE `data_paud` ENABLE KEYS */;

-- Dumping structure for table db_paud.failed_jobs
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

-- Dumping data for table db_paud.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table db_paud.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.galeri: ~18 rows (approximately)
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`id`, `gambar`, `galeri_album_id`, `created_at`, `updated_at`) VALUES
	(11, '616c21a8a0ed3-1634476456.jpg', 1, NULL, NULL),
	(12, '616c21a8a2be9-1634476456.jpg', 1, NULL, NULL),
	(13, '616c223951732-1634476601.jpg', 2, NULL, NULL),
	(14, '616c223953cca-1634476601.jpg', 2, NULL, NULL),
	(15, '616c22bbd853f-1634476731.jpg', 2, NULL, NULL),
	(16, '616c22db91021-1634476763.jpg', 2, NULL, NULL),
	(17, '616c231f3330a-1634476831.jpg', 1, NULL, NULL),
	(18, '616c2499a2716-1634477209.jpg', NULL, '2021-10-17 13:26:49', '2021-10-17 13:26:49'),
	(21, '616c24db5cb8c-1634477275.jpg', 3, '2021-10-17 13:27:55', '2021-10-17 13:27:55'),
	(22, '616c24e6e9b92-1634477286.jpg', 3, '2021-10-17 13:28:06', '2021-10-17 13:28:06'),
	(23, '616c2587d5d1e-1634477447.jpg', 3, '2021-10-17 13:30:47', '2021-10-17 13:30:47'),
	(24, '616c25b0508a3-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(25, '616c25b052a87-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(26, '616c25b054570-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(27, '616c25d1c5961-1634477521.jpg', 2, '2021-10-17 13:32:01', '2021-10-17 13:32:01'),
	(28, '616c25d1c78b5-1634477521.jpg', 2, '2021-10-17 13:32:01', '2021-10-17 13:32:01');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;

-- Dumping structure for table db_paud.galeri_album
CREATE TABLE IF NOT EXISTS `galeri_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` text,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.galeri_album: ~3 rows (approximately)
/*!40000 ALTER TABLE `galeri_album` DISABLE KEYS */;
INSERT INTO `galeri_album` (`id`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
	(1, 'kegiatan anak', '<p>kmxkmwkdmkwkdnkwnqkdnkwqd</p>', NULL, '2021-10-17 00:36:43', '2021-10-17 12:52:31'),
	(2, 'Sosialisasi anak', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, '2021-10-17 00:36:43', '2021-10-17 13:13:57'),
	(3, 'Tanpa album', '<p>mdkmqkdm</p>', NULL, NULL, '2021-10-17 13:22:31');
/*!40000 ALTER TABLE `galeri_album` ENABLE KEYS */;

-- Dumping structure for table db_paud.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_paud.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_paud.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_paud.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_paud.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Dumping data for table db_paud.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table db_paud.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `poster` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.sliders: ~4 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `judul`, `text1`, `text2`, `text3`, `poster`, `created_at`, `updated_at`) VALUES
	(1, 'slider 1', 'Selamat datang di', 'Website Yayasan Pendidikan Meccazia Junior', 'Taman Penitipan anak junior', '6169a76125d4f-1634314081.png', '2021-10-13 22:29:22', '2021-10-15 16:08:01'),
	(2, 'slider 2', 'selamat datang', 'selamat datang', 'selamat datang', '6166c91e30a1f-1634126110.jpg', '2021-10-13 22:29:22', '2021-10-13 22:29:23'),
	(6, 'slider 3', 'Selamat Datang', 'Website', 'Paud', '6169860d6a547-1634305549.png', '2021-10-13 15:43:33', '2021-10-15 13:45:49');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table db_paud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_paud.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `last_login_at`, `last_login_ip`) VALUES
	(2, 'superadmin', 'admin', 'admin@admin.com', NULL, '$2y$10$52pCxBjEAJXnEIHPNUcDdePPcV93Q5qzIkfYRPao2RAdSBOXTaGne', NULL, '2021-10-09 10:01:06', '2021-10-17 06:59:40', '2021-10-17 06:59:40', '127.0.0.1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
