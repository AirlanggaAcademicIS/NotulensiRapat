/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.0.45-community-nt : Database - belajarphp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`belajarphp` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;

USE `belajarphp`;

/*Table structure for table `peserta_rapat` */

DROP TABLE IF EXISTS `peserta_rapat`;

CREATE TABLE `peserta_rapat` (
  `no_rapat` varchar(30) collate latin1_general_ci default NULL,
  `jabatan` int(2) default NULL,
  `induk_peserta` varbinary(30) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `peserta_rapat` */

/*Table structure for table `rapat` */

DROP TABLE IF EXISTS `rapat`;

CREATE TABLE `rapat` (
  `no_surat` varchar(30) collate latin1_general_ci NOT NULL,
  `hal` varchar(30) collate latin1_general_ci default NULL,
  `tanggal` varchar(10) collate latin1_general_ci default NULL,
  `tempat` varchar(50) collate latin1_general_ci default NULL,
  `waktu_mulai` varchar(5) collate latin1_general_ci default NULL,
  `waktu_selesai` varchar(5) collate latin1_general_ci default NULL,
  `pembahasan_rapat` text collate latin1_general_ci,
  PRIMARY KEY  (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `rapat` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci default NULL,
  `nm_lengkap` varchar(100) collate latin1_general_ci default NULL,
  `nomor_induk` varchar(30) collate latin1_general_ci default NULL,
  `email` varchar(100) collate latin1_general_ci default NULL,
  `otoritas` int(3) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`nm_lengkap`,`nomor_induk`,`email`,`otoritas`) values ('admin','1234','Administrator','123456789','admin@coba.com',1),('rivan','1111','Rivanda Putra Pratama','081311633030','rivan@coba.com',3),('toni','8888','Toni Arief','081311888888','toni@coba.com',3),('kaprodi','kaprodi','Badrus Zaman, S.Kom., M.Cs.','197801262006041001','badrus@gmail.com',2),('agus','agus','Agus Rahman','197801262006041002','agus@gmail.com',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
