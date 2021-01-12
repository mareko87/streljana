/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - zadatak1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zadatak1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `zadatak1`;

/*Table structure for table `termin` */

DROP TABLE IF EXISTS `termin`;

CREATE TABLE `termin` (
  `terminID` int(11) NOT NULL AUTO_INCREMENT,
  `nazivTermina` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `osnovnaCena` int(11) DEFAULT NULL,
  `trajanjeID` int(11) DEFAULT NULL,
  `tipID` int(11) DEFAULT NULL,
  PRIMARY KEY (`terminID`),
  KEY `trajanjeID` (`trajanjeID`),
  KEY `tipID` (`tipID`),
  CONSTRAINT `termin_ibfk_1` FOREIGN KEY (`trajanjeID`) REFERENCES `trajanje` (`trajanjeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `termin_ibfk_2` FOREIGN KEY (`tipID`) REFERENCES `tip` (`tipID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `termin` */

insert  into `termin`(`terminID`,`nazivTermina`,`osnovnaCena`,`trajanjeID`,`tipID`) values 
(1,'Marko',1600,1,1),
(2,'Dalibor',20000,3,1);

/*Table structure for table `tip` */

DROP TABLE IF EXISTS `tip`;

CREATE TABLE `tip` (
  `tipID` int(11) NOT NULL AUTO_INCREMENT,
  `nazivTipa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opisTipa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tipID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tip` */

insert  into `tip`(`tipID`,`nazivTipa`,`opisTipa`) values 
(1,'Pistolj','REVOLVER'),
(2,'Puska','MALOKALIBARSKA '),
(3,'Mesovito','PISTOLJ + PUSKA');

/*Table structure for table `trajanje` */

DROP TABLE IF EXISTS `trajanje`;

CREATE TABLE `trajanje` (
  `trajanjeID` int(11) NOT NULL AUTO_INCREMENT,
  `trajanje` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dodatakCeni` int(11) DEFAULT NULL,
  PRIMARY KEY (`trajanjeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `trajanje` */

insert  into `trajanje`(`trajanjeID`,`trajanje`,`dodatakCeni`) values 
(1,'30 minuta',1000),
(2,'45 minuta',500),
(3,'60 minuta',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
