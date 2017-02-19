-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: matoupc
-- ------------------------------------------------------
-- Server version	5.5.53

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comimage`
--

DROP TABLE IF EXISTS `comimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comimage` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `imagenames` char(20) NOT NULL COMMENT '照片名',
  `pubtimes` date NOT NULL COMMENT '时间戳',
  `psid` int(6) NOT NULL COMMENT '对应商品id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk COMMENT='商品图片';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comimage`
--

LOCK TABLES `comimage` WRITE;
/*!40000 ALTER TABLE `comimage` DISABLE KEYS */;
INSERT INTO `comimage` VALUES (1,'586e150e66a05.jpg','2017-01-05',7),(2,'wwq','0000-00-00',8),(3,'123123','2017-01-10',9),(4,'123123','2017-01-27',10),(5,'589d9974b558d.jpg','2017-02-10',15),(6,'589d9974bf6c5.jpg','2017-02-10',15),(7,'589d9974c3750.jpg','2017-02-10',15),(8,'589d9974c70ba.jpg','2017-02-10',15);
/*!40000 ALTER TABLE `comimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commodity`
--

DROP TABLE IF EXISTS `commodity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commodity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `name` char(20) NOT NULL COMMENT '商品名称',
  `price` char(10) NOT NULL COMMENT '价格',
  `content` text,
  `pid` int(4) NOT NULL COMMENT '对应商铺id',
  `usid` int(8) NOT NULL COMMENT '对应用户id',
  `liulan` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk COMMENT='商品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commodity`
--

LOCK TABLES `commodity` WRITE;
/*!40000 ALTER TABLE `commodity` DISABLE KEYS */;
INSERT INTO `commodity` VALUES (8,'婚纱','66','哈哈哈哈',2,13,NULL),(9,'话筒','666','哈哈哈哈',3,23,NULL),(7,'灯光','33','就呵呵呵呵呵',6,13,NULL),(10,'道具','88','嘿嘿嘿',6,26,NULL),(14,'','123','123312312',0,23,NULL),(15,'','1231','123',0,23,NULL);
/*!40000 ALTER TABLE `commodity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `due`
--

DROP TABLE IF EXISTS `due`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `due` (
  `did` int(10) NOT NULL AUTO_INCREMENT COMMENT '应赏id',
  `name` char(20) NOT NULL COMMENT '姓名',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `sexs` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1代表男2代表女',
  `height` char(4) DEFAULT NULL COMMENT '身高',
  `weight` char(10) DEFAULT NULL COMMENT '体重',
  `address` char(40) DEFAULT NULL COMMENT '地址',
  `type_d` char(30) DEFAULT NULL COMMENT '职业',
  `price` char(12) DEFAULT NULL COMMENT '期望赏金',
  `skilled` char(50) DEFAULT NULL COMMENT '擅长婚礼类型',
  `time` char(20) NOT NULL COMMENT '档期',
  `tels` char(11) NOT NULL COMMENT '电话',
  `qqs` int(10) DEFAULT NULL,
  `content` text COMMENT '自我介绍',
  `uid` int(3) NOT NULL COMMENT '对应用户id',
  `collect` int(7) DEFAULT '0',
  `date` date DEFAULT NULL,
  `due_shou` text,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=gbk COMMENT='应赏表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `due`
--

LOCK TABLES `due` WRITE;
/*!40000 ALTER TABLE `due` DISABLE KEYS */;
INSERT INTO `due` VALUES (155,'王企鹅无群二',23,'1','123','50','驻马店,你家大门口','场布师','2000 - 2500','恩恩  各种婚礼','1487508684','15538130890',123213123,'12313',23,0,'2017-02-19','23,');
/*!40000 ALTER TABLE `due` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `due_dang`
--

DROP TABLE IF EXISTS `due_dang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `due_dang` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `dangdate` text NOT NULL,
  `dangs` text NOT NULL,
  `pid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `due_dang`
--

LOCK TABLES `due_dang` WRITE;
/*!40000 ALTER TABLE `due_dang` DISABLE KEYS */;
INSERT INTO `due_dang` VALUES (30,'2017-2-6,2017-2-21,2017-2-6,','中午,晚上,下午,',155);
/*!40000 ALTER TABLE `due_dang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dueimage`
--

DROP TABLE IF EXISTS `dueimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dueimage` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '应赏照片作品id',
  `imagename_z` text NOT NULL COMMENT '照片名',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `pid` int(6) NOT NULL COMMENT '对应赏id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk COMMENT='应赏照片作品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dueimage`
--

LOCK TABLES `dueimage` WRITE;
/*!40000 ALTER TABLE `dueimage` DISABLE KEYS */;
INSERT INTO `dueimage` VALUES (5,'./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,','2017-02-19',155);
/*!40000 ALTER TABLE `dueimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duevideo`
--

DROP TABLE IF EXISTS `duevideo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duevideo` (
  `id` int(7) NOT NULL AUTO_INCREMENT COMMENT '应赏视频id',
  `type` text COMMENT '视频标题',
  `video` text COMMENT '视频链接',
  `imagename_v` text COMMENT '视频封面',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `pid` int(3) NOT NULL COMMENT '对应英赏id',
  `usid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=gbk COMMENT='应赏视频作品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duevideo`
--

LOCK TABLES `duevideo` WRITE;
/*!40000 ALTER TABLE `duevideo` DISABLE KEYS */;
INSERT INTO `duevideo` VALUES (105,'123,123,恩恩123,','123,1123,123,','./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,','2017-02-15',155,NULL);
/*!40000 ALTER TABLE `duevideo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employ`
--

DROP TABLE IF EXISTS `employ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employ` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '应聘id',
  `name` char(20) NOT NULL COMMENT '姓名',
  `sexs` enum('1','2') NOT NULL DEFAULT '1' COMMENT '性别1为男  2为女',
  `ages` int(3) DEFAULT NULL COMMENT '年龄',
  `worktimes` char(20) DEFAULT NULL COMMENT '工作经验  /年',
  `wordold` text COMMENT '工作经历',
  `emails` varchar(255) DEFAULT NULL,
  `type` char(20) DEFAULT NULL COMMENT '期望职位',
  `price` char(20) DEFAULT NULL COMMENT '期望薪资',
  `tels` int(11) NOT NULL COMMENT '电话',
  `qqs` int(11) DEFAULT NULL COMMENT 'qq',
  `content` text COMMENT '个人简历',
  `address` char(20) DEFAULT NULL COMMENT '地址',
  `collect` int(6) DEFAULT NULL COMMENT '收藏数',
  `uid` int(3) NOT NULL COMMENT '对应用户id',
  `date` date DEFAULT NULL,
  `em_shou` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=gbk COMMENT='应聘大厅表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employ`
--

LOCK TABLES `employ` WRITE;
/*!40000 ALTER TABLE `employ` DISABLE KEYS */;
INSERT INTO `employ` VALUES (125,'哈哈哈','2',18,'123',NULL,NULL,'营业员','6000-8000',1231231231,123,'123   ','宣城,拔丝地瓜好速度',NULL,23,'2017-02-18','23,');
/*!40000 ALTER TABLE `employ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employimage`
--

DROP TABLE IF EXISTS `employimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employimage` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '应聘照片作品id',
  `imagenames` text NOT NULL COMMENT '照片名',
  `pubtimes` date NOT NULL COMMENT '时间戳',
  `pid` int(6) NOT NULL COMMENT '对应应聘id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=gbk COMMENT='应聘照片作品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employimage`
--

LOCK TABLES `employimage` WRITE;
/*!40000 ALTER TABLE `employimage` DISABLE KEYS */;
INSERT INTO `employimage` VALUES (93,'./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,','2017-02-19',125);
/*!40000 ALTER TABLE `employimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employvideo`
--

DROP TABLE IF EXISTS `employvideo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employvideo` (
  `id` int(7) NOT NULL AUTO_INCREMENT COMMENT '应聘视频id',
  `types` text NOT NULL COMMENT '视频标题',
  `video` text NOT NULL COMMENT '视频链接',
  `imagename_v` text COMMENT '视频封面',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `pid` int(3) NOT NULL COMMENT '对应应聘id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk COMMENT='应聘视频作品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employvideo`
--

LOCK TABLES `employvideo` WRITE;
/*!40000 ALTER TABLE `employvideo` DISABLE KEYS */;
INSERT INTO `employvideo` VALUES (34,'百度123,淘宝123,喜事码头123,','www.baidu.com,www.taobao.com,www.xishimatou.com,','./Uploads/2017-02-19/005DUtagjw1f2dhigabkhj33402c0qv7.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,./Uploads/2017-02-19/005DUtagjw1f2dhnoxpigj32c0340npe.jpg,','2017-02-19',125);
/*!40000 ALTER TABLE `employvideo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employwork`
--

DROP TABLE IF EXISTS `employwork`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employwork` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '工作经历id',
  `worktime` char(20) DEFAULT NULL COMMENT '工作时间',
  `workname` char(30) NOT NULL COMMENT '所在公司',
  `typew` char(20) NOT NULL COMMENT '职位',
  `contents` text COMMENT '工作描述',
  `pid` int(5) NOT NULL COMMENT '对应应聘id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=gbk COMMENT='应聘-工作经历';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employwork`
--

LOCK TABLES `employwork` WRITE;
/*!40000 ALTER TABLE `employwork` DISABLE KEYS */;
INSERT INTO `employwork` VALUES (191,'2017-2-16,2017-2-25','123','123','123',125),(198,'2017-2-16,2017-2-25','123','123','123',125),(202,'2017-2-16,2017-2-25','123','123','123',125),(201,'2017-2-16,2017-2-25','123','123','123',125),(200,'2017-2-16,2017-2-25','123','123','123',125);
/*!40000 ALTER TABLE `employwork` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flea`
--

DROP TABLE IF EXISTS `flea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flea` (
  `fid` int(10) NOT NULL AUTO_INCREMENT COMMENT '跳骚市场id',
  `name` char(30) NOT NULL COMMENT '物品名',
  `type` enum('1','2') NOT NULL COMMENT '类型1求购2闲置',
  `price` char(6) NOT NULL COMMENT '预算',
  `address` char(60) DEFAULT NULL COMMENT '地址',
  `collect` int(7) DEFAULT '0',
  `tels` char(11) NOT NULL,
  `qqs` int(10) DEFAULT NULL,
  `num` int(6) DEFAULT NULL COMMENT '报名人数',
  `content` text COMMENT '具体要求',
  `uid` int(3) DEFAULT NULL COMMENT '对应用户id',
  `date` date DEFAULT NULL,
  `shou` text,
  `bao` text,
  `tz_status` enum('2','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=gbk COMMENT='跳蚤市场';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flea`
--

LOCK TABLES `flea` WRITE;
/*!40000 ALTER TABLE `flea` DISABLE KEYS */;
INSERT INTO `flea` VALUES (77,'音响','2','123','大连',0,'3123123',123123,NULL,'3123123',23,'2017-02-08','23,',NULL,'1'),(78,'音响','2','123','大连',0,'3123123',123123,NULL,'3123123',23,'2017-02-08',NULL,NULL,'1'),(79,'灯光','2','123123','来宾',0,'12312312312',123123,NULL,'1312312',23,'2017-02-09','23,23,',NULL,'1'),(84,'音响','1','100','成都',0,'15236631921',1424622689,NULL,'面议',23,'2017-02-15',NULL,NULL,'1');
/*!40000 ALTER TABLE `flea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fleaimage`
--

DROP TABLE IF EXISTS `fleaimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fleaimage` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '限制图片id',
  `imagenames` text COMMENT '照片名',
  `pubtimes` date NOT NULL COMMENT '时间戳',
  `pid` int(6) NOT NULL COMMENT '对应跳蚤id',
  `usid` int(8) DEFAULT NULL COMMENT '对应用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gbk COMMENT='闲置图片';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fleaimage`
--

LOCK TABLES `fleaimage` WRITE;
/*!40000 ALTER TABLE `fleaimage` DISABLE KEYS */;
INSERT INTO `fleaimage` VALUES (47,'./Uploads/2017-02-07/5899982d523f9.jpg,./Uploads/2017-02-07/5899982d539d1.jpg,./Uploads/2017-02-07/5899982d5466d.jpg,./Uploads/2017-02-07/5899982d55335.jpg,','2017-02-07',68,23),(44,'./Uploads/2017-02-07/589995740e261.jpg,./Uploads/2017-02-07/589995741098c.jpg,./Uploads/2017-02-07/5899957411d43.jpg,./Uploads/2017-02-07/5899957413784.jpg,','2017-02-07',65,23),(42,'./Uploads/2017-02-07/5899952b8a793.jpg,./Uploads/2017-02-07/5899952b8b8f0.jpg,','2017-02-07',63,23),(41,'./Uploads/2017-02-07/5899950cd46e9.jpg,./Uploads/2017-02-07/5899950cd6293.jpg,','2017-02-07',62,23),(45,'./Uploads/2017-02-07/5899958690dbf.jpg,./Uploads/2017-02-07/5899958692f44.jpg,./Uploads/2017-02-07/58999586945e3.jpg,./Uploads/2017-02-07/589995869566e.jpg,','2017-02-07',66,23),(48,'./Uploads/2017-02-07/58999bec2d01a.jpg,./Uploads/2017-02-07/58999bec30b0c.jpg,./Uploads/2017-02-07/58999bec3263b.jpg,./Uploads/2017-02-07/58999bec33fd6.jpg,','2017-02-07',71,23),(49,'./Uploads/2017-02-08/589a88e7a2f79.jpg,./Uploads/2017-02-08/589a88e7a646c.jpg,./Uploads/2017-02-08/589a88e7a78b2.jpg,','2017-02-08',76,23),(50,'./Uploads/2017-02-08/589a891d93d87.jpg,./Uploads/2017-02-08/589a891d957b9.jpg,./Uploads/2017-02-08/589a891d96586.jpg,./Uploads/2017-02-08/589a897c509e9.jpg,','2017-02-08',77,23),(51,'./Uploads/2017-02-08/589a897c4de1f.jpg,./Uploads/2017-02-08/589a897c4fa7b.jpg,./Uploads/2017-02-08/589a897c509e9.jpg,./Uploads/2017-02-08/589a897c509e9.jpg,','2017-02-08',78,23),(52,'./Uploads/2017-02-09/589c28554b9ab.jpg,./Uploads/2017-02-09/589c285554b78.jpg,./Uploads/2017-02-09/589c285555b71.jpg,./Uploads/2017-02-09/589c285556d18.jpg,','2017-02-09',79,23);
/*!40000 ALTER TABLE `fleaimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forcee`
--

DROP TABLE IF EXISTS `forcee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forcee` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `charter` varchar(32) NOT NULL,
  `representative` char(32) NOT NULL,
  `forcename` char(32) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lianjie` varchar(255) DEFAULT NULL,
  `collect` int(7) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `tels` char(11) DEFAULT NULL,
  `qqs` int(11) DEFAULT NULL,
  `content` text,
  `status` enum('3','2','1') DEFAULT '1',
  `uid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forcee`
--

LOCK TABLES `forcee` WRITE;
/*!40000 ALTER TABLE `forcee` DISABLE KEYS */;
INSERT INTO `forcee` VALUES (1,'12312312','田泽豪','喜事码头','供应商','郑州市','aidu.com',1000,'2017-01-03','123213.jpg','15236631921',1424622689,'啊哈哈哈哈哈哈就是帅','2',13),(2,'1231','123123','312312','3123','新乡市','31231',3123,'2017-01-03','123123.jpg','123123',312312,'3213123','2',23);
/*!40000 ALTER TABLE `forcee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forceimage`
--

DROP TABLE IF EXISTS `forceimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forceimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagenames` char(25) NOT NULL COMMENT '照片作品',
  `pubtimes` time NOT NULL COMMENT '时间戳对应上传图片',
  `pid` int(10) NOT NULL COMMENT '对应force里的id',
  `usid` int(6) NOT NULL COMMENT '对应用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forceimage`
--

LOCK TABLES `forceimage` WRITE;
/*!40000 ALTER TABLE `forceimage` DISABLE KEYS */;
INSERT INTO `forceimage` VALUES (1,'哈哈哈','00:00:00',1,13),(2,'呵呵呵','16:25:10',2,23);
/*!40000 ALTER TABLE `forceimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forcevideo`
--

DROP TABLE IF EXISTS `forcevideo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forcevideo` (
  `id` int(7) NOT NULL AUTO_INCREMENT COMMENT '部队视频id',
  `types` char(20) NOT NULL COMMENT '视频标题',
  `video` char(25) NOT NULL COMMENT '视频链接',
  `imagename` char(25) NOT NULL COMMENT '视频封面',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `pid` int(3) NOT NULL COMMENT '对应英赏id',
  `usid` int(6) NOT NULL COMMENT '对应用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk COMMENT='部队视频作品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forcevideo`
--

LOCK TABLES `forcevideo` WRITE;
/*!40000 ALTER TABLE `forcevideo` DISABLE KEYS */;
INSERT INTO `forcevideo` VALUES (3,'564r7','www.baidu.com','586df9a890446.jpg','2017-01-05',1,0),(5,'8','www.baidu.com','58705861697f1.jpg','2017-01-07',2,0);
/*!40000 ALTER TABLE `forcevideo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foree_liuyan`
--

DROP TABLE IF EXISTS `foree_liuyan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foree_liuyan` (
  `lid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `fid` int(5) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `zan` int(8) NOT NULL,
  `zid` text,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foree_liuyan`
--

LOCK TABLES `foree_liuyan` WRITE;
/*!40000 ALTER TABLE `foree_liuyan` DISABLE KEYS */;
INSERT INTO `foree_liuyan` VALUES (63,27,1,'ceshi2','2017-02-09 10:32:51',12,'27,27,'),(62,27,2,'ceshiq1','2017-02-09 10:32:45',2,'27,27,27,23,23,23,23,23,');
/*!40000 ALTER TABLE `foree_liuyan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liuyan`
--

DROP TABLE IF EXISTS `liuyan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liuyan` (
  `lid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `xsid` int(11) NOT NULL,
  `contents` text NOT NULL,
  `ltime` char(20) NOT NULL,
  `xzst` enum('1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liuyan`
--

LOCK TABLES `liuyan` WRITE;
/*!40000 ALTER TABLE `liuyan` DISABLE KEYS */;
INSERT INTO `liuyan` VALUES (59,13,6,'123123123123','2017-01-13 18:45:45','2'),(58,13,4,'我不知道你在想什么呢\n','2017-01-13 18:36:06','1'),(64,13,6,'31231231231231','2017-01-13 18:49:19','2'),(57,13,4,'123123','2017-01-13 18:35:26','1'),(56,13,4,'123123123','2017-01-13 18:35:12','1'),(66,13,6,'田泽豪','2017-01-13 18:49:37','2'),(65,13,6,'你们在干嘛呢','2017-01-13 18:49:28','2'),(67,13,6,'楼下的真帅','2017-01-13 18:49:44','2'),(68,13,4,'沃尔特各位大哥大法官4','2017-01-13 18:58:50','1'),(69,23,4,'梵蒂冈地方','2017-01-13 20:24:53','1'),(70,23,6,'大范围是否认为辅导费吧','2017-01-13 20:25:30','2'),(71,27,6,'田泽豪真帅','2017-01-15 19:05:41','2'),(72,23,4,'12321312312','2017-01-16 09:52:04','1'),(73,0,4,'12312','2017-01-25 18:52:47','1'),(74,0,4,'爱啥啥错v','2017-01-25 18:52:56','1'),(75,0,4,'123123123123','2017-01-25 18:53:10','1'),(76,0,4,'99999999999','2017-01-25 18:53:16','1'),(77,23,4,'12321321312','2017-01-26 15:05:56','1'),(78,23,4,'11111111111111111111111111111111111111111','2017-01-26 15:06:01','1'),(79,23,71,'哈哈哈哈哈哈哈哈哈啊','2017-02-09 14:33:54','1'),(80,23,71,'123','2017-02-09 14:40:45','1'),(81,23,71,'你好','2017-02-09 14:43:29','1'),(82,23,69,'穷二代玩儿','2017-02-09 16:12:20','2'),(83,23,69,'12312312312312312312','2017-02-09 16:13:19','2'),(84,23,69,'12312312312312','2017-02-09 16:16:20','2'),(85,23,69,'1231吞吞吐吐拖拖拖拖拖拖拖拖拖拖拖拖拖拖拖','2017-02-09 16:21:21','2'),(86,23,76,'我是第一个留言的人！！！','2017-02-09 16:41:07','1'),(87,23,77,'哈哈哈哈','2017-02-19 15:16:33','1');
/*!40000 ALTER TABLE `liuyan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lyhuifu`
--

DROP TABLE IF EXISTS `lyhuifu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lyhuifu` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `xid` int(11) NOT NULL,
  `contents` text NOT NULL,
  `times` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lyhuifu`
--

LOCK TABLES `lyhuifu` WRITE;
/*!40000 ALTER TABLE `lyhuifu` DISABLE KEYS */;
/*!40000 ALTER TABLE `lyhuifu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruit`
--

DROP TABLE IF EXISTS `recruit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL COMMENT '职位',
  `sex` char(6) NOT NULL COMMENT '性别',
  `age` char(15) NOT NULL COMMENT '年龄',
  `work` char(15) NOT NULL COMMENT '工作经验',
  `price` char(15) NOT NULL COMMENT '工资',
  `recruiters` char(15) NOT NULL COMMENT '招聘方',
  `address` char(50) NOT NULL COMMENT '地址',
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruit`
--

LOCK TABLES `recruit` WRITE;
/*!40000 ALTER TABLE `recruit` DISABLE KEYS */;
/*!40000 ALTER TABLE `recruit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruit1`
--

DROP TABLE IF EXISTS `recruit1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruit1` (
  `rid` int(10) NOT NULL AUTO_INCREMENT COMMENT '招聘基本信息id',
  `address` char(255) NOT NULL COMMENT '工作地点',
  `rtel` char(11) NOT NULL COMMENT '电话',
  `rqq` int(10) NOT NULL COMMENT 'qq',
  `remail` char(20) NOT NULL COMMENT '邮箱',
  `collect` int(7) NOT NULL COMMENT '收藏数',
  `uid` int(10) NOT NULL COMMENT '对应用户id',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=gbk COMMENT='招聘基本信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruit1`
--

LOCK TABLES `recruit1` WRITE;
/*!40000 ALTER TABLE `recruit1` DISABLE KEYS */;
INSERT INTO `recruit1` VALUES (50,'123','15236631921',1231231231,'123123@qq.com',0,23,'2017-02-04'),(51,'深圳','12312312312',1231231231,'1231@qq.com',0,23,'2017-02-08'),(52,'杭州','11111111111',1111111111,'12312@qq.com',0,23,'2017-02-08'),(53,'大连','123123',312312,'',0,23,'2017-02-08'),(54,'大连','123123',312312,'',0,23,'2017-02-08'),(55,'大连12312312','123123',312312,'3123@qq.com',0,23,'2017-02-08'),(56,'大连','123123',312312,'3123@qq.com',0,23,'2017-02-08');
/*!40000 ALTER TABLE `recruit1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruit2`
--

DROP TABLE IF EXISTS `recruit2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruit2` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '招聘详情id',
  `type` char(20) NOT NULL COMMENT '招聘职位',
  `sex` char(6) NOT NULL COMMENT '性别',
  `age` int(3) NOT NULL COMMENT '年龄',
  `worktime` char(5) NOT NULL COMMENT '工作经验、年',
  `price` char(10) NOT NULL COMMENT '薪资',
  `content` text NOT NULL COMMENT '工作内容',
  `work` text NOT NULL COMMENT '岗位要求',
  `pid` int(3) NOT NULL COMMENT '对应招聘基本信息id',
  `usid` int(7) NOT NULL,
  `zhao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=gbk COMMENT='招聘详情';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruit2`
--

LOCK TABLES `recruit2` WRITE;
/*!40000 ALTER TABLE `recruit2` DISABLE KEYS */;
INSERT INTO `recruit2` VALUES (33,'营业员','1',25,'1-2','123-1231','123','12312',50,23,'23,13,'),(34,'经理/店长','1',0,'不限','','23123','13213',50,23,'23,13,'),(35,'数码师/设计','1',18,'2-5','','1233','33213',50,23,'23,13,'),(36,'营业员','1',18,'1-2','123-312312','3123123','123123',51,23,NULL),(37,'经理/店长','1',0,'不限','123-31234','12312312','3213123',52,23,NULL),(38,'经理/店长','1',0,'不限','123-3123','3123','3123',55,23,NULL),(39,'经理/店长','1',0,'不限','123-312312','3123123','12312',56,23,'23,');
/*!40000 ALTER TABLE `recruit2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reward`
--

DROP TABLE IF EXISTS `reward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reward` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '悬赏id',
  `times` date NOT NULL COMMENT '活动时间',
  `type` char(20) NOT NULL COMMENT '职业类型',
  `age` char(12) NOT NULL COMMENT '年龄',
  `address` char(50) NOT NULL COMMENT '地址',
  `price` int(6) NOT NULL COMMENT '赏金',
  `tel` char(11) NOT NULL,
  `qq` char(10) NOT NULL,
  `details` char(100) NOT NULL COMMENT '活动详情',
  `content` text NOT NULL COMMENT '具体要求',
  `whether` enum('1','2') NOT NULL COMMENT '1代表报销2代表否',
  `cid` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reward`
--

LOCK TABLES `reward` WRITE;
/*!40000 ALTER TABLE `reward` DISABLE KEYS */;
/*!40000 ALTER TABLE `reward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reward1`
--

DROP TABLE IF EXISTS `reward1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reward1` (
  `psid` int(10) NOT NULL AUTO_INCREMENT COMMENT '悬赏基本信息id',
  `time` date DEFAULT NULL COMMENT '活动时间',
  `address` char(40) DEFAULT NULL COMMENT '活动地点',
  `tels` char(11) NOT NULL COMMENT '电话',
  `qqs` int(10) DEFAULT NULL COMMENT 'qq',
  `date` date NOT NULL,
  `content` text COMMENT '活动详情',
  `collect` int(7) DEFAULT NULL COMMENT '收藏数',
  `uid` int(6) NOT NULL COMMENT '对用用户id',
  PRIMARY KEY (`psid`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=gbk COMMENT='悬赏基本信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reward1`
--

LOCK TABLES `reward1` WRITE;
/*!40000 ALTER TABLE `reward1` DISABLE KEYS */;
INSERT INTO `reward1` VALUES (69,'2017-02-05','泉港区','12312',3123,'2017-02-12','3123',NULL,23);
/*!40000 ALTER TABLE `reward1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reward2`
--

DROP TABLE IF EXISTS `reward2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reward2` (
  `wid` int(10) NOT NULL AUTO_INCREMENT COMMENT '悬赏详情id',
  `type` char(20) NOT NULL COMMENT '悬赏职位',
  `sex` enum('1','2','3') NOT NULL DEFAULT '3' COMMENT '性别1为男  2为女3为不限',
  `age` char(7) DEFAULT NULL COMMENT '年龄',
  `price` char(6) DEFAULT NULL COMMENT '赏金',
  `whether` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1代表否2代表报销',
  `yaoqiu` text COMMENT '具体要求',
  `pid` int(5) NOT NULL COMMENT '对应基本信息id',
  `usid` int(6) DEFAULT NULL,
  `bao` text NOT NULL,
  `baodate` text,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reward2`
--

LOCK TABLES `reward2` WRITE;
/*!40000 ALTER TABLE `reward2` DISABLE KEYS */;
INSERT INTO `reward2` VALUES (94,'主持人','1','不限','123-12','1','123',69,23,'13,','2017-02-16,2017-02-16,'),(95,'主持人','1','不限','123-31','1','3313',69,23,'13,23,','2017-02-16,2017-02-16,'),(93,'主持人','1','25-30','123-12','1','123',69,23,'13,23,','2017-02-16,2017-02-16,');
/*!40000 ALTER TABLE `reward2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商城id',
  `charter` char(20) NOT NULL COMMENT '营业执照',
  `representative` char(15) NOT NULL COMMENT '法定代表人',
  `shopname` char(20) NOT NULL COMMENT '商铺名',
  `type` char(15) NOT NULL COMMENT '类型',
  `address` char(30) NOT NULL COMMENT '地址',
  `lianjie` char(40) NOT NULL COMMENT '网站链接',
  `collect` int(10) DEFAULT NULL COMMENT '收藏数',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `imagename` char(20) NOT NULL COMMENT '商铺头像',
  `status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1代表未审核2代表已审核',
  `uid` int(10) NOT NULL COMMENT '对应用户id',
  `tel` int(11) NOT NULL,
  `qq` int(10) DEFAULT NULL,
  `zysp` text NOT NULL,
  `wangzhan` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk COMMENT='码头商城';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` VALUES (2,'执照','张三','影楼','出租','河南','www',0,'2017-01-05','586e1a1787ec3.png','2',13,0,NULL,'',''),(3,'营业执照','李四','婚庆','销售','郑州','www',33,'2016-12-24','585e384b0f7a5.jpg','2',23,0,NULL,'',''),(6,'营业执照','王五','二手','销售','广州','www',0,'2016-12-26','5860d487c59ae.png','2',26,0,NULL,'','');
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_liuyan`
--

DROP TABLE IF EXISTS `shop_liuyan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_liuyan` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `stime` char(20) NOT NULL,
  `contents` text,
  `zan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_liuyan`
--

LOCK TABLES `shop_liuyan` WRITE;
/*!40000 ALTER TABLE `shop_liuyan` DISABLE KEYS */;
INSERT INTO `shop_liuyan` VALUES (1,23,6,'2017-02-10 18:40:26','222','');
/*!40000 ALTER TABLE `shop_liuyan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` char(15) DEFAULT NULL COMMENT '用户名',
  `password` char(10) NOT NULL COMMENT '用户密码',
  `tel` char(11) NOT NULL COMMENT '电话',
  `sex` char(6) NOT NULL COMMENT '性别',
  `addre` char(100) DEFAULT NULL COMMENT '地址',
  `imagename` char(20) DEFAULT NULL COMMENT '头像名',
  `pubtime` date DEFAULT NULL COMMENT '当前时间',
  `weixin` char(13) DEFAULT NULL COMMENT '微信',
  `fen` int(6) DEFAULT NULL,
  `qq` char(10) DEFAULT NULL,
  `weibo` char(13) DEFAULT NULL COMMENT 'weibo',
  `cid` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (26,'15236631999','111111','','','郑州','hyes.png',NULL,NULL,0,NULL,NULL,NULL),(23,'15236631921','123456','15236631921','女','商丘','hyes.png',NULL,NULL,2,NULL,NULL,NULL),(27,'123123123','123123','15290809875','','驻马店',NULL,NULL,NULL,1,NULL,NULL,NULL),(13,'18510898704','999999','18510898704','','周口','hyes.png','0000-00-00','',3,'','',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_fen`
--

DROP TABLE IF EXISTS `user_fen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_fen` (
  `sid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '当前的用户id',
  `fid` text NOT NULL COMMENT '被关注的用户id',
  `fens` enum('2','1') NOT NULL DEFAULT '1' COMMENT '为1时时未关注，未2时是已关注',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_fen`
--

LOCK TABLES `user_fen` WRITE;
/*!40000 ALTER TABLE `user_fen` DISABLE KEYS */;
INSERT INTO `user_fen` VALUES (165,27,'23,','1'),(164,13,'13,27,23,','1'),(163,23,'13,23,','1');
/*!40000 ALTER TABLE `user_fen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viwepager`
--

DROP TABLE IF EXISTS `viwepager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viwepager` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '图片轮播id',
  `name` char(20) NOT NULL COMMENT '图片名',
  `imagename` char(20) NOT NULL COMMENT '图片保存格式名',
  `pubtime` date NOT NULL COMMENT '时间戳',
  `lianjie` char(20) NOT NULL COMMENT '图片链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viwepager`
--

LOCK TABLES `viwepager` WRITE;
/*!40000 ALTER TABLE `viwepager` DISABLE KEYS */;
/*!40000 ALTER TABLE `viwepager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wx_matter`
--

DROP TABLE IF EXISTS `wx_matter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wx_matter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sex` enum('1','2') DEFAULT NULL COMMENT '1代表女2代表男',
  `age` int(5) DEFAULT NULL,
  `height` double DEFAULT NULL COMMENT '年龄',
  `name` varchar(25) DEFAULT NULL,
  `type` char(50) NOT NULL COMMENT '类型',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `time` date NOT NULL,
  `address` varchar(255) NOT NULL COMMENT '地址',
  `price` int(6) NOT NULL COMMENT '价格',
  `tel` char(20) NOT NULL COMMENT '手机号',
  `weixin` char(30) NOT NULL COMMENT '微信号',
  `qq` char(11) NOT NULL COMMENT 'QQ',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `content` text NOT NULL COMMENT '详情',
  `cid` int(2) NOT NULL DEFAULT '0' COMMENT '0代表上线1代表下线',
  `b_id` int(3) NOT NULL COMMENT '负id',
  `status` enum('2','3','1') NOT NULL DEFAULT '1',
  `times` char(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wx_matter`
--

LOCK TABLES `wx_matter` WRITE;
/*!40000 ALTER TABLE `wx_matter` DISABLE KEYS */;
INSERT INTO `wx_matter` VALUES (20,NULL,NULL,NULL,NULL,'租赁','偶需要租点东西','2016-12-07','新乡市',9999,'123456789','4567891231','13212312','132123','1231231',0,0,'2',''),(19,NULL,NULL,NULL,NULL,'婚车/车队','我需要一个车队','2016-12-07','安阳市',10000,'15236631921','15236631921','12313','123123','1231231',0,0,'2',''),(21,NULL,NULL,NULL,NULL,'租赁','我需要n个话筒','2016-12-10','澳门',100,'18510898704','anshoubenfen','1424622689','18510898704@163.com','不管了 只要你有话筒 就给我拿来 好吧？',0,0,'1','1481303544');
/*!40000 ALTER TABLE `wx_matter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-19 21:03:20
