-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 09:18 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `foto`) VALUES
(2, 'Ahmad Zaki', 'ahmadzaki.doz@gmail.com', '$2y$10$RhENu3aV5ozuHpJ117C72uaK.KmPCkCxkbVH8VMaCo1WebnGAhy8O', 'user.png'),
(3, 'Dodi Aditiya', 'dodiaditiya120@gmail.com', '$2y$10$zcpQv06AkQSR7PNPfIXd1eO4mmwuvJfpGSlW65IOqaLwCTu8SBKDa', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kota`, `kecamatan`) VALUES
(1, 1, 'JAGAKARSA'),
(2, 1, 'PASAR MINGGU'),
(3, 1, 'CILANDAK'),
(4, 1, 'PESANGGRAHAN'),
(5, 1, 'KEBAYORAN LAMA'),
(6, 1, 'KEBAYORAN BARU'),
(7, 1, 'MAMPANG PRAPATAN'),
(8, 1, 'PANCORAN'),
(9, 1, 'TEBET'),
(10, 1, 'SETIA BUDI'),
(11, 2, 'PASAR REBO'),
(12, 2, 'CIRACAS'),
(13, 2, 'CIPAYUNG'),
(14, 2, 'MAKASAR'),
(15, 2, 'KRAMAT JATI'),
(16, 2, 'JATINEGARA'),
(17, 2, 'DUREN SAWIT'),
(18, 2, 'CAKUNG'),
(19, 2, 'PULO GADUNG'),
(20, 2, 'MATRAMAN'),
(21, 3, 'TANAH ABANG'),
(22, 3, 'MENTENG'),
(23, 3, 'SENEN'),
(24, 3, 'JOHAR BARU'),
(25, 3, 'CEMPAKA PUTIH'),
(26, 3, 'KEMAYORAN'),
(27, 3, 'SAWAH BESAR'),
(28, 3, 'GAMBIR'),
(29, 4, 'KEMBANGAN'),
(30, 4, 'KEBON JERUK'),
(31, 4, 'PALMERAH'),
(32, 4, 'GROGOL PETAMBURAN'),
(33, 4, 'TAMBORA'),
(34, 4, 'TAMAN SARI'),
(35, 4, 'CENGKARENG'),
(36, 4, 'KALI DERES'),
(37, 5, 'PENJARINGAN'),
(38, 5, 'PADEMANGAN'),
(39, 5, 'TANJUNG PRIOK'),
(40, 5, 'KOJA'),
(41, 5, 'KELAPA GADING'),
(42, 5, 'CILINCING'),
(43, 6, 'KEPULAUAN SERIBU SELATAN'),
(44, 6, 'KEPULAUAN SERIBU UTARA');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_kecamatan`, `kelurahan`) VALUES
(1, 1, 'CIPEDAK'),
(2, 1, 'SRENGSENG SAWAH'),
(3, 1, 'CIGANJUR'),
(4, 1, 'JAGAKARSA'),
(5, 1, 'LENTENG AGUNG'),
(6, 1, 'TANJUNG BARAT'),
(7, 2, 'CILANDAK TIMUR'),
(8, 2, 'RAGUNAN'),
(9, 2, 'PASAR MINGGU'),
(10, 2, 'JATI PADANG'),
(11, 2, 'PEJATEN BARAT'),
(12, 2, 'PEJATEN TIMUR'),
(13, 3, 'LEBAK BULUS'),
(14, 3, 'PONDOK LABU'),
(15, 3, 'CILANDAK BARAT'),
(16, 3, 'GANDARIA SELATAN'),
(17, 3, 'CIPETE SELATAN'),
(18, 4, 'BINTARO'),
(19, 4, 'PESANGGRAHAN'),
(20, 4, 'ALUJAMI'),
(21, 4, 'PETUKANGAN SELATAN'),
(22, 4, 'PETUKANGAN UTARA'),
(23, 5, 'PONDOK PINANG'),
(24, 5, 'KEBAYORAN LAMA SELATAN'),
(25, 5, 'KEBAROYAN LAMA UTARA'),
(26, 5, 'CIPULIR'),
(27, 5, 'GROGOL SELATAN'),
(28, 5, 'GROGOL UTARA'),
(29, 6, 'GANDARIA UTARA'),
(30, 6, 'CIPETE UTARA'),
(31, 6, 'PULO'),
(32, 6, 'PETOGOGAN'),
(33, 6, 'MELAWAI'),
(34, 6, 'KRAMAT PELA'),
(35, 6, 'GUNUNG'),
(36, 6, 'SELONG'),
(37, 6, 'RAWA BARAT'),
(38, 6, 'SENAYAN'),
(39, 7, 'BANGKA'),
(40, 7, 'PELA MAMPANG'),
(41, 7, 'TEGAL PARANG'),
(42, 7, 'MAMPANG PRAPATAN'),
(43, 7, 'KUNINGAN BARAT'),
(44, 8, 'KALIBATA'),
(45, 8, 'RAWAJATI'),
(46, 8, 'DUREN TIGA'),
(47, 8, 'PANCORAN'),
(48, 8, 'PENGADEGAN'),
(49, 8, 'CIKOKO'),
(50, 9, 'MENTENG DALAM'),
(51, 9, 'TEBET BARAT'),
(52, 9, 'TEBET TIMUR'),
(53, 9, 'KEBON BARU'),
(54, 9, 'BUKIT DURI'),
(55, 9, 'MANGGARAI SELATAN'),
(56, 9, 'MANGGARAI'),
(57, 10, 'KARET SEMANGGAI'),
(58, 10, 'KUNINGAN TIMUR'),
(59, 10, 'KARET KUNINGAN'),
(60, 10, 'KARET'),
(61, 10, 'MENTENG ATAS'),
(62, 10, 'PASAR MANGGIS'),
(63, 10, 'GUNTUR'),
(64, 10, 'SETIA BUDI'),
(65, 11, 'PEKAYON'),
(66, 11, 'KALISARI'),
(67, 11, 'BARU'),
(68, 11, 'CIJANTUNG'),
(69, 11, 'GEDONG'),
(70, 12, 'CIBUBUR'),
(71, 12, 'KELAPA DUA WETAN'),
(72, 12, 'CIRACAS'),
(73, 12, 'SUSUKAN'),
(74, 12, 'RAMBUTAN'),
(75, 13, 'PONDOK RANGGON'),
(76, 13, 'CILANGKAP'),
(77, 13, 'MUNJUL'),
(78, 13, 'CIPAYUNG'),
(79, 13, 'SETU'),
(80, 13, 'BAMBU APUS'),
(81, 13, 'CEGER'),
(82, 13, 'LUBANG BUAYA'),
(83, 14, 'PINANG RANTI'),
(84, 14, 'MAKASAR'),
(85, 14, 'KEBON PALA'),
(86, 14, 'HALIM PERDANA KUSUMAH'),
(87, 14, 'CIPINANG MELAYU'),
(88, 15, 'BALE KAMBANG'),
(89, 15, 'BATU AMPAR'),
(90, 15, 'KAMPUNG TENGAH'),
(91, 15, 'DUKUH'),
(92, 15, 'KRAMAT JATI'),
(93, 15, 'CILILITAN'),
(94, 15, 'CAWANG'),
(95, 16, 'BIDARA CINA'),
(96, 16, 'CIPINANG CIPEDAK'),
(97, 16, 'CIPINANG BESAR SELATAN'),
(98, 16, 'CIPINANG MUARA'),
(99, 16, 'CIPINANG BESAR UTARA'),
(100, 16, 'RAWA BUNGA'),
(101, 16, 'BALI MESTER'),
(102, 16, 'KAMPUNG MELAYU'),
(103, 17, 'PONDOK BAMBU'),
(104, 17, 'DUREN SAWIT'),
(105, 17, 'PONDOK KELAPA'),
(106, 17, 'PONDOK KOPI'),
(107, 17, 'MALAKA JAYA'),
(108, 17, 'MALAKA SARI'),
(109, 17, 'KLENDER'),
(110, 18, 'JATINEGARA'),
(111, 18, 'PENGGILINGAN'),
(112, 18, 'PULO GEBANG'),
(113, 18, 'UJUNG MENTENG'),
(114, 18, 'CAKUNG TIMUR'),
(115, 18, 'CAKUNG BARAT'),
(116, 18, 'RAWA TERATE'),
(117, 19, 'PISANGAN TIMUR'),
(118, 19, 'CIPINANG'),
(119, 19, 'JATINEGARA KAUM'),
(120, 19, 'JATI'),
(121, 19, 'RAWAMANGUN'),
(122, 19, 'KAYU PUTIH'),
(123, 19, 'PULO GADUNG'),
(124, 20, 'KEBON MANGGIS'),
(125, 20, 'PAL MERIEM'),
(126, 20, 'PISANGAN BARU'),
(127, 20, 'KAYU MANIS'),
(128, 20, 'UTAN KAYU SELATAN'),
(129, 20, 'UTAN KAY UTARA'),
(130, 21, 'GELORA'),
(131, 21, 'BENDUNGAN HILIR'),
(132, 21, 'KARET TENGSIN'),
(133, 21, 'KEBON MELATI'),
(134, 21, 'PETAMBURAN'),
(135, 21, 'KEBON KACANG'),
(136, 21, 'KAMPUNG BALI'),
(137, 22, 'MENTENG'),
(138, 22, 'PEGANGSAAN'),
(139, 22, 'CIKINI'),
(140, 22, 'GONDANGDIA'),
(141, 22, 'KEBON SIRIH'),
(142, 23, 'KENARI'),
(143, 23, 'PASEBAN'),
(144, 23, 'KRAMAT'),
(145, 23, 'KWITANG'),
(146, 23, 'SENEN'),
(147, 23, 'BUNGUR'),
(148, 24, 'JOHAR BARU'),
(149, 24, 'KAMPUNG RAWA'),
(150, 24, 'TANAH TINGGI'),
(151, 24, 'GALUR'),
(152, 25, 'RAWA SARI'),
(153, 25, 'CEMPAKA PUTIH TIMUR'),
(154, 25, 'CEMPAKA PUTIH BARAT'),
(155, 26, 'HARAPAN MULYA'),
(156, 26, 'CEMPAKA BARU'),
(157, 26, 'SUMUR BATU'),
(158, 26, 'SERDANG'),
(159, 26, 'UTAN PANJNAG'),
(160, 26, 'KEBON KOSONG'),
(161, 26, 'KEMAYORAN'),
(162, 26, 'SUNUNG SAHARI SELATAN'),
(163, 27, 'PASAR BARU'),
(164, 27, 'SUNUNG SAHARI UTARA'),
(165, 27, 'KARTINI'),
(166, 27, 'KARANG ANYAR'),
(167, 27, 'MANGGA DUA SELATAN'),
(168, 28, 'CIDENG'),
(169, 28, 'PETOJO SELATAN'),
(170, 28, 'GAMBIR'),
(171, 28, 'KEBON KELAPA'),
(172, 28, 'PETOJO UTARA'),
(173, 28, 'DURI PULO'),
(174, 29, 'JOGLO'),
(175, 29, 'SRENGSENG'),
(176, 29, 'MERUYA SELATAN'),
(177, 29, 'MERUYA UTARA'),
(178, 29, 'KEMBANGAN SELATAN'),
(179, 29, 'KEMBANGAN UTARA'),
(180, 30, 'SUKABUMI SELATAN'),
(181, 30, 'SUKABUMI UTARA'),
(182, 30, 'KELAPA DUA'),
(183, 30, 'KEBON JERUK'),
(184, 30, 'DURI KEPA'),
(185, 30, 'KEDOYA SELATAN'),
(186, 30, 'KEDOYA UTARA'),
(187, 31, 'PALMERAH'),
(188, 31, 'SLIPI'),
(189, 31, 'KEMANGGISAN'),
(190, 31, 'KOTA BAMBU UTARA'),
(191, 31, 'KOTA BAMBU SELATAN'),
(192, 31, 'JATI PULO'),
(193, 32, 'TANJUNG DUREN UTARA'),
(194, 32, 'TANJUNG DUREN SELATAN'),
(195, 32, 'TOMANG'),
(196, 32, 'GROGOL'),
(197, 32, 'JELAMBAR'),
(198, 32, 'WIJAYA KESUMA'),
(199, 32, 'JELAMBAR BARU'),
(200, 33, 'KALINYAR'),
(201, 33, 'DURI SELATAN'),
(202, 33, 'TANAH SEREAL'),
(203, 33, 'DURI UTARA'),
(204, 33, 'KRENDANG'),
(205, 33, 'JEMBATAN BESI'),
(206, 33, 'ANGKE'),
(207, 33, 'JEMBATAN LIMA'),
(208, 33, 'TAMBORA'),
(209, 33, 'ROA MALAKA'),
(210, 33, 'PEKOJAN'),
(211, 34, 'KRUKUT'),
(212, 34, 'MAPHAR'),
(213, 34, 'TAMAN SARI'),
(214, 34, 'TANGKI'),
(215, 34, 'MANGGA BESAR'),
(216, 34, 'KEAGUNGAN'),
(217, 34, 'GLODOK'),
(218, 34, 'PINANGSIA'),
(219, 35, 'DURI KOSAMBI'),
(220, 35, 'RAWA BUAYA'),
(221, 35, 'KEDAUNG KALI ANGKE'),
(222, 35, 'KAPUK'),
(223, 35, 'CENGKARENG TIMUR'),
(224, 35, 'CENGKARNG BARAT'),
(225, 36, 'SEMANAN'),
(226, 36, 'KALIDERES'),
(227, 36, 'PEGADUNGAN'),
(228, 36, 'TEGAL ALUR'),
(229, 36, 'KAMAL'),
(230, 37, 'KAMAL MUARA'),
(231, 37, 'KAPUK MUARA'),
(232, 37, 'PEJAGALAN'),
(233, 37, 'PENJARINGAN'),
(234, 37, 'PLUIT'),
(235, 38, 'PADEMANGAN BARAT'),
(236, 38, 'PADEMANGAN TIMUR'),
(237, 38, 'ANCOL'),
(238, 39, 'SUNTER AGUNG'),
(239, 39, 'SUNTER JAYA'),
(240, 39, 'PAPANGO'),
(241, 39, 'WARAKAS'),
(242, 39, 'SUNGAI BAMBU'),
(243, 39, 'KEBON BAWANG'),
(244, 40, 'RAWABADAK SELATAN'),
(245, 40, 'TUGU SELATAN'),
(246, 40, 'TUGU UTARA'),
(247, 40, 'LAGOA'),
(248, 40, 'RAWABADAK UTARA'),
(249, 40, 'KOJA'),
(250, 41, 'KELAPA GADING BARAT'),
(251, 41, 'KELAPA GADING TIMUR'),
(252, 41, 'PEGANGSAAN DUA'),
(253, 42, 'SUKA PURA'),
(254, 42, 'ROROTAN'),
(255, 42, 'MARUNDA'),
(256, 42, 'CILINCING'),
(257, 42, 'SEMPER TIMUR'),
(258, 42, 'SEMPER BARAT'),
(259, 43, 'PULAU TIDUNG'),
(260, 43, 'PULAU PARI'),
(261, 43, 'PULAU UNTUNG JAWA'),
(262, 44, 'PULAU PANGGANG'),
(263, 44, 'PULAU KELAPA'),
(264, 44, 'PULAU HARAPAN');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `kota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kota`) VALUES
(1, 'JAKARTA SELATAN'),
(2, 'JAKARTA TIMUR'),
(3, 'JAKARTA PUSAT'),
(4, 'JAKARTA BARAT'),
(5, 'JAKARTA UTARA'),
(6, 'KEPULAUAN SERIBU');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(256) NOT NULL,
  `aktivasi` int(1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nkk` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `pasfoto` varchar(128) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `sekolah` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `thn_lulus` varchar(4) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `akreditasi` varchar(5) NOT NULL,
  `lamaran` varchar(128) NOT NULL,
  `cv` varchar(128) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `ijazah` varchar(128) NOT NULL,
  `kk` varchar(128) NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `kesehatan` varchar(128) NOT NULL,
  `spk` varchar(128) NOT NULL,
  `dok_pendukung1` varchar(128) NOT NULL,
  `dok_pendukung2` varchar(128) NOT NULL,
  `dok_pendukung3` varchar(128) NOT NULL,
  `dok_pendukung4` varchar(128) NOT NULL,
  `status_lamaran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `tgl_daftar`, `password`, `aktivasi`, `email`, `nama`, `nkk`, `nik`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `status`, `telp`, `pasfoto`, `jenjang`, `sekolah`, `jurusan`, `keterangan`, `thn_lulus`, `nilai`, `akreditasi`, `lamaran`, `cv`, `ktp`, `ijazah`, `kk`, `npwp`, `kesehatan`, `spk`, `dok_pendukung1`, `dok_pendukung2`, `dok_pendukung3`, `dok_pendukung4`, `status_lamaran`) VALUES
(19001, '2019-07-15 17:00:00', '$2y$10$ClrJgvvDs/yUVVZOE7yYMeDHD4Z3Zu/CJr6.VLIgvqmWMaNE4d3mm', 1, 'ahmadzaki.doz@gmail.com', 'Ahmad Zaki', '31712345678', '3175021207942010', 'Jl. R1 No. 29', 'DKI Jakarta', 'JAKARTA SELATAN', 'TEBET', 'KEBON BARU', 'Jakarta', '09/10/1998', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'D3', 'Bina Sarana Informatika', 'SISTEM INFORMASI (MANAJEMEN INFORMATIKA)', '', '2019', '4', 'A', 'Contoh_Dokumen.pdf', 'Contoh_Dokumen1.pdf', 'Contoh_Dokumen2.pdf', 'Contoh_Dokumen3.pdf', 'Contoh_Dokumen4.pdf', 'Contoh_Dokumen5.pdf', 'Contoh_Dokumen6.pdf', 'Contoh_Dokumen7.pdf', 'Contoh_Dokumen8.pdf', 'Contoh_Dokumen9.pdf', 'Contoh_Dokumen10.pdf', 'Contoh_Dokumen11.pdf', ''),
(19002, '2019-07-17 17:00:00', '$2y$10$bawUYbh.TfJqd9jv1crgt.plbHNjf7QI02wNlhh.yBFSrZonP.IzS', 1, 'wariswidodo@gmail.com', 'Waris Widodo', '31709092090', '31750212079', 'Jl. R1 No. 30', 'DKI Jakarta', 'JAKARTA TIMUR', 'PULO GADUNG', 'CIPINANG', 'Jakarta', '07/03/2000', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'SLTA', 'SMA Negeri 8 Jakarta', 'ILMU PENGETAHUAN ALAM', '', '2019', '8', 'A', 'Contoh_Dokumen12.pdf', 'Contoh_Dokumen13.pdf', 'Contoh_Dokumen14.pdf', 'Contoh_Dokumen15.pdf', 'Contoh_Dokumen16.pdf', 'Contoh_Dokumen17.pdf', 'Contoh_Dokumen18.pdf', 'Contoh_Dokumen19.pdf', 'Contoh_Dokumen20.pdf', 'Contoh_Dokumen21.pdf', 'Contoh_Dokumen22.pdf', 'Contoh_Dokumen23.pdf', ''),
(19003, '2019-07-17 17:00:00', '$2y$10$OpltP5/95bjN6CHRphrCGeDMt0OAb3gXLazBxM563G7FMvBXbcCnK', 1, 'wawanwahyu@gmail.com', 'Wawan Wahyu', '31709280019', '12345678909', 'Jl. R1 No. 31', 'DKI Jakarta', 'JAKARTA SELATAN', 'CILANDAK', 'PONDOK LABU', 'Jakarta', '07/14/1999', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'SLTA', 'SMA Negeri 8 Jakarta', 'ILMU PENGETAHUAN SOSIAL', '', '2019', '8', 'A', 'Contoh_Dokumen24.pdf', 'Contoh_Dokumen25.pdf', 'Contoh_Dokumen26.pdf', 'Contoh_Dokumen27.pdf', 'Contoh_Dokumen28.pdf', 'Contoh_Dokumen29.pdf', 'Contoh_Dokumen30.pdf', 'Contoh_Dokumen31.pdf', 'Contoh_Dokumen32.pdf', 'Contoh_Dokumen33.pdf', 'Contoh_Dokumen34.pdf', 'Contoh_Dokumen35.pdf', ''),
(19004, '2019-07-17 17:00:00', '$2y$10$rFMB2L8vm8Wr/oq8QebcPecanTlT.uQWfHnmLrGw0IBW.24tCqrQC', 1, 'zaenudin@gmail.com', 'Zaenudin', '31727369292', '12345678909', 'Jl. R1 No. 32', 'DKI Jakarta', 'JAKARTA BARAT', 'PALMERAH', 'KOTA BAMBU SELATAN', 'Lampung', '09/10/1998', 'PRIA', 'ISLAM', 'MENIKAH', '082297016045', 'user.png', 'D3', 'Bina Sarana Informatika', 'MANAJEMEN INFORMATIKA', '', '2015', '3.9', 'B', 'Contoh_Dokumen36.pdf', 'Contoh_Dokumen37.pdf', 'Contoh_Dokumen38.pdf', 'Contoh_Dokumen39.pdf', 'Contoh_Dokumen40.pdf', 'Contoh_Dokumen41.pdf', 'Contoh_Dokumen42.pdf', 'Contoh_Dokumen43.pdf', 'Contoh_Dokumen44.pdf', 'Contoh_Dokumen45.pdf', 'Contoh_Dokumen46.pdf', 'Contoh_Dokumen47.pdf', ''),
(19005, '2019-07-17 17:00:00', '$2y$10$ThblVTWiwVE4gC0LUez9B.CeWCNzbX7eZszAcCyYvhpVP5ytRromy', 1, 'zainuddin@gmail.com', 'Zainuddin', '31727369292', '12345678909', 'Jl. R1 No. 33', 'DKI Jakarta', 'JAKARTA SELATAN', 'PASAR MINGGU', 'JATI PADANG', 'Jakarta', '03/11/1993', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'SLTA', 'SMA Negeri 8 Jakarta', 'ILMU PENGETAHUAN SOSIAL', '', '2015', '7', 'B', 'Contoh_Dokumen48.pdf', 'Contoh_Dokumen49.pdf', 'Contoh_Dokumen50.pdf', 'Contoh_Dokumen51.pdf', 'Contoh_Dokumen52.pdf', 'Contoh_Dokumen53.pdf', 'Contoh_Dokumen54.pdf', 'Contoh_Dokumen55.pdf', 'Contoh_Dokumen56.pdf', 'Contoh_Dokumen57.pdf', 'Contoh_Dokumen58.pdf', 'Contoh_Dokumen59.pdf', ''),
(19006, '2019-08-14 17:00:00', '$2y$10$twzxws3ybkBr.y/AFDlVCOV4MsAZkiwrAoxsOoDCxL6TzjtwrM.xe', 1, 'suryawijaya@gmail.com', 'Haedar Surya Wijaya', '31727369292', '12345678909', 'Jl. R1 No. 34', 'DKI Jakarta', 'JAKARTA PUSAT', 'JOHAR BARU', 'KAMPUNG RAWA', 'Jakarta', '09/10/1998', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'SLTA', 'SMA Negeri 37 Jakarta', 'ILMU PENGETAHUAN ALAM', '', '2019', '8', 'A', 'Contoh_Dokumen60.pdf', 'Contoh_Dokumen61.pdf', 'Contoh_Dokumen62.pdf', 'Contoh_Dokumen63.pdf', 'Contoh_Dokumen64.pdf', 'Contoh_Dokumen65.pdf', 'Contoh_Dokumen66.pdf', 'Contoh_Dokumen67.pdf', 'Contoh_Dokumen68.pdf', 'Contoh_Dokumen69.pdf', 'Contoh_Dokumen70.pdf', 'Contoh_Dokumen71.pdf', ''),
(19007, '2019-08-13 17:00:00', '$2y$10$sasoSDFvKgYypBSuJmY6VOlJVOV.ZRCl5lnhwjHFv/w8m1ScOndxy', 1, 'aldiabdulah@gmail.com', 'Aldi Abdulah', '31727369292', '12345678909', 'Jl. R1 No. 35', 'DKI Jakarta', 'JAKARTA PUSAT', 'MENTENG', 'GONDANGDIA', 'Jakarta', '03/16/1993', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'SLTA', 'SMA Negeri 8 Jakarta', 'ILMU PENGETAHUAN BAHASA', '', '2019', '7', 'C', 'Contoh_Dokumen72.pdf', 'Contoh_Dokumen73.pdf', 'Contoh_Dokumen74.pdf', 'Contoh_Dokumen75.pdf', 'Contoh_Dokumen76.pdf', 'Contoh_Dokumen77.pdf', 'Contoh_Dokumen78.pdf', 'Contoh_Dokumen79.pdf', 'Contoh_Dokumen80.pdf', 'Contoh_Dokumen81.pdf', 'Contoh_Dokumen82.pdf', 'Contoh_Dokumen83.pdf', ''),
(19008, '2019-08-07 17:00:00', '$2y$10$rd2MXxB.JqlFgZHMUBQRkenrrLS2gD9YOmCYqUTc8pFkbSwm8JGt.', 1, 'dedesuryaman@gmail.com', 'Dede suryaman', '31727369292', '12345678909', 'Jl. R1 No. 36', 'DKI Jakarta', 'JAKARTA UTARA', 'PENJARINGAN', 'KAMAL MUARA', 'Jakarta', '09/21/1998', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'S1', 'Universitas indonesia', 'KEBIDANAN', '', '2019', '4', 'A', 'Contoh_Dokumen84.pdf', 'Contoh_Dokumen85.pdf', 'Contoh_Dokumen86.pdf', 'Contoh_Dokumen87.pdf', 'Contoh_Dokumen88.pdf', 'Contoh_Dokumen89.pdf', 'Contoh_Dokumen90.pdf', 'Contoh_Dokumen91.pdf', 'Contoh_Dokumen92.pdf', 'Contoh_Dokumen93.pdf', 'Contoh_Dokumen94.pdf', 'Contoh_Dokumen95.pdf', ''),
(19009, '2019-08-06 17:00:00', '$2y$10$klLph81V1DLId0ksqFtLnOq6RG8EuKHfPoeSiRo2LAMQyJ8BF9LaK', 1, 'sutini@gmail.com', 'Sutini', '31727369292', '12345678909', 'Jl. R1 No. 37', 'DKI Jakarta', 'JAKARTA PUSAT', 'JOHAR BARU', 'KAMPUNG RAWA', 'Jakarta', '07/15/1999', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'D3', 'Bina Sarana Informatika', 'TEKNIK INFORMATIKA', '', '2019', '3.9', 'B', 'Contoh_Dokumen_(1).pdf', 'Contoh_Dokumen_(1)1.pdf', 'Contoh_Dokumen_(1)2.pdf', 'Contoh_Dokumen_(1)3.pdf', 'Contoh_Dokumen_(1)4.pdf', 'Contoh_Dokumen_(1)5.pdf', 'Contoh_Dokumen_(1)6.pdf', 'Contoh_Dokumen_(1)7.pdf', 'Contoh_Dokumen_(1)8.pdf', 'Contoh_Dokumen_(1)9.pdf', 'Contoh_Dokumen_(1)10.pdf', 'Contoh_Dokumen_(1)11.pdf', ''),
(19010, '2019-08-14 17:00:00', '$2y$10$f5hdG57.i6j4BNTEHKIGquZZbz1DZhYusKpgRpobBpc2GkFkTM9Qi', 1, 'imamsantoso@gmail.com', 'Imam Santoso', '31727369292', '12345678909', 'Jl. R1 No. 38', 'DKI Jakarta', 'JAKARTA UTARA', 'KELAPA GADING', 'KELAPA GADING BARAT', 'Jakarta', '07/09/1999', 'PRIA', 'ISLAM', 'LAJANG', '082297016045', 'user.png', 'D3', 'Bina Sarana Informatika', 'KEDOKTERAN HEWAN', '', '2019', '3.9', 'A', 'Contoh_Dokumen_(1)12.pdf', 'Contoh_Dokumen_(1)13.pdf', 'Contoh_Dokumen_(1)14.pdf', 'Contoh_Dokumen_(1)15.pdf', 'Contoh_Dokumen_(1)16.pdf', 'Contoh_Dokumen_(1)17.pdf', 'Contoh_Dokumen_(1)18.pdf', 'Contoh_Dokumen_(1)19.pdf', 'Contoh_Dokumen_(1)20.pdf', 'Contoh_Dokumen_(1)21.pdf', 'Contoh_Dokumen_(1)22.pdf', 'Contoh_Dokumen_(1)23.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(1, 'tes', '<p>tes</p>\r\n', '', '2019-06-21 15:37:11'),
(2, 'Pengumuman Ujian Akhir Semester Genap 2018-2019', '<p>Sehubungan dengan akan dilaksanakannya Ujian Akhir Semester (UAS) Semester Genap Tahun Akademik 2018/2019, maka kepada seluruh civitas akademik Universitas Bina Sarana Informatika (UBSI) memperhatikan :</p>\r\n\r\n<p>1. Kuliah praktikum maupun teori berakhir pada Jumat, 5 Juli 2019.</p>\r\n\r\n<p>2. Pelaksanaan ujian praktikum maupun teori yang dilakukan secara online di ruang kuliah melalui fasilitas Intranet pada laman http://kampus.id maupun Internet pada laman <a href="http://www.bsi.ac.id">http://www.bsi.ac.id</a> dimulai pada tanggal 8 s/d 20 Juli 2019.</p>\r\n\r\n<p>3. Teknis pelaksanaan ujian adalah :</p>\r\n\r\n<ul>\r\n	<li>a. Jadwal pelaksanaan ujian baik yang dilakukan secara offline maupun online (melalui fasilitas Intranet pada laman http://mahasiswa.kampus.id maupun Internet pada laman http://students.bsi.ac.id dimulai pada tanggal 8 s/d 20 Juli 2019.</li>\r\n	<li>b. Jadwal pelaksanaan ujian online melalui Internet pada laman http://students.bsi.ac.id untuk mata kuliah : Pengantar Teknologi Informasi (PTIK), Pendidikan Kewarganegaraan, Bahasa Indonesia, Mobile Commerce, Sociolinguistic, Applied Linguistics, Semantics and Pragmatics, Material Development ujian dilaksanakan pada tanggal 8 s/d 20 Juli 2019 dan mahasiswa dapat bebas memilih jadwal ujian yang diselenggarakan.</li>\r\n	<li>c. Lama waktu pelaksanaan ujian adalah selama 60 menit untuk seluruh mata dengan bobot 2, 3 maupun 4 sks. Khusus bagi mahasiswa Program Studi Administrasi Pekantoran, Bahasa Inggris, Manajemen Pajak dan Akuntansi pelaksanaan ujian teori untuk mata kuliah : English for Business, Interpreting, Social Conversation, Debating, Lab. Akuntansi Dasar, Lab. Akuntansi Keuangan Dasar pelaksanaan ujian mata kuliah tersebut membutuhkan waktu selama 120 menit (2 jam).</li>\r\n</ul>\r\n', '', '2019-06-21 17:56:48'),
(3, 'Hasil Seleksi Calon Anggota PPSU Cipinang 2019', '<p><em>-- isi pengumuman --</em></p>\r\n', '', '2019-07-08 04:37:49'),
(5, 'tes', '', '', '2019-08-15 07:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi_1`
--

CREATE TABLE `seleksi_1` (
  `id` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `status_lamaran` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `alert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi_1`
--

INSERT INTO `seleksi_1` (`id`, `np`, `status_lamaran`, `keterangan`, `alert`) VALUES
(2, 19001, 'LOLOS', '', 'success'),
(3, 19002, 'LOLOS', '', 'success'),
(4, 19003, 'LOLOS', '', 'success'),
(5, 19004, 'LOLOS', '', 'success'),
(6, 19005, 'LOLOS', '', 'success'),
(7, 19006, 'PROSES', '', ''),
(8, 19007, 'PROSES', '', ''),
(9, 19008, 'PROSES', '', ''),
(10, 19009, 'PROSES', '', ''),
(11, 19010, 'PROSES', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi_2`
--

CREATE TABLE `seleksi_2` (
  `id` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `nilai2` varchar(3) NOT NULL,
  `status_lamaran` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `alert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi_2`
--

INSERT INTO `seleksi_2` (`id`, `np`, `nilai2`, `status_lamaran`, `keterangan`, `alert`) VALUES
(5, 19001, '100', 'LANJUT', 'Anda Lolos Tahap 2: Pengalaman Kerja', 'success'),
(6, 19003, '80', 'LANJUT', 'Anda Lolos Tahap 2: Pengalaman Kerja', 'success'),
(7, 19005, '60', 'LANJUT', 'Anda Lolos Tahap 2: Pengalaman Kerja', 'success'),
(8, 19002, '90', 'LANJUT', 'Anda Lolos Tahap 2: Pengalaman Kerja', 'success'),
(9, 19004, '70', 'LANJUT', 'Anda Lolos Tahap 2: Pengalaman Kerja', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi_3`
--

CREATE TABLE `seleksi_3` (
  `id` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `nilai3` varchar(3) NOT NULL,
  `status_lamaran` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `alert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi_3`
--

INSERT INTO `seleksi_3` (`id`, `np`, `nilai3`, `status_lamaran`, `keterangan`, `alert`) VALUES
(3, 19001, '100', 'LANJUT', '', 'success'),
(4, 19002, '90', 'LANJUT', '', 'success'),
(5, 19003, '80', 'LANJUT', '', 'success'),
(6, 19004, '70', 'LANJUT', '', 'success'),
(7, 19005, '', 'GUGUR', '', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi_4`
--

CREATE TABLE `seleksi_4` (
  `id` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `nilai4` varchar(3) NOT NULL,
  `status_lamaran` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `alert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi_4`
--

INSERT INTO `seleksi_4` (`id`, `np`, `nilai4`, `status_lamaran`, `keterangan`, `alert`) VALUES
(1, 19001, '100', 'LANJUT', '', 'success'),
(2, 19002, '90', 'LANJUT', '', 'success'),
(3, 19003, '80', 'LANJUT', '', 'success'),
(4, 19004, '', 'GUGUR', '', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi_5`
--

CREATE TABLE `seleksi_5` (
  `id` int(11) NOT NULL,
  `np` int(11) NOT NULL,
  `nilai5` varchar(3) NOT NULL,
  `status_lamaran` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `alert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi_5`
--

INSERT INTO `seleksi_5` (`id`, `np`, `nilai5`, `status_lamaran`, `keterangan`, `alert`) VALUES
(1, 19001, '100', 'LANJUT', '', 'success'),
(2, 19002, '70', 'LANJUT', '', 'success'),
(3, 19003, '50', 'LANJUT', '', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `tanggal`) VALUES
(3, '::1', '2019-08-17 05:58:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seleksi_1`
--
ALTER TABLE `seleksi_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seleksi_2`
--
ALTER TABLE `seleksi_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seleksi_3`
--
ALTER TABLE `seleksi_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seleksi_4`
--
ALTER TABLE `seleksi_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seleksi_5`
--
ALTER TABLE `seleksi_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19011;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `seleksi_1`
--
ALTER TABLE `seleksi_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `seleksi_2`
--
ALTER TABLE `seleksi_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seleksi_3`
--
ALTER TABLE `seleksi_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seleksi_4`
--
ALTER TABLE `seleksi_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seleksi_5`
--
ALTER TABLE `seleksi_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
