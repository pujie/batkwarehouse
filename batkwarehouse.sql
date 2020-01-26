-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: batkwarehouse
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text,
  `amount` int(11) DEFAULT '0',
  `unit` varchar(50) DEFAULT NULL,
  `sellingprice` varchar(10) DEFAULT NULL,
  `alterprice` varchar(10) DEFAULT '-' COMMENT 'if ''-'' then not altered',
  `active` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Business File Folio Inter X',2,NULL,0,'Buah','235013','-','1'),(1,'Amplop Coklat Folio Sams-one D/Kujang',2,'White board Marker merek Snowman',0,'Buah','27500','-','1'),(4,'Ballpoint Faster C600',2,NULL,0,'Buah','2000','-','1'),(5,'Ballpoint Balliner Pilot',2,'White board Marker merek Snowman',0,'Buah','12000','-','1'),(6,'Baterai ABC Biru Kecil ',2,NULL,0,'Buah','1900','-','1'),(7,'Amplop No. 104 + Perekat Paperline',2,'',0,'Buah','10400','-','1'),(8,'Amplop Coklat Extra Folio Samsone E',2,NULL,0,'Buah','36500','-','1'),(9,'Ballpoint Standart AE 7',2,NULL,0,'Buah','1250','-','1'),(11,'Baterai ABC Biru Tanggung',2,NULL,0,'Buah','2900','-','1'),(12,'Amplop No.90 + Perekat Paperline',2,NULL,0,'Buah','14400','','1'),(13,'Baterai ABC Biru Besar',2,NULL,0,'buah','3650','-','1'),(14,'Amplop No.90 + Perekat Paperline',2,'White board Marker merek Snowman',0,'buah','14400','','1'),(15,'Baterai Alkaline AA',2,NULL,0,'buah','4100','-','1'),(16,'Baterai Alkaline AAA',2,NULL,0,'buah','4000','-','1'),(17,'Baterai Kotak 9V Alkaline',2,NULL,0,'buah','19000','-','1'),(18,'Box File Bantex 4011',2,NULL,0,'buah','24000','-','1'),(19,'Box File Bantex 4012',2,NULL,0,'buah','24000','','1'),(20,'Buku tulis isi 38 Sinar Dunia',2,NULL,0,'Unit','1950','-','1'),(21,'Buku Hard cover Quarto 200\'S Mirage',2,NULL,0,'rim','10800','-','1'),(22,'Buku Hard cover Ekspedisi 100\'S Mirage',2,NULL,0,'rim','5900','-','1'),(23,'Buku Hard cover Folio 300\'S Mirage',0,NULL,0,'buah','29000','-','1'),(24,'Buku Hard cover Ekspedisi 200\'S Mirage',2,NULL,0,'buah','12000','-','1'),(25,'Buka tamu batik Joyart',2,NULL,0,'buah','11000','-','1'),(26,'Amplop No. 110 + Perekat Paperline',2,'White board Marker merek Snowman',0,'buah','12500','','1'),(27,'Buku Hard cover Folio 200\'S Mirage',2,NULL,0,'buah','19500','-','1'),(28,'Buku Hard cover Folio 100\'S Mirage',2,NULL,0,'buah','11200','-','1'),(29,'Buku Hard cover Quarto 100\'S Mirage',2,NULL,0,'buah','6000','-','1'),(30,'Box File Victory',2,NULL,0,'buah','8300','-','1'),(31,'Binder Clip No.155 Joyko',2,NULL,0,'BOX','5800','-','1'),(32,'Binder Clip No. 105 Joyko',2,NULL,0,'BOX','2200','-','1'),(33,'Binder Clip No. 107 Joyko',2,NULL,0,'BOX','2450','-','1'),(34,'Binder Clip No. 111 Joyko',2,NULL,0,'BOX','4000','-','1'),(35,'Binder Clip No. 200 Joyko',2,NULL,0,'BOX','9300','-','1'),(36,'Binder Clip No. 260 Joyko',2,NULL,0,'BOX','15500','-','1'),(37,'Buku tulis isi 58 Sinar Dunia',2,NULL,0,'satuan','2900','-','1'),(38,'Calculator Cityzen 868',2,NULL,0,'satuan','80000','-','1'),(39,'Calculator Cityzen 1020',2,NULL,0,'satuan','44000','-','1'),(40,'Calculator Scientific Casio FX 3950',2,NULL,0,'satuan','280000','-','1'),(41,'Clipboard mika Star',2,NULL,0,'satuan','11000','-','1'),(42,'Clipboard 4205 Bantex ',2,NULL,0,'satuan','8500','-','1'),(43,'Clipboard with cover 4211 Bantex ',2,NULL,0,'satuan','18200','-','1'),(44,'Cont. form 147/8x111\'\' 1 ply Sidu',2,NULL,0,'satuan','225000','-','1'),(45,'Cont. form 147/8x111\'\' 2 ply Sidu',2,NULL,0,'satuan','330000','-','1'),(46,'Cont. form 147/8x111\'\' 3 ply Sidu',2,NULL,0,'satuan','490000','-','1'),(47,'Cont. form 147/8x111\'\' 4 ply Sidu',2,NULL,0,'satuan','348000','-','1'),(48,'Cont. form 91/2x111\'\' 1 ply Sidu',2,NULL,0,'satuan','144000','-','1'),(49,'Cont. form 91/2x111\'\' 2 ply Sidu',2,NULL,0,'satuan','215000','-','1'),(50,'Cont. form 91/2x111\'\' 3 ply Sidu',2,NULL,0,'satuan','300000','-','1'),(51,'Correction pentel ZLC1W',2,NULL,0,'satuan','21500','-','1'),(52,'Correction pentel ZL62W',2,NULL,0,'satuan','21500','-','1'),(53,'Correction pentel ZL31W',2,NULL,0,'satuan','24000','-','1'),(54,'Correction fluid Kenko KE01',2,NULL,0,'satuan','3800','-','1'),(55,'Correction tape Joyko CT510',2,NULL,0,'satuan','4800','-','1'),(56,'Cover mika QQ',2,NULL,0,'satuan','22000','-','1'),(57,'Cutter besar L500 Joyko',2,NULL,0,'satuan','11600','-','1'),(58,'CD R GT Pro',2,NULL,0,'satuan','1750','-','1'),(59,'CD R GT Pro Plus',2,NULL,0,'satuan','2200','-','1'),(60,'CDRW GT Pro',2,NULL,0,'satuan','4200','-','1'),(61,'DVD R GT Pro',2,'DVD R GT Pro',0,'satuan','2400','-','1'),(62,'DVDRW GT Pro',2,'DVDRW GT Pro',0,'satuan','4300','-','1'),(63,'Desk set Joyko DS-0913',2,NULL,0,'satuan','24650','-','1'),(64,'Desk set Joyko DS-338',2,'Desk set Joyko DS-338',0,'satuan','27000','-','1'),(65,'Dispenser tape Joyko TD 101',2,'Dispenser tape Joyko TD 101',0,'satuan','21500','-','1'),(66,'Dispenser tape Joyko TD 103',2,'Dispenser tape Joyko TD 103',0,'satuan','18200','-','1'),(67,'Dispenser tape Joyko TD 105',2,'Dispenser Joyko',0,'satuan','18200','-','1'),(68,'Divider Bantex 6240',2,'Divider Bantex',0,'satuan','14000','-','1'),(69,'Divider Bantex 6242',2,'Divider Bantex',0,'satuan','20500','-','1'),(70,'Document Pocket Bantex 2035',2,'Document Pocket Bantex 2035',0,'satuan','1400','-','1'),(71,'Document Pocket Bantex 2044',2,'Document Pocket Bantex 2044',0,'satuan','1500','-','1'),(72,'Document Keeper Folio isi 20 Inter X',2,'Document Keeper Folio isi 20 Inter X',0,'satuan','12200','-','1'),(73,'Document Keeper Folio isi 40 Inter X X',2,'',0,'satuan','17500','-','1'),(74,'Document Keeper Folio isi 60 Inter X X',2,'Document Keeper Folio isi 60 Inter X X',0,'satuan','23800','-','1'),(75,' Gunting Kecil Joyko 838',2,' Gunting Kecil Joyko 838',0,'satuan','5700','-','1'),(76,' Gunting Kecil Joyko 848',2,' Gunting Kecil Joyko 848',0,'satuan','8700','-','1'),(77,'Isi staples Max no. 3',2,'Isi staples Max no. 3',0,'satuan','4000','-','1'),(78,'Isi Cutter Joyko A100',2,'Isi Cutter Joyko A100',0,'satuan','1600','-','1'),(79,'Isi Cutter Joyko L150',2,'Isi cutter Joyko',0,'satuan','3000','-','1'),(80,'Isi pensil mekanik Pilot',2,'Pensil mekanik pilot',0,'satuan','3100','-','1'),(81,'Isolasi bening 1/2\' Nachi',2,'Isolasi bening 1/2\' Nachi',0,'satuan','2100','-','1'),(82,'Isolasi bening 1\' Nachi',2,'Isolasi bening 1\' Nachi',0,'satuan','3900','-','1'),(83,'Isolasi bening 2\' Nachi',2,'Isolasi bening 2\' Nachi',0,'satuan','8700','-','1'),(84,'Isolasi coklat 2\' Nachi',2,'Isolasi coklat 2\' Nachi',0,'satuan','8700','-','1'),(85,'Isolasi double tape 1/2\' Nachi',2,'Isolasi double tape 1/2\' Nachi',0,'satuan','2200','-','1'),(86,'Isolasi double tape 1\' Nachi',2,'Isolasi double tape 1\' Nachi',0,'satuan','4400','-','1'),(87,'Isolasi double tape 2\' Nachi',2,'Isolasi double tape 2\' Nachi',0,'satuan','8800','-','1'),(88,'Isolasi masking tape 1\'\' Nachi',2,NULL,0,'satuan','4000','-','1'),(89,'Isolasi masking tape 2\'\' Nachi',2,NULL,0,'satuan','7800','-','1'),(90,'Isolasi lakban hitam 1\'\' Nachi',2,NULL,0,'satuan','5500','-','1'),(91,'Isolasi lakban hitam 2\'\' Nachi',2,NULL,0,'satuan','11000','-','1'),(92,'Isolasi double form 1\' Nachi',2,'Isolasi double form 1\' Nachi',0,'satuan','7300','-','1'),(93,'Karet pentil',2,NULL,0,'satuan','23000','-','1'),(94,'Kertas A4 70 gr Sinar Dunia',2,NULL,0,'satuan','28000','-','1'),(95,'Kertas F4 70 gr Sinar Dunia',2,NULL,0,'satuan','31000','-','1'),(96,'Kertas A4 80 gr Sinar Dunia',2,NULL,0,'satuan','33000','-','1'),(97,'Kertas F4 80 gr Sinar Dunia',2,NULL,0,'satuan','38000','-','1'),(98,'Kertas A3 70 gr Sinar Dunia',2,NULL,0,'satuan','59000','-','1'),(99,'Kertas double folio garis 200 Sinar Dunia',2,NULL,0,'satuan','27000','-','1'),(100,'Kertas CD Phoenix',2,NULL,0,'satuan','15000','-','1'),(101,'Kertas foto Dataprint',2,NULL,0,'satuan','17500','-','1'),(102,'Kertas stiker Folio glossy/Doff',2,NULL,0,'satuan','15000','-','1'),(103,'Kwitansi tanggung B40T Sinar Dunia',2,NULL,0,'satuan','2500','-','1'),(104,'Kwitansi mini B40M Sinar Dunia',2,NULL,0,'satuan','1900','-','1'),(105,'Kwitansi Bisnis Silver Horse',2,NULL,0,'satuan','4500','-','1'),(106,'Label no. 107 Tom & Jerry',2,NULL,0,'satuan','4200','-','1'),(107,'Label no. 112 Tom & Jerry',2,NULL,0,'satuan','4200','-','1'),(108,'Label no. 121 Tom & Jerry',2,NULL,0,'satuan','4200','-','1'),(109,'Laminating Film F4 Vtec',2,NULL,0,'satuan','80000','-','1'),(110,'Laminating Film F4 Toho',2,NULL,0,'satuan','65000','-','1'),(111,'Laminating Film A3 Vtec',2,NULL,0,'satuan','180000','-','1'),(112,'Laminating Film A3 Toho',2,NULL,0,'satuan','160000','-','1'),(113,'Lem Glukol Tanggung',2,NULL,0,'satuan','1800','-','1'),(114,'Lem cair Povinal 112',2,NULL,0,'satuan','2900','-','1'),(115,'Lem stick Bantex 8 gr',2,NULL,0,'satuan','3400','-','1'),(116,'Lem stick Bantex 22 gr',2,NULL,0,'satuan','8000','-','1'),(117,'Lem stick Bantex 35 gr',2,NULL,0,'satuan','12500','-','1'),(118,'Lem Alteco',2,NULL,0,'satuan','3800','-','1'),(119,'Magnetboard Joyko MN-305',2,NULL,0,'satuan','4000','-','1'),(120,'Magnetboard Joyko MN-1',2,NULL,0,'satuan','4900','-','1'),(121,'Map kertas Suramadu ',2,NULL,0,'satuan','350','-','1'),(122,'Map kertas buffalo Diamond 2002',2,NULL,0,'satuan','1800','-','1'),(123,'Map kertas snelhecter Suramadu ',2,NULL,0,'satuan','450','-','1'),(124,'Map kertas snelhecter Diamond 5002 ',2,NULL,0,'satuan','2400','-','1'),(125,'Map kertas snelhecter plastik QQ ',2,NULL,0,'satuan','4100','-','1'),(126,'Map jepit plastik QQ ',2,NULL,0,'satuan','4100','-','1'),(127,'Map L/Clear Holder Inter X ',2,NULL,0,'satuan','1300','-','1'),(128,'Map kancing Inter X',2,NULL,0,'satuan','2500','-','1'),(129,'Map Tali Inter X',2,NULL,0,'satuan','2900','-','1'),(130,'Map gantung/hang map QQ',2,NULL,0,'satuan','2700','-','1'),(131,'Map batik GM',2,NULL,0,'satuan','6000','-','1'),(132,'Odner A4 Bantex 1450',2,NULL,0,'satuan','23000','-','1'),(133,'Odner F4 Bantex 1465',2,NULL,0,'satuan','23500','-','1'),(134,'Odner folio Teka 401',2,NULL,0,'satuan','13500','-','1'),(135,'Odner kwitansi Teka 101',2,NULL,0,'satuan','13500','-','1'),(136,'Paper klip no. 1 Joyko',2,NULL,0,'satuan','1600','-','1'),(137,'Paper klip no. 3 Joyko',2,NULL,0,'satuan','1300','-','1'),(138,'Paper klip no. 5 Joyko',2,NULL,0,'satuan','3400','-','1'),(139,'Pappertry 2 susun microtop 602',2,NULL,0,'satuan','55000','-','1'),(140,'Pappertry 2 susun microtop 802',2,NULL,0,'satuan','73000','-','1'),(141,'Pappertry 3 susun microtop 603',2,NULL,0,'satuan','65000','-','1'),(142,'Pappertry 3 susun microtop 803',2,NULL,0,'satuan','90000','-','1'),(143,'Papperfastener plastik Joyko ',2,NULL,0,'satuan','6000','-','1'),(144,'Papperfastener besi SDI',2,NULL,0,'satuan','22000','-','1'),(145,'Pensil 2B Joyko ',2,NULL,0,'satuan','800','-','1'),(146,'Pensil 2B Steadler',2,NULL,0,'satuan','2700','-','1'),(147,'Pensil mekanik Pilot H165',2,NULL,0,'satuan','14500','-','1'),(148,'Penghapus pensil B20 Joyko',2,NULL,0,'satuan','1300','-','1'),(149,'Penghapus pensil B40 Joyko',2,NULL,0,'satuan','650','-','1'),(150,'Penghapus pensil B20 Steadler',2,NULL,0,'satuan','7700','-','1'),(151,'Penghapus pensil B40 Steadler',2,NULL,0,'satuan','1700','-','1'),(152,'Penghapus papan whiteboard GM',2,NULL,0,'satuan','7000','-','1'),(153,'Perforator 30XL Joyko',2,NULL,0,'satuan','10000','-','1'),(154,'Perforator 40XL Joyko',2,NULL,0,'satuan','20100','-','1'),(155,'Perforator 85XL Joyko',2,NULL,0,'satuan','41250','-','1'),(156,'Paku pines Joyko',2,NULL,0,'satuan','1200','-','1'),(157,'Penggaris mika 30 cm Butterfly',2,NULL,0,'satuan','1400','-','1'),(158,'Penggaris mika 40 cm Butterfly',2,NULL,0,'satuan','7000','-','1'),(159,'Penggaris mika 60 cm Butterfly',2,NULL,0,'satuan','9500','-','1'),(160,'Penggaris besi 30 cm Vtec',2,NULL,0,'satuan','2600','-','1'),(161,'Penggaris besi 60 cm Vtec',2,NULL,0,'satuan','6500','-','1'),(162,'Post it 653 3M',2,NULL,0,'satuan','4750','-','1'),(163,'Post it 654 3M',2,NULL,0,'satuan','10400','-','1'),(164,'Post it 655 3M',2,NULL,0,'satuan','18000','-','1'),(165,'Post it 656 3M',2,NULL,0,'satuan','9000','-','1'),(166,'Post it Sign Here 3M',2,NULL,0,'satuan','21500','-','1'),(167,'Post it 653 Eagle',2,NULL,0,'satuan','4500','-','1'),(168,'Post it 654 Eagle',2,NULL,0,'satuan','7800','-','1'),(169,'Post it 655 Eagle',2,NULL,0,'satuan','9600','-','1'),(170,'Post it 656 Eagle',2,NULL,0,'satuan','4100','-','1'),(171,'Pushpin Joyko PP-30',2,NULL,0,'satuan','2800','-','1'),(172,'Rautan pensil Carl Angel 5',2,NULL,0,'satuan','120000','-','1'),(173,'Remover Max RZ20',2,NULL,0,'satuan','24000','-','1'),(174,'Spidol kecil/Sign pen Snowman ',2,NULL,0,'satuan','800','-','1'),(175,'Spidol whiteboard BG12 Snowman ',2,'Spidol White Board merek Snowman',0,'satuan','5800','-','1'),(176,'Spidol permanent G12 Snowman ',2,NULL,0,'satuan','4900','-','1'),(177,'Spidol whitepaint marker Snowman  ',2,NULL,0,'satuan','11000','-','1'),(178,'Stabilo Boss  ',2,NULL,0,'satuan','6500','-','1'),(179,'Stabilo Joyko HL 1-5',2,NULL,0,'satuan','3000','-','1'),(180,'Stempel tanggal Joyko D-3',2,NULL,0,'satuan','5700','-','1'),(181,'Stampad Joyko no. 1',2,NULL,0,'satuan','5600','-','1'),(182,'Stampad Joyko no. 2',2,NULL,0,'satuan','11600','-','1'),(183,'Stampad Artline no. 1',2,NULL,0,'satuan','24500','-','1'),(184,'Stampad Artline no. 2',2,NULL,0,'satuan','47500','-','1'),(185,'Tali Rafia 1kg Kerbau',2,NULL,0,'satuan','16000','-','1'),(186,'Tali Rafia 1/2kg Kerbau',2,NULL,0,'satuan','10000','-','1'),(187,'Telstruk ukuran 58x65 Sinar Line',2,NULL,0,'satuan','3500','-','1'),(188,'Telstruk ukuran 68x65 Sinar Line',2,NULL,0,'satuan','3500','-','1'),(189,'Telstruk ukuran 75x65 Sinar Line',2,NULL,0,'satuan','4000','-','1'),(190,'Tinta stempel King size Yamura ',2,NULL,0,'satuan','7400','-','1'),(191,'Tinta stempel trodat',2,NULL,0,'satuan','26500','-','1'),(192,'Cutter kecil A300 Joyko',2,NULL,0,'satuan','4200','-','1'),(193,'Isi staples Max no. 10',2,'Isi staples Max no. 10',0,'satuan','4000','-','1'),(194,'Rautan pensil Joyko A5',2,NULL,0,'satuan','55000','-','1'),(195,'Stempel lunas Joyko S68',2,NULL,0,'satuan','7200','-','1'),(198,'trucki',1,'',0,'te','200000','100000','1'),(199,'penghapus',1,'test',0,'dus','15000','','1'),(200,'Amplop Coklat Folio Sams-one D/Kujang Kencana',NULL,NULL,0,NULL,'27500','-','1'),(201,'Ballpoint Balliner Pilots',NULL,NULL,0,NULL,'12000','-','1'),(202,'Ballpoint Balliner Pilot',NULL,NULL,0,NULL,'12000','-','1'),(203,'Business File Folio Inter X',NULL,NULL,0,NULL,'23501','-','1');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `role_id` smallint(6) DEFAULT NULL,
  `user_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kasmudiyanto','a9993e364706816aba3e25717850c26c9cd0d89d','1d1f727c72b505d211b9bbcd8ce1f31cba82dd9b');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-20 22:04:08
