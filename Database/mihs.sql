# Host: localhost  (Version 5.5.5-10.1.32-MariaDB)
# Date: 2020-01-22 12:01:15
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "guru"
#

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES ('196009061982032006','Anita','JL. RUSA RAYA BINTARO BARU RESIDANCE B/13','08128280433','anitamaryono@gmail.com'),('196604112007011007','Santoso','JL. H. JIUN','081380916717','bungsantoso@gmail.com'),('197208211999031003','Nursalim','PERUMAHAN BUMI SERPONG RESIDENCE BLOK B NO.22\r\n','08121936568','nur_salim72@yahoo.co.id'),('197505102006042008','Eny Retno Dewi Setyaningsih','PERUM PD. MAHARTA BLOK H8 NO.6','08121898926','eny.winardono@gmail.com'),('198003012011012001','Linda Sahara','Kp. Duren Sawit','082113788376','lindasahara2015@gmail.com');

#
# Structure for table "hasil_kinerja"
#

DROP TABLE IF EXISTS `hasil_kinerja`;
CREATE TABLE `hasil_kinerja` (
  `nip` varchar(20) NOT NULL,
  `thn_ajar` varchar(9) NOT NULL,
  `nilai_akhir` decimal(5,4) NOT NULL,
  `tgl_hasil` date NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  KEY `nip` (`nip`),
  CONSTRAINT `hasil_kinerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hasil_kinerja"
#


#
# Structure for table "kriteria"
#

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `kd_kriteria` varchar(5) NOT NULL,
  `nm_kriteria` varchar(30) NOT NULL,
  `eigenvector` decimal(5,4) NOT NULL,
  PRIMARY KEY (`kd_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kriteria"
#

INSERT INTO `kriteria` VALUES ('KRI01','Nilai SKP',0.6328),('KRI02','Kehadiran',0.2773),('KRI03','Perilaku Kerja',0.0899);

#
# Structure for table "banding"
#

DROP TABLE IF EXISTS `banding`;
CREATE TABLE `banding` (
  `kd_kriteria` varchar(5) NOT NULL,
  `kd_kriteria2` varchar(5) NOT NULL,
  `nilai_banding` decimal(5,4) NOT NULL,
  KEY `kd_kriteria` (`kd_kriteria`),
  KEY `kd_kriteria2` (`kd_kriteria2`),
  CONSTRAINT `banding_ibfk_1` FOREIGN KEY (`kd_kriteria`) REFERENCES `kriteria` (`kd_kriteria`),
  CONSTRAINT `banding_ibfk_2` FOREIGN KEY (`kd_kriteria2`) REFERENCES `kriteria` (`kd_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "banding"
#

INSERT INTO `banding` VALUES ('KRI01','KRI01',1.0000),('KRI01','KRI02',3.0000),('KRI01','KRI03',5.0000),('KRI02','KRI01',0.3333),('KRI02','KRI02',1.0000),('KRI02','KRI03',4.0000),('KRI03','KRI01',0.2000),('KRI03','KRI02',0.2500),('KRI03','KRI03',1.0000);

#
# Structure for table "punya"
#

DROP TABLE IF EXISTS `punya`;
CREATE TABLE `punya` (
  `nip` varchar(20) NOT NULL,
  `kd_kriteria` varchar(5) DEFAULT NULL,
  `thn_ajar` varchar(9) DEFAULT NULL,
  `nilai_guru` int(5) DEFAULT NULL,
  KEY `nip` (`nip`),
  KEY `kd_kriteria` (`kd_kriteria`),
  CONSTRAINT `punya_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  CONSTRAINT `punya_ibfk_2` FOREIGN KEY (`kd_kriteria`) REFERENCES `kriteria` (`kd_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "punya"
#

INSERT INTO `punya` VALUES ('196009061982032006','KRI01','2016/2017',84),('196009061982032006','KRI02','2016/2017',86),('196604112007011007','KRI01','2016/2017',82),('196604112007011007','KRI02','2016/2017',95),('197208211999031003','KRI01','2016/2017',84),('197208211999031003','KRI02','2016/2017',95),('197505102006042008','KRI01','2016/2017',84),('197505102006042008','KRI02','2016/2017',95),('198003012011012001','KRI01','2016/2017',81),('198003012011012001','KRI02','2016/2017',95);

#
# Structure for table "subkriteria"
#

DROP TABLE IF EXISTS `subkriteria`;
CREATE TABLE `subkriteria` (
  `kd_subkriteria` varchar(5) NOT NULL,
  `kd_kriteria` varchar(5) DEFAULT NULL,
  `nm_subkriteria` varchar(50) NOT NULL,
  `eigenvector_sub` decimal(5,4) NOT NULL,
  PRIMARY KEY (`kd_subkriteria`),
  KEY `kd_kriteria` (`kd_kriteria`),
  CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`kd_kriteria`) REFERENCES `kriteria` (`kd_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "subkriteria"
#

INSERT INTO `subkriteria` VALUES ('SKR01','KRI03','Orientasi Pelayanan',0.4298),('SKR02','KRI03','Integritas',0.0567),('SKR03','KRI03','Komitmen',0.3285),('SKR04','KRI03','Displin',0.1020),('SKR05','KRI03','Kerja Sama',0.0830);

#
# Structure for table "punya2"
#

DROP TABLE IF EXISTS `punya2`;
CREATE TABLE `punya2` (
  `nip` varchar(20) NOT NULL DEFAULT '0',
  `kd_subkriteria` varchar(5) DEFAULT NULL,
  `thn_ajar2` varchar(9) DEFAULT NULL,
  `nilai_guru2` varchar(5) DEFAULT NULL,
  KEY `nip` (`nip`),
  KEY `kd_subkriteria` (`kd_subkriteria`),
  CONSTRAINT `punya2_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  CONSTRAINT `punya2_ibfk_2` FOREIGN KEY (`kd_subkriteria`) REFERENCES `subkriteria` (`kd_subkriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "punya2"
#

