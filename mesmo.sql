-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 11:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` int(10) UNSIGNED NOT NULL,
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `tgl_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `anggota_id`, `tgl_absen`, `jam_absen`, `keterangan`, `created_at`, `updated_at`) VALUES
(49, 2, '30 January, 2017', '10:54 AM', 'Sakit', '2017-01-27 20:54:22', '2017-01-29 01:57:02'),
(50, 3, '28 January, 2017', '10:54 AM', 'Absen', '2017-01-27 20:54:22', '2017-01-27 20:54:22'),
(51, 5, '28 January, 2017', '10:54 AM', 'Hadir', '2017-01-27 20:54:22', '2017-01-27 20:54:22'),
(52, 6, '28 January, 2017', '10:54 AM', 'Absen', '2017-01-27 20:54:23', '2017-01-27 20:54:23'),
(53, 1, '29 January, 2017', '13:52 PM', 'Sakit', '2017-01-27 23:53:01', '2017-01-27 23:53:01'),
(54, 2, '29 January, 2017', '13:52 PM', 'Absen', '2017-01-27 23:53:01', '2017-01-27 23:53:01'),
(55, 3, '29 January, 2017', '13:52 PM', 'Absen', '2017-01-27 23:53:02', '2017-01-27 23:53:02'),
(56, 4, '29 January, 2017', '13:52 PM', 'Hadir', '2017-01-27 23:53:02', '2017-01-27 23:53:02'),
(58, 6, '29 January, 2017', '13:52 PM', 'Hadir', '2017-01-27 23:53:02', '2017-01-27 23:53:02'),
(59, 1, '30 January, 2017', '15:01 PM', 'Absen', '2017-01-30 01:01:51', '2017-01-30 01:01:51'),
(60, 2, '30 January, 2017', '15:01 PM', 'Sakit', '2017-01-30 01:01:51', '2017-01-30 01:01:51'),
(61, 3, '30 January, 2017', '15:01 PM', 'Hadir', '2017-01-30 01:01:51', '2017-01-30 01:01:51'),
(62, 4, '30 January, 2017', '15:01 PM', 'Absen', '2017-01-30 01:01:51', '2017-01-30 01:01:51'),
(63, 5, '30 January, 2017', '15:01 PM', 'Hadir', '2017-01-30 01:01:52', '2017-01-30 01:01:52'),
(64, 6, '30 January, 2017', '15:01 PM', 'Sakit', '2017-01-30 01:01:52', '2017-01-30 01:01:52'),
(65, 7, '30 January, 2017', '15:01 PM', 'Sakit', '2017-01-30 01:01:52', '2017-01-30 01:01:52'),
(66, 8, '30 January, 2017', '15:01 PM', 'Hadir', '2017-01-30 01:01:52', '2017-01-30 01:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `nama`, `email`, `jenis_kelamin`, `tgl_lahir`, `kelas_id`, `no_hp`, `alamat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Adin', 'Adin@mail.com', 'pria', '20 August, 1997', 6, '0857070799317', 'mojokerto', '2017-01-29.14088440_127908837659644_3667297855951697574_n.jpg', '2017-01-27 01:52:32', '2017-01-28 21:15:18'),
(2, 'ilham', 'ilham@mail.com', 'pria', '4 January, 2000', 3, '0857070799317', 'mojokerto', '2017-01-29.13244849_1613503068939795_1803415145908245629_n.jpg', '2017-01-27 01:52:32', '2017-01-28 21:49:37'),
(3, 'etika', 'etika@mail.com', 'wanita', '2 January, 1997', 3, '0857070799317', 'mojokerto', '2017-01-29.BIrT8ukCMAAj-6w.jpg', '2017-01-27 01:52:32', '2017-01-28 22:05:18'),
(4, 'nadya', 'nadya@mail.com', 'wanita', '10 January, 1998', 1, '0857070799317', 'mojokerto', '', '2017-01-27 01:52:32', '2017-01-28 22:09:17'),
(5, 'erfan', 'erfan@mail.com', 'pria', '19 January, 2000', 1, '0857070799317', 'mojokerto', '2017-01-29.15590384_223035668146960_8216363478716871085_n.jpg', '2017-01-27 01:52:32', '2017-01-28 22:10:01'),
(6, 'fiki', 'fiki@mail.com', 'wanita', '21 January, 1998', 1, '0857070799317', 'mojokerto', '2017-01-29.14040015_127932867657241_8013918174654464484_n.jpg', '2017-01-27 01:52:32', '2017-01-28 22:11:18'),
(7, 'Kharim', 'Kharim@mail.om', 'pria', '29 January, 2017', 1, '0857070799317', 'mojokerto', '2017-01-29.14067628_127927124324482_4343035607735265653_n.jpg', '2017-01-28 22:12:44', '2017-01-28 22:12:44'),
(8, 'bingok', 'bingok@mail.com', 'pria', '22 january, 2017', 3, '085707799317', 'mojokerto', '', '2017-01-30 00:16:15', '2017-01-30 00:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `bidangs`
--

CREATE TABLE `bidangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_bidang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bidangs`
--

INSERT INTO `bidangs` (`id`, `nama_bidang`, `created_at`, `updated_at`) VALUES
(1, 'IBDAK(Ibadah dan Dakwah)', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(2, 'PLATVENT(Pelatihan dan Event)', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(3, 'Keputrian', '2017-01-27 01:52:33', '2017-01-27 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pembina_id` int(10) UNSIGNED NOT NULL,
  `bidang_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `nama_kegiatan`, `pembina_id`, `bidang_id`, `status`, `tgl_pel`, `created_at`, `updated_at`) VALUES
(1, 'Puasa Ramadhan', 1, 2, 'terlaksana', '20 January, 2017', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(2, 'Bakti Sosial', 3, 1, 'belum terlaksana', '20 Oktober, 2017', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(3, 'Pengajian', 1, 3, 'terlaksana', '10 February, 2017', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(4, 'puasa ramadhan', 1, 2, 'belum terlaksana', '30 January, 2017', '2017-01-30 00:59:03', '2017-01-30 00:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '10 RPL 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(2, '11 RPL 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(3, '12 RPL 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(4, '10 RPL 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(5, '11 RPL 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(6, '12 RPL 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(7, '10 JB 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(8, '11 JB 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(9, '12 JB 1', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(10, '10 JB 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(11, '11 JB 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(12, '12 JB 2', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(13, '10 MM 3', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(14, '11 MM 3', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(15, '12 MM 3', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(16, '10 MM 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(17, '11 MM 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(18, '12 MM 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(19, '10 MM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(20, '11 MM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(21, '12 MM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(22, '10 APH 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(23, '11 APH 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(24, '12 APH 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(25, '10 APH 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(26, '11 APH 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(27, '12 APH 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(28, '10 ANM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(29, '11 ANM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(30, '12 ANM 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(31, '10 ANM 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(32, '11 ANM 2', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(33, '10 TKJ 1', '2017-01-27 01:52:31', '2017-01-27 01:52:31'),
(34, '11 TKJ 1', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(35, '12 TKJ 1', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(36, '10 TKJ 2', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(37, '11 TKJ 2', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(38, '12 TKJ 2', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(39, '10 TKJ 3', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(40, '11 TKJ 3', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(41, '12 TKJ 3', '2017-01-27 01:52:32', '2017-01-27 01:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `keuangans`
--

CREATE TABLE `keuangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `pemasukan_dari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_masuk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_11_08_062304_create_pembina_table', 1),
('2016_11_13_111603_create_users_table', 1),
('2016_11_20_114537_create_kelas_table', 1),
('2016_11_21_133754_create_anggotas_table', 1),
('2016_11_21_142254_create_penguruses_table', 1),
('2016_11_30_014057_create_bidangs_table', 1),
('2016_11_30_032830_create_kegiatans_table', 1),
('2016_12_03_130629_create_absensis_table', 1),
('2017_01_16_220820_create_keuangans_table', 1),
('2017_01_19_055235_create_pemasukans_table', 1),
('2017_01_19_055937_create_pengeluarans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `pemasukan_dari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pemasukan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `jumlah_uang`, `pemasukan_dari`, `tgl_pemasukan`, `created_at`, `updated_at`) VALUES
(1, 8500, 'infaq', '29 January, 2017', '2017-01-29 02:36:16', '2017-01-29 02:37:43'),
(2, 1000, 'infaq', '30 January, 2017', '2017-01-29 02:37:05', '2017-01-29 23:04:31'),
(3, 5000, 'hamba Allah SWT', '30 January, 2017', '2017-01-30 01:05:28', '2017-01-30 01:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `pembina`
--

CREATE TABLE `pembina` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id`, `nama`, `email`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_hp`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Eko Setiawan , S.Pd', 'Eko@mail.com', 'pria', '3 oktober, 1998', 'mojokerto', '0854854843', '2017-01-30.PAK EKO.jpg', '2017-01-27 01:52:33', '2017-01-30 00:06:28'),
(2, 'Abdul Syhakur', 'Syhakur@mail.com', 'pria', '3 oktober, 1998', 'mojokerto', '0854854843', '2017-01-30.PAK LEMAN.jpg', '2017-01-27 01:52:33', '2017-01-30 00:06:59'),
(3, 'Nikma', 'Nikma@mail.com', 'wanita', '3 oktober, 1998', 'mojokerto', '085707799317', '2017-01-30.2.jpg', '2017-01-27 01:52:33', '2017-01-30 00:08:50'),
(4, 'Khoirul', 'Khoirul@mail.com', 'pria', '3 oktober, 1998', 'mojokerto', '0854854843', '', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(5, 'pembina baru', 'pembina@mal.com', 'wanita', '', 'mojokerto', '085707799317', '2017-01-30.5.jpg', '2017-01-29 22:59:55', '2017-01-29 22:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `keperluan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pengeluaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `jumlah_uang`, `keperluan`, `tgl_pengeluaran`, `created_at`, `updated_at`) VALUES
(1, 5000, 'membeli alat kebersihan', '30 January, 2017', '2017-01-29 23:03:21', '2017-01-29 23:03:21'),
(2, 1000, 'makanan', '30 January, 2017', '2017-01-29 23:03:54', '2017-01-29 23:03:54'),
(3, 2000, 'membayar listrik', '30 January, 2017', '2017-01-30 01:07:51', '2017-01-30 01:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `penguruses`
--

CREATE TABLE `penguruses` (
  `id` int(10) UNSIGNED NOT NULL,
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penguruses`
--

INSERT INTO `penguruses` (`id`, `anggota_id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ketua', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(2, 7, 'Wakil Ketua', '2017-01-27 01:52:32', '2017-01-30 01:04:31'),
(3, 3, 'Bendahara 1', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(4, 4, 'Bendahara 2', '2017-01-27 01:52:32', '2017-01-27 01:52:32'),
(5, 5, 'Sekretaris 1', '2017-01-27 01:52:33', '2017-01-27 01:52:33'),
(6, 6, 'Sekretaris 2', '2017-01-27 01:52:33', '2017-01-27 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$DUUCS/0YZULWJG9Jy9ZiLO/WjRsWtiOGB5TZvsJyVscjCBA7yb/Jy', 'admin', 'IjZcW5BQtYTuEr2ZGm9kr8sNFnhnbUuMQvHxeNCTITO0dTGehzNsZjPBJDOK', '2017-01-27 01:52:29', '2017-01-27 01:52:29'),
(2, 'pembina', '$2y$10$3o2lWmuaS6hTkR3D5JLGyOTcN9YRVXb6UasO3DJt/LdkanVkfU.Ua', 'pembina', 'HGi6fiOwZ5uL1fQ4UlSaVLYCLyFJjiKsV2CJ74DpnX2GJCieVPZu6wEbFkeZ', '2017-01-27 01:52:30', '2017-01-27 01:52:30'),
(3, 'anggota', '$2y$10$fW7Q6Rk6H/Pp2GKhPeOMpuYQ0.6idH1vFxcNFt4lFpkfnHWy0JW9S', 'anggota', '2lg3mgmXec2iQYVE7sWS0PLXhTbAp8Cny2inrPmfkXbcUHz6DqWkBdeWtLHE', '2017-01-27 01:52:30', '2017-01-27 01:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_anggota_id_foreign` (`anggota_id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anggotas_email_unique` (`email`),
  ADD KEY `anggotas_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kegiatans_bidang_id_foreign` (`bidang_id`),
  ADD KEY `kegiatans_pembina_id_foreign` (`pembina_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangans`
--
ALTER TABLE `keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pembina_email_unique` (`email`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penguruses_anggota_id_foreign` (`anggota_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `keuangans`
--
ALTER TABLE `keuangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggotas` (`id`);

--
-- Constraints for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD CONSTRAINT `anggotas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD CONSTRAINT `kegiatans_bidang_id_foreign` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`),
  ADD CONSTRAINT `kegiatans_pembina_id_foreign` FOREIGN KEY (`pembina_id`) REFERENCES `pembina` (`id`);

--
-- Constraints for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD CONSTRAINT `penguruses_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggotas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
