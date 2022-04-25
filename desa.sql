-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 03:39 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
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
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `groups_id` int DEFAULT '3',
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `groups_id`, `name`, `email`, `password`, `tanggal`) VALUES
(1, 3, 'Admin Desa Madaprama', 'admin@gmail.com', 'IjEyMyI', '2019-09-16 05:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `tugas`) VALUES
(1, 'Kepala Desa', 'Memberi pengarahan kepada perangkat desa'),
(3, 'Sekretaris', 'Surat menyurat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id` int NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `detail_kegiatan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `pegawai` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `jabatan`) VALUES
(9, 'NurWahida', 'Dompu', '3'),
(10, 'Saodah', '0', '1'),
(11, 'tj', '0123', '1'),
(12, 'Pegawai satu', 'Iya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int NOT NULL,
  `judul` varchar(300) NOT NULL,
  `konten` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `konten`, `video`, `file`, `tanggal`) VALUES
(12, 'Pemilihan Presiden dan Wakil Presiden Mahasiswa', 'ini kontennnss', 'https://www.youtube.com/embed/A6XUVjK9W4o', 'stiker.png', '2022-04-16'),
(14, 'Ini Jufulnya', '2022-04-25T02:30:05.367627+00:00 heroku[router]: at=info method=GET path=\"/\" host=whatsapp-md.herokuapp.com request_id=36f6a7dd-c052-4183-91a9-e43ff043e1b6 fwd=\"116.203.129.16\" dyno=web.1 connect=0ms service=1ms status=200 bytes=501 protocol=https\r\n2022-04-25T02:30:22.777195+00:00 app[web.1]: [ PESAN ] Mon Apr 25 2022 02:30:22 GMT+0000 (Coordinated Universal Time) messageContextInfo\r\n2022-04-25T02:30:22.777203+00:00 app[web.1]: => Dari Sindu Probokusumo 6285213063898@s.whatsapp.net\r\n2022-04-25T02:30:22.777204+00:00 app[web.1]: => Di Private Chat 6285213063898@s.whatsapp.net\r\n2022-04-25T02:30:33.349338+00:00 app[web.1]: [ PESAN ] Mon Apr 25 2022 02:30:33 GMT+0000 (Coordinated Universal Time) imageMessage\r\n2022-04-25T02:30:33.349348+00:00 app[web.1]: => Dari Jasmine 62816407191@s.whatsapp.net\r\n2022-04-25T02:30:33.349348+00:00 app[web.1]: => Di Private Chat 62816407191@s.whatsapp.net\r\n2022-04-25T02:30:36.241357+00:00 app[web.1]: [ PESAN ] Mon Apr 25 2022 02:30:36 GMT+0000 (Coordinated Universal Time) https://twitter.com/ndagels/status/1518140319065247744?s=21&t=6FC77E3epcVXoWaxK3yi6w\r\n2022-04-25T02:30:36.241383+00:00 app[web.1]: => Dari Nanda Lubis 62895620678740@s.whatsapp.net\r\n2022-04-25T02:30:36.241384+00:00 app[web.1]: => Di Private Chat 62895620678740@s.whatsapp.net\r\n2022-04-25T02:30:41.222574+00:00 app[web.1]: [ PESAN ] Mon Apr 25 2022 02:30:41 GMT+0000 (Coordinated Universal Time) messageContextInfo\r\n2022-04-25T02:30:41.222583+00:00 app[web.1]: => Dari Nanda Lubis 62895620678740@s.whatsapp.net\r\n2022-04-25T02:30:41.222583+00:00 app[web.1]: => Di Private Chat 62895620678740@s.whatsapp.net', 'https://www.youtube.com/embed/ojNRfGNw18U', '', '2022-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int NOT NULL,
  `ip` varchar(50) NOT NULL,
  `cookies` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `dibaca` tinyint(1) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
