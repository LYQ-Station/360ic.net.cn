# ************************************************************
# Sequel Pro SQL dump
# Version 4293
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: 360ic
# Generation Time: 2014-09-25 13:36:38 +0000
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

LOCK TABLES `acl_token` WRITE;
/*!40000 ALTER TABLE `acl_token` DISABLE KEYS */;

INSERT INTO `acl_token` (`sn`, `uid`, `uname`, `email`, `nickname`, `avatar`, `login_time`, `sync_time`, `login_ip`, `hold_on`)
VALUES
	('dd669bdfe',2,'admin',NULL,'系统管理员',NULL,1411644453,1411648789,2130706433,NULL);

/*!40000 ALTER TABLE `acl_token` ENABLE KEYS */;
UNLOCK TABLES;


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
  `company` varchar(128) DEFAULT NULL COMMENT '公司名',
  `address` varchar(128) DEFAULT NULL COMMENT '公司地址',
  `phone` varchar(32) DEFAULT NULL COMMENT '电话',
  `mobile` varchar(32) DEFAULT NULL COMMENT '手机',
  `fax` varchar(32) DEFAULT NULL COMMENT '传真',
  `attn` varchar(64) DEFAULT NULL COMMENT '联系人',
  `isvip` tinyint(4) DEFAULT NULL,
  `stockcnt` int(11) DEFAULT NULL,
  `islock` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

LOCK TABLES `acl_user` WRITE;
/*!40000 ALTER TABLE `acl_user` DISABLE KEYS */;

INSERT INTO `acl_user` (`id`, `username`, `email`, `passwd`, `nickname`, `avatar`, `web`, `introduce`, `info`, `country`, `province`, `city`, `reg_ip`, `reg_time`, `last_login_ip`, `last_login_time`, `status`, `admin_flag`, `company`, `address`, `phone`, `mobile`, `fax`, `attn`, `isvip`, `stockcnt`, `islock`)
VALUES
	(2,'admin','admin@360ic.net.cn','202cb962ac59075b964b07152d234b70','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2130706433,'2014-09-25 20:39:49',0,1,'360ic Limit. CO','深圳市南山区科源路yyy号','0755-97654321','1301234567890','0755-12345677','Mr. Black',0,0,0),
	(3,'test','test@360ic.net.cn','202cb962ac59075b964b07152d234b70',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'香港美航科技有限公司','深圳市福田区华强路xx号','0755-12345678','1301234567890','0755-12345677','王生',0,70000,0);

/*!40000 ALTER TABLE `acl_user` ENABLE KEYS */;
UNLOCK TABLES;


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
