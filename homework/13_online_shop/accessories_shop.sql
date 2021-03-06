-- MySQL dump 10.13  Distrib 5.6.19, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: accessories_shop
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
  `Name` varchar(100) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`Basket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES (5,1,'met6ud4rtcf4jm7r10pepbc2b5','mimi%&amp;&amp;','mzlasjla@abv.bg'),(6,1,'met6ud4rtcf4jm7r10pepbc2b5','Денис','diana_fire@abv.bg'),(7,1,'met6ud4rtcf4jm7r10pepbc2b5','Денис','diana_fire@abv.bg'),(9,1,'met6ud4rtcf4jm7r10pepbc2b5','misho%&amp;&amp;','kqxnkaNKAN@ABV'),(10,1,'2j9smmmn2v8ohgcrhrjja0a884','did','ddi@avb.bg'),(12,1,'ls1lpa5dfeg6r6lh1daujmnpn4','reaers','gmjlkn@abv'),(13,1,'ls1lpa5dfeg6r6lh1daujmnpn4','KMCDMS','mzlasjla@abv.bg'),(15,1,'ls1lpa5dfeg6r6lh1daujmnpn4','mimi','hbjbkh@abv'),(16,1,'sqrj93ndbkmtutledi2ampod67','petio','kqxnkaNKAN@ABV'),(17,1,'sqrj93ndbkmtutledi2ampod67','hikmm;m;','hbjbkh@abv'),(18,1,'sqrj93ndbkmtutledi2ampod67','mimi%&amp;&amp;','mzlasjla@abv.bg'),(19,1,'sqrj93ndbkmtutledi2ampod67','mimi%&amp;&amp;','ABV@DEss'),(20,1,'vajf1d96p8165jgsvs5avm8u45','didi','diana_fire@abv.bg');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket_products`
--

LOCK TABLES `basket_products` WRITE;
/*!40000 ALTER TABLE `basket_products` DISABLE KEYS */;
INSERT INTO `basket_products` VALUES (1,5,22),(2,5,3),(3,6,22),(4,6,3),(5,7,22),(6,7,3),(7,9,4),(8,9,5),(9,10,21),(10,10,20),(11,12,3),(12,12,4),(13,13,5),(14,13,6),(15,15,3),(16,15,5),(17,16,21),(18,17,5),(19,18,7),(20,18,8),(21,19,3),(22,19,4),(23,20,3),(24,20,4);
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-07  9:35:54
