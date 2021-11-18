-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2021 at 08:46 PM
-- Server version: 5.7.36
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jabbarmu_reseller`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tabel`
--

CREATE TABLE `kategori_tabel` (
  `id` int(11) NOT NULL,
  `n_kategori` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_tabel`
--

INSERT INTO `kategori_tabel` (`id`, `n_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Combat 30S', 'Kaos Combat 30S', '2021-03-19 20:06:29', '2021-03-19 20:06:29'),
(2, 'Jaket Zipper Hoddie', 'Jaket Zipper Hoddie', '2021-03-22 20:29:02', '2021-03-22 20:29:02'),
(3, 'Jaket Jumper', 'Jaket Jumper', '2021-03-22 23:16:07', '2021-03-22 23:16:07');

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
  `kategori_id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `k_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `produk_tabel` (`id`, `kategori_id`, `user_id`, `k_produk`, `n_produk`, `deskripsi`, `warna`, `stok_m`, `hrg_m`, `stok_l`, `hrg_l`, `stok_xl`, `hrg_xl`, `stok_xxl`, `hrg_xxl`, `upload_produk`, `stts`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'KP30SABUMISTI', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'ABU MISTY', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/KaosPolosabumisti.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:13:06'),
(3, 1, 1, 'KP30SABUTUA', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'ABU TUA', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(AbuTua)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:06:38'),
(4, 1, 1, 'KP30SBIRUBENHUR', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'BIRUBENHUR', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(BiruBenhur)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:07:30'),
(5, 1, 1, 'KP30SHIJAUARMY', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'HIJAU ARMY', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(HijauArmy)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:08:02'),
(6, 1, 1, 'KP30SHIJAUBOTOL', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'HIJAU BOTOL', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Hijau Botol)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:08:47'),
(7, 1, 1, 'KP30SHIJAUFUJI', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'HIJAU FUJI', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Hijau Fuji)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:09:13'),
(8, 1, 1, 'KP30SHITAM', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'HITAM', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Hitam)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:09:49'),
(9, 1, 1, 'KP30SMARUN', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'MARUN', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Marun)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:10:17'),
(10, 1, 1, 'KP30SMERAH', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'MERAH', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Merah)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:10:42'),
(11, 1, 1, 'KP30SNAVY', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'NAVY', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Navy)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:11:16'),
(12, 1, 1, 'KP30SORANGE', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'ORANGE', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Orange)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:11:50'),
(13, 1, 1, 'KP30SPINKFANTA', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'PINK FANTA', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Pink Panta)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:12:42'),
(14, 1, 1, 'KP30STOSKA', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'TOSKA', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Toska)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:13:56'),
(15, 1, 1, 'KP30STURKISHMUDA', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'TURKISH MUDA', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Turkish Muda)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:14:21'),
(16, 1, 1, 'KP30STURKISH', 'KAOS POLOS 30S', '<p>KAOS POLOS BAHAN COTTON COMBET 30S PRIA WANITA HITAM&nbsp;</p>\r\n\r\n<p><br />\r\nDETAIL PRODUK :<br />\r\nBAHAN l COTTON COMBET 30S</p>\r\n\r\n<p>UKURAN DEWASA :<br />\r\nM&nbsp;&nbsp; &nbsp;: LD (49cm) x PB (69cm)&nbsp;<br />\r\nL&nbsp;&nbsp; &nbsp;: LD (52cm) x PB (72cm)&nbsp;<br />\r\nXL&nbsp;&nbsp; &nbsp;: LD (54cm) x PB (75cm)</p>\r\n\r\n<p>Keterangan : &nbsp;<br />\r\nPB: Panjang Badan&nbsp;<br />\r\nLD: Lebar Dada</p>\r\n\r\n<p>- Semua Produk yang ada di etalase Ready Stock Semua ya. dan dijamin sesuai dengan gambar dan deskripsi Produk ya.<br />\r\n- Produk barang yang kami kirim kepada Anda di jamin 100% bahan Cotton Combed 30S sesuai dengan deskripsi.</p>\r\n\r\n<p>Order pesanan dan pengiriman akan diproses pada jam 08.00 - 14.00 WIB, dari Senin - Jumat.<br />\r\nPemesanan barang di atas jam 14.00 WIB akan kami proses pada keesokan harinya.&nbsp;</p>\r\n\r\n<p>Note : Tolong pastikan segala sesuatunya dengan menghubungi kami di fitur chat, sebelum Anda order ya! Di luar reject (cacat produk), produk yang telah sampai tidak bisa di-retur.</p>\r\n\r\n<p>#kaos #kaospria #kaospolos #jabbarshopid</p>', 'TURKISH', 1000, 26000, 1000, 26000, 1000, 26000, 0, 0, 'File_Produk/Kaos_Polos_30s(Turkish)_600x600.jpeg', 'publish', '2021-03-19 20:48:04', '2021-03-22 21:14:42'),
(17, 2, 1, 'ZPABUMUDA', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'ABU MUDA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (ABU MUDA).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:42:09'),
(18, 2, 1, 'ZPABUTUA', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'ABU TUA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (ABU TUA).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:42:37'),
(19, 2, 1, 'ZPBIRUBENHUR', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'BIRU BENHUR', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (BIRU BENHUR).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:43:03'),
(20, 2, 1, 'ZPCOKLAT', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'COKLAT', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (COKLAT).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:43:31'),
(21, 2, 1, 'ZPHIJAUARMY', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'HIJAU ARMY', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (HIJAU ARMY).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:44:14'),
(22, 2, 1, 'ZPHIJAUBOTOL', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'HIJAU BOTOL', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (HIJAU BOTOL).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:44:47'),
(23, 2, 1, 'ZPABUHITAM', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'HITAM', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (HITAM).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:46:02'),
(24, 2, 1, 'ZPKUNING', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'KUNING', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (KUNING).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:46:30'),
(25, 2, 1, 'ZPMERAHMARUN', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'MERAH MARUN', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (MERAH MARUN).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:47:29'),
(26, 2, 1, 'ZPMOCCA', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'MOCCA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (MOCCA).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:47:59'),
(27, 2, 1, 'ZPNAVY', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'NAVY', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (NAVY).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:48:28'),
(28, 2, 1, 'ZPPINKFANTA', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'PINK FANTA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (PINK FANTA).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:49:00'),
(29, 2, 1, 'ZPPUTIH', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'PUTIH', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (PUTIH).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:49:32'),
(30, 2, 1, 'ZPTOSKA', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'TOSKA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (TOSKA).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:49:59'),
(31, 2, 1, 'ZPTURKISH', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'TURKISH', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (TURKISH).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:50:26'),
(32, 2, 1, 'ZPUNGU', 'JAKET HOODIE ZIPPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>\r\n\r\n<p>#jaket#jaketmurah#jaketpria #jaketwanita #jaketcowok #jaketcewek #jaketbomber #jaketcouple #jaketpolos #jaketkeren #jaketjeans #jaketanak #jaketcewe #jaketbandung #jakethoodie #jaketbola #jaketgrosir #jaketgunung</p>', 'UNGU', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JAKET HOODIE ZIPPER POLOS (UNGU).jpg', 'publish', '2021-03-22 20:58:39', '2021-03-28 18:50:49'),
(33, 3, 1, 'JPABUMUDA', 'JAKET JUMPER POLOS', '<p>&nbsp;</p>\r\n\r\n<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'ABU MUDA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_abuMuda.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:52:57'),
(34, 3, 1, 'JPABUTUA', 'JAKET JUMPER POLOS', '<p>&nbsp;</p>\r\n\r\n<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'ABU TUA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_abuTua.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:53:51'),
(35, 3, 1, 'JPBIRUBENHUR', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'BIRU BENHUR', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_biruBenhur.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:54:22'),
(36, 3, 1, 'JPCOKLAT', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'COKLAT', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_coklat.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:54:57'),
(37, 3, 1, 'JPHIJAUARMY', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'HIJAU ARMY', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_hijauArmy.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:55:51'),
(38, 3, 1, 'JPHIJAUBOTOL', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'HIJAU BOTOL', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_hijauBotol.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:56:13'),
(39, 3, 1, 'JPHITAM', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'HITAM', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_hitam.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:57:06'),
(40, 3, 1, 'JPKUNING', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'KUNING', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_kuning.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:57:34'),
(41, 3, 1, 'JPMARUN', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'MARUN', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_marun.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:57:57'),
(42, 3, 1, 'JPMERAHCERAH', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'MERAH CERAH', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_merahCerah.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:58:20'),
(43, 3, 1, 'JPMOCCA', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'MOCCA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_mocca.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:58:44'),
(44, 3, 1, 'JPNAVY', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'NAVY', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_navy.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:59:09'),
(45, 3, 1, 'JPPINKFANTA', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'PINK FANTA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_pinkFanta.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 18:59:31'),
(46, 3, 1, 'JPPINKMUDA', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'PINK MUDA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_pinkMuda.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 19:00:13'),
(47, 3, 1, 'JPPUTIH', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'PUTIH', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_putih.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 19:00:37'),
(48, 3, 1, 'JPTOSKA', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'TOSKA', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_toska.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 19:00:58'),
(49, 3, 1, 'JPTURKISH', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'TURKISH', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_turkish.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 19:01:28'),
(50, 3, 1, 'JPUNGU', 'JAKET JUMPER POLOS', '<p>DETAIL PRODUK :</p>\r\n\r\n<p>- Bahan : switer fleece</p>\r\n\r\n<p>DETAIL UKURAN :</p>\r\n\r\n<p>- M,L : (panjang 65cm, Lingkar dada 110cm)</p>\r\n\r\n<p>- XL (panjang 70cm, Lingkar dada 112cm)</p>\r\n\r\n<p>- XXL (panjang 70cm, Lingkar dada 114cm)</p>', 'UNGU', 0, 0, 1000, 46000, 1000, 51000, 1000, 56000, 'File_Produk/JumperPolos_ungu.jpg', 'publish', '2021-03-22 23:30:54', '2021-03-28 19:02:05');

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
  `nm_penerima` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `saldo_tabel` (`id`, `user_id`, `pesanan_id`, `nm_penerima`, `produk`, `harga`, `qty`, `saldo_keluar`, `saldo_masuk`, `konfirmasi`, `ket`, `created_at`, `updated_at`) VALUES
(6, 2, 9, 'jajadu', 'ID Pesanan : 9|| Penerima :jajadu || Kode Produk : 178311|| Nama Produk :  kaso hitam,|| Ukuran', 12, 2, 12, 0, 'ya', 'ya', '2021-03-16 21:49:24', '2021-03-16 21:49:24');

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
(1, 'jabbarmuhammad', 'admin', '-', 'jabbarmuhammad20@gmail.com', NULL, '$2y$10$rI.5.buHbQHL7BVPYPZW0.zQJ1haAKDlZAW.mMQPTFu2THzxAcezW', 'Indramayu', '-', '-', '0', '-', '-', '-', NULL, NULL, 'BPX3yu5VveiZjZ3M8FW0j6IATm6ZeetNswKZHIxUNisnSMTSiV0aFE4atMZf', NULL, '2021-03-04 22:21:09'),
(2, 'pelanggan2', 'pelanggan', 'pelanggan2', 'pelanggan2@gmail.com', NULL, '$2y$10$D0gI1LHgYafkx2JGF2/V/e2Z/j5Fvflo/XurHGT2v1VcL7tB6wcWW', 'majalengka', '2021-01-27', 'kadipaten', '6283824430157', '-', '-', '-', 139910, '-', 'XUmybytOkAzkaJZJgmX0FU0sTgThlbooY9JzQ5jF29w2HlHOt2K0NGH6x1Jz', '2021-01-26 00:03:03', '2021-01-26 00:03:03'),
(3, 'user1', 'pelanggan', '-', 'user@gmail.com', NULL, '$2y$10$5CcS31ezTUYB22x8xBDuIemEC.ApWJvDennHzI1dkIXnwR4bUBsIS', 'majalengka', '2021-07-08', 'majalengka', '08999889', '-', '-', '-', 0, '-', 'FtoX6hcECYU3n7e00gG44sCpUeyOAPm5xz1Uv3P64sZRElZ88YsAyGd5ekrR', '2021-07-29 08:14:39', '2021-07-29 08:14:39'),
(4, 'Muhammad Dika Putra Pratama', 'pelanggan', '-', 'ppdika16@gmail.com', NULL, '$2y$10$li4kNbpZUcpZkD21M1jnbOH9PwDHyq2BeMhQScibzZsyo.B3S1V26', '21-05-2004 Majalengka', '2021-08-18', 'Desa Ciborelang Rt1 Rw2 Kecamatan Jatiwangi KAB Majalengka Jawa barat', '083120886986', '-', '-', '-', 0, '-', '67hmlE1AxixbTgCCXZqAK5Na2wzg4sbMJOLCbv9WRxn3kwRTe7sKhKCtJJfV', '2021-08-04 17:25:43', '2021-08-04 17:25:43'),
(5, 'asepandreana', 'pelanggan', '-', 'asepandreana21@gmail.com', NULL, '$2y$10$l1FptS6qrraxCEhx2BW6B.3AxQCCSaRyySPKDR8oUCuY1Pw1xGrgy', 'Majalengka', '2021-08-18', 'Desa baturuyuk', '083862996298', '-', '-', '-', 0, '-', '74RIgWFUQWBApjxeJo5NdQQMdo6VAYl8NxLVNBwHJ3jXbUtACjQv382puWBb', '2021-08-17 18:37:55', '2021-08-17 18:37:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_tabel`
--
ALTER TABLE `kategori_tabel`
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
-- AUTO_INCREMENT for table `kategori_tabel`
--
ALTER TABLE `kategori_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_tabel`
--
ALTER TABLE `produk_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `riwayat_tranksaksi_tabel`
--
ALTER TABLE `riwayat_tranksaksi_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo_tabel`
--
ALTER TABLE `saldo_tabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
