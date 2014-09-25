# ************************************************************
# Sequel Pro SQL dump
# Version 4293
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: 360ic
# Generation Time: 2014-09-25 13:22:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tab_stock
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tab_stock`;

CREATE TABLE `tab_stock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) unsigned DEFAULT NULL,
  `partno` char(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `pack` varchar(10) DEFAULT NULL,
  `dc` varchar(5) DEFAULT NULL,
  `mfg` varchar(15) DEFAULT NULL,
  `describe` varchar(64) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `warehouse` varchar(8) DEFAULT NULL,
  `lastupdate` int(11) DEFAULT NULL,
  `company` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `tab_stock` WRITE;
/*!40000 ALTER TABLE `tab_stock` DISABLE KEYS */;

INSERT INTO `tab_stock` (`id`, `cid`, `partno`, `qty`, `pack`, `dc`, `mfg`, `describe`, `type`, `warehouse`, `lastupdate`, `company`)
VALUES
	(1,NULL,'2N222W',1000,'APS','xx','dd','bb',0,'dd',0,'nnn'),
	(2,NULL,'3n333a',1000,'BPC','yy','dd','bb',0,'dd',0,'nnn'),
	(3,NULL,'5h5555',100,'NNV','gg','gg','gg',0,'gg',0,'gg');

/*!40000 ALTER TABLE `tab_stock` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
