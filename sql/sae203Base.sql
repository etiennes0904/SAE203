-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `createur`
--

DROP TABLE IF EXISTS `createur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `createur` (
  `id_crea` int(5) NOT NULL COMMENT 'id dans l''ordre',
  `nom_crea` text NOT NULL COMMENT 'nom du createur',
  `nationalite_crea` text NOT NULL COMMENT 'nationalité',
  `marque_crea` text NOT NULL COMMENT 'nom de la marque'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `createur`
--

LOCK TABLES `createur` WRITE;
/*!40000 ALTER TABLE `createur` DISABLE KEYS */;
INSERT INTO `createur` VALUES (1,'Tinker Hatfield','USA','Nike & Jordan'),(2,'Peter Moore','USA','Jordan'),(3,'Bruce Kilgore','USA','Nike');
/*!40000 ALTER TABLE `createur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sneakers`
--

DROP TABLE IF EXISTS `sneakers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sneakers` (
  `id_sneakers` int(11) NOT NULL,
  `nom_sneakers` text NOT NULL,
  `type_sneakers` text NOT NULL,
  `prix_sneakers` text NOT NULL,
  `couleur_sneakers` text NOT NULL,
  `matiere_sneakers` text NOT NULL,
  `photo_sneakers` text NOT NULL,
  `_id_crea` int(11) NOT NULL,
  PRIMARY KEY (`id_sneakers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sneakers`
--

LOCK TABLES `sneakers` WRITE;
/*!40000 ALTER TABLE `sneakers` DISABLE KEYS */;
INSERT INTO `sneakers` VALUES (1,'Jordan 1 Chicago','Basketball','160','Rouge','Cuir','jordan1chicago.png',1),(2,'Jordan 3 White Cement','Basketball','189','Blanc','Cuir','jordan1white.png',1),(3,'Jordan 4 Bred','Basketball','210','Noir','Daim','jordan4bred.png',1),(4,'Air max 1 OG Red','Running','159','Rouge','Mesh','airmax1ogred.png',1),(5,'Air max  90 OG Red','Running','159','Rouge & Grise','Mesh','airmax90ogred.png',1),(6,'Jordan 6 Infrared','Basketball','189','Infrared','Daim & Cuir','jordan6infra.png',1),(7,'Air force 1 white','lifestyle','110','Blanc','Cuir','airforce1white.png',3),(8,'Air max 95 Neon','Lifestyle','179','Néon','Mesh & Daim','airmax95neon.png',1),(9,'Jordan 3 Fragment','Lifestyle','189','Blanc & Noir','Cuir','jordan3frag.png',1),(10,'Jordan 5 Aqua','Basketball','210','Aqua','Cuir','jordan5aqua.png',1);
/*!40000 ALTER TABLE `sneakers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-23  7:16:10
