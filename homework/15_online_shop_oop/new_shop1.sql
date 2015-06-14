-- MySQL dump 10.13  Distrib 5.6.19, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: new_shop
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basket` (
  `Basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_completed` int(11) DEFAULT NULL,
  `Basket_session_hash` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`Basket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES (5,1,'met6ud4rtcf4jm7r10pepbc2b5',0),(6,1,'met6ud4rtcf4jm7r10pepbc2b5',0),(7,1,'met6ud4rtcf4jm7r10pepbc2b5',0),(9,1,'met6ud4rtcf4jm7r10pepbc2b5',0),(10,1,'2j9smmmn2v8ohgcrhrjja0a884',0),(12,1,'ls1lpa5dfeg6r6lh1daujmnpn4',0),(13,1,'ls1lpa5dfeg6r6lh1daujmnpn4',0),(15,1,'ls1lpa5dfeg6r6lh1daujmnpn4',0),(16,1,'sqrj93ndbkmtutledi2ampod67',0),(17,1,'sqrj93ndbkmtutledi2ampod67',0),(18,1,'sqrj93ndbkmtutledi2ampod67',0),(19,1,'sqrj93ndbkmtutledi2ampod67',0),(20,1,'vajf1d96p8165jgsvs5avm8u45',0),(21,1,'4e02itvr2u89pro01rfpacca73',0),(22,1,'4e02itvr2u89pro01rfpacca73',6),(23,1,'4e02itvr2u89pro01rfpacca73',7),(24,1,'4e02itvr2u89pro01rfpacca73',11),(25,1,'4e02itvr2u89pro01rfpacca73',13),(26,1,'4e02itvr2u89pro01rfpacca73',15),(27,1,'4e02itvr2u89pro01rfpacca73',16),(28,1,'4e02itvr2u89pro01rfpacca73',13),(29,1,'4e02itvr2u89pro01rfpacca73',15),(30,1,'f5609cerrfv0i5h9c3i68l62m4',13),(31,1,'f5609cerrfv0i5h9c3i68l62m4',16),(32,1,'f5609cerrfv0i5h9c3i68l62m4',17),(33,1,'f5609cerrfv0i5h9c3i68l62m4',13),(34,1,'icju6b312e9dvb0v5unhv984r7',13),(35,1,'icju6b312e9dvb0v5unhv984r7',13),(36,1,'icju6b312e9dvb0v5unhv984r7',13),(37,1,'icju6b312e9dvb0v5unhv984r7',13),(38,1,'icju6b312e9dvb0v5unhv984r7',13),(39,1,'0r51sitsrdubresa3263f80jv0',15),(40,1,'0r51sitsrdubresa3263f80jv0',15),(41,1,'0r51sitsrdubresa3263f80jv0',15),(42,1,'0r51sitsrdubresa3263f80jv0',15),(43,1,'0r51sitsrdubresa3263f80jv0',15),(44,1,'0r51sitsrdubresa3263f80jv0',15),(45,1,'dk5jln3007s3ttvej0hb16ai16',16),(46,1,'dk5jln3007s3ttvej0hb16ai16',17),(48,1,'5ptnf4ib3agsm3qo60bvu2up80',17),(49,1,'5ptnf4ib3agsm3qo60bvu2up80',17),(50,1,'k6k5vtgas7h0o67ngl5rumacm4',16),(52,1,'k6k5vtgas7h0o67ngl5rumacm4',16),(53,1,'k6k5vtgas7h0o67ngl5rumacm4',16),(54,1,'jinrb1oohjngv4chqolcgb55u7',22),(55,1,'jinrb1oohjngv4chqolcgb55u7',18),(56,1,'0dak0hi16vsviao8vlp1kne6m4',16),(57,1,'0dak0hi16vsviao8vlp1kne6m4',23);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `basket_products`
--

DROP TABLE IF EXISTS `basket_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basket_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Basket_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_basket_basketID_idx` (`Basket_id`),
  KEY `fk_product_productID_idx` (`Product_id`),
  CONSTRAINT `fk_basket_basketID` FOREIGN KEY (`Basket_id`) REFERENCES `basket` (`Basket_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_product_productID` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket_products`
--

LOCK TABLES `basket_products` WRITE;
/*!40000 ALTER TABLE `basket_products` DISABLE KEYS */;
INSERT INTO `basket_products` VALUES (1,5,22),(2,5,3),(3,6,22),(4,6,3),(5,7,22),(6,7,3),(7,9,4),(8,9,5),(9,10,21),(10,10,20),(11,12,3),(12,12,4),(13,13,5),(14,13,6),(15,15,3),(16,15,5),(17,16,21),(18,17,5),(19,18,7),(20,18,8),(21,19,3),(22,19,4),(23,20,3),(24,20,4),(25,21,16),(26,22,17),(27,23,6),(28,24,5),(29,25,3),(30,26,4),(31,27,3),(32,28,4),(33,29,20),(34,30,3),(35,30,12),(36,31,11),(37,32,5),(38,32,22),(39,33,4),(40,34,4),(41,37,3),(42,38,3),(43,39,4),(44,41,3),(45,43,3),(46,43,4),(47,44,5),(48,44,6),(49,44,7),(50,45,8),(51,45,9),(52,45,10),(53,46,12),(54,46,13),(55,46,14),(56,48,3),(57,48,5),(58,49,6),(59,49,7),(60,50,5),(61,50,6),(62,52,7),(63,52,8),(64,53,5),(65,53,6),(66,54,6),(67,54,7),(68,54,8),(69,55,8),(70,55,9),(71,56,3),(72,56,5),(73,57,13),(74,57,14);
/*!40000 ALTER TABLE `basket_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `InStock` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL,
  `Path` varchar(45) NOT NULL,
  PRIMARY KEY (`Product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (3,'Зарядно1','да',25,'01.jpg'),(4,'Разклонител','да',35,'02.jpg'),(5,'Букса','да',45,'03.jpg'),(6,'Слушалки за телефон','да',20,'04.jpg'),(7,'Калъфче','да',53,'05.jpg'),(8,'Държач 1','да',45,'06.jpg'),(9,'Държач 2','да',58,'07.jpg'),(10,'Държач 3','да',69,'08.jpg'),(11,'Химикалка','да',23,'09.jpg'),(12,'Батерия','да',58,'10.jpg'),(13,'Заден панел черен','да',89,'11.jpg'),(14,'Заден панел зелен','да',22,'12.jpg'),(15,'Кабел','да',58,'13.jpg'),(16,'Слушалки','да',59,'14.jpg'),(17,'Мини слушалки','да',69,'15.jpg'),(18,'Охладител Самсунг','да',86,'16.jpg'),(19,'Панел за зареждане','да',78,'17.jpg'),(20,'Устройство Veho','да',89,'18.jpg'),(21,'Клавиатура','да',23,'19.jpg'),(22,'Мини клавиатура','да',46,'20.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `usName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `usName_UNIQUE` (`usName`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'milena','$2y$10$HeRj4DCP.xYB.m7kZGobWeu1fu.W.Cs/kz8/ZV5RhHx6xJRot9f9S','milena@abv.bg'),(6,'MARIETA','$2y$10$KAKEeEN530wgRs17PypspuVmgigstK4TJja4V2XYFeEcKocR055cK','marieta@abv.bg'),(7,'mima','$2y$10$MhKGOwB6E2Qjd0Xb6QrCa.9UsOJEoaNGM3wRbhJt4SrMD98hpU6BW','mimata@abv.bg'),(11,'didito3','$2y$10$/xSqNltO9YKclhG0MPjede7kA/Yppkr4ARLUPVSsRqvVBCmNDJ4AW','diana_fire@abv.bg'),(13,'didito5','$2y$10$ov2Ij/PenWJfS41yWD/DIuzKkP8RR6LrFcrwVntXOCzaN1xUIRhLa','didi@avb.bg'),(15,'didito4','$2y$10$eb3uFeqsqhIoY/AuRAc0zeBoOYB1kFmqFtZenFPgaFlwTYkgp9Fv.','ddi@avb.bg'),(16,'mimito89','$2y$10$avyXTfIF9qHRfo6iwMX7Tup8wDjsEFZk4iBkdHnfDpqU8NvBoZSeq','didi@avb.bg'),(17,'mimi93','$2y$10$1/3o8HfQTgbDn6mhIbX97uPhEAp8I1e0rUMCi/p29MOhDk4.wJJmG','diana_fire@abv.bg'),(18,'pesho855','$2y$10$d6iOOd9ByFDYuf/e/JeP2ejDFyrWUdJlQfngfr7r37FHtTsOwioZ6','didi@avb.bg'),(19,'pesho856','$2y$10$g1tpzDiPs6yAMYazyQ8hhuArXUrQD4Gy.FCvolP2926iAGGw8ALee','didi@avb.bg'),(20,'pesh','$2y$10$u2zIn0ysOElYMPY9kN8kouVdocImEce1Nua8yZeq1JOZnbf2PY6V2','didi@avb.bg'),(21,'pesho857','$2y$10$cbZxtGQUpm8v9DPdXsEJPe8fkAvqWTp2I8MZ1lLIUb1pyX/PrfThO','didi@avb.bg'),(22,'mimito8910','$2y$10$taoMBw2Xabfda/Z0OWr04uJb3lyc8Hcz.g1iStJ2DtZnFCGERkyQu','didi@avb.bg'),(23,'pesho858','$2y$10$cA4iJ3yQZnn6V2RYahHfqelovBXgNn..Gry2U7xenFigf5gyXz7Nu','didi@avb.bg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-14  2:36:54
