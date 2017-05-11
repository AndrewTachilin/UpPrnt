/*
SQLyog Enterprise - MySQL GUI v7.15 
MySQL - 5.6.31 : Database - printers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`printers` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `printers`;

/*Table structure for table `BlackToner` */

DROP TABLE IF EXISTS `BlackToner`;

CREATE TABLE `BlackToner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `black_toner` varchar(255) DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `Name_fabricator_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name_fabricator_id` (`Name_fabricator_id`),
  UNIQUE KEY `port_name_id` (`name`,`Name_fabricator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

/*Data for the table `BlackToner` */

insert  into `BlackToner`(`id`,`black_toner`,`name`,`Name_fabricator_id`) values (1,'322',1,1),(140,'322',115,8),(142,'322',117,10),(143,'322',118,11),(144,'322',119,12),(145,'322',120,13),(146,'322',121,14),(147,'322',123,15),(149,'322',125,17),(150,'228',18,126);

/*Table structure for table `DrumsColor` */

DROP TABLE IF EXISTS `DrumsColor`;

CREATE TABLE `DrumsColor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DrumCartridge(R1)` varchar(255) DEFAULT NULL,
  `DrumCartridge(R2)` varchar(255) DEFAULT NULL,
  `DrumCartridge(R3)` varchar(255) DEFAULT NULL,
  `DrumCartridge(R4)` varchar(255) DEFAULT NULL,
  `port_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `DrumsColor` */

/*Table structure for table `NameFabricator` */

DROP TABLE IF EXISTS `NameFabricator`;

CREATE TABLE `NameFabricator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fabricator` varchar(255) DEFAULT NULL,
  `port_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

/*Data for the table `NameFabricator` */

insert  into `NameFabricator`(`id`,`fabricator`,`port_id`) values (1,'samsung','1'),(83,'hp','2'),(123,'gffgfg','23'),(125,'ky','sm2626'),(126,'ky','sm2626');

/*Table structure for table `TonersColor` */

DROP TABLE IF EXISTS `TonersColor`;

CREATE TABLE `TonersColor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BlackToner` varchar(255) DEFAULT NULL,
  `CyanToner` varchar(255) DEFAULT NULL,
  `MagentaToner` varchar(255) DEFAULT NULL,
  `YellowToner` varchar(255) DEFAULT NULL,
  `WasteToner` varchar(255) DEFAULT NULL,
  `port_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `TonersColor` */

insert  into `TonersColor`(`id`,`BlackToner`,`CyanToner`,`MagentaToner`,`YellowToner`,`WasteToner`,`port_id`) values (1,'qw','qwe','qwe','qwe','qwe',0);

/*Table structure for table `port_name` */

DROP TABLE IF EXISTS `port_name`;

CREATE TABLE `port_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Data for the table `port_name` */

insert  into `port_name`(`id`,`name`) values (11,'sm2929'),(15,'gh'),(17,'sm2626'),(18,'sm2626');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `role` */

insert  into `role`(`id`,`name`,`role`,`password`) values (1,'admin','admin','D174ftt6Qx3L'),(2,'a','a','a');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
