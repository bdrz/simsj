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
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_template` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` VALUES (1,NULL,NULL,'<!DOCTYPE html>\n                <html lang=\"en\">\n                <head>\n                    <meta charset=\"utf-8\">\n                    <meta name=\"viewport\" content=\"width=device-width\">\n                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> \n                    <meta name=\"x-apple-disable-message-reformatting\">\n                    <title>Example</title>\n                    <style>\n                        body {\n                            background-color:#fff;\n                            color:#222222;\n                            margin: 0px auto;\n                            padding: 0px;\n                            height: 100%;\n                            width: 100%;\n                            font-weight: 400;\n                            font-size: 15px;\n                            line-height: 1.8;\n                        }\n                        .continer{\n                            width:400px;\n                            margin-left:auto;\n                            margin-right:auto;\n                            background-color:#efefef;\n                            padding:30px;\n                        }\n                        .btn{\n                            padding: 5px 15px;\n                            display: inline-block;\n                        }\n                        .btn-primary{\n                            border-radius: 3px;\n                            background: #0b3c7c;\n                            color: #fff;\n                            text-decoration: none;\n                        }\n                        .btn-primary:hover{\n                            border-radius: 3px;\n                            background: #4673ad;\n                            color: #fff;\n                            text-decoration: none;\n                        }\n                    </style>\n                </head>\n                <body>\n                    <div class=\"continer\">\n                        <h1>Lorem ipsum dolor</h1>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <strong>commodo consequat</strong>. \n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                        </p>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href=\"#\">tempor incididunt ut labore</a> et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n                        </p>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n                        </p>\n                        <a href=\"#\" class=\"btn btn-primary\">Lorem ipsum dolor</a>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation <a href=\"#\">ullamco</a> laboris nisi ut aliquip ex ea commodo consequat. \n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                        </p>\n                    </div>\n                </body>\n                </html>','Example E-mail','Example E-mail');
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `example`
--

DROP TABLE IF EXISTS `example`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `example` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `example`
--

LOCK TABLES `example` WRITE;
/*!40000 ALTER TABLE `example` DISABLE KEYS */;
INSERT INTO `example` VALUES (1,NULL,NULL,'Voluptatem qui occaecati quam.','Voluptatem qui dolor aliquid. Fugiat ex quasi dolore beatae.',2),(2,NULL,NULL,'Esse ipsum nihil voluptas aut.','Inventore dignissimos ut reprehenderit et explicabo aut iure. Quis sequi ex amet aut cupiditate.',1),(3,NULL,NULL,'Explicabo esse sequi consectetur fugiat cupiditate.','Aperiam provident quos est nobis laboriosam commodi ratione quaerat. Beatae quisquam eos fugit eum.',4),(4,NULL,NULL,'Blanditiis dignissimos omnis error.','Labore minus itaque illum praesentium qui. Et itaque aut et rerum qui adipisci et rem.',3),(5,NULL,NULL,'Cum debitis sequi.','Sequi magni et tenetur dolorem iusto.',3),(6,NULL,NULL,'Et aut facere ex.','Blanditiis aut et reprehenderit.',3),(7,NULL,NULL,'Ex sunt quasi possimus sapiente laudantium.','Omnis sed ex rerum nisi.',4),(8,NULL,NULL,'Sit dolore ad ut.','Quia ut aut fugiat sapiente.',1),(9,NULL,NULL,'Exercitationem numquam ipsa non et ut.','Deserunt voluptatum commodi dolor dolor neque. Dicta omnis eligendi saepe tempora beatae.',1),(10,NULL,NULL,'Quidem et numquam ea incidunt.','Deserunt vel placeat et pariatur. Beatae enim molestiae odit.',4),(11,NULL,NULL,'Sed id et dignissimos.','Id quaerat quo suscipit voluptatum.',3),(12,NULL,NULL,'Tenetur est amet maiores.','Tempora exercitationem delectus consectetur et exercitationem cum. Vel at veritatis nam dignissimos error sed ratione.',2),(13,NULL,NULL,'Omnis voluptate voluptas.','Fuga mollitia eaque saepe atque quos beatae quasi.',1),(14,NULL,NULL,'Reiciendis id porro modi.','Nihil soluta voluptatum enim odit rerum deleniti quia. Et et assumenda est omnis voluptas maxime eos.',4),(15,NULL,NULL,'Possimus numquam amet assumenda iusto.','Voluptate hic unde magni quae accusamus doloremque est.',1),(16,NULL,NULL,'Est aliquid sint qui sed.','Unde velit consequatur officia architecto mollitia veniam dolorum eius. Expedita possimus quasi in a.',2),(17,NULL,NULL,'Architecto impedit quod commodi eum.','Doloremque libero et animi mollitia.',3),(18,NULL,NULL,'Sit delectus quasi.','Vitae qui earum accusantium minima assumenda.',3),(19,NULL,NULL,'Vel dolor iure quia quidem.','Magnam amet voluptas a. Omnis eum laboriosam ea perspiciatis beatae exercitationem mollitia.',3),(20,NULL,NULL,'Vitae quam sit suscipit occaecati.','Facere et perferendis itaque et minima qui. Corrupti delectus aperiam temporibus eius praesentium et quas delectus.',2),(21,NULL,NULL,'Et reiciendis voluptatem incidunt delectus et.','Non quia illo nemo deleniti consequatur officia ipsa.',2),(22,NULL,NULL,'Enim quibusdam autem.','Suscipit natus reprehenderit et eos dolor ut voluptatum.',4),(23,NULL,NULL,'Quia occaecati voluptatem ipsa.','Quia amet sed enim ab dolor accusantium veritatis. Quos dolor nisi sed illum sint et.',4),(24,NULL,NULL,'Eum cum facere magnam voluptatem.','Reiciendis ea beatae et excepturi est aut facilis error.',1),(25,NULL,NULL,'Nisi sit quia voluptate eos.','Eligendi qui repellat dolorem dolorum a provident. Molestiae nisi aperiam dolores fugiat.',2);
/*!40000 ALTER TABLE `example` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folder` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_id` int(10) unsigned DEFAULT NULL,
  `resource` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder`
--

LOCK TABLES `folder` WRITE;
/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES (1,NULL,NULL,'root',NULL,NULL),(2,NULL,NULL,'resource',1,1),(3,NULL,NULL,'documents',1,NULL),(4,NULL,NULL,'graphics',1,NULL),(5,NULL,NULL,'other',1,NULL);
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `pagination` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` VALUES (1,NULL,NULL,'Example','example',1,1,1,1,5);
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_field`
--

DROP TABLE IF EXISTS `form_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_field` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browse` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `relation_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(10) unsigned NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_field`
--

LOCK TABLES `form_field` WRITE;
/*!40000 ALTER TABLE `form_field` DISABLE KEYS */;
INSERT INTO `form_field` VALUES (1,NULL,NULL,'Title','text',1,1,1,1,NULL,NULL,1,'name'),(2,NULL,NULL,'Description','text_area',1,1,1,1,NULL,NULL,1,'description'),(3,NULL,NULL,'Status','relation_select',1,1,1,1,'status','name',1,'status_id');
/*!40000 ALTER TABLE `form_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leader`
--

DROP TABLE IF EXISTS `leader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bank_rek` varchar(45) DEFAULT NULL,
  `no_rek` varchar(45) DEFAULT NULL,
  `an_rek` varchar(45) DEFAULT NULL,
  `ktp_upload` tinyint(4) DEFAULT 0,
  `ktp_path` varchar(255) DEFAULT NULL,
  `npwp_upload` tinyint(4) DEFAULT 0,
  `npwp_path` varchar(255) DEFAULT NULL,
  `user_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leader`
--

LOCK TABLES `leader` WRITE;
/*!40000 ALTER TABLE `leader` DISABLE KEYS */;
/*!40000 ALTER TABLE `leader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `raw` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `user_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokasi`
--

LOCK TABLES `lokasi` WRITE;
/*!40000 ALTER TABLE `lokasi` DISABLE KEYS */;
INSERT INTO `lokasi` VALUES (1,'SinghaJaya 1',NULL,'2022-03-10 16:07:14','2022-03-10 16:07:14'),(2,'SinghaJaya 2',NULL,'2022-03-10 16:07:56','2022-03-10 16:55:00'),(3,'Kavling Boro',NULL,'2022-03-10 16:08:05','2022-03-10 16:08:05'),(5,'Wagir',13,'2022-03-15 07:52:09','2022-03-15 07:52:09');
/*!40000 ALTER TABLE `lokasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marketing`
--

DROP TABLE IF EXISTS `marketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leader_id` int(3) DEFAULT NULL,
  `nik` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `hp` varchar(45) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bank_rek` varchar(45) DEFAULT NULL,
  `no_rek` varchar(45) DEFAULT NULL,
  `an_rek` varchar(45) DEFAULT NULL,
  `ktp_upload` int(1) DEFAULT 0,
  `ktp_path` varchar(255) DEFAULT NULL,
  `npwp_upload` int(1) DEFAULT 0,
  `npwp_path` varchar(255) DEFAULT NULL,
  `user_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marketing`
--

LOCK TABLES `marketing` WRITE;
/*!40000 ALTER TABLE `marketing` DISABLE KEYS */;
/*!40000 ALTER TABLE `marketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `uuid` bigint(20) unsigned NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `nomor_npwp` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL,
  `kewarganegaraan` varchar(3) DEFAULT NULL,
  `ktp_upload` tinyint(4) DEFAULT 0,
  `ktp_path` varchar(255) DEFAULT NULL,
  `kk_upload` tinyint(4) DEFAULT 0,
  `kk_path` varchar(255) DEFAULT NULL,
  `npwp_upload` tinyint(4) DEFAULT 0,
  `npwp_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_role`
--

DROP TABLE IF EXISTS `menu_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menus_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_role`
--

LOCK TABLES `menu_role` WRITE;
/*!40000 ALTER TABLE `menu_role` DISABLE KEYS */;
INSERT INTO `menu_role` VALUES (5,'admin',3),(6,'admin',4),(7,'admin',5),(8,'admin',6),(9,'admin',7),(10,'admin',8),(11,'admin',9),(12,'admin',10),(23,'user',17),(24,'admin',17),(25,'user',18),(26,'admin',18),(27,'user',19),(28,'admin',19),(29,'user',20),(30,'admin',20),(31,'user',21),(32,'admin',21),(33,'user',22),(34,'admin',22),(35,'user',23),(36,'admin',23),(37,'user',24),(38,'admin',24),(39,'user',25),(40,'admin',25),(41,'user',26),(42,'admin',26),(43,'user',27),(44,'admin',27),(45,'user',28),(46,'admin',28),(47,'user',29),(48,'admin',29),(49,'user',30),(50,'admin',30),(51,'user',31),(52,'admin',31),(53,'user',32),(54,'admin',32),(57,'user',34),(58,'admin',34),(59,'user',35),(60,'admin',35),(61,'user',36),(62,'admin',36),(63,'user',37),(64,'admin',37),(69,'user',40),(70,'admin',40),(71,'user',41),(72,'admin',41),(73,'user',42),(74,'admin',42),(77,'user',44),(78,'admin',44),(79,'user',45),(80,'admin',45),(81,'user',46),(82,'admin',46),(89,'user',50),(90,'admin',50),(91,'user',51),(92,'admin',51),(93,'user',52),(94,'admin',52),(95,'user',53),(96,'admin',53),(104,'user',56),(105,'admin',56),(107,'user',57),(108,'admin',57),(109,'user',58),(110,'admin',58),(111,'admin',59),(112,'admin',60),(113,'admin',61),(114,'admin',62),(115,'admin',63),(116,'admin',64),(117,'admin',65),(126,'admin',2),(129,'admin',11),(139,'admin',13),(140,'admin',14),(141,'admin',15),(142,'admin',16),(143,'admin',33),(144,'admin',38),(145,'admin',39),(146,'admin',43),(147,'admin',47),(148,'admin',49),(149,'admin',48),(152,'admin',12),(153,'admin',1),(154,'manager',1),(155,'staff',1),(186,'admin',71),(187,'manager',71),(188,'staff',71),(195,'admin',69),(196,'manager',69),(197,'staff',69),(201,'admin',73),(202,'manager',73),(203,'admin',74),(204,'manager',74),(205,'admin',75),(206,'manager',75),(207,'admin',66),(208,'manager',66),(209,'staff',66),(210,'admin',76),(211,'manager',76),(212,'staff',76),(213,'admin',77),(214,'manager',77),(215,'staff',77),(216,'admin',78),(217,'manager',78),(218,'staff',78),(222,'admin',80),(223,'manager',80),(230,'admin',68),(231,'manager',68),(232,'staff',68),(233,'admin',81),(234,'manager',81),(235,'staff',81),(239,'admin',72),(240,'manager',72),(241,'staff',72),(242,'admin',82),(243,'manager',82),(244,'staff',82),(248,'admin',84),(249,'manager',84),(250,'staff',84),(251,'admin',85),(252,'manager',85),(253,'staff',85),(257,'admin',83),(258,'manager',83),(259,'staff',83),(260,'admin',86),(261,'manager',86),(262,'staff',86),(269,'admin',87),(270,'manager',87),(271,'staff',87),(272,'admin',70),(273,'manager',70),(274,'staff',70),(275,'admin',67),(276,'manager',67),(277,'staff',67),(278,'admin',89),(279,'manager',89),(280,'staff',89),(281,'admin',90),(282,'manager',90),(283,'staff',90),(284,'admin',79);
/*!40000 ALTER TABLE `menu_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menulist`
--

DROP TABLE IF EXISTS `menulist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menulist` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menulist`
--

LOCK TABLES `menulist` WRITE;
/*!40000 ALTER TABLE `menulist` DISABLE KEYS */;
INSERT INTO `menulist` VALUES (1,'sidebar menu'),(2,'top menu');
/*!40000 ALTER TABLE `menulist` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `menus` VALUES (1,'Dashboard','/','cil-speedometer','link',NULL,1,1),(2,'Settings',NULL,'cil-calculator','dropdown',NULL,1,999),(3,'Notes','/notes',NULL,'link',2,1,999),(4,'Users','/users',NULL,'link',2,1,999),(5,'Edit menu','/menu/menu',NULL,'link',2,1,999),(6,'Edit menu elements','/menu/element',NULL,'link',2,1,999),(7,'Edit roles','/roles',NULL,'link',2,1,999),(8,'Media','/media',NULL,'link',2,1,999),(9,'BREAD','/bread',NULL,'link',2,1,999),(10,'Email','/mail',NULL,'link',2,1,999),(11,'Login','/login','cil-account-logout','link',NULL,1,999),(12,'Register','/register','cil-account-logout','link',NULL,1,999),(13,'Theme',NULL,NULL,'title',NULL,1,999),(14,'Colors','/colors','cil-drop1','link',NULL,1,999),(15,'Typography','/typography','cil-pencil','link',NULL,1,999),(16,'Base',NULL,'cil-puzzle','dropdown',NULL,1,999),(17,'Breadcrumb','/base/breadcrumb',NULL,'link',16,1,999),(18,'Cards','/base/cards',NULL,'link',16,1,999),(19,'Carousel','/base/carousel',NULL,'link',16,1,999),(20,'Collapse','/base/collapse',NULL,'link',16,1,999),(21,'Forms','/base/forms',NULL,'link',16,1,999),(22,'Jumbotron','/base/jumbotron',NULL,'link',16,1,999),(23,'List group','/base/list-group',NULL,'link',16,1,999),(24,'Navs','/base/navs',NULL,'link',16,1,999),(25,'Pagination','/base/pagination',NULL,'link',16,1,999),(26,'Popovers','/base/popovers',NULL,'link',16,1,999),(27,'Progress','/base/progress',NULL,'link',16,1,999),(28,'Scrollspy','/base/scrollspy',NULL,'link',16,1,999),(29,'Switches','/base/switches',NULL,'link',16,1,999),(30,'Tables','/base/tables',NULL,'link',16,1,999),(31,'Tabs','/base/tabs',NULL,'link',16,1,999),(32,'Tooltips','/base/tooltips',NULL,'link',16,1,999),(33,'Buttons',NULL,'cil-cursor','dropdown',NULL,1,999),(34,'Buttons','/buttons/buttons',NULL,'link',33,1,999),(35,'Buttons Group','/buttons/button-group',NULL,'link',33,1,999),(36,'Dropdowns','/buttons/dropdowns',NULL,'link',33,1,999),(37,'Brand Buttons','/buttons/brand-buttons',NULL,'link',33,1,999),(38,'Charts','/charts','cil-chart-pie','link',NULL,1,999),(39,'Icons',NULL,'cil-star','dropdown',NULL,1,999),(40,'CoreUI Icons','/icon/coreui-icons',NULL,'link',39,1,999),(41,'Flags','/icon/flags',NULL,'link',39,1,999),(42,'Brands','/icon/brands',NULL,'link',39,1,999),(43,'Notifications',NULL,'cil-bell','dropdown',NULL,1,999),(44,'Alerts','/notifications/alerts',NULL,'link',43,1,999),(45,'Badge','/notifications/badge',NULL,'link',43,1,999),(46,'Modals','/notifications/modals',NULL,'link',43,1,999),(47,'Widgets','/widgets','cil-calculator','link',NULL,1,999),(48,'Extras',NULL,NULL,'title',NULL,1,999),(49,'Pages',NULL,'cil-star','dropdown',NULL,1,999),(50,'Login','/login',NULL,'link',49,1,999),(51,'Register','/register',NULL,'link',49,1,999),(52,'Error 404','/404',NULL,'link',49,1,999),(53,'Error 500','/500',NULL,'link',49,1,999),(56,'Pages',NULL,'','dropdown',NULL,2,999),(57,'Dashboard','/',NULL,'link',56,2,999),(58,'Notes','/notes',NULL,'link',56,2,999),(59,'Users','/users',NULL,'link',56,2,999),(60,'Settings',NULL,'','dropdown',NULL,2,999),(61,'Edit menu','/menu/menu',NULL,'link',60,2,999),(62,'Edit menu elements','/menu/element',NULL,'link',60,2,999),(63,'Edit roles','/roles',NULL,'link',60,2,999),(64,'Media','/media',NULL,'link',60,2,999),(65,'BREAD','/bread',NULL,'link',60,2,999),(66,'User',NULL,'cil-people','dropdown',NULL,1,2),(67,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah User','/user/tambah',NULL,'link',66,1,3),(68,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List User','/user/list',NULL,'link',66,1,4),(69,'Unit','/unit','cil-house','link',NULL,1,57),(70,'Penjualan','/penjualan','cil-cart','dropdown',NULL,1,58),(71,'Pembayaran','/pembayaran','cil-cash','link',NULL,1,59),(72,'Marketing','/marketing','cil-user','dropdown',NULL,1,61),(73,'Manager',NULL,NULL,'title',NULL,1,62),(74,'Laporan','laporan','cil-chart-line','link',NULL,1,63),(75,'Staff','/staff','cil-contact','link',NULL,1,64),(76,'Account',NULL,NULL,'title',NULL,1,66),(77,'Profile','/profile','cil-user','link',NULL,1,67),(78,'Settings','/settings','cil-settings','link',NULL,1,68),(79,'Logout','/logout','cil-account-logout','link',NULL,1,999),(80,'Log','/log','cil-terminal','link',NULL,1,65),(81,'Leader',NULL,'cil-user','dropdown',NULL,1,60),(82,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah Leader','/leader/tambah',NULL,'link',81,1,70),(83,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List Leader','/leader/list',NULL,'link',81,1,71),(84,'<i class=\"fa-solid fa-user-plus mr-2 small\"></i> Tambah Marketing','/marketing/tambah',NULL,'link',72,1,72),(86,'<i class=\"fa-solid fa-address-book mr-2 small\"></i>List Marketing','/marketing/list',NULL,'link',72,1,74),(87,'Lokasi','/lokasi','cib-zingat','link',NULL,1,20),(89,'<i class=\"fa-solid fa-plus mr-2 small\"></i> Penjualan Baru','/penjualan/tambah',NULL,'link',70,1,1000),(90,'<i class=\"fa-solid fa-plus mr-2 small\"></i> Input Penjualan Lama','/penjualan/tambah_lama',NULL,'link',70,1,1001);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (17,'2014_10_12_000000_create_users_table',1),(18,'2014_10_12_100000_create_password_resets_table',1),(19,'2019_08_19_000000_create_failed_jobs_table',1),(20,'2019_10_11_085455_create_notes_table',1),(21,'2019_10_12_115248_create_status_table',1),(22,'2019_11_08_102827_create_menus_table',1),(23,'2019_11_13_092213_create_menurole_table',1),(24,'2019_12_10_092113_create_permission_tables',1),(25,'2019_12_11_091036_create_menulist_table',1),(26,'2019_12_18_092518_create_role_hierarchy_table',1),(27,'2020_01_07_093259_create_folder_table',1),(28,'2020_01_08_184500_create_media_table',1),(29,'2020_01_21_161241_create_form_field_table',1),(30,'2020_01_21_161242_create_form_table',1),(31,'2020_01_21_161243_create_example_table',1),(32,'2020_03_12_111400_create_email_template_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',7),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',11),(2,'App\\Models\\User',12),(4,'App\\Models\\User',13),(4,'App\\Models\\User',32),(4,'App\\Models\\User',33),(4,'App\\Models\\User',34),(4,'App\\Models\\User',35);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applies_to_date` date NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'Ut amet ut quibusdam.','Possimus voluptatum rerum qui quae nam id et similique. Quae dolorem non libero distinctio dolor quidem. Vitae atque ea a nihil fuga.','voluptatibus est','1990-08-24',6,4,NULL,NULL),(2,'Et veniam repellat molestiae.','Voluptatem tenetur nostrum sit odit. Itaque ea esse amet quia sed. Distinctio praesentium et labore iusto. Fugiat vitae dolorum quae corrupti.','soluta est','2000-03-15',7,1,NULL,NULL),(3,'Corrupti numquam nostrum aperiam repellat reiciendis.','Praesentium voluptates quasi laudantium et ullam magnam aut. Natus aut est harum ducimus ut architecto. Nobis dolores cupiditate eius aut fugit aliquid atque. Cumque reprehenderit quisquam id.','ut','1990-08-19',7,4,NULL,NULL),(4,'Eos id maiores consequatur.','Voluptatem dolore nihil aut cum veritatis a. Delectus in labore harum. At aut itaque assumenda libero.','quam amet','2012-02-05',9,3,NULL,NULL),(5,'Vero enim aut voluptatem id porro.','Molestias ut ea cum est voluptas similique. Impedit voluptas at voluptatem. Ex quis odit accusamus in aliquid. Quia omnis fugit dolorem temporibus iste.','dolorem','1971-07-18',2,3,NULL,NULL),(6,'In corrupti natus dolore reiciendis.','Earum est officiis eligendi in veritatis eum aliquam. Earum reiciendis est maiores. Quidem magni voluptas in. Totam consequatur amet velit accusantium et dolor deleniti.','voluptatem aliquid','2019-12-14',2,2,NULL,NULL),(7,'Omnis consequatur sit amet pariatur enim.','Sed veniam quia ea sed ducimus laudantium possimus. Optio nihil iusto labore doloribus. Autem totam illo recusandae error eos. Sit sint odit dolor nulla quia qui et. Sed eos iusto facilis et quia.','accusantium','1974-08-23',11,1,NULL,NULL),(8,'Omnis nihil sunt.','Dolores quis consequuntur et architecto et occaecati ea. Incidunt aliquid alias expedita voluptatem. Fugiat beatae cum quibusdam.','ut eos','1999-03-13',7,4,NULL,NULL),(9,'Quis excepturi molestiae ut.','Debitis nobis est esse sapiente dicta consequatur ut. Voluptas velit est sint distinctio ducimus voluptas aut aut. Quasi repellendus in possimus ut fugit.','non provident','1994-08-13',11,4,NULL,NULL),(10,'Nihil ex reprehenderit architecto nam quia.','Tempora perferendis numquam quo id corporis iusto. Rerum hic voluptate voluptatem consequatur ut deleniti. Aliquam ipsa est amet est commodi.','harum molestiae','1989-10-06',5,3,NULL,NULL),(11,'Et similique quam fuga velit.','In nisi odio illum accusantium est. Reiciendis et nisi magni hic expedita molestias. Sint sit autem eveniet nulla.','omnis','1987-03-07',11,1,NULL,NULL),(12,'Molestias et placeat.','Voluptas cumque ullam vel vitae ut repellat ex. Quod delectus optio similique temporibus. Impedit quod laborum reprehenderit eum. Amet nemo porro minus ratione.','ducimus','2005-09-23',4,3,NULL,NULL),(13,'Molestiae fugit sapiente culpa voluptatem nobis.','Optio adipisci qui quia nulla beatae dolor. Sint ea et reprehenderit. Deleniti sapiente in quasi.','harum','1986-06-11',4,2,NULL,NULL),(14,'Aut iure accusantium nihil est nihil.','Quibusdam corporis id aliquam esse architecto numquam voluptas. Dolor consequuntur earum vel.','non fugit','2003-02-28',4,3,NULL,NULL),(15,'Fugiat natus ratione eos sed laudantium.','Mollitia et voluptatem commodi aspernatur odit. Tempora quaerat eum dolor itaque eius omnis non. Dolor eos quia sint reiciendis et id maiores repellendus. Odio qui eveniet consequatur.','nostrum','2008-01-30',2,1,NULL,NULL),(16,'Ea placeat ab repellat voluptas.','Ratione praesentium distinctio quia deleniti qui at cumque. Perspiciatis libero vel est id eos.','eaque facere','2019-11-21',7,3,NULL,NULL),(17,'Nobis molestiae fuga facilis.','Non ullam rem aspernatur neque a voluptates sequi. Et et ipsum assumenda laboriosam.','aut','1992-02-22',4,1,NULL,NULL),(18,'Minus quibusdam magnam facilis reiciendis reprehenderit.','Laboriosam ad odit est eum sit. Vel rerum ea quos. Possimus eum est sunt illo. Sit enim voluptatum natus suscipit. Nesciunt qui recusandae ipsam sed nulla.','accusantium','2014-06-21',9,4,NULL,NULL),(19,'Est nihil nostrum dicta.','Aut ipsa et impedit natus qui. Error qui veniam error accusamus et est voluptatem. Rem dolorem nihil repudiandae. Quis ut praesentium minima illum id voluptas. Earum veritatis tempore excepturi ex.','deserunt magni','2021-12-14',5,2,NULL,NULL),(20,'Et voluptatibus explicabo accusantium fuga maxime.','A necessitatibus rerum ut nobis et ea sed quaerat. Impedit recusandae earum non inventore et veniam. Voluptate consequatur nisi maiores eius.','qui','2008-06-03',6,3,NULL,NULL),(21,'Dicta debitis at accusamus.','In beatae animi est saepe exercitationem unde sunt. Doloribus adipisci est nesciunt labore repellat molestias quis qui. Nostrum enim voluptate magnam non. Et non rerum vel sint.','aperiam','2010-07-30',10,1,NULL,NULL),(22,'Ea explicabo esse eum.','Porro exercitationem aut aperiam expedita aut. Dicta laudantium itaque esse nostrum et. Vel iure rem unde fuga quia ullam. Molestias nobis maiores molestiae id qui.','qui id','1992-10-24',10,2,NULL,NULL),(23,'Qui voluptatem maxime excepturi consequuntur.','Qui in et cum in. Ipsam officia expedita est veritatis et. Illum beatae qui quam ducimus nemo explicabo.','praesentium','1989-02-03',4,4,NULL,NULL),(24,'Odit fugit necessitatibus labore magnam inventore.','Sit dolores consequatur tenetur saepe dicta asperiores fugiat. Occaecati optio nemo non possimus aperiam. Corrupti rerum alias sed ut qui.','tempora qui','2007-05-31',2,3,NULL,NULL),(25,'Aspernatur aut necessitatibus aut.','Accusamus nisi eius dolores excepturi excepturi ut. Nesciunt molestias dolorem et reiciendis minus. Qui ut vitae repellendus voluptates a magni nihil. Sit ipsam quaerat rerum fugit qui modi aut.','quasi','1973-04-28',9,4,NULL,NULL),(26,'Aut repellat voluptates voluptatem ratione accusamus.','Esse alias commodi et dolor aliquid quibusdam minus. Nihil sunt eum dolorum quis deserunt quos. Repellat voluptas aperiam ratione corrupti laborum. Et laudantium rerum magnam eos expedita doloribus.','sed qui','1994-02-17',3,2,NULL,NULL),(27,'Quasi reprehenderit quia.','Dolores enim quasi ducimus. Aut ipsam excepturi culpa voluptate nulla at. Sed fuga voluptas reiciendis esse dolor. Aut vero reprehenderit amet doloremque temporibus.','consectetur','1982-09-07',4,4,NULL,NULL),(28,'Qui quia in.','Nihil sit assumenda nam sed consequuntur nemo aut ab. Enim error est consequatur illum reiciendis odio. Qui minima accusantium et est vel adipisci adipisci. Eius rerum rerum fugit iure sed rerum.','sunt natus','2018-11-09',5,1,NULL,NULL),(29,'Nulla maxime voluptatum iure.','Deleniti voluptatem suscipit soluta. Facilis occaecati eaque dolor aut et. Velit assumenda voluptas vitae omnis. Quia perferendis ipsum asperiores maxime et.','necessitatibus','1985-07-12',2,1,NULL,NULL),(30,'Quasi et ducimus neque.','Sed voluptatem iure nobis est eum ipsa ipsum aut. Aut qui animi molestias aliquid odio. Possimus quos omnis amet sunt.','tempore','2005-10-29',2,1,NULL,NULL),(31,'Voluptates nam natus veritatis laudantium.','Earum deleniti quo autem asperiores consequatur mollitia saepe. Deleniti porro in quibusdam quae magni pariatur voluptas. Reiciendis suscipit rerum molestiae. Ea quod impedit recusandae laboriosam id est atque.','ut','1996-06-08',7,2,NULL,NULL),(32,'Quae aspernatur sit.','Repellendus saepe harum magnam aliquid aspernatur. Recusandae nesciunt non ut dolor molestiae maxime praesentium. Qui eos et distinctio. Vel ipsa aperiam quisquam neque fuga.','voluptatem','2019-08-17',11,4,NULL,NULL),(33,'Distinctio alias possimus qui.','Placeat veniam perspiciatis reprehenderit beatae non sint impedit. Quia voluptas ut doloremque assumenda hic. Voluptas illo qui architecto reiciendis expedita pariatur nesciunt molestias. Aut eligendi et neque.','debitis aut','1987-11-12',7,4,NULL,NULL),(34,'Enim eum dignissimos qui voluptatibus.','Ea velit exercitationem quis non quo. Nemo tenetur corrupti itaque placeat id. Repellat similique et in et nesciunt doloremque natus eveniet. Magni fugit qui consectetur in quisquam totam deleniti. Est aspernatur mollitia veritatis.','porro','2003-01-01',4,2,NULL,NULL),(35,'Quia qui quis quisquam qui.','Qui aut autem officia soluta quos sint. Ea reiciendis tenetur amet minus atque repellat fugit. Saepe quia qui sint quia mollitia ut.','delectus provident','2013-09-24',3,1,NULL,NULL),(36,'Et minima aliquid.','Repudiandae aut voluptatem molestiae reprehenderit qui incidunt. Facilis aut est rerum quas iure. Dolorem officiis eum fugit libero exercitationem nostrum reprehenderit.','placeat','1998-07-05',8,1,NULL,NULL),(37,'Nostrum nisi assumenda quos.','Enim blanditiis laudantium dolorem perspiciatis. Sint cupiditate unde et voluptas omnis id. Placeat ducimus illum voluptas eaque odit quo provident. Enim tempore itaque et voluptatem ad.','rerum','2014-01-28',8,3,NULL,NULL),(38,'Velit qui eos et ut.','Et unde incidunt soluta et aut. Voluptatem quia et veritatis nulla. Eligendi error possimus eum illo molestiae eveniet cum similique. Sit enim magni asperiores nisi optio et facere autem.','est','1990-12-01',8,1,NULL,NULL),(39,'Est sunt veniam ut quia velit.','Enim quia dolorem aliquam sunt. Non ut iusto qui quia. Officiis tenetur pariatur expedita sed. Veritatis eaque quas fugit quis a aliquam beatae neque.','nobis','1993-09-08',11,1,NULL,NULL),(40,'Sed blanditiis eaque ipsum.','Aut et et et omnis omnis quisquam ea est. Autem possimus eos ex porro sequi. Inventore quia magni veniam repudiandae qui.','ipsam','1988-11-04',8,2,NULL,NULL),(41,'Quis recusandae dolor corrupti.','Nam eius eveniet architecto atque mollitia fugiat. Atque sequi repellat quos et sit. Animi occaecati debitis autem illum et. Quas odio voluptates explicabo. Omnis esse nemo aut pariatur est sunt porro.','ut sit','1998-01-22',10,4,NULL,NULL),(42,'Dolorum temporibus quaerat et atque.','Nulla quae expedita ab adipisci. Beatae magni sed et optio. Dolorum fugiat distinctio numquam cumque nostrum. Ducimus eos inventore numquam aliquid sed.','maiores quam','2002-10-20',9,4,NULL,NULL),(43,'Iste dolore beatae.','Aperiam tenetur consequuntur quas rem dolore veniam. Sint magnam delectus est beatae unde ut. Earum nam sit quae.','necessitatibus officia','2018-12-06',8,3,NULL,NULL),(44,'Neque sint officia distinctio.','Architecto fugiat optio cupiditate esse qui laboriosam natus. Non autem quia hic. Nulla quidem facere rerum voluptas quasi. Rem harum quia sed optio.','exercitationem nam','2008-07-06',2,2,NULL,NULL),(45,'Quia corrupti earum hic.','Sunt molestiae atque natus vero et ut deleniti voluptas. Iure et qui officiis cumque accusamus. Officiis et qui dolores ipsa vel nam. Suscipit dolore praesentium modi nulla.','soluta non','2010-10-18',6,2,NULL,NULL),(46,'Ipsam alias culpa facilis.','Reiciendis odit est laboriosam repudiandae corporis rerum maiores. Fugiat in iste ipsam ratione omnis nisi vel. Voluptatem placeat et qui porro.','eos dignissimos','2010-09-20',2,2,NULL,NULL),(47,'Minima assumenda quo nostrum.','Est quia quaerat occaecati ipsa inventore vero. Non hic modi amet explicabo vitae sit necessitatibus. Qui cum voluptatem saepe cumque inventore dolore consequatur. Ipsum magni modi magni esse vero praesentium.','quod','2007-06-21',10,2,NULL,NULL),(48,'Beatae dicta ipsa nihil omnis.','Dignissimos sit doloribus assumenda voluptatem est sed explicabo. Assumenda dolores sint ut similique nisi velit. Quis laboriosam illum harum id recusandae.','consequuntur','2002-10-12',4,4,NULL,NULL),(49,'Nobis quia aut voluptatem.','Autem aut ad eaque et. Et reprehenderit harum optio porro. Aut amet similique voluptate. Ea officiis repudiandae ab fugiat.','minus','2013-12-07',10,2,NULL,NULL),(50,'Inventore officia ut vitae.','Qui animi nostrum tempora architecto labore sed est. Magnam sed animi fugit ex ut. Quia natus et quisquam sapiente quo at iste assumenda.','excepturi','1982-01-17',6,4,NULL,NULL),(51,'Quo asperiores aperiam.','Perspiciatis sed ea quis architecto quibusdam mollitia ut. Quae aut et iste totam. Excepturi dolorum itaque optio fugit reprehenderit numquam sit.','perspiciatis','2019-12-09',4,4,NULL,NULL),(52,'Possimus maiores adipisci.','Dignissimos consequatur quos in. Eos eum quia qui atque. Provident suscipit molestiae at aspernatur sint sunt illum asperiores. Nihil quis sed a.','fugit nihil','1972-08-19',10,4,NULL,NULL),(53,'Id culpa voluptatem alias.','Voluptates rerum reprehenderit quasi similique quo qui aut. Molestiae et aliquid est accusamus laboriosam. Totam rerum officiis natus consequatur. Laboriosam id quia in cum impedit.','maxime','1982-10-12',4,4,NULL,NULL),(54,'Et rerum enim rerum.','Perferendis aut ullam nobis harum repudiandae ducimus assumenda. Quibusdam quaerat animi explicabo hic a excepturi quae et. Consequatur dolores mollitia fugiat magnam dicta voluptate.','doloribus ea','1991-08-13',4,2,NULL,NULL),(55,'Et pariatur consequatur.','Nesciunt atque non sed provident. Odio maiores cumque earum quos non dolorum. Et ullam ipsa fuga eligendi provident.','harum','2000-07-03',6,1,NULL,NULL),(56,'Itaque tempora accusantium beatae.','Sit tempora nihil soluta magni voluptatem. Aut iste molestiae nemo. Non exercitationem quae consequuntur deserunt rem doloremque voluptas.','qui','2000-11-27',11,3,NULL,NULL),(57,'Odio quo molestiae.','Qui nihil assumenda voluptas provident id illum tempore. At vel et minima dolores non. Earum autem vel vel maxime dolores.','quam','1981-05-10',10,3,NULL,NULL),(58,'Minus quaerat sunt sunt optio.','Id maxime eligendi soluta occaecati. Nihil itaque atque sunt qui excepturi iusto dolorum. Ut cumque aperiam reiciendis expedita maiores.','voluptas','1986-07-04',9,3,NULL,NULL),(59,'Officia iusto at et aut porro.','A repellat dignissimos deserunt vel consequatur rerum illum rerum. Dolores ex voluptatem nihil quia velit ut est. Excepturi sed doloremque libero voluptatem totam aliquam non.','beatae','1999-09-28',2,2,NULL,NULL),(60,'Voluptatem at pariatur.','Corrupti illo deleniti quis nemo harum facilis voluptatem reiciendis. Enim quia consectetur voluptatibus similique. Aperiam nemo necessitatibus ea fugiat. Quisquam sint culpa similique alias.','aperiam non','2013-07-13',7,3,NULL,NULL),(61,'Reprehenderit eos inventore modi eos.','Optio saepe velit ut. Illo reiciendis dignissimos nemo et fugiat. Neque rerum impedit earum.','earum','1972-11-14',6,4,NULL,NULL),(62,'Et qui dolores quis.','Dolorem et aut ab aperiam nesciunt. Numquam consequatur consequatur asperiores vero. Et omnis possimus voluptatum enim error cum voluptatem. Aut voluptatibus odio eum laborum.','quaerat doloribus','1980-01-29',11,1,NULL,NULL),(63,'Cum deleniti non tempore.','Similique in molestiae molestias deserunt. Quia ut et rerum quibusdam. Odit nesciunt sequi aut explicabo quibusdam maiores. Inventore ex nemo corporis.','nihil','1999-03-21',3,3,NULL,NULL),(64,'Voluptas aut sint aut.','Error natus eius voluptatem dicta. Eligendi sunt molestias id accusamus sit. Ab suscipit ducimus facilis veniam.','quo','2020-10-25',9,3,NULL,NULL),(65,'Aut quia voluptatem autem consequuntur.','Exercitationem a ipsam nesciunt reiciendis. Rerum ut velit ut rerum laborum. Cum non officiis unde harum.','et id','1975-12-26',3,4,NULL,NULL),(66,'Earum amet assumenda corrupti officia.','Qui sapiente ut dolor velit quis ut. Corporis ipsa qui ipsum aut sit sunt. Iste est ea doloribus aut accusantium.','vitae praesentium','1993-10-24',7,1,NULL,NULL),(67,'Perferendis aperiam corporis.','Ipsam officiis id et recusandae non non. Et molestias quae enim illo necessitatibus.','consequuntur','1980-10-29',9,4,NULL,NULL),(68,'Velit iusto voluptates aut.','Qui laborum veritatis quis asperiores nemo quaerat pariatur. Quod tempore ducimus dolorem aut et alias. Eveniet aut magnam asperiores vitae totam occaecati est. Est magni ea sit quia dicta molestiae.','sed','1980-08-30',3,2,NULL,NULL),(69,'Voluptatem occaecati nostrum nam repudiandae.','Architecto nihil corrupti rerum aut quaerat aliquam. Vitae enim nostrum quia quas qui molestiae quia. Est sapiente iste reprehenderit vel magnam ut veniam. Neque vel fugit veniam.','ut nobis','2009-07-03',11,4,NULL,NULL),(70,'Sed placeat qui ducimus.','Aut nulla cumque excepturi ea. A consequatur quo molestias molestiae. Consequatur aut dolorum voluptatem laudantium.','voluptatum quis','1980-12-21',5,2,NULL,NULL),(71,'Sapiente enim aut sapiente.','Omnis ea odio porro non consequatur. Aut repellendus aliquam at rerum architecto perspiciatis. Autem sit voluptas incidunt unde porro.','ut','2019-10-24',9,1,NULL,NULL),(72,'Voluptas natus ipsam doloremque soluta et.','Commodi corporis suscipit nam non dolores. Vitae id et itaque aut excepturi saepe explicabo. Labore eligendi modi dicta modi laboriosam ullam odio.','earum doloremque','2008-09-19',4,2,NULL,NULL),(73,'Delectus expedita reprehenderit repudiandae dolor.','Vitae quia autem saepe ipsum. Impedit quas ullam et sunt consequatur dolorum. Eos optio dignissimos qui nisi autem libero eos officiis. Voluptas vel illo voluptatem voluptates velit assumenda qui dolor.','eum maiores','2013-02-24',10,3,NULL,NULL),(74,'Est sapiente provident omnis voluptatibus impedit.','Exercitationem consequatur mollitia aut adipisci rerum. Sed qui eum provident fuga tempore temporibus in. Nihil sed recusandae voluptatem quia sint qui et. Cum a cumque ullam fugiat nihil.','assumenda sunt','1973-06-08',2,3,NULL,NULL),(75,'Consectetur reprehenderit esse aut.','Accusantium est corporis ut officia voluptatem recusandae. Et debitis perferendis aliquam inventore. Quia omnis libero aut provident enim aut. Et aut eaque deserunt expedita.','ad','2011-03-08',6,1,NULL,NULL),(76,'Ut aut architecto error eos.','Et consequatur ab odio deserunt deleniti. Quam dolorum illo aperiam voluptatem ea tenetur. Ea amet quasi omnis.','ut et','1992-02-13',6,2,NULL,NULL),(77,'Non earum quia et non.','Voluptate minima eos officia voluptatem corrupti quibusdam corrupti. Est molestias pariatur iste blanditiis. Qui exercitationem iste sint inventore.','est','2000-12-31',9,3,NULL,NULL),(78,'Est et voluptate sed.','Ducimus similique cumque rem ducimus. Quis nostrum repellendus quos numquam vitae aspernatur molestiae. Quaerat distinctio excepturi ea qui ex ipsa ipsam.','consequatur molestiae','2014-05-15',3,4,NULL,NULL),(79,'Aliquam est itaque magnam.','Accusamus sint nihil sit minima. Nihil quisquam quisquam eligendi quod. Enim quo doloremque perferendis facere ea. Officia corrupti debitis sit modi et.','perspiciatis blanditiis','2001-09-16',2,2,NULL,NULL),(80,'Sint et dolor quidem natus.','Dicta autem possimus distinctio. Non vero quisquam officiis suscipit mollitia placeat minima. Culpa est quo sed debitis esse eos a. Nisi perspiciatis facere in sed esse vel. Magnam consectetur laudantium eius omnis eum.','vel delectus','1979-03-05',4,4,NULL,NULL),(81,'Commodi minima quis optio nam.','Omnis inventore aut dolore veritatis sed harum modi. Tempora deserunt eos omnis maxime hic accusamus. Et recusandae ullam voluptatem dolorem eos ipsam. Minus odio ut est sequi voluptates voluptates ut.','aliquam eius','1988-12-03',10,3,NULL,NULL),(82,'Dolores accusantium consequuntur facere.','Voluptatem optio qui et beatae natus excepturi et. Laborum ut consequatur quis. Et est ut et ea et et.','quia sunt','2003-02-18',2,3,NULL,NULL),(83,'Aliquid molestiae et.','Iste deserunt nemo sequi non qui. Officiis dolores molestias vero velit ex ut voluptate. Aut ut fuga et hic corrupti.','quibusdam','2016-09-24',7,3,NULL,NULL),(84,'Corrupti nesciunt ut quo et.','Quod voluptatem alias sit quaerat eum itaque incidunt. Reiciendis architecto nihil eum quos. Qui culpa eveniet tenetur voluptatibus temporibus harum recusandae sapiente.','ducimus','2005-09-26',3,1,NULL,NULL),(85,'Fuga ab quidem quaerat.','Rerum doloremque fugiat illo omnis voluptatum. Delectus eum consequatur qui voluptatem laudantium.','qui','1991-07-18',5,1,NULL,NULL),(86,'Expedita eius enim aut.','Qui aut sunt et delectus explicabo voluptatem eaque aperiam. Debitis voluptatem commodi ab facilis. Corrupti iusto id in.','maiores','1996-08-08',8,4,NULL,NULL),(87,'Consequatur ducimus et.','Mollitia reiciendis veritatis voluptatem eligendi eius. Voluptatem sunt nisi porro quis optio magnam aut. Et aut inventore qui rerum laudantium.','fugit','2015-01-16',8,4,NULL,NULL),(88,'Sit distinctio quis recusandae.','Eveniet dolorem reiciendis eos magni praesentium. Alias aut sed ut ad. Similique omnis iure libero. Nobis sit quis quaerat quibusdam quam quisquam.','odio','2011-03-29',6,3,NULL,NULL),(89,'Repudiandae ut perferendis saepe.','Cupiditate velit neque officiis ut. Ut et sit distinctio non sapiente reiciendis ut qui. Reprehenderit odio eveniet consequuntur dicta occaecati quia.','officiis aut','1997-10-13',11,3,NULL,NULL),(90,'Atque fugit aut.','Sint dolor enim voluptatem iusto soluta. Rerum commodi velit ut nihil ipsam. Optio voluptatem exercitationem explicabo voluptatibus.','ducimus laboriosam','1987-07-10',4,3,NULL,NULL),(91,'Repellat reiciendis ut eos eos.','Possimus consequatur veniam aliquam accusantium. Aut eos nam officiis odio molestiae quia explicabo. Aperiam nobis voluptas maiores ab quia voluptate.','id voluptatem','1975-11-04',11,2,NULL,NULL),(92,'Magni dolor velit tempore.','Iusto ut consequatur et. Dolorem maxime voluptate distinctio deserunt eveniet. Voluptatum cupiditate aut ut.','laudantium impedit','1984-01-09',10,2,NULL,NULL),(93,'Sit aut quia repudiandae aut.','Nulla nobis velit reprehenderit fuga similique id quia. Facilis hic error facilis dolorum et ut aut. Natus aspernatur excepturi ipsa velit molestias voluptatum. Eos dolores tempore voluptas vel hic in quis. Corporis sequi quis minima eum unde optio.','vel sapiente','1990-03-25',4,1,NULL,NULL),(94,'Voluptatum nemo sed explicabo corporis.','Tempora provident quaerat maxime culpa et officiis. Quibusdam optio perferendis vel repellendus est iste. Sequi perspiciatis illum ullam quam ut quod molestiae.','distinctio numquam','1992-05-29',3,4,NULL,NULL),(95,'Illo qui aut enim exercitationem officia.','Enim neque maiores et vitae. Exercitationem praesentium doloremque aperiam quam. Nostrum ut qui blanditiis accusantium. Omnis officiis dolor sit magni animi minima.','eligendi numquam','1975-01-25',2,2,NULL,NULL),(96,'Voluptas animi eos enim dignissimos.','Voluptate id voluptatem cumque iste enim assumenda. Nemo eos ut ipsa aliquam reprehenderit enim atque. Distinctio corporis perferendis labore blanditiis.','animi','1998-03-21',8,1,NULL,NULL),(97,'Vero vitae aut modi ipsam.','Saepe accusamus excepturi aut debitis vitae. Et eos delectus aperiam dolore accusantium nihil omnis. Aliquam optio consequatur ea quibusdam accusantium. Corrupti occaecati ut repellendus.','molestiae fugit','2004-06-30',2,1,NULL,NULL),(98,'Aperiam iusto occaecati est aut.','Sequi qui ipsam rerum nisi et libero voluptate. Voluptatibus non autem non non quasi quod magni rerum. Voluptatem ut deserunt dolor et ut. Et voluptates ad voluptatibus consequatur doloribus.','placeat','1986-02-13',8,3,NULL,NULL),(99,'Molestias ullam et at ea.','Libero et ut ratione cumque aut cupiditate quam. Maiores qui id iure doloribus debitis est aut. Et animi incidunt et vel ipsa ut ratione asperiores. Excepturi aut ipsa at et quia culpa. Est similique et repudiandae tenetur aspernatur nemo.','dolorum','2007-04-28',7,4,NULL,NULL),(100,'Veniam at dignissimos.','Voluptates quia laudantium provident delectus. Voluptatem illum sint sit molestiae nesciunt exercitationem facilis sunt. Et qui sit eum omnis amet.','repudiandae explicabo','1996-05-05',4,2,NULL,NULL);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse bread 1','web','2022-01-22 19:37:12','2022-01-22 19:37:12'),(2,'read bread 1','web','2022-01-22 19:37:12','2022-01-22 19:37:12'),(3,'edit bread 1','web','2022-01-22 19:37:12','2022-01-22 19:37:12'),(4,'add bread 1','web','2022-01-22 19:37:12','2022-01-22 19:37:12'),(5,'delete bread 1','web','2022-01-22 19:37:12','2022-01-22 19:37:12');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_hierarchy`
--

DROP TABLE IF EXISTS `role_hierarchy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_hierarchy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `hierarchy` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_hierarchy`
--

LOCK TABLES `role_hierarchy` WRITE;
/*!40000 ALTER TABLE `role_hierarchy` DISABLE KEYS */;
INSERT INTO `role_hierarchy` VALUES (1,1,1),(2,2,2),(4,4,3);
/*!40000 ALTER TABLE `role_hierarchy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2022-01-22 19:37:11','2022-01-22 19:37:11'),(2,'manager','web','2022-01-22 19:37:11','2022-01-22 20:34:20'),(4,'staff','web','2022-01-22 20:15:06','2022-01-22 20:15:06');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'ongoing','badge badge-pill badge-primary'),(2,'stopped','badge badge-pill badge-secondary'),(3,'completed','badge badge-pill badge-success'),(4,'expired','badge badge-pill badge-warning');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi_id` int(3) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `tipe` varchar(45) DEFAULT NULL,
  `user_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuroles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin','2022-01-22 19:37:11','$2y$10$f/12isrBwTplcb2LQHdOdOvN9LYWHqsMG40zuvCVNa3F4TunhWaxq','user,admin','Uni8VTSxqZKkyjOiPVd4stftOatqPDo6NoBTWLIokruYlM6YcgmGD4ztSlvH','data/akun_profie/QWRtaW4=.png','2022-01-22 19:37:11','2022-01-23 02:37:11',NULL),(12,'Nama Manager','manager',NULL,'$2y$10$f/12isrBwTplcb2LQHdOdOvN9LYWHqsMG40zuvCVNa3F4TunhWaxq','manager',NULL,'data/akun_profie/TmFtYSBNYW5hZ2Vy.png','2022-01-22 19:49:15','2022-01-23 02:49:15',NULL),(13,'Nama Staff','staff',NULL,'$2y$10$aOpUitjP3EoGDLVodry4x..4OxElHQectEDWX2nbD5q1t1cL7egMW','user',NULL,'data/akun_profie/TmFtYSBTdGFmZg==.png','2022-03-14 20:58:22','2022-03-15 03:58:22',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-17 13:12:43
