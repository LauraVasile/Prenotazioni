-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: covid
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prenotazioni`
--

DROP TABLE IF EXISTS `prenotazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prenotazioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codice_fiscale` varchar(16) NOT NULL,
  `giorno` date NOT NULL,
  `codice_prenotazione` varchar(50) NOT NULL,
  `eseguito` tinyint(1) NOT NULL DEFAULT 0,
  `note` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prenotazioni`
--

LOCK TABLES `prenotazioni` WRITE;
/*!40000 ALTER TABLE `prenotazioni` DISABLE KEYS */;
INSERT INTO `prenotazioni` VALUES (1,'vsllra','2021-03-09','',0,NULL),(2,'bgt','2021-03-09','',0,NULL),(3,'vslr','2021-03-08','',0,NULL),(4,'vslr','2021-03-08','',0,NULL),(5,'vslr','2021-03-08','',0,NULL),(6,'vslr','2021-03-08','',0,NULL),(7,'vslrvvv','2021-03-08','',0,NULL),(8,'blrsd','0000-00-00','',0,NULL),(9,'cccds','2021-03-08','',0,NULL),(10,'ciao','2021-03-11','',0,NULL),(11,'vsl','2021-03-09','',0,NULL),(12,'vs','2021-03-09','',0,NULL),(13,'fkoej','2021-03-11','',0,NULL),(14,'ciao','2021-03-20','',0,NULL),(15,'cccdss','2021-03-20','',0,NULL),(16,'blrsdll','2021-03-08','',0,NULL),(17,'njhuh','2021-03-20','',0,NULL),(18,'blrsd','0000-00-00','',0,NULL),(19,'gagrgr','2021-03-09','',0,NULL),(20,'bgtdfds','2021-03-20','',0,NULL),(21,'bgtdfds','2021-03-20','',0,NULL),(22,'fejijfiao','2021-03-23','',0,NULL),(23,'csmnr','2021-03-22','',0,NULL),(24,'CNSTVSL','2021-03-13','',0,NULL),(25,'CNSTVSLRRR','2021-03-13','',0,NULL),(26,'cmladg94','2021-03-28','',0,NULL),(27,'RRLLLA','2021-03-20','37d947c5f121',0,NULL),(28,'AAABDBS','2021-03-23','86a171dcf2f5',0,NULL),(29,'ALKFJIDAJFD','0000-00-00','be1c9a645049',0,NULL),(30,'ALKFJIDAJFD','2021-03-31','24f42a58cb2d',0,NULL);
/*!40000 ALTER TABLE `prenotazioni` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-27 11:15:37
