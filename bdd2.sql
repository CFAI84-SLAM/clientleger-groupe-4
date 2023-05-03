-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: new_mcd
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
-- Table structure for table `Categorie`
--

DROP TABLE IF EXISTS `Categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categorie` (
  `Id_Categorie` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categorie`
--

LOCK TABLES `Categorie` WRITE;
/*!40000 ALTER TABLE `Categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `Categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commandes`
--

DROP TABLE IF EXISTS `Commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commandes` (
  `Id_Commandes` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(50) DEFAULT NULL,
  `date_de_commande` datetime DEFAULT NULL,
  `Id_Utilisateur` int(11) DEFAULT NULL,
  `Id_Utilisateur_1` int(11) NOT NULL,
  PRIMARY KEY (`Id_Commandes`),
  KEY `Id_Utilisateur` (`Id_Utilisateur`),
  KEY `Id_Utilisateur_1` (`Id_Utilisateur_1`),
  CONSTRAINT `Commandes_ibfk_1` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `Utilisateur` (`Id_Utilisateur`),
  CONSTRAINT `Commandes_ibfk_2` FOREIGN KEY (`Id_Utilisateur_1`) REFERENCES `Utilisateur` (`Id_Utilisateur`)
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
-- Table structure for table `Ligne_Commande`
--

DROP TABLE IF EXISTS `Ligne_Commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ligne_Commande` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Commandes` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prixHT` decimal(15,3) DEFAULT NULL,
  `prixTTC` decimal(15,2) DEFAULT NULL,
  `tva` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Commandes`),
  KEY `Id_Commandes` (`Id_Commandes`),
  CONSTRAINT `Ligne_Commande_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `Ligne_Commande_ibfk_2` FOREIGN KEY (`Id_Commandes`) REFERENCES `Commandes` (`Id_Commandes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ligne_Commande`
--

LOCK TABLES `Ligne_Commande` WRITE;
/*!40000 ALTER TABLE `Ligne_Commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `Ligne_Commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produit`
--

DROP TABLE IF EXISTS `Produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produit` (
  `Id_Produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prixHT` decimal(15,3) DEFAULT NULL,
  `tva` decimal(15,2) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `Id_Categorie` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`),
  KEY `Id_Categorie` (`Id_Categorie`),
  CONSTRAINT `Produit_ibfk_1` FOREIGN KEY (`Id_Categorie`) REFERENCES `Categorie` (`Id_Categorie`)
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
  `Id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  PRIMARY KEY (`Id_Utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Utilisateur`
--

LOCK TABLES `Utilisateur` WRITE;
/*!40000 ALTER TABLE `Utilisateur` DISABLE KEYS */;
INSERT INTO `Utilisateur` VALUES (1,'test','test',676511451,'test@test.test','test','[]','test','2022-02-03'),(2,'esf','segqrh',96582562,'test@test.teste','ezf','[]','zef','2019-03-09');
/*!40000 ALTER TABLE `Utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-28  9:55:55
