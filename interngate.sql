-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2025 at 09:23 AM
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
-- Database: `interngate`
--

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'web-development', NULL, NULL),
(2, 'Mobile Development', 'mobile-development', NULL, NULL),
(3, 'Data Science', 'data-science', NULL, NULL),
(4, 'Machine Learning', 'machine-learning', NULL, NULL),
(5, 'UI/UX Design', 'ui-ux-design', NULL, NULL),
(6, 'Cyber Security', 'cyber-security', NULL, NULL),
(7, 'Game Development', 'game-development', NULL, NULL);

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
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `provinsi_domisili` varchar(255) DEFAULT NULL,
  `kabupaten_domisili` varchar(255) DEFAULT NULL,
  `kecamatan_domisili` varchar(255) DEFAULT NULL,
  `desa_domisili` varchar(255) DEFAULT NULL,
  `alamat_domisili` varchar(255) DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `jurusan`, `universitas`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `provinsi_domisili`, `kabupaten_domisili`, `kecamatan_domisili`, `desa_domisili`, `alamat_domisili`, `foto_profil`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'F1E123060', 'Defry Yandy', 'Sistem Informasi', 'Universitas Jambi', 'Laki-laki', 'Bogor', '2003-12-03', NULL, NULL, 'Kab. Muaro Jambi', NULL, 'Kel. Muaro Jambi', 'Jl. Muaro Jambi', 'foto_mahasiswa/GnFymP4LcfQ7WOaVgmQC59M5x2SYSki8axPbXyIw.jpg', 1, '2025-06-17 19:03:40', '2025-06-19 07:22:22'),
(2, 'F1E123061', 'Damara Rafiandriza', 'Sistem Informasi', 'Universitas Jambi', 'Laki-laki', 'Bogor', '2003-12-03', '081234567891', 'Jambi', 'Kab. Muaro Jambi', 'Kec. Muaro Jambi', 'Kel. Muaro Jambi', 'Jl. Muaro Jambi', NULL, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(3, 'F1E123062', 'Melani Fitri', 'Sistem Informasi', 'Universitas Jambi', 'Perempuan', 'Bogor', '2003-12-03', '081234567892', 'Jambi', 'Kab. Muaro Jambi', 'Kec. Muaro Jambi', 'Kel. Muaro Jambi', 'Jl. Muaro Jambi', NULL, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(4, 'F1E123063', 'Taufiqurahaman', 'Sistem Informasi', 'Universitas Jambi', 'Laki-laki', 'Bogor', '2003-12-03', '081234567893', 'Jambi', 'Kab. Muaro Jambi', 'Kec. Muaro Jambi', 'Kel. Muaro Jambi', 'Jl. Muaro Jambi', NULL, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(5, 'F1E123014', 'MonoZikk', 'Sistem Informasi', 'Universitas Jambi', 'Laki-laki', 'Bogor', '2003-12-03', '081234567894', 'Jambi', 'Kab. Muaro Jambi', 'Kec. Muaro Jambi', 'Kel. Muaro Jambi', 'Jl. Muaro Jambi', NULL, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40');

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
(4, '2025_06_09_065832_create_mahasiswas_table', 1),
(5, '2025_06_09_070046_create_mitras_table', 1),
(6, '2025_06_14_060841_create_categories_table', 1),
(7, '2025_06_14_073001_create_program_magangs_table', 1),
(8, '2025_06_14_130703_create_pendaftarans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitras`
--

CREATE TABLE `mitras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `logo_perusahaan` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitras`
--

INSERT INTO `mitras` (`id`, `nama_perusahaan`, `alamat_perusahaan`, `deskripsi`, `logo_perusahaan`, `banner`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PT. ID Star Technology', 'Jl. Muaro Jambi No 34', 'PT. ID Star Technology adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi.', 'logo_perusahaan/TsQqKFulJx9aSKYRJdKQ8LGwmg4isIGGlGxNc2Xn.png', 'banner/3KtgVUQjAme750PDrWrK4wJxhUXnf2A3DvM4gZ6w.png', 6, '2025-06-17 19:03:40', '2025-06-19 07:33:35'),
(2, 'PT. Vanith Nusantara', 'Jl. Telanaipura', 'PT. Vanith Nusantara adalah perusahaan yang bergerak di bidang Game Development.', NULL, NULL, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40');

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
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_cv` varchar(255) NOT NULL,
  `transkrip_nilai` varchar(255) NOT NULL,
  `status` enum('Diterima','Ditolak','Menunggu','Berlangsung','Selesai') NOT NULL DEFAULT 'Menunggu',
  `catatan_mitra` varchar(255) DEFAULT NULL,
  `id_mahasiswa` bigint(20) UNSIGNED NOT NULL,
  `id_program_magang` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `file_cv`, `transkrip_nilai`, `status`, `catatan_mitra`, `id_mahasiswa`, `id_program_magang`, `created_at`, `updated_at`) VALUES
(1, 'file_cv.pdf', 'transkrip_nilai.pdf', 'Menunggu', NULL, 2, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(3, 'file_cv.pdf', 'transkrip_nilai.pdf', 'Ditolak', 'Catatan Mitra', 3, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(4, 'file_cv.pdf', 'transkrip_nilai.pdf', 'Berlangsung', NULL, 4, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(5, 'file_cv.pdf', 'transkrip_nilai.pdf', 'Selesai', NULL, 5, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `program_magangs`
--

CREATE TABLE `program_magangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kuota` int(11) NOT NULL,
  `kualifikasi` text NOT NULL,
  `batas_pendaftaran` date NOT NULL,
  `awal_magang` date NOT NULL,
  `akhir_magang` date NOT NULL,
  `status` enum('Buka','Tutup') NOT NULL,
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_magangs`
--

INSERT INTO `program_magangs` (`id`, `judul`, `slug`, `deskripsi`, `gambar`, `kuota`, `kualifikasi`, `batas_pendaftaran`, `awal_magang`, `akhir_magang`, `status`, `id_mitra`, `id_category`, `created_at`, `updated_at`) VALUES
(1, 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara', 'backend-developer-cv-kreasi-digital-nusantara-1', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-1.jpg', 15, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-10', '2025-08-18', '2025-11-07', 'Buka', 2, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(3, 'Program Magang Quality Assurance di PT. Teknologi Maju Bersama', 'quality-assurance-pt-teknologi-maju-bersama-3', 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/quality-assurance-pt-teknologi-maju-bersama-3.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Quality Assurance\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-20', '2025-07-31', '2025-10-22', 'Tutup', 1, 4, '2025-06-17 19:03:40', '2025-06-19 07:32:30'),
(4, 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara', 'fullstack-developer-cv-kreasi-digital-nusantara-4', 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-4.jpg', 5, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Fullstack Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-31', '2025-08-14', '2025-11-05', 'Buka', 2, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(5, 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara', 'frontend-developer-cv-kreasi-digital-nusantara-5', 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-5.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Frontend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-04', '2025-07-14', '2025-09-25', 'Buka', 2, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(6, 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara', 'backend-developer-cv-kreasi-digital-nusantara-6', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-6.jpg', 9, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-26', '2025-08-07', '2025-10-26', 'Tutup', 2, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(7, 'Program Magang Data Analyst di PT. Teknologi Maju Bersama', 'data-analyst-pt-teknologi-maju-bersama-7', 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/data-analyst-pt-teknologi-maju-bersama-7.jpg', 6, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Data Analyst\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-02', '2025-08-10', '2025-10-31', 'Buka', 1, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(8, 'Program Magang Human Resources di PT. Teknologi Maju Bersama', 'human-resources-pt-teknologi-maju-bersama-8', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-pt-teknologi-maju-bersama-8.jpg', 5, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-14', '2025-07-25', '2025-10-17', 'Buka', 1, 6, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(9, 'Program Magang Data Analyst di CV. Kreasi Digital Nusantara', 'data-analyst-cv-kreasi-digital-nusantara-9', 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/data-analyst-cv-kreasi-digital-nusantara-9.jpg', 13, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Data Analyst\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-14', '2025-08-28', '2025-11-03', 'Tutup', 2, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(10, 'Program Magang UI/UX Designer di CV. Kreasi Digital Nusantara', 'uiux-designer-cv-kreasi-digital-nusantara-10', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-cv-kreasi-digital-nusantara-10.jpg', 14, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-13', '2025-07-24', '2025-10-04', 'Buka', 2, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(11, 'Program Magang Human Resources di PT. Teknologi Maju Bersama', 'human-resources-pt-teknologi-maju-bersama-11', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-pt-teknologi-maju-bersama-11.jpg', 15, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-27', '2025-08-08', '2025-10-26', 'Buka', 1, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(12, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-12', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-12.jpg', 8, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-02', '2025-07-11', '2025-09-26', 'Buka', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(13, 'Program Magang Digital Marketing Specialist di CV. Kreasi Digital Nusantara', 'digital-marketing-specialist-cv-kreasi-digital-nusantara-13', 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/digital-marketing-specialist-cv-kreasi-digital-nusantara-13.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Digital Marketing Specialist\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-12', '2025-07-26', '2025-10-22', 'Tutup', 2, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(14, 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama', 'mobile-app-developer-pt-teknologi-maju-bersama-14', 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-14.jpg', 5, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Mobile App Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-20', '2025-08-01', '2025-10-16', 'Buka', 1, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(15, 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara', 'backend-developer-cv-kreasi-digital-nusantara-15', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-15.jpg', 15, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-21', '2025-08-02', '2025-10-16', 'Tutup', 2, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(16, 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara', 'frontend-developer-cv-kreasi-digital-nusantara-16', 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-16.jpg', 4, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Frontend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-09', '2025-08-21', '2025-11-06', 'Tutup', 2, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(17, 'Program Magang Content Writer di CV. Kreasi Digital Nusantara', 'content-writer-cv-kreasi-digital-nusantara-17', 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/content-writer-cv-kreasi-digital-nusantara-17.jpg', 8, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Content Writer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-26', '2025-08-04', '2025-10-12', 'Buka', 2, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(18, 'Program Magang Human Resources di PT. Teknologi Maju Bersama', 'human-resources-pt-teknologi-maju-bersama-18', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-pt-teknologi-maju-bersama-18.jpg', 13, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-07', '2025-08-14', '2025-10-13', 'Buka', 1, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(19, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-19', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-19.jpg', 9, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-13', '2025-07-24', '2025-09-22', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(20, 'Program Magang Data Analyst di CV. Kreasi Digital Nusantara', 'data-analyst-cv-kreasi-digital-nusantara-20', 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/data-analyst-cv-kreasi-digital-nusantara-20.jpg', 9, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Data Analyst\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-29', '2025-08-12', '2025-10-28', 'Buka', 2, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(21, 'Program Magang Human Resources di CV. Kreasi Digital Nusantara', 'human-resources-cv-kreasi-digital-nusantara-21', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-cv-kreasi-digital-nusantara-21.jpg', 14, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-18', '2025-07-28', '2025-10-05', 'Tutup', 2, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(22, 'Program Magang Content Writer di CV. Kreasi Digital Nusantara', 'content-writer-cv-kreasi-digital-nusantara-22', 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/content-writer-cv-kreasi-digital-nusantara-22.jpg', 7, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Content Writer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-24', '2025-07-31', '2025-10-03', 'Tutup', 2, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(23, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-23', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-23.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-26', '2025-08-08', '2025-10-14', 'Buka', 1, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(24, 'Program Magang Data Analyst di PT. Teknologi Maju Bersama', 'data-analyst-pt-teknologi-maju-bersama-24', 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/data-analyst-pt-teknologi-maju-bersama-24.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Data Analyst\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-11', '2025-07-24', '2025-10-14', 'Tutup', 1, 6, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(25, 'Program Magang Human Resources di PT. Teknologi Maju Bersama', 'human-resources-pt-teknologi-maju-bersama-25', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-pt-teknologi-maju-bersama-25.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-01', '2025-08-09', '2025-11-03', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(26, 'Program Magang Fullstack Developer di PT. Teknologi Maju Bersama', 'fullstack-developer-pt-teknologi-maju-bersama-26', 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/fullstack-developer-pt-teknologi-maju-bersama-26.jpg', 9, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Fullstack Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-08', '2025-08-18', '2025-10-17', 'Tutup', 1, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(27, 'Program Magang Backend Developer di PT. Teknologi Maju Bersama', 'backend-developer-pt-teknologi-maju-bersama-27', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-27.jpg', 4, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-14', '2025-08-28', '2025-10-31', 'Tutup', 1, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(28, 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama', 'mobile-app-developer-pt-teknologi-maju-bersama-28', 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-28.jpg', 4, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Mobile App Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-02', '2025-07-16', '2025-10-14', 'Buka', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(29, 'Program Magang Content Writer di PT. Teknologi Maju Bersama', 'content-writer-pt-teknologi-maju-bersama-29', 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/content-writer-pt-teknologi-maju-bersama-29.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Content Writer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-27', '2025-08-05', '2025-10-10', 'Tutup', 1, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(30, 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara', 'fullstack-developer-cv-kreasi-digital-nusantara-30', 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-30.jpg', 13, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Fullstack Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-13', '2025-08-27', '2025-11-02', 'Tutup', 2, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(31, 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara', 'frontend-developer-cv-kreasi-digital-nusantara-31', 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-31.jpg', 10, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Frontend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-06', '2025-07-20', '2025-09-20', 'Tutup', 2, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(32, 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara', 'fullstack-developer-cv-kreasi-digital-nusantara-32', 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-32.jpg', 6, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Fullstack Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-22', '2025-08-01', '2025-10-15', 'Tutup', 2, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(33, 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara', 'quality-assurance-cv-kreasi-digital-nusantara-33', 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-33.jpg', 9, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Quality Assurance\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-29', '2025-08-11', '2025-10-14', 'Tutup', 2, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(34, 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama', 'digital-marketing-specialist-pt-teknologi-maju-bersama-34', 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-34.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Digital Marketing Specialist\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-12', '2025-07-21', '2025-10-05', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(35, 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara', 'frontend-developer-cv-kreasi-digital-nusantara-35', 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-35.jpg', 5, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Frontend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-03', '2025-07-15', '2025-10-13', 'Tutup', 2, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(36, 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara', 'backend-developer-cv-kreasi-digital-nusantara-36', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-36.jpg', 15, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-06', '2025-08-20', '2025-11-03', 'Tutup', 2, 2, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(37, 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara', 'quality-assurance-cv-kreasi-digital-nusantara-37', 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-37.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Quality Assurance\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-22', '2025-08-04', '2025-10-04', 'Buka', 2, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(38, 'Program Magang Backend Developer di PT. Teknologi Maju Bersama', 'backend-developer-pt-teknologi-maju-bersama-38', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-38.jpg', 10, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-08', '2025-07-15', '2025-09-16', 'Buka', 1, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(39, 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama', 'digital-marketing-specialist-pt-teknologi-maju-bersama-39', 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-39.jpg', 3, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Digital Marketing Specialist\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-28', '2025-08-04', '2025-10-25', 'Buka', 1, 6, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(40, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-40', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-40.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-31', '2025-08-07', '2025-11-01', 'Tutup', 1, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(41, 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara', 'frontend-developer-cv-kreasi-digital-nusantara-41', 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-41.jpg', 10, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Frontend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-07', '2025-07-21', '2025-09-29', 'Buka', 2, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(42, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-42', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-42.jpg', 8, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-31', '2025-08-10', '2025-10-16', 'Tutup', 1, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(43, 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama', 'mobile-app-developer-pt-teknologi-maju-bersama-43', 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-43.jpg', 13, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Mobile App Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-12', '2025-08-24', '2025-11-16', 'Buka', 1, 1, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(44, 'Program Magang Human Resources di CV. Kreasi Digital Nusantara', 'human-resources-cv-kreasi-digital-nusantara-44', 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/human-resources-cv-kreasi-digital-nusantara-44.jpg', 4, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Human Resources\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-11', '2025-08-20', '2025-11-16', 'Tutup', 2, 7, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(45, 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama', 'uiux-designer-pt-teknologi-maju-bersama-45', 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-45.jpg', 8, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar UI/UX Designer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-15', '2025-07-26', '2025-10-06', 'Buka', 1, 4, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(46, 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama', 'digital-marketing-specialist-pt-teknologi-maju-bersama-46', 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-46.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Digital Marketing Specialist\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-08', '2025-08-20', '2025-10-24', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(47, 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara', 'quality-assurance-cv-kreasi-digital-nusantara-47', 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-47.jpg', 5, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Quality Assurance\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-11', '2025-07-22', '2025-09-29', 'Buka', 2, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(48, 'Program Magang Backend Developer di PT. Teknologi Maju Bersama', 'backend-developer-pt-teknologi-maju-bersama-48', 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-48.jpg', 13, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Backend Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-05', '2025-08-14', '2025-11-04', 'Buka', 1, 3, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(49, 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama', 'mobile-app-developer-pt-teknologi-maju-bersama-49', 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-49.jpg', 12, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Mobile App Developer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-07-09', '2025-07-19', '2025-10-11', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(50, 'Program Magang Content Writer di PT. Teknologi Maju Bersama', 'content-writer-pt-teknologi-maju-bersama-50', 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.', 'images/program-magang/content-writer-pt-teknologi-maju-bersama-50.jpg', 11, 'Mahasiswa/i aktif minimal semester 5\nJurusan terkait (Teknik Informatika, DKV, dll)\nMemahami dasar-dasar Content Writer\nMampu bekerja dalam tim dan memiliki inisiatif tinggi\nBersedia mengikuti program magang selama 3 bulan', '2025-08-15', '2025-08-25', '2025-11-20', 'Tutup', 1, 5, '2025-06-17 19:03:40', '2025-06-17 19:03:40'),
(51, 'mobile Development', 'cyber-security', 'testing1', 'program_banners/dlyHp5L0IuRg26xCnsweekaJL60CHSvxbABFTLWL.png', 20, 'testing1\r\ntesting2\r\ntesting3\r\ntesting4', '2025-06-20', '2025-06-21', '2025-08-29', 'Buka', 1, 2, '2025-06-19 07:29:48', '2025-06-19 07:31:09');

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
('geXR7optoT7WjTYMg1fuN5lCt6rI5Nc5hvbBXha2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGg0c3E1dWQ3dTFXVmlzV1ZkenY2S0t3MU9teEpSQTNvT2Y0UE9SNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb3dvbmdhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750212289),
('OSmEkGPMyBpmz88PRXTgmkvlK5swJ2I0lyproFls', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoienRiWlhZbm1LS3NEWUs1QTRlaWxmQWlFNFZTWjlNSGlDZmdDWTV4ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9taXRyYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7fQ==', 1750249727),
('RgYYqKG56M9wVr27IefO9TwOFF11wJL7R5FFT6ab', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHZCN3E0YjNLSTI1ZVBhdkpqUXo2OUY1ZGpHOGw3Y0VaaFl6UkI3RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb3dvbmdhbiI7fX0=', 1750343844);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('mahasiswa','mitra') NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'defry@gmail.com', NULL, '$2y$12$UOfMRDi.I6E3QjKzCc.FGuKpQGKEmxXfBk9AKljGLnFkHTBAtYpl2', 'mahasiswa', NULL, NULL, NULL),
(2, 'damara@gmail.com', NULL, '$2y$12$1SeSJ9E78sJ5PQxuEXWs7evOqL5nKjNXK8kZOQe3SB3O1SNU4Yreu', 'mahasiswa', NULL, NULL, NULL),
(3, 'melani@gmail.com', NULL, '$2y$12$aYF0NgRLhAf44g2nqng1GODGIaDPKcq.Qg3rq3A9muS8eyPuwT3jy', 'mahasiswa', NULL, NULL, NULL),
(4, 'taufiq@gmail.com', NULL, '$2y$12$gXCILJSdfvIglpu.SLPuve2wY4ttcBwEetW4ZCBOVTaurMRYEwroS', 'mahasiswa', NULL, NULL, NULL),
(5, 'zikra@gmail.com', NULL, '$2y$12$yMFvtjjbHstHlH5LPtOoB.tLxyPojatKtdIFbYCuwScSFrYzXucP.', 'mahasiswa', NULL, NULL, NULL),
(6, 'idstar@gmail.com', NULL, '$2y$12$i68b/PMQ10XIaTrkFFpK0OYPdOo8Gb5MX2achI9qXHvwhxOlQ6fvS', 'mitra', NULL, NULL, NULL),
(7, 'vanith@gmail.com', NULL, '$2y$12$onxkvBtPtCElfzJaLRX5Getmf9TTa46Al69OAzQDOs82I76MMxmsy', 'mitra', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswas_no_hp_unique` (`no_hp`),
  ADD KEY `mahasiswas_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mitras_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_id_mahasiswa_foreign` (`id_mahasiswa`),
  ADD KEY `pendaftarans_id_program_magang_foreign` (`id_program_magang`);

--
-- Indexes for table `program_magangs`
--
ALTER TABLE `program_magangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_magangs_slug_unique` (`slug`),
  ADD KEY `program_magangs_id_mitra_foreign` (`id_mitra`),
  ADD KEY `program_magangs_id_category_foreign` (`id_category`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program_magangs`
--
ALTER TABLE `program_magangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD CONSTRAINT `mahasiswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mitras`
--
ALTER TABLE `mitras`
  ADD CONSTRAINT `mitras_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_id_program_magang_foreign` FOREIGN KEY (`id_program_magang`) REFERENCES `program_magangs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `program_magangs`
--
ALTER TABLE `program_magangs`
  ADD CONSTRAINT `program_magangs_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `program_magangs_id_mitra_foreign` FOREIGN KEY (`id_mitra`) REFERENCES `mitras` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
