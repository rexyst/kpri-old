-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 02:01 PM
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
-- Database: `kpri_wiyata`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nip` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat_rumah` varchar(200) NOT NULL,
  `kode_pos` mediumint(5) NOT NULL,
  `nomor_hp` bigint(12) NOT NULL,
  `instansi` mediumint(9) NOT NULL,
  `alamat_instansi` varchar(200) NOT NULL,
  `ktp_suami` varchar(300) DEFAULT NULL,
  `ktp_istri` varchar(300) DEFAULT NULL,
  `foto_3x4` varchar(300) NOT NULL,
  `tanggal_registrasi` varchar(10) NOT NULL,
  `foto_profil` varchar(300) DEFAULT 'default.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `level` tinyint(1) NOT NULL DEFAULT 1,
  `nomor_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `alamat_instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES
(0, 'SI KAMPRET', 1, 'admin', 'New Alaynachester', '28/02/2006', '304 Koepp Meadow\r\nNorth Rustybury, CA 59841-7365', 50618, 9, 0, '30683 O\'Conner Plains Suite 616\r\nLake Jackview, CO 99441-8395', '0_KTP_SUAMI.jpg', '0_KTP_ISTRI.jpg', '0_3x4.jpg', '10/05/2019', '0_PROFILE.jpg', 1, 4, 0),
(4, 'Kayla Johns', 1, '12345678', 'West Lilyan', '15/03/1995', '05071 Buddy Lakes\nSouth Elmiraburgh, WY 75490', 87204, 5991, 0, '6223 Jordy Ridges\nSouth Mikaylaberg, WY 58840-3190', '4_KTP_SUAMI.jpg', 'similique', 'praesentium', '02/12/2011', 'et', 1, 3, 478480),
(5, 'Maya Dickinson', 1, 'admin', 'Dustyfurt', '26/05/1985', '430 Klein Locks Apt. 245\nJoanieton, WV 78594-2887', 63058, 6432, 0, '4268 Tania Fields Suite 802\nRueckerberg, IL 94806-6013', 'ea', 'est', 'distinctio', '07/05/1970', 'facere', 1, 3, 69139794),
(17, 'Vernice Reichel', 1, 'admin', 'Hintzport', '12/01/1995', '052 Treutel Terrace Suite 542\nWest Jarvis, FL 85959-6876', 4304, 0, 0, '48380 Toni Mill Suite 570\nEast Tessborough, PA 38846-5220', 'et', 'ratione', 'nihil', '09/04/1970', 'voluptatibus', 2, 1, 8300061),
(23, 'Prof. Guy Bahringer', 1, 'admin', 'West Koby', '28/04/2021', '0516 Callie Camp Apt. 522\nShaniaborough, DC 86785', 20903, 813520100, 0, '60548 Murazik Lake\nHuldaside, MT 93213', 'consequatur', 'veritatis', 'velit', '16/10/1975', 'totam', 1, 2, 777165929),
(59, 'Hailee Bode', 2, 'admin', 'Lake Rettamouth', '17/06/1986', '7516 Cremin Inlet Apt. 579\nNorth Kaylihaven, RI 62553', 97469, 276, 0, '2120 Robel Burg Suite 192\nCreolachester, IA 11328-9789', 'cupiditate', 'in', 'adipisci', '11/05/1997', 'sit', 1, 1, 3062283),
(80, 'Mrs. Giovanna Gulgowski', 1, 'admin', 'Parisianfort', '19/11/1992', '0454 Nyasia Shoal\nAntoniettaburgh, AR 86981', 22495, 699, 0, '1634 Purdy Greens\nMullerfort, TX 30366-9469', 'nihil', 'sit', 'natus', '02/06/1988', 'labore', 1, 1, 322),
(93, 'Giovanny Labadie', 3, 'admin', 'Murazikburgh', '13/10/1991', '12456 Amaya Haven\nLake Arlo, IN 92494-7536', 25007, 26, 0, '108 Jayce Trace Apt. 641\nNadiamouth, OK 38542', 'quis', 'corporis', 'nam', '26/08/2016', 'et', 2, 1, 52362708),
(322, 'Janis Kiehn', 2, 'admin', 'Alyciatown', '23/03/2020', '0143 Hamill Light\nPort Lisandrostad, MA 46425', 91704, 2, 0, '35461 Lebsack Dale Apt. 613\nWatersville, NH 51279-5648', 'adipisci', 'nobis', 'officia', '09/12/2001', 'et', 2, 2, 549382573),
(460, 'Cayla Durgan', 1, 'admin', 'East Brandiland', '16/03/1982', '2985 Braun Locks\nKochfurt, DE 84637', 41143, 41, 0, '68823 Osinski Avenue\nMoniqueborough, IN 73172-6560', 'quia', 'quia', 'laboriosam', '29/07/2012', 'aut', 2, 3, 480386482),
(730, 'Prof. Betty O\'Keefe MD', 2, 'admin', 'Collinsstad', '18/04/2015', '2779 Sipes Spring Suite 797\nRennerfurt, MN 58803', 66861, 348166, 0, '01589 Kutch Mission\nPort Ezraland, AZ 92475', 'aut', 'dolorem', 'voluptas', '26/04/2013', 'quia', 2, 3, 20),
(895, 'Mara Shields', 2, 'admin', 'East Jakebury', '19/07/1981', '73377 Connor Courts Apt. 832\nBridiehaven, MT 49446-0431', 9751, 59995, 0, '668 Christiansen Ford Suite 228\nNew Rex, MN 20728', 'voluptatem', 'eveniet', 'ex', '13/08/1989', 'iure', 1, 2, 816),
(965, 'Dr. Marta Waters I', 3, 'admin', 'Towneshire', '14/02/1974', '00016 Labadie Road Suite 796\nMayramouth, OR 17835-1372', 36038, 3, 0, '9238 Daniela Trafficway Apt. 294\nSibylshire, WA 27180-8181', 'quos', 'accusamus', 'eius', '15/01/2006', 'consequatur', 1, 1, 7759),
(1420, 'Mr. Rodrigo Daniel', 3, 'admin', 'Bergnaumtown', '16/08/1970', '31217 Hahn Isle\nNorth Waldo, NV 70010-8756', 91162, 39, 0, '30384 Joesph Road Apt. 984\nNew Juwan, MA 91083-1290', 'et', 'quaerat', 'quam', '18/09/1983', 'commodi', 2, 1, 9934),
(7714, 'Jeanne Gerhold I', 2, 'admin', 'North Terrellton', '07/03/2013', '85135 Goyette Corners Suite 169\nElzaton, NC 48809', 14812, 3419312, 0, '70064 Kuhn Field Apt. 203\nOberbrunnerburgh, WA 92352-4623', 'sit', 'voluptatem', 'ad', '09/03/1974', 'natus', 1, 2, 49516737),
(50583, 'Miss Burdette Ferry', 2, 'admin', 'Loisport', '06/03/1997', '21795 Abshire Views Suite 011\nNikoburgh, NE 91798-7133', 85748, 36162, 0, '763 Kshlerin Glens\nErdmanland, CT 64616-7744', 'vel', 'dolor', 'odio', '30/04/2001', 'explicabo', 1, 1, 72),
(54321, 'RAMADHAN', 1, 'admin', 'JEMBER', '05/01/1998', 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', 80112, 24242313232, 0, 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', '54321_KTP_SUAMI.jpg', '54321_KTP_ISTRI.jpg', '54321_3x4.jpg', '24/10/2021', '54321_profile.jpg', 2, 4, 777165939),
(294115, 'Prof. Eddie Weissnat', 3, 'admin', 'Jarredmouth', '09/04/2010', '219 Ortiz Causeway Suite 378\nMaybellview, WI 88130', 82774, 50117, 0, '679 Smitham Pine\nNew Ora, HI 96841', 'corporis', 'sed', 'eligendi', '12/07/2010', 'reprehenderit', 2, 1, 318323055),
(379787, 'Margaret Green', 3, 'admin', 'Hagenesfort', '03/10/1979', '699 Kovacek Canyon\nRodgerville, WY 27177-1212', 49416, 6334083, 0, '472 Angie Mountain\nEast Emile, GA 39189-4612', 'soluta', 'velit', 'in', '30/01/2013', 'similique', 2, 2, 264097833),
(505050, 'RAMADHAN', 1, 'admin', 'JEMBER', '05/01/1998', 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', 80112, 778787878787, 0, 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', '505050_KTP_SUAMI.jpg', '505050_KTP_ISTRI.jpg', '505050_3x4.jpg', '24/10/2021', '505050_3x4.jpg', 1, 1, 777165938),
(767676, 'RAMADHAN', 1, 'admin', 'JEMBER', '06/07/7878', 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', 80112, 575656564545, 0, 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', '767676_KTP_SUAMI.jpg', '767676_KTP_ISTRI.jpg', '767676_3x4.jpg', '25/10/2021', '767676_profile.jpg', 1, 1, 777165943),
(909090, 'NUGROHO ARI RAMADHAN', 1, 'admin', 'JEMBER', '05/01/1998', 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', 80112, 989890980909, 0, 'JL KARTIKA GG III DAUH PURI DENPASAR BARAT', '909090_KTP_SUAMI.jpg', '909090_KTP_ISTRI.jpg', '909090_3x4.jpg', '25/10/2021', '909090_3x4.jpg', 1, 1, 777165942),
(119352921, 'Macy Jerde IV', 3, 'admin', 'Strackeview', '10/11/2006', '7092 Trevor Plain\nPort Glendaport, MA 39127-9539', 42356, 222, 0, '90033 Monte Burg Suite 856\nNorth Eleanora, CO 48896', 'porro', 'quis', 'ut', '08/04/1988', 'deleniti', 2, 1, 9266);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` tinyint(4) NOT NULL,
  `bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` mediumint(9) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` varchar(300) NOT NULL,
  `telepon_instansi` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` tinyint(4) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan'),
(3, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_peminjaman`
--

CREATE TABLE `jenis_peminjaman` (
  `id_jenis_peminjaman` tinyint(4) NOT NULL,
  `jenis_peminjaman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_peminjaman`
--

INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES
(1, 'BKE'),
(2, 'USP'),
(3, 'Toko'),
(4, 'Ekstra'),
(5, 'Haji');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` tinyint(1) NOT NULL,
  `jenis_transaksi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_transaksi`
--

INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES
(1, 'Angsuran'),
(2, 'Simpanan Wajib'),
(3, 'Simpanan Pokok'),
(4, 'Simpanan Sukarela'),
(5, 'Tabungan Hari Raya');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` tinyint(4) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Anggota'),
(2, 'Pimpinan'),
(3, 'Pegawai'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` bigint(20) NOT NULL,
  `nip_peminjam` bigint(20) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `jenis_peminjaman` tinyint(4) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `diangsur` smallint(6) NOT NULL,
  `penghasilan` bigint(20) NOT NULL,
  `diangsur_mulai` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_pegawai` bigint(20) DEFAULT NULL,
  `id_pimpinan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES
(2, 460, 2, 1, 15000000, 12, 3000000, 3, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `nomor_rekening` int(11) NOT NULL,
  `saldo_tabungan` bigint(20) DEFAULT NULL,
  `saldo_simpanan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES
(0, 60337263, 81),
(2, 763, 20423645),
(6, 949131, 0),
(9, 5509, 5),
(16, 4029, 6727),
(20, 0, 32245),
(72, 0, 787588323),
(84, 461198, 67),
(322, 55143765, 38),
(816, 322, 2558),
(4648, 0, 56229),
(7759, 91934, 4239509),
(9266, 39457429, 8),
(9934, 72, 9679929),
(213246, 699487248, 5138),
(478480, 9345171, 584),
(587002, 750287, 6556790),
(719599, 390019322, 0),
(3062283, 79644, 0),
(8300061, 13539, 604),
(8479884, 8, 148906342),
(49516737, 0, 789945),
(52362708, 549, 7),
(69139794, 125108, 29129947),
(83289619, 4, 0),
(264097833, 81, 92199498),
(318323055, 6, 653),
(480386482, 83882182, 38297376),
(549382573, 352165, 48076),
(777165929, 114, 15374526),
(777165930, 0, 0),
(777165931, 0, 0),
(777165932, 0, 0),
(777165933, 0, 0),
(777165934, 0, 0),
(777165935, 0, 0),
(777165936, 0, 0),
(777165937, 0, 0),
(777165938, 0, 0),
(777165939, 0, 0),
(777165940, 0, 0),
(777165941, 0, 0),
(777165942, 0, 0),
(777165943, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status_akun`
--

CREATE TABLE `status_akun` (
  `id_status` tinyint(1) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_akun`
--

INSERT INTO `status_akun` (`id_status`, `status`) VALUES
(1, 'AKTIF'),
(2, 'NON-AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `status_angsuran`
--

CREATE TABLE `status_angsuran` (
  `id_status_angsuran` tinyint(4) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_pinjaman`
--

CREATE TABLE `status_pinjaman` (
  `id_status_pinjaman` tinyint(1) NOT NULL,
  `status_pinjaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_pinjaman`
--

INSERT INTO `status_pinjaman` (`id_status_pinjaman`, `status_pinjaman`) VALUES
(1, 'pengajuan'),
(2, 'acc'),
(3, 'ditolak'),
(4, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id_status_transaksi` tinyint(1) NOT NULL,
  `status_transaksi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `jenis_transaksi` tinyint(1) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `biaya_admin` bigint(20) DEFAULT NULL,
  `tanggal_transaksi` varchar(10) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nip_pegawai` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nomor_rekening` (`nomor_rekening`),
  ADD KEY `fkstatusakun` (`status`),
  ADD KEY `fkjeniskelamin` (`jenis_kelamin`),
  ADD KEY `fklevel` (`level`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `jenis_peminjaman`
--
ALTER TABLE `jenis_peminjaman`
  ADD PRIMARY KEY (`id_jenis_peminjaman`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `fk_peminjam` (`nip_peminjam`),
  ADD KEY `fk_pegawai` (`id_pegawai`),
  ADD KEY `fk_pimpinan` (`id_pimpinan`),
  ADD KEY `fk_status` (`status`),
  ADD KEY `fk_bulan` (`bulan`),
  ADD KEY `fk_jenis_pinjaman` (`jenis_peminjaman`),
  ADD KEY `fk_bulan_angsur` (`diangsur_mulai`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`nomor_rekening`);

--
-- Indexes for table `status_akun`
--
ALTER TABLE `status_akun`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_angsuran`
--
ALTER TABLE `status_angsuran`
  ADD PRIMARY KEY (`id_status_angsuran`);

--
-- Indexes for table `status_pinjaman`
--
ALTER TABLE `status_pinjaman`
  ADD PRIMARY KEY (`id_status_pinjaman`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id_status_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fktransaksi` (`nip`),
  ADD KEY `fktransaksi2` (`nip_pegawai`),
  ADD KEY `status` (`status`),
  ADD KEY `fkjenistransaksi` (`jenis_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_peminjaman`
--
ALTER TABLE `jenis_peminjaman`
  MODIFY `id_jenis_peminjaman` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nomor_rekening`) REFERENCES `rekening` (`nomor_rekening`),
  ADD CONSTRAINT `fkjeniskelamin` FOREIGN KEY (`jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `fklevel` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `fkstatusakun` FOREIGN KEY (`status`) REFERENCES `status_akun` (`id_status`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_bulan` FOREIGN KEY (`bulan`) REFERENCES `bulan` (`id_bulan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bulan_angsur` FOREIGN KEY (`diangsur_mulai`) REFERENCES `bulan` (`id_bulan`),
  ADD CONSTRAINT `fk_jenis_pinjaman` FOREIGN KEY (`jenis_peminjaman`) REFERENCES `jenis_peminjaman` (`id_jenis_peminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminjam` FOREIGN KEY (`nip_peminjam`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pimpinan` FOREIGN KEY (`id_pimpinan`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `status_pinjaman` (`id_status_pinjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fkjenistransaksi` FOREIGN KEY (`jenis_transaksi`) REFERENCES `jenis_transaksi` (`id_jenis_transaksi`),
  ADD CONSTRAINT `fktransaksi` FOREIGN KEY (`nip`) REFERENCES `akun` (`nip`),
  ADD CONSTRAINT `fktransaksi2` FOREIGN KEY (`nip_pegawai`) REFERENCES `akun` (`nip`),
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_transaksi` (`id_status_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
