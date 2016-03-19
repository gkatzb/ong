-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: ong
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `subatividade`
--

DROP TABLE IF EXISTS `subatividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subatividade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_atividade` int(10) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subatividade_id_atividade_foreign` (`id_atividade`),
  CONSTRAINT `subatividade_id_atividade_foreign` FOREIGN KEY (`id_atividade`) REFERENCES `atividade` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subatividade`
--

LOCK TABLES `subatividade` WRITE;
/*!40000 ALTER TABLE `subatividade` DISABLE KEYS */;
INSERT INTO `subatividade` VALUES (1,1,'Procure os números iguais:','numeros_iguais'),(2,2,'Ligue a figura à quantidade certa:','qtd_certa'),(3,3,'Resolva as somas:','somas'),(4,4,'Encontre os objetos que comecem com a vogal A:','encontre_a'),(5,5,'Encontre os objetos que comecem com a vogal E:','encontre_e'),(6,5,'Encontre os objetos que comecem com a vogal I:','encontre_i'),(7,5,'Encontre os objetos que comecem com a vogal O:','encontre_o'),(8,5,'Encontre os objetos que comecem com a vogal U:','encontre_u'),(9,5,'Complete com a vogal A e copie as palavras:','complete_a'),(10,5,'Complete com a vogal E e copie as palavras:','complete_e'),(11,5,'Complete com a vogal I e copie as palavras:','complete_i'),(12,5,'Complete com a vogal O e copie as palavras:','complete_o'),(13,5,'Complete com a vogal U e copie as palavras:','complete_u'),(14,6,'Observe as palavras e numere o masculino com o feminino:','genero'),(15,7,'Reescreva a frase trocando as figuras pelo seu plural:','sing_plural'),(16,7,'Reescreva as figuras da atividade anterior no singular:','singular'),(17,8,'Separe os substantivos comuns dos próprios:','substantivos');
/*!40000 ALTER TABLE `subatividade` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-18 23:20:53
