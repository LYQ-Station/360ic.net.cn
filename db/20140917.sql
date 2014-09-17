# ************************************************************
# Sequel Pro SQL dump
# Version 4293
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: 360ic
# Generation Time: 2014-09-17 13:37:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table acl_token
# ------------------------------------------------------------

DROP TABLE IF EXISTS `acl_token`;

CREATE TABLE `acl_token` (
  `sn` char(16) NOT NULL COMMENT 'token编号',
  `uid` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `uname` varchar(64) DEFAULT NULL COMMENT '用户名',
  `email` varchar(64) DEFAULT NULL COMMENT '注册邮箱',
  `nickname` varchar(64) DEFAULT NULL COMMENT '昵称',
  `avatar` varchar(64) DEFAULT NULL,
  `login_time` int(11) unsigned DEFAULT NULL COMMENT '登录时间',
  `sync_time` int(11) unsigned DEFAULT NULL COMMENT '同步时间',
  `login_ip` int(11) unsigned DEFAULT NULL COMMENT '登录ip',
  `hold_on` tinyint(4) DEFAULT NULL,
  UNIQUE KEY `sn` (`sn`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='登录令牌';



# Dump of table acl_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `acl_user`;

CREATE TABLE `acl_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT NULL COMMENT '登录名',
  `email` varchar(128) DEFAULT NULL COMMENT '注册邮箱',
  `passwd` char(32) DEFAULT NULL COMMENT '登录密码',
  `nickname` varchar(64) DEFAULT NULL COMMENT '呢称',
  `avatar` varchar(64) DEFAULT NULL COMMENT '头像图片',
  `web` varchar(1024) DEFAULT NULL COMMENT '个人网页',
  `introduce` varchar(256) DEFAULT NULL COMMENT '介绍',
  `info` text COMMENT '介绍',
  `country` varchar(64) DEFAULT NULL COMMENT '所在国家',
  `province` varchar(64) DEFAULT NULL COMMENT '所在省份',
  `city` varchar(64) DEFAULT NULL COMMENT '所在城市',
  `reg_ip` int(11) unsigned DEFAULT NULL COMMENT '注册ip',
  `reg_time` datetime DEFAULT NULL COMMENT '注册时间',
  `last_login_ip` int(11) unsigned DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `admin_flag` int(11) DEFAULT NULL,
  `isvip` tinyint(4) DEFAULT NULL,
  `stockcnt` int(11) DEFAULT NULL,
  `islock` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';



# Dump of table tab_stock
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tab_stock`;

CREATE TABLE `tab_stock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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

INSERT INTO `tab_stock` (`id`, `partno`, `qty`, `pack`, `dc`, `mfg`, `describe`, `type`, `warehouse`, `lastupdate`, `company`)
VALUES
	(1,'2N222W',1000,'APS','xx','dd','bb',0,'dd',0,'nnn');

/*!40000 ALTER TABLE `tab_stock` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
