-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_paud
CREATE DATABASE IF NOT EXISTS `db_paud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_paud`;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.berita: ~6 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `isi`, `poster`, `created_at`, `updated_at`) VALUES
	(1, 'Contoh berita 2', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '6166c91e30a1f-1634126110.jpg', '2021-10-10 22:03:07', '2021-10-13 11:56:06'),
	(8, 'Contoh berita 3', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', '6166c94ed9163-1634126158.jpg', '2021-10-10 16:24:59', '2021-10-13 11:55:58'),
	(11, 'Contoh berita 1', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '6166ed28e9b92-1634135336.jpg', '2021-10-12 14:32:34', '2021-10-13 14:28:56'),
	(13, 'Contoh berita 4', '<p>ini contoh berita 4</p>', '6166ed4b935bc-1634135371.jpg', '2021-10-13 14:29:31', '2021-10-13 14:29:31'),
	(14, 'contoh berita 5', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '6166ed88a28c0-1634135432.jpg', '2021-10-13 14:30:32', '2021-10-17 01:39:26'),
	(16, 'paket TPA', '<p><strong>A. Paket Bulanan 1 (senin - sabtu) pukul 07:00 - 13.00</strong></p>\r\n\r\n<ul>\r\n	<li>pendaftaran : Rp. 100.000</li>\r\n	<li>SPP/bulan : Rp. 400.000</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>B.&nbsp;Paket Bulanan 2 (senin - sabtu) pukul 07:00 - 16.00</strong></p>\r\n\r\n<ul>\r\n	<li>pendaftaran : Rp. 100.000</li>\r\n	<li>SPP/bulan : Rp. 550.000</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n</ul>', '6174daae38b26-1635048110.jpg', '2021-10-24 03:53:04', '2021-10-24 04:04:24');
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

-- Dumping data for table db_paud.data_paud: ~0 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.galeri: ~15 rows (approximately)
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`id`, `gambar`, `galeri_album_id`, `created_at`, `updated_at`) VALUES
	(13, '616c223951732-1634476601.jpg', 2, NULL, NULL),
	(14, '616c223953cca-1634476601.jpg', 2, NULL, NULL),
	(15, '616c22bbd853f-1634476731.jpg', 2, NULL, NULL),
	(16, '616c22db91021-1634476763.jpg', 2, NULL, NULL),
	(18, '616c2499a2716-1634477209.jpg', 1, '2021-10-17 13:26:49', '2021-10-17 13:26:49'),
	(21, '616c24db5cb8c-1634477275.jpg', 3, '2021-10-17 13:27:55', '2021-10-17 13:27:55'),
	(22, '616c24e6e9b92-1634477286.jpg', 3, '2021-10-17 13:28:06', '2021-10-17 13:28:06'),
	(23, '616c2587d5d1e-1634477447.jpg', 3, '2021-10-17 13:30:47', '2021-10-17 13:30:47'),
	(24, '616c25b0508a3-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(25, '616c25b052a87-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(26, '616c25b054570-1634477488.jpg', 3, '2021-10-17 13:31:28', '2021-10-17 13:31:28'),
	(27, '616c25d1c5961-1634477521.jpg', 2, '2021-10-17 13:32:01', '2021-10-17 13:32:01'),
	(28, '616c25d1c78b5-1634477521.jpg', 2, '2021-10-17 13:32:01', '2021-10-17 13:32:01'),
	(38, '61702a80ae90c-1634740864.jpg', 1, '2021-10-20 14:41:04', '2021-10-20 14:41:04'),
	(39, '6171888a3470b-1634830474.jpg', 1, '2021-10-21 15:34:34', '2021-10-21 15:34:34'),
	(40, '6171888a35f3d-1634830474.jpg', 1, '2021-10-21 15:34:34', '2021-10-21 15:34:34');
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
	(1, 'kegiatan anak 222', '<p>kmxkmwkdmkwkdnkwnqkdnkwqd 222</p>', '6171887d55fbc-1634830461.jpg', '2021-10-17 00:36:43', '2021-10-21 15:34:21'),
	(2, 'Sosialisasi anak', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '616c223951732-1634476601.jpg', '2021-10-17 00:36:43', '2021-10-17 13:13:57'),
	(3, 'Tanpa album', '<p>mdkmqkdm</p>', '616c223951732-1634476601.jpg', NULL, '2021-10-17 13:22:31');
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

-- Dumping structure for table db_paud.paket_tpa
CREATE TABLE IF NOT EXISTS `paket_tpa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.paket_tpa: ~3 rows (approximately)
/*!40000 ALTER TABLE `paket_tpa` DISABLE KEYS */;
INSERT INTO `paket_tpa` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'paket bulanan 1', '<ul><li>(senin - sabtu) pukul 07:00 - 13.00</li><li>pendaftaran : Rp. 100.000</li><li>SPP/bulan : Rp. 400.000</li></ul>', '2021-11-02 21:17:36', '2021-11-02 21:17:37'),
	(2, 'paket bulanan 2', '<ul><li>(senin - sabtu) pukul 07:00 - 13.00</li><li>pendaftaran : Rp. 100.000</li><li>SPP/bulan : Rp. 400.000</li></ul>', NULL, NULL),
	(3, 'paket setengah hari/half day/sepulang sekolah', '<ul><li>(senin - sabtu) pukul 07:00 - 13.00</li><li>pendaftaran : Rp. 100.000</li><li>SPP/bulan : Rp. 400.000</li></ul>', NULL, NULL);
/*!40000 ALTER TABLE `paket_tpa` ENABLE KEYS */;

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

-- Dumping structure for table db_paud.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pendaftaran` enum('tk','kb','tpa') NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `anak_ke` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jumlah_saudara` varchar(50) DEFAULT NULL,
  `status_dalam_keluarga` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `alamat` text,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `status_ayah` enum('kandung','tiri','angkat','wali') DEFAULT NULL,
  `tempat_lahir_ayah` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ayah` varchar(50) DEFAULT NULL,
  `agama_ayah` varchar(50) DEFAULT NULL,
  `kewarganegaraan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(50) DEFAULT NULL,
  `no_hp_ayah` varchar(50) DEFAULT NULL,
  `gaji_perbulan_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `status_ibu` enum('kandung','tiri','angkat','wali') DEFAULT NULL,
  `tempat_lahir_ibu` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ibu` varchar(50) DEFAULT NULL,
  `agama_ibu` varchar(50) DEFAULT NULL,
  `kewarganegaraan_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(50) DEFAULT NULL,
  `no_hp_ibu` varchar(50) DEFAULT NULL,
  `gaji_perbulan_ibu` varchar(50) DEFAULT NULL,
  `jenis_tk` varchar(50) DEFAULT NULL,
  `paket_tpa_id` int(11) DEFAULT NULL,
  `status_pendaftaran` enum('diterima','ditolak') DEFAULT NULL,
  `kode_pendaftaran` varchar(255) NOT NULL,
  `file_kk` varchar(255) DEFAULT NULL,
  `file_akte` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_pendaftaran` (`kode_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.pendaftaran: ~65 rows (approximately)
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` (`id`, `jenis_pendaftaran`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `anak_ke`, `jenis_kelamin`, `agama`, `jumlah_saudara`, `status_dalam_keluarga`, `kewarganegaraan`, `alamat`, `nama_ayah`, `status_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `agama_ayah`, `kewarganegaraan_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `alamat_ayah`, `no_hp_ayah`, `gaji_perbulan_ayah`, `nama_ibu`, `status_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `agama_ibu`, `kewarganegaraan_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `alamat_ibu`, `no_hp_ibu`, `gaji_perbulan_ibu`, `jenis_tk`, `paket_tpa_id`, `status_pendaftaran`, `kode_pendaftaran`, `file_kk`, `file_akte`, `created_at`, `updated_at`) VALUES
	(1, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'KB-1-120920', NULL, NULL, '2021-10-28 19:03:53', '2021-10-28 19:03:53'),
	(2, 'tk', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'tk-1-281021', NULL, NULL, '2021-10-28 19:37:39', '2021-10-28 19:37:39'),
	(5, 'tk', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'tk-3-281021', NULL, NULL, '2021-10-28 19:39:15', '2021-10-28 19:39:15'),
	(6, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-6-281021', NULL, NULL, '2021-10-28 19:39:18', '2021-10-28 19:39:18'),
	(7, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-7-281021', NULL, NULL, '2021-10-28 19:39:25', '2021-10-28 19:39:25'),
	(8, 'tk', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'tk-8-281021', NULL, NULL, '2021-10-28 19:39:31', '2021-10-28 19:39:31'),
	(11, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-9-281021', NULL, NULL, '2021-10-28 19:47:07', '2021-10-28 19:47:07'),
	(15, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-12-281021', NULL, NULL, '2021-10-28 19:47:40', '2021-10-28 19:47:40'),
	(16, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-16-281021', NULL, NULL, '2021-10-28 22:57:36', '2021-10-28 22:57:36'),
	(17, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-17-281021', NULL, NULL, '2021-10-28 22:57:41', '2021-10-28 22:57:41'),
	(18, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-18-281021', NULL, NULL, '2021-10-28 22:58:07', '2021-10-28 22:58:07'),
	(19, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-19-281021', NULL, NULL, '2021-10-28 22:58:43', '2021-10-28 22:58:43'),
	(20, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-20-281021', NULL, NULL, '2021-10-28 22:58:51', '2021-10-28 22:58:51'),
	(21, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-21-281021', NULL, NULL, '2021-10-28 22:59:13', '2021-10-28 22:59:13'),
	(22, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-22-281021', NULL, NULL, '2021-10-28 23:01:45', '2021-10-28 23:01:45'),
	(23, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-23-281021', NULL, NULL, '2021-10-28 23:03:32', '2021-10-28 23:03:32'),
	(24, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-24-281021', NULL, NULL, '2021-10-28 23:17:04', '2021-10-28 23:17:04'),
	(25, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-25-281021', NULL, NULL, '2021-10-28 23:20:10', '2021-10-28 23:20:10'),
	(26, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-26-281021', NULL, NULL, '2021-10-28 23:20:19', '2021-10-28 23:20:19'),
	(27, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-27-281021', NULL, NULL, '2021-10-28 23:21:31', '2021-10-28 23:21:31'),
	(28, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-28-281021', NULL, NULL, '2021-10-28 23:23:05', '2021-10-28 23:23:05'),
	(29, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-29-281021', NULL, NULL, '2021-10-28 23:24:59', '2021-10-28 23:24:59'),
	(30, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-30-281021', NULL, NULL, '2021-10-28 23:25:10', '2021-10-28 23:25:10'),
	(31, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-31-281021', NULL, NULL, '2021-10-28 23:25:16', '2021-10-28 23:25:16'),
	(32, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-32-281021', NULL, NULL, '2021-10-28 23:31:13', '2021-10-28 23:31:13'),
	(33, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-33-281021', NULL, NULL, '2021-10-28 23:31:23', '2021-10-28 23:31:23'),
	(34, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-34-281021', NULL, NULL, '2021-10-28 23:32:35', '2021-10-28 23:32:35'),
	(35, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-35-281021', NULL, NULL, '2021-10-28 23:33:08', '2021-10-28 23:33:08'),
	(36, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-36-281021', NULL, NULL, '2021-10-28 23:35:08', '2021-10-28 23:35:08'),
	(37, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-37-281021', NULL, NULL, '2021-10-28 23:35:24', '2021-10-28 23:35:24'),
	(38, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-38-281021', NULL, NULL, '2021-10-28 23:36:20', '2021-10-28 23:36:20'),
	(39, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-39-281021', NULL, NULL, '2021-10-28 23:37:05', '2021-10-28 23:37:05'),
	(40, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-40-281021', NULL, NULL, '2021-10-28 23:42:21', '2021-10-28 23:42:21'),
	(41, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-41-281021', NULL, NULL, '2021-10-28 23:43:01', '2021-10-28 23:43:01'),
	(42, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-42-281021', NULL, NULL, '2021-10-28 23:44:10', '2021-10-28 23:44:10'),
	(43, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-43-281021', NULL, NULL, '2021-10-28 23:44:48', '2021-10-28 23:44:48'),
	(44, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-44-281021', NULL, NULL, '2021-10-28 23:45:01', '2021-10-28 23:45:01'),
	(45, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-45-281021', NULL, NULL, '2021-10-28 23:45:40', '2021-10-28 23:45:40'),
	(46, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-46-281021', NULL, NULL, '2021-10-28 23:47:55', '2021-10-28 23:47:55'),
	(47, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-47-311021', NULL, NULL, '2021-10-31 07:45:23', '2021-10-31 07:45:23'),
	(48, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-48-011121', NULL, NULL, '2021-11-01 13:08:26', '2021-11-01 13:08:26'),
	(49, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', 'Pilih Jenis TK sesuai umur anak', NULL, NULL, 'kb-49-031121', NULL, NULL, '2021-11-03 15:43:45', '2021-11-03 15:43:45'),
	(50, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', 'Pilih Jenis TK sesuai umur anak', NULL, NULL, 'kb-50-031121', NULL, NULL, '2021-11-03 15:44:08', '2021-11-03 15:44:08'),
	(51, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', 'Pilih Jenis TK sesuai umur anak', NULL, NULL, 'kb-51-031121', NULL, NULL, '2021-11-03 15:46:11', '2021-11-03 15:46:11'),
	(52, 'tk', 'wqd', 'dqwdqwd', 'wqdqwd', '2019-12-31', '2', 'P', 'islam', '23', 'wqdw', 'dwqd', 'wqdwqd', 'wqdqw', 'wali', 'sqws', NULL, 'islam', 'wdwq', 'dwqdwq', 'Harum exercitationem doloremque asperiores.', NULL, '089624873807', 'Possimus et enim ipsam voluptatem ut.', 'Itaque ma', 'tiri', 'kdmwqkdmkqwd', NULL, 'hindu', 'Indonesia', 'qdqwd', 'lmlwdmqldmlqwmdlwqd', 'muara bulian batanghari', '089624873807', '08038308203', 'A', NULL, NULL, 'tk-52-031121', NULL, NULL, '2021-11-03 15:51:18', '2021-11-03 15:51:18'),
	(53, 'tk', 'wqd', 'dqwdqwd', 'wqdqwd', '2019-12-31', '2', 'P', 'islam', '23', 'wqdw', 'dwqd', 'wqdwqd', 'wqdqw', 'wali', 'sqws', NULL, 'islam', 'wdwq', 'dwqdwq', 'Harum exercitationem doloremque asperiores.', NULL, '089624873807', 'Possimus et enim ipsam voluptatem ut.', 'Itaque ma', 'tiri', 'kdmwqkdmkqwd', NULL, 'hindu', 'Indonesia', 'qdqwd', 'lmlwdmqldmlqwmdlwqd', 'muara bulian batanghari', '089624873807', '08038308203', 'B', NULL, NULL, 'tk-53-031121', NULL, NULL, '2021-11-03 15:52:08', '2021-11-03 15:52:08'),
	(54, 'tk', 'wqd', 'dqwdqwd', 'wqdqwd', '2019-12-31', '2', 'P', 'islam', '23', 'wqdw', 'dwqd', 'wqdwqd', 'wqdqw', 'wali', 'sqws', NULL, 'islam', 'wdwq', 'dwqdwq', 'Harum exercitationem doloremque asperiores.', NULL, '089624873807', 'Possimus et enim ipsam voluptatem ut.', 'Itaque ma', 'tiri', 'kdmwqkdmkqwd', NULL, 'hindu', 'Indonesia', 'qdqwd', 'lmlwdmqldmlqwmdlwqd', 'muara bulian batanghari', '089624873807', '08038308203', 'A', NULL, NULL, 'tk-54-031121', NULL, NULL, '2021-11-03 15:52:58', '2021-11-03 15:52:58'),
	(55, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', 'A', NULL, NULL, 'kb-55-031121', NULL, NULL, '2021-11-03 15:53:24', '2021-11-03 15:53:24'),
	(56, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-56-031121', NULL, NULL, '2021-11-03 15:54:24', '2021-11-03 15:54:24'),
	(57, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, NULL, NULL, 'tpa-57-031121', NULL, NULL, '2021-11-03 16:02:35', '2021-11-03 16:02:35'),
	(58, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, NULL, NULL, 'tpa-58-031121', NULL, NULL, '2021-11-03 16:03:30', '2021-11-03 16:03:30'),
	(59, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, NULL, NULL, 'tpa-59-031121', NULL, NULL, '2021-11-03 16:03:57', '2021-11-03 16:03:57'),
	(60, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, NULL, NULL, 'tpa-60-031121', NULL, NULL, '2021-11-03 16:04:35', '2021-11-03 16:04:35'),
	(61, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, 1, NULL, 'tpa-61-031121', NULL, NULL, '2021-11-03 16:06:17', '2021-11-03 16:06:17'),
	(62, 'tpa', 'wdqd', 'dqwdqwd', 'Surabaya', '0333-03-31', '11', 'L', 'islam', '12', '123', 'Indonesia', 'muara bulian batanghari', 'wqdqw', 'wali', 'qwdkmqwkdmkq', '0003-03-31', 'islam', 'dqwqd', 'wqdqwd', 'wqdwqd', NULL, '123213', '23213123', 'lmdlwqmldm', 'tiri', 'dwqdwqd', '0002-02-22', 'islam', 'Indonesia', 'mldwmqldmlq', '21e12dd', 'muara bulian batanghari', '123213213', '12321323', NULL, 1, NULL, 'tpa-62-031121', NULL, NULL, '2021-11-03 16:06:39', '2021-11-03 16:06:39'),
	(63, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-63-031121', NULL, NULL, '2021-11-03 16:14:59', '2021-11-03 16:14:59'),
	(64, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-64-031121', NULL, NULL, '2021-11-03 16:16:12', '2021-11-03 16:16:12'),
	(65, 'kb', 'wdqwdqwd', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-65-031121', NULL, NULL, '2021-11-03 16:16:36', '2021-11-03 16:16:36'),
	(66, 'kb', 'wqdwqdwq', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-66-031121', NULL, NULL, '2021-11-03 16:17:12', '2021-11-03 16:17:12'),
	(67, 'kb', 'ed', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-67-031121', NULL, NULL, '2021-11-03 16:17:39', '2021-11-03 16:17:39'),
	(68, 'kb', 'dwqdwqd', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-68-031121', NULL, NULL, '2021-11-03 16:18:24', '2021-11-03 16:18:24'),
	(69, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-69-031121', NULL, NULL, '2021-11-03 16:20:33', '2021-11-03 16:20:33'),
	(70, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-70-031121', NULL, NULL, '2021-11-03 16:23:08', '2021-11-03 16:23:08'),
	(71, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-71-031121', NULL, NULL, '2021-11-03 16:24:24', '2021-11-03 16:24:24'),
	(72, 'kb', NULL, 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-72-031121', NULL, NULL, '2021-11-03 16:24:32', '2021-11-03 16:24:32'),
	(73, 'kb', NULL, NULL, 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-73-031121', NULL, NULL, '2021-11-03 16:24:42', '2021-11-03 16:24:42'),
	(74, 'kb', 'lian mafutra', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-74-031121', NULL, NULL, '2021-11-03 16:27:33', '2021-11-03 16:27:33'),
	(75, 'kb', 'wqs', 'ade', 'ddwqdwqdwqd', '0023-02-23', '1', 'P', 'katolik', '23', 'dqwdqwd', 'Indonesia', 'Jl. Golf II No.49, RT.12, Pematang Sulur, Kec. Telanaipura, Kota Jambi, Jambi 36124', 'wqdwqd', 'angkat', '1dqwdwqd', '0112-12-12', 'islam', 'dwqd', 'dwqd', 'wqdwq', NULL, '21321321323', '21212', 'dwqdwq', 'wali', 'wqdwqd', '0012-12-12', 'katolik', 'wqdwqdwqd', 'wqdwqd', 'qwdwqd', 'qwdwqd', 'qwdqwd', 'wqdwqdwqdq', NULL, NULL, NULL, 'kb-75-031121', NULL, NULL, '2021-11-03 16:27:46', '2021-11-03 16:27:46');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_paud.sliders: ~3 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `judul`, `text1`, `text2`, `text3`, `poster`, `created_at`, `updated_at`) VALUES
	(1, 'slider 1', 'Selamat datang di', 'Website Yayasan Pendidikan Meccazia Junior', 'Taman Penitipan anak junior', '617970413e8f7-1635348545.jpg', '2021-10-13 22:29:22', '2021-10-27 15:29:05');
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
	(2, 'superadmin', 'admin', 'admin@admin.com', NULL, '$2y$10$52pCxBjEAJXnEIHPNUcDdePPcV93Q5qzIkfYRPao2RAdSBOXTaGne', NULL, '2021-10-09 10:01:06', '2021-10-28 18:43:27', '2021-10-28 18:43:27', '127.0.0.1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
