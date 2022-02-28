/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - gudang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gudang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gudang`;

/*Table structure for table `tb_mie` */

DROP TABLE IF EXISTS `tb_mie`;

CREATE TABLE `tb_mie` (
  `id_mie` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `berat` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mie`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mie` */

insert  into `tb_mie`(`id_mie`,`nama`,`berat`,`harga`,`stok`) values 
(4,'Mie telor','1dus',120000,19),
(35,'Kwetiaw','1dus',90000,20),
(36,'Bihun','1kg',55000,22),
(46,'mie','15gr',2000,145);

/*Table structure for table `tb_minyak` */

DROP TABLE IF EXISTS `tb_minyak`;

CREATE TABLE `tb_minyak` (
  `id_minyak` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `berat` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_minyak`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_minyak` */

insert  into `tb_minyak`(`id_minyak`,`nama`,`berat`,`harga`,`stok`) values 
(1,'Sunco','1Liter',14000,97),
(2,'Minyak SUNCO','1 LITER',14000,10);

/*Table structure for table `tb_plastik` */

DROP TABLE IF EXISTS `tb_plastik`;

CREATE TABLE `tb_plastik` (
  `id_plastik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `berat` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plastik`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_plastik` */

insert  into `tb_plastik`(`id_plastik`,`nama`,`berat`,`harga`,`stok`) values 
(1,'Doco','100gr',5000,20);

/*Table structure for table `tb_riwayat` */

DROP TABLE IF EXISTS `tb_riwayat`;

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `harga` int(16) DEFAULT NULL,
  `jenis_data` varchar(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `total_harga` int(16) DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_riwayat` */

insert  into `tb_riwayat`(`id_riwayat`,`tanggal`,`nama`,`berat`,`harga`,`jenis_data`,`stok`,`total_harga`) values 
(8,'15-February-2022','Mie telor','1dus',120000,'Barang Keluar',2,240000),
(16,'20-February-2022','mie','15gr',2000,'Barang Masuk',10,20000),
(17,'20-February-2022','mie','15gr',2000,'Barang Keluar',5,10000);

/*Table structure for table `tb_terigu` */

DROP TABLE IF EXISTS `tb_terigu`;

CREATE TABLE `tb_terigu` (
  `id_terigu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `berat` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_terigu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_terigu` */

insert  into `tb_terigu`(`id_terigu`,`nama`,`berat`,`harga`,`stok`) values 
(1,'Kunci Biru','500gr',11000,4),
(2,'Bogasari','500gr',13000,15),
(3,'Bogasari','1kg',26000,10);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_login`,`username`,`password`,`nama_pengguna`,`telepon`,`email`,`alamat`) values 
(1,'fauzan','202cb962ac59075b964b07152d234b70','Fauzan Falah','089618173609','fauzan1892@codekop.com','Bekasi'),
(2,'faiz','202cb962ac59075b964b07152d234b70','M Faiz','081298669897','faiz@gmail.com','Bekasi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
