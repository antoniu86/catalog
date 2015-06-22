-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: catalog
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `given_at` datetime NOT NULL,
  `edited_at` datetime DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `important` tinyint(1) DEFAULT '0',
  `percentage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insights`
--

DROP TABLE IF EXISTS `insights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insights`
--

LOCK TABLES `insights` WRITE;
/*!40000 ALTER TABLE `insights` DISABLE KEYS */;
INSERT INTO `insights` VALUES (1,20,'AAA 1','jhfjkhdfhfjks hlfhdjksh','2015-06-21 01:48:16'),(2,20,'jkhk','khjkhklhhkhjk hfdhkslh sdf \r\nsd f\r\nasd f\r\ns \r\nfs\r\n df\r\na \r\n sd','2015-06-21 02:03:58'),(3,20,'Ana are..','.........................................................MEREEEEEEE!','2015-06-21 11:32:25');
/*!40000 ALTER TABLE `insights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klasses`
--

DROP TABLE IF EXISTS `klasses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `year_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klasses`
--

LOCK TABLES `klasses` WRITE;
/*!40000 ALTER TABLE `klasses` DISABLE KEYS */;
INSERT INTO `klasses` VALUES (4,'A',1,16,18,'2015-06-20 17:08:54'),(5,'B',1,16,21,'2015-06-20 17:16:21'),(6,'X A e',2,20,25,'2015-06-20 17:53:11'),(7,'rry',2,20,25,'2015-06-22 21:31:31');
/*!40000 ALTER TABLE `klasses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klassstudents`
--

DROP TABLE IF EXISTS `klassstudents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klassstudents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klass_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `year_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klassstudents`
--

LOCK TABLES `klassstudents` WRITE;
/*!40000 ALTER TABLE `klassstudents` DISABLE KEYS */;
INSERT INTO `klassstudents` VALUES (11,6,27,'0000-00-00 00:00:00',2,20),(12,7,24,'0000-00-00 00:00:00',2,20);
/*!40000 ALTER TABLE `klassstudents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klassteachers`
--

DROP TABLE IF EXISTS `klassteachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klassteachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klass_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `year_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klassteachers`
--

LOCK TABLES `klassteachers` WRITE;
/*!40000 ALTER TABLE `klassteachers` DISABLE KEYS */;
INSERT INTO `klassteachers` VALUES (4,7,25,'0000-00-00 00:00:00',0,0);
/*!40000 ALTER TABLE `klassteachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periods`
--

DROP TABLE IF EXISTS `periods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `start_at` date NOT NULL,
  `end_at` date NOT NULL,
  `school_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periods`
--

LOCK TABLES `periods` WRITE;
/*!40000 ALTER TABLE `periods` DISABLE KEYS */;
INSERT INTO `periods` VALUES (1,'Sem 2','2015-06-03','2015-06-04',16,1,'2015-06-19 23:45:44'),(2,'Sem 1','2015-06-01','2015-06-02',16,1,'2015-06-19 23:47:03'),(3,'Sem 2','2015-06-18','2015-06-30',20,2,'2015-06-20 17:52:18'),(4,'Sem 1','2015-06-01','2015-06-17',20,2,'2015-06-20 17:52:33');
/*!40000 ALTER TABLE `periods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` mediumtext,
  `info` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
INSERT INTO `schools` VALUES (16,'Scoala 1 1 2','contact scoala 1 1 2','alte informatii 1 1 2'),(17,'Scoala 2','contact 2','informatii 2'),(18,'scoala 3','contact 3','informatii 3'),(19,'scoala 4','scoala 4','scoala 4'),(20,'VB','contact','informatii');
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext,
  `school_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (3,'materie 1 1 ','materie 1 desc 1',16,'2015-06-18 21:02:03'),(4,'materie 2','materie 2',16,'2015-06-18 22:41:02'),(5,'materie 3 1','materie 3 2',16,'2015-06-18 22:49:14'),(6,'Biologie',NULL,20,'2015-06-20 17:50:57'),(7,'Matematica','Matematica',20,'2015-06-21 12:03:09');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `cnp` varchar(13) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `system` tinyint(1) DEFAULT '0',
  `administrator` tinyint(1) DEFAULT '0',
  `teacher` tinyint(1) DEFAULT '0',
  `parent` tinyint(1) DEFAULT '0',
  `student` tinyint(1) DEFAULT '0',
  `school_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `address` mediumtext,
  `birthday` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','1234','Root','Root','14345533','admin@dfff',1,0,0,0,0,1,'2015-06-02 20:02:02','2015-06-21 11:41:42','adresa 123 45',NULL,NULL,NULL),(13,'admin1','1234','Admin 1','Admin 1','14345533','admin@dfff',0,1,0,0,0,16,'0000-00-00 00:00:00','2015-06-21 11:31:34','adresa 123 45',NULL,NULL,NULL),(14,'admin2','1234','admin 2','admin 2','335435353','admin2@admin',0,1,0,0,0,17,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(15,'admin3','1234','admin 3','admin 3','4564544564','admin3@admin3',0,1,0,0,0,18,'2015-06-15 21:43:48','2015-06-15 21:44:08',NULL,NULL,NULL,NULL),(16,'admin4','1234','admin 4','admin 4','5655757576','admin4@admin4',0,1,0,0,0,19,'2015-06-16 20:47:37','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(17,'student','1234','student','student','',NULL,0,0,0,0,1,16,'0000-00-00 00:00:00','2015-06-19 21:13:53',NULL,NULL,NULL,NULL),(18,'','','prof','profesor','',NULL,0,0,1,0,0,16,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,'2015-06-25',NULL,4),(19,'student1','1234','student 1','student 1','student 1','student1@student1',0,0,0,0,1,16,'2015-06-19 20:32:55','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(20,'student2','1234','student 2','student 2','student 2','student2@student2',0,0,0,0,1,16,'2015-06-19 20:34:39','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(21,'prof1','1234','prof 1','prof 1','1860210013913','prof1@prof1.ro',0,0,1,0,0,16,'2015-06-20 17:15:52','0000-00-00 00:00:00',NULL,NULL,NULL,5),(22,'nena','1234','nena','nena','1234','nena@nena.ro',0,1,0,0,0,20,'2015-06-20 17:50:07','2015-06-22 21:31:16',NULL,NULL,NULL,NULL),(24,'stud','1234','stud','stud 111','46545645646','stud@stud.stud',0,0,0,0,1,20,'2015-06-21 00:32:15','2015-06-22 21:42:54','ggj','2015-06-16','546',NULL),(25,'prof','1234','prof','prof 1','454546','prof1@prof1.ro',0,0,1,0,0,20,'2015-06-22 20:44:21','2015-06-22 21:42:24','ugjggjhg','2015-06-09','jhgjhg',6),(26,'ss','ss','stud','stud','34543453','ss@ss.ss',0,0,0,0,1,20,'2015-06-22 20:58:20','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(27,'ss','ss','stud','stud','3553543','ss@ss.ss',0,0,0,0,1,20,'2015-06-22 20:58:38','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(28,'ss','ss','stud','stud','454546','ss@ss.ss',0,0,0,0,1,20,'2015-06-22 20:58:57','0000-00-00 00:00:00',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `years` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `start_at` date NOT NULL,
  `end_at` date NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `years`
--

LOCK TABLES `years` WRITE;
/*!40000 ALTER TABLE `years` DISABLE KEYS */;
INSERT INTO `years` VALUES (1,'2013',16,'2015-06-03','2015-06-04','2015-06-19 23:05:32'),(2,'2015',20,'2015-06-01','2015-06-30','2015-06-20 17:51:59');
/*!40000 ALTER TABLE `years` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-22 21:45:33
