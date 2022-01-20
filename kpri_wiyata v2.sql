#
# TABLE STRUCTURE FOR: akun
#

DROP TABLE IF EXISTS `akun`;

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
  `ktp_suami` varchar(300) DEFAULT NULL,
  `ktp_istri` varchar(300) DEFAULT NULL,
  `foto_3x4` varchar(300) NOT NULL,
  `tanggal_registrasi` varchar(10) NOT NULL,
  `foto_profil` varchar(300) DEFAULT 'default.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `level` tinyint(1) NOT NULL DEFAULT 1,
  `nomor_rekening` int(11) NOT NULL,
  PRIMARY KEY (`nip`),
  KEY `nomor_rekening` (`nomor_rekening`),
  KEY `fkstatusakun` (`status`),
  KEY `fkjeniskelamin` (`jenis_kelamin`),
  KEY `fklevel` (`level`),
  KEY `fk_instansi` (`instansi`),
  CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nomor_rekening`) REFERENCES `rekening` (`nomor_rekening`),
  CONSTRAINT `fk_instansi` FOREIGN KEY (`instansi`) REFERENCES `instansi` (`id_instansi`),
  CONSTRAINT `fkjeniskelamin` FOREIGN KEY (`jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`),
  CONSTRAINT `fklevel` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`),
  CONSTRAINT `fkstatusakun` FOREIGN KEY (`status`) REFERENCES `status_akun` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('10021', 'Timothy Hegmann', 1, 'adipisci', 'Mabellestad', '14/08/2017', '96838 Durgan Junction\nAdamschester, PA 92951', 38488, '0', 1, 'id', 'placeat', 'dolor', '13/11/1997', 'ipsam', 2, 3, 81593885);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('90458', 'Miss Maiya Mraz III', 2, 'dolorem', 'Williamsonmouth', '09/01/2021', '4083 Roxanne Port Apt. 937\nEast Braxtonbury, NC 92575-7564', 8511, '678944003', 3, 'sapiente', 'possimus', 'voluptatum', '06/04/2016', 'corporis', 1, 2, 83511215);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('155022', 'Morris Reichel III', 1, 'cumque', 'Fredrickside', '16/04/1970', '6262 Schmitt Islands\nWest Lisandromouth, IN 92672', 80713, '26', 2, 'velit', 'eaque', 'ex', '17/04/2014', 'alias', 1, 1, 2428037);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('177369', 'Lamont Bernhard', 1, 'sed', 'Collinsborough', '15/05/2021', '04373 Luther Springs\nJaylanside, NH 64101', 76490, '50', 7, 'necessitatibus', 'ad', 'delectus', '03/12/1992', 'qui', 1, 2, 17454762);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('181421', 'Derick Ruecker', 2, 'mollitia', 'Funkton', '14/05/2016', '02753 Nader Neck Suite 973\nMaddisonmouth, HI 97208-4551', 15148, '203771', 8, 'tempora', 'quam', 'praesentium', '06/09/1999', 'deleniti', 1, 3, 20807398);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('243280', 'Frances Yost', 2, 'consequuntur', 'Brookland', '21/08/2019', '841 Gutkowski Mission Suite 497\nSouth Vada, CA 97343', 16213, '1', 9, 'voluptas', 'molestias', 'non', '16/01/1975', 'excepturi', 2, 1, 25174189);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('299249', 'Filiberto O\'Reilly', 1, 'sint', 'Lucilechester', '23/11/1981', '584 Feest Mountain Suite 054\nAlbachester, CA 34909', 54808, '0', 7, 'numquam', 'vitae', 'magni', '11/01/1992', 'fugiat', 1, 3, 70354340);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('336115', 'Mrs. Daniella Murphy II', 2, 'esse', 'South Trishaborough', '12/08/2006', '6954 Friesen Ferry\nBartholomeview, AR 79467-0381', 69338, '1', 2, 'accusantium', 'recusandae', 'sunt', '15/01/1976', 'omnis', 1, 3, 38223345);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('372428', 'Nyasia Sawayn', 2, 'ab', 'Annamaeburgh', '11/05/1980', '400 Linnie Island\nLegroshaven, MT 41022-0001', 32242, '576', 4, 'est', 'optio', 'vel', '03/02/1982', 'sit', 2, 1, 60380559);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('378103', 'Alysa Goyette', 2, 'neque', 'East Aurelia', '28/03/2006', '123 Dewitt Trail Apt. 677\nHandstad, NM 53102', 54685, '0', 10, 'consectetur', 'molestiae', 'totam', '08/07/1978', 'architecto', 1, 1, 80501850);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('448818', 'Mrs. Aubrey Dibbert', 1, 'quas', 'North Sandrafurt', '19/02/2017', '056 Lauretta Shoals Suite 823\nGudrunburgh, OH 25561-4850', 98103, '932172', 10, 'quod', 'eveniet', 'beatae', '10/11/1973', 'a', 1, 2, 28648391);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('500142', 'Edmund McDermott Sr.', 2, 'quia', 'West Gastonstad', '23/11/1975', '11727 Mueller Spur Suite 053\nPort Lillymouth, CT 36713', 62307, '1', 5, 'dolores', 'atque', 'laborum', '13/01/2001', 'maxime', 1, 3, 97216462);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('551975', 'Prof. Lacey Lesch DVM', 1, 'rerum', 'Port Andreanne', '03/10/1989', '30839 Blanda Burgs\nFadeltown, NV 63252', 27020, '1', 4, 'et', 'consequatur', 'in', '06/10/1977', 'nulla', 2, 3, 10692078);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('559838', 'Astrid Schmidt', 2, 'ipsa', 'Swiftborough', '06/10/2007', '0049 Donnelly Fords Suite 821\nNew Jaydachester, IN 07301', 251, '0', 5, 'modi', 'nemo', 'quo', '14/09/2017', 'porro', 1, 2, 14786423);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('597130', 'Josephine Cummings', 2, 'nesciunt', 'South Elmerton', '29/02/2004', '946 Alexis Cape\nWest Micah, NC 86056-2473', 73431, '1', 3, 'corrupti', 'inventore', 'eos', '02/05/2001', 'reprehenderit', 2, 2, 56891468);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('661251', 'Aliza Cronin II', 1, 'cum', 'Lake Alethabury', '24/07/1972', '4918 Esteban Villages\nTrevorside, WI 53533', 71086, '2438', 3, 'quae', 'ut', 'exercitationem', '18/03/1992', 'officia', 1, 2, 3969769);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('670134', 'Diana Carroll', 1, 'enim', 'Cronaside', '03/08/1984', '479 Hilpert Squares Apt. 963\nNew Emmanuelle, WY 13110', 7003, '86', 2, 'minus', 'saepe', 'at', '30/01/1996', 'aspernatur', 1, 3, 82052069);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('775795', 'Terrance Turner', 2, 'expedita', 'Jonathonmouth', '01/04/1971', '49717 Wayne Corner Suite 600\nNorth Jimmymouth, UT 96371-7567', 35183, '0', 4, 'voluptatibus', 'odit', 'repellendus', '23/06/2020', 'error', 2, 3, 92109429);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('789964', 'Mr. Lambert Hackett', 1, 'perspiciatis', 'Heavenborough', '08/11/1986', '0040 Rowe Junctions\nLake Jannie, MT 32981-2338', 20398, '0', 9, 'assumenda', 'doloremque', 'natus', '29/09/2019', 'asperiores', 1, 2, 80312439);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('848681', 'Leopoldo Keeling', 2, 'dignissimos', 'Hauckside', '01/02/2003', '9992 Julius Highway\nMohrburgh, GA 35273-3010', 12953, '766', 6, 'libero', 'provident', 'veniam', '22/07/2005', 'aut', 2, 3, 64404371);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('901879', 'Roslyn Hodkiewicz', 1, 'quaerat', 'Fayburgh', '27/06/1973', '389 Witting Valley\nJayneside, PA 74881-8925', 53046, '272', 1, 'cupiditate', 'iusto', 'voluptate', '14/11/1987', 'voluptatem', 2, 1, 1373301);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('921405', 'Morton Upton II', 2, 'debitis', 'East Lavonneburgh', '06/01/2022', '9662 Cummings Meadow\nPort Kaseymouth, UT 30975-0431', 91428, '30', 6, 'repudiandae', 'pariatur', 'eligendi', '18/03/1984', 'autem', 2, 1, 17328594);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('959807', 'Alberto Bechtelar', 2, 'nobis', 'Ilianaland', '21/01/2008', '54080 Kane Burg\nPaucekmouth, KY 61403-4250', 67241, '0', 8, 'dolore', 'temporibus', 'amet', '28/09/2019', 'nam', 2, 2, 72380399);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('981115', 'Dr. Emmalee McLaughlin IV', 2, 'quis', 'Leonardhaven', '23/10/1999', '4865 Simonis Courts Apt. 316\nJudgeton, RI 88293', 64046, '782840', 1, 'nisi', 'explicabo', 'distinctio', '08/09/1979', 'hic', 2, 1, 33272119);
INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) VALUES ('989359', 'Ernie Kling', 2, 'similique', 'New Rosetta', '03/03/1994', '0860 Wolf Gateway Apt. 405\nRaheembury, CO 03339-3076', 13611, '67', 5, 'ea', 'deserunt', 'veritatis', '16/02/1993', 'itaque', 2, 2, 62137492);


#
# TABLE STRUCTURE FOR: bulan
#

DROP TABLE IF EXISTS `bulan`;

CREATE TABLE `bulan` (
  `id_bulan` tinyint(4) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (1, 'Januari');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (2, 'Februari');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (3, 'Maret');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (4, 'April');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (5, 'Mei');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (6, 'Juni');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (7, 'Juli');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (8, 'Agustus');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (9, 'September');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (10, 'Oktober');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (11, 'November');
INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES (12, 'Desember');


#
# TABLE STRUCTURE FOR: instansi
#

DROP TABLE IF EXISTS `instansi`;

CREATE TABLE `instansi` (
  `id_instansi` mediumint(9) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_instansi` varchar(300) NOT NULL,
  `telepon_instansi` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (1, 'Johnson-Bode', '29010 Schinner Via Suite 592\nEast Cletus, NH 98075-2211', '(906)811-3277');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (2, 'Pollich, Will and Rau', '0532 Aaliyah Pass Suite 842\nSouth Westley, NV 67522', '(001)041-4209');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (3, 'Goyette Ltd', '186 Gudrun Plaza\nEast Malvina, UT 96210', '693.921.8512x');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (4, 'Shields and Sons', '3248 Emmerich Causeway Suite 750\nOsinskiton, NM 26738-1857', '1-176-680-195');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (5, 'Kirlin, Crona and Gulgowski', '5603 Marianna Cliffs\nLake Pierrefort, TN 63172', '+71(7)0780155');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (6, 'Medhurst, Nitzsche and Heidenreich', '2723 Bertrand Ways\nWest Fabianland, NM 42162', '1-199-758-826');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (7, 'Upton, Nader and Keebler', '4821 Odie Mount Suite 286\nNew Sandyport, LA 93774', '828.219.4639x');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (8, 'Sawayn-Larson', '208 Cheyanne Overpass\nSouth Giovannastad, AL 61125-8257', '(926)450-0898');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (9, 'Pfannerstill LLC', '916 Marvin Divide\nIsobelshire, WV 46296', '+61(5)1920769');
INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `telepon_instansi`) VALUES (10, 'Rosenbaum-Stark', '946 Heller Motorway\nWest Ettie, MO 39982', '1-684-243-635');


#
# TABLE STRUCTURE FOR: jenis_kelamin
#

DROP TABLE IF EXISTS `jenis_kelamin`;

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` tinyint(4) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jenis_kelamin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES (1, 'Laki-laki');
INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES (2, 'Perempuan');
INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES (3, 'Lainnya');


#
# TABLE STRUCTURE FOR: jenis_peminjaman
#

DROP TABLE IF EXISTS `jenis_peminjaman`;

CREATE TABLE `jenis_peminjaman` (
  `id_jenis_peminjaman` tinyint(4) NOT NULL AUTO_INCREMENT,
  `jenis_peminjaman` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jenis_peminjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES (1, 'BKE');
INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES (2, 'USP');
INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES (3, 'Toko');
INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES (4, 'Ekstra');
INSERT INTO `jenis_peminjaman` (`id_jenis_peminjaman`, `jenis_peminjaman`) VALUES (5, 'Haji');


#
# TABLE STRUCTURE FOR: jenis_transaksi
#

DROP TABLE IF EXISTS `jenis_transaksi`;

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` tinyint(1) NOT NULL,
  `jenis_transaksi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES (1, 'Angsuran');
INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES (2, 'Simpanan Wajib');
INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES (3, 'Simpanan Pokok');
INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES (4, 'Simpanan Sukarela');
INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES (5, 'Tabungan Hari Raya');


#
# TABLE STRUCTURE FOR: level
#

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` tinyint(4) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `level` (`id_level`, `level`) VALUES (1, 'Anggota');
INSERT INTO `level` (`id_level`, `level`) VALUES (2, 'Pimpinan');
INSERT INTO `level` (`id_level`, `level`) VALUES (3, 'Pegawai');
INSERT INTO `level` (`id_level`, `level`) VALUES (4, 'Admin');


#
# TABLE STRUCTURE FOR: peminjaman
#

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_peminjaman` bigint(20) NOT NULL AUTO_INCREMENT,
  `nip_peminjam` bigint(20) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `jenis_peminjaman` tinyint(4) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `diangsur` smallint(6) NOT NULL,
  `penghasilan` bigint(20) NOT NULL,
  `diangsur_mulai` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_pegawai` bigint(20) DEFAULT NULL,
  `id_pimpinan` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `fk_peminjam` (`nip_peminjam`),
  KEY `fk_pegawai` (`id_pegawai`),
  KEY `fk_pimpinan` (`id_pimpinan`),
  KEY `fk_status` (`status`),
  KEY `fk_bulan` (`bulan`),
  KEY `fk_jenis_pinjaman` (`jenis_peminjaman`),
  KEY `fk_bulan_angsur` (`diangsur_mulai`),
  CONSTRAINT `fk_bulan` FOREIGN KEY (`bulan`) REFERENCES `bulan` (`id_bulan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_bulan_angsur` FOREIGN KEY (`diangsur_mulai`) REFERENCES `bulan` (`id_bulan`),
  CONSTRAINT `fk_jenis_pinjaman` FOREIGN KEY (`jenis_peminjaman`) REFERENCES `jenis_peminjaman` (`id_jenis_peminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peminjam` FOREIGN KEY (`nip_peminjam`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pimpinan` FOREIGN KEY (`id_pimpinan`) REFERENCES `akun` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `status_pinjaman` (`id_status_pinjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('1', '10021', 3, 1, '28341593', 66, '2444252', 7, 1, '336115', '372428');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('2', '90458', 7, 1, '93863616', 29, '2623321', 9, 2, '661251', '848681');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('3', '155022', 8, 3, '11129565', 149, '3796047', 7, 3, '448818', '848681');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('4', '177369', 7, 4, '53575058', 156, '6198168', 12, 4, '597130', '500142');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('5', '181421', 4, 1, '9808215', 137, '6414425', 10, 1, '500142', '661251');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('6', '243280', 11, 1, '13311740', 12, '6140209', 4, 2, '243280', '775795');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('7', '299249', 12, 1, '52451023', 61, '2199534', 10, 3, '177369', '378103');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('8', '336115', 10, 4, '4387337', 72, '4447885', 6, 4, '789964', '981115');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('9', '372428', 12, 1, '14011401', 87, '7677683', 1, 1, '336115', '559838');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('10', '378103', 10, 5, '35778427', 126, '3273834', 12, 2, '336115', '448818');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('11', '448818', 6, 1, '97024824', 202, '6521712', 9, 3, '181421', '10021');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('12', '500142', 8, 4, '7843030', 217, '3115789', 10, 4, '500142', '989359');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('13', '551975', 7, 5, '9426573', 115, '4984181', 12, 1, '597130', '500142');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('14', '559838', 3, 3, '94680489', 171, '3520412', 10, 2, '177369', '155022');
INSERT INTO `peminjaman` (`id_peminjaman`, `nip_peminjam`, `bulan`, `jenis_peminjaman`, `jumlah`, `diangsur`, `penghasilan`, `diangsur_mulai`, `status`, `id_pegawai`, `id_pimpinan`) VALUES ('15', '597130', 7, 3, '56771523', 108, '2004415', 4, 3, '551975', '372428');


#
# TABLE STRUCTURE FOR: rekening
#

DROP TABLE IF EXISTS `rekening`;

CREATE TABLE `rekening` (
  `nomor_rekening` int(11) NOT NULL,
  `saldo_tabungan` bigint(20) DEFAULT NULL,
  `saldo_simpanan` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`nomor_rekening`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (1373301, '2935084630', '397176835');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (2428037, '8097112728', '6728500616');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (3969769, '1236895797', '690294601');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (10692078, '910859196', '6866002194');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (14786423, '2340811020', '3681013076');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (17328594, '2972276327', '8431796650');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (17454762, '9568426418', '5395756000');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (20807398, '4075873959', '973091479');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (25174189, '2734894743', '8443432915');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (28648391, '3724377322', '9827139005');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (33272119, '8263653060', '7174225882');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (38223345, '8734556962', '6995630273');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (56891468, '9924760907', '5547587662');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (60380559, '5893918541', '6536682699');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (62137492, '6727452273', '4457611506');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (64404371, '6820035376', '3490335424');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (70354340, '2066321750', '2458113576');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (72380399, '8851359845', '8623148505');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (80312439, '869628093', '7673884718');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (80501850, '3849706798', '9740511234');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (81593885, '178277064', '6841928502');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (82052069, '9707230445', '6374647552');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (83511215, '1390791432', '128426812');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (92109429, '2800408871', '7041798606');
INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) VALUES (97216462, '9209491484', '7113257315');


#
# TABLE STRUCTURE FOR: status_akun
#

DROP TABLE IF EXISTS `status_akun`;

CREATE TABLE `status_akun` (
  `id_status` tinyint(1) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `status_akun` (`id_status`, `status`) VALUES (1, 'AKTIF');
INSERT INTO `status_akun` (`id_status`, `status`) VALUES (2, 'NON-AKTIF');


#
# TABLE STRUCTURE FOR: status_angsuran
#

DROP TABLE IF EXISTS `status_angsuran`;

CREATE TABLE `status_angsuran` (
  `id_status_angsuran` tinyint(4) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status_angsuran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: status_pinjaman
#

DROP TABLE IF EXISTS `status_pinjaman`;

CREATE TABLE `status_pinjaman` (
  `id_status_pinjaman` tinyint(1) NOT NULL,
  `status_pinjaman` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status_pinjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `status_pinjaman` (`id_status_pinjaman`, `status_pinjaman`) VALUES (1, 'pengajuan');
INSERT INTO `status_pinjaman` (`id_status_pinjaman`, `status_pinjaman`) VALUES (2, 'acc');
INSERT INTO `status_pinjaman` (`id_status_pinjaman`, `status_pinjaman`) VALUES (3, 'ditolak');
INSERT INTO `status_pinjaman` (`id_status_pinjaman`, `status_pinjaman`) VALUES (4, 'lunas');


#
# TABLE STRUCTURE FOR: status_transaksi
#

DROP TABLE IF EXISTS `status_transaksi`;

CREATE TABLE `status_transaksi` (
  `id_status_transaksi` tinyint(1) NOT NULL,
  `status_transaksi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: transaksi
#

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT,
  `jenis_transaksi` tinyint(1) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `biaya_admin` bigint(20) DEFAULT NULL,
  `tanggal_transaksi` varchar(10) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nip_pegawai` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fktransaksi` (`nip`),
  KEY `fktransaksi2` (`nip_pegawai`),
  KEY `status` (`status`),
  KEY `fkjenistransaksi` (`jenis_transaksi`),
  CONSTRAINT `fkjenistransaksi` FOREIGN KEY (`jenis_transaksi`) REFERENCES `jenis_transaksi` (`id_jenis_transaksi`),
  CONSTRAINT `fktransaksi` FOREIGN KEY (`nip`) REFERENCES `akun` (`nip`),
  CONSTRAINT `fktransaksi2` FOREIGN KEY (`nip_pegawai`) REFERENCES `akun` (`nip`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_transaksi` (`id_status_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

