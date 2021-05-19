-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2021 at 06:01 PM
-- Server version: 10.3.28-MariaDB-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4393775_taaruf`
--

-- --------------------------------------------------------

--
-- Table structure for table `akhwats`
--

CREATE TABLE `akhwats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rambut_id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED NOT NULL,
  `wajah_id` bigint(20) UNSIGNED NOT NULL,
  `tinggi_id` bigint(20) UNSIGNED NOT NULL,
  `tubuh_id` bigint(20) UNSIGNED NOT NULL,
  `organisasi_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED NOT NULL,
  `kulit_id` bigint(20) UNSIGNED NOT NULL,
  `darah_id` bigint(20) UNSIGNED NOT NULL,
  `nikah_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akhwats`
--

INSERT INTO `akhwats` (`id`, `nama`, `alamat`, `no_hp`, `cv`, `riwayat_penyakit`, `rambut_id`, `pekerjaan_id`, `wajah_id`, `tinggi_id`, `tubuh_id`, `organisasi_id`, `pendidikan_id`, `kulit_id`, `darah_id`, `nikah_id`, `created_at`, `updated_at`) VALUES
(3, 'Siti Firdauzi Ulfa', 'Villa mutiara kirana IV', '081342454556', '1607084701_BIODATA.pdf', 'Maag', 2, 3, 2, 5, 4, 1, 6, 2, 4, 4, '2020-12-04 05:25:01', '2020-12-04 05:25:01'),
(5, 'Elsa Putri S', 'Jl. Poros Malino KM.2', '082297771298', '1607086809_BIODATA.pdf', 'Tak Ada', 6, 7, 5, 5, 4, 4, 5, 3, 3, 4, '2020-12-04 06:00:09', '2020-12-04 06:00:09'),
(6, 'Mawar', 'Bantaeng', '085256429327', '1607119214_BIODATA.pdf', 'Tak Ada', 1, 7, 1, 5, 4, 1, 3, 4, 4, 4, '2020-12-04 15:00:14', '2020-12-04 15:00:14'),
(7, 'Nurjaya', 'Jl. Ance Daeng Ngoyo Lr. 3 No. 2', '082277779806', '1607120216_BIODATA.pdf', 'Maag dan Asma', 6, 7, 5, 5, 4, 4, 3, 2, 2, 4, '2020-12-04 15:16:56', '2020-12-04 15:16:56'),
(9, 'Rahmaniar', 'Jl. Abdullah Dg Sirua', '085299038708', '1607120775_BIODATA.pdf', 'Demam', 6, 9, 5, 5, 5, 3, 5, 2, 4, 4, '2020-12-04 15:26:15', '2020-12-04 15:26:15'),
(11, 'Buni Aminah', 'Desa Maroneng Kec. Duampanua Kab. Pinrang', '085397500878', '1607121378_BIODATA.pdf', 'Tak Ada', 2, 1, 5, 5, 4, 1, 5, 3, 2, 5, '2020-12-04 15:36:18', '2020-12-04 15:36:18'),
(14, 'Uswah Mufida', 'Jln Ahmad Yani (Bulukumba)', '085298040128', '1607121945_BIODATA.pdf', 'Tak Ada', 1, 3, 5, 5, 5, 3, 5, 2, 1, 4, '2020-12-04 15:45:45', '2020-12-04 15:45:45'),
(15, 'A.Nabila', 'Jl. Penjernihan', '085299425128', '1607122089_BIODATA.pdf', 'Tak Ada', 2, 13, 3, 5, 5, 4, 3, 3, 2, 4, '2020-12-04 15:48:09', '2020-12-04 15:48:09'),
(17, 'Nur Hamdani Bayu', 'Jl. kumala', '088744771590', '1607122588_BIODATA.pdf', 'Tak Ada', 2, 13, 5, 5, 5, 4, 3, 3, 4, 4, '2020-12-04 15:56:28', '2020-12-04 15:56:28'),
(18, 'Nurmila', 'Desa Waetuoe Kel. Lanrisang Kec. Lanrisang Kab. Pinrang', '085212741235', '1607129199_BIODATA.pdf', 'Tak Ada', 6, 7, 5, 5, 4, 1, 3, 3, 3, 4, '2020-12-04 17:46:39', '2020-12-04 17:46:39'),
(19, 'Anugrah', 'Desa Maroneng Kec. Duampanua Kab. Pinrang', '082293975658', '1607129415_BIODATA.pdf', 'Tak Ada', 1, 2, 5, 5, 4, 4, 5, 3, 2, 6, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(20, 'Juliani', 'Bulukumba', '085397895557', '1607129577_BIODATA.pdf', 'Tak Ada', 2, 13, 3, 5, 5, 1, 5, 2, 4, 4, '2020-12-04 17:52:57', '2020-12-04 17:52:57'),
(21, 'Novianti', 'BPS Blok F7/4', '08971630122', '1607130191_BIODATA.pdf', 'Tak Ada', 5, 7, 5, 5, 4, 3, 4, 3, 4, 4, '2020-12-04 18:03:11', '2020-12-04 18:03:11'),
(25, 'Suharni', 'Bontomanai Kec Rilau Ale Kab Bulukumba', '085299455919', '1607130931_BIODATA.pdf', 'Tak Ada', 1, 9, 5, 5, 4, 4, 3, 2, 4, 4, '2020-12-04 18:15:31', '2020-12-04 18:15:31'),
(27, 'Risa Desiyani Made', 'Jl. Pampang 1 No. 10', '081245300983', '1607131473_BIODATA.pdf', 'Tak Ada', 2, 7, 3, 5, 5, 4, 3, 2, 4, 4, '2020-12-04 18:24:33', '2020-12-04 18:24:33'),
(28, 'Nurul Qamri', 'Jl. Kumala no. 164', '081241630075', '1607131659_BIODATA.pdf', 'Tak Ada', 6, 11, 5, 5, 5, 4, 4, 2, 1, 5, '2020-12-04 18:27:39', '2020-12-04 18:27:39'),
(32, 'Hasnah', 'Pomalaa Kab. Kolaka Prov. Sulawesi Tenggara', '082190845727', '1607134612_BIODATA.pdf', 'Tak Ada', 1, 3, 3, 5, 4, 1, 3, 2, 4, 4, '2020-12-04 19:16:52', '2020-12-04 19:54:26'),
(33, 'Harmiati', 'Pomalaa Kab. Kolaka Prov. Sulawesi Tenggara', '081525808194', '1607134939_BIODATA.pdf', 'Tak Ada', 6, 3, 5, 5, 4, 4, 3, 2, 4, 4, '2020-12-04 19:22:19', '2020-12-04 19:54:48'),
(34, 'Nur Fadillah Ali', 'Jl. H.Kalla', '085299040622', '1607135160_BIODATA.pdf', 'Tak Ada', 1, 14, 3, 5, 4, 4, 3, 3, 2, 4, '2020-12-04 19:26:00', '2020-12-04 19:49:29'),
(35, 'Iklima', 'Palu', '085242249956', '1607135380_BIODATA.pdf', 'Maag', 5, 9, 5, 5, 4, 1, 3, 2, 1, 6, '2020-12-04 19:29:40', '2020-12-04 19:29:40'),
(37, 'Sasnita Inna', 'Barukang 5 No. 2', '082252536021', '1607143127_BIODATA.pdf', 'Tak Ada', 1, 7, 5, 5, 4, 3, 4, 2, 1, 4, '2020-12-04 21:38:47', '2020-12-04 21:38:47'),
(41, 'Nursida Tahir', 'JL. Dg. tata', '082345678901', '1607757835_BIODATA.pdf', 'Tak Ada', 5, 7, 5, 5, 4, 4, 5, 2, 1, 4, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(42, 'Fadylah Afrivo Nasir', 'Jl. Sukaria 11 No 12', '0895806263262', '1608028358_BIODATA.pdf', 'Tak Ada', 2, 3, 5, 5, 4, 4, 3, 2, 2, 4, '2020-12-15 03:32:38', '2020-12-15 03:32:38'),
(43, 'Asma Ainuddin', 'Grand metro residence blok K3, Bantaeng', '082194082146', '1608030782_BIODATA.pdf', 'Tak Ada', 5, 10, 5, 5, 5, 1, 6, 2, 4, 5, '2020-12-15 04:13:02', '2020-12-15 04:13:02'),
(44, 'Jusrawati', 'Btp', '082296480920', '1608030948_BIODATA.pdf', 'Demam Typoid', 1, 7, 3, 5, 4, 3, 3, 3, 1, 4, '2020-12-15 04:15:48', '2020-12-15 04:15:48'),
(45, 'Mutia Kamaruddin', 'Bumi Permata Sudiang Blok A2 no 14', '082199027616', '1608031115_BIODATA.pdf', 'Tak Ada', 1, 13, 3, 5, 4, 4, 5, 3, 2, 4, '2020-12-15 04:18:35', '2020-12-15 04:18:35'),
(46, 'Firkawati Amri', 'Jl. Mallombasang No 43', '082188052828', '1608031498_BIODATA.pdf', 'Bronchitis', 1, 3, 5, 5, 4, 1, 5, 2, 1, 4, '2020-12-15 04:24:58', '2020-12-15 04:24:58'),
(47, 'Hatira', 'Malengkeri luar', '082346161121', '1608033096_BIODATA.pdf', 'Maag', 6, 7, 3, 5, 4, 1, 5, 2, 1, 4, '2020-12-15 04:51:36', '2020-12-15 04:51:36'),
(48, 'Marwati', 'Jl. barawaja barat 1', '089519280616', '1608033307_BIODATA.pdf', 'Asma', 6, 7, 3, 5, 4, 3, 3, 3, 2, 4, '2020-12-15 04:55:07', '2020-12-15 04:55:07'),
(49, 'Syahrina M', 'Jl. Sungai Musi, KM 8, Waetuwo, Kabupaten Bone', '085394207516', '1608033462_BIODATA.pdf', 'Tak Ada', 1, 7, 3, 5, 4, 3, 5, 3, 4, 4, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(50, 'Fatmawati', 'Jl. Pampang 2', '085298275848', '1608033582_BIODATA.pdf', 'Tak Ada', 5, 3, 5, 5, 4, 4, 5, 3, 4, 5, '2020-12-15 04:59:42', '2020-12-15 04:59:42'),
(51, 'Jendriyawati Bina', 'Jl. Nani Hasan, Ds Upomela, Kec. Bongomeme, Kab. Gorontalo, Prov. Gorontalo', '081527880198', '1608033735_BIODATA.pdf', 'Alergi Udang', 5, 3, 3, 5, 4, 1, 3, 3, 1, 4, '2020-12-15 05:02:15', '2020-12-15 05:02:15'),
(52, 'Firdha Widasari', 'Samata', '082393164440', '1608033879_BIODATA.pdf', 'Tak Ada', 6, 7, 5, 5, 5, 4, 3, 2, 4, 4, '2020-12-15 05:04:39', '2020-12-15 05:04:39'),
(53, 'Iiend Kurnianti Rahayu', 'Griya Darussalam resort pattallassang G51', '085712263849', '1608034042_BIODATA.pdf', 'Maag', 1, 7, 5, 5, 4, 4, 3, 2, 2, 4, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(54, 'Jumriani', 'Gowa-Makassaar', '082189142258', '1608034160_BIODATA.pdf', 'Maag', 2, 7, 5, 5, 5, 1, 3, 3, 1, 4, '2020-12-15 05:09:20', '2020-12-15 05:09:20'),
(55, 'Jusneni', 'Jl. Nuri lorong 300', '082154514731', '1608034338_BIODATA.pdf', 'Tak Ada', 1, 3, 3, 5, 5, 1, 3, 2, 4, 4, '2020-12-15 05:12:18', '2020-12-15 05:12:18'),
(56, 'Hasniar', 'Jl. Sukaria 2 No 8', '082348434098', '1608034511_BIODATA.pdf', 'Tak Ada', 5, 13, 5, 5, 4, 4, 4, 2, 4, 5, '2020-12-15 05:15:11', '2020-12-15 05:15:11'),
(57, 'Nur Rahmah', 'Pakkasalo', '082296345204', '1608034794_BIODATA.pdf', 'Maag', 1, 2, 5, 5, 5, 4, 3, 2, 2, 4, '2020-12-15 05:19:54', '2020-12-15 05:19:54'),
(58, 'Selvi Hardianty', 'Pangkep', '085341747240', '1608189661_BIODATA.pdf', 'Maag', 1, 11, 3, 6, 4, 4, 5, 3, 1, 4, '2020-12-17 00:21:01', '2020-12-17 00:21:01'),
(59, 'Khusnul Fatimah', 'Pangkep', '081234567890', '1608297238_BIODATA.pdf', 'Maag', 1, 7, 5, 5, 4, 4, 3, 3, 4, 4, '2020-12-18 06:13:58', '2020-12-18 06:13:58'),
(60, 'Hasri Ainun Pratiwi', 'Pangkep', '085255945750', '1608299780_BIODATA.pdf', 'Tak Ada', 1, 7, 3, 5, 4, 1, 3, 3, 4, 4, '2020-12-18 06:56:20', '2020-12-18 06:56:20'),
(61, 'Nurul Hidayah', 'Lembang, Kel. Mangallekana, Kec. Labakkang, Kab. Pangkajene dan Kepulauan', '082343934031', '1608299926_BIODATA.pdf', 'Tak Ada', 6, 9, 3, 5, 4, 1, 3, 2, 4, 4, '2020-12-18 06:58:46', '2020-12-18 06:58:46'),
(62, 'Nurul Hidayanti', 'Desa bowong cindea Kec.bungoro kab.pangkep', '085399762223', '1608300257_BIODATA.pdf', 'Maag', 1, 7, 3, 5, 6, 1, 3, 3, 4, 4, '2020-12-18 07:04:17', '2020-12-18 07:04:17'),
(63, 'Niafitri Ramadhani', 'Jl. Matahari', '082159629368', '1608300382_BIODATA.pdf', 'Tak Ada', 5, 7, 2, 5, 6, 1, 3, 2, 4, 4, '2020-12-18 07:06:22', '2020-12-18 07:06:22'),
(64, 'Desi Maemuna Nurdin', 'Jl. Abdesir', '082196213208', '1608300511_BIODATA.pdf', 'Maag', 6, 13, 5, 5, 4, 4, 3, 2, 1, 4, '2020-12-18 07:08:31', '2020-12-18 07:08:31'),
(65, 'Dwitri Anugrah Insani', 'Jl. Sepakat Kera Kera No. 28', '082351753852', '1608645512_BIODATA.pdf', 'Tak Ada', 1, 7, 3, 5, 4, 1, 3, 2, 1, 4, '2020-12-22 06:58:32', '2020-12-22 06:58:32'),
(66, 'Suarni', 'jl. Abdullah Dg Sirua Lorong 7B', '081346065515', '1608645667_BIODATA.pdf', 'Tak Ada', 6, 13, 3, 5, 4, 4, 3, 2, 4, 4, '2020-12-22 07:01:07', '2021-01-22 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `akhwats_skills`
--

CREATE TABLE `akhwats_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akhwat_id` bigint(20) UNSIGNED NOT NULL,
  `keterampilan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akhwats_skills`
--

INSERT INTO `akhwats_skills` (`id`, `akhwat_id`, `keterampilan_id`, `created_at`, `updated_at`) VALUES
(8, 3, 2, '2020-12-04 05:25:01', '2020-12-04 05:25:01'),
(10, 5, 8, '2020-12-04 06:00:09', '2020-12-04 06:00:09'),
(11, 6, 2, '2020-12-04 15:00:14', '2020-12-04 15:00:14'),
(12, 7, 4, '2020-12-04 15:16:56', '2020-12-04 15:16:56'),
(13, 7, 5, '2020-12-04 15:16:56', '2020-12-04 15:16:56'),
(15, 9, 2, '2020-12-04 15:26:15', '2020-12-04 15:26:15'),
(17, 11, 2, '2020-12-04 15:36:18', '2020-12-04 15:36:18'),
(20, 14, 2, '2020-12-04 15:45:45', '2020-12-04 15:45:45'),
(21, 15, 2, '2020-12-04 15:48:09', '2020-12-04 15:48:09'),
(23, 17, 2, '2020-12-04 15:56:28', '2020-12-04 15:56:28'),
(24, 18, 4, '2020-12-04 17:46:39', '2020-12-04 17:46:39'),
(25, 19, 2, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(26, 19, 4, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(27, 19, 9, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(28, 20, 7, '2020-12-04 17:52:57', '2020-12-04 17:52:57'),
(29, 21, 2, '2020-12-04 18:03:11', '2020-12-04 18:03:11'),
(35, 25, 2, '2020-12-04 18:15:31', '2020-12-04 18:15:31'),
(37, 27, 2, '2020-12-04 18:24:33', '2020-12-04 18:24:33'),
(38, 28, 2, '2020-12-04 18:27:39', '2020-12-04 18:27:39'),
(49, 35, 7, '2020-12-04 19:29:40', '2020-12-04 19:29:40'),
(51, 34, 7, '2020-12-04 19:49:39', '2020-12-04 19:49:39'),
(53, 32, 2, '2020-12-04 19:54:26', '2020-12-04 19:54:26'),
(54, 33, 2, '2020-12-04 19:54:48', '2020-12-04 19:54:48'),
(65, 37, 2, '2020-12-12 00:10:32', '2020-12-12 00:10:32'),
(66, 37, 3, '2020-12-12 00:10:32', '2020-12-12 00:10:32'),
(67, 41, 2, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(68, 41, 3, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(69, 41, 4, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(70, 41, 8, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(71, 42, 2, '2020-12-15 03:32:38', '2020-12-15 03:32:38'),
(72, 43, 2, '2020-12-15 04:13:02', '2020-12-15 04:13:02'),
(73, 44, 2, '2020-12-15 04:15:48', '2020-12-15 04:15:48'),
(74, 45, 2, '2020-12-15 04:18:35', '2020-12-15 04:18:35'),
(75, 46, 7, '2020-12-15 04:24:58', '2020-12-15 04:24:58'),
(76, 47, 2, '2020-12-15 04:51:36', '2020-12-15 04:51:36'),
(77, 48, 2, '2020-12-15 04:55:07', '2020-12-15 04:55:07'),
(78, 49, 2, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(79, 49, 3, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(80, 49, 5, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(81, 50, 4, '2020-12-15 04:59:42', '2020-12-15 04:59:42'),
(82, 51, 2, '2020-12-15 05:02:15', '2020-12-15 05:02:15'),
(83, 52, 2, '2020-12-15 05:04:39', '2020-12-15 05:04:39'),
(84, 53, 2, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(85, 53, 3, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(86, 53, 4, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(87, 53, 5, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(88, 54, 2, '2020-12-15 05:09:20', '2020-12-15 05:09:20'),
(89, 54, 5, '2020-12-15 05:09:20', '2020-12-15 05:09:20'),
(90, 55, 3, '2020-12-15 05:12:18', '2020-12-15 05:12:18'),
(91, 56, 5, '2020-12-15 05:15:11', '2020-12-15 05:15:11'),
(92, 57, 3, '2020-12-15 05:19:54', '2020-12-15 05:19:54'),
(93, 58, 2, '2020-12-17 00:21:01', '2020-12-17 00:21:01'),
(94, 59, 2, '2020-12-18 06:13:58', '2020-12-18 06:13:58'),
(95, 60, 2, '2020-12-18 06:56:20', '2020-12-18 06:56:20'),
(96, 61, 2, '2020-12-18 06:58:46', '2020-12-18 06:58:46'),
(97, 62, 2, '2020-12-18 07:04:17', '2020-12-18 07:04:17'),
(98, 63, 2, '2020-12-18 07:06:22', '2020-12-18 07:06:22'),
(99, 64, 4, '2020-12-18 07:08:31', '2020-12-18 07:08:31'),
(100, 65, 5, '2020-12-22 06:58:32', '2020-12-22 06:58:32'),
(102, 66, 2, '2021-01-22 09:03:35', '2021-01-22 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `akhwat_suku`
--

CREATE TABLE `akhwat_suku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akhwat_id` bigint(20) UNSIGNED NOT NULL,
  `suku_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akhwat_suku`
--

INSERT INTO `akhwat_suku` (`id`, `akhwat_id`, `suku_id`, `created_at`, `updated_at`) VALUES
(3, 3, 1, '2020-12-04 05:25:01', '2020-12-04 05:25:01'),
(4, 3, 1, '2020-12-04 05:25:01', '2020-12-04 05:25:01'),
(7, 5, 12, '2020-12-04 06:00:09', '2020-12-04 06:00:09'),
(8, 5, 6, '2020-12-04 06:00:09', '2020-12-04 06:00:09'),
(9, 6, 6, '2020-12-04 15:00:14', '2020-12-04 15:00:14'),
(10, 6, 6, '2020-12-04 15:00:14', '2020-12-04 15:00:14'),
(11, 7, 13, '2020-12-04 15:16:56', '2020-12-04 15:16:56'),
(12, 7, 13, '2020-12-04 15:16:56', '2020-12-04 15:16:56'),
(15, 9, 1, '2020-12-04 15:26:15', '2020-12-04 15:26:15'),
(16, 9, 6, '2020-12-04 15:26:15', '2020-12-04 15:26:15'),
(19, 11, 1, '2020-12-04 15:36:18', '2020-12-04 15:36:18'),
(20, 11, 1, '2020-12-04 15:36:18', '2020-12-04 15:36:18'),
(25, 14, 1, '2020-12-04 15:45:45', '2020-12-04 15:45:45'),
(26, 14, 1, '2020-12-04 15:45:45', '2020-12-04 15:45:45'),
(27, 15, 1, '2020-12-04 15:48:09', '2020-12-04 15:48:09'),
(28, 15, 1, '2020-12-04 15:48:09', '2020-12-04 15:48:09'),
(31, 17, 6, '2020-12-04 15:56:28', '2020-12-04 15:56:28'),
(32, 17, 1, '2020-12-04 15:56:28', '2020-12-04 15:56:28'),
(33, 18, 1, '2020-12-04 17:46:39', '2020-12-04 17:46:39'),
(34, 18, 1, '2020-12-04 17:46:39', '2020-12-04 17:46:39'),
(35, 19, 1, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(36, 19, 1, '2020-12-04 17:50:15', '2020-12-04 17:50:15'),
(37, 20, 1, '2020-12-04 17:52:57', '2020-12-04 17:52:57'),
(38, 20, 1, '2020-12-04 17:52:57', '2020-12-04 17:52:57'),
(39, 21, 1, '2020-12-04 18:03:11', '2020-12-04 18:03:11'),
(40, 21, 6, '2020-12-04 18:03:11', '2020-12-04 18:03:11'),
(47, 25, 10, '2020-12-04 18:15:31', '2020-12-04 18:15:31'),
(48, 25, 10, '2020-12-04 18:15:31', '2020-12-04 18:15:31'),
(51, 27, 15, '2020-12-04 18:24:33', '2020-12-04 18:24:33'),
(52, 27, 1, '2020-12-04 18:24:33', '2020-12-04 18:24:33'),
(53, 28, 6, '2020-12-04 18:27:39', '2020-12-04 18:27:39'),
(54, 28, 6, '2020-12-04 18:27:39', '2020-12-04 18:27:39'),
(67, 35, 1, '2020-12-04 19:29:40', '2020-12-04 19:29:40'),
(68, 35, 1, '2020-12-04 19:29:40', '2020-12-04 19:29:40'),
(71, 34, 1, '2020-12-04 19:49:39', '2020-12-04 19:49:39'),
(72, 34, 1, '2020-12-04 19:49:39', '2020-12-04 19:49:39'),
(75, 32, 1, '2020-12-04 19:54:26', '2020-12-04 19:54:26'),
(76, 32, 1, '2020-12-04 19:54:26', '2020-12-04 19:54:26'),
(77, 33, 1, '2020-12-04 19:54:48', '2020-12-04 19:54:48'),
(78, 33, 1, '2020-12-04 19:54:48', '2020-12-04 19:54:48'),
(91, 37, 6, '2020-12-12 00:10:32', '2020-12-12 00:10:32'),
(92, 37, 1, '2020-12-12 00:10:32', '2020-12-12 00:10:32'),
(93, 41, 1, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(94, 41, 1, '2020-12-12 00:23:55', '2020-12-12 00:23:55'),
(95, 42, 1, '2020-12-15 03:32:38', '2020-12-15 03:32:38'),
(96, 42, 1, '2020-12-15 03:32:38', '2020-12-15 03:32:38'),
(97, 43, 7, '2020-12-15 04:13:02', '2020-12-15 04:13:02'),
(98, 43, 7, '2020-12-15 04:13:02', '2020-12-15 04:13:02'),
(99, 44, 6, '2020-12-15 04:15:48', '2020-12-15 04:15:48'),
(100, 44, 6, '2020-12-15 04:15:48', '2020-12-15 04:15:48'),
(101, 45, 1, '2020-12-15 04:18:35', '2020-12-15 04:18:35'),
(102, 45, 1, '2020-12-15 04:18:35', '2020-12-15 04:18:35'),
(103, 46, 1, '2020-12-15 04:24:58', '2020-12-15 04:24:58'),
(104, 46, 1, '2020-12-15 04:24:58', '2020-12-15 04:24:58'),
(105, 47, 1, '2020-12-15 04:51:36', '2020-12-15 04:51:36'),
(106, 47, 1, '2020-12-15 04:51:36', '2020-12-15 04:51:36'),
(107, 48, 6, '2020-12-15 04:55:07', '2020-12-15 04:55:07'),
(108, 48, 6, '2020-12-15 04:55:07', '2020-12-15 04:55:07'),
(109, 49, 1, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(110, 49, 1, '2020-12-15 04:57:42', '2020-12-15 04:57:42'),
(111, 50, 1, '2020-12-15 04:59:42', '2020-12-15 04:59:42'),
(112, 50, 1, '2020-12-15 04:59:42', '2020-12-15 04:59:42'),
(113, 51, 14, '2020-12-15 05:02:15', '2020-12-15 05:02:15'),
(114, 51, 14, '2020-12-15 05:02:15', '2020-12-15 05:02:15'),
(115, 52, 1, '2020-12-15 05:04:39', '2020-12-15 05:04:39'),
(116, 52, 1, '2020-12-15 05:04:39', '2020-12-15 05:04:39'),
(117, 53, 11, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(118, 53, 6, '2020-12-15 05:07:22', '2020-12-15 05:07:22'),
(119, 54, 6, '2020-12-15 05:09:20', '2020-12-15 05:09:20'),
(120, 54, 6, '2020-12-15 05:09:20', '2020-12-15 05:09:20'),
(121, 55, 1, '2020-12-15 05:12:18', '2020-12-15 05:12:18'),
(122, 55, 1, '2020-12-15 05:12:18', '2020-12-15 05:12:18'),
(123, 56, 1, '2020-12-15 05:15:11', '2020-12-15 05:15:11'),
(124, 56, 1, '2020-12-15 05:15:11', '2020-12-15 05:15:11'),
(125, 57, 1, '2020-12-15 05:19:54', '2020-12-15 05:19:54'),
(126, 57, 1, '2020-12-15 05:19:54', '2020-12-15 05:19:54'),
(127, 58, 1, '2020-12-17 00:21:01', '2020-12-17 00:21:01'),
(128, 58, 6, '2020-12-17 00:21:01', '2020-12-17 00:21:01'),
(129, 59, 6, '2020-12-18 06:13:58', '2020-12-18 06:13:58'),
(130, 59, 6, '2020-12-18 06:13:58', '2020-12-18 06:13:58'),
(131, 60, 6, '2020-12-18 06:56:20', '2020-12-18 06:56:20'),
(132, 60, 6, '2020-12-18 06:56:20', '2020-12-18 06:56:20'),
(133, 61, 1, '2020-12-18 06:58:46', '2020-12-18 06:58:46'),
(134, 61, 1, '2020-12-18 06:58:46', '2020-12-18 06:58:46'),
(135, 62, 6, '2020-12-18 07:04:17', '2020-12-18 07:04:17'),
(136, 62, 6, '2020-12-18 07:04:17', '2020-12-18 07:04:17'),
(137, 63, 1, '2020-12-18 07:06:22', '2020-12-18 07:06:22'),
(138, 63, 1, '2020-12-18 07:06:22', '2020-12-18 07:06:22'),
(139, 64, 6, '2020-12-18 07:08:31', '2020-12-18 07:08:31'),
(140, 64, 6, '2020-12-18 07:08:31', '2020-12-18 07:08:31'),
(141, 65, 1, '2020-12-22 06:58:32', '2020-12-22 06:58:32'),
(142, 65, 1, '2020-12-22 06:58:32', '2020-12-22 06:58:32'),
(145, 66, 1, '2021-01-22 09:03:35', '2021-01-22 09:03:35'),
(146, 66, 1, '2021-01-22 09:03:35', '2021-01-22 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `darahs`
--

CREATE TABLE `darahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `darahs`
--

INSERT INTO `darahs` (`id`, `darah`, `created_at`, `updated_at`) VALUES
(1, 'A', '2020-10-19 09:43:38', '2020-10-19 09:43:38'),
(2, 'B', '2020-10-19 09:43:44', '2020-10-19 09:43:44'),
(3, 'AB', '2020-10-19 09:43:51', '2020-10-19 09:43:51'),
(4, 'O', '2020-10-19 09:43:59', '2020-10-19 09:43:59');

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
-- Table structure for table `keterampilans`
--

CREATE TABLE `keterampilans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterampilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keterampilans`
--

INSERT INTO `keterampilans` (`id`, `keterampilan`, `created_at`, `updated_at`) VALUES
(2, 'Memasak', '2020-10-19 06:41:32', '2020-10-19 12:40:06'),
(3, 'Menjahit', '2020-10-19 12:00:40', '2020-10-19 12:00:40'),
(4, 'Hias', '2020-10-19 12:40:24', '2020-10-19 12:40:24'),
(5, 'Dekorasi', '2020-10-19 12:40:32', '2020-10-19 12:40:32'),
(7, 'Bisnis', '2020-12-04 04:14:48', '2020-12-04 04:14:48'),
(8, 'Desain Grafis', '2020-12-04 04:15:05', '2020-12-04 04:15:05'),
(9, 'Make Up', '2020-12-04 04:16:08', '2020-12-04 04:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `kulits`
--

CREATE TABLE `kulits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kulit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kulits`
--

INSERT INTO `kulits` (`id`, `kulit`, `created_at`, `updated_at`) VALUES
(1, 'Putih bersih', '2020-10-19 10:13:43', '2020-10-19 10:13:43'),
(2, 'Kuning Langsat', '2020-10-19 10:14:01', '2020-10-19 12:24:13'),
(3, 'Sawo Matang / Cokelat', '2020-12-04 02:12:32', '2020-12-04 02:12:32'),
(4, 'Hitam', '2020-12-04 02:12:48', '2020-12-04 02:12:48');

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
(4, '2020_10_08_110832_add_field_role_to_users_table', 1),
(5, '2020_10_10_211419_create_detail_users_table', 1),
(6, '2020_10_10_213134_create_keterampilans_table', 1),
(7, '2020_10_10_213254_create_sukus_table', 1),
(8, '2020_10_10_213415_create_pekerjaans_table', 1),
(9, '2020_10_17_161614_create_rambuts_table', 2),
(10, '2020_10_17_161718_create_wajahs_table', 2),
(11, '2020_10_17_161805_create_tinggis_table', 2),
(12, '2020_10_17_161911_create_tubuhs_table', 2),
(13, '2020_10_17_161950_create_organisasis_table', 2),
(14, '2020_10_17_162027_create_pendidikans_table', 2),
(15, '2020_10_17_162108_create_kulits_table', 2),
(16, '2020_10_17_162122_create_darahs_table', 2),
(17, '2020_10_17_162233_create_nikahs_table', 2),
(18, '2020_10_23_162949_create_akhwats_table', 3),
(19, '2020_10_26_021059_delete_column_keterampilan_id_to_akhwats_table', 3),
(20, '2020_10_26_021526_create_akhwat_skills_table', 3),
(21, '2020_10_26_084235_delete_field_keterangan_nikah_at_user_details_table', 4),
(22, '2020_10_26_084421_add_izin_nikah_to_user_details_table', 4),
(23, '2020_10_26_085053_delete_field_status_at_users_table', 5),
(24, '2020_11_28_140002_drop_column_suku_id_to_akhwats_table', 6),
(25, '2020_11_28_141030_create_akhwat_suku_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nikahs`
--

CREATE TABLE `nikahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nikahs`
--

INSERT INTO `nikahs` (`id`, `usia`, `created_at`, `updated_at`) VALUES
(4, 'ideal', '2020-11-07 01:36:41', '2020-11-07 01:36:41'),
(5, 'cukup', '2020-11-07 01:36:49', '2020-11-07 01:36:49'),
(6, 'waspada', '2020-11-07 01:36:56', '2020-11-07 01:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `organisasis`
--

CREATE TABLE `organisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisasis`
--

INSERT INTO `organisasis` (`id`, `organisasi`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Suka Organisasi', '2020-10-19 09:02:15', '2020-10-19 12:26:17'),
(2, 'Ketua Lembaga Dakwah Kampus', '2020-10-19 10:01:39', '2020-10-19 10:01:39'),
(3, 'Anggota Lembaga Dakwah Kampus', '2020-10-19 10:02:54', '2020-10-19 10:02:54'),
(4, 'Pasif', '2020-10-19 10:03:01', '2020-10-19 10:03:01');

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
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 'Perawat', '2020-10-19 10:15:04', '2020-10-19 10:15:04'),
(2, 'Guru', '2020-10-19 12:28:19', '2020-10-19 12:28:19'),
(3, 'Wiraswata', '2020-12-04 02:07:37', '2020-12-04 02:07:37'),
(4, 'Dokter', '2020-12-04 02:10:22', '2020-12-04 02:10:22'),
(5, 'Polwan', '2020-12-04 02:10:32', '2020-12-04 02:10:32'),
(6, 'PNS', '2020-12-04 02:10:52', '2020-12-04 02:10:52'),
(7, 'Mahasiswi', '2020-12-04 05:07:27', '2020-12-04 05:07:27'),
(9, 'Pegawai Swasta', '2020-12-04 05:08:57', '2020-12-04 05:08:57'),
(10, 'Dosen', '2020-12-04 05:09:47', '2020-12-04 05:09:47'),
(11, 'Sipil Honorer', '2020-12-04 05:11:00', '2020-12-04 05:11:00'),
(12, 'Pelajar', '2020-12-04 05:11:49', '2020-12-04 05:11:49'),
(13, 'Pengangguran', '2020-12-04 05:28:55', '2020-12-04 05:28:55'),
(14, 'Promotor', '2020-12-04 19:48:16', '2020-12-04 19:48:16'),
(15, 'Pengusaha', '2020-12-12 00:29:39', '2020-12-12 00:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'SD/MI', '2020-10-19 09:02:56', '2020-10-19 12:27:03'),
(2, 'SLTP/SMP/MTs', '2020-10-19 09:59:28', '2020-12-04 02:10:10'),
(3, 'SLTA/SMA/SMK/MA', '2020-10-19 09:59:48', '2020-12-04 02:10:32'),
(4, 'D3', '2020-10-19 09:59:57', '2020-12-04 02:09:35'),
(5, 'S1', '2020-10-19 10:00:03', '2020-12-04 02:09:44'),
(6, 'S2', '2020-10-19 10:00:09', '2020-12-04 02:09:52'),
(7, 'S3', '2020-12-04 02:10:06', '2020-12-04 02:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `rambuts`
--

CREATE TABLE `rambuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rambut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rambuts`
--

INSERT INTO `rambuts` (`id`, `rambut`, `created_at`, `updated_at`) VALUES
(1, 'Lurus', '2020-10-19 10:15:59', '2020-10-19 10:15:59'),
(2, 'Tebal', '2020-10-19 12:27:18', '2020-10-19 12:27:46'),
(3, 'Keriting Ringan', '2020-12-04 02:11:42', '2020-12-04 02:11:42'),
(4, 'Keribo', '2020-12-04 02:11:51', '2020-12-04 02:11:51'),
(5, 'Panjang', '2020-12-04 02:12:01', '2020-12-04 02:12:01'),
(6, 'Pendek', '2020-12-04 02:12:10', '2020-12-04 02:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `sukus`
--

CREATE TABLE `sukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sukus`
--

INSERT INTO `sukus` (`id`, `suku`, `created_at`, `updated_at`) VALUES
(1, 'Bugis', '2020-10-19 06:49:35', '2020-10-19 12:25:00'),
(2, 'Jawa', '2020-10-19 12:24:39', '2020-10-19 12:24:39'),
(3, 'Sunda', '2020-10-19 12:40:52', '2020-10-19 12:40:52'),
(4, 'Betawi', '2020-10-19 12:40:59', '2020-10-19 12:40:59'),
(5, 'Sasak Lombok', '2020-12-04 02:13:55', '2020-12-04 02:13:55'),
(6, 'Makassar', '2020-12-04 02:14:10', '2020-12-04 02:14:10'),
(7, 'Mandar', '2020-12-04 02:14:27', '2020-12-04 02:14:27'),
(8, 'Toraja', '2020-12-04 02:14:37', '2020-12-04 02:14:37'),
(9, 'Konjo', '2020-12-04 02:14:43', '2020-12-04 02:14:43'),
(10, 'Kajang', '2020-12-04 05:03:00', '2020-12-04 05:03:00'),
(11, 'Bima Mbojo', '2020-12-04 05:04:32', '2020-12-04 05:04:32'),
(12, 'Manado', '2020-12-04 05:56:19', '2020-12-04 05:56:19'),
(13, 'Selayar', '2020-12-04 15:02:30', '2020-12-04 15:02:30'),
(14, 'Gorontalo', '2020-12-04 18:17:02', '2020-12-04 18:17:02'),
(15, 'Ternate', '2020-12-04 18:22:16', '2020-12-04 18:22:16'),
(16, 'melayu', '2021-03-01 19:02:30', '2021-03-01 19:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `tinggis`
--

CREATE TABLE `tinggis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinggis`
--

INSERT INTO `tinggis` (`id`, `tinggi`, `created_at`, `updated_at`) VALUES
(5, 'sedang', '2020-11-07 01:14:03', '2020-11-07 01:14:03'),
(6, 'tinggi', '2020-11-07 01:14:11', '2020-11-07 01:14:11'),
(7, 'Pendek : < 153', '2020-12-09 21:38:55', '2020-12-09 21:38:55'),
(8, 'Pendek : < 153', '2020-12-09 21:39:04', '2020-12-09 21:39:04'),
(9, 'Pendek : 140 - 153', '2020-12-09 21:39:27', '2020-12-09 21:39:27'),
(10, 'pendek', '2020-12-15 02:16:47', '2020-12-15 02:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `tubuhs`
--

CREATE TABLE `tubuhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tubuh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tubuhs`
--

INSERT INTO `tubuhs` (`id`, `tubuh`, `created_at`, `updated_at`) VALUES
(4, 'kurus', '2020-11-07 01:24:58', '2020-11-07 01:24:58'),
(5, 'normal', '2020-11-07 01:25:05', '2020-11-07 01:25:05'),
(6, 'gemuk', '2020-11-07 01:25:11', '2020-11-07 01:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `is_active` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `is_active`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin LP2KS', 'adminlp2ks@gmail.com', NULL, '$2y$10$E5xnkmok1ji43ghdMY.3uOGbZDRq6qLyIwiN7JzwrJ7FtvZ417Un.', 'ADMIN', 1, NULL, NULL, '2020-10-14 01:02:06', '2020-10-14 01:02:06'),
(2, 'User', 'user@mail.com', NULL, '$2y$10$PkjY9mzyIh7CVECa1f9JpO0ItzqMOZn5aHsrCuWP/usnb74v7ftE2', 'USER', 1, '2020-11-04 11:33:53', NULL, '2020-10-14 01:02:06', '2020-11-04 11:33:53'),
(9, 'Lalu Abdurrahman', 'lalurahman@gmail.com', NULL, '$2y$10$E5xnkmok1ji43ghdMY.3uOGbZDRq6qLyIwiN7JzwrJ7FtvZ417Un.', 'USER', 1, NULL, NULL, '2020-10-26 10:19:57', '2020-11-30 00:09:39'),
(10, 'Lalu Abdurrahman', 'lalurahmanms@gmail.com', NULL, '$2y$10$UNWL87mO6AS3FvCx.8qr7uDCWkatSlHmkiD6sI7JEE5ToCgGn2De2', 'USER', 1, NULL, NULL, '2020-10-30 01:31:53', '2020-11-04 11:21:55'),
(11, 'lalu rahman', 'lalu@gmail.com', NULL, '$2y$10$6exKgS0IvgJ5Gg0A9IHCg.LKaGMOt9j0Ku43iTiuJbSQEYXSnEOGG', 'USER', 1, '2020-12-10 13:10:29', NULL, '2020-11-04 08:32:57', '2020-12-10 13:10:29'),
(12, 'Lalu Abdurrahman', 'rahman@gmail.com', NULL, '$2y$10$E0nwk1SLNcPEUqAbEhk/M.jqROyHeyv.yTtuz6Q7BS7hZccDtM.AW', 'USER', 1, '2020-12-10 13:10:23', NULL, '2020-11-07 01:00:05', '2020-12-10 13:10:23'),
(13, 'Muhaeimin', 'muhaeiminmimin@gmail.com', NULL, '$2y$10$oRUBxa/PpvoZEkermbmoWeQIxokXvJCiRodwBJBPmCx08ABT2fAq6', 'USER', 1, NULL, NULL, '2020-12-04 18:45:10', '2020-12-04 18:45:40'),
(14, 'Rahmat', 'rahmat@gmail.com', NULL, '$2y$10$cxRxGtR1ciNt/Zri/BmlButBU.rdlzle4xGa11LFnSf3apzETGx1K', 'USER', 1, NULL, NULL, '2020-12-04 18:56:31', '2020-12-04 21:44:16'),
(15, 'Marino', 'Marino@gmail.com', NULL, '$2y$10$aMfoLNinbamwmfnuZP820.MWbaQXAQlAuAilIJa42C2.uaJakV87O', 'USER', 0, '2020-12-09 18:27:36', NULL, '2020-12-04 21:46:59', '2020-12-09 18:27:36'),
(16, 'Al Amin', 'alamin@gmail.com', NULL, '$2y$10$FP1O0BygTNEDwG5DMoeAye7Ap7GgjY6ynkCUp/iYFw6ReYvzk0j12', 'USER', 0, NULL, NULL, '2020-12-12 00:06:16', '2020-12-12 00:06:16'),
(17, 'Inu', 'inu@gmail.com', NULL, '$2y$10$4OHD4krD88jCh1Tm2Tvdt.SpgfIsbq2kBoJvUc6Gc5lVXD8AGMA2y', 'USER', 0, NULL, NULL, '2020-12-18 06:23:43', '2020-12-18 06:23:43'),
(18, 'Lalu Abdurrahman', 'lalurahman123@gmail.com', NULL, '$2y$10$LgxAqS/YxvRkcfkkcAOnL.dt6HYU7T54RbNtc3jdcu5tTG1rfgj9W', 'USER', 0, NULL, NULL, '2021-01-03 03:00:16', '2021-01-03 03:00:16'),
(19, 'ikhwanul', 'ikhwanul@gmail.com', NULL, '$2y$10$5DTkIut2A8O25Gxa//6ZUO.tOOl.pB7Ytb3oAWXL815zqFuX/V6V.', 'USER', 0, NULL, NULL, '2021-01-22 08:18:06', '2021-01-22 08:18:06'),
(20, 'Ilham', 'ilham@gmail.com', NULL, '$2y$10$tlHw2jYSwCqUDTi51BB/qedxnibljKsGCVYydDPEtb6Oj6H0UniCq', 'USER', 1, NULL, NULL, '2021-01-28 18:36:12', '2021-02-21 10:57:17'),
(21, 'Aan', 'aan@gmail.com', NULL, '$2y$10$CxobA4g31gCpBjNDIpCTCecLlxyFvi71PKLV4Jzz/JiTBiE70poyC', 'USER', 1, NULL, NULL, '2021-02-25 05:17:15', '2021-02-25 05:24:14'),
(22, 'baco', 'baco@gmail.com', NULL, '$2y$10$N/JL3fVsxfwmaQeYWLw6KeElirZex24LKiShszIa..XLKXPoT5KwW', 'USER', 0, NULL, NULL, '2021-02-28 09:48:01', '2021-02-28 09:48:01'),
(23, 'tamrin', 'tamrin@mail.com', NULL, '$2y$10$1DMVPInn0Rih6gyrbdfoee59UNLLdHOByT5xt9BoIZA/Ozqk4kHcm', 'USER', 0, NULL, NULL, '2021-03-28 21:43:47', '2021-03-28 21:43:47'),
(24, 'reza', 'reza@gmail.com', NULL, '$2y$10$zyOKl.joJYdMqK.Dazzv3uMZBjgzMkIltb2CsrecoFeFpmOtS7yQy', 'USER', 1, NULL, NULL, '2021-05-05 21:59:34', '2021-05-05 22:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `biodata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekomendasi_murobbi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `izin_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_sehat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `biodata`, `rekomendasi_murobbi`, `izin_nikah`, `keterangan_sehat`, `created_at`, `updated_at`) VALUES
(4, 9, '1604484863_skema sistem.pdf', '1604483690_Contoh_perjanjian_kerjasama_pembuatan_we.pdf', '1603736397_skema sistem.pdf', '1603736397_skema sistem.pdf', '2020-10-26 10:19:57', '2020-11-04 02:14:23'),
(5, 10, '1604050313_skema sistem.pdf', '1604050313_skema sistem.pdf', '1604050313_skema sistem.pdf', '1604050313_skema sistem.pdf', '2020-10-30 01:31:53', '2020-10-30 01:31:53'),
(6, 11, '1604507577_1604483720_Data Kriteria.docx', '1604507577_1604483720_Data Kriteria.docx', '1604507577_1604483720_Data Kriteria.docx', '1604507577_1604483720_Data Kriteria.docx', '2020-11-04 08:32:58', '2020-11-04 08:32:58'),
(7, 12, '1604739605_AGREEMENT SANTRI PONDOK INFORMATIKA FIX.pdf', '1604739605_AGREEMENT SANTRI PONDOK INFORMATIKA FIX.pdf', '1604739605_AGREEMENT SANTRI PONDOK INFORMATIKA FIX.pdf', '1604739605_AGREEMENT SANTRI PONDOK INFORMATIKA FIX.pdf', '2020-11-07 01:00:05', '2020-11-07 01:00:05'),
(8, 13, '1607132710_BIODATA.pdf', '1615898582_AKTE.pdf', '1607132710_BIODATA.pdf', '1607132710_BIODATA.pdf', '2020-12-04 18:45:10', '2021-03-16 05:43:02'),
(9, 14, '1607133391_BIODATA.pdf', '1607133391_BIODATA.pdf', '1607133391_BIODATA.pdf', '1607133391_BIODATA.pdf', '2020-12-04 18:56:31', '2020-12-04 18:56:31'),
(10, 15, '1607143619_BIODATA.pdf', '1607143619_BIODATA.pdf', '1607143619_BIODATA.pdf', '1607143619_BIODATA.pdf', '2020-12-04 21:46:59', '2020-12-04 21:46:59'),
(11, 16, '1607756776_BIODATA.pdf', '1607756776_BIODATA.pdf', '1607756776_BIODATA.pdf', '1607756776_BIODATA.pdf', '2020-12-12 00:06:16', '2020-12-12 00:06:16'),
(12, 17, '1608297823_BIODATA.pdf', '1608297823_BIODATA.pdf', '1608297823_BIODATA.pdf', '1608297823_BIODATA.pdf', '2020-12-18 06:23:43', '2020-12-18 06:23:43'),
(13, 18, '1609668016_BIODATA.pdf', '1609668016_BIODATA.pdf', '1609668016_BIODATA.pdf', '1609668016_BIODATA.pdf', '2021-01-03 03:00:16', '2021-01-03 03:00:16'),
(14, 19, '1611328686_BIODATA.pdf', '1611328686_BIODATA.pdf', '1611328686_BIODATA.pdf', '1611328686_BIODATA.pdf', '2021-01-22 08:18:06', '2021-01-22 08:18:06'),
(15, 20, '1611884172_BIODATA.pdf', '1611884172_BIODATA.pdf', '1611884172_BIODATA.pdf', '1611884172_BIODATA.pdf', '2021-01-28 18:36:12', '2021-01-28 18:36:12'),
(16, 21, '1614255435_img20210224_13590054.pdf', '1614255435_img20210224_14042299.pdf', '1614255435_img20210224_14055079.pdf', '1614255435_img20210224_14055079.pdf', '2021-02-25 05:17:15', '2021-02-25 05:17:15'),
(17, 22, '1614530881_BIODATA.pdf', '1614530881_BIODATA.pdf', '1614530881_BIODATA.pdf', '1614530881_BIODATA.pdf', '2021-02-28 09:48:01', '2021-02-28 09:48:01'),
(18, 23, '1616993027_1.pengesahan.pdf', '1616993027_2. sampul +.pdf', '1616993027_2. sampul +.pdf', '1616993027_2. sampul +.pdf', '2021-03-28 21:43:47', '2021-03-28 21:43:47'),
(19, 24, '1620277174_IP5306 REG V1.4.pdf', '1620277174_656-1838-1-SM.pdf', '1620277174_927-4327-2-PB.pdf', '1620277174_927-4327-2-PB.pdf', '2021-05-05 21:59:34', '2021-05-05 21:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `wajahs`
--

CREATE TABLE `wajahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wajah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wajahs`
--

INSERT INTO `wajahs` (`id`, `wajah`, `created_at`, `updated_at`) VALUES
(1, 'Bentuk Wajah Hati', '2020-10-19 10:11:03', '2020-10-19 10:11:03'),
(2, 'Bentuk Wajah Persegi', '2020-10-19 10:11:17', '2020-10-19 10:11:17'),
(3, 'Bentuk Wajah Bulat', '2020-10-19 10:11:32', '2020-10-19 10:11:32'),
(4, 'Bentuk Wajah Berlian', '2020-10-19 10:11:47', '2020-10-19 10:11:47'),
(5, 'Bentuk Wajah Oval', '2020-10-19 10:12:02', '2020-10-19 10:12:02'),
(6, 'Bentuk Wajah Persegi Panjang', '2020-10-19 10:12:16', '2020-10-19 10:12:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akhwats`
--
ALTER TABLE `akhwats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akhwats_no_hp_unique` (`no_hp`),
  ADD KEY `akhwats_rambut_id_foreign` (`rambut_id`),
  ADD KEY `akhwats_pekerjaan_id_foreign` (`pekerjaan_id`),
  ADD KEY `akhwats_wajah_id_foreign` (`wajah_id`),
  ADD KEY `akhwats_tinggi_id_foreign` (`tinggi_id`),
  ADD KEY `akhwats_tubuh_id_foreign` (`tubuh_id`),
  ADD KEY `akhwats_organisasi_id_foreign` (`organisasi_id`),
  ADD KEY `akhwats_pendidikan_id_foreign` (`pendidikan_id`),
  ADD KEY `akhwats_kulit_id_foreign` (`kulit_id`),
  ADD KEY `akhwats_darah_id_foreign` (`darah_id`),
  ADD KEY `akhwats_nikah_id_foreign` (`nikah_id`);

--
-- Indexes for table `akhwats_skills`
--
ALTER TABLE `akhwats_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akhwats_skills_akhwat_id_foreign` (`akhwat_id`),
  ADD KEY `akhwats_skills_keterampilan_id_foreign` (`keterampilan_id`);

--
-- Indexes for table `akhwat_suku`
--
ALTER TABLE `akhwat_suku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akhwat_suku_akhwat_id_foreign` (`akhwat_id`),
  ADD KEY `akhwat_suku_suku_id_foreign` (`suku_id`);

--
-- Indexes for table `darahs`
--
ALTER TABLE `darahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterampilans`
--
ALTER TABLE `keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kulits`
--
ALTER TABLE `kulits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nikahs`
--
ALTER TABLE `nikahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasis`
--
ALTER TABLE `organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rambuts`
--
ALTER TABLE `rambuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukus`
--
ALTER TABLE `sukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinggis`
--
ALTER TABLE `tinggis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tubuhs`
--
ALTER TABLE `tubuhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `wajahs`
--
ALTER TABLE `wajahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akhwats`
--
ALTER TABLE `akhwats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `akhwats_skills`
--
ALTER TABLE `akhwats_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `akhwat_suku`
--
ALTER TABLE `akhwat_suku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `darahs`
--
ALTER TABLE `darahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterampilans`
--
ALTER TABLE `keterampilans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kulits`
--
ALTER TABLE `kulits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nikahs`
--
ALTER TABLE `nikahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organisasis`
--
ALTER TABLE `organisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rambuts`
--
ALTER TABLE `rambuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sukus`
--
ALTER TABLE `sukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tinggis`
--
ALTER TABLE `tinggis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tubuhs`
--
ALTER TABLE `tubuhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wajahs`
--
ALTER TABLE `wajahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akhwats`
--
ALTER TABLE `akhwats`
  ADD CONSTRAINT `akhwats_darah_id_foreign` FOREIGN KEY (`darah_id`) REFERENCES `darahs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_kulit_id_foreign` FOREIGN KEY (`kulit_id`) REFERENCES `kulits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_nikah_id_foreign` FOREIGN KEY (`nikah_id`) REFERENCES `nikahs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_organisasi_id_foreign` FOREIGN KEY (`organisasi_id`) REFERENCES `organisasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_pendidikan_id_foreign` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_rambut_id_foreign` FOREIGN KEY (`rambut_id`) REFERENCES `rambuts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_tinggi_id_foreign` FOREIGN KEY (`tinggi_id`) REFERENCES `tinggis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_tubuh_id_foreign` FOREIGN KEY (`tubuh_id`) REFERENCES `tubuhs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_wajah_id_foreign` FOREIGN KEY (`wajah_id`) REFERENCES `wajahs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `akhwats_skills`
--
ALTER TABLE `akhwats_skills`
  ADD CONSTRAINT `akhwats_skills_akhwat_id_foreign` FOREIGN KEY (`akhwat_id`) REFERENCES `akhwats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwats_skills_keterampilan_id_foreign` FOREIGN KEY (`keterampilan_id`) REFERENCES `keterampilans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `akhwat_suku`
--
ALTER TABLE `akhwat_suku`
  ADD CONSTRAINT `akhwat_suku_akhwat_id_foreign` FOREIGN KEY (`akhwat_id`) REFERENCES `akhwats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `akhwat_suku_suku_id_foreign` FOREIGN KEY (`suku_id`) REFERENCES `sukus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
