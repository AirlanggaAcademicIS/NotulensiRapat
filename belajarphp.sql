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

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci default NULL,
  `nm_lengkap` varchar(100) collate latin1_general_ci default NULL,
  `email` varchar(100) collate latin1_general_ci default NULL,
  `otoritas` int(3) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`nm_lengkap`,`email`,`otoritas`) values ('admin','1234','Administrator','admin@coba.com',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
