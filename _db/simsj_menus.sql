-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: simsj
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `sequence` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Dashboard','/','cil-speedometer','link',NULL,1,1),(2,'Settings',NULL,'cil-calculator','dropdown',NULL,1,999),(3,'Notes','/notes',NULL,'link',2,1,999),(4,'Users','/users',NULL,'link',2,1,999),(5,'Edit menu','/menu/menu',NULL,'link',2,1,999),(6,'Edit menu elements','/menu/element',NULL,'link',2,1,999),(7,'Edit roles','/roles',NULL,'link',2,1,999),(8,'Media','/media',NULL,'link',2,1,999),(9,'BREAD','/bread',NULL,'link',2,1,999),(10,'Email','/mail',NULL,'link',2,1,999),(11,'Login','/login','cil-account-logout','link',NULL,1,999),(12,'Register','/register','cil-account-logout','link',NULL,1,999),(13,'Theme',NULL,NULL,'title',NULL,1,999),(14,'Colors','/colors','cil-drop1','link',NULL,1,999),(15,'Typography','/typography','cil-pencil','link',NULL,1,999),(16,'Base',NULL,'cil-puzzle','dropdown',NULL,1,999),(17,'Breadcrumb','/base/breadcrumb',NULL,'link',16,1,999),(18,'Cards','/base/cards',NULL,'link',16,1,999),(19,'Carousel','/base/carousel',NULL,'link',16,1,999),(20,'Collapse','/base/collapse',NULL,'link',16,1,999),(21,'Forms','/base/forms',NULL,'link',16,1,999),(22,'Jumbotron','/base/jumbotron',NULL,'link',16,1,999),(23,'List group','/base/list-group',NULL,'link',16,1,999),(24,'Navs','/base/navs',NULL,'link',16,1,999),(25,'Pagination','/base/pagination',NULL,'link',16,1,999),(26,'Popovers','/base/popovers',NULL,'link',16,1,999),(27,'Progress','/base/progress',NULL,'link',16,1,999),(28,'Scrollspy','/base/scrollspy',NULL,'link',16,1,999),(29,'Switches','/base/switches',NULL,'link',16,1,999),(30,'Tables','/base/tables',NULL,'link',16,1,999),(31,'Tabs','/base/tabs',NULL,'link',16,1,999),(32,'Tooltips','/base/tooltips',NULL,'link',16,1,999),(33,'Buttons',NULL,'cil-cursor','dropdown',NULL,1,999),(34,'Buttons','/buttons/buttons',NULL,'link',33,1,999),(35,'Buttons Group','/buttons/button-group',NULL,'link',33,1,999),(36,'Dropdowns','/buttons/dropdowns',NULL,'link',33,1,999),(37,'Brand Buttons','/buttons/brand-buttons',NULL,'link',33,1,999),(38,'Charts','/charts','cil-chart-pie','link',NULL,1,999),(39,'Icons',NULL,'cil-star','dropdown',NULL,1,999),(40,'CoreUI Icons','/icon/coreui-icons',NULL,'link',39,1,999),(41,'Flags','/icon/flags',NULL,'link',39,1,999),(42,'Brands','/icon/brands',NULL,'link',39,1,999),(43,'Notifications',NULL,'cil-bell','dropdown',NULL,1,999),(44,'Alerts','/notifications/alerts',NULL,'link',43,1,999),(45,'Badge','/notifications/badge',NULL,'link',43,1,999),(46,'Modals','/notifications/modals',NULL,'link',43,1,999),(47,'Widgets','/widgets','cil-calculator','link',NULL,1,999),(48,'Extras',NULL,NULL,'title',NULL,1,999),(49,'Pages',NULL,'cil-star','dropdown',NULL,1,999),(50,'Login','/login',NULL,'link',49,1,999),(51,'Register','/register',NULL,'link',49,1,999),(52,'Error 404','/404',NULL,'link',49,1,999),(53,'Error 500','/500',NULL,'link',49,1,999),(56,'Pages',NULL,'','dropdown',NULL,2,999),(57,'Dashboard','/',NULL,'link',56,2,999),(58,'Notes','/notes',NULL,'link',56,2,999),(59,'Users','/users',NULL,'link',56,2,999),(60,'Settings',NULL,'','dropdown',NULL,2,999),(61,'Edit menu','/menu/menu',NULL,'link',60,2,999),(62,'Edit menu elements','/menu/element',NULL,'link',60,2,999),(63,'Edit roles','/roles',NULL,'link',60,2,999),(64,'Media','/media',NULL,'link',60,2,999),(65,'BREAD','/bread',NULL,'link',60,2,999),(66,'User',NULL,'cil-people','dropdown',NULL,1,2),(67,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah User','/user/tambah',NULL,'link',66,1,3),(68,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List User','/user/list',NULL,'link',66,1,4),(69,'Unit','/unit','cil-house','link',NULL,1,57),(70,'Penjualan','/penjualan','cil-cart','dropdown',NULL,1,58),(71,'Pembayaran','/pembayaran','cil-cash','link',NULL,1,59),(72,'Marketing','/marketing','cil-user','dropdown',NULL,1,61),(73,'Manager',NULL,NULL,'title',NULL,1,62),(74,'Laporan','laporan','cil-chart-line','link',NULL,1,63),(75,'Staff','/staff','cil-contact','link',NULL,1,64),(76,'Account',NULL,NULL,'title',NULL,1,66),(77,'Profile','/profile','cil-user','link',NULL,1,67),(78,'Settings','/settings','cil-settings','link',NULL,1,68),(79,'Logout','/logout','cil-account-logout','link',NULL,1,999),(80,'Log','/log','cil-terminal','link',NULL,1,65),(81,'Leader',NULL,'cil-user','dropdown',NULL,1,60),(82,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah Leader','/leader/tambah',NULL,'link',81,1,70),(83,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List Leader','/leader/list',NULL,'link',81,1,71),(84,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah Marketing','/marketing/tambah',NULL,'link',72,1,72),(86,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List Marketing','/marketing/list',NULL,'link',72,1,74),(87,'Lokasi','/lokasi','cib-zingat','link',NULL,1,20),(89,'<i class=\"fa-solid fa-plus mr-2 small\"></i> Penjualan Baru','/penjualan/tambah',NULL,'link',70,1,1000);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-24  1:49:14
