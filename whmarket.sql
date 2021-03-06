-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 11:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `masterbarang`
--

CREATE TABLE `masterbarang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterbarang`
--

INSERT INTO `masterbarang` (`id`, `nama_barang`, `kategori`, `satuan`, `kemasan`, `harga`) VALUES
(3, 'Lampu LED Philips 3 Watt Putih', 'Lampu', 'Pieces (pcs)', 'Kertas', 20000),
(4, 'Sampoerna Mild', 'Rokok', 'Pieces (pcs)', 'Kertas', 3000),
(5, 'Mie sedaap instant goreng', 'Makanan', 'Pieces (pcs)', 'Plastik', 3000),
(6, 'Aqua Gelas Mineral 220ml 48pcs', 'Minuman', 'Dus', 'Kardus', 40000),
(7, 'Buku Tulis Campus B5 50 lembar 11pcs', 'Buku', 'Pak', 'Plastik', 5000),
(8, 'Dove Body Wash Deeply Nourishing refill 850 ml', 'Sabun Mandi', 'pieces (pcs)', 'Plastik', 45000),
(9, 'Sensodyne Sensitif Pasta Gigi 100gr', 'Sikat Gigi', 'Pieces (pcs)', 'Kertas', 20000),
(10, 'Joyko Pulpen Gel Jk100 Warna Hitam', 'Alat Tulis', 'Pieces (pcs)', 'Plastik', 13000),
(11, 'Molto Ultra Pure Softtener Pakaian 720ml', 'Deterjen', 'Pieces (pcs)', 'Plastik', 28000),
(12, 'Glade Aerosol Elegant Vanilla 350ml', 'Pengharum Ruangan', 'Pieces (pcs)', 'Kaleng', 26000),
(13, 'HIT Besar Spray Blossom 600ml', 'Obat Nyamuk', 'Pieces (pcs)', 'Kaleng', 27000),
(14, 'Kapur Barus Swallow Bulat Isi 5bola', 'Kapur Barus', 'Set', 'Plastik', 18000),
(15, 'SOS Cairan Pencuci Piring Refill 750ml', 'Sabun Cuci Piring', 'Pieces (pcs)', 'Plastik', 90000),
(16, 'Head & Shoulders Shampoo Smooth & Silky 400ml', 'Sampo', 'Pieces (pcs)', 'Plastik', 48000),
(17, 'Oral-B Sikat Gigi UltraThin Black Tea 3s [P&G]', 'Sikat Gigi', 'Pieces (pcs)', 'Plastik', 32000),
(18, 'Soyjoy Snack Cemilan Gluten', 'Makanan', 'Pieces (pcs)', 'Plastik', 10000),
(19, 'Coolant Lychee 350ml', 'Minuman', 'Pieces (pcs)', 'Botol', 4000),
(20, 'Marlboro Red Rokok (20batang)', 'Rokok', 'Pak', 'Plastik', 35000),
(21, 'Lays Rumput Laut 68gram', 'Makanan', 'Pieces (pcs)', 'Plastik', 9000),
(22, 'Good Day Moccacino 250ml', 'Minuman', 'Pieces (pcs)', 'Botol', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `masterkategori`
--

CREATE TABLE `masterkategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterkategori`
--

INSERT INTO `masterkategori` (`id`, `nama_kategori`) VALUES
(3, 'Makanan'),
(4, 'Minuman'),
(5, 'Buku'),
(6, 'Sabun Mandi'),
(7, 'Sampo'),
(8, 'Sikat Gigi'),
(9, 'Pasta Gigi'),
(10, 'Alat Tulis'),
(13, 'Deterjen'),
(14, 'Pengharum Ruangan'),
(15, 'Lampu'),
(16, 'Obat Nyamuk'),
(17, 'Kapur Barus'),
(18, 'Rokok'),
(19, 'Sabun Cuci Piring');

-- --------------------------------------------------------

--
-- Table structure for table `masterkemasan`
--

CREATE TABLE `masterkemasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kemasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterkemasan`
--

INSERT INTO `masterkemasan` (`id`, `nama_kemasan`) VALUES
(1, 'Plastik'),
(5, 'Botol'),
(10, 'Kaleng'),
(11, 'Kayu'),
(12, 'Kardus'),
(13, 'Kertas'),
(14, 'Kaca'),
(15, 'Styrofoam');

-- --------------------------------------------------------

--
-- Table structure for table `mastersatuan`
--

CREATE TABLE `mastersatuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mastersatuan`
--

INSERT INTO `mastersatuan` (`id`, `nama_satuan`) VALUES
(1, 'Kilogram (Kg)'),
(3, 'Pieces (pcs)'),
(4, 'Lembar'),
(5, 'Meter'),
(6, 'Unit'),
(7, 'Roll'),
(8, 'Dus'),
(9, 'Pak'),
(10, 'Kaleng'),
(11, 'Gulung'),
(12, 'Set'),
(13, 'Pasang'),
(14, 'Botol'),
(15, 'Bungkus'),
(16, 'Gram (gr)');

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
(4, '2021_03_29_080322_create_masterkemasan_table', 2),
(5, '2021_03_29_142307_create_mastersatuan_table', 3),
(6, '2021_03_29_144306_create_masterkategori_table', 4),
(7, '2021_03_29_144827_create_masterkategori_table', 5),
(8, '2021_03_30_024742_create_masterbarang_table', 6);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masterbarang`
--
ALTER TABLE `masterbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterkategori`
--
ALTER TABLE `masterkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterkemasan`
--
ALTER TABLE `masterkemasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastersatuan`
--
ALTER TABLE `mastersatuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `masterbarang`
--
ALTER TABLE `masterbarang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `masterkategori`
--
ALTER TABLE `masterkategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `masterkemasan`
--
ALTER TABLE `masterkemasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mastersatuan`
--
ALTER TABLE `mastersatuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
