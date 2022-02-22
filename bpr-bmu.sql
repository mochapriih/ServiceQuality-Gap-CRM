-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 09:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpr-bmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_kuesioners`
--

CREATE TABLE `jawaban_kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan_kuesioners_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `persepsi` int(11) NOT NULL,
  `ekspektasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_kuesioners`
--

INSERT INTO `jawaban_kuesioners` (`id`, `pertanyaan_kuesioners_id`, `users_id`, `persepsi`, `ekspektasi`, `created_at`, `updated_at`) VALUES
(121, 1, 2, 5, 5, '2022-02-22 01:35:42', '2022-02-22 01:35:42'),
(122, 2, 2, 5, 5, '2022-02-22 01:35:42', '2022-02-22 01:35:42'),
(123, 3, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(124, 4, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(125, 5, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(126, 6, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(127, 7, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(128, 8, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(129, 9, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(130, 10, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(131, 11, 2, 2, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(132, 12, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(133, 13, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(134, 14, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(135, 15, 2, 5, 5, '2022-02-22 01:35:43', '2022-02-22 01:35:43'),
(136, 16, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(137, 17, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(138, 18, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(139, 19, 2, 2, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(140, 20, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(141, 21, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(142, 22, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(143, 23, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(144, 24, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(145, 25, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(146, 26, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(147, 27, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(148, 28, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(149, 29, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(150, 30, 2, 5, 5, '2022-02-22 01:36:00', '2022-02-22 01:36:00'),
(151, 31, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(152, 32, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(153, 33, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(154, 34, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(155, 35, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(156, 36, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(157, 37, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(158, 38, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(159, 39, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(160, 40, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(161, 41, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(162, 42, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(163, 43, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(164, 44, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10'),
(165, 45, 2, 5, 5, '2022-02-22 01:36:10', '2022-02-22 01:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `name`, `ktp`, `telepon`, `jenis_kelamin`, `email`, `alamat`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Suhendar', '3217011212880011', '0853342666442', 'PRIA', 'suhendar@bprbmu.co.id', 'Jl Raya Lembang KM 16 koma 2 No 34 RT 003 RW 004 Kel Gudang Kahuripan Kec Lembang Kab Bandung Barat', 'ADMIN KREDIT', '2022-02-17 06:11:20', '2022-02-17 06:11:20'),
(3, 'Taufik Nugraha', '3217010102702233', '081234779987', 'PRIA', 'nugrahataufik@bprbmu.co.id', 'Sarijadi Blok 09 No 92 RT004 RW004 Kel Sarijadi Kec Sukasari Kota Bandung', 'KEPALA BAGIAN OPERASIONAL', '2022-02-17 06:12:29', '2022-02-17 06:12:29'),
(4, 'Fredi Rianto', '3217030907830007', '0851424472999', 'PRIA', 'fredirianto@bprbmu.co.id', 'KP BARUNAGRI RT002 RW003, SUKAJAYA, LEMBANG', 'SURVEYOR', '2022-02-17 06:14:10', '2022-02-17 06:14:19'),
(5, 'Rahmat', '3217025510760007', '0815666223232', 'PRIA', 'rahmat@bprbmu.co.id', 'JL SADIREJA NO 360 41 RT006 RW006, SUKAMAJU, CIBEU', 'SECURITY', '2022-02-17 06:15:00', '2022-02-17 06:15:00'),
(6, 'Maman Sulaeman', '3273205211850004', '089455522622', 'PRIA', 'mamansulaeman@bprbmu.co.id', 'GG MINATU RT001 RW001, LEMBANG, LEMBANG', 'SURVEYOR', '2022-02-17 06:16:10', '2022-02-17 06:16:10'),
(7, 'Hanung Herning', '3273015709790002', '087828277766', 'PRIA', 'hanungher@bprbmu.co.id', 'Komp The Green City View Blok F No. 5 RT 07/13 Kel Jatihandap Kec Mandalajati Bandung', 'ANALIS', '2022-02-17 06:16:59', '2022-02-17 06:16:59'),
(8, 'Yogi Nova', '3204101711620003', '097666534266', 'PRIA', 'yoginova@bpr.bmu.co.id', 'JL SUKAGALIH GG SUKAHATI I RT001 RW001, SUKABUNGAH', 'KOLEKTOR', '2022-02-17 06:18:20', '2022-02-17 06:18:20'),
(9, 'Ardan Yusup', '3273162802950004', '0815666343333', 'PRIA', 'ardanyusup@bprbmu.co.id', 'KP BALAKASAP RT 006 RW003, PATARUMAN, CIHAMPELAS', 'SECURITY', '2022-02-17 06:19:15', '2022-02-17 06:19:15'),
(10, 'Edward', '3273081205830001', '0858222777255', 'PRIA', 'edward@bprbmu.co.id', 'KP PANGRAGAJIAN RT 02 RW 09, KAYUAMBON, LEMBANG', 'MARKETING', '2022-02-17 06:20:08', '2022-02-17 06:27:09'),
(11, 'Dodi Koswara', '3204061210900006', '088922127777', 'PRIA', 'dedikoswara@bprbmu.co.id', 'GG H IDRUS DALAM NO 12 197 D RT010 RW001, BABAKAN', 'KOLEKTOR', '2022-02-17 06:22:02', '2022-02-17 06:22:02'),
(12, 'Andry Tanuwijaya', '3273010604810001', '089727555544', 'PRIA', 'andrytan@bprbmu.co.id', 'JL KANCRA DALAM I NO 45 RT004 RW008, BURANGRANG, L', 'KOLEKTOR', '2022-02-17 06:22:51', '2022-02-17 06:22:51'),
(13, 'Fauzi Chaniago', '3273014202760001', '083828777666', 'PRIA', 'fauzichaniago@bprbmu.co.id', 'REUNGASCONDONG RT007 RW011, ANDIR, BALEENDAH', 'KOLEKTOR', '2022-02-17 06:23:35', '2022-02-17 06:23:35'),
(14, 'Mumuh Sunaryo', '3217012704840013', '089719154443', 'PRIA', 'sunaryoumuh@bprbmu.co.id', 'PERUM BUKIT BERLIAN BLOK C NO 109 RT004 RW025, KER', 'DIREKTUR UTAMA', '2022-02-17 06:24:22', '2022-02-17 06:37:26'),
(15, 'Kurniawan Sunaryo', '3217012008992222', '0823231121333', 'PRIA', 'kurniawansunaryo@bprbmu.co.id', 'JL PASIR IMPUN RT002 RW011, KARANG PAMULANG, MANDA', 'KOLEKTOR', '2022-02-17 06:25:07', '2022-02-17 06:25:07'),
(16, 'Arif Rahman', '3217012008990033', '083254784778', 'PRIA', 'arifrahman@bprbmu.co.id', 'KP CISEUREUH RT001 RW005, SUMUR BANDUNG, CIPATAT', 'KOLEKTOR', '2022-02-17 06:27:59', '2022-02-17 06:27:59'),
(17, 'Ajat Sudrajat', '3217010809860015', '081222666544', 'PRIA', 'ajatsudrajat@bprbmu.co.id', 'JL SUKAPURA RT007 RW002 SUKAPURA, KIARACONDONG - BANDUNG, KOTA', 'KOLEKTOR', '2022-02-17 06:29:17', '2022-02-17 06:29:17'),
(18, 'Luki Muhrom', '3273011604820003', '081799890002', 'PRIA', 'lukimuhrom@bprbmu.co.id', 'KP TANJAKAN RT003 RW012, JATIHANDAP, MANDALAJATI', 'KOLEKTOR', '2022-02-17 06:30:07', '2022-02-17 06:30:07'),
(19, 'Ivan Gunawan', '3273124504820006', '085600898776', 'PRIA', 'ivangunawan@bprbmu.co.id', 'Jl Banteng Dlm No 17 RT002 RW008 Kel Turangga Kec Lengkong Kota Bandung', 'ANALIS', '2022-02-17 06:31:02', '2022-02-17 06:31:02'),
(20, 'Eka Ayu  Agustina', '3273055407650003', '089727666520', 'WANITA', 'ekaayu@bprbmu.co.id', 'LEMAH NEUNDEUT II RT006 RW008, CIKUTRA, CIBEUNYING', 'AKUNTING', '2022-02-17 06:32:06', '2022-02-17 06:35:45'),
(21, 'Ali Muhammad Ropi', '3217030907830022', '0896662623228', 'PRIA', 'muhammadali@bprbmu.co.id', 'KP HEGARMANAH RT002 RW017 LAGADAR, MARGAASIH - BANDUNG, KAB', 'IT', '2022-02-17 06:32:56', '2022-02-17 06:32:56'),
(22, 'Jeremi Gustav', '3217011510902266', '0814335656222', 'PRIA', 'jeremigustav@bprbmu.co.id', 'JL TAMAN RAHAYU 3 C2 NO 4 CIGONDEWAH HILIR, MARGAASIH - BANDUNG, KAB', 'CUSTOMER SERVICE', '2022-02-17 06:34:41', '2022-02-17 06:34:41'),
(23, 'Novia Nur Alifah', '3273010804940001', '08162322450099', 'WANITA', 'novianur@bprbmu.co.id', 'JL SUKAKARYA RT06 RW12 CICAHEUM, KIARACONDONG - BANDUNG, KOTA', 'ADMIN KREDIT', '2022-02-17 06:35:32', '2022-02-17 06:35:32'),
(24, 'Amelia', '3217030128932244', '081222424315', 'WANITA', 'amelia@bprbmu.co.id', 'JALAN TERUSAN BABAKAN JERUK I NO 7', 'MARKETING', '2022-02-17 06:38:56', '2022-02-17 06:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BELUM DI PROSES',
  `laporan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_12_13_093835_create_keluhans_table', 1),
(5, '2021_12_13_094033_create_pertanyaan_kuesioners_table', 1),
(6, '2021_12_13_094122_create_jawaban_kuesioners_table', 1),
(7, '2022_01_18_144812_create_karyawans_table', 1),
(8, '2022_02_17_035016_create_nasabahs_table', 1),
(9, '2022_02_17_080909_create_promos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nasabahs`
--

CREATE TABLE `nasabahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nasabahs`
--

INSERT INTO `nasabahs` (`id`, `rekening`, `ktp`, `telepon`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `nama_ibu`, `nama_pasangan`, `produk`, `saldo`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, '0130100747', '3277021712670010', '085956062850', 'Rasim', '1967-12-17', 'PRIA', 'karyawan swasta', 'Kp Sukanampa No 46 RT 002 RW 019 Kec Cimahi Tengah Kel Cigugur Tengah Kota Cimahi', 'Rasem', 'Purnani', 'KREDIT', '88000000', '2018-01-05', '2022-02-17 04:51:51', '2022-02-17 05:09:37'),
(2, '0130100752', '3273232510770003', '08112237081', 'Sudono', '1978-10-25', 'PRIA', 'PNS', 'Jl Saturnus Selatan 6 No 16 Margahayu Raya', 'Hj Sukhriayah', 'Dita Citra utami', 'KREDIT', '148500000', '2018-01-05', '2022-02-17 04:57:37', '2022-02-17 05:09:49'),
(3, '0130100756', '3217021201630004', '085220131021', 'UJANG CARMAYA', '1963-01-12', 'PRIA', 'Buruh', 'KP MANGLAYANG RT 003 RW 002 CIHANJUANG RAHAYU, PARONGPONG - BANDUNG BARAT, KAB., Kd.Pos 40559', 'SITI ROHMAH', 'IMAT', 'KREDIT', '45000000', '2018-01-10', '2022-02-17 05:00:47', '2022-02-17 05:09:58'),
(4, '0130100757', '3217010101740216', '081394604441', 'KOSIDIN', '1978-12-01', 'PRIA', 'Karyawan Swasta', 'Kp Pasirwangi RT003 RW011 Kel Gudang Kahuripan Kec Lembang Kab Bandung Barat', 'ENES', NULL, 'KREDIT', '45000000', '2018-12-05', '2022-02-17 05:04:23', '2022-02-17 05:08:41'),
(5, '0130100759', '3273070111610002', '082214141466', 'DEDI ROSDIMAN', '1961-11-18', 'PRIA', 'karyawan swasta', 'JL SUKAGALIH GG SUKABAKTI I RT008 RW003 SUKABUNGAH, SUKAJADI - BANDUNG, KOTA., Kd.Pos 40162', 'OOM OOM HALIMAH', 'LINA HALINAH', 'KREDIT', '105000000', '2018-11-13', '2022-02-17 05:08:17', '2022-02-17 05:08:17'),
(6, '0130100762', '3217011804560003', '085294871004', 'ENGKOS KOSASIH', '1978-10-04', 'PRIA', 'PNS', 'Kp Pondok RT 04 RW003 Kel Cikole Kec Lembang Kab Bandung Barat', 'OMAH', 'Empong Sumarsih', 'KREDIT', '20000000', '2018-05-04', '2022-02-17 05:13:41', '2022-02-17 05:16:45'),
(7, '0130100764', '3217030908730007', '087822680067', 'ASEP AGUS', '1973-08-09', 'PRIA', 'Karyawan Swasta', 'Kp Jambudipa RT004 RW003 Kel Jambudipa Kec Cisarua Kab Bandung Barat', 'SAODAH', NULL, 'KREDIT', '42000000', '2018-03-05', '2022-02-17 05:22:37', '2022-02-17 05:22:37'),
(8, '0130100766', '3273010911780006', '082315563096', 'AGUS BADRUZAMAN', '1978-11-09', 'PRIA', 'PNS', 'JL SARIENDAH BARU I RT004 RW006 SUKARASA, SUKASARI - BANDUNG, KOTA., Kd.Pos 40152', 'YAYAH M GOZALI', 'KOKOM KOMARIAH', 'KREDIT', '37000000', '2018-09-09', '2022-02-17 05:25:42', '2022-02-17 05:32:48'),
(9, '0130100768', '3217011105760001', '081321242205', 'DEDENG CAHYADI', '1976-05-11', 'PRIA', 'GURU', 'Kp Cibodas RT 003 001 Kel Cikahuripan Kec Lembang Kab Bandung Barat', 'euis', 'Wida Ningsih', 'KREDIT', '64800000', '2018-04-04', '2022-02-17 05:28:47', '2022-02-17 05:32:59'),
(10, '0130100769', '3217025510760007', '08122449292', 'DIAN ANI IRAWATI', '1976-10-25', 'WANITA', 'PNS', 'Kp Sukamaju RT003 RW005 Kel Cigugur Girang Kec Parongpong Kab Bandung Barat', 'Hj Enok Sumiati', NULL, 'KREDIT', '35000000', '2018-08-07', '2022-02-17 05:36:50', '2022-02-17 05:36:50'),
(11, '0130100771', '3217021608740005', '082316934993', 'AGUS JAJULI', '1976-05-06', 'PRIA', 'Karyawan Swasta', 'KP MANGLAYANG RT002 RW002 KEL CIHANJUANG RAHAYU CIHANJUANG RAHAYU, PARONGPONG - BANDUNG BARAT, KAB.,', 'OTIH', 'KOKOM KOMALA', 'KREDIT', '25900000', '2018-03-05', '2022-02-17 05:39:15', '2022-02-17 05:39:15'),
(12, '0130100772', '3273241906830002', '0812636232122', 'MUHAMAD RAMDANI YATULAAH', '1992-02-04', 'PRIA', 'Karyawan Swasta', 'JL PACUAN KUDA I NO 36 RT 001 RW 006 SUKAMISKIN, ARCAMANIK - BANDUNG, KOTA., Kd.Pos 40293', 'Cucum', 'Dinda Komala', 'KREDIT', '40000000', '2018-02-06', '2022-02-17 06:48:33', '2022-02-17 06:48:49'),
(13, '0130100773', '3217022712830004', '087825271067', 'ASEP BUDI SUPARMAN', '1984-06-20', 'PRIA', 'Karyawan Swasta', 'KP NIHMAT RT 003 RW 006 CIGUGUR GIRANG, PARONGPONG - BANDUNG BARAT, KAB., Kd.Pos 40553', 'ENDEN', 'DINIE GANTINA', 'KREDIT', '33000000', '2018-07-11', '2022-02-17 06:52:47', '2022-02-17 06:56:54'),
(14, '0130100775', '3217011603650001', '0876662343273', 'SOMA RUKMANA', '1993-07-07', 'PRIA', 'ASN', 'KP BARUNAGRI RT002 RW003', 'HJ EUIS KARTINI', 'ENTIN ROSTINI', 'KREDIT', '27000000', '2018-11-07', '2022-02-17 06:54:48', '2022-02-17 06:54:48'),
(15, '0130100776', '3217011510870005', '081625877990', 'HENDRIK IRAWAN', '1988-03-02', 'PRIA', 'Guru', 'JLMINATU NO 7 RT002 RW001 KEL LEMBANG KEC LEMBANG KAB BANDUNG', 'HERIJANI YANI', NULL, 'KREDIT', '15000000', '2018-02-23', '2022-02-17 06:56:39', '2022-02-17 06:56:39'),
(16, '0130100790', '3217020807530002', '081223637306', 'YAYA', '1953-07-08', 'PRIA', 'Karyawan Swasta', 'KP KANCAH RT005 RW017 CIHIDEUNG, PARONGPONG - BANDUNG BARAT, KAB., Kd.Pos 40559', 'ATING', 'ATIK SUKAESIH', 'DEPOSITO', '30000000', '2019-05-03', '2022-02-17 07:22:12', '2022-02-17 08:52:37'),
(17, '0130100800', '3217014810830020', '0881023307124', 'dewi', '1984-07-08', 'PRIA', 'Karyawan Swasta', 'KP PASAR KEMIS RT003 RW010 SUKAJAYA, LEMBANG - BANDUNG BARAT, KAB., Kd.Pos 40553', 'IMI', 'CUCU SAMSU', 'KREDIT', '25000000', '2019-08-07', '2022-02-17 07:26:13', '2022-02-17 07:26:13'),
(18, '0130100801', '3217015410720003', '085220131021', 'YATI KARYATI', '1972-10-14', 'PRIA', 'karyawan swasta', 'KP COBALIGO RT03 RW01 DESA CIHANJUANG KEC PARONGPONG', 'AWAT', 'EJANG', 'KREDIT', '33000000', '2019-05-12', '2022-02-17 07:29:04', '2022-02-17 07:29:04'),
(19, '0130100807', '3273010911780006', '082315563096', 'AGUS BADRUZAMAN', '1978-11-09', 'PRIA', 'PNS', 'JL SARIENDAH BARU I RT004 RW006 SUKARASA, SUKASARI - BANDUNG, KOTA., Kd.Pos 40152', 'YAYAH M GOZALI', 'KOKOM KOMARIAH', 'TABUNGAN', '31000000', '2019-03-03', '2022-02-17 07:31:31', '2022-02-17 08:55:31'),
(20, '0130100812', '3217070705910016', '083822415063', 'ALI KURNIA', '1991-05-07', 'PRIA', 'Karyawan Swasta', 'KP CISEUREUH RT001 RW005 SUMUR BANDUNG, CIPATAT - BANDUNG BARAT, KAB., Kd.Pos 40574', 'ENUNG SUKAESIH', 'FITRI PUJAYANTI', 'KREDIT', '45000000', '2019-05-04', '2022-02-17 07:36:03', '2022-02-17 07:36:03'),
(21, '0130100803', '3217010202770024', '081321334528', 'CECEP SETIA PERMANA', '1977-02-02', 'PRIA', 'Guru', 'KP BABAKAN RT001 RW009 KEL CIKOLE KEC LEMBANG KAB BANDUNG CIKOLE, LEMBANG - BANDUNG BARAT, KAB., Kd.', 'ONENG SUKAESIH', 'OOM KOMARIAH', 'KREDIT', '27000000', '2019-02-04', '2022-02-17 07:39:42', '2022-02-17 07:39:42'),
(22, '0130100805', '3217015410720003', '085220131021', 'YATI KARYATI', '1972-10-14', 'PRIA', 'Karyawan Swasta', 'KP PAMECELAN RT002 RW005 SUKAJAYA, LEMBANG - BANDUNG BARAT, KAB., Kd.Pos 40391', 'AWAT', 'EJANG', 'KREDIT', '55000000', '2019-05-17', '2022-02-17 07:43:21', '2022-02-17 07:43:21'),
(23, '0130100806', '3217020312630001', '08157017894', 'TARIM', '1963-12-02', 'PRIA', 'Karyawan Swasta', 'KP COBALIGO RT03 RW01 DESA CIHANJUANG KEC PARONGPONG', 'SAODAH', 'JUARIAH', 'KREDIT', '50000000', '2019-12-03', '2022-02-17 07:46:59', '2022-02-17 07:46:59'),
(24, '0110100002', '3702130501223647', '0812347799878', 'Nanny Karnani', '1967-02-04', 'PRIA', 'Karyawan Swasta', 'Jl. Guntur Sari Wetan 23 Rt. 01/04', 'kasih', NULL, 'TABUNGAN', '899736', '2018-03-01', '2022-02-17 07:57:46', '2022-02-17 08:02:36'),
(25, '0110100076', '1050669014600012', '08971915340', 'Emmy Phiramania', '1946-01-29', 'WANITA', 'Karyawan Swasta', 'Bukit  Dago Utara II No. 15 Rt.005/003', 'sarni', NULL, 'TABUNGAN', '2947679', '2018-08-03', '2022-02-17 08:01:59', '2022-02-17 08:01:59'),
(26, '0110100004', '3273136202500001', '082323112133', 'LIANA GUNAWAN', '1950-02-22', 'WANITA', 'Karyawan Swasta', 'JL. LENGKONG KECIL 38 RT. 002/002', 'Ngansih', NULL, 'TABUNGAN', '49769479', '2018-12-05', '2022-02-17 08:04:58', '2022-02-17 08:04:58'),
(27, '0110100064', '3273082305760001', '081234779987', 'ERICK DARMADJAYA', '1976-05-23', 'PRIA', 'Karyawan Swasta', 'JL BUDI SARI II NO 12 RT003 RW005 KEL HEGARMANAH KEC CIDADAP', 'AIDA FINAWATY', NULL, 'TABUNGAN', '8730685', '2018-04-25', '2022-02-17 08:09:19', '2022-02-17 08:09:19'),
(28, '0110100016', '3217012404790005', '081234779987', 'RUSMAYA ANTON', '1979-04-24', 'PRIA', 'Pengusaha', 'KOMP BUMI OREN F 3 NO 10', 'ANAH ROMLAH', NULL, 'TABUNGAN', '155206598', '2019-01-17', '2022-02-17 08:11:44', '2022-02-17 08:48:44'),
(29, '0110100018', '3217060805530001', '082323112122', 'IDA BAGUS ARGA SARJANA', '1953-05-06', 'WANITA', 'Karyawan Swasta', 'JL WANGSA PUTRA KULON NO 20 KBP RT002 RW008', 'IDA AYU NENGAH KARTIKA', NULL, 'TABUNGAN', '2145609', '2018-07-08', '2022-02-17 08:14:33', '2022-02-17 08:14:33'),
(30, '0110100102', '3217060805532222', '082323112442', 'Bagus Arga', '1953-05-06', 'WANITA', 'Karyawan Swasta', 'JL WANGSA PUTRA KULON NO 20 KBP RT002 RW008', 'IDA AYU NENGAH KARTIKA', NULL, 'TABUNGAN', '300000', '2018-07-08', '2022-02-17 08:14:33', '2022-02-17 16:11:07'),
(31, '0110100027', '3273141810680001', '081234779987', 'RAHMAT', '1968-10-18', 'PRIA', 'Karyawan Swasta', 'JL SADIREJA NO 360 41 RT006 RW006', 'EEM', NULL, 'TABUNGAN', '492440', '2018-05-15', '2022-02-17 08:19:07', '2022-02-17 08:19:07'),
(32, '0110100033', '1050050205673004', '08971915340', 'SUMARDI', '1967-05-02', 'PRIA', 'Karyawan Swasta', 'JL HEGARMANAH GG NATAREJA RT005 RW003 KEL HEGARMANAH', 'SARTINI', NULL, 'TABUNGAN', '467299', '2018-08-18', '2022-02-17 08:21:20', '2022-02-17 08:28:08'),
(33, '0110100035', '3273086808540001', '0812347799878', 'AIDA FINAWATY', '1955-07-28', 'PRIA', 'Karyawan Swasta', 'JL BUDISARI II NO 12 RT003 RW005', 'TJOE SIE JIN/ ENI', NULL, 'TABUNGAN', '110287368', '2018-06-07', '2022-02-17 08:23:46', '2022-02-17 08:23:46'),
(34, '0110100036', '1016267012690003', '082323112133', 'Desyanti Touriska Sari SH', '1969-12-30', 'PRIA', 'Karyawan Swasta', 'Komp. Griya Bandung Asri 1 J-10 Kel. Mengger Kec. Bandung Ki', 'lina', NULL, 'TABUNGAN', '793387', '2018-08-09', '2022-02-17 08:26:04', '2022-02-17 08:28:22'),
(35, '0120100024', '3217012008992233', '081222286872', 'Boyke Darmajaya', '1980-06-10', 'PRIA', 'Karyawan Swasta', 'JL. BUDISARI II NO. 12 RT003 RW005, HEGARMANAH, CIDADAP', 'Feily verani', 'Mika', 'DEPOSITO', '5000000', '2018-02-06', '2022-02-17 08:31:50', '2022-02-17 08:31:50'),
(36, '0120100083', '3217025510760007', '081222435000', 'Lilis Halim', '1976-10-19', 'WANITA', 'Karyawan Swasta', 'JL ANDIR KOMP KERTALAKSANA 2 NO 91A, CIROYOM, ANDIR', 'Surya sumiati', 'jordan', 'DEPOSITO', '7500000', '2018-02-06', '2022-02-17 08:34:07', '2022-02-17 08:34:07'),
(37, '0120100138', '3217025510760022', '081787900092', 'Liana Gunawan', '1980-06-18', 'WANITA', 'Pengusaha', 'JL. LENGKONG KECIL 38 RT. 002/002, PALEDANG, LENGKONG', 'Widiamega', 'Tio Ginanjar', 'DEPOSITO', '100000000', '2018-06-17', '2022-02-17 08:36:05', '2022-02-17 08:36:05'),
(38, '0120100171', '3217011412885444', '0874338272773', 'Aida Finawaty', '1982-06-08', 'WANITA', 'Pengusaha', 'JL BUDISARI II NO 12 RT003 RW005, HEGARMANAH, CIDADAP', 'Ela Komalasari', 'Nurdin', 'DEPOSITO', '7500000', '2018-01-01', '2022-02-17 08:38:19', '2022-02-17 08:38:19'),
(39, '0120100233', '3217030907732121', '0812576675221', 'Ferry Darmajaya', '1970-06-09', 'PRIA', 'Karyawan Swasta', 'Jl. Budisari II N0.12 Rt.01/05 Kel. Hegarmanah Kec. Cidadap, Hegarmanah, Cidadap', 'Lilis', 'Anggun Dewi', 'DEPOSITO', '10000000', '2018-06-05', '2022-02-17 08:40:13', '2022-02-17 08:40:13'),
(40, '0120100402', '3273010922800066', '0816700923644', 'Hani Handrijani', '1982-03-03', 'PRIA', 'ASN', 'Jl. Waluya No. 5 Rt.001/008, Pasteur, Sukajadi', 'Rini', 'Budi sudira', 'DEPOSITO', '10000000', '2018-02-07', '2022-02-17 08:42:23', '2022-02-17 08:42:23'),
(41, '0120100431', '3273014128880006', '0856623522188', 'Grace Deborah', '1986-03-17', 'WANITA', 'Pengusaha', 'JL KOPO CIRANGRANG 528 RT 003004, MARGASUKA, BABAKAN CIPARAY', 'Giovanny', 'Mike Sumitra', 'DEPOSITO', '10000000', '2019-06-05', '2022-02-17 08:44:05', '2022-02-17 08:44:05'),
(42, '0120200055', '3204310107570056', '0812347799878', 'Andy Kurniawan', '1983-02-01', 'PRIA', 'Pengusaha', 'JL PASUNDAN NO 97 RT007 RW005, BALONGGEDE, REGOL', 'Agnes Mirna', 'Tiara permata', 'DEPOSITO', '200000000', '2019-06-17', '2022-02-17 08:46:45', '2022-02-17 08:46:45'),
(43, '0120200069', '3273010911780099', '0816666523820', 'THE KWIE ENG', '1973-02-27', 'PRIA', 'Pengusaha', 'JL CIATEUL NO 104 RT005 RW007, CIATEUL, REGOL', 'Xu sie', 'Aming Midun', 'DEPOSITO', '120000000', '2019-10-10', '2022-02-17 08:48:07', '2022-02-17 08:48:07'),
(44, '0120200074', '3217030908730007', '089719199822', 'Sarah  Novia', '1990-07-02', 'WANITA', 'Karyawan Swasta', 'JL PELANGI I NO 29 RT 007 RW 004, ANTAPANI KULON, ANTAPANI', 'Nurhayati', NULL, 'DEPOSITO', '20000000', '2019-06-17', '2022-02-17 08:51:11', '2022-02-17 08:51:11');

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
-- Table structure for table `pertanyaan_kuesioners`
--

CREATE TABLE `pertanyaan_kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_kuesioner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan_kuesioners`
--

INSERT INTO `pertanyaan_kuesioners` (`id`, `kategori_kuesioner`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'CUSTOMER SERVICE', 'Anda merasa aman menabung dan deposit di BPR Bina Maju Usaha', '2022-02-16 22:51:17', '2022-02-16 22:51:17'),
(2, 'CUSTOMER SERVICE', 'Customer Service memiliki sifat sopan dan ramah', '2022-02-16 22:51:28', '2022-02-16 22:51:28'),
(3, 'CUSTOMER SERVICE', 'Customer Service selalu bisa menjawab pertanyaan maupun keluhan', '2022-02-16 22:51:36', '2022-02-16 22:51:36'),
(4, 'CUSTOMER SERVICE', 'Kemudahan pembukaan rekening tabungan dan deposito', '2022-02-16 22:51:45', '2022-02-16 22:51:45'),
(5, 'CUSTOMER SERVICE', 'Antrian pada Customer Service cepat dari mulai mengantri hingga mendapatkan pelayanan', '2022-02-16 22:51:53', '2022-02-16 22:51:53'),
(6, 'CUSTOMER SERVICE', 'Kemudahan pencairan dana tabungan dan deposito', '2022-02-16 22:52:01', '2022-02-16 22:52:01'),
(7, 'CUSTOMER SERVICE', 'Karyawan berpenampilan rapi', '2022-02-16 22:52:27', '2022-02-16 22:52:27'),
(8, 'CUSTOMER SERVICE', 'Customer Service selalu ada pada jam opersional', '2022-02-16 22:52:55', '2022-02-16 22:52:55'),
(9, 'CUSTOMER SERVICE', 'Pelayanan Customer Service memiliki fasilitas yang modern', '2022-02-16 22:53:05', '2022-02-16 22:53:05'),
(10, 'CUSTOMER SERVICE', 'Customer Service menanggapi keluhan hingga tuntas', '2022-02-16 22:53:15', '2022-02-16 22:53:15'),
(11, 'CUSTOMER SERVICE', 'Customer Service menanggapi keluhan dengan cepat dan tepat kurang dari 10 menit', '2022-02-16 22:53:23', '2022-02-16 22:53:23'),
(12, 'CUSTOMER SERVICE', 'Customer Service memberikan informasi tabungan dan deposito dengan jelas', '2022-02-16 22:53:30', '2022-02-16 22:53:30'),
(13, 'CUSTOMER SERVICE', 'Customer Service mudah di hubungi', '2022-02-16 22:53:37', '2022-02-16 22:53:37'),
(14, 'CUSTOMER SERVICE', 'Customer Service dapat di percaya', '2022-02-16 22:53:44', '2022-02-16 22:53:44'),
(15, 'CUSTOMER SERVICE', 'Customer Service memahami kebutuhan spesifik anda', '2022-02-16 22:53:52', '2022-02-16 22:53:52'),
(16, 'KREDIT', 'Jaminan perusahaan apabila terjadi kehilangan jaminan milik nasabah (BPKB, sertifikat, SK ASN dll)', '2022-02-16 22:54:12', '2022-02-16 22:54:12'),
(17, 'KREDIT', 'Debt collector memiliki sifat sopan dan ramah', '2022-02-16 22:54:20', '2022-02-16 22:54:20'),
(18, 'KREDIT', 'Karyawan kredit selalu bisa menjawab pertanyaan', '2022-02-16 22:54:29', '2022-02-16 22:54:29'),
(19, 'KREDIT', 'Kemudahan persyaratan pengajuan kredit', '2022-02-16 22:54:36', '2022-02-16 22:54:36'),
(20, 'KREDIT', 'Kemudahan melakukan pembayaran cicilan kredit', '2022-02-16 22:54:44', '2022-02-16 22:54:44'),
(21, 'KREDIT', 'Plafon kredit tinggi', '2022-02-16 22:54:51', '2022-02-16 22:54:51'),
(22, 'KREDIT', 'Karyawan kredit berpenampilan rapi', '2022-02-16 22:54:58', '2022-02-16 22:54:58'),
(23, 'KREDIT', 'Karyawan kredit selalu ada ketika jam operasional', '2022-02-16 22:55:05', '2022-02-16 22:55:05'),
(24, 'KREDIT', 'Pelayanan kredit memiliki fasilitas yang modern', '2022-02-16 22:55:16', '2022-02-16 22:55:16'),
(25, 'KREDIT', 'Karyawan langsung melakukan survey jaminan pada hari tersebut', '2022-02-16 22:56:58', '2022-02-16 22:56:58'),
(26, 'KREDIT', 'Pencairan dana kredit setelah survey kurang dari 1 minggu', '2022-02-16 22:57:08', '2022-02-16 22:57:08'),
(27, 'KREDIT', 'Karyawan kredit memberikan informasi kredit dengan jelas', '2022-02-16 22:57:17', '2022-02-16 22:57:17'),
(28, 'KREDIT', 'Karyawan kredit mudah di hubungi', '2022-02-16 22:57:26', '2022-02-16 22:57:26'),
(29, 'KREDIT', 'Karyawan kredit dapat di percaya', '2022-02-16 22:57:34', '2022-02-16 22:57:34'),
(30, 'KREDIT', 'Karyawan kredit memahami kebutuhan spesifik anda', '2022-02-16 22:57:41', '2022-02-16 22:57:41'),
(31, 'TELLER', 'Anda merasa aman menabung, deposit dan menyetor kedit di BPR Bina Maju Usaha', '2022-02-16 22:57:56', '2022-02-16 22:57:56'),
(32, 'TELLER', 'Teller memiliki sifat sopan dan ramah', '2022-02-16 22:58:03', '2022-02-16 22:58:03'),
(33, 'TELLER', 'Teller selalu bisa menjawab pertanyaan maupun kebutuhan', '2022-02-16 22:58:11', '2022-02-16 22:58:11'),
(34, 'TELLER', 'Kemudahan penyetoran tabungan, deposito dan pembayaran kredit', '2022-02-16 22:58:20', '2022-02-16 22:58:20'),
(35, 'TELLER', 'Antrian pada Teller cepat dari mulai mengantri hingga mendapatkan pelayanan', '2022-02-16 22:58:28', '2022-02-16 22:58:28'),
(36, 'TELLER', 'Kemudahan pencairan dana tabungan, deposito dan deposito', '2022-02-16 22:58:34', '2022-02-16 22:58:34'),
(37, 'TELLER', 'Karyawan berpenampilan rapi', '2022-02-16 22:58:41', '2022-02-16 22:58:41'),
(38, 'TELLER', 'Teller selalu ada pada jam opersional', '2022-02-16 22:58:48', '2022-02-16 22:58:48'),
(39, 'TELLER', 'Pelayanan Teller memiliki fasilitas yang modern', '2022-02-16 22:58:56', '2022-02-16 22:58:56'),
(40, 'TELLER', 'Teller menanggapi keperluan nasabah hingga tuntas', '2022-02-16 22:59:02', '2022-02-16 22:59:02'),
(41, 'TELLER', 'Teller menanggapi keperluan nasabah dengan cepat dan tepat kurang dari 10 menit', '2022-02-16 22:59:11', '2022-02-16 22:59:11'),
(42, 'TELLER', 'Teller memberikan informasi tabungan, deposito dan kredit dengan jelas', '2022-02-16 22:59:19', '2022-02-16 22:59:19'),
(43, 'TELLER', 'Teller mengutamakan kepentingan anda', '2022-02-16 22:59:25', '2022-02-16 22:59:25'),
(44, 'TELLER', 'Teller dapat di percaya', '2022-02-16 22:59:32', '2022-02-16 22:59:32'),
(45, 'TELLER', 'Teller memahami kebutuhan spesifik anda', '2022-02-16 22:59:39', '2022-02-16 22:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `produk`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'DEPOSITO', 'Promo Deposito dengan bunga 6.5% pertahun', '2022-02-17 06:40:02', '2022-02-17 17:34:41'),
(2, 'DEPOSITO', 'Promo Deposito dengan bunga 7% pertahun', '2022-02-17 06:40:10', '2022-02-17 06:40:10'),
(3, 'DEPOSITO', 'Promo Deposito dengan bunga 8% pertahun', '2022-02-17 06:40:16', '2022-02-17 06:40:16'),
(4, 'KREDIT', 'Gratis 1x  angsuran Kredit', '2022-02-17 06:40:45', '2022-02-17 06:40:45'),
(5, 'KREDIT', 'Gratis 2x angsuran Kredit', '2022-02-17 06:41:04', '2022-02-17 06:41:12'),
(6, 'DEPOSITO', 'Bebas biaya admin deposito', '2022-02-17 06:41:30', '2022-02-17 06:41:30'),
(7, 'KREDIT', 'Bebas biaya admin Kredit', '2022-02-17 06:41:39', '2022-02-17 06:41:39'),
(8, 'TABUNGAN', 'Bunga tabungan 3% pertahun', '2022-02-17 06:42:01', '2022-02-17 06:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NASABAH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `ktp`, `telepon`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Direktur Operasional', '3217012008990011', '08923223434', 'direkturoperasional@bprbmu.co.id', NULL, '$2y$10$hn74746AazYIhdmJE.4YNeAtQaQb5e2RFsyYwDCmS8Cu.MgWCFvE.', NULL, '2022-02-16 19:09:19', '2022-02-16 19:09:19', 'DIROP'),
(2, 'Muhammad Rizaldi', '3217012008990022', '08971913400', 'muhrizaldii27@gmail.com', NULL, '$2y$10$hqT8sw/ui83yqk.6lowDjecF1px2MFphyZyCvZLgacTq48t5ZIFv.', NULL, '2022-02-16 23:00:32', '2022-02-16 23:00:32', 'NASABAH'),
(3, 'mochamad sapri hadi', '3217012008990033', '085163572727', 'mochapriih@gmail.com', NULL, '$2y$10$rzLxKpuzAsAVy72.M3uW.OrvOmAeOamF1RPVge1Cl8UFI1zzX4Zkm', NULL, '2022-02-17 00:00:14', '2022-02-17 00:00:14', 'NASABAH'),
(4, 'rasim', '3277021712670010', '081277642442', 'rasim@gmail.com', NULL, '$2y$10$EA3J.gVRIrpEWw/3vEm4yu1uU2q31TPxEFFERW0FrQNr/jo90fw9e', NULL, '2022-02-17 00:01:28', '2022-02-17 00:01:28', 'NASABAH'),
(5, 'sudono', '3273232510770003', '081278880009', 'sudono@gmail.com', NULL, '$2y$10$hCt.Poos6qQ.eLguLQDwluwDaI5AxFp/KRWZhUIVRbwZ4cAhma.HW', NULL, '2022-02-17 00:02:34', '2022-02-17 00:02:34', 'NASABAH'),
(6, 'ujang carmaya', '3217021201630004', '085897222243', 'ujangcarmaya@gmail.com', NULL, '$2y$10$zUXVhD5asmJxEpGzdG4kruFuaIb1EVKDFuUES38FRPwe5YjE.SkEO', NULL, '2022-02-17 00:03:19', '2022-02-17 00:03:19', 'NASABAH'),
(7, 'kosidin', '3217010101740216', '085897220002', 'kosidin@gmail.com', NULL, '$2y$10$NImq1UMPG8R9PtCmELnMfu/ubZdah3mbYcmx.BTcL0J47FGLzrUWi', NULL, '2022-02-17 00:03:59', '2022-02-17 00:03:59', 'NASABAH'),
(8, 'Dedi Rosmidan', '3273070111610002', '085897220323', 'dedirosmidan@gmail.com', NULL, '$2y$10$LnyACCRyQfJ4scJjsLDoxOQcPsr8bJ1JIZACh90oJcTsY4Ql/MRXW', NULL, '2022-02-17 00:04:34', '2022-02-17 00:04:34', 'NASABAH'),
(9, 'Engkos Kosasih', '3217011804560003', '081253293929', 'engkkoskosasih@gmail.com', NULL, '$2y$10$dC1.WA8s.0qSxppCGt6Zde6R9EMOv4UWvCm4/4gPG8yFIYLpFp/la', NULL, '2022-02-17 00:05:05', '2022-02-17 00:05:05', 'NASABAH'),
(10, 'Asep Agus', '3217030908730007', '081009876722', 'asepgus@gmail.com', NULL, '$2y$10$4HwrU6dO2IUnjmJzzUorUercURIixBp80izlOSObwCaB0NfzB68Sa', NULL, '2022-02-17 00:05:57', '2022-02-17 00:05:57', 'NASABAH'),
(11, 'AgusBadruzaman', '3273010911780006', '081255576543', 'agusbadruzaman@gmail.com', NULL, '$2y$10$7wExJduczUWzM.xslg9kT.QhG11sAOZ3e2cLgv0IHMxpEaMe3k/US', NULL, '2022-02-17 00:06:48', '2022-02-17 00:06:48', 'NASABAH'),
(12, 'Dian Ani Irawati', '3217025510760007', '08782892900', 'dianani@gmail.com', NULL, '$2y$10$kLPhcpxnoBf50HdmQfdkRucMsYQKU3TZqQB32PXRqY9saVQOAUAHC', NULL, '2022-02-17 00:07:44', '2022-02-17 00:07:44', 'NASABAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawaban_kuesioners`
--
ALTER TABLE `jawaban_kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_kuesioners_pertanyaan_kuesioners_id_foreign` (`pertanyaan_kuesioners_id`),
  ADD KEY `jawaban_kuesioners_users_id_foreign` (`users_id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keluhans_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nasabahs`
--
ALTER TABLE `nasabahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pertanyaan_kuesioners`
--
ALTER TABLE `pertanyaan_kuesioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_kuesioners`
--
ALTER TABLE `jawaban_kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nasabahs`
--
ALTER TABLE `nasabahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pertanyaan_kuesioners`
--
ALTER TABLE `pertanyaan_kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_kuesioners`
--
ALTER TABLE `jawaban_kuesioners`
  ADD CONSTRAINT `jawaban_kuesioners_pertanyaan_kuesioners_id_foreign` FOREIGN KEY (`pertanyaan_kuesioners_id`) REFERENCES `pertanyaan_kuesioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jawaban_kuesioners_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD CONSTRAINT `keluhans_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
