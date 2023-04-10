# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: kampus
# ------------------------------------------------------
# Server version 5.5.5-10.4.16-MariaDB

USE `kampus`;

#
# Source for table mahasiswa
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `perangkat` varchar(255) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp(),
  `kuliah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table mahasiswa
#

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (1,'2108561006','Ni Putu Intan Cahyani','student@unud.ac.id','Android 11','180.249.185.8','2023-04-10 07:43:26','Website');
INSERT INTO `mahasiswa` VALUES (2,'2108561007','Oskar Maha Kasi','student@unud.ac.id','Android 11','180.249.185.9','2023-04-11 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (3,'2108561008','Ngurah Kelvin Febryanta Lila Ananda','student@unud.ac.id','Android 11','180.249.185.10','2023-04-12 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (4,'2108561009','Putu Agus Dharma Kusuma','student@unud.ac.id','Android 11','180.249.185.11','2023-04-13 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (5,'2108561010','Putu Putri Pratiwi','student@unud.ac.id','Android 11','180.249.185.12','2023-04-14 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (6,'2108561054','Anugrah Ignatius Sitinjak','student@unud.ac.id','Android 11','180.249.185.13','2023-04-15 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (7,'2108561058','I Dewa Ayu Diani','student@unud.ac.id','Android 11','180.249.185.14','2023-04-16 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (8,'2108561063','I Made Agus Rama Wijaya','student@unud.ac.id','Android 11','180.249.185.15','2023-04-17 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (9,'2108561065','Made Dhandy Satria Mahagangga','student@unud.ac.id','Android 11','180.249.185.16','2023-04-18 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (10,'2108561067','I Made Surya Adi Palguna','student@unud.ac.id','Android 11','180.249.185.17','2023-04-19 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (11,'2108561077','I Putu Teddy Dharma Wijaya','student@unud.ac.id','Android 11','180.249.185.18','2023-04-20 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (12,'2108561082','Kadek Dwitya Adhi Pradyto','student@unud.ac.id','Android 11','180.249.185.19','2023-04-21 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (13,'2108561116','Komang Arsa Wiguna','student@unud.ac.id','Android 11','180.249.185.20','2023-04-22 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (14,'2108561117','Raindra Pramathana','student@unud.ac.id','Android 11','180.249.185.21','2023-04-23 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (15,'2108561118','Rafly Shaquille Subhan','student@unud.ac.id','Android 11','180.249.185.22','2023-04-24 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (16,'2108561119','I Gede Ngurah Arya Wira Putra','student@unud.ac.id','Android 11','180.249.185.23','2023-04-25 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (17,'2108561120','I Putu Yoga Laksana Putra','student@unud.ac.id','Android 11','180.249.185.24','2023-04-26 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (18,'2108561005','Putu Widyantara Artanta Wibawa','student@unud.ac.id','Android 11','180.249.185.25','2023-04-27 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (19,'2108561015','Kenny Belle Lesmana','student@unud.ac.id','Android 11','180.249.185.26','2023-04-28 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (20,'2108561020','I Made Ari Madya Santosa','student@unud.ac.id','Android 11','180.249.185.27','2023-04-29 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (21,'2108561025','I Nyoman Dheva Surya','student@unud.ac.id','Android 11','180.249.185.28','2023-04-30 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (22,'2108561031','I Komang Gede Apriana','student@unud.ac.id','Android 11','180.249.185.29','2023-05-01 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (23,'2108561059','Albert Okario','student@unud.ac.id','Android 11','180.249.185.30','2023-05-02 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (24,'2108561064','I Gusti Putu Wisnu Wardhana','student@unud.ac.id','Android 11','180.249.185.31','2023-05-03 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (25,'2108561069','Roger Julian Sitorus','student@unud.ac.id','Android 11','180.249.185.32','2023-05-04 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (26,'2108561074','Shiennyta Florensia Adiriyanto','student@unud.ac.id','Android 11','180.249.185.33','2023-05-05 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (27,'2108561080','Antonius Ata','student@unud.ac.id','Android 11','180.249.185.34','2023-05-06 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (28,'2108561085','Sammaditthi Gotama','student@unud.ac.id','Android 11','180.249.185.35','2023-05-07 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (29,'2108561090','Dewa Agung Ayu Mutiara Dewi','student@unud.ac.id','Android 11','180.249.185.36','2023-05-08 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (30,'2108561095','Made Bayu Maha Krisna Siaka','student@unud.ac.id','Android 11','180.249.185.37','2023-05-09 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (31,'2108561100','Kevin Moses Waleleng','student@unud.ac.id','Android 11','180.249.185.38','2023-05-10 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (32,'2108561105','I Gusti Bagus Ngurah Agung Brian Wijaya','student@unud.ac.id','Android 11','180.249.185.39','2023-05-11 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (33,'2108561110','Anak Agung Aditya Nugraha','student@unud.ac.id','Android 11','180.249.185.40','2023-05-12 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (34,'2108561115','Hana Christine Octavia','student@unud.ac.id','Android 11','180.249.185.41','2023-05-13 07:43:25','Website');
INSERT INTO `mahasiswa` VALUES (35,'1608561033','Aloysius Anugerah Kristian','student@unud.ac.id','Android 11','180.249.185.42','2023-05-14 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (36,'2008561017','I Ketut Oning Pusparama','student@unud.ac.id','Android 11','180.249.185.43','2023-05-15 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (37,'2008561028','I Ketut Santa Wijaya','student@unud.ac.id','Android 11','180.249.185.44','2023-05-16 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (38,'2008561048','I Dewa Made Candra Wiguna Marcelino','student@unud.ac.id','Android 11','180.249.185.45','2023-05-17 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (39,'2008561051','I Nyoman Restu Muliarta','student@unud.ac.id','Android 11','180.249.185.46','2023-05-18 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (40,'2008561053','Tristan Bey Kusuma','student@unud.ac.id','Android 11','180.249.185.47','2023-05-19 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (41,'2008561066','William Soeparman','student@unud.ac.id','Android 11','180.249.185.48','2023-05-20 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (42,'2008561084','I Ketut Teguh Wibawa Lessmana Putra. T','student@unud.ac.id','Android 11','180.249.185.49','2023-05-21 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (43,'2008561088','Ni Kadek Yulia Dewi','student@unud.ac.id','Android 11','180.249.185.50','2023-05-22 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (44,'2008561093','Albertus Ivan Suryawan','student@unud.ac.id','Android 11','180.249.185.51','2023-05-23 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (45,'2008561097','Muhammad Arrysatrya Yusuf Putranda','student@unud.ac.id','Android 11','180.249.185.52','2023-05-24 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (46,'2008561100','Putu Bagus Dio Pranata','student@unud.ac.id','Android 11','180.249.185.53','2023-05-25 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (47,'2008561106','I Made Krisna Dwipa Jaya','student@unud.ac.id','Android 11','180.249.185.54','2023-05-26 07:43:25','Mobile');
INSERT INTO `mahasiswa` VALUES (48,'2008561053','Tristan Bey Kusuma','student@unud.ac.id','Android 11','180.249.185.55','2023-05-27 07:43:25','Warehouse');
INSERT INTO `mahasiswa` VALUES (49,'2008561082','Wahyu Vidiadivani','student@unud.ac.id','Android 11','180.249.185.56','2023-05-28 07:43:25','Warehouse');
INSERT INTO `mahasiswa` VALUES (50,'2008561093','Albertus Ivan Suryawan','student@unud.ac.id','Android 11','180.249.185.57','2023-05-29 07:43:25','Warehouse');
INSERT INTO `mahasiswa` VALUES (51,'2008561097','Muhammad Arrysatrya Yusuf Putranda','student@unud.ac.id','Android 11','180.249.185.58','2023-05-30 07:43:25','Warehouse');
INSERT INTO `mahasiswa` VALUES (52,'2008561106','I Made Krisna Dwipa Jaya','student@unud.ac.id','Android 11','180.249.185.59','2023-05-31 07:43:25','Warehouse');
INSERT INTO `mahasiswa` VALUES (53,'2008561111','Ida Ayu Bintang Kartika Maharani','student@unud.ac.id','Android 11','180.249.185.60','2023-06-01 07:43:25','Warehouse');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'offline',
  `tanggal` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table user
#

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (14,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin','offline',NULL);
INSERT INTO `user` VALUES (15,'hello','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d','hello','offline',NULL);
INSERT INTO `user` VALUES (16,'hello','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d','hello','offline',NULL);
INSERT INTO `user` VALUES (17,'hi','c22b5f9178342609428d6f51b2c5af4c0bde6a42','hi','offline',NULL);
INSERT INTO `user` VALUES (18,'bagus','f81c82b4dc3d90208a3d45363660b7012e35a045','bagus','offline',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table visitors
#

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `longitude` varchar(255) DEFAULT '0',
  `latitude` varchar(255) DEFAULT '0',
  `os` varchar(255) DEFAULT NULL,
  `osv` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table visitors
#

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'::1',' x64','2023-04-09 16:49:17','115.2244737','-8.6392938','Windows NT 10.0',' Win64','Google Chrome');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
