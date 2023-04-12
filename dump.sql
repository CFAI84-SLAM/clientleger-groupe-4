-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: newtest
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0+deb11u1

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `Id_Admin` int(11) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Administrer`
--

DROP TABLE IF EXISTS `Administrer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Administrer` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Ingrédients` int(11) NOT NULL,
  `Id_Admin` int(11) NOT NULL,
  `Id_Menus` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Ingrédients`,`Id_Admin`,`Id_Menus`),
  KEY `Id_Ingrédients` (`Id_Ingrédients`),
  KEY `Id_Admin` (`Id_Admin`),
  KEY `Id_Menus` (`Id_Menus`),
  CONSTRAINT `Administrer_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `Administrer_ibfk_2` FOREIGN KEY (`Id_Ingrédients`) REFERENCES `Ingrédients` (`Id_Ingredients`),
  CONSTRAINT `Administrer_ibfk_3` FOREIGN KEY (`Id_Admin`) REFERENCES `Admin` (`Id_Admin`),
  CONSTRAINT `Administrer_ibfk_4` FOREIGN KEY (`Id_Menus`) REFERENCES `Menus` (`Id_Menus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administrer`
--

LOCK TABLES `Administrer` WRITE;
/*!40000 ALTER TABLE `Administrer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Administrer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Choisir`
--

DROP TABLE IF EXISTS `Choisir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Choisir` (
  `Id_Utilisateur` int(11) NOT NULL,
  `Id_Menus` int(11) NOT NULL,
  PRIMARY KEY (`Id_Utilisateur`,`Id_Menus`),
  KEY `Id_Menus` (`Id_Menus`),
  CONSTRAINT `Choisir_ibfk_1` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `Utilisateur` (`Id_Utilisateur`),
  CONSTRAINT `Choisir_ibfk_2` FOREIGN KEY (`Id_Menus`) REFERENCES `Menus` (`Id_Menus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Choisir`
--

LOCK TABLES `Choisir` WRITE;
/*!40000 ALTER TABLE `Choisir` DISABLE KEYS */;
/*!40000 ALTER TABLE `Choisir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commandes`
--

DROP TABLE IF EXISTS `Commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commandes` (
  `Id_Commandes` int(11) NOT NULL,
  `Etat` varchar(50) DEFAULT NULL,
  `DateDeCommande` datetime DEFAULT NULL,
  `Id_Menus` int(11) NOT NULL,
  PRIMARY KEY (`Id_Commandes`),
  KEY `Id_Menus` (`Id_Menus`),
  CONSTRAINT `Commandes_ibfk_1` FOREIGN KEY (`Id_Menus`) REFERENCES `Menus` (`Id_Menus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Commandes`
--

LOCK TABLES `Commandes` WRITE;
/*!40000 ALTER TABLE `Commandes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Composer`
--

DROP TABLE IF EXISTS `Composer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Composer` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Ingrédients` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Ingrédients`),
  KEY `Id_Ingrédients` (`Id_Ingrédients`),
  CONSTRAINT `Composer_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `Composer_ibfk_2` FOREIGN KEY (`Id_Ingrédients`) REFERENCES `Ingrédients` (`Id_Ingredients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Composer`
--

LOCK TABLES `Composer` WRITE;
/*!40000 ALTER TABLE `Composer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Composer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Consulter`
--

DROP TABLE IF EXISTS `Consulter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Consulter` (
  `Id_Commandes` int(11) NOT NULL,
  `Id_Utilisateur` int(11) NOT NULL,
  `Id_Admin` int(11) NOT NULL,
  PRIMARY KEY (`Id_Commandes`,`Id_Utilisateur`,`Id_Admin`),
  KEY `Id_Utilisateur` (`Id_Utilisateur`),
  KEY `Id_Admin` (`Id_Admin`),
  CONSTRAINT `Consulter_ibfk_1` FOREIGN KEY (`Id_Commandes`) REFERENCES `Commandes` (`Id_Commandes`),
  CONSTRAINT `Consulter_ibfk_2` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `Utilisateur` (`Id_Utilisateur`),
  CONSTRAINT `Consulter_ibfk_3` FOREIGN KEY (`Id_Admin`) REFERENCES `Admin` (`Id_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Consulter`
--

LOCK TABLES `Consulter` WRITE;
/*!40000 ALTER TABLE `Consulter` DISABLE KEYS */;
/*!40000 ALTER TABLE `Consulter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ingrédients`
--

DROP TABLE IF EXISTS `Ingrédients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ingrédients` (
  `Id_Ingredients` int(11) NOT NULL,
  `nom` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Ingredients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ingrédients`
--

LOCK TABLES `Ingrédients` WRITE;
/*!40000 ALTER TABLE `Ingrédients` DISABLE KEYS */;
/*!40000 ALTER TABLE `Ingrédients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Menus`
--

DROP TABLE IF EXISTS `Menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Menus` (
  `Id_Menus` int(11) NOT NULL,
  PRIMARY KEY (`Id_Menus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Menus`
--

LOCK TABLES `Menus` WRITE;
/*!40000 ALTER TABLE `Menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `Menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produit`
--

DROP TABLE IF EXISTS `Produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produit` (
  `Id_Produit` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `Catégorie` int(11) DEFAULT NULL,
  `custom` int(11) DEFAULT NULL,
  `prix_HT` varchar(50) DEFAULT NULL,
  `ventes` int(11) DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produit`
--

LOCK TABLES `Produit` WRITE;
/*!40000 ALTER TABLE `Produit` DISABLE KEYS */;
/*!40000 ALTER TABLE `Produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Utilisateur`
--

DROP TABLE IF EXISTS `Utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Utilisateur` (
  `Id_Utilisateur` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prénom` varchar(50) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Utilisateur`
--

LOCK TABLES `Utilisateur` WRITE;
/*!40000 ALTER TABLE `Utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `Utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faire_partie`
--

DROP TABLE IF EXISTS `faire_partie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faire_partie` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Menus` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Menus`),
  KEY `Id_Menus` (`Id_Menus`),
  CONSTRAINT `faire_partie_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `faire_partie_ibfk_2` FOREIGN KEY (`Id_Menus`) REFERENCES `Menus` (`Id_Menus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faire_partie`
--

LOCK TABLES `faire_partie` WRITE;
/*!40000 ALTER TABLE `faire_partie` DISABLE KEYS */;
/*!40000 ALTER TABLE `faire_partie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-31 16:25:27
