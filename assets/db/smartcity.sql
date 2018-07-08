-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 12:02 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acara`
--

CREATE TABLE `tbl_acara` (
  `id_acara` int(11) NOT NULL,
  `id_taman` int(11) NOT NULL,
  `gambar_acara` varchar(30) NOT NULL,
  `nama_acara` text NOT NULL,
  `detail_acara` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_acara`
--

INSERT INTO `tbl_acara` (`id_acara`, `id_taman`, `gambar_acara`, `nama_acara`, `detail_acara`, `tanggal`) VALUES
(1, 1, 'A11_2015_09279-SK.png', 'acara 1', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', '2018-07-10'),
(2, 1, 'A11_2015_09279-SK.png', 'acara 2', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', '2018-07-11'),
(3, 2, 'A11_2015_09279-SK.png', 'acara 3', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', '2018-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_angkutan`
--

CREATE TABLE `tbl_angkutan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobil_keluaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobil_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_angkutan`
--

INSERT INTO `tbl_angkutan` (`id`, `nik`, `nama`, `mobil_keluaran`, `mobil_type`, `plat_no`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(2, '0', 'd', '2012', 'truk', 'H 5634 A', '', 'ditolak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(100) NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`) VALUES
(19, 'PHP Myadmin', '<p>Many people have difficulty understanding the concept of user management with regards to phpMyAdmin. When a user logs in to phpMyAdmin, that username and password are passed directly to MySQL. phpMyAdmin does no account management on its own (other than allowing one to manipulate the MySQL user account information); all users must be valid MySQL users.gdgbdbdb</p>\r\n', 'A11_2015_09279-SK.png', '2018-06-28 09:42:15'),
(23, 'PHP Myadmin 3', '<p>Many people have difficulty understanding the concept of user management with regards to phpMyAdmin. When a user logs in to phpMyAdmin, that username and password are passed directly to MySQL. phpMyAdmin does no account management on its own (other than allowing one to manipulate the MySQL user account information); all users must be valid MySQL users.gdgbdbdb</p>\r\n', 'A11_2015_09279-SK.png', '2018-06-28 09:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `senin` varchar(15) NOT NULL,
  `selasa` varchar(15) NOT NULL,
  `rabu` varchar(15) NOT NULL,
  `kamis` varchar(15) NOT NULL,
  `jumat` varchar(15) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`senin`, `selasa`, `rabu`, `kamis`, `jumat`, `id_mobil`, `no`, `id_wilayah`) VALUES
('kaca', 'organik', 'plastik', 'elektronik', 'logam', 8, 1, 1),
('kaca', 'organik', 'plastik', 'elektronik', 'logam', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `no` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`no`, `id_berita`, `komentar`, `id_user`, `nama`, `tanggal`) VALUES
(13, 23, 'kodok', 1, 'c', '2018-07-08 15:14:43'),
(14, 23, 'nirubana', 1, 'c', '2018-07-08 15:14:38'),
(15, 23, 'halo', 1, 'c', '2018-07-08 15:14:29'),
(16, 19, 'halo', 0, 'b', '2018-07-08 15:14:08'),
(17, 19, 'sampah organik mana', 0, '', '2018-07-08 20:13:42'),
(18, 23, 'haha', 0, 'b', '2018-07-08 20:14:13'),
(19, 23, 'njajal', 0, '', '2018-07-08 20:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_taman` int(11) NOT NULL,
  `obj_lap` varchar(100) NOT NULL,
  `detail_lapporan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `id_taman`, `obj_lap`, `detail_lapporan`, `tanggal`) VALUES
(1, 2, 'kebersihan', '<p>kebersihan kurang dijaga</p>\r\n', '2018-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masukan`
--

CREATE TABLE `tbl_masukan` (
  `id_masukan` int(11) NOT NULL,
  `bidang` varchar(15) NOT NULL,
  `masukan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id_mobil` int(11) NOT NULL,
  `nopol` varchar(11) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id_mobil`, `nopol`, `id_petugas`) VALUES
(1, 'H 5621 BA', 1),
(2, 'H 5031 BA', 2),
(3, 'H 5921 BA', 5),
(4, 'H 5031 BA', 4),
(5, 'H 5621 BA', 5),
(6, 'H 5031 BA', 6),
(7, 'H 5921 BA', 7),
(9, 'H 5634 A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `bid_pengaduan` varchar(20) NOT NULL,
  `obj_pengaduan` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`id_pengaduan`, `bid_pengaduan`, `obj_pengaduan`, `isi`, `tanggal`) VALUES
(1, 'izin', 'pengaduan 1', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. ', '2018-07-08'),
(4, 'izin', 'truk ngebut', '<p>njajal 1</p>', '2018-07-08'),
(5, 'sampah', 'truk ngebut', '<p>Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. </p>', '2018-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nik`, `nama`, `alamat`, `no_hp`) VALUES
(1, '1234', 'aldino', 'semarang', '08999'),
(2, '1234', 'ivan', 'semarang', '08999'),
(3, '1234', 'putra', 'semarang', '08999'),
(4, '1234', 'ivan putra', 'semarang', '08999'),
(5, '1234', 'aldino ivan', 'semarang', '08999'),
(6, '1234', 'ivan putri', 'semarang', '08999'),
(7, '1234', 'putra putri', 'semarang', '08999'),
(8, '1234', 'ivan putra aldi', 'semarang', '08999'),
(9, '2422', 'atdhita', 'Semarang Tengah', '0822');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruang`
--

CREATE TABLE `tbl_ruang` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruang`
--

INSERT INTO `tbl_ruang` (`nik`, `nama`, `instansi`, `tanggal`, `status`, `ket`, `id`) VALUES
('121', 'aldino', 'udinus', '2018-07-10', 'disetujui', '<p>sip</p>\r\n', 1),
('123456', 'ivan', 'udinus', '2018-07-20', 'menunggu', '', 2),
('890', 'sopo', 'udinus', '2018-07-25', 'menunggu', '', 3),
('122', 'aldino', 'udinus', '2018-07-11', 'disetujui', '<p>oke</p>\r\n\r\n<p>&nbsp;</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('rbv0575ar3o0d757aik18stvf6ssv6l0', '::1', 1531076011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037363031313b757365725f69647c733a313a2232223b757365725f6e616d657c733a313a2262223b757365725f706173737c733a313a2262223b757365725f6e616d617c733a313a2262223b6c6576656c7c733a313a2231223b),
('0g78hbql85k23auqc3697jjnqcflplmp', '::1', 1531076832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037363833323b757365725f69647c733a313a2232223b757365725f6e616d657c733a313a2262223b757365725f706173737c733a313a2262223b757365725f6e616d617c733a313a2262223b6c6576656c7c733a313a2231223b),
('butqnrfuhjs43lcoddl3mqnsokhnkc30', '::1', 1531077152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037373135323b757365725f69647c733a313a2232223b757365725f6e616d657c733a313a2262223b757365725f706173737c733a313a2262223b757365725f6e616d617c733a313a2262223b6c6576656c7c733a313a2231223b),
('294um77olk86gfmb94l4a1mnsfmkcu7i', '::1', 1531078511, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037383531313b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('st6k0h7f4ndm287cnlt0d320tu11b729', '::1', 1531078842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037383834323b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('e4p60atrefbpbj0414a8kgh2kuufljr6', '::1', 1531079867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313037393836373b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('2eosav871u1a8i0cd6n6nrol52ojufb0', '::1', 1531080576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038303537363b),
('3jkg528u3s2bpv47njamkuuk9vv7qaln', '::1', 1531080884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038303838343b757365725f69647c733a313a2232223b757365725f6e616d657c733a313a2262223b757365725f706173737c733a313a2262223b757365725f6e616d617c733a313a2262223b6c6576656c7c733a313a2231223b),
('utlkpkgpaltspkdmddk9s6qvlb318i0o', '::1', 1531081524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038313532343b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('eri9j14tup46ghopcjevb074kic7hb1r', '::1', 1531082263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038323236333b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('5mrmi6nag8mruli0i44oro6e9ge6jetk', '::1', 1531082679, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038323637393b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('8bu1eirnivs4gtleqjc43ebgqd5tg0mp', '::1', 1531083060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038333036303b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('2dbsifcpkmn5rfutd4ke2qcjqo1husmb', '::1', 1531084040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038343034303b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('j91ugkirk1rgg9ajm0au2ita6v8i3905', '::1', 1531084351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038343335313b),
('fe50j2l22b3jtun92hc2p4i5cb154202', '::1', 1531085038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038353033383b757365725f69647c733a313a2232223b757365725f6e616d657c733a313a2262223b757365725f706173737c733a313a2262223b757365725f6e616d617c733a313a2262223b6c6576656c7c733a313a2231223b),
('dpsfmotij0uko423rj3akuioel52npea', '::1', 1531085691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038353639313b757365725f69647c733a313a2231223b757365725f6e616d657c733a313a2261223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a353a2261646d696e223b6c6576656c7c733a313a2230223b),
('gdbmluij93827t24l85hoeph175kcnko', '::1', 1531086435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038363433353b),
('cfo5g8k18b3nf9vmdsc248tqarue9bqa', '::1', 1531086476, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313038363433353b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taman`
--

CREATE TABLE `tbl_taman` (
  `id_taman` int(11) NOT NULL,
  `nama_taman` varchar(100) NOT NULL,
  `gambar_taman` varchar(30) NOT NULL,
  `detail_taman` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taman`
--

INSERT INTO `tbl_taman` (`id_taman`, `nama_taman`, `gambar_taman`, `detail_taman`, `alamat`) VALUES
(1, 'taman 1', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah'),
(2, 'taman 2', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah'),
(3, 'taman 3', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah'),
(4, 'taman 4', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah'),
(5, 'taman 5', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah'),
(6, 'taman 6', 'A11_2015_09279-SK.png', 'Lorem ipsum dolor sit amet, qui malis accommodare te, falli placerat usu cu. Sea te dicit solet deterruisset, eos mollis antiopam ne. Ex indoctum consequat duo, pro ullum vocent ea. Eros instructior no nam, utinam nominavi menandri cum an. Vel brute postea impetus ut, natum vocent pericula te nam, deleniti qualisque reprimique vis te. Labitur eleifend intellegebat ut mei. ', 'semarang tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_user`, `username`, `password`, `level`, `nik`, `hp`, `alamat`) VALUES
(1, 'admin', 'a', 'a', 0, '334', '089', 'semarang'),
(2, 'b', 'b', 'b', 1, '3345', '087', 'semarang'),
(3, 'c', 'c', 'c', 1, '33321', '085', 'semarang'),
(4, 'd', 'd', 'd', 1, '33343', '082', 'semarang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wilayah`
--

CREATE TABLE `tbl_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wilayah`
--

INSERT INTO `tbl_wilayah` (`id_wilayah`, `nama`, `isi`) VALUES
(19, 'wilayah 1', '<ul> 	<li>daerah 1</li> 	<li>daerah 1</li> </ul>'),
(23, 'wilayah 2', '<ul> 	<li>daerah 1</li> 	<li>daerah 1</li> </ul>'),
(26, 'wilayah 3', '<ul>\r\n	<li>daerah 1</li>\r\n	<li>daerah 3</li>\r\n	<li>daerah 5</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `tbl_angkutan`
--
ALTER TABLE `tbl_angkutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_masukan`
--
ALTER TABLE `tbl_masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_taman`
--
ALTER TABLE `tbl_taman`
  ADD PRIMARY KEY (`id_taman`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_angkutan`
--
ALTER TABLE `tbl_angkutan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_masukan`
--
ALTER TABLE `tbl_masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_taman`
--
ALTER TABLE `tbl_taman`
  MODIFY `id_taman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
