-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 02:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wame`
--

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_tabel`
--

CREATE TABLE `produk_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `k_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok_m` int(6) NOT NULL,
  `hrg_m` int(11) NOT NULL,
  `stok_l` int(6) NOT NULL,
  `hrg_l` int(11) NOT NULL,
  `stok_xl` int(6) NOT NULL,
  `hrg_xl` int(11) NOT NULL,
  `stok_xxl` int(6) NOT NULL,
  `hrg_xxl` int(11) NOT NULL,
  `upload_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stts` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_tabel`
--

INSERT INTO `produk_tabel` (`id`, `kategori`, `user_id`, `k_produk`, `n_produk`, `deskripsi`, `warna`, `stok_m`, `hrg_m`, `stok_l`, `hrg_l`, `stok_xl`, `hrg_xl`, `stok_xxl`, `hrg_xxl`, `upload_produk`, `stts`, `created_at`, `updated_at`) VALUES
(11, 'kaos_polos_panjang', 1, '178311', 'kaso hitam', '<p>frgyhdrfsxgrfdsg</p>', 'hitam', 6, 6, 6, 6, 6, 6, 6, 6, 'File_Produk/U40SGUb9L35EPAme3SObf89KZO4peBbN2VNOIZKr.jpeg', 'publish', '2021-02-27 00:12:58', '2021-02-27 00:12:58'),
(28, '111', 1, '121', '454', '54154', '55', 55, 5, 5, 5, 5, 5, 5, 5, '5', '5', '2021-03-04 21:49:17', '2021-03-04 21:49:17'),
(29, '111', 1, '121', '454', '54154', '55', 55, 5, 5, 5, 5, 5, 5, 5, '5', '5', '2021-03-04 21:50:14', '2021-03-04 21:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_tranksaksi_tabel`
--

CREATE TABLE `riwayat_tranksaksi_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_m` int(6) NOT NULL,
  `hrg_m` int(11) NOT NULL,
  `stok_l` int(6) NOT NULL,
  `hrg_l` int(11) NOT NULL,
  `stok_xl` int(6) NOT NULL,
  `hrg_xl` int(11) NOT NULL,
  `stok_xxl` int(6) NOT NULL,
  `hrg_xxl` int(11) NOT NULL,
  `jumlah_total` int(10) DEFAULT NULL,
  `nm_pengirim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almt_pengirim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengemasan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dikirim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upld_resi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konfirmasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_tranksaksi_tabel`
--

INSERT INTO `riwayat_tranksaksi_tabel` (`id`, `produk_id`, `user_id`, `invoice`, `k_produk`, `n_produk`, `warna`, `stok_m`, `hrg_m`, `stok_l`, `hrg_l`, `stok_xl`, `hrg_xl`, `stok_xxl`, `hrg_xxl`, `jumlah_total`, `nm_pengirim`, `almt_pengirim`, `pengemasan`, `dikirim`, `upld_resi`, `Ket`, `konfirmasi`, `lunas`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'JKTPLS0012', 'jaket polos jumper', 'Abu Tua', 0, 10000, 2, 20000, 0, 30000, 0, 40000, 40000, 'Andi', NULL, 'ya', 'ya', 'File_Resi/1BTtKpaBx3PPNeGnOgy4tTu75jGHHELlEKyH9AD7.pdf', NULL, 'ya', NULL, '2021-01-26 00:17:00', '2021-01-26 01:35:52'),
(2, 1, 2, NULL, 'JKTPLS0012', 'jaket polos jumper', 'Abu Tua', 0, 10000, 1, 20000, 0, 30000, 1, 40000, 60000, 'jabbar', NULL, 'ya', 'ya', 'File_Resi/pItrHUnphBinlVf6Sdq4GWHQbSzIVoSeyJfv3laN.pdf', NULL, 'ya', NULL, '2021-01-28 07:17:11', '2021-01-28 08:24:50'),
(3, 1, 2, NULL, 'JKTPLS0012', 'jaket polos jumper', 'Abu Tua', 0, 10000, 0, 20000, 0, 30000, 0, 40000, NULL, 'jabbar', NULL, 'tidak', 'tidak', 'File_Resi/OOcbmh9vUjVPTCOhAfxiQCzv8vmbhxWuyISk25LZ.png', NULL, 'tidak', NULL, '2021-02-26 21:44:30', '2021-02-26 21:44:30'),
(4, 1, 2, NULL, 'JKTPLS0012', 'jaket polos jumper', 'Abu Tua', 0, 10000, 0, 20000, 0, 30000, 0, 40000, NULL, 'adi', NULL, 'tidak', 'tidak', 'File_Resi/mUZTD3RdDXteHCs2Uzw0ZEV5rY9CbsGYzJmXZZjN.png', NULL, 'tidak', NULL, '2021-02-26 21:47:01', '2021-02-26 21:47:01');

--
-- Triggers `riwayat_tranksaksi_tabel`
--
DELIMITER $$
CREATE TRIGGER `Stok` AFTER INSERT ON `riwayat_tranksaksi_tabel` FOR EACH ROW BEGIN 
UPDATE produk_tabel SET stok_m=stok_m-NEW.stok_m
WHERE id=NEW.produk_id;

UPDATE produk_tabel SET stok_l=stok_l-NEW.stok_l
WHERE id=NEW.produk_id;

UPDATE produk_tabel SET stok_xl=stok_xl-NEW.stok_xl
WHERE id=NEW.produk_id;

UPDATE produk_tabel SET stok_xxl=stok_xxl-NEW.stok_xxl
WHERE id=NEW.produk_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_tabel`
--

CREATE TABLE `saldo_tabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `saldo_keluar` int(11) NOT NULL,
  `saldo_masuk` int(11) NOT NULL,
  `konfirmasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saldo_tabel`
--

INSERT INTO `saldo_tabel` (`id`, `user_id`, `pesanan_id`, `produk`, `harga`, `qty`, `saldo_keluar`, `saldo_masuk`, `konfirmasi`, `ket`, `created_at`, `updated_at`) VALUES
(1, 2, 0, '0', 0, 0, 0, 50000, '0', '0', '2021-01-26 00:03:24', '2021-01-26 00:03:24'),
(2, 2, 1, 'ID Pesanan : 1, Kode Produk : JKTPLS0012, Nama Produk :  jaket polos jumper, Ukuran', 10000, 0, 40000, 0, 'ya', 'ya', '2021-01-26 01:35:52', '2021-01-26 01:35:52'),
(3, 2, 2, 'ID Pesanan : 2, Kode Produk : JKTPLS0012, Nama Produk :  jaket polos jumper, Ukuran', 10000, 0, 60000, 0, 'ya', 'ya', '2021-01-28 08:24:50', '2021-01-28 08:24:50');

--
-- Triggers `saldo_tabel`
--
DELIMITER $$
CREATE TRIGGER `Tranksaksi` AFTER INSERT ON `saldo_tabel` FOR EACH ROW BEGIN 
UPDATE users SET saldo=saldo-NEW.saldo_keluar
WHERE id=NEW.user_id;

UPDATE users SET saldo=saldo+NEW.saldo_masuk
WHERE id=NEW.user_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tem_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek_an` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` int(11) DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `n_toko`, `email`, `email_verified_at`, `password`, `tem_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `norek`, `norek_an`, `bank`, `saldo`, `ket`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jabbarmuhammad', 'admin', '-', 'jabbarmuhammad20@gmail.com', NULL, '$2y$10$rI.5.buHbQHL7BVPYPZW0.zQJ1haAKDlZAW.mMQPTFu2THzxAcezW', 'Indramayu', '-', '-', '0', '-', '-', '-', NULL, NULL, 'Gru4hKkaIp4eFgfHwkA4q9qWCiXbLxHLKj0ABMrFglE5kdB8YmHacVPHrwFf', NULL, '2021-03-04 22:21:09'),
(2, 'pelanggan2', 'pelanggan', 'pelanggan2', 'pelanggan2@gmail.com', NULL, '$2y$10$D0gI1LHgYafkx2JGF2/V/e2Z/j5Fvflo/XurHGT2v1VcL7tB6wcWW', 'majalengka', '2021-01-27', 'kadipaten', '6283824430157', '-', '-', '-', 140000, '-', '3f03Ts6bYAvcu9SkKD4TpOODF6wurc7LG2gegRdubxf9cFyrZaSWh0bZMfDb', '2021-01-26 00:03:03', '2021-01-26 00:03:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `produk_tabel`
--
ALTER TABLE `produk_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_tranksaksi_tabel`
--
ALTER TABLE `riwayat_tranksaksi_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saldo_tabel`
--
ALTER TABLE `saldo_tabel`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_tabel`
--
ALTER TABLE `produk_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `riwayat_tranksaksi_tabel`
--
ALTER TABLE `riwayat_tranksaksi_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saldo_tabel`
--
ALTER TABLE `saldo_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
