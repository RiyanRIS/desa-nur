-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2022 at 08:18 AM
-- Server version: 5.7.36
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groups_id` int(11) DEFAULT '3',
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `groups_id`, `name`, `email`, `password`, `tanggal`) VALUES
(1, 3, 'Admin Desa Madaprama', 'admin@gmail.com', 'IjEyMyI', '2019-09-16 05:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

DROP TABLE IF EXISTS `jadwal_kegiatan`;
CREATE TABLE IF NOT EXISTS `jadwal_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` text NOT NULL,
  `detail_kegiatan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id`, `nama_kegiatan`, `detail_kegiatan`, `tanggal`) VALUES
(8, 'Libur', 'hsasasa\r\nasa\r\nasa\r\nasa', '2022-12-31'),
(9, 'Ulatah', 'Ultah Nur wahida ', '2022-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `jabatan`) VALUES
(9, 'NurWahida', 'Dompu', 'Staff'),
(10, 'Saodah', '0', 'Staff'),
(11, 'tj', '0123', 'Kepala Desa');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(300) NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `file`, `tanggal`) VALUES
(7, 'laporan', 'QC_Rev.png', '2022-02-09'),
(8, 'wefewf', 'Screenshot_at_2022-01-11_20-12-37.png', '2022-02-02'),
(9, 'Testing', 'pemesan.png', '2022-02-13'),
(10, 'Pengumuman Tahun baru', 'pemilikusaha.png', '2022-02-03'),
(11, 'Ulang Tahun Nur wahida ', 'pemesan1.png', '2022-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

DROP TABLE IF EXISTS `pengunjung`;
CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `cookies` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `dibaca` tinyint(1) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `ip`, `cookies`, `nama`, `email`, `pesan`, `dibaca`, `tanggal`) VALUES
(5, '114.142.169.33', '4ad9962607c73f6e74815f32ac528fdc', 'John Doe', 'vp@johndoe.com', 'Wow its awesome! [removed]alert&#40;&#41;[removed]', 1, '2022-02-12 16:25:53'),
(7, '140.213.214.249', '1730a6a2b69ef2b56d400867426a212f', 'akakom', 'utdi@mail.coom', 'halo min mau tanya kapan liburnya ', 1, '2022-02-13 07:20:42'),
(8, '140.213.214.249', '1730a6a2b69ef2b56d400867426a212f', 'Nurul', 'nurul@mail.com', 'Kapan Bukaknya ', 1, '2022-02-13 10:02:35'),
(9, '36.79.54.222', '4f6dc28199917e78e4a173574ef0ad5e', 'Nunung', '087757308735', 'Okeee', 1, '2022-02-13 10:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `content`, `tanggal`) VALUES
(1, 'icon', 'icon.png', '2019-09-08 16:36:34'),
(2, 'logo', 'logo.svg', '2019-09-08 16:37:10'),
(3, 'title', 'Desa Madaprama', '2019-09-08 16:37:10'),
(4, 'subtitle', 'Desa Madaprama', '2019-09-08 16:37:10'),
(5, 'subtitle_desc', 'Selamat Datang di Website Desa Madaprama', '2019-09-08 16:37:10'),
(8, 'menu_pengumuman', 'Berisi video tutorial untuk menambah wawasan dan kompetensi masyarakat', '2019-09-15 22:56:47'),
(9, 'desc', '<p>Desa Madaprama menawarkan wisata Kolam Renang yang bernama Kolam Renang Madaprama. Wisata ini cocok sekali untuk berlibur dengan keluarga serta kerabat dekat. Disekitar Kolam renang pun ditumbuhi pohon-pohon yang rindang dan spot foto menarik lainnya!</p>\n\n<p> </p>\n', '2019-09-15 22:56:47'),
(11, 'pengumuman', '<p>Websiten Ini </p>\n', '2019-09-15 22:56:47'),
(12, 'email', 'nwileuwaidah@gmail.com', '2019-09-15 23:25:24'),
(13, 'phone', '087757308735', '2019-09-15 23:25:24'),
(14, 'address', 'Jalan sumbawa,  desa madaprama, dusun madalibi, kecamatan Woja', '2019-09-15 23:25:35'),
(15, 'map', 'Desa Madaprama', '2019-09-15 23:25:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
