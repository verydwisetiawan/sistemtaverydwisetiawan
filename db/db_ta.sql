-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 06:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` int(11) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `jwb_kinerja` varchar(2) NOT NULL,
  `jwb_kepentingan` varchar(2) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id`, `id_kuesioner`, `id_responden`, `jwb_kinerja`, `jwb_kepentingan`, `tanggal`) VALUES
(1, 1, 1, '4', '4', '2020-07-20'),
(2, 2, 1, '4', '4', '2020-07-20'),
(3, 3, 1, '5', '5', '2020-07-20'),
(4, 4, 1, '5', '4', '2020-07-20'),
(5, 5, 1, '4', '4', '2020-07-20'),
(6, 6, 1, '5', '5', '2020-07-20'),
(7, 7, 1, '5', '5', '2020-07-20'),
(8, 8, 1, '4', '4', '2020-07-20'),
(9, 9, 1, '5', '4', '2020-07-20'),
(10, 10, 1, '4', '5', '2020-07-20'),
(11, 11, 1, '5', '5', '2020-07-20'),
(12, 12, 1, '5', '5', '2020-07-20'),
(13, 13, 1, '4', '5', '2020-07-20'),
(14, 14, 1, '4', '4', '2020-07-20'),
(15, 15, 1, '5', '5', '2020-07-20'),
(16, 16, 1, '4', '5', '2020-07-20'),
(17, 17, 1, '5', '5', '2020-07-20'),
(18, 18, 1, '4', '4', '2020-07-20'),
(19, 1, 2, '4', '5', '2020-07-20'),
(20, 2, 2, '5', '5', '2020-07-20'),
(21, 3, 2, '5', '5', '2020-07-20'),
(22, 4, 2, '4', '4', '2020-07-20'),
(23, 5, 2, '5', '5', '2020-07-20'),
(24, 6, 2, '5', '5', '2020-07-20'),
(25, 7, 2, '4', '4', '2020-07-20'),
(26, 8, 2, '5', '5', '2020-07-20'),
(27, 9, 2, '5', '4', '2020-07-20'),
(28, 10, 2, '4', '5', '2020-07-20'),
(29, 11, 2, '4', '4', '2020-07-20'),
(30, 12, 2, '5', '5', '2020-07-20'),
(31, 13, 2, '5', '5', '2020-07-20'),
(32, 14, 2, '5', '5', '2020-07-20'),
(33, 15, 2, '5', '5', '2020-07-20'),
(34, 16, 2, '5', '5', '2020-07-20'),
(35, 17, 2, '5', '5', '2020-07-20'),
(36, 18, 2, '5', '5', '2020-07-20'),
(37, 1, 3, '3', '3', '2020-07-19'),
(38, 2, 3, '3', '3', '2020-07-19'),
(39, 3, 3, '3', '3', '2020-07-19'),
(40, 4, 3, '3', '3', '2020-07-19'),
(41, 5, 3, '3', '3', '2020-07-19'),
(42, 6, 3, '3', '3', '2020-07-19'),
(43, 7, 3, '3', '3', '2020-07-19'),
(44, 8, 3, '3', '3', '2020-07-19'),
(45, 9, 3, '3', '3', '2020-07-19'),
(46, 10, 3, '3', '3', '2020-07-19'),
(47, 11, 3, '3', '3', '2020-07-19'),
(48, 12, 3, '3', '3', '2020-07-19'),
(49, 13, 3, '3', '3', '2020-07-19'),
(50, 14, 3, '3', '3', '2020-07-19'),
(51, 15, 3, '3', '3', '2020-07-19'),
(52, 16, 3, '3', '3', '2020-07-19'),
(53, 17, 3, '3', '3', '2020-07-19'),
(54, 18, 3, '3', '3', '2020-07-19'),
(55, 1, 4, '3', '3', '2020-07-19'),
(56, 2, 4, '3', '3', '2020-07-19'),
(57, 3, 4, '3', '3', '2020-07-19'),
(58, 4, 4, '3', '3', '2020-07-19'),
(59, 5, 4, '3', '3', '2020-07-19'),
(60, 6, 4, '3', '3', '2020-07-19'),
(61, 7, 4, '3', '3', '2020-07-19'),
(62, 8, 4, '3', '3', '2020-07-19'),
(63, 9, 4, '3', '3', '2020-07-19'),
(64, 10, 4, '3', '3', '2020-07-19'),
(65, 11, 4, '3', '3', '2020-07-19'),
(66, 12, 4, '3', '3', '2020-07-19'),
(67, 13, 4, '3', '3', '2020-07-19'),
(68, 14, 4, '3', '3', '2020-07-19'),
(69, 15, 4, '3', '3', '2020-07-19'),
(70, 16, 4, '3', '3', '2020-07-19'),
(71, 17, 4, '3', '3', '2020-07-19'),
(72, 18, 4, '3', '3', '2020-07-19'),
(73, 1, 5, '3', '3', '2020-08-13'),
(74, 2, 5, '4', '4', '2020-08-13'),
(75, 3, 5, '4', '4', '2020-08-13'),
(76, 4, 5, '4', '4', '2020-08-13'),
(77, 5, 5, '4', '4', '2020-08-13'),
(78, 6, 5, '4', '4', '2020-08-13'),
(79, 7, 5, '4', '4', '2020-08-13'),
(80, 8, 5, '4', '4', '2020-08-13'),
(81, 9, 5, '4', '4', '2020-08-13'),
(82, 10, 5, '4', '4', '2020-08-13'),
(83, 11, 5, '4', '4', '2020-08-13'),
(84, 12, 5, '4', '4', '2020-08-13'),
(85, 13, 5, '4', '4', '2020-08-13'),
(86, 14, 5, '4', '4', '2020-08-13'),
(87, 15, 5, '4', '4', '2020-08-13'),
(88, 16, 5, '4', '3', '2020-08-13'),
(89, 17, 5, '4', '4', '2020-08-13'),
(90, 18, 5, '4', '4', '2020-08-13'),
(91, 1, 6, '4', '4', '2020-08-13'),
(92, 2, 6, '4', '4', '2020-08-13'),
(93, 3, 6, '4', '4', '2020-08-13'),
(94, 4, 6, '4', '4', '2020-08-13'),
(95, 5, 6, '4', '4', '2020-08-13'),
(96, 6, 6, '4', '5', '2020-08-13'),
(97, 7, 6, '4', '4', '2020-08-13'),
(98, 8, 6, '4', '4', '2020-08-13'),
(99, 9, 6, '4', '4', '2020-08-13'),
(100, 10, 6, '4', '4', '2020-08-13'),
(101, 11, 6, '4', '4', '2020-08-13'),
(102, 12, 6, '4', '4', '2020-08-13'),
(103, 13, 6, '4', '4', '2020-08-13'),
(104, 14, 6, '4', '4', '2020-08-13'),
(105, 15, 6, '5', '4', '2020-08-13'),
(106, 16, 6, '4', '4', '2020-08-13'),
(107, 17, 6, '4', '4', '2020-08-13'),
(108, 18, 6, '4', '4', '2020-08-13'),
(109, 1, 7, '4', '4', '2020-08-13'),
(110, 2, 7, '4', '4', '2020-08-13'),
(111, 3, 7, '4', '4', '2020-08-13'),
(112, 4, 7, '4', '4', '2020-08-13'),
(113, 5, 7, '4', '4', '2020-08-13'),
(114, 6, 7, '4', '4', '2020-08-13'),
(115, 7, 7, '4', '4', '2020-08-13'),
(116, 8, 7, '4', '4', '2020-08-13'),
(117, 9, 7, '4', '4', '2020-08-13'),
(118, 10, 7, '4', '4', '2020-08-13'),
(119, 11, 7, '4', '4', '2020-08-13'),
(120, 12, 7, '4', '4', '2020-08-13'),
(121, 13, 7, '4', '4', '2020-08-13'),
(122, 14, 7, '4', '4', '2020-08-13'),
(123, 15, 7, '4', '4', '2020-08-13'),
(124, 16, 7, '4', '4', '2020-08-13'),
(125, 17, 7, '4', '4', '2020-08-13'),
(126, 18, 7, '4', '5', '2020-08-13'),
(127, 1, 8, '4', '3', '2020-08-13'),
(128, 2, 8, '4', '4', '2020-08-13'),
(129, 3, 8, '4', '4', '2020-08-13'),
(130, 4, 8, '4', '4', '2020-08-13'),
(131, 5, 8, '4', '4', '2020-08-13'),
(132, 6, 8, '4', '4', '2020-08-13'),
(133, 7, 8, '4', '4', '2020-08-13'),
(134, 8, 8, '4', '4', '2020-08-13'),
(135, 9, 8, '4', '4', '2020-08-13'),
(136, 10, 8, '4', '4', '2020-08-13'),
(137, 11, 8, '4', '4', '2020-08-13'),
(138, 12, 8, '4', '4', '2020-08-13'),
(139, 13, 8, '4', '4', '2020-08-13'),
(140, 14, 8, '4', '4', '2020-08-13'),
(141, 15, 8, '4', '4', '2020-08-13'),
(142, 16, 8, '4', '4', '2020-08-13'),
(143, 17, 8, '4', '4', '2020-08-13'),
(144, 18, 8, '4', '4', '2020-08-13'),
(145, 1, 9, '4', '4', '2020-08-13'),
(146, 2, 9, '4', '4', '2020-08-13'),
(147, 3, 9, '4', '4', '2020-08-13'),
(148, 4, 9, '4', '4', '2020-08-13'),
(149, 5, 9, '4', '4', '2020-08-13'),
(150, 6, 9, '5', '5', '2020-08-13'),
(151, 7, 9, '5', '5', '2020-08-13'),
(152, 8, 9, '4', '5', '2020-08-13'),
(153, 9, 9, '5', '5', '2020-08-13'),
(154, 10, 9, '5', '5', '2020-08-13'),
(155, 11, 9, '5', '5', '2020-08-13'),
(156, 12, 9, '5', '5', '2020-08-13'),
(157, 13, 9, '5', '5', '2020-08-13'),
(158, 14, 9, '5', '5', '2020-08-13'),
(159, 15, 9, '5', '5', '2020-08-13'),
(160, 16, 9, '5', '5', '2020-08-13'),
(161, 17, 9, '4', '5', '2020-08-13'),
(162, 18, 9, '5', '5', '2020-08-13'),
(163, 1, 10, '4', '4', '2020-08-13'),
(164, 2, 10, '4', '4', '2020-08-13'),
(165, 3, 10, '5', '5', '2020-08-13'),
(166, 4, 10, '4', '5', '2020-08-13'),
(167, 5, 10, '4', '4', '2020-08-13'),
(168, 6, 10, '5', '4', '2020-08-13'),
(169, 7, 10, '4', '4', '2020-08-13'),
(170, 8, 10, '5', '4', '2020-08-13'),
(171, 9, 10, '4', '4', '2020-08-13'),
(172, 10, 10, '4', '4', '2020-08-13'),
(173, 11, 10, '4', '5', '2020-08-13'),
(174, 12, 10, '4', '5', '2020-08-13'),
(175, 13, 10, '4', '5', '2020-08-13'),
(176, 14, 10, '5', '5', '2020-08-13'),
(177, 15, 10, '5', '5', '2020-08-13'),
(178, 16, 10, '5', '5', '2020-08-13'),
(179, 17, 10, '5', '5', '2020-08-13'),
(180, 18, 10, '5', '5', '2020-08-13'),
(181, 1, 11, '4', '4', '2020-08-13'),
(182, 2, 11, '2', '2', '2020-08-13'),
(183, 3, 11, '3', '3', '2020-08-13'),
(184, 4, 11, '3', '4', '2020-08-13'),
(185, 5, 11, '3', '3', '2020-08-13'),
(186, 6, 11, '3', '3', '2020-08-13'),
(187, 7, 11, '3', '4', '2020-08-13'),
(188, 8, 11, '3', '3', '2020-08-13'),
(189, 9, 11, '3', '3', '2020-08-13'),
(190, 10, 11, '3', '3', '2020-08-13'),
(191, 11, 11, '3', '3', '2020-08-13'),
(192, 12, 11, '3', '3', '2020-08-13'),
(193, 13, 11, '4', '3', '2020-08-13'),
(194, 14, 11, '3', '4', '2020-08-13'),
(195, 15, 11, '3', '3', '2020-08-13'),
(196, 16, 11, '3', '3', '2020-08-13'),
(197, 17, 11, '3', '3', '2020-08-13'),
(198, 18, 11, '3', '3', '2020-08-13'),
(199, 1, 12, '4', '4', '2020-08-13'),
(200, 2, 12, '4', '4', '2020-08-13'),
(201, 3, 12, '4', '4', '2020-08-13'),
(202, 4, 12, '4', '4', '2020-08-13'),
(203, 5, 12, '4', '5', '2020-08-13'),
(204, 6, 12, '5', '5', '2020-08-13'),
(205, 7, 12, '4', '5', '2020-08-13'),
(206, 8, 12, '4', '4', '2020-08-13'),
(207, 9, 12, '4', '5', '2020-08-13'),
(208, 10, 12, '4', '4', '2020-08-13'),
(209, 11, 12, '4', '5', '2020-08-13'),
(210, 12, 12, '5', '5', '2020-08-13'),
(211, 13, 12, '4', '5', '2020-08-13'),
(212, 14, 12, '4', '5', '2020-08-13'),
(213, 15, 12, '4', '5', '2020-08-13'),
(214, 16, 12, '5', '4', '2020-08-13'),
(215, 17, 12, '3', '4', '2020-08-13'),
(216, 18, 12, '4', '4', '2020-08-13'),
(217, 1, 13, '5', '4', '2020-08-13'),
(218, 2, 13, '4', '4', '2020-08-13'),
(219, 3, 13, '4', '4', '2020-08-13'),
(220, 4, 13, '4', '4', '2020-08-13'),
(221, 5, 13, '4', '4', '2020-08-13'),
(222, 6, 13, '5', '5', '2020-08-13'),
(223, 7, 13, '4', '5', '2020-08-13'),
(224, 8, 13, '4', '4', '2020-08-13'),
(225, 9, 13, '5', '4', '2020-08-13'),
(226, 10, 13, '4', '4', '2020-08-13'),
(227, 11, 13, '4', '4', '2020-08-13'),
(228, 12, 13, '5', '4', '2020-08-13'),
(229, 13, 13, '4', '5', '2020-08-13'),
(230, 14, 13, '5', '4', '2020-08-13'),
(231, 15, 13, '5', '5', '2020-08-13'),
(232, 16, 13, '5', '1', '2020-08-13'),
(233, 17, 13, '5', '5', '2020-08-13'),
(234, 18, 13, '5', '4', '2020-08-13'),
(235, 1, 14, '4', '4', '2020-08-13'),
(236, 2, 14, '4', '4', '2020-08-13'),
(237, 3, 14, '4', '4', '2020-08-13'),
(238, 4, 14, '4', '4', '2020-08-13'),
(239, 5, 14, '5', '5', '2020-08-13'),
(240, 6, 14, '4', '5', '2020-08-13'),
(241, 7, 14, '5', '4', '2020-08-13'),
(242, 8, 14, '4', '4', '2020-08-13'),
(243, 9, 14, '4', '4', '2020-08-13'),
(244, 10, 14, '4', '4', '2020-08-13'),
(245, 11, 14, '4', '4', '2020-08-13'),
(246, 12, 14, '4', '4', '2020-08-13'),
(247, 13, 14, '4', '4', '2020-08-13'),
(248, 14, 14, '4', '4', '2020-08-13'),
(249, 15, 14, '4', '4', '2020-08-13'),
(250, 16, 14, '4', '4', '2020-08-13'),
(251, 17, 14, '4', '4', '2020-08-13'),
(252, 18, 14, '4', '4', '2020-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_responden`
--

CREATE TABLE `tbl_responden` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `usia` varchar(5) NOT NULL,
  `pendidikan` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `layanan` varchar(225) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_responden`
--

INSERT INTO `tbl_responden` (`id`, `nama`, `jk`, `usia`, `pendidikan`, `pekerjaan`, `layanan`, `tanggal`) VALUES
(1, 'very', 'l', '24', 's1', 'tni', 'r_jalan', '2020-07-20 06:57:33'),
(2, 'pram', 'l', '25', 'sma', 'tni', 'r_jalan', '2020-07-20 06:58:34'),
(3, 'herman', 'l', '24', 'sma', 'tni', 'r_jalan', '2020-07-19 07:01:21'),
(4, 'pipit', 'l', '24', 'sma', 'tni', 'r_jalan', '2020-07-20 07:05:55'),
(5, 'cek', 'l', '21', 'sd', 'pns', 'r_inap', '2020-08-13 05:11:27'),
(6, 'very', 'l', '21', 'sd', 'pns', 'r_inap', '2020-08-13 05:21:33'),
(7, 'Benny', 'l', '21', 's2', 'pns', 'r_inap', '2020-08-13 05:23:41'),
(8, 'fitri', 'l', '21', 's1', 'pns', 'r_inap', '2020-08-13 05:25:57'),
(9, 'pram', 'l', '21', 'sma', 'tni', 'r_jalan', '2020-08-13 05:27:03'),
(10, 'Neli', 'p', '23', 'sma', 'wiraswasta', 'r_inap', '2020-08-13 05:29:10'),
(11, 'Nofra', 'l', '24', 's1', 'pns', 'r_jalan', '2020-08-13 05:31:49'),
(12, 'Putri', 'p', '23', 's1', 'tni', 'r_jalan', '2020-08-13 06:04:04'),
(13, 'uni', 'p', '25', 's1', 'tni', 'r_jalan', '2020-08-13 06:06:46'),
(14, 'Satria', 'l', '25', 's1', 'wiraswasta', 'r_jalan', '2020-08-13 06:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuesioner`
--

CREATE TABLE `tb_kuesioner` (
  `id` int(11) NOT NULL,
  `isi_kuesioner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuesioner`
--

INSERT INTO `tb_kuesioner` (`id`, `isi_kuesioner`) VALUES
(1, 'Persyaratan Pendaftaran pasien rumah sakit tidak berbelit-belit'),
(2, 'Pelayanan Pendaftaran Pasien Sesuai yang di harapkan.'),
(3, 'Prosedur pendaftaran pasien tidak memberatkan pasien'),
(4, 'Standar Pelayanan RSUD sesuai SOP'),
(5, 'Petugas rumah sakit dalam memberikan pelayanan sesuai dengan waktu yang di tentukan'),
(6, 'Ketepatan waktu tidak mempengaruhi kualitas pelayanan'),
(7, 'Biaya pengobatan rumah sakit terjangkau'),
(8, 'Pelayanan yang di dapatkan pasien sesuai dengan biaya pengobatan'),
(9, 'Ketersediaan pelayanan rawat inap/ rawat jalan ?'),
(10, 'Adanya dr. spesialis saat menangani pasien'),
(11, 'Kemampuan dan pengetahuan para dokter menetapkan diagnosa  dengan benar'),
(12, 'Ketelitian rawat jalan/ rawat inap dalam bekerja'),
(13, 'Dokter memberikan perhatian secara khusus kepada setiap pasien'),
(14, 'Perawat memberikan perhatian secara khusus kepada setiap pasien'),
(15, 'Adanya instalasi informasi pengaduan masyarakat di RSUD'),
(16, 'Kemampuan petugas rumah sakit cepat tanggap dalam menyelesaikan keluhan pasien'),
(17, 'Letak rumah sakit yang strategis'),
(18, 'Penataan ruang tunggu yang bersih dan teratur serta fasilitas yang memadai misal (tv, koran dan majalah)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_responden`
--
ALTER TABLE `tbl_responden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `tbl_responden`
--
ALTER TABLE `tbl_responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;