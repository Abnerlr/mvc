CREATE DATABASE  IF NOT EXISTS `maxpedia` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `maxpedia`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: maxpedia
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'All Day Event','#40E0D0','2016-01-01 00:00:00','0000-00-00 00:00:00'),(2,'Long Event','#FF0000','2016-01-07 00:00:00','2016-01-10 00:00:00'),(3,'Repeating Event','#0071c5','2016-01-09 16:00:00','0000-00-00 00:00:00'),(4,'Conference','#40E0D0','2016-01-11 00:00:00','2016-01-13 00:00:00'),(5,'Meeting','#000','2016-01-12 10:30:00','2016-01-12 12:30:00'),(6,'Lunch','#0071c5','2016-01-12 12:00:00','0000-00-00 00:00:00'),(7,'Happy Hour','#0071c5','2016-01-12 17:30:00','0000-00-00 00:00:00'),(8,'Dinner','#0071c5','2016-01-12 20:00:00','0000-00-00 00:00:00'),(9,'Birthday Party','#40E0D0','2016-01-14 07:00:00','2016-01-14 07:00:00'),(10,'Double click to change','#008000','2016-01-28 00:00:00','0000-00-00 00:00:00'),(16,'dfs','#40E0D0','2016-10-05 00:00:00','2016-10-06 00:00:00'),(17,'vacuna','#FF0000','2016-10-07 00:00:00','2016-10-08 00:00:00'),(18,'ejecici','#008000','2016-10-07 00:00:00','2016-10-08 00:00:00'),(19,'cita','#000','2016-10-04 00:00:00','2016-10-05 00:00:00'),(20,'ejecici','#008000','2016-10-06 00:00:00','2016-10-07 00:00:00'),(21,'ejecici','#008000','2016-10-04 00:00:00','2016-10-05 00:00:00'),(22,'libro','#FFD700','2016-10-04 00:00:00','2016-10-05 00:00:00'),(23,'confirmar cita','#FFD700','2016-10-05 00:00:00','2016-10-06 00:00:00'),(24,'Hola  mundo','#FFD700','2016-11-01 00:00:00','2016-11-02 00:00:00'),(25,'Semana Taller mascota','','2016-11-07 00:00:00','2016-11-12 00:00:00'),(26,'Taller 1','#FF0000','2016-11-01 00:00:00','2016-11-03 00:00:00'),(27,'Morri','#40E0D0','2016-11-14 00:00:00','2016-11-19 00:00:00'),(28,'asd','#0071c5','2016-11-20 00:00:00','2016-11-24 00:00:00'),(29,'asd','#008000','2016-11-04 00:00:00','2016-11-05 00:00:00'),(30,'varios','#000','2016-10-30 00:00:00','2016-11-04 00:00:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mascotas`
--

LOCK TABLES `mascotas` WRITE;
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
INSERT INTO `mascotas` VALUES (1,'Puppy','Pastor Aleman','99999.jpg'),(59,'asd','asd','898021.jpg'),(60,'Otra','Hola','507146.png'),(61,'ultima','asd','706379.jpg'),(62,'redirect','rediresct','890613.jpg');
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phonegap_login`
--

DROP TABLE IF EXISTS `phonegap_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phonegap_login` (
  `reg_id` int(1) NOT NULL AUTO_INCREMENT,
  `reg_date` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phonegap_login`
--

LOCK TABLES `phonegap_login` WRITE;
/*!40000 ALTER TABLE `phonegap_login` DISABLE KEYS */;
INSERT INTO `phonegap_login` VALUES (1,'16-05-16 06:31:05','abner','abner_cr_@hotmail.com','1234'),(2,'17-10-16 06:05:05','Alexis Ramos Mora','ramosalx1504@gmail.com','asd123'),(3,'17-10-16 06:19:53','Alexis 2','ramosalx1504@hotmail.com','asd123'),(4,'03-11-16 12:21:25','Esto es una prueba','prueba@prueba.com','asd123');
/*!40000 ALTER TABLE `phonegap_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Ordenador APPLE','99999','APPLE'),(2,'Bebida re','12','Fanta'),(3,'Patatas','3','Pringles');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `userProfession` varchar(50) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (58,'pfinal','notiene','743513.png');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'alex@hotmal.com','asd','Alex','Ramos');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-03 14:33:27
