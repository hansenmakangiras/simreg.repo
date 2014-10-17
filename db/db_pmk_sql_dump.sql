/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.16 : Database - db_pmk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pmk` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_pmk`;

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values (1,'admin','Administrator'),(2,'members','General User');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `mast_jurusan` */

DROP TABLE IF EXISTS `mast_jurusan`;

CREATE TABLE `mast_jurusan` (
  `id_jurusan` smallint(8) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_jurusan` */

/*Table structure for table `mast_kelas` */

DROP TABLE IF EXISTS `mast_kelas`;

CREATE TABLE `mast_kelas` (
  `id_kelas` smallint(8) NOT NULL AUTO_INCREMENT,
  `id_jurusan` smallint(8) NOT NULL,
  `kelas` varchar(150) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_kelas` */

/*Table structure for table `mast_materi` */

DROP TABLE IF EXISTS `mast_materi`;

CREATE TABLE `mast_materi` (
  `id_materi` smallint(8) NOT NULL AUTO_INCREMENT,
  `materi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_materi` */

/*Table structure for table `mast_penandatangan` */

DROP TABLE IF EXISTS `mast_penandatangan`;

CREATE TABLE `mast_penandatangan` (
  `id_penanda` smallint(8) NOT NULL AUTO_INCREMENT,
  `nama_penanda` varchar(150) NOT NULL,
  `jabatan` enum('Ketua','Sekretaris','Bendahara','Koordinator','Anggota') NOT NULL,
  PRIMARY KEY (`id_penanda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_penandatangan` */

/*Table structure for table `mast_periode` */

DROP TABLE IF EXISTS `mast_periode`;

CREATE TABLE `mast_periode` (
  `id_periode` smallint(8) NOT NULL AUTO_INCREMENT,
  `periode` varchar(50) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_periode` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`version`) values (2);

/*Table structure for table `ref_level` */

DROP TABLE IF EXISTS `ref_level`;

CREATE TABLE `ref_level` (
  `level_id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `Levelakses` varchar(50) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `ref_level` */

insert  into `ref_level`(`level_id`,`Levelakses`) values (1,'Super Admin'),(2,'Administrator'),(3,'Pengurus'),(4,'Alumni'),(5,'Anggota');

/*Table structure for table `sys_menu` */

DROP TABLE IF EXISTS `sys_menu`;

CREATE TABLE `sys_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sys_menu` */

/*Table structure for table `sys_sessions` */

DROP TABLE IF EXISTS `sys_sessions`;

CREATE TABLE `sys_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sys_sessions` */

insert  into `sys_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('4e7e83341d9a539ff47f65c215fb4a60','127.0.0.1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36',1413094787,''),('c88f00d83041d6ceedc34b5a551da73c','127.0.0.1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36',1412592125,''),('f1c559b9e2e0099f51876d4b7416a2c0','127.0.0.1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36',1412945190,'');

/*Table structure for table `sys_userss` */

DROP TABLE IF EXISTS `sys_userss`;

CREATE TABLE `sys_userss` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `levelakses` varchar(30) NOT NULL,
  `tgl_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `sys_userss` */

insert  into `sys_userss`(`id`,`email`,`password`,`nama`,`levelakses`,`tgl_login`) values (1,'hansenmakangiras@gmail.com','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7','Hansen Makangiras','Super Admin','2014-08-03 18:35:09'),(2,'blackid.85@gmail.com','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7','Hansen Moko','Administrator','2014-08-03 18:35:19');

/*Table structure for table `tbl_alumni` */

DROP TABLE IF EXISTS `tbl_alumni`;

CREATE TABLE `tbl_alumni` (
  `id_alumni` smallint(8) NOT NULL AUTO_INCREMENT,
  `nama_alumni` varchar(100) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_alumni` */

/*Table structure for table `tbl_anggota` */

DROP TABLE IF EXISTS `tbl_anggota`;

CREATE TABLE `tbl_anggota` (
  `id_anggota` smallint(8) NOT NULL AUTO_INCREMENT,
  `no_anggota` varchar(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `angkatan` year(4) NOT NULL,
  `id_jurusan` smallint(8) NOT NULL,
  `id_kelas` smallint(6) NOT NULL,
  `hobby` varchar(200) DEFAULT NULL,
  `penyakit_yg_diderita` varchar(150) DEFAULT NULL,
  `asal_sekolah` varchar(150) DEFAULT NULL,
  `suku` varchar(100) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `jenis_anggota` enum('Maba','Pengurus','Alumni') NOT NULL DEFAULT 'Maba',
  `status` enum('Aktif','Non Aktif') NOT NULL DEFAULT 'Aktif',
  PRIMARY KEY (`id_anggota`,`no_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_anggota` */

/*Table structure for table `tbl_anggota_kelas` */

DROP TABLE IF EXISTS `tbl_anggota_kelas`;

CREATE TABLE `tbl_anggota_kelas` (
  `id_kelas` smallint(8) NOT NULL,
  `id_anggota` smallint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_anggota_kelas` */

/*Table structure for table `tbl_pengumuman` */

DROP TABLE IF EXISTS `tbl_pengumuman`;

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` smallint(8) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pengumuman` */

insert  into `tbl_pengumuman`(`id_pengumuman`,`judul`,`isi_pengumuman`,`created_date`,`updated_date`) values (1,'Kisah Cinta','teradsadfsadfsdfasdfffffffffff','2014-07-26','0000-00-00 00:00:00');

/*Table structure for table `tbl_persuratan` */

DROP TABLE IF EXISTS `tbl_persuratan`;

CREATE TABLE `tbl_persuratan` (
  `id_surat` smallint(8) NOT NULL AUTO_INCREMENT,
  `kop_surat` varchar(150) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `perihal_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_surat` text NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nama_sekretaris` varchar(100) NOT NULL,
  `mengetahui` varchar(100) NOT NULL,
  `status_surat` enum('Surat Masuk','Surat Keluar') NOT NULL DEFAULT 'Surat Keluar',
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_persuratan` */

/*Table structure for table `tbl_pesan` */

DROP TABLE IF EXISTS `tbl_pesan`;

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` varchar(20) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status_baca` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pesan` */

/*Table structure for table `tbl_proker` */

DROP TABLE IF EXISTS `tbl_proker`;

CREATE TABLE `tbl_proker` (
  `id_proker` smallint(8) NOT NULL AUTO_INCREMENT,
  `program_kerja` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_proker` */

/*Table structure for table `tbl_study` */

DROP TABLE IF EXISTS `tbl_study`;

CREATE TABLE `tbl_study` (
  `id_study` smallint(8) NOT NULL AUTO_INCREMENT,
  `id_anggota` smallint(8) NOT NULL,
  `id_materi` smallint(8) NOT NULL,
  `id_pengajar` smallint(8) NOT NULL,
  `waktu` date NOT NULL,
  `lama_studi` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_study`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_study` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`salt`,`email`,`activation_code`,`forgotten_password_code`,`forgotten_password_time`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`) values (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'Admin','istrator','ADMIN','0');

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (1,1,1),(2,1,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
